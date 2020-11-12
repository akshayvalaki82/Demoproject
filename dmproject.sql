-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2020 at 08:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllCouponData` ()  SELECT * FROM coupons$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetCouponDataId` (IN `cid` INT)  SELECT * FROM coupons WHERE id = cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `banner_path`, `created_by`, `updated_by`, `status`) VALUES
(11, '2020-10-20 00:13:51', '2020-10-20 00:13:51', '1603172631.png', 31, 31, '0'),
(12, '2020-10-20 00:14:22', '2020-11-04 08:00:18', '1604496618.jpeg', 31, 31, '0'),
(14, '2020-10-20 02:28:04', '2020-10-20 02:28:09', '1603180689.png', 31, 31, '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `parent_id`, `created_by`, `updated_by`, `status`) VALUES
(19, '2020-10-21 06:07:34', '2020-11-05 03:57:56', 'i', 30, 31, 31, '0'),
(20, '2020-10-21 06:08:12', '2020-11-05 03:55:11', 'h', NULL, 31, 31, '0'),
(21, '2020-10-21 06:10:27', '2020-11-05 03:55:05', 'g', NULL, 31, 31, '1'),
(23, '2020-10-21 06:40:05', '2020-11-05 03:54:57', 'f', NULL, 31, 31, '0'),
(26, '2020-10-21 06:43:55', '2020-11-05 03:54:50', 'e', NULL, 31, 31, '0'),
(27, '2020-10-21 07:42:57', '2020-11-05 03:54:42', 'd', 26, 31, 31, '0'),
(28, '2020-10-21 07:54:34', '2020-11-05 03:54:17', 'c', 26, 31, 31, '0'),
(30, '2020-10-21 07:55:01', '2020-11-05 03:54:12', 'b', NULL, 31, 31, '0'),
(31, '2020-10-21 08:02:37', '2020-10-21 08:02:37', 'a', 26, 31, 31, '0'),
(32, '2020-11-05 02:47:40', '2020-11-05 02:47:40', 'akshay', 26, 31, 31, '0'),
(35, '2020-11-06 13:37:23', '2020-11-06 13:37:23', 'mrxyz', 30, 31, 31, '0');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `conf_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conf_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_by` int(10) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `created_at`, `updated_at`, `conf_key`, `conf_value`, `created_by`, `modify_by`, `status`) VALUES
(8, '2020-10-16 02:09:31', '2020-10-16 02:09:50', 'qqqwwwaaa', 'qqqwwasaa', 31, 31, '1'),
(9, '2020-10-16 05:25:58', '2020-10-16 05:25:58', 'aassa', 'aassa', 31, 31, '0');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_off` double(8,2) DEFAULT NULL,
  `no_of_uses` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `percent_off`, `no_of_uses`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(28, 'saasas', 1111.00, 232323, 31, 31, '2020-11-02 14:28:34', '2020-11-02 23:30:59'),
(30, 'sqqwqw', 2121.00, 2121, 31, 31, '2020-11-02 22:31:13', '2020-11-02 22:31:13'),
(44, 'sasaas', 21.00, 9898, 59, 59, '2020-11-11 23:13:42', '2020-11-11 23:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_27_185507_create_role_table', 1),
(5, '2020_09_28_142946_rename_and_add_lastname_in_users_table', 1),
(6, '2020_09_29_110203_rename_name', 1),
(7, '2015_02_07_172606_create_roles_table', 2),
(8, '2015_02_07_172633_create_role_user_table', 2),
(9, '2015_02_07_172649_create_permissions_table', 2),
(10, '2015_02_07_172657_create_permission_role_table', 2),
(11, '2015_02_17_152439_create_permission_user_table', 2),
(12, '2015_11_30_232041_bigint_user_keys', 2),
(13, '2016_02_06_172606_create_users_table', 2),
(14, '2020_09_30_140619_create_posts_table', 3),
(15, '2020_10_01_124635_create_usersses_table', 4),
(16, '2020_10_15_105912_create_configurations_table', 5),
(17, '2020_10_16_092543_create_banners_table', 6),
(18, '2020_10_20_100720_create_categories_table', 7),
(19, '2020_10_21_103514_for_parentid_foreignkey', 8),
(20, '2020_10_22_061043_create_product_attributes_table', 9),
(21, '2020_10_22_094600_create_product__attribute__values_table', 10),
(22, '2020_10_23_150754_create_products_table', 11),
(23, '2020_10_24_073430_create_product__images_table', 12),
(24, '2020_10_28_051212_create_product__attributes__assocs_table', 13),
(25, '2020_10_28_055037_create_product__attributes__assocs_table', 14),
(26, '2020_10_31_084047_create_coupons_table', 15),
(27, '2020_11_04_134550_create_product__categories_table', 16),
(28, '2020_11_11_181957_create_user_addresses_table', 17);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `inherit_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `content`, `category`) VALUES
(4, '2020-10-01 00:21:22', '2020-10-01 00:21:22', 'sasa', 'saadsa', 'tips'),
(6, '2020-10-01 04:37:38', '2020-10-01 06:17:55', 'javascript', 'oijo', 'technology');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `special_price` double(8,2) DEFAULT NULL,
  `special_price_from` date DEFAULT NULL,
  `special_price_to` date DEFAULT NULL,
  `quanity` int(11) DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `sku`, `short_description`, `long_description`, `price`, `special_price`, `special_price_from`, `special_price_to`, `quanity`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `updated_by`, `status`) VALUES
