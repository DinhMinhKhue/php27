<?php 

echo "<pre>";
	print_r($_GET);
echo "</pre>";

// http://php27.zent/unit03/index01.php?class_name=php27&time=2021-03-15

$lang = $_GET['lang'];
if($lang=='vi'){
	echo "<br> Website Tiếng Việt";
}else if($lang=='kr'){
	echo "<br> Website Tiếng Hàn";
}else{

}
?>