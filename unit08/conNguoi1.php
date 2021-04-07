<?php 
	class ConNguoi1{

		var $hoTen;
		var $ngaySinh;
		var $queQuan;

		function an(){
			echo "<br> Con người ăn thịt";
		}

		function __construct(){
			echo "<br> Con người ăn vặt";
		}
	}

	$cv = new ConNguoi1();

 ?>