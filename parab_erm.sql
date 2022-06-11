-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 06, 2022 at 11:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parab_erm`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

DROP TABLE IF EXISTS `allowances`;
CREATE TABLE IF NOT EXISTS `allowances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `percent` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `apply_to` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `company_id`, `type`, `percent`, `title`, `apply_to`, `created_at`, `updated_at`) VALUES
(14, 55, '%', '24', 'ASDFG', 'Gross Salary', '2022-04-28 00:23:48', '2022-04-29 00:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
CREATE TABLE IF NOT EXISTS `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL,
  `clock_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clock_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_late` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `early_leaving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_rest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `leave_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `attendance_date`, `clock_in`, `clock_out`, `time_late`, `early_leaving`, `overtime`, `total_work`, `total_rest`, `attendance_status`, `created_at`, `updated_at`, `leave_id`) VALUES
(20, 3, '2022-04-01', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', 'Half Day', '2022-04-30 04:20:42', '2022-04-30 06:26:54', NULL),
(21, 3, '2022-04-02', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', 'Half Day', '2022-04-30 04:52:34', '2022-04-30 06:26:37', NULL),
(22, 3, '2022-04-03', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', 'Half Day', '2022-04-30 06:11:49', '2022-04-30 06:11:52', NULL),
(23, 3, '2022-05-01', '10:00', '19:07', '10:00', '00:00', '19:07', '09:07', '00:00', 'present', '2022-05-28 02:09:03', '2022-05-28 05:12:07', NULL),
(24, 3, '2022-05-03', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', NULL, '2022-05-28 05:13:48', '2022-05-28 05:13:48', NULL),
(25, 3, '2022-05-04', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', NULL, '2022-05-28 05:13:58', '2022-05-28 05:13:58', NULL),
(26, 3, '2022-05-05', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', NULL, '2022-05-28 05:14:26', '2022-05-28 05:14:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `award_type` varchar(100) NOT NULL,
  `gift` varchar(50) NOT NULL,
  `cash` float NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `company_id`, `employee_id`, `department_id`, `award_type`, `gift`, `cash`, `description`, `start_date`, `created_at`, `updated_at`) VALUES
(1, 55, 4, 5, '361', 'A quae ducimus volu', 76, 'Natus quo error ut q', '1990-01-19', '2022-06-04 12:42:05', '2022-06-04 12:42:05'),
(2, 55, 3, 5, '361', 'asd', 5353.2, '3545', '2022-07-07', '2022-06-04 12:44:59', '2022-06-04 12:44:59'),
(3, 55, 3, 4, '361', 'aaea', 123, 'asdasd', '2022-07-05', '2022-06-04 13:00:47', '2022-06-04 13:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trading_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sector_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_type`, `trading_name`, `website`, `pan_no`, `tan_no`, `email`, `registration_no`, `gstin`, `company_logo`, `registered_address`, `created_at`, `updated_at`, `sector_type`, `contact_no`, `city`, `state`, `zip_code`, `contact_person_name`, `person_mobile`) VALUES
(55, 'Price and Silva Inc', 'Public Limited Companies', 'Reece Sweeney', 'https://www.henipipuqapyro.me', NULL, NULL, 'kexuzewyp@mailinator.com', NULL, NULL, '444993612_1650372291.png', 'Fugiat harum obcaec', '2022-04-19 07:14:51', '2022-04-26 07:21:58', 'Private', 'Voluptatum qui amet', 'Ut temporibus corrup', 'Daman and Diu', '15758', 'Illana Black', 'Esse quo quia eligen'),
(58, 'Ratliff and Riggs LLC', 'Private Limited Companies', 'Fritz Gilbert', 'https://www.migupuvag.tv', NULL, NULL, 'jysudu@mailinator.com', NULL, NULL, NULL, 'Enim pariatur Do ab', '2022-04-23 00:31:14', '2022-04-23 00:31:14', 'Semi-Goverment', 'Voluptas dolor quas', 'Vero rerum ducimus', 'Rajasthan', '44317', 'Adele Mckay', 'Nostrud cupidatat ea'),
(62, 'Jennings Berg Plc', 'Private Limited Companies', 'Sandra Whitehead', 'https://www.gywi.co.uk', NULL, NULL, 'qubibyta@mailinator.com', NULL, NULL, NULL, 'Labore qui veniam c', '2022-04-26 06:44:53', '2022-04-26 06:44:53', 'Goverment', 'Voluptatem aperiam d', 'Ut vel voluptatem do', 'Tamil Nadu', '37003', 'Dale Dotson', 'Sapiente quia dolor'),
(63, 'Jennings Berg Plc', 'Private Limited Companies', 'Sandra Whitehead', 'https://www.gywi.co.uk', NULL, NULL, 'qubibyta@mailinator.com', NULL, NULL, NULL, 'Labore qui veniam c', '2022-04-26 06:45:07', '2022-04-26 06:45:07', 'Goverment', 'Voluptatem aperiam d', 'Ut vel voluptatem do', 'Tamil Nadu', '37003', 'Dale Dotson', 'Sapiente quia dolor');

