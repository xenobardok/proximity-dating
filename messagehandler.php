<?php

session_start();
$username="";

if (isset($_SESSION['username'])){
    $sender = $_SESSION['username'];
    switch($_REQUEST['action']){
        case "sendMessage":
            $message=$_REQUEST['message'];
            $recipient = $_REQUEST['user'];

            try {
                $db = "mysql:host=localhost;dbname=proxichats";
                $user = "proxichats-admin";
                $pass = "DdvGsF6hN7AA";
                $pdo = new PDO($db, $user, $pass);

                $sql1 = $pdo ->prepare( "INSERT INTO messages(sender,receiver,message) VALUES(?,?,?)");
                $result1 = $sql1 ->execute([$sender,$recipient,$message]);

                if($result1)
                {
                    echo 1;
                    exit;
                }
            }
            catch(PDOException $e){
                echo 0;

            }
        break;

        case "getMessage":
            $recipient = $_REQUEST['user'];


            try {
                $db = "mysql:host=localhost;dbname=proxichats";
                $user = "proxichats-admin";
                $pass = "DdvGsF6hN7AA";
                $pdo = new PDO($db, $user, $pass);

                $sql1 = "SELECT * FROM  messages where (sender='".$sender."' AND receiver='".$recipient."') OR (sender='".$recipient."' AND receiver = '".$sender."')";
                $result1 = $pdo->query($sql1);


                $chat="";
                foreach ($result1 as $row){
                    $from = $row['sender'];
                    $to = $row['receiver'];
                    $time = date('m-d-y',strtotime($row['time']));
                    $message = $row['message'];

                    if($from==$sender){
                        // $chat.= '<div class="single-message sent"><strong>You: </strong> '.$message.'<br>'.$time.'</div><br>';
                        $chat.= '<div class="single-message sent"><strong>You: </strong> '.$message.'<br/>'.$time.'</div><br><br><br><br>';

                    }
                    else{
                        $chat.= '<div class="single-message received"><strong>'.$from.'</strong>: '.$message.'<br>'.$time.'</div><br><br><br><br>';
                    }
                }
                echo $chat;
            }
            catch(PDOException $e){
                echo 0;

            }
            break;




    }

}

?>
