<?php
    if (isset ($_POST['submit'])) {
        $bin = $_POST['bintang'];

        for( $a=0;$a<$bin;$a++){
            for($i=$bin; $i>$a; $i--){
                echo "&nbsp";
        }for ($j=0; $j <= $i; $j++) { 
            echo "*";
        }
        echo"<br>";
    }
    echo "Jumlah Bintang = $bin";
}

?>