-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2024 at 10:59 AM
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
-- Database: `board`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulletin_board`
--

DROP TABLE IF EXISTS `bulletin_board`;
CREATE TABLE IF NOT EXISTS `bulletin_board` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) DEFAULT NULL,
  `details` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bulletin_board`
--

INSERT INTO `bulletin_board` (`id`, `subject`, `details`, `created_at`) VALUES
(1, 'Random ', 'Random Posting', '2024-03-14 17:56:12'),
(2, 'Hello World', '$hello = \"Hello World!\";\r\necho $hello;', '2024-03-14 18:06:20'),
(3, 'Name', 'Hi! My name is Anthony :)', '2024-03-14 18:13:27'),
(4, '    Lorem ipsum dolor sit amet consectetur, a', '    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero libero, est ipsum impedit ducimus harum doloremque et iste, quas aperiam voluptates itaque aliquid officiis. Quam quas asperiores molestiae odio numquam.\r\n    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero libero, est ipsum impedit ducimus harum doloremque et iste, quas aperiam voluptates itaque aliquid officiis. Quam quas asperiores molestiae odio numquam.\r\n    Lorem ipsum dolor sit amet consectetur, adipisicing el', '2024-03-14 18:15:16'),
(11, 'Introduction', 'Hello baby girl', '2024-03-14 18:55:37'),
(12, 'g', 'f', '2024-03-14 18:56:57'),
(13, 'First Move', 'Summoning Jutsu: Mewing GOD uses RIZZ &quot;Hello, Baby Girl&quot;.', '2024-03-14 18:58:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
