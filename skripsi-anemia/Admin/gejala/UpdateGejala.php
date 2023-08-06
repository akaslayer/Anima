<?php
include '../../connect.php';
session_start();
if (isset($_SESSION['carigejala'])) {
  unset($_SESSION['carigejala']);
}
$id=$_GET['gejalaid'];
$sql="Select * from tbl_gejala where id_gejala=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$gejala=$row['nama_gejala'];


if(isset($_POST['submit'])){
  $gejala=$_POST['gejala'];
  $sql="update tbl_gejala set id_gejala='$id',nama_gejala='$gejala' where id_gejala=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:DisplayGejala.php');
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../../assets/css/gejala.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
  <?php include("../sidebar.php");?>
  <div class="container_rule">
  <form method="post">
  <h1><i style="margin-right:10px;" class="fa fa-book"></i>Ubah Gejala Penyakit Anemia</h1>
  <div class="mb-2 mt-3">
    <label>Nama Gejala<i style="color:red;">*</i></label>
    <input type="text" class="form-control" name="gejala" autocomplete="off" value="<?php echo $gejala;?>">
  </div>
  <div class="RuleButton">
    <a href="./DisplayGejala.php"><input class="btn btn-danger" type="button" value="Cancel"/></a>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </div>
</form>
    </div>
    
  </body>
</html>