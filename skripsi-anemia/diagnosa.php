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
        <title>Bootstrap demo</title>
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
    <p class="note">Pilih tingkat keyakinan anda terhadap gejala yang sedang dirasakan dan tekan tombol submit (<i class="fas fa-search"></i>) untuk melihat hasil</p>
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
  while($r = mysqli_fetch_array($sql)){
    $i++;
    echo "<tr><td class=no>$i</td>";
    echo "<td class=gejala>$r[nama_gejala]</td>";
    echo '<td class="opsi"><select name="pilihan[]" id="pl' . $i . '" class="opsiTingkat"/><option id="0" value="0" style="color:black">Pilih jika sesuai</option>';?>
      <option id="1" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 1; ?>">Sangat Yakin</option>
      <option id="2" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 2; ?>">Yakin</option>
      <option id="3" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 3; ?>">Cukup Yakin</option>
      <option id="4" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 4; ?>">Kurang Yakin</option>
      <option id="5" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 5; ?>">Tidak Tahu</option>
      <option id="6" style="color:black" value="<?php echo $r['id_gejala'] . '_' . 6; ?>">Tidak</option>
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

    if(empty($arrGejala)){
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
    

    $sqlpkt = mysqli_query($con, "SELECT * FROM tbl_penyakit order by id_penyakit");
    while ($rpkt = mysqli_fetch_array($sqlpkt)) {
      $arpkt[$rpkt['id_penyakit']] = $rpkt['nama_penyakit'];
      $arspkt[$rpkt['id_penyakit']] = $rpkt['srn_penyakit'];
    }

// -------- perhitungan certainty factor (CF) ---------
// --------------------- START ------------------------
    $sqlpenyakit = mysqli_query($con, "SELECT * FROM tbl_penyakit order by id_penyakit");
    $arrPenyakit = array();
    while ($rpenyakit = mysqli_fetch_array($sqlpenyakit)) {
      $cf = 0;
      $cfGabungan = 0;
      $sqlgejala = mysqli_query($con, "SELECT * FROM tbl_rule where id_penyakit=$rpenyakit[id_penyakit]");
      while ($rgejala = mysqli_fetch_array($sqlgejala)) {
        $arrPilihan = explode("_", $_POST['pilihan'][0]);
        $gejala = $arrPilihan[0];
        for ($i = 0; $i < count($_POST['pilihan']); $i++) {
          $arrPilihan = explode("_", $_POST['pilihan'][$i]);
          $gejala = $arrPilihan[0];
          if ($rgejala['id_gejala'] == $gejala) {
            $cf = ($rgejala['mb'] - $rgejala['md']) * $arrBobot[$arrPilihan[1]];
            $cfGabungan = $cfGabungan + ($cf * (1 - $cfGabungan)); 
          }
        }
      }
      if ($cfGabungan > 0) {
        $arrPenyakit += array($rpenyakit['id_penyakit'] => number_format($cfGabungan, 4));
      }
    }
    arsort($arrPenyakit);
    $np = 0;
    foreach ($arrPenyakit as $key => $value) {
      $np++;
      $idpkt[$np] = $key;
      $nmpkt[$np] = $arpkt[$key];
      $vlpkt[$np] = $value;
    }

      $nama = $_SESSION["nama"];
      $umur = $_SESSION["umur"];
      $jenis = $_SESSION["jenis"];
      $domisili = $_SESSION["domisli"];
      $_SESSION["nama_penyakit"] = $nmpkt[1];
      $_SESSION["nilai_cf"] = $vlpkt[1];
      $_SESSION["srn_penyakit"] = $arspkt[$idpkt[1]];
      $_SESSION["gejala"] = $arrGejala;
      $_SESSION["pilihan_kondisi"] = $arrPilihanText;

      if(empty( $_SESSION["nama_penyakit"]) ){
        $nmpkt[1] = "Tidak Anemia";
      }

      mysqli_query($con, "INSERT INTO tbl_history(
        nama_user,
        umur,
        jenis_kelamin,
        domisili,
        tanggal_diagnosa,
        hasil_diagnosa,
        nilai_cf
      ) 
      VALUES(
      '$nama',
      '$umur',
      '$jenis',
      '$domisili',
      '$tanggalDiagnosa',
      '$nmpkt[1]',
      '$vlpkt[1]'
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

