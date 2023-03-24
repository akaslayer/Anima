<?php
include "connect.php";
session_start();
// if(!isset($_POST['submit'])){
//   header("Location: diagnosa.php");
//   die();
// }
if(!isset($_SESSION['nama']) && !isset($_SESSION['nama_penyakit'])){
  header('location:diagnosa.php');
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
        <link href="assets/css/HasilDiagnosa.css" rel="stylesheet">
</head>
<body>
<?php include 'Navbar.php'; ?>
<div class="main-width">
  <div class="container" id="printableArea">

  <div class="title-section mt-3 mb-2 ">
      <h2>Hasil Diagnosa</h2>
  </div>
  <div class="dataPasien mt-3 mb-4">
    <table class="table">
      <thead>
        <tr>
          <th colspan="3" >Data Pasien</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td width="15%">Nama Pasien</td>
          <td width="3%" >:</td>
          <td><?php echo  $_SESSION["nama"]; ?></td>  
        </tr>
        <tr>
          <td width="20%">Umur</td>
          <td width="3%" >:</td>
          <td><?php echo $_SESSION["umur"] ?></td>
        </tr>
        <tr>
          <td width="15%">Jenis Kelamin</td>
          <td width="3%">:</td>
          <td><?php echo $_SESSION["jenis"] ?></td>
        </tr>
        <tr>
          <td width="15%">Domisili</td>
          <td width="3%" >:</td>
          <td><?php echo $_SESSION["domisli"] ?></td>
        </tr>
</tbody>
</table>
  </div>

    <div class="pilihanGejala mt-3 mb-4">
    <table class='table table-bordered '>
    <thead>
      <tr>
        <th width="10%">No</th>
        <th width="70%">Gejala yang dialami</th>
        <th width="20%">Pilihan</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    $ig = 0;
    if(empty($_SESSION["gejala"] )){
      echo '<tr></tr>';
    }
    else{
    foreach ($_SESSION["gejala"] as $key => $value) {
      $kondisi = $value;
      $ig++;
      $gejala = $key;
      $sql4 = mysqli_query($con, "SELECT * FROM tbl_gejala where id_gejala = '$key'");
      $r4 = mysqli_fetch_array($sql4);
      echo '<tr><td>' . $ig . '</td>';
      echo '<td>' . $r4['nama_gejala'] . '</td>';
      // echo '<td><span style="color:' . $arcolor[$kondisi] . '">' . $arkondisitext[$kondisi] . '</span></td></tr>';
      echo '<td><span>' . $_SESSION['pilihan_kondisi'][$kondisi]. '</span></td></tr>';
      }
    }
    ?>
    </tbody>
    </table>
    </div>


      <div class="jenisPenyakit mt-3 mb-4">
        <table class='table table-bordered'>
          <thead>
            <tr>
              <th width="100%">Jenis Penyakit yang diderita</th>
            </tr>
            </thead>
              <tbody>
                <tr>
                  <td>
                    <?php
                        if(empty( $_SESSION["nama_penyakit"]) ){
                          echo "<h5>Kamu tidak menderita penyakit anemia / 0% (0)</h5>";
                        }
                        else{
                            echo "<h5>" .  $_SESSION["nama_penyakit"] . " / " . round($_SESSION["nilai_cf"], 2) * 100 . " % (" . $_SESSION["nilai_cf"] . ")</h5>";
            
                        }
                    ?>
                </td>
              </tr>
            </tbody>
        </table>
      </div>



      <div class="saranPenyakit mt-3 mb-4">
        <table class='table table-bordered'>
          <thead>
              <tr>
                <th width="100%">Saran</th>
              </tr>
          </thead>
              <tbody>
                  <tr>
                  <?php
                        // if(empty($idpkt) || empty($arspkt) ){
                        //   echo "";
                        // }
                        // else{
                            echo "<td>" . $_SESSION["srn_penyakit"] . "</td>";
            
                        // }
                    ?>
                  </tr>
              </tbody>
        </table>
      </div>
    </div>
    <div class="btn-print">
        <button class="btn btn-sucess print" onclick="printDiv('printableArea')" id="print-btn"><i class="fa-solid fa-print"></i>Print</button>
    </div>
    <div class="btn-hasil">
        <a href="diagnosa.php"><input class="btn btn-primary retry" type="button" value="Konsultasi Lagi"/></a>
        <a href="index.php"><input class="btn btn-danger selesai"  type="button" value="Selesai"/></a>
    </div>
    </div>

    
  
    
    
    <?php include 'footer.php'; ?>
    <script>
      function printDiv(divName) 
      {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        var nav = document.querySelector("#navbar")
        window.addEventListener("scroll", ()=>{
        if(document.documentElement.scrollTop > 20){
          nav.classList.add("sticky");
        }else{
          nav.classList.remove("sticky");
        }
        });
        var hamburger = document.querySelector(".hamb");
        var navlist = document.querySelector(".nav-list");
        hamburger.addEventListener("click",function(){
        if(this.classList.contains("click")){
            this.classList.remove("click");
            navlist.classList.remove("open");
        }else{
            this.classList.add("click");
            navlist.classList.add("open");
          }
      });
    }
    </script>
</body>
</html>
