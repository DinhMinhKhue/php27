<?php 
	if (isset($_POST['luu'])) {
		$maSV = $_POST['masv'];
		$tenSV = $_POST['hoten'];
		$email = $_POST['email'];
		$soDienThoai = $_POST['sodienthoai'];
		$diaChi = $_POST['diachi'];
		$gioiTinh = $_POST['gioitinh'];
	}
 ?>

<div>
	<h1>Thông tin</h1>
	<div>Mã sinh viên: <?php echo "$maSV"; ?></div>
	<div>Tên sinh viên: <?php echo "$tenSV"; ?></div>
	<div>Email: <?php echo "$email"; ?></div>
	<div>Số điện thoại: <?php echo "$soDienThoai"; ?></div>
	<div>Địa chỉ: <?php echo "$diaChi"; ?></div>
	<div>Giới tính: <?php echo "$gioiTinh"; ?></div>
</div>