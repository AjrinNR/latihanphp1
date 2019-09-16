<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>TES TNI</p>
    <fieldset>
        <legend>
            TES TNI
        </legend>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name = "n" required><br><br>
        <label for="">Berat Badan</label>
        <input type="number" name = "bb" required> Kg <br><br>
        <label for="">Tinggi Badan</label>
        <input type="number" name = "tb" required> Cm<br>
        <input type="submit" name = "submit" value ="Simpan">
    </form>
    </fieldset>

    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['n'];
            $berat = $_POST['bb'];
            $tinggi = $_POST['tb'];

            function badan($bb,$tb)
            {
                if (($bb > 50) && ($bb < 60) && ($tb >= 165)) {
                  $a = "Anda diterima";  
                }else{
                    $a = "Anda tidak diterima";
                }
                return $a;
            }
            $ty = badan($berat,$tinggi);
            echo "Nama anda : $nama <br>";
            echo "Berat badan anda : $berat Kg<br>";
            echo "Tinggi badan anda : $tinggi Cm<br>";
            echo "Status anda : $ty";
        }
    ?>
</body>
</html>