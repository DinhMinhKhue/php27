<?php 
	session_start();
	$id = $_GET['id'];

	unset($_SESSION['subjects'][$id]); 
	header("Location: index.php");
 ?>