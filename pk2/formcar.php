<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='formcar.php' method ='get'>
    <table border=1>
    
<?php
$cars = $_GET['cars'];

    for($i=0;$i<10;$i++){
       echo'<tr><td>';
       echo"<form action='form.php' method ='get'>";
       echo"<input  name='cars[]' placeholder = 'Enter name car'><br>";
       echo'</tr></td>';
        
    }
    echo'<tr><td>';
    echo"<input type='submit'value='Submit infomation'><br><br>";
    echo"</td></tr></form></table><br>";
    foreach($cars as $showscar)
    echo $showscar."<br>";
    //print_r($cars);



?>
</body>
</html>







