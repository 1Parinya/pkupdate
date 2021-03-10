<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($servername,$username,$password);

    if ($con->connect_error){
    die("Connection flied : ".$con->connect_error);
    }
    echo "Connected successfully";

?>