<?php
// Khối 1: Từ 1 đến 5
echo "<table width='100%' border='0'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$j x $i = " . ($j * $i) . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Khối 2: Từ 6 đến 10
echo "<table width='100%' border='0'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 6; $j <= 10; $j++) {
        echo "<td>$j x $i = " . ($j * $i) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>