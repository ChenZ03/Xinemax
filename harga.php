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
    <title>HARGA</title>
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="harga.css">
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <link rel="icon" href="X.png">
</head>
<body>
        <div class="price-container">
            <div class="price">
                <?php echo "WAYANG : "  . $_SESSION['wayang'] ?><br>
                <?php echo "MASA : " . $_SESSION['time']?><br>
                <?php echo "TARIKH : " . $_SESSION['date']?><br>
                <?php echo "KEDUDUKAN : ";
                foreach ($_SESSION['seat'] as $selected){
                    echo $selected . " ";
                }?>
                <br>
                <br>
                <h3>SILA PILIH : </h3>
                <form action="Validation_checkout.php" method="post">
                    <h3>DEWASA :</h3>
                    <select name="dewasa">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <br>
                    <h3>KANAK-KANAK :</h3>
                    <select name="kanak-kanak">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <br>
                    <h3>PELAJAR :</h3>
                    <select name="pelajar">
                        <option  value=""></option>
                        <option  value="1">1</option>
                        <option  value="2">2</option>
                        <option  value="3">3</option>
                        <option  value="4">4</option>
                        <option  value="5">5</option>
                    </select>
                    <br>
                    <div class="middle">
                        <button class="btn btn1">TERUSKAN</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>


