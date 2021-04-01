<?php 
	

	require_once('connection.php');

	// Câu lệnh truy vấn
$query = "INSERT INTO categories(name,description) VALUES ('".$_POST['name']."','".$_POST['description']."')";

// Thực thi câu lệnh
$result = $conn->query($query);

if($result == true){
	setcookie('cate_add_msg','Thêm mới thành công',time()+5);
	header('Location: categories.php');
}else{
	setcookie('cate_add_msg','Thêm mới không thành công',time()+5);
	header('Location: categories.php');
}

 ?>
