<?php 
 session_start();

 	date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (isset($_GET['maSP'])) {
    $soLuong = $_SESSION["sanpham"][$_GET['maSP']]['soLuong'] + 1;
    $thanhTien = $soLuong * $_GET['donGia'];
    $_SESSION["sanpham"][$_GET['maSP']] = array
    (
    	'maSP' => $_GET['maSP'],
    	'tenSP' => $_GET['tenSP'],
    	'donGia' => $_GET['donGia'],
    	'thoiGian' => date('d/m/Y - H:i:s'),
    	'soLuong' => $soLuong,
    	'thanhTien' => $thanhTien
    );
    // session_destroy();
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	header("Location: giohang.php");
    } else{
    	header("Location: giohang.php");
    }


   	
 ?>