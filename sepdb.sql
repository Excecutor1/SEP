-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 10:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_online`
--

CREATE TABLE `admin_online` (
  `id_online` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_online`
--

INSERT INTO `admin_online` (`id_online`, `id_pengguna`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(6) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`) VALUES
(1, '132307-ID-none.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cetak`
--

CREATE TABLE `cetak` (
  `id_transaksi` int(11) NOT NULL,
  `id_berkas` int(6) NOT NULL,
  `id_kertas` varchar(6) NOT NULL,
  `id_warna` varchar(6) NOT NULL,
  `id_finishing` varchar(6) NOT NULL,
  `salinan` char(3) NOT NULL,
  `waktu_proses` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cetak`
--

INSERT INTO `cetak` (`id_transaksi`, `id_berkas`, `id_kertas`, `id_warna`, `id_finishing`, `salinan`, `waktu_proses`, `keterangan`) VALUES
(2, 1, 'kts01', 'wrn2', 'fin01', '1', 0, 'llihvbw');

-- --------------------------------------------------------

--
-- Table structure for table `finishing`
--

CREATE TABLE `finishing` (
  `id_finishing` varchar(6) NOT NULL,
  `finishing` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finishing`
--

INSERT INTO `finishing` (`id_finishing`, `finishing`) VALUES
('fin01', 'Jilid'),
('Fin02', 'Staples');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` varchar(3) NOT NULL,
  `jenis_transaksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_transaksi`
--

INSERT INTO `jenis_transaksi` (`id_jenis_transaksi`, `jenis_transaksi`) VALUES
('tr1', 'cetak dokumen'),
('tr2', 'isi saldo');

-- --------------------------------------------------------

--
-- Table structure for table `kertas`
--

CREATE TABLE `kertas` (
  `id_kertas` varchar(6) NOT NULL,
  `kertas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kertas`
--

INSERT INTO `kertas` (`id_kertas`, `kertas`) VALUES
('kts01', 'A4'),
('kts02', 'F4');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` varchar(6) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
('lvl1', 'Admin'),
('lvl2', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_level` varchar(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` char(12) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `kata_sandi` char(15) NOT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_level`, `nama_lengkap`, `alamat`, `email`, `no_tlp`, `nama_pengguna`, `kata_sandi`, `saldo`) VALUES
(1, 'lvl1', 'Priya Yudha Swandana', 'perum. pondok tanggul asri', 'priyayudha.sw27@gmai', '081330375369', 'dono', '123', 0),
(2, 'lvl2', 'Aditia Afif', 'lumajang', 'adit@gmail.com', '080808800800', 'adit', '123', 100000),
(3, 'lvl1', 'Rizal', 'Jember', 'a@gmail.com', '0822123265', 'Rizal87', '1234', 0),
(4, 'lvl2', 'dana', 'jlg', 'igli', '97', 'dana', '123', 115000),
(5, 'lvl2', 'deta', 'olaoiwbo', 'doscok@gmail.com', '162124', 'deta', '123', 0),
(6, 'lvl2', 'hana', 'tanggul', 'hana@yuhu', '09812098123', 'hana', '123', 0),
(7, 'lvl2', 'arif', 'baturaden', 'dos.cok@gmail.com', '08108108108', 'arif', '123', 0),
(8, 'lvl2', 'adit', 'lumajang', 'aditia_loverbarca@yahoo.com', '12345', 'adit98', '123', 0),
(9, 'lvl2', 'adit', 's', 'aditiaafif98@gmail.com', '23', 'donoa', '2', 0),
(10, 'lvl2', 'adit', 'wdd', 'aditi@jhkj', '23', 'adit98', '2', 0),
(11, 'lvl2', 'Priya Yudha Swandana', 'tanggul', 'priyayudha.sw27@gmail.com', '081330374369', 'priyayudha', '123', 150000),
(12, 'lvl2', 'Aditia Afif A', 'Lumajang', 'aditiaafif98@gmail.com', '085746507505', 'Arfian98', '123', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Belum Cetak'),
(2, 'Sudah Cetak'),
(3, 'saldo tidak cukup');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_jenis_transaksi` varchar(3) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `waktu_selesai` int(11) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topup` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_jenis_transaksi`, `id_admin`, `id_pengguna`, `id_status`, `waktu_selesai`, `harga`, `waktu`, `topup`) VALUES
(2, 'tr1', NULL, 2, 1, NULL, NULL, '2019-01-03 13:43:05', NULL),
(3, 'tr1', NULL, 4, 1, NULL, NULL, '2019-01-03 15:35:03', 20000),
(4, 'tr1', NULL, 4, 1, NULL, NULL, '2019-01-03 15:36:09', 10000),
(5, 'tr2', NULL, 4, 1, NULL, NULL, '2019-01-03 16:00:40', 50000),
(7, 'tr2', NULL, 4, 1, NULL, NULL, '2019-01-03 16:40:38', 25000),
(8, 'tr2', NULL, 2, 1, NULL, NULL, '2019-01-03 16:42:32', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `id_warna` varchar(6) NOT NULL,
  `warna` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id_warna`, `warna`) VALUES
('wrn1', 'Berwarna'),
('wrn2', 'Hitam-putih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_online`
--
ALTER TABLE `admin_online`
  ADD PRIMARY KEY (`id_online`),
  ADD UNIQUE KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_pengguna_2` (`id_pengguna`),
  ADD KEY `id_pengguna_3` (`id_pengguna`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `berkas` (`berkas`),
  ADD KEY `berkas_2` (`berkas`);

--
-- Indexes for table `cetak`
--
ALTER TABLE `cetak`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `id_kertas` (`id_kertas`),
  ADD KEY `id_warna` (`id_warna`),
  ADD KEY `id_finishing` (`id_finishing`);

--
-- Indexes for table `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`id_finishing`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `kertas`
--
ALTER TABLE `kertas`
  ADD PRIMARY KEY (`id_kertas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_satatus` (`id_status`),
  ADD KEY `id_jenis_transaksi` (`id_jenis_transaksi`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_online`
--
ALTER TABLE `admin_online`
  MODIFY `id_online` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_online`
--
ALTER TABLE `admin_online`
  ADD CONSTRAINT `admin_online_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Constraints for table `cetak`
--
ALTER TABLE `cetak`
  ADD CONSTRAINT `cetak_ibfk_1` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id_warna`),
  ADD CONSTRAINT `cetak_ibfk_3` FOREIGN KEY (`id_kertas`) REFERENCES `kertas` (`id_kertas`),
  ADD CONSTRAINT `cetak_ibfk_4` FOREIGN KEY (`id_finishing`) REFERENCES `finishing` (`id_finishing`),
  ADD CONSTRAINT `cetak_ibfk_5` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `cetak_ibfk_6` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin_online` (`id_online`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_jenis_transaksi`) REFERENCES `jenis_transaksi` (`id_jenis_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
