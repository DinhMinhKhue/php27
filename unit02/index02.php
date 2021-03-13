<?php 
$infos = array('Khuê','Nữ',21,'Hà Nội');
echo "<br> Tên :" .$infos[0];
$infos_name = array();
$infos_name['name'] = 'Khuê';

foreach ($infos as $key => $value) {
	echo "<br>Key:".$key."-value:".$value;
}

foreach ($infos_name as $giatri) {
	echo "<br>Giá trị:".$giatri;
}
 ?>
