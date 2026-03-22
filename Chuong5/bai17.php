<!DOCTYPE html>
<html>
<head><title>Câu 17</title></head>
<body>
    <h3>Tách từ trong chuỗi</h3>
    <form method="POST" action="">
        Nhập chuỗi s: <input type="text" name="chuoi_s" required><br><br>
        <button type="submit" name="submit17">Tách từ</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit17'])) {
        $s = $_POST['chuoi_s'];
        
        // Dùng khoảng trắng để tách từ
        $mang_tu = explode(" ", $s);
        
        echo "Nhập chuỗi: s = '$s' <br>=> Kết quả:<br>";
        for ($i = 0; $i < count($mang_tu); $i++) {
            echo "a[" . ($i + 1) . "] = \"" . $mang_tu[$i] . "\" ; ";
        }
    }
    ?>
</body>
</html>