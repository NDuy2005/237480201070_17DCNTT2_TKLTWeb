<?php
// --- CÂU 10 ---
$mang = array(12, 5, 8, 21, 10, 3, 18);

echo "a. Các phần tử của mảng: ";
foreach ($mang as $pt) {
    echo $pt . " ";
}
echo "<br>";

$demChan = 0;
$tongLe = 0;
$max = $mang[0];
$min = $mang[0];

foreach ($mang as $pt) {
    // Đếm chẵn
    if ($pt % 2 == 0) {
        $demChan++;
    }
    // Tổng lẻ
    if ($pt % 2 != 0) {
        $tongLe += $pt;
    }
    // Tìm Max, Min
    if ($pt > $max) {
        $max = $pt;
    }
    if ($pt < $min) {
        $min = $pt;
    }
}

echo "c. Số phần tử chẵn: " . $demChan . "<br>";
echo "d. Tổng các số lẻ: " . $tongLe . "<br>";
echo "e. Max: $max, Min: $min <br>";

echo "f. Mảng đảo ngược: ";
$mangDao = array_reverse($mang);
foreach ($mangDao as $pt) {
    echo $pt . " ";
}
echo "<br><br>";


// --- CÂU 11 ---
$color = array('black', 'blue', 'green', 'red', 'brown', 'magenta');
foreach ($color as $mau) {
    echo "<span style='color: $mau;'>$mau</span>, ";
}
?>