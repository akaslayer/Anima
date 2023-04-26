<?php
include './connect.php';
session_start();
ob_start(); 
unset($_SESSION['nama']);
unset($_SESSION['umur']);
unset($_SESSION['jenis']);
unset($_SESSION['domisili']);
unset($_SESSION['nama_penyakit']);
unset($_SESSION['nilai_cf']);
unset($_SESSION['srn_penyakit']);
unset($_SESSION['gejala']);
unset($_SESSION['pilihan_kondisi']);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anima</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="assets/css/formKonsultasi.css" rel="stylesheet">
        
    </head>
    <body>
    <?php include 'Navbar.php'; ?>
        <div class="container">
            <form action = "formKonsultasi.php" method="post">
                <h2 style="margin-bottom:30px;">Form Diagnosa</h2>
                <div class="mb-2 mt-4">
                    <label>Nama Pasien</label>
                    <input type = "text"  name = "nama"  required>
                </div>
                <div class="mb-2 mt-4">
                <label>Usia Pasien</label>
                    <input type = "number"  name ="umur"  required>
                </div>
                <div class="mb-2 mt-4">
                <label>Jenis Kelamin</label>
                <select name="jenis" id="jenis">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
                <div class="mb-2 mt-4">
                <label>Domisili</label>
                <input type = "text"  name = "domisili"  required>
                </div>
                <input  id="btn_submit"type ="submit"  name="submit" value ="Submit">
            </form>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jenis = $_POST['jenis'];
                $domisili = $_POST['domisili'];
                $_SESSION["nama"] = $nama;
                $_SESSION["umur"] = $umur;
                $_SESSION["jenis"] = $jenis;
                $_SESSION["domisli"] = $domisili;
                header('location:diagnosa.php');
            }
            ?>
  <?php include 'footer.php'; ?>
    </body>
</html>

