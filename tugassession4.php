<?php

session_start();
    if (isset($_SESSION['login'])) {
        echo"<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
        echo"<h2>Selamat anda bisa mengakses semua halaman</h2>";
        echo "<h2>Ini halaman 3</h2>";

        
    } 
?>