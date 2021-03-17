<?php 
session_start();

echo "<pre>";
	print_r($_SESSION);
echo "</pre>";

$_SESSION['php27'] = 'zent';


unset($_SESSION['php27']);
session_destroy();

echo "<pre>";
	print_r($_SESSION);
echo "</pre>";
 
 ?>