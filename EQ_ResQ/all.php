
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

   <title>Google Maps</title>
<?php 
echo "aaaa";
?>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js">
    </script>
    <style>
  
      #map {
        height: 100%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(23.777176, 90.399452),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depend'ing on the name of your PHP or XML file
          downloadUrl("temp.php", function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('e_data');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var time = markerElem.getAttribute('time');
              var latitude = markerElem.getAttribute('latitude');
              var longitude = markerElem.getAttribute('longitude');
              var depth = markerElem.getAttribute('depth');
             var mag = markerElem.getAttribute('mag');
             var place = markerElem.getAttribute('place');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    
  </body>
</html>