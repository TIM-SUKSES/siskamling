-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 05:06 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `foto` text NOT NULL,
  `waktu_izin` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Menunggu Verifikasi','Diterima','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_pengguna`, `hari`, `jam_masuk`, `jam_keluar`, `status`) VALUES
(24, 'Alvin Austin', 'Monday', '06:00:00', '17:00:00', 0),
(26, 'Raihan Ramadhan', 'Monday', '06:00:00', '18:00:00', 0),
(27, 'Yusup Supriatna', 'Monday', '06:00:00', '17:00:00', 0),
(28, 'Nabil Muthi Maulani', 'Monday', '06:00:00', '18:00:00', 0),
(29, 'Alvin Austin', 'Tuesday', '06:00:00', '17:00:00', 0),
(30, 'Raihan Ramadhan', 'Tuesday', '06:00:00', '18:00:00', 0),
(31, 'Yusup Supriatna', 'Tuesday', '06:00:00', '17:00:00', 0),
(32, 'Fadly Faturrohman', 'Tuesday', '06:00:00', '18:00:00', 0),
(33, 'Alvin Austin', 'Wednesday', '06:00:00', '17:00:00', 0),
(34, 'Raihan Ramadhan', 'Wednesday', '06:00:00', '18:00:00', 0),
(35, 'Nabil Muthi Maulani', 'Wednesday', '06:00:00', '17:00:00', 0),
(36, 'Fadly Faturrohman', 'Wednesday', '06:00:00', '18:00:00', 0),
(37, 'Alvin Austin', 'Thursday', '06:00:00', '17:00:00', 0),
(38, 'Yusup Supriatna', 'Thursday', '06:00:00', '18:00:00', 0),
(39, 'Nabil Muthi Maulani', 'Thursday', '06:00:00', '17:00:00', 0),
(40, 'Fadly Faturrohman', 'Thursday', '06:00:00', '18:00:00', 0),
(41, 'Raihan Ramadhan', 'Friday', '06:00:00', '15:00:00', 0),
(42, 'Yusup Supriatna', 'Friday', '06:00:00', '15:00:00', 0),
(43, 'Nabil Muthi Maulani', 'Friday', '06:00:00', '15:00:00', 0),
(44, 'Fadly Faturrohman', 'Friday', '06:00:00', '15:00:00', 0),
(45, 'Alvin Austin', 'Saturday', '06:00:00', '17:00:00', 0),
(46, 'Raihan Ramadhan', 'Saturday', '06:00:00', '18:00:00', 0),
(47, 'Yusup Supriatna', 'Saturday', '06:00:00', '17:00:00', 0),
(48, 'Nabil Muthi Maulani', 'Saturday', '06:00:00', '18:00:00', 0),
(49, 'Alvin Austin', 'Sunday', '06:00:00', '17:00:00', 0),
(50, 'Raihan Ramadhan', 'Sunday', '06:00:00', '18:00:00', 0),
(51, 'Yusup Supriatna', 'Sunday', '06:00:00', '17:00:00', 0),
(54, 'Fadly Faturrohman', 'Sunday', '06:00:00', '18:00:00', 0),
(56, 'Keenan Krier', 'Thursday', '06:00:00', '17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `judul_laporan` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `file` text NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Laporan Sedang Ditinjau','Laporan Diterima','Laporan Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `role` enum('petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_pengguna`, `email`, `password`, `nama_pengguna`, `role`) VALUES
(3, 'alvin.austin4@gmail.com', '$2y$10$YiQLHFQPifCrUFjzJouQ/e//74Uzc7MZVYGPKw9Ex2uvb9KerXkmS', 'PAK RT', 'admin'),
(4, 'raihanramadhan09@gmail.com', '$2y$10$/l2IMutIQLMHdWHljnVy0.Vqr0Ha3qh22/h260UszBk48OoeNVrsm', 'Raihan Ramadhan', 'petugas'),
(5, 'yusup@gmail.com', '$2y$10$O898lUVwOSZtih7Az2.HCu7LH2x8QefaLiqKasP2aKLHtzFzTKkiW', 'Yusup Supriatna', 'petugas'),
(8, 'nabilmuthi77@gmail.com', '$2y$10$uzT4jtXzowkA2iJ6r0OYsu87qjCNIsM4bz809baKTWk6ogFXlckGm', 'Nabil Muthi Maulani', 'petugas'),
(9, 'wandesay85@gmail.com', '$2y$10$BmNrbvt8svytedcKzyf4ueCkBQyuGEk2j4WPDaA8fVXKgKMtSNxXG', 'Alvin Austin', 'petugas'),
(10, 'fadly@gmail.com', '$2y$10$AlkI61ViJzDckAiOteQG9.HySA3X09DTIoQztAyU4e2lLYnc9xnQ2', 'Fadly Faturrohman', 'petugas'),
(12, 'jaguar@gmail.com', '$2y$10$Sw1BpSzVezqG2MUcyQOakOLXlKsOir8Xp6CXcqfZ/fV6tYO3Oa57e', 'Keenan Krier', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `nama_roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'petugas'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `nama_shift` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nama_shift`) VALUES
(1, 'pagi'),
(2, 'malam');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_warga` char(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `role` enum('warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `email`, `password`, `nama_warga`, `jenis_kelamin`, `role`) VALUES
(1, 'warga1@gmail.com', '$2y$10$0qjfKX0ij8wdQf10ifSe2.M7tl1I.xCKqHMhjYJ2KjluuK2PHdb4u', 'Asep Rocky', 'Laki-Laki', 'warga'),
(2, 'warga2@gmail.com', '$2y$10$ttaWIjupzkczRP2cWoLuk.U2v2cqacBB1rxXSKj85LeQetvgrh21q', 'Adi Suwarna', 'Laki-Laki', 'warga'),
(3, 'warga3@gmail.com', '$2y$10$R09JVxeYr6o6ervkYM0HZ.3ExNF.dTdqujUAjfwZ8eBCHS7aw7tai', 'Trina Ramadhian', 'Perempuan', 'warga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
