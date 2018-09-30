<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

</head>
<body>






  <div id="map" style="width: 100%; height: 400px; background: grey" />
  <script  type="text/javascript" charset="UTF-8" >
/**
 * Moves the map to display over Berlin
 *
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function moveUser(map){
    navigator.geolocation.getCurrentPosition(function(position) {
    var userLat = (position.coords.latitude);
    var userLong = (position.coords.longitude);
    var userLoc = {lat:userLat, lng:userLong};
  map.setCenter(userLoc);
  map.setZoom(18);
  
var userMark = new H.map.Marker(userLoc);
map.addObject(userMark);

var userMark1 = new H.map.Marker({lat:35.953757, lng:-83.930584});
map.addObject(userMark1);
var userMark2 = new H.map.Marker({lat:35.955757, lng:-83.939584});
map.addObject(userMark2);
var userMark3 = new H.map.Marker(userLoc);
map.addObject(userMark3);
    });
    };





/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'SG9KMY3cfbGscQunN6zF',
  app_code: '3FnHcrAKpekFmHUrZDWdKg',
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

//Step 2: initialize a map  - not specificing a location will give a whole world view.
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map, {pixelRatio: pixelRatio});

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
moveUser(map);




// Bubble


  </script>
</body>
</html>
