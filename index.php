<?php include_once('./includes/header.php') ?>
    
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
          <div class="intro-lead-in">A chat for nearby users</div>
          <?php session_start();
          if(isset($_SESSION['username'])){
              echo "<h3>Hi, ".$_SESSION['username']."!</h3> <br/>";
              echo '<a class="btn btn-primary btn-xl text-uppercase" href="proximity.php">View your proximity</a>';
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo '<a class="btn btn-primary btn-xl text-uppercase" href="logout.php">Logout</a>';
          }
          else {
            echo '
          <a class="btn btn-primary btn-xl text-uppercase" href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-primary btn-xl text-uppercase" href="create.php">Register</a>';
          }
          ?>
        </div>
      </div>
    </header>



    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
