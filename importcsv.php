<?php

session_start();

if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

$connect = mysqli_connect("localhost", "root", "", "xinemax");


if(isset($_POST["upload"])) {
    if ($_FILES['product_file']['name']) {
        $filename = explode(".", $_FILES['product_file']['name']);
        if (end($filename) == "csv") {
            $handle = fopen($_FILES['product_file']['tmp_name'], "r");
            while ($data = fgetcsv($handle)) {
                $idPengguna = mysqli_real_escape_string($connect, $data[0]);
                $kataLaluan = mysqli_real_escape_string($connect, $data[1]);
                $nama = mysqli_real_escape_string($connect, $data[2]);
                $telefon = mysqli_real_escape_string($connect, $data[3]);
                $jenis = mysqli_real_escape_string($connect, $data[4]);
                $query = "INSERT INTO pengguna VALUES ('$idPengguna', '$kataLaluan', '$nama', '$telefon', '$jenis')";


                mysqli_query($connect, $query);
            }
            fclose($handle);
            echo "<script type='text/javascript'>alert('Anda telah berjaya menaikkan file CSV')</script>";
            header("location: importcsv.php?updation=1");
        }else{
            echo "<script type='text/javascript'> alert('Sila masukkan File CSV sahaja')</script>";
        }
    }
}

if(isset($_GET["updation"]))
{
    echo "<script type='text/javascript'>window.location='importcsv.php'; alert('PENDAFTARAN BERJAYA')</script>";
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
                <a href="pendaftaranPekerja.php">DAFTAR PENGGUNA BARU</a>
            </div>

            <div class="reg">
                <form enctype="multipart/form-data" method="post">
                    <table border="1">
                        <tr >
                            <td colspan="2" align="center"><strong>Import CSV file</strong></td>
                        </tr>
                        <tr>
                            <td align="center">CSV File:</td><td><input type="file" name="product_file" id="file"></td></tr>
                    </table>
                    <div class="middle">
                        <button class="btn btn1" name="upload" value="Upload" type="submit">IMPORT CSV</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>