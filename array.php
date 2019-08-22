<?php
     // array numeric
     $b = 'encep';
     $a = [1,2,4,'Hai',100,300,500,80,'enjang',900,$b];
    
     for ($i=0; $i < count($a); $i++) { 
     echo 'Index array ke-' . $i .' Dengan data ' . $a[$i] . '<br>';
     }

     // array asosiatif
    $g = ['nama' => 'enjang' , 'umur' => 18 , 'alamat' => 'sayati'];
    foreach ($g as $index => $value) {
        echo $index . " : $value <br>";
    }

?>