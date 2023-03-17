<?php
include '../../connect.php';
session_start();

if ((isset($_SESSION['carigejala'])) || (isset($_SESSION['caripenyakit'])) || (isset($_SESSION['cari']))) {
    unset($_SESSION['carigejala']);
    unset($_SESSION['caripenyakit']);
    unset($_SESSION['cari']);
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
    <link href="../../assets/css/Dashboard.css" rel="stylesheet">
  </head>
  <?php include("../sidebar.php");?>
  <body>
  <div class="container-fluid px-4">
    <h1 class="judul">Dashboard</h1>
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <?php
                        $dash_gejala_query = "select * from tbl_gejala";
                        $dash_gejala_query_run = mysqli_query($con,$dash_gejala_query);
                        if($gejala_total = mysqli_num_rows($dash_gejala_query_run)){
                            echo '<h3 class="mb-2"> '. $gejala_total .' </h3>';
                        }else{
                            echo '<h3 class="mb-2"> No Data </h3>';
                        }
                    ?>
                    <h2>Total Symptoms</h2>
                    <div class='icon'>
                    <i class="fa-solid fa-syringe"></i>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                <?php
                        $dash_penyakit_query = "select * from tbl_penyakit";
                        $dash_penyakit_query_run = mysqli_query($con,$dash_penyakit_query);
                        if($penyakit_total = mysqli_num_rows($dash_penyakit_query_run)){
                            echo '<h3 class="mb-2"> '. $penyakit_total .' </h3>';
                        }else{
                            echo '<h3 class="mb-2"> No Data </h3>';
                        }
                    ?>
                    <h2>Total Diseases</h2>
                    <div class='icon'>
                        <i class="fa-solid fa-disease mr-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                <?php
                        $dash_rule_query = "select * from tbl_rule";
                        $dash_rule_query_run = mysqli_query($con,$dash_rule_query);
                        if($rule_total = mysqli_num_rows($dash_rule_query_run)){
                            echo '<h3 class="mb-2"> '. $rule_total .' </h3>';
                        }else{
                            echo '<h3 class="mb-2"> No Data </h3>';
                        }
                    ?>
                    
                    <h2>Total Rules</h2>
                    <div class='icon'>
                    <i class="fa-solid fa-scale-balanced mr-2"></i>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-9 col-md-12">
            <div id="card_welcome"class="card mb-5" >
                <div class="card-body">
                    <h1>Welcome To</h1>
                    <h2 id="desc">Anemia Expert System Admin</h2>
                    <div class='ImageDash'>
                        <img id="dashboard" style="" src="./../../assets/images/dashboard.png"/>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
</body>
</html>

