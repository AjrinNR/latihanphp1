<?php
    if (isset($_POST['submit'])) {
        
        $nama = $_POST['nama'];
        $alm = $_POST['jalan'];
        $ala = $_POST['keca'];
        $almt = $_POST['kota'];
        $al = $_POST['prov'];
        $alamat = $_POST['kode'];
        $bar = $_POST['nabar'];
        $har = $_POST['nomer'];
        $quan = $_POST['qtt'];
        $des = $_POST['desc'];
        $pem = $_POST['tgl'];
        $pem = date("d-m-Y", strtotime($pem));
        $ad = $quan * $har; 
        
        if ($quan <= 0) {
            echo "Pesanan tidak bisa di proses";
        }elseif ($quan>5) {
            $di = $ad*10/100;
            $ot = $ad - $di;
            
            echo "Nama : $nama  <br>";
            echo "Alamat : Jalan $alm <br>" . "Kec : $ala <br>" . "Kota/Kab : $almt <br>" . "Provinsi : $al <br>"."Kode Pos : $alamat . <br>";
            echo "Nama Barang : $bar  <br>";
            echo "Harga Barang : $har<br>";
            echo "Jumlah Barang : $quan<br>";
            echo "Deskripsi : $des<br>";
            echo "Tanggal Pembelian : $pem<br>";
            echo "Total Bayar : $ot<br>";
        }elseif ($quan > 10) {
            $di = $ad * 20/100;
            $ot = $ad - $di;
             
            echo "Nama : $nama  <br>";
            echo "Alamat : Jalan $alm <br>" . "Kec : $ala <br>" . "Kota/Kab : $almt <br>" . "Provinsi : $al <br>"."Kode Pos : $alamat . <br>";
            echo "Nama Barang : $bar  <br>";
            echo "Harga Barang : $har<br>";
            echo "Jumlah Barang : $quan<br>";
            echo "Deskripsi : $des<br>";
            echo "Tanggal Pembelian : $pem<br>";
            echo "Total Bayar : $ot<br>";
        }else {
           
        }
        
        

        
    }

    


?>