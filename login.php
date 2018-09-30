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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <link rel="stylesheet" href="./css/main.css">
</head>

<?php
$error="";
if ($_POST) {

  $username = $_POST['username'];
  $password = $_POST['password'];


  try {
    $db = "mysql:host=localhost;dbname=proxichats";
    $user = "proxichats-admin";
    $pass = "DdvGsF6hN7AA";
    $pdo = new PDO($db, $user, $pass);

    $password=md5($password);

    $sql = ("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");


    $result = $pdo->query($sql);

    $row = $result ->fetch();

    if($row){

      $username = $row['username'];
      $name = $row['name'];

      session_start();
      $_SESSION['username']=$username;
      $_SESSION['name']=$name;

     echo "<script> window.location.href = 'proximity.php'; </script>";

  }
  else{
    $error="<div id='error'>Invalid email or password</div>";

  }

  }

  catch(DOException $e)
  {
    die ($e->getMessage());
  }
}

?>


<body>
<?php session_start(); ?>
<?php if(isset($_SESSION['username'])){ 
  echo '<script> window.location.href = "index.php";  </script>';}
  else {
?>
  <nav style="color: #481346;" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">ProxiChats</a>
      <ul class="right">
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="right">
        <li><a href="create.php">Create Account</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Create Account</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
  <?php  echo $error;?>
    <form method="post">
      <div class="container">
        <div class="col s6 offset-s3">
            <div class="input-field">
          <input placeholder="Username" name="username" id="username" type="text" class="validate">
          <label for="username"></label>
          <div id="nameError"></div>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="col s6 offset-s3">
          <div class="input-field">
          <input placeholder="Password" name="password" id="password" type="password" class="validate">
          <label for="password"></label>
          <div id="pwError"></div>
        </div>
        </div>
      </div>
      <div class="row">
      </div>
      <div class="row center">
        <button type="submit"  id="download-button submit" class="btn-large waves-effect waves-light deep-purple darken-3"><a class="white-text" href="#!">Login</button>
    </div>
    </form>
    <div class="row center">
      <button id="download-button" class="btn-large waves-effect waves-light deep-purple darken-3"><a class="white-text" href="forget.php">Forget</button></a>
    </div>
  </div>

    <br><br>
  </div>
  <?php } ?>
  <?php  include "footer.php";?>


  </body>
</html>
