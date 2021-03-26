<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENARAI WAYANG</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="pendaftaran.css">
    <link rel="icon" href="./X.png">
<body>
<section class="navigation-bar">
    <ul class="navigation">
        <h2><?php
            echo $_SESSION['id'] ." ".  "|| " . $_SESSION['jenis'];
            ?></h2>
        <img src="X.png" alt="" >
        <p>inemax</p>
        <a href="logKeluar.php" class="logout">LOGOUT</a>
    </ul>
    <div class = "sidebar">
        <div class = "items">
            <center>
                <a href="jualan.php">JUALAN</a>
            </center>

        </div>
        <div class = "items">
            <center>
                <a href="senaraiPekerja.php">Senarai Pengguna</a>
            </center>

        </div>
        <div class="items">
            <center>
                <a href="pendaftaranPekerja.php">Daftar Pengguna</a>
            </center>

        </div>
        <div class="active">
            <center>
                <a href="senaraiWayang.php">Senarai Wayang</a>
            </center>
        </div>
        <div class = "items">
            <center>
                <a href="menu.php">Penempahan Wayang</a>
            </center>

        </div>
    </div>

    <div class="main" style="width: 80%;">
        <div class="reg-container">
            <div class="title">
                Senarai Wayang
            </div>
            <div class="Pg">
                <se
            </div>
            <table style="margin-top: 5%">
                <tr>
                    <th>Id Wayang</th>
                    <th>Nama Wayang</th>
                    <th>Masa Wayangan</th>
                    <th>No Bilik</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "xinemax");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM wayang";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["idWayang"]. "</td><td>" . $row["namaWayang"] . "</td><td>"
                            . $row["masaWayangan"] . "</td><td>" . $row["noBilik"];
                    }
                    echo "</table >";
                } else { echo "0 results"; }
                $conn->close();
                ?>
            </table>

    </div>

</body>
</html>