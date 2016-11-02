-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 06:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `johnmae_thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `NO` int(11) NOT NULL,
  `CATNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`NO`, `CATNAME`) VALUES
(1, 'Cupcakes');

-- --------------------------------------------------------

--
-- Table structure for table `comment_section_post`
--

CREATE TABLE `comment_section_post` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `COMMENTHERE` varchar(500) NOT NULL,
  `DATECOMMENT` varchar(50) NOT NULL,
  `POSTNO` varchar(200) NOT NULL,
  `TEMPLATENAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_section_post`
--

INSERT INTO `comment_section_post` (`NO`, `NAME`, `EMAIL`, `COMMENTHERE`, `DATECOMMENT`, `POSTNO`, `TEMPLATENAME`) VALUES
(12, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Hello! This is John Mark. Nice post :)', 'October 1, 2016 04:45 AM', '3', 'DESIGN2'),
(13, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'First Comment', 'October 3, 2016 11:58 AM', '1', 'DESIGN2'),
(14, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Second Comment', 'October 3, 2016 11:59 AM', '1', 'DESIGN2'),
(15, 'Jm Abril', 'johnmark_abri12l@yahoo.com', '(DOWNLOAD(y)), (COMMENT BOX), (VIDEO)- walang internet, yung lang HAPPY BIRHTDAY !!', 'October 5, 2016 3:24 AM', '2', 'DESIGN2'),
(16, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Si Farrah ay maliit.', 'October 5, 2016 3:29 PM', '2', 'DESIGN2'),
(17, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'sjfdfsdafsdaasdfafsd', 'October 6, 2016 3:47 PM', '2', 'DESIGN2'),
(18, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'kjasdhfkjhaskdhsad', 'October 6, 2016 5:28 PM', '1', 'DESIGN2'),
(19, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:50 PM', '6', 'DESIGN2'),
(20, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:52 PM', '7', 'DESIGN2'),
(21, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:52 PM', '8', 'DESIGN2'),
(22, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:53 PM', '9', 'DESIGN2'),
(23, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:53 PM', '10', 'DESIGN2'),
(24, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:53 PM', '11', 'DESIGN2'),
(25, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:53 PM', '12', 'DESIGN2'),
(26, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '13', 'DESIGN2'),
(27, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '14', 'DESIGN2'),
(28, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '15', 'DESIGN2'),
(29, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '16', 'DESIGN2'),
(30, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '17', 'DESIGN2'),
(31, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '18', 'DESIGN2'),
(32, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:54 PM', '19', 'DESIGN2'),
(33, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:55 PM', '20', 'DESIGN2'),
(34, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:55 PM', '21', 'DESIGN2'),
(35, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '22', 'DESIGN2'),
(36, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '23', 'DESIGN2'),
(37, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '24', 'DESIGN2'),
(38, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '25', 'DESIGN2'),
(39, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '26', 'DESIGN2'),
(40, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:56 PM', '27', 'DESIGN2'),
(41, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '28', 'DESIGN2'),
(42, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '29', 'DESIGN2'),
(43, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '30', 'DESIGN2'),
(44, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '31', 'DESIGN2'),
(45, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '32', 'DESIGN2'),
(46, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '33', 'DESIGN2'),
(47, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:57 PM', '34', 'DESIGN2'),
(48, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '35', 'DESIGN2'),
(49, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '36', 'DESIGN2'),
(50, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '37', 'DESIGN2'),
(51, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '38', 'DESIGN2'),
(52, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '39', 'DESIGN2'),
(53, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '40', 'DESIGN2'),
(54, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:58 PM', '41', 'DESIGN2'),
(55, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:59 PM', '42', 'DESIGN2'),
(56, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:59 PM', '43', 'DESIGN2'),
(57, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 6:59 PM', '44', 'DESIGN2'),
(58, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '45', 'DESIGN2'),
(59, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '46', 'DESIGN2'),
(60, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '47', 'DESIGN2'),
(61, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '48', 'DESIGN2'),
(62, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '49', 'DESIGN2'),
(63, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '50', 'DESIGN2'),
(64, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '51', 'DESIGN2'),
(65, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:00 PM', '52', 'DESIGN2'),
(66, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:01 PM', '53', 'DESIGN2'),
(67, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:01 PM', '54', 'DESIGN2'),
(68, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:01 PM', '55', 'DESIGN2'),
(69, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'this cupcakes is delicious! ', 'October 10, 2016 7:02 PM', '3', 'DESIGN2'),
(70, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:09 PM', '1', 'DESIGN2'),
(71, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:09 PM', '2', 'DESIGN2'),
(72, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:09 PM', '3', 'DESIGN2'),
(73, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:09 PM', '6', 'DESIGN2'),
(74, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:09 PM', '7', 'DESIGN2'),
(75, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '8', 'DESIGN2'),
(76, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '9', 'DESIGN2'),
(77, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '10', 'DESIGN2'),
(78, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '11', 'DESIGN2'),
(79, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '12', 'DESIGN2'),
(80, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:10 PM', '14', 'DESIGN2'),
(81, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:11 PM', '15', 'DESIGN2'),
(82, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:11 PM', '16', 'DESIGN2'),
(83, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '17', 'DESIGN2'),
(84, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '18', 'DESIGN2'),
(85, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '19', 'DESIGN2'),
(86, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '20', 'DESIGN2'),
(87, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '21', 'DESIGN2'),
(88, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:12 PM', '22', 'DESIGN2'),
(89, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '23', 'DESIGN2'),
(90, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '24', 'DESIGN2'),
(91, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '25', 'DESIGN2'),
(92, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '26', 'DESIGN2'),
(93, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '27', 'DESIGN2'),
(94, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:13 PM', '28', 'DESIGN2'),
(95, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '29', 'DESIGN2'),
(96, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '30', 'DESIGN2'),
(97, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '31', 'DESIGN2'),
(98, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '32', 'DESIGN2'),
(99, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '33', 'DESIGN2'),
(100, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '34', 'DESIGN2'),
(101, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:14 PM', '35', 'DESIGN2'),
(102, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '36', 'DESIGN2'),
(103, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '37', 'DESIGN2'),
(104, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '38', 'DESIGN2'),
(105, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '39', 'DESIGN2'),
(106, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '40', 'DESIGN2'),
(107, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '41', 'DESIGN2'),
(108, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '42', 'DESIGN2'),
(109, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:15 PM', '43', 'DESIGN2'),
(110, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:16 PM', '44', 'DESIGN2'),
(111, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:16 PM', '45', 'DESIGN2'),
(112, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:16 PM', '46', 'DESIGN2'),
(113, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:16 PM', '47', 'DESIGN2'),
(114, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:17 PM', '48', 'DESIGN2'),
(115, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:17 PM', '49', 'DESIGN2'),
(116, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:17 PM', '50', 'DESIGN2'),
(117, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:18 PM', '51', 'DESIGN2'),
(118, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:18 PM', '52', 'DESIGN2'),
(119, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:18 PM', '53', 'DESIGN2'),
(120, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:18 PM', '54', 'DESIGN2'),
(121, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing the best cupcake ever!', 'October 10, 2016 7:18 PM', '55', 'DESIGN2'),
(122, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:18 PM', '1', 'DESIGN2'),
(123, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '2', 'DESIGN2'),
(124, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '3', 'DESIGN2'),
(125, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '6', 'DESIGN2'),
(126, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '7', 'DESIGN2'),
(127, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '8', 'DESIGN2'),
(128, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:21 PM', '9', 'DESIGN2'),
(129, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:22 PM', '10', 'DESIGN2'),
(130, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:22 PM', '11', 'DESIGN2'),
(131, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:22 PM', '12', 'DESIGN2'),
(132, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:22 PM', '13', 'DESIGN2'),
(133, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '14', 'DESIGN2'),
(134, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '15', 'DESIGN2'),
(135, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '16', 'DESIGN2'),
(136, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '17', 'DESIGN2'),
(137, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '18', 'DESIGN2'),
(138, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '19', 'DESIGN2'),
(139, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '20', 'DESIGN2'),
(140, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '21', 'DESIGN2'),
(141, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '22', 'DESIGN2'),
(142, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '23', 'DESIGN2'),
(143, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '24', 'DESIGN2'),
(144, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '25', 'DESIGN2'),
(145, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '26', 'DESIGN2'),
(146, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '27', 'DESIGN2'),
(147, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '28', 'DESIGN2'),
(148, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '29', 'DESIGN2'),
(149, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '30', 'DESIGN2'),
(150, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '31', 'DESIGN2'),
(151, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:23 PM', '32', 'DESIGN2'),
(152, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:24 PM', '33', 'DESIGN2'),
(153, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:24 PM', '34', 'DESIGN2'),
(154, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:24 PM', '35', 'DESIGN2'),
(155, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:24 PM', '36', 'DESIGN2'),
(156, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:24 PM', '37', 'DESIGN2'),
(157, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '38', 'DESIGN2'),
(158, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '39', 'DESIGN2'),
(159, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '40', 'DESIGN2'),
(160, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '41', 'DESIGN2'),
(161, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '42', 'DESIGN2'),
(162, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '43', 'DESIGN2'),
(163, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '44', 'DESIGN2'),
(164, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '45', 'DESIGN2'),
(165, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '46', 'DESIGN2'),
(166, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '47', 'DESIGN2'),
(167, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '48', 'DESIGN2'),
(168, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '49', 'DESIGN2'),
(169, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '50', 'DESIGN2'),
(170, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '51', 'DESIGN2'),
(171, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '52', 'DESIGN2'),
(172, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '53', 'DESIGN2'),
(173, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '54', 'DESIGN2'),
(174, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes around. Cupcakes are my thing. ', 'October 10, 2016 7:27 PM', '55', 'DESIGN2'),
(175, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '55', 'DESIGN2'),
(176, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '54', 'DESIGN2'),
(177, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '53', 'DESIGN2'),
(178, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '52', 'DESIGN2'),
(179, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '51', 'DESIGN2'),
(180, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '50', 'DESIGN2'),
(181, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '49', 'DESIGN2'),
(182, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '48', 'DESIGN2'),
(183, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '47', 'DESIGN2'),
(184, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '46', 'DESIGN2'),
(185, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '45', 'DESIGN2'),
(186, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '44', 'DESIGN2'),
(187, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '43', 'DESIGN2'),
(188, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '42', 'DESIGN2'),
(189, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '41', 'DESIGN2'),
(190, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '40', 'DESIGN2'),
(191, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:27 PM', '39', 'DESIGN2'),
(192, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:31 PM', '38', 'DESIGN2'),
(193, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '37', 'DESIGN2'),
(194, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '36', 'DESIGN2'),
(195, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '35', 'DESIGN2'),
(196, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '34', 'DESIGN2'),
(197, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '33', 'DESIGN2'),
(198, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '32', 'DESIGN2'),
(199, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '31', 'DESIGN2'),
(200, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '30', 'DESIGN2'),
(201, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '29', 'DESIGN2'),
(202, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '28', 'DESIGN2'),
(203, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '27', 'DESIGN2'),
(204, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '26', 'DESIGN2'),
(205, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '25', 'DESIGN2'),
(206, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '24', 'DESIGN2'),
(207, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '23', 'DESIGN2'),
(208, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '22', 'DESIGN2'),
(209, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:32 PM', '21', 'DESIGN2'),
(210, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '20', 'DESIGN2'),
(211, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '19', 'DESIGN2'),
(212, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '18', 'DESIGN2'),
(213, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '17', 'DESIGN2'),
(214, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '16', 'DESIGN2'),
(215, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '15', 'DESIGN2'),
(216, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '14', 'DESIGN2'),
(217, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '13', 'DESIGN2'),
(218, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '12', 'DESIGN2'),
(219, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '11', 'DESIGN2'),
(220, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '10', 'DESIGN2'),
(221, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '9', 'DESIGN2'),
(222, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '8', 'DESIGN2'),
(223, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '7', 'DESIGN2'),
(224, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '6', 'DESIGN2'),
(225, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:35 PM', '3', 'DESIGN2'),
(226, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:36 PM', '2', 'DESIGN2'),
(227, 'Mae Gregorio', 'maegregorio@gmail.com', 'Everyone loved your cupcakes!', 'October 10, 2016 7:36 PM', '1', 'DESIGN2'),
(228, 'Mae Gregorio', 'maegregorio@gmail.com', 'I LOVE your cupcakes! They are seriously the best things I have ever tasted.', 'October 10, 2016 7:36 PM', '1', 'DESIGN2'),
(229, 'Mae Gregorio', 'maegregorio@gmail.com', 'I LOVE your cupcakes! They are seriously the best things I have ever tasted.', 'October 10, 2016 7:36 PM', '2', 'DESIGN2'),
(230, 'Mae Gregorio', 'maegregorio@gmail.com', 'I LOVE your cupcakes! They are seriously the best things I have ever tasted.', 'October 10, 2016 7:35 PM', '3', 'DESIGN2'),
(231, 'Mae Gregorio', 'maegregorio@gmail.com', 'I tried your cupcakes', 'October 10, 2016 7:35 PM', '6', 'DESIGN2'),
(232, 'Mae Gregorio', 'maegregorio@gmail.com', 'The cupcake is one of hte best things I have ever eaten.', 'October 10, 2016 7:35 PM', '7', 'DESIGN2'),
(233, 'Mae Gregorio', 'maegregorio@gmail.com', 'I just discovered these awesome cupcakes! ', 'October 10, 2016 7:35 PM', '8', 'DESIGN2'),
(234, 'Mae Gregorio', 'maegregorio@gmail.com', 'They helped to make our special day even more memorable. Thanks BEST CAKES!', 'October 10, 2016 7:35 PM', '8', 'DESIGN2'),
(235, 'Mae Gregorio', 'maegregorio@gmail.com', 'never get rid of this one. perfectly delectable ', 'October 10, 2016 7:35 PM', '9', 'DESIGN2'),
(236, 'Mae Gregorio', 'maegregorio@gmail.com', 'OH. MY. GOOOOOOOOOOODNESS!!!!!!!!!!!!! We love love love the cupcakes from the BEST CAKES!!!!!!!! They are ADDICTIVE!!!!!! ', 'October 10, 2016 7:35 PM', '10', 'DESIGN2'),
(237, 'Mae Gregorio', 'maegregorio@gmail.com', 'Best cupcakes EVER! So thrilled you are in Plymouth!  ', 'October 10, 2016 7:35 PM', '11', 'DESIGN2'),
(238, 'Mae Gregorio', 'maegregorio@gmail.com', 'The reviews are really great and the cupcakes look and sound incredible...s', 'October 10, 2016 7:35 PM', '12', 'DESIGN2'),
(239, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you for providing THE best BOSTON CREAM cupcake ever!', 'October 10, 2016 7:35 PM', '13', 'DESIGN2'),
(240, 'Mae Gregorio', 'maegregorio@gmail.com', 'The LEMON BUTTERFLY CUPCAKE is the BEST! :) ', 'October 10, 2016 7:35 PM', '14', 'DESIGN2'),
(241, 'Mae Gregorio', 'maegregorio@gmail.com', 'Could someone please not make these cupcakes so addicting? I mean, I need a gym membership now but I am still gonna keep eating them all!', 'October 10, 2016 7:35 PM', '15', 'DESIGN2'),
(242, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thanks for the most wonderful dessert on the planet! I am going to get them for Christmas gifts!', 'October 10, 2016 7:35 PM', '16', 'DESIGN2'),
(243, 'Mae Gregorio', 'maegregorio@gmail.com', 'Man, these are the best cupcakes Ive ever had.', 'October 10, 2016 7:35 PM', '17', 'DESIGN2'),
(244, 'Mae Gregorio', 'maegregorio@gmail.com', 'I am so happy you have come to Plymouth!!! ', 'October 10, 2016 7:35 PM', '18', 'DESIGN2'),
(245, 'Mae Gregorio', 'maegregorio@gmail.com', 'Thank you! We bumped into BEST CAKES my mistake, and that is the most enjoyable error I ever made!!! Thank you for you BEST CAKES!', 'October 10, 2016 7:35 PM', '19', 'DESIGN2'),
(246, 'Mae Gregorio', 'maegregorio@gmail.com', 'Best Cupcakes by far! My Fiance and I have been on a search for cupcakes for our wedding and we think we found our winner!', 'October 10, 2016 7:35 PM', '20', 'DESIGN2'),
(247, 'Mae Gregorio', 'maegregorio@gmail.com', 'i have fallen in love with your tasty treats!', 'October 10, 2016 7:32 PM', '21', 'DESIGN2'),
(248, 'Mae Gregorio', 'maegregorio@gmail.com', 'I have never... ever, had a better cupcake in my life! I was just at a baby shower that had BEST CUPCAKES cupcakes and I could not believe how great they were!', 'October 10, 2016 7:32 PM', '22', 'DESIGN2'),
(249, 'Mae Gregorio', 'maegregorio@gmail.com', 'Mmm, we just discovered the BESCT CUPCAKES and are now addicted!', 'October 10, 2016 7:32 PM', '23', 'DESIGN2'),
(250, 'Mae Gregorio', 'maegregorio@gmail.com', ' Love all the amazing flavors, and new ones each month!', 'October 10, 2016 7:32 PM', '24', 'DESIGN2'),
(251, 'Mae Gregorio', 'maegregorio@gmail.com', 'Just served cupcakes at a business meeting and they were a huge hit! Thanks for putting everyone in a happy state of mind!', 'October 10, 2016 7:32 PM', '25', 'DESIGN2'),
(252, 'Mae Gregorio', 'maegregorio@gmail.com', 'Yay cupcakes!', 'October 10, 2016 7:32 PM', '26', 'DESIGN2'),
(253, 'Mae Gregorio', 'maegregorio@gmail.com', 'They are very delicious!', 'October 10, 2016 7:32 PM', '27', 'DESIGN2'),
(254, 'Mae Gregorio', 'maegregorio@gmail.com', 'It was amazing. I had never eaten any cupcake that tasted like that.', 'October 10, 2016 7:32 PM', '28', 'DESIGN2'),
(255, 'Mae Gregorio', 'maegregorio@gmail.com', 'Keep up the good work, and please dont discontinue', 'October 10, 2016 7:32 PM', '29', 'DESIGN2'),
(256, 'Mae Gregorio', 'maegregorio@gmail.com', 'I am in love with BEST CUPCAKES!!!!', 'October 10, 2016 7:32 PM', '30', 'DESIGN2'),
(257, 'Mae Gregorio', 'maegregorio@gmail.com', 'Your "Rock Star" cupcake was a hit @ Fashion in Detroits after glow party Friday Night ! ', 'October 10, 2016 7:32 PM', '31', 'DESIGN2'),
(258, 'Mae Gregorio', 'maegregorio@gmail.com', 'best cup cakes ive had!!!!', 'October 10, 2016 7:32 PM', '32', 'DESIGN2'),
(259, 'Mae Gregorio', 'maegregorio@gmail.com', 'cupcakes are delectable.', 'October 10, 2016 7:32 PM', '33', 'DESIGN2'),
(260, 'Mae Gregorio', 'maegregorio@gmail.com', 'I have never had anything so delicious!', 'October 10, 2016 7:32 PM', '34', 'DESIGN2'),
(261, 'Mae Gregorio', 'maegregorio@gmail.com', 'I LOVE your cupcakes! They are seriously the best things I have ever tasted.', 'October 10, 2016 7:32 PM', '35', 'DESIGN2'),
(262, 'Mae Gregorio', 'maegregorio@gmail.com', 'They were beautiful and delicious.', 'October 10, 2016 8:01 PM', '38', 'DESIGN2'),
(263, 'Mae Gregorio', 'maegregorio@gmail.com', 'I love cupcake station!', 'October 10, 2016 8:01 PM', '37', 'DESIGN2'),
(264, 'Mae Gregorio', 'maegregorio@gmail.com', 'I looooooooooooooove!!! the churro cupcakes. This is the best cupcake', 'October 10, 2016 7:32 PM', '36', 'DESIGN2'),
(265, 'Mae Gregorio', 'maegregorio@gmail.com', 'Yummy!! Mmmmmmmm!!!!!! These cupcakes are delicious!!!', 'October 10, 2016 9:08 PM', '39', 'DESIGN2'),
(266, 'Mae Gregorio', 'maegregorio@gmail.com', 'These were the most awesome cupcakes I have ever had! I could sit down with a bowl of the frosting and be in HEAVEN!!', 'October 10, 2016 9:08 PM', '42', 'DESIGN2'),
(267, 'Mae Gregorio', 'maegregorio@gmail.com', 'WOW! They are probably the best cupcakes I have ever had! I wished she had brought one of each to try them all. ', 'October 10, 2016 9:08 PM', '40', 'DESIGN2'),
(268, 'Mae Gregorio', 'maegregorio@gmail.com', 'These cupcakes taste great. ', 'October 10, 2016 9:08 PM', '41', 'DESIGN2'),
(269, 'Mae Gregorio', 'maegregorio@gmail.com', ' I LOVE CUPCAKES', 'October 10, 2016 9:08 PM', '43', 'DESIGN2'),
(270, 'Mae Gregorio', 'maegregorio@gmail.com', 'WOW, what a Taste of Love they were. ', 'October 10, 2016 9:08 PM', '44', 'DESIGN2'),
(271, 'Mae Gregorio', 'maegregorio@gmail.com', 'LOVE LOVE LOVE!!! We are addicted. Thanks for the recipe BEST CAKES! :)', 'October 10, 2016 9:08 PM', '45', 'DESIGN2'),
(272, 'Mae Gregorio', 'maegregorio@gmail.com', 'This was, quite simply, the single best cupcake I''ve had in my entire life.', 'October 10, 2016 9:08 PM', '46', 'DESIGN2'),
(273, 'Mae Gregorio', 'maegregorio@gmail.com', 'This cupcake is amazing!', 'October 10, 2016 9:08 PM', '47', 'DESIGN2'),
(274, 'Mae Gregorio', 'maegregorio@gmail.com', 'The best cupcakes I have ever had in my life!!!!', 'October 10, 2016 9:08 PM', '48', 'DESIGN2'),
(275, 'Mae Gregorio', 'maegregorio@gmail.com', 'Joy in my mouth!!', 'October 10, 2016 9:08 PM', '49', 'DESIGN2'),
(276, 'Mae Gregorio', 'maegregorio@gmail.com', 'I treated myself and my brother to these tasty treat...and was WOW!!! ', 'October 10, 2016 9:08 PM', '50', 'DESIGN2'),
(277, 'Mae Gregorio', 'maegregorio@gmail.com', 'This cupcake is incredible! Definitely worth the trip (and will be worth future return trips!).', 'October 10, 2016 9:08 PM', '51', 'DESIGN2'),
(278, 'Mae Gregorio', 'maegregorio@gmail.com', 'I was amazed at how great these cupcakes were.', 'October 10, 2016 9:08 PM', '52', 'DESIGN2'),
(279, 'Mae Gregorio', 'maegregorio@gmail.com', 'double chocolate and Orange cupcake is my favorite one, I bake it every Saturday', 'October 10, 2016 9:08 PM', '54', 'DESIGN2'),
(280, 'Mae Gregorio', 'maegregorio@gmail.com', 'I Love your marmalade cupcake, it is the best', 'October 10, 2016 9:08 PM', '53', 'DESIGN2'),
(281, 'Mae Gregorio', 'maegregorio@gmail.com', 'I was so happy with these cupcakes and cannot wait to bake it', 'October 10, 2016 9:08 PM', '55', 'DESIGN2'),
(282, 'Mae Gregorio', 'maegregorio@gmail.com', 'cupcakesssssss! <3', 'October 10, 2016 9:19 PM', '3', 'DESIGN2'),
(283, 'Mae Gregorio', 'maegregorio@gmail.com', 'I have tried many times to make a good cupcake from scratch and this one was a home run. Everyone raved about them. :)', 'October 10, 2016 9:27 PM', '26', 'DESIGN2'),
(284, 'Mae Gregorio', 'maegregorio@gmail.com', 'was a little soft... and really sweet- I just made the frosting. I might try again but altering the recipe', 'October 10, 2016 9:29 PM', '23', 'DESIGN2'),
(285, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made these for my family for Easter and they turned out beautiful! I actually only used about 1 1/2 teaspoons vanilla extract because I ran out of it, but it still tasted great. The cake part was not too rich, but the frosting was very rich and delicious. It had a very mild coffee flavor. Thanks Courtly!', 'October 10, 2016 9:30 PM', '23', 'DESIGN2'),
(286, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Easy to make, great taste!', 'October 10, 2016 9:30 PM', '23', 'DESIGN2'),
(287, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'At My Last Bake Sale, These Were a Hit ! Over 40 People bought At Least 2. We Collected $20 Off Of Them !', 'October 10, 2016 9:32 PM', '26', 'DESIGN2'),
(288, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'yummy! i made 4 different cupcakes today and these were my FAVORITE! i was worried the truffles would sink to the bottom and burn a bit. nope. just right. i didn''t have any coffee so i just added some milk (with a little hershey''s syrup). the frosting is super yummy too! i wanted to bake another batch of these (yes even after baking 6 dozen other cupcakes) but my husband wouldn''t let me. :)', 'October 10, 2016 9:32 PM', '26', 'DESIGN2'),
(289, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I found that after adding the food coloring, put each colored batter into separate zip lock baggies, remove the air then cut a tip off of one corner of each bag, then begin filling your cupcake liners. This is a great way to have your kids help you, too. The same can be done with icing.', 'October 10, 2016 9:37 PM', '38', 'DESIGN2'),
(290, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'these are AWESOME, i made a cake with them for my little cuz 6th b-day, they alllll loved them and parents kept asking me how to make it... not only are they cool but the tasted AMAZING with the sour cream it made it extra moist, and i also used french vanilla cake mix rather then white. VERY YUMMY i recommed this', 'October 10, 2016 9:37 PM', '38', 'DESIGN2'),
(291, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Had so much fun making these for DGSs while they are visiting. I used a white cake mix as that''s what I had and tried for Spring colors using gel food coloring. They turned out so bright and pretty. I saved time by using a canned cream cheese frosting topping with sprinkles. They were soooo excited to bite into them and see all the colors. The youngest has even asked for a cake made like this for his b-day this summer.', 'October 10, 2016 9:37 PM', '38', 'DESIGN2'),
(292, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'and, when i did make these as cupcakes a few different times, they were TOO DIE FOR!!! i & my fam (none of whom are vegan) are HUGE lemon fans & these were INCREDIBLE!!!', 'October 10, 2016 9:38 PM', '39', 'DESIGN2'),
(293, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Pretty good! I was sceptical at first, because the batter was runny, and looked pale and almost unappetising after cooked. But I gave it a chance, and dressed it up with frosting to look pretty. The cake was actually really delicious, light and almost refreshing.', 'October 10, 2016 9:38 PM', '39', 'DESIGN2'),
(294, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made these for a big family on Easter yesterday and they were a huge hit. They were all shocked they were vegan and so very light. The cake turned out perfect, light and mild in lemon flavor. The icing was a no go the first time as it separated and went clumpy when I followed the directions to the letter. I remade the icing by mixing the sugar with just a little milk, adding vanilla and more margarine. I figured the lemon was causing the separation so I omitted that. The result was a regular v', 'October 10, 2016 9:38 PM', '39', 'DESIGN2'),
(296, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'This is an fairly easy recipe and they turn out delicious! I have made this a few times, and I even turned this recipe into a simple round cake. That came our just as wonderful! Thanks for sharing!', 'October 10, 2016 9:42 PM', '27', 'DESIGN2'),
(297, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were truly delicious! I followed the recipe except I did not use the frosting. Instead, I topped each cupcake with more of the mascarpone filling. They tasted so much lighter than traditional overly sweet cupcakes, and I just loved them. I''ll definitely be making them again!', 'October 10, 2016 9:42 PM', '27', 'DESIGN2'),
(298, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These are FANTASTIC! :) Thank you so much for posting! I used an apple corer and went about 1/2 way down into the cupcake to pull out a plug- out of the center of the cupcake. I piped the filling in and cut off the top of plug/cork shaped cake and plugged it back up. Super Easy!! Next time after I core out a bit I will put a little of the coffee mixture at the bottom of the hole :) YUM!', 'October 10, 2016 9:42 PM', '27', 'DESIGN2'),
(299, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were very easy and good red velvet cupcakes. The only concern I would have is the amount of red food coloring. I made a double batch and used 2 bottles of food coloring (1/2 the amount called for in the recipe) and they were extremely bright red. I can''t imagine using more than this and would probably use even less next time. The texture and flavor was really good and enjoyed by all. Thanks for posting!', 'October 10, 2016 9:44 PM', '28', 'DESIGN2'),
(300, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were great! Even the batter was tasty ( I used egg beaters with yolks so it was OK) . Also I only needed one bottle of red food dye to get a bright red color. The texture was rich and you would never know there was a mix. Thanks for the great recipe, there are a few en route to a friend to solve her boy problems , they are that good', 'October 10, 2016 9:44 PM', '28', 'DESIGN2'),
(301, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made these cupcakes yesterday for an event for today. For my taste I added another tablespoon of coco powder which gave the finished cake a darker red appearance. There was one flaw with the recipe in the fact that the cooking time was left out. Otherwise the recipe was delicious and easy to make. I topped the cupcakes with freshly made whipped cream and they were loved by all who attended!', 'October 10, 2016 9:44 PM', '28', 'DESIGN2'),
(302, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I did not make the cupcakes as I used my own recipe for that. As for the frosting, I had to make alterations as it was way too thick to put through my decorating applicators however, if you all the oreos a little at a time you will get the right consistency. I made my cupcakes with this icing and everyone loved them. I made four dozen (for work) and had the "pleasure" of not taking any home with me. I personally think this is a great recipe, for the frosting. A few tweaks here and the but nothin', 'October 10, 2016 9:47 PM', '29', 'DESIGN2'),
(303, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'The frosting was very sweet, but I loved the crushed up oreos in it. I added some crushed up oreos to the batter and I think that made the actual cupcake part better.', 'October 10, 2016 9:47 PM', '29', 'DESIGN2'),
(304, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Thought the instructions were not very clear (which bowl to beat the eggs into, and if you were supposed to incorporate the dry and wet via electric mixer or by hand) - I don''t bake a lot so that could be why. They came out good, not great, the oreo cookie in the bottom was not as great as I expected.', 'October 10, 2016 9:47 PM', '29', 'DESIGN2'),
(305, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I also felt that these were more like a muffin than a cupcake, very crumbly. The taste was very interesting, a lot different than any other cupcake/muffin I''ve had before. I didn''t use any kind of liquor in it. I enjoyed them, my husband wasn''t too impressed though.', 'October 10, 2016 9:50 PM', '30', 'DESIGN2'),
(306, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'It tasted very good.I used fresh coconut and it really brought out the coconut flavor.The frsting wasn''t that good.You could taste the confectioners sugar more than anything else.\n\n', 'October 10, 2016 9:50 PM', '30', 'DESIGN2'),
(307, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'My DD''s said they thought they were eating muffins not a cupcake. I thought it was an ok spice cake. The frosting was way too sweet, so I added more cream chees, some butter and a pinch of salt, which helped a little. I foung the texture to be very gooey, especially before adding the extras.', 'October 10, 2016 9:50 PM', '30', 'DESIGN2'),
(308, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These turned out perfect. I got 26 cupcakes out of the recipe and baked for 18 minutes. I let them cool in the metal cupcake pan for about 10 minutes before taking them out. I had no problems as described by others. i read somewhere that Dutch cocoa can''t be use with certain recipes because it will only rise with a certain ratio of baking powder. That might be the issue for those with texture problems. I''m in my mid-forties and not a novice baker by any means, but I didn''t realize until recently', 'October 10, 2016 9:51 PM', '31', 'DESIGN2'),
(309, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I really liked this recipe. However mine were not as moist as I was expecting, but I think I overcooked my cake. I made it in a 9x13 pan. I will definitely use this recipe over, as it was very chocolately. Thanks for the recipe.', 'October 10, 2016 9:51 PM', '31', 'DESIGN2'),
(310, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'So Yummy! Totally the best scratch cupcake recipe I''ve tried. I had fun mixing up the ingredients and playing with the two-toned icing. I''ve never done cake decorating before, so I definitely had fun making little designs with the frosting. Nothing brightens your day like cupcakes :) DO NOT bake on the top shelf! Oh my, I regretted that one. Bottom shelf, definitely bottom shelf.', 'October 10, 2016 9:51 PM', '31', 'DESIGN2'),
(311, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'This is a very nice and simple recipe! Although the cupcakes turned out very nice, they were a little bland. I would recommend adding a little extra sugar. I would also recommend reducing the baking time by 2-3 minutes. But overall, this is a great recipe!\n\n', 'October 10, 2016 9:53 PM', '32', 'DESIGN2'),
(312, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'This recipe is very simple and easy to follow. The cupcakes turned out tasty and not too sweet. I do wish they would "rise" a bit more in the oven.', 'October 10, 2016 9:53 PM', '32', 'DESIGN2'),
(313, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'What alovely surprise that I have found in my baking. The cupcakes were spelendid, and they looked so much tasty than their bite. They really looked like muffins.', 'October 10, 2016 9:53 PM', '32', 'DESIGN2'),
(314, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Absolutely the cutest things. I made them for a co-worker''s birthday and even the men in the office seemed to find them inviting! I used Darn Good Chocolate Cake ( Cake Mix Cake) for the cup cakes and Kittencal''s Chocolate Frosting/Icing for the icing. I ran out of green gum drops so I also used orange gum drops, so they looked like tree frogs! Thank you for one of the most fun birthday goodies I have made.', 'October 10, 2016 9:54 PM', '33', 'DESIGN2'),
(315, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Brilliant! Made these for the kid''s table at our annual "Welcome Summer" picnic. (Which we hold at our family farm, complete with a pond filled with bullfrogs) I used candy spearmint leaves (cut in half) instead of the gumdrops and chocolate jimmy sprinkles instead of decorating gel (held on with a smidgen of white frosting. Oh, and used green foil cupcake liners too! Fabulous!! Huge hit for the kids and adults alike. Thanks for this cute, cute recipe!', 'October 10, 2016 9:54 PM', '33', 'DESIGN2');
INSERT INTO `comment_section_post` (`NO`, `NAME`, `EMAIL`, `COMMENTHERE`, `DATECOMMENT`, `POSTNO`, `TEMPLATENAME`) VALUES
(316, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'So cute! I''d recommend pistachio or Key Lime cupcakes, or basic vanilla dyed green-- especially with the blue frosting to make it look like the frog''s coming out of the water. I''ve loved frogs and toads ever since I was really little....can also use Rolos with a chocolate cupcake to make toad cupcakes :)', 'October 10, 2016 9:54 PM', '33', 'DESIGN2'),
(317, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'This recipe is awsome. Will use it for the holidays instead of making the pie. I used a standard muffin pan, no liners, just spray/grease pan well. It made 10 muffins. They do not raise, so fill them 2/3 or more. I cooked them 20 minutes. Wait til they are cool to try them. They need to be cool for the pecan pie flavor to come thru.', 'October 10, 2016 9:55 PM', '34', 'DESIGN2'),
(318, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Awesome little cupcake. No one could eat just one. To prevent them from sticking to the pan, flip them out as soon as they come out of the oven. I got exactly 24 mini muffins from my batch. PS: I also added 1 tablespoon of Karo light corn syrup and 1 teaspoon vanilla to the batter. What is a pecan pie cupcake without a little Karo syrup and vanilla!', 'October 10, 2016 9:55 PM', '34', 'DESIGN2'),
(319, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I give these five stars being being so delicious and easy to get ready. They freeze well too!!!! The whole family loved them! I will tell you a little tip that helped me....DO NOT let them cool in the mini muffin pan....slide them out immediatly and let them cool on a plate, cookie sheet, whatever...if you let them cool in the muffin pan they will stick and they will not look very nice, then you will forced to eat them all yourself.', 'October 10, 2016 9:55 PM', '34', 'DESIGN2'),
(320, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Someone brought these to a party I was at last weekend and they were fantastic!!! I couldn''t wait to find the recipe and I knew I would find it here! Will make them VERY soon.', 'October 10, 2016 9:57 PM', '35', 'DESIGN2'),
(321, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'As a certified farmer''s market vendor my customers love this one. Very good and easy to make. Thanks for posting.', 'October 10, 2016 9:57 PM', '35', 'DESIGN2'),
(322, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I left out the powdered sugar int he cream cheese filling, but otherwise I followed the recipe as you have it. It was reallly delicious & i''d definitely make them again. Thanks for sharing.', 'October 10, 2016 9:57 PM', '35', 'DESIGN2'),
(323, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Great cinnamon taste. Cake is more of a muffin consistency and pairs well with the icing. The icing is very sweet so you only need a thin layer. Very tasty and definitely recommend giving them a try.', 'October 10, 2016 10:00 PM', '36', 'DESIGN2'),
(324, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'very good. the frosting is sweet and has very good churro flavor in the cake itself. i will definitely make these again,', 'October 10, 2016 10:00 PM', '36', 'DESIGN2'),
(325, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Not bad as written but a bit heavy and oily for our tastes, second time around used cashew milk and applesauce in place of the oil (kept the butter!) and the texture and flavour was a LOT better (and closer to the churros I remember, ironically!). Topped with a cocoa glaze it was totally the right experience', 'October 10, 2016 10:00 PM', '36', 'DESIGN2'),
(326, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These may have tasted a little more like muffins, than cupcakes, but that was just fine by us! The recipe made 17 cupcakes for me, but I probably could have made them a little bigger. Still would have had more than a dozen, which was a bonus! We enjoyed them immensely, and will be making them again! Thanks so much for sharing a great recipe, missyqh! Made for Fall PAC 2011.', 'October 10, 2016 10:02 PM', '40', 'DESIGN2'),
(327, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made this recipe yesterday and I would definitely never make it again. It was WAY TOO SWEET!!! Everyone in my family thought so and we ended up throwing out the last few. Take a look at the nutritional info.', 'October 10, 2016 10:02 PM', '40', 'DESIGN2'),
(328, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'So delicious! Made them twice and both times they turned out perfect. And they freeze great!', 'October 10, 2016 10:02 PM', '40', 'DESIGN2'),
(329, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These cupcakes are always a hit! I made them for our goddaughter''s first birthday party this year, and kids and parents both raved about them. They couldn''t believe that they were homemade. They are soo moist and sweet! I didn''t have buttermilk, so I just mixed a little sour cream into some milk and let it sit for a few minutes before adding to the batter. For the bday party I turned my cupcakes into little piglets =) I used strawberry marshmallows for the ears and snout and mini choco chips for', 'October 10, 2016 10:03 PM', '41', 'DESIGN2'),
(330, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I don''t usually make very good cupcakes( I don''t know what is different about them then cakes, but!), however, these are the exception. They were so moist with the perfect amount of sweet and tangy. I stayed true to the recipe, except I did double it,and got exactly 20. I took them to a ladies Tea and they were a big hit. Definitely a keeper.', 'October 10, 2016 10:03 PM', '41', 'DESIGN2'),
(331, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Great little cupcakes soursugar. I made these awhile ago for my friend''s daughter wedding. They were quick and easy to make with wonderful results. The cupcakes were enjoyed by all. Thanks for sharing this tasty treat. Made for Think Pink / 09', 'October 10, 2016 10:03 PM', '41', 'DESIGN2'),
(332, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Love one-bowl cupcakes!! So easy and less dishes to do!! Delicious cupcakes! Used Basic Vanilla Frosting to frost. Thanks!', 'October 10, 2016 10:06 PM', '42', 'DESIGN2'),
(333, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were great. Easy, chocolatey and most of all moist. I topped them with some strawberry buttercream. These are definitely a keeper.', 'October 10, 2016 10:06 PM', '42', 'DESIGN2'),
(334, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Flavor is good, they turned out like box-mix cupcakes, soft and light! Fast & easy to make too! I am going to pair them with a vanilla cream cheese frosting, but my 2 y.o. twins loved theirs plain, and so did I. Thanks for posting!', 'October 10, 2016 10:06 PM', '42', 'DESIGN2'),
(335, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'DELICIOUS! I made this in a bundt pan and cooked it for about 45 mins. and it came out WONDERFULLY. Also added a little bit of Nutella for a little something extra in the frosting and it was beautiful. Thanks for a great recipe!', 'October 10, 2016 10:07 PM', '43', 'DESIGN2'),
(336, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I needed to use up some pumpkin puree that I had prepared and froze last fall. Also needed to use up some buttermilk. Didn''t have any pumpkin pie spice, but found a substitute recipe on line. I froze them and have been enjoying them in the morning for breakfast. I didn''t frost them, so they are really just like muffins.', 'October 10, 2016 10:07 PM', '43', 'DESIGN2'),
(337, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Absolutely AMAZING! I bought a can of pumpkin when it finally came in stock, and have been waiting for a worthy recipe to use it on. I opted to make pumpkin muffins, so I didn''t use the frosting; otherwise, I followed the recipe to the tee. These guys are so moist! I was able to make 12 muffins and 3 mini muffins. I added toasted walnuts to some of the batch, which was a great idea. I plan on making these again this week with the walnuts. Also, I watched mine and ceased baking at 15 minutes, so ', 'October 10, 2016 10:07 PM', '43', 'DESIGN2'),
(338, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Oh Shannon, such a special and attractive recipe. Made this for a bar-b-q party we had for family and friends and used lavender from my garden. I followed the directions exactly except made them in mini-muffin pans so everyone would have a taste and they were almost gone before the meal started. They were so easy and looked so elegant on the serving table. Everyone at the party - men, women AND picky kids loved them. Thanks for a simple but elegant recipe', 'October 10, 2016 10:08 PM', '44', 'DESIGN2'),
(339, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I loved these cupcakes! I used lavender that was sent to me by my friend Rita. I also used a buttercream icing, decorating them with a lavender sprig. They got rave reviews all around! Made for ZWT 3 :)', 'October 10, 2016 10:08 PM', '44', 'DESIGN2'),
(340, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'look forward to trying this when i get some lavender. I somehow knew FT was the one who had rated it, smiles..and her review already tells me i will love it', 'October 10, 2016 10:08 PM', '44', 'DESIGN2'),
(341, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Really good cupcakes. I used crushed pineapple instead of the tidbits and it turned out very well. They didn''t stick to the cupcake wrappers too bad. Just 2 of them became a little smushed when I gently tried to coax them out of the pan for serving. Those two just had to be sampled before the party!! I can''t wait to make these again.', 'October 10, 2016 10:12 PM', '46', 'DESIGN2'),
(342, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Really good flavor. I used regular muffin pans. Next time I would use large muffin pans. My pans ran over a little. Made for Best of 2012.', 'October 10, 2016 10:12 PM', '46', 'DESIGN2'),
(343, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'OH WOW!!!!! These are fabulous!!! They are so moist and so full of flavor with using the pineapple juice. I made these in the very early morning hours and just before my DS and his girlfriend left to go out to lunch, she tried one and requested that she be able to take at least one home for her father that loves pineapple upside down cake. I followed exactly as written except that I made 12 jumbo sized cupcakes!!! They baked for 27 minutes and were perfectly done. I only had one cupcake that the', 'October 10, 2016 10:12 PM', '46', 'DESIGN2'),
(344, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made this recipe today for my family and friends, they absolutely LOVED THEM. Im thinking another way to put the filling, I didt it with a spoon but I want them to look a little better. Definitely making this cupcakes this week again.', 'October 10, 2016 10:13 PM', '47', 'DESIGN2'),
(345, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I tried this only because it looked simple and I need to bake this type of cake for an event. Had to question no egg in chocolate cake, but proceeded as written. Tasteless chocolate cake with a whimp of a crumb hard to get down. Centers were fine, but overall, this is not a winner.', 'October 10, 2016 10:13 PM', '47', 'DESIGN2'),
(346, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made this recipe today for my daughter''s soccer banquet. I tastde one and it was delicious. The next time I make these I will use something different to put the cream cheese filling into the batter so they will be more uniform in appearance.', 'October 10, 2016 10:13 PM', '47', 'DESIGN2'),
(347, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Loved these cupcakes! I made these more of a dessert - I mixed some low-fat cream cheese with some marshmallow creme, put a scoop on top of the cupcakes, and put some strawberry slices on that. The strawberry soda really gave these a sweet fruity flavor and they were so moist. Thanks for sharing your recipe! Made for ZWT6, Zwizzle Chicks', 'October 10, 2016 10:15 PM', '48', 'DESIGN2'),
(348, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These are AWESOME! I just tested this recipe to see if I wanted to make them for my DS''s Valentine''s Day party next week, and we both agreed they were perfect. I made it exactly as directed but used storebought red sprinkles. The cake part is so tender and light. I think for the party I''ll go the extra mile and make homemade cream cheese frosting (Kittencal''s recipe), but the recipe is wonderful as is. Thanks for a keeper that I''ll be sure to use again and again. :-)', 'October 10, 2016 10:15 PM', '48', 'DESIGN2'),
(349, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Alli - Pop ! Yep pop them right into your mouth! Delicious cupcake - so very moist and tender. I made a homemade buttercream frosting for these this time and last night served with a few sliced strawberries on top (but of course by the time of photos this morning the strawberries were gone). I made 12 in heart shaped tins and received 10 in regular sized muffin pan (the hearts were a bit larger than a normal muffin tin). The flavor of the soda does not really appear within the cupcake but the ap', 'October 10, 2016 10:15 PM', '48', 'DESIGN2'),
(350, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Delicious!! Finely chopped the walnuts and it added a nice crunch. Did not use raisins. I only made half the frosting, and it made me about 30 small cupcakes. I left 6 without frosting and they were also delicious - great breakfast food!', 'October 10, 2016 10:17 PM', '49', 'DESIGN2'),
(351, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'A recipe for keeps! I made these cupcakes during a birthday for the first time and I followed every detail and magic! Everybody liked it! Thanks for this recipe!', 'October 10, 2016 10:17 PM', '49', 'DESIGN2'),
(352, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'My family loved this, I mixed everything but the flour, then I added the flour 1 tablespoon at a time and it came out perfect.', 'October 10, 2016 10:17 PM', '49', 'DESIGN2'),
(353, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Followed this recipe exactly and the outcome was amazing! I made these for my boyfriend''s work function and he came back with rave reviews. Something along the lines of, "they were like eating heaven"...haha. I measured out a 1/4 cup batter for each cupcake and in the end I only had 16 instead of 28. The recipe can easily be doubled though, and next time I''ll have to do that since people were eating them like crazy! Thanks for the awesome recipe. It''s definitely a keeper!', 'October 10, 2016 10:19 PM', '50', 'DESIGN2'),
(354, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I decided to "come out" about my pregnancy using pink (cherry) and blue (blueberry) cupcakes, and this recipe caught my eye for the former. I made the batter and cheesecake filling exactly by the recipe, but because I needed to be able to frost the cupcakes pink, I added the pie filling on top of the cheesecake layer and then put just enough cupcake batter over that to cover the cherries. Baking time was about the same and they rose beautifully in the oven but, as expected, they sank in the midd', 'October 10, 2016 10:19 PM', '50', 'DESIGN2'),
(355, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were quite tasty, but the proportions in the recipe seemed off. I was left with 16 overflowing cupcakes instead of 28 normal-sized ones. I think I''d use my 3-tbsp sized ice cream scoop next time for the batter. I''d also make twice as much cheesecake filling because the "heaping tbsp" didn''t go far enough, and the filling is too good to skimp on!', 'October 10, 2016 10:19 PM', '50', 'DESIGN2'),
(356, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I''ve been making these for years now and everyone always loves them. They''re definately one of my all time favorite recipes! A great twist for cupcakes.', 'October 10, 2016 10:20 PM', '51', 'DESIGN2'),
(357, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These cupcakes are so scrumptious! I did change a few minor things: used 1 1/2 teaspoons cinnamon and 1/2 teaspoon cardamom, and used 1/4 cup vegetable oil and 1/4 cup applesauce. I''m sure my cupcakes would have turned out incredibly moist if I''d made them with all the oil called for, but they were just fine as is. That icing is to die for! My hubby had to pull the pan out of my hands after I was done frosting the cupcakes, because I kept eating what was left over! So good, thank you!', 'October 10, 2016 10:20 PM', '51', 'DESIGN2'),
(358, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Mmmm! I love this recipe! My kids were eating the cupcakes without frosting and loving it. However, the frosting makes the cupcake all the better. Although I did have a teenage daughter who scraped off the frosting because it was too sweet for her. The rest of us adored it! Thanks for the yummy way to use my zuch!', 'October 10, 2016 10:20 PM', '51', 'DESIGN2'),
(359, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These are soooo good! I love mint and chocolate -- one of my favorite food/flavor combos EVER! I made these as directed, except I used peppermints since it is not yet candy cane season! I will definitely be making these again around Christmas time! :)', 'October 10, 2016 10:21 PM', '52', 'DESIGN2'),
(360, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'We loved these! All I could really find to use in place of candy canes were Altoid mints crushed finely in my food processor. It worked well; it made the cupcakes and frosting very minty and refreshing! I used my own homemade buttercream frosting with the peppermint powder folded in. Thank you for posting! ', 'October 10, 2016 10:21 PM', '52', 'DESIGN2'),
(361, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I had lots of peppermint hard candy so I used those instead of candy canes to make these cupcakes. They were so good! The entire family enjoyed them. Can''t wait for the holiday sales. Looks like we''ll be buying lots of candy canes this year!', 'October 10, 2016 10:21 PM', '52', 'DESIGN2'),
(362, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'MicDoc these are wonderful little cupcakes. Like rhondalynne I put cream cheese frosting on mine and they combination was scrumptious. My husband doesnt like fruit, orange being no exception but he really liked these and his rating was 4 stars. But as I thought they were 5, I''m giving them 5 stars. I''ll definately make these again.', 'October 10, 2016 10:22 PM', '53', 'DESIGN2'),
(363, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These were so fast and easy to prepare!! Used low-fat marmalade and milk. Used Regular White Icing (Add Butter to Make Buttercream Icing) as frosting. ', 'October 10, 2016 10:22 PM', '53', 'DESIGN2'),
(364, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Nice cupcakes! They are lovely & moist, with the marmelade taste coming through nicely. I frosted them with a cream cheese frosting to which I added some marmelade too. Thanks!', 'October 10, 2016 10:22 PM', '53', 'DESIGN2'),
(365, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'We liked these, but we were about a 3 1/2 on the ratings on this one (I rounded up for the sake of stars!). I used fresh squeezed orange juice and the taste was not detectable. Next time I would use orange juice for all the liquid (both the oj and the water). I used whole wheat pastry flour and splenda for the sugar. These had a nice subtle chocolate taste, but we would have liked more orange taste and the kids asked for more chocolate chips. I got 12 muffins out of this (but I have old small mu', 'October 10, 2016 10:24 PM', '54', 'DESIGN2'),
(366, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made this with 2/3 wheat flour 1/2 splenda and oj instead of water in addition to the oj called for and opted not to use the optional powdered sugar. Didn''t find anything subtle about the chocolate flavor but the orange certainly was. DH couldn''t taste the orange at all even with all the oj I put in. I could taste it a little but then I knew it was there. I thought it was just the right amount of sweetness and just right for the chocolate chips too, but I did find them a little dry compared to', 'October 10, 2016 10:24 PM', '54', 'DESIGN2'),
(367, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'These turned out quite yummy!! Few things I changed, used 3/4 cup orange juice and left the water out. Also used some white chocolate chips that I needed to use up!! Made 12 muffins out of the mix. Thanks!', 'October 10, 2016 10:24 PM', '54', 'DESIGN2'),
(368, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Very nice! The taste and texture is actually like a doughnut! I used a white cake mix because it was all I had on hand. The batter is super thick and has to be spooned and then pushed with a spatula into the baking cups. I tried rolling the baked cupcakes in the cinnamon sugar right after coming out of the oven, but the mixture did not want to adhere to the cake. Still tasty! Thanks so much, Crafty Lady!', 'October 10, 2016 10:25 PM', '55', 'DESIGN2'),
(369, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Oh....these are so good. And, especially right from the oven. The nutmeg does add a nice touch to the taste of the donut-cupcake. Just like the donut-holes you get at the grocery. Thanks Glo!!! Made for Phototag~', 'October 10, 2016 10:25 PM', '55', 'DESIGN2'),
(370, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I piped mine into the cupcake liners. Worked very well!', 'October 10, 2016 10:25 PM', '55', 'DESIGN2'),
(371, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'and, when i did make these as cupcakes a few different times, they were TOO DIE FOR!!! i & my fam (none of whom are vegan) are HUGE lemon fans & these were INCREDIBLE!!!', 'October 11, 2016 12:24 AM', '25', 'DESIGN2'),
(372, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Pretty good! I was sceptical at first, because the batter was runny, and looked pale and almost unappetising after cooked. But I gave it a chance, and dressed it up with frosting to look pretty. The cake was actually really delicious, light and almost refreshing.', 'October 11, 2016 12:24 AM', '25', 'DESIGN2'),
(373, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'I made these for a big family on Easter yesterday and they were a huge hit. They were all shocked they were vegan and so very light. The cake turned out perfect, light and mild in lemon flavor. The icing was a no go the first time as it separated and went clumpy when I followed the directions to the letter. I remade the icing by mixing the sugar with just a little milk, adding vanilla and more margarine. I figured the lemon was causing the separation so I omitted that.', 'October 11, 2016 12:24 AM', '25', 'DESIGN2'),
(374, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'This is so delicious. Great recipe.', 'October 16, 2016 4:45 PM', '55', 'DESIGN2');

-- --------------------------------------------------------

--
-- Table structure for table `posted`
--

CREATE TABLE `posted` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `ACCOUNT_TYPE` varchar(20) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `IMAGEURL` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(5000) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TEMPLATENAME` varchar(50) NOT NULL,
  `RECIPES` varchar(5000) NOT NULL,
  `COMMAND` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `CATEGORIES` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted`
--

INSERT INTO `posted` (`NO`, `NAME`, `ACCOUNT_TYPE`, `TITLE`, `IMAGEURL`, `DESCRIPTION`, `DATE`, `TEMPLATENAME`, `RECIPES`, `COMMAND`, `PRICE`, `CATEGORIES`) VALUES
(1, 'Jm Abril', 'User', 'Heart Cupcakes', 'post-1.jpg', 'These heart-in-the-middle cupcakes are so cute and are easy to make! Change the center shape for lots of different holidays and celebrations.', 'September 17, 2016 06:45 PM', 'DESIGN2', '1 Box|Cake Mix|3 Pieces|Large Eggs|1/2 Cup|Melted Butter(not margarine)|1 Cup|Water', 'FREE', '', 'CUPCAKES'),
(2, 'Mae Gregorio', 'Administrator', 'Pink Lemon Cupcakes', 'post-2.jpg', 'Today''s post comes to you compliments of the fact that I can''t actually raise my arms higher than the keyboard. Last week has been a whirlwind of activity including work, showing an out-of-town guest around the city, more work, running after my amazing sister as she did the Chicago Triathlon (to take pictures, of course, no way am I doing THAT anytime soon), and helping move a friend''s parents halfway across town. It is not an understatement when I say that everything hurts. For example, did you know that the muscles in your fingers could be sore? I surely didn''t. Somewhere in that insanity I had also found time to make two dozen lemon cupcakes for a bridal shower for a friend at work.|I hadn''t actually had time to go grocery shopping in weeks, so the fact that these cupcakes came out with all my substitutions and tweaks is actually a bit of a miracle, but they came out great, tender and just the right combination of tart and sweet, and were devoured by my coworkers in just a few minutes. ', 'September 22, 2016  02:16 PM', 'DESIGN2', '2 1/4 cups|flour|1 Tbsp|baking powder|1/2 tsp|salt|1 cup|milk (I used 1%)lemon zest from two lemons|1/4 cup|lemon juice, from the two lemons you zested|4 pieces|large egg whites|1 1/2 cups|sugar|8 Tbsps|(1 stick) unsalted butter, at room temp|1 tsp|vanilla extract\n1/2 teaspoon lemon extract (or lemon oil if you have it)', 'FREE', '', 'CUPCAKES'),
(3, 'Mae Gregorio', 'Administrator', 'Vegan Vanilla Cupcake Recipe', 'post-3.jpg', 'I also think that these would make a perfect Valentines Day gift! Decorate with cute little vegan heart-shaped lollies for a romantic edible gift!|Ok... when I first undertook a vegan lifestyle I asked myself, "Will I ever be able to eat another cupcake?". I shuddered at the thought so I developed this FAIL-PROOF cupcake recipe. I had published this on Veggieful a few months ago but I decided to revamp the page and change the frosting recipes. So, lets cut to the chase... these are most delicious and the fluffiest vegan cupcakes I have EVER eaten! I am not joking. I made a massive batch of these the other day for recipe-testing purposes. One half went to Jerome''s work and the other half went to our friends and family. There were many compliments and amazed responses to these easy cupcakes... my mum said that they were the "best cupcakes" she had "ever eaten" while Jerome''s co-worker stated that they were the "fluffiest" cupcakes she had ever had... little did she know that they were vegan! Tee hee hee. I find that when I make these for others, there are a number of things guaranteed... Firstly, you will be asked for the recipe. Secondly, they will devour it in seconds and lastly, they will be talking about them for days. As I said above, these are a fail-proof recipe... meaning, I have never had a problem with them, they always work out and they never fail to impress others. Every person needs an amazing cupcake recipe... and this is it! Check out our frosting and icing recipes.', 'September 22, 2016  02:16 PM', 'DESIGN2', '1 cup|all-purpose flour, sifted|2 teaspoons|baking powder|pinch|salt|½ cup|vegan white sugar|1/4 cup|plain-flavoured oil|¾ cup|Soy Milky Lite|1 teaspoon|vanilla extract|½ tablespoon|apple cider vinegar', 'FREE', '', 'CUPCAKES'),
(4, 'Mae Gregorio', 'Administrator', 'Icee Cupcakes', 'r1.jpg', 'Softball season is officially over. It’s kind of sad, really, because Jordan loved it so much. I will not miss having to get dinner ready for her at 4:00 and packing it up in a cooler for Mel and I. Nor will I miss the post-school night-game whining.\n|\nI will miss watching Jordan learn how to catch. And watching her hit, without a tee, for entire games.\n|\nLast weekend I volunteered to host the end-of-the-year softball party. For 12 first-graders, their parents, and siblings.\n|\nYes, I’m certifiably insane.\n|\nBut I love doing it. Even when I was going crazy on Friday trying to get the house clean and do last minute prep and make eight dozen mini cupcakes, when I was growling “why do I do this???” at my husband, I still was having fun.\n|\nFor the cupcakes, I decided to go with a “softball snack shack” theme. You know, that crap you buy while you’re bored out of your mind watching your kid play. Popcorn, hot cocoa, Icees, candy.\n|\nI made mini cupcakes out of two box mixes, one yellow cake and one chocolate. FYI, that makes a lot of minis. I had no idea how many it would make. Be prepared. Probably 3-4 dozen per box.\n|\n{Just because I majored in math, you didn’t expect me just know that a mix making 24 regular sized cupcakes would make a whole lot of mini ones, right?}\n|\nI made one large batch of homemade buttercream and divided it into four portions to make the four flavors of cupcake.\n|\nThese ICEE cupcakes were the biggest hit. The frosting is made with cherry jell-o. Joan at Chocolate, Chocolate, and More used Jell-O in cupcakes awhile back and when brainstorming ideas, I came up with these.\n|\nThe straws are from Target. I may have * accidentally* brought home a couple extra with my diet Pepsi fountain drink. Cut them in fourths and they are the perfect size for mini cupcakes.\n|\nHere is a link to the printable ICEE logo. I printed them on regular paper and attached them to a paper liner with double stick tape. Using those cute little paper cups would be great too, but I didn’t have any.\n|\nI must say, if you’re making cupcakes for a crowd, make minis. People eat more when food is miniature. I had no cupcakes left. The kids ate way too many, but hey, then I didn’t.', 'September 28, 2016 11:12 PM', 'DESIGN2', '1 box |yellow cake mix made and baked as directed in mini cupcake pans (about 4 dozen cupcakes)|\r\n1 cup| room temperature butter|\r\n4 cups| powdered sugar|\r\n1 teaspoon |vanilla|\r\n1 small box| cherry Jell-O mix|\r\n1-2 tablespoons| maraschino cherry juice (optional)|\r\n1 piece|Cream or milk if needed for consistency|\r\n1 piece|Red straws', 'SELL', '350.00', 'CUPCAKES'),
(5, 'Mae Gregorio', 'Administrator', 'Strawberry Filled Cupcakes', 'r2.jpg', 'I love to find unique and fun cupcake recipes to try and thought these Strawberry Filled Cupcakes with Cream Cheese Frosting might be good. They turned out to be AMAZING! They are really easy to make, but look and taste like something straight out of a gourmet bakery.  |\nDefinitely a must-try recipe!', 'October 06, 2016 04:07 AM', 'DESIGN2', 'Boxed |cake mix (I use this kind)|\r\n3 pieces| Large Eggs|\r\n1/2 cup |melted butter (not margarine)|\r\n1 cup| water|\r\n\r\nOne jar| high-end strawberry jelly or preserves (my favorite)|\r\n2 oz |Cream Cheese|\r\n1/4 cup |powdered sugar|\r\n\r\n10 Tbsp |butter, slightly firm but not cold|\r\n10 oz |cream cheese, cold|\r\n2 1 /2 Tbsp |sour cream|\r\n1/2 tsp |vanilla extract|\r\n5 cups |powdered sugar|', 'SELL', '300.00', 'CUPCAKES'),
(6, 'Mae Gregorio', 'Administrator', 'Apple Cupcakes', 'post-9.jpg', 'In-season Red Delicious apples are the inspiration for these adorable fall treats.', 'October 09, 2016 02:05 PM', 'DESIGN2', '1 piece|Cupcakes (homemade or storebought) with red cupcake liners|\r\n1 piece|Unfrosted mini doughnuts|\r\n1 piece|Red-tinted buttercream frosting|\r\n1 piece|Red sanding sugar|\r\n1 piece|Pretzel sticks|\r\n1 piece|Green sour strap candy', 'FREE', '', 'CUPCAKES'),
(7, 'Mae Gregorio', 'Administrator', 'S’MORE CUPCAKES', 'post-10.jpg', 'There''s no getting around the fact that these cupcakes take a little leg work, but one bite will prove they''re worth it, with a graham cracker and chocolate crust layered with a chocolate cake and finished with fluffy marshmallow topping.', 'October 09, 2016 02:17 PM', 'DESIGN2', '6 pieces | graham cracker boards (oblongs)	|\n2 tbsp.  | each sugar and melted butter	|\n½ 		 | c. mini semisweet chocolate chips	|\n2¼ | c. all-purpose flour |\n1½ | c. sugar |\n¾ | c. unsweetened cocoa powder |\n¾ tsp. | baking soda |\n¼ tsp.|  salt |\n1¼  | c. buttermilk |\n2 piece  | large eggs |\n½  | c. each canola oil and water |\n1 tbsp. |  Tbsp vanilla extract |\n6 pieces |large egg whites|\n1½| c. sugar|\n½ tsp. |cream of tartar|\n1 tsp.| vanilla extract|\n1 piece|Small handheld butane torch\n', 'FREE', '', 'CUPCAKES'),
(8, 'Mae Gregorio', 'Administrator', 'LEMON-HONEY CUPCAKES', 'lemon-honey.jpg', 'Guests will be buzzing about these fluffy cupcakes, which have grated lemon zest, lemon juice and honey not only in the batter, but in the luscious frosting as well. Add a little sparkle by finishing them with a sprinkling of sanding sugar or a candy bee.', 'October 10, 2016 04:20 PM', 'DESIGN2', '2¾ c.| all-purpose flour|\r\n¾ tsp.| each baking powder and baking soda|\r\n½ tsp.| salt|\r\n½ c.| reduced-fat sour cream|\r\n¼ c.| milk|\r\n1½ tbsp.| grated lemon zest|\r\n4 tbsp.| lemon juice|\r\n¾ c.| unsalted butter|\r\n¾ c.| honey|\r\n¼ c.| sugar|\r\n3| large eggs|\r\n1 c.| unsalted butter|\r\n¼ c.| honey|\r\n1½ tbsp.| grated lemon zest|\r\n4 c.| confectioners’ sugar|\r\n7 tsp. to 8 tsp| lemon juice|\r\nFew drops| yellow food color|\r\n1pc| Tootsie Roll|\r\n2 piece| of string|\r\n1pc| Yellow peanut M&M|\r\n1pc| Brown food marker|\r\n1pc| Clear spice drop candies|\r\n1pc| Small cookie cutter|\r\n', 'SELL', '250.00', 'CUPCAKES'),
(9, 'Mae Gregorio', 'Administrator', 'CHOCOLATE LOVEBUGS', 'choco-lovebugs.jpg', 'These adorable cupcakes are sure to warm your sweetie''s heart and stomach! ', 'October 10, 2016 4:25 PM', 'DESIGN2', 'Mini| paper liners|\r\n? c.| granulated sugar|\r\n½ c.| all-purpose flour|\r\n3 tbsp.| unsweetened dark cocoa|\r\n1 tsp.| baking powder|\r\n¼ tsp.| kosher salt|\r\n4| large egg whites|\r\n2 tbsp.| canola oil|\r\n1 tsp.| pure vanilla extract|\r\n2 oz.| bittersweet chocolate|\r\n3| large egg whites|\r\n½ tsp.| cream of tartar|\r\n1 lb.| confectioners'' sugar|\r\nRed gel| food coloring|\r\nRed, pink, and white| medium nonpareils|\r\nRed, pink, and white| sugar hearts|\r\n1pc| Sanding sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(10, 'Mae Gregorio', 'Administrator', 'STRAWBERRY SHORT-CUPCAKES', 'starwberry-shortcup.jpg', 'Transform this classic treat with a homemade cupcake that''s filled with an irresistible combination of whipped cream, strawberry jam, orange zest and strawberries.', 'October 10, 2016 04:30 PM', 'DESIGN2', '1pc| Baking spray (cooking spray with flour)|\r\n2 stick| butter|\r\n1½ c.| granulated sugar|\r\n1 tbsp.| baking powder|\r\n½ tsp.| salt|\r\n4| large eggs|\r\n1 c.| milk|\r\n2 tsp.| vanilla extract|\r\n2.67 c. all-purpose flour\r\n½ c.| seedless strawberry jam|\r\n1 tsp.| grated orange zest|\r\n2 tsp.| freshly squeezed orange juice|\r\n1 container| strawberries|\r\n1¾ c.| heavy (whipping) cream|\r\n3 tbsp.| confectioners’ sugar|\r\nGarnish:| additional strawberries, quartered (optional)| \r\n', 'FREE', '', 'CUPCAKES'),
(11, 'Mae Gregorio', 'Administrator', 'PEANUT BUTTER AND CHOCOLATE CUPCAKES', 'peanut-but-choco.jpg', 'The ultimate recipe for PB-and-chocolate fans, these moist, chocolatey cupcakes come complete with a sweet peanut butter filling and a silky slathering of chocolate–sour cream frosting. ', 'October 10, 2016 04:33 PM', 'DESIGN2', '1¾ c.| all-purpose flour|\r\n½ c.| unsweetened cocoa powder|\r\n1 tsp.| baking soda|\r\n½ tsp.| salt|\r\n½ c.| milk|\r\n½ c.| reduced-fat sour cream|\r\n¾ c.| unsalted butter|\r\n1¼ c.| sugar|\r\n½ c.| creamy peanut butter|\r\n3| large eggs|\r\n½ c.| creamy peanut butter|\r\n3 tbsp.| unsalted butter|\r\n1½ c.| confectioners’ sugar|\r\n3 to 4 Tbsp| milk|\r\n2 c.| semisweet chocolate chips|\r\n1 c.| reduced-fat sour cream|\r\n', 'FREE', '', 'CUPCAKES'),
(12, 'Mae Gregorio', 'Administrator', 'COCONUT CUPCAKES AND COCONUT-WHITE CHOCOLATE FROSTING', 'coconut-cup.jpg', 'The great thing about coconut is its versatility; it feels refreshing in warm weather and comforting in cold. This recipe makes the most of it, featuring a triple whammy of coconut in the batter—flakes, extract and milk—and a coconut cream cheese frosting.', 'October 10, 2016 04:35 PM', 'DESIGN2', '2¼ c.| all-purpose flour|\r\n2 tsp.| baking powder|\r\n½ tsp.| salt|\r\n½ c.| sweetened flaked coconut|\r\n¾ c.| unsalted butter|\r\n1½ c.| sugar|\r\n3| large eggs|\r\n½ tsp.| coconut extract or vanilla extract|\r\n¾ c. light coconut milk (not cream of coconut)\r\n1 c.| white chocolate baking chips|\r\n½ c.| unsalted butter|\r\n1 brick| cream cheese|\r\n½ tsp.| coconut extract|\r\n2½ c.| confectioners’ sugar|\r\nGarnish:| sweetened flaked coconut, toasted|\r\n', 'FREE', '', 'CUPCAKES'),
(13, 'Mae Gregorio', 'Administrator', 'BOSTON CREAM CUPCAKES', 'boston-cream.jpg', 'This miniature version of the classic custard pie leaves nothing out, with rich vanilla pudding, buttermilk and a semisweet chocolate glaze. ', 'October 10, 2016 04:36 PM', 'DESIGN2', '2½ c.| all-purpose flour|\r\n¾ tsp.| baking soda|\r\n½ tsp.| each baking powder and salt|\r\n¾ c.| unsalted butter|\r\n1¼ c.| sugar|\r\n3| large eggs|\r\n2 tsp.| vanilla extract|\r\n1 c.| buttermilk|\r\n1 package| cook & serve vanilla pudding|\r\n1¼ c.| milk|\r\n½ tsp.| vanilla extract|\r\n8 oz.| chopped|\r\n? c.| each sugar and water|\r\n3 tbsp.| unsalted butter|\r\n', 'SELL', '323.00', 'CUPCAKES'),
(14, 'Mae Gregorio', 'Administrator', 'LEMON BUTTERFLY CAKES', 'lemon-butterfly.jpg', 'Famed for her cake pops, Bakerella (a.k.a. Angie Dudley) whipped up these cheery cupcakes as a special treat for Woman''s Day. They''re full of lemony flavor and only require simple baking and kitchen tools.', 'October 10, 2016 04:37 PM', 'DESIGN2', '1¼ c.| all-purpose flour|\r\n1 tsp.| baking powder|\r\n½ tsp.| kosher salt|\r\n1 c.| granulated sugar|\r\n1¼ c.| unsalted butter|\r\n2| large eggs|\r\n1 tbsp.| lemon zest|\r\n1 tsp.| pure vanilla extract|\r\n2 tbsp.| fresh lemon juice|\r\n¼ c.| whole milk|\r\n3 c.| confectioners’ sugar|\r\n1pc| white sanding sugar|\r\n12| Good & Fruity or Good & Plenty candies or jelly beans|\r\n1pc| Candy Butterfly Wings| \r\n', 'FREE', '', 'CUPCAKES'),
(15, 'Mae Gregorio', 'Administrator', 'GRASSY LEMON CUPCAKES WITH BEES AND FLOWERS', 'grassy-lemon.jpg', 'These cupcakes will have your guests buzzing!', 'October 10, 2016 04:38 PM', 'DESIGN2', '2 1/2 c.| all-purpose flour|\r\n2 tsp.| baking powder|\r\n1/2 tsp.| kosher salt|\r\n1 1/2 c.| granulated sugar|\r\n1 tbsp.| fresh lemon zest|\r\n2 tbsp.| fresh lemon juice|\r\n1 tsp.| pure vanilla extract|\r\n1 c. (2 sticks)| unsalted butter, at room temperature|\r\n3| large eggs|\r\n1 c.| whole milk|\r\n1 c. (2 sticks)| unsalted butter, at room temperature|\r\n1 lb.| confectioners sugar|\r\n2 tbsp.| heavy cream|\r\n2 tsp.| pure vanilla extract|\r\n1pc| green gel paste food coloring|\r\n1pc| Yellow fondant|\r\n1pc| Black fondant|\r\n1pc| Corn syrup|\r\n1pc| Sliced almonds|\r\n1pc| Flower stamens|\r\n1pc| Royal icing| \r\n', 'FREE', '', 'CUPCAKES'),
(16, 'Mae Gregorio', 'Administrator', 'CARROT CUPCAKES WITH HONEY CREAM CHEESE', 'carrot-cup.jpg', 'PER CUPCAKE 377 CAL, 21 G FAT (5 G SAT FAT), 54 MG CHOL, 290 MG SOD, 5 G PRO, 44 G CAR, 1 G FIBER', 'October 10, 2016 04:40 PM', 'DESIGN2', '1pc| Parchment paper|\r\n1/2 c.| walnuts|\r\n1 1/2 c.| all-purpose flour|\r\n1 tsp.| baking powder|\r\n1 tsp.| baking soda|\r\n2 tsp.| pumpkin pie spice|\r\n1/4 tsp.| kosher salt|\r\n1/2 c.| dark brown sugar|\r\n1/4 c.| granulated sugar|\r\n2| large eggs|\r\n1/2 c.| canola oil|\r\n2 tbsp.| fresh orange juice|\r\n1/2 lb.| carrots, peeled and grated (about 1 3/4 cups)|\r\n1/2 c.| golden raisins|\r\n1/4 c.| dried apricots, roughly chopped|\r\n1 8-ounce| package cream cheese, at room temperature|\r\n1/3 c.| sour cream|\r\n1/2 c.| confectioners'' sugar|\r\n2 tbsp.| honey|\r\n1pc |Orange and green gel paste food colors, for decorating| \r\n', 'FREE', '', 'CUPCAKES'),
(17, 'Mae Gregorio', 'Administrator', 'MORPHOS BUTTERFLIES CUPCAKES', 'morphos-cup.jpg', 'These cupcakes may look too good to eat, but we assure you they''ll fly off of the table. The candy details are just as delicious as the cupcakes themselves.', 'October 10, 2016 04:42 PM', 'DESIGN2', '1½ c.| dark cocoa melting wafers|\r\n1½ c.| blue candy melting wafers|\r\n2 tbsp.| yellow nonpareils|\r\n¾ c.| dark chocolate frosting|\r\n1½ c.| Vanilla Frosting|\r\n12| vanilla cupcakes baked in white paper liners|\r\n¾ c.| white coarse decorating sugar|\r\n24| brown M&M''s|\r\n', 'FREE', '', 'CUPCAKES'),
(18, 'Mae Gregorio', 'Administrator', 'ROSE PETAL CUPCAKES', 'rose-petal.jpg', 'The only thing better than fresh roses are roses you can eat—or at least the petals! Frosting aficionados, this is the recipe for you.', 'October 10, 2016 04:43 PM', 'DESIGN2', '1 box| French vanilla cake mix|\r\n1½ c.| light unsweetened coconut milk|\r\n3| large eggs|\r\n¼ c.| canola oil|\r\n1½ tsp.| each coconut and vanilla extract|\r\n', 'FREE', '', 'CUPCAKES'),
(19, 'Mae Gregorio', 'Administrator', 'ICE CREAM', 'icecream.jpg', 'These mini takes on ice cream cake are loaded with possibilities. Once the milk chocolate shell sets, you can fill it with any flavor of frozen confection. Then just add a dollop of whipped topping and decorate with a cute cookie for a single-serving summer treat.', 'October 10, 2016 04:44 PM', 'DESIGN2', '½ c.| milk-chocolate chips|\r\n1 pt.| Ice cream|\r\n.67 c.| Frozen Whipped Topping|\r\n1pc| Liquid food colors (optional)|\r\nGarnish:| 4 Keebler Bug Bites cinnamon graham crackers, decorated (directions follow)|\r\n', 'FREE', '', 'CUPCAKES'),
(20, 'Mae Gregorio', 'Administrator', 'HIDDEN SURPRISE CUPCAKES', 'hidden-surprise.jpg', 'Strawberry fans take note: This luscious cupcake recipe is for you, with a fluffy white cake filled with a sweet strawberry jam center and a thick cream cheese frosting flecked with fresh berries.', 'October 10, 2016 04:45 PM', 'DESIGN2', '1 stick| unsalted butter|\r\n.67 c.| sugar|\r\n1½ tsp.| baking powder|\r\n¼ tsp.| salt|\r\n2| large eggs|\r\n½ c.| milk|\r\n1 tsp.| vanilla extract|\r\n1½ c.| all-purpose flour|\r\n½ c.| seedless strawberry jam|\r\n½ c.| diced strawberries|\r\n3 tbsp.| sugar|\r\n3 oz.| chilled cream cheese|\r\n¾ c.| heavy (whipping) cream|\r\nGarnish:| 12 whole strawberries| \r\n', 'FREE', '', 'CUPCAKES'),
(21, 'Mae Gregorio', 'Administrator', 'BROWNIE CUPCAKES', 'brownie.jpg', 'This recipe jazzes up your basic brownie with a decadent cream cheese topping, fresh raspberries and a fun new shape.', 'October 10, 2016 04:46 PM', 'DESIGN2', '4 oz.| cream cheese|\r\n½ stick| butter|\r\n2 c.| confectioners’ sugar|\r\n1 stick| butter|\r\n4 oz.| SemiSweet Baking Chocolate|\r\n1 c.| sugar|\r\n2 tsp.| vanilla extract|\r\n3| large eggs|\r\n2/3 c.| all-purpose flour|\r\n2 tbsp.| unsweetened cocoa powder|\r\n½ tsp.| baking powder|\r\nGarnish:| 12 fresh raspberries| \r\n', 'FREE', '', 'CUPCAKES'),
(22, 'Mae Gregorio', 'Administrator', '“CORN-ON-THE-COBCAKES” WITH BROWN BUTTER CREAM FROSTING', 'corn-cobcakes.jpg', 'If you''re not a jelly bean enthusiast, don''t be deterred—these cupcakes are every bit as delightful without them, featuring a unique cornmeal batter and heavenly brown butter frosting.', 'October 10, 2016 04:28 47', 'DESIGN2', '2| large eggs|\r\n¾ c.| canola oil|\r\n1¼ c. plus 5 Tbsp| whole milk|\r\n3 tsp.| pure vanilla extract|\r\n2½ c.| all-purpose flour|\r\n1½ c.| granulated sugar|\r\n½ c.| yellow cornmeal|\r\n2 tsp.| baking powder|\r\n½ tsp.| plus pinch kosher salt|\r\n¾ c.| unsalted butter|\r\n1 box| confectioners’ sugar|\r\n16| corn holders, assorted yellow and white jelly beans, 4 yellow fruit chews (such as Starburst), black and white sanding sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(23, 'Mae Gregorio', 'Administrator', 'SPECIAL MOCHA CUPCAKES', 'special-mocha.jpg', '"Topped with a fluffy frosting and chocolate sprinkles, these extra rich, extra delicious cupcakes smell wonderful while baking — and taste even better!"', 'October 10, 2016 04:48 PM', 'DESIGN2', '1 1?2 cups| flour|\r\n1 cup| sugar|\r\n1?3 cup| baking cocoa|\r\n1 teaspoon| baking soda|\r\n1?2 teaspoon| salt|\r\n2| eggs|\r\n1?2 cup| cold brewed coffee|\r\n1?2 cup| vegetable oil|\r\n3 teaspoons| cider vinegar|\r\n3 teaspoons| vanilla extract|\r\n3 tablespoons| semi-sweet chocolate chips|\r\n3 tablespoons| milk chocolate chips|\r\n1?3 cup| butter, softened|\r\n2 cups| confectioners'' sugar|\r\n1 -2 tablespoon| brewed coffee|\r\n1?2 cup| chocolate sprinkles| \r\n', 'SELL', '150.00', 'CUPCAKES'),
(25, 'Mae Gregorio', 'Administrator', 'LEMON GEM CUPCAKES', 'lemon-gem.jpg', '"What a delicious lemon cupcake! It''s light, delicate and not too sweet! I used a bit of lemon extract to enhance the flavor."', 'October 10, 2016 04:50 PM', 'DESIGN2', '1 1?3 cups| all-purpose flour|\r\n1?2 teaspoon| baking powder|\r\n3?4 teaspoon| baking soda|\r\n1?4 teaspoon| salt|\r\n1?4 cup| canola oil|\r\n2?3 cup| sugar, plus|\r\n2 tablespoons| sugar|\r\n1 cup| rice milk|\r\n1 teaspoon| vanilla extract|\r\n1?4 cup| lemon juice|\r\n1 tablespoon| lemon zest|\r\n1?4 cup| vegan margarine, softened (non hydrogenated)|\r\n1?4 cup| soymilk|\r\n2 tablespoons| lemon juice|\r\n2 cups| confectioners'' sugar, sifted| \r\n', 'FREE', '', 'CUPCAKES'),
(26, 'Mae Gregorio', 'Administrator', 'PEANUT BUTTER TRUFFLE CUPCAKES', 'peanut-but-truffle.jpg', '"I can''t say enough about these wonderful chocolate cupcakes — they''re a must-try for any peanut butter and chocolate lover! To save time, I made the truffles a day ahead."', 'October 10, 2016 04:51 PM', 'DESIGN2', '6 ounces| squares white baking chocolate, coarsely chopped|\r\n1?4 cup| creamy peanut butter|\r\n2 tablespoons |baking cocoa|\r\n1?2 cup| butter, softened|\r\n3?4 cup| sugar|\r\n2| eggs|\r\n1 teaspoon| vanilla|\r\n3?4 cup| flour|\r\n1?2 cup| baking cocoa|\r\n1?2 teaspoon| baking soda|\r\n1?4 teaspoon| salt|\r\n1?2 cup| buttermilk|\r\n1?2 cup| strong brewed coffee|\r\n3 ounces| squares semisweet chocolate, chopped|\r\n1?3 cup| heavy whipping cream|\r\n3 tablespoons| creamy peanut butter| \r\n', 'FREE', '', 'CUPCAKES'),
(27, 'Mae Gregorio', 'Administrator', 'TIRAMISU CUPCAKES', 'tiramisu.jpg', '"I give these 10 stars! They are absolutely wonderful and very easy. The mascarpone filling is to die for. I had to restrain myself from eating all of it before I used it in the recipe!"', 'October 10, 2016 04:52 PM', 'DESIGN2', '1 (18 1/4 ounce)| package white cake mix|\r\n3| eggs|\r\n1?3 cup| oil|\r\n1 1?4| cups water|\r\n2?3 cup| water, boiling|\r\n1?2 cup| confectioners'' sugar|\r\n1 1?2 tablespoons| instant coffee|\r\nMascarpone Filling\r\n\r\n1 cup| mascarpone cheese (from tub)|\r\n3 tablespoons| Kahlua (or coffee extract)|\r\n1?4 cup| sweetened condensed milk|\r\n1 (8 ounce)| container french vanilla cool whip|\r\n1 (8 ounce)| package cream cheese, softened|\r\n1?2 cup| butter, softened|\r\n2 cups| confectioners'' sugar|\r\n1 teaspoon| vanilla extract|\r\n1pc| chocolate shavings (to garnish)| \r\n', 'FREE', '', 'CUPCAKES'),
(28, 'Mae Gregorio', 'Administrator', 'RED VELVET CUPCAKES', 'red-velvet.jpg', '"This has been my go-to recipe for at least three years. My friends and family demand it for every party. Don''t skimp on the food coloring — it seems way too red, but it comes out perfectly and everyone loves it."', 'October 10, 2016 04:53 PM', 'DESIGN2', '1 (18 1/4 ounce) package| yellow cake mix|\r\n2 tablespoons| unsweetened baking cocoa|\r\n5| large eggs|\r\n1?2 cup| vegetable oil|\r\n1 cup| buttermilk|\r\n2 (1 ounce) bottles| red food coloring (do not reduce amount!)|\r\n1pc| cream cheese frosting| \r\n', 'FREE', '', 'CUPCAKES'),
(29, 'Mae Gregorio', 'Administrator', 'OREO CUPCAKES WITH OREO BUTTERCREAM', 'oreo-cup.jpg', 'Oreo fans take note: This is your go-to cupcake from now on. With a creamy cookie-based batter, frosting and topping, it''s Oreo heaven!', 'October 10, 2016 04:54 PM', 'DESIGN2', '3 cups| cake flour|\r\n1 tablespoon| baking powder|\r\n1?2 teaspoon| salt|\r\n16 tablespoons| unsalted butter, at room temperature|\r\n2 cups| sugar|\r\n5| large eggs, at room temperature|\r\n1 1?4 cups| buttermilk, at room temperature|\r\n1 tablespoon| vanilla extract|\r\n20| Oreo cookies (halves, with cream filling attached)|\r\n8 tablespoons| butter, room temperature|\r\n1?2 cup| vegetable shortening|\r\n4 cups| powdered sugar (1 lb)|\r\n1?2 teaspoon| butter flavoring or 1?2 teaspoon vanilla extract|\r\n6 tablespoons| Oreo cookies, finely crushed|\r\n10| Oreo cookies, cut in half, for garnish| \r\n', 'FREE', '', 'CUPCAKES'),
(30, 'Mae Gregorio', 'Administrator', 'TROPICAL SPICE CUPCAKES', 'tropical-spice.jpg', '"Excellent! I loved the cupcakes'' flavor — orange with a hint of coconut. They were even better the day after I baked them!"', 'October 10, 2016 04:55 PM', 'DESIGN2', '2 1?2 cups| cake flour|\r\n1 teaspoon| baking powder|\r\n1 teaspoon| baking soda|\r\n1 teaspoon| salt|\r\n1 teaspoon| cinnamon|\r\n1?2 teaspoon| ground ginger|\r\n1?4 teaspoon| ground nutmeg|\r\n1?4 teaspoon| ground cloves|\r\n1?2 cup| butter, room temperature|\r\n1?2 cup| brown sugar|\r\n1 cup| sugar|\r\n2| eggs|\r\n1 teaspoon| Grand Marnier|\r\n1| large orange, juice and zest of, for use in the recipe|\r\n1?2 cup| coconut milk|\r\n1?2 cup| buttermilk|\r\n1?2 cup |coconut|\r\n2 tablespoons| orange juice, from the freshly juiced oranges|\r\n2 tablespoons| coconut milk|\r\n1?2 teaspoon| Grand Marnier|\r\n2 ounces| cream cheese, room temperature|\r\n3 1?2-4 cups| confectioners'' sugar| \r\n', 'FREE', '', 'CUPCAKES'),
(31, 'Mae Gregorio', 'Administrator', 'STRABUCKS COPYCAT CUPCAKES', 'sb-copycat.jpg', '"Awesome! Everyone loved these and couldn''t get enough. For the second batch, I added mini chocolate chips and dark cocoa instead of regular and it was incredible."', 'October 10, 2016 04:56 PM', 'DESIGN2', '2 cups| flour|\r\n2 cups| sugar|\r\n3?4 cup| cocoa powder|\r\n2 teaspoons| baking soda|\r\n1 teaspoon| baking powder|\r\n1 teaspoon| salt|\r\n2| large eggs|\r\n1?2 cup| canola oil|\r\n1 cup| milk|\r\n1 teaspoon| vanilla|\r\n8 ounces| starbucks black coffee, cooled (or any brand can be substituted)| \r\n', 'FREE', '', 'CUPCAKES'),
(32, 'Mae Gregorio', 'Administrator', 'SIMPLE VANILLA CUPCAKES', 'simple-vanilla.jpg', 'These vanilla cupcakes are so tasty and easy to make. Plus, they make an excellent canvas for your favorite icing!', 'October 10, 2016 04:56 PM', 'DESIGN2', '2 cups| flour|\r\n1?2 teaspoon| salt|\r\n2 teaspoons| baking powder|\r\n1?2 cup| butter, softened|\r\n3?4 cup| sugar (if you like your cupcakes very sweet, add a little more.)|\r\n2| eggs|\r\n1 cup| milk|\r\n1 teaspoon| vanilla essence (optional)|\r\n', 'FREE', '', 'CUPCAKES'),
(33, 'Mae Gregorio', 'Administrator', 'FROG CUPCAKES', 'frog-cup.jpg', '"Brilliant! I made these cupcakes for the kids'' table at our annual family picnic, and they were a huge hit with the kids as well as the adults."', 'October 10, 2016 04:57 PM', 'DESIGN2', '24| cupcakes, cooked and prepared for frosting|\r\n2 cups| green frosting|\r\n24| gumdrops, green|\r\n48| white chocolate chips|\r\n1pc| black decorating gel|\r\n', 'FREE', '', 'CUPCAKES'),
(34, 'Mae Gregroio', 'Administrator', 'PECAN PIE CUPCAKES', 'pecan-pie.jpg', '"Awesome little cupcake — no one could eat just one! To prevent them from sticking to the pan, flip them out as soon as they come out of the oven."', 'October 10, 2016 04:58 PM', 'DESIGN2', '1 cup| chopped pecans|\r\n1?2 cup| all-purpose flour|\r\n1 cup| packed brown sugar|\r\n2?3 cup| butter, melted|\r\n2| eggs|\r\n', 'FREE', '', 'CUPCAKES'),
(35, 'Mae Gregorio', 'Administrator', 'BLACK BOTTOM CUPCAKES', 'black-bottom.jpg', '"It''s a good thing there were other people in the house when I made these cupcakes, because I''d have eaten them all by myself! I LOVE how moist they are! I made some with and without the almonds, and they were great both ways."', 'October 10, 2016 04:59 PM', 'DESIGN2', '2 cups| flour|\r\n1 cup| sugar|\r\n1?4 cup| cocoa|\r\n1 teaspoon| baking soda|\r\n1?2 teaspoon| salt|\r\n1 cup| water, plus|\r\n2 tablespoons| water|\r\n1?3 cup| oil, plus|\r\n1 tablespoon| oil|\r\n1 tablespoon| vinegar|\r\n1 teaspoon| vanilla|\r\n1 cup| chocolate chips|\r\n1 (8 ounce) package| cream cheese, softened|\r\n1?3 cup| powdered sugar|\r\n1pc| slivered almonds, if desired|\r\n', 'SELL', '140.00', 'CUPCAKES'),
(36, 'Mae Gregroio', 'Administrator', 'CHURRO CUPCAKES', 'churro-cup.jpg', '"These were very easy to make and they tasted fantastic."', 'October 10, 2016 05:00 PM', 'DESIGN2', '1 1?2 cups| all-purpose flour|\r\n1 1?2 teaspoons| cinnamon|\r\n1 1?2 teaspoons| baking powder|\r\n1?2 teaspoon| salt|\r\n1?2 cup| unsalted butter, at room temperature (1 stick)|\r\n1 cup| sugar|\r\n2| eggs|\r\n2 teaspoons| vanilla extract|\r\n1?4 cup| vegetable oil|\r\n1?2 cup| milk|\r\n4 ounces| cream cheese, at room temperature|\r\n4 tablespoons| unsalted butter, at room temperature|\r\n2 cups| confectioners'' sugar|\r\n1 teaspoon| vanilla extract|\r\n1 teaspoon| cinnamon|\r\n', 'FREE', '', 'CUPCAKES'),
(38, 'Mae Gregroio', 'Administrator', 'RAINBOW BRIGHT CUPCAKES', 'rainbow-bright.jpg', 'Kids and adults alike will love these festive rainbow cupcakes! Their secret ingredient (sour cream — shhh!) makes them extra rich.', 'October 10, 2016 05:02 PM', 'DESIGN2', '1 (18 ounce) box| yellow cake mix|\r\n4| eggs|\r\n1?2 cup| vegetable oil|\r\n1?2 cup| water|\r\n8 ounces| sour cream|\r\n1 small| vanilla instant pudding mix|\r\n1pc| food coloring (Red, Blue, Yellow, Green and Purple)|\r\n1pc| vanilla or cream cheese frosting, of choice|\r\n', 'FREE', '', 'CUPCAKES'),
(40, 'Mae Gregorio', 'Administrator', 'BANANA WALNUT CUPCAKES WITH CREAM CHEESE FROSTING', 'banana-walnut.jpg', '"These cupcakes are wonderful. They were a hit! They were great the first day and even the second day. I will definitely be making these cupcakes a lot."', 'October 10, 2016 05:04 PM', 'DESIGN2', '1 cup| flour|\r\n2| bananas (mashed)|\r\n1?2 teaspoon| baking soda|\r\n1?4 teaspoon| salt|\r\n1 teaspoon| vanilla|\r\n1?2 cup| granulated sugar|\r\n3?4 cup| brown sugar|\r\n2| eggs|\r\n1?2 cup| butter|\r\n3?4 cup| walnuts (in small pieces)|\r\n1?4 cup| vanilla yogurt|\r\n4 ounces| cream cheese|\r\n1 teaspoon| vanilla|\r\n1 3?4 cups| confectioners'' sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(41, 'Mae Gregorio', 'Administrator', 'PINK LEMONADE CUPCAKES', 'pink-lemonade.jpg', '"These cupcakes are so moist, not to mention that they have the perfect balance of sweet and tangy! I took them to a ladies'' tea and they were a big hit."', 'October 10, 2016 05:05 PM', 'DESIGN2', '1 cup| all-purpose flour|\r\n1?2 teaspoon| baking powder|\r\n1?4 teaspoon| baking soda|\r\n1 pinch| salt|\r\n1?2 cup| granulated sugar|\r\n1?4 cup| canola oil|\r\n2| egg whites|\r\n1?3 cup| frozen pink lemonade concentrate, thawed|\r\n1?4 cup| buttermilk|\r\n3 drops| red food coloring|\r\n1 1?2 cups| icing sugar, sifted to remove lumps (or more as needed)|\r\n1?2 cup| unsalted butter, room temp|\r\n1 pinch| salt|\r\n1?4 cup| whipping cream|\r\n2 teaspoons| frozen pink lemonade concentrate, thawed|\r\n1 teaspoon| lemon extract|\r\n3 drops| red food coloring|\r\n', 'FREE', '', 'CUPCAKES'),
(42, 'Mae Gregorio', 'Administrator', 'ONE-BOWL CHOCOLATE CUPCAKES', 'one-bowl.jpg', '"This is so easy to make! It receives great reviews from my family, who said it''s fluffy and moist, but not too rich."', 'October 10, 2016 05:06 PM', 'DESIGN2', '3?4 cup| unsweetened cocoa powder|\r\n1 1?2 cups| all-purpose flour|\r\n1 1?2 cups |sugar|\r\n1 1?2 teaspoons| baking soda|\r\n3?4 teaspoon| baking powder|\r\n3?4 teaspoon| salt|\r\n2| large eggs|\r\n3?4 cup| warm water|\r\n3?4 cup| buttermilk|\r\n3 tablespoons| safflower oil|\r\n1 teaspoon| pure vanilla extract|\r\n', 'FREE', '', 'CUPCAKES'),
(43, 'Mae Gregorio', 'Administrator', 'PUMPKIN CUPCAKES', 'pumpkin.jpg', '"Unbelievable! So smooth, soft and light! For extra flavor, I increased the spice to 2 teaspoons."', 'October 10, 2016 05:07 PM', 'DESIGN2', '2 cups| flour|\r\n1 cup| white sugar|\r\n1 1?2 teaspoons| baking powder|\r\n1 teaspoon| baking soda|\r\n1 1?2 teaspoons| pumpkin pie spice|\r\n1?2 teaspoon| salt|\r\n2| eggs|\r\n1 cup| pumpkin puree|\r\n1?2 cup| buttermilk|\r\n1?4 cup| vegetable oil|\r\n250 g| cream cheese, softened|\r\n1 tablespoon| butter|\r\n1 teaspoon| vanilla|\r\n1 cup| icing sugar|\r\n1pc| orange sprinkles (optional)|\r\n', 'FREE', '', 'CUPCAKES'),
(44, 'Mae Gregorio', 'Administrator', 'LAVENDER CUPCAKES', 'lavender.jpg', '"This is such a special and attractive recipe. They were so easy and looked so elegant on the serving table. Everyone at our party — men, women AND picky kids — loved them."', 'October 10, 2016 05:07 PM', 'DESIGN2', '1?2 cup| granulated sugar|\r\n1?4 teaspoon| dried lavender flowers|\r\n1?2 cup| butter, at room temperature|\r\n2| eggs|\r\n1 cup| self-rising flour|\r\n2 tablespoons| milk|\r\n1 1?2 cups| confectioners'' sugar, sifted|\r\n1| egg white|\r\n1PC| lilac food coloring|\r\n12| sprigs of fresh lavender (optional)|\r\n', 'FREE', '', 'CUPCAKES'),
(45, 'Mae Gregorio', 'Administrator', 'CHOCOLATE CUPCAKES WITH NUTELLA -KAHLUA GANACHE AND FERERO ROCHER', 'nutella.jpg', '"So chocolatey and decadent! The Nutella-Kahlua ganache is so tasty that you will find yourself trying not to eat it all before you top the cupcakes."', 'October 10, 2016 05:08 PM', 'DESIGN2', '1 cup| all-purpose flour|\r\n1?4 cup| unsweetened cocoa powder|\r\n1?2 teaspoon| salt|\r\n1?2 teaspoon| baking soda|\r\n1 teaspoon| orange zest|\r\n1?2 cup| butter, room temperature|\r\n1 cup| sugar|\r\n2| large eggs|\r\n1?2 cup| sour cream|\r\n1?4 cup| warm milk|\r\n2 teaspoons| pure vanilla extract|\r\n12| ferrero rocher candies, roughly chopped|\r\n1?2 cup| heavy cream|\r\n6 ounces| nutella (4 oz if whipped ganache is desired)|\r\n1 teaspoon| Kahlua|\r\n1?8 teaspoon| salt|\r\n', 'FREE', '', 'CUPCAKES'),
(46, 'Mae Gregorio', 'Administrator', 'PINEAPPLE UPSIDE-DOWN CUPCAKES', 'pineapple-upsidedown.jpg', '"Oh wow! These are fabulous! They''re very moist and full of flavor thanks to the pineapple juice."', 'October 10, 2016 05:09 PM', 'DESIGN2', '1 duncan| hines pineapple supreme cake mix|\r\n1pc| oil, and eggs called for on cake mix box|\r\n1pc| pineapple juice, in place of water called for on box (you don''t have to use pineapple juice, I just think it enhances the flavor!)|\r\n1 (20 ounce)| can pineapple tidbits (save the juice!)|\r\n1 1?2 cups| light brown sugar|\r\n1?2 cup| butter, melted|\r\n24| maraschino cherries|\r\n', 'FREE', '', 'CUPCAKES'),
(47, 'Mae Gregorio', 'Administrator', 'CHOCOLATE CUPCAKES WITH CHEESECAKE CENTER', 'cheesecake-center.jpg', '"These are unbelievably wonderful, brownie-like cupcakes! I had to grab three for a photo before everybody stole them!"', 'October 10, 2016 05:10 PM', 'DESIGN2', '3 cups| all-purpose flour|\r\n2 1?3 cups| sugar, divided|\r\n2?3 cup| unsweetened cocoa powder|\r\n2 teaspoons| baking soda|\r\n1 1?8 teaspoons| salt, divided|\r\n2 cups| water|\r\n2?3 cup| vegetable oil|\r\n2 tablespoons| white vinegar|\r\n2 teaspoons| vanilla extract|\r\n8 ounces| cream cheese, softened|\r\n1| egg|\r\n', 'FREE', '', 'CUPCAKES'),
(48, 'Mae Gregorio', 'Administrator', 'STRAWBERRY AND CREAM CUPCAKES', 'strawberry-cream.jpg', '"Loved these cupcakes! The strawberry soda really gives them a sweet, fruity flavor, and they''re so moist!"', 'October 10, 2016 05:11 PM', 'DESIGN2', '1 (18 1/4 ounce) box| white cake mix (calls for Betty Crocker Supermoist)|\r\n1 1?4 cups| strawberry soda|\r\n1?3 cup| vegetable oil|\r\n3| egg whites|\r\n1pc| red food coloring|\r\n1 (16 ounce)| can cream cheese frosting|\r\n1?2 cup| white candy sprinkles|\r\n1pc| fresh strawberries, if desired|\r\n', 'FREE', '', 'CUPCAKES'),
(49, 'Mae Gregorio', 'Administrator', 'BAREFOOT CONTESSA’S CARROT CAKE CUPCAKES', 'carrot-cake.jpg', '"Gotta love my girl Ina! I baked the cupcakes at 400 degrees F for 10 minutes, and then for 15 minutes at 350 degrees F. They were very moist and delicious!"', 'October 10, 2016 05:12 PM', 'DESIGN2', '2 cups| sugar|\r\n1 1?3 cups| vegetable oil|\r\n1 teaspoon| pure vanilla extract|\r\n3| extra-large eggs|\r\n2 cup|s all-purpose flour|\r\n2 teaspoons| ground cinnamon|\r\n2 teaspoons| baking soda|\r\n1 1?2 teaspoons| kosher salt|\r\n3 cups| grated carrots (less than 1 pound)|\r\n1 cup| raisins|\r\n1 cup| chopped walnuts|\r\n3?4 lb| cream cheese, at room temperature|\r\n1?2 lb| unsalted butter, at room temperature|\r\n1 teaspoon| pure vanilla extract|\r\n1 lb| confectioners'' sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(50, 'Mae Gregorio', 'Administrator', 'CHERRY CHEESECAKE CUPCAKES', 'cherry-cheesecake.jpg', '"Amazing! I made these for my boyfriend''s work function and he came back with rave reviews. The recipe can easily be doubled, and next time I''ll have to do that since people ate them like crazy! It''s an awesome recipe."', 'October 10, 2016 05:13 PM', 'DESIGN2', '28| cupcake liners|\r\n1 (8 ounce) package| cream cheese, at room temperature|\r\n1?3 cup| sugar|\r\n|1 large egg|\r\n1?2 teaspoon| vanilla|\r\n1 (18 1/4 ounce) package| yellow cake mix|\r\n1 (3 1/2 ounce) package| vanilla instant pudding mix|\r\n1 cup| whole milk|\r\n2?3 cup| vegetable oil|\r\n3| large eggs|\r\n1 teaspoon| almond extract|\r\n28| vanilla wafers|\r\n1 (21 ounce)| can cherry pie filling|\r\n1?4 cup| powdered sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(51, 'Mae Gregorio', 'Administrator', 'ZUCCHINI CUPCAKES', 'zucchini.jpg', '"These cupcakes are so scrumptious! The icing is to die for. My hubby had to pull the pan out of my hands after I was done frosting them."', 'October 10, 2016 05:14 PM', 'DESIGN2', '3| eggs|\r\n1 1?3 cups| sugar|\r\n1?2 cup| vegetable oil|\r\n1?2 cup| orange juice|\r\n1 teaspoon| almond extract|\r\n2 1?2 cups| all-purpose flour|\r\n2 teaspoons| ground cinnamon|\r\n2 teaspoons| baking powder|\r\n1 teaspoon| baking soda|\r\n1 teaspoon| salt|\r\n1?2 teaspoon| ground cloves|\r\n1 1?2 cups| shredded zucchini|\r\n1 cup| packed brown sugar|\r\n1?2 cup| butter or 1?2 cup margarine|\r\n1?4 cup| milk|\r\n1 teaspoon| vanilla extract|\r\n1 1?2-2 cups| confectioners'' sugar|\r\n', 'FREE', '', 'CUPCAKES'),
(52, 'Mae Gregorio', 'Administrator', 'PEPPERMINT CUPCAKES', 'peppermint.jpg', '"We loved these! All I could find to use in place of candy canes were Altoids mints crushed finely in my food processor. It worked well; it made the cupcakes and frosting very minty and refreshing!"', 'October 10, 2016 05:15 PM', 'DESIGN2', '12| candy canes|\r\n1 (18 1/4 ounce) box| of duncan hines moist deluxe devil''s food cake mix|\r\n1 1?3 cups| water|\r\n1?2 cup| vegetable oil|\r\n3| large eggs|\r\n1?4 teaspoon| peppermint extract|\r\n16 ounces| vanilla frosting|\r\n', 'FREE', '', 'CUPCAKES'),
(53, 'Mae Gregorio', 'Administrator', 'MARMALADE CUPCAKES', 'marmalade.jpg', '"This is pretty much the perfect cupcake: buttery, moist and not too sweet, with little flecks of orange rind. Delicious!"', 'October 10, 2016 05:29 PM', 'DESIGN2', '2 cups| all-purpose flour|\r\n1?2 teaspoon| baking powder|\r\n1?2 teaspoon| baking soda|\r\n1?4 teaspoon| salt|\r\n1?2 cup| butter or 1?2 cup margarine, softened|\r\n1 cup| granulated sugar|\r\n3| large eggs|\r\n1 cup| orange marmalade|\r\n1?2 cup| buttermilk|\r\n', 'FREE', '', 'CUPCAKES'),
(54, 'Mae Gregorio', 'Administrator', 'DOUBLE CHOCOLATE AND ORANGE CUPCAKES', 'choco-orange.jpg', 'Orange is the star ingredient in these cupcakes — its bright citrus flavor provides the perfect balance to the slimmed-down chocolatey batter!', 'October 10, 2016 05:30 PM', 'DESIGN2', '1 1?2 cups| flour|\r\n1?2 cup| sugar|\r\n1?4 cup| cocoa|\r\n1 teaspoon| baking soda|\r\n1?2 teaspoon| salt|\r\n1?2 cup| orange juice|\r\n3 tablespoons| oil|\r\n1 tablespoon| vinegar|\r\n1 teaspoon| vanilla|\r\n1?3 cup| water|\r\n1?3 cup| mini chocolate chip|\r\n1 teaspoon| confectioners'' sugar (optional)|\r\n', 'FREE', '', 'CUPCAKES'),
(55, 'Mae Gregorio', 'Administrator', 'MINI DOUGHNUT CUPCAKES', 'mini-donut.jpg', '"The taste and texture is just like a doughnut! Tip: The batter is super thick, so it has to be spooned and then pushed with a spatula into the baking cups."', 'October 10, 2016 05:31 PM', 'DESIGN2', '1 cup| sugar|\r\n1 1?2 teaspoons| ground cinnamon|\r\n1 (18 1/4 ounce) package| yellow cake mix|\r\n1?8 cup| water|\r\n1?2 cup| vegetable oil|\r\n3| eggs|\r\n1 tablespoon| ground nutmeg|\r\n', 'FREE', '', 'CUPCAKES');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `PRODUCT_NAME` varchar(100) NOT NULL,
  `PRODUCT_CATEGORY` varchar(100) NOT NULL,
  `PRICE` varchar(100) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `IMAGEURL` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`NO`, `NAME`, `PRODUCT_NAME`, `PRODUCT_CATEGORY`, `PRICE`, `PHONE`, `ADDRESS`, `DATE`, `IMAGEURL`) VALUES
(1, 'Mark Abril', 'Special Mocha Cupcakes', 'Cupcakes', '150.00', '09208317004', '655 D. Guillermo St. Gagalangin Tondo, Manila', 'October 20, 2016 10:17 AM', 'special-mocha.jpg'),
(2, 'Farrah Gregorio', 'Lemon-Honey Cupcakes', 'Cupcakes', '250.00', '09292704546', '655 D. Guillermo St. Gagalangin Tondo, Manila', 'October 22, 2016 10:47 AM', 'lemon-honey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `NO` int(11) NOT NULL,
  `CLIENT` varchar(100) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `INFO` varchar(1000) NOT NULL,
  `DESCRIPTION` varchar(5000) NOT NULL,
  `FORMAT` varchar(100) NOT NULL,
  `IMAGEVIDEOURL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`NO`, `CLIENT`, `DATE`, `INFO`, `DESCRIPTION`, `FORMAT`, `IMAGEVIDEOURL`) VALUES
(1, 'Lorem ipsum', 'July 07, 2012 04:06 PM', 'Phasellus ultrices tellus eget ipsum', 'This format perfectly fits in case you need only a single image for your post display. Use Featured image option to add image to the post.|Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros.|Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus.', 'IMAGE FORMAT', 's1.jpg'),
(2, 'Lorem ipsum', 'July 07, 2012 05:10 PM', 'Phasellus ultrices tellus', 'This format can be used to display images as a slideshow. To attach images to the post please use Upload Images button.|Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros.|Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus.', 'SLIDESHOW FORMAT', 's2.jpg'),
(3, 'Lorem ipsum', 'August 12, 2013', 'Phasellus ultrices tellus eget ipsum', 'If your post contains video, please use this format. Select Video format in the appeared metabox and add the embed code from the video hosting you use (youtube, vimeo etc)|Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros.|Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus.', 'VIDEO FORMAT', 's3.m4v');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PHONENUMBER` varchar(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `ACCOUNT_TYPE` varchar(50) NOT NULL,
  `REG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ACTIVATED` tinyint(4) NOT NULL,
  `TEMPLATENAME` varchar(50) NOT NULL,
  `VERIFIED` varchar(50) NOT NULL,
  `VERIFICATIONCODE` varchar(50) NOT NULL,
  `PERMISSION` varchar(5000) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `NAME`, `USERNAME`, `PHONENUMBER`, `EMAIL`, `PASSWORD`, `ACCOUNT_TYPE`, `REG_TIME`, `ACTIVATED`, `TEMPLATENAME`, `VERIFIED`, `VERIFICATIONCODE`, `PERMISSION`, `IMAGEURL`) VALUES
(1, 'John Mark C. Abril', '', '', 'johnmarkabril@gmail.com', '34c87211821751f911c058bbf0cfb822', 'Administrator', '2016-07-31 06:13:37', 0, 'MAIN', '', '', '', ''),
(2, 'Farrah Mae Gregorio', '', '', 'frrhmgrgrio@gmail.com', '19a2be974580740e9ec96ab7fc016d1b', 'User', '2016-07-31 11:59:26', 0, 'MAIN', '', '', '', ''),
(3, 'Jm Abril', 'jmabril17', '09208317004', 'johnmark_abri12l@yahoo.com', '89daf6d74eeceabf2e74efe50f41c9b2', 'User', '2016-09-21 19:25:23', 0, 'DESIGN2', 'YES', '', '', 'prof3.jpg'),
(4, 'Mae Gregorio', 'gregs17', '09306625692', 'maegregorio@gmail.com', '7950b6bd370f715554900616819ffc4e', 'Administrator', '2016-09-21 19:43:18', 0, 'DESIGN2', 'YES', '', 'Dashboard|Messages|Notification|Statistics|Settings|Product_Management|User_Management|', 'prof1.jpg'),
(18, 'Testing First Name Testing Last Name', 'Testinguname123', '09123456789', 'testing@testing.com', '7f2ababa423061c509f4923dd04b6cf1', 'User', '0000-00-00 00:00:00', 0, 'DESIGN2', 'YES', '', '', ''),
(23, 'John Doe', 'Johndoe123', '09123654789', 'johndoe@example.com', 'bb2d91d0fbbebe8719509ed0f865c63f', 'User', '0000-00-00 00:00:00', 0, 'DESIGN2', 'YES', '', '', ''),
(24, 'Vincent Barcelona', 'vincent123', '09321654987', 'vincent@gmail.com', '52fee26031644aacd7c23ade329939f0', 'User', '0000-00-00 00:00:00', 0, 'DESIGN2', 'YES', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `comment_section_post`
--
ALTER TABLE `comment_section_post`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `posted`
--
ALTER TABLE `posted`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment_section_post`
--
ALTER TABLE `comment_section_post`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;
--
-- AUTO_INCREMENT for table `posted`
--
ALTER TABLE `posted`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;