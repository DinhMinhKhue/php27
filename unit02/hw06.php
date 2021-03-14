<?php

echo "Kiểm Tra Chuỗi Palindrome:";
function Palindrome($chuoi){
	if ($chuoi==strrev($chuoi)){
		echo "<br>+$chuoi-là chuỗi Palindrome.";

	}else{
		echo "<br>+$chuoi-không phải là chuỗi Palindrome.";
	}

  }
  $chuoi_1 = "bogia";
  Palindrome($chuoi_1);

  $chuoi_2 = "ZenttneZ";
  Palindrome($chuoi_2);
  ?>
