-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 02:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `electricity_data`
--

CREATE TABLE `electricity_data` (
  `id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `voltage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electricity_data`
--

INSERT INTO `electricity_data` (`id`, `start_time`, `end_time`, `voltage`) VALUES
(1, '2024-03-11 23:59:00', '2024-03-10 23:59:00', 13.8),
(2, '2024-03-12 00:02:00', '2024-03-13 00:02:00', 22.4),
(3, '2024-03-10 02:12:00', '2024-03-10 02:12:00', 21.6),
(4, '2024-03-10 13:20:00', '2024-03-10 13:21:00', 24.2),
(5, '2024-03-10 00:39:00', '2024-03-10 00:41:00', 27.2),
(6, '2024-03-10 14:42:00', '2024-03-10 14:43:00', 18.8),
(7, '2024-03-10 00:57:00', '2024-03-10 00:56:00', 14.6),
(8, '2024-03-12 15:41:00', '2024-03-12 03:42:00', 24.1),
(9, '2024-03-15 18:55:00', '2024-03-15 18:59:00', 13.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electricity_data`
--
ALTER TABLE `electricity_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electricity_data`
--
ALTER TABLE `electricity_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
