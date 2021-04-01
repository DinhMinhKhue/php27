<?php 
	

	require_once('connection.php');

	// Câu lệnh truy vấn
$query = "INSERT INTO users(name,email) VALUES ('".$_POST['name']."','".$_POST['email']."')";

// Thực thi câu lệnh
$result = $conn->query($query);

if($result == true){
	setcookie('cate_add_msg','Thêm mới thành công',time()+5);
	header('Location: users.php');
}else{
	setcookie('cate_add_msg','Thêm mới không thành công',time()+5);
	header('Location: users.php');
}

 ?>