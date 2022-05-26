-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 06:01 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosque`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', NULL, NULL, '2022-04-27 04:32:09', '2022-04-27 07:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `bankinfos`
--

DROP TABLE IF EXISTS `bankinfos`;
CREATE TABLE IF NOT EXISTS `bankinfos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acccount_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankinfos`
--

INSERT INTO `bankinfos` (`id`, `acccount_name`, `account_no`, `transaction_no`, `transaction_date`, `amount`, `message`, `created_at`, `updated_at`) VALUES
(1, 'fgsdsdf', '435435', '454435', '2022-04-13', NULL, 'rewtretr', '2022-04-13 02:36:31', '2022-04-13 02:36:31'),
(2, 'bd', '23434', '454435', '2022-04-13', NULL, 'dfgfdg', '2022-04-13 02:37:27', '2022-04-13 02:37:27'),
(3, 'bd', '23434', '454435', '2022-04-12', NULL, 'dfgfdg', '2022-04-13 02:39:39', '2022-04-13 02:39:39'),
(4, 'sdsfdsf', '455', '45435', '2022-04-13', NULL, 'dsfdfsdsf', '2022-04-13 02:48:13', '2022-04-13 02:48:13'),
(5, 'Bangladesh', '23434', '454435', '2022-04-13', NULL, '356345435fgdfg', '2022-04-13 03:18:13', '2022-04-13 03:18:13'),
(6, 'dfg', 'fgfd', 'sdf', '2022-05-16', NULL, 'fdssds', '2022-05-16 05:01:04', '2022-05-16 05:01:04'),
(7, 'dfg', 'fgfd', 'sdf', '2022-05-16', NULL, 'huyu', '2022-05-16 05:45:15', '2022-05-16 05:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

DROP TABLE IF EXISTS `communities`;
CREATE TABLE IF NOT EXISTS `communities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '1652010791.jpg', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin', '2022-05-08 05:53:11', '2022-05-08 05:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Road-Lake Drive ,House-15,Sector-7', '01521532760', 'mhakash5000@gmail.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com/in/md-makbul-hosen-5620b1158/', 'Road-Lake Drive ,House-15,Sector-7', 'https://www.youtube.com', NULL, NULL, '2022-04-27 03:27:42', '2022-05-08 00:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `massage` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'mh akash', '566546', 'mustarijyoti99@gmail.com', 'dgdfg', '2022-05-09 04:50:45', '2022-05-09 04:50:45'),
(2, 'mh akash', '566546', 'mhakash5000@gmail.com', 'sdsad', '2022-05-09 05:10:48', '2022-05-09 05:10:48'),
(3, 'mh akash', '566546', 'mhakash5000@gmail.com', 'io', '2022-05-09 05:14:06', '2022-05-09 05:14:06'),
(6, 'Hanif', '01521532761', 'mhakash5000@gmail.com', 'this is akas sadfsd sdfsdf sdfsdf sdfsdf sdfsdf dsfdsf dsfsdf lkdfds dfsdf sdfsdaf sdfsdfsdf sdfsdf sdfdsf sdfsdfds sdfsdfds sdfsdfsd sdfsdfsdf sdfsdf', '2022-05-10 02:01:59', '2022-05-10 02:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `count_down_timers`
--

DROP TABLE IF EXISTS `count_down_timers`;
CREATE TABLE IF NOT EXISTS `count_down_timers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launch_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `count_down_timers`
--

INSERT INTO `count_down_timers` (`id`, `title`, `launch_date`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Eid ul-Azha 2022', '2022-05-27 12:18:00', 1, '2022-05-17 06:39:58', '2022-05-18 00:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

DROP TABLE IF EXISTS `donates`;
CREATE TABLE IF NOT EXISTS `donates` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `age` bigint(20) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_street_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominator_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominator_membership_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominator_signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominator_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seconder_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seconder_membership_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seconder_signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seconder_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `age`, `title`, `first_name`, `middle_name`, `family_name`, `num_street_name`, `suburb`, `state`, `post_code`, `email`, `home_phone_num`, `mobile_phone_num`, `work_phone_num`, `applicant_signature`, `applicant_date`, `nominator_full_name`, `nominator_membership_no`, `nominator_signature`, `nominator_date`, `seconder_full_name`, `seconder_membership_no`, `seconder_signature`, `seconder_date`, `created_at`, `updated_at`) VALUES
(1, 3, 'Title', 'akash', 'akash', 'akash', NULL, NULL, '555gg', '455', 'donator5000@gmail.com', '3423454644', '01554', '789879', 'fsgsdgsfdg', '2022-04-12', 'sdfds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 07:02:23', '2022-05-16 05:25:26'),
(16, 25, NULL, 'Md.Makbul', 'sdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'mhakash5000@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 00:43:09', '2022-05-16 00:43:09'),
(18, 14, NULL, 'sdfsd', 'sdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'mhakash5000@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 01:03:14', '2022-05-16 01:03:14'),
(20, 14, NULL, '32ddf', 'sdfdssdf', 'sdf', NULL, NULL, 'sdfds', '324', 'mhakash5000@gmail.com', '234', '234', '234', 'sdf', '2022-05-16', '23ssssssssssssssfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 01:15:44', '2022-05-16 01:15:44'),
(21, 14, NULL, 'Md.Makbul', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 's4s@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 01:27:30', '2022-05-16 01:27:30'),
(22, 344, NULL, 'sdfsd', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'mhakash5000@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 02:36:59', '2022-05-16 02:36:59'),
(23, 344, NULL, 'sdfsd', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'mhakash5000@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 02:37:12', '2022-05-16 02:37:12'),
(24, 344, NULL, 'sdfsd', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'mhakash5000@gmail.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 02:38:06', '2022-05-16 02:38:06'),
(37, 344, NULL, 'sdfsd', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'makbul@nene.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 04:13:10', '2022-05-16 04:13:10'),
(40, 310, NULL, 'sdfsd', 'sdfdssdf', 'sdfdsf', 'belly road,K', 'bally', 'Brahmanbaria', '435', 'makbul@nene.com', '566546', '566546', '566546', '345435', '2022-05-16', 'fgdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-16 04:24:09', '2022-05-16 05:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `event_times`
--

DROP TABLE IF EXISTS `event_times`;
CREATE TABLE IF NOT EXISTS `event_times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_times`
--

INSERT INTO `event_times` (`id`, `title`, `date`, `created_at`, `updated_at`) VALUES
(4, 'Eid-Ul-Fitr', '2022-05-03', '2022-04-23 08:16:31', '2022-04-23 08:22:42');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowladges`
--

DROP TABLE IF EXISTS `knowladges`;
CREATE TABLE IF NOT EXISTS `knowladges` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowladges`
--

INSERT INTO `knowladges` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(9, '1652015388.jpg', 'Lorem Ipsum', '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', '2022-05-08 07:09:49', '2022-05-08 07:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '1650721916.png', NULL, NULL, 3, '2022-04-14 13:55:20', '2022-04-23 07:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_05_02_045646_create_sliders_table', 1),
(6, '2020_05_02_151045_create_newsevents_table', 1),
(7, '2020_05_03_065202_create_services_table', 1),
(8, '2020_05_03_140713_create_contacts_table', 1),
(9, '2020_05_03_170016_create_abouts_table', 1),
(10, '2020_05_08_144512_create_contact_us_table', 1),
(11, '2022_04_03_145737_create_prayers_table', 1),
(12, '2022_04_04_150158_create_donates_table', 1),
(13, '2022_04_06_065853_create_logos_table', 1),
(14, '2022_04_13_075340_create_bankinfos_table', 2),
(16, '2022_04_21_111948_create_countdown_timers_table', 3),
(17, '2022_04_23_105109_create_event_times_table', 4),
(18, '2022_04_24_081446_create_service_ones_table', 5),
(19, '2022_04_24_081506_create_service_twos_table', 5),
(20, '2022_04_24_081542_create_service_threes_table', 5),
(31, '2022_04_25_140620_create_news_ones_table', 6),
(32, '2022_04_25_140655_create_news_twos_table', 6),
(33, '2022_05_08_080347_create_knowladges_table', 7),
(34, '2022_05_08_081426_create_spiritualities_table', 7),
(35, '2022_05_08_082105_create_communities_table', 7),
(36, '2022_05_08_082357_create_phylosophy_services_table', 7),
(37, '2022_05_11_093028_create_news_threes_table', 8),
(38, '2022_05_11_093550_create_news_fours_table', 8),
(39, '2022_05_11_101849_create_news_fours_table', 9),
(40, '2022_05_12_055545_create_school_management_table', 10),
(41, '2022_05_12_091321_create_school_management_table', 11),
(42, '2022_05_17_070420_create_count_down_timers_table', 12),
(43, '2022_05_19_104512_create_emails_table', 13),
(44, '2022_05_21_050145_create_whatsapps_table', 13),
(45, '2022_05_22_133008_create_newsletters_table', 14),
(46, '2022_05_23_060728_create_users_table', 15),
(47, '2022_05_24_055059_create_notifications_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

DROP TABLE IF EXISTS `newsevents`;
CREATE TABLE IF NOT EXISTS `newsevents` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `sort_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'makbul@nene.com', '2022-05-22 08:49:33', '2022-05-22 08:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `news_fours`
--

DROP TABLE IF EXISTS `news_fours`;
CREATE TABLE IF NOT EXISTS `news_fours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_fours`
--

INSERT INTO `news_fours` (`id`, `title`, `short_desc`, `long_desc`, `date`, `created_at`, `updated_at`) VALUES
(1, 'News Four', 'News Four News Four News Four News Four News Four', 'News Four News FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews FourNews Four', '2022-05-11', '2022-05-11 04:23:20', '2022-05-11 04:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `news_ones`
--

DROP TABLE IF EXISTS `news_ones`;
CREATE TABLE IF NOT EXISTS `news_ones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_ones`
--

INSERT INTO `news_ones` (`id`, `image`, `date`, `title`, `short_desc`, `long_desc`, `created_at`, `updated_at`) VALUES
(4, NULL, '2022-04-26', 'News One', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-04-26 05:27:31', '2022-05-11 06:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `news_threes`
--

DROP TABLE IF EXISTS `news_threes`;
CREATE TABLE IF NOT EXISTS `news_threes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_threes`
--

INSERT INTO `news_threes` (`id`, `title`, `short_desc`, `long_desc`, `date`, `created_at`, `updated_at`) VALUES
(1, 'News Three', 'News ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews Three', 'News ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews ThreeNews Threefgf', '2022-05-11', '2022-05-11 03:59:10', '2022-05-11 04:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `news_twos`
--

DROP TABLE IF EXISTS `news_twos`;
CREATE TABLE IF NOT EXISTS `news_twos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_twos`
--

INSERT INTO `news_twos` (`id`, `title`, `short_desc`, `long_desc`, `date`, `created_at`, `updated_at`) VALUES
(2, 'News Two', 'Where can I get somedfsdsdfd Where can I get somedfsdsdfd', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2022-04-26', '2022-04-26 05:33:07', '2022-05-11 06:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phylosophy_services`
--

DROP TABLE IF EXISTS `phylosophy_services`;
CREATE TABLE IF NOT EXISTS `phylosophy_services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phylosophy_services`
--

INSERT INTO `phylosophy_services` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, '1652013131.jpg', 'Lorem Ipsum', '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"', '2022-05-08 06:17:58', '2022-05-08 06:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

DROP TABLE IF EXISTS `prayers`;
CREATE TABLE IF NOT EXISTS `prayers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunrise` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fajr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhuhr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunset` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maghrib` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ishaa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`id`, `short_title`, `long_title`, `date`, `sunrise`, `fajr`, `dhuhr`, `asr`, `sunset`, `maghrib`, `jummah`, `ishaa`, `created_at`, `updated_at`) VALUES
(2, 'Prayer Times', 'PRAYER TIMES IN SEFTON', '2022-04-16', '06:18', '05:09', '11:56', '15:08', '18:25', '18:34', '05:09', '18:42', '2022-04-15 11:09:32', '2022-04-15 13:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `school_management`
--

DROP TABLE IF EXISTS `school_management`;
CREATE TABLE IF NOT EXISTS `school_management` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `first_day_fall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_day_spring` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_registration_fall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_registration_spring` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_day_fall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_day_spring` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_management`
--

INSERT INTO `school_management` (`id`, `title`, `description`, `first_day_fall`, `first_day_spring`, `late_registration_fall`, `late_registration_spring`, `last_day_fall`, `last_day_spring`, `created_at`, `updated_at`) VALUES
(1, 'Islamic School', 'The Weekend School of the Islamic Center of Allah is committed to providing quality Islamic Education according to the Quran and the Sunnah of the Prophet Mohammed (Peace Be upon Him) to a diverse student population in the greater area.', '2022-05-12', '2022-05-12', '2022-05-14', '2022-05-14', '2022-05-13', '2022-05-13', '2022-05-12 03:33:59', '2022-05-12 03:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sort_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_ones`
--

DROP TABLE IF EXISTS `service_ones`;
CREATE TABLE IF NOT EXISTS `service_ones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_ones`
--

INSERT INTO `service_ones` (`id`, `image`, `title`, `short_desc`, `long_desc`, `created_at`, `updated_at`) VALUES
(4, '1652072812.jpg', 'Marriage', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', '2022-04-25 04:05:14', '2022-05-08 23:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_threes`
--

DROP TABLE IF EXISTS `service_threes`;
CREATE TABLE IF NOT EXISTS `service_threes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_threes`
--

INSERT INTO `service_threes` (`id`, `image`, `title`, `short_desc`, `long_desc`, `created_at`, `updated_at`) VALUES
(2, '1652073175.jpg', 'Community', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for', 'those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et', '2022-04-25 04:19:49', '2022-05-08 23:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `service_twos`
--

DROP TABLE IF EXISTS `service_twos`;
CREATE TABLE IF NOT EXISTS `service_twos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_twos`
--

INSERT INTO `service_twos` (`id`, `image`, `title`, `short_desc`, `long_desc`, `created_at`, `updated_at`) VALUES
(1, '1652073044.jpg', 'Funeral', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-04-24 05:21:33', '2022-05-08 23:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `sort_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(12, '1650470305.jpg', NULL, 'BIC Waqf Management', NULL, 3, '2022-04-15 05:13:16', '2022-04-20 09:58:25'),
(13, '1650461474.jpg', NULL, 'Have a safe life', NULL, 3, '2022-04-15 05:13:50', '2022-04-20 07:31:14'),
(14, '1650461491.jpg', NULL, 'Beautiful Bangladesh', NULL, 3, '2022-04-15 05:15:24', '2022-04-20 07:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `spiritualities`
--

DROP TABLE IF EXISTS `spiritualities`;
CREATE TABLE IF NOT EXISTS `spiritualities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spiritualities`
--

INSERT INTO `spiritualities` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1652009663.jpg', 'Where can I get some?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '2022-05-08 05:33:31', '2022-05-08 05:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `code`, `name`, `phone`, `status`, `is_approved`, `email`, `email_verified_at`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'mh akash', '01782283171', 0, 1, 'mhakash5000@gmail.com', NULL, '$2y$10$n/pgcI8MW76Tn.z3ffBQaOYlei03R51PrAQwklFAzmcpIAqWKny7m', NULL, '2022-05-23 00:28:02', '2022-05-25 11:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapps`
--

DROP TABLE IF EXISTS `whatsapps`;
CREATE TABLE IF NOT EXISTS `whatsapps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatsapps`
--

INSERT INTO `whatsapps` (`id`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'https://www.whatsapp.com', '2022-05-21 23:20:25', '2022-05-21 23:20:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
