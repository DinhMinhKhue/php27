<?php 
	class ConNguoi{

		var $hoTen;
		var $ngaySinh;
		var $queQuan;

		function an(){
			echo "<br> Con người ăn thịt";
		}
	}
	class HocSinh extends ConNguoi{
		var $truong;
		var $lop;
	}
	class SinhVien extends ConNguoi{
		var $maSV;
		var $chuyenNganh;
	}

	$sv1 = new SinhVien();

	$sv1->hoTen = 'Đinh Minh Khuê';

	echo "<br> Họ tên:" .$sv1->hoTen;

 ?>