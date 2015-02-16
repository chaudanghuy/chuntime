-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 10:01 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chuntime`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_flag` tinyint(4) NOT NULL DEFAULT '1',
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `image`, `user_id`, `delete_flag`, `latitude`, `longitude`, `location`) VALUES
(1, 'test', '2015-02-15 13:33:08', '', 1, 1, '', '', ''),
(2, 'test2', '2015-02-15 13:33:14', '', 1, 1, '', '', ''),
(3, 'cafe vá»›i khÃ¡ch', '2015-02-16 05:46:54', '', 1, 1, '', '', ''),
(4, 'test láº§n 2', '2015-02-16 08:53:58', '', 1, 1, '10.7554856', '106.63333569999999', 'http://maps.googleapis.com/maps/api/staticmap?center=10.7554856,106.63333569999999&zoom=14&size=400x300&markers=color:red|10.7554856,106.63333569999999&sensor=false'),
(5, 'test láº§n 3', '2015-02-16 08:59:14', '', 1, 1, '', '', 'http://maps.googleapis.com/maps/api/staticmap?center=,&zoom=14&size=450x150&markers=color:red|,&sensor=false'),
(6, 'test láº§n 5', '2015-02-16 09:00:46', '', 1, 1, '10.7554856', '106.63333569999999', 'http://maps.googleapis.com/maps/api/staticmap?center=10.7554856,106.63333569999999&zoom=14&size=450x150&markers=color:red|10.7554856,106.63333569999999&sensor=false');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `facebook_user_id` bigint(20) DEFAULT NULL,
  `facebook_access_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `facebook_user_id`, `facebook_access_token`) VALUES
(1, 'test@gmail.com', 'Tester', 1758744551018032, 'CAAE1zhTa6ekBAOovRXYCRpt73h5jE5aq6mc2yPScFPnircmQIesSZAA157QmBGXBXsjY8sK22IZANBpwsaZBwZCZCYjXRzX2KUTKepWCpemHm4TRZAXPWGMLQOjusuafyHhJ1dz8fcSZBcWcChvyIDpl1Ln9eXmCpHMBewYxo8JSZAr6l5rdyDTU941Pl4bvBpUENfvMgHjnEqtMTQSHfZCWz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
