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
        title: 'SIA Mainark',
        icon: 'img/map_marker.png'
    });

    var infowindow = new google.maps.InfoWindow({
        content:"SIA \"Mainark\"" + "<br>" + "Vienības gatve 20B" + "<br>" + "Rīga" + "<br>" + "LV-1004"
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}