document.addEventListener('DOMContentLoaded', function() {
    var mapElement = document.getElementById('map');
    var latitude = parseFloat(mapElement.getAttribute('data-latitude'))||0;
    var longitude = parseFloat(mapElement.getAttribute('data-longitude'))||0;

    var mapOptions = {
        center: [latitude, longitude],
        zoom: 10
    };

    // Creating a map object
    var map = new L.map('map', mapOptions);

    // Creating a Layer object
    var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

    // Adding layer to the map
    map.addLayer(layer);

    var scale = L.control.scale(); // Creating scale control
    scale.addTo(map);

    var marker = L.marker([latitude, longitude]);
    marker.addTo(map);
    console.log('Latitude:', latitude);
    console.log('Longitude:', longitude);
});