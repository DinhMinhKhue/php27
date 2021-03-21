<?php 
session_start();
$products = $_SESSION['cart'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Giỏ Hàng</title>

</head>
<body>

	<div class="container-">
		<h4>
			Giỏ Hàng!
		</h4>
		<a href="index.php" class="btn btn-primary">Quay lại trang chủ</a>
		<table cellpadding="15px" cellspacing="1px" border="1px"  width="55%" hight= auto;>
			<thead>
				<tr align="center" class="gt">
					<td>ID</td>
					<td>Tên Sản Phẩm</td>
					<td>Số lượng</td>
					<td>Đơn Giá</td>
					<td>Thành tiền</td>
					<td>Hành Động</td>
				</tr>
			</thead>

			<tbody>
				<?php 
				$sum = 0;
				foreach ($products as $product) {
					$sum += $product[3]*$product[2];

					?>
					<tr>
						<td><?=$product[0] ?></td>
						<td><?=$product[1] ?></td>
						<td>
							<a class="btn btn-warning" href="remove.php?masp=<?=$product[0]?>&type=0 "> - </a>
							<?=$product[2] ?>
							<a class="btn btn-primary" href="add2cart.php?masp=<?=$product[0] ?>"> + </a>	
						</td>
						<td><?=$product[3] ?></td>
						<td><?=$product[3]*$product[2] ?></td>
						<td>
							<a class="btn btn-primary" href="remove.php?masp=<?=$product[0] ?>&type=1">Xóa</a>
						</td>

					</tr>
					<?php 
				}
				?>

				<tr>
					<th scope="row" colspan="4">Tổng tiền</th>
					<th colspan="2"><?=$sum ?></th>

				</tr>
			</tbody>


		</table>
	</div>
	
	
</body>
</html>