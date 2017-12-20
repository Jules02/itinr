var poly;
var map;
var geoPos;


function initMap() {
    //on veut centrer la carte sur notre position si la geolocalisation est activée
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){   //recupère notre position
            geoPos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            map.setCenter(geoPos);   //centre la carte
                    
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
                
    } else {
        // Le navigateur ne supporte pas la géolocalisation ou elle a été refusé
        handleLocationError(false, infoWindow, map.getCenter());
    }
            
    map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
        zoom: 14,   //Définie le zoom par défaut 
        draggableCursor: "crosshair"   //on a une croix comme curseur
    });

    poly = new google.maps.Polyline({   //créé déjà la polyline
        strokeColor: '#3BA14C',
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    poly.setMap(map);   //on attache l'objet polyline à notre map

    //listeners qui vont écouter les événements click et rightcick pour y lancer des fonctions
    map.addListener('click', addLatLng);     //quand on clique sur un endroit de la carte on lance la fonction addLatLng
    map.addListener('rightclick', addLatLngRoute);    //quand on clique droit sur un endroit on lance la fonction addLatLngRoute
            
        
    
    //Ici, on va transformer nos champs HTML (que l'on va recupérer avec getElementById) en "contrôles" de la map. Pour l'API, un contrôle est par exemple le bouton plein écran en haut à droite. C'est le seul moyen potable de faire passer des boutons sur une carte.
            
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);   //on définit que notre input est une search box (qui va nous permettre de rentrer notre localisation avec l'autocomplétion)
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);   //ce contrôle se positionnera en haut à gauche
            
            
    var deleteAllButton = document.getElementById('deleteAllButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(deleteAllButton);
            
    var deleteLastButton = document.getElementById('deleteLastButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(deleteLastButton);
            
    var closeLoopButton = document.getElementById('closeLoopButton');
    map.controls[google.maps.ControlPosition.BOTTOM].push(closeLoopButton);
            
            
    var centerMap = document.getElementById('centerMap');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(centerMap);
            
            
    
    
    //toute cette dernière section se rapporte à la searchbox (localisation)  
    
    map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
    });
            
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length === 0) {
            return;
        }

        var bounds = new google.maps.LatLngBounds();

        places.forEach(function(place) {
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
            
            
}                                     // Fin initMap  
        



var markerStart = 'img/marker.png';   //icone de marqueur de début
var markerVide = 'img/empty.png';   //pour ne pas avoir de marqueur pour chaque point (à ameliorer)
        
var firstPoint;    //premier point à qui l'on donnera un skin différent (marqueur vert)
var lastPoint;    //dernier point à avoir été placé (dernieres coords, pas dernier marqueur)
var marker;
var markers = [];    //array contenant l'ensemble des marqueurs
var firstMarker;   //premier marqueur (à ne pas confondre avec firstPoint qui contient les coords de notre premier point)
var distanceKm;     //distance en km
var distanceArrondie;



// Fonction qui sera executée lors du clique d'un endroit de la carte
function addLatLng(event) {
    var path = poly.getPath();   //on récupére le parcours (si ce n'est pas le premier point)

    //Rajoute les coord de notre clic dans le tableau path qui contient les coord du chemin
    path.push(event.latLng);

    //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
    if (path.getLength() === 1) {
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + path.getLength(),    //path.getLength est le nombre de notre point
            map: map,
            icon: markerStart          //le marqueur aura notre image de drapeau
        });
                
        firstPoint = event.latLng;
                
        firstMarker = marker;
    }
    else{     //sinon cela veut dire que ce n'est pas le premier marqueur et on ne lui donne pas de skin (empty.png)
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + path.getLength(),
            map: map,
            icon: markerVide
        });
                
        poly.setMap(map);  //on affiche la polyline sur la map
                
        markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers
                
        lastPoint = event.latLng;
                
        var distance = google.maps.geometry.spherical.computeLength(path.getArray());   //calcule la distance du parcours en comptant tout les points
        distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près    
        distanceKm = Math.round(distanceArrondie/1000);
    }
    
    var div = document.getElementById("textDiv");    //recupere la div textDiv
    if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
        div.textContent = "Vous n'avez placé qu'un seul marqueur"
    } else {
        div.textContent = "Il y a " + distanceArrondie + " mètres et " + distanceKm + " kilomètres entre le premier et le dernier" 
        //on affiche la distance arrondie et au km dans la div textDiv
    }
}




var directionsService;
var directionsDisplay;


