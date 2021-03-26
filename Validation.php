<?php

session_start();

$sambungan = mysqli_connect('localhost', 'root', '');

mysqli_select_db($sambungan, 'xinemax');

$id = $_POST['id'];
$kataLaluan = $_POST['kataLaluan'];


$s = "select * from pengguna where idPengguna = '$id' && kataLaluan = '$kataLaluan'";

$keputusan = mysqli_query($sambungan, $s);

$nom = mysqli_num_rows($keputusan);

if ($nom == 1){
    $_SESSION['id'] = $id;
    $s = "select jenis from pengguna where idPengguna = '$id'";
    $keputusan = mysqli_query($sambungan, $s);
    while($row = mysqli_fetch_assoc($keputusan)) {
        $jenis =  $row['jenis'] ;
    }
    if ($jenis == 'pekerja') {
        echo "<script type='text/javascript'>window.location='menu.php'; alert('Log masuk berjaya')</script>";
        $_SESSION['jenis'] = "Pekerja";
    }
    else{
        echo "<script type='text/javascript'>window.location='pengurus.php'; alert('Log masuk berjaya')</script>";
        $_SESSION['jenis'] = "Pengurus";
    }
}
else{
    echo "<script type='text/javascript'>window.location='index.php'; alert('Id/Kata Laluan anda telah salah')</script>";

}

?>
