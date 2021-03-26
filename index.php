<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HALAMAN LOG MASUK</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="logMasuk.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="X.png">
<body>
    <div class= "welcome">
        Selamat Datang ke Xinemax
    </div>
    <div class="LoginBox">
        <h1>LOG MASUK</h1>
        <form action="Validation.php" method="post">
        <div class = "text">
            <i class="fas fa-user"></i>
            <input type = "text" name ="id" placeholder="Masukkan id anda" required>


        </div>
        <div class="text">
            <i class="fas fa-key"></i>
            <input type = "password" name = "kataLaluan" placeholder="Masukkan Kata Laluan" required>
        </div>
        <button class = "button">LOG MASUK</button>
        </form>
        <br>
        <br>
        <br>
        <a href="Daftar.php">Tidak mempunyai akaun?</a>
    </div>
</body>
</html>