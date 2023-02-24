<?php
include '../../connect.php';
session_start();
if (isset($_SESSION['cari'])) {
  unset($_SESSION['cari']);
}
if(isset($_POST['submit'])){
  $penyakit =$_POST['penyakit'];
  $gejala=$_POST['gejala'];
  $mb=$_POST['mb'];
  $md=$_POST['md'];
  $sql="insert into basis_pengetahuan(kode_penyakit,kode_gejala,mb,md) values('$penyakit','$gejala','$mb','$md')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Gejala Inserted Successfully";
    header('location:DisplayRule.php');
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../../assets/css/rule.css" rel="stylesheet">
  </head>
  <body>
  <?php include("../sidebar.php");?>
  <div class="container_rule">
  
  <form method="post">
  <h1>Add New Rules</h1>
  <div class="rules mb-2 mt-5">
    <label>Penyakit<i style="color:red;">*</i></label>
    <select  name="penyakit" id="penyakit" required>
        <option value="">--Pilih Penyakit--</option>
        <?php
            $sql_penyakit = mysqli_query($con, "Select * from penyakit") or die(mysqli_error($con));
            while($data_penyakit = mysqli_fetch_array($sql_penyakit)){
                echo '<option value="'.$data_penyakit['kode_penyakit'].'">'.$data_penyakit['nama_penyakit'].'</option>';
            }
        ?>  
    </select>
  </div>
  <div class="mb-2 mt-4">
    <label>Gejala<i style="color:red;">*</i></label>
    <select  name="gejala" id="gejala" required>
        <option value="">--Pilih Gejala--</option>
        <?php
            $sql_gejala = mysqli_query($con, "Select * from gejala") or die(mysqli_error($con));
            while($data_gejala = mysqli_fetch_array($sql_gejala)){
                echo '<option value="'.$data_gejala['kode_gejala'].'">'.$data_gejala['nama_gejala'].'</option>';
            }
        ?>  
    </select>
  </div>
  <div class="mb-2 mt-4">
    <label>MB<i style="color:red;">*</i></label>
    <input type="number" class="form-control" step="any" max="1"  min="0" name="mb" autocomplete="off" required>
  </div>
  <div class="mb-2 mt-4">
    <label>MD<i style="color:red;">*</i></label>
    <input type="number" class="form-control" step="any"  max="1"  min="0" name="md" autocomplete="off" required>
  </div>
  <div class="RuleButton">
    <a href="./DisplayRule.php"><input class="btn btn-danger" type="button" value="Cancel"/></a>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
    </div>
  </body>
</html>