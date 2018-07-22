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

/***/ "./assets/js/concepteur.js":
/*!*********************************!*\
  !*** ./assets/js/concepteur.js ***!
  \*********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

var globalPoly;
var poly;

var pathArray = [];

var map;
var geoPos;

var markerVide = "{{ asset('images/empty.png') }}"; //pour ne pas avoir de marqueur pour chaque point (à ameliorer)

var firstPoint; //premier point à qui l'on donnera un skin différent (marqueur vert)
var lastPoint; //dernier point à avoir été placé (dernieres coords, pas dernier marqueur)
var marker;
var markers = []; //array contenant l'ensemble des marqueurs
var firstMarker; //premier marqueur (à ne pas confondre avec firstPoint qui contient les coords de notre premier point)
var distanceKmFloat; //distance en km
var distanceArrondie;

var vitesseVelo = 20;
var vitesseFooting = 12;
var vitesseMarche = 6;

function initMap() {

    var mapDiv = document.getElementById("map");
    //je récupére mon element avec l'id map
    var windowHeight = window.innerHeight;
    //je prend la hauteur de la fenêtre
    var tailleNb = windowHeight - 80;
    var tailleVoulu = tailleNb + 'px';
    //je calcule pour que ma map fasse hauteur de la fenêtre moins le header
    mapDiv.style.height = tailleVoulu;
    //c'est comme si je fais en CSS: 'height: tailleVoulu;'

    //definir taille du menu gauche
    var menuGauche = document.getElementById('menuGauche');
    menuGauche.style.height = tailleVoulu;

    var saveContainer = document.getElementById('saveContainer');
    saveContainer.style.height = tailleVoulu;

    /*var formPopUp = document.getElementById('formPopUp');
    formPopUp.style.height = (tailleNb - 100) + 'px';*/

    //on veut centrer la carte sur notre position si la geolocalisation est activée
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            //recupère notre position
            geoPos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            map.setCenter(geoPos); //centre la carte
        });
    } else {
        // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
        alert('Votre naviguateur ne supporte pas la géolocalisation ou un problème est survenu');
    }

    map = new google.maps.Map(document.getElementById('map'), { //recupére la div #map et la transforme en objet map, stocké dans la var map
        zoom: 14, //Définie le zoom par défaut
        draggableCursor: "crosshair", //on a une croix comme curseur
        mapTypeId: 'hybrid',
        center: { lat: 49.3904707, lng: 3.3929198 }
    });

    var mapType = map.getMapTypeId();
    var polyColor;
    var textDiv = document.getElementById('textDiv');

    if (mapType == 'hybrid') {
        polyColor = "#35f700";
        textDiv.style.color = "#fff";
    } else {
        polyColor = "#3BA14C";
        textDiv.style.color = "#000";
    }

    globalPoly = new google.maps.Polyline({ //créé déjà la polyline
        strokeColor: polyColor,
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    globalPoly.setMap(map); //on attache l'objet polyline à notre map

    poly = new google.maps.Polyline({ //créé déjà la polyline
        strokeColor: polyColor,
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
            globalPoly.setOptions({ strokeColor: '#35f700' });
            firstMarker.setOptions({ icon: "{{ asset('images/marker_hybrid.png') }}" });
            textDiv.style.color = "#fff";
        } else {
            globalPoly.setOptions({ strokeColor: '#3BA14C' });
            firstMarker.setOptions({ icon: "{{ asset('images/marker.png') }}" });
            textDiv.style.color = "#000";
        }
    });
}
/************* FIN INITMAP *************/

// Fonction qui sera executée lors du clique d'un endroit de la carte
function addLatLng(event) {
    var monPath = globalPoly.getPath(); //on récupére le parcours (si ce n'est pas le premier point)

    monPath.push(event.latLng);

    var markerStart;
    var mapType = map.getMapTypeId();

    if (mapType == 'hybrid') {
        markerStart = "{{ asset('images/marker_hybrid.png') }}";
    } else {
        markerStart = "{{ asset('images/marker.png') }}";
    }

    //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
    if (monPath.getLength() === 1) {
        marker = new google.maps.Marker({
            position: event.latLng,
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

        var formPopUp = document.getElementById("formPopUp");
        formPopUp.style.display = "block";

        var saveMessage = document.getElementById("save-message");
        saveMessage.style.display = "none";
    }

    updateTempsGlobal(distanceKmFloat);
}
/************* FIN ADDLATLNG *************/

var directionsService;

function calculateRoute(directionsService, lastPoint, newPoint) {

    var monPath = globalPoly.getPath();

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

        var formPopUp = document.getElementById("formPopUp");
        formPopUp.style.display = "block";

        var saveMessage = document.getElementById("save-message");
        saveMessage.style.display = "none";
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

$('#deleteLastButton').click(function () {
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

        var formPopUp = document.getElementById("formPopUp");
        formPopUp.style.display = "block";

        var formFilter = document.getElementById("formFilter");
        formFilter.style.display = "block";

        var saveMessage = document.getElementById("save-message");
        saveMessage.style.display = "block";
    }

    updateRouteLength();

    updateTempsGlobal(distanceKmFloat);
});

$('#deleteAllButton').click(function () {
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

    var mapType = map.getMapTypeId();

    if (mapType == 'hybrid') {
        polyColor = "#35f700";
    } else {
        polyColor = "#3BA14C";
    }

    globalPoly = new google.maps.Polyline({ //on recréé une polyline pour que lorsque que l'on supprime l'ancienne on ne reparte pas sur l'ancienne
        strokeColor: polyColor,
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    globalPoly.setMap(map);

    var menuGaucheInterieur = document.getElementById("menuGauche-interieur");
    menuGaucheInterieur.style.display = "none";

    var menuGaucheMessage = document.getElementById("menuGauche-message");
    menuGaucheMessage.style.display = "block";

    var formPopUp = document.getElementById("formPopUp");
    formPopUp.style.display = "block";

    var formFilter = document.getElementById("formFilter");
    formFilter.style.display = "block";

    var saveMessage = document.getElementById("save-message");
    saveMessage.style.display = "block";
});

$('#closeLoopButton').click(function () {
    calculateRoute(directionsService, lastPoint, firstPoint);
});

$('#centerMap').click(function () {
    map.setCenter(geoPos);
});

var menuGaucheBouton = document.getElementById('boutonMenuLateral');
var menuGauche = document.getElementById('menuGauche');
var mapFilter = document.getElementById('mapFilter');

menuGaucheBouton.onclick = function () {
    menuGauche.style.display = "block";
    mapFilter.style.display = "block";
};

$('#temps-necessaire-submit').click(function () {
    var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
    var vitesseInput = inputTempsNecessaire.value;

    if (vitesseInput != '' && isNaN(vitesseInput) == false && vitesseInput <= 300) {
        var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
        tempsNecessaireDiv.style.display = "none";
        var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
        tempsNecessaireResultatDiv.style.display = "block";

        var temps = distanceKmFloat / vitesseInput; // t = d / v      on sort le temps qu'il faut en heures (mais on a 1.5 heures au lieu de 1h30)
        var tempsEnMinutesAvecSecondes = Math.round(100 * (temps * 60)) / 100;
        var secondesTemps = getPartieDecimale(tempsEnMinutesAvecSecondes);
        var tempsEnMinutes = Math.round(tempsEnMinutesAvecSecondes); //on sort juste 52

        var tempsNecessaireResultatAllureSpan = document.getElementById('temps-necessaire-resultat-allure');
        tempsNecessaireResultatAllureSpan.textContent = vitesseInput;
        var tempsNecessaireResultatSpan = document.getElementById('temps-necessaire-resultat-temps');

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
            tempsNecessaireResultatSpan.textContent = secondesTemps + secondeOrthographe;
            tempsNecessaireResultatSpan.title = "";
        } else {
            //si il y a plus de 60 minutes on affiche en heures et minutes
            if (tempsEnMinutes < 60) {
                tempsNecessaireResultatSpan.textContent = tempsEnMinutes + minuteOrthographe;
                tempsNecessaireResultatSpan.title = "Et " + secondesTemps + secondeOrthographe;
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

                tempsNecessaireResultatSpan.textContent = tempsEnHeures + heureOrthographe + " et " + minutesDuTempsPourHeures + minuteOrthographe; //on affiche
            }
        }
    } else {
        alert("Vous n'avez soit rien rentré, soit rentré quelque chose d'autre qu'un nombre, soit un nombre supérieur à 300");
    }
});

$('#temps-necessaire-resultat-btn').click(function () {
    displayDefaultInterfaceTempsNecessaire();
});

function displayDefaultInterfaceTempsNecessaire() {
    var tempsNecessaireDiv = document.getElementById('temps-necessaire-container');
    tempsNecessaireDiv.style.display = "block";
    var tempsNecessaireResultatDiv = document.getElementById('temps-necessaire-resultat-partie');
    tempsNecessaireResultatDiv.style.display = "none";
    var inputTempsNecessaire = document.getElementById('temps-necessaire-input');
    inputTempsNecessaire.value = "";
}

/****** tpvm = Temps pour vitesse moyenne ******/

$('#vitesse-moyenne-submit').click(function () {
    var tpvmHInput = document.getElementById("vitesse-moyenne-input-h");
    var tpvmMInput = document.getElementById("vitesse-moyenne-input-m");
    var tpvmSInput = document.getElementById("vitesse-moyenne-input-s");

    var tpvmH = tpvmHInput.value;
    var tpvmM = tpvmMInput.value;
    var tpvmS = tpvmSInput.value;

    if (tpvmH + tpvmM + tpvmS != '' && tpvmH + tpvmM + tpvmS != '0' && tpvmH + tpvmM + tpvmS != '00' && tpvmH + tpvmM + tpvmS != '000') {
        if (tpvmH <= 99) {
            if (tpvmM <= 59) {
                if (tpvmS <= 59) {
                    var tpvmHInt;
                    var tpvmMInt;
                    var tpvmSInt;

                    if (tpvmH != '') {
                        tpvmHInt = parseInt(tpvmH, 10);
                    } else {
                        tpvmHInt = 0;
                    }
                    if (tpvmM != '') {
                        tpvmMInt = parseInt(tpvmM, 10);
                    } else {
                        tpvmMInt = 0;
                    }
                    if (tpvmS != '') {
                        tpvmSInt = parseInt(tpvmS, 10);
                    } else {
                        tpvmSInt = 0;
                    }

                    tpvmMInt = tpvmMInt * 100 / 60;
                    tpvmSInt = tpvmSInt * 100 / 60; /* On passe en base 100 */

                    tpvmMInt = tpvmMInt * 0.01;
                    tpvmSInt = tpvmSInt * 0.0001;

                    var tpvm = tpvmHInt + tpvmMInt + tpvmSInt;

                    var vitesseMoyenne = distanceKmFloat / tpvm; //d/t
                    var vitesseMoyenne = Math.round(100 * vitesseMoyenne) / 100;

                    var vitesseMoyenneResultatSpan = document.getElementById('vitesse-moyenne-resultat-vitesse');
                    vitesseMoyenneResultatSpan.textContent = vitesseMoyenne;
                } else {
                    alert('Vous avez rentré une valeur supérieure à 59 dans le champ secondes');
                }
            } else {
                alert('Vous avez rentré une valeur supérieure à 59 dans le champ minutes');
            }
        } else {
            alert('Vous avez rentré une valeur trop haute dans le champ heures');
        }
    } else {
        alert("Vous n'avez rien rentré");
    }

    var vitesseMoyenneContainer = document.getElementById("vitesse-moyenne-container");
    vitesseMoyenneContainer.style.display = "none";
    var vitesseMoyenneResultatContainer = document.getElementById("vitesse-moyenne-resultat-container");
    vitesseMoyenneResultatContainer.style.display = "block";
});

$('#vitesse-moyenne-resultat-btn').click(function () {
    displayDefaultInterfaceVitesseMoyenne();
});

function displayDefaultInterfaceVitesseMoyenne() {
    var vitesseMoyenneContainer = document.getElementById("vitesse-moyenne-container");
    vitesseMoyenneContainer.style.display = "block";
    var vitesseMoyenneResultatContainer = document.getElementById("vitesse-moyenne-resultat-container");
    vitesseMoyenneResultatContainer.style.display = "none";
    document.getElementById("vitesse-moyenne-input-h").value = "";
    document.getElementById("vitesse-moyenne-input-m").value = "";
    document.getElementById("vitesse-moyenne-input-s").value = "";
}

var saveContainer = document.getElementById('saveContainer');

mapFilter.onclick = function () {
    menuGauche.style.display = "none";
    mapFilter.style.display = "none";

    displayDefaultInterfaceTempsNecessaire();
    displayDefaultInterfaceVitesseMoyenne();
};

$('#savePath').click(function () {
    mapFilterForm.style.display = "block";
    saveContainer.style.display = "block";

    var monPath = globalPoly.getPath();
    var encodeString = google.maps.geometry.encoding.encodePath(monPath);
    var hiddenInputPath = document.getElementById('hiddenInputPath');
    var hiddenInputPlaceId = document.getElementById('hiddenInputPlaceId');

    hiddenInputPath.value = encodeString;

    var geocoder = new google.maps.Geocoder();

    latitude = firstMarker.getPosition().lat();
    longitude = firstMarker.getPosition().lng();
    var latlng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };

    geocoder.geocode({ 'location': latlng }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                hiddenInputPlaceId.value = results[1].place_id;
            } else {
                alert('Aucun résultat trouvé');
            }
        } else {
            alert('Le Geocoder a echoué. Raison: ' + status);
        }
    });
});

