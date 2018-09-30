<?php include_once('./includes/header.php') ?>
    
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="./css/main.css" rel="stylesheet">
  </head>

  <body id="page-top">


    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">ProxiChats</div>
          <div class="intro-lead-in">A chat for nearby users</div>
          <?php 
          if(isset($_SESSION['username'])){
            include './timesync.php';
              echo "<h3>Hi, ".$_SESSION['username']."!</h3> <br/>";
              echo '<a class="btn btn-primary btn-xl text-uppercase" href="proximity.php">View your proximity</a>';
              echo '<a class="btn btn-primary btn-xl text-uppercase" href="logout.php">Logout</a>';
          }
          else {
            echo '
          <a class="btn btn-primary btn-xl text-uppercase" href="login.php">Login</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="create.php">Register</a>';
          }
          ?>
        </div>
      </div>
    </header>



    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
