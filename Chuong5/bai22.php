<!DOCTYPE html>
<html>
<head><title>Câu 22</title></head>
<body>
    <h3>Đăng nhập Khách hàng</h3>
    <form method="POST" action="">
        Tên khách hàng: <input type="text" name="ten_kh" required><br><br>
        Số điện thoại: <input type="text" name="so_dt" required><br><br>
        <button type="submit" name="submit22">Đăng nhập</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit22'])) {
        $ten = $_POST['ten_kh'];
        $sdt = $_POST['so_dt'];
        
        // Lưu Cookie 10 phút (600 giây)
        setcookie('TenKhachHang', $ten, time() + 600);
        setcookie('SoDienThoai', $sdt, time() + 600);
        
        echo "<b>Đã lưu thông tin vào Cookie thành công!</b><br>";
        echo "Giá trị hiện tại lấy từ form (F5 để test lấy từ Cookie):<br>";
        echo "- Tên: " . $ten . "<br>";
        echo "- SĐT: " . $sdt . "<br>";
    } 
    // Nếu truy cập lại trang mà Cookie đã tồn tại
    elseif (isset($_COOKIE['TenKhachHang'])) {
        echo "<b>Thông tin đọc từ Cookie:</b><br>";
        echo "- Tên: " . $_COOKIE['TenKhachHang'] . "<br>";
        echo "- SĐT: " . $_COOKIE['SoDienThoai'] . "<br>";
    }
    ?>
</body>
</html>