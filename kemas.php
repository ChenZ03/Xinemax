<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'xinemax');

$idPengguna = $_POST['idPengguna'];
$nama = $_POST['nama'];
$kataLaluan = $_POST['kataLaluan'];
$TelNo = $_POST['telefon'];
$s = "UPDATE pengguna SET nama = '{$nama}', kataLaluan = '{$kataLaluan}', telefon = '{$TelNo}' WHERE idPengguna = '{$idPengguna}'";
$update = mysqli_query($connect, $s);

echo "<script type='text/javascript'>window.location='senaraiPekerja.php'; alert('Pekerja berjaya dikemaskini')</script>";

