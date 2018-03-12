-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 03:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atten_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_attendance`
--

CREATE TABLE `daily_attendance` (
  `daily_id` int(32) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `daily_due` int(11) DEFAULT NULL,
  `check_in` time NOT NULL DEFAULT '00:00:00',
  `check_out` time NOT NULL DEFAULT '00:00:00',
  `short_hrs` time DEFAULT NULL,
  `daily_hours` time DEFAULT NULL,
  `daily_date` date DEFAULT NULL,
  `attend_in` int(11) DEFAULT '0',
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Check In Check Out ';

--
-- Dumping data for table `daily_attendance`
--

INSERT INTO `daily_attendance` (`daily_id`, `user_id`, `daily_due`, `check_in`, `check_out`, `short_hrs`, `daily_hours`, `daily_date`, `attend_in`, `comments`) VALUES
(5, NULL, NULL, '15:56:01', '00:00:00', NULL, NULL, '2017-12-19', 0, NULL),
(6, NULL, NULL, '16:53:48', '00:00:00', NULL, NULL, '2017-12-19', 1, NULL),
(7, NULL, NULL, '14:18:04', '00:00:00', NULL, NULL, '2017-12-27', 1, NULL),
(8, NULL, NULL, '14:18:23', '00:00:00', NULL, NULL, '2017-12-27', 1, NULL),
(17, 19, NULL, '20:05:57', '20:06:42', NULL, NULL, '2017-12-27', 0, NULL),
(18, 19, NULL, '20:06:11', '20:06:42', NULL, NULL, '2017-12-27', 0, NULL),
(19, 19, NULL, '20:06:28', '20:06:42', NULL, NULL, '2017-12-27', 0, NULL),
(20, 19, NULL, '11:58:18', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(21, 19, NULL, '11:59:53', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(22, 19, NULL, '11:59:59', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(23, 19, NULL, '12:00:59', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(24, 19, NULL, '12:04:51', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(25, 19, NULL, '12:04:53', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(49, 19, NULL, '15:02:42', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(50, 19, NULL, '15:51:29', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(51, 2, NULL, '16:58:34', '17:05:17', NULL, NULL, '2017-12-28', 0, NULL),
(52, 19, NULL, '17:04:10', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(53, 19, NULL, '17:04:49', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(54, 19, NULL, '17:06:20', '17:07:09', NULL, NULL, '2017-12-28', 0, NULL),
(55, 19, NULL, '17:08:38', '00:00:00', NULL, NULL, '2017-12-28', 0, NULL),
(56, 19, NULL, '17:20:35', '00:00:00', NULL, NULL, '2017-12-28', 0, NULL),
(57, 19, NULL, '17:24:18', '00:00:00', NULL, NULL, '2017-12-28', 0, NULL),
(58, 19, NULL, '17:24:22', '00:00:00', NULL, NULL, '2017-12-28', 0, NULL),
(59, 19, NULL, '17:29:02', '00:00:00', NULL, NULL, '2017-12-28', 0, NULL),
(60, 19, NULL, '17:29:50', '17:42:14', NULL, '00:12:00', '2017-12-28', 0, NULL),
(61, 19, NULL, '17:57:23', '18:37:19', NULL, '00:39:00', '2017-12-28', 0, NULL),
(62, 19, NULL, '19:03:41', '19:04:13', NULL, '00:00:00', '2017-12-28', 0, NULL),
(63, 19, NULL, '19:04:24', '19:07:05', NULL, '00:02:00', '2017-12-28', 0, NULL),
(64, 19, NULL, '15:01:56', '15:18:21', NULL, '00:16:00', '2017-12-29', 0, NULL),
(65, 19, 0, '15:32:35', '15:33:43', NULL, '00:01:00', '2017-12-29', 0, NULL),
(66, 19, NULL, '15:33:59', '00:00:00', NULL, NULL, '2017-12-29', 0, NULL),
(67, 19, NULL, '15:36:35', '00:00:00', NULL, NULL, '2017-12-29', 0, NULL),
(68, 19, NULL, '15:38:41', '00:00:00', NULL, NULL, '2017-12-29', 0, NULL),
(69, 19, 9, '15:39:05', '15:43:41', NULL, '00:00:00', '2017-12-29', 0, NULL),
(70, 19, 9, '15:43:06', '15:43:41', NULL, '00:00:00', '2017-12-29', 0, NULL),
(71, 19, 9, '15:43:13', '15:43:41', NULL, '00:00:00', '2017-12-29', 0, NULL),
(72, 19, 9, '15:43:30', '15:43:41', NULL, '00:00:00', '2017-12-29', 0, NULL),
(73, 19, 9, '15:47:39', '17:07:12', NULL, '01:19:00', '2017-12-29', 0, NULL),
(74, 19, 9, '15:06:04', '16:20:19', NULL, '01:14:00', '2018-01-01', 0, NULL),
(75, 19, NULL, '16:55:41', '00:00:00', NULL, NULL, '2018-01-01', 0, NULL),
(76, 19, 9, '14:31:49', '14:31:50', NULL, '00:00:00', '2018-01-02', 0, NULL),
(77, 19, 9, '16:48:04', '18:29:22', NULL, '01:41:00', '2018-01-02', 0, NULL),
(78, 19, NULL, '12:38:28', '00:00:00', NULL, NULL, '2018-01-04', 1, NULL),
(79, 19, NULL, '12:38:46', '00:00:00', NULL, NULL, '2018-01-04', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `users_password` varchar(255) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `cal_as_per` int(11) DEFAULT NULL,
  `hours_due` int(11) DEFAULT NULL,
  `day_starttime` time NOT NULL,
  `grace_time` time DEFAULT NULL,
  `monthly_salary` float DEFAULT NULL,
  `per_day` float DEFAULT NULL,
  `per_hour` float DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `users_password`, `employee_name`, `cal_as_per`, `hours_due`, `day_starttime`, `grace_time`, `monthly_salary`, `per_day`, `per_hour`, `designation`) VALUES
(1, 'mohsin5', 'test123', 'Mohsin Ahmed', 23, 8, '11:00:00', '11:45:00', 55000, 2391.3, 298.91, 'testing designation'),
(2, 'sultan', 'test123', 'Sultan Ali', 23, 6, '11:00:00', '11:45:00', 55000, 2391.3, 398.55, NULL),
(3, 'faizan', 'test123', 'Faizan Raza', 23, 9, '03:00:00', '03:45:00', 25000, 1086.96, 120.77, NULL),
(4, 'salman', 'test123', 'Salman Ali', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(5, 'umar', 'test123', 'Umar Khan', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(6, 'shakeel', 'test123', 'Shakeel Siddiqui', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(7, 'arshad', 'test123', 'Arshad Ali', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(8, 'irfan', 'test123', 'Irfan Uz Zaman', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(9, 'hammad.ali', 'test123', 'Hammad Ali', 23, 9, '12:00:00', '12:45:00', 50000, 2173.91, 241.55, NULL),
(10, 'hammad', 'test123', 'Hammad Hassan', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, NULL),
(11, 'farhan', 'test123', 'Farhan Soomoro', NULL, 9, '11:00:00', '11:45:00', 50000, 2500, 258, 'Ecommerce Manager'),
(12, 'aaa', 'test123', 'adasdasd', 23, 9, '11:00:00', '11:45:00', 20000, 869.57, 96.62, NULL),
(13, 'mohsin14', 'test123', 'adasdasd', 23, 9, '03:00:00', '03:45:00', 25000, 1086.96, 120.77, NULL),
(14, 'shaz', 'test123', 'Shazad', 23, 9, '11:20:00', '12:05:00', 50000, 2173.91, 241.55, NULL),
(15, 'sha', 'test123', 'Shazad', 23, 9, '11:20:00', '12:05:00', 50000, 2173.91, 241.55, NULL),
(16, 'sahz', 'test123', 'Shazad', 23, 9, '11:00:00', '11:45:00', 50000, 2173.91, 241.55, 'testing designation'),
(17, 'shazad', 'test123', 'shazad', 23, 9, '12:00:00', '12:45:00', 10000, 434.78, 48.31, NULL),
(18, 'mohsin1', 'test123', 'mohsin', 23, 9, '11:00:00', '11:45:00', 10000, 434.78, 48.31, NULL),
(19, 'mohsin', 'test123', 'Mohsin Ahmed', 23, 9, '11:00:00', '11:45:00', 10000, 434.78, 48.31, NULL),
(20, 'mohsin2', 'test123', 'Mohsin Ahmed', 23, 9, '12:00:00', '12:45:00', 20000, 869.57, 96.62, NULL),
(21, 'mohsin4', 'test123', 'mohsin', 23, 9, '14:00:00', '02:45:00', 20000, 869.57, 96.62, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `attendance_users_id_fk` (`employee_id`);

--
-- Indexes for table `daily_attendance`
--
ALTER TABLE `daily_attendance`
  ADD PRIMARY KEY (`daily_id`),
  ADD KEY `daily_attendance_users_id_fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daily_attendance`
--
ALTER TABLE `daily_attendance`
  MODIFY `daily_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_users_id_fk` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `daily_attendance`
--
ALTER TABLE `daily_attendance`
  ADD CONSTRAINT `daily_attendance_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
