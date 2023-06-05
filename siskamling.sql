-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:03 AM
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
(1, 'Nabil Muthi Maulani', 'Foto Bebas', 'foto-selfie.png', '2023-05-25 09:28:24', 'Hadir'),
(2, 'Raihan Ramadhan', 'Foto depan gapura', 'foto-selfie.png', '2023-05-25 09:35:18', 'Tidak Hadir'),
(3, 'nabil muthi', 'Foto dengan dua jari', '5063480.jpg', '2023-05-26 09:11:20', 'Tidak Hadir'),
(5, 'Alvin Austin', 'Foto depan Pos Ronda', '86266071_693186561419887_4854250159099346944_n.jpg', '2023-05-28 21:03:39', 'Hadir'),
(6, 'Nabil Muthi Maulani', 'Foto depan Pos Ronda', 'a73.jpg', '2023-05-29 08:29:35', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Menunggu Verifikasi','Diterima','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_pengguna` int(11) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_pengguna`, `hari`, `jam_masuk`, `jam_keluar`, `status`) VALUES
(3, 9, 'Senin', '06:00:00', '17:00:00', 0),
(4, 4, 'Jumat', '06:00:00', '15:00:00', 0),
(5, 5, 'Rabu', '06:00:00', '17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pesan` text NOT NULL,
  `file` text NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_warga`, `alamat`, `pesan`, `file`, `tanggal_input`) VALUES
(1, 'Adi Suwarna', 'PERUM PONDOK MELATI BLOK L12/10', 'Aya ular asup ka imah ', 'ular1.jpg', '2023-05-30 03:16:19'),
(2, 'Ujang Kusnandar', 'Pondok Melati F4/10', 'Baju di jemuran hilang', 'jemuran1.jpg', '2023-05-30 03:18:09'),
(3, 'Ahmad Subarjo', 'PERUM PONDOK MELATI BLOK K9/25', 'Anak saya belum pulang dari tanggal 10 mei, dengan ciri ciri seperti berikut:\r\n\r\nkulit sawo matang\r\ntinggi badan 155cm\r\njenis kelamin laki-laki\r\npakaian menggunakan seragam sekolah smp\r\n\r\napabila ada yang menemukan hub 0895xxxxxxx', 'anak-hilang.jpg', '2023-05-30 03:22:50');

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
(4, 'raihanramadhan09@gmail.com', '$2y$10$tlmzyt0I6OB.ui0x5sJIfOuyWuRG48WVAZqox7i76aXN/OtcxXba6', 'Raihan Ramadhan', 'petugas'),
(5, 'yusup@gmail.com', '$2y$10$iUy/PBLQ/DmCc8K5SWczpusrsnWb0SKeeDdAgPju3qq8bJu8VaL3W', 'Yusup Supriatna', 'petugas'),
(8, 'nabilmuthi77@gmail.com', '$2y$10$iklBKu8CAss5S152ue2fgOwB/Yp2w1k65B0Tu941BO/TinRyTBaMu', 'Nabil Muthi Maulani', 'petugas'),
(9, 'wandesay85@gmail.com', '$2y$10$fr1Y9JGvdGfaFnHfW21XjONlQGQT8tqX67GKWeR319xOCSR25dYrG', 'Alvin Austin', 'petugas'),
(10, 'fadly@gmail.com', '$2y$10$gFIdgXa6Wx0XTXo.DIZlyeBo.ThbWXYRzCe.wauYNI9d5cnlZzmyi', 'Fadly Faturrohman', 'petugas');

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
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `id_pengguna` (`nama_pengguna`),
  ADD UNIQUE KEY `nama_pengguna` (`nama_pengguna`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `nama_pengguna` (`nama_pengguna`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
