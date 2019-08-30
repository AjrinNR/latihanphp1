<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Luas Lingkaran dan Keliling Lingkaran</p>
    <fieldset>
        <legend>
            Luas Lingkaran dan Keliling Lingkaran
        </legend>
        <form action="" method="post">
            <label for="">Jari - Jari</label>
            <input type="number" min ="1" name ="j" required>
            <br>
            <input type="submit" name ="submit" value ="Simpan">
        </form>
    </fieldset> 

    <?php
        if (isset($_POST['submit'])) {
            $jari = $_POST['j'];

            function luas_lingkaran($j)
            {
                $luas = 3.14 * $j * $j;
                return $luas;
            }
            function kel_lingkaran($j)
            {
                $kel= 2 * 3.14 * $j;
                return $kel;
            }
            $luas = luas_lingkaran($jari);
            echo "Luas Lingkaran : $luas <br>";
            $kel = kel_lingkaran($jari);
            echo "Keliling Lingkaran : $kel";
        }

    ?>
</body>
</html>