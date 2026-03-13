<!DOCTYPE html>
<html>
<body>

<form method="post">
Họ tên: <input type="text" name="hoten"><br>
Ngày sinh: <input type="text" name="ngaysinh"><br>
Lớp: <input type="text" name="lop"><br>
Điểm: <input type="text" name="diem"><br>
<input type="submit" value="Hiển thị">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
echo "Họ tên: ".$_POST["hoten"]."<br>";
echo "Ngày sinh: ".$_POST["ngaysinh"]."<br>";
echo "Lớp: ".$_POST["lop"]."<br>";
echo "Điểm: ".$_POST["diem"];
}
?>

</body>
</html>