<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="copyright" content="ProxiChats">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="keywords" content="ProxiChats provides easy chatting solutions for users nearby">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ProxiChats provides easy chatting solutions for users nearby">
    <meta name="author" content="VOLHACKS 2018">

    <title>ProxiChats</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="./css/main.css" rel="stylesheet">
    
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="./img/logo.jpg" alt=""></a>
        
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">ProxiChats</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Login</a>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Register</a>
        </div>
      </div>
    </header>


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
  map.setZoom(14);
  
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



// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
moveUser(map);




// Bubble


  </script>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/main.js"></script>
    <div id="fb-root"></div>


  </body>

</html>
