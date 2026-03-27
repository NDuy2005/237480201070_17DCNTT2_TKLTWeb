<?php
session_start();

if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
    $email = $_SESSION['Email'];
    
    
    echo "
    <div style='border: 1px solid black; border-radius: 10px; width: 500px; padding: 20px; margin: 20px auto; font-family: Arial;'>
        <h3 style='margin-top: 0; text-transform: uppercase;'>Trang Chính</h3>
        <p>Người dùng đã đăng nhập với tên <b>&lt;$user&gt;</b> và Email là <b>&lt;$email&gt;</b></p>
        <br>
        <a href='logout.php' style='color: blue; text-decoration: underline;'>Đăng xuất</a>
    </div>
    ";
} else {
    
    echo "<h3>Bạn chưa đăng nhập! Không thể xem trang này.</h3>";
    echo "<a href='21_login.html'>Vui lòng tới trang đăng nhập</a>";
}
?>