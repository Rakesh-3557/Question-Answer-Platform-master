<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db="project";
    $port=3306;
    

    $conn = mysqli_connect($server,$user,$password,$db,$port) or die("Connection Failed ". mysqli_connect_error());
?>

