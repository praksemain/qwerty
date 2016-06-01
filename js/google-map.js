function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 56.9308043, lng: 24.0914186},
        zoom: 16
    });
}