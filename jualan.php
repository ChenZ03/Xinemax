<?php

session_start();


    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
        die();
    }

$connect = mysqli_connect('localhost', 'root', '', 'xinemax');

$s = "SELECT SUM(jumlahHarga) AS 'Jumlah' from tiket ";
$s2 = "SELECT idWayang, SUM(jumlahHarga) AS 'Jumlah' FROM tiket GROUP BY idWayang";

if (isset($_POST['query'])){
    $bulan = (int)$_POST['query'];
    $_SESSION['bulan'] = $bulan;
    if($bulan == 0){
        $s = "SELECT SUM(jumlahHarga) AS 'Jumlah' from tiket ";
        $s2 = "SELECT idWayang, SUM(jumlahHarga) AS 'Jumlah' FROM tiket GROUP BY idWayang";
    }
    else{
        $s = "SELECT SUM(jumlahHarga) AS 'Jumlah' from tiket WHERE EXTRACT(MONTH FROM tarikhJualan) = $bulan";
        $s2 = "SELECT idWayang, SUM(jumlahHarga) AS 'Jumlah' FROM tiket WHERE EXTRACT(MONTH FROM tarikhJualan) = $bulan GROUP BY idWayang";

    }


}

$result = mysqli_query($connect, $s);
while($data = mysqli_fetch_assoc($result)){
    $jumlah = $data['Jumlah'];
    $_SESSION['Jumlah'] = $jumlah;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUALAN</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9387647be6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="pendaftaran.css">
    <link rel="icon" href="./X.png">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['Wayang', 'Jualan(RM)'],
                <?php
                $z = mysqli_query($connect, $s2);
                while($result = mysqli_fetch_assoc($z)){
                    echo"['".$result['idWayang']."', ".$result['Jumlah']."],";
                }
                ?>
            ]);
            var options = {
                title: 'JUALAN WAYANG XINEMAX',
                width: 1200,
                legend: { position: 'none' },
                chart: { title: 'Jualan Wayang Xinemax',
                    subtitle: 'jumlah jualan mengikut wayang' },
                bars: 'horizontal', // Required for Material Bar Charts.
                axes: {
                    x: {
                        0: { side: 'top', label: 'Jualan'} // Top x-axis.
                    }
                },
                bar: { groupWidth: "90%" }
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            chart.draw(data, options);
        };
    </script>
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
        <div class = "active">
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
                JUALAN XINEMAX
            </div>
                <div class="query" style="margin-top: 1%;">
                    <h5>Sila Pilih bulan jualan :</h5>
                    <form method="post" action="">
                        <select name="query" required>
                            <option><?php
                                if (isset($_POST['query'])){
                                    echo $bulan;
                                }else{
                                    echo "All";
                                }
                                ?></option>
                            <option value="0">ALL</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">July</option>
                            <option value="8">Ogos</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Disember</option>
                        </select>
                        <button type="submit" class="btn-primary">TERUSKAN</button>
                    </form>
                    <center>
                        <div class="jualan" style="margin-top: 1%; font-size: 24px">
                            <?php if (isset($_POST['query'])){
                                if ($bulan == 0) {
                                    echo "Jualan Bagi Setahun " ;
                                }else{
                                    echo "Jualan Bagi Bulan : ". $bulan;
                                }
                            }else{
                                echo "Jualan Bagi Setahun " ;
                            }
                            ?>

                        </div>
                    </center>

                </div>
            <div id="top_x_div" style="width: 900px; height: 500px; margin-top: 2%;"></div>
            <center>
                <h5 style="margin-top: 2%"><?php echo "JUMLAH : RM" . $jumlah; ?></h5>
            </center>
            <form action="jualanReport.php" method="post">
                <div class="middle">
                    <input type="submit" name="export" class="btn" value="MUAT TURUN REPORT JUALAN" />
                </div>
            </form>
        </div>
    </div>

</body>
</html>