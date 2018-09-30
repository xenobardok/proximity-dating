<?php

session_start();

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    switch($_REQUEST['action']){
        case "updatemap":
           $long=$_REQUEST['long'];
           $lat=$_REQUEST['lat'];

            
                $db = "mysql:host=localhost;dbname=proxichats";
                $user = "proxichats-admin";
                $pass = "DdvGsF6hN7AA";
                $pdo = new PDO($db, $user, $pass);
                $sql1 = "UPDATE users SET longitude ='".$long."' WHERE username='".$_SESSION['username']."'";
                $pdo ->query($sql1);
                $sql1 = "UPDATE users SET latitude ='".$lat."' WHERE username='".$_SESSION['username']."'";
                $pdo ->query($sql1);

                echo $sql1;

                break;


    }
           
}
?>
