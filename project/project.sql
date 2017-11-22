-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 06:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(100) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `category` char(30) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `submit_date` date DEFAULT NULL,
  `submit_time` char(12) DEFAULT NULL,
  `num_views` int(50) DEFAULT NULL,
  `num_reply` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `user_id`, `category`, `question`, `submit_date`, `submit_time`, `num_views`, `num_reply`) VALUES
(1, 1, 'Academic', 'how to apply exam', '2017-11-20', '09:09:11pm', NULL, NULL),
(2, 1, 'Select Topic', 'sdgjfioj', '2017-11-20', '12:33:14am', NULL, NULL),
(3, 1, 'Select Topic', 'test questiong', '2017-11-20', '12:34:42am', NULL, NULL),
(4, 1, 'Select Topic', 'how are you', '2017-11-21', '05:20:21pm', NULL, NULL),
(5, 1, 'Select Topic', 'how to run c code', '2017-11-21', '05:22:10pm', NULL, NULL),
(6, 1, 'Select Topic', 'how to get cpanel', '2017-11-21', '05:22:31pm', NULL, NULL),
(7, 6, 'Select Topic', 'how to get a result paper', '2017-11-21', '07:08:05pm', NULL, NULL),
(8, 6, 'Select Topic', 'jkdfkdgjkgjfkkjk', '2017-11-22', '12:14:47pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(100) NOT NULL,
  `q_id` int(100) DEFAULT NULL,
  `reply` varchar(500) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `submit_date` varchar(25) DEFAULT NULL,
  `time` char(12) DEFAULT NULL,
  `replyer_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `q_id`, `reply`, `user_id`, `submit_date`, `time`, `replyer_name`) VALUES
(1, 1, 'fgjhgdzhfdgrfhgdhg', 6, '2356', NULL, 'admin1'),
(4, 1, 'fzhdgjhngnbgv', 6, '2356', NULL, 'admin1'),
(11, 1, 'retghsfgfhdgfs', 6, '2356', NULL, 'admin1'),
(7, 1, 'discuss with the councils', 6, '2356', NULL, 'admin1'),
(10, 1, 'Computer Science', 6, '2356', NULL, 'admin1'),
(9, 1, 'Internet Prohramming', 6, '2356', NULL, 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `usageinfo`
--

CREATE TABLE `usageinfo` (
  `usage_id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `login` date DEFAULT NULL,
  `login_time` char(10) DEFAULT NULL,
  `logout_time` char(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usageinfo`
--

INSERT INTO `usageinfo` (`usage_id`, `user_id`, `login`, `login_time`, `logout_time`) VALUES
(1, 1, '2017-11-20', '08:15:49pm', '12:16:27pm'),
(2, 6, '2017-11-21', '06:00:05pm', '12:15:31pm'),
(3, 6, '2017-11-21', '09:31:49pm', '12:15:31pm'),
(4, 6, '2017-11-21', '11:13:02pm', '12:15:31pm'),
(5, 6, '2017-11-21', '11:40:25pm', '12:15:31pm'),
(6, 1, '2017-11-22', '12:15:46pm', '12:16:27pm'),
(7, 6, '2017-11-22', '12:17:32pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` char(30) DEFAULT NULL,
  `sc_number` char(8) DEFAULT NULL,
  `password` char(15) DEFAULT NULL,
  `role` char(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `sc_number`, `password`, `role`, `email`, `birth_date`, `profile_pic`) VALUES
(1, 'admin1', NULL, 'admin1123', 'administrator', 'admin1@gmail.com', '1964-05-23', 'default.jpg'),
(2, 'admin1', NULL, 'admin2123', 'administrator', 'admin2@gmail.com', '1977-07-03', ''),
(3, 'admin3', NULL, 'admin3123', 'administrator', 'admin3@gmail.com', '1988-01-02', ''),
(4, 'admin4', NULL, 'admin4123', 'administrator', 'admin4@gmail.com', '1985-10-30', ''),
(5, 'admin5', NULL, 'admin5123', 'administrator', 'admin5@gmail.com', '1975-02-03', ''),
(6, 'Pramodya', 'sc/9508', '12345', 'student', 'pramodya@gmail.com', '1994-04-24', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `usageinfo`
--
ALTER TABLE `usageinfo`
  ADD PRIMARY KEY (`usage_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usageinfo`
--
ALTER TABLE `usageinfo`
  MODIFY `usage_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
