-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 05:57 AM
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
  `pw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `pw`) VALUES
('1234', '1234'),
('aaa', 'aaa'),
('abc@gmail.com', '1234'),
('flaisarlyfaisal@apps.ipb.ac.id', '1234'),
('gan@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` int(11) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `judul` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `poster`, `judul`) VALUES
(1, '60b42d43c0122.jpg', 'steriltzia: tempat sampah khusus masker'),
(2, '60b42d344b9d1.jpg', 'bingo: aplikasi yang membantu siswa SD di Tapanuli memahami pelajaran IPA bagian fotosintesis'),
(6, '60b42c91f25b5.jpeg', 'mouse wireless magic'),
(10, '60b436ff84f56.jpeg', 'smartphone cerdas bangettt'),
(13, '60b42bc6109fd.jpg', 'Tempat sampah modern rumah tangga dengan teknologi Artificial Intelligence dan penghancur sampah otomatis'),
(14, '60b429312724c.jpeg', 'Short: Inovasi tempat sampah otomatis guna mengurangi penumpukan sampah dengan menggunakan Mini Shredding Machine berbasis Capacitive Sensor dan Humidity Sensor'),
(17, '60b4255eaae35.jpg', 'D-Mask: Tempat Sampah Khusus Masker dengan Mesin Penghancur Otomatis Mini Shredder Machine yang Dilengkapi dengan Sensor Ultrasonik dan Tenaga Listrik Berdaya Rendah'),
(19, '60b454be4dedb.jpeg', 'baju renang anti peluru');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `panggilan` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `komitmen` int(2) NOT NULL,
  `keahlian` varchar(250) NOT NULL,
  `pengalaman` varchar(250) NOT NULL,
  `kesibukan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`email`, `nama_lengkap`, `panggilan`, `nim`, `jurusan`, `fakultas`, `whatsapp`, `instagram`, `komitmen`, `keahlian`, `pengalaman`, `kesibukan`) VALUES
('aaa', 'ahoy', 'hoy', '123', 'ikk', 'fema', '08xx', 'ahoy', 9, 'ibu rumah tangga', 'banyak', 'belum ada'),
('1234', 'orang  ganterng', 'gan', '333', 'ilkom', 'fmipa', '09xx', 'uhuu', 10, 'banyak', 'banyak', 'banyak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email_mhs` (`email`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `email_akun` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
