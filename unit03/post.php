<?php 

$user = '';
$pwd = '';
if(isset(($_POST['user']))){
	$user = $_POST['user'];
}
if(isset(($_POST['pwd']))){
	$pwd = $_POST['pwd'];
}
if($user == 'admin' && $pwd == '180219'){
	echo "<br> Đăng nhập thành công";
}else{
	echo "<br> Đăng nhập thất bại";
}

 ?>
