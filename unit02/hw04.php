<?php 

$name ="vũ văN thươNg";
$data = explode(" ", $name);

echo "<pre>";
print_r($data);
echo "</pre>";
$name = implode(" ", $data);

echo $name;
$name = strtolower($name);
$name= trim($name);
$name = ucwords($name);
echo("<br> Tên sau khi định dạng :" .ucwords($name) . ".");

?>