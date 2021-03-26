<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
        die();
    }

    $connect = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connect, 'xinemax');

    $seat[] = $_POST['seat'];
    if ($_POST['seat'] != null){
        if(count($_POST['seat']) < 6){
            $_SESSION['seat'] = array();
            foreach ($_POST['seat'] as $selected){
                array_push($_SESSION['seat'], $selected);
            }
            header('location: harga.php');
            $ticket = count($seat);
        }
        else{
            echo "<script type='text/javascript'>window.location='kedudukan.php'; alert('Jangan pilih tempat kedudukan melebihi 5')</script>";
        }
    }else{
        echo "<script type='text/javascript'>window.location='kedudukan.php'; alert('Sila pilih sekurang-kurangnya satu tempat kedudukan')</script>";
    }

    ?>

