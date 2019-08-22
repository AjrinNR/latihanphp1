<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

            if ($email == "ajrinnr11@gmail.com" && $pass =="123") {
                echo "Nama : ". $nama. "<br>";
                echo "Alamat : ". $alamat. "<br>";
                echo "Jenis Kelamin : ".$jk. "<br>";
                echo "Agama : ".$agama. "<br>";
                echo "Email : ".$email. "<br>";
                echo "Password : Aktif";
            }else{
                echo "Nama : ". $nama. "<br>";
                echo "Alamat : ". $alamat. "<br>";
                echo "Jenis Kelamin : ".$jk. "<br>";
                echo "Agama : ".$agama. "<br>";
                echo "Email : ".$email. "<br>";
                echo "Password : Tidak Aktif";
            }
        
    }
?>