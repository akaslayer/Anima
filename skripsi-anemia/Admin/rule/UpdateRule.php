<?php
include '../../connect.php';
session_start();
if (isset($_SESSION['cari'])) {
  unset($_SESSION['cari']);
}
$id=$_GET['ruleid'];
$sql="Select * from tbl_rule rl, tbl_penyakit p, tbl_gejala g where rl.id_rule=$id AND rl.id_penyakit=p.id_penyakit AND rl.id_gejala = g.id_gejala";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$kode_penyakit =$row['id_penyakit'];
$kode_gejala =$row['id_gejala'];
$penyakit=$row['nama_penyakit'];
$gejala=$row['nama_gejala'];
$mb=$row['mb'];
$md=$row['md'];


if(isset($_POST['submit'])){
  $penyakit =$_POST['penyakit'];
  $gejala=$_POST['gejala'];
  $mb=$_POST['mb'];
  $md=$_POST['md'];
  $sql="update tbl_rule set id_rule='$id',id_penyakit='$penyakit',id_gejala='$gejala',mb='$mb',md='$md' where id_rule=$id";
  $result=mysqli_query($con,$sql);
  if($result){
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
  <h1>Update Rule</h1>
  <div class="mb-2 mt-4">
    <label>Penyakit<i style="color:red;">*</i></label>
    <select name="penyakit" id="penyakit" required>
        <option value="<?php echo $kode_penyakit;?>"><?php echo $penyakit;?></option>
        <?php
            $sql_penyakit = mysqli_query($con, "Select * from tbl_penyakit") or die(mysqli_error($con));
            while($data_penyakit = mysqli_fetch_array($sql_penyakit)){
                echo '<option value="'.$data_penyakit['id_penyakit'].'">'.$data_penyakit['nama_penyakit'].'</option>';
            }
        ?>  
    </select>
  </div>
  <div class="mb-2 mt-4">
    <label>Gejala<i style="color:red;">*</i></label>
    <select name="gejala" id="gejala" required>
        <option value="<?php echo $kode_gejala;?>"><?php echo $gejala;?></option>
        <?php
            $sql_gejala = mysqli_query($con, "Select * from tbl_gejala") or die(mysqli_error($con));
            while($data_gejala = mysqli_fetch_array($sql_gejala)){
                echo '<option value="'.$data_gejala['id_gejala'].'">'.$data_gejala['nama_gejala'].'</option>';
            }
        ?>  
    </select>
  </div>
  <div class="mb-2 mt-4">
    <label>MB<i style="color:red;">*</i></label>
    <input type="number" class="form-control" step="any" max="1"  min="0" name="mb" autocomplete="off" value="<?php echo $mb;?>">
  </div>
  <div class="mb-2 mt-4">
    <label>MD<i style="color:red;">*</i></label>
    <input type="number" class="form-control" step="any" max="1" min="0" name="md" autocomplete="off" value="<?php echo $md;?>">
  </div>
  <div class="RuleButton">
    <a href="./DisplayRule.php"><input class="btn btn-danger" type="button" value="Cancel"/></a>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </div>
</form>
    </div>
    
  </body>
</html>