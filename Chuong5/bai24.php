<!DOCTYPE html>
<html>
<head><title>Câu 24</title></head>
<body>
    <h3>Upload nhiều File</h3>
    <form method="POST" action="" enctype="multipart/form-data">
        Chọn nhiều file: <input type="file" name="files_upload[]" multiple required><br><br>
        <button type="submit" name="submit24">Tải tất cả lên</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit24'])) {
        $mang_files = $_FILES['files_upload'];
        $so_luong = count($mang_files['name']);
        
        $thu_muc = "BoSuuTap/";
        if (!is_dir($thu_muc)) {
            mkdir($thu_muc, 0777, true);
        }

        echo "<b>Kết quả upload:</b><br>";
        for ($i = 0; $i < $so_luong; $i++) {
            $ten_file = basename($mang_files['name'][$i]);
            $tam = $mang_files['tmp_name'][$i];
            
            if ($ten_file != "") {
                if (move_uploaded_file($tam, $thu_muc . $ten_file)) {
                    echo "- File $ten_file: Thành công!<br>";
                } else {
                    echo "- File $ten_file: Thất bại!<br>";
                }
            }
        }
    }
    ?>
</body>
</html>