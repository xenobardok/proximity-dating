<?php include_once('./includes/header.php') ?>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/create.js"></script>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>


<?php
$error="";
if ($_POST) {



  $name = $_POST['name'];
  $password = md5( $_POST['password']);
  $username =  $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];



  try {
    $db = "mysql:host=localhost;dbname=proxichats";
    $user = "proxichats-admin";
    $pass = "DdvGsF6hN7AA";
    $pdo = new PDO($db, $user, $pass);

    $sql1 = "Select * from users where email='".$email."'";
    $result1 = $pdo->query($sql1);
    $row1 = $result1->fetch();

    $sql2 = "Select * from users where username='".$username."'";
    $result2 = $pdo->query($sql2);
    $row2 = $result2->fetch();

    if($row1){
      echo "Email already registered.";
    }

    else if($row2)
    {
      echo "Username already taken.";
    }
    else{
      $sql = "INSERT INTO users(username,name,email,password,phone,gender) VALUES('".$username."','".$name."','".$email."','".$password."','".$phone."','".$gender."')";
      $pdo->query($sql);

      session_start();
      $_SESSION['username']=$username;
      $_SESSION['name']=$name;
      echo "<script> window.location.href = 'proximity.php'; </script>";
    }





   } catch (PDOException $e) {
      echo "Something went wrong.";
    }



}

?>
<?php if(isset($_SESSION['username'])){
  echo '<script> window.location.href = "index.php";  </script>';}
  else {
?>

  <?php include_once('./includes/navbar.php') ?>
  <div class="row">
    <form class="col s12" method='post'>
      <div class="container">
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Name" id="name" type="text" name="name" class="validate">
          <label for="name"></label>
          <div id="nameError"></div>
        </div>
        <div class="input-field col s4">
          <input placeholder="Username" id="username" type="text" name="username" class="validate">
          <label for="username"></label>
          <div id="usernameError"></div>
        </div>
        <div class="input-field col s6">
          <input placeholder="Email" id="email" type="text" name="email" class="validate">
          <label for="email"></label>
          <div id="emailError"></div>
        </div>

      </div>
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Phone Number" id="phone_number"  name="phone" type="text" class="validate">
          <label for="phone_number"></label>
          <div id="phoneError"></div>
        </div>

        <div class="input-field col s1">
          <input placeholder="Day" id="day" type="text" name ="day" class="validate">
          <label for="day"></label>
          <div id="dayError"></div>
        </div>
        <div class="input-field col s3">
          <input placeholder="Month" id="month" type="text" name="month" class="validate">
          <label for="month"></label>
          <div id="monthError"></div>
        </div>
        <div class="input-field col s1">
          <input placeholder="Year" id="year" type="text" name="year" class="validate">
          <label for="year"></label>
          <div id="yearError"></div>
        </div>
        <div class="input-field col s1">
          <input placeholder="Gender" id="gender" type="text" name="gender" class="validate">
          <label for="gender"></label>
          <div id="genderError"></div>
        </div>

      </div>

      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Password" id="password" type="password"   name="password" class="validate">
          <label for="password"></label>
          <div id="pwError"></div>
        </div>
        <div class="input-field col s6">
            <input placeholder="Confirm Password" id="confirm_password" type="password" class="validate">
            <label for="confirm_password"></label>
        </div>
</div>
      <div class="center">
        <button type="submit"  id="download-button submit" class="btn-large waves-effect waves-light purple darken-4">Create Account</button>
    </form>
  </div>

    <br><br>
  </div>
</div>

  <?php include_once('./includes/footer.php') ?>
  <?php } ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
