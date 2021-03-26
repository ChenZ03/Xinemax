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
    <title>PENDAFATRAN PENGGUNA</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="pendaftaran.css">
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
                <a href="senaraiPekerja.php">Senarai Pengguna</a>
            </center>

        </div>
        <div class="active">
            <center>
                <a href="pendaftaranPekerja.php">Daftar Pengguna</a>
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

    <div class="main" style="width: 80%;">
        <div class="reg-container">
            <div class="title">
                PENDAFTARAN PENGGUNA BARU
            </div>
            <div class="csv">
                <a href="importcsv.php">IMPORT FILE CSV</a>
            </div>
            <div class="reg">
                <form action="pendaftaran.php" method="post">
                    <div class="textbox">
                        <i class="fas fa-users fa-lg"> ID PENGGUNA</i>
                        <input type="text" name = "idPengguna" placeholder="MASUKKAN ID PEKERJA" required>
                    </div>
                    <div class="textbox">
                        <i class="fas fa-user fa-lg"> NAMA PENGGUNA</i>
                        <input type="text" name = "nama" placeholder="MASUKKAN NAMA PEKERJA" required>
                    </div>
                    <div class="textbox">
                        <i class="fas fa-lock fa-lg"> KATA LALUAN</i>
                        <input type="password" name = "kataLaluan" placeholder="MASUKKAN KATA LALUAN BARU" required>
                    </div>
                    <div class="textbox">
                        <i class="fas fa-phone-alt fa-lg"> TELEFON PENGGUNA</i>
                        <input type="text" name = "telefon" placeholder="MASUKKAN TELEFON PEKERJA" required>
                    </div>
                    <div class="textbox">
                        <i class="fas fa-briefcase fa-lg"> JENIS PENGGUNA</i>
                        <select name="jenis" required>
                            <option></option>
                            <option value="pekerja">PEKERJA</option>
                            <option value="pengurus">PENGURUS</option>
                        </select>
                    </div>
                    <div class="middle">
                        <button class="btn btn1">DAFTAR PEKERJA</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>