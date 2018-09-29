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
      <ul class="right ">
        <input placeholder="Status" id="status" type="text" class="validate">
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
  </div>
  <nav>
    <ul id="slide-out" class="sidenav-fixed">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">People Nearby<i class="material-icons">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">First</a></li>
              <li><a href="#!">Second</a></li>
              <li><a href="#!">Third</a></li>
              <li><a href="#!">Fourth</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
  <ul class="left-align">
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Recent Chats<i class="material-icons right">arrow_drop_down</i></a></li>
    <ul id='dropdown1' class='dropdown-content'>
      <li><a href="#!">First</a></li>
      <li><a href="#!">Second</a></li>
      <li><a href="#!">Third</a></li>
      <li><a href="#!">Fourth</a></li>
    </ul>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </nav>
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
