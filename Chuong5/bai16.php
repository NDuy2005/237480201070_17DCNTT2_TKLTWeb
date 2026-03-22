<!DOCTYPE html>
<html>
<head><title>Câu 16</title></head>
<body>
    <h3>Đảo ngược chuỗi</h3>
    <form method="POST" action="">
        Nhập chuỗi s: <input type="text" name="chuoi_s" required><br><br>
        <button type="submit" name="submit16">Đảo ngược</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit16'])) {
        $s = $_POST['chuoi_s'];
        $chuoi_dao = strrev($s);
        
        echo "Chuỗi s: " . $s . "<br>";
        echo "=> Chuỗi đảo: " . $chuoi_dao;
    }
    ?>sss
</body>
</html>