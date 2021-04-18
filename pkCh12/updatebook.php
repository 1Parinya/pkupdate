<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update book</title>
</head>

<body>
    <?php include 'conn.php' ?>
    <?php

$id = $_GET['id'];
$sql = "select * from book where BookID = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($result);

?>

    <form enctype="multipart/form-data" name="save" method="post" action="savebookupdate.php">

    <?php
    echo "<table border=1 align = center bgcolor = #FFCCCC>";
    echo "<tr><td align=center colspan = 2 bgcolor = #FF99CC><b>แก้ไข รายละเอียดหนังสือ
    </b></td></tr>";

    echo "<tr><td> รหัสหนังสือ : </td><td><input type=\"text\"> name=\"BookID\"value=\""
        .$data['BookID']."\" readonly></td></tr>";
    echo "<tr><td> ชื่อหนังสือ : </td><td><input type=\"text\"> name=\"BookID\"value=\""
        .$data['BookName']."\" readonly></td></tr>";
    echo "<tr><td> สำนักพิมพ์ : </td><td><input type=\"text\"> name=\"BookID\"value=\""
        .$data['Publish']."\" readonly></td></tr>";
    echo "<tr><td> ราคาซื้อ : </td><td><input type=\"text\"> name=\"BookID\"value=\""
        .$data['UnitPrice']."\" readonly></td></tr>";
    echo "<tr><td> ราคาเช่า : </td><td><input type=\"text\"> name=\"BookID\"value=\""
        .$data['UnitRent']."\" readonly></td></tr>";
    echo "</table>"
?>

        <br>
        <div aligh="center" name="Submit" value="แก้ไขข้อมุล" style="cursor:hand">
            <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
            <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
        </div>
    </form>
    <div align="center"> <a href="listofbook2.php">กลับหน้าหลัก</a></div><br>

</body>

</html>