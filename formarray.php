<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method ="get">
        <label for="">Masukan Jumlah</label><br>
        <input type="number" name = "jml"><br>
        <input type="submit" name = "ok" value ="Simpan"><br><br>
    </form>
        <?php
            if (isset($_GET['ok'])) {
               $jmlform = $_GET ['jml'];
               for ($i=1; $i <= $jmlform; $i++) { 
                    ?>
                    <form action="prosesformarray.php">
                        <label for="">Nama</label>
                        <input type="text" name = "nama[]">
                        <label for="">Kelas</label>
                        <input type="text" name = "kelas[]"><br><br>

                <?php } ?>
                        <input type="submit" name="sbm" value ="Simpan">
                        <input type="reset" name="reset">
                    </form>   
            <?php } ?>
    
</body>
</html>