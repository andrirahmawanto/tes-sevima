-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 07:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fullstack_sevima`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_pengguna` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `email`, `nama_pengguna`) VALUES
(1, 'andri', '202cb962ac59075b964b07152d234b70', 'andri.rahmawanto1356@gmail.com', 'Andri Rahmawanto');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `like` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `id_pengguna`, `foto`, `isi`, `like`, `comment`, `date`) VALUES
(2, 1, 'foto-02-16-2023_0132.jpg', 'Banyak banget kan keuntungannya? Tunggu apalagi, yuk bikin website untuk bisnismu', 0, '', '2023-02-16');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_post`
-- (See below for the actual view)
--
CREATE TABLE `v_post` (
`id_post` int(11)
,`id_pengguna` int(11)
,`nama_pengguna` varchar(255)
,`foto` varchar(255)
,`isi` text
,`like` int(11)
,`comment` varchar(255)
,`date` date
);

-- --------------------------------------------------------

--
-- Structure for view `v_post`
--
DROP TABLE IF EXISTS `v_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_post`  AS SELECT `a`.`id_post` AS `id_post`, `a`.`id_pengguna` AS `id_pengguna`, `b`.`nama_pengguna` AS `nama_pengguna`, `a`.`foto` AS `foto`, `a`.`isi` AS `isi`, `a`.`like` AS `like`, `a`.`comment` AS `comment`, `a`.`date` AS `date` FROM (`tb_post` `a` left join `tb_pengguna` `b` on(`a`.`id_pengguna` = `b`.`id_pengguna`)) ORDER BY `a`.`id_post` AS `DESCdesc` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
