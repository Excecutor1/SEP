-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2019 pada 19.55
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin_online`
--

CREATE TABLE `admin_online` (
  `id_online` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_online`
--

INSERT INTO `admin_online` (`id_online`, `id_pengguna`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(6) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`) VALUES
(2, '115-252-1-PB3.pdf'),
(1, '412-1312-1-PB1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak`
--

CREATE TABLE `cetak` (
  `id_transaksi` int(11) NOT NULL,
  `id_berkas` int(6) NOT NULL,
  `id_kertas` varchar(6) NOT NULL,
  `id_warna` varchar(6) NOT NULL,
  `id_finishing` varchar(6) NOT NULL,
  `salinan` char(3) NOT NULL,
  `waktu_proses` int(11) NOT NULL,
  `harga` char(15) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cetak`
--

INSERT INTO `cetak` (`id_transaksi`, `id_berkas`, `id_kertas`, `id_warna`, `id_finishing`, `salinan`, `waktu_proses`, `harga`, `keterangan`) VALUES
(1, 1, 'kts02', 'wrn1', 'Fin02', '1', 0, '', 's'),
(2, 2, 'kts01', 'wrn1', 'fin01', '1', 0, '', 'w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `finishing`
--

CREATE TABLE `finishing` (
  `id_finishing` varchar(6) NOT NULL,
  `finishing` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `finishing`
--

INSERT INTO `finishing` (`id_finishing`, `finishing`) VALUES
('fin01', 'Jilid'),
('Fin02', 'Staples');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kertas`
--

CREATE TABLE `kertas` (
  `id_kertas` varchar(6) NOT NULL,
  `kertas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kertas`
--

INSERT INTO `kertas` (`id_kertas`, `kertas`) VALUES
('kts01', 'A4'),
('kts02', 'F4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` varchar(6) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
('lvl1', 'Admin'),
('lvl2', 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_level` varchar(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` char(12) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `kata_sandi` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_level`, `nama_lengkap`, `alamat`, `email`, `no_tlp`, `nama_pengguna`, `kata_sandi`) VALUES
(1, 'lvl1', 'Priya Yudha Swandana', 'perum. pondok tanggul asri', 'priyayudha.sw27@gmai', '081330375369', 'dono', '123'),
(2, 'lvl2', 'Aditia Afif', 'lumajang', 'adit@gmail.com', '080808800800', 'adit', '123'),
(3, 'lvl1', 'Rizal', 'Jember', 'a@gmail.com', '0822123265', 'Rizal87', '1234'),
(4, 'lvl2', 'dana', 'jlg', 'igli', '97', 'dana', '123'),
(5, 'lvl2', 'deta', 'olaoiwbo', 'doscok@gmail.com', '162124', 'deta', '123'),
(6, 'lvl2', 'hana', 'tanggul', 'hana@yuhu', '09812098123', 'hana', '123'),
(7, 'lvl2', 'arif', 'baturaden', 'dos.cok@gmail.com', '08108108108', 'arif', '123'),
(8, 'lvl2', 'adit', 'lumajang', 'aditia_loverbarca@yahoo.com', '12345', 'adit98', '123'),
(9, 'lvl2', 'adit', 's', 'aditiaafif98@gmail.com', '23', 'donoa', '2'),
(10, 'lvl2', 'adit', 'wdd', 'aditi@jhkj', '23', 'adit98', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Belum Cetak'),
(2, 'Sudah Cetak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `waktu_selesai` int(11) DEFAULT NULL,
  `harga_total` char(20) DEFAULT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_admin`, `id_pengguna`, `id_status`, `waktu_selesai`, `harga_total`, `waktu`) VALUES
(1, NULL, 2, 1, NULL, NULL, '2019-01-03 01:45:36'),
(2, NULL, 2, 1, NULL, NULL, '2019-01-03 01:46:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `id_warna` varchar(6) NOT NULL,
  `warna` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warna`
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
  ADD KEY `id_satatus` (`id_status`);

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
  MODIFY `id_berkas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_online`
--
ALTER TABLE `admin_online`
  ADD CONSTRAINT `admin_online_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `cetak`
--
ALTER TABLE `cetak`
  ADD CONSTRAINT `cetak_ibfk_1` FOREIGN KEY (`id_warna`) REFERENCES `warna` (`id_warna`),
  ADD CONSTRAINT `cetak_ibfk_3` FOREIGN KEY (`id_kertas`) REFERENCES `kertas` (`id_kertas`),
  ADD CONSTRAINT `cetak_ibfk_4` FOREIGN KEY (`id_finishing`) REFERENCES `finishing` (`id_finishing`),
  ADD CONSTRAINT `cetak_ibfk_5` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `cetak_ibfk_6` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin_online` (`id_online`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
