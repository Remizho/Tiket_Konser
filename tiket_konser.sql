-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 11:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_konser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('A2', 'Springfield', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tiket` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` date NOT NULL,
  `tempat_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_event` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `id_tiket`, `nama_event`, `tanggal_event`, `tempat_event`, `waktu_event`) VALUES
('E11', 'T13', 'Tommorowlandd', '2018-05-07', 'Gelora Bung Karno', '10:11'),
('E12', 'T12', 'Ultra Music Festival', '2018-04-25', 'Kemayoran City', '20:12'),
('E65', 'T12', 'Right Now', '2018-05-03', 'Close The Door', '12:32'),
('E90', 'T12', 'Crash Better Bandicot', '2018-05-17', 'Malang City Hardcore', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tiket` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_beli` int(100) NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_user`, `id_event`, `id_tiket`, `jumlah_beli`, `total_harga`) VALUES
('B12', 'I12', 'E12', 'T12', 1, 20000),
('I231', 'I02', 'E11', 'T99', 19, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `availability` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_event`, `kategori`, `qty`, `harga`, `availability`) VALUES
('T12', 'Ultra Music Festival', 'Premium', 90, 20000, 'Yes'),
('T13', 'Tommorowland', 'VIP', 90, 12000, 'Yes'),
('T14', 'Tommorowlandd', 'Premium', 20, 10000, 'Yes'),
('T99', 'Versce', 'VIP', 20, 100000, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `jenis_kelamin`, `email`, `alamat`, `no_telp`) VALUES
('I02', 'Violet Evergarden', 'M', 'violet@ever.gardens', 'Avenue Street Gg V RT 042', 894762131),
('I12', 'Arturia Pendragon', 'F', 'arturia@pendragon.com', 'Camelot Castle Street No 12', 897462657),
('I67', 'Versailles Burning Stake', 'L', 'versailles@burning.stake', 'Jl. Avenue Street Gg. V No 12', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
