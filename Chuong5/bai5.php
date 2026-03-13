<!DOCTYPE html>
<html>
<body>

<h2>TÍNH USCLN VÀ BSCNN</h2>

<form method="post">
Số thứ 1: <input type="text" name="a"><br><br>
Số thứ 2: <input type="text" name="b"><br><br>

<input type="submit" name="uscln" value="USCLN">
<input type="submit" name="bscnn" value="BSCNN">
</form>

<?php

function USCLN($a,$b){
while($b!=0){
$t = $a % $b;
$a = $b;
$b = $t;
}
return $a;
}

if(isset($_POST["a"]) && isset($_POST["b"]))
{
$a=$_POST["a"];
$b=$_POST["b"];

if(isset($_POST["uscln"]))
echo "USCLN = ".USCLN($a,$b);

if(isset($_POST["bscnn"]))
echo "BSCNN = ".($a*$b)/USCLN($a,$b);
}

?>

</body>
</html>