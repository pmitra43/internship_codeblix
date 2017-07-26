<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var geocoder;
var map;
var src,dest;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(22.5855143, 88.42084909999994);
  var mapOptions = {
    zoom: 15,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
      src=marker["position"];
      alert("1 "+src);
    } else {
      alert('1 Geocode was not successful for the following reason: ' + status);
    }
  });
}

function codeAddress1() {
  var address = document.getElementById('address1').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
      dest=marker["position"];
      alert("2 "+dest);
    } else {
      alert('2 Geocode was not successful for the following reason: ' + status);
    }
  });
}

function ab()
{
  codeAddress();
  setInterval(function(){document.getElementById("srcadd").value=src},3000);
}

function cd()
{
  codeAddress1();
  setInterval(function(){document.getElementById("dstadd").value=dest},3000);
}

function submit()
{

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="panel">
      <form action="journey.php" method="post">
        <input id="address" type="textbox" onblur="ab()">
        <input id="address1" type="textbox" onblur="cd()">
        <input type="time" id="time">
        <input type="hidden" id="dstadd">
        <input type="hidden" id="srcadd">
        <input type="submit" value="Geocode">
      </form>
    </div>
    <div id="map-canvas"></div>
  </body>
</html>