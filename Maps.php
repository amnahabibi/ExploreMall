<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Site Creator Description">

  
  <title>Mall Maps</title>
  
  <!-- Including Bootstrap / CSS links -->
<?php include('includes/cdn.html'); ?>

<style>
      
      #map {
        height: 600px;
        margin-top: 80px;
        margin-bottom: 5px;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
        visibility: hidden;
      }
    </style>
  
    
  </head>
  <body>
    <div id="map"></div>
    <div id="floating-panel">
      Origin: <input type="text" readonly id="origin">
      Destination: <input type="text" readonly id="destination"><br>
      Heading: <input type="text" readonly id="heading"> degrees
    </div>
    
  <!-- importing navbar -->
<?php include('includes/nav.html'); ?>


  <section class="engine"><a>free responsive web templates</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  

  <script>
     

      var marker1, marker2;
      var poly, geodesicPoly;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: 34, lng: -40.605}
        });

        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
            document.getElementById('info'));

        marker1 = new google.maps.Marker({
          map: map,
          draggable: true,
          position: {lat: 24.932911, lng: 67.086559} 
        });

        marker2 = new google.maps.Marker({
          map: map,
          draggable: true,
          position: {lat: 24.932575, lng: 67.087479}
        });

        var bounds = new google.maps.LatLngBounds(
            marker1.getPosition(), marker2.getPosition());
        map.fitBounds(bounds);

        google.maps.event.addListener(marker1, 'position_changed', update);
        google.maps.event.addListener(marker2, 'position_changed', update);

        poly = new google.maps.Polyline({
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 3,
          map: map,
        });

        geodesicPoly = new google.maps.Polyline({
          strokeColor: '#CC0099',
          strokeOpacity: 1.0,
          strokeWeight: 3,
          geodesic: true,
          map: map
        });

        update();
      }

      function update() {
        var path = [marker1.getPosition(), marker2.getPosition()];
        poly.setPath(path);
        geodesicPoly.setPath(path);
        var heading = google.maps.geometry.spherical.computeHeading(path[0], path[1]);
        document.getElementById('heading').value = heading;
        document.getElementById('origin').value = path[0].toString();
        document.getElementById('destination').value = path[1].toString();
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD94OM4MFApOw0dvZOUUAdaGOQ0XX3IJCI&libraries=geometry&callback=initMap"
        async defer>
          
    </script>

  <!--importing footer-->
<?php include('includes/footer.html'); ?>


<!-- Including Javascript link -->
<?php include('includes/scripts.html'); ?>
  
</body>
</html>