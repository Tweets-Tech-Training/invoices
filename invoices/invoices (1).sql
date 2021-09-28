-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoices`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `coin_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related` tinyint(1) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `result` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `city_id`, `coin_id`, `status`, `related`, `payment`, `date`, `image`, `customerstatus`, `totalprice`, `tax`, `result`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 2, 'recived', 1, 'money_transfer', '2021-09-07', '1KJIX3I4bnAMU90KGwRgQYzstpjxX97371DvURBv.png', 'unrecived', '225.00', '0.20', '45.00', '2021-09-21 06:49:32', '2021-09-23 04:46:38'),
(2, 6, 2, 2, 'unrecived', 1, 'check', NULL, 'Zv7rpp8JHfAO7Qjg0K2smD7TFkWNtyTq8zNMSwcP.png', 'recived', '225.00', NULL, '0.00', '2021-09-21 06:52:07', '2021-09-22 07:52:37'),
(3, 4, 2, 2, 'unrecived', 1, 'check', '2021-09-18', 'NsDNWe11hhc08E3qDmIi8MMzUiXQ8VFUPWO5UtL5.png', 'recived', '2655.00', '0.20', '531.00', '2021-09-21 06:53:32', '2021-09-22 07:58:15'),
(4, 4, 2, 2, 'recived', 1, 'money_transfer', NULL, 'bq5aShBid6MDGVnlBpapvDACvk2aFxa9nag3poc7.png', 'recived', '0.00', NULL, '0.00', '2021-09-21 06:58:52', '2021-09-22 05:29:56'),
(5, 8, 5, 2, 'recived', 1, 'check', '2021-09-14', '2g2zE2Ps9qhk7hIf3rjYWxCbaRV08yuur7aA81tk.png', 'unrecived', '450.00', NULL, '0.00', '2021-09-22 07:26:20', '2021-09-22 07:26:26'),
(7, 9, 2, 2, 'recived', 1, 'money_transfer', '2021-09-17', 'htIAmP948WOiAo33ZeFAXfpGCnExe3CzteEhdzkF.png', 'recived', '10125.00', '0.20', '2025.00', '2021-09-22 07:29:17', '2021-09-22 07:31:10'),
(8, 7, 7, 2, 'unrecived', 1, 'check', NULL, 'GThlZu4NjlaD8ujp7vO89GGy3yRuvWbQ6NDd1qYs.png', 'recived', '10080.00', '0.20', '2016.00', '2021-09-22 07:33:45', '2021-09-22 08:01:08'),
(9, 9, 2, 2, 'unrecived', 0, 'check', '2021-09-16', 'VA5wjXUb8EgTvozht5N2qjcOEO8PxIkGPmehVHHV.png', 'recived', '360.00', '0.20', '72.00', '2021-09-22 08:02:14', '2021-09-22 08:07:27'),
(10, 9, 2, 2, 'recived', 1, 'check', NULL, 'vMyCqHSM87lJE7EYrZVlRURNli7egDqvSG0FrdpX.png', 'unrecived', '2878272.00', '0.80', '2302617.60', '2021-09-22 08:09:31', '2021-09-22 08:20:00'),
(11, 8, 7, 2, 'recived', 1, 'cash', NULL, '7UaABeW3ZggAaFsPottKiDcTAruGA9vXCVz5bLiv.png', 'unrecived', '315.00', '0.89', '280.35', '2021-09-22 08:38:25', '2021-09-22 08:38:25'),
(12, 5, 5, 2, 'unrecived', 1, 'money_transfer', NULL, NULL, 'unrecived', '751140.00', '0.26', '193794.12', '2021-09-22 08:42:38', '2021-09-22 08:42:38'),
(13, 8, 7, 2, 'unrecived', 1, 'check', NULL, 'CYE55JOjlyIU7yqpPz5H5WojIdW1iVjd2ujy70P5.png', 'recived', '7488.00', '0.50', '3744.00', '2021-09-22 08:51:39', '2021-09-22 09:15:54'),
(14, 4, 5, 2, 'unrecived', 0, 'check', NULL, 'uxV2qMh7v7QUGMys86C8hswXY1YEa4KH3GYnCVXG.png', 'recived', '6084.00', '0.88', '5353.92', '2021-09-22 09:03:24', '2021-09-22 09:16:54'),
(15, 5, 5, 2, 'recived', 0, 'check', '2021-10-07', 'SEtlfVCOypAEu0J6RZsFGpwLoFKaYelcxG70Gn2w.png', 'recived', '77922.00', '0.21', '16363.62', '2021-09-22 09:20:44', '2021-09-23 05:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'برمجة5', '2021-09-15 07:51:54', '2021-09-15 10:03:21'),
(3, 'sms5', '2021-09-16 03:24:23', '2021-09-18 06:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'غزة', NULL, NULL),
(2, 'رام الله ', NULL, NULL),
(5, 'الخليل ', '2021-09-15 05:49:35', '2021-09-15 06:37:57'),
(7, 'اريحا', '2021-09-15 08:13:09', '2021-09-18 05:24:50'),
(14, 'sportsa', '2021-09-23 08:39:49', '2021-09-23 08:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(2, 'دولار', '$', '2021-09-15 07:25:47', '2021-09-23 05:36:13'),
(5, 'شيكل', 'شيكل', '2021-09-23 08:27:28', '2021-09-23 08:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `city_id`, `created_at`, `updated_at`) VALUES
(2, 'Riham', 'rihamm@gmail.com', '0214569873', 'Gaza', 'F', 1, '2021-09-15 09:17:55', '2021-09-15 09:17:55'),
(4, 'hana', 'hana@gmail.com', '0258963147', 'Gaza', 'F', 2, '2021-09-15 10:01:23', '2021-09-15 10:01:23'),
(5, 'Rihamxxxxxxxxxxsssssssssssss', 'xxxxxxxxxx@gmail.com', '0214569873', 'Gaza', 'F', 5, '2021-09-16 07:49:15', '2021-09-16 07:56:55'),
(6, 'Riham', 'sss@gmail.com', '0214569873', 'Gaza', 'F', 5, '2021-09-17 13:28:24', '2021-09-17 13:28:24'),
(7, 'mohammed', 'gsg@gmail.com', '0258963147', 'Gaza', 'M', 1, '2021-09-17 13:29:34', '2021-09-18 06:55:28'),
(8, 'safa', 'safa@gmail.com', '0258963147', 'اريحا', 'F', 7, '2021-09-19 04:54:21', '2021-09-19 04:54:21'),
(9, 'test', 'test@gmail.com', '0214569873', 'Gaza', 'M', 1, '2021-09-22 05:28:29', '2021-09-22 05:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_14_091525_create_sessions_table', 1),
(7, '2021_09_14_093911_create_cities_table', 2),
(8, '2021_09_15_092110_create_coins_table', 3),
(9, '2021_09_15_103106_create_categories_table', 4),
(10, '2021_09_15_110113_create_customers_table', 5),
(15, '2021_09_20_063221_create_orders_table', 6),
(17, '2021_09_20_084714_create_bills_table', 7),
(18, '2021_09_21_072410_create_orders_table', 8),
(19, '2021_09_21_072538_create_bills_table', 8),
(20, '2021_09_21_074734_create_orders_bill_table', 9),
(21, '2021_09_21_074951_create_orders_table', 9),
(22, '2021_09_21_081452_create_orders_table', 10),
(23, '2021_09_25_070228_create_users_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `categoryprice` decimal(10,2) NOT NULL,
  `unitprice` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `category_id`, `bill_id`, `amount`, `categoryprice`, `unitprice`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 45, '5.00', '225.00', '2021-09-21 06:49:32', '2021-09-21 06:49:32'),
(2, 3, 2, 45, '5.00', '225.00', '2021-09-21 06:52:07', '2021-09-21 06:52:07'),
(3, 2, 3, 45, '54.00', '2430.00', '2021-09-21 06:53:32', '2021-09-21 06:53:32'),
(4, 2, 4, 45, '5.00', '225.00', '2021-09-21 06:58:52', '2021-09-21 06:58:52'),
(5, 3, 3, 45, '5.00', '225.00', '2021-09-22 05:01:36', '2021-09-22 05:01:36'),
(6, 0, 4, 0, '0.00', '0.00', '2021-09-22 05:29:56', '2021-09-22 05:29:56'),
(7, 2, 5, 45, '5.00', '225.00', '2021-09-22 07:26:20', '2021-09-22 07:26:20'),
(8, 2, 6, 45, '5.00', '225.00', '2021-09-22 07:27:34', '2021-09-22 07:27:34'),
(9, 2, 6, 45, '5.00', '225.00', '2021-09-22 07:27:36', '2021-09-22 07:27:36'),
(10, 3, 7, 45, '45.00', '2025.00', '2021-09-22 07:29:17', '2021-09-22 07:29:17'),
(11, 3, 7, 45, '45.00', '2025.00', '2021-09-22 07:29:26', '2021-09-22 07:29:26'),
(12, 3, 7, 45, '45.00', '2025.00', '2021-09-22 07:30:33', '2021-09-22 07:30:33'),
(13, 3, 7, 45, '45.00', '2025.00', '2021-09-22 07:30:35', '2021-09-22 07:30:35'),
(14, 3, 7, 45, '45.00', '2025.00', '2021-09-22 07:31:10', '2021-09-22 07:31:10'),
(15, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:33:45', '2021-09-22 07:33:45'),
(16, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:37:46', '2021-09-22 07:37:46'),
(17, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:44:20', '2021-09-22 07:44:20'),
(18, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:46:23', '2021-09-22 07:46:23'),
(19, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:46:37', '2021-09-22 07:46:37'),
(20, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:46:37', '2021-09-22 07:46:37'),
(21, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:46:37', '2021-09-22 07:46:37'),
(22, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:46:37', '2021-09-22 07:46:37'),
(23, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(24, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(25, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(26, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(27, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(28, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(29, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(30, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:47:21', '2021-09-22 07:47:21'),
(31, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(32, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(33, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(34, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(35, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(36, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(37, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(38, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(39, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(40, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(41, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(42, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(43, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(44, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(45, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(46, 3, 8, 45, '7.00', '315.00', '2021-09-22 07:50:45', '2021-09-22 07:50:45'),
(47, 3, 2, 45, '5.00', '225.00', '2021-09-22 07:52:37', '2021-09-22 07:52:37'),
(48, 2, 3, 45, '54.00', '2430.00', '2021-09-22 07:58:14', '2021-09-22 07:58:14'),
(49, 3, 3, 45, '5.00', '225.00', '2021-09-22 07:58:15', '2021-09-22 07:58:15'),
(50, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(51, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(52, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(53, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(54, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(55, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(56, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(57, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(58, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(59, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(60, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(61, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(62, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(63, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(64, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(65, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(66, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(67, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(68, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(69, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(70, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(71, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(72, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(73, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(74, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(75, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(76, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(77, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(78, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(79, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(80, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(81, 3, 8, 45, '7.00', '315.00', '2021-09-22 08:01:08', '2021-09-22 08:01:08'),
(82, 3, 9, 45, '4.00', '180.00', '2021-09-22 08:02:14', '2021-09-22 08:02:14'),
(83, 3, 9, 45, '4.00', '180.00', '2021-09-22 08:06:55', '2021-09-22 08:06:55'),
(84, 3, 9, 45, '4.00', '180.00', '2021-09-22 08:07:27', '2021-09-22 08:07:27'),
(85, 3, 9, 45, '4.00', '180.00', '2021-09-22 08:07:27', '2021-09-22 08:07:27'),
(86, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:09:31', '2021-09-22 08:09:31'),
(87, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:09:49', '2021-09-22 08:09:49'),
(88, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:10:35', '2021-09-22 08:10:35'),
(89, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:10:35', '2021-09-22 08:10:35'),
(90, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:11:17', '2021-09-22 08:11:17'),
(91, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:11:17', '2021-09-22 08:11:17'),
(92, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:11:17', '2021-09-22 08:11:17'),
(93, 2, 10, 789, '456.00', '359784.00', '2021-09-22 08:11:17', '2021-09-22 08:11:17'),
(94, 2, 11, 45, '7.00', '315.00', '2021-09-22 08:38:25', '2021-09-22 08:38:25'),
(95, 3, 12, 78, '9630.00', '751140.00', '2021-09-22 08:42:38', '2021-09-22 08:42:38'),
(96, 3, 13, 78, '96.00', '7488.00', '2021-09-22 08:51:39', '2021-09-22 08:51:39'),
(97, 2, 14, 78, '78.00', '6084.00', '2021-09-22 09:03:25', '2021-09-22 09:03:25'),
(98, 3, 15, 78, '999.00', '77922.00', '2021-09-22 09:20:44', '2021-09-22 09:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lDG7cjGS3y46w4oSGhVjh2rND47kDxj8FS5V0yQc', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZE9HZlFHaTNUd1BLd3ZvMHV6YkxmNzc0VTk0SG13anhkQ0hFelRGZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWxsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGRVUVk1aFJuLzVQaXo0UFlTbkcxWGU1ZTVrNjhRR2VIc1hXWkJ2cFJmVFV1V0JldEJKRzF1Ijt9', 1632660016),
('YEAOyrsYfX3xwiMuLDbX911sfchjDYfLiG3lNkYh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGNNdkw2SDhaOTFQRkZHWXlqQklLc0NCYmJzeGdZbDZ3bXpqOUJqTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632653868);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Riham', 'admin@gmail.com', NULL, '$2y$10$dUQY5hRn/5Piz4PYSnG1Xe5e5k68QGeHsXWZBvpRfTUuWBetBJG1u', NULL, '4yT2DPwTHbieClOvKFyADDkq6cF9Cplg9GtOUOKo.png', NULL, NULL, '2021-09-25 06:12:17', '2021-09-25 06:14:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
