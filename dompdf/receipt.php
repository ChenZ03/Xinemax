<?php

    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: ../index.php");
        die();
    }
    // menjana satu Qrcode bagi resit pengguna
    require_once 'phpqrcode/qrlib.php';
    $path = '../dompdf/';
    $file = $path.uniqid().".png";
    $text = $_SESSION['idTiket'];
    QRcode::png($text, $file, QR_ECLEVEL_L, 6);
?>

<html>
<body>
<center>
<!-- Info Tiket -->
    <h1>Cinema Xinemax</h1>
    <h1>------------------------------------------------------------</h1>
    <?php
        echo "<image src='".$file."'>"
    ?>
    <h3><?php echo "ID TIKET : " . $_SESSION['idTiket'] ?></h3>
    <h3><?php echo "ID KEDUDUKAN : ";
        foreach ($_SESSION['seat'] as $selected){
            echo $selected . " ";
        }?></h3>
    <h3><?php echo "DEWASA : " . $_SESSION['dewasa']?></h3>
    <br>
    <h3><?php echo "PELAJAR : " . $_SESSION['pelajar']?></h3>
    <br>
    <h3><?php echo "KANAK-KANAK : " . $_SESSION['kanak-kanak']?></h3>
    <br>
    <br>
    <h3><?php echo "JUMLAH HARGA : RM" . $_SESSION['totalPrice'] ?></h3>
    <br>
    <h1>------------------------------------------------------------</h1>
    <h3>TERIMA KASIH ATAS PENEMPAHAN TIKET DI XINEMAX</h3>
    <br>
    <br>
    <br>
    <!-- Fungsi bagi cetak resit wayang -->
    <form> 
        <input type="button" value="Print" 
               onclick="window.print()" /> 
    </form>
    <!-- Pautan bagi balik ke menu.php -->
    <a href="../menu.php">HOME</a>
</center>
</body>
</html>