-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2023 at 08:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `status` int(11) NOT NULL
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
(30, 'Raihan Ramadhan', 'Tuesday', '06:00:00', '18:00:00', 1),
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
(54, 'Fadly Faturrohman', 'Sunday', '06:00:00', '18:00:00', 0);

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
(3, 'alvin.austin4@gmail.com', '$2y$10$LwH1QM4TbM3oGLe7lXBQFuebzNgyBpwQPUpFG6LtI7P9rorH6xYWm', 'King Cobra v2', 'admin'),
(4, 'raihanramadhan09@gmail.com', '$2y$10$/l2IMutIQLMHdWHljnVy0.Vqr0Ha3qh22/h260UszBk48OoeNVrsm', 'Raihan Ramadhan', 'petugas'),
(5, 'yusup@gmail.com', '$2y$10$O898lUVwOSZtih7Az2.HCu7LH2x8QefaLiqKasP2aKLHtzFzTKkiW', 'Yusup Supriatna', 'petugas'),
(8, 'nabilmuthi77@gmail.com', '$2y$10$uzT4jtXzowkA2iJ6r0OYsu87qjCNIsM4bz809baKTWk6ogFXlckGm', 'Nabil Muthi Maulani', 'petugas'),
(9, 'wandesay85@gmail.com', '$2y$10$BmNrbvt8svytedcKzyf4ueCkBQyuGEk2j4WPDaA8fVXKgKMtSNxXG', 'Alvin Austin', 'petugas'),
(10, 'fadly@gmail.com', '$2y$10$AlkI61ViJzDckAiOteQG9.HySA3X09DTIoQztAyU4e2lLYnc9xnQ2', 'Fadly Faturrohman', 'petugas');

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
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
