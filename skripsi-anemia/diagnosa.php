<?php
include "connect.php";
session_start();
ob_start(); 
unset($_SESSION['nama_penyakit']);
unset($_SESSION['nilai_cf']);
unset($_SESSION['srn_penyakit']);
unset($_SESSION['gejala']);
unset($_SESSION['pilihan_kondisi']);
if(!isset($_SESSION['nama'])){
  header('location:formKonsultasi.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anima</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="assets/css/diagnosa.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<?php include 'Navbar.php';?>
<div class="title-section">
  <h2>Diagnosa Penyakit Anemia</h2>
  <hr size="2" width="65%" color="black" style="margin-bottom:10px;margin-left:auto;margin-right:auto;" > 
    <p class="note">Pilih tingkat keyakinan anda terhadap gejala yang sedang dirasakan dan tekan tombol submit (<i class="fas fa-search"></i>) untuk melihat hasil diagnosa</p>
</div>
<div class="container mt-5">
<form name=text_form method="POST" action ="diagnosa.php">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width:70%">Nama Gejala</th>
      <th scope="col" style="width:20%">Tingkat Keyakinan</th>
    </tr>
  </thead>
  <tbody class="pilihTingkat">
  <?php
  $sql = mysqli_query($con, "Select * from tbl_gejala order by id_gejala");
  $i = 0;
  while($arr = mysqli_fetch_array($sql)){
    $i++;
    echo "<tr><td class=no>$i</td>";
    echo "<td class=gejala>$arr[nama_gejala]</td>";
    echo '<td class="opsi"><select name="pilihan[]" id="pl' . $i . '" class="opsiTingkat"/>'; ?>
      <option id="0" style="color:black" value="0" >Pilih yang sesuai</option>
      <option id="1" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 1; ?>">Sangat Yakin</option>
      <option id="2" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 2; ?>">Yakin</option>
      <option id="3" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 3; ?>">Cukup Yakin</option>
      <option id="4" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 4; ?>">Kurang Yakin</option>
      <option id="5" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 5; ?>">Tidak Tahu</option>
      <option id="6" style="color:black" value="<?php echo $arr['id_gejala'] . '_' . 6; ?>">Tidak</option>
      <?php
      echo '</select></td>';
      ?>
      <script type="text/javascript">
          $(document).ready(function () {
            var arrColor = new Array('black', 'green', 'blue', '#8B8000', 'purple', 'brown','red');
            setColor();
            $('.pilihTingkat').on('change', 'select#pl<?php echo $i;?>', function() {
              setColor();
            });
            function setColor()
            {
              var selectedItem = $('select#pl<?php echo $i; ?> :selected');
              var color = arrColor[selectedItem.attr("id")];
              $('select#pl<?php echo $i; ?>.opsiTingkat').css('color', color);
            }
          });
        </script>
      <?php
      echo "</tr>"; 
  }?> 
</tbody>
</table>
</div>
<button type="submit" class="btn-kondisi" name="submit"><i class="fas fa-search"></i></button>
</form>
</div>
<?php include 'footer.php'; ?>
<?php
if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Jakarta");
    $tanggalDiagnosa = date('Y-m-d');
    $arrBobot = array('0', '1', '0.8', '0.6', '0.4','0.2', '0');
    // $arcolor = array('black', 'red', 'blue', 'green', 'purple', 'brown');
    $arrGejala = array();

    for ($i = 0; $i < count($_POST['pilihan']); $i++) {
      $arrPilihan = explode("_", $_POST['pilihan'][$i]);
      if (strlen($_POST['pilihan'][$i]) > 1) {
        $arrGejala += array($arrPilihan[0] => $arrPilihan[1]);
      }
    }

    if(count($arrGejala) < 1){
      echo '<script type="text/javascript">';
      echo 'swal({
                    title: "Error!",
                    text: "Pilih Setidaknya 1 Tingkat Keyakinan Dari Gejala Yang Sedang Anda Dirasakan",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                })';
           
                echo '</script>';
                die();
                            
    }else{
    $arrPilihanText[1] = "Sangat Yakin";
    $arrPilihanText[2] = "Yakin";
    $arrPilihanText[3] = "Cukup Yakin";
    $arrPilihanText[4] = "Kurang Yakin";
    $arrPilihanText[5] = "Tidak Tahu";
    $arrPilihanText[6] = "Tidak";
    

//  Implementasi certainty factor (CF)
    $arrPenyakit = array();
    $sqlPenyakit = mysqli_query($con, "SELECT * FROM tbl_penyakit");
    while ($rowPenyakit = mysqli_fetch_array($sqlPenyakit)) {
      $cf = 0;
      $cfGabungan = 0;
      $sqlRule = mysqli_query($con, "SELECT * FROM tbl_rule where id_penyakit=$rowPenyakit[id_penyakit]");
      while ($rowRule = mysqli_fetch_array($sqlRule)) {
        for ($i = 0; $i < count($_POST['pilihan']); $i++) {
          $arrPilihan = explode("_", $_POST['pilihan'][$i]);
          if ($rowRule['id_gejala'] == $arrPilihan[0]) {
            $cf = ($rowRule['mb'] - $rowRule['md']) * $arrBobot[$arrPilihan[1]];
            $cfGabungan = $cfGabungan + ($cf * (1 - $cfGabungan)); 
          }
        }
      }
        $arrPenyakit += array($rowPenyakit['id_penyakit'] => number_format($cfGabungan, 4));
    }
    arsort($arrPenyakit);


    $sqlPenyakit2 = mysqli_query($con, "SELECT * FROM tbl_penyakit order by id_penyakit");
    while ($rowPenyakit = mysqli_fetch_array($sqlPenyakit2)) {
      $arrNamaPenyakit[$rowPenyakit['id_penyakit']] = $rowPenyakit['nama_penyakit'];
      $arrSaranPenyakit[$rowPenyakit['id_penyakit']] = $rowPenyakit['srn_penyakit'];
    }

    
    $np = 0;
    foreach ($arrPenyakit as $key => $value) {
      $np++;
      $idPenyakit[$np] = $key;
      $namaPenyakit[$np] = $arrNamaPenyakit[$key];
      $saranPenyakit[$np] = $arrSaranPenyakit[$key];
      $valueCFPenyakit[$np] = $value;
    }
    
    

      $nama = $_SESSION["nama"];
      $umur = $_SESSION["umur"];
      $jenis = $_SESSION["jenis"];
      $domisili = $_SESSION["domisli"];
      $_SESSION["nama_penyakit"] = $namaPenyakit[1];
      $_SESSION["nilai_cf"] = $valueCFPenyakit[1];
      $_SESSION["srn_penyakit"] = $saranPenyakit[1];
      $_SESSION["gejala"] = $arrGejala;
      $_SESSION["pilihan_tingkat"] = $arrPilihanText;

      if($valueCFPenyakit[1] == 0){
        $namaPenyakit[1] = "Tidak Anemia";
      }

      mysqli_query($con, "insert into tbl_history(
        nama_user,
        umur,
        jenis_kelamin,
        domisili,
        tanggal_diagnosa,
        hasil_diagnosa,
        nilai_cf
      ) 
      values(
      '$nama',
      '$umur',
      '$jenis',
      '$domisili',
      '$tanggalDiagnosa',
      '$namaPenyakit[1]',
      '$valueCFPenyakit[1]'
      )");
        // echo '<script type = "text/javascript">';
        // echo 'window.location.href = "HasilDiagnosa.php"';
        // echo '</script>';
        header("Location: HasilDiagnosa.php");
      }
}
?>
</body>
</html>

