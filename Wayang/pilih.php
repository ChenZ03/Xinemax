<?php 
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    die();
}
$_SESSION['time'] = $_POST['time'];
$_SESSION['date'] = $_POST['date'];
if($_SESSION['wayang'] == "Avengers : Endgame"){
    $showing = "3jam 2min";
    $hall = "Bilik 1";
    $_SESSION['idWayng'] = 'H6679';
}elseif($_SESSION['wayang'] == "Alita - Battle Angel"){
    $showing = "2jam 2min";
    $hall = "Bilik 2";
    $_SESSION['idWayng'] = 'H6579';
}elseif($_SESSION['wayang'] == "Hobbs & Shaw"){
    $showing = "2jam 16min";
    $hall = "Bilik 3";
    $_SESSION['idWayng'] = 'H6879';
}elseif($_SESSION['wayang'] == "Ip man 4"){
    $showing = "1jam 45min";
    $hall = "Bilik 4";
    $_SESSION['idWayng'] = 'H2679';
}elseif($_SESSION['wayang'] == "John Wick - Keanu Reeves"){
    $showing = "1jam 45min";
    $hall = "Bilik 5";
    $_SESSION['idWayng'] = 'H6619';
}elseif($_SESSION['wayang'] == "Jumanji : Welcome to the Jungle"){
    $showing = "1jam 59min";
    $hall = "Bilik 6";
    $_SESSION['idWayng'] = 'H6782';
}elseif($_SESSION['wayang'] == "Jurassic World : Fallen Kingdom"){
    $showing = "2jam 10min";
    $hall = "Bilik 7";
    $_SESSION['idWayng'] = 'H1679';
}elseif($_SESSION['wayang'] == "Sonic the Hedgehog"){
    $showing = "1jam 40min";
    $hall = "Bilik 8";
    $_SESSION['idWayng'] = 'H2379';
}


$_SESSION['showing'] = $showing;
$_SESSION['hall'] = $hall;
header('location:../kedudukan.php');


?>