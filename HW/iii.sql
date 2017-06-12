-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2017 at 04:12 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iii`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL,
  `power` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `speed` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `power`, `contact`, `speed`) VALUES
(0, '5', '5464', '564654546'),
(1, '1', '0', '2'),
(2, '4', '8', '5'),
(3, '0', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `ooo`
--

CREATE TABLE IF NOT EXISTS `ooo` (
  `id` int(10) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ooo`
--

INSERT INTO `ooo` (`id`, `account`, `password`, `name`) VALUES
(1, '123', '123', '123'),
(2, '456', '$2y$10$pBN1Zs2w9vV/KfaXWMid.uUWjJW0v3DEADb6JcBo8OBTqx2fNgT7S', '456'),
(3, '789', '$2y$10$ZEZqtxwweGioDLdV2aYOcOtrCUryXf/GzWc9Dln2EwHdFnZuPbKWu', '789'),
(4, '753', '$2y$10$gyz1.YDk5zr7FYjIjXoxXeX6joGbl1r3AqouF8/.FkUuRRgId6VEq', '753'),
(5, '147', '$2y$10$PMsMh4N30iB5zIzbmfWmgeDbEgtkoqQrWWzv2nqjh8o8aLmcmw6Zq', '147'),
(6, '444', '$2y$10$N6ZyOmlskn/ZLt/oKzA.peIUXOQZ/uF32OxAPUn/SoONreYePDgUy', '444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ooo`
--
ALTER TABLE `ooo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ooo`
--
ALTER TABLE `ooo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
