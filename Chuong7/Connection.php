<?php
   //Kết nối cơ sở dữ liệu
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    // Tạo kết nối
    $con = mysqli_connect($servername, $username, $password, $database);
    //Kiểm tra kết nối
    if (!$con) {
        die ("Connection failed: ".mysqli_connect_error());
    }

    echo "Connected successfully";
    //mysqli_close($con);
   //Thực hiện câu lệnh SELECT
   
?>
