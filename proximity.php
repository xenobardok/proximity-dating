<?php include_once('./includes/header.php') ?>
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>


</head>
<body>

    <?php include_once('./includes/navbar.php') ?>

  <div class="container">

  <div class="row map-chat">
    <div class="col-sm-3"><div class="online">
      <p>Online now</p>
      <div class="alternate">
      <p>Sunil Jamkatel</p>
      <p>Sagar Poudel</p>
      </div>
  
  </div></div>
    <div class="col-sm-9"><div id="map" style="width: 100%; height: 60vh;"> </div></div>
  </div>
  </div>

<?php include_once("./includes/footer.php") ?>

  <script  type="text/javascript" charset="UTF-8" >

  function addMarkerToGroup(group, coordinate, html) {
    var marker = new H.map.Marker(coordinate);
    // add custom data to the marker
    marker.setData(html);
    group.addObject(marker);
  }

function moveMarker(map){
  var group = new H.map.Group();
  map.addObject(group);

  navigator.geolocation.getCurrentPosition(function(position) {
  var userLat = (position.coords.latitude);
  var userLong = (position.coords.longitude);
    var userLoc = {lat:userLat, lng:userLong};
    console.log(userLoc);

    map.setCenter(userLoc);
    map.setZoom(18);

    var userMarker = new H.map.Marker({lat:userLat, lng:userLong});
    map.addObject(userMarker);
  });

  group.addEventListener('tap', function (evt) {
    var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
    content: evt.target.getData()
    });
    ui.addBubble(bubble);}, false);

    addMarkerToGroup(group, {lat:35.9911239, lng:-83.9245021},
      '<div class="marker-wrap"><div> <p><img src="./assets/images/cat.jpg" class="map-img"> Sagar </p> </div>' + '<div> <button class = "btn btn-primary" type = "submit" id = "connect">Connect</button></div></div>'
      );

}

var platform = new H.service.Platform({
  app_id: 'J3G6HcXDEFfYJmRWCCEw',
  app_code: 'wxf90uvzwKTDL1vxOj6qbA',
  useHTTPS: true
});

var pixelRatio = window.devicePixelRatio || 1;

var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map, {pixelRatio: pixelRatio});

var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var ui = H.ui.UI.createDefault(map, defaultLayers);

moveMarker(map);
  </script>

   <!-- <script  type="text/javascript" charset="UTF-8"

    var connect_btn = document.getElementById('connect');
    var profile = document.getElementById('profile');
    connect_btn.addEventListener("click", function(){
      document.getElementById('info').style.visibility = "visible";
    });


}
  </script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
