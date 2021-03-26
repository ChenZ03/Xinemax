<?php
    session_start();
    require ('header.php');
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
    <title>Tempahan Kedudukan</title>
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="kedudukan.css">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <link rel="icon" href="X.png">
</head>
<body>
    <div class="movie">
        <h3><?php echo $_SESSION['wayang']?></h3>
        <h5>P13 | <?php echo $_SESSION['showing'] ?> | <?php echo $_SESSION['date'] . ' | ' .  $_SESSION['time'] ?> | <?php echo $_SESSION['hall'] ?></h5>
    </div>
    <form action="tempah.php" method="post">
    <div class="theatre">
        <div class="screen-holder">
            <div class="screen">
                SKRIN
            </div>
        </div>
        <div class="container-left">
            <div class="cinema-seat-left">
                <div class="cinema-row row-1">
                    <input type="checkbox" name="seat[]" id="H1" value="A01"/><label for="H1"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H2" value="A02"/><label for="H2"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H3" value="A03"/><label for="H3"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H4" value="A04"/><label for="H4"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H5" value="A05"/><label for="H5"><i class="fas fa-user-circle fa-3x"></i></label>
                    <div class="cinema-seat-right">
                        <div class="cinema-row row-1">
                            <input type="checkbox" name="seat[]" id="H26" value="A06"/><label for="H26"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H27" value="A07"/><label for="H27"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H28" value="A08"/><label for="H28"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H29" value="A09"/><label for="H29"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H30" value="A10"/><label for="H30"><i class="fas fa-user-circle fa-3x"></i></label>
                        </div>
                    </div>
                </div>
                <div class="cinema-row row-2">
                    <input type="checkbox" name="seat[]" id="H6" value="B01"/><label for="H6"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H7" value="B02"/><label for="H7"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H8" value="B03"/><label for="H8"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H9" value="B04"/><label for="H9"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H10" value="B05"/><label for="H10"><i class="fas fa-user-circle fa-3x"></i></label>
                    <div class="cinema-seat-right">
                        <div class="cinema-row row-2">
                            <input type="checkbox" name="seat[]" id="H31" value="B06"/><label for="H31"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H32" value="B07"/><label for="H32"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H33" value="B08"/><label for="H33"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H34" value="B09"/><label for="H34"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H35" value="B10"/><label for="H35"><i class="fas fa-user-circle fa-3x"></i></label>
                        </div>
                    </div>
                </div>
                <div class="cinema-row row-3">
                    <input type="checkbox" name="seat[]" id="H11" value="C01"/><label for="H11"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H12" value="C02"/><label for="H12"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H13" value="C03"/><label for="H13"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H14" value="C04"/><label for="H14"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H15" value="C05"/><label for="H15"><i class="fas fa-user-circle fa-3x"></i></label>
                    <div class="cinema-seat-right">
                        <div class="cinema-row row-3">
                            <input type="checkbox" name="seat[]" id="H36" value="C06"/><label for="H36"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H37" value="C07"/><label for="H37"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H38" value="C08"/><label for="H38"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H39" value="C09"/><label for="H39"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H40" value="C05"/><label for="H40"><i class="fas fa-user-circle fa-3x"></i></label>
                        </div>
                    </div>
                </div>
                <div class="cinema-row row-4">
                    <input type="checkbox" name="seat[]" id="H16" value="D01"/><label for="H16"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H17" value="D02"/><label for="H17"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H18" value="D03"/><label for="H18"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H19" value="D04"/><label for="H19"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H20" value="D05"/><label for="H20"><i class="fas fa-user-circle fa-3x"></i></label>
                    <div class="cinema-seat-right">
                        <div class="cinema-row row-4">
                            <input type="checkbox" name="seat[]" id="H41" value="D06"/><label for="H41"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H42" value="D07"/><label for="H42"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H43" value="D08"/><label for="H43"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H44" value="D09"/><label for="H44"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H45" value="D10"/><label for="H45"><i class="fas fa-user-circle fa-3x"></i></label>
                        </div>
                    </div>
                </div>
                <div class="cinema-row row-5">
                    <input type="checkbox" name="seat[]" id="H21" value="E01"/><label for="H21"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H22" value="E02"/><label for="H22"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H23" value="E03"/><label for="H23"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H24" value="E04"/><label for="H24"><i class="fas fa-user-circle fa-3x"></i></label>
                    <input type="checkbox" name="seat[]" id="H25" value="E05"/><label for="H25"><i class="fas fa-user-circle fa-3x"></i></label>
                    <div class="cinema-seat-right">
                        <div class="cinema-row row-5">
                            <input type="checkbox" name="seat[]" id="H46" value="E06"/><label for="H46"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H47" value="E07"/><label for="H47"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H48" value="E08"/><label for="H48"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H49" value="E09"/><label for="H49"><i class="fas fa-user-circle fa-3x"></i></label>
                            <input type="checkbox" name="seat[]" id="H50" value="E10"/><label for="H50"><i class="fas fa-user-circle fa-3x"></i></label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="middle">
            <button class="btn btn1">KENAL PASTI</button>
        </div>
    </div>
    </form>
    <div class = "footer">
        <p>© 2019-2020 Xinemax. All Rights Reserved.</p>
    </div>
</body>
</html>
