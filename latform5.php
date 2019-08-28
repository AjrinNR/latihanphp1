<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="proseslat5.php" method = "POST">
        <table border = "0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name = "nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="jalan" required>
                    <input type="text" name="keca" required>
                    <input type="text" name="kota" required><br></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>    
                    <input type="text" name="prov" required>
                    <input type="number" name="kode" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name = "nabar" required></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>:</td>
                <td><input type="number" name ="nomer" required></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>:</td>
                <td><input type="number" name = "qtt" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><textarea name="desc" id="" cols="30" rows="10" required></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td>:</td>
                <td><input type="date" name ="tgl" required></td>
            </tr>
            <tr>
                <td><input type="submit" name ="submit" value = "Simpan"></td>
            </tr>
        </table>        
    </form>
</body>
</html>