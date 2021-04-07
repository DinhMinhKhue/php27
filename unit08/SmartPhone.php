<?php 
class SmartPhone{
	//Thuộc tính
	var $hangSX;
	var $tenDT;
	var $mauSac;
	var $manHinh;

	//Phương thức

	function themVaoGioHang(){
		echo "<br> Sản phẩm đã được thêm vào giỏ hàng";
	}
}

	//Khởi tạo đối tượng từ lớp (Đúc sản phẩm từ khuôn)

	$ip12promax = new SmartPhone();

	$ip12promax->hangSX = 'Apple';
	$ip12promax->tenDT = 'Iphone 12 promax';
	$ip12promax->mauSac = 'Trắng';
	$ip12promax->manHinh = '8 inch';

	//In thông tin

	echo "<br> Thông tin điện thoại";
	echo "<br> Hãng sản xuất : " .$ip12promax->hangSX;
	echo "<br> tên điện thoại : " .$ip12promax->tenDT;
	echo "<br> Màu sắc : " .$ip12promax->mauSac;
	echo "<br> Màn hình : " .$ip12promax->manHinh;

	//Gọi phương thức

	$ip12promax->themVaoGioHang();
 ?>