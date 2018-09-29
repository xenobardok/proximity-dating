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
    <div class="nav-wrapper container"><a id="logo-container" href="successful.php" class="brand-logo">ProxiChats</a>
      <ul class="right">
        <li><a href="index.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
   <form class="col s12">
       <div class="row">
           <div class="input-field col s11">
             <i class="material-text prefix">Name:</i>
             <input disabled value="name" type="text" class="validate">
             <label for="name"></label>
           </div>
           <div class="input-field col s1">
               <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
           </div>
       </div>
      <div class="row">
        <div class="input-field col s11">
          <i class="material-text prefix">Username:</i>
          <input disabled value="username" type="text" class="validate">
          <label for="username"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s11">
          <i class="material-text prefix">Email:</i>
          <input disabled value="email" type="text" class="validate">
          <label for="email"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s7">
          <i class="material-text prefix">Phone Number:</i>
          <input disabled value="phone" type="text" class="validate">
          <label for="phone"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
        <div class="input-field col s3">
          <i class="material-text prefix">Gender:</i>
          <input disabled value="gender" type="text" class="validate">
          <label for="gender"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
          <i class="material-text prefix">Password:</i>
          <input disabled value="password" type="text" class="validate">
          <label for="password"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
        <div class="input-field col s5">
          <i class="material-text prefix">Confirm Password:</i>
          <input disabled value="confirm_password" type="text" class="validate">
          <label for="confirm_password"></label>
        </div>
        <div class="input-field col s1">
            <button class="btn waves-effect waves-light" type="edit" name="action">Edit</button>
        </div>
      </div>
    <div class="row">
      <div class="input-field col s2">
        <i class="material-text prefix">Distance:</i>
      </div>
      <div class="input-field col s10">
        <form action="#">
          <p class="range-field">
            <input type="range" id="Distance" min="1" max="10" />
          </p>
        </form>
      </div>
      <div class="row center">
        <a href="successful.php" id="download-button" class="btn-large waves-effect waves-light orange">Update Account</a>
      </div>
    </div>
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
