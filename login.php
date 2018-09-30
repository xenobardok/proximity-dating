<?php include_once('./includes/header.php') ?>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

      $_SESSION['username']=$username;
      $_SESSION['name']=$name;
      $sql1 = "UPDATE users SET online=1 WHERE username='".$_SESSION['username']."'";
      $result = $pdo->query($sql1);

      include './timesync.php';

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


<body class="login">
<?php if(isset($_SESSION['username'])){ 
  echo '<script> window.location.href = "index.php";  </script>';}
  else {
?>
  <?php include_once('./includes/navbar.php') ?>
  <?php  echo $error;?>

<div class="container mainForm">
<form method="post" action="login.php">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="validate" id="username" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
    <div id="nameError"></div>
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="validate" id="password" placeholder="Password" name="password">
    <div id="pwError"></div>
  </div>
  <button type="submit" class="btn btn-primary btn-xl text-uppercase">Submit</button>
  
  <a class="white-text" href="forget.php"><button id="download-button" class="btn btn-primary btn-xl text-uppercase">Forget</button></a>
</form>
</div>



  <?php } ?>
  <?php  include "./includes/footer.php";?>


  </body>
</html>
