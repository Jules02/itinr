/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/css/concepteur_style.css":
/*!*****************************************!*\
  !*** ./assets/css/concepteur_style.css ***!
  \*****************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

var globalPoly;
var poly;

var pathArray = [];

var map;
var geoPos;

var markerStart = "{{ asset('images/marker.png') }}"; //icone de marqueur de début
var markerVide = "{{ asset('images/empty.png') }}"; //pour ne pas avoir de marqueur pour chaque point (à ameliorer)

var firstPoint; //premier point à qui l'on donnera un skin différent (marqueur vert)
var lastPoint; //dernier point à avoir été placé (dernieres coords, pas dernier marqueur)
var marker;
var markers = []; //array contenant l'ensemble des marqueurs
var firstMarker; //premier marqueur (à ne pas confondre avec firstPoint qui contient les coords de notre premier point)
var distanceKmFloat; //distance en km
var distanceArrondie;

var vitesseVelo = 20;
var vitesseFooting = 13;
var vitesseMarche = 6;

function initMap() {

    var mapDiv = document.getElementById("map");
    //je récupére mon element avec l'id map
    var windowHeight = window.innerHeight;
    //je prend la hauteur de la fenêtre
    var tailleVoulu = windowHeight - 80 + 'px';
    //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
    mapDiv.style.height = tailleVoulu;
    //c'est comme si je fais en CSS: 'height: tailleVoulu;'

    //definir taille du menu gauche
    var menuGauche = document.getElementById('menuGauche');
    menuGauche.style.height = tailleVoulu;

    //on veut centrer la carte sur notre position si la geolocalisation est activée
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            //recupère notre position
            geoPos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            map.setCenter(geoPos); //centre la carte
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
        handleLocationError(false, infoWindow, map.getCenter());
    }

    map = new google.maps.Map(document.getElementById('map'), { //recupére la div #map et la transforme en objet map, stocké dans la var map
        zoom: 14, //Définie le zoom par défaut
        draggableCursor: "crosshair" //on a une croix comme curseur
    });

    globalPoly = new google.maps.Polyline({ //créé déjà la polyline
        strokeColor: '#3BA14C',
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    globalPoly.setMap(map); //on attache l'objet polyline à notre map

    poly = new google.maps.Polyline({ //créé déjà la polyline
        strokeColor: '#3BA14C',
        strokeOpacity: 1.0,
        strokeWeight: 3
    });

    //listeners qui vont écouter les événements click et rightcick pour y lancer des fonctions
    map.addListener('click', addLatLng); //quand on clique sur un endroit de la carte on lance la fonction addLatLng
    map.addListener('rightclick', addLatLngRoute); //quand on clique droit sur un endroit on lance la fonction addLatLngRoute


    //Ici, on va transformer nos champs HTML (que l'on va recupérer avec getElementById) en "contrôles" de la map. Pour l'API, un contrôle est par exemple le bouton plein écran en haut à droite. C'est le seul moyen potable de faire passer des boutons sur une carte.

    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input); //on définit que notre input est une search box (qui va nous permettre de rentrer notre localisation avec l'autocomplétion)
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); //ce contrôle se positionnera en haut à gauche


    var deleteAllButton = document.getElementById('deleteAllButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(deleteAllButton);

    var deleteLastButton = document.getElementById('deleteLastButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(deleteLastButton);

    var closeLoopButton = document.getElementById('closeLoopButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(closeLoopButton);

    var centerMap = document.getElementById('centerMap');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerMap);

    var selectModeSuivi = document.getElementById('selectModeSuivi');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(selectModeSuivi);

    var savePath = document.getElementById('savePath');
    map.controls[google.maps.ControlPosition.RIGHT].push(savePath);

    var boutonMenuLateral = document.getElementById('boutonMenuLateral');
    map.controls[google.maps.ControlPosition.LEFT].push(boutonMenuLateral);

    //toute cette dernière section se rapporte à la searchbox (localisation)

    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length === 0) {
            return;
        }

        var bounds = new google.maps.LatLngBounds();

        places.forEach(function (place) {
            if (!place.geometry) {
                console.log("Le lieu ne retourne rien");
                return;
            }

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });

        map.fitBounds(bounds);
    });

    google.maps.event.addListener(map, 'maptypeid_changed', function () {
        var mapType = map.getMapTypeId();

        if (mapType == 'hybrid') {
            globalPoly.setOptions({ strokeColor: '#FFFFFF' });
            firstMarker.setOptions({ icon: "{{ asset('images/marker_white.png') }}" });
        } else {
            globalPoly.setOptions({ strokeColor: '#3BA14C' });
            firstMarker.setOptions({ icon: "{{ asset('images/marker.png') }}" });
        }
    });
}
/************* FIN INITMAP *************/

// Fonction qui sera executée lors du clique d'un endroit de la carte
function addLatLng(event) {
    var monPath = globalPoly.getPath(); //on récupére le parcours (si ce n'est pas le premier point)

    monPath.push(event.latLng);

    //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
    if (monPath.getLength() === 1) {
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + monPath.getLength(), //path.getLength est le nombre de notre point
            map: map,
            icon: markerStart //le marqueur aura notre image de drapeau
        });

        firstPoint = event.latLng;

        lastPoint = event.latLng;

        firstMarker = marker;
    } else {
        //sinon cela veut dire que ce n'est pas le premier marqueur et on ne lui donne pas de skin (empty.png)
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + monPath.getLength(),
            map: map,
            icon: markerVide
        });

        markers.push(marker); //on met notre tout nouveau marker dans le tableau markers

        lastPoint = event.latLng;

        pathArray = monPath.getArray();

        var distance = google.maps.geometry.spherical.computeLength(pathArray); //calcule la distance du parcours en comptant tout les points
        distanceArrondie = Math.round(distance); //arrondi la distance à l'unité près
        distanceKmFloat = distanceArrondie / 1000;
    }

    var div = document.getElementById("textDiv"); //recupere la div textDiv
    if (distanceArrondie == undefined || distanceArrondie == 0) {
        //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
        div.textContent = "Vous n'avez placé qu'un seul marqueur";
    } else {
        div.textContent = "Il y a " + distanceKmFloat + " kilomètres entre le premier et le dernier point";
        //on affiche la distance arrondie et au km dans la div textDiv
        div.title = "Ou " + distanceArrondie + " mètres";

        var menuGaucheInterieur = document.getElementById("menuGauche-interieur");
        menuGaucheInterieur.style.display = "block";

        var menuGaucheMessage = document.getElementById("menuGauche-message");
        menuGaucheMessage.style.display = "none";
    }

    updateTempsGlobal(distanceKmFloat);
}
/************* FIN ADDLATLNG *************/

var directionsService;

function calculateRoute(directionsService, lastPoint, newPoint) {

    var monPath = globalPoly.getPath();

    var rendererOptions = {
        polylineOptions: { strokeColor: '#3BA14C' },
        suppressMarkers: true
    };

    var directionsService = new google.maps.DirectionsService();

    var selectModeSuivi = document.getElementById('selectModeSuivi');

    var travelMode = selectModeSuivi.options[selectModeSuivi.selectedIndex].value; //ici on met que le mode de transport est la marche mais in pourra plus tard laisser à l'utilisateur de choisir le mode
    var request = {
        origin: lastPoint,
        destination: newPoint,
        travelMode: google.maps.TravelMode[travelMode]
    };

    directionsService.route(request, function (response, status) {
        if (status == 'OK') {
            //s'il n'y a aucun problème avec l'itinéraire
            var pointsArray = response.routes[0].overview_path;

            for (var i = 0; i < pointsArray.length; i++) {
                monPath.push(pointsArray[i]);
            }

            updateRouteLength();
        } else {
            alert("Il n'y a pas de chemin pour aller à cet endroit");
        }
    });
}
/************* FIN CALCULROUTE *************/

//lorsque l'on right click sur un endroit on va ralier le dernier point créé à ce tout nouveau point mais en affichant l'itinéraire en passant par la route ou les chemins (pas en créant une ligne droite)
function addLatLngRoute(event) {

    newPoint = event.latLng; // Coords du point qui vient d'etre rightclické

    calculateRoute(directionsService, lastPoint, newPoint); //fonction qui calcule et affiche l'itinéraire

    var monPath = globalPoly.getPath();

    marker = new google.maps.Marker({
        position: event.latLng,
        title: '#' + monPath.getLength(),
        map: map,
        icon: markerVide
    });

    poly.setMap(map); //on affiche la polyline sur la map

    markers.push(marker); //on met notre tout nouveau marker dans le tableau markers

    lastPoint = event.latLng;
}
/************* FIN ADDLATLNGROUTE *************/

//met à jour la zone de texte en bas de la carte qui donne la distance du parcours
function updateRouteLength() {

    var monPath = globalPoly.getPath();

    pathArray = monPath.getArray();

    var distance = google.maps.geometry.spherical.computeLength(pathArray); //calcule la distance du parcours en comptant tout les points
    distanceArrondie = Math.round(distance); //arrondi la distance à l'unité près
    distanceKmFloat = distanceArrondie / 1000;

    var div = document.getElementById("textDiv"); //recupere la div textDiv
    if (distanceArrondie == undefined || distanceArrondie == 0) {
        //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
        div.textContent = "Vous n'avez placé qu'un seul marqueur";
    } else {
        div.textContent = "Il y a " + distanceKmFloat + " kilomètres entre le premier et le dernier point";
        //on affiche la distance arrondie et au km dans la div textDiv
        div.title = "Ou " + distanceArrondie + " mètres";

        var menuGaucheInterieur = document.getElementById("menuGauche-interieur");
        menuGaucheInterieur.style.display = "block";

        var menuGaucheMessage = document.getElementById("menuGauche-message");
        menuGaucheMessage.style.display = "none";
    }

    updateTempsGlobal(distanceKmFloat);
}
/************* FIN UPDATEROUTELENGTH *************/

