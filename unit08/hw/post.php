<?php 
class posts{
	//Thuộc tính
	var $tieuDe;
	var $duongDan;
	var $moTa;
	var $noiDung;

	//Phương thức

	function inRaThongTinBaiViet(){
		echo "<br> Thông Tin Bài Viết Đã Được In!!!";
	}
}

	//Khởi tạo đối tượng từ lớp (Đúc sản phẩm từ khuôn)

	$post = new posts();

	$post->tieuDe = 'Đinh Minh Khuê';
	$post->duongDan = 'zent.edu.vn';
	$post->moTa = 'Khóa học php 27';
	$post->noiDung = 'Bài tập unit 08';

	//In thông tin

	echo "<br> Bảng posts";
	echo "<br> Tiêu Đề : " .$post->tieuDe;
	echo "<br> Đường Dẫn : " .$post->duongDan;
	echo "<br> Mô Tả : " .$post->moTa;
	echo "<br> Nội Dung : " .$post->noiDung;

	//Gọi phương thức

	$post->inRaThongTinBaiViet();
 ?>