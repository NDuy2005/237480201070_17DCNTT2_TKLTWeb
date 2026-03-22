<!DOCTYPE html>
<html>
<head>
    <title>Câu 20</title>
    <style>
        .login-box { border: 2px solid grey; width: 350px; padding: 20px; font-family: Arial; }
        .header { background-color: grey; color: white; padding: 10px; text-align: center; margin-bottom: 15px; }
        .input-group { margin-bottom: 10px; }
        .input-group input { padding: 5px; width: 60%; }
        .input-group label { display: inline-block; width: 30%; }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="header">Đăng nhập thành viên</div>
        <form method="POST" action="">
            <div class="input-group">
                <label>Email name</label>
                <input type="text" name="email"> @blu.edu.vn
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label>Mã số</label>
                <input type="text" name="maso">
            </div>
            <div style="text-align: center; margin-top: 15px;">
                <button type="submit" name="btn_login" style="width:100%; padding:8px; margin-bottom:5px; background: #333; color: white;">Đăng nhập</button>
                <button type="button" style="width:100%; padding:8px; background: #333; color: white;">Đăng ký</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['btn_login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $maso = $_POST['maso'];

        if ($email != "" && $pass != "") {
            // Thiết lập Cookie sống trong 3 phút (180 giây)
            setcookie('UserEmail', $email, time() + 180);
            echo "<p style='color:green;'>Đăng nhập thành công! Cookie đã lưu 3 phút.</p>";
        } else {
            echo "<p style='color:red;'>Vui lòng nhập đủ thông tin!</p>";
        }
    }
    ?>
</body>
</html>