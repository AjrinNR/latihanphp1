<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <form action = "proseslat3.php" method = "POST">
        No Pendaftaran : <input type ="text" name = "nomer" ><br><br>
        NISN           : <input type ="text" name = "nisn" ><br><br>
        Nama           : <input type ="text" name = "nama" ><br><br>
        Alamat         : <textarea cols = "20" rows = "5"></textarea><br><br>
        Tempat Lahir   : <input type = "text" name = "tl" ><br><br>
        Tanggal Lahir  : <input type = "date" name = "ttl"><br><br>
        Asal Sekolah   : <input type = "text" name = "asal" ><br><br>
        Jenis Kelamin  : <input type="radio" name="jk" value="Laki Laki"> Laki -Laki
                         <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>
        Jurusan        : <select name="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="TSM">TSM</option>
                            <option value="TKR">TKR</option>
                         </select><br><br>
        Nama Ayah      : <input type = "text" name="ayah" ><br><br>
        Pekerjaan Ayah : <input type = "text" name="pa"><br><br>
        Nama Ibu       : <input type = "text" name="Ibu"><br><br>
        Pekerjaan Ayah : <input type = "text" name="pi" ><br><br>
        Agama          : <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kristen">Kristen</option>
                         </select><br><br>
        Hobi           : <input type = "checkbox" name = "Ngegame" value = "NgeGame">NgeGame
                         <input type = "checkbox" name = "NgeditFoto" value = "Ngedit Foto">Ngedit Foto
                         <input type = "checkbox" name = "mancing" value = "Mancing">Mancing
                         <input type = "checkbox" name = "tidur" value = "Tidur">Tidur
                         <input type = "checkbox" name = "musik" value = "Dengerin Musik">Dengerin Musik<br><br>
                         <input type = "submit" name="submit" value ="Simpan">
    </form>
</body>
</html>