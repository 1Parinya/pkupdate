<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>

<body>
    <center>

        <form action="#" method="get">
            ชื่อฐานข้อมูล ที่มีอยู่แล้ว <input type="text" name="nameDB"><br><br>
            ชื่อตารางข้อมูล ที่สร้างไว้แล้ว <input type="text" name="nameB"><br><br>
            ชื่อ <input type="text" name="name"><br><br>
            นามสกุล <input type="text" name="lname"><br><br>
            E-Mail <input type="text" name="email"><br><br>

            <input type="submit" name="submit" value="ยืนยัน">
            <br><br><br>
        </form>
        
</body>

</html>


<?php
if(isset($_GET['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    @$dbname = $_GET['nameDB'];
    @$nametb = $_GET['nameB'];
    @$name = $_GET['name'];
    @$last = $_GET['lname'];
    @$email = $_GET['email'];

  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO $nametb (firstname, lastname, email)
    VALUES ('$name', '$last', '$email');";
    if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    
}
?>