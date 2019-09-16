<?php
if (isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo"<h2>Klik <a href='tugassession1.php'></a>LogOut</h2>";
    }?>