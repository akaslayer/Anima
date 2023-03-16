
<?php
session_start();
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
        <link href="assets/css/pengetahuan.css" rel="stylesheet">
        <script src="https://unpkg.com/phosphor-icons"></script>
    </head>
<body>
<?php include 'Navbar.php'; ?>
<div class="container">
    <div class="section-title mb-4">
        <h2>Penyakit Anemia</h2>
        <p>Anemia adalah suatu kondisi di mana jumlah sel darah merah atau konsentrasi hemoglobin di dalamnya lebih rendah dari biasanya. Sel darah merah berfungsi untuk menyediakan oksigen ke jaringan tubuh, sedangkan hemoglobin berfungsi untuk membawah oksigen yang telah disediakan oleh sel darah merah. Jika tubuh memiliki sel darah merah yang terlalu sedikit atau abnormal dan hemoglobin yang tidak cukup, akan terjadi penurunan kapasitas darah untuk membawa oksigen ke jaringan tubuh. Kondisi ini menyebabkan beberapa gejala seperti mudah merasa kelelahan, pusing, sesak napas, dll.</p>
        <p>
            Faktor-faktor yang dapat menyebabkan anemia :
            </p>
            <ol>
                <li>
                    Konsumsi obat-obatan tertentu
                </li>
                <li>
                    Memiliki riwayat penyakit kronis, seperti kanker, ginjal, rheumatoid arthritis, atau kolitis ulserativa
                </li>
                <li>
                    Sedang hamil
                </li>
                <li>
                    Luka menyebar ke bagian luar bibir
                </li>
                <li>
                    Tidak dapat makan dan minum
                </li>
            </ol>
    </div>
    </div>

    <div class="section-jenis mb-4 mt-5">
           <h2>Jenis penyakit Anemia</h2>
           <p>
            5 jenis penyakit anemia yang dapat di diagnosis oleh website sistem pakar
           </p>
        </div>
    <div class="container mt-4">
    <div class="wrapper">
			<ul class="indicator">
				<li class="active" data-target="#besi">Anemia Defisiensi Zat Besi</li>
				<li data-target="#aplastik">Anemia Aplastik</li>
				<li data-target="#hemolitik">Anemia Hemolitik</li>
				<li data-target="#sabit">Anemia Sel Sabit</li>
        <li data-target="#thalassemia">Thalassemia</li>
			</ul>
			<ul class="content">
				<li class="active" id="besi">
					<h1>Anemia Defisiensi Zat Besi</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
					<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. A deserunt fugiat, consequatur tenetur earum doloribus amet repellat quae illum dolore laborum voluptatum, autem, praesentium sunt soluta natus. Voluptates, quas tenetur.</p>
					<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus velit alias facere ducimus quidem tenetur facilis cum architecto exercitationem ratione suscipit vel dignissimos totam qui ex error cupiditate rem, ipsa, quam magnam veniam inventore. Porro iure, nobis officia similique minima eaque obcaecati eos magnam, nisi quos aut, ipsam recusandae laudantium!</p>
          <p>Anemia adalah suatu kondisi di mana jumlah sel darah merah atau konsentrasi hemoglobin di dalamnya lebih rendah dari biasanya. Sel darah merah berfungsi untuk menyediakan oksigen ke jaringan tubuh, sedangkan hemoglobin berfungsi untuk membawah oksigen yang telah disediakan oleh sel darah merah. Jika tubuh memiliki sel darah merah yang terlalu sedikit atau abnormal dan hemoglobin yang tidak cukup, akan terjadi penurunan kapasitas darah untuk membawa oksigen ke jaringan tubuh. Kondisi ini menyebabkan beberapa gejala seperti mudah merasa kelelahan, pusing, sesak napas, dll.</p>
        </li>
				<li id="aplastik">
					<h1>Anemia Aplastik</h1>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem esse perspiciatis inventore. Modi, nostrum debitis eum placeat suscipit veniam adipisci explicabo est natus, doloribus reprehenderit dolor maiores ut asperiores quam voluptas iure a doloremque vel odio ipsam molestias nihil blanditiis nam, in. Soluta doloribus iste repellendus quos hic itaque eaque.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
				</li>
				<li id="hemolitik">
					<h1>Anemia Hemolitik</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum explicabo magni facere quo voluptas error, nulla nihil maxime fugiat earum iure fugit quas eligendi harum accusantium esse libero totam eveniet reprehenderit dignissimos ex, eius, voluptate! A maxime ad nostrum voluptatem, placeat, assumenda fugiat? Accusamus fuga repellendus nisi qui.</p>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur optio in pariatur ab officiis aperiam harum veritatis adipisci eveniet fuga soluta voluptas minima a necessitatibus, blanditiis.</p>
				</li>
				<li id="sabit">
					<h1>Anemia Sel Sabit</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Velit quaerat magnam sit, nobis sed cum eius voluptatem quis facilis sunt, quia? Non atque, facere obcaecati veniam! Impedit atque, facilis similique doloribus quidem quibusdam quod! Quam odit quasi quia accusantium natus eos accusamus sequi repellat modi reiciendis vitae provident tenetur sint tempora quaerat expedita facere, assumenda quos consequatur minima quod deleniti.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, sapiente.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
				</li>
        <li id="thalassemia">
					<h1>Thalassemia</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Velit quaerat magnam sit, nobis sed cum eius voluptatem quis facilis sunt, quia? Non atque, facere obcaecati veniam! Impedit atque, facilis similique doloribus quidem quibusdam quod! Quam odit quasi quia accusantium natus eos accusamus sequi repellat modi reiciendis vitae provident tenetur sint tempora quaerat expedita facere, assumenda quos consequatur minima quod deleniti.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, sapiente.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error molestias quasi est expedita, a pariatur deleniti cum reiciendis similique cupiditate?</p>
				</li>
			</ul>
		</div>
