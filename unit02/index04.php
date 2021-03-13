<?php 
	$numb1 = 10;
	ktchan_le($numb1);
	$numb2 = 20;
	ktchan_le($numb2);
	$numb3 = 15;
	ktchan_le($numb3);

	function ktchan_le($number){
		if($number%2==0){
			echo "<br>Số chẵn";

		}else{
			echo "<br>Số lẻ";
		}
		return 1;
	}

	function tinhtong($input){
		$sum = 0;
		foreach ($input as $val){
			$sum += $val;
		}
		return $sum;
	}
	$arr = array(1,2,3,4,5);
	echo "<br> Tổng:" . tinhtong($arr);
 ?>