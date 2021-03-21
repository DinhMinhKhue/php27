<?php 
session_start();
		$type = $_GET['type'];
		$masp = $_GET['masp'];
		if($_SESSION['cart'][$masp][2] > 1 && $type == 0){
			$_SESSION['cart'][$masp][2]--;
		}else{
			unset($_SESSION['cart'][$masp]);
		}

		
		header("Location: cart.php");
	
 ?>