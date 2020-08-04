-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2020 pada 10.43
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotdokumen`
--

CREATE TABLE IF NOT EXISTS `bobotdokumen` (
  `id_dokumen` int(11) NOT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `d_bobot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotdokumen`
--

INSERT INTO `bobotdokumen` (`id_dokumen`, `dokumen`, `d_bobot`) VALUES
(1, 'Sangat Lengkap', '5'),
(2, 'Lengkap', '4'),
(3, 'Cukup Lengkap', '3'),
(4, 'Kurang Lengkap', '2'),
(5, 'Sangat Kurang Lengkap', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotkriteria`
--

CREATE TABLE IF NOT EXISTS `bobotkriteria` (
  `id_bk` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `pengalaman` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `penampilan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotkriteria`
--

INSERT INTO `bobotkriteria` (`id_bk`, `nama`, `umur`, `pendidikan`, `pengalaman`, `dokumen`, `penampilan`) VALUES
('BK001', 'Gamaliel Saka Febrilian', '5', '3', '3', '4', '5'),
('BK002', 'Dwi Fahrizal', '3', '5', '5', '4', '5'),
('BK003', 'Ihwan Andrianto', '5', '4', '3', '4', '4'),
('BK004', 'Daniel Herwanda', '2', '5', '3', '3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotpenampilan`
--

CREATE TABLE IF NOT EXISTS `bobotpenampilan` (
  `id_penampilan` int(11) NOT NULL,
  `penampilan` varchar(255) DEFAULT NULL,
  `pm_bobot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotpenampilan`
--

INSERT INTO `bobotpenampilan` (`id_penampilan`, `penampilan`, `pm_bobot`) VALUES
(1, 'RAPI', '5'),
(2, 'TIDAK RAPI', '4'),
(3, 'Tindikan (Kusus Pria)', '3'),
(4, 'Bertato', '2'),
(5, 'Tindikan & Bertato', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotpendidikan`
--

CREATE TABLE IF NOT EXISTS `bobotpendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `pd_bobot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotpendidikan`
--

INSERT INTO `bobotpendidikan` (`id_pendidikan`, `pendidikan`, `pd_bobot`) VALUES
(1, 'SARJANA', '5'),
(2, 'DIPLOMA', '4'),
(3, 'SMA/SMK', '3'),
(4, 'SMP', '2'),
(5, 'SD', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotpengalaman`
--

CREATE TABLE IF NOT EXISTS `bobotpengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `pengalaman` varchar(255) DEFAULT NULL,
  `pg_bobot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotpengalaman`
--

INSERT INTO `bobotpengalaman` (`id_pengalaman`, `pengalaman`, `pg_bobot`) VALUES
(1, 'Sangat Baik', '5'),
(2, 'Baik', '4'),
(3, 'Cukup', '3'),
(4, 'Kurang', '2'),
(5, 'Sangat Kurang', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobotumur`
--

CREATE TABLE IF NOT EXISTS `bobotumur` (
  `id_umur` int(11) NOT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `u_bobot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobotumur`
--

INSERT INTO `bobotumur` (`id_umur`, `umur`, `u_bobot`) VALUES
(1, 'umur 17 sampai 23', '5'),
(2, 'umur 24 sampai 30', '4'),
(3, 'umur 31 sampai 37', '3'),
(4, 'umur 38 sampai 44', '2'),
(5, 'umur 45 sampai 50', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakaryawan`
--

CREATE TABLE IF NOT EXISTS `datakaryawan` (
  `id_karyawan` varchar(255) NOT NULL,
  `ktp` char(16) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlp` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakaryawan`
--

INSERT INTO `datakaryawan` (`id_karyawan`, `ktp`, `nama`, `alamat`, `no_tlp`) VALUES
('A001', '1234567890123456', 'Gamaliel Saka Febrilian', 'Menganti', '081234567890'),
('A002', '1111111111111111', 'Ihwan Andrianto', 'Sememi', '081111111111'),
('A003', '2222222222222222', 'Dwi Fahrizal', 'Tugu Pahlawan', '082222222222'),
('A004', '3333333333333333', 'Daniel Herwanda', 'Cerme', '083333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(255) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `bobot` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'umur', 4),
(2, 'pendidikan', 4),
(3, 'pengalaman', 5),
(4, 'dokumen', 4),
(5, 'penampilan', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(12, 'user', 'user', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobotdokumen`
--
ALTER TABLE `bobotdokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `bobotkriteria`
--
ALTER TABLE `bobotkriteria`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `bobotpenampilan`
--
ALTER TABLE `bobotpenampilan`
  ADD PRIMARY KEY (`id_penampilan`);

--
-- Indexes for table `bobotpendidikan`
--
ALTER TABLE `bobotpendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `bobotpengalaman`
--
ALTER TABLE `bobotpengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `bobotumur`
--
ALTER TABLE `bobotumur`
  ADD PRIMARY KEY (`id_umur`);

--
-- Indexes for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobotdokumen`
--
ALTER TABLE `bobotdokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bobotpenampilan`
--
ALTER TABLE `bobotpenampilan`
  MODIFY `id_penampilan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bobotpendidikan`
--
ALTER TABLE `bobotpendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bobotpengalaman`
--
ALTER TABLE `bobotpengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bobotumur`
--
ALTER TABLE `bobotumur`
  MODIFY `id_umur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
