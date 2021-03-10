<?php 
$n = 18;
$a = 2;
$s = 0;
for ($i=1; $i <= $n; $i++) { 
	$a *= $i;
	$s += $i / $a;
}  
echo "Tổng S = $s"; 

?>