var mapFilterForm = document.getElementById('mapFilterForm');
mapFilterForm.onclick = function () {
    saveContainer.style.display = "none";
    mapFilterForm.style.display = "none";
};

function getCoordinatesAverage() {
    var geocoder = new google.maps.Geocoder();

    latitude = firstMarker.getPosition().lat();
    longitude = firstMarker.getPosition().lng();
    var latlng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };

    geocoder.geocode({ 'location': latlng }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                console.log(results[1].place_id);
            } else {
                window.alert('No results found');
            }
        } else {
            window.alert('Geocoder failed due to: ' + status);
        }
    });
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
/*!*************************************************************************!*\
  !*** multi ./assets/js/concepteur.js ./assets/css/concepteur_style.css ***!
  \*************************************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./assets/js/concepteur.js */"./assets/js/concepteur.js");
module.exports = __webpack_require__(/*! ./assets/css/concepteur_style.css */"./assets/css/concepteur_style.css");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgOTU3NzVlNjI1YzRiODI0NDU3MmQiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9jb25jZXB0ZXVyX3N0eWxlLmNzcz8wNzQ1Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb25jZXB0ZXVyLmpzIl0sIm5hbWVzIjpbImdsb2JhbFBvbHkiLCJwb2x5IiwicGF0aEFycmF5IiwibWFwIiwiZ2VvUG9zIiwibWFya2VyVmlkZSIsImZpcnN0UG9pbnQiLCJsYXN0UG9pbnQiLCJtYXJrZXIiLCJtYXJrZXJzIiwiZmlyc3RNYXJrZXIiLCJkaXN0YW5jZUttRmxvYXQiLCJkaXN0YW5jZUFycm9uZGllIiwidml0ZXNzZVZlbG8iLCJ2aXRlc3NlRm9vdGluZyIsInZpdGVzc2VNYXJjaGUiLCJpbml0TWFwIiwibWFwRGl2IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIndpbmRvd0hlaWdodCIsIndpbmRvdyIsImlubmVySGVpZ2h0IiwidGFpbGxlTmIiLCJ0YWlsbGVWb3VsdSIsInN0eWxlIiwiaGVpZ2h0IiwibWVudUdhdWNoZSIsInNhdmVDb250YWluZXIiLCJuYXZpZ2F0b3IiLCJnZW9sb2NhdGlvbiIsImdldEN1cnJlbnRQb3NpdGlvbiIsInBvc2l0aW9uIiwibGF0IiwiY29vcmRzIiwibGF0aXR1ZGUiLCJsbmciLCJsb25naXR1ZGUiLCJzZXRDZW50ZXIiLCJhbGVydCIsImdvb2dsZSIsIm1hcHMiLCJNYXAiLCJ6b29tIiwiZHJhZ2dhYmxlQ3Vyc29yIiwibWFwVHlwZUlkIiwiY2VudGVyIiwibWFwVHlwZSIsImdldE1hcFR5cGVJZCIsInBvbHlDb2xvciIsInRleHREaXYiLCJjb2xvciIsIlBvbHlsaW5lIiwic3Ryb2tlQ29sb3IiLCJzdHJva2VPcGFjaXR5Iiwic3Ryb2tlV2VpZ2h0Iiwic2V0TWFwIiwiYWRkTGlzdGVuZXIiLCJhZGRMYXRMbmciLCJhZGRMYXRMbmdSb3V0ZSIsImlucHV0Iiwic2VhcmNoQm94IiwicGxhY2VzIiwiU2VhcmNoQm94IiwiY29udHJvbHMiLCJDb250cm9sUG9zaXRpb24iLCJUT1BfTEVGVCIsInB1c2giLCJkZWxldGVBbGxCdXR0b24iLCJCT1RUT00iLCJkZWxldGVMYXN0QnV0dG9uIiwiY2xvc2VMb29wQnV0dG9uIiwiY2VudGVyTWFwIiwic2VsZWN0TW9kZVN1aXZpIiwic2F2ZVBhdGgiLCJSSUdIVCIsImJvdXRvbk1lbnVMYXRlcmFsIiwiTEVGVCIsInNldEJvdW5kcyIsImdldEJvdW5kcyIsImdldFBsYWNlcyIsImxlbmd0aCIsImJvdW5kcyIsIkxhdExuZ0JvdW5kcyIsImZvckVhY2giLCJwbGFjZSIsImdlb21ldHJ5IiwiY29uc29sZSIsImxvZyIsInZpZXdwb3J0IiwidW5pb24iLCJleHRlbmQiLCJsb2NhdGlvbiIsImZpdEJvdW5kcyIsImV2ZW50Iiwic2V0T3B0aW9ucyIsImljb24iLCJtb25QYXRoIiwiZ2V0UGF0aCIsImxhdExuZyIsIm1hcmtlclN0YXJ0IiwiZ2V0TGVuZ3RoIiwiTWFya2VyIiwiZ2V0QXJyYXkiLCJkaXN0YW5jZSIsInNwaGVyaWNhbCIsImNvbXB1dGVMZW5ndGgiLCJNYXRoIiwicm91bmQiLCJkaXYiLCJ1bmRlZmluZWQiLCJ0ZXh0Q29udGVudCIsInRpdGxlIiwibWVudUdhdWNoZUludGVyaWV1ciIsImRpc3BsYXkiLCJtZW51R2F1Y2hlTWVzc2FnZSIsImZvcm1Qb3BVcCIsInNhdmVNZXNzYWdlIiwidXBkYXRlVGVtcHNHbG9iYWwiLCJkaXJlY3Rpb25zU2VydmljZSIsImNhbGN1bGF0ZVJvdXRlIiwibmV3UG9pbnQiLCJEaXJlY3Rpb25zU2VydmljZSIsInRyYXZlbE1vZGUiLCJvcHRpb25zIiwic2VsZWN0ZWRJbmRleCIsInZhbHVlIiwicmVxdWVzdCIsIm9yaWdpbiIsImRlc3RpbmF0aW9uIiwiVHJhdmVsTW9kZSIsInJvdXRlIiwicmVzcG9uc2UiLCJzdGF0dXMiLCJwb2ludHNBcnJheSIsInJvdXRlcyIsIm92ZXJ2aWV3X3BhdGgiLCJpIiwidXBkYXRlUm91dGVMZW5ndGgiLCJnZXREZWNpbWFsIiwibiIsImZsb29yIiwiZ2V0UGFydGllRGVjaW1hbGUiLCJ1cGRhdGVUZW1wc05lY2Vzc2FpcmUiLCJ2aXRlc3NlTW95ZW5uZSIsInNwb3J0IiwidGVtcHNIVE1MIiwidGVtcHMiLCJ0ZW1wc0VuTWludXRlc0F2ZWNTZWNvbmRlcyIsInNlY29uZGVzVGVtcHMiLCJ0ZW1wc0VuTWludXRlcyIsIm1pbnV0ZU9ydGhvZ3JhcGhlIiwic2Vjb25kZU9ydGhvZ3JhcGhlIiwidGVtcHNFbkhldXJlc0Zsb2F0IiwibWludXRlc0R1VGVtcHNQb3VySGV1cmVzIiwidGVtcHNFbkhldXJlcyIsImhldXJlT3J0aG9ncmFwaGUiLCJyZWN1cCIsImRlcm5pZXJFbGVtIiwidGJsIiwidGJsTGVuZ3RoIiwicG9zIiwiaGFuZGxlTG9jYXRpb25FcnJvciIsImJyb3dzZXJIYXNHZW9sb2NhdGlvbiIsImluZm9XaW5kb3ciLCJzZXRQb3NpdGlvbiIsInNldENvbnRlbnQiLCJzZXRNYXBPbkFsbCIsIiQiLCJjbGljayIsInBvcCIsInBhdGhMZW5ndGgiLCJkZWxldGVQb2ludHMiLCJmb3JtRmlsdGVyIiwibWVudUdhdWNoZUJvdXRvbiIsIm1hcEZpbHRlciIsIm9uY2xpY2siLCJpbnB1dFRlbXBzTmVjZXNzYWlyZSIsInZpdGVzc2VJbnB1dCIsImlzTmFOIiwidGVtcHNOZWNlc3NhaXJlRGl2IiwidGVtcHNOZWNlc3NhaXJlUmVzdWx0YXREaXYiLCJ0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdEFsbHVyZVNwYW4iLCJ0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdFNwYW4iLCJkaXNwbGF5RGVmYXVsdEludGVyZmFjZVRlbXBzTmVjZXNzYWlyZSIsInRwdm1ISW5wdXQiLCJ0cHZtTUlucHV0IiwidHB2bVNJbnB1dCIsInRwdm1IIiwidHB2bU0iLCJ0cHZtUyIsInRwdm1ISW50IiwidHB2bU1JbnQiLCJ0cHZtU0ludCIsInBhcnNlSW50IiwidHB2bSIsInZpdGVzc2VNb3llbm5lUmVzdWx0YXRTcGFuIiwidml0ZXNzZU1veWVubmVDb250YWluZXIiLCJ2aXRlc3NlTW95ZW5uZVJlc3VsdGF0Q29udGFpbmVyIiwiZGlzcGxheURlZmF1bHRJbnRlcmZhY2VWaXRlc3NlTW95ZW5uZSIsIm1hcEZpbHRlckZvcm0iLCJlbmNvZGVTdHJpbmciLCJlbmNvZGluZyIsImVuY29kZVBhdGgiLCJoaWRkZW5JbnB1dFBhdGgiLCJoaWRkZW5JbnB1dFBsYWNlSWQiLCJnZW9jb2RlciIsIkdlb2NvZGVyIiwiZ2V0UG9zaXRpb24iLCJsYXRsbmciLCJwYXJzZUZsb2F0IiwiZ2VvY29kZSIsInJlc3VsdHMiLCJHZW9jb2RlclN0YXR1cyIsIk9LIiwicGxhY2VfaWQiLCJnZXRDb29yZGluYXRlc0F2ZXJhZ2UiLCJNb3VzZXRyYXAiLCJiaW5kIiwiZGVsZXRlTGFzdFBvaW50Iiwic2V0Wm9vbSJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7O0FDN0RBLHlDOzs7Ozs7Ozs7Ozs7QUNBQSxJQUFJQSxVQUFKO0FBQ0EsSUFBSUMsSUFBSjs7QUFFQSxJQUFJQyxZQUFZLEVBQWhCOztBQUVBLElBQUlDLEdBQUo7QUFDQSxJQUFJQyxNQUFKOztBQUVBLElBQUlDLGFBQWEsaUNBQWpCLEMsQ0FBc0Q7O0FBRXRELElBQUlDLFVBQUosQyxDQUFtQjtB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LENBRkQ7O0FBT0E7QUFDQSxJQUFJaEwsT0FBTyxFQUFYOztBQUVBOEssVUFBVUMsSUFBVixDQUFlLENBQUMsWUFBRCxFQUFlLFFBQWYsQ0FBZixFQUF5QyxZQUFXO0FBQ2hELFFBQUcvSyxRQUFRLEVBQVgsRUFBYztBQUNWQTtBQUNBeEMsWUFBSXlOLE9BQUosQ0FBWWpMLElBQVo7QUFDSCxLQUhELE1BR0s7QUFDREosY0FBTSxnQ0FBTjtBQUNIO0FBQ0osQ0FQRDs7QUFTQWtMLFVBQVVDLElBQVYsQ0FBZSxDQUFDLFlBQUQsRUFBZSxRQUFmLENBQWYsRUFBeUMsWUFBVztBQUNoRCxRQUFHL0ssUUFBUSxDQUFYLEVBQWE7QUFDVEE7QUFDQXhDLFlBQUl5TixPQUFKLENBQVlqTCxJQUFaO0FBQ0gsS0FIRCxNQUdLO0FBQ0RKLGNBQU0sa0NBQU47QUFDSDtBQUNKLENBUEQsRSIsImZpbGUiOiJjb25jZXB0ZXVyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiL2J1aWxkL1wiO1xuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDEpO1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHdlYnBhY2svYm9vdHN0cmFwIDk1Nzc1ZTYyNWM0YjgyNDQ1NzJkIiwiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW5cblxuXG4vLy8vLy8vLy8vLy8vLy8vLy9cbi8vIFdFQlBBQ0sgRk9PVEVSXG4vLyAuL2Fzc2V0cy9jc3MvY29uY2VwdGV1cl9zdHlsZS5jc3Ncbi8vIG1vZHVsZSBpZCA9IC4vYXNzZXRzL2Nzcy9jb25jZXB0ZXVyX3N0eWxlLmNzc1xuLy8gbW9kdWxlIGNodW5rcyA9IDEiLCJ2YXIgZ2xvYmFsUG9seTtcclxudmFyIHBvbHk7XHJcblxyXG52YXIgcGF0aEFycmF5ID0gW107XHJcblxyXG52YXIgbWFwO1xyXG52YXIgZ2VvUG9zO1xyXG5cclxudmFyIG1hcmtlclZpZGUgPSBcInt7IGFzc2V0KCdpbWFnZXMvZW1wdHkucG5nJykgfX1cIjsgICAvL3BvdXIgbmUgcGFzIGF2b2lyIGRlIG1hcnF1ZXVyIHBvdXIgY2hhcXVlIHBvaW50ICjDoCBhbWVsaW9yZXIpXHJcblxyXG52YXIgZmlyc3RQb2ludDsgICAgLy9wcmVtaWVyIHBvaW50IMOgIHF1aSBsJ29uIGRvbm5lcmEgdW4gc2tpbiBkaWZmw6lyZW50IChtYXJxdWV1ciB2ZXJ0KVxyXG52YXIgbGFzdFBvaW50OyAgICAvL2Rlcm5pZXIgcG9pbnQgw6AgYXZvaXIgw6l0w6kgcGxhY8OpIChkZXJuaWVyZXMgY29vcmRzLCBwYXMgZGVybmllciBtYXJxdWV1cilcclxudmFyIG1hcmtlcjtcclxudmFyIG1hcmtlcnMgPSBbXTsgICAgLy9hcnJheSBjb250ZW5hbnQgbCdlbnNlbWJsZSBkZXMgbWFycXVldXJzXHJcbnZhciBmaXJzdE1hcmtlcjsgICAvL3ByZW1pZXIgbWFycXVldXIgKMOgIG5lIHBhcyBjb25mb25kcmUgYXZlYyBmaXJzdFBvaW50IHF1aSBjb250aWVudCBsZXMgY29vcmRzIGRlIG5vdHJlIHByZW1pZXIgcG9pbnQpXHJcbnZhciBkaXN0YW5jZUttRmxvYXQ7ICAgICAvL2Rpc3RhbmNlIGVuIGttXHJcbnZhciBkaXN0YW5jZUFycm9uZGllO1xyXG5cclxudmFyIHZpdGVzc2VWZWxvID0gMjA7XHJcbnZhciB2aXRlc3NlRm9vdGluZyA9IDEyO1xyXG52YXIgdml0ZXNzZU1hcmNoZSA9IDY7XHJcblxyXG5cclxuXHJcbmZ1bmN0aW9uIGluaXRNYXAoKSB7XHJcblxyXG4gICAgdmFyIG1hcERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWFwXCIpO1xyXG4gICAgLy9qZSByw6ljdXDDqXJlIG1vbiBlbGVtZW50IGF2ZWMgbCdpZCBtYXBcclxuICAgIHZhciB3aW5kb3dIZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XHJcbiAgICAvL2plIHByZW5kIGxhIGhhdXRldXIgZGUgbGEgZmVuw6p0cmVcclxuICAgIHZhciB0YWlsbGVOYiA9IHdpbmRvd0hlaWdodCAtIDgwO1xyXG4gICAgdmFyIHRhaWxsZVZvdWx1ID0gdGFpbGxlTmIgKyAncHgnO1xyXG4gICAgLy9qZSBjYWxjdWxlIHBvdXIgcXVlIG1hIG1hcCBmYXNzZSBoYXV0ZXVyIGRlIGxhIGZlbsOqdHJlIG1vaW5zIGxlIGhlYWRlclxyXG4gICAgbWFwRGl2LnN0eWxlLmhlaWdodCA9IHRhaWxsZVZvdWx1O1xyXG4gICAgLy9jJ2VzdCBjb21tZSBzaSBqZSBmYWlzIGVuIENTUzogJ2hlaWdodDogdGFpbGxlVm91bHU7J1xyXG5cclxuICAgIC8vZGVmaW5pciB0YWlsbGUgZHUgbWVudSBnYXVjaGVcclxuICAgIHZhciBtZW51R2F1Y2hlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21lbnVHYXVjaGUnKTtcclxuICAgIG1lbnVHYXVjaGUuc3R5bGUuaGVpZ2h0ID0gdGFpbGxlVm91bHU7XHJcblxyXG4gICAgdmFyIHNhdmVDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2F2ZUNvbnRhaW5lcicpO1xyXG4gICAgc2F2ZUNvbnRhaW5lci5zdHlsZS5oZWlnaHQgPSB0YWlsbGVWb3VsdTtcclxuXHJcbiAgICAvKnZhciBmb3JtUG9wVXAgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybVBvcFVwJyk7XHJcbiAgICBmb3JtUG9wVXAuc3R5bGUuaGVpZ2h0ID0gKHRhaWxsZU5iIC0gMTAwKSArICdweCc7Ki9cclxuXHJcblxyXG5cclxuICAgIC8vb24gdmV1dCBjZW50cmVyIGxhIGNhcnRlIHN1ciBub3RyZSBwb3NpdGlvbiBzaSBsYSBnZW9sb2NhbGlzYXRpb24gZXN0IGFjdGl2w6llXHJcbiAgICBpZiAobmF2aWdhdG9yLmdlb2xvY2F0aW9uKSB7XHJcbiAgICAgICAgbmF2aWdhdG9yLmdlb2xvY2F0aW9uLmdldEN1cnJlbnRQb3NpdGlvbihmdW5jdGlvbihwb3NpdGlvbil7ICAgLy9yZWN1cMOocmUgbm90cmUgcG9zaXRpb25cclxuICAgICAgICAgICAgZ2VvUG9zID0ge1xyXG4gICAgICAgICAgICAgICAgbGF0OiBwb3NpdGlvbi5jb29yZHMubGF0aXR1ZGUsXHJcbiAgICAgICAgICAgICAgICBsbmc6IHBvc2l0aW9uLmNvb3Jkcy5sb25naXR1ZGVcclxuICAgICAgICAgICAgfTtcclxuXHJcbiAgICAgICAgICAgIG1hcC5zZXRDZW50ZXIoZ2VvUG9zKTsgICAvL2NlbnRyZSBsYSBjYXJ0ZVxyXG5cclxuICAgICAgICB9KTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgLy8gTGUgbmF2aWdhdGV1ciBuZSBzdXBwb3J0ZSBwYXMgbGEgZ8Opb2xvY2FsaXNhdGlvbiBvdSBlbGxlIGEgw6l0w6kgcmVmdXPDqVxyXG4gICAgICAgIGFsZXJ0KCdWb3RyZSBuYXZpZ3VhdGV1ciBuZSBzdXBwb3J0ZSBwYXMgbGEgZ8Opb2xvY2FsaXNhdGlvbiBvdSB1biBwcm9ibMOobWUgZXN0IHN1cnZlbnUnKTtcclxuICAgIH1cclxuXHJcbiAgICBtYXAgPSBuZXcgZ29vZ2xlLm1hcHMuTWFwKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtYXAnKSwgeyAgICAvL3JlY3Vww6lyZSBsYSBkaXYgI21hcCBldCBsYSB0cmFuc2Zvcm1lIGVuIG9iamV0IG1hcCwgc3RvY2vDqSBkYW5zIGxhIHZhciBtYXBcclxuICAgICAgICB6b29tOiAxNCwgICAvL0TDqWZpbmllIGxlIHpvb20gcGFyIGTDqWZhdXRcclxuICAgICAgICBkcmFnZ2FibGVDdXJzb3I6IFwiY3Jvc3NoYWlyXCIsICAgLy9vbiBhIHVuZSBjcm9peCBjb21tZSBjdXJzZXVyXHJcbiAgICAgICAgbWFwVHlwZUlkOiAnaHlicmlkJyxcclxuICAgICAgICBjZW50ZXI6IHtsYXQ6IDQ5LjM5MDQ3MDcsIGxuZzogMy4zOTI5MTk4fVxyXG4gICAgfSk7XHJcblxyXG4gICAgdmFyIG1hcFR5cGUgPSBtYXAuZ2V0TWFwVHlwZUlkKCk7XHJcbiAgICB2YXIgcG9seUNvbG9yO1xyXG4gICAgdmFyIHRleHREaXYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGV4dERpdicpO1xyXG5cclxuICAgIGlmIChtYXBUeXBlID09ICdoeWJyaWQnKXtcclxuICAgICAgICBwb2x5Q29sb3IgPSBcIiMzNWY3MDBcIjtcclxuICAgICAgICB0ZXh0RGl2LnN0eWxlLmNvbG9yID0gXCIjZmZmXCI7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIHBvbHlDb2xvciA9IFwiIzNCQTE0Q1wiO1xyXG4gICAgICAgIHRleHREaXYuc3R5bGUuY29sb3IgPSBcIiMwMDBcIjtcclxuICAgIH1cclxuXHJcbiAgICBnbG9iYWxQb2x5ID0gbmV3IGdvb2dsZS5tYXBzLlBvbHlsaW5lKHsgICAvL2Nyw6nDqSBkw6lqw6AgbGEgcG9seWxpbmVcclxuICAgICAgICBzdHJva2VDb2xvcjogIHBvbHlDb2xvcixcclxuICAgICAgICBzdHJva2VPcGFjaXR5OiAxLjAsXHJcbiAgICAgICAgc3Ryb2tlV2VpZ2h0OiAzXHJcbiAgICB9KTtcclxuICAgIGdsb2JhbFBvbHkuc2V0TWFwKG1hcCk7ICAgLy9vbiBhdHRhY2hlIGwnb2JqZXQgcG9seWxpbmUgw6Agbm90cmUgbWFwXHJcblxyXG4gICAgcG9seSA9IG5ldyBnb29nbGUubWFwcy5Qb2x5bGluZSh7ICAgLy9jcsOpw6kgZMOpasOgIGxhIHBvbHlsaW5lXHJcbiAgICAgICAgc3Ryb2tlQ29sb3I6IHBvbHlDb2xvcixcclxuICAgICAgICBzdHJva2VPcGFjaXR5OiAxLjAsXHJcbiAgICAgICAgc3Ryb2tlV2VpZ2h0OiAzXHJcbiAgICB9KTtcclxuXHJcbiAgICAvL2xpc3RlbmVycyBxdWkgdm9udCDDqWNvdXRlciBsZXMgw6l2w6luZW1lbnRzIGNsaWNrIGV0IHJpZ2h0Y2ljayBwb3VyIHkgbGFuY2VyIGRlcyBmb25jdGlvbnNcclxuICAgIG1hcC5hZGRMaXN0ZW5lcignY2xpY2snLCBhZGRMYXRMbmcpOyAgICAgLy9xdWFuZCBvbiBjbGlxdWUgc3VyIHVuIGVuZHJvaXQgZGUgbGEgY2FydGUgb24gbGFuY2UgbGEgZm9uY3Rpb24gYWRkTGF0TG5nXHJcbiAgICBtYXAuYWRkTGlzdGVuZXIoJ3JpZ2h0Y2xpY2snLCBhZGRMYXRMbmdSb3V0ZSk7ICAgIC8vcXVhbmQgb24gY2xpcXVlIGRyb2l0IHN1ciB1biBlbmRyb2l0IG9uIGxhbmNlIGxhIGZvbmN0aW9uIGFkZExhdExuZ1JvdXRlXHJcblxyXG5cclxuXHJcbiAgICAvL0ljaSwgb24gdmEgdHJhbnNmb3JtZXIgbm9zIGNoYW1wcyBIVE1MIChxdWUgbCdvbiB2YSByZWN1cMOpcmVyIGF2ZWMgZ2V0RWxlbWVudEJ5SWQpIGVuIFwiY29udHLDtGxlc1wiIGRlIGxhIG1hcC4gUG91ciBsJ0FQSSwgdW4gY29udHLDtGxlIGVzdCBwYXIgZXhlbXBsZSBsZSBib3V0b24gcGxlaW4gw6ljcmFuIGVuIGhhdXQgw6AgZHJvaXRlLiBDJ2VzdCBsZSBzZXVsIG1veWVuIHBvdGFibGUgZGUgZmFpcmUgcGFzc2VyIGRlcyBib3V0b25zIHN1ciB1bmUgY2FydGUuXHJcblxyXG4gICAgdmFyIGlucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3BhYy1pbnB1dCcpO1xyXG4gICAgdmFyIHNlYXJjaEJveCA9IG5ldyBnb29nbGUubWFwcy5wbGFjZXMuU2VhcmNoQm94KGlucHV0KTsgICAvL29uIGTDqWZpbml0IHF1ZSBub3RyZSBpbnB1dCBlc3QgdW5lIHNlYXJjaCBib3ggKHF1aSB2YSBub3VzIHBlcm1ldHRyZSBkZSByZW50cmVyIG5vdHJlIGxvY2FsaXNhdGlvbiBhdmVjIGwnYXV0b2NvbXBsw6l0aW9uKVxyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChpbnB1dCk7ICAgLy9jZSBjb250csO0bGUgc2UgcG9zaXRpb25uZXJhIGVuIGhhdXQgw6AgZ2F1Y2hlXHJcblxyXG5cclxuICAgIHZhciBkZWxldGVBbGxCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlQWxsQnV0dG9uJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkJPVFRPTV0ucHVzaChkZWxldGVBbGxCdXR0b24pO1xyXG5cclxuICAgIHZhciBkZWxldGVMYXN0QnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZUxhc3RCdXR0b24nKTtcclxuICAgIG1hcC5jb250cm9sc1tnb29nbGUubWFwcy5Db250cm9sUG9zaXRpb24uQk9UVE9NXS5wdXNoKGRlbGV0ZUxhc3RCdXR0b24pO1xyXG5cclxuICAgIHZhciBjbG9zZUxvb3BCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VMb29wQnV0dG9uJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkJPVFRPTV0ucHVzaChjbG9zZUxvb3BCdXR0b24pO1xyXG5cclxuXHJcbiAgICB2YXIgY2VudGVyTWFwID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NlbnRlck1hcCcpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChjZW50ZXJNYXApO1xyXG5cclxuXHJcbiAgICB2YXIgc2VsZWN0TW9kZVN1aXZpID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlbGVjdE1vZGVTdWl2aScpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5UT1BfTEVGVF0ucHVzaChzZWxlY3RNb2RlU3VpdmkpO1xyXG5cclxuICAgIHZhciBzYXZlUGF0aCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzYXZlUGF0aCcpO1xyXG4gICAgbWFwLmNvbnRyb2xzW2dvb2dsZS5tYXBzLkNvbnRyb2xQb3NpdGlvbi5SSUdIVF0ucHVzaChzYXZlUGF0aCk7XHJcblxyXG4gICAgdmFyIGJvdXRvbk1lbnVMYXRlcmFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JvdXRvbk1lbnVMYXRlcmFsJyk7XHJcbiAgICBtYXAuY29udHJvbHNbZ29vZ2xlLm1hcHMuQ29udHJvbFBvc2l0aW9uLkxFRlRdLnB1c2goYm91dG9uTWVudUxhdGVyYWwpO1xyXG5cclxuXHJcblxyXG5cclxuICAgIC8vdG91dGUgY2V0dGUgZGVybmnDqHJlIHNlY3Rpb24gc2UgcmFwcG9ydGUgw6AgbGEgc2VhcmNoYm94IChsb2NhbGlzYXRpb24pXHJcblxyXG4gICAgbWFwLmFkZExpc3RlbmVyKCdib3VuZHNfY2hhbmdlZCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHNlYXJjaEJveC5zZXRCb3VuZHMobWFwLmdldEJvdW5kcygpKTtcclxuICAgIH0pO1xyXG5cclxuICAgIHNlYXJjaEJveC5hZGRMaXN0ZW5lcigncGxhY2VzX2NoYW5nZWQnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgcGxhY2VzID0gc2VhcmNoQm94LmdldFBsYWNlcygpO1xyXG5cclxuICAgICAgICBpZiAocGxhY2VzLmxlbmd0aCA9PT0gMCkge1xyXG4gICAgICAgICAgICByZXR1cm47XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICB2YXIgYm91bmRzID0gbmV3IGdvb2dsZS5tYXBzLkxhdExuZ0JvdW5kcygpO1xyXG5cclxuICAgICAgICBwbGFjZXMuZm9yRWFjaChmdW5jdGlvbihwbGFjZSkge1xyXG4gICAgICAgICAgICBpZiAoIXBsYWNlLmdlb21ldHJ5KSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcIkxlIGxpZXUgbmUgcmV0b3VybmUgcmllblwiKTtcclxuICAgICAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgaWYgKHBsYWNlLmdlb21ldHJ5LnZpZXdwb3J0KSB7XHJcbiAgICAgICAgICAgICAgICBib3VuZHMudW5pb24ocGxhY2UuZ2VvbWV0cnkudmlld3BvcnQpO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgYm91bmRzLmV4dGVuZChwbGFjZS5nZW9tZXRyeS5sb2NhdGlvbik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgbWFwLmZpdEJvdW5kcyhib3VuZHMpO1xyXG4gICAgfSk7XHJcblxyXG4gICAgZ29vZ2xlLm1hcHMuZXZlbnQuYWRkTGlzdGVuZXIoIG1hcCwgJ21hcHR5cGVpZF9jaGFuZ2VkJywgZnVuY3Rpb24oKXtcclxuICAgICAgICB2YXIgbWFwVHlwZSA9IG1hcC5nZXRNYXBUeXBlSWQoKTtcclxuXHJcbiAgICAgICAgaWYgKG1hcFR5cGUgPT0gJ2h5YnJpZCcpe1xyXG4gICAgICAgICAgICBnbG9iYWxQb2x5LnNldE9wdGlvbnMoe3N0cm9rZUNvbG9yOiAnIzM1ZjcwMCd9KTtcclxuICAgICAgICAgICAgZmlyc3RNYXJrZXIuc2V0T3B0aW9ucyh7aWNvbjogXCJ7eyBhc3NldCgnaW1hZ2VzL21hcmtlcl9oeWJyaWQucG5nJykgfX1cIn0pO1xyXG4gICAgICAgICAgICB0ZXh0RGl2LnN0eWxlLmNvbG9yID0gXCIjZmZmXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgZ2xvYmFsUG9seS5zZXRPcHRpb25zKHtzdHJva2VDb2xvcjogJyMzQkExNEMnfSk7XHJcbiAgICAgICAgICAgIGZpcnN0TWFya2VyLnNldE9wdGlvbnMoe2ljb246IFwie3sgYXNzZXQoJ2ltYWdlcy9tYXJrZXIucG5nJykgfX1cIn0pO1xyXG4gICAgICAgICAgICB0ZXh0RGl2LnN0eWxlLmNvbG9yID0gXCIjMDAwXCI7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcbn1cclxuLyoqKioqKioqKioqKiogRklOIElOSVRNQVAgKioqKioqKioqKioqKi9cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG4vLyBGb25jdGlvbiBxdWkgc2VyYSBleGVjdXTDqWUgbG9ycyBkdSBjbGlxdWUgZCd1biBlbmRyb2l0IGRlIGxhIGNhcnRlXHJcbmZ1bmN0aW9uIGFkZExhdExuZyhldmVudCkge1xyXG4gICAgdmFyIG1vblBhdGggPSBnbG9iYWxQb2x5LmdldFBhdGgoKTsgICAvL29uIHLDqWN1cMOpcmUgbGUgcGFyY291cnMgKHNpIGNlIG4nZXN0IHBhcyBsZSBwcmVtaWVyIHBvaW50KVxyXG5cclxuICAgIG1vblBhdGgucHVzaChldmVudC5sYXRMbmcpO1xyXG5cclxuXHJcbiAgICB2YXIgbWFya2VyU3RhcnQ7XHJcbiAgICB2YXIgbWFwVHlwZSA9IG1hcC5nZXRNYXBUeXBlSWQoKTtcclxuXHJcbiAgICBpZiAobWFwVHlwZSA9PSAnaHlicmlkJyl7XHJcbiAgICAgICAgbWFya2VyU3RhcnQgPSBcInt7IGFzc2V0KCdpbWFnZXMvbWFya2VyX2h5YnJpZC5wbmcnKSB9fVwiO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBtYXJrZXJTdGFydCA9IFwie3sgYXNzZXQoJ2ltYWdlcy9tYXJrZXIucG5nJykgfX1cIjtcclxuICAgIH1cclxuXHJcblxyXG4gICAgLy9TaSBjJ2VzdCBsZSBwcmVtaWVyIG1hcnF1ZXVyIG9uIGx1aSBkb25uZSBsJ2ljb25lIGltYWdlIHNpbm9uIG9uIGxhaXNzZSB1biBtYXJxZXVyIG5vcm1hbGVcclxuICAgIGlmIChtb25QYXRoLmdldExlbmd0aCgpID09PSAxKSB7XHJcbiAgICAgICAgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XHJcbiAgICAgICAgICAgIHBvc2l0aW9uOiBldmVudC5sYXRMbmcsXHJcbiAgICAgICAgICAgIG1hcDogbWFwLFxyXG4gICAgICAgICAgICBpY29uOiBtYXJrZXJTdGFydCAgICAgICAgICAvL2xlIG1hcnF1ZXVyIGF1cmEgbm90cmUgaW1hZ2UgZGUgZHJhcGVhdVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBmaXJzdFBvaW50ID0gZXZlbnQubGF0TG5nO1xyXG5cclxuICAgICAgICBsYXN0UG9pbnQgPSBldmVudC5sYXRMbmc7XHJcblxyXG4gICAgICAgIGZpcnN0TWFya2VyID0gbWFya2VyO1xyXG4gICAgfVxyXG4gICAgZWxzZXsgICAgIC8vc2lub24gY2VsYSB2ZXV0IGRpcmUgcXVlIGNlIG4nZXN0IHBhcyBsZSBwcmVtaWVyIG1hcnF1ZXVyIGV0IG9uIG5lIGx1aSBkb25uZSBwYXMgZGUgc2tpbiAoZW1wdHkucG5nKVxyXG4gICAgICAgIG1hcmtlciA9IG5ldyBnb29nbGUubWFwcy5NYXJrZXIoe1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogZXZlbnQubGF0TG5nLFxyXG4gICAgICAgICAgICBtYXA6IG1hcCxcclxuICAgICAgICAgICAgaWNvbjogbWFya2VyVmlkZVxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBtYXJrZXJzLnB1c2gobWFya2VyKTsgICAvL29uIG1ldCBub3RyZSB0b3V0IG5vdXZlYXUgbWFya2VyIGRhbnMgbGUgdGFibGVhdSBtYXJrZXJzXHJcblxyXG4gICAgICAgIGxhc3RQb2ludCA9IGV2ZW50LmxhdExuZztcclxuXHJcbiAgICAgICAgcGF0aEFycmF5ID0gbW9uUGF0aC5nZXRBcnJheSgpO1xyXG5cclxuICAgICAgICB2YXIgZGlzdGFuY2UgPSBnb29nbGUubWFwcy5nZW9tZXRyeS5zcGhlcmljYWwuY29tcHV0ZUxlbmd0aChwYXRoQXJyYXkpOyAgIC8vY2FsY3VsZSBsYSBkaXN0YW5jZSBkdSBwYXJjb3VycyBlbiBjb21wdGFudCB0b3V0IGxlcyBwb2ludHNcclxuICAgICAgICBkaXN0YW5jZUFycm9uZGllID0gTWF0aC5yb3VuZChkaXN0YW5jZSk7ICAgIC8vYXJyb25kaSBsYSBkaXN0YW5jZSDDoCBsJ3VuaXTDqSBwcsOoc1xyXG4gICAgICAgIGRpc3RhbmNlS21GbG9hdCA9IGRpc3RhbmNlQXJyb25kaWUvMTAwMDtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgZGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ0ZXh0RGl2XCIpOyAgICAvL3JlY3VwZXJlIGxhIGRpdiB0ZXh0RGl2XHJcbiAgICBpZiAoKGRpc3RhbmNlQXJyb25kaWUgPT0gdW5kZWZpbmVkKSB8fCAoZGlzdGFuY2VBcnJvbmRpZSA9PSAwKSl7ICAgLy9zaSBhdWN1biBwYXJjb3VycyBuJ2VzdCBwcsOpc2VudCBvdSBzJ2lsIG4neSBhIHF1J3VuIG1hcnF1ZXVyXHJcbiAgICAgICAgZGl2LnRleHRDb250ZW50ID0gXCJWb3VzIG4nYXZleiBwbGFjw6kgcXUndW4gc2V1bCBtYXJxdWV1clwiXHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIGRpdi50ZXh0Q29udGVudCA9IFwiSWwgeSBhIFwiICsgZGlzdGFuY2VLbUZsb2F0ICsgXCIga2lsb23DqHRyZXMgZW50cmUgbGUgcHJlbWllciBldCBsZSBkZXJuaWVyIHBvaW50XCIgO1xyXG4gICAgICAgIC8vb24gYWZmaWNoZSBsYSBkaXN0YW5jZSBhcnJvbmRpZSBldCBhdSBrbSBkYW5zIGxhIGRpdiB0ZXh0RGl2XHJcbiAgICAgICAgZGl2LnRpdGxlID0gXCJPdSBcIiArIGRpc3RhbmNlQXJyb25kaWUgKyBcIiBtw6h0cmVzXCI7XHJcblxyXG4gICAgICAgIHZhciBtZW51R2F1Y2hlSW50ZXJpZXVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtZW51R2F1Y2hlLWludGVyaWV1clwiKTtcclxuICAgICAgICBtZW51R2F1Y2hlSW50ZXJpZXVyLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgICAgIHZhciBtZW51R2F1Y2hlTWVzc2FnZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1tZXNzYWdlXCIpO1xyXG4gICAgICAgIG1lbnVHYXVjaGVNZXNzYWdlLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuXHJcbiAgICAgICAgdmFyIGZvcm1Qb3BVcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZm9ybVBvcFVwXCIpO1xyXG4gICAgICAgIGZvcm1Qb3BVcC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICB2YXIgc2F2ZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNhdmUtbWVzc2FnZVwiKTtcclxuICAgICAgICBzYXZlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB9XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gQURETEFUTE5HICoqKioqKioqKioqKiovXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG52YXIgZGlyZWN0aW9uc1NlcnZpY2U7XHJcblxyXG5mdW5jdGlvbiBjYWxjdWxhdGVSb3V0ZShkaXJlY3Rpb25zU2VydmljZSwgbGFzdFBvaW50LCBuZXdQb2ludCkge1xyXG5cclxuICAgIHZhciBtb25QYXRoID0gZ2xvYmFsUG9seS5nZXRQYXRoKCk7XHJcblxyXG4gICAgdmFyIGRpcmVjdGlvbnNTZXJ2aWNlID0gbmV3IGdvb2dsZS5tYXBzLkRpcmVjdGlvbnNTZXJ2aWNlKCk7XHJcblxyXG4gICAgdmFyIHNlbGVjdE1vZGVTdWl2aSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZWxlY3RNb2RlU3VpdmknKTtcclxuXHJcbiAgICB2YXIgdHJhdmVsTW9kZSA9IHNlbGVjdE1vZGVTdWl2aS5vcHRpb25zW3NlbGVjdE1vZGVTdWl2aS5zZWxlY3RlZEluZGV4XS52YWx1ZTsgICAvL2ljaSBvbiBtZXQgcXVlIGxlIG1vZGUgZGUgdHJhbnNwb3J0IGVzdCBsYSBtYXJjaGUgbWFpcyBpbiBwb3VycmEgcGx1cyB0YXJkIGxhaXNzZXIgw6AgbCd1dGlsaXNhdGV1ciBkZSBjaG9pc2lyIGxlIG1vZGVcclxuICAgIHZhciByZXF1ZXN0ID0ge1xyXG4gICAgICAgIG9yaWdpbjogbGFzdFBvaW50LFxyXG4gICAgICAgIGRlc3RpbmF0aW9uOiBuZXdQb2ludCxcclxuICAgICAgICB0cmF2ZWxNb2RlOiBnb29nbGUubWFwcy5UcmF2ZWxNb2RlW3RyYXZlbE1vZGVdXHJcbiAgICB9O1xyXG5cclxuICAgIGRpcmVjdGlvbnNTZXJ2aWNlLnJvdXRlKHJlcXVlc3QsIGZ1bmN0aW9uKHJlc3BvbnNlLCBzdGF0dXMpIHtcclxuICAgICAgICAgICAgaWYgKHN0YXR1cyA9PSAnT0snKSB7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy9zJ2lsIG4neSBhIGF1Y3VuIHByb2Jsw6htZSBhdmVjIGwnaXRpbsOpcmFpcmVcclxuICAgICAgICAgICAgICAgIHZhciBwb2ludHNBcnJheSA9IHJlc3BvbnNlLnJvdXRlc1swXS5vdmVydmlld19wYXRoO1xyXG5cclxuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBpIDwgcG9pbnRzQXJyYXkubGVuZ3RoOyBpKyspIHtcclxuICAgICAgICAgICAgICAgICAgICBtb25QYXRoLnB1c2gocG9pbnRzQXJyYXlbaV0pO1xyXG4gICAgICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgICAgIHVwZGF0ZVJvdXRlTGVuZ3RoKCk7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICBhbGVydChcIklsIG4neSBhIHBhcyBkZSBjaGVtaW4gcG91ciBhbGxlciDDoCBjZXQgZW5kcm9pdFwiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIClcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gQ0FMQ1VMUk9VVEUgKioqKioqKioqKioqKi9cclxuXHJcblxyXG5cclxuXHJcblxyXG4vL2xvcnNxdWUgbCdvbiByaWdodCBjbGljayBzdXIgdW4gZW5kcm9pdCBvbiB2YSByYWxpZXIgbGUgZGVybmllciBwb2ludCBjcsOpw6kgw6AgY2UgdG91dCBub3V2ZWF1IHBvaW50IG1haXMgZW4gYWZmaWNoYW50IGwnaXRpbsOpcmFpcmUgZW4gcGFzc2FudCBwYXIgbGEgcm91dGUgb3UgbGVzIGNoZW1pbnMgKHBhcyBlbiBjcsOpYW50IHVuZSBsaWduZSBkcm9pdGUpXHJcbmZ1bmN0aW9uIGFkZExhdExuZ1JvdXRlKGV2ZW50KXtcclxuXHJcbiAgICBuZXdQb2ludCA9IGV2ZW50LmxhdExuZzsgICAvLyBDb29yZHMgZHUgcG9pbnQgcXVpIHZpZW50IGQnZXRyZSByaWdodGNsaWNrw6lcclxuXHJcbiAgICBjYWxjdWxhdGVSb3V0ZShkaXJlY3Rpb25zU2VydmljZSwgbGFzdFBvaW50LCBuZXdQb2ludCk7ICAvL2ZvbmN0aW9uIHF1aSBjYWxjdWxlIGV0IGFmZmljaGUgbCdpdGluw6lyYWlyZVxyXG5cclxuICAgIHZhciBtb25QYXRoID0gZ2xvYmFsUG9seS5nZXRQYXRoKCk7XHJcblxyXG4gICAgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XHJcbiAgICAgICAgcG9zaXRpb246IGV2ZW50LmxhdExuZyxcclxuICAgICAgICBtYXA6IG1hcCxcclxuICAgICAgICBpY29uOiBtYXJrZXJWaWRlXHJcbiAgICB9KTtcclxuXHJcbiAgICBwb2x5LnNldE1hcChtYXApOyAgLy9vbiBhZmZpY2hlIGxhIHBvbHlsaW5lIHN1ciBsYSBtYXBcclxuXHJcbiAgICBtYXJrZXJzLnB1c2gobWFya2VyKTsgICAvL29uIG1ldCBub3RyZSB0b3V0IG5vdXZlYXUgbWFya2VyIGRhbnMgbGUgdGFibGVhdSBtYXJrZXJzXHJcblxyXG4gICAgbGFzdFBvaW50ID0gZXZlbnQubGF0TG5nO1xyXG59XHJcbi8qKioqKioqKioqKioqIEZJTiBBRERMQVRMTkdST1VURSAqKioqKioqKioqKioqL1xyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuLy9tZXQgw6Agam91ciBsYSB6b25lIGRlIHRleHRlIGVuIGJhcyBkZSBsYSBjYXJ0ZSBxdWkgZG9ubmUgbGEgZGlzdGFuY2UgZHUgcGFyY291cnNcclxuZnVuY3Rpb24gdXBkYXRlUm91dGVMZW5ndGgoKXtcclxuXHJcbiAgICB2YXIgbW9uUGF0aCA9IGdsb2JhbFBvbHkuZ2V0UGF0aCgpO1xyXG5cclxuICAgIHBhdGhBcnJheSA9IG1vblBhdGguZ2V0QXJyYXkoKTtcclxuXHJcbiAgICB2YXIgZGlzdGFuY2UgPSBnb29nbGUubWFwcy5nZW9tZXRyeS5zcGhlcmljYWwuY29tcHV0ZUxlbmd0aChwYXRoQXJyYXkpOyAgIC8vY2FsY3VsZSBsYSBkaXN0YW5jZSBkdSBwYXJjb3VycyBlbiBjb21wdGFudCB0b3V0IGxlcyBwb2ludHNcclxuICAgIGRpc3RhbmNlQXJyb25kaWUgPSBNYXRoLnJvdW5kKGRpc3RhbmNlKTsgICAgLy9hcnJvbmRpIGxhIGRpc3RhbmNlIMOgIGwndW5pdMOpIHByw6hzXHJcbiAgICBkaXN0YW5jZUttRmxvYXQgPSBkaXN0YW5jZUFycm9uZGllLzEwMDA7XHJcblxyXG5cclxuICAgIHZhciBkaXYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRleHREaXZcIik7ICAgIC8vcmVjdXBlcmUgbGEgZGl2IHRleHREaXZcclxuICAgIGlmICgoZGlzdGFuY2VBcnJvbmRpZSA9PSB1bmRlZmluZWQpIHx8IChkaXN0YW5jZUFycm9uZGllID09IDApKXsgICAvL3NpIGF1Y3VuIHBhcmNvdXJzIG4nZXN0IHByw6lzZW50IG91IHMnaWwgbid5IGEgcXUndW4gbWFycXVldXJcclxuICAgICAgICBkaXYudGV4dENvbnRlbnQgPSBcIlZvdXMgbidhdmV6IHBsYWPDqSBxdSd1biBzZXVsIG1hcnF1ZXVyXCI7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIGRpdi50ZXh0Q29udGVudCA9IFwiSWwgeSBhIFwiICsgZGlzdGFuY2VLbUZsb2F0ICsgXCIga2lsb23DqHRyZXMgZW50cmUgbGUgcHJlbWllciBldCBsZSBkZXJuaWVyIHBvaW50XCIgO1xyXG4gICAgICAgIC8vb24gYWZmaWNoZSBsYSBkaXN0YW5jZSBhcnJvbmRpZSBldCBhdSBrbSBkYW5zIGxhIGRpdiB0ZXh0RGl2XHJcbiAgICAgICAgZGl2LnRpdGxlID0gXCJPdSBcIiArIGRpc3RhbmNlQXJyb25kaWUgKyBcIiBtw6h0cmVzXCI7XHJcblxyXG4gICAgICAgIHZhciBtZW51R2F1Y2hlSW50ZXJpZXVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtZW51R2F1Y2hlLWludGVyaWV1clwiKTtcclxuICAgICAgICBtZW51R2F1Y2hlSW50ZXJpZXVyLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgICAgIHZhciBtZW51R2F1Y2hlTWVzc2FnZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1tZXNzYWdlXCIpO1xyXG4gICAgICAgIG1lbnVHYXVjaGVNZXNzYWdlLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuXHJcbiAgICAgICAgdmFyIGZvcm1Qb3BVcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZm9ybVBvcFVwXCIpO1xyXG4gICAgICAgIGZvcm1Qb3BVcC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICB2YXIgc2F2ZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNhdmUtbWVzc2FnZVwiKTtcclxuICAgICAgICBzYXZlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB9XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufVxyXG4vKioqKioqKioqKioqKiBGSU4gVVBEQVRFUk9VVEVMRU5HVEggKioqKioqKioqKioqKi9cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG4vL3JldHVybiAyMyBzaSBvbiBsdWkgcGFzc2UgeC4yM1xyXG5mdW5jdGlvbiBnZXREZWNpbWFsKG4pIHtcclxuICAgIHJldHVybiAobiAtIE1hdGguZmxvb3IobikpO1xyXG59XHJcblxyXG5mdW5jdGlvbiBnZXRQYXJ0aWVEZWNpbWFsZShuKXtcclxuICAgIHJldHVybiAoTWF0aC5yb3VuZCgoTWF0aC5yb3VuZCgxMDAgKiBnZXREZWNpbWFsKG4pKS8xMDApICogMTAwICogNjAgLyAxMDApKTtcclxufVxyXG5cclxuZnVuY3Rpb24gdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KXtcclxuICAgIC8vdmVsb1xyXG4gICAgdXBkYXRlVGVtcHNOZWNlc3NhaXJlKGRpc3RhbmNlS21GbG9hdCwgdml0ZXNzZVZlbG8sIFwidGVtcHNWZWxvXCIpO1xyXG5cclxuICAgIC8vZm9vdGluZ1xyXG4gICAgdXBkYXRlVGVtcHNOZWNlc3NhaXJlKGRpc3RhbmNlS21GbG9hdCwgdml0ZXNzZUZvb3RpbmcsIFwidGVtcHNGb290aW5nXCIpO1xyXG5cclxuICAgIC8vbWFyY2hlXHJcbiAgICB1cGRhdGVUZW1wc05lY2Vzc2FpcmUoZGlzdGFuY2VLbUZsb2F0LCB2aXRlc3NlTWFyY2hlLCBcInRlbXBzTWFyY2hlXCIpO1xyXG59XHJcblxyXG5mdW5jdGlvbiB1cGRhdGVUZW1wc05lY2Vzc2FpcmUoZGlzdGFuY2VLbUZsb2F0LCB2aXRlc3NlTW95ZW5uZSwgc3BvcnQpe1xyXG4gICAgdmFyIHRlbXBzSFRNTCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNwb3J0KTsgLy9vbiByw6ljdXAgbCfDqWzDqW1lbnQgcCB0ZW1wc1ZlbG9cclxuXHJcbiAgICB2YXIgdGVtcHMgPSBkaXN0YW5jZUttRmxvYXQgLyB2aXRlc3NlTW95ZW5uZTsgLy8gdCA9IGQgLyB2ICAgICAgb24gc29ydCBsZSB0ZW1wcyBxdSdpbCBmYXV0IGVuIGhldXJlcyAobWFpcyBvbiBhIDEuNSBoZXVyZXMgYXUgbGlldSBkZSAxaDMwKVxyXG4gICAgdmFyIHRlbXBzRW5NaW51dGVzQXZlY1NlY29uZGVzID0gTWF0aC5yb3VuZCgxMDAgKiAodGVtcHMgKiA2MCkpLzEwMDsgIC8vb24gc29ydCA1Mi4zMSAoNTIgbWludXRlcyAzMSBzZWNvbmRlcylcclxuICAgIHZhciBzZWNvbmRlc1RlbXBzID0gZ2V0UGFydGllRGVjaW1hbGUodGVtcHNFbk1pbnV0ZXNBdmVjU2Vjb25kZXMpO1xyXG5cclxuICAgIHZhciB0ZW1wc0VuTWludXRlcyA9IE1hdGgucm91bmQodGVtcHNFbk1pbnV0ZXNBdmVjU2Vjb25kZXMpOyAgIC8vb24gc29ydCBqdXN0ZSA1MlxyXG5cclxuICAgIGlmKHRlbXBzRW5NaW51dGVzID09PSAxKXtcclxuICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVcIjtcclxuICAgIH1lbHNle1xyXG4gICAgICAgIHZhciBtaW51dGVPcnRob2dyYXBoZSA9IFwiIG1pbnV0ZXNcIjtcclxuICAgIH1cclxuXHJcbiAgICBpZihzZWNvbmRlc1RlbXBzID09PSAxKXtcclxuICAgICAgICB2YXIgc2Vjb25kZU9ydGhvZ3JhcGhlID0gXCIgc2Vjb25kZVwiO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgdmFyIHNlY29uZGVPcnRob2dyYXBoZSA9IFwiIHNlY29uZGVzXCI7XHJcbiAgICB9XHJcblxyXG5cclxuICAgIGlmKHRlbXBzRW5NaW51dGVzIDwgMSl7XHJcbiAgICAgICAgdGVtcHNIVE1MLnRleHRDb250ZW50ID0gc2Vjb25kZXNUZW1wcyArIHNlY29uZGVPcnRob2dyYXBoZTtcclxuICAgICAgICB0ZW1wc0hUTUwudGl0bGUgPSBcIlwiO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgLy9zaSBpbCB5IGEgcGx1cyBkZSA2MCBtaW51dGVzIG9uIGFmZmljaGUgZW4gaGV1cmVzIGV0IG1pbnV0ZXNcclxuICAgICAgICBpZih0ZW1wc0VuTWludXRlcyA8IDYwKXtcclxuICAgICAgICAgICAgdGVtcHNIVE1MLnRleHRDb250ZW50ID0gdGVtcHNFbk1pbnV0ZXMgKyBtaW51dGVPcnRob2dyYXBoZTtcclxuICAgICAgICAgICAgdGVtcHNIVE1MLnRpdGxlID0gXCJFdCBcIiArIHNlY29uZGVzVGVtcHMgKyBzZWNvbmRlT3J0aG9ncmFwaGU7XHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIHZhciB0ZW1wc0VuSGV1cmVzRmxvYXQgPSB0ZW1wc0VuTWludXRlcyAvIDYwO1xyXG4gICAgICAgICAgICB2YXIgbWludXRlc0R1VGVtcHNQb3VySGV1cmVzID0gZ2V0UGFydGllRGVjaW1hbGUodGVtcHNFbkhldXJlc0Zsb2F0KTsgLy9vbiByZWN1cCBsZXMgbWludXRlc1xyXG4gICAgICAgICAgICB2YXIgdGVtcHNFbkhldXJlcyA9IE1hdGgucm91bmQodGVtcHNFbkhldXJlc0Zsb2F0KTtcclxuXHJcbiAgICAgICAgICAgIGlmKG1pbnV0ZXNEdVRlbXBzUG91ckhldXJlcyA9PT0gMSl7XHJcbiAgICAgICAgICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVcIjtcclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICB2YXIgbWludXRlT3J0aG9ncmFwaGUgPSBcIiBtaW51dGVzXCI7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIGlmKHRlbXBzRW5IZXVyZXMgPT09IDEpe1xyXG4gICAgICAgICAgICAgICAgdmFyIGhldXJlT3J0aG9ncmFwaGUgPSBcIiBoZXVyZVwiO1xyXG4gICAgICAgICAgICB9ZWxzZXtcclxuICAgICAgICAgICAgICAgIHZhciBoZXVyZU9ydGhvZ3JhcGhlID0gXCIgaGV1cmVzXCI7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIHRlbXBzSFRNTC50ZXh0Q29udGVudCA9IHRlbXBzRW5IZXVyZXMgKyBoZXVyZU9ydGhvZ3JhcGhlICsgXCIgZXQgXCIgKyBtaW51dGVzRHVUZW1wc1BvdXJIZXVyZXMgKyBtaW51dGVPcnRob2dyYXBoZTsgIC8vb24gYWZmaWNoZVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbn1cclxuLyoqKioqKioqKioqKiogRklOIFVQREFURVRFTVBTTkVDRVNTQUlSRSAqKioqKioqKioqKioqL1xyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxudmFyIHJlY3VwO1xyXG5cclxuZnVuY3Rpb24gZGVybmllckVsZW0odGJsKXtcclxuICAgIHZhciB0YmwgPSB0Ymw7XHJcbiAgICB2YXIgdGJsTGVuZ3RoID0gdGJsLmxlbmd0aDtcclxuICAgIHZhciBwb3MgPSB0YmxMZW5ndGggLSAxO1xyXG4gICAgcmV0dXJuIHRibFtwb3NdO1xyXG59XHJcblxyXG4vL2VycmV1ciBhdmVjIGVycmV1ciBkZSBnZW9sb2NhbGlzYXRpb25cclxuZnVuY3Rpb24gaGFuZGxlTG9jYXRpb25FcnJvcihicm93c2VySGFzR2VvbG9jYXRpb24sIGluZm9XaW5kb3csIHBvcykge1xyXG4gICAgaW5mb1dpbmRvdy5zZXRQb3NpdGlvbihwb3MpO1xyXG4gICAgaW5mb1dpbmRvdy5zZXRDb250ZW50KGJyb3dzZXJIYXNHZW9sb2NhdGlvbiA/XHJcbiAgICAgICAgJ0VycmV1cjogTGUgc2VydmljZSBkZSBHw6lvbG9jYWxpc2F0aW9uIGEgZWNob3XDqS4nIDpcclxuICAgICAgICAnRXJyZXVyOiBWb3RyZSBuYXZpZ3VhdGV1ciBuZSBzdXBwb3J0IHBhcyBsYSBHw6lvbG9jYWxpc2F0aW9uLicpO1xyXG59XHJcblxyXG5cclxuXHJcbi8vZm9uY3Rpb24gcXVpIHZhIG5vdXMgY3LDqWVyIHVuIHNldE1hcCBtYWlzIHBvdXIgdG91cyBsZXMgbWFycXVldXJzXHJcbmZ1bmN0aW9uIHNldE1hcE9uQWxsKG1hcCkge1xyXG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBtYXJrZXJzLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgbWFya2Vyc1tpXS5zZXRNYXAobWFwKTtcclxuICAgIH1cclxufVxyXG5cclxuXHJcblxyXG4vL0ZvbmN0aW9ucyBkZXMgY29udHLDtGxlc1xyXG5cclxuJCgnI2RlbGV0ZUxhc3RCdXR0b24nKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIHZhciBtb25QYXRoID0gZ2xvYmFsUG9seS5nZXRQYXRoKCk7XHJcblxyXG4gICAgbW9uUGF0aC5wb3AoKTsgICAvL29uIHN1cHByaW1lIGxlIGRlcm5pZXIgw6lsw6ltZW50IGR1IHRhYmxlYXUgcGF0aFxyXG5cclxuICAgIHZhciBwYXRoQXJyYXkgPSBtb25QYXRoLmdldEFycmF5KCk7XHJcbiAgICBsYXN0UG9pbnQgPSBkZXJuaWVyRWxlbShwYXRoQXJyYXkpO1xyXG5cclxuICAgIHZhciBwYXRoTGVuZ3RoID0gbW9uUGF0aC5nZXRMZW5ndGgoKTtcclxuXHJcbiAgICBpZihwYXRoTGVuZ3RoID09PSAwKXtcclxuICAgICAgICBkZWxldGVQb2ludHMoKTtcclxuICAgIH1cclxuXHJcbiAgICBpZihwYXRoTGVuZ3RoID09PSAxKXtcclxuICAgICAgICB2YXIgbWVudUdhdWNoZUludGVyaWV1ciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1pbnRlcmlldXJcIik7XHJcbiAgICAgICAgbWVudUdhdWNoZUludGVyaWV1ci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcblxyXG4gICAgICAgIHZhciBtZW51R2F1Y2hlTWVzc2FnZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1tZXNzYWdlXCIpO1xyXG4gICAgICAgIG1lbnVHYXVjaGVNZXNzYWdlLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgICAgIHZhciBmb3JtUG9wVXAgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1Qb3BVcFwiKTtcclxuICAgICAgICBmb3JtUG9wVXAuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuXHJcbiAgICAgICAgdmFyIGZvcm1GaWx0ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1GaWx0ZXJcIik7XHJcbiAgICAgICAgZm9ybUZpbHRlci5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICB2YXIgc2F2ZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNhdmUtbWVzc2FnZVwiKTtcclxuICAgICAgICBzYXZlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgfVxyXG5cclxuICAgIHVwZGF0ZVJvdXRlTGVuZ3RoKCk7XHJcblxyXG4gICAgdXBkYXRlVGVtcHNHbG9iYWwoZGlzdGFuY2VLbUZsb2F0KTtcclxufSk7XHJcblxyXG4kKCcjZGVsZXRlQWxsQnV0dG9uJykuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICBmaXJzdE1hcmtlci5zZXRNYXAobnVsbCk7XHJcbiAgICBzZXRNYXBPbkFsbChudWxsKTtcclxuICAgIG1hcmtlcnMgPSBbXTtcclxuICAgIGdsb2JhbFBvbHkuc2V0TWFwKG51bGwpO1xyXG5cclxuICAgIG1vblBhdGggPSBnbG9iYWxQb2x5LmdldFBhdGgoKTtcclxuICAgIG1vblBhdGggPSBbXTtcclxuICAgIGxhc3RQb2ludCA9IFwiXCI7XHJcblxyXG4gICAgcGF0aEFycmF5ID0gW107XHJcblxyXG4gICAgdmFyIGRpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidGV4dERpdlwiKTtcclxuICAgIGRpdi50ZXh0Q29udGVudCA9IFwiVm91cyBuJ2F2ZXogcGFzIHBsYWPDqSBkZSBtYXJxdWV1clwiO1xyXG5cclxuICAgIGRpc3RhbmNlQXJyb25kaWUgPSAwO1xyXG4gICAgZGlzdGFuY2VLbUZsb2F0ID0gMDtcclxuXHJcbiAgICB2YXIgbWFwVHlwZSA9IG1hcC5nZXRNYXBUeXBlSWQoKTtcclxuXHJcbiAgICBpZiAobWFwVHlwZSA9PSAnaHlicmlkJyl7XHJcbiAgICAgICAgcG9seUNvbG9yID0gXCIjMzVmNzAwXCI7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIHBvbHlDb2xvciA9IFwiIzNCQTE0Q1wiO1xyXG4gICAgfVxyXG5cclxuICAgIGdsb2JhbFBvbHkgPSBuZXcgZ29vZ2xlLm1hcHMuUG9seWxpbmUoeyAgIC8vb24gcmVjcsOpw6kgdW5lIHBvbHlsaW5lIHBvdXIgcXVlIGxvcnNxdWUgcXVlIGwnb24gc3VwcHJpbWUgbCdhbmNpZW5uZSBvbiBuZSByZXBhcnRlIHBhcyBzdXIgbCdhbmNpZW5uZVxyXG4gICAgICAgIHN0cm9rZUNvbG9yOiAgcG9seUNvbG9yLFxyXG4gICAgICAgIHN0cm9rZU9wYWNpdHk6IDEuMCxcclxuICAgICAgICBzdHJva2VXZWlnaHQ6IDNcclxuICAgIH0pO1xyXG4gICAgZ2xvYmFsUG9seS5zZXRNYXAobWFwKTtcclxuXHJcbiAgICB2YXIgbWVudUdhdWNoZUludGVyaWV1ciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibWVudUdhdWNoZS1pbnRlcmlldXJcIik7XHJcbiAgICBtZW51R2F1Y2hlSW50ZXJpZXVyLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuXHJcbiAgICB2YXIgbWVudUdhdWNoZU1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lbnVHYXVjaGUtbWVzc2FnZVwiKTtcclxuICAgIG1lbnVHYXVjaGVNZXNzYWdlLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgdmFyIGZvcm1Qb3BVcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZm9ybVBvcFVwXCIpO1xyXG4gICAgZm9ybVBvcFVwLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgdmFyIGZvcm1GaWx0ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1GaWx0ZXJcIik7XHJcbiAgICBmb3JtRmlsdGVyLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgdmFyIHNhdmVNZXNzYWdlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzYXZlLW1lc3NhZ2VcIik7XHJcbiAgICBzYXZlTWVzc2FnZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG59KTtcclxuXHJcbiQoJyNjbG9zZUxvb3BCdXR0b24nKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIGNhbGN1bGF0ZVJvdXRlKGRpcmVjdGlvbnNTZXJ2aWNlLCBsYXN0UG9pbnQsIGZpcnN0UG9pbnQpO1xyXG59KTtcclxuXHJcbiQoJyNjZW50ZXJNYXAnKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIG1hcC5zZXRDZW50ZXIoZ2VvUG9zKTtcclxufSk7XHJcblxyXG5cclxuXHJcblxyXG52YXIgbWVudUdhdWNoZUJvdXRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdib3V0b25NZW51TGF0ZXJhbCcpO1xyXG52YXIgbWVudUdhdWNoZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZW51R2F1Y2hlJyk7XHJcbnZhciBtYXBGaWx0ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWFwRmlsdGVyJyk7XHJcblxyXG5tZW51R2F1Y2hlQm91dG9uLm9uY2xpY2sgPSBmdW5jdGlvbigpIHtcclxuICAgIG1lbnVHYXVjaGUuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgIG1hcEZpbHRlci5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG59O1xyXG5cclxuJCgnI3RlbXBzLW5lY2Vzc2FpcmUtc3VibWl0JykuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICB2YXIgaW5wdXRUZW1wc05lY2Vzc2FpcmUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVtcHMtbmVjZXNzYWlyZS1pbnB1dCcpO1xyXG4gICAgdmFyIHZpdGVzc2VJbnB1dCA9IGlucHV0VGVtcHNOZWNlc3NhaXJlLnZhbHVlO1xyXG5cclxuICAgIGlmKHZpdGVzc2VJbnB1dCAhPSAnJyAmJiBpc05hTih2aXRlc3NlSW5wdXQpID09IGZhbHNlICYmIHZpdGVzc2VJbnB1dCA8PSAzMDApe1xyXG4gICAgICAgIHZhciB0ZW1wc05lY2Vzc2FpcmVEaXYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVtcHMtbmVjZXNzYWlyZS1jb250YWluZXInKTtcclxuICAgICAgICB0ZW1wc05lY2Vzc2FpcmVEaXYuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgIHZhciB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0ZW1wcy1uZWNlc3NhaXJlLXJlc3VsdGF0LXBhcnRpZScpO1xyXG4gICAgICAgIHRlbXBzTmVjZXNzYWlyZVJlc3VsdGF0RGl2LnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgICAgIHZhciB0ZW1wcyA9IGRpc3RhbmNlS21GbG9hdCAvIHZpdGVzc2VJbnB1dDsgLy8gdCA9IGQgLyB2ICAgICAgb24gc29ydCBsZSB0ZW1wcyBxdSdpbCBmYXV0IGVuIGhldXJlcyAobWFpcyBvbiBhIDEuNSBoZXVyZXMgYXUgbGlldSBkZSAxaDMwKVxyXG4gICAgICAgIHZhciB0ZW1wc0VuTWludXRlc0F2ZWNTZWNvbmRlcyA9IE1hdGgucm91bmQoMTAwICogKHRlbXBzICogNjApKS8xMDA7XHJcbiAgICAgICAgdmFyIHNlY29uZGVzVGVtcHMgPSBnZXRQYXJ0aWVEZWNpbWFsZSh0ZW1wc0VuTWludXRlc0F2ZWNTZWNvbmRlcyk7XHJcbiAgICAgICAgdmFyIHRlbXBzRW5NaW51dGVzID0gTWF0aC5yb3VuZCh0ZW1wc0VuTWludXRlc0F2ZWNTZWNvbmRlcyk7ICAgLy9vbiBzb3J0IGp1c3RlIDUyXHJcblxyXG4gICAgICAgIHZhciB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdEFsbHVyZVNwYW4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVtcHMtbmVjZXNzYWlyZS1yZXN1bHRhdC1hbGx1cmUnKTtcclxuICAgICAgICB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdEFsbHVyZVNwYW4udGV4dENvbnRlbnQgPSB2aXRlc3NlSW5wdXQ7XHJcbiAgICAgICAgdmFyIHRlbXBzTmVjZXNzYWlyZVJlc3VsdGF0U3BhbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0ZW1wcy1uZWNlc3NhaXJlLXJlc3VsdGF0LXRlbXBzJyk7XHJcblxyXG4gICAgICAgIGlmKHRlbXBzRW5NaW51dGVzID09PSAxKXtcclxuICAgICAgICAgICAgdmFyIG1pbnV0ZU9ydGhvZ3JhcGhlID0gXCIgbWludXRlXCI7XHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIHZhciBtaW51dGVPcnRob2dyYXBoZSA9IFwiIG1pbnV0ZXNcIjtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIGlmKHNlY29uZGVzVGVtcHMgPT09IDEpe1xyXG4gICAgICAgICAgICB2YXIgc2Vjb25kZU9ydGhvZ3JhcGhlID0gXCIgc2Vjb25kZVwiO1xyXG4gICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgICB2YXIgc2Vjb25kZU9ydGhvZ3JhcGhlID0gXCIgc2Vjb25kZXNcIjtcclxuICAgICAgICB9XHJcblxyXG5cclxuICAgICAgICBpZih0ZW1wc0VuTWludXRlcyA8IDEpe1xyXG4gICAgICAgICAgICB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdFNwYW4udGV4dENvbnRlbnQgPSBzZWNvbmRlc1RlbXBzICsgc2Vjb25kZU9ydGhvZ3JhcGhlO1xyXG4gICAgICAgICAgICB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdFNwYW4udGl0bGUgPSBcIlwiO1xyXG4gICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgICAvL3NpIGlsIHkgYSBwbHVzIGRlIDYwIG1pbnV0ZXMgb24gYWZmaWNoZSBlbiBoZXVyZXMgZXQgbWludXRlc1xyXG4gICAgICAgICAgICBpZih0ZW1wc0VuTWludXRlcyA8IDYwKXtcclxuICAgICAgICAgICAgICAgIHRlbXBzTmVjZXNzYWlyZVJlc3VsdGF0U3Bhbi50ZXh0Q29udGVudCA9IHRlbXBzRW5NaW51dGVzICsgbWludXRlT3J0aG9ncmFwaGU7XHJcbiAgICAgICAgICAgICAgICB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdFNwYW4udGl0bGUgPSBcIkV0IFwiICsgc2Vjb25kZXNUZW1wcyArIHNlY29uZGVPcnRob2dyYXBoZTtcclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICB2YXIgdGVtcHNFbkhldXJlc0Zsb2F0ID0gdGVtcHNFbk1pbnV0ZXMgLyA2MDtcclxuICAgICAgICAgICAgICAgIHZhciBtaW51dGVzRHVUZW1wc1BvdXJIZXVyZXMgPSBnZXRQYXJ0aWVEZWNpbWFsZSh0ZW1wc0VuSGV1cmVzRmxvYXQpOyAvL29uIHJlY3VwIGxlcyBtaW51dGVzXHJcbiAgICAgICAgICAgICAgICB2YXIgdGVtcHNFbkhldXJlcyA9IE1hdGgucm91bmQodGVtcHNFbkhldXJlc0Zsb2F0KTtcclxuXHJcbiAgICAgICAgICAgICAgICBpZihtaW51dGVzRHVUZW1wc1BvdXJIZXVyZXMgPT09IDEpe1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBtaW51dGVPcnRob2dyYXBoZSA9IFwiIG1pbnV0ZVwiO1xyXG4gICAgICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgdmFyIG1pbnV0ZU9ydGhvZ3JhcGhlID0gXCIgbWludXRlc1wiO1xyXG4gICAgICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgICAgIGlmKHRlbXBzRW5IZXVyZXMgPT09IDEpe1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBoZXVyZU9ydGhvZ3JhcGhlID0gXCIgaGV1cmVcIjtcclxuICAgICAgICAgICAgICAgIH1lbHNle1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBoZXVyZU9ydGhvZ3JhcGhlID0gXCIgaGV1cmVzXCI7XHJcbiAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgdGVtcHNOZWNlc3NhaXJlUmVzdWx0YXRTcGFuLnRleHRDb250ZW50ID0gdGVtcHNFbkhldXJlcyArIGhldXJlT3J0aG9ncmFwaGUgKyBcIiBldCBcIiArIG1pbnV0ZXNEdVRlbXBzUG91ckhldXJlcyArIG1pbnV0ZU9ydGhvZ3JhcGhlOyAgLy9vbiBhZmZpY2hlXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBhbGVydChcIlZvdXMgbidhdmV6IHNvaXQgcmllbiByZW50csOpLCBzb2l0IHJlbnRyw6kgcXVlbHF1ZSBjaG9zZSBkJ2F1dHJlIHF1J3VuIG5vbWJyZSwgc29pdCB1biBub21icmUgc3Vww6lyaWV1ciDDoCAzMDBcIik7XHJcbiAgICB9XHJcbn0pO1xyXG5cclxuJCgnI3RlbXBzLW5lY2Vzc2FpcmUtcmVzdWx0YXQtYnRuJykuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICBkaXNwbGF5RGVmYXVsdEludGVyZmFjZVRlbXBzTmVjZXNzYWlyZSgpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIGRpc3BsYXlEZWZhdWx0SW50ZXJmYWNlVGVtcHNOZWNlc3NhaXJlKCl7XHJcbiAgICB2YXIgdGVtcHNOZWNlc3NhaXJlRGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RlbXBzLW5lY2Vzc2FpcmUtY29udGFpbmVyJyk7XHJcbiAgICB0ZW1wc05lY2Vzc2FpcmVEaXYuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgIHZhciB0ZW1wc05lY2Vzc2FpcmVSZXN1bHRhdERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0ZW1wcy1uZWNlc3NhaXJlLXJlc3VsdGF0LXBhcnRpZScpO1xyXG4gICAgdGVtcHNOZWNlc3NhaXJlUmVzdWx0YXREaXYuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgdmFyIGlucHV0VGVtcHNOZWNlc3NhaXJlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RlbXBzLW5lY2Vzc2FpcmUtaW5wdXQnKTtcclxuICAgIGlucHV0VGVtcHNOZWNlc3NhaXJlLnZhbHVlID0gXCJcIjtcclxufVxyXG5cclxuXHJcblxyXG5cclxuLyoqKioqKiB0cHZtID0gVGVtcHMgcG91ciB2aXRlc3NlIG1veWVubmUgKioqKioqL1xyXG5cclxuJCgnI3ZpdGVzc2UtbW95ZW5uZS1zdWJtaXQnKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIHZhciB0cHZtSElucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ2aXRlc3NlLW1veWVubmUtaW5wdXQtaFwiKTtcclxuICAgIHZhciB0cHZtTUlucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ2aXRlc3NlLW1veWVubmUtaW5wdXQtbVwiKTtcclxuICAgIHZhciB0cHZtU0lucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ2aXRlc3NlLW1veWVubmUtaW5wdXQtc1wiKTtcclxuXHJcbiAgICB2YXIgdHB2bUggPSB0cHZtSElucHV0LnZhbHVlO1xyXG4gICAgdmFyIHRwdm1NID0gdHB2bU1JbnB1dC52YWx1ZTtcclxuICAgIHZhciB0cHZtUyA9IHRwdm1TSW5wdXQudmFsdWU7XHJcblxyXG4gICAgaWYodHB2bUggKyB0cHZtTSArIHRwdm1TICE9ICcnICYmIHRwdm1IICsgdHB2bU0gKyB0cHZtUyAhPSAnMCcgJiYgdHB2bUggKyB0cHZtTSArIHRwdm1TICE9ICcwMCcgJiYgdHB2bUggKyB0cHZtTSArIHRwdm1TICE9ICcwMDAnKXtcclxuICAgICAgICBpZih0cHZtSCA8PSA5OSl7XHJcbiAgICAgICAgICAgIGlmKHRwdm1NIDw9IDU5KXtcclxuICAgICAgICAgICAgICAgIGlmKHRwdm1TIDw9IDU5KXtcclxuICAgICAgICAgICAgICAgICAgICB2YXIgdHB2bUhJbnQ7XHJcbiAgICAgICAgICAgICAgICAgICAgdmFyIHRwdm1NSW50O1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciB0cHZtU0ludDtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgaWYodHB2bUggIT0gJycpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0cHZtSEludCA9IHBhcnNlSW50KHRwdm1ILCAxMCk7XHJcbiAgICAgICAgICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRwdm1ISW50ID0gMDtcclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgaWYodHB2bU0gIT0gJycpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0cHZtTUludCA9IHBhcnNlSW50KHRwdm1NLCAxMCk7XHJcbiAgICAgICAgICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRwdm1NSW50ID0gMDtcclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgaWYodHB2bVMgIT0gJycpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0cHZtU0ludCA9IHBhcnNlSW50KHRwdm1TLCAxMCk7XHJcbiAgICAgICAgICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRwdm1TSW50ID0gMDtcclxuICAgICAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIHRwdm1NSW50ID0gdHB2bU1JbnQgKiAxMDAgLyA2MDtcclxuICAgICAgICAgICAgICAgICAgICB0cHZtU0ludCA9IHRwdm1TSW50ICogMTAwIC8gNjA7IC8qIE9uIHBhc3NlIGVuIGJhc2UgMTAwICovXHJcblxyXG4gICAgICAgICAgICAgICAgICAgIHRwdm1NSW50ID0gdHB2bU1JbnQgKiAwLjAxO1xyXG4gICAgICAgICAgICAgICAgICAgIHRwdm1TSW50ID0gdHB2bVNJbnQgKiAwLjAwMDE7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIHZhciB0cHZtID0gdHB2bUhJbnQgKyB0cHZtTUludCArIHRwdm1TSW50O1xyXG5cclxuICAgICAgICAgICAgICAgICAgICB2YXIgdml0ZXNzZU1veWVubmUgPSBkaXN0YW5jZUttRmxvYXQgLyB0cHZtOyAvL2QvdFxyXG4gICAgICAgICAgICAgICAgICAgIHZhciB2aXRlc3NlTW95ZW5uZSA9IE1hdGgucm91bmQoMTAwICogdml0ZXNzZU1veWVubmUpIC8gMTAwO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICB2YXIgdml0ZXNzZU1veWVubmVSZXN1bHRhdFNwYW4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndml0ZXNzZS1tb3llbm5lLXJlc3VsdGF0LXZpdGVzc2UnKTtcclxuICAgICAgICAgICAgICAgICAgICB2aXRlc3NlTW95ZW5uZVJlc3VsdGF0U3Bhbi50ZXh0Q29udGVudCA9IHZpdGVzc2VNb3llbm5lO1xyXG4gICAgICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQoJ1ZvdXMgYXZleiByZW50csOpIHVuZSB2YWxldXIgc3Vww6lyaWV1cmUgw6AgNTkgZGFucyBsZSBjaGFtcCBzZWNvbmRlcycpO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9ZWxzZXtcclxuICAgICAgICAgICAgICAgIGFsZXJ0KCdWb3VzIGF2ZXogcmVudHLDqSB1bmUgdmFsZXVyIHN1cMOpcmlldXJlIMOgIDU5IGRhbnMgbGUgY2hhbXAgbWludXRlcycpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIGFsZXJ0KCdWb3VzIGF2ZXogcmVudHLDqSB1bmUgdmFsZXVyIHRyb3AgaGF1dGUgZGFucyBsZSBjaGFtcCBoZXVyZXMnKTtcclxuICAgICAgICB9XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBhbGVydChcIlZvdXMgbidhdmV6IHJpZW4gcmVudHLDqVwiKTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgdml0ZXNzZU1veWVubmVDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInZpdGVzc2UtbW95ZW5uZS1jb250YWluZXJcIik7XHJcbiAgICB2aXRlc3NlTW95ZW5uZUNvbnRhaW5lci5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB2YXIgdml0ZXNzZU1veWVubmVSZXN1bHRhdENvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidml0ZXNzZS1tb3llbm5lLXJlc3VsdGF0LWNvbnRhaW5lclwiKTtcclxuICAgIHZpdGVzc2VNb3llbm5lUmVzdWx0YXRDb250YWluZXIuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxufSk7XHJcblxyXG4kKCcjdml0ZXNzZS1tb3llbm5lLXJlc3VsdGF0LWJ0bicpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gICAgZGlzcGxheURlZmF1bHRJbnRlcmZhY2VWaXRlc3NlTW95ZW5uZSgpO1xyXG59KTtcclxuXHJcbmZ1bmN0aW9uIGRpc3BsYXlEZWZhdWx0SW50ZXJmYWNlVml0ZXNzZU1veWVubmUoKXtcclxuICAgIHZhciB2aXRlc3NlTW95ZW5uZUNvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidml0ZXNzZS1tb3llbm5lLWNvbnRhaW5lclwiKTtcclxuICAgIHZpdGVzc2VNb3llbm5lQ29udGFpbmVyLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgICB2YXIgdml0ZXNzZU1veWVubmVSZXN1bHRhdENvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidml0ZXNzZS1tb3llbm5lLXJlc3VsdGF0LWNvbnRhaW5lclwiKTtcclxuICAgIHZpdGVzc2VNb3llbm5lUmVzdWx0YXRDb250YWluZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJ2aXRlc3NlLW1veWVubmUtaW5wdXQtaFwiKS52YWx1ZSA9IFwiXCI7XHJcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInZpdGVzc2UtbW95ZW5uZS1pbnB1dC1tXCIpLnZhbHVlID0gXCJcIjtcclxuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidml0ZXNzZS1tb3llbm5lLWlucHV0LXNcIikudmFsdWUgPSBcIlwiO1xyXG59XHJcblxyXG5cclxuXHJcblxyXG52YXIgc2F2ZUNvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzYXZlQ29udGFpbmVyJyk7XHJcblxyXG5tYXBGaWx0ZXIub25jbGljayA9IGZ1bmN0aW9uKCkge1xyXG4gICAgbWVudUdhdWNoZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICBtYXBGaWx0ZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG5cclxuICAgIGRpc3BsYXlEZWZhdWx0SW50ZXJmYWNlVGVtcHNOZWNlc3NhaXJlKCk7XHJcbiAgICBkaXNwbGF5RGVmYXVsdEludGVyZmFjZVZpdGVzc2VNb3llbm5lKCk7XHJcbn07XHJcblxyXG4kKCcjc2F2ZVBhdGgnKS5jbGljayhmdW5jdGlvbigpIHtcclxuICAgIG1hcEZpbHRlckZvcm0uc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgIHNhdmVDb250YWluZXIuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuXHJcbiAgICB2YXIgbW9uUGF0aCA9IGdsb2JhbFBvbHkuZ2V0UGF0aCgpO1xyXG4gICAgdmFyIGVuY29kZVN0cmluZyA9IGdvb2dsZS5tYXBzLmdlb21ldHJ5LmVuY29kaW5nLmVuY29kZVBhdGgobW9uUGF0aCk7XHJcbiAgICB2YXIgaGlkZGVuSW5wdXRQYXRoID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2hpZGRlbklucHV0UGF0aCcpO1xyXG4gICAgdmFyIGhpZGRlbklucHV0UGxhY2VJZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdoaWRkZW5JbnB1dFBsYWNlSWQnKTtcclxuXHJcbiAgICBoaWRkZW5JbnB1dFBhdGgudmFsdWUgPSBlbmNvZGVTdHJpbmc7XHJcblxyXG4gICAgdmFyIGdlb2NvZGVyID0gbmV3IGdvb2dsZS5tYXBzLkdlb2NvZGVyO1xyXG5cclxuICAgIGxhdGl0dWRlID0gZmlyc3RNYXJrZXIuZ2V0UG9zaXRpb24oKS5sYXQoKTtcclxuICAgIGxvbmdpdHVkZSA9IGZpcnN0TWFya2VyLmdldFBvc2l0aW9uKCkubG5nKCk7XHJcbiAgICB2YXIgbGF0bG5nID0ge2xhdDogcGFyc2VGbG9hdChsYXRpdHVkZSksIGxuZzogcGFyc2VGbG9hdChsb25naXR1ZGUpfTtcclxuXHJcbiAgICBnZW9jb2Rlci5nZW9jb2RlKHsnbG9jYXRpb24nOiBsYXRsbmd9LCBmdW5jdGlvbihyZXN1bHRzLCBzdGF0dXMpIHtcclxuICAgICAgICBpZiAoc3RhdHVzID09PSBnb29nbGUubWFwcy5HZW9jb2RlclN0YXR1cy5PSykge1xyXG4gICAgICAgICAgICBpZiAocmVzdWx0c1sxXSkge1xyXG4gICAgICAgICAgICAgICAgaGlkZGVuSW5wdXRQbGFjZUlkLnZhbHVlID0gcmVzdWx0c1sxXS5wbGFjZV9pZDtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIGFsZXJ0KCdBdWN1biByw6lzdWx0YXQgdHJvdXbDqScpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgYWxlcnQoJ0xlIEdlb2NvZGVyIGEgZWNob3XDqS4gUmFpc29uOiAnICsgc3RhdHVzKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcblxyXG59KTtcclxuXHJcbnZhciBtYXBGaWx0ZXJGb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21hcEZpbHRlckZvcm0nKTtcclxubWFwRmlsdGVyRm9ybS5vbmNsaWNrID0gZnVuY3Rpb24oKSB7XHJcbiAgICBzYXZlQ29udGFpbmVyLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgIG1hcEZpbHRlckZvcm0uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG59O1xyXG5cclxuXHJcblxyXG5mdW5jdGlvbiBnZXRDb29yZGluYXRlc0F2ZXJhZ2UoKXtcclxuICAgIHZhciBnZW9jb2RlciA9IG5ldyBnb29nbGUubWFwcy5HZW9jb2RlcjtcclxuXHJcbiAgICBsYXRpdHVkZSA9IGZpcnN0TWFya2VyLmdldFBvc2l0aW9uKCkubGF0KCk7XHJcbiAgICBsb25naXR1ZGUgPSBmaXJzdE1hcmtlci5nZXRQb3NpdGlvbigpLmxuZygpO1xyXG4gICAgdmFyIGxhdGxuZyA9IHtsYXQ6IHBhcnNlRmxvYXQobGF0aXR1ZGUpLCBsbmc6IHBhcnNlRmxvYXQobG9uZ2l0dWRlKX07XHJcblxyXG4gICAgZ2VvY29kZXIuZ2VvY29kZSh7J2xvY2F0aW9uJzogbGF0bG5nfSwgZnVuY3Rpb24ocmVzdWx0cywgc3RhdHVzKSB7XHJcbiAgICAgICAgaWYgKHN0YXR1cyA9PT0gZ29vZ2xlLm1hcHMuR2VvY29kZXJTdGF0dXMuT0spIHtcclxuICAgICAgICAgICAgaWYgKHJlc3VsdHNbMV0pIHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlc3VsdHNbMV0ucGxhY2VfaWQpO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgd2luZG93LmFsZXJ0KCdObyByZXN1bHRzIGZvdW5kJyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICB3aW5kb3cuYWxlcnQoJ0dlb2NvZGVyIGZhaWxlZCBkdWUgdG86ICcgKyBzdGF0dXMpO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59XHJcblxyXG5cclxuXHJcblxyXG4vKioqKiogUkFDQ09VUkNJUyBDTEFWSUVSICoqKioqKioqL1xyXG5Nb3VzZXRyYXAuYmluZChbJ2N0cmwreiddLCBmdW5jdGlvbigpIHtcclxuICAgIGRlbGV0ZUxhc3RQb2ludCgpO1xyXG59KTtcclxuXHJcblxyXG5cclxuXHJcbi8vem9vbS9kZXpvb20gYXZlYyBDdHJsIEFsdCArLy0gb3UgQ3RybCArLy1cclxudmFyIHpvb20gPSAxNDtcclxuXHJcbk1vdXNldHJhcC5iaW5kKFsnY3RybCthbHQrKycsICdjdHJsKysnXSwgZnVuY3Rpb24oKSB7XHJcbiAgICBpZih6b29tIDw9IDIzKXtcclxuICAgICAgICB6b29tKys7XHJcbiAgICAgICAgbWFwLnNldFpvb20oem9vbSk7XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBhbGVydCgnSW1wb3NzaWJsZSBkZSB6b29tZXIgZGF2YW50YWdlJyk7XHJcbiAgICB9XHJcbn0pO1xyXG5cclxuTW91c2V0cmFwLmJpbmQoWydjdHJsK2FsdCstJywgJ2N0cmwrLSddLCBmdW5jdGlvbigpIHtcclxuICAgIGlmKHpvb20gPj0gMSl7XHJcbiAgICAgICAgem9vbS0tO1xyXG4gICAgICAgIG1hcC5zZXRab29tKHpvb20pO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgYWxlcnQoJ0ltcG9zc2libGUgZGUgZMOpem9vbWVyIGRhdmFudGFnZScpO1xyXG4gICAgfVxyXG59KTtcblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9hc3NldHMvanMvY29uY2VwdGV1ci5qcyJdLCJzb3VyY2VSb290IjoiIn0=