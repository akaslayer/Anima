<?php
include '../../connect.php';
session_start();
if (isset($_SESSION['caripenyakit'])) {
  unset($_SESSION['caripenyakit']);
}
if(isset($_POST['submit'])){
  $penyakit=$_POST['penyakit'];
  $saran=$_POST['saran'];
  $sql="insert into tbl_penyakit(nama_penyakit,srn_penyakit) values('$penyakit','$saran')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Gejala Inserted Successfully";
    header('location:DisplayPenyakit.php');
  }else{
    die(mysqli_error($con));
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
    <link href="../../assets/css/penyakit.css" rel="stylesheet">
  </head>
  <body>
  <?php include("../sidebar.php");?>
  <div class="container_rule">
  <form method="post">
  <h1>Add New Diseases</h1>
  <div class="mb-2 mt-4">
    <label>Nama Penyakit<i style="color:red;">*</i></label>
    <input type="text" class="form-control" name="penyakit" autocomplete="off">
  </div>
  <div class="mb-2 mt-4">
    <label>Saran Penyakit<i style="color:red;">*</i></label>
    <textarea class="form-control" name="saran" autocomplete="off" rows="5"></textarea>
  </div>
  <div class="RuleButton">
    <a href="./DisplayPenyakit.php"><input class="btn btn-danger" type="button" value="Cancel"/></a>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
    </div>
    
  </body>
</html>