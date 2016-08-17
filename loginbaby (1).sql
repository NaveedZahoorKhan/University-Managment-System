-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2016 at 06:02 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginbaby`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `uid` int(11) NOT NULL,
  `addressl1` varchar(15) NOT NULL,
  `addressl2` varchar(10) DEFAULT NULL,
  `profilepic` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`uid`, `addressl1`, `addressl2`, `profilepic`) VALUES
(1, 'Fazal Colony Bn', 'Lahore Pun', 'image/BZU-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE IF NOT EXISTS `dues` (
  `uid` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `receiveable` int(11) NOT NULL,
  `payed` int(11) NOT NULL,
  `duesnextsem` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`uid`, `payable`, `receiveable`, `payed`, `duesnextsem`) VALUES
(1, 15000, 1000, 360000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `uid` int(11) NOT NULL,
  `currentsem` varchar(10) NOT NULL,
  `program` varchar(5) NOT NULL,
  `fall` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`uid`, `currentsem`, `program`, `fall`) VALUES
(1, '5th', 'BSIT', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `al1` varchar(20) NOT NULL,
  `al2` varchar(20) DEFAULT NULL,
  `subject` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `doe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profilepic` varchar(30) NOT NULL,
  `fid` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `lname`, `email`, `dob`, `al1`, `al2`, `subject`, `doj`, `type`, `salary`, `active`, `doe`, `profilepic`, `fid`) VALUES
(1, 'sfdasdf', 'ksjfdl;asjf', 'safjlasdf@sfasd.com', '2342-12-23', 'lkfvjal;skfj;aslkjga', ';lkfjasl;dkjal;kjgal', 'sdfdj;lask', '4231-12-31', 'visiting', 234234, b'1', '2016-01-08 05:59:19', '', 'BZU-FAC-1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `al1` varchar(20) NOT NULL,
  `al2` varchar(20) DEFAULT NULL,
  `course` varchar(10) NOT NULL,
  `totaldues` bigint(20) DEFAULT NULL,
  `doe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `sid` varchar(15) NOT NULL,
  `session` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `profilepic` varchar(50) DEFAULT NULL,
  `passwd` varchar(30) NOT NULL DEFAULT 'asv123;<A'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `lname`, `email`, `dob`, `al1`, `al2`, `course`, `totaldues`, `doe`, `active`, `sid`, `session`, `profilepic`, `passwd`) VALUES
(13, 'Ali', 'Zahoor', 'waheedkhan37100@gmai', '2013-11-29', 'faslkjhaslkhg', 'safagdfh', 'bsit', 20, '2016-01-10 08:44:10', b'1', 'BSIT-13-F-125', '2016-01-10 08:44:10', 'image/students/www.appzdam.net.jpg', '8TrhDjw2I');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL COMMENT 'User IDs - Auto Incremented',
  `uname` varchar(10) NOT NULL COMMENT 'User Names - Must be unique',
  `name` varchar(15) NOT NULL COMMENT 'Name field',
  `passwd` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `name`, `passwd`) VALUES
(1, 'admin', 'Ali', 'toor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `dues`
--
ALTER TABLE `dues`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dues`
--
ALTER TABLE `dues`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User IDs - Auto Incremented',AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
