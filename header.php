<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php
session_start();

?>


<script>


function updateTime(){

           $.post('updateTime.php?action=updatetime',function(response){

            console.log(response);  
           });


}

setInterval(function(){updateTime();},60000);


</script>