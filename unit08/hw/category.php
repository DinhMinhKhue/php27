<?php 
class category{
	//Thuộc tính
	var $ten;
	var $duongDan;
	var $danhMucCha;
	var $anhHienThi;
	var $moTa;

	//Phương thức

	function inRaThongTinDanhMuc(){
		echo "<br> Thông Tin Danh Mục Đã Được In!!!";
	}
}

	//Khởi tạo đối tượng từ lớp (Đúc sản phẩm từ khuôn)

	$cate = new category();

	$cate->ten = 'Đinh Minh Khuê';
	$cate->duongDan = 'zent.edu.vn';
	$cate->danhMucCha = 'Khóa học php 27';
	$cate->anhHienThi = 'Đinh Minh Khuê';
	$cate->moTa = 'Bài tập unit 08';
	//In thông tin

	echo "<br> Bảng category";
	echo "<br> Tên : " .$cate->ten;
	echo "<br> Đường Dẫn : " .$cate->duongDan;
	echo "<br> Danh Mục Cha : " .$cate->danhMucCha;
	echo "<br> Ảnh Hiện Thị : " .$cate->anhHienThi;
	echo "<br> Mô Tả : " .$cate->moTa;

	//Gọi phương thức

	$cate->inRaThongTinDanhMuc();
 ?>