-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 08:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(255) NOT NULL,
  `addon_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `addon_type` varchar(255) NOT NULL,
  `path_type` varchar(1000) NOT NULL,
  `pricing` int(11) NOT NULL,
  `picture_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `addon_name`, `path`, `addon_type`, `path_type`, `pricing`, `picture_path`) VALUES
(1, 'Single SMS', 'single_sms.php', 'default', 'primary', 0, ''),
(2, 'Bulk SMS', 'text_upload.php', 'default', 'primary', 0, ''),
(4, 'Variable Sms', 'bulk_sms.php', 'paid', 'primary', 0, '../img/vm.jpg'),
(5, 'Todays Report', 'dlr_report.php', 'default', 'primary', 0, ''),
(6, 'Sms History', 'sms_history.php', 'default', 'primary', 0, ''),
(7, 'REST API', 'rest_api.php', 'paid', 'primary', 0, '../img/ra.jpg'),
(8, 'My Details', 'my_details.php', 'default', 'primary', 0, ''),
(9, 'Addons', 'add_on.php', 'default', 'primary', 0, ''),
(10, 'error', 'error.php', 'default', 'primary', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `addon_requests`
--

CREATE TABLE `addon_requests` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `addon_id` int(255) NOT NULL,
  `date_of_approved` int(255) NOT NULL,
  `validity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms_count`
--

CREATE TABLE `sms_count` (
  `id` int(255) NOT NULL,
  `unicode` int(255) NOT NULL,
  `normal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_count`
--

INSERT INTO `sms_count` (`id`, `unicode`, `normal`) VALUES
(1, 70, 160),
(2, 134, 306),
(3, 201, 459),
(4, 268, 612),
(5, 335, 765),
(6, 402, 918),
(7, 469, 1071),
(8, 536, 1224);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sender_id` varchar(2550) NOT NULL,
  `date_of_creation` datetime NOT NULL,
  `sms_count` bigint(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `addons` varchar(255) NOT NULL,
  `sms_db_credentials_normal` varchar(1000) NOT NULL,
  `sms_db_credentials_unicode` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addon_requests`
--
ALTER TABLE `addon_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_count`
--
ALTER TABLE `sms_count`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unicode` (`unicode`),
  ADD UNIQUE KEY `normal` (`normal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `addon_requests`
--
ALTER TABLE `addon_requests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms_count`
--
ALTER TABLE `sms_count`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
