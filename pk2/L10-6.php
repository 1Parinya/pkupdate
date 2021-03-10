<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-6 </title>
</head>

<body>
    <?php
// open file
$fp = @fopen("American_Beaver.jpg" , "rb");
if ($fp) {
$fpnew = @fopen("new_American_Beaver.jpg" , "wb");
while ($ln = @fread ($fp , 1024)) {
fwrite($fpnew , $ln);
}
@fclose($fp);
@fclose($fpnew );
copy( "American_Beaver.jpg", "American_Beaver_copy.jpg");
echo "<h3>File Copy Finish...</h3>";
echo "<image src='new_American_Beaver.jpg' width='320' height='240'>";
}
else {
die ("ไม่สามารถเปิดไฟล์ American_Beaver.jpg ได้ !");
}
?>
</body>

</html>