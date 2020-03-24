-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 03:14 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_experience_min` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_experience_max` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_min_salary` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_max_salary` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `min_job_degree_level` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `max_job_degree_level` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_location` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_company_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_company_website` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_category_id_fk` bigint(20) UNSIGNED NOT NULL,
  `job_subcategory_id_fk` bigint(20) UNSIGNED NOT NULL,
  `job_type_id_fk` bigint(20) UNSIGNED NOT NULL,
  `job_post_status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_post_user_id_fk` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_email`, `job_title`, `job_description`, `job_experience_min`, `job_experience_max`, `job_min_salary`, `job_max_salary`, `min_job_degree_level`, `max_job_degree_level`, `job_location`, `job_company_name`, `job_company_website`, `job_category_id_fk`, `job_subcategory_id_fk`, `job_type_id_fk`, `job_post_status`, `job_post_user_id_fk`, `created_at`, `updated_at`) VALUES
(1, 'manan@gmail.com', 'Web developer/Laravel', 'About Job\r\n                                            hjhjkhsdkjfhkjdshjhj', '1 year', '2 year', '12000', '25000', 'Bsc', 'Master', 'Lahore', 'Xpert Coders', 'www.xpertcoders.com', 1, 1, 1, '112', '3', '2020-03-06 08:38:22', '2020-03-06 08:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_apply_username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_apply_email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_apply_phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_apply_attachment` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_apply_experience` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_apply_extra_info` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_id_fk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_category_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `job_category_name`, `created_at`, `updated_at`) VALUES
(1, 'Web', '2020-03-06 05:42:10', '2020-03-06 05:42:10'),
(2, 'Graphic Designer', '2020-03-06 05:42:33', '2020-03-06 05:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_subcategories`
--

CREATE TABLE `job_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_subcategory_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `job_category_id_fk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_subcategories`
--

INSERT INTO `job_subcategories` (`id`, `job_subcategory_name`, `job_category_id_fk`, `created_at`, `updated_at`) VALUES
(1, 'adobe photoshop', 2, '2020-03-06 05:42:46', '2020-03-06 05:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_type_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `job_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', NULL, NULL),
(2, 'Half Time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_02_28_125327_create_user_type_table', 1),
(3, '2020_02_28_125530_create_job_type_table', 1),
(4, '2020_02_28_125706_create_job_categories_table', 1),
(5, '2020_02_28_125905_create_job_subcategories_table', 1),
(6, '2020_02_28_130345_create_users_table', 1),
(7, '2020_02_28_130532_create_jobs_table', 1),
(8, '2020_02_28_130647_create_job_apply_table', 1),
(9, '2020_03_05_134932_create_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_names` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status_codes` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_names`, `status_codes`, `created_at`, `updated_at`) VALUES
(1, 'pending', '112', NULL, NULL),
(2, 'approved', '113', NULL, NULL),
(3, 'cancel', '114', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_type_id_fk` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_phone`, `password`, `user_type_id_fk`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'buttzohaib46', 'zohaib.xpertcoders@gmail.com', '03164774149', '$2y$10$3Jy.INPHrkB.HF15wewRYODOwABR3fTT5pA/.JOiTD8olocYr.wgW', 1, '112', NULL, '2020-03-05 09:03:10', '2020-03-05 09:03:10'),
(3, 'manan', 'manan@gmail.com', '03084000186', '$2y$10$5hjymfkMQWT.x0TwPUYDn.rN72rOUHfaz2mgidX08jZ/a3BtwvbD2', 3, '113', NULL, '2020-03-06 05:40:09', '2020-03-06 06:36:43'),
(4, 'adeel', 'admin@gmail.com', '03004704770', '$2y$10$Y.cTkaWrOv45RYnHGvPtO.QXxLtu.bVek17/KAOPEZOx7lNvMJHVC', 2, '112', NULL, '2020-03-06 06:07:52', '2020-03-06 06:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'job seeker', NULL, NULL),
(3, 'employer', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_job_category_id_fk_foreign` (`job_category_id_fk`),
  ADD KEY `jobs_job_subcategory_id_fk_foreign` (`job_subcategory_id_fk`),
  ADD KEY `jobs_job_type_id_fk_foreign` (`job_type_id_fk`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_apply_job_id_fk_foreign` (`job_id_fk`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_subcategories_job_category_id_fk_foreign` (`job_category_id_fk`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_type_id_fk_foreign` (`user_type_id_fk`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_job_category_id_fk_foreign` FOREIGN KEY (`job_category_id_fk`) REFERENCES `job_categories` (`id`),
  ADD CONSTRAINT `jobs_job_subcategory_id_fk_foreign` FOREIGN KEY (`job_subcategory_id_fk`) REFERENCES `job_subcategories` (`id`),
  ADD CONSTRAINT `jobs_job_type_id_fk_foreign` FOREIGN KEY (`job_type_id_fk`) REFERENCES `job_type` (`id`);

--
-- Constraints for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD CONSTRAINT `job_apply_job_id_fk_foreign` FOREIGN KEY (`job_id_fk`) REFERENCES `jobs` (`id`);

--
-- Constraints for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  ADD CONSTRAINT `job_subcategories_job_category_id_fk_foreign` FOREIGN KEY (`job_category_id_fk`) REFERENCES `job_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_type_id_fk_foreign` FOREIGN KEY (`user_type_id_fk`) REFERENCES `user_type` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
