<?php
session_start();

if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}
$connect = mysqli_connect("localhost", "root", "", "xinemax");
$output = '';
if ($_SESSION['bulan']){
    $bulan = $_SESSION['bulan'];
}
else{
    $bulan = 0;
}
if(isset($_POST["export"]))
{

    if ($bulan == 0){
        $query = "SELECT idWayang, SUM(jumlahHarga) AS 'Jumlah' FROM tiket GROUP BY idWayang";
        $output .= "Jualan Bagi Setahun" ;
    }else{
        $query = "SELECT idWayang, SUM(jumlahHarga) AS 'Jumlah' FROM tiket WHERE EXTRACT(MONTH FROM tarikhJualan) = $bulan GROUP BY idWayang";
        $output .= "Jualan Bagi Bulan" . $_SESSION['bulan'];
    }

    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Wayang</th>  
                         <th>Jumlah Jualan</th>  
                         
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>  
                         <td>'.$row["idWayang"].'</td>  
                         <td>'.$row["Jumlah"].'</td>  
                    </tr>
   ';
        }
        $output .= '</table>';
        $output .= "\n";
        $output .= "Jumlah : ". $_SESSION['Jumlah'];
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Jualan.xls');
        echo $output;
    }
}
?>