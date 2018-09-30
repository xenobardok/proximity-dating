

<nav class="purpl" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">ProxiChats</a>
      <?php if (basename($_SERVER['PHP_SELF']) == "messages.php" || basename($_SERVER['PHP_SELF']) == "proximity.php") {  
          session_start();
      echo '<a class="user" style="float:right">Hi, '. $_SESSION['username'] . '</a>';

      }?>
      </div>
    </nav>
