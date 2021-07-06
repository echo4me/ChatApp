<?php
    $user = 'root';
    $pass = '';
    $db   = 'newchat';
    $host = 'localhost';
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        echo "Failed to Connect DB".mysqli_connect_error();
    }

?>