<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die();
}
$_SESSION['wayang'] = "Jumanji : Welcome to the Jungle";
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jumanji</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="wayang.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../X.png">
</head>
<body>
<ul class="navigation">
    <img src="../X.png" alt="" >
    <p>inemax</p>
    <li><a href="../menu.php" >MENU UTAMA</a></li>
    <li><a href="../tempahan.php" class="active">TEMPAHAN</a></li>
    <a href="../logKeluar.php" class="logout">LOG KELUAR</a>
</ul>

<ul class = "desc">
    <h1>Jumanji : Welcome to the Jungle</h1>
    <br>
    <p>Cerita ini memberi tumpuan kepada sekumpulan remaja yang menemui Jumanji-kini berubah menjadi permainan video-dua puluh satu tahun selepas peristiwa 1995. Mereka mendapati diri mereka terperangkap dalam permainan sebagai satu set avatar, mencari untuk menyelesaikan satu usaha bersama yang lain pemain yang telah terperangkap sejak tahun 1996.</p>
</ul>
<div class="holder">
    <img src="../gambar/jumanji%20vertical.jpg" alt="" class="image">
    <div class = "trailer">
        <a href="https://www.youtube.com/watch?v=2QKg5SZ_35I" target="_blank" ><img src="../gambar/play.png" style="width: 4vw; height: 4vw" ></a>
    </div>
    <form action="pilih.php" method="post">
        <div class="datetime">
            <input type="date" name="date" required value="<?php echo date('Y-m-d')?>">
            <input type="radio" name="time" value="0930" required>9:30A.M.
            <input type="radio" name="time" value="1230">12:30P.M.
            <input type="radio" name="time" value="1530">3:30P.M.
            <input type="radio" name="time" value="1830">6:30P.M.
            <input type="radio" name="time" value="2130">9:30P.M.
        </div>
        <div class="middle">
            <button class="btn btn1">TEMPAH SEKARANG</button>
        </div>
    </form>

</div>

<div class = "footer">
    <p>© 2019-2020 Xinemax. All Rights Reserved.</p>
</div>
</body>
</html>