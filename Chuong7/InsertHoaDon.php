<?php
require 'Connection.php';

// Lấy dữ liệu từ form
$mahd = $_POST['txtMaHD'];
$makh = $_POST['txtMaKH'];
$mahang = $_POST['txtMaHang'];
$soluong = $_POST['txtSoLuong'];
$thanhtien = $_POST['txtThanhTien'];

// Viết câu lệnh SQL file CSDL của bạn
$sql = "INSERT INTO HOADON (mahd, makh, mahang, soluong, thanhtien) 
        VALUES ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

// Thực thi và kiểm tra
if (mysqli_query($con, $sql)) {
    echo "<h3 style='color: green;'>Thêm hóa đơn thành công!</h3>";
    echo "<a href='InsertHoaDon.html'>Quay lại</a>";
} else {
    echo "<h3 style='color: red;'>Lỗi thêm hóa đơn!</h3>";
    echo "Chi tiết: " . mysqli_error($con);
}

mysqli_close($con);
?>