<!DOCTYPE html>
<HTML>
<HEAD><TITLE>Show Data Book</TITLE></HEAD>
<BODY>
<?php include 'conn.php';?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM book 
        INNER JOIN statusbook ON book.statusID = statusbook.statusID
        INNER JOIN typebook ON book.typeID = typebook.typeID
        WHERE book.bookID = $id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($result);
$Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
$image = "<img src=$Path$data[Picture] valign=middle align = center
width=\"80\" height = \"100\">";
echo "<table border=1 align =center bgcolor=#FFCCCC>";
echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B>แสดงรายละเอียดหนังสือ
</B></td></tr>";
echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["TypeName"]."</td></tr>";
echo "<tr><td> สถานะหนังสือ : </td><td>".$data["StatusName"]."</td></tr>";
echo "<tr><td> สานักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
echo "<tr><td> ราคาซ้ือ : </td><td>".$data["UnitPrice"]."</td></tr>";
echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>";
echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
echo "<tr><td>จานวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
echo "<tr><td> วันที่จัดเก็บหนังสือ :
</td><td>".$data["BookDate"]."</td></tr></table>";
?>
<br>
<div align = "center"> <A HREF="listofbook2.php">กลับหน้าหลัก</A></div><BR>
</BODY>
</HTML>