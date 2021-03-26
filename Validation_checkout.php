<?php
    session_start();

    $dewasa = (int)$_POST['dewasa'];
    $kanak = (int)$_POST['kanak-kanak'];
    $pelajar = (int)$_POST['pelajar'];

    $_SESSION['dewasa'] = $dewasa;
    $_SESSION['kanak-kanak'] = $kanak;
    $_SESSION['pelajar'] = $pelajar;

    $_SESSION['adultPrice'] = 11;
    $_SESSION['studentPrice'] =  9;
    $_SESSION['childrenPrice'] = 8;

    $jumlah = $dewasa + $kanak + $pelajar;

    $_SESSION['jumlahTiket'] = $jumlah;

    if(count($_SESSION['seat']) == $jumlah){
        $_SESSION['totalPrice'] = ((int)$dewasa * $_SESSION['adultPrice']) + ((int)$kanak * $_SESSION['childrenPrice']) + ((int)$pelajar * $_SESSION['studentPrice']);
        header("location:bayar.php");
    }else{
        echo "<script type='text/javascript'>window.location='harga.php'; alert('Sila memilih bilangan tiket yang betul')</script>";
    }

