<?php
if(!isset($_SESSION['username'])){
    header("location:./../../logout.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/sidebar.css"/>
</head>
<body id="body-pd">
<?php  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" style="background-color:#e3e3e6;border:none" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="./../../logout.php">Logout<i class='bx bx-arrow-from-left bx-flip-vertical  nav_logo-icon' style="float: right"></i></a></li>
              </ul>
          </div>
        <!-- <div class="header_username"><h2><?php echo $_SESSION['username']; ?></h2></div>
        <div class="header_img" style="height:45px;width:50px">
             <img style="border-radius:20px"src="../../assets/images/anemia.jpg" alt=""> 
        </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo">&nbsp&nbsp&nbsp<span class="nav_logo-name">ANIMA</span> </a>
                <div class="nav_list"> 
                        <a href="./../home/Dashboard.php" class="nav_link <?= $page == 'Dashboard.php' ? 'active':'' ?>"> <i class='bx bx-home nav_icon'></i><span class="nav_name">Dashboard</span> </a> 
                        <a href="./../penyakit/DisplayPenyakit.php" class="nav_link <?= $page == 'DisplayPenyakit.php' || $page == 'AddPenyakit.php' || $page == 'UpdatePenyakit.php' ? 'active':'' ?>"> <i class='bx bx-injection nav_icon'></i> <span class="nav_name">Penyakit</span> </a> 
                        <a class="nav_link <?= $page == 'DisplayGejala.php' || $page == 'AddGejala.php' || $page == 'UpdateGejala.php' ? 'active':'' ?>" href="./../gejala/DisplayGejala.php"> <i class='bx bx-plus-medical nav_icon'></i> <span class="nav_name">Gejala</span> </a> 
                        <a class="nav_link <?= $page == 'DisplayRule.php' || $page == 'AddRule.php' || $page == 'UpdateRule.php' ? 'active':'' ?>" href="./../rule/DisplayRule.php"> <i class='bx bx-brain nav_icon'></i> <span class="nav_name">Rule</span> </a> 
                        <a class="nav_link <?= $page == 'DisplayHistory.php' ? 'active':'' ?>" href="./../history/DisplayHistory.php"> <i class='bx bx-history nav_icon'></i> <span class="nav_name">History</span> </a>  
                </div>
            </div> 
           
        </nav>
    </div>
    <script src="../../assets/js/sidebar.js" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>