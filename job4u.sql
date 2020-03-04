-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 06:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_experience_min` varchar(255) NOT NULL,
  `job_experience_max` varchar(255) NOT NULL,
  `job_min_salary` varchar(255) NOT NULL,
  `job_max_salary` varchar(255) NOT NULL,
  `min_job_degree_level` varchar(255) NOT NULL,
  `max_job_degree_level` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_company_name` varchar(255) NOT NULL,
  `job_company_website` varchar(255) NOT NULL,
  `job_category_id_fk` int(11) NOT NULL,
  `job_subcategory_id_fk` int(11) NOT NULL,
  `job_type_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_description`, `job_experience_min`, `job_experience_max`, `job_min_salary`, `job_max_salary`, `min_job_degree_level`, `max_job_degree_level`, `job_location`, `job_company_name`, `job_company_website`, `job_category_id_fk`, `job_subcategory_id_fk`, `job_type_id_fk`) VALUES
(1, 'Computer Operator', 'Lorem Epsem', '1year', '2year', '15000', '30000', 'Inter', 'MS', 'Lahore', 'Job4u', 'www.job4u.com', 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `job_apply_id` int(11) NOT NULL,
  `job_apply_username` varchar(255) NOT NULL,
  `job_apply_email` varchar(255) NOT NULL,
  `job_apply_phone` varchar(255) NOT NULL,
  `job_apply_attachment` varchar(255) NOT NULL,
  `job_apply_experience` varchar(255) NOT NULL,
  `job_apply_extra_info` varchar(255) NOT NULL,
  `job_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `job_category_id` int(11) NOT NULL,
  `job_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`job_category_id`, `job_category_name`) VALUES
(1, 'IT'),
(2, 'Banking');

-- --------------------------------------------------------

--
-- Table structure for table `job_subcategories`
--

CREATE TABLE `job_subcategories` (
  `job_subcategory_id` int(11) NOT NULL,
  `job_subcategory_name` varchar(255) NOT NULL,
  `job_category_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_subcategories`
--

INSERT INTO `job_subcategories` (`job_subcategory_id`, `job_subcategory_name`, `job_category_id_fk`) VALUES
(1, 'Graphic Designing', 1),
(2, 'Digital Marketing(SEO)', 1),
(3, 'Data Entry', 2),
(4, 'HR Manager', 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `job_type_id` int(11) NOT NULL,
  `job_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`job_type_id`, `job_type_name`) VALUES
(1, 'Part Time'),
(2, 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `Jobs_fk0` (`job_category_id_fk`),
  ADD KEY `Jobs_fk1` (`job_subcategory_id_fk`),
  ADD KEY `Jobs_fk2` (`job_type_id_fk`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`job_apply_id`),
  ADD KEY `Job_Apply_fk0` (`job_id_fk`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`job_category_id`);

--
-- Indexes for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  ADD PRIMARY KEY (`job_subcategory_id`),
  ADD KEY `Job_SubCategories_fk0` (`job_category_id_fk`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`job_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `Users_fk0` (`user_type_id_fk`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `job_apply_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `job_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  MODIFY `job_subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `Jobs_fk0` FOREIGN KEY (`job_category_id_fk`) REFERENCES `job_categories` (`job_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Jobs_fk1` FOREIGN KEY (`job_subcategory_id_fk`) REFERENCES `job_subcategories` (`job_subcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Jobs_fk2` FOREIGN KEY (`job_type_id_fk`) REFERENCES `job_type` (`job_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD CONSTRAINT `Job_Apply_fk0` FOREIGN KEY (`job_id_fk`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
  ADD CONSTRAINT `Job_SubCategories_fk0` FOREIGN KEY (`job_category_id_fk`) REFERENCES `job_categories` (`job_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`user_type_id_fk`) REFERENCES `user_type` (`user_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
