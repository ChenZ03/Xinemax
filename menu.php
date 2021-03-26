<?php
    session_start();
    require('header.php');
    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
        die();
    }
    ?>


<html>
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>MENU UTAMA</title>
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <link rel="icon" href="./X.png">
</head>
<body>
    <div class="slideshow">
    <div class="slidershow middle">

<div class="slides">
    <input type="radio" name="r" id="r1" checked>
    <input type="radio" name="r" id="r2">
    <input type="radio" name="r" id="r3">
    <input type="radio" name="r" id="r4">
    <input type="radio" name="r" id="r5">
    <div class="slide s1">
        <img src="gambar/Alita.jpg" alt="">
    </div>
    <div class="slide">
        <img src="gambar/JumanjiPoster.jpg" alt="">
    </div>
    <div class="slide">
        <img src="gambar/hobs%20and%20shaw.jpg" alt="">
    </div>
    <div class="slide">
        <img src="gambar/Ipman.jpg" alt="">
    </div>
    <div class="slide">
        <img src="gambar/avengersP.jpg" alt="">
    </div>
</div>
<div class="radio-sec">
<div class="radio">
    <label for="r1" class="bar"></label>
    <label for="r2" class="bar"></label>
    <label for="r3" class="bar"></label>
    <label for="r4" class="bar"></label>
    <label for="r5" class="bar"></label>
</div>
</div>
</div>
    </div>
    <ul class="flex-container">
        <li class="flex-item"><a href="Wayang/alita.php"> <img src="gambar/alita%20vertical.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/jumanji.php"><img src="gambar/jumanji%20vertical.jpg" alt=""></a> </li>
        <li class="flex-item"><a href="Wayang/Hobs.php"><img src="gambar/hobs%20and%20shaw%20vertical.jpg" alt=""></a> </li>
        <li class="flex-item"><a href="Wayang/IpMan.php"><img src="gambar/ip%20man%20vertical.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/avengers.php"><img src="gambar/avengers%20vertical.jpg" alt=""> </a></li>
    </ul>

<div class = "footer">
    <p>© 2019-2020 Xinemax. All Rights Reserved.</p>
</div>
</body>
</html>
