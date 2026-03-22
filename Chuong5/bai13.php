<!DOCTYPE html>
<html>
<head>
    <title>Câu 13 - Mảng 1 chiều</title>
</head>
<body>
    <h3>Nhập mảng 1 chiều</h3>
    <form method="POST" action="">
        <label>Nhập các số nguyên (cách nhau bằng dấu phẩy):</label><br>
        <input type="text" name="chuoi_mang" style="width: 300px;" value="<?php echo isset($_POST['chuoi_mang']) ? $_POST['chuoi_mang'] : '4, 9, 15, 25, 12, 7'; ?>">
        <button type="submit" name="submit_cau13">Thực hiện</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit_cau13']) && $_POST['chuoi_mang'] != "") {
        // Lấy chuỗi từ form và tách thành mảng bằng dấu phẩy
        $chuoi_mang = $_POST['chuoi_mang'];
        $mang = explode(",", $chuoi_mang);
        
        // Dùng vòng lặp ép kiểu các phần tử về số nguyên để tính toán chính xác
        for ($i = 0; $i < count($mang); $i++) {
            $mang[$i] = (int)trim($mang[$i]);
        }

        // --- CÁC HÀM XỬ LÝ NHƯ CŨ ---
        function timMax($mang) {
            $max = $mang[0];
            foreach($mang as $pt) { if($pt > $max) $max = $pt; }
            return $max;
        }

        function timMin($mang) {
            $min = $mang[0];
            foreach($mang as $pt) { if($pt < $min) $min = $pt; }
            return $min;
        }

        function inSoChinhPhuong($mang) {
            foreach($mang as $pt) {
                if ($pt >= 0 && sqrt($pt) == (int)sqrt($pt)) {
                    echo $pt . " ";
                }
            }
        }

        function inChanLe($mang) {
            echo "Số chẵn: ";
            foreach($mang as $pt) { if($pt % 2 == 0) echo $pt . " "; }
            echo "<br>Số lẻ: ";
            foreach($mang as $pt) { if($pt % 2 != 0) echo $pt . " "; }
        }

        function sapXepTang($mang) {
            sort($mang);
            foreach($mang as $pt) { echo $pt . " "; }
        }

        // --- IN KẾT QUẢ ---
        echo "<b>Mảng bạn vừa nhập:</b> " . implode(", ", $mang) . "<br><br>";
        echo "<b>a) Số lớn nhất:</b> " . timMax($mang) . "<br>";
        echo "<b>b) Số nhỏ nhất:</b> " . timMin($mang) . "<br>";
        echo "<b>c) Số chính phương:</b> "; inSoChinhPhuong($mang); echo "<br>";
        echo "<b>d, e) Phân loại chẵn lẻ:</b><br>"; inChanLe($mang); echo "<br>";
        echo "<b>f) Sắp xếp tăng dần:</b> "; sapXepTang($mang);
    }
    ?>
</body>
</html>