-- --------------------------------------------------------

--
-- Table structure for table `companydocs`
--

DROP TABLE IF EXISTS `companydocs`;
CREATE TABLE IF NOT EXISTS `companydocs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companydocs`
--

INSERT INTO `companydocs` (`id`, `company_id`, `document_name`, `document`, `created_at`, `updated_at`) VALUES
(7, 55, 'Voter ID', '1937852889_1650371596.jpg', '2022-04-19 07:03:16', '2022-04-19 07:03:16'),
(8, 55, 'Passport', '1088823366_1650371596.jpg', '2022-04-19 07:03:16', '2022-04-19 07:03:16'),
(9, 55, 'Voter ID', '2139781712_1650433389.png', '2022-04-20 00:13:09', '2022-04-20 00:13:09'),
(10, 55, 'CIN No.', '507867211_1650433549.jpg', '2022-04-20 00:15:49', '2022-04-20 00:15:49'),
(11, 55, 'PAN card', '1831906392_1650433549.png', '2022-04-20 00:15:49', '2022-04-20 00:15:49'),
(12, 55, 'Adhar Card', '67813365_1650449187.png', '2022-04-20 04:36:27', '2022-04-20 04:36:27'),
(13, 55, 'UDYAM', '1504167954_1650449187.jpg', '2022-04-20 04:36:27', '2022-04-20 04:36:27'),
(14, 55, 'Voter ID', '1593217850_1650449187.jpg', '2022-04-20 04:36:27', '2022-04-20 04:36:27'),
(15, 55, 'Partnership Deed', '1032332060_1650449187.png', '2022-04-20 04:36:27', '2022-04-20 04:36:27'),
(16, 61, 'UDYAM', '461232282_1650693724.png', '2022-04-23 00:32:04', '2022-04-23 00:32:04'),
(17, 61, 'CIN No.', '293252603_1650693724.png', '2022-04-23 00:32:04', '2022-04-23 00:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

DROP TABLE IF EXISTS `deductions`;
CREATE TABLE IF NOT EXISTS `deductions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(20) DEFAULT NULL,
  `deduction_title` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `percent` varchar(200) DEFAULT NULL,
  `apply_to` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `company_id`, `deduction_title`, `type`, `percent`, `apply_to`, `created_at`, `updated_at`) VALUES
(2, 58, 'sdfghn', '%', '12', 'Basic Salary', '2022-04-29 02:11:02', '2022-04-29 02:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`, `company_id`) VALUES
(4, 'sagar chopade', '2022-04-15 05:54:09', '2022-04-15 06:17:12', 55),
(5, 'awsedf', '2022-04-20 00:40:44', '2022-04-20 00:40:44', 55);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'sagarhbj', 55, '2022-04-16 02:43:03', '2022-04-20 01:42:05'),
(4, 'ghjkl', 55, '2022-04-20 00:06:41', '2022-04-20 00:06:41'),
(6, 'sdsf', 55, '2022-04-21 01:28:48', '2022-04-21 01:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employeeID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `leaving_date` date DEFAULT NULL,
  `confirmation_date` date DEFAULT NULL,
  `reporting_to` int(20) DEFAULT NULL,
  `profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeID`, `full_name`, `fathers_name`, `email`, `phone`, `emergency_phone`, `gender`, `company_id`, `project_id`, `department_id`, `designation_id`, `shift_id`, `created_at`, `updated_at`, `permanent_address`, `present_address`, `blood_group`, `city`, `state`, `dob`, `joining_date`, `leaving_date`, `confirmation_date`, `reporting_to`, `profile`) VALUES
