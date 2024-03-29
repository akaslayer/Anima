<?php
session_start();
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link href="assets/css/index.css" rel="stylesheet">
	<title>Anima</title>
</head>
<body>
<?php include 'Navbar.php'; ?>
	<!-- <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Sistem Pakar</h1>
      <h2>Diagnosis Penyakit Anemia</h2>
      <a href=""class="btn-get-started scrollto">Mulai Konsultasi</a>
    </div>
  </section> -->
  <!-- <section id="anemia">
  <div class="container">
            <div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-1">
                        <div class="doctor__item__pic">
                            <img src="assets/images/doctor.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="doctor__item__text">
                            <h2>Anemia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.sis. </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
		</div>
</section> -->

<!-- <div class="section">
    <div class="text">
        <h1>Sistem Pakar</h1>
        <h2>DIagnosis Penyakit Anemia</h2>
        <a href=""class="btn-get-started scrollto">Mulai Konsultasi</a>
</div>
<div class="image-cure">
<img src="assets/images/cure.png"/>
</div>
</div> -->

<div class="row">
    <div class="left">
    <div class="content">
        <h1>Sistem Pakar</h1>
        <h2>Diagnosa Penyakit Anemia</h2>
        <a href="formKonsultasi.php"class="btn-get-started scrollto">Mulai Diagnosa</a>
    </div>
</div>
    <div class="right">
        <img src="assets/images/cure4.png"/>
    </div>
</div>


<div class="main-width">
<div class="container">
    <h2 class="pakar-title">About Us</h2>
    <div class="row-card">
        
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/dosen.jpg">
                <div class="card-body">
                    <h5 class="card-title">Dr. Ir. Winarno, M.Kom.</h5>
                    <p class="card-text">Dosen Pembimbing</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" id="hendry" src="assets/images/hendry.png">
                <div class="card-body">
                    <h5 class="card-title">Hendry Tjahaja Surijanto Putra</h5>
                    <p class="card-text">Developer</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/pakar.jfif">
                <div class="card-body">
                    <h5 class="card-title">dr. Merissa Arviana</h5>
                    <p class="card-text">Dokter Umum (Pakar)</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>