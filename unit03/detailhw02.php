<?php
    session_start();
    if (isset($_GET['masv'])) {
        $msv=$_GET['masv'];
    }

    if (isset($_SESSION['info'])) {
        $info_arr=$_SESSION['info'][$masv];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>detailhw02</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <h2 style="text-align: center;">THÔNG TIN SINH VIÊN</h2>
        
        <ul>
            <li>
                <span>Mã Sinh Viên: </span>
                <?php 
                echo $info_arr['msv']; 

                ?>
            </li>
            <li>
                <span>Họ Tên: </span>
                <?php 
                echo $info_arr['hoTen']; 

                ?>
            </li>
            <li>
                <span>Số Điện Thoại: </span>
                <?php 
                echo $info_arr['sdt']; 

                ?>
            </li>
            <li>
                <span>Email: </span>
                <?php 
                echo $info_arr['email'];

                ?>
            </li>
            <li>
                <span>Giới Tính: </span>
                <?php 
                echo $info_arr['gioiTinh']; 

                ?>
            </li>
            <li>
                <span>Địa Chỉ: </span>
                <?php 
                echo $info_arr['diaChi']; 

                ?>
            </li>
        </ul> 

    </div>
</body>
</html>