//return 23 si on lui passe x.23
function getDecimal(n) {
    return n - Math.floor(n);
}

function getPartieDecimale(n) {
    return Math.round(Math.round(100 * getDecimal(n)) / 100 * 100 * 60 / 100);
}

function updateTempsGlobal(distanceKmFloat) {
    //velo
    updateTempsNecessaire(distanceKmFloat, vitesseVelo, "tempsVelo");

    //footing
    updateTempsNecessaire(distanceKmFloat, vitesseFooting, "tempsFooting");

    //marche
    updateTempsNecessaire(distanceKmFloat, vitesseMarche, "tempsMarche");
}

function updateTempsNecessaire(distanceKmFloat, vitesseMoyenne, sport) {
    var tempsHTML = document.getElementById(sport); //on récup l'élément p tempsVelo

    var temps = distanceKmFloat / vitesseMoyenne; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
    var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60)) / 100; //on sort 52.31 (52 minutes 31 secondes)
    var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);

    var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes); //on sort juste 52

    if (tempsEnMinutes === 1) {
        var minuteOrthographe = " minute";
    } else {
        var minuteOrthographe = " minutes";
    }

    if (secondesTemps === 1) {
        var secondeOrthographe = " seconde";
    } else {
        var secondeOrthographe = " secondes";
    }

    if (tempsEnMinutes < 1) {
        tempsHTML.textContent = secondesTemps + secondeOrthographe;
        tempsHTML.title = "";
    } else {
        //si il y a plus de 60 minutes on affiche en heures et minutes
        if (tempsEnMinutes < 60) {
            tempsHTML.textContent = tempsEnMinutes + minuteOrthographe;
            tempsHTML.title = "Et " + secondesTemps + secondeOrthographe;
        } else {
            var tempsEnHeuresFloat = tempsEnMinutes / 60;
            var minutesDuTempsPourHeures = getPartieDecimale(tempsEnHeuresFloat); //on recup les minutes
            var tempsEnHeures = Math.round(tempsEnHeuresFloat);

            if (minutesDuTempsPourHeures === 1) {
                var minuteOrthographe = " minute";
            } else {
                var minuteOrthographe = " minutes";
            }

            if (tempsEnHeures === 1) {
                var heureOrthographe = " heure";
            } else {
                var heureOrthographe = " heures";
            }

            tempsHTML.textContent = tempsEnHeures + heureOrthographe + " et " + minutesDuTempsPourHeures + minuteOrthographe; //on affiche
        }
    }
}
/************* FIN UPDATETEMPSNECESSAIRE *************/

var recup;

function dernierElem(tbl) {
    var tbl = tbl;
    var tblLength = tbl.length;
    var pos = tblLength - 1;
    return tbl[pos];
}

//erreur avec erreur de geolocalisation
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ? 'Erreur: Le service de Géolocalisation a echoué.' : 'Erreur: Votre naviguateur ne support pas la Géolocalisation.');
}

//fonction qui va nous créer un setMap mais pour tous les marqueurs
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

//Fonctions des contrôles

function deleteLastPoint() {
    var monPath = globalPoly.getPath();

    monPath.pop(); //on supprime le dernier élément du tableau path

    var pathArray = monPath.getArray();
    lastPoint = dernierElem(pathArray);

    var pathLength = monPath.getLength();

    if (pathLength === 0) {
        deletePoints();
    }

    if (pathLength === 1) {
        var menuGaucheInterieur = document.getElementById("menuGauche-interieur");
        menuGaucheInterieur.style.display = "none";

        var menuGaucheMessage = document.getElementById("menuGauche-message");
        menuGaucheMessage.style.display = "block";
    }

    updateRouteLength();

    updateTempsGlobal(distanceKmFloat);
}

function deletePoints() {
    firstMarker.setMap(null);
    setMapOnAll(null);
    markers = [];
    globalPoly.setMap(null);

    monPath = globalPoly.getPath();
    monPath = [];
    lastPoint = "";

    pathArray = [];

    var div = document.getElementById("textDiv");
    div.textContent = "Vous n'avez pas placé de marqueur";

    distanceArrondie = 0;
    distanceKmFloat = 0;

    globalPoly = new google.maps.Polyline({ //on recréé une polyline pour que lorsque que l'on supprime l'ancienne on ne reparte pas sur l'ancienne
        strokeColor: '#3BA14C',
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    globalPoly.setMap(map);

    var menuGaucheInterieur = document.getElementById("menuGauche-interieur");
    menuGaucheInterieur.style.display = "none";

    var menuGaucheMessage = document.getElementById("menuGauche-message");
    menuGaucheMessage.style.display = "block";
}

function fermerBoucle() {
    calculateRoute(directionsService, lastPoint, firstPoint);
}

function centerMap() {
    //on recentre la carte sur notre localisation (si on l'a autorisé)
    map.setCenter(geoPos);
}

var menuGaucheBouton = document.getElementById('boutonMenuLateral');
var menuGauche = document.getElementById('menuGauche');
var mapFilter = document.getElementById('mapFilter');

menuGaucheBouton.onclick = function () {
    menuGauche.style.display = "block";
    mapFilter.style.display = "block";
};

mapFilter.onclick = function () {
    menuGauche.style.display = "none";
    mapFilter.style.display = "none";
};

function showArray() {
    //alert(pathArray);

    var monPath = globalPoly.getPath();
    alert(monPath);
}

/***** RACCOURCIS CLAVIER ********/
Mousetrap.bind(['ctrl+z'], function () {
    deleteLastPoint();
});

//zoom/dezoom avec Ctrl Alt +/- ou Ctrl +/-
var zoom = 14;

Mousetrap.bind(['ctrl+alt++', 'ctrl++'], function () {
    if (zoom <= 23) {
        zoom++;
        map.setZoom(zoom);
    } else {
        alert('Impossible de zoomer davantage');
    }
});

Mousetrap.bind(['ctrl+alt+-', 'ctrl+-'], function () {
    if (zoom >= 1) {
        zoom--;
        map.setZoom(zoom);
    } else {
        alert('Impossible de dézoomer davantage');
    }
});

/***/ }),

/***/ 1:
/*!*******************************************************************!*\
  !*** multi ./assets/js/main.js ./assets/css/concepteur_style.css ***!
  \*******************************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./assets/js/main.js */"./assets/js/main.js");
