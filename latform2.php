<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
                </head>
<body>
    <FORM action ="proseslat2.php" METHOD="POST" NAME="input">
           Nama : <input type="text" name="nama"><br><br>
           Alamat : <textarea name='alamat' cols = "20" rows = "5"></textarea><br><br>
           Jenis Kelamin : <input type="radio" name="jk" value="Laki Laki"> Laki -Laki
                           <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>
           Agama :  <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Atheis">Atheis</option>
                    </select> <br><br>
           Email :  <input type="text" name="email"><br><br>
           Password : <input type="password" name="password"><br><br>
                    <input type="submit" name="Input" value="Input">
                    <input type="reset" name="reset" value="reset">
    </FORM> 
</body>
</html>