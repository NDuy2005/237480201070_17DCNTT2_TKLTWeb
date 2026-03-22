<?php
// Phải gọi hàm này đầu tiên ở mọi trang có dùng Session
session_start(); 

// Lấy dữ liệu từ form gửi sang
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Kiểm tra xem người dùng có nhập đủ thông tin không
if ($user != "" && $email != "" && $pass != "") {
    
    // Lưu thông tin vào Session
    $_SESSION['Username'] = $user;
    $_SESSION['Email'] = $email;
    
    // In ra giao diện thành công giống trong sách
    echo "
    <div style='border: 1px solid black; border-radius: 10px; width: 350px; padding: 20px; margin: 20px auto; text-align: center; font-family: Arial;'>
        <div style='font-weight: bold; text-transform: uppercase; margin-bottom: 15px;'>Trang Xử Lý Thông Tin Đăng Nhập</div>
        <p>Thông tin đăng nhập hợp lệ</p>
        <a href='mainpage.php'>
            <button style='padding: 5px 15px; background: #555; color: white; cursor: pointer;'>Trang chính</button>
        </a>
    </div>
    ";
    
} else {
    echo "<h3>Lỗi: Vui lòng nhập đầy đủ Username, Email và Password!</h3>";
    echo "<a href='21_login.html'>Quay lại trang đăng nhập</a>";
}
?>