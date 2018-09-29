<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

</head>
<body>

    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="proximity.php" class="brand-logo">ProxiChats</a>
        <ul class="right ">
          <input placeholder="Status" id="status" type="text" class="validate">
        </ul>
      </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
    </div>

  <div class = "row">
    <div class = "col s3">
      <nav class="light-blue lighten-1" role="sidenav">
        <ul class="">
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="login.php">First</a></li>
            <li><a href="create.php">Second</a></li>
            <li><a href="#!">Third</a></li>
            <li><a href="#!">Fourth</a></li>
          </ul>
        </ul>


      <ul class="">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="#!">First</a></li>
          <li><a href="#!">Second</a></li>
          <li><a href="#!">Third</a></li>
          <li><a href="#!">Fourth</a></li>
        </ul>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </nav>
  </div>

  <div class = "col s9">
  </div>



  <div id="map" style="width: 100%; height: 60vh;"> </div>
  <div id="profile" style="width: 20%; height: 40vh; margin:0px auto">
    <div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
        <img src="data:image/jpeg;base64,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" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
          <span class="card-title center-align">Sagar</span>
          <p class = "center-align">Computer science Major</p>
          <p class = "center-align">Missouri</p>
          <p class = "center-align"> 21 </p>
        </div>
        <div class="card-action">
          <a class="waves-effect waves-light btn-large center-align">Connect</a>
        </div>
  </div>

      </div>

    </div>


  </div>


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
      '<div> <p> Sagar </p> </div>' + '<div> <button type = "submit" id = "connect">Connect</button></div>'
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
