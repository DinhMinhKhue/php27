<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hw01</title>

</head>
<style>
	label{
		width: 100%;
		height: 50px;

	}
	.inp{
		height: 30px;
		width: 80%;
	}
	.butt{
		padding: 10px;
		border-radius: 10px;
		margin-top: 20px;
		text-align: center;
		background: blue;
		color: white;
	}

</style>
<body>
	<form action="hienthihw01.php" method="POST">
		<div class="form-group">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<label for="exampleInputEmail1">Mã SV</label>
					</div>
					<div class="col-8">
						<input class="inp" name="masv" type="text" placeholder="Mã Sinh Viên...">
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<label for="exampleInputHoTen">Họ và Tên</label>
					</div>
					<div class="col-8">
						<input class="inp" name="hoten" type="text" placeholder="Họ Tên..."> 
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<label for="exampleInputEmail">Email</label>
					</div>
					<div class="col-8">
						<input class="inp" name="email" type="email" placeholder="Email...">  
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<label for="exampleInputSdt">Số Điện Thoại</label>
					</div>
					<div class="col-8">
						<input class="inp" name="sodienthoai" type="text" placeholder="Số điện thoại">  
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<label for="exampleInputDiaChi">Địa Chỉ</label>
					</div>
					<div class="col-8">
						<input class="inp" name="diachi" type="text" placeholder="Địa Chỉ...">  
					</div>
				</div>
			</div>

			<div>
				<div class="row">
					<div class="col-4">
						<label for="exampleInputDiaChi">Giới Tính</label>
					</div>
					<div class="col-8">
						<div class="form-check">
							<input type="radio" name="gioitinh" id="exampleRadios1" value="Nam" checked>
							<label class="form-check-label" for="exampleRadios1">
								Nam
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gioitinh" value="Nữ">
							<label class="form-check-label" for="exampleRadios2">
								Nữ
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="gioitinh" value="Khác" checked>
							<label class="form-check-label" for="exampleRadios1">
								Khác
							</label>
						</div>
					</div>
				</div>



				<button type="submit" class="btn btn-primary butt" name="luu">Lưu Thông Tin</button>



			</div>

		</form>
	</body>
	</html>
