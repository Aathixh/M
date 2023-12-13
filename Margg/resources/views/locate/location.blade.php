<?php
// Replace the following lines
// $latitude = '$latitude'; // Replace 0 with the actual latitude value
// $longitude = '$longitude'; // Replace 0 with the actual longitude value

// With the compacted values from the ThinkSpeak controller
$latitude = isset($latitude) ? $latitude : 0;
$longitude = isset($longitude) ? $longitude : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track your Bus!</title>
    <link rel="stylesheet" href="css/locate.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>

<body>
    <div id="map" data-latitude="{{ $latitude }}" data-longitude="{{ $longitude }}"></div>
    <script>
        var latitude = <?php echo json_encode($latitude); ?>;
        var longitude = <?php echo json_encode($longitude); ?>;
        var mapData = {
            latitude: latitude,
            longitude: longitude
        };
    </script>
    <script src="{{ asset('js/map.js') }}"></script>
</body>

</html>
