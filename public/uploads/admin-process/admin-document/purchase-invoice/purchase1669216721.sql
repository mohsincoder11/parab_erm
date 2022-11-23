-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 22, 2022 at 12:29 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parab`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreements_items_detail`
--

DROP TABLE IF EXISTS `agreements_items_detail`;
CREATE TABLE IF NOT EXISTS `agreements_items_detail` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agreements_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agreements_items_detail`
--

INSERT INTO `agreements_items_detail` (`id`, `agreements_id`, `service_id`, `quantity`, `rate`, `details`, `created_at`, `updated_at`) VALUES
(2, 3, 1, '582', '24', 'Asperiores dolor com', '2022-11-16 16:08:30', '2022-11-16 16:08:30'),
(3, 3, 3, '2', '3', 'dfdf', '2022-11-16 16:08:30', '2022-11-16 16:08:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
