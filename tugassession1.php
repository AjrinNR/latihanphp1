<?php
session_start();
    if (isset ($_POST['Login'])) {
        $user = $_POST['user']; 
        $pass = $_POST['pass'];
        //periksa login
        if ($user == "ajrin" && $pass == "123") {
            //menciptakan session
            $_SESSION['login'] = $user;
            //menuju ke halaman pemeriksaan session
            echo "<h1>Anda berhasil LOGIN</h1>";
            echo "<h2>Silahkan dipilih</h2>";
            echo "<a href ='tugassession2.php'> Halaman 1</a> <br>";
            echo "<a href ='tugassession3.php'> Halaman 2</a> <br>";
            echo "<a href ='tugassession4.php'> Halaman 3</a> <br>";
            echo "<a href ='logoutsession.php'> LogOut</a>";
    }
     else {
     die("Username atau password yang anda masukan salah. Silahkan Log In kembali 
     <a href = 'tugassession1.php'> Log In</a>");
    } 
    } else {
?>
         <html>
    <head>
    <title>Login here...</title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>
    </html>
<?php  }  ?>