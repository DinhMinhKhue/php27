<?php 
echo "<br>".$_COOKIE['class'];

setcookie('class','PHP27', time() +10);

echo "<br>".$_COOKIE['class'];

 ?>