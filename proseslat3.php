<?php
    if (isset($_POST['submit'])) {
        
        $no = $_POST['nomer'];
        $nis = $_POST['nisn'];
        $nama = $_POST['nama'];
        $alm = $_POST['alamat'];
        $tl = $_POST['tl'];
        $ttl = $_POST['ttl'];
        $asal = $_POST['asal'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
        $na = $_POST['ayah'];
        $pa = $_POST['pa'];
        $ni = $_POST['Ibu'];
        $pi = $_POST['pi'];
        $agama = $_POST['agama'];
        
        
        echo "No Pendaftaran : " . $no . "<br>";
        echo "NISN           : " . $nis . "<br>";
        echo "Nama Siswa     : " . $nama . "<br>";
        echo "Alamat         : " . $alm . "<br>";
        echo "Tempat Lahir   : " . $tl . "<br>";
        echo "Tanggal Lahir  : " .$ttl . "<br>";
        echo "Asal Sekolah   : " . $asal . "<br>";
        echo "Jenis Kelamin  : " . $jk . "<br>";
        echo "Jurusan        : " . $jurusan . "<br>";
        echo "Nama Ayah      : " . $na . "<br>";
        echo "Pekerjaan Ayah : " . $pa . "<br>";
        echo "Nama Ibu       : " . $ni . "<br>";
        echo "Pekerjaan Ibu  : " . $pi . "<br>";
        echo "Agama          : " . $agama . "<br>";
        echo "Hobby          : ";
    }if (isset($_POST['ng'])) {
        echo "- " . $_POST['ng'] . "<br>";
    }if (isset($_POST['nf'])) {
        echo "-     " . $_POST['nf'] . "<br>";
    }if (isset($_POST['tidur'])) {
        echo "- " . $_POST['tidur'] . "<br>";
    }if (isset($_POST['musik'])) {
        echo "- " . $_POST['musik'] . "<br>";
    }

?>echo "Harga Barang : $har.<br>";