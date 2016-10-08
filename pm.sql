-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 08:34 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picsmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `mpm_users`
--

DROP TABLE IF EXISTS `mpm_users`;
CREATE TABLE IF NOT EXISTS `mpm_users` (
  `_userId` int(11) NOT NULL AUTO_INCREMENT,
  `_email_address` varchar(255) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `_dob` varchar(255) NOT NULL,
  `_firstname` varchar(255) NOT NULL,
  `_lastname` varchar(255) NOT NULL,
  `_gender` varchar(255) NOT NULL,
  `_username` varchar(255) DEFAULT NULL,
  `_profile_picture` varchar(255) DEFAULT NULL,
  `_cover_photo` varchar(255) DEFAULT NULL,
  `is_completed` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`_userId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpm_users`
--

INSERT INTO `mpm_users` (`_userId`, `_email_address`, `_password`, `_dob`, `_firstname`, `_lastname`, `_gender`, `_username`, `_profile_picture`, `_cover_photo`, `is_completed`) VALUES
(4, 'kinglexy10@gmail.com', 'ogwaroluv09', '23-August-1994', 'Irantiola', 'Olakunle', 'Male', '@kinglexy', 'ContestImg_1e71b805c01c.jpg', '', 1),
(5, 'lekan@gmail.com', 'ogwaroluv09', '17-November-1995', 'Olalekan', 'Ajibola', 'Male', '@lekzy', 'ContestImg_a092c8f89e9c.png', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

DROP TABLE IF EXISTS `shares`;
CREATE TABLE IF NOT EXISTS `shares` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_post` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `post_date` int(255) NOT NULL,
  `comment_count` int(255) NOT NULL DEFAULT '0',
  `likes_count` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`_id`, `user_post`, `poster`, `post_date`, `comment_count`, `likes_count`) VALUES
(1, 'testing', 'kinglexy10@gmail.com', 1474757691, 0, 3),
(2, 'hello and how you doing', 'kinglexy10@gmail.com', 1474759631, 0, 0),
(3, 'i love this mehn', 'kinglexy10@gmail.com', 1474759826, 0, 0),
(4, '', 'kinglexy10@gmail.com', 1474761863, 0, 0),
(5, '', 'kinglexy10@gmail.com', 1474761912, 0, 0),
(6, 'ok i love this', 'kinglexy10@gmail.com', 1474761948, 0, 0),
(7, 'i love this event jhoe', 'lekan@gmail.com', 1474762485, 0, 0),
(8, 'its working very fine', 'lekan@gmail.com', 1474764174, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
