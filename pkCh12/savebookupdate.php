<?php include 'conn.php' ?>
<?php
    $BookID = $_POST['BookID'];
    $BookName = $_POST['BookName'];

    $Publish = $_POST['Publish'];
    $UnitPrice = $_POST['UnitPrice'];
    $UniRent  = $_POST['UnitRent'];

    if(isset($BookID))
    {
        $BDate = data("Y-m-d");

        $sqltxt = mysqli_query($conn,"UPDATE book
        SET BookName = '$BookName',Publish = '$Publish',
            UnitPrice = '$UnitPrice',UnitRent = '$UniRent'
        WHERE BookID = '$BookID'") or die (mysqli_error($conn));

        echo "<br><br><center><H2>แก้ไขข้อมูลเรียบร้อย</H2><br><br></center>";
        echo "<center><a href=\"listobook2.php\">แสดงข้อมูลทั้งหมด</a></center>";
    }
    mysqli_close($conn);
?>








