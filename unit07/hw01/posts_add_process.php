<?php 
	

	require_once('connection.php');

	// Câu lệnh truy vấn
$query = "INSERT INTO posts(title,description) VALUES ('".$_POST['title']."','".$_POST['description']."')";

// Thực thi câu lệnh
$result = $conn->query($query);

if($result == true){
	setcookie('post_add_msg','Thêm mới thành công',time()+5);
	header('Location: posts.php');
}else{
	setcookie('post_add_msg','Thêm mới KHÔNG thành công',time()+5);
	header('Location: posts.php');
}

 ?>