(108, '2020-11-04 10:17:02', '2020-11-07 03:03:31', 'a', 'assa', 'dasdsa', 'adsdas', 234324.00, 32324.00, '0034-03-31', '0043-03-31', 3232, 'dsadsa', 'ads', 'sad', 31, 31, '1'),
(109, '2020-11-05 04:48:16', '2020-11-07 03:02:38', 'a', 'assa', 'asasa', 'asas', 23.00, 21.00, '0021-02-21', '0332-02-03', 232, 'dsss', 'dsffffffffffffff', 'dsf', 31, 31, '1'),
(111, '2020-11-05 04:50:16', '2020-11-05 04:50:16', 'uvw', 'asda', 'asdsad', 'adssa', 231.00, 2121.00, '0003-02-23', '0003-03-31', 2121, 'sddsfd', 'sdfsd', 'sdffff', 31, 31, '1'),
(112, '2020-11-05 04:51:03', '2020-11-05 04:51:03', 'poiu', 'asasd', 'qwdsa', 'dassa', 312.00, 21.00, NULL, NULL, 21, '21', '21ds', 'dsfsd', 31, 31, '1'),
(113, '2020-11-06 08:06:42', '2020-11-06 08:06:42', 'abcdef', 'asssd', 'sadsasa', 'sadsadsa', 3234.00, 32432.00, '0003-03-23', '0034-03-31', 2332, 'asddas', 'sasdas', 'dsds', 31, 31, '1'),
(119, '2020-11-07 01:15:38', '2020-11-07 01:15:38', 'abhi', 'assa', 'ds', 'qqq1', 1111.00, 1111.00, '0001-11-11', '0001-11-11', 111, 'qqqqqq', 'qqqqq', 'qqqq', 31, 31, '1'),
(120, '2020-11-07 02:17:04', '2020-11-07 03:03:08', 'sad', 'aaaaaaaaaa', 'as', 'sa', 21323.00, 23121.00, '0023-03-31', '0044-03-23', 321, 'szdfds', 'fdff', 'asfas', 31, 31, '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `created_at`, `updated_at`, `name`, `created_by`, `updated_by`) VALUES
(42, '2020-10-23 01:48:31', '2020-10-23 01:48:31', 'sasasa', 31, 31),
(46, '2020-10-23 05:47:09', '2020-10-23 05:47:09', 'asas', 31, 31),
(51, '2020-11-04 07:39:05', '2020-11-04 07:39:05', 'akshay', 31, 31);

-- --------------------------------------------------------

--
-- Table structure for table `product__attributes__assocs`
--

CREATE TABLE `product__attributes__assocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_attribute_id` int(10) UNSIGNED NOT NULL,
  `product_attribute_value_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product__attributes__assocs`
--

INSERT INTO `product__attributes__assocs` (`id`, `product_id`, `product_attribute_id`, `product_attribute_value_id`, `created_at`, `updated_at`) VALUES
(79, 113, 42, 33, '2020-11-06 08:06:42', '2020-11-06 08:06:42'),
(80, 111, 42, 32, '2020-11-06 13:35:16', '2020-11-06 13:35:16'),
(86, 112, 46, 91, '2020-11-07 01:10:45', '2020-11-07 01:10:45'),
(88, 119, 46, 92, '2020-11-07 02:14:54', '2020-11-07 02:14:54'),
(95, 109, 46, 91, '2020-11-07 03:02:38', '2020-11-07 03:02:38'),
(96, 109, 42, 33, '2020-11-07 03:02:38', '2020-11-07 03:02:38'),
(97, 120, 46, 93, '2020-11-07 03:03:08', '2020-11-07 03:03:08'),
(98, 108, 46, 92, '2020-11-07 03:03:31', '2020-11-07 03:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `product__attribute__values`
--

CREATE TABLE `product__attribute__values` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product__attribute__values`
--

INSERT INTO `product__attribute__values` (`id`, `product_attribute_id`, `attribute_value`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(32, 42, 'aaabbb1aaa', 31, 31, '2020-10-23 01:48:31', '2020-10-23 05:46:19'),
(33, 42, 'daaaaabbb11221', 31, 31, '2020-10-23 01:48:31', '2020-10-23 05:43:17'),
(46, 42, 'hhaa', 31, 31, '2020-10-23 05:44:32', '2020-10-23 05:46:01'),
(89, 51, 'qwqwwq', 31, 31, '2020-11-04 07:39:05', '2020-11-04 07:39:05'),
(90, 51, 'dsdasdsasa', 31, 31, '2020-11-04 07:39:05', '2020-11-04 07:39:05'),
(91, 46, 'a', 31, 31, '2020-11-04 07:39:09', '2020-11-04 07:39:09'),
(92, 46, 'b', 31, 31, '2020-11-04 07:39:09', '2020-11-04 07:39:09'),
(93, 46, 'c', 31, 31, '2020-11-04 07:39:09', '2020-11-04 07:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `product__categories`
--

CREATE TABLE `product__categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product__categories`
--

INSERT INTO `product__categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 113, 26, '2020-11-06 08:06:42', '2020-11-06 08:06:42'),
(13, 111, 27, '2020-11-06 13:35:16', '2020-11-06 13:35:16'),
(19, 112, 32, '2020-11-07 01:10:45', '2020-11-07 01:10:45'),
(21, 119, 35, '2020-11-07 02:14:54', '2020-11-07 02:14:54'),
(26, 109, 20, '2020-11-07 03:02:38', '2020-11-07 03:02:38'),
(27, 120, 21, '2020-11-07 03:03:08', '2020-11-07 03:03:08'),
(28, 108, 21, '2020-11-07 03:03:31', '2020-11-07 03:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `product__images`
--

CREATE TABLE `product__images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product__images`
--

INSERT INTO `product__images` (`id`, `product_id`, `image_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(30, 108, '1604504822.jpeg', 31, 31, '2020-11-04 10:17:02', '2020-11-04 10:17:02'),
(31, 109, '1604571496.jpeg', 31, 31, '2020-11-05 04:48:16', '2020-11-05 04:48:16'),
(32, 109, '1604571496.png', 31, 31, '2020-11-05 04:48:16', '2020-11-05 04:48:16'),
(35, 111, '1604571616.png', 31, 31, '2020-11-05 04:50:16', '2020-11-05 04:50:16'),
(36, 111, '1604571616.png', 31, 31, '2020-11-05 04:50:16', '2020-11-05 04:50:16'),
(37, 112, '1604571663.png', 31, 31, '2020-11-05 04:51:03', '2020-11-05 04:51:03'),
(38, 112, '1604571663.png', 31, 31, '2020-11-05 04:51:03', '2020-11-05 04:51:03'),
(39, 113, '1604669802.jpeg', 31, 31, '2020-11-06 08:06:42', '2020-11-06 08:06:42'),
(42, 112, '1604731245.jpeg', 31, 31, '2020-11-07 01:10:45', '2020-11-07 01:10:45'),
(43, 119, '1604731538.jpeg', 31, 31, '2020-11-07 01:15:38', '2020-11-07 01:15:38'),
(44, 120, '1604735224.png', 31, 31, '2020-11-07 02:17:04', '2020-11-07 02:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin', NULL, '2020-09-30 04:44:04', '2020-09-30 04:44:04'),
(2, 'admin', 'admin', NULL, '2020-09-30 04:44:04', '2020-09-30 04:44:04'),
(3, 'inventory_manager', 'inventory_manager', NULL, '2020-09-30 04:44:04', '2020-09-30 04:44:04'),
(4, 'order_manager', 'order_manager', NULL, '2020-09-30 04:44:04', '2020-09-30 04:44:04'),
(5, 'customer', 'customer', NULL, '2020-09-30 04:44:04', '2020-09-30 04:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(18, 2, 44, '2020-10-21 03:08:24', '2020-10-21 03:08:24'),
(19, 3, 44, '2020-10-21 03:08:24', '2020-10-21 03:08:24'),
(20, 1, 44, '2020-10-21 03:08:24', '2020-10-21 03:08:24'),
(21, 2, 45, '2020-10-21 04:51:12', '2020-10-21 04:51:12'),
(22, 5, 45, '2020-10-21 04:51:12', '2020-10-21 04:51:12'),
(23, 4, 45, '2020-10-21 04:51:12', '2020-10-21 04:51:12'),
(24, 2, 46, '2020-10-21 05:35:44', '2020-10-21 05:35:44'),
(25, 3, 46, '2020-10-21 05:35:44', '2020-10-21 05:35:44'),
(26, 4, 46, '2020-10-21 05:35:44', '2020-10-21 05:35:44'),
(27, 2, 47, '2020-10-21 05:44:51', '2020-10-21 05:44:51'),
(28, 3, 47, '2020-10-21 05:44:51', '2020-10-21 05:44:51'),
(29, 4, 47, '2020-10-21 05:44:51', '2020-10-21 05:44:51'),
(30, 5, 48, '2020-10-21 05:52:20', '2020-10-21 05:52:20'),
(31, 1, 48, '2020-10-21 05:52:20', '2020-10-21 05:52:20'),
(32, 5, 52, '2020-10-21 05:54:47', '2020-10-21 05:54:47'),
(33, 1, 52, '2020-10-21 05:54:47', '2020-10-21 05:54:47'),
(61, 5, 107, '2020-11-11 02:33:27', '2020-11-11 02:33:27'),
(62, 5, 108, '2020-11-11 03:13:14', '2020-11-11 03:13:14'),
(63, 5, 109, '2020-11-11 03:54:17', '2020-11-11 03:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'akshay', 'valaki', 'akshay@gmail.com', NULL, '$2y$10$2Zw46P.gaYm0Imwdf7CBr.vh90SJeLuC4Esb9bnKnc4BBCy.vwKTq', 'Inactive', 'INjmWnEM6UfNCp0ywpHOEs0Jz4oOWVJRT7g7rb5pnfFR9vigBflKT18a2t1I', '2020-10-14 03:41:22', '2020-11-07 05:38:19'),
(37, 'saassaas', 'assasasas', 'vkasasahedkar412@gmail.com', NULL, '$2y$10$eEFiI2ojwlpfJDlnSifWTu56ZMXcpDObsfSAr/sgZN77omP0haGv.', 'Inactive', NULL, '2020-10-14 10:31:08', '2020-10-14 10:31:08'),
(40, 'sas', 'dsAAaaa', 'akshayaaa@gmail.com', NULL, '$2y$10$Yg.tpqkiTnKun2wDOo/0JOl7pXDoj7TQPLHZlTfFg4Ys1EZk4NVg.', 'Inactive', NULL, '2020-10-15 12:12:29', '2020-10-16 05:34:15'),
(46, 'asasas', 'zXx', 'vkhedkassaasaar412@gmail.com', NULL, '$2y$10$tIbcJamyEFsntmpJ5QbVie2GHIYaZDMSNBAT47unvD2HLFv8212zK', 'Inactive', NULL, '2020-10-21 05:35:44', '2020-10-21 05:35:44'),
(47, 'asasasassa', 'saas', 'vkheasasdkar412@gmail.com', NULL, '$2y$10$1ZsMdXPYiB8z.ccZDWgxV.n8vTZXWljmdnmFSv1PaqARFXB7Ey4GO', 'Inactive', NULL, '2020-10-21 05:44:51', '2020-10-21 05:44:51'),
(48, 'asasas', 'zXx', 'vkhedkasasasr412@gmail.com', NULL, '$2y$10$SiXE/.CCLD9ZA1O5M8wrEuZjDRjIDZQRD9Ti0E00EXPiaIXawqMNK', 'Inactive', NULL, '2020-10-21 05:52:20', '2020-10-21 05:52:20'),
(56, 'asasas', 'zXx', 'akshaaaay111@gmail.com', NULL, '$2y$10$nfnyszunyCvJR9QACKrRuuH9k95OGVBl0TqixU/h3O8xaz3AiodMy', 'Inactive', NULL, '2020-10-22 06:00:26', '2020-10-22 06:00:26'),
(57, 'asasasaaa', 'aaaaa', 'vkhedzazakar412@gmail.com', NULL, '$2y$10$NL0AdDMSwfL5sVgr2E4Lvewg0F9levsYTOdn7j/bB7zjoj.kpV1tG', 'Inactive', NULL, '2020-10-22 06:00:59', '2020-10-22 06:00:59'),
(58, 'xyz', 'uvw', 'xyz@gmail.com', NULL, '$2y$10$SDYzh2MLUBF7AkT9YgEAZO0Sf6qE0qimE9f2fF/seW3D8ymyrytp2', 'Inactive', NULL, '2020-11-07 05:20:33', '2020-11-10 02:35:54'),
(59, 'abc', 'abc', 'abc@gmail.com', NULL, '$2y$10$9kijB7xs2hczcixEv7Yu8.sr./Y4WD/lXrrXrx.hWzaee.b6j.JX6', 'Inactive', 'SeXpM6mILwX3qBqt3PcZWUvm7ZDzrtIlqlcGHX3v61ogYroDIcn7tIJNbvk5', '2020-11-10 03:35:09', '2020-11-10 03:35:09'),
(87, 'assasasa', 'dsAA', 'akasashay@gmail.com', NULL, '$2y$10$3BC2LFPP5yexogO56Olnqem/pLFyRbhknmty.rVmtPm769BJMmmS6', NULL, NULL, NULL, NULL),
(88, 'aaaaawwaa', 'aaaaaaq', 'aaavkhedkar412@gmail.com', NULL, '$2y$10$PyCBclZmfpIggiazTq7wwuthnsO.rLzVZYx1j/83UTXuWj02QPO4C', NULL, NULL, NULL, NULL),
(89, 'sasaaa', 'zas', 'sssakshay@gmail.com', NULL, '$2y$10$7a/3908uQ0WcQcwxx3bKpOE2msFwNMmy3eCBITQoBRQUuqjFv5z5G', NULL, NULL, NULL, NULL),
(90, 'sasaaaaaa', 'aaazas', 'ssaasakshay@gmail.com', NULL, '$2y$10$Mx0ZPuVvImtn.sIxpcQ/SO6fD8dBUbWJuNVC7umHY8uI0dCp9.nV2', NULL, NULL, NULL, NULL),
(91, 'qas', 'zXx', 'aakshay@gmail.com', NULL, '$2y$10$Kkdcu9nI37x1J35t4bQeSO57juCnQ08B0qgYLClAzMSm2DutsQ9y6', NULL, NULL, NULL, NULL),
(92, 'aqaaaaaa', 'zXxaaa', 'aakaaashay@gmail.com', NULL, '$2y$10$tjqwA7f/8zibQpa/tVdnF.Gs.dKTk1.V43uwjEkjQmoNBl2vW5Jeu', NULL, NULL, NULL, NULL),
(93, 'qasasasqqaqaaaaaa', 'qasasqqzXxaaa', 'asaakaaashay@gmail.com', NULL, '$2y$10$y.Kv60.lIqQEdpS3ilxkwulz9YFCrTWz6j2tT5MNKypWbmrSMJwmO', NULL, NULL, NULL, NULL),
(94, 'aasaqasasasqqaqaaaaaa', 'assaqasasqqzXxaaa', 'asaakaaashay@gmail.comsasa', NULL, '$2y$10$5JF/rt2qK4SqRSj6ac17/uujgZdS5lqpEA0i4YEauEF6V6ZPrun0K', NULL, NULL, NULL, NULL),
(95, 'aasaqas', 'assaqasasqq', 'asaaashay@gmail.comsasa', NULL, '$2y$10$XaxYiL/JflRlCHdQUfH3JejoT9lpsDaUSHBn5v0DFGpWoB/4lBjcu', NULL, NULL, NULL, NULL),
(96, 'aasaqas', 'assaqasasqq', 'asaaasashay@gmail.comsasa', NULL, '$2y$10$f6KbCpXnXssKWK6yglFXFeisY4B55I.9oMAL2cZ/4SljCciRLHAne', NULL, NULL, NULL, NULL),
(97, 'aaaaq', 'dsAAq', 'aksqqhay@gmail.com', NULL, '$2y$10$KvR8N0DciguAKi9fVQDwOuhgAs.lhYxYBnkWEu7fTXdjzkhtuvuF6', NULL, NULL, NULL, NULL),
(98, 'aaaaqqq', 'dsAAqqq', 'qqaksqqhay@gmail.com', NULL, '$2y$10$QBI.Qa9WpNCIjwNN.Q4UoexrwHUxAO2tFkVQLdhDOYeX0gIZwZRLO', NULL, NULL, NULL, NULL),
(99, 'ppppaqqaaaqqq', 'daasAAqqq', 'qqaksqqhay@gmail.comaa', NULL, '$2y$10$0dGEdQ4kQD0cvK8BCyaiReUFEPblttA03l0WFYyulLJUob2URvbky', NULL, NULL, NULL, NULL),
(100, 'aqqqsa', 'aaaaaaaaaaaaaaqq', 'aksqqqhay@gmail.com', NULL, '$2y$10$/xMNxD5al07VlTo1TnJ7v.YYDtjqz46rLQvA.T0Ie2xy2yBmF/5Pa', NULL, NULL, NULL, NULL),
(101, 'aqqqsa', 'aaaaaaaqqaaaaaaaqq', 'aksqqqhay@gmail.comqq', NULL, '$2y$10$alaKkt.zEGkDfR31Asb2UuKZ9Y3LhBfuwiSQ9KLApQEuUwX6098vW', 'yes', NULL, NULL, NULL),
(102, 'aqqqsaqqswq', 'aaaaaaaqqaaaaaaaqqwq', 'aksqqqwwhay@gmail.comqq', NULL, '$2y$10$EltVOj08tl.JRLbm1suBgOBKThoRMPFp1tLwQSk.tpUZnhA18MqDW', 'yes', NULL, NULL, NULL),
(103, 'asasas', 'aa', 'aksqqqaawwhay@gmail.comqq', NULL, '$2y$10$mmMallT6Iy2Pc.day5EpB.aH7o9V4UnRRQ1OSTt1Dnp/DDUijGi.S', 'yes', NULL, NULL, NULL),
(104, 'assaass', 'dsAAassa', 'vkheassadkar412@gmail.gtgf', NULL, '$2y$10$gYS7lw/TpH.gnR8UwqGhK.ivdJffkbl8YJzZ3Qd4nOML.kenut6hm', NULL, NULL, '2020-11-11 02:07:00', '2020-11-11 02:07:00'),
(105, 'qwqwq', 'qwqasa', 'akaaashay@gmail.com', NULL, '$2y$10$.rNGAJXGuwKDVmm9V7D7iO8sBoxFGZa63ayjassE.jl6dS/K66u/y', NULL, 'VV1fraJF0AWE41PoNwBDEC0wXZRATeGzduP5uNhYa1wCImemTLXQ0u7bKfGf', '2020-11-11 02:11:18', '2020-11-11 02:11:18'),
(106, 'asasaassa', 'qwqwqw', 'akshayaaa1@gmail.com', NULL, '$2y$10$WRu1AA3jNGt.LUN0xAUZL.laFEmD7uvl.go0JRiPABeICjoeIiuim', NULL, NULL, '2020-11-11 02:32:46', '2020-11-11 02:32:46'),
(107, 'asasaassaas', 'qwqwsasqw', 'aasakshayaaa1@gmail.com', NULL, '$2y$10$CxJdFqrkGSIoJgna.JNJEuqW1p8GFU7ydAah1twpMbCfa5CtbOA1.', NULL, 'LG6QpJ9dziakQbqMTG9thUPArJSpE4ueMQuUpQa8bCz3FcPidHTdtUanKIiE', '2020-11-11 02:33:27', '2020-11-11 02:33:27'),
(108, 'xyz', 'uyx', 'xyzz@gmail.com', NULL, '$2y$10$.brNuc7ZWeZL11TUOItUAuFbsD0thVk6fS1wQ9xO5XKmYhQ4zm14q', NULL, 'LqEeMiaCW2GI59dcOWuuRXdapv1FnPyXt3zKDSvzJfkgb1pulplXB9xKyx03', '2020-11-11 03:13:14', '2020-11-11 03:13:14'),
(109, 'sas', 'zas', 'aksahay@gmail.com', NULL, '$2y$10$uaTbXGgYlA0fU2Y/5okMReSP4ofvsI2kS3yQxBbQCf7tMyVZFZ/mC', NULL, '1Ot2DFRe4NKy5zCGYgDYOtm9J8WDD8H8yFmX5Ny825buWnzo9ZAhFA5K4mWq', '2020-11-11 03:54:17', '2020-11-11 03:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `usersses`
--

CREATE TABLE `usersses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersses`
--

INSERT INTO `usersses` (`id`, `created_at`, `updated_at`, `firstname`, `lastname`, `email`, `password`, `Confirm_password`, `status`, `role`) VALUES
(12, '2020-10-01 12:35:25', '2020-10-03 04:48:34', 'assssa', 'dsAA', 'vkhedkar412@gmail.com', NULL, NULL, 'Inactive', 'select'),
(15, '2020-10-03 01:13:08', '2020-10-03 01:13:08', 'sas', 'dsAA', 'vkhedkar412@gmail.com', 'sasadsasa', 'sadsadasda', '0', 'select'),
(17, '2020-10-03 05:00:56', '2020-10-03 05:00:56', 'asasas', 'dsAA', 'aasassas@asas.com', 'aaaaaaaaaaaa', 'aaaaaaaaa', 'Inactive', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_inherit_id_index` (`inherit_id`),
  ADD KEY `permissions_name_index` (`name`),
  ADD KEY `permissions_slug_index` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product__attributes__assocs`
--
ALTER TABLE `product__attributes__assocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product__attributes__assocs_product_id_foreign` (`product_id`),
  ADD KEY `product__attributes__assocs_product_attribute_id_foreign` (`product_attribute_id`),
  ADD KEY `product__attributes__assocs_product_attribute_value_id_foreign` (`product_attribute_value_id`);

--
-- Indexes for table `product__attribute__values`
--
ALTER TABLE `product__attribute__values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product__attribute__values_product_attribute_id_foreign` (`product_attribute_id`);

--
-- Indexes for table `product__categories`
--
ALTER TABLE `product__categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product__categories_product_id_foreign` (`product_id`),
  ADD KEY `product__categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product__images`
--
ALTER TABLE `product__images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product__images_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersses`
--
ALTER TABLE `usersses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product__attributes__assocs`
--
ALTER TABLE `product__attributes__assocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `product__attribute__values`
--
ALTER TABLE `product__attribute__values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `product__categories`
--
ALTER TABLE `product__categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product__images`
--
ALTER TABLE `product__images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `usersses`
--
ALTER TABLE `usersses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_inherit_id_foreign` FOREIGN KEY (`inherit_id`) REFERENCES `permissions` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product__attributes__assocs`
--
ALTER TABLE `product__attributes__assocs`
  ADD CONSTRAINT `product__attributes__assocs_product_attribute_id_foreign` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product__attributes__assocs_product_attribute_value_id_foreign` FOREIGN KEY (`product_attribute_value_id`) REFERENCES `product__attribute__values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product__attributes__assocs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product__attribute__values`
--
ALTER TABLE `product__attribute__values`
  ADD CONSTRAINT `product__attribute__values_product_attribute_id_foreign` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product__categories`
--
ALTER TABLE `product__categories`
  ADD CONSTRAINT `product__categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product__categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product__images`
--
ALTER TABLE `product__images`
  ADD CONSTRAINT `product__images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
