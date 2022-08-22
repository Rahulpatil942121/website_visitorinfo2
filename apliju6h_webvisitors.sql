-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2022 at 07:42 AM
-- Server version: 5.6.33-79.0
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apliju6h_webvisitors`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_05_073747_create_protalnames_table', 2),
(6, '2022_08_05_074008_create_productnames_table', 3),
(7, '2022_08_05_124741_create_visitorinfos_table', 4);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productnames`
--

CREATE TABLE `productnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portal_id` bigint(20) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci,
  `product_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitor` bigint(20) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `delete_at` int(11) NOT NULL DEFAULT '0' COMMENT 'Not Deleted = 0; Deleted = 1;',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productnames`
--

INSERT INTO `productnames` (`id`, `product_name`, `portal_id`, `product_desc`, `product_link`, `share_link`, `visitor`, `status`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'DRIMOUTH Chewable Tablets', 1, 'DRIMOUTH Chewable Tablets - Palliative Care for Dryness of Mouth, Thirst, Bad Breath, Fresh Mouth and Dry Mouth – 60 Tablets', 'https://www.amazon.in/dp/B097JZPL2V?ref=myi_title_dp&th=1', 'DRIMOUTHChewableTabl', 5, 1, 0, '2022-08-05 04:54:46', '2022-08-09 16:22:57'),
(2, 'Brahmosmi\'s Drimouth with Real Fruits Chewable Tab', 2, 'Brahmosmi\'s Drimouth with Real Fruits Chewable Tablet', 'https://www.1mg.com/otc/brahmosmi-s-drimouth-with-real-fruits-chewable-tablet-otc676807', 'Brahmosmi\'sDrimouthw2', 1, 1, 0, '2022-08-05 18:27:51', '2022-08-08 12:01:06'),
(3, 'Brahmosmi’s SavFeet cream for Peripheral neuropath', 1, 'Brahmosmi’s SavFeet cream for Peripheral neuropathy, burning feet, tingling, numbness, sore feet, dry itchy legs, cracked heels - 50gm(Pack of 1)', 'https://www.amazon.in/dp/B092S4KP7H?ref=myi_title_dp', 'Brahmosmi’sSavFeet1', 0, 1, 0, '2022-08-05 18:28:38', '2022-08-05 18:28:38'),
(4, 'Brahmosmi’s2SavFeet cream for Peripheral neuropath', 1, 'Brahmosmi’s SavFeet cream for Peripheral neuropathy, burning feet, tingling, numbness, sore feet, dry itchy legs, cracked heels - 50Gm(Pack of 4)', 'https://www.amazon.in/dp/B092S477VD?ref=myi_title_dp', 'Brahmosmi’s2SavFee1', 1, 1, 0, '2022-08-05 18:33:53', '2022-08-05 18:39:26'),
(5, 'aplijaga.com', 4, 'Best real estate portal in Maharashtra', 'https://aplijaga.com/', 'aplijaga.com4', 6, 1, 0, '2022-08-08 12:30:23', '2022-08-11 07:07:15'),
(6, 'Hyperlocal Magazine', 5, 'Lifestyle Magazine Pune', 'https://hyperlocalmagazine.com/home', 'HyperlocalMagazine5', 3, 1, 0, '2022-08-08 12:40:00', '2022-08-08 12:40:55'),
(7, 'Brahmosmi Savfeet', 6, 'Brahmosmi Savfeet', 'https://www.amazon.in/SavFeet-50g-x-1-Cream/dp/B092S4KP7H/ref=sr_1_1?crid=YXH2L7O6FB3V&keywords=savfeet&qid=1659965552&sprefix=%2Caps%2C4694&sr=8-1', 'Savfeet6', 28, 1, 0, '2022-08-08 19:03:15', '2022-08-15 09:17:08'),
(8, 'Brahmosmi Savfeet', 8, 'Brahmosmi Savfeet', 'https://brahmosmibio.com/product/savfeet/', 'BrahmosmiSavfeet8', 28, 1, 0, '2022-08-08 19:10:33', '2022-08-14 14:42:26'),
(9, 'Amazon Savfeet Pack of 4', 6, 'Savfeet Pack of 4', 'https://www.amazon.in/dp/B092S477VD?ref=myi&fbclid=IwAR0UTTXJ7rUJ5El8j-C6upc7BMFIYfdfTsjY_X6mYOgO8Dh7In6G41iYkaw', 'AmazonSavfeetPackof46', 22, 1, 0, '2022-08-08 19:28:14', '2022-08-15 09:17:07'),
(10, 'Website Builder By DC', 10, 'Free Website Builder', 'https://webbuilder.duticorp.com/', 'WebsiteBuilderByDC10', 2, 1, 0, '2022-08-08 20:15:22', '2022-08-09 14:32:43'),
(11, 'DUTI CORP', 9, 'DUTI CORP Website', 'https://www.duticorp.com/', 'DUTICORP9', 6, 1, 0, '2022-08-08 20:16:50', '2022-08-16 14:49:06'),
(12, 'TP', 11, 'Lets Play', 'https://wa.me/+918800933333?text=Hi%20im%20interested%20in%20the%20game%20please%20send%20me%20the%20credentials%20', 'TP11', 4, 1, 0, '2022-08-09 17:00:54', '2022-08-09 20:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `protalnames`
--

CREATE TABLE `protalnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `protal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `delete_at` int(11) NOT NULL DEFAULT '0' COMMENT 'Not Deleted = 0; Deleted = 1;',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protalnames`
--

