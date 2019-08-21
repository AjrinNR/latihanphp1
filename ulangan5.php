<?php

    $a = array (
        array("volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
    
        $num = 0;
         foreach ($a as $index) {
        $num++;
        echo "<br>Data Mobil : $num <br>";
        foreach ($index as $key => $value) {
            echo "- $value<br>";
        }
    }


?>