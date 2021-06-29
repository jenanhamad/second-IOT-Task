-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 05:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dirction`
--

-- --------------------------------------------------------

--
-- Table structure for table `dirction`
--

CREATE TABLE `dirction` (
  `id` int(1) NOT NULL,
  `forward` varchar(1) NOT NULL,
  `stopd` varchar(1) NOT NULL,
  `backward` varchar(1) NOT NULL,
  `leftD` varchar(1) NOT NULL,
  `rightD` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dirction`
--

INSERT INTO `dirction` (`id`, `forward`, `stopd`, `backward`, `leftD`, `rightD`) VALUES
(1, '', '', '', 'L', ''),
(2, 'F', '', '', '', ''),
(3, '', '', 'B', '', ''),
(4, '', 'S', '', '', ''),
(5, '', '', 'B', '', ''),
(6, '', '', '', '', 'R'),
(7, 'F', '', '', '', ''),
(8, '', 'S', '', '', ''),
(9, '', '', 'B', '', ''),
(10, '', '', 'B', '', ''),
(11, '', '', 'B', '', ''),
(12, '', '', 'B', '', ''),
(13, '', '', 'B', '', ''),
(14, '', '', 'B', '', ''),
(15, '', '', 'B', '', ''),
(16, '', '', 'B', '', ''),
(17, '', '', 'B', '', ''),
(18, '', '', 'B', '', ''),
(19, '', '', '', 'L', ''),
(20, '', '', '', 'L', ''),
(21, '', 'S', '', '', ''),
(22, '', '', 'B', '', ''),
(23, '', '', '', 'L', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dirction`
--
ALTER TABLE `dirction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dirction`
--
ALTER TABLE `dirction`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
