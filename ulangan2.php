<?php

    echo "Nama  : Ajrin Novianda Ramadhan <br>";
    echo "Kelas : XI RPL 1 <br><br>";

    $indo = -10;
    $mtk = 0;
    if (($indo > 100) or ($mtk > 100)) {
        echo "Nilai yang anda masukan tidak sesuai";
    }elseif (($indo < 0) or ($mtk < 0)) {
        echo "Nilai yang anda masukan tidak sesuai";
    }else {
        $rata =($indo+$mtk)/2;
    
    

    

    if ($rata > 100) {
        echo "Nilai yang anda masukan tidak sesuai";
    }elseif ($rata < 0) {
        echo "Nilai yang anda masukan tidak sesuai";
    }
    elseif($rata >= 85){
        echo "Nilai B.Indonesia : $indo  <br>";
        echo "Nilai Matematika : $mtk  <br>";
        echo "Nilai Rata - Rata : $rata  <br>";
        echo "Keterangan : Lulus <br>";
        echo "Grade A dengan nilai rata rata > $rata  <br>";
    }elseif($rata >= 75){
        echo "Nilai B.Indonesia : $indo  <br>";
        echo "Nilai Matematika : $mtk  <br>";
        echo "Nilai Rata - Rata : $rata  <br>";
        echo "Keterangan : Lulus <br>";
        echo "Grade B dengan nilai rata rata > $rata  <br>";
    }elseif($rata >= 60){
        echo "Nilai B.Indonesia : $indo  <br>";
        echo "Nilai Matematika : $mtk  <br>";
        echo "Nilai Rata - Rata : $rata  <br>";
        echo "Keterangan : Tidak Lulus  <br>";
        echo "Grade C nilai rata rata > $rata  <br>";
    }elseif($rata < 60){
        echo "Nilai B.Indonesia : $indo  <br>";
        echo "Nilai Matematika : $mtk  <br>";
        echo "Nilai Rata - Rata : $rata  <br>";
        echo "Keterangan : Tidak Lulus  <br>";
        echo "Grade D nilai rata rata < $rata  <br>";
    }

}

?>