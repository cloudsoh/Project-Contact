-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 10:43 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `info_id` int(65) NOT NULL,
  `user` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `phonetype` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `birthday` date NOT NULL,
  `company` varchar(65) NOT NULL,
  `note` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `user`, `name`, `phone`, `phonetype`, `address`, `birthday`, `company`, `note`) VALUES
(1, 'chua yw', 'c', '1', '1', 's', '2015-11-06', '', ''),
(2, 'cloudsoh03021@gmail.com', 'Jenkin', '0127522722', 'asd', 'asd', '0002-02-12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `userid` int(65) NOT NULL,
  `locationid` int(65) NOT NULL,
  `time` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `postid` int(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`userid`, `locationid`, `time`, `content`, `postid`) VALUES
(2, 2, '2015-11-30 17:02:22', 'asd', 1),
(2, 2, '2015-11-30 17:17:00', 'asd', 2),
(2, 2, '2015-11-30 17:17:03', 'qqq', 3),
(2, 2, '2015-11-30 17:17:22', 'asd', 4),
(2, 2, '2015-11-30 17:17:27', '123123123', 5),
(2, 2, '2015-11-30 17:19:10', 'hahaha', 6),
(2, 2, '2015-11-30 17:19:21', 'really', 7),
(2, 1, '2015-11-30 17:27:21', 'oi', 8),
(1, 2, '2015-11-30 17:28:20', 'diam la', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(65) NOT NULL,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `description` varchar(65) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `password`, `description`) VALUES
(1, 'asd', 'aaa', 'aaa@aaa.a', 'aaaaaa', NULL),
(2, 'Cloud Soh', 'Jun Fu', 'cloudsoh03021@gmail.com', 'asdasdasd', NULL),
(3, 'Cloud Soh', 'Jun Fu', 'cloudsoh03022@gmail.com', 'asdasdasd', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
