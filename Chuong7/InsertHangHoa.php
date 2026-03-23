<?php
// Bật hiển thị mọi lỗi (nếu có) để không bị ẩn màn hình trắng
error_reporting(E_ALL); 
ini_set('display_errors', 1);

echo "<h3>Đang chạy vào file xử lý PHP...</h3>"; 

// 1. Gọi file kết nối CSDL
require 'Connection.php';

// 2. Lấy dữ liệu
$mahang = $_POST['txtMahang'];
$tenhang = $_POST['txtTenhang'];
$mansx = $_POST['txtMansx'];
$namsx = $_POST['txtNamsx'];
$gia = $_POST['txtGia'];

// 3. Viết câu lệnh SQL
$sql = "INSERT INTO HANGHOA (mahang, tenhang, mansx, namsx, gia) 
        VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

echo "<p>Câu lệnh SQL đang chuẩn bị chạy là: <b>$sql</b></p>";

// 4. Thực thi và kiểm tra
if (mysqli_query($con, $sql)) {
    echo "<h2 style='color: green;'> Đã thêm hàng hóa thành công!</h2>";
    echo "<a href='InsertHanghoa.html'>Quay lại nhập dữ liệu</a>";
} else {
    echo "<h2 style='color: red;'> Lỗi không thêm được!</h2>";
    echo "Chi tiết lỗi từ MySQL: " . mysqli_error($con);
}

// 5. Đóng kết nối
mysqli_close($con);
?>