</div>

<?php include 'footer.php'; ?>
<script src="assets/js/pengetahuan.js" rel="stylesheet"></script>
</body>
</html>
<!-- <section id="jenispenyakit" class="departments" style="margin-top:100px">
//       <div class="container">

//         <div class="section-title mb-4">
//           <h2>Jenis penyakit gigi dan mulut </h2>
//           <p>
//             Jenis penyakit gigi dan mulut ini sangat
//             banyak, namun pada aplikasi ini hanya terdapat 4
//             penyakit saja.
//           </p>
//         </div>

//         <div class="row">
//           <div class="col-lg-3">
//             <ul class="nav nav-tabs flex-column">
//               <li class="nav-item">
//                 <a class="nav-link active show" data-toggle="tab" href="#tab-1">Gingivitis (Radang gusi)</a>
//               </li>
//               <li class="nav-item">
//                 <a class="nav-link" data-toggle="tab" href="#tab-2">Karies Gigi (gigi berlubang)</a>
//               </li>
//               <li class="nav-item">
//                 <a class="nav-link" data-toggle="tab" href="#tab-3">Karang Gigi</a>
//               </li>
//               <li class="nav-item">
//                 <a class="nav-link" data-toggle="tab" href="#tab-4">Stomatitis</a>
//               </li>

//             </ul>
//           </div>
//           <div class="col-lg-9 mt-5 mt-lg-0">
//             <div class="tab-content">
//               <div class="tab-pane active show" id="tab-1">
//                 <div class="row">
//                   <div class="col-lg-8 details order-2 order-lg-1">
//                     <h3>Gingivitis (Radang gusi)</h3>
//                     <p class="font-italic">Radang gusi atau gingivitis adalah peradangan pada gusi yang ditandai oleh memerahnya gusi di sekitar akar gigi. Gingivitis terjadi ketika sisa makanan di gigi dan gusi mengeras menjadi plak.

//                     <p>

//                       Gejala Radang Gusi :
//                     </p>
//                     <ol>
//                       <li>
//                         Bau mulut.
//                       </li>
//                       <li>
//                         Gusi bengkak, merah dan berdarah

//                       </li>
//                       <li>
//                         Gingival berkaratin, gaung luka diantara
//                         gigi dan gusi

//                       </li>
//                       <li>
//                         Pembesaran limfoid di kepala, leher, atau
//                         rahang