module.exports = __webpack_require__(/*! ./assets/css/concepteur_style.css */"./assets/css/concepteur_style.css");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgNmFjOGZkZTNiNzJjMzhhMjIxNDMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9jb25jZXB0ZXVyX3N0eWxlLmNzcz8wNzQ1Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9tYWluLmpzIl0sIm5hbWVzIjpbImdsb2JhbFBvbHkiLCJwb2x5IiwicGF0aEFycmF5IiwibWFwIiwiZ2VvUG9zIiwibWFya2VyU3RhcnQiLCJtYXJrZXJWaWRlIiwiZmlyc3RQb2ludCIsImxhc3RQb2ludCIsIm1hcmtlciIsIm1hcmtlcnMiLCJmaXJzdE1hcmtlciIsImRpc3RhbmNlS21GbG9hdCIsImRpc3RhbmNlQXJyb25kaWUiLCJ2aXRlc3NlVmVsbyIsInZpdGVzc2VGb290aW5nIiwidml0ZXNzZU1hcmNoZSIsImluaXRNYXAiLCJtYXBEaXYiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwid2luZG93SGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJ0YWlsbGVWb3VsdSIsInN0eWxlIiwiaGVpZ2h0IiwibWVudUdhdWNoZSIsIm5hdmlnYXRvciIsImdlb2xvY2F0aW9uIiwiZ2V0Q3VycmVudFBvc2l0aW9uIiwicG9zaXRpb24iLCJsYXQiLCJjb29yZHMiLCJsYXRpdHVkZSIsImxuZyIsImxvbmdpdHVkZSIsInNldENlbnRlciIsImhhbmRsZUxvY2F0aW9uRXJyb3IiLCJpbmZvV2luZG93IiwiZ2V0Q2VudGVyIiwiZ29vZ2xlIiwibWFwcyIsIk1hcCIsInpvb20iLCJkcmFnZ2FibGVDdXJzb3IiLCJQb2x5bGluZSIsInN0cm9rZUNvbG9yIiwic3Ryb2tlT3BhY2l0eSIsInN0cm9rZVdlaWdodCIsInNldE1hcCIsImFkZExpc3RlbmVyIiwiYWRkTGF0TG5nIiwiYWRkTGF0TG5nUm91dGUiLCJpbnB1dCIsInNlYXJjaEJveCIsInBsYWNlcyIsIlNlYXJjaEJveCIsImNvbnRyb2xzIiwiQ29udHJvbFBvc2l0aW9uIiwiVE9QX0xFRlQiLCJwdXNoIiwiZGVsZXRlQWxsQnV0dG9uIiwiQk9UVE9NIiwiZGVsZXRlTGFzdEJ1dHRvbiIsImNsb3NlTG9vcEJ1dHRvbiIsImNlbnRlck1hcCIsInNlbGVjdE1vZGVTdWl2aSIsInNhdmVQYXRoIiwiUklHSFQiLCJib3V0b25NZW51TGF0ZXJhbCIsIkxFRlQiLCJzZXRCb3VuZHMiLCJnZXRCb3VuZHMiLCJnZXRQbGFjZXMiLCJsZW5ndGgiLCJib3VuZHMiLCJMYXRMbmdCb3VuZHMiLCJmb3JFYWNoIiwicGxhY2UiLCJnZW9tZXRyeSIsImNvbnNvbGUiLCJsb2ciLCJ2aWV3cG9ydCIsInVuaW9uIiwiZXh0ZW5kIiwibG9jYXRpb24iLCJmaXRCb3VuZHMiLCJldmVudCIsIm1hcFR5cGUiLCJnZXRNYXBUeXBlSWQiLCJzZXRPcHRpb25zIiwiaWNvbiIsIm1vblBhdGgiLCJnZXRQYXRoIiwibGF0TG5nIiwiZ2V0TGVuZ3RoIiwiTWFya2VyIiwidGl0bGUiLCJnZXRBcnJheSIsImRpc3RhbmNlIiwic3BoZXJpY2FsIiwiY29tcHV0ZUxlbmd0aCIsIk1hdGgiLCJyb3VuZCIsImRpdiIsInVuZGVmaW5lZCIsInRleHRDb250ZW50IiwibWVudUdhdWNoZUludGVyaWV1ciIsImRpc3BsYXkiLCJtZW51R2F1Y2hlTWVzc2FnZSIsInVwZGF0ZVRlbXBzR2xvYmFsIiwiZGlyZWN0aW9uc1NlcnZpY2UiLCJjYWxjdWxhdGVSb3V0ZSIsIm5ld1BvaW50IiwicmVuZGVyZXJPcHRpb25zIiwicG9seWxpbmVPcHRpb25zIiwic3VwcHJlc3NNYXJrZXJzIiwiRGlyZWN0aW9uc1NlcnZpY2UiLCJ0cmF2ZWxNb2RlIiwib3B0aW9ucyIsInNlbGVjdGVkSW5kZXgiLCJ2YWx1ZSIsInJlcXVlc3QiLCJvcmlnaW4iLCJkZXN0aW5hdGlvbiIsIlRyYXZlbE1vZGUiLCJyb3V0ZSIsInJlc3BvbnNlIiwic3RhdHVzIiwicG9pbnRzQXJyYXkiLCJyb3V0ZXMiLCJvdmVydmlld19wYXRoIiwiaSIsInVwZGF0ZVJvdXRlTGVuZ3RoIiwiYWxlcnQiLCJnZXREZWNpbWFsIiwibiIsImZsb29yIiwiZ2V0UGFydGllRGVjaW1hbGUiLCJ1cGRhdGVUZW1wc05lY2Vzc2FpcmUiLCJ2aXRlc3NlTW95ZW5uZSIsInNwb3J0IiwidGVtcHNIVE1MIiwidGVtcHMiLCJ0ZW1wc0VuTWludXRlc0F2ZWNTZWNvbmRlcyIsInNlY29uZGVzVGVtcHMiLCJ0ZW1wc0VuTWludXRlcyIsIm1pbnV0ZU9ydGhvZ3JhcGhlIiwic2Vjb25kZU9ydGhvZ3JhcGhlIiwidGVtcHNFbkhldXJlc0Zsb2F0IiwibWludXRlc0R1VGVtcHNQb3VySGV1cmVzIiwidGVtcHNFbkhldXJlcyIsImhldXJlT3J0aG9ncmFwaGUiLCJyZWN1cCIsImRlcm5pZXJFbGVtIiwidGJsIiwidGJsTGVuZ3RoIiwicG9zIiwiYnJvd3Nlckhhc0dlb2xvY2F0aW9uIiwic2V0UG9zaXRpb24iLCJzZXRDb250ZW50Iiwic2V0TWFwT25BbGwiLCJkZWxldGVMYXN0UG9pbnQiLCJwb3AiLCJwYXRoTGVuZ3RoIiwiZGVsZXRlUG9pbnRzIiwiZmVybWVyQm91Y2xlIiwibWVudUdhdWNoZUJvdXRvbiIsIm1hcEZpbHRlciIsIm9uY2xpY2siLCJzaG93QXJyYXkiLCJNb3VzZXRyYXAiLCJiaW5kIiwic2V0Wm9vbSJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtB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LFFBQUdqSSxRQUFRLEVBQVgsRUFBYztBQUNWQTtBQUNBekMsWUFBSTJLLE9BQUosQ0FBWWxJLElBQVo7QUFDSCxLQUhELE1BR0s7QUFDRDJGLGNBQU0sZ0NBQU47QUFDSDtBQUNKLENBUEQ7O0FBU0FxQyxVQUFVQyxJQUFWLENBQWUsQ0FBQyxZQUFELEVBQWUsUUFBZixDQUFmLEVBQXlDLFlBQVc7QUFDaEQsUUFBR2pJLFFBQVEsQ0FBWCxFQUFhO0FBQ1RBO0FBQ0F6QyxZQUFJMkssT0FBSixDQUFZbEksSUFBWjtBQUNILEtBSEQsTUFHSztBQUNEMkYsY0FBTSxrQ0FBTjtBQUNIO0FBQ0osQ0FQRCxFIiwiZmlsZSI6ImNvbmNlcHRldXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvYnVpbGQvXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gMSk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgNmFjOGZkZTNiNzJjMzhhMjIxNDMiLCIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIC4vYXNzZXRzL2Nzcy9jb25jZXB0ZXVyX3N0eWxlLmNzc1xuLy8gbW9kdWxlIGlkID0gLi9hc3NldHMvY3NzL2NvbmNlcHRldXJfc3R5bGUuY3NzXG4vLyBtb2R1bGUgY2h1bmtzID0gMCIsInZhciBnbG9iYWxQb2x5O1xyXG52YXIgcG9seTtcclxuXHJcbnZhciBwYXRoQXJyYXkgPSBbXTtcclxuXHJcbnZhciBtYXA7XHJcbnZhciBnZW9Qb3M7XHJcblxyXG52YXIgbWFya2VyU3RhcnQgPSBcInt7IGFzc2V0KCdpbWFnZXMvbWFya2VyLnBuZycpIH19XCI7ICAgLy9pY29uZSBkZSBtYXJxdWV1ciBkZSBkw6lidXRcclxudmFyIG1hcmtlclZpZGUgPSBcInt7IGFzc2V0KCdpbWFnZXMvZW1wdHkucG5nJykgfX1cIjsgICAvL3BvdXIgbmUgcGFzIGF2b2lyIGRlIG1hcnF1ZXVyIHBvdXIgY2hhcXVlIHBvaW50ICjDoCBhbWVsaW9yZXIpXHJcblxyXG52YXIgZmlyc3RQb2ludDsgICAgLy9wcmVtaWVyIHBvaW50IMOgIHF1aSBsJ29uIGRvbm5lcmEgdW4gc2tpbiBkaWZmw6lyZW50IChtYXJxdWV1ciB2ZXJ0KVxyXG52YXIgbGFzdFBvaW50OyAgICAvL2Rlcm5pZXIgcG9pbnQgw6AgYXZvaXIgw6l0w6kgcGxhY8OpIChkZXJuaWVyZXMgY29vcmRzLCBwYXMgZGVybmllciBtYXJxdWV1cilcclxudmFyIG1hcmtlcjtcclxudmFyIG1hcmtlcnMgPSBbXTsgICAgLy9hcnJheSBjb250ZW5hbnQgbCdlbnNlbWJsZSBkZXMgbWFycXVldXJzXHJcbnZhciBmaXJzdE1hcmtlcjsgICAvL3ByZW1pZXIgbWFycXVldXIgKMOgIG5lIHBhcyBjb25mb25kcmUgYXZlYyBmaXJzdFBvaW50IHF1aSBjb250aWVudCBsZXMgY29vcmRzIGRlIG5vdHJlIHByZW1pZXIgcG9pbnQpXHJcbnZhciBkaXN0YW5jZUttRmxvYXQ7ICAgICAvL2Rpc3RhbmNlIGVuIGttXHJcbnZhciBkaXN0YW5jZUFycm9uZGllO1xyXG5cclxudmFyIHZpdGVzc2VWZWxvID0gMjA7XHJcbnZhciB2aXRlc3NlRm9vdGluZyA9IDEzO1xyXG52YXIgdml0ZXNzZU1hcmNoZSA9IDY7XHJcblxyXG5cclxuXHJcbmZ1bmN0aW9uIGluaXRNYXAoKSB7XHJcblxyXG4gICAgdmFyIG1hcERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWFwXCIpO1xyXG4gICAgLy9qZSByw6ljdXDDqXJlIG1vbiBlbGVtZW50IGF2ZWMgbCdpZCBtYXBcclxuICAgIHZhciB3aW5kb3dIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICAvL2plIHByZW5kIGxhIGhhdXRldXIgZGUgbGEgZmVuw6p0cmVcclxuICAgIHZhciB0YWlsbGVWb3VsdSA9ICh3aW5kb3dIZWlnaHQgLSA4MCkgKyAncHgnO1xyXG4gICAgLy9qZSBjYWxjdWxlIHBvdXIgcXVlIG1hIG1hcCBmYXNzZSBoYXV0ZXVyIGRlIGxhIGZlbsOqdHJlIG1vaW5zIGxlIGhlYWRlclxyXG4gICAgbWFwRGl2LnN0eWxlLmhlaWdodCA9IHRhaWxsZVZvdWx1O1xyXG4gICAgLy9jJ2VzdCBjb21tZSBzaSBqZSBmYWlzIGVuIENTUzogJ2hlaWdodDogdGFpbGxlVm91bHU7J1xyXG5cclxuICAgIC8vZGVmaW5pciB0YWlsbGUgZHUgbWVudSBnYXVjaGVcclxuICAgIHZhciBtZW51R2F1Y2hlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21lbnVHYXVjaGUnKTtcclxuICAgIG1lbnVHYXVjaGUuc3R5bGUuaGVpZ2h0ID0gdGFpbGxlVm91bHU7XHJcblxyXG5cclxuXHJcbiAgICAvL29uIHZldXQgY2VudHJlciBsYSBjYXJ0ZSBzdXIgbm90cmUgcG9zaXRpb24gc2kgbGEgZ2VvbG9jYWxpc2F0aW9uIGVzdCBhY3RpdsOpZVxyXG4gICAgaWYgKG5hdmlnYXRvci5nZW9sb2NhdGlvbikge1xyXG4gICAgICAgIG5hdmlnYXRvci5nZW9sb2NhdGlvbi5nZXRDdXJyZW50UG9zaXRpb24oZnVuY3Rpb24ocG9zaXRpb24peyAgIC8vcmVjdXDDqHJlIG5vdHJlIHBvc2l0aW9uXHJcbiAgICAgICAgICAgIGdlb1BvcyA9IHtcclxuICAgICAgICAgICAgICAgIGxhdDogcG9zaXRpb24uY29vcmRzLmxhdGl0dWRlLFxyXG4gICAgICAgICAgICAgICAgbG5nOiBwb3NpdGlvbi5jb29yZHMubG9uZ2l0dWRlXHJcbiAgICAgICAgICAgIH07XHJcblxyXG4gICAgICAgICAgICBtYXAuc2V0Q2VudGVyKGdlb1Bvcyk7ICAgLy9jZW50cmUgbGEgY2FydGVcclxuXHJcbiAgICAgICAgfSwgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGhhbmRsZUxvY2F0aW9uRXJyb3IodHJ1ZSwgaW5mb1dpbmRvdywgbWFwLmdldENlbnRlcigpKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIC8vIExlIG5hdmlnYXRldXIgbmUgc3VwcG9ydGUgcGFzIGxhIGfDqW9sb2NhbGlzYXRpb24gb3UgZWxsZSBhIMOpdMOpIHJlZnVzw6lcclxuICAgICAgICBoYW5kbGVMb2NhdGlvbkVycm9yKGZhbHNlLCBpbmZvV2luZG93LCBtYXAuZ2V0Q2VudGVyKCkpO1xyXG4gICAgfVxyXG5cclxuICAgIG1hcCA9IG5ldyBnb29nbGUubWFwcy5NYXAoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21hcCcpLCB7ICAgIC8vcmVjdXDDqXJlIGxhIGRpdiAjbWFwIGV0IGxhIHRyYW5zZm9ybWUgZW4gb2JqZXQgbWFwLCBzdG9ja8OpIGRhbnMgbGEgdmFyIG1hcFxyXG4gICAgICAgIHpvb206IDE0LCAgIC8vRMOpZmluaWUgbGUgem9vbSBwYXIgZMOpZmF1dFxyXG4gICAgICAgIGRyYWdnYWJsZUN1cnNvcjogXCJjcm9zc2hhaXJcIiAgIC8vb24gYSB1bmUgY3JvaXggY29tbWUgY3Vyc2V1clxyXG4gICAgfSk7XHJcblxyXG4gICAgZ2xvYmFsUG9seSA9IG5ldyBnb29nbGUubWFwcy5Qb2x5bGluZSh7ICAgLy9jcsOpw6kgZMOpasOgIGxhIHBvbHlsaW5lXHJcbiAgICAgICAgc3Ryb2tlQ29sb3I6ICcjM0JBMTRDJyxcclxuICAgICAgICBzdHJva2VPcGFjaXR5OiAxLjAsXHJcbiAgICAgICAgc3Ryb2tlV2VpZ2h0OiAzXHJcbiAgICB9KTtcclxuICAgIGdsb2JhbFBvbHkuc2V0TWFwKG1hcCk7ICAgLy9vbiBhdHRhY2hlIGwnb2JqZXQgcG9seWxpbmUgw6Agbm90cmUgbWFwXHJcblxyXG4gICAgcG9seSA9IG5ldyBnb29nbGUubWFwcy5Qb2x5bGluZSh7ICAgLy9jcsOpw6kgZMOpasOgIGxhIHBvbHlsaW5lXHJcbiAgICAgICAgc3Ryb2tlQ29sb3I6ICcjM0JBMTRDJyxcclxuICAgICAgICBzdHJva2VPcGFjaXR5OiAxLjAsXHJcbiAgICAgICAgc3Ryb2tlV2VpZ2h0OiAzXHJcbiAgICB9KTtcclxuXHJcbiAgICAvL2xpc3RlbmVycyBxdWkgdm9udCDDqWNvdXRlciBsZXMgw6l2w6luZW1lbnRzIGNsaWNrIGV0IHJpZ2h0Y2ljayBwb3VyIHkgbGFuY2VyIGRlcyBmb25jdGlvbnNcclxuICAgIG1hcC5hZGRMaXN0ZW5lcignY2xpY2snLCBhZGRMYXRMbmcpOyAgICAgLy9xdWFuZCBvbiBjbGlxdWUgc3VyIHVuIGVuZHJvaXQgZGUgbGEgY2FydGUgb24gbGFuY2UgbGEgZm9uY3Rpb24gYWRkTGF0TG5nXHJcbiAgICBtYXAuYWRkTGlzdGVuZXIoJ3JpZ2h0Y2xpY2snLCBhZGRMYXRMbmdSb3V0ZSk7ICAgIC8vcXVhbmQgb24gY2xpcXVlIGRyb2l0IHN1ciB1biBlbmRyb2l0IG9uIGxhbmNlIGxhIGZvbmN0aW9uIGFkZExhdExuZ1JvdXRlXHJcblxyXG5cclxuXHJcbiAgICAvL0ljaSwgb24gdmEgdHJhbnNmb3JtZXIgbm9zIGNoYW1wcyBIVE1MIChxdWUgbCdvbiB2YSByZWN1cMOpcmVyIGF2ZWMgZ2V0RWxlbWVudEJ5SWQpIGVuIFwiY29udHLDtGxlc1wiIGRlIGxhIG1hcC4gUG91ciBsJ0FQSSwgdW4gY29udHLDtGxlIGVzdCBwYXIgZXhlbXBsZSBsZSBib3V0b24gcGxlaW4gw6ljcmFuIGVuIGhhdXQgw6AgZHJvaXRlLiBDJ2VzdCBsZSBzZXVsIG1veWVuIHBvdGFibGUgZGUgZmFpcmUgcGFzc2VyIGRlcyBib3V0b25zIHN1ciB1bmUgY2FydGUuXHJcblxyXG4gICAgdmFyIGlucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3BhYy1pbnB1dCcpO1xyXG4gICAgdmFyIHNlYXJjaEJveCA9IG5ldyBnb29nbGUubWFwcy5wbGFjZXMuU2VhcmNoQm94KGlucHV0KTsgICAvL29uIGTDqWZpbml0IHF1ZSBub3RyZSBpbnB1dCBlc3QgdW5lIHNlYXJjaCBib3ggKHF1aSB2YSBub3VzIHBlcm1ldHRyZSBkZSByZW50cmVyIG5vdHJlIGxvY2FsaXNhdGlvbiBhdmVjIGwnYXV0b2NvbXBsw6l0aW9uKVxyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChpbnB1dCk7ICAgLy9jZSBjb250csO0bGUgc2UgcG9zaXRpb25uZXJhIGVuIGhhdXQgw6AgZ2F1Y2hlXHJcblxyXG5cclxuICAgIHZhciBkZWxldGVBbGxCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlQWxsQnV0dG9uJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkJPVFRPTV0ucHVzaChkZWxldGVBbGxCdXR0b24pO1xyXG5cclxuICAgIHZhciBkZWxldGVMYXN0QnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZUxhc3RCdXR0b24nKTtcclxuICAgIG1hcC5jb250cm9sc1tnb29nbGUubWFwcy5Db250cm9sUG9zaXRpb24uQk9UVE9NXS5wdXNoKGRlbGV0ZUxhc3RCdXR0b24pO1xyXG5cclxuICAgIHZhciBjbG9zZUxvb3BCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VMb29wQnV0dG9uJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkJPVFRPTV0ucHVzaChjbG9zZUxvb3BCdXR0b24pO1xyXG5cclxuXHJcbiAgICB2YXIgY2VudGVyTWFwID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NlbnRlck1hcCcpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChjZW50ZXJNYXApO1xyXG5cclxuXHJcbiAgICB2YXIgc2VsZWN0TW9kZVN1aXZpID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlbGVjdE1vZGVTdWl2aScpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChzZWxlY3RNb2RlU3VpdmkpO1xyXG5cclxuICAgIHZhciBzYXZlUGF0aCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzYXZlUGF0aCcpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5SSUdIVF0ucHVzaChzYXZlUGF0aCk7XHJcblxyXG4gICAgdmFyIGJvdXRvbk1lbnVMYXRlcmFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JvdXRvbk1lbnVMYXRlcmFsJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkxFRlRdLnB1c2goYm91dG9uTWVudUxhdGVyYWwpO1xyXG5cclxuXHJcblxyXG5cclxuICAgIC8vdG91dGUgY2V0dGUgZGVybmnDqHJlIHNlY3Rpb24gc2UgcmFwcG9ydGUgw6AgbGEgc2VhcmNoYm94IChsb2NhbGlzYXRpb24pXHJcblxyXG4gICAgbWFwLmFkZExpc3RlbmVyKCdib3VuZHNfY2hhbmdlZCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHNlYXJjaEJveC5zZXRCb3VuZHMobWFwLmdldEJvdW5kcygpKTtcclxuICAgIH0pO1xyXG5cclxuICAgIHNlYXJjaEJveC5hZGRMaXN0ZW5lcigncGxhY2VzX2NoYW5nZWQnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgcGxhY2VzID0gc2VhcmNoQm94LmdldFBsYWNlcygpO1xyXG5cclxuICAgICAgICBpZiAocGxhY2VzLmxlbmd0aCA9PT0gMCkge1xyXG4gICAgICAgICAgICByZXR1cm47XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICB2YXIgYm91bmRzID0gbmV3IGdvb2dsZS5tYXBzLkxhdExuZ0JvdW5kcygpO1xyXG5cclxuICAgICAgICBwbGFjZXMuZm9yRWFjaChmdW5jdGlvbihwbGFjZSkge1xyXG4gICAgICAgICAgICBpZiAoIXBsYWNlLmdlb21ldHJ5KSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcIkxlIGxpZXUgbmUgcmV0b3VybmUgcmllblwiKTtcclxuICAgICAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgaWYgKHBsYWNlLmdlb21ldHJ5LnZpZXdwb3J0KSB7XHJcbiAgICAgICAgICAgICAgICBib3VuZHMudW5pb24ocGxhY2UuZ2VvbWV0cnkudmlld3BvcnQpO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgYm91bmRzLmV4dGVuZChwbGFjZS5nZW9tZXRyeS5sb2NhdGlvbik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgbWFwLmZpdEJvdW5kcyhib3VuZHMpO1xyXG4gICAgfSk7XHJcblxyXG4gICAgZ29vZ2xlLm1hcHMuZXZlbnQuYWRkTGlzdGVuZXIoIG1hcCwgJ21hcHR5cGVpZF9jaGFuZ2VkJywgZnVuY3Rpb24oKXtcclxuICAgICAgICB2YXIgbWFwVHlwZSA9IG1hcC5nZXRNYXBUeXBlSWQoKTtcclxuXHJcbiAgICAgICAgaWYgKG1hcFR5cGUgPT0gJ2h5YnJpZCcpe1xyXG4gICAgICAgICAgICBnbG9iYWxQb2x5LnNldE9wdGlvbnMoe3N0cm9rZUNvbG9yOiAnI0ZGRkZGRid9KTtcclxuICAgICAgICAgICAgZmlyc3RNYXJrZXIuc2V0T3B0aW9ucyh7aWNvbjogXCJ7eyBhc3NldCgnaW1hZ2VzL21hcmtlcl93aGl0ZS5wbmcnKSB9fVwifSk7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgZ2xvYmFsUG9seS5zZXRPcHRpb25zKHtzdHJva2VDb2xvcjogJyMzQkExNEMnfSk7XHJcbiAgICAgICAgICAgIGZpcnN0TWFya2VyLnNldE9wdGlvbnMoe2ljb246IFwie3sgYXNzZXQoJ2ltYWdlcy9tYXJrZXIucG5nJykgfX1cIn0pO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59XHJcbi8qKioqKioqKioqKioqIEZJTiBJTklUTUFQICoqKioqKioqKioqKiovXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG4vLyBGb25jdGlvbiBxdWkgc2VyYSBleGVjdXTDqWUgbG9ycyBkdSBjbGlxdWUgZCd1biBlbmRyb2l0IGRlIGxhIGNhcnRlXHJcbmZ1bmN0aW9uIGFkZExhdExuZyhldmVudCkge1xyXG4gICAgdmFyIG1vblBhdGggPSBnbG9iYWxQb2x5LmdldFBhdGgoKTsgICAvL29uIHLDqWN1cMOpcmUgbGUgcGFyY291cnMgKHNpIGNlIG4nZXN0IHBhcyBsZSBwcmVtaWVyIHBvaW50KVxyXG5cclxuICAgIG1vblBhdGgucHVzaChldmVudC5sYXRMbmcpO1xyXG5cclxuICAgIC8vU2kgYydlc3QgbGUgcHJlbWllciBtYXJxdWV1ciBvbiBsdWkgZG9ubmUgbCdpY29uZSBpbWFnZSBzaW5vbiBvbiBsYWlzc2UgdW4gbWFycWV1ciBub3JtYWxlXHJcbiAgICBpZiAobW9uUGF0aC5nZXRMZW5ndGgoKSA9PT0gMSkge1xyXG4gICAgICAgIG1hcmtlciA9IG5ldyBnb29nbGUubWFwcy5NYXJrZXIoe1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogZXZlbnQubGF0TG5nLFxyXG4gICAgICAgICAgICB0aXRsZTogJyMnICsgbW9uUGF0aC5nZXRMZW5ndGgoKSwgICAgLy9wYXRoLmdldExlbmd0aCBlc3QgbGUgbm9tYnJlIGRlIG5vdHJlIHBvaW50XHJcbiAgICAgICAgICAgIG1hcDogbWFwLFxyXG4gICAgICAgICAgICBpY29uOiBtYXJrZXJTdGFydCAgICAgICAgICAvL2xlIG1hcnF1ZXVyIGF1cmEgbm90cmUgaW1hZ2UgZGUgZHJhcGVhdVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBmaXJzdFBvaW50ID0gZXZlbnQubGF0TG5nO1xyXG5cclxuICAgICAgICBsYXN0UG9pbnQgPSBldmVudC5sYXRMbmc7XHJcblxyXG4gICAgICAgIGZpcnN0TWFya2VyID0gbWFya2VyO1xyXG4gICAgfVxyXG4gICAgZWxzZXsgICAgIC8vc2lub24gY2VsYSB2ZXV0IGRpcmUgcXVlIGNlIG4nZXN0IHBhcyBsZSBwcmVtaWVyIG1hcnF1ZXVyIGV0IG9uIG5lIGx1aSBkb25uZSBwYXMgZGUgc2tpbiAoZW1wdHkucG5nKVxyXG4gICAgICAgIG1hcmtlciA9IG5ldyBnb29nbGUubWFwcy5NYXJrZXIoe1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogZXZlbnQubGF0TG5nLFxyXG4gICAgICAgICAgICB0aXRsZTogJyMnICsgbW9uUGF0aC5nZXRMZW5ndGgoKSxcclxuICAgICAgICAgICAgbWFwOiBtYXAsXHJcbiAgICAgICAgICAgIGljb246IG1hcmtlclZpZGVcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgbWFya2Vycy5wdXNoKG1hcmtlcik7ICAgLy9vbiBtZXQgbm90cmUgdG91dCBub3V2ZWF1IG1hcmtlciBkYW5zIGxlIHRhYmxlYXUgbWFya2Vyc1xyXG5cclxuICAgICAgICBsYXN0UG9pbnQgPSBldmVudC5sYXRMbmc7XHJcblxyXG4gICAgICAgIHBhdGhBcnJheSA9IG1vblBhdGguZ2V0QXJyYXkoKTtcclxuXHJcbiAgICAgICAgdmFyIGRpc3RhbmNlID0gZ29vZ2xlLm1hcHMuZ2VvbWV0cnkuc3BoZXJpY2FsLmNvbXB1dGVMZW5ndGgocGF0aEFycmF5KTsgICAvL2NhbGN1bGUgbGEgZGlzdGFuY2UgZHUgcGFyY291cnMgZW4gY29tcHRhbnQgdG91dCBsZXMgcG9pbnRzXHJcbiAgICAgICAgZGlzdGFuY2VBcnJvbmRpZSA9IE1hdGgucm91bmQoZGlzdGFuY2UpOyAgICAvL2Fycm9uZGkgbGEgZGlzdGFuY2Ugw6AgbCd1bml0w6kgcHLDqHNcclxuICAgICAgICBkaXN0YW5jZUttRmxvYXQgPSBkaXN0YW5jZUFycm9uZGllLzEwMDA7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGRpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidGV4dERpdlwiKTsgICAgLy9yZWN1cGVyZSBsYSBkaXYgdGV4dERpdlxyXG4gICAgaWYgKChkaXN0YW5jZUFycm9uZGllID09IHVuZGVmaW5lZCkgfHwgKGRpc3RhbmNlQXJyb25kaWUgPT0gMCkpeyAgIC8vc2kgYXVjdW4gcGFyY291cnMgbidlc3QgcHLDqXNlbnQgb3UgcydpbCBuJ3kgYSBxdSd1biBtYXJxdWV1clxyXG4gICAgICAgIGRpdi50ZXh0Q29udGVudCA9IFwiVm91cyBuJ2F2ZXogcGxhY8OpIHF1J3VuIHNldWwgbWFycXVldXJcIlxyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBkaXYudGV4dENvbnRlbnQgPSBcIklsIHkgYSBcIiArIGRpc3RhbmNlS21GbG9hdCArIFwiIGtpbG9tw6h0cmVzIGVudHJlIGxlIHByZW1pZXIgZXQgbGUgZGVybmllciBwb2ludFwiIDtcclxuICAgICAgICAvL29uIGFmZmljaGUgbGEgZGlzdGFuY2UgYXJyb25kaWUgZXQgYXUga20gZGFucyBsYSBkaXYgdGV4dERpdlxyXG4gICAgICAgIGRpdi50aXRsZSA9IFwiT3UgXCIgKyBkaXN0YW5jZUFycm9uZGllICsgXCIgbcOodHJlc1wiO1xyXG5cclxuICAgICAgICB2YXIgbWVudUdhdWNoZUludGVyaWV1ciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1pbnRlcmlldXJcIik7XHJcbiAgICAgICAgbWVudUdhdWNoZUludGVyaWV1ci5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICB2YXIgbWVudUdhdWNoZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtbWVzc2FnZVwiKTtcclxuICAgICAgICBtZW51R2F1Y2hlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB9XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gQURETEFUTE5HICoqKioqKioqKioqKiovXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG52YXIgZGlyZWN0aW9uc1NlcnZpY2U7XHJcblxyXG5mdW5jdGlvbiBjYWxjdWxhdGVSb3V0ZShkaXJlY3Rpb25zU2VydmljZSwgbGFzdFBvaW50LCBuZXdQb2ludCkge1xyXG5cclxuICAgIHZhciBtb25QYXRoID0gZ2xvYmFsUG9seS5nZXRQYXRoKCk7XHJcblxyXG4gICAgdmFyIHJlbmRlcmVyT3B0aW9ucz0ge1xyXG4gICAgICAgIHBvbHlsaW5lT3B0aW9uczoge3N0cm9rZUNvbG9yOicjM0JBMTRDJ30sXHJcbiAgICAgICAgc3VwcHJlc3NNYXJrZXJzOiB0cnVlXHJcbiAgICB9O1xyXG5cclxuICAgIHZhciBkaXJlY3Rpb25zU2VydmljZSA9IG5ldyBnb29nbGUubWFwcy5EaXJlY3Rpb25zU2VydmljZSgpO1xyXG5cclxuICAgIHZhciBzZWxlY3RNb2RlU3VpdmkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2VsZWN0TW9kZVN1aXZpJyk7XHJcblxyXG4gICAgdmFyIHRyYXZlbE1vZGUgPSBzZWxlY3RNb2RlU3Vpdmkub3B0aW9uc1tzZWxlY3RNb2RlU3Vpdmkuc2VsZWN0ZWRJbmRleF0udmFsdWU7ICAgLy9pY2kgb24gbWV0IHF1ZSBsZSBtb2RlIGRlIHRyYW5zcG9ydCBlc3QgbGEgbWFyY2hlIG1haXMgaW4gcG91cnJhIHBsdXMgdGFyZCBsYWlzc2VyIMOgIGwndXRpbGlzYXRldXIgZGUgY2hvaXNpciBsZSBtb2RlXHJcbiAgICB2YXIgcmVxdWVzdCA9IHtcclxuICAgICAgICBvcmlnaW46IGxhc3RQb2ludCxcclxuICAgICAgICBkZXN0aW5hdGlvbjogbmV3UG9pbnQsXHJcbiAgICAgICAgdHJhdmVsTW9kZTogZ29vZ2xlLm1hcHMuVHJhdmVsTW9kZVt0cmF2ZWxNb2RlXVxyXG4gICAgfTtcclxuXHJcbiAgICBkaXJlY3Rpb25zU2VydmljZS5yb3V0ZShyZXF1ZXN0LCBmdW5jdGlvbihyZXNwb25zZSwgc3RhdHVzKSB7XHJcbiAgICAgICAgICAgIGlmIChzdGF0dXMgPT0gJ09LJykgeyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vcydpbCBuJ3kgYSBhdWN1biBwcm9ibMOobWUgYXZlYyBsJ2l0aW7DqXJhaXJlXHJcbiAgICAgICAgICAgICAgICB2YXIgcG9pbnRzQXJyYXkgPSByZXNwb25zZS5yb3V0ZXNbMF0ub3ZlcnZpZXdfcGF0aDtcclxuXHJcbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IHBvaW50c0FycmF5Lmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgbW9uUGF0aC5wdXNoKHBvaW50c0FycmF5W2ldKTtcclxuICAgICAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgICAgICB1cGRhdGVSb3V0ZUxlbmd0aCgpO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgYWxlcnQoXCJJbCBuJ3kgYSBwYXMgZGUgY2hlbWluIHBvdXIgYWxsZXIgw6AgY2V0IGVuZHJvaXRcIik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICApXHJcbn1cclxuLyoqKioqKioqKioqKiogRklOIENBTENVTFJPVVRFICoqKioqKioqKioqKiovXHJcblxyXG5cclxuXHJcblxyXG5cclxuLy9sb3JzcXVlIGwnb24gcmlnaHQgY2xpY2sgc3VyIHVuIGVuZHJvaXQgb24gdmEgcmFsaWVyIGxlIGRlcm5pZXIgcG9pbnQgY3LDqcOpIMOgIGNlIHRvdXQgbm91dmVhdSBwb2ludCBtYWlzIGVuIGFmZmljaGFudCBsJ2l0aW7DqXJhaXJlIGVuIHBhc3NhbnQgcGFyIGxhIHJvdXRlIG91IGxlcyBjaGVtaW5zIChwYXMgZW4gY3LDqWFudCB1bmUgbGlnbmUgZHJvaXRlKVxyXG5mdW5jdGlvbiBhZGRMYXRMbmdSb3V0ZShldmVudCl7XHJcblxyXG4gICAgbmV3UG9pbnQgPSBldmVudC5sYXRMbmc7ICAgLy8gQ29vcmRzIGR1IHBvaW50IHF1aSB2aWVudCBkJ2V0cmUgcmlnaHRjbGlja8OpXHJcblxyXG4gICAgY2FsY3VsYXRlUm91dGUoZGlyZWN0aW9uc1NlcnZpY2UsIGxhc3RQb2ludCwgbmV3UG9pbnQpOyAgLy9mb25jdGlvbiBxdWkgY2FsY3VsZSBldCBhZmZpY2hlIGwnaXRpbsOpcmFpcmVcclxuXHJcbiAgICB2YXIgbW9uUGF0aCA9IGdsb2JhbFBvbHkuZ2V0UGF0aCgpO1xyXG5cclxuICAgIG1hcmtlciA9IG5ldyBnb29nbGUubWFwcy5NYXJrZXIoe1xyXG4gICAgICAgIHBvc2l0aW9uOiBldmVudC5sYXRMbmcsXHJcbiAgICAgICAgdGl0bGU6ICcjJyArIG1vblBhdGguZ2V0TGVuZ3RoKCksXHJcbiAgICAgICAgbWFwOiBtYXAsXHJcbiAgICAgICAgaWNvbjogbWFya2VyVmlkZVxyXG4gICAgfSk7XHJcblxyXG4gICAgcG9seS5zZXRNYXAobWFwKTsgIC8vb24gYWZmaWNoZSBsYSBwb2x5bGluZSBzdXIgbGEgbWFwXHJcblxyXG4gICAgbWFya2Vycy5wdXNoKG1hcmtlcik7ICAgLy9vbiBtZXQgbm90cmUgdG91dCBub3V2ZWF1IG1hcmtlciBkYW5zIGxlIHRhYmxlYXUgbWFya2Vyc1xyXG5cclxuICAgIGxhc3RQb2ludCA9IGV2ZW50LmxhdExuZztcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gQURETEFUTE5HUk9VVEUgKioqKioqKioqKioqKi9cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcbi8vbWV0IMOgIGpvdXIgbGEgem9uZSBkZSB0ZXh0ZSBlbiBiYXMgZGUgbGEgY2FydGUgcXVpIGRvbm5lIGxhIGRpc3RhbmNlIGR1IHBhcmNvdXJzXHJcbmZ1bmN0aW9uIHVwZGF0ZVJvdXRlTGVuZ3RoKCl7XHJcblxyXG4gICAgdmFyIG1vblBhdGggPSBnbG9iYWxQb2x5LmdldFBhdGgoKTtcclxuXHJcbiAgICBwYXRoQXJyYXkgPSBtb25QYXRoLmdldEFycmF5KCk7XHJcblxyXG4gICAgdmFyIGRpc3RhbmNlID0gZ29vZ2xlLm1hcHMuZ2VvbWV0cnkuc3BoZXJpY2FsLmNvbXB1dGVMZW5ndGgocGF0aEFycmF5KTsgICAvL2NhbGN1bGUgbGEgZGlzdGFuY2UgZHUgcGFyY291cnMgZW4gY29tcHRhbnQgdG91dCBsZXMgcG9pbnRzXHJcbiAgICBkaXN0YW5jZUFycm9uZGllID0gTWF0aC5yb3VuZChkaXN0YW5jZSk7ICAgIC8vYXJyb25kaSBsYSBkaXN0YW5jZSDDoCBsJ3VuaXTDqSBwcsOoc1xyXG4gICAgZGlzdGFuY2VLbUZsb2F0ID0gZGlzdGFuY2VBcnJvbmRpZS8xMDAwO1xyXG5cclxuXHJcbiAgICB2YXIgZGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0ZXh0RGl2XCIpOyAgICAvL3JlY3VwZXJlIGxhIGRpdiB0ZXh0RGl2XHJcbiAgICBpZiAoKGRpc3RhbmNlQXJyb25kaWUgPT0gdW5kZWZpbmVkKSB8fCAoZGlzdGFuY2VBcnJvbmRpZSA9PSAwKSl7ICAgLy9zaSBhdWN1biBwYXJjb3VycyBuJ2VzdCBwcsOpc2VudCBvdSBzJ2lsIG4neSBhIHF1J3VuIG1hcnF1ZXVyXHJcbiAgICAgICAgZGl2LnRleHRDb250ZW50ID0gXCJWb3VzIG4nYXZleiBwbGFjw6kgcXUndW4gc2V1bCBtYXJxdWV1clwiO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBkaXYudGV4dENvbnRlbnQgPSBcIklsIHkgYSBcIiArIGRpc3RhbmNlS21GbG9hdCArIFwiIGtpbG9tw6h0cmVzIGVudHJlIGxlIHByZW1pZXIgZXQgbGUgZGVybmllciBwb2ludFwiIDtcclxuICAgICAgICAvL29uIGFmZmljaGUgbGEgZGlzdGFuY2UgYXJyb25kaWUgZXQgYXUga20gZGFucyBsYSBkaXYgdGV4dERpdlxyXG4gICAgICAgIGRpdi50aXRsZSA9IFwiT3UgXCIgKyBkaXN0YW5jZUFycm9uZGllICsgXCIgbcOodHJlc1wiO1xyXG5cclxuICAgICAgICB2YXIgbWVudUdhdWNoZUludGVyaWV1ciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1pbnRlcmlldXJcIik7XHJcbiAgICAgICAgbWVudUdhdWNoZUludGVyaWV1ci5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICB2YXIgbWVudUdhdWNoZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtbWVzc2FnZVwiKTtcclxuICAgICAgICBtZW51R2F1Y2hlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB9XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gVVBEQVRFUk9VVEVMRU5HVEggKioqKioqKioqKioqKi9cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG4vL3JldHVybiAyMyBzaSBvbiBsdWkgcGFzc2UgeC4yM1xyXG5mdW5jdGlvbiBnZXREZWNpbWFsKG4pIHtcclxuICAgIHJldHVybiAobiAtIE1hdGguZmxvb3IobikpO1xyXG59XHJcblxyXG5mdW5jdGlvbiBnZXRQYXJ0aWVEZWNpbWFsZShuKXtcclxuICAgIHJldHVybiAoTWF0aC5yb3VuZCgoTWF0aC5yb3VuZCgxMDAgKiBnZXREZWNpbWFsKG4pKS8xMDApICogMTAwICogNjAgLyAxMDApKTtcclxufVxyXG5cclxuZnVuY3Rpb24gdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KXtcclxuICAgIC8vdmVsb1xyXG4gICAgdXBkYXRlVGVtcHNOZWNlc3NhaXJlKGRpc3RhbmNlS21GbG9hdCwgdml0ZXNzZVZlbG8sIFwidGVtcHNWZWxvXCIpO1xyXG5cclxuICAgIC8vZm9vdGluZ1xyXG4gICAgdXBkYXRlVGVtcHNOZWNlc3NhaXJlKGRpc3RhbmNlS21GbG9hdCwgdml0ZXNzZUZvb3RpbmcsIFwidGVtcHNGb290aW5nXCIpO1xyXG5cclxuICAgIC8vbWFyY2hlXHJcbiAgICB1cGRhdGVUZW1wc05lY2Vzc2FpcmUoZGlzdGFuY2VLbUZsb2F0LCB2aXRlc3NlTWFyY2hlLCBcInRlbXBzTWFyY2hlXCIpO1xyXG59XHJcblxyXG5mdW5jdGlvbiB1cGRhdGVUZW1wc05lY2Vzc2FpcmUoZGlzdGFuY2VLbUZsb2F0LCB2aXRlc3NlTW95ZW5uZSwgc3BvcnQpe1xyXG4gICAgdmFyIHRlbXBzSFRNTCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNwb3J0KTsgLy9vbiByw6ljdXAgbCfDqWzDqW1lbnQgcCB0ZW1wc1ZlbG9cclxuXHJcbiAgICB2YXIgdGVtcHMgPSBkaXN0YW5jZUttRmxvYXQgLyB2aXRlc3NlTW95ZW5uZTsgLy8gdCA9IGQgLyB2ICAgICAgb24gc29ydCBsZSB0ZW1wcyBxdSdpbCBmYXV0IGVuIGhldXJlcyAobWFpcyBvbiBhIDEuNSBoZXVyZXMgYXUgbGlldSBkZSAxaDMwKVxyXG4gICAgdmFyIHRlbXBzRW5NaW51dGVzQXZlY1NlY29uZGVzID0gTWF0aC5yb3VuZCgxMDAgKiAodGVtcHMgKiA2MCkpLzEwMDsgIC8vb24gc29ydCA1Mi4zMSAoNTIgbWludXRlcyAzMSBzZWNvbmRlcylcclxuICAgIHZhciBzZWNvbmRlc1RlbXBzID0gZ2V0UGFydGllRGVjaW1hbGUodGVtcHNFbk1pbnV0ZXNBdmVjU2Vjb25kZXMpO1xyXG5cclxuICAgIHZhciB0ZW1wc0VuTWludXRlcyA9IE1hdGgucm91bmQodGVtcHNFbk1pbnV0ZXNBdmVjU2Vjb25kZXMpOyAgIC8vb24gc29ydCBqdXN0ZSA1MlxyXG5cclxuICAgIGlmKHRlbXBzRW5NaW51dGVzID09PSAxKXtcclxuICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVcIjtcclxuICAgIH1lbHNle1xyXG4gICAgICAgIHZhciBtaW51dGVPcnRob2dyYXBoZSA9IFwiIG1pbnV0ZXNcIjtcclxuICAgIH1cclxuXHJcbiAgICBpZihzZWNvbmRlc1RlbXBzID09PSAxKXtcclxuICAgICAgICB2YXIgc2Vjb25kZU9ydGhvZ3JhcGhlID0gXCIgc2Vjb25kZVwiO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgdmFyIHNlY29uZGVPcnRob2dyYXBoZSA9IFwiIHNlY29uZGVzXCI7XHJcbiAgICB9XHJcblxyXG5cclxuICAgIGlmKHRlbXBzRW5NaW51dGVzIDwgMSl7XHJcbiAgICAgICAgdGVtcHNIVE1MLnRleHRDb250ZW50ID0gc2Vjb25kZXNUZW1wcyArIHNlY29uZGVPcnRob2dyYXBoZTtcclxuICAgICAgICB0ZW1wc0hUTUwudGl0bGUgPSBcIlwiO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgLy9zaSBpbCB5IGEgcGx1cyBkZSA2MCBtaW51dGVzIG9uIGFmZmljaGUgZW4gaGV1cmVzIGV0IG1pbnV0ZXNcclxuICAgICAgICBpZih0ZW1wc0VuTWludXRlcyA8IDYwKXtcclxuICAgICAgICAgICAgdGVtcHNIVE1MLnRleHRDb250ZW50ID0gdGVtcHNFbk1pbnV0ZXMgKyBtaW51dGVPcnRob2dyYXBoZTtcclxuICAgICAgICAgICAgdGVtcHNIVE1MLnRpdGxlID0gXCJFdCBcIiArIHNlY29uZGVzVGVtcHMgKyBzZWNvbmRlT3J0aG9ncmFwaGU7XHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIHZhciB0ZW1wc0VuSGV1cmVzRmxvYXQgPSB0ZW1wc0VuTWludXRlcyAvIDYwO1xyXG4gICAgICAgICAgICB2YXIgbWludXRlc0R1VGVtcHNQb3VySGV1cmVzID0gZ2V0UGFydGllRGVjaW1hbGUodGVtcHNFbkhldXJlc0Zsb2F0KTsgLy9vbiByZWN1cCBsZXMgbWludXRlc1xyXG4gICAgICAgICAgICB2YXIgdGVtcHNFbkhldXJlcyA9IE1hdGgucm91bmQodGVtcHNFbkhldXJlc0Zsb2F0KTtcclxuXHJcbiAgICAgICAgICAgIGlmKG1pbnV0ZXNEdVRlbXBzUG91ckhldXJlcyA9PT0gMSl7XHJcbiAgICAgICAgICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVcIjtcclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVzXCI7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIGlmKHRlbXBzRW5IZXVyZXMgPT09IDEpe1xyXG4gICAgICAgICAgICAgICAgdmFyIGhldXJlT3J0aG9ncmFwaGUgPSBcIiBoZXVyZVwiO1xyXG4gICAgICAgICAgICB9ZWxzZXtcclxuICAgICAgICAgICAgICAgIHZhciBoZXVyZU9ydGhvZ3JhcGhlID0gXCIgaGV1cmVzXCI7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIHRlbXBzSFRNTC50ZXh0Q29udGVudCA9IHRlbXBzRW5IZXVyZXMgKyBoZXVyZU9ydGhvZ3JhcGhlICsgXCIgZXQgXCIgKyBtaW51dGVzRHVUZW1wc1BvdXJIZXVyZXMgKyBtaW51dGVPcnRob2dyYXBoZTsgIC8vb24gYWZmaWNoZVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbn1cclxuLyoqKioqKioqKioqKiogRklOIFVQREFURVRFTVBTTkVDRVNTQUlSRSAqKioqKioqKioqKioqL1xyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxudmFyIHJlY3VwO1xyXG5cclxuZnVuY3Rpb24gZGVybmllckVsZW0odGJsKXtcclxuICAgIHZhciB0YmwgPSB0Ymw7XHJcbiAgICB2YXIgdGJsTGVuZ3RoID0gdGJsLmxlbmd0aDtcclxuICAgIHZhciBwb3MgPSB0YmxMZW5ndGggLSAxO1xyXG4gICAgcmV0dXJuIHRibFtwb3NdO1xyXG59XHJcblxyXG4vL2VycmV1ciBhdmVjIGVycmV1ciBkZSBnZW9sb2NhbGlzYXRpb25cclxuZnVuY3Rpb24gaGFuZGxlTG9jYXRpb25FcnJvcihicm93c2VySGFzR2VvbG9jYXRpb24sIGluZm9XaW5kb3csIHBvcykge1xyXG4gICAgaW5mb1dpbmRvdy5zZXRQb3NpdGlvbihwb3MpO1xyXG4gICAgaW5mb1dpbmRvdy5zZXRDb250ZW50KGJyb3dzZXJIYXNHZW9sb2NhdGlvbiA/XHJcbiAgICAgICAgJ0VycmV1cjogTGUgc2VydmljZSBkZSBHw6lvbG9jYWxpc2F0aW9uIGEgZWNob3XDqS4nIDpcclxuICAgICAgICAnRXJyZXVyOiBWb3RyZSBuYXZpZ3VhdGV1ciBuZSBzdXBwb3J0IHBhcyBsYSBHw6lvbG9jYWxpc2F0aW9uLicpO1xyXG59XHJcblxyXG5cclxuXHJcbi8vZm9uY3Rpb24gcXVpIHZhIG5vdXMgY3LDqWVyIHVuIHNldE1hcCBtYWlzIHBvdXIgdG91cyBsZXMgbWFycXVldXJzXHJcbmZ1bmN0aW9uIHNldE1hcE9uQWxsKG1hcCkge1xyXG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBtYXJrZXJzLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgbWFya2Vyc1tpXS5zZXRNYXAobWFwKTtcclxuICAgIH1cclxufVxyXG5cclxuXHJcblxyXG4vL0ZvbmN0aW9ucyBkZXMgY29udHLDtGxlc1xyXG5cclxuZnVuY3Rpb24gZGVsZXRlTGFzdFBvaW50KCl7XHJcbiAgICB2YXIgbW9uUGF0aCA9IGdsb2JhbFBvbHkuZ2V0UGF0aCgpO1xyXG5cclxuICAgIG1vblBhdGgucG9wKCk7ICAgLy9vbiBzdXBwcmltZSBsZSBkZXJuaWVyIMOpbMOpbWVudCBkdSB0YWJsZWF1IHBhdGhcclxuXHJcbiAgICB2YXIgcGF0aEFycmF5ID0gbW9uUGF0aC5nZXRBcnJheSgpO1xyXG4gICAgbGFzdFBvaW50ID0gZGVybmllckVsZW0ocGF0aEFycmF5KTtcclxuXHJcbiAgICB2YXIgcGF0aExlbmd0aCA9IG1vblBhdGguZ2V0TGVuZ3RoKCk7XHJcblxyXG4gICAgaWYocGF0aExlbmd0aCA9PT0gMCl7XHJcbiAgICAgICAgZGVsZXRlUG9pbnRzKCk7XHJcbiAgICB9XHJcblxyXG4gICAgaWYocGF0aExlbmd0aCA9PT0gMSl7XHJcbiAgICAgICAgdmFyIG1lbnVHYXVjaGVJbnRlcmlldXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtaW50ZXJpZXVyXCIpO1xyXG4gICAgICAgIG1lbnVHYXVjaGVJbnRlcmlldXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG5cclxuICAgICAgICB2YXIgbWVudUdhdWNoZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtbWVzc2FnZVwiKTtcclxuICAgICAgICBtZW51R2F1Y2hlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgfVxyXG5cclxuICAgIHVwZGF0ZVJvdXRlTGVuZ3RoKCk7XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufVxyXG5cclxuZnVuY3Rpb24gZGVsZXRlUG9pbnRzKCl7XHJcbiAgICBmaXJzdE1hcmtlci5zZXRNYXAobnVsbCk7XHJcbiAgICBzZXRNYXBPbkFsbChudWxsKTtcclxuICAgIG1hcmtlcnMgPSBbXTtcclxuICAgIGdsb2JhbFBvbHkuc2V0TWFwKG51bGwpO1xyXG5cclxuICAgIG1vblBhdGggPSBnbG9iYWxQb2x5LmdldFBhdGgoKTtcclxuICAgIG1vblBhdGggPSBbXTtcclxuICAgIGxhc3RQb2ludCA9IFwiXCI7XHJcblxyXG4gICAgcGF0aEFycmF5ID0gW107XHJcblxyXG4gICAgdmFyIGRpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidGV4dERpdlwiKTtcclxuICAgIGRpdi50ZXh0Q29udGVudCA9IFwiVm91cyBuJ2F2ZXogcGFzIHBsYWPDqSBkZSBtYXJxdWV1clwiO1xyXG5cclxuICAgIGRpc3RhbmNlQXJyb25kaWUgPSAwO1xyXG4gICAgZGlzdGFuY2VLbUZsb2F0ID0gMDtcclxuXHJcblxyXG4gICAgZ2xvYmFsUG9seSA9IG5ldyBnb29nbGUubWFwcy5Qb2x5bGluZSh7ICAgLy9vbiByZWNyw6nDqSB1bmUgcG9seWxpbmUgcG91ciBxdWUgbG9yc3F1ZSBxdWUgbCdvbiBzdXBwcmltZSBsJ2FuY2llbm5lIG9uIG5lIHJlcGFydGUgcGFzIHN1ciBsJ2FuY2llbm5lXHJcbiAgICAgICAgc3Ryb2tlQ29sb3I6ICcjM0JBMTRDJyxcclxuICAgICAgICBzdHJva2VPcGFjaXR5OiAxLjAsXHJcbiAgICAgICAgc3Ryb2tlV2VpZ2h0OiAzXHJcbiAgICB9KTtcclxuICAgIGdsb2JhbFBvbHkuc2V0TWFwKG1hcCk7XHJcblxyXG4gICAgdmFyIG1lbnVHYXVjaGVJbnRlcmlldXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtaW50ZXJpZXVyXCIpO1xyXG4gICAgbWVudUdhdWNoZUludGVyaWV1ci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcblxyXG4gICAgdmFyIG1lbnVHYXVjaGVNZXNzYWdlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtZW51R2F1Y2hlLW1lc3NhZ2VcIik7XHJcbiAgICBtZW51R2F1Y2hlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG59XHJcblxyXG5mdW5jdGlvbiBmZXJtZXJCb3VjbGUoKXtcclxuICAgIGNhbGN1bGF0ZVJvdXRlKGRpcmVjdGlvbnNTZXJ2aWNlLCBsYXN0UG9pbnQsIGZpcnN0UG9pbnQpO1xyXG59XHJcblxyXG5mdW5jdGlvbiBjZW50ZXJNYXAoKXsgICAvL29uIHJlY2VudHJlIGxhIGNhcnRlIHN1ciBub3RyZSBsb2NhbGlzYXRpb24gKHNpIG9uIGwnYSBhdXRvcmlzw6kpXHJcbiAgICBtYXAuc2V0Q2VudGVyKGdlb1Bvcyk7XHJcbn1cclxuXHJcblxyXG5cclxuXHJcbnZhciBtZW51R2F1Y2hlQm91dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JvdXRvbk1lbnVMYXRlcmFsJyk7XHJcbnZhciBtZW51R2F1Y2hlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21lbnVHYXVjaGUnKTtcclxudmFyIG1hcEZpbHRlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtYXBGaWx0ZXInKTtcclxuXHJcbm1lbnVHYXVjaGVCb3V0b24ub25jbGljayA9IGZ1bmN0aW9uKCkge1xyXG4gICAgbWVudUdhdWNoZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgbWFwRmlsdGVyLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbn1cclxuXHJcbm1hcEZpbHRlci5vbmNsaWNrID0gZnVuY3Rpb24oKSB7XHJcbiAgICBtZW51R2F1Y2hlLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgIG1hcEZpbHRlci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbn1cclxuXHJcblxyXG5cclxuXHJcbmZ1bmN0aW9uIHNob3dBcnJheSgpe1xyXG4gICAgLy9hbGVydChwYXRoQXJyYXkpO1xyXG5cclxuICAgIHZhciBtb25QYXRoID0gZ2xvYmFsUG9seS5nZXRQYXRoKCk7XHJcbiAgICBhbGVydChtb25QYXRoKTtcclxufVxyXG5cclxuXHJcbi8qKioqKiBSQUNDT1VSQ0lTIENMQVZJRVIgKioqKioqKiovXHJcbk1vdXNldHJhcC5iaW5kKFsnY3RybCt6J10sIGZ1bmN0aW9uKCkge1xyXG4gICAgZGVsZXRlTGFzdFBvaW50KCk7XHJcbn0pO1xyXG5cclxuXHJcblxyXG5cclxuLy96b29tL2Rlem9vbSBhdmVjIEN0cmwgQWx0ICsvLSBvdSBDdHJsICsvLVxyXG52YXIgem9vbSA9IDE0O1xyXG5cclxuTW91c2V0cmFwLmJpbmQoWydjdHJsK2FsdCsrJywgJ2N0cmwrKyddLCBmdW5jdGlvbigpIHtcclxuICAgIGlmKHpvb20gPD0gMjMpe1xyXG4gICAgICAgIHpvb20rKztcclxuICAgICAgICBtYXAuc2V0Wm9vbSh6b29tKTtcclxuICAgIH1lbHNle1xyXG4gICAgICAgIGFsZXJ0KCdJbXBvc3NpYmxlIGRlIHpvb21lciBkYXZhbnRhZ2UnKTtcclxuICAgIH1cclxufSk7XHJcblxyXG5Nb3VzZXRyYXAuYmluZChbJ2N0cmwrYWx0Ky0nLCAnY3RybCstJ10sIGZ1bmN0aW9uKCkge1xyXG4gICAgaWYoem9vbSA+PSAxKXtcclxuICAgICAgICB6b29tLS07XHJcbiAgICAgICAgbWFwLnNldFpvb20oem9vbSk7XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBhbGVydCgnSW1wb3NzaWJsZSBkZSBkw6l6b29tZXIgZGF2YW50YWdlJyk7XHJcbiAgICB9XHJcbn0pO1xuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL2Fzc2V0cy9qcy9tYWluLmpzIl0sInNvdXJjZVJvb3QiOiIifQ==