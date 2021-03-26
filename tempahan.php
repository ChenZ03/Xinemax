<?php
session_start();
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
    <title>TEMPAHAN</title>
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="tempahan.css">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <link rel="icon" href="X.png">
</head>
<body>
    <ul class="navigation">
        <img src="X.png" alt="" >
        <p>inemax</p>
        <li><a href="menu.php" >MENU UTAMA</a></li>
        <li><a href="tempahan.php" class = "active">TEMPAHAN</a></li>
        <a href="logKeluar.php" class="logout">LOG KELUAR</a>
    </ul>

    <ul class="flex-container">
        <li class="flex-item"><a href="Wayang/alita.php"> <img src="gambar/alita%20vertical.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/jumanji.php"><img src="gambar/jumanji%20vertical.jpg" alt=""></a> </li>
        <li class="flex-item"><a href="Wayang/Hobs.php"><img src="gambar/hobs%20and%20shaw%20vertical.jpg" alt=""></a> </li>
        <li class="flex-item"><a href="Wayang/IpMan.php"><img src="gambar/ip%20man%20vertical.jpg" alt=""> </a></li>
    </ul>

    <ul class="flex-container">
        <li class="flex-item"><a href="Wayang/avengers.php"><img src="gambar/avengers%20vertical.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/Jurrasic.php"><img src="gambar/Jurrasic%20World.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/Sonic.php"><img src="gambar/Sonic.jpg" alt=""> </a></li>
        <li class="flex-item"><a href="Wayang/John.php"><img src="gambar/John%20wick.jpg" alt=""> </a></li>
    </ul>

    <div class = "footer">
        <p>© 2019-2020 Xinemax. All Rights Reserved.</p>
    </div>
</body>
</html>