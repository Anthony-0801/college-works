-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2024 at 08:56 AM
-- Server version: 8.0.36
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raffle`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket_entries`
--

DROP TABLE IF EXISTS `ticket_entries`;
CREATE TABLE IF NOT EXISTS `ticket_entries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mobile_number` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket_entries`
--

INSERT INTO `ticket_entries` (`id`, `mobile_number`, `created_at`) VALUES
(4, 9108866178, '2024-03-14 15:58:59'),
(5, 9123456789, '2024-03-14 16:05:30'),
(6, 9020250501, '2024-03-14 16:12:09'),
(7, 9987654321, '2024-03-14 16:21:38'),
(8, 9108866178, '2024-03-14 16:31:21'),
(9, 9336524378, '2024-03-14 16:51:43'),
(10, 9234561232, '2024-03-14 16:56:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
