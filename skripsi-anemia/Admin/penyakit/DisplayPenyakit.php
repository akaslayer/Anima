<?php
include '../../connect.php';
session_start();

if ((isset($_SESSION['cari'])) ||(isset($_SESSION['carigejala'])) || (isset($_SESSION['carihistory']))) {
    unset($_SESSION['cari']);
    unset($_SESSION['carigejala']);
    unset($_SESSION['carihistory']);
}
if(isset($_POST['tombolcari'])){
    $caripenyakit = $_POST['caripenyakit'];
    $_SESSION['caripenyakit'] = $caripenyakit;
}elseif (!isset($_SESSION['caripenyakit'])){
    $caripenyakit = '';
}else{
    $caripenyakit = $_SESSION['caripenyakit'];
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
    <link href="../../assets/css/admin.css" rel="stylesheet">
  </head>
  <body>
    <?php include("../sidebar.php");?>
    <div class="container">
    <h1 class="judul">Daftar Penyakit</h1>
        <div class="searchAndRule">
        <button id="rule_btn"><a href="AddPenyakit.php"  style="text-decoration: none;color:white;">Tambah Penyakit<i class="fa fa-plus" style="margin-left:10px"></i></a></button>
            <div class="search_rule" style="float:right">
            <form method="POST" action="DisplayPenyakit.php">
                    <input type="text" name="caripenyakit" placeholder="Nama Penyakit" autofocus value="<?php echo $caripenyakit; ?>">
                    <button id="cari_btn" type="submit" name="tombolcari"><i class="fa fa-search" aria-hidden="true" style="margin-right:5px"></i>Cari</button>
                                           
            </form>
            </div>
        </div>
        <div style="overflow-x:auto;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width:25%">Nama Penyakit</th>
      <th scope="col" style="width:55%">Disarankan</th>
      <th scope="col" style="width:15%">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $ambildata = mysqli_query($con,"Select * from tbl_penyakit where nama_penyakit LIKE '%$caripenyakit%'");
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
    $ambildata_perhalaman = mysqli_query($con,"Select * from tbl_penyakit where nama_penyakit LIKE '%$caripenyakit%'");
    $nomor = 0 + $dataAwal;
    if($ambildata_perhalaman){
        while($row=mysqli_fetch_assoc($ambildata_perhalaman)){
            $nomor++;
            $id=$row['id_penyakit'];
            $penyakit=$row['nama_penyakit'];
            $saran =$row['srn_penyakit'];
            echo '<tr>
                    <td scope="row" style="text-align: center;">'.$nomor.'</td>
                    <td>'.$penyakit.'</td>
                    <td>'.$saran.'</td>
                    <td style="text-align: center;">
                    <button id="update"><a href="UpdatePenyakit.php?penyakitid='.$id.'"  style="text-decoration: none"><i class="fa fa-edit"></i></a></button>
                    <button id="delete"><a href="DeletePenyakit.php?penyakitid='.$id.'"  style="text-decoration: none"><i class="fa fa-trash" aria-hidden="true"></i></a></button> 
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
  </body>
</html>