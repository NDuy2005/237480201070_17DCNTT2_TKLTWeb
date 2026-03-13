<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bảng n và n²</title>

<style>
body{
    font-family: Arial;
    text-align:center;
}

table{
    margin:auto;
    border-collapse: collapse;
    width:300px;
}

th{
    background:#4CAF50;
    color:white;
    padding:8px;
}

td{
    border:1px solid #ccc;
    padding:6px;
}

tr:nth-child(even){
    background:#f2f2f2;
}
</style>

</head>

<body>

<h2>BẢNG GIÁ TRỊ n VÀ n²</h2>

<table>
<tr>
<th>Số n</th>
<th>Số n²</th>
</tr>

<?php
for($i=0;$i<=50;$i++)
{
echo "<tr>";
echo "<td>$i</td>";
echo "<td>".($i*$i)."</td>";
echo "</tr>";
}
?>

</table>

</body>
</html>