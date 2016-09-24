-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2016 at 02:29 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

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
  `mobile_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email_id`, `address`, `sender_id`, `date_of_creation`, `sms_count`, `active`, `mobile_number`) VALUES
(1, 'vani vidyalaya', 'szdfjasd', 'asudahakr@live.in', 'vattur mettupalayam', 'vvmhss', '2016-09-16 08:02:13', 10000, 'true', 9842972047),
(5, 'rubak', 'ezrubak', 'rubaktechie@gmail.com', 'Sankagiri', 'erubak', '2016-09-16 08:29:17', 10000, 'true', 8940698743),
(6, 'rubaktechie', 'ezrubak', 'ezrubak@gmail.com', 'Sankagiri', 'EZHRUB', '2016-09-16 08:30:37', 10000, 'true', 8940698743),
(7, 'Gautham', 'gautham', 'gauthamrg@gmail.com', 'Sankagiri', 'gautam', '2016-09-16 08:50:33', 10000, 'true', 8695806252),
(8, 'Gautham', 'gauthma', 'gauthamrgramaingsam@gmail.com', 'Sankagiri', 'gautam', '2016-09-16 08:52:15', 10000, 'true', 8695806252);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `sms_count`
--
ALTER TABLE `sms_count`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
