<?php
    if (isset($_POST['Pilih'])) {
        $film = $_POST['movie'];
        echo "Film Favorit Anda adalah :
        <font color=blue><b>$film</b></font>";
}
?>