-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 22, 2022 at 03:16 PM
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
-- Table structure for table `purchase_invoice`
--

DROP TABLE IF EXISTS `purchase_invoice`;
CREATE TABLE IF NOT EXISTS `purchase_invoice` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `vendor_category_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_date` date NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
