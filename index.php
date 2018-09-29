<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ProxiChats</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">ProxiChats</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="create.php">Create Account</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Create Account</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php
  session_start();

  if (isset($_SESSION['username'])){
      
      $username= $_SESSION['username'];
      echo "Hi, ".$username;
    
  }

 ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">ProxiChats</h1>
      <div class="row center">
        <h5 class="header col s12 light">A chat service for nearby users</h5>
      </div>
      <div class="row left">
        <a href="login.php" id="download-button" class="btn-large waves-effect waves-light orange">Login</a>
      </div>
      <div class="row right">
        <a href="create.php" id="download-button" class="btn-large waves-effect waves-light orange">Create Account</a>
      </div>
      <br><br>

    </div>
  </div>

    <br><br>
  </div>

  <?php include "footer.php" ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
