<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo"<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
        echo"<h2>Ini Halaman 2</h2>";
        
        
    } 
?>
