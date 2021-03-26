<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'xinemax');

$userId = $_POST['userid'];
$username = $_POST['username'];
$password = $_POST['password'];
$TelNo = $_POST['telephone'];
$conPw = $_POST['conpw'];

$s = "select * from pengguna where idPengguna = '$userId'";

$result = mysqli_query($connect, $s);

$num = mysqli_num_rows($result);

if ($conPw == $password){
    if ($num == 1){
        echo "<script type='text/javascript'>window.location='index.php'; alert('Pengguna telah wujud. Sila Log Masuk')</script>";
    }
    else{
        $s = "INSERT INTO pengguna (idPengguna, kataLaluan, nama, telefon, jenis) VALUES ('$userId', '$password', '$username', '$TelNo', 'pekerja')";
        $insert = mysqli_query($connect, $s);
        $s = "INSERT INTO telefon (telefon, nama) VALUES ('$TelNo', '$username')";
        $insert = mysqli_query($connect, $s);
        echo "<script type='text/javascript'>window.location='index.php'; alert('Pengunna berjaya didaftarkan. Sila Log masuk')</script>";
    }
}
else {
    echo "<script type='text/javascript'>window.location='index.php'; alert('Error')</script>";
}

