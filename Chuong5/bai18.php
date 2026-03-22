<!DOCTYPE html>
<html>
<head><title>Câu 18</title></head>
<body>
    <h3>Tìm từ dài nhất</h3>
    <form method="POST" action="">
        Nhập chuỗi s: <input type="text" name="chuoi_s" style="width:300px;" required><br><br>
        <button type="submit" name="submit18">Tìm từ</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit18'])) {
        $s = trim($_POST['chuoi_s']);
        $mang_tu = explode(" ", $s);
        
        $tu_dai_nhat = "";
        
        foreach ($mang_tu as $tu) {
            if (strlen($tu) > strlen($tu_dai_nhat)) {
                $tu_dai_nhat = $tu;
            }
        }
        
        echo "Nhập: s = \"$s\" <br>";
        echo "Xuất: \"$tu_dai_nhat\" " . strlen($tu_dai_nhat) . " kí tự.";
    }
    ?>
</body>
</html>