INSERT INTO `protalnames` (`id`, `protal_name`, `status`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', 1, 0, '2022-08-05 03:29:53', '2022-08-05 03:29:53'),
(2, '1MG', 1, 0, '2022-08-05 18:26:39', '2022-08-05 18:26:39'),
(3, 'https://aplijaga.com/', 1, 0, '2022-08-08 12:27:51', '2022-08-08 12:27:51'),
(4, 'aplijaga', 1, 0, '2022-08-08 12:29:53', '2022-08-08 12:29:53'),
(5, 'Hyperlocal Magazine', 1, 0, '2022-08-08 12:39:31', '2022-08-08 12:39:31'),
(6, 'Amazon - Savfeet', 1, 0, '2022-08-08 19:01:28', '2022-08-08 19:01:28'),
(7, '1mg - Savfeet', 1, 0, '2022-08-08 19:01:41', '2022-08-08 19:01:41'),
(8, 'brahmosmi - Savfeet', 1, 0, '2022-08-08 19:01:58', '2022-08-08 19:01:58'),
(9, 'DUTI CORP', 1, 0, '2022-08-08 20:14:30', '2022-08-08 20:14:30'),
(10, 'DC Website Builder', 1, 0, '2022-08-08 20:14:53', '2022-08-08 20:14:53'),
(11, 'Manish Madhavan', 1, 0, '2022-08-09 17:00:26', '2022-08-09 17:00:26'),
(12, 'saamana saaptahik', 1, 0, '2022-08-12 14:57:17', '2022-08-12 14:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` bigint(20) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `email_verified_at`, `image`, `password`, `remember_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '', NULL, 'public/images/Profile/logo_img1660295566.jpg', '$2y$10$rn8QWbYTBRUJaslyuTFkPeoSB0PfndDz4fmAJi5sBNKkmE0.HOxRy', NULL, 0, 1, '2022-08-05 07:23:03', '2022-08-05 07:23:08'),
(2, 'Rahul', 'rahul.duticorp@gmail.com', '9421212733', NULL, 'public/images/Profile/logo_img1660639950.png', '$2y$10$NWHtyPX6v0aVFCbfDvVbQO6M3cWjrnaJRADqtYtITQWISaSAkNoT.', NULL, 1, 1, '2022-08-12 10:51:28', '2022-08-12 10:51:28'),
(3, 'Saamana Saaptahik', 'info@saamanasaaptahik.com', '8888010828', NULL, NULL, '$2y$10$mjY3fJ7CgCE2M3CHHbmxmOh3J6yKqlN3RQYVymFWMcQ/pGbCrJIFK', NULL, 2, 1, '2022-08-12 15:01:49', '2022-08-12 15:01:49'),
(4, 'Rahul', 'rahul.techenvision@gmail.com', '9421212733', NULL, 'public/images/Profile/logo_img1660656467.png', '$2y$10$Q2QkjqxWzjHZtjrwrtmkBuHZp6Flba9dio68ReKHIL5d12Mll8aSG', NULL, 3, 1, '2022-08-16 18:50:06', '2022-08-16 18:50:06'),
(5, 'Deepesh Chatterjee', 'deepesh@duticorp.com', '9830196420', NULL, NULL, '$2y$10$fWlDv7Tm2dW6/K.LwyVJOu5sknk0WzzQjrNb5W/n5CfZFH6dYUpwq', NULL, 1, 1, '2022-08-17 11:28:08', '2022-08-17 11:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Client', 1, '2022-08-09 13:11:41', '2022-08-09 13:11:41'),
(2, 'Saamana Saaptahik', 1, '2022-08-12 14:53:19', '2022-08-12 14:53:19'),
(3, 'Employee', 1, '2022-08-16 18:49:28', '2022-08-16 18:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `visitorinfos`
--

CREATE TABLE `visitorinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regionName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_datetime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitorinfos`
--

INSERT INTO `visitorinfos` (`id`, `product_id`, `country_name`, `regionName`, `city`, `ip`, `lat`, `lon`, `zipcode`, `network_name`, `device`, `browser`, `visit_datetime`, `created_at`, `updated_at`) VALUES
(1, 4, 'India', 'Maharashtra', 'Pune', '106.210.158.121', '18.6161', '73.7286', '411030', 'Bharti Airtel Limited', '', '', '05-08-2022 10:54:10 am', '2022-08-05 18:39:26', '2022-08-05 18:39:26'),
(2, 1, 'India', 'Maharashtra', 'Pune', '106.220.155.26', '18.6161', '73.7286', '411030', 'Bharti Airtel Limited', '', '', '08-08-2022 10:54:10 am', '2022-08-08 10:54:10', '2022-08-08 10:54:10'),
(3, 2, 'India', 'Maharashtra', 'Pune', '106.220.155.26', '18.6161', '73.7286', '411030', 'Bharti Airtel Limited', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 12:01:06 pm', '2022-08-08 12:01:06', '2022-08-08 12:01:06'),
(4, 1, 'India', 'Maharashtra', 'Pune', '106.220.155.26', '18.6161', '73.7286', '411030', 'Bharti Airtel Limited', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 12:23:39 pm', '2022-08-08 12:23:39', '2022-08-08 12:23:39'),
(5, 1, 'India', 'Maharashtra', 'Pune', '106.220.155.26', '18.6161', '73.7286', '411030', 'Bharti Airtel Limited', 'MOBILE', 'Mozilla/5.0 (Linux; Android 4.4.4; 2014818) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36', '08-08-2022 12:24:07 pm', '2022-08-08 12:24:07', '2022-08-08 12:24:07'),
(6, 5, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'WhatsApp/2.2226.5 N', '08-08-2022 12:36:26 pm', '2022-08-08 12:36:26', '2022-08-08 12:36:26'),
(7, 5, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '08-08-2022 12:36:41 pm', '2022-08-08 12:36:41', '2022-08-08 12:36:41'),
(8, 6, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'WhatsApp/2.2226.5 N', '08-08-2022 12:40:26 pm', '2022-08-08 12:40:26', '2022-08-08 12:40:26'),
(9, 6, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36', '08-08-2022 12:40:48 pm', '2022-08-08 12:40:48', '2022-08-08 12:40:48'),
(10, 6, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'MOBILE', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '08-08-2022 12:40:55 pm', '2022-08-08 12:40:55', '2022-08-08 12:40:55'),
(11, 5, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '08-08-2022 18:35:48 pm', '2022-08-08 18:35:48', '2022-08-08 18:35:48'),
(12, 7, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'WhatsApp/2.2226.5 N', '08-08-2022 19:12:12 pm', '2022-08-08 19:12:12', '2022-08-08 19:12:12'),
(13, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'WhatsApp/2.2226.5 N', '08-08-2022 19:13:33 pm', '2022-08-08 19:13:33', '2022-08-08 19:13:33'),
(14, 8, 'Canada', 'Ontario', 'Toronto', '173.252.83.17', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:31:17 pm', '2022-08-08 19:31:17', '2022-08-08 19:31:17'),
(15, 8, 'Canada', 'Ontario', 'Toronto', '173.252.83.17', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:31:21 pm', '2022-08-08 19:31:21', '2022-08-08 19:31:21'),
(16, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.7', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:31:24 pm', '2022-08-08 19:31:24', '2022-08-08 19:31:24'),
(17, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.1', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:31:24 pm', '2022-08-08 19:31:24', '2022-08-08 19:31:24'),
(18, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.3', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:33:06 pm', '2022-08-08 19:33:06', '2022-08-08 19:33:06'),
(19, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.10', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:33:06 pm', '2022-08-08 19:33:06', '2022-08-08 19:33:06'),
(20, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.20', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:33:10 pm', '2022-08-08 19:33:10', '2022-08-08 19:33:10'),
(21, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.12', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:33:11 pm', '2022-08-08 19:33:11', '2022-08-08 19:33:11'),
(22, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.6', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:34:22 pm', '2022-08-08 19:34:22', '2022-08-08 19:34:22'),
(23, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.11', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:34:49 pm', '2022-08-08 19:34:49', '2022-08-08 19:34:49'),
(24, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.10', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:37:20 pm', '2022-08-08 19:37:20', '2022-08-08 19:37:20'),
(25, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.13', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:37:21 pm', '2022-08-08 19:37:21', '2022-08-08 19:37:21'),
(26, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.120', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:38:35 pm', '2022-08-08 19:38:35', '2022-08-08 19:38:35'),
(27, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.19', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:38:35 pm', '2022-08-08 19:38:35', '2022-08-08 19:38:35'),
(28, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.24', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:38:55 pm', '2022-08-08 19:38:55', '2022-08-08 19:38:55'),
(29, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.20', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:38:55 pm', '2022-08-08 19:38:55', '2022-08-08 19:38:55'),
(30, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.4', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:39:27 pm', '2022-08-08 19:39:27', '2022-08-08 19:39:27'),
(31, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.9', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:39:27 pm', '2022-08-08 19:39:27', '2022-08-08 19:39:27'),
(32, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:39:37 pm', '2022-08-08 19:39:37', '2022-08-08 19:39:37'),
(33, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.6', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:39:51 pm', '2022-08-08 19:39:51', '2022-08-08 19:39:51'),
(34, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.117', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:40:13 pm', '2022-08-08 19:40:13', '2022-08-08 19:40:13'),
(35, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:41:51 pm', '2022-08-08 19:41:51', '2022-08-08 19:41:51'),
(36, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.12', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:41:51 pm', '2022-08-08 19:41:51', '2022-08-08 19:41:51'),
(37, 8, 'Canada', 'Ontario', 'Toronto', '173.252.83.6', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:41:51 pm', '2022-08-08 19:41:51', '2022-08-08 19:41:51'),
(38, 8, 'Canada', 'Ontario', 'Toronto', '173.252.87.117', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; U; Android 4.3; en-us; SM-N900T Build/JSS15J) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30', '08-08-2022 19:42:08 pm', '2022-08-08 19:42:08', '2022-08-08 19:42:08'),
(39, 7, 'Canada', 'Ontario', 'Toronto', '173.252.127.7', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 10; M2006C3LI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36', '08-08-2022 19:42:09 pm', '2022-08-08 19:42:09', '2022-08-08 19:42:09'),
(40, 7, 'Ireland', 'Leinster', 'Clonee', '31.13.127.21', '53.4117', '-6.4495', 'A86', 'Facebook, Inc.', 'Desktop', 'SAMSUNG-SM-B313E Opera/9.80 (J2ME/MIDP; Opera Mini/4.5.40318/191.273; U; en) Presto/2.12.423 Version/12.16', '08-08-2022 19:42:09 pm', '2022-08-08 19:42:09', '2022-08-08 19:42:09'),
(41, 9, 'France', 'Île-de-France', 'Paris', '31.13.115.120', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 10; M2006C3LI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36', '08-08-2022 19:42:09 pm', '2022-08-08 19:42:09', '2022-08-08 19:42:09'),
(42, 9, 'Ireland', 'Leinster', 'Clonee', '31.13.127.22', '53.4117', '-6.4495', 'A86', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '08-08-2022 19:42:09 pm', '2022-08-08 19:42:09', '2022-08-08 19:42:09'),
(43, 8, 'Ireland', 'Leinster', 'Clonee', '31.13.127.23', '53.4117', '-6.4495', 'A86', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '08-08-2022 19:42:12 pm', '2022-08-08 19:42:12', '2022-08-08 19:42:12'),
(44, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 19:42:28 pm', '2022-08-08 19:42:28', '2022-08-08 19:42:28'),
(45, 7, 'Canada', 'Ontario', 'Toronto', '173.252.107.18', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:40 pm', '2022-08-08 19:42:40', '2022-08-08 19:42:40'),
(46, 8, 'Canada', 'Ontario', 'Toronto', '173.252.107.117', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:46 pm', '2022-08-08 19:42:46', '2022-08-08 19:42:46'),
(47, 9, 'Ireland', 'Leinster', 'Clonee', '31.13.127.20', '53.4117', '-6.4495', 'A86', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:47 pm', '2022-08-08 19:42:47', '2022-08-08 19:42:47'),
(48, 7, 'France', 'Île-de-France', 'Paris', '31.13.103.119', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:48 pm', '2022-08-08 19:42:48', '2022-08-08 19:42:48'),
(49, 8, 'Ireland', 'Leinster', 'Clonee', '31.13.127.1', '53.4117', '-6.4495', 'A86', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:52 pm', '2022-08-08 19:42:52', '2022-08-08 19:42:52'),
(50, 9, 'Canada', 'Ontario', 'Toronto', '69.171.249.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36', '08-08-2022 19:42:55 pm', '2022-08-08 19:42:55', '2022-08-08 19:42:55'),
(51, 9, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 19:43:26 pm', '2022-08-08 19:43:26', '2022-08-08 19:43:26'),
(52, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 19:45:24 pm', '2022-08-08 19:45:24', '2022-08-08 19:45:24'),
(53, 7, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 19:47:43 pm', '2022-08-08 19:47:43', '2022-08-08 19:47:43'),
(54, 7, 'France', 'Île-de-France', 'Paris', '31.13.103.7', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:50:15 pm', '2022-08-08 19:50:15', '2022-08-08 19:50:15'),
(55, 9, 'France', 'Île-de-France', 'Paris', '31.13.103.24', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:50:15 pm', '2022-08-08 19:50:15', '2022-08-08 19:50:15'),
(56, 8, 'France', 'Île-de-France', 'Paris', '31.13.103.20', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:57:08 pm', '2022-08-08 19:57:08', '2022-08-08 19:57:08'),
(57, 8, 'France', 'Île-de-France', 'Paris', '31.13.103.14', '48.8566', '2.35222', '75000', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 19:57:12 pm', '2022-08-08 19:57:12', '2022-08-08 19:57:12'),
(58, 8, 'Canada', 'Ontario', 'Toronto', '173.252.95.119', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '08-08-2022 20:09:12 pm', '2022-08-08 20:09:12', '2022-08-08 20:09:12'),
(59, 7, 'Canada', 'Ontario', 'Toronto', '173.252.127.118', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'MOBILE', 'Mozilla/5.0 (Linux; Android 10; M2006C3LI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36', '08-08-2022 20:09:12 pm', '2022-08-08 20:09:12', '2022-08-08 20:09:12'),
(60, 9, 'Canada', 'Ontario', 'Toronto', '173.252.127.31', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '08-08-2022 20:09:13 pm', '2022-08-08 20:09:13', '2022-08-08 20:09:13'),
(61, 10, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '08-08-2022 20:18:40 pm', '2022-08-08 20:18:40', '2022-08-08 20:18:40'),
(62, 8, 'India', 'Maharashtra', 'Pune', '182.68.57.233', '18.6161', '73.7286', '411006', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '08-08-2022 22:16:54 pm', '2022-08-08 22:16:54', '2022-08-08 22:16:54'),
(63, 8, 'Canada', 'Ontario', 'Toronto', '69.171.249.20', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '08-08-2022 23:15:00 pm', '2022-08-08 23:15:00', '2022-08-08 23:15:00'),
(64, 8, 'Canada', 'Ontario', 'Toronto', '69.171.231.119', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 01:17:17 am', '2022-08-09 01:17:17', '2022-08-09 01:17:17'),
(65, 8, 'Canada', 'Ontario', 'Toronto', '173.252.127.30', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 03:21:52 am', '2022-08-09 03:21:52', '2022-08-09 03:21:52'),
(66, 8, 'Canada', 'Ontario', 'Toronto', '173.252.83.5', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 07:53:45 am', '2022-08-09 07:53:45', '2022-08-09 07:53:45'),
(67, 11, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '09-08-2022 14:30:58 pm', '2022-08-09 14:30:58', '2022-08-09 14:30:58'),
(68, 10, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '09-08-2022 14:32:43 pm', '2022-08-09 14:32:43', '2022-08-09 14:32:43'),
(69, 7, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '09-08-2022 14:34:21 pm', '2022-08-09 14:34:21', '2022-08-09 14:34:21'),
(70, 8, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '09-08-2022 14:46:09 pm', '2022-08-09 14:46:09', '2022-08-09 14:46:09'),
(71, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '09-08-2022 14:47:39 pm', '2022-08-09 14:47:39', '2022-08-09 14:47:39'),
(72, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '09-08-2022 14:51:42 pm', '2022-08-09 14:51:42', '2022-08-09 14:51:42'),
(73, 11, 'Canada', 'Ontario', 'Toronto', '69.63.184.5', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 14:57:15 pm', '2022-08-09 14:57:15', '2022-08-09 14:57:15'),
(74, 11, 'Canada', 'Ontario', 'Toronto', '69.63.184.2', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 14:57:17 pm', '2022-08-09 14:57:17', '2022-08-09 14:57:17'),
(75, 11, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '09-08-2022 14:59:02 pm', '2022-08-09 14:59:02', '2022-08-09 14:59:02'),
(76, 11, 'Canada', 'Ontario', 'Toronto', '69.63.184.4', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 15:00:46 pm', '2022-08-09 15:00:46', '2022-08-09 15:00:46'),
(77, 1, 'India', 'Maharashtra', 'Pune', '103.109.15.9', '18.6161', '73.7286', '411001', 'Grace Teleinfra Pvt Ltd', 'MOBILE', 'Mozilla/5.0 (Linux; Android 8.1.0; vivo 1726 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36 VivoBrowser/5.9.3.81', '09-08-2022 15:09:59 pm', '2022-08-09 15:09:59', '2022-08-09 15:09:59'),
(78, 1, 'India', 'Maharashtra', 'Pune', '27.57.254.112', '18.6161', '73.7286', '411038', 'Bharti Airtel', 'MOBILE', 'Mozilla/5.0 (Linux; Android 4.4.4; 2014818) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36', '09-08-2022 16:22:57 pm', '2022-08-09 16:22:57', '2022-08-09 16:22:57'),
(79, 8, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '09-08-2022 16:24:25 pm', '2022-08-09 16:24:25', '2022-08-09 16:24:25'),
(80, 7, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '09-08-2022 16:24:31 pm', '2022-08-09 16:24:31', '2022-08-09 16:24:31'),
(81, 9, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '09-08-2022 16:24:46 pm', '2022-08-09 16:24:46', '2022-08-09 16:24:46'),
(82, 8, 'Canada', 'Ontario', 'Toronto', '69.171.251.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '09-08-2022 16:26:54 pm', '2022-08-09 16:26:54', '2022-08-09 16:26:54'),
(83, 12, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'MOBILE', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '09-08-2022 17:02:02 pm', '2022-08-09 17:02:02', '2022-08-09 17:02:02'),
(84, 12, 'India', 'Maharashtra', 'Pune', '114.29.234.46', '18.6161', '73.7286', '411030', 'Global (India) Tele-Infra Pvt Ltd', 'MOBILE', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '09-08-2022 17:08:00 pm', '2022-08-09 17:08:00', '2022-08-09 17:08:00'),
(85, 12, 'India', 'Karnataka', 'Bengaluru', '122.171.18.210', '12.9634', '77.5855', '560001', 'BHARTI', 'MOBILE', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1', '09-08-2022 19:35:41 pm', '2022-08-09 19:35:41', '2022-08-09 19:35:41'),
(86, 12, 'India', 'Maharashtra', 'Navi Mumbai', '49.35.147.130', '19.1266', '73.0136', '400701', 'Reliance Jio Infocomm Limited', 'MOBILE', 'Mozilla/5.0 (Linux; Android 12; SM-F926B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '09-08-2022 20:51:31 pm', '2022-08-09 20:51:31', '2022-08-09 20:51:31'),
(87, 9, 'India', 'Tamil Nadu', 'Chennai', '49.205.80.155', '12.8996', '80.2209', '600002', 'ACT-Chennai', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; SM-M127G Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '09-08-2022 22:08:29 pm', '2022-08-09 22:08:29', '2022-08-09 22:08:29'),
(88, 8, 'Canada', 'Ontario', 'Toronto', '173.252.111.17', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '10-08-2022 14:18:29 pm', '2022-08-10 14:18:29', '2022-08-10 14:18:29'),
(89, 5, 'India', 'Karnataka', 'Bengaluru', '223.226.89.163', '12.9634', '77.5855', '560001', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '11-08-2022 07:06:39 am', '2022-08-11 07:06:40', '2022-08-11 07:06:40'),
(90, 5, 'India', 'Karnataka', 'Bengaluru', '223.226.89.163', '12.9634', '77.5855', '560001', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '11-08-2022 07:06:56 am', '2022-08-11 07:06:56', '2022-08-11 07:06:56'),
(91, 5, 'India', 'Karnataka', 'Bengaluru', '223.226.89.163', '12.9634', '77.5855', '560001', 'Bharti Airtel', 'Desktop', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', '11-08-2022 07:07:15 am', '2022-08-11 07:07:15', '2022-08-11 07:07:15'),
(92, 8, 'India', 'Maharashtra', 'Mumbai', '45.114.248.220', '19.0748', '72.8856', '400070', 'Chandika Cable Network', 'MOBILE', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19G71 [FBAN/FBIOS;FBDV/iPhone9,4;FBMD/iPhone;FBSN/iOS;FBSV/15.6;FBSS/3;FBID/phone;FBLC/en_GB;FBOP/5]', '11-08-2022 09:31:19 am', '2022-08-11 09:31:19', '2022-08-11 09:31:19'),
(93, 7, 'India', 'Tamil Nadu', 'Erode', '117.221.136.122', '11.3458', '77.7334', '638009', 'BSNL Internet', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; SM-A107F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '11-08-2022 20:46:23 pm', '2022-08-11 20:46:23', '2022-08-11 20:46:23'),
(94, 9, 'India', 'Tamil Nadu', 'Erode', '117.221.136.122', '11.3458', '77.7334', '638009', 'BSNL Internet', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; SM-A107F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '11-08-2022 20:47:23 pm', '2022-08-11 20:47:23', '2022-08-11 20:47:23'),
(95, 9, 'India', 'Tamil Nadu', 'Erode', '117.221.136.122', '11.3458', '77.7334', '638009', 'BSNL Internet', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; SM-A107F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '11-08-2022 20:48:01 pm', '2022-08-11 20:48:01', '2022-08-11 20:48:01'),
(96, 7, 'India', 'Tamil Nadu', 'Chennai', '103.28.246.109', '12.8996', '80.2209', '600008', 'RailTel Corporation', 'MOBILE', 'Mozilla/5.0 (Linux; Android 10; SM-F415F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '11-08-2022 22:03:53 pm', '2022-08-11 22:03:53', '2022-08-11 22:03:53'),
(97, 8, 'Canada', 'Ontario', 'Toronto', '66.220.149.116', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '13-08-2022 08:28:16 am', '2022-08-13 08:28:16', '2022-08-13 08:28:16'),
(98, 8, 'Canada', 'Ontario', 'Toronto', '66.220.149.15', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '13-08-2022 08:28:20 am', '2022-08-13 08:28:20', '2022-08-13 08:28:20'),
(99, 7, 'India', 'Kerala', 'Kochi', '27.62.70.209', '9.9185', '76.2558', '682507', 'Bharti Airtel', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; IV2201 Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.71 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/374.0.0.20.109;]', '13-08-2022 09:37:44 am', '2022-08-13 09:37:44', '2022-08-13 09:37:44'),
(100, 7, 'India', 'Tamil Nadu', 'Chennai', '157.49.253.110', '12.8996', '80.2209', '600001', 'Reliance Jio Infocomm Limited', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; SM-A705FN Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.69 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/378.0.0.18.112;]', '13-08-2022 22:40:05 pm', '2022-08-13 22:40:05', '2022-08-13 22:40:05'),
(101, 8, 'India', 'Tamil Nadu', 'Chennai', '171.76.57.58', '12.8996', '80.2209', '600039', 'Bharti Airtel Limited', 'MOBILE', 'Mozilla/5.0 (Linux; Android 11; M2007J20CI Build/RKQ1.200826.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/379.0.0.24.109;]', '14-08-2022 14:42:26 pm', '2022-08-14 14:42:26', '2022-08-14 14:42:26'),
(102, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '15-08-2022 09:17:04 am', '2022-08-15 09:17:04', '2022-08-15 09:17:04'),
(103, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.23', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '15-08-2022 09:17:04 am', '2022-08-15 09:17:04', '2022-08-15 09:17:04'),
(104, 9, 'Canada', 'Ontario', 'Toronto', '173.252.83.19', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '15-08-2022 09:17:07 am', '2022-08-15 09:17:07', '2022-08-15 09:17:07'),
(105, 7, 'Canada', 'Ontario', 'Toronto', '173.252.83.10', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '15-08-2022 09:17:08 am', '2022-08-15 09:17:08', '2022-08-15 09:17:08'),
(106, 11, 'Canada', 'Ontario', 'Toronto', '66.220.149.22', '43.6532', '-79.3832', 'M5A', 'Facebook, Inc.', 'Desktop', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '16-08-2022 14:49:06 pm', '2022-08-16 14:49:06', '2022-08-16 14:49:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productnames`
--
ALTER TABLE `productnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protalnames`
--
ALTER TABLE `protalnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorinfos`
--
ALTER TABLE `visitorinfos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productnames`
--
ALTER TABLE `productnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `protalnames`
--
ALTER TABLE `protalnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitorinfos`
--
ALTER TABLE `visitorinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
