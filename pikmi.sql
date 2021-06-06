-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pikmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(100) NOT NULL,
  `pw` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `pw`) VALUES
('ezra@yahoo.com', '$2y$10$KD.H2NBIOXQWHc4QlALUn.n.swb.TTyUq.D7/BzwLSXfMVOLj/XoC'),
('faisal@gmail.com', '$2y$10$8tXG2bD3V59rUJL5JZLj3ufK92J3mCDdFBrEVu0CEg3yBlOhAXG6O'),
('rizal@yahoo.com', '$2y$10$zUyRPfBvzoL6tG/FsRoU9u4PuZz5PUkIda4lEL.rR.JFO/jKn6qQy'),
('wildan@gmail.com', '$2y$10$oFIC5mjv/2xuRr/W7P6aPeay.pMzvYiO/5.xidnKozVWQCl9p3HdC');

-- --------------------------------------------------------

--
-- Table structure for table `dosbim`
--

CREATE TABLE `dosbim` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `whatsapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosbim`
--

INSERT INTO `dosbim` (`id`, `email`, `nama_lengkap`, `nip`, `jurusan`, `fakultas`, `whatsapp`) VALUES
(1, 'auzi@apps.ipb.ac.id', 'Auzi Asfarian', '1980000000001', 'Ilmu Komputer', 'FMIPA', '08123456789'),
(2, 'julio@apps.ipb.ac.id', 'Pak Julio', '196510101010101', 'Ilmu Komputer', 'FMIPA', '082345678189'),
(3, 'elvina@apps.ipb.ac.id', 'Elvina', '200019010101', 'Budi Daya Perikanan', 'FPIK', '085712345667');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` int(11) NOT NULL,
  `poster` varchar(200) DEFAULT NULL,
  `bidang` enum('...','PKM-AI','PKM-GFK','PKM-GT','PKM-KC','PKM-K','PKM-PI','PKM-PM','PKM-RE','PKM-RSH') NOT NULL,
  `judul` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `poster`, `bidang`, `judul`) VALUES
(1, '60b94b5a43833.jpg', 'PKM-KC', 'G-Mask: Tempat Sampah Khusus Masker dengan Mesin Penghancur Otomatis Mini Shredder Machine yang Dilengkapi dengan Sensor Ultrasonik dan Tenaga Listrik Berdaya Rendah'),
(3, '60b94b8da9413.jpeg', 'PKM-KC', 'ShortIt: Inovasi tempat sampah otomatis guna mengurangi penumpukan sampah dengan menggunakan Mini Shredding Machine berbasis Capacitive Sensor dan Humidity Sensor'),
(4, '60bbc008bdd01.jpg', 'PKM-PM', 'Tempat sampah modern rumah tangga dengan teknologi Artificial Intelligence dan penghancur sampah otomatis'),
(5, '60b9655acea1f.jpg', 'PKM-GFK', 'mouse wireless magic'),
(7, 'empty.png', 'PKM-K', 'kacamata ajaib'),
(8, '60bbdaca16599.jpeg', 'PKM-AI', 'mouse wireless magiccccc'),
(9, '60bc214844a87.jpeg', 'PKM-RE', 'laptop super'),
(10, '60bcd223a7ec6.jpeg', 'PKM-PI', 'Tempat sampah modern rumah tangga dengan teknologi Artificial Intelligence dan penghancur sampah otomatis'),
(11, '60bcdcf0b9789.jpg', 'PKM-RE', 'mesin pembuat web apps'),
(13, '60bcde00b9023.png', 'PKM-GT', 'mouse wireless magic'),
(14, '60bcde1f06b23.png', 'PKM-PM', 'Tempat sampah modern rumah tangga dengan teknologi Artificial Intelligence dan penghancur sampah otomatis');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `panggilan` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` enum('...','FAPERTA','FKH','FPIK','FAPET','FAHUTAN','FATETA','FMIPA','FEM','FEMA','SV','SB') NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `komitmen` enum('...','1','2','3','4','5','6','7','8','9','10') NOT NULL,
  `keahlian` varchar(250) NOT NULL,
  `pengalaman` varchar(250) NOT NULL,
  `kesibukan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `email`, `foto`, `nama_lengkap`, `panggilan`, `nim`, `jurusan`, `fakultas`, `whatsapp`, `instagram`, `komitmen`, `keahlian`, `pengalaman`, `kesibukan`) VALUES
(19, 'faisal@gmail.com', '60bcfbd24997f.jpg', 'Faisal IA', 'isal', 'G64190054', 'Ilmu Komputer', 'FMIPA', '082328679115', 'flaisarly', '9', 'Ngoding Hello World', 'Bikin Pikmi', 'Bikin Pikmi'),
(20, 'rizal@yahoo.com', '60bcfc756d62c.jpg', 'Rizal M', 'Rizal', 'G64190069', 'Ilmu Komputer', 'FMIPA', '0812345678', 'rizal_m', '10', 'Fullstack developer', 'Ketua Osis SMA', 'Bikin Pikmi'),
(21, 'wildan@gmail.com', '60bcfcce32709.jpg', 'Wildan FA', 'Wil', 'G64190060', 'Ilmu Komputer', 'FMIPA', '0823456789', 'wildan_f', '10', 'Fullstack developer', 'Bikin Pikmi', 'Bikin Pikmi'),
(22, 'ezra@yahoo.com', '60bcff4d25773.jpg', 'M Ezra F', 'Ezra', 'G64190030', 'Ilmu Komputer', 'FMIPA', '085667687997', 'ezra_f', '10', 'Fullstack developer', 'Bikin Pikmi', 'Bikin Pikmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email_mhs` (`email`),
  ADD KEY `email_ide` (`email`) USING BTREE;

--
-- Indexes for table `dosbim`
--
ALTER TABLE `dosbim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip_dosbim` (`nip`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_akun` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosbim`
--
ALTER TABLE `dosbim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `email_akun` FOREIGN KEY (`email`) REFERENCES `akun` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
