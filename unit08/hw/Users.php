<?php 
class users{
	//Thuộc tính
	var $ten;
	var $email;
	var $matKhau;
	var $anhDaiDien;

	//Phương thức

	function inRaThongTinNguoiDung(){
		echo "<br> Thông Tin Người Dùng Đã Được In!!!";
	}
}

	//Khởi tạo đối tượng từ lớp (Đúc sản phẩm từ khuôn)

	$user = new users();

	$user->ten = 'Đinh Minh Khuê';
	$user->email = 'minhkhue@gmail.com';
	$user->matKhau = '123456';
	$user->anhDaiDien = 'Đinh Minh Khuê';
	//In thông tin

	echo "<br> Bảng users";
	echo "<br> Tên : " .$user->ten;
	echo "<br> Email : " .$user->email;
	echo "<br> Mật Khẩu : " .$user->matKhau;
	echo "<br> Ảnh Đại Diện : " .$user->anhDaiDien;

	//Gọi phương thức

	$user->inRaThongTinNguoiDung();
 ?>