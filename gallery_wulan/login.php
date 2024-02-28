<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

</head>
 <body>

    
    <div class="card-header"><h1>Silahkan Login Terlebih Dahulu ya ^v^</h1></div>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <h4><a href="register.php">Daftar</a> Dahulu Jika Belum Punya Akun!</h4>
</body>
</html>