// Creating map options
var mapOptions = {
    center: [17.385044, 78.486671],
    zoom: 10
 }
 // Creating a map object
 var map = new L.map('map', mapOptions);
 
 // Creating a Layer object
 var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
 
 // Adding layer to the map
 map.addLayer(layer);

 var scale = L.control.scale(); // Creating scale control

 scale.addTo(map); // Adding scale control to the map
 
 // Creating a Marker properties for dragging and moving
 var markerOptions = {
    title: "MyLocation",
    clickable: true,
    draggable: true
 }
 
 // Creating a marker
 var marker = L.marker([latitude, longitude], markerOptions);
      bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude)
      .openPopup();
 
 // Adding marker to the map
 marker.addTo(map);