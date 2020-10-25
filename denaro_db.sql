-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2020 at 12:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denaro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE `assigned_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `show_in_navigation` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `details`, `show_in_navigation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '<iframe width=\"238\" height=\"220\" src=\"https://www.youtube.com/embed/Snd6S25zt-Y\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 1, '2017-02-26 22:03:16', '2018-04-24 02:38:04', NULL),
(2, 'Testing', '<iframe width=\"238\" height=\"220\" src=\"https://www.youtube.com/embed/Snd6S25zt-Y\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', 1, '2018-04-24 02:39:52', '2018-04-24 02:39:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_text` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_image` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `button_text`, `button_url`, `background_image`, `image`, `order_image`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 'Test slider updated', NULL, 'Sub heading ', NULL, NULL, 'uploads/images/siv6WF8JUtw80sMN.jpg', NULL, 0, '2020-10-23 15:27:42', '2020-10-23 15:41:43', NULL),
(29, 'Test slider 2', NULL, 'Sub heading 2', NULL, NULL, 'uploads/images/cdZy3muJVhmG6TRb.jpg', NULL, 0, '2020-10-23 15:29:15', '2020-10-23 15:41:50', NULL),
(30, 'Test slider 3', NULL, 'Sub heading 3', NULL, NULL, 'uploads/images/JrXOnxWuoYq8XpF2.jpg', NULL, 0, '2020-10-23 15:29:37', '2020-10-23 15:41:58', NULL),
(31, 'Test slider 4', NULL, NULL, NULL, NULL, 'uploads/images/iB5dhcFJ0fH6WQU8.jpg', NULL, 0, '2020-10-23 15:29:49', '2020-10-23 15:29:54', '2020-10-23 15:29:54'),
(32, 'Test slider 4', NULL, 'fdsfdsfdsdf', NULL, NULL, 'uploads/images/yl8uzhrWIuc3SeK0.jpg', NULL, 0, '2020-10-23 15:30:05', '2020-10-25 22:15:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `brand_type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'uploads/images/tWyGXkjJRc3DHse5.jpg', 10, '2020-10-25 22:23:27', '2020-10-25 22:23:27', NULL),
(10, 'uploads/images/VLlDEHGC0wZXQwUi.jpg', 10, '2020-10-25 22:23:36', '2020-10-25 22:23:36', NULL),
(11, 'uploads/images/IvRYtMKQcdhv7TmJ.jpg', 11, '2020-10-25 22:23:44', '2020-10-25 22:23:44', NULL),
(12, 'uploads/images/F9skCyRy1SnrYcr0.jpg', 11, '2020-10-25 22:23:51', '2020-10-25 22:23:51', NULL),
(13, 'uploads/images/2d5F8hZdFrGl5d1w.jpg', 14, '2020-10-25 22:24:01', '2020-10-25 22:24:01', NULL),
(14, 'uploads/images/abUY0TTbIlZc2zFr.jpg', 14, '2020-10-25 22:24:08', '2020-10-25 22:24:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand_types`
--

CREATE TABLE `brand_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand_types`
--

INSERT INTO `brand_types` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'one', '2020-10-25 22:17:37', '2020-10-25 22:17:37', NULL),
(11, 'Two', '2020-10-25 22:17:42', '2020-10-25 22:17:42', NULL),
(12, 'Three', '2020-10-25 22:17:48', '2020-10-25 22:17:48', NULL),
(13, 'Four', '2020-10-25 22:17:53', '2020-10-25 22:19:02', '2020-10-25 22:19:02'),
(14, 'Four', '2020-10-25 22:19:09', '2020-10-25 22:19:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `title`, `url`, `parent_id`, `created_at`, `updated_at`, `deleted_at`, `details`, `image`) VALUES
(6, 'Cosmetics', NULL, NULL, NULL, 0, '2020-10-25 08:13:13', '2020-10-26 02:42:59', NULL, NULL, 'uploads/images/xdJn8RCs4eGQGEU7.jpg'),
(7, 'Pharmaceuticals', NULL, NULL, NULL, 0, '2020-10-25 08:13:31', '2020-10-26 02:43:18', NULL, NULL, 'uploads/images/biNxDgczYEYmQIPZ.jpg'),
(8, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:13:40', '2020-10-25 08:13:41', NULL, NULL, 'uploads/images/RjId5KxQXokDwGW5.jpg'),
(9, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:13:51', '2020-10-25 08:13:52', NULL, NULL, 'uploads/images/MyHrF8nBcUN2NEJ5.jpg'),
(10, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:13:57', '2020-10-25 08:14:06', NULL, NULL, 'uploads/images/Q5zjU9oEMuvUhZeP.jpg'),
(11, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:14:19', '2020-10-25 08:14:19', NULL, NULL, 'uploads/images/aN6T9FGsUN9cHHA5.jpg'),
(12, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:14:28', '2020-10-25 08:14:28', NULL, NULL, 'uploads/images/3SvkMeBIWgAQcC72.jpg'),
(13, 'FOOD & BEVERAGES', NULL, NULL, NULL, 0, '2020-10-25 08:14:35', '2020-10-25 08:14:35', NULL, NULL, 'uploads/images/5CstFyIb8OQUeUEJ.jpg'),
(14, 'Industrial Solutions', NULL, NULL, NULL, 0, '2020-10-25 08:21:29', '2020-10-25 08:21:29', NULL, NULL, 'uploads/images/X7YWiSOlD1QdoQGq.jpg'),
(15, 'Filling Machines', NULL, NULL, NULL, 14, '2020-10-25 08:22:37', '2020-10-25 11:32:29', NULL, NULL, 'uploads/images/Xunuz9i6BVP2Y5C8.jpg'),
(16, 'Inspection Machines', NULL, NULL, NULL, 14, '2020-10-25 09:31:12', '2020-10-25 11:32:39', NULL, NULL, 'uploads/images/P5rvI1ZcU8jAIzTm.jpg'),
(17, 'Products/Services', NULL, NULL, NULL, 0, '2020-10-25 09:42:01', '2020-10-25 09:42:01', NULL, NULL, 'uploads/images/brm54JgvhgtPc1hU.jpg'),
(18, 'Contract Manufacturing', NULL, NULL, NULL, 17, '2020-10-25 09:44:01', '2020-10-25 09:44:02', NULL, NULL, 'uploads/images/w5nvvb4SeDnBdLNI.jpg'),
(19, 'dssfdfs', NULL, NULL, NULL, 14, '2020-10-25 10:36:37', '2020-10-25 11:32:14', NULL, NULL, 'uploads/images/rfXv0ZCPzbB4CguR.jpg'),
(20, 'fgsdgsdfsddf', NULL, NULL, NULL, 14, '2020-10-25 11:30:17', '2020-10-25 11:30:17', NULL, NULL, 'uploads/images/UuStdej0WKtN84ut.jpg'),
(21, 'sgegdefwee', NULL, NULL, NULL, 14, '2020-10-25 11:30:29', '2020-10-25 11:30:29', NULL, NULL, 'uploads/images/QKPy9luGCYdVncqh.jpg'),
(22, 'fasdfasfas', NULL, NULL, NULL, 14, '2020-10-25 11:33:32', '2020-10-25 11:33:32', NULL, NULL, 'uploads/images/d92KqVfG3PQx0ZOb.jpg'),
(23, 'Projects Consultancy Services', NULL, NULL, NULL, 17, '2020-10-26 02:50:52', '2020-10-26 02:50:52', NULL, NULL, 'uploads/images/1lx6UOwmAiL6RPuC.jpg'),
(24, 'safsasdfasd', NULL, NULL, NULL, 8, '2020-10-26 03:08:25', '2020-10-26 03:08:25', NULL, NULL, 'uploads/images/lAFEMHCIq4u6KAbZ.jpg'),
(25, 'rwerqwefrwer', NULL, NULL, NULL, 6, '2020-10-26 03:08:36', '2020-10-26 03:08:37', NULL, NULL, 'uploads/images/aahcnlZBYWENMYfT.jpg'),
(26, 'qwrqwrqwqw', NULL, NULL, NULL, 6, '2020-10-26 03:08:48', '2020-10-26 03:08:48', NULL, NULL, 'uploads/images/lROSGrdRvtMaKGwc.jpg'),
(27, 'efrwerwerwefcf', NULL, NULL, NULL, 6, '2020-10-26 03:09:00', '2020-10-26 03:09:00', NULL, NULL, 'uploads/images/KKYQBiO5eJTahJYT.jpg'),
(28, 'gngffngf', NULL, NULL, NULL, 14, '2020-10-26 03:36:25', '2020-10-26 03:36:25', NULL, NULL, 'uploads/images/sffHu6JeekGIBR8Q.jpg'),
(29, 'rgergerge ergerter', NULL, NULL, NULL, 14, '2020-10-26 03:36:37', '2020-10-26 03:36:37', NULL, NULL, 'uploads/images/A34DMn5eSraPON7n.jpg'),
(30, 'tghergerge ', NULL, NULL, NULL, 14, '2020-10-26 03:36:54', '2020-10-26 03:36:54', NULL, NULL, 'uploads/images/wENdUjtVghADvZFm.jpg'),
(31, 'efrwerwe ', NULL, NULL, NULL, 15, '2020-10-26 03:38:43', '2020-10-26 03:38:43', NULL, NULL, 'uploads/images/RmXPIsEBd46hGzZp.jpg'),
(32, 'dsfd dfsdfs', NULL, NULL, NULL, 15, '2020-10-26 03:38:58', '2020-10-26 03:38:58', NULL, NULL, 'uploads/images/4myxeYnfom4pmVTM.jpg'),
(33, 'dsdgsdgs rfgrge', NULL, NULL, NULL, 17, '2020-10-26 03:54:42', '2020-10-26 03:54:43', NULL, NULL, 'uploads/images/zRK5tiZ9Gbp1Uaqp.jpg'),
(34, 'ewfwefwe wewerwe', NULL, NULL, NULL, 17, '2020-10-26 03:54:59', '2020-10-26 03:55:00', NULL, NULL, 'uploads/images/L5SZ3HjgvzsKiSQy.jpg'),
(35, 'pppp test', NULL, NULL, NULL, 17, '2020-10-26 03:55:20', '2020-10-26 03:55:20', NULL, NULL, 'uploads/images/5cXJgcHyj1k4M2pw.jpg'),
(36, 'ewrw eew eewv  df', NULL, NULL, NULL, 35, '2020-10-26 03:55:37', '2020-10-26 03:55:37', NULL, NULL, 'uploads/images/MXe5qwjKsQv8aea6.jpg'),
(37, 'etee bete ewewder', NULL, NULL, NULL, 35, '2020-10-26 03:55:50', '2020-10-26 03:55:50', NULL, NULL, 'uploads/images/eRfPVHsNy4AqodaY.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '7.jpg', '2017-05-29 08:57:55', '2017-05-29 08:57:55', NULL),
(2, '6.jpg', '2017-05-29 08:58:02', '2017-05-29 08:58:02', NULL),
(3, '2.jpg', '2017-05-29 08:58:10', '2017-05-29 08:58:10', NULL),
(4, '4.jpg', '2017-05-29 08:58:17', '2017-05-29 08:58:17', NULL),
(5, '5.jpg', '2017-05-29 08:58:27', '2017-05-29 08:58:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `subject_id`, `title`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 'Intro to cloud programming', '<p>jjifweejkweiwj</p>\r\n', '2019-04-27 05:59:35', '2019-04-27 05:59:35', NULL),
(2, 11, 'Intro to cloud programming part 2', '<p>ewjwehiowehiwehioweghio</p>\r\n', '2019-04-27 06:00:06', '2019-04-27 06:00:06', NULL),
(3, 18, 'Chapter 1 Book 1', '<p><strong>Number System</strong></p>\r\n', '2019-04-28 15:39:02', '2019-05-08 03:57:50', NULL),
(4, 23, 'Chapter 9  Book 1', '<p><u><em><strong>Fundamentals of Trigonometry</strong></em></u></p>\r\n', '2019-05-02 19:57:51', '2019-05-28 00:33:23', NULL),
(5, 23, 'Chapter 10 Book 1', '<p><u><em><strong>Trigonometry Identities Sum and Difference of angles</strong></em></u></p>\r\n', '2019-05-02 20:16:02', '2019-05-28 00:31:41', NULL),
(6, 23, 'Chapter 11 Book 1', '<p><u><em><strong>Domain &amp; Range of Trigonometric functions</strong></em></u></p>\r\n\r\n<p><strong>Periods of Functions</strong></p>\r\n', '2019-05-07 00:05:20', '2019-05-28 00:32:19', NULL),
(7, 23, 'Chapter 12  Book 1', '<p><u><em><strong>Application of Trigonometry</strong></em></u></p>\r\n', '2019-05-08 03:42:55', '2019-05-28 00:32:45', NULL),
(8, 18, 'Chapter 2 Book 1', '<p><em><strong>Sets, Functions &amp; Groups</strong></em></p>\r\n', '2019-05-08 04:10:03', '2019-05-08 04:10:03', NULL),
(9, 18, 'Chapter 3  Book 1', '<p><em><strong>Matrices and Determinants</strong></em></p>\r\n', '2019-05-13 23:42:14', '2019-05-13 23:42:14', NULL),
(10, 18, 'Chapter 4  Book 1', '<p>Quadratic Equations</p>\r\n', '2019-05-15 19:20:30', '2019-05-15 19:20:30', NULL),
(11, 18, 'Chapter 5  Book 1', '<p><strong>Partial Fractions</strong></p>\r\n', '2019-05-15 19:24:21', '2019-05-15 19:24:21', NULL),
(12, 18, 'Chapter 6  Book 1', '<p><strong>Sequence and Series</strong></p>\r\n', '2019-05-15 19:26:25', '2019-05-15 19:26:25', NULL),
(13, 18, 'Chapter 7  Book 1', '<p>Permutation and Combination</p>\r\n', '2019-05-15 19:39:53', '2019-05-15 19:39:53', NULL),
(14, 18, 'Chapter 8 Book 1', '<p><strong>Mathematical Induction</strong></p>\r\n', '2019-05-15 19:46:34', '2019-05-15 19:46:34', NULL),
(15, 18, 'Chapter 9 to 14  Book 1', '<p><strong>Trigonometry</strong></p>\r\n', '2019-05-15 19:48:51', '2019-05-15 19:48:51', NULL),
(16, 18, 'Chapter 1 Book II', '<p>Functions and Limits</p>\r\n', '2019-05-15 19:54:20', '2019-05-15 19:54:58', '2019-05-15 19:54:58'),
(17, 24, 'Chapter 2', '<p><strong>Differentiation</strong></p>\r\n', '2019-05-17 01:16:46', '2019-05-17 01:16:46', NULL),
(18, 24, 'Chapter 3', '<p><em><strong>Integration</strong></em></p>\r\n', '2019-05-26 01:26:38', '2019-05-26 01:26:38', NULL),
(19, 25, 'chapter 1', '<p>chapter abcd</p>\r\n', '2019-05-26 14:39:37', '2019-05-26 14:39:37', NULL),
(20, 26, 'chapter 1', '<p><u><em><strong>Introduction to computer</strong></em></u></p>\r\n', '2019-05-27 22:56:17', '2019-05-27 22:56:17', NULL),
(21, 26, 'Chapter 2', '<p><u><em><strong>Hardware</strong></em></u></p>\r\n', '2019-05-27 22:57:07', '2019-05-27 22:57:35', NULL),
(22, 23, 'Chapter 13 Book 1', '<p><u><em><strong>Inverse Trigonometric Functions</strong></em></u></p>\r\n', '2019-05-28 00:31:22', '2019-05-28 00:33:50', NULL),
(23, 27, 'Chapter 1 Book II', '<p><u><em><strong>Functions and Limits</strong></em></u></p>\r\n', '2019-05-29 00:59:17', '2019-05-29 00:59:17', NULL),
(24, 27, 'Chapter 2 Book II', '<p><u><em><strong>Differentiation</strong></em></u></p>\r\n', '2019-05-29 10:31:06', '2019-05-29 10:52:12', NULL),
(25, 27, 'Chapter 3 Book II', '<p><em><strong>Integration</strong></em></p>\r\n', '2019-05-29 10:51:58', '2019-06-13 21:48:43', NULL),
(26, 24, 'Chapter 4', '<p><strong>Coordinate Geometry</strong></p>\r\n', '2019-06-11 07:20:27', '2019-06-11 07:20:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_class_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'uploads/images/uGbAaThgE64ZhoiJ.jpg', 'BMW', '2018-03-26 05:26:32', '2020-10-24 16:36:02', '2020-10-24 16:36:02'),
(5, 'uploads/images/oLqWhdQyrJa8EHiQ.jpg', 'Mian G Brand', '2018-03-26 05:26:52', '2020-10-24 16:35:40', NULL),
(6, 'uploads/images/yAWItJ1azFeyw5Kn.jpg', 'Honda', '2018-03-26 05:27:08', '2020-10-24 16:35:31', NULL),
(7, 'uploads/images/MZ9fX9TMxTBgD3l4.jpg', NULL, '2020-10-24 16:35:57', '2020-10-24 16:35:57', NULL),
(8, 'uploads/images/7WjE9cWQn8pUSdxJ.jpg', NULL, '2020-10-24 16:37:14', '2020-10-24 16:37:15', NULL),
(9, 'uploads/images/FVCiHBtQcfxrB0vR.jpg', NULL, '2020-10-24 16:37:20', '2020-10-24 16:37:21', NULL),
(10, 'uploads/images/PxPtgI2J16zN4jou.jpg', NULL, '2020-10-24 16:38:13', '2020-10-24 16:38:13', NULL),
(11, 'uploads/images/VjqtyiknVodhOa70.jpg', NULL, '2020-10-24 16:38:20', '2020-10-24 16:38:20', NULL),
(12, 'uploads/images/ZAL8qFlM1H8k4yO5.jpg', NULL, '2020-10-24 16:38:26', '2020-10-24 16:38:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `image`, `name`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'uploads/images/WDZ68k61bb85H88s.jpg', 'Amir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2018-04-20 02:38:39', '2018-04-20 02:40:42', NULL),
(4, 'uploads/images/gugPrUa64qBCyYbM.jpg', 'Mian', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2018-04-20 02:38:58', '2018-04-20 02:38:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `address`, `email`, `phone1`, `phone2`, `phone3`, `phone4`, `fax`, `postal`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Footer Contact ', '121 Maxwell Farm Road, Washington DC, USA', 'info@dit.com.pk', '+42 0300 123456', '1111', '22222', 'jklsdsdfjkl', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6809.193539306774!2d74.3461659!3d31.425234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190476ca66dafd%3A0x95d3c780d67bb61a!2sGOEY+Technologies+%7C+Web%2FMobile+Design+Development+Digital+Marketing+Agency+%7C+Google+Partners!5e0!3m2!1sen!2s!4v1547918857385\" width=\"400\" height=\"315\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '45600', 'uploads/images/qUwc1S3MtIBFdUkQ.png', '2018-03-26 07:47:14', '2020-10-26 02:20:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_to_teaches`
--

CREATE TABLE `course_to_teaches` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_to_teaches`
--

INSERT INTO `course_to_teaches` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mathematics', '2019-04-02 06:27:34', '2019-04-02 06:27:34', NULL),
(2, 'English', '2019-04-02 06:27:51', '2019-04-02 06:27:51', NULL),
(3, 'Programming', '2019-04-02 06:28:05', '2019-04-02 06:28:05', NULL),
(4, 'Computer', '2019-04-02 06:28:18', '2019-04-02 06:28:18', NULL),
(5, 'Entry Test', '2019-04-02 06:29:14', '2019-04-28 11:16:49', NULL),
(6, 'Chemistry', '2019-04-02 06:29:40', '2019-04-02 07:46:26', NULL),
(7, 'Networking', '2019-04-02 06:29:52', '2019-04-02 06:29:52', NULL),
(8, 'Database', '2019-04-02 06:30:02', '2019-04-02 06:30:02', NULL),
(9, 'Cloud Computing', '2019-04-02 06:30:20', '2019-04-02 06:30:20', NULL),
(10, 'Data Science', '2019-04-02 06:30:38', '2019-04-02 06:30:38', NULL),
(11, 'test', '2019-04-28 14:32:38', '2019-04-28 14:32:50', NULL),
(12, 'Physics', '2019-05-07 01:04:53', '2019-05-07 01:04:53', NULL),
(13, 'Biology', '2019-05-07 01:05:10', '2019-05-07 01:05:10', NULL),
(14, 'Accounting', '2019-05-07 01:05:36', '2019-05-07 01:05:36', NULL),
(15, 'Urdu', '2019-05-07 01:06:42', '2019-05-07 01:06:42', NULL),
(16, 'Islamyat', '2019-05-07 01:06:52', '2019-05-07 01:06:52', NULL),
(17, 'Social Sciences', '2019-05-07 01:07:49', '2019-05-07 01:07:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'Amir', 'Software Engineer ', 'uploads/images/jD1QPxPhtI0qGWKd.jpg', 'Active', '2018-04-22 02:27:04', '2018-04-22 02:31:21', NULL),
(13, 'Mian', 'Full Stack Software Developer ', 'uploads/images/FwmXL0khNDlHQiBf.jpg', 'Active', '2018-04-22 02:28:28', '2018-04-22 02:28:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `c_e_o_s`
--

CREATE TABLE `c_e_o_s` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_e_o_s`
--

INSERT INTO `c_e_o_s` (`id`, `title`, `image`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CEO\'s Message', 'uploads/images/qye1tCUotJwu9Pmg.jpg', 'CEO\'s Message', '2017-06-07 08:39:38', '2017-06-07 08:46:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Report Correction', '44830.pdf', '2017-05-30 04:52:18', '2017-05-30 04:54:31', '2017-05-30 04:54:31'),
(7, 'Report Correction', 'assets/downloads/y0dpzgUIUlBvN9Tz1496138091.pdf', '2017-05-30 04:54:50', '2017-05-30 04:54:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_no` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latest_school_attended` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `names_of_real_brothers_sisters_pps` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fathers_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualifications` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_home_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_home_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_home_phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_parents_guardian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `reg_no`, `full_name`, `gender`, `dob`, `place_of_birth`, `religion`, `sect`, `nationality`, `latest_school_attended`, `names_of_real_brothers_sisters_pps`, `fathers_name`, `email`, `cnic`, `qualifications`, `occupation`, `office_address`, `present_home_address`, `permanent_home_address`, `office_phone_no`, `present_home_phone_no`, `name`, `name_parents_guardian`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '12345', 'Amir Savvy', 'Male', '2018-05-19', 'rwer', 'wrr', 'wrewer', 'wrewe', 'wrwr', 'wwrer', 'wrwre', 'mianamirlahore@gmail.com1', '44353454533', 'rwewer', 'erwwer', 'nn, nn', 'nn', 'nn, nn', 'rwwre', 'werre', 'Amir', 'ddasasd', 'Active', '2018-05-08 12:09:03', '2018-05-08 13:19:02', NULL),
(3, '123456', 'Amir ', 'Male', '2018-05-25', 'rwer', 'wrr', 'wrewer', 'wrewe', 'wrwr', 'wwrer', 'wrwre', 'mianamirlahore@gmail.com1', '44353454533', 'rwewer', 'erwwer', 'nn, nn', 'nn', 'nn, nn', 'rwwre', 'werre', 'Amir1', 'ddasasd', 'Active', '2018-05-08 12:09:03', '2018-05-08 13:19:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `product_id`, `name`, `details`, `type`, `amount`, `supplier_id`, `employee_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Rust Removers', 'kjsdfjsdfjljlfd', 'Product', 500, 0, 0, 'Completed', '2018-03-19 07:24:26', '2018-03-19 07:24:26', NULL),
(2, 3, 'VpCI Packaging', 'kjsdfjsdfjljlfd', 'Product', 500, 0, 0, 'Completed', '2018-03-23 01:47:51', '2018-03-23 01:47:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `order_image` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `cat_id`, `order_image`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Um-47-q10K0', NULL, NULL, '', '2020-10-26 01:21:35', '2020-10-26 01:38:38', NULL),
(28, 'Um-47-q10K0', NULL, NULL, '', '2020-10-26 01:27:50', '2020-10-26 01:38:47', NULL),
(29, 'Um-47-q10K0', NULL, NULL, '', '2020-10-26 01:27:56', '2020-10-26 01:38:54', NULL),
(30, 'Um-47-q10K0', NULL, NULL, '', '2020-10-26 01:28:02', '2020-10-26 01:39:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'O Level', NULL, NULL, NULL),
(2, 'A Level', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `logo`, `url`, `image1`, `image2`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uploads/images/MbnM3DlUL0vIBi40.png', 'DIT', 'uploads/images/QTgyeYCQ17SP9ExP.png', 'uploads/images/QTgyeYCQ17SP9ExP.png', ' +42 0300 123456 ', 'info@dit.com.pk', '2017-10-09 07:15:48', '2020-10-23 15:05:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assets` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `type_id`, `user_id`, `entity_id`, `icon`, `class`, `text`, `assets`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 'trash', 'bg-maroon', 'trans(\"history.backend.users.deleted\") <strong>Default User</strong>', NULL, '2017-05-26 11:37:34', '2017-05-26 11:37:34'),
(2, 1, 1, 2, 'trash', 'bg-maroon', 'trans(\"history.backend.users.deleted\") <strong>Backend User</strong>', NULL, '2017-05-26 11:37:44', '2017-05-26 11:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `history_types`
--

CREATE TABLE `history_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history_types`
--

INSERT INTO `history_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2016-12-25 03:41:08', '2016-12-25 03:41:08'),
(2, 'Role', '2016-12-25 03:41:08', '2016-12-25 03:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_galleries`
--

CREATE TABLE `home_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_image` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_galleries`
--

INSERT INTO `home_galleries` (`id`, `title`, `image`, `order_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'New Project ', 'uploads/images/RBftjF7kanvEjFoQ.jpg', 1, '2017-05-29 05:57:03', '2018-04-22 06:25:08', NULL),
(4, 'New Room', 'uploads/images/5V7Woj5psOxT6Q1p.jpg', 2, '2018-04-22 06:54:54', '2018-04-22 06:54:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`, `id`) VALUES
('2014_10_12_000000_create_users_table', 1, 1),
('2014_10_12_100000_create_password_resets_table', 1, 2),
('2015_12_28_171741_create_social_logins_table', 1, 3),
('2015_12_29_015055_setup_access_tables', 1, 4),
('2016_07_03_062439_create_history_tables', 1, 5),
('2016_11_02_223020_create_banners_table', 1, 6),
('2016_11_08_192629_create_pages_table', 1, 7),
('2016_11_08_201140_add_heading_to_pages', 1, 8),
('2016_11_08_210142_create_locations_table', 1, 9),
('2016_11_08_213952_create_news_table', 1, 10),
('2016_11_09_063037_create_maps_table', 1, 11),
('2016_11_09_073033_create_galleries_table', 1, 12),
('2016_11_09_144254_create_contacts_table', 1, 13),
('2016_12_26_191634_create_sub_categories_table', 3, 15),
('2016_12_26_193703_create_books_table', 4, 16),
('2016_12_26_193917_add_sub_category_id_to_books', 5, 17),
('2016_12_26_200625_add_url_to_books', 6, 18),
('2016_12_27_062309_create_brands_table', 7, 19),
('2016_12_27_070715_create_reviews_table', 8, 20),
('2016_12_27_073323_add_featured_to_books', 9, 21),
('2017_02_25_194531_create_categories_table', 10, 22),
('2017_02_26_070541_add_category_id_to_users', 11, 23),
('2017_02_26_100245_add_parent_id_to_pages', 12, 24),
('2017_02_26_144354_create_promotions_table', 13, 26),
('2017_02_26_165759_create_features_table', 14, 27),
('2017_02_27_025914_create_authors_table', 15, 28),
('2017_02_27_031653_create_groups_table', 16, 29),
('2017_02_28_184451_create_stockists_table', 17, 31),
('2017_02_28_202724_add_new_fields_to_books', 18, 34),
('2017_03_01_031852_add_more_fields_to_contac', 19, 36),
('2017_03_19_102734_add_more_images_to_books', 20, 37),
('2017_04_05_005121_add_description_to_books', 21, 38),
('2017_04_05_010509_create_book_types_table', 22, 39),
('2017_04_05_010814_add_book_type_id_to_books', 22, 40),
('2017_04_05_012800_add_lat_long_to_stockists', 22, 41),
('2017_04_05_022247_add_link_to_promotions', 23, 44),
('2017_04_30_182129_add_details_to_migrations', 23, 45),
('2017_04_30_230933_create_testimonials_table', 24, 46),
('2017_05_01_192455_create_products_table', 25, 47),
('2017_05_12_144605_create_demos_table', 26, 48),
('2017_05_12_150231_create_tests_table', 27, 49),
('2017_05_12_153211_create_foos_table', 28, 50),
('2017_05_28_144434_create_headers_table', 29, 51),
('2017_05_29_102840_create_home_galleries_table', 30, 52),
('2017_05_29_120057_create_downloads_table', 31, 53),
('2017_05_29_135519_create_certifications_table', 32, 54),
('2017_06_07_133158_create_c_e_o_s_table', 33, 55),
('2017_06_07_135420_create_social_icons_table', 34, 56),
('2017_06_08_055911_create_projects_table', 35, 57),
('2017_07_26_093202_create_clients_table', 36, 58),
('2017_07_26_120946_create_brand_types_table', 37, 59),
('2017_07_26_125004_create_brand_types_table', 38, 60),
('2017_07_26_125957_create_brands_table', 39, 61),
('2017_07_27_093033_create_services_table', 40, 62),
('2017_07_28_104947_create_contacts_table', 41, 63),
('2017_07_28_125338_create_products_table', 42, 64),
('2017_07_28_130639_create_product_table', 43, 66),
('2017_08_17_200253_create_headers_table', 44, 67),
('2017_08_17_203809_create_headers_table', 45, 68),
('2017_08_17_204621_create_headers_table', 46, 69),
('2017_08_24_184339_create_clients_table', 47, 70),
('2017_10_09_105314_create_headers_table', 48, 71),
('2017_10_09_120031_create_headers_table', 49, 72),
('2017_10_09_131518_create_client_reviews_table', 50, 73),
('2017_10_11_211706_create_products_table', 51, 74),
('2017_10_12_095819_create_product_images_table', 52, 75),
('2018_02_27_160639_create_suppiers_table', 53, 76),
('2018_02_27_182426_create_purchases_table', 54, 77),
('2018_03_01_165221_create_customers_table', 55, 78),
('2018_03_03_053052_create_sales_table', 56, 79),
('2018_03_04_071025_create_employees_table', 57, 80),
('2018_03_04_090219_create_pay_rolls_table', 58, 81),
('2018_03_04_154512_create_expenses_table', 59, 82),
('2018_03_14_143036_create_cars_table', 60, 83),
('2018_03_14_144045_create_car_images_table', 61, 84),
('2018_04_16_184648_create_car_models_table', 62, 85),
('2018_04_16_185943_create_car_int_colors_table', 63, 86),
('2018_04_16_190307_create_car_ext_colors_table', 64, 87),
('2018_04_16_190943_create_car_transmissions_table', 65, 88),
('2018_04_16_191417_create_car_doors_table', 66, 89),
('2018_04_16_191743_create_car_seats_table', 67, 90),
('2018_04_16_192053_create_car_fuel_types_table', 68, 91),
('2018_04_16_192445_create_car_features_table', 69, 92),
('2019_01_21_121453_create_classes_table', 70, 93),
('2019_01_21_135457_create_student_classes_table', 71, 94),
('2019_01_21_144330_create_subjects_table', 72, 95),
('2019_01_21_175955_create_chapters_table', 73, 96),
('2019_01_22_102324_create_topics_table', 74, 97),
('2019_01_22_121802_create_class_subjects_table', 75, 98),
('2019_01_24_105505_create_subject_types_table', 76, 99),
('2019_02_20_062852_create_teachers_table', 77, 100),
('2019_02_20_125018_create_payment_plans_table', 78, 101),
('2019_02_20_144321_create_payment_accounts_table', 79, 102),
('2019_03_02_133449_create_teacher_courses_table', 80, 103),
('2019_03_30_111041_create_students_table', 81, 104);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `detail`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>testing news updates will goes here!!!</p>\r\n', 'Testing', '2017-06-07 04:20:03', '2018-03-26 04:31:02', NULL),
(2, '<p>testing testing 2, testing 2.</p>\r\n', 'Testing 2', '2018-03-26 04:36:53', '2018-03-26 04:36:53', NULL),
(3, '<p>sdsdsjidjuds dfddsfji</p>\r\n\r\n<p>sdfjiafjiasafs</p>\r\n', 'News Testing new 1', '2020-10-24 16:05:19', '2020-10-24 16:05:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `details`, `title`, `image`, `meta_keywords`, `meta_description`, `slug`, `created_at`, `updated_at`, `deleted_at`, `heading`, `parent_id`) VALUES
(1, 'home', '<p>consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna <a href=\"https://www.google.com/\">line page</a></p>\r\n', 'DENARO INTERNATIONAL Home', 'uploads/images/wVEap0hM4nbtfHks.png', 'home', 'home', 'home', NULL, '2020-10-23 15:53:55', NULL, 'home', 0),
(8, 'about', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqu</p>\r\n', 'About DENARO', 'uploads/images/vSLYnGTEI6xvQu3o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-25 12:18:25', NULL, 'Core Values', 0),
(13, 'contact_form', '<p>Feel free to contact us ...</p>\r\n', 'Contact Us', 'uploads/images/z0jGTwSES4k3mrl7.jpg', 'Contact', 'new', 'contact ', NULL, '2020-10-26 01:54:54', NULL, 'Contact ', 0),
(20, 'vision_mission', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n', 'Vision & Mission', 'uploads/images/DOkU1jqcUKOj5zAU.jpg', 'Vision & Mission', 'vision_mission', 'vision_mission', NULL, '2020-10-25 12:44:05', NULL, 'Vision & Mission', 0),
(21, 'home_content2', '<p><span style=\"color:#ffffff\"><strong>Setup your own online Academy</strong></span></p>\r\n\r\n<p><span style=\"color:#ffffff\">Register as Teacher, Make video Lectures, Upload and Earn</span></p>\r\n', 'dsgdgdsdg', 'uploads/images/pwBuQL2uXJ06FyLB.png', 'Learning online is easier than ever before', 'Learning online is easier than ever before', '', NULL, '2019-05-07 01:00:48', NULL, 'Teach One Time, Earn Life Time', 0),
(27, 'black_logo_home_footer', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Footer Black Logo ', 'uploads/images/bYOv0BtE33jSx6Z6.png', 'Footer Content', 'Footer Content', 'Footer Content', NULL, '2020-10-24 15:26:58', NULL, 'Footer Content', 0),
(28, 'terms_of_service', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Terms of service', 'uploads/images/yZF1QEZwGKpaFYvs.jpg', 'Terms of service', 'Terms of service', 'Terms of service', NULL, '2019-01-20 01:30:11', NULL, 'Terms of service', 0),
(29, 'privacy_policy', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Privacy Policy', 'uploads/images/yZF1QEZwGKpaFYvs.jpg', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', NULL, '2019-01-20 01:30:11', NULL, 'Privacy Policy', 0),
(30, 'home_projects_callout', '<p>consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna <a href=\"https://www.google.com/\">line page</a></p>\r\n', 'DENARO INTERNATIONAL Home', 'uploads/images/wVEap0hM4nbtfHks.png', 'home', 'home', 'home', NULL, '2020-10-23 15:53:55', NULL, 'home', 0),
(31, 'ceo_message_home_footer', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Footer Black Logo ', 'uploads/images/jx7rKQdMlZLt5dIa.jpg', 'Footer Content', 'Footer Content', 'Footer Content', NULL, '2020-10-24 15:52:04', NULL, 'Footer Content', 0),
(32, 'home_video', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ullamcorper suscipit At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos.</p>\r\n', 'Home Video Test', 'uploads/images/BN1HjoxHyJg8iyck.jpg', 'home_video', 'home_video', 'home_video', NULL, '2020-10-24 16:47:00', NULL, 'home_video', 0),
(33, 'faq', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqua. Ut enim ad minim venia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore magna aliqu</p>\r\n', 'FAQ', 'uploads/images/eTWwfNp3fCdLCYfy.jpg', 'faq', 'faq', 'faq', NULL, '2020-10-25 12:22:50', NULL, 'faq', 0),
(35, 'director_message', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Director Message', 'uploads/images/se7Uh89snqcqwOL3.jpg', 'Footer Content', 'Footer Content', 'director_message', NULL, '2020-10-25 12:50:25', NULL, 'director_message', 0),
(36, 'exclusive_partners', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>\r\n', 'Exclusive Partners', 'uploads/images/ZaIdYYW1Mf8E3FGP.jpg', 'Footer Content', 'Footer Content', 'director_message', NULL, '2020-10-25 13:01:19', NULL, 'director_message', 0),
(37, 'image_gallery_category1', '', 'Image Gallery Category', 'uploads/images/O44I75sA7qeQKxbA.jpg', 'image_gallery_category', 'image_gallery_category', 'image_gallery_category', NULL, '2020-10-26 00:06:17', NULL, 'image_gallery_category', 0),
(38, 'image_gall', '', 'Image Gallery 1', 'uploads/images/anJQvG5UX6PJBv1o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-26 00:55:48', NULL, 'Core Values', 0),
(39, 'video_gallery', '', 'video_gallery', 'uploads/images/anJQvG5UX6PJBv1o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-26 00:55:48', NULL, 'video_gallery', 0),
(40, 'sectors_we_deals_search', '', 'sectors_we_deals_search', 'uploads/images/anJQvG5UX6PJBv1o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-26 00:55:48', NULL, 'sectors_we_deals_search', 0),
(41, 'industrial_solutions_search', '', 'industrial_solutions_search', 'uploads/images/anJQvG5UX6PJBv1o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-26 00:55:48', NULL, 'industrial_solutions_search', 0),
(42, 'products_services_search', '', 'products_services_search', 'uploads/images/anJQvG5UX6PJBv1o.jpg', 'core_values', 'new', 'core_values', NULL, '2020-10-26 00:55:48', NULL, 'products_services_search', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_accounts`
--

CREATE TABLE `payment_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_accounts`
--

INSERT INTO `payment_accounts` (`id`, `name`, `type`, `account`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HBL', 'Bank', '232323', 'active', '2019-02-20 09:49:26', '2019-02-20 09:49:26', NULL),
(2, 'Jazz Cash ', 'Mobile', '+92 305 4523768', 'active', '2019-02-20 09:49:46', '2019-02-20 09:56:17', NULL),
(3, 'Meezan', 'Bank', '3473423623', 'active', '2019-02-20 09:55:53', '2019-02-20 09:55:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_plans`
--

CREATE TABLE `payment_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_plans`
--

INSERT INTO `payment_plans` (`id`, `price`, `duration`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'One Month Free Trail', 'For One month', 'active', '2019-02-20 07:54:50', '2019-04-30 00:34:44', NULL),
(2, '1500', 'Per Months', 'active', '2019-02-20 07:55:05', '2019-04-30 00:35:18', NULL),
(3, '3000', 'For Three Months', 'active', '2019-04-30 00:35:55', '2019-04-30 00:37:38', NULL),
(4, '4000', 'for Six Months', 'active', '2019-04-30 00:36:47', '2019-04-30 00:36:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pay_rolls`
--

CREATE TABLE `pay_rolls` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary` double NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pay_rolls`
--

INSERT INTO `pay_rolls` (`id`, `employee_id`, `salary`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 10000, 'Paid', '2018-03-16 09:57:05', '2018-03-04 09:58:14', NULL),
(3, 3, 20000, 'Paid', '2018-03-30 09:57:24', '2018-03-04 09:57:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'view-backend', 'View Backend', 1, '2016-12-25 03:41:08', '2016-12-25 03:41:08'),
(2, 'manage-users', 'Manage Users', 2, '2016-12-25 03:41:08', '2016-12-25 03:41:08'),
(3, 'manage-roles', 'Manage Roles', 3, '2016-12-25 03:41:08', '2016-12-25 03:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 2),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimated_time_arrival` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_int` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `car_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `engine_cc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transmission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chassis_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mileages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_import` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `is_fresh_arrival` tinyint(1) NOT NULL,
  `is_featured_stock` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ref_no`, `type`, `status`, `estimated_time_arrival`, `price`, `make`, `model`, `version`, `year`, `color_ext`, `color_int`, `car_type`, `engine_cc`, `transmission`, `chassis_type`, `doors`, `seats`, `mileages`, `registration_import`, `availability`, `image`, `features`, `detail`, `cat_id`, `is_fresh_arrival`, `is_featured_stock`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345', 'Stock', 'Active', '1-Week', 5100, 'abc', 'er34', '23', '2015', 'Blacl', 'Brown', 'Hybride', '3000', 'we3', '2345', '4', '4', '20000', '', 'available', 'uploads/images/i7hLaMEv7KDFUh16.jpg', '<p>jwjwejiwegji</p>\r\n', 'sjsjpwep', 2, 1, 1, '2018-02-10 05:26:42', '2018-03-05 05:42:51', NULL),
(2, '2345', 'Stock', 'Active', '1-Week', 10200, 'new', 'test', '123', '2018', 'black', 'white', 'Single', '1500', 'dffd', '3456', '4', '4', '12000', 'fdklfdk', 'available', 'uploads/images/i7hLaMEv7KDFUh16.jpg', '<p>jksgjglwgjl</p>\r\n', 'pjierjier', 2, 1, 1, '2018-03-16 10:17:25', '2018-03-05 05:15:06', NULL),
(3, '12345', 'Stock', 'Pending', '2-Week', 1600, 'eeee', 'test', '2018', NULL, 'black', 'Brown', 'Hybride', '3000', 'dffd', '2345', '4', '4', '20000', 'fdklfdk', 'available', 'uploads/images/OL3Yoza9GlOSy6rJ.jpg', '<p>m,cvcvmcvml</p>\r\n', 'sjsjpwep', 2, 1, 1, '2018-03-20 05:26:09', '2018-03-23 01:47:51', NULL),
(4, '12345', 'Commercial', 'Pending', '3-Week', 200, 'abc', 'test', '', NULL, 'black', 'Brown', 'Hybride', '3000', 'dffd', '2345', '4', '4', '20000', 'fdklfdk', 'available', '', '<p>org</p>\r\n', 'sjsjpwep', 1, 1, 1, '2018-03-09 05:51:32', '2018-03-16 09:18:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `p_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 1, '2018-02-23 05:26:42', '2018-02-23 05:26:42', NULL),
(2, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 2, '2018-02-23 05:26:43', '2018-02-23 05:26:43', NULL),
(3, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 2, '2018-02-23 05:26:43', '2018-02-23 05:26:43', NULL),
(4, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 2, '2018-02-23 05:26:43', '2018-02-23 05:26:43', NULL),
(5, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 2, '2018-03-04 10:17:27', '2018-03-04 10:17:27', NULL),
(6, 'uploads/images/i7hLaMEv7KDFUh16.jpg', 2, '2018-03-04 10:17:29', '2018-03-04 10:17:29', NULL),
(7, 'uploads/images/7NVIClgtMCiqQsco.jpg', 3, '2018-03-09 05:26:09', '2018-03-09 05:26:09', NULL),
(8, 'uploads/images/hyWyHSHCdE5hKM1W.jpg', 3, '2018-03-09 05:26:10', '2018-03-09 05:26:10', NULL),
(9, 'uploads/images/N7wEdTCmBoNsdWmV.jpg', 3, '2018-03-09 05:26:10', '2018-03-09 05:26:10', NULL),
(10, 'uploads/images/tiKzfOepVqHYEaQg.jpg', 3, '2018-03-09 05:26:11', '2018-03-09 05:26:11', NULL),
(11, 'uploads/images/HnDi73uOjM4xqh4F.jpg', 3, '2018-03-09 05:26:11', '2018-03-09 05:26:11', NULL),
(12, 'uploads/images/sn2hGJC5Ryj3pkfv.jpg', 3, '2018-03-09 05:26:12', '2018-03-09 05:26:12', NULL),
(13, 'uploads/images/z5ecC3aMe0yKxvsF.jpg', 3, '2018-03-09 05:29:48', '2018-03-09 05:29:48', NULL),
(14, 'uploads/images/pWgFGt1bWlXqoYRT.jpg', 4, '2018-03-09 05:51:32', '2018-03-09 05:51:32', NULL),
(15, 'uploads/images/bzmUCmU1cAEtnDnh.jpg', 4, '2018-03-09 05:51:33', '2018-04-17 05:11:29', NULL),
(16, 'uploads/images/hYnjQUadNdhVxuPy.jpg', 4, '2018-03-09 05:51:33', '2018-03-09 05:51:33', NULL),
(17, 'uploads/images/PPk6cmYsXtTTQUBa.jpg', 4, '2018-03-09 05:52:59', '2018-03-09 05:52:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_no` int(11) NOT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `purchase_no`, `purchase_date`, `supplier_id`, `product_id`, `total_amount`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(42, 1, '0000-00-00 00:00:00', 8, 3, 1600, 'Pending', '2018-03-15 09:16:09', '2018-03-23 01:47:51', NULL),
(43, 43, '0000-00-00 00:00:00', 8, 4, 200, 'Pending', '2018-03-21 09:21:17', '2018-03-16 09:21:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT 0,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, 1, '2016-12-25 03:41:08', '2016-12-25 03:41:08'),
(2, 'Executive', 1, 2, '2016-12-25 03:41:08', '2016-12-25 03:41:08'),
(3, 'User', 1, 3, '2016-12-25 03:41:08', '2016-12-25 03:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale_no` int(11) NOT NULL,
  `sale_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  `sale_price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `remaining_amount` double NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_no`, `sale_date`, `customer_id`, `product_id`, `no_of_items`, `sale_price`, `discount`, `total_amount`, `remaining_amount`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 1, '2018-03-21 17:41:33', 1, 1, 1, 100, 1, 99, 0, 'Completed', '2018-03-10 10:02:43', '2018-03-16 10:02:43', NULL),
(11, 11, '2018-03-21 17:41:40', 1, 3, 1, 200, 1, 198, 0, 'Completed', '2018-03-17 10:03:21', '2018-03-16 10:03:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'uploads/images/jurvvulXnUscBPjJ.jpg', 'new update', 'uploads/images/vRET0x97OemRP0dj.pdf', '2017-07-27 04:43:23', '2017-07-27 04:48:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `name`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'facebook', 'https://web.facebook.com/1', '2017-06-07 10:28:01', '2020-10-24 15:52:47', NULL),
(2, 'twitter', 'https://twitter.com/', '2017-06-07 10:28:21', '2017-06-07 11:01:27', NULL),
(3, 'youtube', 'http://youtube.com/', '2017-06-07 10:28:40', '2017-06-07 11:01:42', NULL),
(4, 'linkedin', 'http://linkedin.com/', '2017-06-07 10:28:40', '2017-06-07 11:01:42', NULL),
(5, 'instagram', 'http://instagram.com/', '2017-06-07 10:28:40', '2017-06-07 11:01:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `code`, `status`, `name`, `password`, `password2`, `class_id`, `father_name`, `email`, `phone`, `gender`, `city`, `country`, `type`, `profile_pic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 1, 'active', 'teacher_s111', '11111111111111', '11111111111111', '6', 'teacher_s1_f111', 'teacher_s1111@goey.co', '121212121121', 'male', 'Lahore1', 'Pakistan1', 'direct', 'a4qXvQC2utv2KW121555600243.jpeg', '2019-04-18 08:29:33', '2019-04-18 10:18:05', NULL),
(15, 15, 'inactive', 'teacher_s2', '$2y$10$DvIH/mJ1MRNpkb3SOWqZZOoEK0rTPuBmVZLM/hhd4sWrRaSu60vFi', '123456', '7', 'teacher_s2_f', 'teacher_s2@goey.co', '346346364', 'male', 'Lahore', 'Pakistan', 'teacher', 'jI1XrUh5pWC6n28U1555600562.jpg', '2019-04-18 10:16:02', '2019-04-18 10:16:03', NULL),
(16, 16, 'inactive', 'frontend_student1', '123456', '123456', '7', 'frontend_student_father', 'frontend_student1@goey.co', '9090909090', 'male', 'Lahore', 'Pakistan', 'direct', 'mfyQefnQM6PnILZD1555679382.PNG', '2019-04-19 08:09:42', '2019-04-23 00:57:57', NULL),
(17, 17, 'active', 'website2', '123456', '123456', '6', 'web2', 'web2@goey.co', '80808080', 'male', 'Lahore', 'Pakistan', 'direct', 'iiVCR32rrX64asgT1555999266.jpg', '2019-04-23 01:01:06', '2019-06-16 11:21:05', NULL),
(18, 18, 'inactive', 'april_1', '$2y$10$eQqV0udmdBvK.IuInE8ZvebmBUP1zNgFqkKoFdBSS5x7tDg291U7y', '123456', '7', 'april_2', 'april@gmail.com', '111111111', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-04-26 02:15:59', '2019-04-26 02:15:59', NULL),
(19, 19, 'active', 'devops', '$2y$10$QhY0DxtAXJYVrhgim.1uO.XMcAnQ2TRtL2x3feCZywbu58APN8X0a', '123456', '6', 'docker1', 'docker@goey.co', '444444444', 'male', 'Lahore1', 'Pakistan1', 'direct', 'wsPvpXXF3e1wgpbD1556394354.PNG', '2019-04-27 04:42:53', '2019-04-27 14:46:10', NULL),
(20, 20, 'inactive', 'Bilal', '$2y$10$QHAOA3P.DbGytA/CtzM4yexrt4RsmjXG/HxDKyPqalOfHEObtAVsC', 'ahmed123', '9', 'Aslam', 'bilal@gmail.com', '03359354246', 'male', 'Lahore', '123456', 'teacher', '85ehE4siT0WfXAxF1556432549.jpg', '2019-04-28 10:22:29', '2019-05-02 20:20:34', '2019-05-02 20:20:34'),
(21, 21, 'inactive', 'bilal', '$2y$10$260YpgVOfxbfGkbESLexmOsgai95Qrd3NnLJdWJCGUcHMUkqYTd3q', 'bilal123', '9', 'aslam', 'bilal@gmail.com', 'bilal', 'male', 'pakpattan', 'pakistan', 'direct', 'OHoJkN8QaIoogoQj1556438313.jpg', '2019-04-28 11:58:33', '2019-04-28 11:58:33', NULL),
(22, 22, 'active', 'abeeha', '123456', '123456', '9', 'khurram', 'abee@gmail.com', 'baeeha', 'female', 'lahore', 'pakistan', 'direct', 't7SOGlBIPYwBh4tz1556452564.jpg', '2019-04-28 15:56:04', '2019-04-28 15:58:48', NULL),
(23, 23, 'inactive', 'hello', '$2y$10$lkWXMCM2gH2lrV5N2y73d.IeQjd6cUlI7zshbc6FbvnyXvHRdmS0W', 'lhr123', '7', 'world', 'extrafor03@gmail.com', '03012223433', 'female', 'Lhr', 'Pakistan', 'direct', 'E4KA5q7g2FfJkvQ01556475890.jpg', '2019-04-28 22:24:50', '2019-04-28 22:24:50', NULL),
(24, 24, 'inactive', 'Adeel', '$2y$10$xrk8t1LCySwk5hpJgtTQf.ZYxlMoi43bOxroiPtKjU/wZsJbyEI5O', '123456', '9', 'Arshad', 'Adi@gmail.com', 'adeel4', 'male', 'gujrat', 'pak', 'teacher', 'ONcT0VgERVV1bW7W1556570412.jpg', '2019-04-30 00:40:12', '2019-05-02 20:20:19', '2019-05-02 20:20:19'),
(25, 25, 'inactive', 'Ali', '$2y$10$GCU4yBnUGb/Sc7FrpLpjGeZPJtl8TGnbFqzrORkkzNzuV1eyGW6YG', '123456', '9', 'Rashid', 'ali@gmail.com', 'ali', 'male', 'lahore', 'pakistan', 'direct', 'oJSc0YCwJBHA0o4O1556570779.jpg', '2019-04-30 00:46:19', '2019-04-30 00:46:19', NULL),
(26, 26, 'inactive', 'Ans', '$2y$10$WZfHlWYVTE7VFCzi0705ge7vXNIngy2NLWVJr9APzizeJ.KJa8hyG', '123456', '9', 'Ali', 'answer@gmail.com', '0300123456', 'male', 'lahore', 'pak', 'direct', 'image_200_200.png', '2019-05-02 00:28:15', '2019-05-06 22:58:03', '2019-05-06 22:58:03'),
(27, 27, 'inactive', 'Waseem Akram', 'wa178817', 'wa178817', '8', 'Muhammad Akram', 'waseemakram178817@gmail.com', '03074339245', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:05:24', '2019-06-06 01:13:21', NULL),
(28, 28, 'inactive', 'Waseem akram', '$2y$10$qjHC3WjQeeQpiqrHksK1RO7IyVzEAXt2ISpwDVnrVy5a35F3PNCGe', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:15:04', '2019-05-02 20:18:33', '2019-05-02 20:18:33'),
(29, 29, 'inactive', 'Waseem akram', '$2y$10$3CeRaf/xVODHzCr1fMrflOub/cvHOFHgeJmxgH2f8RuGLJL8NiXf6', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:20:27', '2019-05-02 20:18:53', '2019-05-02 20:18:53'),
(30, 30, 'inactive', 'Waseem akram', '$2y$10$YEOi6UnzZAp2Rlaqk2XxS.4DktoRSLu7/.PiVZKHUOrbLP.z1wXdy', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:20:28', '2019-05-02 20:19:11', '2019-05-02 20:19:11'),
(31, 31, 'inactive', 'Waseem akram', '$2y$10$vLnTDjwvkGUKdu5xnljDmeRXHFgpB5aJVHWEXK.gDWHjMGM1JNalC', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:20:28', '2019-05-02 20:19:20', '2019-05-02 20:19:20'),
(32, 32, 'inactive', 'Waseem akram', '$2y$10$4rtVAOWFyl9nmnYU7gZhTeEBYantz6pocVBrgwZ742wiVPAacFuUy', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:20:29', '2019-05-02 20:19:28', '2019-05-02 20:19:28'),
(33, 33, 'inactive', 'Waseem akram', '$2y$10$71g/wz/rhp3965lbCP5u1eFWVzWqehyRcR0ise0Nh69iXMB3hopfS', 'wa178817', '8', 'Muhammad akram', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:20:30', '2019-05-02 20:19:39', '2019-05-02 20:19:39'),
(34, 34, 'inactive', 'Waseem Akram', '$2y$10$ezlS3gjzFZmuO0OSmOgamu4E0oEJqyAUP4eZ5S1ETzCG2Q2BLW0By', '03444850212', '8', 'Muhammad Akram', 'waseemakram178817@gmail.com', '03444850212', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:28:25', '2019-05-02 20:19:49', '2019-05-02 20:19:49'),
(35, 35, 'inactive', 'Waseem akram ', '$2y$10$mSZkWHNcC3c/S61FMy6G2ezaly.TvdW5mxapwH0DnidB83uVbgEJS', 'wa178817', '8', 'Muhammad akram ', 'waseemakram178817@gmail.com', '03444850212 ', 'male', 'Lahore ', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 18:54:23', '2019-05-02 20:19:56', '2019-05-02 20:19:56'),
(36, 28, 'inactive', 'Azan Mehdi', '$2y$10$qTikXAfEWDtvXQJ4KhMJFebD5rc0K4N9mJQMliE/zTZKr1DxJigny', '1234azan', '8', 'Muhammad Mehdi', 'azanmehdi03@gmail.com', '03094399537', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-02 21:09:13', '2019-05-02 21:09:13', NULL),
(37, 37, 'inactive', 'Talha Azeem', 'talha123', 'talha123', '8', 'M Azeem', 'talhaazeem730@gmail.com', '03334458230', 'male', 'Lahore', 'Pakistan', 'direct', 'QPoZkwIXXMqYtM9S1557925864.jpg', '2019-05-03 23:43:50', '2019-06-06 01:14:20', NULL),
(38, 38, 'inactive', 'Talha Azeem', '$2y$10$zIje.Q8wkPzybYWaQYGc6eyAJC6.8w8THOoCsuJ1LHCvGflCP/DGy', 'talha123', '8', 'M Azeem', 'talhaazeem730@gmail.com', '03334458230', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-03 23:43:51', '2019-05-06 22:55:08', '2019-05-06 22:55:08'),
(39, 39, 'inactive', 'Talha Azeem', '$2y$10$vhRI5u6kC0Ssl5zE5rksNOQd08IwoZWh5g3FHu6e7c34ERXnpkY9K', 'talha123', '8', 'M Azeem', 'talhaazeem730@gmail.com', '03334458230', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-03 23:43:51', '2019-05-06 22:54:42', '2019-05-06 22:54:42'),
(40, 40, 'inactive', 'Faheem', '123455', '123455', '8', 'Malik nadeem', 'Malik.faheem78678@gmail.com', '03054652207', 'male', 'Lahore', 'Pakistan', 'direct', 'hHKKYoNApsio66Bm1557997670.jpg', '2019-05-03 23:49:23', '2019-06-06 01:14:49', NULL),
(41, 41, 'inactive', 'Faheem', '$2y$10$/V/H4H1ZuzHoFTea6CyOsuvswK5CY77NaCoO15hvXpwiRCPk8Ujhq', '123455', '8', 'Malik nadeem', 'Malik.faheem78678@gmail.com', '03054652207', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-03 23:49:25', '2019-05-06 22:51:31', '2019-05-06 22:51:31'),
(42, 42, 'inactive', 'Faheem', '$2y$10$BTJhuNFm0SMmHL8PRfu/ZOVWQ5Q5k5QTNocHccu4mhzd3.cMymoxy', '123455', '8', 'Malik nadeem', 'Malik.faheem78678@gmail.com', '03054652207', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-03 23:49:26', '2019-05-06 22:51:17', '2019-05-06 22:51:17'),
(43, 43, 'inactive', 'Abdul qadir ', 'Aishalove', 'Aishalove', '8', 'Zaheer Ahmad', 'aqprince307@gmail.com', '03104857623', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-04 07:55:57', '2019-06-06 01:15:45', NULL),
(44, 44, 'inactive', 'Muhammad ', '4778094', '4778094', '8', 'Ajwad', 'ajwadshahid125@gmail.com', '03054778094', 'male', 'Lahore', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-04 11:09:06', '2019-06-06 01:16:02', NULL),
(45, 45, 'inactive', 'Rana adeel', 'pakistan151214', 'pakistan151214', '8', 'Rana mushtaq', 'adrana623@gmail.coma', '03014098149', 'male', 'Lahore', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-05 19:09:01', '2019-06-06 01:16:23', NULL),
(46, 46, 'inactive', 'aa', '$2y$10$qq2RwMpxEFp.g8.b3hwu2eOD7IVF9RqUJoG6CwVB4vuG.KL5FuoNa', '123456', '8', 'Aslam', 'k@gmail.com', '123456', 'male', 'gujrat', 'pak', 'teacher', 'image_200_200.png', '2019-05-07 00:35:04', '2019-05-08 03:22:59', '2019-05-08 03:22:59'),
(47, 46, 'inactive', 'kamran', '$2y$10$8n72jQOa4K30CzZbAYqknOG3vcmnL4KAitdz3yQ7CtisEGHkoM9F2', '123456', '9', 'asif', 'kami@hotmail.com', '0234567', 'male', 'abs', 'pk', 'direct', 'image_200_200.png', '2019-05-08 04:13:49', '2019-05-29 00:24:31', '2019-05-29 00:24:31'),
(48, 48, 'inactive', 'll', '$2y$10$cEOWmw81sdO7maDQGHIMmey1JLau7nVqIGey4fK1RdB0nfHbDpZhm', '1234546', '9', 'pp', 'p@gmail.com', '55555', 'male', 'aa', 'pp', 'direct', 'image_200_200.png', '2019-05-08 04:19:32', '2019-05-08 04:19:32', NULL),
(49, 49, 'inactive', 'Rana adeel', '$2y$10$Z7myxYkszCSynUMKSchrs.CHQ0gNAQ2IyPzUefyiCBI.vJnWYKePm', 'pakistan', '8', 'Rana mushtaq', 'adrana623@gmail.coma', '03014098149', 'male', 'Lahore', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-08 11:40:44', '2019-05-08 11:40:44', NULL),
(50, 50, 'inactive', 'Bilal Ahmed', '$2y$10$mcVN.c0JEfJgrC8nNjpJv.ONN2VylCbkFmCEhliMfjO1eg39Dzu36', 'bilal', '9', 'Ahmed', 'bilal@gmail.com', '033333333', 'male', 'sargodha', 'pakistan', 'direct', 'image_200_200.png', '2019-05-13 23:54:07', '2019-05-13 23:54:07', NULL),
(51, 51, 'inactive', 'Bilal Ahmed', '$2y$10$kqSajfVHk./Brd/958kE0OgcU5mKBQZLWSzVNRChAaSHCAmV0Meue', 'bilal', '9', 'Ahmed', 'bilal@gmail.com', '033333333', 'male', 'sargodha', 'pakistan', 'direct', 'image_200_200.png', '2019-05-13 23:55:16', '2019-05-13 23:55:16', NULL),
(52, 52, 'inactive', 'Shahzaib ', 'pakistan', 'pakistan', '8', 'M. Fiaz ', 'sha@gmail.com', '0330 4388957 ', 'male', 'Lahore ', 'Pakistan ', 'direct', 's5WgRGwfcejyeng71557904852.jpeg', '2019-05-15 11:20:52', '2019-06-06 01:16:56', NULL),
(53, 53, 'inactive', 'Shahzaib ', '$2y$10$T8Eahe5KNo7ShIN8CQs3g.Kszig5dZeF3oYLR3iwduWqsG4GjY/u6', 'pakistan', '8', 'M. Fiaz ', 'sha@gmail.com', '0330 4388957 ', 'male', 'Lahore ', 'Pakistan ', 'direct', 'dvOBP4ciUe9cCH5M1557904853.jpeg', '2019-05-15 11:20:53', '2019-05-15 11:20:53', NULL),
(54, 54, 'inactive', 'Muhamad Bilal Ahmad', '$2y$10$oiKQqF2LZnG4FkXUG8QwDOmsW.dfNGVE12rw0Tvrki39RN6BU47Fi', '150718', '9', 'Siraj ud din', 'muhammadbilalahmad23@gmail.com', '+923336727673', 'male', 'Jhang', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-15 12:41:32', '2019-05-15 12:41:32', NULL),
(55, 55, 'inactive', 'Ahsan', '$2y$10$ugkk8k.qIHEAFP9kL/JMNeibYfv4izuyn5aQm9RaFeDc2XndcTkb6', 'ahsanraza', '8', 'Abbas ali raza', 'razaahsan1121@gmail.com', '03069354262', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-15 17:32:54', '2019-05-15 17:32:54', NULL),
(56, 56, 'active', 'Muhammad bilal', 'bilal345', 'bilal345', '9', 'Ahmed', 'Muhammadbilalahmad23@gmail.com', '03336727673', 'male', 'jhang', 'Pakistan', 'direct', 'wCo6rWEjMeHAni3C1557937674.jpg', '2019-05-15 20:21:13', '2019-05-15 20:27:54', NULL),
(57, 57, 'inactive', 'Asad', '$2y$10$oEBgbF/Zfkf52GtqTjQ0muWRg7tFjnmR6nM/os/av2FB6NwojkH6i', 'asad0987', '9', 'Sanaullah', 'aj287215@gmail.com', '03424361960', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-15 21:26:48', '2019-05-15 21:26:48', NULL),
(58, 58, 'inactive', 'Ehsan Rajpot', '$2y$10$hhzX7ydPxhi03h45mBxtr.CzBWKHmmaEiS8BLA.jhf2O5O2Nq4m0.', '03081337448', '9', 'jamshaid ali', 'Ehsanrajpot131@Gmail.com', '03081337448', 'male', 'mianwali ', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-15 22:52:48', '2019-05-15 22:52:48', NULL),
(59, 59, 'inactive', 'Ehsan Rajpot', '$2y$10$lOUq7qZqr0OhEMBQqbuYkO6QMGJAavC8KMLrcx3huJuAP.Nj84As6', '03081337448', '9', 'jamshaid ali', 'Ehsanrajpot131@Gmail.com', '03081337448', 'male', 'mianwali ', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-15 22:57:23', '2019-05-15 22:57:23', NULL),
(60, 60, 'inactive', 'Ehsan Rajpot', '$2y$10$tR0TcYaCg9/usm4lwgY/9.r8.eSamw9K.PG7B.rDR1bNm7T35440a', '03081337448', '9', 'jamshaid ali', 'Ehsanrajpot131@Gmail.com', '03081337448', 'male', 'mianwali ', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-15 23:13:00', '2019-05-15 23:13:00', NULL),
(61, 61, 'inactive', 'Ehsan rajpot ', '$2y$10$FlIH72p0mOocpO7NObBUz.RFKIayCVCSPOxaW0QPULluFSj4HLlwe', '03081337448', '8', 'jamshaid ali', 'Ehsanrajpot131.@Gmail.com', '03081337448', 'male', 'mianwali ', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-15 23:15:13', '2019-05-15 23:15:13', NULL),
(62, 62, 'inactive', 'Hamza Inam', '$2y$10$C.aG4LkWAWlzk5DycFjUdulWGgTjelvQvD3pO438bZi6Sbf/e343W', 'BSMT023R181', '10', 'Inam Ullah Farooqi ', 'hamzainam1997@gmail.com', '03065880131', 'male', 'Jahanian', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-16 04:46:33', '2019-05-16 04:46:33', NULL),
(63, 63, 'inactive', 'MUNEEB MUGHAL ', '$2y$10$qQ0v39IVgOWscQCYeFYE1uwbucFV.47pvs.FZ2Fqtp.fFHwb2h4kS', '13768', '14', 'IFTIKHAR HUSSAIN ', 'muneebmughal8108@yahoo.com', '03120737050', 'male', 'Khushab', 'Pakistan ', 'direct', 'image_200_200.png', '2019-05-16 23:12:18', '2019-05-16 23:12:18', NULL),
(64, 64, 'inactive', 'Aroosha ', '$2y$10$Q8UPEequhKU5NJKyPNZlFeJedODFFswcnrUQ7Y/Z8qg8iQqJ3yUvq', 'aroosha12ar', '8', 'Shahid ', 'aroosha.shahid7@gmail.com', '96894854260', 'female', 'Falaj', 'Oman', 'direct', 'image_200_200.png', '2019-05-26 12:41:27', '2019-05-26 12:41:27', NULL),
(65, 65, 'inactive', 'M.Ahmad', '$2y$10$nVtRBVGmF0jCH0iosrjkV.pRAHeDg7nQy/Z.yOKnYDtFBsxqhvGny', 'Qwertyahmadtariq123', '8', 'Rana Muhammad Tariq', 'muhammadahmadrajpoot789@gmail.com', '03036313432', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-29 06:52:19', '2019-05-29 10:16:43', '2019-05-29 10:16:43'),
(66, 66, 'inactive', 'M.Ahmad', 'Qwertyahmadtariq123', 'Qwertyahmadtariq123', '8', 'Rana Muhammad Tariq', 'muhammadahmadrajpoot789@gmail.com', '03036313432', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-29 07:06:34', '2019-06-06 01:17:25', NULL),
(67, 67, 'inactive', 'Bilal ', 'bilal@@123', 'bilal@@123', '9', 'Ahamed', 'abc@gmail.com', '03344556677', 'male', 'jhang', 'Pakistan', 'direct', 'image_200_200.png', '2019-05-29 11:02:29', '2019-06-06 01:17:46', NULL),
(68, 68, 'active', 'live_test5', '123456', '123456', '9', 'live_test6', 'live_test5@goey.co', '0000000', 'male', 'Lahore', 'Pakistan', 'direct', 'mCkhwxQgiTFNwJ6j1559287593.jpg', '2019-05-31 11:26:33', '2019-06-03 10:51:18', NULL),
(69, 69, 'inactive', 'Sarwan jee', '$2y$10$gO7/9AhGAGcz0ESdBFUIsOShktiplLl/DfljTKQagnvawYxXr.vd6', 'sarwan', '9', 'Gorkha ram', 'sarwanjee45@mail.com', '03477134590', 'male', 'Ahmedpur', 'Pakistan', 'direct', 'sz8i7LQ8Vr9dmtRS1559290154.jpg', '2019-05-31 12:09:14', '2019-05-31 12:09:14', NULL),
(70, 70, 'inactive', 'Tayyab Ramzan', '$2y$10$Y5B37bSWHgfbtivCw9PAUuHiB.AeR6qa5sX/.boN4zVXKNA7nmR.W', 'april2002', '14', 'Muhammad Ramzan', 'tayyabramzan742@gmail.com', '03046891269', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-02 11:27:03', '2019-06-02 11:27:03', NULL),
(71, 71, 'inactive', 'Tayyab Ramzan', '$2y$10$pfvE9Qr4JpU3LqR.yYcEiO74K.NFgf0KT1SwQc9h0eukfQLh03nVG', 'april2002', '14', 'Muhammad Ramzan', 'tayyabramzan742@gmail.com', '03046891269', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-02 11:27:04', '2019-06-02 11:27:04', NULL),
(72, 72, 'inactive', 'Muhammad Farasat Hussain', '$2y$10$cF3xewWuXyrP9y32VcP35.uatZXiqAP4HzBFYN4fO4sHkicdayAdi', 'Farasat123', '9', 'Muhammad Naseem', 'Muhammadfarasat@yahoo.com', '+4368860224999', 'male', 'Vienna', 'Austria', 'direct', 'tBA1vl52nO4poRQm1559517679.jpg', '2019-06-03 03:21:19', '2019-06-03 03:21:19', NULL),
(73, 73, 'inactive', 'salman', '123456', '123456', '9', 'mehdi', 'mehdi@gmail.com', '03331111234', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-04 11:16:53', '2019-06-06 01:12:53', NULL),
(74, 74, 'active', 'new_34', '123456', '123456', '9', 'yy_34', 'new_34@gm.com', '3434343434', 'male', 'Lahore', 'Pakistan', 'direct', 'ld2npM7hSVUEHAXM1559644827.jpg', '2019-06-04 14:40:27', '2019-06-04 14:42:23', NULL),
(75, 75, 'active', 'Bilal', 'bilal345', 'bilal345', '9', 'Ahmed', 'bilal@gmail.com', '03331212123', 'male', 'jhang', 'Pakistan', 'direct', 'MpyZspbPHhv8Tepz1560026078.jpg', '2019-06-09 00:34:38', '2019-06-09 00:36:34', NULL),
(76, 76, 'active', 'Abubakar', '$2y$10$dyk9dGGEsUpleCsxPQOdgONsjviaDAX9r8w3uiOpSjw4gqsCNitf6', '123456', '8', 'Aa', 'aardvark@gmail.com', '03331234567', 'male', 'Sargodha', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-11 17:52:32', '2019-06-11 17:52:32', NULL),
(77, 77, 'active', 'asra', '$2y$10$.sgwW4710lT7nycNRgqt1OcTfV3tB44c7G3zhMIvpwRPezTed70Re', '123456', '9', 'gg', 'bilal@gmail.com', '300123456', 'female', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-13 21:58:14', '2019-06-13 21:58:14', NULL),
(78, 78, 'active', 'Naimat Ullah', 'naimat902', 'naimat902', '8', 'Naimat', 'naimat@gmail.com', '03058824902', 'male', 'Balochistan', 'Pakistan', 'direct', 'z6My63Cqbc9tbUh11561052619.jpg', '2019-06-20 21:43:39', '2019-06-20 21:47:38', NULL),
(79, 79, 'active', 'live_1', '$2y$10$sMo6AGU21ywJ.dLuERK2keSRf5vOZUbjoEFNm12d9eIwi.pYgcvXS', '123456', '6', 'live_2_f', 'dffsddf@mm.com', '222222', 'male', 'ere', 'sdsdsd', 'direct', 'FvcCUhek8Z4trYH31561449350.jpg', '2019-06-25 11:55:51', '2019-06-25 12:00:28', '2019-06-25 12:00:28'),
(80, 79, 'active', 'nnnm', '$2y$10$6PCSAFMXk1/tkyjF7Woq.OU5fOjRFUtQzXxLGVLe499eV.AdcN0gW', '123456', '13', 'fryryi', 'yyry@ggh.vom', '555555', 'male', 'trtr', 'yuyu', 'direct', 'iPHIVSRakh1tfg6T1561449726.jpg', '2019-06-25 12:02:06', '2019-06-25 12:02:06', NULL),
(81, 81, 'active', 'Ishmal', '$2y$10$Sa8MJLVx.oF6p4vc4rPCyuT8EJ.AgoDblq4LC58MtJtyVtyPl3wly', '123456', '9', 'Khurram', 'ishmal@gmail.com', '03004370070', 'female', 'jhang', 'pak', 'direct', 'dmQzx5d5gsSGI0xo1561467782.jpg', '2019-06-25 17:03:02', '2019-06-25 17:03:02', NULL),
(82, 82, 'active', 'Ishmal', '$2y$10$FtlA3G56NToqhT0fvFnNpeFHw2pV0rCiLAD/GEpVyRPArptHAgMAi', '123456', '9', 'Khurram', 'ishmal@gmail.com', '03004370070', 'female', 'jhang', 'pak', 'direct', 'qYadxqA9kbuGkuoF1561468103.jpg', '2019-06-25 17:08:23', '2019-06-25 17:08:56', '2019-06-25 17:08:56'),
(83, 82, 'active', 'Ishmal', '$2y$10$iPr25nxw2s4Azs8pbW5UquR4FJuGwmEFxCNhO7mgKxSQWuGLyEnpy', '123456', '9', 'Khurram', 'ishmal@gmail.com', '03004370070', 'female', 'jhang', 'pak', 'direct', '40IVgHr0YS0GDuwp1561468271.jpg', '2019-06-25 17:11:11', '2019-06-25 17:11:11', NULL),
(84, 84, 'active', 'Khurram Arshad', '$2y$10$TDWY9HUH3YfMZ8akzZVUseI/4u9MmuJ1tIN5wh6CGqXNYUNCV98Zi', '123456', '6', 'Aa', 'a@gmail.com', '033312121212', 'male', 'Sargodha', 'Pakistan', 'direct', 'image_200_200.png', '2019-06-25 17:14:17', '2019-06-25 17:21:04', '2019-06-25 17:21:04'),
(85, 84, 'active', 'Abc', '$2y$10$ji31mlMX2nnToW.qOBZ8D.S4n2KgtMISgSSKyb.1JmvfBRP.6Bma2', '123456', '6', 'Zxc', 'z@gmail.com', '6666666', 'male', 'jhang', 'pak', 'direct', 'image_200_200.png', '2019-06-25 17:21:59', '2019-06-25 17:21:59', NULL),
(86, 86, 'active', 'live_test12', '$2y$10$yHbAuukm7m83PsDatZrUPuHaDZTNdOvBe20SWejiuYYH58ZS/S3W.', '1234567', '13', 'live_test12_f', 'live_test12@mail.com', '1234567', 'male', 'Lahore', 'Pakistan', 'direct', 'RQReBcmnp2Z0E7qO1561574371.jpg', '2019-06-26 22:39:31', '2019-06-26 22:39:31', NULL),
(87, 87, 'active', 'live_34', '$2y$10$vr1L1C1CMPdRqRux1egeO.nRq7rnRrITaCsMMrRVVNYOrTk8W/xl2', '123456', '11', 'live_34_f', 'live_@gmail.com', '888888', 'male', 'hiowef', 'sdjksdfjk', 'direct', 'FZynTT7Qmhja3OSv1561822860.jpg', '2019-06-29 19:41:00', '2019-06-29 19:41:00', NULL),
(88, 88, 'active', 'Kashif Ali', '$2y$10$NlqZar4CEmUHWICmud7r6Ouj1.I6/91Zo7l5yhcFxUH2wppuoUZkG', 'kashif123', '14', 'Ameer Ali', 'kashifalik544@gmail.com', '03083025483', 'male', 'Tando bago', 'Pakistan', 'direct', 'n8ClDEu0YZU1Trhs1564827900.jpg', '2019-08-03 14:25:00', '2019-08-03 14:25:00', NULL),
(89, 89, 'active', 'Ahmad', '$2y$10$m.xBv5famCF44TZwjLHCouT/Q5gNxTMfs7OdZTgmspaQSNNZ2bgb6', 'Qwertyahmadtariq123', '9', 'Rana Muhammad Tariq', 'muhammadahmadrajpoot789@gmail.com', '03036313432', 'male', 'Sargodha', 'Pakistan', 'direct', 'image_200_200.png', '2019-11-29 23:30:19', '2019-11-29 23:32:46', '2019-11-29 23:32:46'),
(90, 89, 'active', 'Hurmat mehdi', '$2y$10$BMFIEMjLc3dg.qmwX55e8eLgrn203nRXbFKQTdRQtei7Oq/rGE91C', 'hurmatmehdi464', '8', 'Qaiser ali', 'mehdibhai464@gmail.com', '03063189970', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2020-04-05 10:37:47', '2020-04-05 10:37:47', NULL),
(91, 91, 'active', 'Hurmat mehdi', '$2y$10$FCCHT7tR4k4M9rRRo7SqGOiZAuDR02vrLmjxWYNwtyM5bVX.GRlVq', 'hurmatmehdi464', '8', 'Qaiser ali', 'mehdibhai464@gmail.com', '03063189970', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2020-04-05 10:37:48', '2020-04-05 10:37:48', NULL),
(92, 92, 'active', 'Hurmat mehdi', '$2y$10$jV1L9BSkDEfgbuUHUVkzgOiPZAl0iogJ4UPmIuOKk8jOFrKzunlBO', 'hurmatmehdi464', '8', 'Qaiser ali', 'mehdibhai464@gmail.com', '03063189970', 'male', 'Lahore', 'Pakistan', 'direct', 'image_200_200.png', '2020-04-05 10:37:48', '2020-04-05 10:37:48', NULL),
(93, 93, 'active', 'Muhammad Danish', '$2y$10$JNYEeehWD3366fXAucJML.XOb/EUIIKRYfcUf.wL7BGEOrr9QUIfm', 'math7286][', '9', 'Muhammad Khalid', 'md9648243@gmail.com', '03136187046', 'male', 'haroonabad', 'pakistan', 'direct', 'image_200_200.png', '2020-06-11 10:27:26', '2020-06-11 10:28:28', '2020-06-11 10:28:28'),
(94, 93, 'active', 'Muhammad Danish', '$2y$10$4FjtVoQ17WRwvDnrXLT/5eOd4frdoe0aJvf3GOSSW17jpbGQN6fcm', 'math7286][', '9', 'Muhammad Khalid', 'md9648243@gmail.com', '03136187046', 'male', 'haroonabad', 'pakistan', 'direct', 'image_200_200.png', '2020-06-11 10:32:25', '2020-06-11 10:32:43', '2020-06-11 10:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '8th', '2019-01-22 08:59:36', '2019-04-28 00:32:44', NULL),
(6, '9th', '2019-01-22 08:59:45', '2019-04-28 00:33:04', NULL),
(7, '10th', '2019-01-22 08:59:56', '2019-04-28 00:33:15', NULL),
(8, 'Inter part 1', '2019-04-28 00:33:29', '2019-04-28 00:33:29', NULL),
(9, 'Inter Part 2', '2019-04-28 00:33:43', '2019-04-28 00:33:43', NULL),
(10, 'BA / Bsc. Part 1', '2019-04-28 00:34:07', '2019-04-28 00:34:44', NULL),
(11, 'BA/Bsc. Part 2', '2019-04-28 00:34:31', '2019-04-28 00:35:28', NULL),
(12, 'MA/Msc. Part 1', '2019-04-28 00:35:19', '2019-04-28 00:35:19', NULL),
(13, 'MA/Msc. Part 2', '2019-04-28 00:35:47', '2019-04-28 00:35:47', NULL),
(14, 'Others', '2019-04-28 00:35:58', '2019-04-28 00:35:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`id`, `student_id`, `subject_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 15, 8, '2019-04-18 11:45:24', '2019-04-18 11:45:24', NULL),
(16, 14, 9, '2019-04-18 11:50:56', '2019-04-18 11:50:56', NULL),
(17, 15, 10, '2019-04-18 11:52:23', '2019-04-18 11:52:23', NULL),
(18, 14, 11, '2019-04-27 02:56:49', '2019-04-27 02:56:49', NULL),
(19, 19, 11, '2019-04-27 04:50:34', '2019-04-27 04:50:34', NULL),
(20, 19, 9, '2019-04-27 13:38:09', '2019-04-27 13:38:09', NULL),
(21, 19, 12, '2019-04-27 14:49:03', '2019-04-27 14:49:03', NULL),
(22, 19, 13, '2019-04-27 14:51:59', '2019-04-27 14:51:59', NULL),
(23, 21, 19, '2019-04-28 12:00:07', '2019-04-28 12:00:07', NULL),
(24, 21, 18, '2019-04-28 12:04:19', '2019-04-28 12:04:19', NULL),
(25, 21, 17, '2019-04-28 12:06:50', '2019-04-28 12:06:50', NULL),
(26, 22, 18, '2019-04-28 15:56:25', '2019-04-28 15:56:25', NULL),
(27, 22, 17, '2019-04-28 16:01:01', '2019-04-28 16:01:01', NULL),
(28, 22, 14, '2019-04-28 16:03:07', '2019-04-28 16:03:07', NULL),
(29, 22, 16, '2019-04-28 16:03:14', '2019-04-28 16:03:14', NULL),
(30, 22, 19, '2019-04-28 16:29:35', '2019-04-28 16:29:35', NULL),
(31, 23, 8, '2019-04-28 22:25:33', '2019-04-28 22:25:33', NULL),
(32, 25, 18, '2019-04-30 00:46:33', '2019-04-30 00:46:33', NULL),
(33, 26, 18, '2019-05-02 00:28:34', '2019-05-02 00:28:34', NULL),
(34, 26, 19, '2019-05-02 00:30:50', '2019-05-02 00:30:50', NULL),
(35, 27, 23, '2019-05-02 20:22:06', '2019-05-02 20:22:06', NULL),
(36, 36, 23, '2019-05-02 21:09:57', '2019-05-02 21:09:57', NULL),
(37, 39, 23, '2019-05-03 23:43:57', '2019-05-03 23:43:57', NULL),
(38, 42, 23, '2019-05-03 23:49:47', '2019-05-03 23:49:47', NULL),
(39, 43, 23, '2019-05-04 07:56:06', '2019-05-04 07:56:06', NULL),
(40, 44, 23, '2019-05-04 11:09:22', '2019-05-04 11:09:22', NULL),
(41, 45, 23, '2019-05-05 19:09:15', '2019-05-05 19:09:15', NULL),
(42, 37, 23, '2019-05-06 23:05:53', '2019-05-06 23:05:53', NULL),
(43, 40, 23, '2019-05-06 23:10:29', '2019-05-06 23:10:29', NULL),
(44, 47, 18, '2019-05-08 04:14:12', '2019-05-08 04:14:12', NULL),
(45, 47, 14, '2019-05-08 04:14:28', '2019-05-08 04:14:28', NULL),
(46, 47, 15, '2019-05-08 04:14:34', '2019-05-08 04:14:34', NULL),
(47, 47, 16, '2019-05-08 04:14:39', '2019-05-08 04:14:39', NULL),
(48, 47, 17, '2019-05-08 04:14:44', '2019-05-08 04:14:44', NULL),
(49, 48, 17, '2019-05-08 04:19:51', '2019-05-08 04:19:51', NULL),
(50, 48, 18, '2019-05-08 04:19:56', '2019-05-08 04:19:56', NULL),
(51, 49, 23, '2019-05-08 11:41:12', '2019-05-08 11:41:12', NULL),
(52, 50, 17, '2019-05-13 23:54:19', '2019-05-13 23:54:19', NULL),
(53, 50, 18, '2019-05-13 23:54:23', '2019-05-13 23:54:23', NULL),
(54, 51, 18, '2019-05-13 23:55:19', '2019-05-13 23:55:19', NULL),
(55, 53, 23, '2019-05-15 11:21:01', '2019-05-15 11:21:01', NULL),
(56, 54, 18, '2019-05-15 12:41:55', '2019-05-15 12:41:55', NULL),
(57, 54, 14, '2019-05-15 12:42:08', '2019-05-15 12:42:08', NULL),
(58, 54, 15, '2019-05-15 12:42:37', '2019-05-15 12:42:37', NULL),
(59, 55, 23, '2019-05-15 17:33:16', '2019-05-15 17:33:16', NULL),
(60, 56, 18, '2019-05-15 20:31:47', '2019-05-15 20:31:47', NULL),
(61, 52, 23, '2019-05-15 21:10:55', '2019-05-15 21:10:55', NULL),
(62, 57, 14, '2019-05-15 21:27:16', '2019-05-15 21:27:16', NULL),
(63, 57, 15, '2019-05-15 21:27:56', '2019-05-15 21:27:56', NULL),
(64, 59, 18, '2019-05-15 23:11:03', '2019-05-15 23:11:03', NULL),
(65, 59, 17, '2019-05-15 23:11:46', '2019-05-15 23:11:46', NULL),
(66, 59, 14, '2019-05-15 23:11:50', '2019-05-15 23:11:50', NULL),
(67, 60, 18, '2019-05-15 23:13:07', '2019-05-15 23:13:07', NULL),
(68, 61, 23, '2019-05-15 23:15:32', '2019-05-15 23:15:32', NULL),
(69, 56, 24, '2019-05-17 01:20:28', '2019-05-17 01:20:28', NULL),
(70, 64, 23, '2019-05-26 12:41:33', '2019-05-26 12:41:33', NULL),
(71, 65, 23, '2019-05-29 06:52:39', '2019-05-29 06:52:39', NULL),
(72, 66, 23, '2019-05-29 07:06:57', '2019-05-29 07:06:57', NULL),
(73, 67, 27, '2019-05-29 11:14:28', '2019-05-29 11:14:28', NULL),
(74, 67, 24, '2019-05-29 11:15:08', '2019-05-29 11:15:08', NULL),
(75, 67, 18, '2019-05-29 11:15:44', '2019-05-29 11:15:44', NULL),
(76, 69, 27, '2019-05-31 12:11:36', '2019-05-31 12:11:36', NULL),
(77, 72, 17, '2019-06-03 03:21:45', '2019-06-03 03:21:45', NULL),
(78, 72, 18, '2019-06-03 03:22:03', '2019-06-03 03:22:03', NULL),
(79, 72, 27, '2019-06-03 03:22:14', '2019-06-03 03:22:14', NULL),
(80, 73, 27, '2019-06-04 11:19:34', '2019-06-04 11:19:34', NULL),
(81, 73, 18, '2019-06-04 11:19:52', '2019-06-04 11:19:52', NULL),
(82, 73, 24, '2019-06-04 11:20:58', '2019-06-04 11:20:58', NULL),
(83, 73, 25, '2019-06-04 11:21:31', '2019-06-04 11:21:31', NULL),
(84, 73, 14, '2019-06-04 11:21:50', '2019-06-04 11:21:50', NULL),
(85, 73, 17, '2019-06-04 11:21:59', '2019-06-04 11:21:59', NULL),
(86, 75, 27, '2019-06-09 00:38:24', '2019-06-09 00:38:24', NULL),
(87, 76, 23, '2019-06-11 17:54:11', '2019-06-11 17:54:11', NULL),
(88, 77, 27, '2019-06-13 21:58:23', '2019-06-13 21:58:23', NULL),
(89, 77, 24, '2019-06-13 21:59:31', '2019-06-13 21:59:31', NULL),
(90, 78, 23, '2019-06-20 21:43:46', '2019-06-20 21:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(255) DEFAULT NULL,
  `course_type` int(11) DEFAULT NULL,
  `subject_type_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_details` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo_video_featured_image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promo_video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `code`, `course_type`, `subject_type_id`, `title`, `short_details`, `details`, `price`, `is_featured`, `status`, `promo_video_featured_image`, `promo_video`, `image`, `class_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 9, 9, 1, 'Python Programming ', 'short details will be goes here!!!', '<p>UO4YO3UI23TPU323TU923TU</p>\r\n', 12000, 1, 'active', 'MS77q4WWFVp7OldI1555603315.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'lWrVT8npxUcumfea1555603315.jpg', 7, '2019-04-18 11:01:54', '2019-04-18 11:01:55', NULL),
(9, 10, 3, 3, 'Java Programming', 'short details will be goes here!!!', '<p>PUWPUIWEPUIWETPUIWETUIEWTUI</p>\r\n', 9009, 1, 'active', 'D4sSq1gQEWAeSMsn1555603389.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'aLY03noTqFSpTX3R1555603388.jpg', 6, '2019-04-18 11:03:08', '2019-04-18 11:03:09', NULL),
(10, 11, 3, 3, 'C# Programming ', 'short details will be goes here!!!', '<p>huefwhuhuh</p>\r\n', 9009, 1, 'active', 'qZn83vcW6luzj5Jf1555604706.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'PClwjWhkqdfgofjY1555604705.jpg', 7, '2019-04-18 11:25:05', '2019-04-18 11:25:06', NULL),
(11, 12, 9, 3, 'Cloud Programming', 'short details will be goes here!!!', '<p>wegwegwegwegwegwegwegweg</p>\r\n', 66666, 1, 'active', 'w9aoSUTSJ5rTDaUw1556351795.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'e6cAxgLga1M4BwFz1556351795.jpg', 6, '2019-04-27 02:56:35', '2019-04-27 02:56:35', NULL),
(12, 13, 9, 1, 'Devops AWS', 'short details will be goes here!!!', '<p>wrpjiwwpjietpiwewepiwephiweg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>wpiwewepjiwetpiwetpuiwetpuiwetpuiwet</p>\r\n\r\n<p>&nbsp;</p>\r\n', 30000, 1, 'active', '1aeDNa4EVMwuOOMv1556390568.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'UXtxVfm8I0NTs2JF1556390568.jpg', 6, '2019-04-27 13:42:48', '2019-04-27 13:42:48', NULL),
(13, 14, 9, 2, 'Swift Programming ', 'short details will be goes here!!!', '<p>wpouwepuiwepigwegpiwepguiwegp</p>\r\n', 20000, 1, 'active', '1izhGlNeiIewqfQa1556394669.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'BQrVJwYZORDTVDN81556394669.jpg', 6, '2019-04-27 14:51:08', '2019-04-27 14:51:09', NULL),
(14, 15, NULL, 1, 'Ecat Mathematics', 'Ecat Mathematics', '<p>Ecat Mathematics</p>\r\n\r\n<p>Short Cut to find the determinant of a matrix</p>\r\n', 0, 1, 'active', 'QALkoB1s0HLgeSS41556436954.jpg', 'https://www.youtube.com/embed/-J-rsKMDNrw', 'Snfn5bjajoQNUp5D1556436954.jpg', 9, '2019-04-28 11:35:54', '2019-04-28 11:35:54', NULL),
(15, 16, NULL, 1, 'Ecat Mathematics', 'Ecat Mathematics', '<p>Ecat Mathematics</p>\r\n\r\n<p>Short Cut to find the determinant of a matrix</p>\r\n', 0, 1, 'active', 'WY8NCAGZosfUfUnT1556436983.jpg', 'https://www.youtube.com/embed/-J-rsKMDNrw', 'HJwi2VYYITo4qKSJ1556436983.jpg', 9, '2019-04-28 11:36:23', '2019-04-28 11:36:23', NULL),
(16, 17, NULL, 1, 'Ecat Mathematics', 'Ecat Mathematics', '<p>Ecat Mathematics</p>\r\n\r\n<p>Short Cut to find the determinant of a matrix</p>\r\n', 0, 1, 'active', 'QsStIPaObhL0AU9z1556436999.jpg', 'https://www.youtube.com/embed/-J-rsKMDNrw', 'p2KJiDAwFTWzRxeA1556436999.jpg', 9, '2019-04-28 11:36:39', '2019-04-28 11:36:39', NULL),
(17, 18, NULL, 1, 'Ecat Mathematics', 'Ecat Mathematics', '<p>Ecat Mathematics</p>\r\n\r\n<p>Short Cut to find the determinant of a matrix</p>\r\n', 0, 1, 'active', 'Rb8nZ1NzaGtQONZO1556437109.jpg', 'https://www.youtube.com/embed/-J-rsKMDNrw', 'EWxJz4ATnbSpho5c1556437109.jpg', 9, '2019-04-28 11:38:29', '2019-04-28 11:38:29', NULL),
(18, 19, 5, 1, 'Ecat Mathematics Book I', 'Ecat Mathematics Book I', '<p>ECAT (Mathematics)</p>\r\n\r\n<p>To Buy full course, Sign up</p>\r\n', 5000, 1, 'active', 'SY1MKjYg2HwHXc8t1556437415.jpg', 'https://www.youtube.com/embed/-J-rsKMDNrw', '5BwdVnYEfYpyL3AX1556437415.jpg', 9, '2019-04-28 11:43:35', '2019-05-17 01:16:00', NULL),
(19, 20, 5, 1, 'Sandwitch Theorem 2nd year mathematics', 'Chapter : Limit and continuty', '<p><strong>2nd year Mathematics (Book 2)</strong></p>\r\n\r\n<p>Unit 1</p>\r\n\r\n<p>Sandwitch theorem</p>\r\n\r\n<p>Buy complete Book lectures</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3000, 0, 'inactive', 'ZdzYRPvUEYrQAoAS1556437842.jpg', 'youtube.com', 'k05o5oS8zPzF1tfC1556454504.jpg', 14, '2019-04-28 11:50:41', '2019-05-13 23:21:00', NULL),
(20, 21, 5, 2, 'Lecture 2 Unit 1 Book 1 (ECAT) Mathematics', 'Chapter : Number System', '<p>Ecat Mathematics</p>\r\n\r\n<p>Unit 1</p>\r\n\r\n<p>Lecture 2</p>\r\n', 5000, 0, 'inactive', 'L8meuJv2SC4bmuOW1556438171.jpg', 'https://www.youtube.com/', 'axU37k4PGIb4BxhV1556438171.jpg', 14, '2019-04-28 11:56:11', '2019-05-13 23:21:34', NULL),
(21, 22, NULL, 2, 'amir test1', 'short details will be goes here!!!', '<p>wgwgwegwegweg</p>\r\n', 43434, 1, 'active', 'U7Zn5fernwDV1zUG1556444581.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'bnqVe4kzdQ0SWSDn1556444581.jpg', 5, '2019-04-28 13:43:01', '2019-04-28 13:43:01', NULL),
(22, 23, NULL, 2, 'AWS Cloud Formation Course ', 'short details will be goes here!!!', '<p>;jegjwepgjiegwpiwegpihwegphi</p>\r\n', 5656, 1, 'active', 'm8JSL8KGHcKUOttl1556446368.jpg', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'EqTY9CEFDq5YbpWp1556446368.jpg', 5, '2019-04-28 14:12:48', '2019-04-28 14:12:48', NULL),
(23, 24, NULL, 1, 'Inter part 1 Mathematics', 'Inter Part 1 Mathematics', '<p>To Take complete course Register with this course</p>\r\n', 3000, 1, 'active', '8lFaweMPjV6IaTT81556812555.jpg', 'https://www.youtube.com/embed/Eqs8i0YbuKI', 'SLK73zM6vzatUs8O1556812555.jpg', 8, '2019-05-02 19:55:55', '2019-05-02 19:55:55', NULL),
(24, 25, NULL, 1, 'Ecat Mathematics Book II', 'Ecat Mathematics Book II', '<p><em><strong>To Buy Complete Entry test Video Lectures Signup Now.</strong></em></p>\r\n', 5000, 1, 'active', 'e18Fpaya0n0iFDbx1558041304.jpg', 'https://www.youtube.com/embed/WWTGUR2aj10?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'n9NVOO0oz9nFMSPe1558041304.jpg', 9, '2019-05-17 01:15:04', '2019-05-17 01:21:38', NULL),
(25, 26, NULL, 1, 'English Language Course', 'Grammer', '', 0, 1, 'active', 'Oi565ZZxE3DGYaxe1558867086.jpg', 'https://www.youtube.com/embed/-YraO0KhbFk', 'RuiiJCuhr6FAUx4R1558867086.jpg', 9, '2019-05-26 14:38:06', '2019-05-26 14:38:06', NULL),
(26, 27, NULL, 1, 'computer', 'programing', '', 3000, 1, 'active', 'En0FXBjOJP1Sr1xT1558869058.jpg', 'https://www.youtube.com/embed/odheEzG_dAw', 'LvXyAD2Mvasoapu71558869058.jpg', 8, '2019-05-26 15:10:58', '2019-05-26 15:10:58', NULL),
(27, 28, NULL, 1, 'Mathematics Inter Part 2 (Punjab Text Book)', 'To Buy complete Course Please Register this course', '<p><em><strong>Inter Part 2</strong></em></p>\r\n\r\n<p><em><strong>Mathematics&nbsp;</strong></em></p>\r\n\r\n<p><em><strong>Complete Book video Lectures</strong></em></p>\r\n', 3000, 1, 'active', 'Neh3Yz0RV4r8xymv1559077112.jpg', 'https://www.youtube.com/embed/rlgbzplAX-w?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'WvMBRXy4LSvcy3NN1559077112.jpg', 9, '2019-05-29 00:58:32', '2019-05-29 00:58:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_types`
--

CREATE TABLE `subject_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_types`
--

INSERT INTO `subject_types` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New ', '2019-01-24 06:00:05', '2019-01-24 06:00:05', NULL),
(2, 'Free', '2019-01-24 06:00:14', '2019-01-24 06:00:14', NULL),
(3, 'Top', '2019-01-24 06:00:22', '2019-01-24 06:00:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `url`, `slug`, `title`, `meta_keywords`, `meta_description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Adnan ', 1, 'asdadsadad', 'asdadsada dasdad', 'asdadasdad', 'sdasdadas', 'asdasidy aiduah', 'uploads/images/3vaPyeODzZBpab0e.jpg', '2016-12-26 14:20:39', '2016-12-27 00:15:24', NULL),
(2, 'asuydatsidg', 2, 'aiusdasudkh', 'asidukajhsd', 'askdjashd', 'askjdhaskjdh', 'aksdjhaksjdha', '', '2016-12-26 23:43:46', '2016-12-26 23:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppiers`
--

CREATE TABLE `suppiers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_amount` double NOT NULL,
  `remaining_amount` double NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suppiers`
--

INSERT INTO `suppiers` (`id`, `name`, `email`, `phone`, `total_amount`, `remaining_amount`, `image`, `status`, `address`, `city`, `country`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Amir1', 'amir@mail.com111', '+92 324 84286791111', 300, 0, 'uploads/images/9e8vqePJF4M8TN2y.jpg', 'Active', 'qqqqq222', 'Lahore11', 'Pakistan11', '2018-03-02 07:08:22', '2018-03-16 09:21:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `fathername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualificatioon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_to_teach_id` int(11) NOT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teacher_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_plan_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `type`, `fathername`, `contact1`, `contact2`, `email`, `qualificatioon`, `course_to_teach_id`, `experience`, `username`, `password`, `password2`, `teacher_code`, `country`, `city`, `profile_pic`, `cnic`, `payment_plan_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Mian Amir', 0, 'Muhammad Arif', '+92 324 8428679', '+92 305 4523768', 'amir@goey.co', 'BSCS', 1, '6 years ', 'savvy', '$2y$10$HOXwrOMLc1ysOSThjQurzeYBVj7SVo7r4B8h2IOi5z.4tZfJT3hqi', '123456', '8', 'Punjab Pakistan', 'Lahori', 'uNzSvdG6jbISfDcy1550907208.jpg', '2352352352352', 2, 'active', '2019-02-20 04:51:10', '2019-02-26 07:57:03', NULL),
(22, 'test', 1, 'testing', '4253235235', '23232335', 'test@mail1.com', 'BSCS', 3, '5', 'test3232', '$2y$10$cf9ygKPM73FElKpVZhk8geMb1PcTo8.MU5Sr4VxEKalEkp5AK63ze', '123456', '23', 'Pakistan', 'Lahore', 'Bf4V7Sx1OJHeriKw1554213707.jpg', '2323234234', 1, 'active', '2019-04-02 09:01:46', '2019-05-28 23:44:08', '2019-05-28 23:44:08'),
(23, 'new ', 1, 'new1', '2389123', '87327923', 'new@goey.co', 'wwtk', 9, '5', 'new343', '$2y$10$Fm3u8nvLoJYs81ksSYFyA.o0pG1YRj1VAp4KoG8Vel1ofTD04LuOO', '123456', '24', 'Pakistan', 'Lahore', 'e4T71aS5Y4Ei7rCz1554216200.jpg', '251341241', 2, 'active', '2019-04-02 09:43:19', '2019-05-29 00:22:17', '2019-05-29 00:22:17'),
(24, 'uuu', 1, 'wwewe', '46343', '53522', 'list@m.com', 'trut', 3, '6', 'jjj12345', '$2y$10$cHLkfYVtnRsXf.nFdX7L8eKJuIFL2V1QfE95dHvGYxezt8K0wYc5e', '123456', '25', 'Pakistan', 'Lahore', 'NWdS2dMNqLYPu2E21554216363.jpg', '68568556', 2, 'active', '2019-04-02 09:45:15', '2019-04-02 09:46:03', NULL),
(25, 'Web', 1, 'web2', '4263623', '34734773', 'web2@goey.co', 'BSCS', 3, '7', 'website', '$2y$10$iZsZ4Yt8B5o8bsBxo0kyWen6vQ7DwTriNfkXSizXAOryqeYyd.6BK', '123456', '26', 'Pakistan', 'Lahore', 'KrpgaLMls9E9sVzo1555150983.jpg', '56734723473', 2, 'active', '2019-04-13 05:23:03', '2019-04-13 05:24:53', NULL),
(26, 'beta1', 1, 'beta1_f', '252333423', '2523523234234', 'beta1@goey.co', 'BSCS', 3, '5', 'beta1', '$2y$10$EXpFwZ6z4hP7.nm2NUlmQ.h0dNm9rg7KjIcC33i33s3Pl6AmlhPhu', '123456', '26', 'Pakistan', 'Lahore', 'qsXCsKrSfSNnW3iA1555609136.jpg', '65674545645445', 2, 'active', '2019-04-18 12:38:31', '2019-05-26 14:25:59', '2019-05-26 14:25:59'),
(27, 'Khurram', 1, 'Arshad', '03359354246', '03209468451', 'Khurram.arshad345@gmail.com', 'Msc', 1, '15 years', 'Khurramg', '$2y$10$bPUDqPAF4hOlSL3FTNq5leCfN3iBKFc4go08IgGgG/e.bs.VLHMVy', 'khurram123', '27', 'Pakistan', 'lahore', 'tnsisLMkVfQTRo7O1556396731.jpg', '3520227678987', 2, 'active', '2019-04-28 00:24:44', '2019-04-28 11:14:23', '2019-04-28 11:14:23'),
(28, 'Rabia', 1, 'Ansar', '03209468451', '03434685551', 'rabiakhurram320@gmail.cim', 'Msc mathematics', 1, '6years', 'Rabi', '$2y$10$.Rcl0dD3paWYdJLeqD133evGIJw9csil2JzsKNHruv2etm2q6w.US', 'amayaasra', '28', 'Pakistan', 'Lahore', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-04-28 10:20:18', '2019-04-28 11:14:18', '2019-04-28 11:14:18'),
(29, 'Rabia', 1, 'Ansar', '03209468451', '03434685551', 'rabiakhurram320@gmail.cim', 'Msc mathematics', 1, '6years', 'Rabi', '$2y$10$m0TuM6Y3m6xnbdcMZhymIe4x5Q11W1T7gkEAZo839c.jmdzr5MEv.', 'amayaasra', '29', 'Pakistan', 'Lahore', 'aDtQ7Jq0vNx880a51556432587.jpg', '3520261320126', 1, 'inactive', '2019-04-28 10:20:19', '2019-04-28 11:14:13', '2019-04-28 11:14:13'),
(30, 'Prof. Khurram', 1, 'Arshad', '03359354246', '03331458883', 'Khurram.arshad345@gmail.com', 'Msc', 5, '15 years', 'KhurramG', '$2y$10$A0Ti2PKSaJF8TBY6rrhRMel.ErpjzaYAKKZyDgUOed/vXUn9hhJ8W', 'khurram123', '27', 'Pakistan', 'Lahore', 'mAwxSlAfyzbPoVmy1556436101.jpg', '3520227678987', 2, 'active', '2019-04-28 11:21:15', '2019-04-28 11:31:01', NULL),
(31, 'Muhammad Rizwan Bashir ', 1, 'Bashir Ahmad ', '03013124058', '03314946588', 'mrb78694@gmail.com', 'M.Phil Mathematics ', 1, '9 years', 'M. Rizwan', '$2y$10$cvcUbgGf2O7hju2AnCnpJez3wUPNltDjk22s98OPmEBxE5.FEDR.O', '78662880461', '31', 'Pakistan ', 'Lahote', 'nqgg6d9iWIST2IA31556635362.jpeg', '35202-6288046-1', 1, 'active', '2019-04-30 18:41:29', '2019-05-02 19:38:37', NULL),
(32, 'Khurram Arshad', 1, 'Arshad', '03054370070', '03331458883', 'Khurram.arshad345@gmail.com', 'Msc', 1, '15 years', 'prof.khurram', '$2y$10$piTf90k9rGSR4D9i32yhCeJh60I00.RxzvTKYv5Y09ECt8ZEdQPH6', 'khurram123', '32', 'Pakistan', 'Lahore', 'JbXqFAvcLtIl6WOe1556811296.jpg', '3520227678987', 4, 'active', '2019-05-02 19:33:26', '2019-05-02 19:36:54', NULL),
(33, 'Azan Mehdi', 1, 'Muhammad Mehdi', '03094399537', '03344459799', 'azanmehdi03@gmail.com', 'MSc', 1, '1 year', '03094399537', '$2y$10$05dCHXDksF6ogFFgWHNxH.hT1wE4DQK0FwKWU1vlgqc0Lb9KZykcu', '1234azan', '33', 'Pakistan', 'Lahore', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-05-02 21:16:21', '2019-05-26 14:26:14', '2019-05-26 14:26:14'),
(34, 'Asad', 1, 'Sanaullah', '03134319584', '03424361960', 'aj287215@gmail.com', 'Inter part 1 fsc per engineering ', 12, 'No experience ', '03424361960', '$2y$10$I9es4n8axWb/vvDJKx2V7eUFHjFm9VzmNJTRTOLaEjZqPTYxvVWO.', 'asad0987', '34', 'Pakistan', 'Lahore', 'pZolFm4cNOwGEj6F1557941488.jpg', '35202-7295001-7', 1, 'active', '2019-05-15 21:30:13', '2019-05-26 14:25:16', NULL),
(35, 'Muzammal Hussain Gureja', 1, 'Safdar Ali Gureja', '0035796517673', '00923320900542', 'muzammalgureja0001@gmail.com', 'M.Sc Physics', 1, '5 years', 'muzammalsafdar', '$2y$10$xTPFZCS2eqi6fsen.0Ppwuvqd1vSD6e5pj17ZVXzZhynSUTovG/eS', 'Muhammadsaw786', '35', 'Cyprus', 'nicosia', 'YOc9MuXwLOPzxy3m1558559795.jpg', '3310442888671', 2, 'inactive', '2019-05-23 01:14:29', '2019-05-26 14:26:30', '2019-05-26 14:26:30'),
(36, 'Muzammal Hussain Gureja', 1, 'Safdar Ali Gureja', '0035796517673', '00923320900542', 'muzammalsafdar@gmail.com', 'M.Sc Physics', 1, '5 years', 'muzammalsafdar1', '$2y$10$lP0Uiael.KfQLI/G5heofe1zJTB.qiAvcmUQ0EVBySin64JFtolfC', 'Muhammadsaw786', '36', 'Pakistan', 'Jaranwala ', 'QAe31IyMbvAHjNRm1558567714.jpg', '3310442888671', 1, 'inactive', '2019-05-23 03:28:01', '2019-05-23 03:28:34', NULL),
(37, 'ali', 1, 'imran', '0234567', '03455', 'alig@gmail.com', 'Msc', 4, '15 years', 'ali123', '$2y$10$lAzUlLUjlYYR8wUqcyPmF.9wFYaYfzKaKkifl/asaNlYTSbTFJfpG', '123456', '37', 'Pakistan', 'islamabad', '5OB4XVJHgyFX9bGU1558853724.jpg', '35202056778899', 1, 'inactive', '2019-05-26 10:54:21', '2019-05-26 14:25:42', '2019-05-26 14:25:42'),
(38, 'imran', 1, 'ali', '033313456', '03334567', 'imran@gmail.com', 'BA', 4, '5year', 'imran123', '$2y$10$pv.1is7FYLZbF6O8MvwbHe7ZCozXH3w2iGv9..ONbEHw53IRRhI36', '123456', '38', 'Pakistan', 'abcx', 'auUsMOh6HqLEFAxk1558854421.jpg', '35202123334455', 1, 'inactive', '2019-05-26 11:06:00', '2019-05-26 14:25:30', '2019-05-26 14:25:30'),
(39, 'Arslan ', 1, 'Muhammad Ashiq', '03097759173', '03076123155', 'arslanmalik993@gmail.com', 'B.com', 1, '5 years', 'Arslanali', '$2y$10$eUdod85UsDuYrz0rG6M.FOMJAKOCIteVumSeSsVe.Jdr9HmaqQL5i', 'arslan', '39', 'Pakistan ', 'Lahore', 'jKf3vazU70WkxLzc1558863695.jpg', '35202-3816321-7', 1, 'active', '2019-05-26 13:35:07', '2019-05-26 14:19:39', NULL),
(40, 'Prof. Rabia', 1, 'Ansar', '03209468451', '03209468451', 'rabia.vs345@gmail.com', 'Msc', 1, '10 years', 'Prof.Rabia', '$2y$10$/sdPFOOuyIhjUiENJ08r3OrMBtEhhrqdg2ZnjCKWvgIi/qfPj1RQ6', 'rabia123456', '40', 'Pakistan', 'Lahore', 'Vr5THQXAPeouG2s01558865875.jpg', '12345678', 1, 'active', '2019-05-26 14:17:21', '2019-05-26 14:24:16', NULL),
(41, 'Syeda Noor Fatima', 1, 'Syed Sajid Hussain', '03044783067', '03044783067', 'Syedanoorfatime@gmail.com', 'Doctor of diet and nutrition science', 13, '1 year ', 'syedanoorfatime444@gmail.com', '$2y$10$hbPqSuS33FPtpCBI.Fo5vO8XhsNnTsf3tUxsIux2srFFkesSaVXZe', 'abidasultan', '41', 'Pakistan', 'Lahore', 'vyw4Iu7K9M68kxrf1558867137.docx', '3530214027730', 1, 'active', '2019-05-26 14:31:45', '2019-05-26 15:26:38', NULL),
(42, 'Javaid Iqbal', 1, 'Nazar Hussain', '03485321483', '03369866504', 'javaidkhan434@gmail.com', 'BS Software Engineering', 4, ' 3 years', 'javaid3357', '$2y$10$U8Mo6sOswV2CKJouzoclvOb6ljy7iHxv4Y05or3FajuLhNk5LZuxK', 'mang5522', '42', 'Pakistan', 'Rawalpindi', 'zf9GZAWtpp1kLGdX1558904781.jpg', '82401-7314617-5', 1, 'active', '2019-05-27 01:05:00', '2019-05-27 02:29:15', NULL),
(43, 'Muhammad Safdar', 1, 'Muhammad Niaz', '03064577590', '03346266466', 'hannansafdar77@gmail.com', 'MA', 2, '18 years', 'Muhammad Safdar', '$2y$10$uL8iDoWieFq9eO7joAofju0u2LLrurM6TnJZFwno1/8Dff4LkGtPK', '221977466', '43', 'Pakistan', 'Lahore', 'image_200_200.png', '0000-000000-0000', 1, 'active', '2019-05-27 07:34:02', '2019-05-29 01:22:10', NULL),
(44, 'MUHAMMAD SHOUBAN', 1, 'MUHAMMAD ASLAM', '03052035989', '03447701148', 'shabanbhatti596@gmail.com', 'BS (HONORS) PHYSICS', 12, '2 YEARS', 'SHOUBAN', '$2y$10$NatZqww2PuUvV17blGsZa.nGmZMcPm96f3UgzGhbbYKqKh.JsvGU2', '336633ABC', '44', 'PAKISTAN', 'FAISALABAD', 'oRzXwMGuroIBWH831558929644.jpg', '3720341835631', 1, 'active', '2019-05-27 07:54:27', '2019-05-29 01:17:05', NULL),
(45, 'Usman', 1, 'Khalid', '03026460450', '03026460450', 'bscs00002@gmail.com', 'Bscs', 4, '1 years', 'Osman-khalid', '$2y$10$GVdVncteH7n8s/suTk4HDOmZREUbYa2lQiewSREJ9T4dF9JH8ix4C', 'punjab890', '45', 'Pakistan ', 'Gujranwala', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-05-27 09:10:22', '2019-05-27 09:10:22', NULL),
(46, 'Hafiz Ghufran', 1, 'Altaf Hussain', '03078202009', '03348202009', 'malikyt09@gmail.com', 'BS Software Engineering', 1, '5 Years', 'tlplover92', '$2y$10$RzkEeegqiXb682OlbqbMBuZznbugpQ7iE545llLuhiNizUrrydEHa', 'Oppo1991..', '46', 'Pakistan', 'Bahawalpur', 'dTPkMUUIV1wvw2e01558948959.jpg', '3120258684329', 1, 'active', '2019-05-27 13:21:04', '2019-05-28 23:55:02', NULL),
(47, 'Muqaddas muazzam', 1, 'Muhammad muazzam arif Malik', '0334-5106898 ', '0334-5106898      ', 'muqaddasmuazzam@yahoo.com', 'Bs mathematics', 1, 'None', 'Muqaddas', '$2y$10$6NXjolkbudk915qEQTdp6uhCOh3V.tpOz8VNyJrTeGNJIRZ6F5TmG', '03013008429', '47', 'Pakistan', 'Attock', 'image_200_200.png', '0000-000000-0000', 1, 'active', '2019-05-28 02:47:34', '2019-05-28 23:48:31', NULL),
(48, 'Muhammad Khurram', 1, 'Arshad', '03359354246', '03359354246', 'khurram.arshad345@gmail.com', 'Msc.', 1, '15 years', 'khurram345', '$2y$10$i/urWS8CB/aZ4DoAOF77OONbf1coYQYgacvpIqOn9688CdHwYgbma', 'khurram123', '48', 'pakistan', 'Lahore', 'pc23JLWZnX6IMvnB1559075854.jpg', '3520227678987', 1, 'active', '2019-05-29 00:33:33', '2019-05-29 00:40:14', NULL),
(49, 'Muhammad Atif ', 1, 'Muhammad Ashraf ', '+92 300 0633166 ', '+92 314 3581655 ', 'red_eagle47@yahoo.com', 'DVM ', 13, '4', 'Dr. Atif', '$2y$10$j.X/e/f0I7TfyCxushyG5eKmDMoCO1eHKlolb5soQMeHHDCSYxQ3e', '0987654321', '49', 'Pakistan ', 'Kamalia', 'GIEFRNgUDISH3Yd31559115958.jpg', '33302-4315404-3 ', 1, 'active', '2019-05-29 11:45:07', '2019-06-01 13:42:39', NULL),
(50, 'Hafiz Amir Ali', 1, 'Hafiz Hakim Ali', '03064548588', '03111488422', 'hafizamira588@gmail.com', 'Dars e nizam complete. B.A', 16, '5 years', 'hafizamir', '$2y$10$Txwktp8KWrNsk9pK0hjoYubhNin1bYM4xHkD45viPxRbIMghIqP1u', '123asdf', '50', 'Pakistan', 'Lahore', '50uX5OxZ1aLs0weE1559158500.jpg', '3520282413413', 1, 'active', '2019-05-29 23:34:08', '2019-06-01 13:48:50', NULL),
(51, 'Muhammad Ziaullah', 1, 'Muhammad Tariq', '03348667755', '0412696346', 'ziaullahtariq2@gmail.com', 'BSCS', 4, '3 years teaching assistant at FAST University', 'zia', '$2y$10$J0vB4OzkmkMFKmL/jC9zVeGiSgvjjDgA8ZXW.Y8BbuUtX.mFQoox2', '12345678', '51', 'Pakistan', 'Faisalabad', 'RdmwxNmKBuFDHA0W1559159983.jpg', '33102-8165841-1', 1, 'active', '2019-05-29 23:56:39', '2019-06-01 13:55:43', NULL),
(52, 'Muhammad Ziaullah', 1, 'Muhammad Tariq', '03348667755', '0412696346', 'ziaullahtariq2@gmail.com', 'BSCS', 3, '3 years teaching experience at FAST University', 'zia', '$2y$10$h8IkWsfsglDzuIB04cTZSOCImWlh1Q0z4JgX9Jt84X8PWijOqVBxm', 'ziabhai1122', '52', 'Pakistan', 'Faisalabad', 'Tb0ckHDPmipLfOaK1559182254.jpg', '33102-8165841-1', 1, 'inactive', '2019-05-30 06:09:56', '2019-05-30 06:10:54', NULL),
(53, 'Umer Majeed', 1, 'Abdul Majeed', '03047552011', '03475207816', 'umermajeed685@gmail.com', 'Ms electrical engineering', 1, '10 year', 'Majeed', '$2y$10$R6U1H1tI8g0Dpl6n9JZsT.wU9NAZAvVT.PYyu9P4xmFI7WqR25OP6', '030475', '53', 'Pakistan', 'Islamabad', 'kOizYuqZOkiNr2rm1560032314.jpg', '3420198739685', 1, 'active', '2019-06-09 02:15:43', '2019-06-11 07:35:28', NULL),
(54, 'Syed Aitzaz-ul-Hasan Gillani', 1, 'Syed Sarfraz Shah Gillani', '03084343467', '03006630900', 'atzazsyed@gmail.com', 'BS(Mathematics)', 1, '6 years', 'Syed Aitzaz Gillani', '$2y$10$nzzYJDZLjA/nasL6qrjZpu5WKWLB39wOvPInzUE..UqWLa42rFkwC', 'gillanig123', '54', 'Pakistan', 'Chunian', 'v5m6Q6K4oZOdORtu1560774129.JPG', '3510140170001', 1, 'active', '2019-06-17 16:16:58', '2019-06-21 23:38:39', NULL),
(55, 'Kashif Ali', 1, 'Ameer Ali', '03083025483', '03422656730', 'kashifalik544@gmail.com', '12', 5, 'Nill', '03422656730', '$2y$10$.t/Cmai1gjOes5wWMczo.uit9KVTC.hppwyK0Ay2T66rx34qYQvQ2', 'kashif123', '55', 'Pakistan', 'Tando bago', 'MfsV0PKlkuPc61oe1564827550.jpg', '4110446476947', 1, 'inactive', '2019-08-03 14:14:19', '2019-08-03 14:19:10', NULL),
(56, 'Lawal', 1, 'Jimoh', '35, Stadium Shopping Complex,  Durbar,  Oyo', 'No.  1, A to b a min Bakery Street,  Yidi Agunpopo Area,  Oyo', 'mawal4joy@gmail.com', 'B. Technology ', 1, 'I have up to 10 years experience in Teaching Mathematics. I love to teach Mathematics especially to the students that find it difficult to understand ', 'mawal4joy', '$2y$10$o6nLhpkLHGNh/mTBBVKY9OfeaUw/d6rOkM8hMUCJb05pecdl37fZa', 'Lawal1987@#', '56', 'Nigeria', 'Oyo', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-10-03 22:40:11', '2019-10-03 22:40:11', NULL),
(57, 'Muhammad Hamza', 1, 'Muhammad Saleem', '03332603411', '03153740912', 'hamzakhan.hk216@gmail.com', 'bachelor', 1, '2 years', 'hamza1998', '$2y$10$m/LDSzTIBtHeW.W7r4y3suOcATQjjAKq0RP.zVg6e47u5v7oOadiu', 'HAM223344HAM', '57', 'Pakistan', 'hyderabad', 'FLTE8fGNGSLyIbG91571262549.jpg', '4130218167671', 2, 'inactive', '2019-10-17 01:47:39', '2019-10-17 01:49:09', NULL),
(58, 'MUNAWAR FATIMA ', 1, 'MUHAMMAD ASHRAF ', '03038526149', '03185108988', 'amuneeb818@gmail.com', 'MSC physics (currently in Mphil) ', 12, 'Currently teaching in private school ', 'MU234', '$2y$10$5Y8yBhMxWDBv1k3JOykISuWloG9bi3KsPBZIZ2YzuntFJ9aQM0WLe', '738299mm', '58', 'Pakistan ', 'Pind dadan khan ', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-12-03 21:18:27', '2019-12-03 21:18:27', NULL),
(59, 'MUNAWAR FATIMA ', 1, 'MUHAMMAD ASHRAF ', '03038526149', '03185108988', 'amuneeb818@gmail.com', 'MSC physics (currently in Mphil) ', 12, 'Currently teaching in private school ', 'MU234', '$2y$10$q/v7VSVvXj3ksEjFgw7/9OqoMWqhxSflLJ7gUI0Uw8rQg9YSIduBC', '738299mm', '59', 'Pakistan ', 'Pind dadan khan ', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-12-03 21:18:28', '2019-12-03 21:18:28', NULL),
(60, 'Asad Nawaz Bhatti', 1, 'M.Nawaz Bhatti', '03314886400', '03314886400', 'asadn327@gmail.com', 'BSCS', 3, '1 year ', 'Asad12', '$2y$10$PslP0LFb6yrTXj7ZFO6HGOpZ23qciT3DRIZkQMBMhcaJAkGnqwYLO', '1122Asad', '60', 'Pakistan', 'Sialkot', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2019-12-10 18:04:31', '2019-12-10 18:04:31', NULL),
(61, 'javed iqbal', 1, 'zafar iqbal', '03006272765', '03404340765', 'javediqbal95@yahoo.com', ' M.sc maths  B.ed', 1, '20years', 'javediqbal95 ', '$2y$10$Twz/3nKd1ECaT/vLzeCK6OlOG52Vd59KBJfnUzkMHLxVDwFl9B06.', 'U4KD2XM8', '61', 'Pakistan ', 'kharian', '3wJCcEEFvVlSxVkr1584970118.jpg', '3420212683217', 2, 'inactive', '2020-03-23 17:17:19', '2020-03-23 17:28:38', NULL),
(62, 'Muhammad Seyab', 1, 'Abdussalam', '03441537820', '03068558353', 'seyabsalam@gmail.com', 'Msc(Mathematics)', 1, '3 years online teaching Experience', 'seyab820', '$2y$10$j9E7Hkjoxz3pKrbKly7j1O/2L.2OCfgNJn2oPvk9ooyu8HNXj0SoW', 'pakistan14', '62', 'Pakistan', 'Bhimber ', '0eLsHORUqZNkMyBF1585655468.jpg', '81102-0395778-3', 2, 'inactive', '2020-03-31 15:50:00', '2020-03-31 15:51:08', NULL),
(63, 'Awais', 1, 'Shakil ahmed', '03142683233', '03016406771', 'bajwaahmedsaad345@gmail.com', 'bachelor', 3, '2', 'Awais', '$2y$10$QyYwU5Y74mGBRn8OLr0dtuoHqT4xcE4O.PlPygJCr.nQQR50/a5mm', 'qazx1234', '63', 'pakistan', 'Gujanwala', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-03-31 20:50:31', '2020-03-31 20:50:31', NULL),
(64, 'Syed Moazzam Ali shah', 1, 'Syed Riaz Ali Shah', '03036302000', '03336302000', 'pass.adam2@gmail.com', 'masters in pol.science, history, philosophy, education,& LLB', 1, '29 years', 'Adam Sultan', '$2y$10$l.3mGJBwBEu3MSvBeTZbZOJeT3XFRbQ1QI4zeEt9IAdUPSO1wkVzu', 'pass2000', '64', 'Pakistan', 'Sheikhupura', 'mi7IDhhhvpsJXWIs1586562978.jpeg', '3540407862237', 1, 'inactive', '2020-04-11 03:52:00', '2020-04-11 03:56:18', NULL),
(65, 'Abdul Majid Sharif', 1, 'Mohammad Sharif', '00966531551546', '0', 'amnetlogin@gmail.com', 'Commerce Graduate', 16, 'Life time', 'Amnetlogin', '$2y$10$l8iTFwJjo96b6uS7IoZj6OvTDS27RWu5wmRJ3eTQVqt9bqXP3qQzm', 'mram79', '65', 'SAUDI ARABIA ', 'Riyadh', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-04-23 03:43:43', '2020-04-23 03:43:43', NULL),
(66, 'Ali Raza', 1, 'Muzammal Hussain', '03094110437', '03044700866', 'alirazaqurshi0909@gmail.com', 'B.com', 1, '1year', 'Ali', '$2y$10$MiV3SEuFCCJTbAdc2dm1pOdLQEi3PrlyJNd1iwHTVkujuljz.o8pa', '03094110437', '66', 'Pakistan', 'Lahore', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-05-11 20:30:09', '2020-05-11 20:30:09', NULL),
(67, 'REHMAN', 1, 'MANZOOR', '03204639162', '03164338096', 'abdur.rehmanmanzoor@yahoo.com', 'B.SC,PHARM-D', 13, '10YEARS', 'abdur.rehmanmanzoor', '$2y$10$fkli7x20HrN68YBHw7dE1.tgqhln4ddxQt21wev8RIiZ/fNcMFuqC', 'desiman123', '67', 'PAKISTAN', 'LAHORE', 'rnWi65X33q9z9rFW1589265197.jpg', '3520299939677', 1, 'inactive', '2020-05-12 10:31:34', '2020-05-12 10:33:17', NULL),
(68, 'Muhammad YASIR', 1, 'Noorul Amin', '03212523410', '03072274802', 'myarafat_27@outlook.com', 'M. S', 12, '10 years ', 'myarafat ', '$2y$10$sQjFLULaR3AmmkOQUzPbievAnOCyRvNudBY/N9pn4ihL8kUPlezZq', 'IU19372012', '68', 'Pakistan ', 'Karachi ', 'Z0QcBv7oT0SK8lIC1591028518.jpg', '4230122532817', 1, 'inactive', '2020-06-01 20:20:50', '2020-06-01 20:21:58', NULL),
(69, 'Qaisar Maan ', 1, 'Muhammad Younas ', '03214059054', '03044506820', 'bakhtawar04@yahoo.com', 'MA,  LLB', 2, '18 years', 'Qaisar  Maan', '$2y$10$WuiZcjvG4Xlg0M3ERBB4SexErIh2XFmwgJXVSZpoA1iRWo0UjjDVC', 'abc123', '69', 'Pakistan ', 'Lahore ', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-06-10 21:05:53', '2020-06-10 21:05:53', NULL),
(70, 'Syeda Nusrat Fatima', 1, 'Syed Hashim Raza Shamsi', '03099670525', '03098970801', 'learneducation86@gmail.com', 'Msc Chemistry', 6, '4 years teaching experience', 'Nusrat12345', '$2y$10$/abxTYTtFvKYR.f3ZsV8gOHZPNGzO35spw5cWxMl/a8NsBNOj7Apu', 'nusratshabbar12345', '70', 'Pakistan', 'Lahore', 'htatfURRKnvsYtHP1592933819.jpg', '35202-3321505-2', 1, 'inactive', '2020-06-23 21:30:40', '2020-06-23 21:37:00', NULL),
(71, 'DANISH MEHMOOD', 1, 'AMIN ULLAH JAN', '0313995975', '03325386884', 'Danishmehmood1993@gmail.com', 'MSc', 1, '3 years', 'DANISH MEHMOOD', '$2y$10$M/c6OPkxw9ukVH1Swe0L8.H9g3SUHF1dZJpCO7FuFRT/bXw6hRWO6', 'danish1993', '71', 'PAKISTAN', 'PESHAWAR', 'A4irIZxfx29jFRkr1595092755.jpg', '1420178262037', 2, 'inactive', '2020-07-18 21:18:00', '2020-07-18 21:19:15', NULL),
(72, 'Zahoor Ahmad', 1, 'Mian Mohammed', '03339463633', '03473416033', 'zahoorahmad3016@gmail.com', 'MA, Med', 1, 'From 3.12.1990', 'Zahoor Ahmad', '$2y$10$W4vFwUgEwmAzxOuGA5IaEe3/kaXavm8ZlOe1rZBM.2IjEf17RkfYi', '1965', '72', 'PAKISTAN', 'Mingora', 'fDCerAveZQsnUBBQ1597744788.jpg', '1560202766191', 1, 'inactive', '2020-08-18 13:54:27', '2020-08-18 13:59:48', NULL),
(73, 'Zahoor Ahmad', 1, 'Mian Mohammed', '03339463633', '03473416033', 'zahoorahmad3016@gmail.com', 'MA, Med', 1, 'From 3.12.1990', 'Zahoor Ahmad', '$2y$10$1dwiW3mgVrjgnHbSDANjBuWvE00Ki.PZbqhl9GHaizvJEtoh4ZCxS', '1965', '73', 'PAKISTAN', 'Mingora', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-08-18 14:00:25', '2020-08-18 14:00:25', NULL),
(74, 'Shahid Ullah ', 1, 'Ahmad Shah', '+923357272317', '+923315160903', 'engrshahid@gmail.com', 'BE-Electrical Engineering', 12, '10 years', 'Dado', '$2y$10$PJTOD6P8wq4RONJjyxHLselMISVdgNj2T8.jmhCWZrb33CetmRdwW', '13mera77', '74', 'Pakistan', 'peshawar', 'X74nu4EDTiDTPXsf1600511190.jpg', '2120294398629', 2, 'inactive', '2020-09-19 14:24:46', '2020-09-19 14:26:30', NULL),
(75, 'awaistalha ', 1, 'Creative Knowlege TV', '03326255314', 'awaistalha945@gmail.com', 'awaistalha945@gmail.com', 'computer', 4, 'computer', '03326255314', '$2y$10$ZfIExIBGotkSFGIU5jfGK.kBwMH2yuYON9udbREHHVcoqtwe50Gly', 'Awaistalha786', '75', 'pakistan', 'pirmahal', 'image_200_200.png', '0000-000000-0000', NULL, 'inactive', '2020-10-15 16:43:48', '2020-10-15 16:43:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`id`, `teacher_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 25, 8, '2019-04-18 11:01:55', '2019-04-18 11:01:55', NULL),
(9, 25, 9, '2019-04-18 11:03:09', '2019-04-18 11:03:09', NULL),
(10, 25, 10, '2019-04-18 11:25:06', '2019-04-18 11:25:06', NULL),
(11, 23, 11, '2019-04-27 02:56:35', '2019-04-27 02:56:35', NULL),
(12, 23, 12, '2019-04-27 13:42:48', '2019-04-27 13:42:48', NULL),
(13, 23, 13, '2019-04-27 14:51:09', '2019-04-27 14:51:09', NULL),
(14, 30, 18, '2019-04-28 11:43:35', '2019-04-28 11:43:35', NULL),
(15, 30, 19, '2019-04-28 11:50:42', '2019-04-28 11:50:42', NULL),
(16, 30, 20, '2019-04-28 11:56:11', '2019-04-28 11:56:11', NULL),
(17, 25, 22, '2019-04-28 14:12:48', '2019-04-28 14:12:48', NULL),
(18, 32, 23, '2019-05-02 19:55:55', '2019-05-02 19:55:55', NULL),
(19, 30, 24, '2019-05-17 01:15:04', '2019-05-17 01:15:04', NULL),
(20, 40, 25, '2019-05-26 14:38:06', '2019-05-26 14:38:06', NULL),
(21, 40, 26, '2019-05-26 15:10:58', '2019-05-26 15:10:58', NULL),
(22, 48, 27, '2019-05-29 00:58:32', '2019-05-29 00:58:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_students`
--

CREATE TABLE `teacher_students` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_students`
--

INSERT INTO `teacher_students` (`id`, `teacher_id`, `student_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 25, 14, '2019-04-18 08:29:34', '2019-04-18 08:29:34', NULL),
(4, 25, 15, '2019-04-18 10:16:04', '2019-04-18 10:16:04', NULL),
(5, 25, 17, '2019-04-23 01:01:06', '2019-04-23 01:01:06', NULL),
(6, 23, 19, '2019-04-27 04:50:35', '2019-04-27 04:50:35', NULL),
(7, 25, 19, '2019-04-27 13:38:09', '2019-04-27 13:38:09', NULL),
(8, 23, 19, '2019-04-27 14:49:03', '2019-04-27 14:49:03', NULL),
(9, 23, 19, '2019-04-27 14:51:59', '2019-04-27 14:51:59', NULL),
(10, 27, 20, '2019-04-28 10:22:29', '2019-04-28 10:22:29', NULL),
(11, 30, 21, '2019-04-28 12:00:07', '2019-04-28 12:00:07', NULL),
(12, 30, 21, '2019-04-28 12:04:19', '2019-04-28 12:04:19', NULL),
(13, 30, 22, '2019-04-28 15:56:25', '2019-04-28 15:56:25', NULL),
(14, 30, 22, '2019-04-28 16:29:35', '2019-04-28 16:29:35', NULL),
(15, 25, 23, '2019-04-28 22:25:33', '2019-04-28 22:25:33', NULL),
(16, 30, 24, '2019-04-30 00:40:12', '2019-04-30 00:40:12', NULL),
(17, 30, 25, '2019-04-30 00:46:33', '2019-04-30 00:46:33', NULL),
(18, 30, 26, '2019-05-02 00:28:34', '2019-05-02 00:28:34', NULL),
(19, 30, 26, '2019-05-02 00:30:50', '2019-05-02 00:30:50', NULL),
(20, 32, 36, '2019-05-02 21:09:57', '2019-05-02 21:09:57', NULL),
(21, 32, 39, '2019-05-03 23:43:57', '2019-05-03 23:43:57', NULL),
(22, 32, 42, '2019-05-03 23:49:47', '2019-05-03 23:49:47', NULL),
(23, 32, 43, '2019-05-04 07:56:06', '2019-05-04 07:56:06', NULL),
(24, 32, 44, '2019-05-04 11:09:22', '2019-05-04 11:09:22', NULL),
(25, 32, 45, '2019-05-05 19:09:15', '2019-05-05 19:09:15', NULL),
(26, 32, 37, '2019-05-06 23:05:53', '2019-05-06 23:05:53', NULL),
(27, 32, 40, '2019-05-06 23:10:29', '2019-05-06 23:10:29', NULL),
(28, 32, 46, '2019-05-07 00:35:04', '2019-05-07 00:35:04', NULL),
(29, 30, 47, '2019-05-08 04:14:12', '2019-05-08 04:14:12', NULL),
(30, 30, 48, '2019-05-08 04:19:56', '2019-05-08 04:19:56', NULL),
(31, 32, 49, '2019-05-08 11:41:12', '2019-05-08 11:41:12', NULL),
(32, 30, 50, '2019-05-13 23:54:23', '2019-05-13 23:54:23', NULL),
(33, 30, 51, '2019-05-13 23:55:19', '2019-05-13 23:55:19', NULL),
(34, 32, 53, '2019-05-15 11:21:01', '2019-05-15 11:21:01', NULL),
(35, 30, 54, '2019-05-15 12:41:55', '2019-05-15 12:41:55', NULL),
(36, 32, 55, '2019-05-15 17:33:16', '2019-05-15 17:33:16', NULL),
(37, 30, 56, '2019-05-15 20:21:13', '2019-05-15 20:21:13', NULL),
(38, 30, 56, '2019-05-15 20:31:47', '2019-05-15 20:31:47', NULL),
(39, 32, 52, '2019-05-15 21:10:55', '2019-05-15 21:10:55', NULL),
(40, 30, 59, '2019-05-15 23:11:04', '2019-05-15 23:11:04', NULL),
(41, 30, 60, '2019-05-15 23:13:07', '2019-05-15 23:13:07', NULL),
(42, 32, 61, '2019-05-15 23:15:32', '2019-05-15 23:15:32', NULL),
(43, 30, 56, '2019-05-17 01:20:28', '2019-05-17 01:20:28', NULL),
(44, 32, 64, '2019-05-26 12:41:33', '2019-05-26 12:41:33', NULL),
(45, 32, 65, '2019-05-29 06:52:39', '2019-05-29 06:52:39', NULL),
(46, 32, 66, '2019-05-29 07:06:57', '2019-05-29 07:06:57', NULL),
(47, 48, 67, '2019-05-29 11:02:29', '2019-05-29 11:02:29', NULL),
(48, 48, 67, '2019-05-29 11:14:28', '2019-05-29 11:14:28', NULL),
(49, 30, 67, '2019-05-29 11:15:08', '2019-05-29 11:15:08', NULL),
(50, 30, 67, '2019-05-29 11:15:44', '2019-05-29 11:15:44', NULL),
(51, 30, 68, '2019-05-31 11:26:33', '2019-05-31 11:26:33', NULL),
(52, 48, 69, '2019-05-31 12:11:36', '2019-05-31 12:11:36', NULL),
(53, 30, 72, '2019-06-03 03:22:03', '2019-06-03 03:22:03', NULL),
(54, 48, 72, '2019-06-03 03:22:14', '2019-06-03 03:22:14', NULL),
(55, 48, 73, '2019-06-04 11:16:53', '2019-06-04 11:16:53', NULL),
(56, 48, 73, '2019-06-04 11:19:34', '2019-06-04 11:19:34', NULL),
(57, 30, 73, '2019-06-04 11:19:52', '2019-06-04 11:19:52', NULL),
(58, 30, 73, '2019-06-04 11:20:58', '2019-06-04 11:20:58', NULL),
(59, 40, 73, '2019-06-04 11:21:31', '2019-06-04 11:21:31', NULL),
(60, 48, 74, '2019-06-04 14:40:27', '2019-06-04 14:40:27', NULL),
(61, 48, 75, '2019-06-09 00:34:38', '2019-06-09 00:34:38', NULL),
(62, 48, 75, '2019-06-09 00:38:24', '2019-06-09 00:38:24', NULL),
(63, 32, 76, '2019-06-11 17:54:11', '2019-06-11 17:54:11', NULL),
(64, 48, 77, '2019-06-13 21:58:23', '2019-06-13 21:58:23', NULL),
(65, 30, 77, '2019-06-13 21:59:31', '2019-06-13 21:59:31', NULL),
(66, 32, 78, '2019-06-20 21:43:46', '2019-06-20 21:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `topic_video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `class_id`, `subject_id`, `chapter_id`, `title`, `details`, `topic_video`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 11, 1, 'Exercise 1.1 ', '<p>erhiowghoweghoeghowhowewweg</p>\r\n', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'active', '2019-04-27 06:13:53', '2019-04-27 06:13:53', NULL),
(2, 6, 11, 1, 'Exercise 1.2', '<p>jiwwehiowehiowehoehowwegho</p>\r\n', 'https://www.youtube.com/embed/pT8H8JuXrqE', 'active', '2019-04-27 06:14:15', '2019-04-27 06:14:15', NULL),
(3, 9, 18, 3, 'Lecture 1', '<p>Chepter 1&nbsp;</p>\r\n\r\n<p>Number System</p>\r\n', 'https://www.youtube.com/embed/wcT7puJkyyY?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-04-28 15:42:24', '2019-04-28 15:42:24', NULL),
(4, 9, 18, 3, 'Lecture 2', '<p>Chepter 1</p>\r\n\r\n<p>Number system</p>\r\n\r\n<p>Lecture 2</p>\r\n', 'https://www.youtube.com/embed/GCE7bW7uCeY?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-04-28 15:44:15', '2019-04-28 15:44:15', NULL),
(5, 8, 23, 4, 'Lecture 1', '<p>Exercise # 9.1</p>\r\n', 'https://www.youtube.com/embed/KR2meXjSH_Y?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:01:24', '2019-05-02 20:30:30', NULL),
(6, 8, 23, 4, 'Lecture 2', '<p>Exercise # 9.1</p>\r\n', 'https://www.youtube.com/embed/64bFujo6mfE?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:02:56', '2019-05-02 20:02:56', NULL),
(7, 8, 23, 4, 'Lecture 3', '<p>Exercise # 9.1</p>\r\n', 'https://www.youtube.com/embed/W_ZZaWdzkeQ?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:05:05', '2019-05-02 20:05:05', NULL),
(8, 8, 23, 4, 'Lecture 4', '<p>Exercise # 9.2</p>\r\n', 'https://www.youtube.com/embed/odH8IXYOEtc?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:06:56', '2019-05-02 20:06:56', NULL),
(9, 8, 23, 4, 'Lecture 5', '<p>Exercise # 9.2</p>\r\n', 'https://www.youtube.com/embed/LdD0yk3Uu04?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:08:29', '2019-05-02 20:08:29', NULL),
(10, 8, 23, 4, 'Lecture 6', '<p>Exercise # 9.2</p>\r\n', 'https://www.youtube.com/embed/9Q44ngizogE?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:10:11', '2019-05-02 20:10:11', NULL),
(11, 8, 23, 4, 'Lecture 7', '<p>Exercise # 9.3</p>\r\n', 'https://www.youtube.com/embed/AP_v6inctro?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:11:36', '2019-05-02 20:11:36', NULL),
(12, 8, 23, 4, 'Lecture 8', '<p>Exercise # 9.3 &amp; 9.4</p>\r\n', 'https://www.youtube.com/embed/ZULnFQtp1es?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:13:27', '2019-05-02 20:13:27', NULL),
(13, 8, 23, 4, 'Lecture 9', '<p>Exercise # 9.4</p>\r\n', 'https://www.youtube.com/embed/aENBIkRFifo?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 20:14:50', '2019-05-02 20:14:50', NULL),
(14, 8, 23, 5, 'Lecture 1', '<p>Chapter # 10 Basics</p>\r\n', 'https://www.youtube.com/embed/iOqXyV04_4Q?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 21:18:19', '2019-05-02 21:18:19', NULL),
(15, 8, 23, 5, 'Lecture 2', '<p>Exercise # 10.1</p>\r\n', 'https://www.youtube.com/embed/e_FSR0pCiFE?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 21:23:16', '2019-05-02 21:23:16', NULL),
(16, 8, 23, 5, 'Lecture 3', '<p>Exercise # 10.1</p>\r\n', 'https://www.youtube.com/embed/Uud6NRGvz1c?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 21:29:42', '2019-05-02 21:29:42', NULL),
(17, 8, 23, 5, 'Lecture 4', '<p>Proof of &quot;Fundamental law of Trigonometry&quot;</p>\r\n', 'https://www.youtube.com/embed/NFy7O9U-1KY?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-02 21:33:43', '2019-05-02 21:33:43', NULL),
(18, 8, 23, 5, 'Lecture 5', '<p>Exercise # 10.2</p>\r\n', 'https://www.youtube.com/embed/qwUftyi7A_A?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-03 11:26:43', '2019-05-03 11:26:43', NULL),
(19, 8, 23, 5, 'Lecture 6', '<p>Exercise # 10.2 , Question # 5 to 7&nbsp;</p>\r\n', 'https://www.youtube.com/embed/qwUftyi7A_A?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-03 11:32:40', '2019-05-03 11:32:40', NULL),
(20, 8, 23, 5, 'Lecture 7', '<p>Exercise # 10.2</p>\r\n', 'https://www.youtube.com/embed/E5bCDYACf4g?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:33:30', '2019-05-06 23:33:30', NULL),
(21, 8, 23, 5, 'Lecture 8', '<p>Exercise # 10.2</p>\r\n', 'https://www.youtube.com/embed/fgHl5KFdhmg?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:35:04', '2019-05-06 23:35:38', NULL),
(22, 8, 23, 5, 'Lecture 9', '<p>Exercise # 10.3</p>\r\n', 'https://www.youtube.com/embed/9oNlklfYkh0?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:46:39', '2019-05-06 23:46:39', NULL),
(23, 8, 23, 5, 'Lecture 9', '<p>Exercise # 10.3</p>\r\n', 'https://www.youtube.com/embed/9oNlklfYkh0?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:46:57', '2019-05-06 23:46:57', NULL),
(24, 8, 23, 5, 'Lecture 10', '<p><strong>Exercise # 10.3</strong></p>\r\n', 'https://www.youtube.com/embed/pH4u8uqaKF8?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:49:00', '2019-05-06 23:49:00', NULL),
(25, 8, 23, 5, 'Lecture 11', '<p>Exercise # 10.3</p>\r\n', 'https://www.youtube.com/embed/NqFnJ_JlTp8?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:52:06', '2019-05-06 23:52:06', NULL),
(26, 8, 23, 5, 'Lecture 11', '<p>Exercise # 10.3</p>\r\n', 'https://www.youtube.com/embed/NqFnJ_JlTp8?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:53:31', '2019-05-06 23:53:31', NULL),
(27, 8, 23, 5, 'Lecture 12', '<p>Ecercise # 10.3</p>\r\n', 'https://www.youtube.com/embed/prd6hRAezhk?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:57:41', '2019-05-06 23:57:41', NULL),
(28, 8, 23, 5, 'Lecture 13', '<p>Exercise 10.4</p>\r\n', 'https://www.youtube.com/embed/DTyN3MlNkvU?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-06 23:59:36', '2019-05-06 23:59:36', NULL),
(29, 8, 23, 5, 'Lecture 14', '<p>Exercise # 10.4</p>\r\n', 'https://www.youtube.com/embed/e9If2tvauyU?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-07 00:00:52', '2019-05-07 00:00:52', NULL),
(30, 8, 23, 5, 'Lecture 15', '<p>Exercise 10.4</p>\r\n', 'https://www.youtube.com/embed/p4ZNSEru0W4?list=PL43RHXequJ6JKCLwQ4G4ELlCiDfAXgk0X', 'active', '2019-05-07 00:02:22', '2019-05-07 00:02:22', NULL),
(31, 8, 23, 6, 'Lecture 1', '<p><em><strong>Domain and range of trigonometric functions</strong></em></p>\r\n', 'https://www.youtube.com/embed/oVSj84Ke3DE', 'active', '2019-05-07 00:08:32', '2019-05-07 00:19:01', NULL),
(32, 8, 23, 6, 'Lecture 2', '<p>Periods of trigonometric functions</p>\r\n', 'https://www.youtube.com/embed/_dPDbq24T4Y', 'active', '2019-05-08 03:40:39', '2019-05-08 03:40:39', NULL),
(33, 8, 23, 7, 'Lecture 1', '<p><strong>Formulae For chapter 12</strong></p>\r\n', 'https://www.youtube.com/embed/TVCVEjX1qbc', 'active', '2019-05-08 03:47:51', '2019-05-08 03:47:51', NULL),
(34, 9, 18, 3, 'Lecture 3', '', 'https://www.youtube.com/embed/qE3ElKb3haI?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:00:39', '2019-05-08 04:00:39', NULL),
(35, 9, 18, 3, 'Lecture 4', '', 'https://www.youtube.com/embed/YIsBdHgvLUc?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:03:21', '2019-05-08 04:03:21', NULL),
(36, 9, 18, 3, 'Lecture 5', '', 'https://www.youtube.com/embed/BfPhHrYSrns?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:04:51', '2019-05-08 04:04:51', NULL),
(37, 9, 18, 3, 'Lecture 6', '<p><strong>Polar form of complex numbers</strong></p>\r\n', 'https://www.youtube.com/embed/yvxESLRKTLQ?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:06:30', '2019-05-08 04:06:30', NULL),
(38, 9, 18, 3, 'Lecture 7', '', 'https://www.youtube.com/embed/uFjF2ObPCyo?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:07:45', '2019-05-08 04:07:45', NULL),
(39, 9, 18, 3, 'Lecture 8', '', 'https://www.youtube.com/embed/Bp68lrPnn9M?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-08 04:09:02', '2019-05-08 04:09:02', NULL),
(40, 8, 23, 7, 'Lecture 2', '', 'https://www.youtube.com/embed/1tPAbdE9oJg', 'active', '2019-05-08 04:21:43', '2019-05-08 04:21:43', NULL),
(41, 8, 23, 7, 'Lecture 3', '<p><strong>Exercise</strong> 12.5 <strong>Part</strong> a</p>\r\n', 'https://www.youtube.com/embed/A0TXZXp5Avg', 'active', '2019-05-13 22:56:05', '2019-05-13 22:56:05', NULL),
(42, 9, 18, 8, 'Lecture 1', '<p>Lecture 1&nbsp;Unit 2</p>\r\n', 'https://www.youtube.com/embed/Mfc0EYr6yi8?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:24:47', '2019-05-13 23:24:47', NULL),
(43, 9, 18, 8, 'Lecture 2', '<p>Lecture 2 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/qkJMSqTpqWs?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:26:35', '2019-05-13 23:26:35', NULL),
(44, 9, 18, 8, 'Lecture 3', '<p>Lecture 3 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/3g7Hm1HdYNU?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:27:51', '2019-05-13 23:27:51', NULL),
(45, 9, 18, 8, 'Lecture 4', '<p>Lecture 4 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/bgJzFWyzD34?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:29:22', '2019-05-13 23:29:22', NULL),
(46, 9, 18, 8, 'Lecture 5 (a)', '<p>Lecture 5 (a) Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/hVa-o8JSU14?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:31:50', '2019-05-13 23:34:24', NULL),
(47, 9, 18, 8, 'Lecture 5 (b)', '<p>Lecture 5 (b) Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/b4secuGcc_4?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:33:11', '2019-05-13 23:33:11', NULL),
(48, 9, 18, 8, 'Lecture 6', '<p>Lecture 6 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/wjK6uQlEVZg?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:36:13', '2019-05-13 23:36:13', NULL),
(49, 8, 23, 7, 'Lecture 4', '<p>Exercise # 12.6</p>\r\n', 'https://www.youtube.com/embed/ENaGwjbD1iM', 'active', '2019-05-13 23:36:49', '2019-05-13 23:36:49', NULL),
(50, 9, 18, 8, 'Lecture 7', '<p>Lecture 7 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/RyToFVuzBWg?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:38:14', '2019-05-13 23:38:14', NULL),
(51, 9, 18, 8, 'Lecture 8', '<p>Lecture 8 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/Dr81L5aW3Z0?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:40:00', '2019-05-13 23:40:00', NULL),
(52, 9, 18, 8, 'Lecture 9', '<p>Lecture 9 Unit 2 Book 1</p>\r\n', 'https://www.youtube.com/embed/OGc7ScYtcLc?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:41:25', '2019-05-13 23:41:25', NULL),
(53, 9, 18, 9, 'Lecture 1', '<p>Lecture 1 Unit 3 Book 1</p>\r\n', 'https://www.youtube.com/embed/QU2tXLuKacU?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:43:45', '2019-05-13 23:43:45', NULL),
(54, 9, 18, 9, 'Lecture 2', '<p>Lecture 2 Unit 3 Book 1</p>\r\n', 'https://www.youtube.com/embed/BWgvWcZ1Aes?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:45:21', '2019-05-13 23:45:21', NULL),
(55, 9, 18, 9, 'Lecture 3', '<p>Lecture 3 Unit 3 Book 1</p>\r\n', 'https://www.youtube.com/embed/Madto0aICx4?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:46:42', '2019-05-13 23:46:42', NULL),
(56, 9, 18, 9, 'Lecture 4', '<p>Lecture 4 Unit 3 Book 1</p>\r\n', 'https://www.youtube.com/embed/fWHN_V7LwQo?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-13 23:48:00', '2019-05-13 23:48:00', NULL),
(57, 9, 18, 10, 'Lecture 1', '<p>Lecture 1 Unit 4&nbsp;Book 1</p>\r\n', 'https://www.youtube.com/embed/ufNVhJPO0Jo?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:21:45', '2019-05-15 19:21:45', NULL),
(58, 9, 18, 10, 'Lecture 2', '<p>Lecture 2 chapter 4 Book 1</p>\r\n', 'https://www.youtube.com/embed/ZtjX7rYXTsY?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:23:16', '2019-05-15 19:23:16', NULL),
(59, 9, 18, 11, 'Lecture 1', '<p>Lecture 1 Chapter 5 Book 1</p>\r\n', 'https://www.youtube.com/embed/4blwMmQhuVQ?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:25:43', '2019-05-15 19:25:43', NULL),
(60, 9, 18, 12, 'Lecture 1', '<p>Lecture 1 Chapter 6 Book 1</p>\r\n', 'https://www.youtube.com/embed/0CnhRzCwliM?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:28:49', '2019-05-15 19:28:49', NULL),
(61, 9, 18, 12, 'Lecture 2', '<p>Lecture 2 Chapter 6 Book 1</p>\r\n', 'https://www.youtube.com/embed/0TeQhbyvlvw?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:32:29', '2019-05-15 19:32:29', NULL),
(62, 9, 18, 12, 'Lecture 3', '<p>Lecture 3 Chapter 6 Book 1</p>\r\n', 'https://www.youtube.com/embed/tp-89kql7XU?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:34:02', '2019-05-15 19:34:02', NULL),
(63, 9, 18, 12, 'Lecture 4', '<p>Lecture 4 Chapter 6 Book 1</p>\r\n', 'https://www.youtube.com/embed/Q2_7mB4njLI?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:35:34', '2019-05-15 19:35:34', NULL),
(64, 9, 18, 12, 'Lecture 5', '<p>Lecture 5 Chapter 6 Book 1</p>\r\n', 'https://www.youtube.com/embed/AuTFeq4DYSU?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:37:04', '2019-05-15 19:37:04', NULL),
(65, 9, 18, 13, 'Lecture 1', '<p>Lecture 1 Chapter 7 Book 1</p>\r\n', 'https://www.youtube.com/embed/42MDNYqA0cs?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:41:27', '2019-05-15 19:41:27', NULL),
(66, 9, 18, 13, 'Lecture 2', '<p>Lecture 2 Chapter 7 Book 1</p>\r\n', 'https://www.youtube.com/embed/-LzvGTPDxns?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:43:01', '2019-05-15 19:43:01', NULL),
(67, 9, 18, 13, 'Lecture 3', '<p>Lecture 3 Chapter 7 Book 1</p>\r\n', 'https://www.youtube.com/embed/YzPvLynqRFk?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:44:11', '2019-05-15 19:44:11', NULL),
(68, 9, 18, 13, 'Lecture 4', '<p>Lecture 4 Chapter 7 Book 1</p>\r\n', 'https://www.youtube.com/embed/JSclTn21cNY?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:45:49', '2019-05-15 19:45:49', NULL),
(69, 9, 18, 14, 'Lecture 1', '<p>Lecture 1 Chapter 8 Book 1</p>\r\n', 'https://www.youtube.com/embed/IvXmzI5Qt14?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:48:12', '2019-05-15 19:48:12', NULL),
(70, 9, 18, 15, 'Lecture 1', '<p>Trigonometry</p>\r\n', 'https://www.youtube.com/embed/50TQuNc2kco?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:50:20', '2019-05-15 19:50:20', NULL),
(71, 9, 18, 15, 'Lecture 2', '<p>Trigonometry</p>\r\n', 'https://www.youtube.com/embed/ln5MMqthGbI?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:51:18', '2019-05-15 19:51:18', NULL),
(72, 9, 18, 15, 'Lecture 3', '<p>Trigonometry</p>\r\n', 'https://www.youtube.com/embed/qRj55D1Hkow?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:52:25', '2019-05-15 19:52:25', NULL),
(73, 9, 18, 15, 'Lecture 4', '<p>Trigonometry</p>\r\n', 'https://www.youtube.com/embed/EkEKqTXhYrg?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-15 19:53:32', '2019-05-15 19:53:32', NULL),
(74, 8, 23, 7, 'Lecture 5', '<p>Exercise # 2.7</p>\r\n', 'https://www.youtube.com/embed/TQsOcQMZSe0', 'active', '2019-05-15 20:00:29', '2019-05-15 20:00:29', NULL),
(75, 9, 24, 17, 'Lecture 1', '<p><em><strong>Differentiation</strong></em></p>\r\n', 'https://www.youtube.com/embed/WWTGUR2aj10?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-17 01:18:09', '2019-05-17 01:18:09', NULL),
(76, 9, 24, 17, 'Lecture 2', '<p>Differentiation</p>\r\n', 'https://www.youtube.com/embed/YJDauMkWmV0?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-05-17 01:19:25', '2019-05-17 01:19:25', NULL),
(77, 8, 23, 7, 'Lecture 6', '<p>Exercise # 12.8</p>\r\n', 'https://www.youtube.com/embed/z23wnk2Pn1Y', 'active', '2019-05-17 02:32:54', '2019-05-17 02:32:54', NULL),
(78, 9, 24, 17, 'Lecture 3', '<p>Lecture # 3</p>\r\n\r\n<p>Chapter # 2</p>\r\n', 'https://www.youtube.com/embed/M4ByHD7oYUQ', 'active', '2019-05-22 20:29:43', '2019-05-22 20:29:43', NULL),
(79, 8, 23, 7, 'Lecture 7', '<p>Lecture # 7&nbsp;</p>\r\n\r\n<p>chapter # 12&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'https://www.youtube.com/embed/HLGTCA5Xm5M', 'active', '2019-05-22 21:03:18', '2019-05-22 21:03:18', NULL),
(80, 9, 24, 17, 'Lecture 4', '<p>Lecture # 4&nbsp;</p>\r\n\r\n<p>Chapter # 2</p>\r\n\r\n<p>Book 2</p>\r\n', 'https://www.youtube.com/embed/886m3F3NWAE', 'active', '2019-05-23 20:56:36', '2019-05-23 20:56:36', NULL),
(81, 8, 23, 7, 'Lecture 8', '<p>Lecture 8</p>\r\n\r\n<p>Chapter 12</p>\r\n\r\n<p>1st year Mathematics</p>\r\n', 'https://www.youtube.com/embed/-C8FGxXLgR4', 'active', '2019-05-23 21:42:42', '2019-05-23 21:42:42', NULL),
(82, 9, 24, 18, 'Lecture 1', '<p>Lecture # 1</p>\r\n\r\n<p>Chapter # 3</p>\r\n', 'https://www.youtube.com/embed/l91hN9bCk9o', 'active', '2019-05-26 01:29:32', '2019-05-26 01:29:32', NULL),
(83, 8, 23, 7, 'Lecture 9', '<p>Lecture # 9</p>\r\n\r\n<p>Chapter # 12</p>\r\n', 'https://www.youtube.com/embed/_9N0UhEDINA', 'active', '2019-05-26 01:57:57', '2019-05-26 01:57:57', NULL),
(84, 8, 26, 20, 'Lecture 1', '<p>Introduction</p>\r\n', 'https://www.youtube.com/embed/l91hN9bCk9o', 'active', '2019-05-27 22:59:45', '2019-05-27 22:59:45', NULL),
(85, 9, 24, 18, 'Lecture 2', '<p><strong>Integration</strong></p>\r\n', 'https://www.youtube.com/embed/ibgdWUlOZ9E', 'active', '2019-05-28 00:08:22', '2019-05-28 00:08:22', NULL),
(86, 8, 23, 7, 'Lecture 10', '<p>Lecture 10</p>\r\n\r\n<p>Chapter 12</p>\r\n', 'https://www.youtube.com/embed/mIaUPvRnQyk', 'active', '2019-05-28 00:30:17', '2019-05-28 00:30:17', NULL),
(87, 9, 24, 18, 'Lecture 3', '<p>Lecture 3</p>\r\n\r\n<p>Integration</p>\r\n', 'https://www.youtube.com/embed/KAS34JnAmMM', 'active', '2019-05-28 23:39:49', '2019-05-28 23:39:49', NULL),
(88, 8, 23, 22, 'Lecture 1', '<p>Exercise # 13.1</p>\r\n', 'https://www.youtube.com/embed/9g0dwRnRiKg', 'active', '2019-05-29 00:47:17', '2019-05-29 00:47:17', NULL),
(89, 9, 27, 23, 'Lecture 1', '', 'https://www.youtube.com/embed/rlgbzplAX-w?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:00:10', '2019-05-29 01:00:10', NULL),
(90, 9, 27, 23, 'Lecture 2', '', 'https://www.youtube.com/embed/ikKXW_3OTAE?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:01:15', '2019-05-29 01:01:15', NULL),
(91, 9, 27, 23, 'Lecture 3', '', 'https://www.youtube.com/embed/ewCV8VQNW9o?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:02:39', '2019-05-29 01:02:39', NULL),
(92, 9, 27, 23, 'Lecture 4', '', 'https://www.youtube.com/embed/1Pn90jyP1S4?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:03:43', '2019-05-29 01:03:43', NULL),
(93, 9, 27, 23, 'Lecture 5', '', 'https://www.youtube.com/embed/1Pas6dqd4Kc?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:04:37', '2019-05-29 01:04:37', NULL),
(94, 9, 27, 23, 'Lecture 6', '', 'https://www.youtube.com/embed/8klkmosLnvw?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:06:24', '2019-05-29 01:06:24', NULL),
(95, 9, 27, 23, 'Lecture 7', '', 'https://www.youtube.com/embed/E1DJl9CPqyg?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 01:10:05', '2019-05-29 01:10:05', NULL),
(96, 9, 27, 23, 'Lecture 8', '', 'https://www.youtube.com/embed/baMDrhYxIWs?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:25:57', '2019-05-29 10:25:57', NULL),
(97, 9, 27, 23, 'Lecture 9', '', 'https://www.youtube.com/embed/xhh_Xfo3Xok?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:28:46', '2019-05-29 10:28:46', NULL),
(98, 9, 27, 23, 'Lecture 10', '', 'https://www.youtube.com/embed/O5yGGf9J7SM?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:29:58', '2019-05-29 10:29:58', NULL),
(99, 9, 27, 24, 'Lecture 1', '', 'https://www.youtube.com/embed/OJKhCDG1s4k?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:31:59', '2019-05-29 10:31:59', NULL),
(100, 9, 27, 24, 'Lecture 2', '', 'https://www.youtube.com/embed/2bPfEdhhVtc?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:33:25', '2019-05-29 10:33:25', NULL),
(101, 9, 27, 24, 'Lecture 3', '', 'https://www.youtube.com/embed/kCanxKmR8U0?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:34:22', '2019-05-29 10:34:22', NULL),
(102, 9, 27, 24, 'Lecture 4', '', 'https://www.youtube.com/embed/GQEllNewYZw?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:35:04', '2019-05-29 10:35:04', NULL),
(103, 9, 27, 24, 'Lecture 5', '', 'https://www.youtube.com/embed/b94771Vi_uU?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:35:43', '2019-05-29 10:36:04', NULL),
(104, 9, 27, 24, 'Lecture 6', '', 'https://www.youtube.com/embed/tR3R6ncvfX4?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:36:51', '2019-05-29 10:36:51', NULL),
(105, 9, 27, 24, 'Lecture 7', '', 'https://www.youtube.com/embed/ankfx1B3Evw?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:37:39', '2019-05-29 10:37:39', NULL),
(106, 9, 27, 24, 'Lecture 8', '', 'https://www.youtube.com/embed/IhEXZDiYKGA?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:38:18', '2019-05-29 10:38:18', NULL),
(107, 9, 27, 24, 'Lecture 9', '', 'https://www.youtube.com/embed/uy7MHWTQIxY?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:38:57', '2019-05-29 10:38:57', NULL),
(108, 9, 27, 24, 'Lecture 10 (a)', '', 'https://www.youtube.com/embed/gYZpRWO9sYs?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:40:31', '2019-05-29 10:40:31', NULL),
(109, 9, 27, 24, 'Lecture 10 (b)', '', 'https://www.youtube.com/embed/DmcCrXrwKjs?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:44:33', '2019-05-29 10:44:33', NULL),
(110, 9, 27, 24, 'Lecture 11', '', 'https://www.youtube.com/embed/AQEgdVvEEeY?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:45:34', '2019-05-29 10:45:34', NULL),
(111, 9, 27, 24, 'Lecture 12', '', 'https://www.youtube.com/embed/rx1V40v1iKs?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:46:26', '2019-05-29 10:46:26', NULL),
(112, 9, 27, 24, 'Lecture 13', '', 'https://www.youtube.com/embed/kL0ienTJAwE?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:47:25', '2019-05-29 10:47:25', NULL),
(113, 9, 27, 24, 'Lecture 14', '', 'https://www.youtube.com/embed/Y7S63AlSfTI?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:48:16', '2019-05-29 10:48:16', NULL),
(114, 9, 27, 24, 'Lecture 15', '', 'https://www.youtube.com/embed/LO-dYXAD4LY?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:49:20', '2019-05-29 10:49:20', NULL),
(115, 9, 27, 24, 'Lecture 16', '', 'https://www.youtube.com/embed/fo2C8HICkb4?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:50:11', '2019-05-29 10:50:11', NULL),
(116, 9, 27, 24, 'Lecture 17', '', 'https://www.youtube.com/embed/Mh9IcTjvwbg?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:51:27', '2019-05-29 10:51:27', NULL),
(117, 9, 27, 25, 'Lecture 1', '', 'https://www.youtube.com/embed/kc15kSVb_3E?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:54:03', '2019-05-29 10:54:03', NULL),
(118, 9, 27, 25, 'Lecture 2', '', 'https://www.youtube.com/embed/CIhi4vqzJsk?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:55:43', '2019-05-29 10:55:43', NULL),
(119, 9, 27, 25, 'Lecture 3', '', 'https://www.youtube.com/embed/6eqrErmC9pU?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:57:13', '2019-05-29 10:57:13', NULL),
(120, 9, 27, 25, 'Lecture 4', '', 'https://www.youtube.com/embed/hRFOn0AXEv8?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:58:21', '2019-05-29 10:58:21', NULL),
(121, 9, 27, 25, 'Lecture 5', '', 'https://www.youtube.com/embed/VML8mZnrnDE?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 10:59:13', '2019-05-29 10:59:13', NULL),
(122, 9, 27, 25, 'Lecture 6', '', 'https://www.youtube.com/embed/8JJ9WAlNQjM?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-05-29 11:00:21', '2019-05-29 11:00:21', NULL),
(123, 9, 27, 25, 'Lecture 7', '<p>Lecture 7</p>\r\n\r\n<p>Unit 3&nbsp;</p>\r\n\r\n<p>Exercise 3.3</p>\r\n', 'https://www.youtube.com/embed/KYkytrTHBvc', 'active', '2019-06-09 00:53:46', '2019-06-09 00:53:46', NULL),
(124, 9, 27, 25, 'lecture 8', '', 'https://www.youtube.com/embed/J5zIcFRQZxY', 'active', '2019-06-09 01:19:46', '2019-06-09 01:19:46', NULL),
(125, 9, 27, 25, 'Lecture 9', '<p>Lecture 9</p>\r\n\r\n<p>Unit 3&nbsp;</p>\r\n\r\n<p>Exercise # 3.3</p>\r\n', 'https://www.youtube.com/embed/TQF0B3S9h8Q', 'active', '2019-06-11 07:10:46', '2019-06-11 07:10:46', NULL),
(126, 9, 24, 26, 'Lecture 1', '', 'https://www.youtube.com/embed/erQx5q4B5CU', 'active', '2019-06-11 07:25:07', '2019-06-11 07:25:07', NULL),
(127, 9, 27, 25, 'Lecture 10', '', 'https://www.youtube.com/embed/DfsSuAyqAv0?list=PL43RHXequJ6KGwOoA2-TKXfv03MpX_V6Q', 'active', '2019-06-13 21:49:29', '2019-06-13 21:49:29', NULL),
(128, 9, 24, 26, 'Lecture 2', '', 'https://www.youtube.com/embed/EzcfyR-kw50?list=PL43RHXequJ6LAgTDv5aE1IE0BX37D5orH', 'active', '2019-06-13 21:51:30', '2019-06-13 21:51:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic_videos`
--

CREATE TABLE `topic_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic_videos`
--

INSERT INTO `topic_videos` (`id`, `featured_image`, `video_url`, `file_mime_type`, `topic_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, NULL, 'esqFJFuQVPGnPtCB1549127258.mp4', 'mp4', 27, 'active', '2019-02-02 12:07:38', '2019-02-02 12:08:10', NULL),
(36, NULL, 'TGLfF2lSILLA4jlF1549127258.mp4', 'mp4', 27, 'active', '2019-02-02 12:07:38', '2019-02-02 12:08:10', NULL),
(37, NULL, 'R8WhBW2WFiaY8QOJ1549127258.mp4', 'mp4', 27, 'active', '2019-02-02 12:07:38', '2019-02-02 12:08:10', NULL),
(38, 'PExTf04NUh7Ltgg41549710824.PNG', '5hKj1UGlfpYovfVe1549710824.mp4', 'mp4', 28, 'active', '2019-02-08 07:11:33', '2019-02-09 06:13:44', NULL),
(39, 'lGyjNJikjn2i3BBp1549710865.jpg', 'a6Nib9c2lPsv79QQ1549710865.mp4', 'mp4', 28, 'inactive', '2019-02-08 07:11:34', '2019-02-09 06:14:25', NULL),
(40, NULL, 'gf4OpNXy5QcJc3t51549627894.mp4', 'mp4', 28, 'active', '2019-02-08 07:11:34', '2019-02-09 06:51:48', '2019-02-09 06:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `mobile` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `l_name`, `role`, `mobile`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', NULL, 0, NULL, 'info@dit.com.pk', '$2y$10$eMVseY7F0cgvIZggj/VM7.TH3JDcVbfloeVJZEbtyotxOK6uYEf2O', 1, '0183c05d1afe3578fab2026e693112c6', 1, '1FYm9nAB62vVZ4tjIHUc4ITLeIgGMYwXINf2mpHz0AnpCaeRT1yGDw0DR6fD', '2017-03-05 03:41:08', '2019-02-14 10:19:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_roles_user_id_foreign` (`user_id`),
  ADD KEY `assigned_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_types`
--
ALTER TABLE `brand_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_subjects_student_class_id_foreign` (`student_class_id`),
  ADD KEY `class_subjects_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_to_teaches`
--
ALTER TABLE `course_to_teaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_e_o_s`
--
ALTER TABLE `c_e_o_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_type_id_foreign` (`type_id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indexes for table `history_types`
--
ALTER TABLE `history_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_galleries`
--
ALTER TABLE `home_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_plans`
--
ALTER TABLE `payment_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_rolls`
--
ALTER TABLE `pay_rolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_types`
--
ALTER TABLE `subject_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppiers`
--
ALTER TABLE `suppiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_students`
--
ALTER TABLE `teacher_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_videos`
--
ALTER TABLE `topic_videos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `brand_types`
--
ALTER TABLE `brand_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_to_teaches`
--
ALTER TABLE `course_to_teaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `c_e_o_s`
--
ALTER TABLE `c_e_o_s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_types`
--
ALTER TABLE `history_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_galleries`
--
ALTER TABLE `home_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_plans`
--
ALTER TABLE `payment_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pay_rolls`
--
ALTER TABLE `pay_rolls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject_types`
--
ALTER TABLE `subject_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teacher_students`
--
ALTER TABLE `teacher_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `topic_videos`
--
ALTER TABLE `topic_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD CONSTRAINT `class_subjects_student_class_id_foreign` FOREIGN KEY (`student_class_id`) REFERENCES `student_classes` (`id`),
  ADD CONSTRAINT `class_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