function calculateAndDisplayRoute(directionsService, directionsDisplay, lastPoint, newPoint) {
    
    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();
                        
    directionsDisplay.setMap(map);   //afficher l'itinéraire sur la carte
            
    var travelMode = 'WALKING';   //ici on met que le mode de transport est la marche mais in pourra plus tard laisser à l'utilisateur de choisir le mode
    var request = {
        origin: lastPoint,
        destination: newPoint,
        travelMode: google.maps.TravelMode[travelMode]
    };
            
    directionsService.route(request, function(response, status) {
            if (status == 'OK') {                              //s'il n'y a aucun problème avec l'itinéraire
                directionsDisplay.setDirections(response);   
            } else {
                alert('ERROR');
            }
        }
    )
}

        
//lorsque l'on right click sur un endroit on va ralier le dernier point créé à ce tout nouveau point mais en affichant l'itinéraire en passant par la route ou les chemins (pas en créant une ligne droite)        
function addLatLngRoute(event){   
            
    newPoint = event.latLng;   // Coords du point qui vient d'etre rightclické
            
    calculateAndDisplayRoute(directionsService, directionsDisplay, lastPoint, newPoint);  //fonction qui calcule et affiche l'itinéraire
            
    var path = poly.getPath();

    //Rajoute les coord de notre clic dans le tableau path qui contient les coord du chemin
    path.push(newPoint);
    
    //Si c'est le premier marqueur on lui donne l'icone image sinon on laisse un marqeur normale
    if (path.getLength() === 1) {
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + path.getLength(),    //path.getLength est le nombre de notre point
            map: map,
            icon: markerStart          //le marqueur aura notre image de drapeau
        });
                
        firstPoint = event.latLng;
                
        firstMarker = marker;
    }
    else{     //sinon cela veut dire que ce n'est pas le premier marqueur et on ne lui donne pas de skin (empty.png)
        marker = new google.maps.Marker({
            position: event.latLng,
            title: '#' + path.getLength(),
            map: map,
            icon: markerVide
        });
                
        poly.setMap(map);  //on affiche la polyline sur la map
                
        markers.push(marker);   //on met notre tout nouveau marker dans le tableau markers
                
        lastPoint = event.latLng;
                
        var distance = google.maps.geometry.spherical.computeLength(path.getArray());   //calcule la distance du parcours en comptant tout les points
        distanceArrondie = Math.round(distance);    //arrondi la distance à l'unité près    
        distanceKm = Math.round(distanceArrondie/1000);
    }
    
    
    var div = document.getElementById("textDiv");    //recupere la div textDiv
    if ((distanceArrondie == undefined) || (distanceArrondie == 0)){   //si aucun parcours n'est présent ou s'il n'y a qu'un marqueur
        div.textContent = "Vous n'avez placé qu'un seul marqueur"
    } else {
        div.textContent = "Il y a " + distanceArrondie + " mètres et " + distanceKm + " kilomètres entre le premier et le dernier" 
        //on affiche la distance arrondie et au km dans la div textDiv
    }
}
        
        
        
        
        
        
//erreur avec erreur de geolocalisation        
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Erreur: Le service de Géolocalisation a echoué.' :
        'Erreur: Votre naviguateur ne support pas la Géolocalisation.');
}
        
        
        
//fonction qui va nous créer un setMap mais pour tous les marqueurs 
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
} 



//Fonctions des contrôles
        
function deleteLastPoint(){
    var path = poly.getPath();
            
    path.pop();   //on supprime le dernier élément du tableau path
} 

function deletePoints(){
    firstMarker.setMap(null);
    setMapOnAll(null);
    markers = [];
    poly.setMap(null);
            
    var div = document.getElementById("textDiv");  
    div.textContent = "Vous n'avez pas placé de marqueur";
            
    distanceArrondie = 0;
    distanceKm = 0;
            
            
    poly = new google.maps.Polyline({   //on recréé une polyline pour que lorsque que l'on supprime l'ancienne on ne reparte pas sur l'ancienne
        strokeColor: '#3BA14C',
        strokeOpacity: 1.0,
        strokeWeight: 3
    });
    poly.setMap(map);
}

function fermerBoucle(){    //ne fonctionne pas étant donné que calculateAndDisplayRoute() ne marche pas. Sinon, on voudrait ralier le dernier point avec le premier point (en calculant et en passant par la route ou les chemins)
    calculateAndDisplayRoute(directionsService, directionsDisplay, lastPoint, firstPoint);
}      
        
function centerMap(){   //on recentre la carte sur notre localisation (si on l'a autorisé)
    map.setCenter(geoPos);
}       