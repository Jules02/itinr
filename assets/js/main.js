var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {    //recupére la div #map et la transforme en objet map, stocké dans la var map
        zoom: 14,   //Définie le zoom par défaut
        draggableCursor: "crosshair"   //on a une croix comme curseur
    });
}