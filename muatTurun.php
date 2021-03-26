<?php
//export.php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: index.php");
    die();
}

$connect = mysqli_connect("localhost", "root", "", "xinemax");

$output = '';

if(isset($_POST["export"]))
{
    $query = "SELECT * FROM pengguna";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID Pengguna</th>  
                         <th>Nama  </th>  
                         <th>Kata Laluan</th>  
                         <th>Telefon </th>
                         <th>Jenis Pengguna </th>
                    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
    <tr>  
                         <td>'.$row["idPengguna"].'</td>  
                         <td>'.$row["nama"].'</td>  
                         <td>'.$row["kataLaluan"].'</td>  
                         <td>'.$row["telefon"].'</td>  
                         <td>'.$row["jenis"].'</td>  
                    </tr>
   ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SenaraiPekerja.xls');
        echo $output;
    }
}
?>