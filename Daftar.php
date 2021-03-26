<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENDAFTARAN</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="logMasuk.css">
    <link rel="icon" href="X.png">
</head>

<body>
    <div class= "welcome">
        Selamat Datang ke Xinemax
    </div>
    <div class="LoginBox">
        <h1>Pendaftaran</h1>
        <form action="Registration.php" method="post">
            <div class = "text">
                <i class="fas fa-user"></i>
                <input type="text" name = "userid" placeholder="Masukkan Id anda" required>
            </div>
            <div class = "text">
                <i class="fas fa-user-cog"></i>
                <input type="text" name = "username" placeholder="Masukkan nama anda" required>
            </div>
            <div class="text">
                <i class="fas fa-key"></i>
                <input type = "password" name = "password" placeholder="Masukkan Kata Laluan anda" required>
            </div>
            <div class="text">
                <i class="fas fa-key"></i>
                <input type = "password" name = "conpw" placeholder="Kenal Pasti Kata Laluan" required>
            </div>
            <div class="text">
                <i class="fas fa-phone-alt"></i>
                <input type = "text" name = "telephone" placeholder="Nombor Tel." required>
            </div>
            <button class="button">DAFTAR</button>

        </form>
        <br>
        <br>
        <br>
        <a href="index.php">Memounyai Akuan? Log masuk sekarang!</a>
    </div>
</body>
</html>
