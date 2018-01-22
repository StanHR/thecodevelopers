-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 02:52 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccw`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feed_id` int(11) NOT NULL,
  `rn` text NOT NULL,
  `uname` varchar(60) NOT NULL,
  `eid` text NOT NULL,
  `feed_rating` varchar(2) value '0',
  `feed_msg` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 value CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `rn`, `uname`, `eid`, `feed_rating`, `feed_msg`) VALUES
(1, '50161812', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '5', 'test 1'),
(2, '5016132', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '0', 'test 2'),
(3, '501618', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '1', 'test 3'),
(4, '501618', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '2', 'test 4'),
(5, '501618', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '3', 'test 5'),
(6, '501618', 'Purvesh Jain', 'jainpurvesh19@gmail.com', '4', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feed_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
