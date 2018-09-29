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
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Create Account</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Username" id="username" type="text" class="validate">
          <label for="username"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Password" id="password" type="password" class="validate">
          <label for="password"></label>
        </div>
      </div>
      <div class="row center">
        <a href="sucessful.php" id="download-button" class="btn-large waves-effect waves-light orange">Login</a>
    </form>
  </div>

    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of College Students at VolHacks III creating a location based messaging service. We hope you enjoy!</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact Us</h5>
          <ul>
            <p><a class="white-text" href="#!">Sunil Jamkatel (###)###-####</a></p>
            <p><a class="white-text" href="#!">Shivam Kharga  (###)###-####</a></p>
            <p><a class="white-text" href="#!">Sagar Poudel (###)###-####</a></p>
            <p><a class="white-text" href="#!">Andrew Jelson  (713)447-4998</a></p>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="red-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
