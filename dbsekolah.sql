-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(333) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `sinopsis` longtext NOT NULL,
  `id_penulis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tgl`, `sinopsis`, `id_penulis`) VALUES
(11, 'Daftar Siswa Pemenang Lomba Tingkat Provinsi', '<h1><strong>Ini dia kumpulan siswa kita yang berhasil menjuarai perlombaan dibidang masing masing</strong></h1>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Lomba Menggambar tingkat Provinsi :</strong></h2>\r\n\r\n<h2><strong>1. Alex Mario Simanjuntak</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Lomba Fotografi tingkat Provinsi :</strong></h2>\r\n\r\n<h2><strong>1. Brian Maxwell Ketaren</strong></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Lomba Berenang tingkat Provinsi</strong></h2>\r\n\r\n<h2><strong>1. Daniel Tambunan</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Selamat kepada anak anak kita yang sudah mengharumkan nama sekolah.</strong></h2>\r\n', '2.jpg', '2022-06-13', '<h3><strong>Siswa Berprestasi</strong></h3>\r\n', 2),
(13, 'Kasus Pembunuhan di Sekolah sebelah', '<h1><strong>Kasus Pembunuhan</strong></h1>\r\n\r\n<p>Banyaknya tugas yang diberikan oleh sekolah dapat membebankan pikiran para murid, tetapi tenang saja.</p>\r\n\r\n<p>Sekolah Budi Mulia memberikan ketenangan kepada murid muridnya.</p>\r\n\r\n<p>Maka dari itu tidak akan ada kasus pembunuhan dikarenakan banyaknya tugas yang diberikan kepada murid murid</p>\r\n\r\n<p>- Stres</p>\r\n\r\n<p>+ Kreativitas</p>\r\n\r\n<p>+ Motivasi Belajar</p>\r\n\r\n<p>+ Pengembangan Skill</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tunggu apa lagi?</p>\r\n\r\n<p>Ayo Join Sekolah Budi Mulia</p>\r\n\r\n<p>Tututututu tu tu</p>\r\n', '11.jpg', '2022-06-13', '<h3><strong>Kasus Pembunuhan</strong></h3>\r\n', 2),
(14, 'PENTAS SENI', '<h2>Sekolah Budi Mulia adalah sekolah yang menampung dan berusaha dalam mengembangkan bakat-bakat siswa dalam bentuk seni yaitu, bernyanyi, drama, bermain alat musik, dan lain-lain.</h2>\r\n\r\n<h2>Oleh karena itu, Sekolah Budi Mulia mengadakan pentas seni yang akan diadakan sekali setahun. Pentas seni akan dilaksanakan selama 3 hari dan terbuka untuk umum.&nbsp;</h2>\r\n\r\n<h2>Kamu dapat mengajak keluara atau sahabatmu untuk mengikuti kegiatan ini dan tentu saja melihat penampilanmu.</h2>\r\n\r\n<h2>Kamu juga dapat melihat banyak hal lain, lho. Misalnya kegiatan lain yang dilakukan ditiap kelas seperti kafe, rumah hantu, dan lain-lain. Pentas seni nantinya akan diakhiri dengan konser.</h2>\r\n', '3.jpg', '2022-06-13', '<h2><strong>PENTAS SENI SEKOLAH BUDI MULIA</strong></h2>\r\n', 3),
(15, 'Laboratorium Sekolah', '<h2>Sekolah Budi Mulia memberikan fasilitas terbaik kepada siswa-siswanya. Baik dari ruang kelas yang nyaman dan bersih, sekolah juga memberikan fasilitas laboratorium.<br />\r\n<br />\r\nTerdapat lab IPA dan lab Komputer.<br />\r\n<br />\r\nSiswa dapat menggunakan lab tersebut untuk belajar dan menambah pengetahuan. Namun tentu saja harus dalam pengawasan guru ata pegawai.<br />\r\n<br />\r\nFasilitas di lab IPA juga cukup lengkap, jadi, siswa dapat dengan mudah menggunakannya.<br />\r\n<br />\r\nMeskipun fasilitas tadi diberikan kepada siswa, sekolah juga menghimbau agar dalam penggunaan lab tersebut harus melakukan hal yang berguna dan tidak diperbolehkan melakukan penyalahgunaan.</h2>\r\n', '4.jpg', '2022-06-13', '<h2><strong>Laboratorium Sekolah Budi Mulia</strong></h2>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama` varchar(33) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama`, `foto`) VALUES
(1, 'Brian Maxwell Ketaren', 'brian.jpg'),
(2, 'Alex Mario Simanjuntak', 'alex.jpeg'),
(3, 'Daniel Tambunan', 'daniel.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(8, 'brian', 'cbd44f8b5b48a51f7dab98abcdf45d4e'),
(9, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
