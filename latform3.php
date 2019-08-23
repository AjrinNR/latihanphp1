<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <table border = "0" align = "left">
        <form action = "proseslat3.php" method = "POST">
    
            <tr>
                <td>No Pendaftaran</td> 
                <td>:</td> 
                <td><input type ="text" name = "nomer" ></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td> 
                <td><input type ="text" name = "nisn" ></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td> <input type ="text" name = "nama" ></td>
            </tr>           
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td> <textarea name = "alamat" cols = "20" rows = "5"></textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td> <input type = "text" name = "tl" ></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td> <input type = "date" name = "ttl"></td>
            </tr>         
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td> <input type = "text" name = "asal" ></td>
            </tr>
               
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> <input type="radio" name="jk" value="Laki Laki">Laki - Laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan</td>
            </tr>  
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan">
                        <option value="RPL">RPL</option>
                        <option value="TSM">TSM</option>
                        <option value="TKR">TKR</option>
                    </select></td>
            </tr>                
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td> <input type = "text" name = "ayah"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td> <input type = "text" name = "pa"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td> <input type = "text" name = "Ibu"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td> <input type = "text" name = "pi"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Kristen">Kristen</option>
                    </select> 
                    </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td><input type = "checkbox" name = "ng" value = "NgeGame">NgeGame
                            <input type = "checkbox" name = "nf" value = "Ngedit Foto">Ngedit Foto
                            <input type = "checkbox" name = "mn" value = "Mancing">Mancing
                            <input type = "checkbox" name = "tidur" value = "Tidur">Tidur
                            <input type = "checkbox" name = "musik" value = "Dengerin Musik">Dengerin Musik
                            </td>
            </tr>
            <tr>
                <td><input type = "submit" name="submit" value ="Simpan"></td>
            </tr> 
            <tr><td><input type = "reset" name="hapus" value ="Reset"></td></tr>
        </form>
    </table>
</body>
</html>