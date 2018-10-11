-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 06:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taenam`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `nama` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `cerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`nama`, `foto`, `cerita`) VALUES
('Geka', 'carikata.png', 'Bikin Web boyy'),
('Mujahid', 'ritel5.PNG', 'sad asdsad'),
('Mujahid', 'ritel5.PNG', 'sad asdsad'),
('Mujahid', 'ritel5.PNG', 'sad asdsad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `hobi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `id`, `nama`, `pass`, `alamat`, `jk`, `hobi`) VALUES
('1231231231', 'habib', 'habibullah', 'habib', 'asdsada', 'Laki-Laki', 'Array'),
('6701170000', 'admin', 'admin', 'admin', 'kepek', 'Laki-Laki', 'Array');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
