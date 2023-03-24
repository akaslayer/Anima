<?php
session_start();
include './connect.php';
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
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="assets/css/login.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>
    <?php include 'Navbar.php'; ?>
       
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <img src="" alt="">
                        <div class="text">
                            <!-- <p>Anima</p> -->
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <h2>Login Admin</h2>
                            <form action = "login.php" method="post">
                            <div class="input-field">
                                <input type = "text" class="input" name ="username" required>
                                <label for="username">Username</label> 
                            </div>
                            <div class="input-field">
                                <input type ="password" class="input"  name ="password" required>
                                <label for="username">Password</label>
                                
                            </div>
                            <div class="input-field">
                                <input id="button_submit" type="submit"  name="submit" class="submit" value ="Login">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password = md5($password);

                $select = mysqli_query($con, "select * from tbl_admin where username ='$username' AND password = '$password'");
                $row = mysqli_fetch_array($select);
                if(is_array($row)){
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["password"] = $row['password'];
                }else{
                    echo '<script type = "text/javascript">';
                    // echo 'swal("Error!", "Invalid Username or Password", "warning");';
                    echo 'swal({
                        title: "Error!",
                        text: "Invalid Username or Password",
                        type: "warning",
                        timer: 2000,
                        showConfirmButton: false
                      })';
                    echo '</script>';
                }
                if(isset($_SESSION['username'])){
                    echo '<script type="text/javascript">';
                    echo 'swal({
                        title: "Success!",
                        text: "Login Succesfully",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                      },';
                    echo 'function(){';
                    echo 'window.location.href = "./admin/home/Dashboard.php"; })';
                    echo '</script>';
                }
            }
            ?>
  <?php include 'footer.php'; ?>
    </body>
</html>

