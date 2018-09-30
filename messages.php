
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Messages</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/chat.css">

  <?php include_once('./includes/header.php') ?>
  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="./css/main.css">
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

</head>

<body>

      <?php include_once('./includes/navbar.php') ?>
</body>

<?php

session_start();
$username="";

if (isset($_SESSION['username'])){

    $username= $_SESSION['username'];
    echo "Hi, ".$username;



    try {
      $db = "mysql:host=localhost;dbname=proxichats";
      $user = "proxichats-admin";
      $pass = "DdvGsF6hN7AA";
      $pdo = new PDO($db, $user, $pass);

      $sql1 = "Select username from users where username!='".$username."'";
      $result1 = $pdo->query($sql1);

      echo '<div class="row map-chat">
          <div class="col-sm-2"><div class="online1">
          <p>Nearby</p>
          <div class="alternate">';

      $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/proximity-dating/messages.php";

      foreach ($result1 as $row1){

        $user = $row1['username'];

        echo "<a href='".$actual_link."?recipient=".$user."'><p>" .$user."</p></a>";

      }
      echo "</div></div>";

      echo '<div class="online1">
          <p>Recent Chats</p>
          <div class="alternate">';

      $sql2 = "Select user2 from chats where user1='".$username."'";
      $result2 = $pdo->query($sql2);

      foreach ($result2 as $row2){

        $user = $row2['username'];

        echo "<a href='".$actual_link."?recipient=".$user."'><p>" .$user."</p></a>";

      }
      echo "</div></div></div></div>";

    }

    catch (PDOException $e) {
      echo "Something went wrong.";
    }
?>


<?php
    if($_GET)
    {
      $recipient = $_GET['recipient'];
    ?>


<div class="col s9">
    <div id="wrapper">
   <h1>Chatting with <span id="recipient"><?php echo $recipient;?></span></h1>
      <div class="chat-wrapper">
        <div id="chat">


        </div>
        <form method = 'post' action="formHandler.php" id="form">
          <textarea name="message"  cols="30"  class="textarea"></textarea>
        </form>
      </div>
    </div>
  </div>


    <script>
       var user = $("#recipient").html();
      function LoadChat(){
        $.post('messagehandler.php?action=getMessage&user='+user,function(response)
        {
           var scrollpos=$('#chat').scrollTop();
           var scrollpos = parseInt(scrollpos)+520;
           var scrollHeight = $('#chat').prop('scrollHeight');


           $('#chat').html(response);

            if(scrollpos<scrollHeight){

            }
        else{
            $('#chat').scrollTop($('#chat').prop('scrollHeight'));
        }
        });


      }
      setInterval(function(){LoadChat();},100);
      LoadChat();
        $('.textarea').keyup(function(e){

            if(e.which==13){
              $('form').submit();
        }
         });

         $('form').submit(function(){

          var message = $('.textarea').val();
          $.post('messagehandler.php?action=sendMessage&user='+user+'&message='+message,function(response){

            if(response==1){
              document.getElementById('form').reset();
            }
          });
           return false;


         });


    </script>

<?php
    }
}


else{

    echo "link is broken";
}
?>
