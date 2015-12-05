-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 09:35 AM
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
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `imagepath` varchar(65) NOT NULL,
  `imageid` int(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imagepath`, `imageid`) VALUES
('../images/1.png', 1),
('../images/2.png', 2),
('../images/3.png', 3),
('../images/4.png', 4),
('../images/5.png', 5),
('../images/6.png', 6),
('../images/7.png', 7),
('../images/8.png', 8),
('../images/9.png', 9),
('../images/10.png', 10);

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
  `grouptype` enum('Favourite','Friends','Family','Default') NOT NULL,
  `address` varchar(65) NOT NULL,
  `birthday` date NOT NULL,
  `company` varchar(65) NOT NULL,
  `note` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `user`, `name`, `phone`, `phonetype`, `grouptype`, `address`, `birthday`, `company`, `note`) VALUES
(1, 'chua yw', 'c', '1', '1', 'Default', 's', '2015-11-06', '', ''),
(3, 'aaa@aaa.a', 'Yap', '1231', '123', 'Family', '123', '0231-03-12', '', ''),
(4, 'asd@asd.asd', 'asdasd', 'asd', 'asd', 'Favourite', 'dasd', '0023-03-12', '', ''),
(5, 'asd@asd.asd', 'ASD', 'ASD', 'SD', 'Favourite', 'ASD', '0003-03-12', '', ''),
(6, 'cloudsoh03021@gmail.com', 'Lu Chow Ling', '0127522722', '+60102203992', 'Favourite', '2e2qwed', '0003-03-12', '', ''),
(8, 'cloudsoh03021@gmail.com', 'Lim Chun Wei', '0123456789', 'Mobile', 'Default', 'asd', '0213-03-12', '', ''),
(10, '', 'Quek Chin Xian', '0101001010', 'Mobile', 'Friends', 'dasd', '0123-03-12', '', ''),
(11, '', 'Ng Mee Mee', '0120020313', 'Family', '', 'asd', '2015-12-31', '', ''),
(12, '', 'asdasd', 'asdsad', 'asd', '', 'asd', '0023-12-23', '', ''),
(13, '', 'asd', 'asd', 'asd', '', 'asd', '1232-03-12', '', ''),
(14, 'cloudsoh03021@gmail.com', 'asd', 'asd', 'asd', '', 'asd', '0123-03-12', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

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
(1, 2, '2015-11-30 17:28:20', 'diam la', 9),
(1, 2, '2015-11-30 19:44:37', '', 10),
(1, 2, '2015-11-30 19:44:47', '', 11),
(1, 2, '2015-11-30 19:45:38', 'asdasdasd', 12),
(1, 1, '2015-11-30 19:46:20', '', 13),
(1, 1, '2015-11-30 19:48:41', '', 14),
(1, 1, '2015-11-30 19:49:41', '', 15),
(1, 1, '2015-11-30 19:51:01', '', 16),
(1, 1, '2015-11-30 19:52:11', '', 17),
(1, 1, '2015-12-01 08:26:03', '', 43),
(1, 1, '2015-12-01 08:26:20', '', 44),
(1, 1, '2015-12-01 08:26:28', '', 45),
(1, 1, '2015-12-01 08:32:10', 'qweqwe', 46),
(1, 1, '2015-12-01 08:32:16', 'qqe', 47),
(1, 1, '2015-12-01 08:32:24', 'qweqwe', 48),
(1, 1, '2015-12-01 08:32:34', 'asdsda', 49),
(1, 1, '2015-12-01 08:38:34', '13123', 50),
(1, 1, '2015-12-01 08:40:52', 'aq', 51),
(1, 1, '2015-12-01 10:46:30', 'asd', 52),
(1, 1, '2015-12-01 10:46:37', 'asd', 53),
(1, 1, '2015-12-01 10:46:40', 'dsaasdasd', 54),
(4, 4, '2015-12-01 10:48:57', 'Hi world!', 55),
(4, 1, '2015-12-01 10:50:17', 'ggg', 56),
(5, 5, '2015-12-01 11:28:12', 'ads', 57),
(5, 5, '2015-12-01 11:28:21', 'Im gay', 58),
(5, 5, '2015-12-01 11:28:21', 'Im gay', 59),
(2, 2, '2015-12-02 05:09:05', 'QWEQWEQWEQWEWQEWEQWEQWEQEEEQQEEQEQWEQEQWEQWEQWEQWEQWE', 60),
(2, 2, '2015-12-02 10:24:47', 'asds', 61),
(2, 2, '2015-12-02 10:24:57', 'ã‚¢ï½“ï½„ï¼‘\r\n', 62),
(2, 1, '2015-12-02 19:29:56', 'TESTING TESTING', 67),
(7, 7, '2015-12-03 13:47:50', 'asdasd', 69),
(2, 4, '2015-12-03 13:49:37', 'asd', 70);

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
  `description` varchar(65) DEFAULT NULL,
  `imageid` int(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `password`, `description`, `imageid`) VALUES
(1, 'asd', 'aaa', 'aaa@aaa.a', 'aaaaaa', NULL, 1),
(6, 'asd', 'asd', 'asd@asd.asd', 'asd', NULL, 1),
(7, 'Yang', 'Chee Bengabc', 'cbyang@gmail.com', 'asdasdasd', NULL, 5),
(2, 'Cloud Soh', 'Jun Fu', 'cloudsoh03021@gmail.com', 'asdasdasd', NULL, 5),
(3, 'Cloud Soh', 'Jun Fu', 'cloudsoh03022@gmail.com', 'asdasdasd', NULL, 1),
(5, 'Jenkin', 'Wong', 'jenkin@gmail.com', 'asd', NULL, 1),
(4, 'Chua', 'Yw', 'yingwei1025@gmail.com', '123', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(65) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
