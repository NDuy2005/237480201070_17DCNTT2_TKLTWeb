<!DOCTYPE html>
<html>
<head><title>Câu 23</title></head>
<body>
    <h3>Upload 1 File</h3>
    <form method="POST" action="" enctype="multipart/form-data">
        Chọn file để tải lên: <input type="file" name="file_upload" required><br><br>
        <button type="submit" name="submit23">Tải lên</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit23'])) {
        $file = $_FILES['file_upload'];
        $thu_muc = "Tailieu/";
        
        // Tạo thư mục nếu chưa có trên máy
        if (!is_dir($thu_muc)) {
            mkdir($thu_muc, 0777, true);
        }

        $duong_dan = $thu_muc . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $duong_dan)) {
            echo "Đã upload thành công file vào mục <b>" . $thu_muc . "</b>";
        } else {
            echo "Có lỗi xảy ra khi upload!";
        }
    }
    ?>
</body>
</html>