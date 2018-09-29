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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">ProxiChats</a>
      <ul class="right">
        <li><a href="login.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-text prefix">Name:</i>
          <input id="name" type="text" class="validate">
          <label for="name"></label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-text prefix">Username:</i>
          <input id="username" type="text" class="validate">
          <label for="username"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-text prefix">Email:</i>
          <input id="email" type="text" class="validate">
          <label for="email"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <i class="material-text prefix">Phone Number:</i>
          <input id="phone_number" type="text" class="validate">
          <label for="phone_number"></label>
        </div>
        <div class="input-field col s4">
          <i class="material-text prefix">Gender:</i>
          <input id="gender" type="text" class="validate">
          <label for="gender"></label>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-text prefix">Password:</i>
          <input id="password" type="text" class="validate">
          <label for="password"></label>
        </div>
        <div class="input-field col s6">
          <i class="material-text prefix">Confirm Password:</i>
          <input id="password" type="text" class="validate">
          <label for="password"></label>
        </div>
      </div>
      <div class="row center">
        <a href="successful.php" id="download-button" class="btn-large waves-effect waves-light orange">Create Account</a>
    </form>
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
