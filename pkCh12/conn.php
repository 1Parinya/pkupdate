<?php        
$hostname = "localhost";
$username = "root";
$password = "12345";
$dbname = "testimport";
$conn = mysqli_connect( $hostname, $username, $password, $dbname);
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_set_charset($conn,"utf8");
      
?>