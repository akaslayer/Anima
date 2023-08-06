-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2023 at 02:38 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20659504_spkanemia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', '6929786a8fbb94966d2d607666dfb74a'),
('hendry', 'f4dfad803df83144a5be86d9bca87678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Terasa lemah diseluruh tubuh'),
(2, 'Kulit tampak pucat'),
(3, 'Kaki dan tangan terasa dingin'),
(4, 'Keterbatasan dalam melakukan aktivitas fisik '),
(5, 'Tidak makan daging / vegetarian'),
(6, 'Penurunan nafsu makan'),
(7, 'Demam'),
(8, 'Hidung berdarah (mimisan) tanpa penyebab yang jelas'),
(9, 'Infeksi yang berulang dan lama sembuh'),
(10, 'Memar yang tidak dapat dijelaskan atau mudah terjadi'),
(11, 'Denyut jantung cepat atau tidak teratur'),
(12, 'Urine berwarna gelap'),
(13, 'Kulit atau bagian putih mata menguning (jaundice)'),
(14, 'Tinja / BAB bercampur darah'),
(15, 'Kuku rapuh'),
(16, 'Pubertas yang terlambat'),
(17, 'Nyeri di bagian kaki dan punggung (dipicu oleh cuaca, stress, dehidrasi, dan olahraga berlebihan)'),
(18, 'Mengalami pendarahan yang berkepanjangan dari luka'),
(19, 'Sering pingsan '),
(20, 'Kebiasaan makan makanan yang tidak biasa (es batu, tepung, tisu, dsb)'),
(21, 'Deformitas tulang wajah'),
(22, 'Pembengkakan di perut');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `tanggal_diagnosa` date NOT NULL,
  `hasil_diagnosa` varchar(255) NOT NULL,
  `nilai_cf` double(11,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id_history`, `nama_user`, `jenis_kelamin`, `umur`, `domisili`, `tanggal_diagnosa`, `hasil_diagnosa`, `nilai_cf`) VALUES
(557, 'Winarno', 'Laki-laki', 60, 'Tangerang', '2023-05-02', 'Anemia Defisiensi Besi', 0.9979),
(559, 'leonardo', 'Laki-laki', 22, 'tangerang', '2023-05-02', 'Anemia Defisiensi Besi', 0.9966),
(560, 'Brandon', 'Laki-laki', 22, 'Bandung', '2023-05-02', 'Anemia Defisiensi Besi', 0.3800),
(561, 'hindra', 'Laki-laki', 20, 'tgr', '2023-05-02', 'Tidak Anemia', 0.0000),
(563, 'Cent', 'Laki-laki', 20, 'Tangerang', '2023-05-02', 'Tidak Anemia', 0.0000),
(564, 'kenken', 'Laki-laki', 20, 'Tangerang', '2023-05-02', 'Anemia Defisiensi Besi', 0.9862),
(565, 'aldo', 'Laki-laki', 22, 'tangerang', '2023-05-02', 'Anemia Defisiensi Besi', 0.9500),
(566, 'Reyhan Arya Hermawan', 'Laki-laki', 20, 'Gading Serpong', '2023-05-02', 'Anemia Defisiensi Besi', 0.5700),
(568, 'Irvan', 'Laki-laki', 17, 'Depok', '2023-05-02', 'Anemia Defisiensi Besi', 0.9536),
(569, 'Eric Matias', 'Laki-laki', 27, 'Bogor', '2023-05-02', 'Anemia Defisiensi Besi', 0.9030),
(570, 'Dedi', 'Laki-laki', 32, 'Jakarta', '2023-05-02', 'Anemia Defisiensi Besi', 0.9863),
(571, 'Michael', 'Laki-laki', 21, 'Jakarta', '2023-05-02', 'Anemia Defisiensi Besi', 0.9975),
(573, 'Hilman', 'Laki-laki', 22, 'Bogor', '2023-05-02', 'Anemia Defisiensi Besi', 0.6746),
(575, 'Raditya Herkristito', 'Laki-laki', 20, 'Tangerang', '2023-05-02', 'Tidak Anemia', 0.0000),
(578, 'budi setiawan', 'Laki-laki', 20, 'Bandung', '2023-05-02', 'Anemia Defisiensi Besi', 0.9422),
(580, 'Dimas Arya Koeswidyanto', 'Laki-laki', 22, 'Kediri', '2023-05-03', 'Anemia Defisiensi Besi', 0.5700),
(583, 'Wanda Taupik Ramdan', 'Laki-laki', 21, 'Gading Serpong', '2023-05-03', 'Anemia Aplastik', 0.2224),
(584, 'Jonathan Franzeli', 'Laki-laki', 21, 'Tangerang', '2023-05-03', 'Anemia Defisiensi Besi', 0.5872),
(585, 'Gabriel', 'Laki-laki', 22, 'Tangerang', '2023-05-03', 'Anemia Defisiensi Besi', 0.4358),
(586, 'dipta', 'Laki-laki', 21, 'Jakarta', '2023-05-03', 'Anemia Defisiensi Besi', 0.9123),
(590, 'jonathan adif', 'Laki-laki', 22, 'tangerang', '2023-05-03', 'Anemia Defisiensi Besi', 0.6464),
(591, 'Kevin Jonathan Kristianto', 'Laki-laki', 21, 'Tangerang Selatan', '2023-05-03', 'Anemia Defisiensi Besi', 0.9963),
(592, 'Benny septiawan salim', 'Laki-laki', 21, 'Jambj', '2023-05-03', 'Anemia Defisiensi Besi', 0.7547),
(593, 'Rahmadina ', 'Perempuan', 22, 'Tangerang', '2023-05-03', 'Anemia Defisiensi Besi', 0.9977),
(594, 'Jennifer', 'Perempuan', 22, 'Tangerang Selatan', '2023-05-03', 'Anemia Defisiensi Besi', 0.9883),
(595, 'kenken', 'Laki-laki', 21, 'Tangerang', '2023-05-04', 'Anemia Defisiensi Besi', 0.3196),
(596, 'Fadhlan', 'Laki-laki', 22, 'Salatiga', '2023-05-04', 'Tidak Anemia', 0.0000),
(648, 'William', 'Laki-laki', 21, 'Tangerang', '2023-05-10', 'Anemia Sel Sabit', 0.1352),
(649, 'Santo', 'Laki-laki', 21, 'Tangerang', '2023-05-10', 'Anemia Defisiensi Besi', 0.5374),
(650, 'Andi', 'Laki-laki', 22, 'Tangerang', '2023-05-10', 'Anemia Defisiensi Besi', 0.1337),
(651, 'Mikel', 'Laki-laki', 23, 'Tangerang', '2023-05-10', 'Anemia Defisiensi Besi', 0.1900),
(656, 'Kira', 'Laki-laki', 22, 'Tangerang', '2023-05-10', 'Anemia Hemolitik', 0.3000),
(684, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-17', 'Anemia Defisiensi Besi', 0.2133),
(685, 'Ricardo', 'Laki-laki', 22, 'Jakarta', '2023-05-17', 'Thalassemia', 0.3847),
(689, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-22', 'Thalassemia', 0.8982),
(690, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-22', 'Anemia Defisiensi Besi', 0.8484),
(691, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-22', 'Anemia Defisiensi Besi', 0.7600),
(692, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-22', 'Anemia Defisiensi Besi', 0.9657),
(693, 'Hendry', 'Laki-laki', 21, 'Tangerang', '2023-05-22', 'Anemia Hemolitik', 0.6627),
(694, 'fdsfds', 'Laki-laki', 4, 'fsdfds', '2023-05-23', 'Anemia Sel Sabit', 0.2000),
(695, 'fdsfds', 'Laki-laki', 4, 'fsdfds', '2023-05-23', 'Anemia Sel Sabit', 0.9776),
(696, 'dsadas', 'Laki-laki', 1, 'dsadas', '2023-05-24', 'Anemia Hemolitik', 0.5000),
(697, 'dsadas', 'Laki-laki', 1, 'dsadas', '2023-05-24', 'Anemia Hemolitik', 0.2000),
(698, 'Gwheh', 'Laki-laki', 6, 'Gwhww', '2023-05-25', 'Anemia Aplastik', 0.1200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `srn_penyakit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `nama_penyakit`, `srn_penyakit`) VALUES
(1, 'Anemia Defisiensi Besi', 'Anemia defisiensi besi merupakan jenis anemia yang dapat disembuhkan. Beberapa saran yang dapat diberikan untuk penyembuhan anemia defisiensi besi adalah meningkatkan asupan makanan yang kaya zat besi seperti hati ayam, daging merah, dan bayam, mengonsumsi buah dan sayur sebagai sumber berbagai vitamin C yang dibutuhkan oleh tubuh untuk membantu penyerapan zat besi, melakukan olahraga atau melakukan aktivitas fisik secara berkala, meningkatkan asupan protein (protein hewani), menghindari kebiasaan makan yang tidak lazim (tanah, kertas, dsb), mengonsumsi suplemen zat besi, menghindari konsumsi teh/kopi ketika makan atau mengonsumsi suplemen zat besi, dan segera pergi ke dokter untuk mendapatkan pengobatan lebih lanjut.'),
(2, 'Anemia Aplastik', 'Anemia aplastik merupakan jenis anemia yang tidak dapat disembuhkan. Beberapa saran yang dapat diberikan agar kondisi penderita anemia aplastik tidak bertambah parah adalah segera pergi ke dokter untuk mendapatkan pengobatan lebih lanjut, olahraga yang teratur namun tidak berlebihan, menjauhi keramaian dan teman atau kerabat yang sakit terutama pada saat musim dingin dan flu untuk mencegah infeksi, melakukan perawatan gigi secara teratur, dan menjauh dari rokok.'),
(3, 'Anemia Sel Sabit', 'Anemia sel sabit merupakan jenis anemia yang tidak dapat disembuhkan. Beberapa saran yang dapat diberikan agar kondisi penderita anemia sel sabit tidak bertambah parah adalah segera pergi ke dokter untuk mendapatkan pengobatan lebih lanjut, minum 8 sampai 10 gelas air setiap hari dan makan makanan yang sehat, rutin berolahraga namun tidak berlebihan, menghindari terpapar suhu yang terlalu panas/dingin, menjauh dari rokok, menghindari konsumsi makanan atau minuman yang mengandung alkohol, dan menjaga kebersihan agar menurunkan kemungkinan terjadinya infeksi.'),
(4, 'Anemia Hemolitik', 'Anemia hemolitik merupakan jenis anemia yang tidak dapat disembuhkan. Beberapa saran yang dapat diberikan agar kondisi penderita anemia hemolitik tidak bertambah parah adalah menjauh dari orang yang sakit dan menghindari keramaian untuk mencegah infeksi, menghindari konsumsi jenis makanan tertentu yang dapat membuat kita terpapar bakteri seperti makanan mentah, banyak istirahat, mengonsumsi suplemen asam folat dan zat besi, dan segera pergi ke dokter untuk mendapatkan pengobatan lebih lanjut.'),
(5, 'Thalassemia', '	Thalassemia merupakan jenis anemia yang tidak dapat disembuhkan. Beberapa saran yang dapat diberikan agar kondisi penderita thalassemia tidak bertambah parah adalah segera pergi ke dokter untuk mengetahui tipe thalassemia yang diderita serta mendapatkan pengobatan yang lebih lanjut, membatasi konsumsi makanan yang mengandung zat besi, mengonsumsi makanan rendah lemak, sayur, dan buah-buahan, melakukan konsultasi dengan dokter mengenai jenis olahraga dan intensitasnya yang aman, dan rajin mencuci tangan serta membatasi interaksi dengan orang sakit untuk melindungi diri dari infeksi.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule`
--

CREATE TABLE `tbl_rule` (
  `id_rule` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `mb` double(11,2) NOT NULL,
  `md` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rule`
--

INSERT INTO `tbl_rule` (`id_rule`, `id_penyakit`, `id_gejala`, `mb`, `md`) VALUES
(1, 1, 1, 0.70, 0.40),
(2, 1, 2, 1.00, 0.05),
(3, 1, 3, 1.00, 0.05),
(4, 1, 5, 0.55, 0.40),
(5, 1, 6, 0.55, 0.40),
(6, 1, 11, 0.50, 0.30),
(7, 1, 15, 0.50, 0.30),
(8, 1, 20, 0.40, 0.20),
(9, 2, 2, 1.00, 0.05),
(10, 2, 7, 0.40, 0.20),
(11, 2, 8, 0.40, 0.20),
(12, 2, 9, 0.50, 0.30),
(13, 2, 10, 0.50, 0.30),
(14, 2, 11, 0.50, 0.30),
(15, 2, 14, 0.40, 0.30),
(16, 2, 18, 0.70, 0.50),
(17, 3, 2, 1.00, 0.05),
(18, 3, 9, 0.70, 0.50),
(19, 3, 11, 0.70, 0.50),
(20, 3, 13, 0.60, 0.40),
(21, 3, 16, 0.55, 0.35),
(22, 3, 17, 0.50, 0.40),
(23, 3, 19, 0.60, 0.40),
(24, 3, 22, 0.50, 0.30),
(25, 4, 2, 1.00, 0.05),
(26, 4, 4, 0.70, 0.20),
(27, 4, 7, 0.50, 0.30),
(28, 4, 11, 0.40, 0.20),
(29, 4, 12, 0.65, 0.40),
(30, 4, 13, 0.50, 0.30),
(31, 4, 22, 0.70, 0.40),
(32, 5, 2, 1.00, 0.05),
(33, 5, 12, 0.60, 0.40),
(34, 5, 13, 0.70, 0.30),
(35, 5, 16, 0.55, 0.35),
(36, 5, 21, 1.00, 0.05),
(37, 5, 22, 0.50, 0.30),
(40, 5, 1, 0.60, 0.40),
(41, 5, 11, 0.40, 0.20),
(42, 2, 1, 0.70, 0.40),
(43, 3, 1, 0.70, 0.40),
(44, 4, 1, 0.70, 0.30),
(45, 2, 4, 0.50, 0.30),
(46, 3, 4, 0.50, 0.30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=699;

--
-- AUTO_INCREMENT for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
