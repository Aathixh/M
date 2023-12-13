// Creating map options
// function initializeMap(latitude, longitude) {
//      var mapOptions = {
//          center: [latitude, longitude],
//          zoom: 10
//      };
//  // Creating a map object
//  var map = new L.map('map', mapOptions);
 
//  // Creating a Layer object
//  var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
 
//  // Adding layer to the map
//  map.addLayer(layer);

//  var scale = L.control.scale(); // Creating scale control

//  scale.addTo(map); // Adding scale control to the map
 
//  // Creating a Marker properties for dragging and moving
// //  var markerOptions = {
// //     title: "MyLocation",
// //     clickable: true,
// //     draggable: true
// //  }
 
//  // Creating a marker
// //  var marker = L.marker([latitude, longitude]);
//       // bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude)
//       // .openPopup();
//       var marker = L.marker([latitude, longitude]);
//       marker.addTo(map);
//  // Adding marker to the map
// //  marker.addTo(map);
//  console.log('Latitude:', latitude);
// console.log('Longitude:', longitude);
// }
// initializeMap(latitude, longitude);

// //URL of the API
// const url = 'https://api.thingspeak.com/channels/2375849/feeds.json?api_key=GXHH4D204XVSA1LO&results=2';

// //Fetch data from the API
// fetch(url)
//     .then(response => response.json())  // Parse the response as JSON
//     .then(data => {
//         // Iterate over each object in the feeds array
//         for (let feed of data.feeds) {
//             // Print the latitude and longitude
//             console.log('Latitude:', feed.field1);
//             console.log('Longitude:', feed.field2);
//         }
//     })
//     .catch(error => console.error('Error:', error));

document.addEventListener('DOMContentLoaded', async function() {
    var mapElement = document.getElementById('map');
    var latitude = parseFloat(mapElement.getAttribute('data-latitude')) || 0;
    var longitude = parseFloat(mapElement.getAttribute('data-longitude')) || 0;

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