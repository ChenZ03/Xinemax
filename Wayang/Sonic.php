<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die();
}
$_SESSION['wayang'] = "Sonic the Hedgehog";
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sonic the Hedgehog</title>
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
    <h1>Sonic the Hedgehog</h1>
    <br>
    <p>Sonic cuba menavigasi kerumitan hidup di Bumi dengan kawan terbaiknya yang baru - seorang manusia bernama Tom Wachowski. Mereka mesti segera bergabung untuk mencegah kejahatan Dr Robotnik dari menangkap Sonic dan menggunakan kekuasaannya untuk penguasaan dunia.</p>
</ul>

<img src="../gambar/Sonic.jpg" alt="" class="image">
<div class = "trailer">
    <a href="https://www.youtube.com/watch?v=szby7ZHLnkA" target="_blank" ><img src="../gambar/play.png" style="width: 4vw; height: 4vw" ></a>
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
<div class = "footer">
    <p>© 2019-2020 Xinemax. All Rights Reserved.</p>
</div>
</body>
</html>