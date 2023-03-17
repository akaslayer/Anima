<?php
session_start();
include './connect.php';
unset($_SESSION['nama']);
unset($_SESSION['umur']);
unset($_SESSION['jenis']);
unset($_SESSION['domisili']);
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
    </head>
    <body>
    <?php include 'Navbar.php'; ?>
        <div class="container">
            <form action = "login.php" method="post">
                <h2 style="margin-bottom:30px;">Login Admin</h2>
                <input type = "text"  name = "username" placeholder ="Username" required>
                <div class="icon">
                <span class="fa fa-user userspan"></span>
                </div>
                
                <input type = "password"  name ="password" placeholder ="Password" required>
                <div class="icon">
                <span class="fa fa-lock userspan"></span>
                </div>

                <input id="button_submit" type = "submit"  name="submit" value ="Login">
            </form>
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
                    echo 'alert("Invalid Username or Password");';
                    echo 'window.location.href = "login.php"';
                    echo '</script>';
                }
                if(isset($_SESSION['username'])){
                    header('location:./admin/home/Dashboard.php');
                }
            }
            ?>
  <?php include 'footer.php'; ?>
    </body>
</html>

