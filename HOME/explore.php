<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Explore Surrounding</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.2.0/mapbox-gl-geocoder.css' type='text/css' />
    <link rel="stylesheet" href="preloader.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="icon1.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a3b90de71b.js"></script>
    <style>
        body {
          margin: 0;
          padding: 0;
        }

        #map {
          position: absolute;
          top:50px;;
          bottom: 0;
          width: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="icon1.ico"></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cleaning.php">Cleaning</a></li>
            <li><a href="electric.php">Electric</a></li>
            <li><a href="plumber.php">Plumbing & Water</a></li>
            <li><a href="salon.php">Personal care</a></li>
          </ul>
        </li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="cntt.php">Contact Us</a></li>
        <li class="active"><a href="explore.php"><span class="glyphicon glyphicon-shopping-cart"></span> Nearby</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
      if(!isset($_SESSION['loggedinuser'])&&!isset($_SESSION['loggedin']))
      {
      echo "<li><a href='loging-emp.php'><span class='glyphicon glyphicon-user'></span> Employ</a></li>";
      echo "<li><a href='login-user.php'><span class='glyphicon glyphicon-log-in'></span> User</a></li>";
      }
      else
      {
        if(isset($_SESSION['loggedin']))
        {
          echo "<li><a href='profile-emp.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>";
          echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
        }
        else
        {
          echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>";
          echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
        }
      }
      ?>
      </ul>
    </div>
  </nav>

  <div id='map'></div>

<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoibmlzaGFudDMyMSIsImEiOiJjazBtNmg4amQxM3A3M2hvY3B2d2ZmZGl2In0.cSptqKH2Q5DatyZwYYln3w';
  var map = new mapboxgl.Map({
    container: 'map', // Container ID
    style: 'mapbox://styles/mapbox/streets-v11', // Map style to use
    center:  [81.863916, 25.492830], // Starting position [lng, lat]
    zoom: 12, // Starting zoom level
  });

  var marker = new mapboxgl.Marker() // Initialize a new marker
    .setLngLat([81.863916, 25.492830]) // Marker [lng, lat] coordinates
    .addTo(map); // Add the marker to the map

  var geocoder = new MapboxGeocoder({ // Initialize the geocoder
    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
    marker: false, // Do not use the default marker style
    placeholder: 'Search for places in Teliarganj', // Placeholder text for the search bar
    bbox: [81.81205138896083,25.450183776503187,81.9595245307755,25.57], // Boundary for Berkeley
    proximity: {
      longitude: 81.8740752152902,
      latitude: 25.522671436186072
    } // Coordinates of UC Berkeley
  });

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