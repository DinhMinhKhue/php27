<?php 

session_start();
if (isset($_POST['luu'])) {
	$_SESSION['sinhvien'][$_POST['masv']] = array(
		'masv' => $_POST['masv'],
		'hoten' => $_POST['hoten'],
		'email' => $_POST['email'],
		'sodienthoai' => $_POST['sodienthoai'],
		'diachi' => $_POST['diachi'],
		'gioitinh' => $_POST['gioitinh']
	);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hw02</title>
</head>
<style>
	.butt{
		margin-left: 20%; 
		padding: 10px;
		border-radius: 20px;
		background: blue;
		color: white;
	}
	h2{
		margin-left: 20%; 
		margin-top:30px;
	}
	.tb{
		margin: 0 auto;
		width: 50%;
	
	}
	.td{
		padding-left: 55px;
	}
	.deltail{
		border: 1px solid green;
		background: green;
		padding: 3%;
		color: white;
	}
	.delete{
		border: 1px solid red;
		background: red;
		padding: 3%;
		color: white;
	}
</style>
<body>
	<h2>Danh Sách Người Dùng!!!</h2>
	<a href="addhw02.php">
		<button type="button" class="butt btn-primary">Thêm Mới</button>
	</a>
	<?php
	if(isset($_COOKIE['msg'])){
		?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong><?php echo $_COOKIE['msg'] ?>
		</div>
	<?php } ?>
	<table class="tb">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Mã Sinh Viên</th>
				<th scope="col">Họ Tên</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=0;
			foreach ($_SESSION['sinhvien'] as $key => $value) {
				$i++;			
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td class="td"><?php echo $_SESSION['sinhvien'][$key]['masv']; ?></td>
					<td class="td"><?php echo $_SESSION['sinhvien'][$key]['hoten']; ?></td>
					<td class="td">
						<a href="deletehw02.php?masv=<?php echo $_SESSION['sinhvien'][$key]['masv'];?>" class="btn-btn-success deltail">Detail</a>
						<a name="delete" href="deletehw02.php?masv=<?php echo $_SESSION['sinhvien'][$key]['masv'];?>" class="btn-btn-success delete">Delete</a>
					</td>
				</tr>
			<?php

			 } 

			 ?>
		</tbody>
	</table>
</body>
</html>