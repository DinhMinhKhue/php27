<?php 
session_start();
if(isset($_POST['luu'])){
	$target_dir = "doc/";
	$target_file = $target_dir . basename($_FILES["anh"]["name"]);
	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["anh"]["name"]);
		$doc_info = array(
			'name' => $_POST['tentl'],
			'file_name' => basename( $_FILES["anh"]["name"])
		)
		;
		$_SESSION['subjects'][] = $doc_info;


            header('Location: index.php');
	}else{
		echo "Không thể tải file.";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>upload</title>

</head>
<style>
	.inp{
		height: 35px;
		width: 100%;
	}
	.butt{
		
		margin-top: 20px;
	}
</style>
<body>
	<h4 style="text-align: center;">---Upload document---</h4>
	<a style="margin-left: 30px;" href="index.php" class="btn btn-primary">Quay lại trang chủ</a>
	<div class="container">
		<form action="" method="POST" enctype="multipart/form-data">
			<label for="exampleInput">Tên tài liệu</label>
			<input class="inp" name="tentl" type="text" placeholder="Tên tài liệu...">
			<label for="exampleInputHoTen">Images</label>
			<input type="file" class="form-control" placeholder="" name="anh">
			<button type="submit" class="btn btn-primary butt" name="luu">Upload</button>
		</form>
	</div>
</body>
</html>