<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'xinemax');

$idPengguna = $_POST['idPengguna'];
$nama = $_POST['nama'];
$kataLaluan = $_POST['kataLaluan'];
$TelNo = $_POST['telefon'];
$jenis = $_POST['jenis'];
$s = "select * from pengguna where idPengguna = '$idPengguna'";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);


if ($num == 1){
    echo "<script type='text/javascript'>window.location='pendaftaranPekerja.php'; alert('Pekerja telah didaftar, sila masukkan pekerja yang lain')</script>";
}
else{
    $s = "INSERT INTO pengguna (idPengguna, kataLaluan, nama, telefon, jenis) VALUES ('$idPengguna', '$kataLaluan', '$nama', '$TelNo', '$jenis')";
    $insert = mysqli_query($connect, $s);
    $s = "INSERT INTO telefon (telefon, nama) VALUES ('$TelNo', '$nama')";
    $insert = mysqli_query($connect, $s);
    echo "<script type='text/javascript'>window.location='pendaftaranPekerja.php'; alert('Pendaftaran berjaya')</script>";
}

