function initMap() {
    var myLatLng = {lat: 56.9308043, lng: 24.0914186};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng,
        scrollwheel: false
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'SIA Mainark'
    });
}