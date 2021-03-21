<?php 
require('data.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Danh Sách Sản Phẩm</title>
</head>

<style type="text/css">
	.gt{
		font-size: 25px;
	}
	
</style>
<body>
	
	<table cellpadding="15px" cellspacing="1px" border="1px"  width="55%" hight= auto;>
		<div class="container-fluid">
			<h4>
				Danh sách sản phẩm
			</h4>
			<a href="cart.php" class="btn btn-primary">Xem giỏ hàng</a>
			<thead>
				<tr align="center" class="gt">
					<td>ID</td>
					<td>Tên Sản Phẩm</td>
					<td>Số lượng</td>
					<td>Đơn Giá</td>
					<td>Hành Động</td>
					<td>ảnh</td>
				</tr>
			</thead>

			<tbody>
				<?php 
				foreach ($products as $product) {
					

					?>
					<tr>
						<td><?=$product[0] ?></td>
						<td><?=$product[1] ?></td>
						<td><?=$product[2] ?></td>
						<td><?=$product[3] ?></td>
						<td>
							<a class="btn btn-primary" href="add2cart.php?masp=<?=$product[0] ?>">Thêm vào giỏ</a>

						</td>
						<td><img src="img/<?=$product[4]?>" alt="" style="width: 80px;"></td>

					</tr>
					<?php 
				}
				?>

			</tbody>


		</table>
	</div>

</body>
</html>