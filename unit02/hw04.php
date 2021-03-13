<?php 

$name ="vŨ văN thƯoNg";
$data = explode(" ", $name);

echo "<pre>";
print_r($data);
echo "</pre>";
$name = implode(" ", $data);

echo $name;
?>