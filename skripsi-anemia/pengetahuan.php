
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
                    Memiliki masalah kesehatan dengan sumsum tulang, seperti limfoma, leukemia, myelodysplasia, dan multiple myeloma
                </li>
                <li>
                    Trauma / operasi
                </li>
                <li>
                    Memiliki riwayat keluarga yang mengalami penyakit anemia
                </li>
                <li>
                    Kekurangan asupan gizi yang mengandung zat besi, asam folat, dan vitamin B12
                </li>
            </ol>
    </div>
    </div>

    <div class="section-jenis mb-4 mt-5">
           <h2>Jenis penyakit Anemia</h2>
           <p>
            5 jenis penyakit anemia yang dapat di diagnosa oleh website sistem pakar
           </p>
        </div>
    <div class="container mt-4">
    <div class="wrapper">
			<ul class="indicator">
				<li class="active" data-target="#besi">Anemia Defisiensi Besi</li>
				<li data-target="#aplastik">Anemia Aplastik</li>
				<li data-target="#hemolitik">Anemia Hemolitik</li>
				<li data-target="#sabit">Anemia Sel Sabit</li>
        <li data-target="#thalassemia">Thalasemia</li>
			</ul>
			<ul class="content">
				<li class="active" id="besi">
					<h1>Anemia Defisiensi Besi</h1>
					<p style="text-align:justify;">Anemia defisiensi besi adalah satu jenis anemia yang disebabkan kekurangan zat besi sehingga terjadi penurunan jumlah sel darah merah yang sehat. 
                        Beberapa kondisi yang dapat menyebabkan anemia defisiensi besi adalah saat
                        mengalami pendarahan, tidak dapat melakukan penyerapan zat besi dengan optimal,
                        kurangnya mengonsumsi makanan yang mengandung zat besi, dan sedang hamil.
                        Jenis anemia ini merupakan jenis anemia yang paling banyak ditemukan di dalam
                        masyarakat, yaitu sekitar 50% dari seluruh jenis anemia yang ada. Jenis anemia ini
                        sering ditemukan di dalam kalangan balita, remaja putri, dan ibu hamil.</p>
                        <p>
                        Cara mencegah anemia defisiensi besi :
                        </p>
                            <ol>
                                <li>Mengonsumsi makanan yang kaya akan zat besi</li>
                                <li>Mengonsumsi suplemen zat besi</li>
                                <li>Mengonsumsi makanan atau minuman yang dapat membantu proses penyerapan zat besi dalam darah, seperti makanan yang mengandung vitamin C, vitamin A, ayam, ikan, dan daging merah</li>
                                <li>Menghindari konsumsi makanan atau minuman yang mengganggu proses penyerapan zat besi dalam tubuh, seperti makanan yang tinggi fifat (kacang-kacangan, sereal, kedelai), tinggi kalsium(susu, keju), dan polifenol (teh, kopi)</li>
                            </ol>
                </li>
				<li id="aplastik">
					<h1>Anemia Aplastik</h1>
					<p style="text-align: justify;">Anemia aplastik adalah salah satu jenis kelainan darah yang disebabkan
                        oleh kegagalan sumsum tulang untuk menghasilkan sel darah. Pada kondisi
                        ini, salah satu atau seluruh sel darah, termasuk sel darah merah, sel darah putih,
                        dan trombosit tidak dapat diproduksi oleh sumsum tulang. Anemia aplastik terbagi
                        menjadi dua jenis, yaitu anemia aplastik yang didapat (Acquired aplastic anemia)
                        dan anemia aplastik yang diturunkan (inherited aplastic anemia). </p>
					<p style="text-align: justify;">Anemia aplastik yang didapat (Acquired aplastic anemia) biasanya 
                        disebabkan oleh penyakit autoimun. Penyakit autoimun adalah penyakit yang
                        terjadi akibat sistem kekebalan tubuh atau sistem imun menyerang sel-sel sehat
                        dalam tubuh sendiri, yang di dalam hal ini adalah sumsum tulang belakang.
                        Beberapa hal yang dapat menyebabkan penyakit ini adalah infeksi obat-obatan,
                        infeksi virus, zat kimia berbahaya, kehamilan, dan radiasi. Jenis anemia ini lebih
                        sering ditemukan pada orang dewasa.</p>
                    <p style="text-align: justify;">Anemia aplastik yang diturunkan (inherited aplastic anemia) biasanya
                        disebabkan oleh kelainan genetik yang diwariskan dari orang tua. Jenis anemia
                        ini lebih sering ditemukan pada anak-anak dan remaja. Penderita anemia jenis ini
                        memiliki resiko untuk mengalami kanker tertentu, seperti leukimia.</p>
                        <p> Anemia aplastik tidak dapat dicegah.</p>
				</li>
				<li id="hemolitik">
					<h1>Anemia Hemolitik</h1>
					<p style="text-align: justify;">Anemia hemolitik adalah gangguan kurang darah yang terjadi karena sel darah merah dihancurkan lebih cepat, daripada waktu terbentuknya kembali sel baru.
                        Hal ini menyebabkan tubuh mengalami kekurangan sel darah merah. Jenis anemia ini harus segera ditangani, dikarenakan dapat menyebabkan komplikasi jantung, seperti gagal jantung.
                        Jenis anemia ini dapat diturunkan sejak lahir dari orang tua atau berkembang setelah lahir. Beberapa kondisi yang dapat menyebabkan anemia hemolitik adalah infeksi, kanker, transfusi darah dari orang dengan golongan darah yang berbeda, ovalositosis, sferositosis, dan efek samping obat-obatan. </p>
					<p>Anemia hemolitik tidak dapat dicegah.</p>
				</li>
				<li id="sabit">
					<h1>Anemia Sel Sabit</h1>
					<p style="text-align: justify;">Anemia sel sabit adalah kelainan genetik yang menyebabkan bentuk sel darah merah menjadi tidak normal. Pada anemia sel sabit, sel darah merah berbentuk seperti sabit, kaku, dan mudah menyumbat pembuluh darah kecil.
                    Ketidaknormalan bentuk sel ini menyebabkan pasokan darah sehat dan oksigen yang disalurkan ke seluruh tubuh menjadi terhambat. Anemia sel sabit disebabkan oleh mutasi gen yang diturunkan dari kedua orang tua, dan keduanya harus memiliki kelainan genetik ini.
                    Beberapa komplikasi yang dapat terjadi karena jenis penyakit ini adalah mengalami kebutaan karena penyumbatan pada pembuluh darah mata yang bisa mengakibatkan kerusakan retina, stroke yang terjadi karena aliran darah pada otak terhambat, komplikasi pada kehamilan, termasuk pembekuan darah, hipertensi, keguguran, berat badan lahir rendah, kelahiran prematur,
                    dan banyak hal lainya.  </p>
					<p>Anemia sel sabit tidak dapat dicegah.</p>
				</li>
        <li id="thalassemia">
					<h1>Thalasemia</h1>
					<p style="text-align: justify;">Thalasemia merupakan penyakit yang mana disebabkan oleh kelainan darah
                        akibat kelainan genetik yang membuat hemoglobin dalam darah tidak diproduksi
                        dengan jumlah yang cukup dan tidak dapat berfungsi dengan baik. Jenis
                        anemia ini bersifat genetik atau diturunkan. Thalasemia terbagi menjadi dua jenis, yaitu thalasemia alfa dan thalasemia beta. Tingkat keparahan dari thalasemia
                        alfa bergantung pada jumlah mutasi gen yang diwarisi dari orang tua, sehingga
                        kondisi akan semakin parah tergantung banyaknya gen yang bermutasi. Berbeda
                        dari thalasemia alfa, tingkat keparahan dari thalaemia beta bergantung pada
                        bagian dari hemoglobin yang terpengaruh.</p>
					<p>Cara mencegah thalasemia :</p>
                    <ol>
                        <li>Melakukan pemeriksaan premarital sebelum melakukan pernikahan untuk memastikan pasangan bukan carrier / pembawa penyakit</li>
                    </ol>
					
				</li>
			</ul>
		</div>
</div>

<?php include 'footer.php'; ?>
<script src="assets/js/pengetahuan.js" rel="stylesheet"></script>
</body>
</html>



