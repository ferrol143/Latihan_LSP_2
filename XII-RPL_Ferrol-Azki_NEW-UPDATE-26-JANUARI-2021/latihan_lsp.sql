-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 02:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta_ppdb`
--

CREATE TABLE `peserta_ppdb` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `warga_negara` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `penghasilan_orangtua` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_ppdb`
--

INSERT INTO `peserta_ppdb` (`id`, `nama_lengkap`, `tempat`, `tanggal_lahir`, `warga_negara`, `alamat`, `email`, `no_tlp`, `asal_sekolah`, `ayah`, `ibu`, `penghasilan_orangtua`, `foto`) VALUES
(13, 'Ferrol Azki Mashudi', 'Bogor', '2022-01-04', 'Indonesia', 'Empang RT 01 / 05', 'asd@gmail.com', 85123456, 'SMK INFORMATIKA PESAT', 'SENSOR', 'SENSOR', '25000000', 'istana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(3, 'ferrol', 'ferrol123@gmail.com', '$2y$10$Qz2p3yQzS0LivY3z1uNNDetS2nRPZuSfw5hO5loBbXK5JySc.IB6K', 'admin'),
(4, 'user', 'user123@gmail.com', '$2y$10$Tn8Evc.fHnUZoWP.NDTqwOfPje8EN.CrJJ4yf8m2DaFjDE8xs7/V2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta_ppdb`
--
ALTER TABLE `peserta_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta_ppdb`
--
ALTER TABLE `peserta_ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
