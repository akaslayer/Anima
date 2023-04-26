<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="assets/css/navbar.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<?php  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
<section id="navbar">
<div class="main-width">
  <header>
<div class="logo">
  <a href="index.php">Anima</a>
</div>
<nav>
  <div class="hamb">
    <span></span>
    <span></span>
    <span></span>
</div>
<ul class="nav-list">
  <li><a href="index.php" class="<?= $page == 'index.php' ? 'activate':'' ?>">Home</a></li>
  <li><a href="pengetahuan.php" class="<?= $page == 'pengetahuan.php' ? 'activate':'' ?>">Pengetahuan</a></li>
  <!-- <li><a href="#">About</a></li> -->
  <li class="button"><a href="login.php" class="<?= $page == 'login.php' ? 'activate_btn':'' ?>">Login</a></li>
</ul>
</nav>
</header>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  var nav = document.querySelector("#navbar")
  window.addEventListener("scroll", ()=>{
    if(document.documentElement.scrollTop > 20){
      nav.classList.add("sticky");
    }else{
      nav.classList.remove("sticky");
    }
  });
  var hamburger = document.querySelector(".hamb");
  var navlist = document.querySelector(".nav-list");
  hamburger.addEventListener("click",function(){
    if(this.classList.contains("click")){
      this.classList.remove("click");
      navlist.classList.remove("open");
    }else{
    this.classList.add("click");
    navlist.classList.add("open");
    }
  });
</script>
</body>
</html>
