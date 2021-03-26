<?php

session_start();
if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

$conn = mysqli_connect("localhost", "root", "", "xinemax");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM pengguna ORDER BY jenis";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENARAI PENGGUNA</title>
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
        <div class = "active">
            <center>
                <a href="senaraiPekerja.php">Senarai Pengguna</a>
            </center>

        </div>
        <div class="items">
            <center>
                <a href="pendaftaranPekerja.php">Daftar Pengguna</a>
            </center>

        </div>
        <div class="items">
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
                SENARAI PENGGUNA
            </div>
            <div class="Pg">
                <se
            </div>

                    <form action="kemaskini.php" method="post">
                        <table>
                            <tr>
                                <th>Id Pengguna</th>
                                <th>Nama</th>
                                <th>Kata Laluan</th>
                                <th>Telefon</th>
                                <th>Jenis Pengguna</th>
                                <th>Kemaskini Data</th>
                            </tr>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row["idPengguna"]; ?></td>
                                        <td><?php echo $row["nama"]; ?></td>
                                        <td><?php echo $row["kataLaluan"]; ?></td>
                                        <td><?php echo $row["telefon"]; ?></td>
                                        <td><?php echo $row["jenis"]; ?></td>
                                        <td><input type="submit" name="edit" value="<?php echo $row["idPengguna"]; ?>"
                                                   id="Kemaskini" class="btn-2"/>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>
                    </form>

            <form action="muatTurun.php" method="post">
                <div class="middle">
                    <input type="submit" name="export" class="btn" value="MUAT TURUN SENARAI PENGGUNA" />
                </div>
            </form>


        </div>
    </div>

</body>
</html>