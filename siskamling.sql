-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 04:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskamling`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `persyaratan` varchar(120) NOT NULL,
  `foto` text NOT NULL,
  `waktu_absen` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Menunggu Verifikasi','Hadir','Tidak Hadir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `nama_pengguna`, `persyaratan`, `foto`, `waktu_absen`, `status`) VALUES
(1, 'Nabil Muthi Maulani', 'Foto Bebas', 'foto-selfie.png', '2023-05-25 09:28:24', 'Menunggu Verifikasi'),
(2, 'Raihan Ramadhan', 'Foto depan gapura', 'foto-selfie.png', '2023-05-25 09:35:18', 'Menunggu Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` char(10) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `pesan` varchar(128) NOT NULL,
  `id_warga` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `role` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `email`, `password`, `nama_pengguna`, `role`) VALUES
(3, 'alvin.austin4@gmail.com', '$2y$10$srPyaIqBlGYz09lGJ8HGqe/xpJXiwCOrZ1HEJaswu1iRG9HywsGqm', 'alvin', 'admin'),
(4, 'raihanramadhan09@gmail.com', '$2y$10$dUtvoyNJygo2CXCSGfYc2.36PmkLIgB8Xlu9dqrL1dJR0XtWhi3xu', 'Rehan Wangsaf', 'petugas'),
(5, 'yusup@gmail.com', '$2y$10$JJb0fiQMxeYg3v/VgkkFYeJNRNPLkZWSr1ZiFbCmTcT.ttAFa4Xve', 'Yusup Supriatna', 'petugas'),
(8, 'nabilmuthi77@gmail.com', '$2y$10$hvc3hoWJs3g3qkm1UwXVpO6QRkt1tvzlox2bMMz5RCwlKOIUyuI7K', 'nabil muthi', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `id_warga` (`id_warga`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
