<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 

$conn = new mysqli($servername,$username,$password);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";

}
else{
    echo "Error creating database: " . mysql_error($conn);
}
mysql_close($conn);

?>