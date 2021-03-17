<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hw03</title>
</head>

<style type="text/css">
	.text{
		font-weight: bold;
		font-size: 20px;
		text-align:center;
	}
</style>
<body>
	<form action="sanphamhw03.php" method="POST" role="form">
		<table align="center" cellpadding="10px" cellspacing="1px" border="1px"   hight="200px">
			<tr align="center" class="text">
				<font>
					<td colspan="6"></td>
					<td colspan="1"><a href="sanphamhw03.php">Tiếp tục mua hàng</a></td>
				</font>
			</tr>
			<tr class="text">
				<td colspan="7">Thông tin giỏ hàng(Hiện có    sản phẩm trong giỏ)</td>
			</tr>
			<tr class="text">
				<td name="masp">ID</td>
				<td name="tensp">Tên sản phẩm</td>
				<td>Số lượng</td>
				<td name="dongia">Đơn giá</td>
				<td>Thành tiền</td>
				<td>Thời gian cập nhật</td>
				<td></td>
			</tr>
			<tr>
				<td>SP1</td>
				<td>Iphone 4 32GB</td>
				<td>1</td>
				<td>5,000,000</td>
				<td>5,000,000</td>
				<td>5,000,000</td>
				<td><a href="">Xóa khỏi giỏ hàng</a></td>
			</tr>

			<tr>
				<td class="text" colspan="4">Tổng tiền:</td>
				<td></td>
				<td colspan="2"></td>
			</tr>
		</table>
	</form>
</body>
</html>