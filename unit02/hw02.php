<?php 
$arr = array(1,4,2,6,9,100,4,);
$reversed = array_reverse($arr);
$preserved = array_reverse($arr, true);
 
echo "<pre>";
    print_r($arr);
echo "</pre>";
 
echo "<pre>";
    print_r($reversed);
echo "</pre>";
 
echo "<pre>";
    print_r($preserved);
echo "</pre>";    
 ?>