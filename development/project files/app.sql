-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 12:31 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveyapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('timschachtschabel14@gmail.com', '$2y$10$pISyHsOzv8BoYZwEVtzm9uisGvoUs.nuqZQ/DEiFJDXYG.h6y9H/a', '2018-05-25 07:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` int(11) NOT NULL,
  `setup` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mails`
--

CREATE TABLE `tbl_mails` (
  `id` int(11) NOT NULL,
  `mail` text,
  `phone` varchar(255) DEFAULT NULL,
  `opinion` int(11) DEFAULT NULL,
  `done` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mails`
--

INSERT INTO `tbl_mails` (`id`, `mail`, `phone`, `opinion`, `done`, `created_at`, `updated_at`) VALUES
(33, 'd214466@edu.rocwb.nl', NULL, NULL, 0, '2018-05-25 06:53:13', '2018-05-25 06:53:13'),
(34, 'zeersnelleplanga@rocwb.nl', NULL, NULL, 0, '2018-05-25 09:58:53', '2018-05-25 09:58:53'),
(35, 'timschachtschabel@hotmail.com', NULL, NULL, 0, '2018-05-25 09:59:06', '2018-05-25 09:59:06'),
(36, 'timschachtschabel14@gmail.com', NULL, NULL, 0, '2018-05-25 09:59:15', '2018-05-25 09:59:15'),
(37, 'd22222@rocwb.nl', NULL, NULL, 0, '2018-05-25 09:59:21', '2018-05-25 09:59:21'),
(38, NULL, '06223420242', NULL, 0, '2018-05-25 09:59:29', '2018-05-25 09:59:29'),
(39, NULL, '0162687322', NULL, 0, '2018-05-25 09:59:37', '2018-05-25 09:59:37'),
(40, NULL, '0162484848', NULL, 0, '2018-05-25 09:59:45', '2018-05-25 09:59:45'),
(41, 'tim@tim.nl', '03243242', NULL, 0, '2018-05-25 09:59:59', '2018-05-25 09:59:59'),
(42, 'kevinfikke@gmail.com', '324324252', NULL, 0, '2018-05-25 10:00:31', '2018-05-25 10:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opinions`
--

CREATE TABLE `tbl_opinions` (
  `id` int(11) NOT NULL,
  `option` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_opinions`
--

INSERT INTO `tbl_opinions` (`id`, `option`, `created_at`, `updated_at`) VALUES
(11, 1, '2018-05-21 07:29:50', '2018-05-14 07:29:50'),
(12, 2, '2018-05-14 07:29:51', '2018-05-14 07:29:51'),
(13, 1, '2018-05-21 07:50:29', '2018-05-14 07:50:29'),
(14, 1, '2018-05-14 08:10:48', '2018-05-14 08:10:48'),
(15, 1, '2018-05-14 10:15:50', '2018-05-14 10:15:50'),
(16, 1, '2018-05-15 10:32:07', '2018-05-14 10:32:07'),
(17, 3, '2018-05-15 06:06:28', '2018-05-15 06:06:28'),
(18, 1, '2018-05-15 06:06:29', '2018-05-15 06:06:29'),
(19, 2, '2018-05-15 06:06:30', '2018-05-15 06:06:30'),
(20, 3, '2018-05-15 06:06:32', '2018-05-15 06:06:32'),
(21, 2, '2018-05-15 09:15:05', '2018-05-15 09:15:05'),
(22, 2, '2018-05-15 09:15:06', '2018-05-15 09:15:06'),
(23, 2, '2018-05-15 09:15:06', '2018-05-15 09:15:06'),
(24, 2, '2018-05-15 09:15:06', '2018-05-15 09:15:06'),
(25, 2, '2018-05-15 09:15:06', '2018-05-15 09:15:06'),
(26, 2, '2018-05-15 09:15:07', '2018-05-15 09:15:07'),
(27, 2, '2018-05-15 09:15:07', '2018-05-15 09:15:07'),
(28, 2, '2018-05-15 09:15:08', '2018-05-15 09:15:08'),
(29, 2, '2018-05-15 09:15:09', '2018-05-15 09:15:09'),
(30, 2, '2018-05-15 09:15:10', '2018-05-15 09:15:10'),
(31, 3, '2018-05-15 09:27:04', '2018-05-15 09:27:04'),
(32, 1, '2018-05-15 09:27:05', '2018-05-15 09:27:05'),
(33, 3, '2018-05-15 09:27:07', '2018-05-15 09:27:07'),
(34, 1, '2018-05-15 09:27:08', '2018-05-15 09:27:08'),
(35, 3, '2018-05-15 09:27:09', '2018-05-15 09:27:09'),
(36, 3, '2018-05-15 09:45:58', '2018-05-15 09:45:58'),
(37, 1, '2018-05-15 09:46:00', '2018-05-15 09:46:00'),
(38, 2, '2018-05-15 09:46:01', '2018-05-15 09:46:01'),
(39, 2, '2018-05-16 05:13:07', '2018-05-16 05:13:07'),
(40, 3, '2018-05-16 05:13:08', '2018-05-16 05:13:08'),
(41, 1, '2018-05-16 05:13:09', '2018-05-16 05:13:09'),
(42, 1, '2018-05-16 05:13:10', '2018-05-16 05:13:10'),
(43, 3, '2018-05-16 05:13:12', '2018-05-16 05:13:12'),
(44, 3, '2018-05-16 05:23:03', '2018-05-16 05:23:03'),
(45, 3, '2018-05-16 07:34:06', '2018-05-16 07:34:06'),
(46, 1, '2018-05-16 07:34:07', '2018-05-16 07:34:07'),
(47, 2, '2018-05-16 07:34:09', '2018-05-16 07:34:09'),
(48, 3, '2018-05-16 13:45:47', '2018-05-16 13:45:47'),
(49, 2, '2018-05-23 09:14:43', '2018-05-23 09:14:43'),
(50, 1, '2018-05-23 09:14:45', '2018-05-23 09:14:45'),
(51, 3, '2018-05-23 09:14:46', '2018-05-23 09:14:46'),
(52, 2, '2018-05-23 09:14:48', '2018-05-23 09:14:48'),
(53, 1, '2018-05-23 09:14:49', '2018-05-23 09:14:49'),
(54, 3, '2018-05-23 09:14:51', '2018-05-23 09:14:51'),
(55, 3, '2018-05-23 09:14:52', '2018-05-23 09:14:52'),
(56, 1, '2018-05-23 09:14:53', '2018-05-23 09:14:53'),
(57, 1, '2018-05-23 09:14:54', '2018-05-23 09:14:54'),
(58, 2, '2018-05-23 09:14:55', '2018-05-23 09:14:55'),
(59, 2, '2018-05-23 09:14:56', '2018-05-23 09:14:56'),
(60, 2, '2018-05-23 09:14:57', '2018-05-23 09:14:57'),
(61, 2, '2018-05-23 09:14:58', '2018-05-23 09:14:58'),
(62, 2, '2018-05-23 09:14:59', '2018-05-23 09:14:59'),
(63, 3, '2018-05-23 09:15:00', '2018-05-23 09:15:00'),
(64, 2, '2018-05-23 10:16:34', '2018-05-23 10:16:34'),
(65, 1, '2018-05-23 10:27:48', '2018-05-23 10:27:48'),
(66, 2, '2018-05-23 11:09:22', '2018-05-23 11:09:22'),
(67, 3, '2018-05-23 11:09:27', '2018-05-23 11:09:27'),
(68, 1, '2018-05-23 11:09:33', '2018-05-23 11:09:33'),
(69, 2, '2018-05-23 11:10:15', '2018-05-23 11:10:15'),
(70, 2, '2018-05-24 05:24:40', '2018-05-24 05:24:40'),
(71, 1, '2018-05-24 05:24:43', '2018-05-24 05:24:43'),
(72, 1, '2018-05-24 05:45:26', '2018-05-24 05:45:26'),
(73, 3, '2018-05-25 05:21:39', '2018-05-25 05:21:39'),
(74, 1, '2018-05-25 06:50:47', '2018-05-25 06:50:47'),
(75, 3, '2018-05-25 09:56:22', '2018-05-25 09:56:22'),
(76, 2, '2018-05-25 09:56:22', '2018-05-25 09:56:22'),
(77, 2, '2018-05-25 09:56:23', '2018-05-25 09:56:23'),
(78, 3, '2018-05-25 09:56:23', '2018-05-25 09:56:23'),
(79, 2, '2018-05-25 09:56:23', '2018-05-25 09:56:23'),
(80, 1, '2018-05-25 09:56:23', '2018-05-25 09:56:23'),
(81, 2, '2018-05-25 09:56:25', '2018-05-25 09:56:25'),
(82, 1, '2018-05-25 09:56:26', '2018-05-25 09:56:26'),
(83, 3, '2018-05-25 09:56:27', '2018-05-25 09:56:27'),
(84, 1, '2018-05-25 09:56:29', '2018-05-25 09:56:29'),
(85, 2, '2018-05-25 09:56:30', '2018-05-25 09:56:30'),
(86, 1, '2018-05-25 09:56:32', '2018-05-25 09:56:32'),
(87, 3, '2018-05-25 09:56:33', '2018-05-25 09:56:33'),
(88, 3, '2018-05-25 09:56:34', '2018-05-25 09:56:34'),
(89, 3, '2018-05-25 09:56:36', '2018-05-25 09:56:36'),
(90, 1, '2018-05-25 09:56:37', '2018-05-25 09:56:37'),
(91, 1, '2018-05-25 09:56:38', '2018-05-25 09:56:38'),
(92, 2, '2018-05-25 09:56:40', '2018-05-25 09:56:40'),
(93, 1, '2018-05-25 09:56:41', '2018-05-25 09:56:41'),
(94, 3, '2018-05-25 09:56:42', '2018-05-25 09:56:42'),
(95, 1, '2018-05-25 09:56:44', '2018-05-25 09:56:44'),
(96, 2, '2018-05-25 09:56:45', '2018-05-25 09:56:45'),
(97, 3, '2018-05-25 09:56:47', '2018-05-25 09:56:47'),
(98, 1, '2018-05-25 09:56:48', '2018-05-25 09:56:48'),
(99, 2, '2018-05-25 09:56:49', '2018-05-25 09:56:49'),
(100, 3, '2018-05-25 09:56:51', '2018-05-25 09:56:51'),
(101, 3, '2018-05-25 09:56:52', '2018-05-25 09:56:52'),
(102, 2, '2018-05-25 09:56:53', '2018-05-25 09:56:53'),
(103, 2, '2018-05-25 09:56:55', '2018-05-25 09:56:55'),
(104, 2, '2018-05-25 09:56:56', '2018-05-25 09:56:56'),
(105, 2, '2018-05-25 09:56:57', '2018-05-25 09:56:57'),
(106, 2, '2018-05-25 09:56:59', '2018-05-25 09:56:59'),
(107, 1, '2018-05-25 09:57:00', '2018-05-25 09:57:00'),
(108, 1, '2018-05-25 09:57:01', '2018-05-25 09:57:01'),
(109, 1, '2018-05-25 09:57:02', '2018-05-25 09:57:02'),
(110, 3, '2018-05-25 09:57:04', '2018-05-25 09:57:04'),
(111, 2, '2018-05-25 09:57:06', '2018-05-25 09:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'tim', 'tim@tim.nl', '$2y$10$w4PxhHBLJq8GLrwOnmi/hOgRT84VKsXhy53a5QOAcrWgMl5cYC.6S', 'tW2WqNYFDKCKFKno9w5ts74i6oErerfj4gDb9MMe4APNront8NG5eBE7JBJ7', '2018-05-08 13:08:02', '2018-05-08 13:08:02'),
(3, 'tim', 'timschachtschabel14@gmail.com', '$2y$10$wwKyLlYLFp.5VSh.xRMtf.NkxjjVAgtO.TqhhVeuo0zP.dIfK7fPC', '6qqwljVUcuVEfMKoTkI1is3nGeJPANFsAy6gYgaE73JJ818oEHCKdVWfyGlG', '2018-05-25 07:05:56', '2018-05-25 07:05:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mails`
--
ALTER TABLE `tbl_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_opinions`
--
ALTER TABLE `tbl_opinions`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mails`
--
ALTER TABLE `tbl_mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_opinions`
--
ALTER TABLE `tbl_opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