//                       </li>
//                       <li>Demam</li>
//                       <li>Nyeri gusi</li>
//                     </ol>
//                   </div>
//                 </div>
//               </div>
//               <div class="tab-pane" id="tab-2">
//                 <div class="row">
//                   <div class="col-lg-8 details order-2 order-lg-1">
//                     <h3>Karies Gigi (gigi berlubang)</h3>
//                     <p class="font-italic">Karies gigi disebabkan oleh sisa-sisa makanan dan gula pada permukaan gigi yang berubah membentuk asam oleh karena bakteri. Sebelum hal itu terjadi, mari lakukan tindakan pencegahan sedini mungkin.
//                     <p>
//                       Gejala Karies Gigi :
//                     </p>
//                     <ol>
//                       <li>
//                         Sakit gigi
//                       </li>
//                       <li>
//                         Nyeri ringan hingga tajam saat
//                         mengonsumsi makanan manis
//                       </li>
//                       <li>
//                         Noda berwarna cokelat, hitam atau putih
//                         pada permukaan gigi
//                       </li>
//                       <li>
//                         Nyeri saat menggigit makanan
//                       </li>

//                     </ol>
//                   </div>

//                 </div>
//               </div>
//               <div class="tab-pane" id="tab-3">
//                 <div class="row">
//                   <div class="col-lg-8 details order-2 order-lg-1">
//                     <h3>Karang Gigi</h3>
//                     <p class="font-italic">Karang gigi adalah kondisi di mana terdapat lapisan seperti kotoran yang terletak
//                       di gigi dan sulit dihilangkan meski telah dibersihkan atau disikat.
//                       Karang gigi disebabkan oleh adanya plak yang mengeras dan tidak mendapat penanganan. Plak itu sendiri adalah lapisan
//                       licin dan tipis pada gigi yang terbentuk akibat adanya sisa-sisa makanan yang tertinggal di gigi.
//                     <p>
//                       Gejala Karang Gigi :
//                     </p>
//                     <ol>
//                       <li>
//                         Bau mulut
//                       </li>
//                       <li>
//                         Gusi berdarah dan kemerahan
//                       </li>
//                       <li>
//                         Gusi membengkak dan atau bernanah
//                       </li>
//                       <li>
//                         Gusi melorot atau gigi tampak menjadi
//                         panjang
//                       </li>
//                       <li>
//                         Gigi goyang dan sensitive
//                       </li>
//                       <li>
//                         Gigi menjadi meregang (timbul celahcelah diantara gigi)
//                       </li>
//                       <li>
//                         Gigi menjadi linu padahal tidak ada yang
//                         berlubang
//                       </li>
//                     </ol>
//                   </div>

//                 </div>
//               </div>
//               <div class="tab-pane" id="tab-4">
//                 <div class="row">
//                   <div class="col-lg-8 details order-2 order-lg-1">
//                     <h3>Stomatitis</h3>
//                     <p class="font-italic">Stomatitis adalah radang yang terjadi pada mukosa mulut, biasanya berupa bercak putih kekuningan.</p>
//                     <p class="font-italic">Stomatitis dapat disebabkan oleh beberapa faktor, antara lain defisiensi vitamin seperti zat besi, asam folat, vitamin B12 atau B kompleks, psikologis, trauma, endokrin, herediter, alergi, imunologi, hingga tergigit, luka ketika menyikat gigi, alergi terhadap makanan ataupun adanya infeksi oleh bakteri.</p>
//                     <p>
//                       Gejala Stomatitis :
//                     </p>
//                     <ol>
//                       <li>
//                         Hilangnya nafsu makan
//                       </li>
//                       <li>
//                         Terdapat luka yang cukup besar dimulut
//                       </li>
//                       <li>
//                         Luka biasanya terjadi beberapa kali pada
//                         area yang sama
//                       </li>
//                       <li>
//                         Luka menyebar ke bagian luar bibir
//                       </li>
//                       <li>Tidak dapat makan dan minum</li>
//                     </ol>
//                   </div>

//                 </div>
//               </div>
//             </div>
//           </div>
//         </div>

//       </div>
//     </section>End Departments Section -->



