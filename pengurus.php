<?php

session_start();

if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENGURUS</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="pengurus.css">
    <link rel="icon" href="./X.png">
<body>
<section class="navigation-bar">
    <ul class="navigation">
        <h2><?php
            echo $_SESSION['id'] ." ".  "|| " . $_SESSION['jenis'];
            ?></h2>
        <img src="X.png" alt="" >
        <p>inemax</p>
        <a href="logKeluar.php" class="logout">LOGOUT</a>
    </ul>
    <div class = "sidebar">
        <div class = "items">
            <center>
                <a href="jualan.php">JUALAN</a>
            </center>

        </div>
        <div class = "items">
            <center>
                <a href="senaraiPekerja.php">Senarai Pekerja</a>
            </center>

        </div>
        <div class = "items">
            <center>
                <a href="pendaftaranPekerja.php">Daftar Pekerja</a>
            </center>

        </div>
        <div class="items">
            <center>
                <a href="senaraiWayang.php">Senarai Wayang</a>
            </center>
        </div>
        <div class = "items">
            <center>
                <a href="menu.php">Penempahan Wayang</a>
            </center>

        </div>
    </div>

    <div class = "welcome" style="width: 50% ">
        -SELAMAT DATANG KE CINEMA XINEMAX-
        <p>-------------------------------------------------------------------------------------------------------</p>
        <h5>SILA PILIH SALAH SATU PILIHAN DI TEPI UNTUK TERUSKAN</h5>

    </div>

</body>
</html>