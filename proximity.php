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

    <?php include_once('./includes/navbar.php');


    if(isset($_SESSION['username']))
    {
      $username=$_SESSION['username'];
      $pdo = new PDO("mysql:host=localhost;dbname=proxichats", 'proxichats-admin', 'DdvGsF6hN7AA');
      $sql_list = "select * from users where username!='".$username."' AND online=1";
      $result = $pdo->query($sql_list);
      echo '<div class="row map-chat"> <div class="container"> <div class="row map-chat"><div class="col-sm-3"><div class="online"><p>Online now</p><div class="alternate">';
      foreach ($result as $data) {
          echo '<p>'.  $data['username'] . '</p>';
        }
        echo '</div></div></div><div class="col-sm-9"><div id="map" style="width: 100%; height: 60vh;"> </div></div>
        </div>
        </div>';
    ?>




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


    <?php
       $sql_map = "select * from users where username!='".$username."'";

       $result = $pdo->query($sql_map);

       foreach ($result as $data) {
         $lat = $data['latitude'];
         $lng = $data['longitude'];
         $user = $data['username'];



     ?>
    var phLatitude = <?php echo(json_encode($lng)); ?>;
    var phLongitude = <?php echo(json_encode($lat)); ?>;

    console.log(typeof(phLatitude));
    console.log(phLongitude);
    addMarkerToGroup(group, {lat:phLatitude, lng:phLatitude},
      '<div class="marker-wrap"><div> <p><img src="./assets/images/cat.jpg" class="map-img"> <?php echo $user ?> </p> </div>' + '<div><a href="messages.php?recipient=<?php echo $user ?>"> <button class = "btn btn-primary" type = "submit" id = "connect">Connect</button></a></div></div>'
      );
<?php }
 ?>
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

  <?php



  }
  else{
    echo"<script>window.location.href='index.php'</script>";
  }
  ?>
  <?php include_once("./includes/footer.php") ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
