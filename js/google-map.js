function initialize() {
    var latlng = new google.maps.LatLng(56.9308043, 24.0914186);

    var myOptions1 = {
        zoom: 16,
        center: latlng,
        scrollwheel: false
    };

    var myOptions2 = {
        zoom: 15,
        center: latlng,
        scrollwheel: false
    };

    var map2 = new google.maps.Map(document.getElementById("mini-map"), myOptions2);

    var marker2 = new google.maps.Marker({
        position: latlng,
        map: map2,
        icon: 'images/map_marker_mini.png'
    });


    var map1 = new google.maps.Map(document.getElementById("map"), myOptions1);

    var marker1 = new google.maps.Marker({
        position: latlng,
        map: map1,
        icon: 'images/map_marker.png'
    });

    marker1.addListener('click', function() {
        infowindow.open(map1, marker1);
    });

    var infowindow = new google.maps.InfoWindow({
        content:"SIA \"Mainark\"" + "<br>" + "Vienības gatve 20B" + "<br>" + "Rīga" + "<br>" + "LV-1004"
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
