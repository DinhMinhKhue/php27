<?php 
$infos = array();
$infos[0] = "Khuê";
$infos[1] = "0971401681";
$infos[2] = 10;
$infos[3] = array();
$infos[3][0] = array("Giá trị 10");
$infos[3][1] = array("Đinh Minh Khuê");

echo"<pre>";
print_r($infos);
echo"</pre>";
echo "<br> mảng 3 chiều: ".$infos[3][1][0];
 ?>
