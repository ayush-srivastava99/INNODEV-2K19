<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
    echo "<script type='text/javascript'>alert('You need to login first');
    window.location='loging-emp.php';
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Location</title>
    <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
    <style>
        body {
          margin: 0;
          padding: 0;
        }

        #map {
          position: absolute;
          top: 0;
          bottom: 0;
          width: 100%;
        }
    </style>
</head>
<body>

  <div id='map'></div>
<?php
$con=mysqli_connect('localhost','diens','user');
mysqli_select_db($con,'dien');
$unname=$_SESSION['uname'];
$wid=$_POST['wid'];
$query="SELECT * from Booking where ID='$wid'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$lat=$row['lati'];
$lon=$row['longi'];
?>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoibmlzaGFudDMyMSIsImEiOiJjazBtNmg4amQxM3A3M2hvY3B2d2ZmZGl2In0.cSptqKH2Q5DatyZwYYln3w';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [ <?php echo $lon;?>, <?php echo $lat;?>], 
    zoom: 14,
  });

  var marker = new mapboxgl.Marker()
    .setLngLat([ <?php echo $lon;?>, <?php echo $lat;?>]) 
    .addTo(map); 
/*
  var geocoder = new MapboxGeocoder({ // Initialize the geocoder
    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
    marker: false, // Do not use the default marker style
    placeholder: 'Search for places in Berkeley', // Placeholder text for the search bar
    bbox: [-122.30937, 37.84214, -122.23715, 37.89838], // Boundary for Berkeley
    proximity: {
      longitude: -122.25948,
      latitude: 37.87221
    } // Coordinates of UC Berkeley
  });*/

  // Add the geocoder to the map
  map.addControl(geocoder);

  // After the map style has loaded on the page,
  // add a source layer and default styling for a single point
  map.on('load', function() {
    map.addSource('single-point', {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features: []
      }
    });

    map.addLayer({
      id: 'point',
      source: 'single-point',
      type: 'circle',
      paint: {
        'circle-radius': 10,
        'circle-color': '#448ee4'
      }
    });

    // Listen for the `result` event from the Geocoder
    // `result` event is triggered when a user makes a selection
    // Add a marker at the result's coordinates
    geocoder.on('result', function(ev) {
      map.getSource('single-point').setData(ev.result.geometry);
    });
  });
</script>
</body>
</html>