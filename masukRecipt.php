<?php
 session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
        die();
    }
    $connect = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connect, 'xinemax');

    $tarikh = $_SESSION['date'];
    $wayang = $_SESSION['idWayng'];
    $masa = strval($_SESSION['date']);
    $idTiket = "G" . strval(rand(100, 999));
    $_SESSION['idTiket'] = $idTiket;
    $tarikhJualan = strval(date('Y-m-d'));
    $tiket = $_SESSION['jumlahTiket'];
    $jumlahHarga = $_SESSION['totalPrice'];
    $idkedudukan = implode(" ",$_SESSION['seat']);
    $idPengguna = $_SESSION['id'];



    $s = "INSERT INTO tiket (idTiket, tarikhJualan, bilangan, jumlahHarga, idWayang, idKedudukan , masaTayang, idPengguna) VALUES ('$idTiket', '$tarikhJualan', '$tiket', '$jumlahHarga' , '$wayang', '$idkedudukan' ,'$masa', '$idPengguna')";

    $insert = mysqli_query($connect, $s);

    echo "<script type='text/javascript'>window.location='./dompdf/receipt.php'; alert('Tempahan Berjaya')</script>";