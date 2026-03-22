<!DOCTYPE html>
<html>
<head><title>Câu 15</title></head>
<body>
    <h3>Đếm kí tự trong chuỗi</h3>
    <form method="POST" action="">
        Nhập chuỗi s: <input type="text" name="chuoi_s" value="<?php echo isset($_POST['chuoi_s']) ? $_POST['chuoi_s'] : ''; ?>" required><br><br>
        Nhập 1 kí tự ch: <input type="text" name="kytu_ch" maxlength="1" value="<?php echo isset($_POST['kytu_ch']) ? $_POST['kytu_ch'] : ''; ?>" required><br><br>
        <button type="submit" name="submit15">Đếm số lần xuất hiện</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit15'])) {
        $s = $_POST['chuoi_s'];
        $ch = $_POST['kytu_ch'];
        
        // Đếm số lần xuất hiện
        $dem = substr_count($s, $ch);
        
        echo "Chuỗi s = '$s' <br>";
        echo "Kí tự ch = '$ch' <br>";
        echo "=> Số lần xuất hiện: " . $dem;
    }
    ?>
</body>
</html>