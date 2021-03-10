<?php 
for ($i = 8; $i >= 0; $i--) {
    for ($j = 0; $j <= 8; $j++) {
        if ($i >= $j) {
            echo " &ensp;";
        } else {
            echo " # ";
        }
    }
    echo "<br>";
    echo "<br>";
}

?>