<?php
include '../../connect.php';
session_start();
if ((isset($_SESSION['carigejala'])) || (isset($_SESSION['caripenyakit'])) || (isset($_SESSION['cari'])) ) {
    unset($_SESSION['carigejala']);
    unset($_SESSION['cari']);
    unset($_SESSION['caripenyakit']);
}
if(isset($_POST['tombolcari'])){
    $carihistory = $_POST['carihistory'];
    $_SESSION['carihistory'] = $carihistory;
}elseif (!isset($_SESSION['carihistory'])){
    $carihistory = '';
}else{
    $carihistory = $_SESSION['carihistory'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link href="../../assets/css/history.css" rel="stylesheet">
  </head>
  <body>
    <?php include("../sidebar.php");?>
    <div class="container">
        <div class="searchAndRule">
        <button id="history_btn"><a href="Export.php" style="color:white;"><i style="margin-right:5px"class="fa fa-download"></i>Export</a></button>
            <div class="search_rule" style="float:right">
            <form method="POST" action="DisplayHistory.php">
                    <input type="text" name="carihistory" placeholder="Search Name" autofocus value="<?php echo $carihistory; ?>">
                    <button id="cari_btn" type="submit" name="tombolcari"><i class="fa fa-search" aria-hidden="true" style="margin-right:5px"></i>Search</button>                      
            </form>
            </div>  
        </div>
        <div style="overflow-x:auto;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col" width="10%">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Umur</th>
      <th scope="col">Domisili</th>
      <th scope="col">Hasil</th>
      <th scope="col" width="7%">CF</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $ambildata = mysqli_query($con,"Select * from tbl_history where nama_user LIKE '%$carihistory%'");
    $jumlahData = 10;
    $totalData = mysqli_num_rows($ambildata);
    $jumlahPagination = ceil($totalData / $jumlahData);
    
    if(isset($_GET['halaman'])){
        $halamanAktif = $_GET['halaman'];
    }else{
        $halamanAktif=1;
    }
    
    $dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;
    $jumlahLink=2;
    if($halamanAktif > $jumlahLink){
        $start_number = $halamanAktif - $jumlahLink;
    }else{
        $start_number = 1;
    }
    
    if($halamanAktif < ($jumlahPagination - $jumlahLink)){
        $end_number = $halamanAktif + $jumlahLink;
    }else{
        $end_number = $jumlahPagination;
    }
    $ambildata_perhalaman = mysqli_query($con,"Select * from tbl_history where nama_user LIKE '%$carihistory%' LIMIT $dataAwal, $jumlahData");
    $nomor = 0 + $dataAwal;
    if($ambildata_perhalaman){
        while($row=mysqli_fetch_assoc($ambildata_perhalaman)){
            $nomor++;
            $id=$row['id_history'];
            $tanggal=$row['tanggal_diagnosa'];
            $nama=$row['nama_user'];
            $jenis=$row['jenis_kelamin'];
            $umur=$row['umur'];
            $domisili=$row['domisili'];
            $penyakit=$row['hasil_diagnosa'];
            $cf =$row['nilai_cf'];
            echo '<tr>
                    <td scope="row" style="text-align: center;">'.$nomor.'</td>
                    <td style="text-align: center;">'.$tanggal.'</td>
                    <td style="text-align: center;">'.$nama.'</td>
                    <td style="text-align: center;">'.$jenis.'</td>
                    <td style="text-align: center;">'.$umur.'</td>
                    <td style="text-align: center;">'.$domisili.'</td>
                    <td style="text-align: center;">'.$penyakit.'</td>
                    <td style="text-align: center;">'.$cf.'</td>
                    <td style="text-align: center;">
                    <button id="delete"><a href="DeleteHistory.php?historyid='.$id.'"  style="text-decoration: none"><i class="fa fa-trash" aria-hidden="true"></i></a></button> 
                    </td>
                 </tr>';
        }
    }
    ?>
  </tbody>
</table>
</div>
<div class="pagination" style="float:right;">
    <?php if ($halamanAktif > 1): ?>
        <a href="?halaman=<?php echo $halamanAktif - 1 ?>">
            &laquo;
        </a>
    <?php endif; ?>
    <?php for($i=$start_number; $i <= $end_number ; $i++): ?>
        <?php if($halamanAktif == $i): ?>
            <a href="?halaman= <?php echo  $i;?>" style="color:white;background-color:#0275d8;font-weight:bold;">
                <?php echo  $i;?>
            </a>

        <?php else: ?>
            <a href="?halaman= <?php echo  $i;?>">
                <?php echo  $i;?>
            </a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahPagination): ?>
        <a href="?halaman=<?php echo $halamanAktif + 1 ?>">
            &raquo;
        </a>
    <?php endif; ?>
    </div>
    </div>
    </div>
  </body>
</html>