<?php

session_start();
date_default_timezone_set("UTC");

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    switch($_REQUEST['action']){
        case "updatetime":
            

            
                $db = "mysql:host=localhost;dbname=proxichats";
                $user = "proxichats-admin";
                $pass = "DdvGsF6hN7AA";
                $pdo = new PDO($db, $user, $pass);

                $time =  date('Y-m-d h:i:s');
            
                $sql1 = "UPDATE users SET time ='".$time."' WHERE username='".$_SESSION['username']."'";
                $pdo ->query($sql1); 

                $date = date("Y-m-d H:i:s");
                $time = strtotime($date);
                
                $time = $time - (2 * 60);
                
                $newTime = date("Y-m-d H:i:s", $time);


                $sql1 = "UPDATE users SET online =0 WHERE time<'".$newTime."'";
                $pdo ->query($sql1); 
                echo $newTime;

                break;
        
           
}
}
?>