(1, 'Nobis laudantium in', 'Urielle Holden', 'Chloe Burgess', 'vafotybotu@mailinator.com', '+1 (313) 763-8927', '+1 (973) 417-9954', 'corporation', '55', '6', '4', '1', NULL, '2022-04-23 04:29:00', '2022-04-28 06:18:57', 'asd', 'q2we4rty', 'B+', 'wsedfc', 'Goa', '2022-04-23', '2022-03-31', '2022-04-09', '2022-04-29', 3, NULL),
(3, 'Enim aliquip accusan', 'Arden Trevino', 'Raymond Albert', 'cuholef@mailinator.com', '+1 (476) 152-7315', '+1 (413) 318-1564', 'Male', '55', '6', '4', '4', '10', '2022-04-23 05:11:05', '2022-04-23 05:11:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'sdf', 'Forrest Clarke', 'awsedrftg', 'gecehyta@mailinator.com', '+1 (429) 226-3407', '+1 (608) 648-4422', 'corporation', '55', '3', '4', '1', '10', '2022-04-25 03:34:35', '2022-04-25 06:04:33', 'qwesdrfg', 'wedf', 'qwasdf', 'goa', 'Chandigarh', '2022-04-22', '2022-04-15', '2022-04-10', '2022-04-07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `company_id`, `grade_name`, `grade_description`, `created_at`, `updated_at`) VALUES
(2, 55, 'sagar', 'qwertg', '2022-04-20 01:25:26', '2022-04-23 02:19:18'),
(3, 59, 'aqwser', '', '2022-04-20 01:28:51', '2022-04-23 00:33:01'),
(4, 55, 'xvxcx', 'cvcxvcxv', '2022-04-22 03:00:27', '2022-04-23 02:20:50'),
(5, 55, 'efde', 'efwef', '2022-04-22 03:29:13', '2022-04-22 03:29:13'),
(7, 55, 'dc', 'dcds', '2022-04-22 03:31:57', '2022-04-22 03:31:57'),
(10, 60, 'aqwser', NULL, '2022-04-23 00:35:07', '2022-04-23 00:35:07'),
(11, 58, 'aqwser', 'qwertg', '2022-04-23 00:56:06', '2022-04-23 00:56:06'),
(12, 58, 'aqwser', 'qwertg', '2022-04-23 00:56:35', '2022-04-23 00:56:35'),
(15, 55, 'aqwser', 'cvcxvcxv', '2022-04-26 03:55:50', '2022-04-26 03:55:57'),
(16, NULL, 'ghjk', 'ygyghujk', '2022-04-26 03:56:37', '2022-04-26 03:56:37'),
(17, NULL, 'ghjk', 'ygyghujk', '2022-04-26 03:56:38', '2022-04-26 03:56:38'),
(18, NULL, 'ghjk', 'ygyghujk', '2022-04-26 03:56:39', '2022-04-26 03:56:39'),
(19, NULL, 'ghjk', 'ygyghujk', '2022-04-26 03:56:39', '2022-04-26 03:56:39'),
(20, NULL, 'ghjk', 'ygyghujk', '2022-04-26 03:56:49', '2022-04-26 03:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `grade_designations`
--

DROP TABLE IF EXISTS `grade_designations`;
CREATE TABLE IF NOT EXISTS `grade_designations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grade_id` bigint(20) NOT NULL,
  `designation_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_designations`
--

INSERT INTO `grade_designations` (`id`, `grade_id`, `designation_id`, `created_at`, `updated_at`) VALUES
(2, 9, 1, '2022-04-22 03:33:48', '2022-04-22 03:33:48'),
(3, 9, 4, '2022-04-22 03:33:48', '2022-04-22 03:33:48'),
(4, 13, 4, '2022-04-23 00:56:43', '2022-04-23 00:56:43'),
(5, 13, 6, '2022-04-23 00:56:43', '2022-04-23 00:56:43'),
(6, 14, 1, '2022-04-23 01:02:20', '2022-04-23 01:02:20'),
(7, 14, 6, '2022-04-23 01:02:20', '2022-04-23 01:02:20'),
(11, 2, 1, '2022-04-23 02:19:18', '2022-04-23 02:19:18'),
(12, 2, 4, '2022-04-23 02:19:18', '2022-04-23 02:19:18'),
(13, 4, 1, '2022-04-23 02:20:50', '2022-04-23 02:20:50'),
(14, 4, 4, '2022-04-23 02:20:50', '2022-04-23 02:20:50'),
(15, 4, 6, '2022-04-23 02:20:50', '2022-04-23 02:20:50'),
(19, 15, 1, '2022-04-26 03:55:57', '2022-04-26 03:55:57'),
(20, 15, 4, '2022-04-26 03:55:57', '2022-04-26 03:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

DROP TABLE IF EXISTS `holidays`;
CREATE TABLE IF NOT EXISTS `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `company_id`, `event_name`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(3, 55, 'asdfg', '2022-04-09', '2022-04-28', '2022-04-29 02:48:53', '2022-04-29 02:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

DROP TABLE IF EXISTS `leave_types`;
CREATE TABLE IF NOT EXISTS `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allocated_day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `company_id`, `leave_type`, `allocated_day`, `created_at`, `updated_at`) VALUES
(2, 55, 'Medical Leave', 35, '2022-04-25 03:43:31', '2022-04-26 04:22:40'),
(3, 55, 'Medical', 5, '2022-04-25 04:23:54', '2022-04-25 04:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `address1`, `city`, `state`, `created_at`, `updated_at`, `company_id`) VALUES
(9, 'Scarlet Walker', '61 New Freeway', 'Expedita animi et n', 'Nisi illum beatae e', '2022-04-15 01:10:57', '2022-04-15 01:10:57', NULL),
(10, 'Quon Banks', '38 South Nobel Parkway', 'Quia veniam quia ma', 'Consequatur nulla e', '2022-04-15 01:11:18', '2022-04-15 01:11:18', NULL),
(12, 'sagar', 'gadge nagar', 'amravati', 'Daman and Diu', '2022-04-18 07:44:47', '2022-04-18 07:52:15', 42),
(13, 'sagar chopade', 'Gadge nagar Amravati', 'AMRAVATI', 'Maharashtra', '2022-04-18 11:03:59', '2022-04-20 00:05:13', 55),
(15, 'sdfgtyhjk', 'asdfcv', 'asdxcv', 'Assam', '2022-04-20 00:05:25', '2022-04-20 00:05:25', 55),
(17, 'amravati', 'vmv', 'amravati', NULL, '2022-05-28 01:43:41', '2022-05-28 01:43:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_08_064213_create_companies_table', 1),
(5, '2022_04_13_074107_create_locations_table', 2),
(6, '2022_04_14_054634_create_projects_table', 3),
(7, '2022_04_15_084050_create_departments_table', 4),
(8, '2022_04_16_055952_create_designations_table', 5),
(9, '2022_04_16_123504_create_officeshifts_table', 6),
(10, '2022_04_18_164120_create_grades_table', 7),
(11, '2022_04_19_112621_create_companydocs_table', 8),
(12, '2022_04_22_075402_create_grade_designations_table', 9),
(13, '2022_04_22_095247_create_employees_table', 10),
(14, '2022_04_26_055605_create_employee_immigrations_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `officeshifts`
--

DROP TABLE IF EXISTS `officeshifts`;
CREATE TABLE IF NOT EXISTS `officeshifts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `shift_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sunday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `monday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tuesday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `wednesday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `thursday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `friday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `saturday_week_off` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officeshifts`
--

INSERT INTO `officeshifts` (`id`, `company_id`, `shift_name`, `monday_in`, `monday_out`, `tuesday_in`, `tuesday_out`, `wednesday_in`, `wednesday_out`, `thursday_in`, `thursday_out`, `friday_in`, `friday_out`, `saturday_in`, `saturday_out`, `sunday_in`, `sunday_out`, `created_at`, `updated_at`, `sunday_week_off`, `monday_week_off`, `tuesday_week_off`, `wednesday_week_off`, `thursday_week_off`, `friday_week_off`, `saturday_week_off`) VALUES
(11, 62, 'Illiana Parsons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-28 02:22:33', '2022-04-28 04:27:28', '1', '1', '1', '1', '1', '1', '1'),
(13, 62, 'Illiana Parsons', '15:22', '17:24', '15:49', '19:50', NULL, NULL, '19:25', '15:26', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-28 04:21:47', '2022-04-28 04:47:06', '1', NULL, NULL, '1', NULL, '1', '1'),
(14, 55, 'morning', '13:03', '17:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-28 02:03:35', '2022-05-28 02:03:35', '1', NULL, NULL, NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project`, `created_at`, `updated_at`, `company_id`) VALUES
(3, 'Autem rerum consequa', '2022-04-15 01:42:21', '2022-04-20 02:35:16', 55),
(6, 'sagar chopade', '2022-04-20 00:24:12', '2022-04-20 02:35:26', 55);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1-admin\r\n2-compay\r\n3-employee',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile_number`, `profile_picture`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$6ZdS8UriHY6csJRJ9Gisre7/yi6PloXhKsZaBFqOnipzAfPzpFCDS', '1234567890', '0', 1, NULL, NULL, NULL),
(3, 'nafees', 'nafees', NULL, 'nafees', '', '0', 2, NULL, '2022-04-20 02:01:52', '2022-04-20 02:01:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
