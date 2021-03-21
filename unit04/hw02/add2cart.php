<?php 
	require('data.php');
	session_start();

	$masp = $_GET['masp'];

	if(isset($_SESSION['cart'][$masp])){
		$_SESSION['cart'][$masp][2]++;
	}else{
		$product = $products[$masp];

		$product[2] = 1;

		$_SESSION['cart'][$masp] = $product;
	}


	header("Location: cart.php");
 ?>