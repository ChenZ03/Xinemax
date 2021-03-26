<?php

session_start();

if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

$connect = mysqli_connect('localhost', 'root', '', 'xinemax');
$s = "SELECT * FROM pengguna WHERE idPengguna = '{$_POST['edit']}'";
$result = mysqli_query($connect, $s);
while($data = mysqli_fetch_assoc($result)){
    $nama = $data['nama'];
    $kataLaluan = $data['kataLaluan'];
    $tel = $data['telefon'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEMASKINI PENGGUNA</title>
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
        <div class = "active">
            <center>
                <a href="senaraiPekerja.php">Senarai Pengguna</a>
            </center>

        </div>
        <div class="items">
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
                KEMASKINI PENGGUNA
            </div>
            <div class="reg">
                <form action="kemas.php" method="post">
                            <div class="textbox">
                                <i class="fas fa-users fa-lg"> ID PENGGUNA</i>
                                <input type="text" name="idPengguna"
                                       value=<?php echo $_POST['edit'] ?> readonly="readonly"/>
                            </div>
                            <div class="textbox">
                                <i class="fas fa-user fa-lg"> NAMA PENGGUNA</i>
                                <input type="text" name="nama" value="<?php echo $nama; ?>" required>
                            </div>
                            <div class="textbox">
                                <i class="fas fa-lock fa-lg"> KATA LALUAN</i>
                                <input type="text" name="kataLaluan" value="<?php echo $kataLaluan; ?>" required>
                            </div>
                            <div class="textbox">
                                <i class="fas fa-phone-alt fa-lg"> TELEFON PENGGUNA</i>
                                <input type="text" name="telefon" value="<?php echo $tel; ?>" required>
                            </div>
                    <div class="middle">
                        <button class="btn btn1">KEMASKINI DATA</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>