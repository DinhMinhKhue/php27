<?php 
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh Sách Sản Phẩm</title>
</head>

<style type="text/css">
	.gt{
		font-size: 25px;
	}
	
</style>
<body>
	
	<table cellpadding="15px" cellspacing="1px" border="1px"  width="45%" hight= auto;>
		<tr align="center" class="gt">
			<font>
				<td colspan="3">Danh Sách Sản Phẩm</td>
				<td colspan="2"><a href="giohang.php">Xem Giỏ Hàng</a></td>
			</font>
		</tr>
		<tr align="center" class="gt">
			<td>ID</td>
			<td>Tên Sản Phẩm</td>
			<td>Đơn Giá</td>
			<td>Hành Động</td>
		</tr>
		<form action="addhw.php" method="POST">
		<tr>
			<td>SP1</td>
			<td>Iphone 4 32GB</td>
			<td>10000</td>
			<td ><a href="addhw.php?maSP=SP1&tenSP=Iphone&donGia=10000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td>SP2</td>
			<td>Laptop</td>
			<td>15000</td>
			<td ><a href="addhw.php?maSP=SP2&tenSP=Laptop&donGia=15000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td>SP3</td>
			<td>iphone 12</td>
			<td>30000</td>
			<td ><a href="addhw.php?maSP=SP3&tenSP=iphone 12&donGia=30000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td>SP4</td>
			<td>iphone 5</td>
			<td>10000</td>
			<td ><a href="addhw.php?maSP=SP4&tenSP=iphone 5&donGia=10000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td>SP5</td>
			<td>iphone 6</td>
			<td>12000</td>
			<td ><a href="addhw.php?maSP=SP5&tenSP=iphone 6&donGia=12000" name="add">Add to cart</a></td>
		</tr>
		</form>
	</table>
</body>
</html>