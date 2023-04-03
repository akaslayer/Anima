<?php
include '../../connect.php';
session_start();
if (isset($_SESSION['carigejala'])) {
  unset($_SESSION['carigejala']);
}
if(isset($_POST['submit'])){
  $gejala=$_POST['gejala'];
  $sql="insert into tbl_gejala(nama_gejala) values('$gejala')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Gejala Inserted Successfully";
    header('location:DisplayGejala.php');
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
    <link href="../../assets/css/gejala.css" rel="stylesheet">
  </head>
  <body>
  <?php include("../sidebar.php");?>
  <div class="container_rule">
  <form method="post">
  <h1>Tambah Gejala Baru</h1>
  <div class="mb-2 mt-3">
    <label>Nama Gejala<i style="color:red;">*</i></label>
    <input type="text" class="form-control" name="gejala" autocomplete="off">
  </div>
  <div class="RuleButton">
    <a href="./DisplayGejala.php"><input class="btn btn-danger" type="button" value="Cancel"/></a>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
    </div>
    
  </body>
</html>