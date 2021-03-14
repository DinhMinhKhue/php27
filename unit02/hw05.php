<?php 

$ho_ten='Đinh Minh Khuê';
echo "Họ và tên :".$ho_ten;
$mang_ho_ten=explode(" ",$ho_ten);
$so_phan_tu=count($mang_ho_ten);
$ho=$mang_ho_ten[0];
$ten=$mang_ho_ten[$so_phan_tu-1];
$ten_dem="";
for ($i=1;$i<$so_phan_tu-1;$i++) { 
	$ten_dem=$ten_dem.$mang_ho_ten[$i]." ";
}
echo "<br>Họ :".$ho;
echo "<br>Tên đệm :".$ten_dem;
echo "<br>Tên :".$ten;

?>