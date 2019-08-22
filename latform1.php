<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan</title>
</head>
<body>
    <form method = "post" action ="">
        Nama    <input type = "text" name = "nama"><br>
        Nilai 1 <input type = "text" name = "n"><br>
        Nilai 2 <input type = "text" name = "a"><br>
        <input type="submit" name="Input" value="Simpan">
        <input type="reset" name="hapus" value="Hapus">
    </form>
</body>
</html>
<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $n = $_POST['n'];
        $a = $_POST['a'];
        echo "Nama Anda : <b>$nama<br>";
        echo "Nilai 1 : <b>$n<br>";
        echo "Nilai 2 : <b>$a<br>";
        $rata = ($n+$a)/2;
        echo "Rata rata nilai anda : $rata";
}
?>