-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 01:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `linkovi`
--

CREATE TABLE `linkovi` (
  `id` int(11) NOT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linkovi`
--

INSERT INTO `linkovi` (`id`, `url`, `code`, `created`) VALUES
(100000008, 'http://www.pik.ba', '1njci0', '2020-07-21 11:16:02'),
(100000009, 'http://localhost/url/1njci0', '1njci1', '2020-07-21 11:33:41'),
(100000010, 'https://google.ba', '1njci2', '2020-07-21 11:33:56'),
(100000011, 'http://google.ba', '1njci3', '2020-07-21 11:35:35'),
(100000012, 'http://www.google.ba', '1njci4', '2020-07-21 11:44:25'),
(100000013, 'http://pik.com', '1njci5', '2020-07-21 11:45:32'),
(100000014, 'http://www.gmail.ba', '1njci6', '2020-07-21 11:55:25'),
(100000015, 'http://pik.ba', '1njci7', '2020-07-21 12:28:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linkovi`
--
ALTER TABLE `linkovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
