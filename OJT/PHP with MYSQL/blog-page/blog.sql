-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2024 at 03:40 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `review_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_replies_reviews1_idx` (`review_id`),
  KEY `fk_replies_users1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `review_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'HAHAAHAHA', '2024-03-17 11:04:37', '2024-03-17 11:04:37'),
(2, 3, 1, 'HAHAHAHA', '2024-03-17 11:05:59', '2024-03-17 11:05:59'),
(3, 3, 2, 'LOL :)', '2024-03-17 11:36:52', '2024-03-17 11:36:52'),
(4, 1, 2, 'YES VERY NICE :)', '2024-03-17 11:37:30', '2024-03-17 11:37:30'),
(5, 2, 3, 'Hello babi <3\r\nmwah mwah ', '2024-03-17 11:39:11', '2024-03-17 11:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_users_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello everyone what a nice! What a nice Lorem ipsum!', '2024-03-17 09:15:02', '2024-03-17 09:15:02'),
(2, 2, 'Hello hello', '2024-03-17 09:42:17', '2024-03-17 09:42:17'),
(3, 3, 'I love you baby gril! <3', '2024-03-17 09:47:01', '2024-03-17 09:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anthony', 'Cabulang', 'zyxanthony15@gmail.com', 'dedcd3e6accaed3c85bb27318deb0ea0', '2024-03-16 23:28:14', '2024-03-16 23:28:14'),
(2, 'John', 'Doe', 'john.doe@email.com', 'dac13ededea0c52ab9eed85689861f48', '2024-03-17 09:23:12', '2024-03-17 09:23:12'),
(3, 'Juan', 'DeOnliWan', 'juan.deonliwan@email.com', '7e5da5ece8edaa937e431c8600377c91', '2024-03-17 09:46:18', '2024-03-17 09:46:18');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `fk_replies_reviews1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`),
  ADD CONSTRAINT `fk_replies_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
