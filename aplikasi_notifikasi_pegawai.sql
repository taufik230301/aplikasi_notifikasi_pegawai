-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_notifikasi_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `tgl_dikirim` date NOT NULL,
  `mulai` date NOT NULL,
  `berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_user`, `perihal`, `tgl_dikirim`, `mulai`, `berakhir`) VALUES
(15, '5ee3e835147bb9df5ea7e441142a65e2', 'Cuti Liburan', '2022-06-13', '2022-06-13', '2022-07-13'),
(17, 'f192775dc12c6923967fb50137c67a40', 'Cuti Melahirkan', '2022-06-20', '2022-06-20', '2022-06-30'),
(18, 'f192775dc12c6923967fb50137c67a40', 'Cuti Liburan', '2022-06-20', '2022-06-21', '2022-06-30'),
(19, 'f192775dc12c6923967fb50137c67a40', 'Cuti Melahirkan', '2022-06-20', '2022-06-21', '2022-07-01'),
(20, 'f192775dc12c6923967fb50137c67a40', 'Cuti Melahirkan', '2022-06-20', '2022-06-20', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum\'at'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja`
--

CREATE TABLE `jam_kerja` (
  `id_jam_kerja` int(11) NOT NULL,
  `jam_kerja_start` time NOT NULL,
  `jam_kerja_end` time NOT NULL,
  `id_hari` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam_kerja`
--

INSERT INTO `jam_kerja` (`id_jam_kerja`, `jam_kerja_start`, `jam_kerja_end`, `id_hari`, `id_user`) VALUES
(20, '07:39:20', '15:39:33', 1, '5ee3e835147bb9df5ea7e441142a65e2'),
(21, '21:39:50', '02:39:53', 2, '5ee3e835147bb9df5ea7e441142a65e2'),
(22, '22:40:15', '02:40:18', 3, '5ee3e835147bb9df5ea7e441142a65e2'),
(23, '21:40:32', '03:40:35', 4, '5ee3e835147bb9df5ea7e441142a65e2'),
(24, '21:40:48', '01:40:48', 5, '5ee3e835147bb9df5ea7e441142a65e2'),
(25, '21:40:02', '03:41:01', 6, '5ee3e835147bb9df5ea7e441142a65e2'),
(29, '07:07:57', '07:07:59', 1, 'f192775dc12c6923967fb50137c67a40'),
(30, '07:08:08', '07:08:14', 2, 'f192775dc12c6923967fb50137c67a40'),
(31, '07:10:18', '11:08:21', 3, 'f192775dc12c6923967fb50137c67a40'),
(32, '07:08:40', '07:08:44', 4, 'f192775dc12c6923967fb50137c67a40'),
(33, '07:08:54', '07:11:54', 5, 'f192775dc12c6923967fb50137c67a40'),
(34, '07:12:05', '07:09:10', 6, 'f192775dc12c6923967fb50137c67a40');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_notifikasi`
--

CREATE TABLE `kategori_notifikasi` (
  `id_kategori_notifikasi` int(11) NOT NULL,
  `kategori_notifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_notifikasi`
--

INSERT INTO `kategori_notifikasi` (`id_kategori_notifikasi`, `kategori_notifikasi`) VALUES
(1, 'Cuti'),
(2, 'Jam Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `id_user_penerima` varchar(255) NOT NULL,
  `id_kategori_notifikasi` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `pesan`, `id_user_penerima`, `id_kategori_notifikasi`, `date_created`) VALUES
(23, 'notif', '5ee3e835147bb9df5ea7e441142a65e2', 2, '2022-06-13'),
(35, 'Jam Kerja Malian Tanggal 2022/06/17.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-17'),
(36, 'Jam Kerja Feny Tanggal 2022/06/17.', '5ee3e835147bb9df5ea7e441142a65e2', 2, '2022-06-17'),
(37, 'Jam Kerja Taufiiqul Hakim Tanggal 2022/06/20.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-20'),
(38, 'Jam Kerja Taufiiqul Hakim Tanggal 2022/06/20.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-20'),
(39, 'Jam Kerja Taufiiqul Hakim Tanggal 2022/06/20.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-20'),
(40, 'Jam Kerja Taufiiqul Hakim Tanggal 2022/06/20.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-20'),
(41, 'Jam Kerja Taufiiqul Hakim Tanggal 2022/06/20.', 'f192775dc12c6923967fb50137c67a40', 2, '2022-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_user_detail` varchar(255) NOT NULL,
  `id_user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `id_user_detail`, `id_user_level`) VALUES
('4b38218274942264b5754a9de67dc2cf', 'hrd', 'hrd@gmail.com', '123', '4b38218274942264b5754a9de67dc2cf', 2),
('5ee3e835147bb9df5ea7e441142a65e2', 'feny', 'fennyreskiwulandari24@gmail.com', '123', '5ee3e835147bb9df5ea7e441142a65e2', 3),
('ec647b7e4a757b364852d69bb55fbc2b', 'admin', 'admin@gmail.com', '123', 'ec647b7e4a757b364852d69bb55fbc2b', 1),
('f192775dc12c6923967fb50137c67a40', 'malian', 'taufiiqul.hakim@binus.ac.id', '123', 'f192775dc12c6923967fb50137c67a40', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(255) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `title_posisi` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `mulai_bekerja` date DEFAULT NULL,
  `akhir_bekerja` date DEFAULT NULL,
  `updated_jam_kerja` date DEFAULT NULL,
  `id_status_verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama_lengkap`, `jabatan`, `title_posisi`, `jenis_kelamin`, `no_telp`, `alamat`, `mulai_bekerja`, `akhir_bekerja`, `updated_jam_kerja`, `id_status_verifikasi`) VALUES
('4b38218274942264b5754a9de67dc2cf', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
('5ee3e835147bb9df5ea7e441142a65e2', 'Feny', 'Supply Chain Management', 'Electrical Engineering', 'L', '082176350289', 'Jl.Belanti', '2022-07-14', '2022-09-22', '2022-06-17', 2),
('ec647b7e4a757b364852d69bb55fbc2b', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1),
('f192775dc12c6923967fb50137c67a40', 'Taufiiqul Hakim', 'Supply Chain Management', 'Electrical Engineering', 'L', '+62812781728', 'Jl. Sekip', '2022-07-01', '2022-09-09', '2022-06-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'HRD'),
(3, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`id_jam_kerja`);

--
-- Indexes for table `kategori_notifikasi`
--
ALTER TABLE `kategori_notifikasi`
  ADD PRIMARY KEY (`id_kategori_notifikasi`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `id_jam_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kategori_notifikasi`
--
ALTER TABLE `kategori_notifikasi`
  MODIFY `id_kategori_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
