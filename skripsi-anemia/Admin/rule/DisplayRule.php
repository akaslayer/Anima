<?php
include '../../connect.php';
session_start();
if ((isset($_SESSION['carigejala'])) || (isset($_SESSION['caripenyakit']))) {
    unset($_SESSION['carigejala']);
    unset($_SESSION['caripenyakit']);
}
if(isset($_POST['tombolcari'])){
    $cari = $_POST['cari'];
    $_SESSION['cari'] = $cari;
}elseif (!isset($_SESSION['cari'])){
    $cari = '';
}else{
    $cari = $_SESSION['cari'];
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
        <div class="searchAndRule">
        <button id="rule_btn"><a href="AddRule.php" style="color:white;">Add Rule<i class="fa fa-plus" style="margin-left:10px"></i></a></button>
            <div class="search_rule" style="float:right">
            <form method="POST" action="DisplayRule.php">
                    <input type="text" name="cari" placeholder="Search Diseases" autofocus value="<?php echo $cari; ?>">
                    <button id="cari_btn" type="submit" name="tombolcari"><i class="fa fa-search" aria-hidden="true" style="margin-right:5px"></i>Search</button>                      
            </form>
            </div>  
        </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width:20%">Penyakit</th>
      <th scope="col" style="width:40%">Gejala</th>
      <th scope="col">MB</th>
      <th scope="col">MD</th>
      <th scope="col" style="width:15%">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $ambildata = mysqli_query($con,"Select * from tbl_rule rl, tbl_penyakit p, tbl_gejala g where rl.id_penyakit=p.id_penyakit AND rl.id_gejala=g.id_gejala AND p.nama_penyakit LIKE '%$cari%'");
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
    $ambildata_perhalaman = mysqli_query($con,"Select * from tbl_rule rl, tbl_penyakit p, tbl_gejala g where rl.id_penyakit=p.id_penyakit AND rl.id_gejala=g.id_gejala AND p.nama_penyakit LIKE '%$cari%' LIMIT $dataAwal, $jumlahData");
    $nomor = 0 + $dataAwal;
    if($ambildata_perhalaman){
        while($row=mysqli_fetch_assoc($ambildata_perhalaman)){
            $nomor++;
            $id=$row['id_rule'];
            $penyakit=$row['nama_penyakit'];
            $gejala =$row['nama_gejala'];
            $MB =$row['mb'];
            $MD =$row['md'];
            echo '<tr>
                    <td scope="row" style="text-align: center;">'.$nomor.'</td>
                    <td>'.$penyakit.'</td>
                    <td>'.$gejala.'</td>
                    <td style="text-align: center;">'.$MB.'</td>
                    <td style="text-align: center;">'.$MD.'</td>
                    <td style="text-align: center;">
                    <button id="update"><a href="UpdateRule.php?ruleid='.$id.'"  style="text-decoration: none">Update</a></button>
                    <button id="delete"><a href="DeleteRule.php?ruleid='.$id.'"  style="text-decoration: none">Delete</a></button> 
                    </td>
                 </tr>';
        }
    }
    ?>
  </tbody>
</table>
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