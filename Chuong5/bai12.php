<table border="10" cellspacing="10" cellpadding="10">
<?php
for ($dong = 1; $dong <= 8; $dong++) {
    echo "<tr>";
    for ($cot = 1; $cot <= 8; $cot++) {
        $tong = $dong + $cot;
        if ($tong % 2 == 0) {
            echo "<td width='40' height='40' bgcolor='#FFFFFF'></td>";
        } else {
            echo "<td width='40' height='40' bgcolor='#000000'></td>";
        }
    }
    echo "</tr>";
}
?>
</table>