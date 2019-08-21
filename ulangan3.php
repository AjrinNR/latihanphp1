<?php

    for ($i=1; $i <=10 ; $i++) {
        echo"<br>"; 
        echo"Hitung Perkalian ". $i ."<br> ----------------------------------------------------------------------------------------------------------- <br>";
        for ($a=1; $a <=10 ; $a++) {
            $g = $i*$a;
            echo"$i * $a => ".$g; 
                if ($g % 2 == 0) {
                    echo " Bilangan genap <br>";
            }   else{
                    echo" Bilangan ganjil<br>";
            }
           
        }
    }


?>