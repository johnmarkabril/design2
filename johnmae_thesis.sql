-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 04:11 PM
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
(12, 'Jm Abril', 'johnmark_abri12l@yahoo.com', 'Hello! This is John Mark. Nice post :)', 'October 1, 2016 04:45 AM', '3', 'DESIGN2');

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
  `TEMPLATENAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted`
--

INSERT INTO `posted` (`NO`, `NAME`, `ACCOUNT_TYPE`, `TITLE`, `IMAGEURL`, `DESCRIPTION`, `DATE`, `TEMPLATENAME`) VALUES
(1, 'Jm Abril', 'User', 'Cupcake #1', 'post-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros. Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus tellus convallis. Mauris posuere, nisi vel vehicula pellentesque, libero lacus egestas ante, a bibendum mauris mi ut diam. Duis arcu odio, tincidunt eu dictum interdum, sagittis quis dui.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum egestas rutrum. Aenean a metus sit amet massa egestas vulputate sit amet a nisi. Sed nec enim erat. Sed laoreet imperdiet dui fermentum placerat. Donec purus mi, pellentesque et congue at, suscipit ac justo. Pellentesque et augue quis libero aliquam lacinia. Pellentesque a elit vitae nisl vulputate bibendum aliquet quis velit. Integer aliquet cursus erat, in pellentesque sapien tristique vitae. In tempus tincidunt leo id adipiscing. Sed eu sapien egestas arcu condimentum dapibus. Donec sit amet quam ut metus iaculis adipiscing eget quis eros.\n\nSed id dui dolor, eu consectetur dui. Etiam commodo convallis laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel sem at sapien interdum pretium. Sed porttitor, odio in blandit ornare, arcu risus pulvinar ante, a gravida augue justo sagittis ante. Sed mattis consectetur metus quis rutrum. Phasellus ultrices nisi a orci dignissim nec rutrum turpis semper. Donec tempor libero ut nisl lacinia vel dignissim lacus tristique. Etiam accumsan velit in quam laoreet sollicitudin. Mauris euismod lacus ut magna placerat ac molestie augue consequat.', 'September 17, 2016 06:45 PM', 'DESIGN2'),
(2, 'Mae Gregorio', 'Administrator', 'Cupcake #2', 'post-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros. Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus tellus convallis. Mauris posuere, nisi vel vehicula pellentesque, libero lacus egestas ante, a bibendum mauris mi ut diam. Duis arcu odio, tincidunt eu dictum interdum, sagittis quis dui.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum egestas rutrum. Aenean a metus sit amet massa egestas vulputate sit amet a nisi. Sed nec enim erat. Sed laoreet imperdiet dui fermentum placerat. Donec purus mi, pellentesque et congue at, suscipit ac justo. Pellentesque et augue quis libero aliquam lacinia. Pellentesque a elit vitae nisl vulputate bibendum aliquet quis velit. Integer aliquet cursus erat, in pellentesque sapien tristique vitae. In tempus tincidunt leo id adipiscing. Sed eu sapien egestas arcu condimentum dapibus. Donec sit amet quam ut metus iaculis adipiscing eget quis eros.\r\n\r\nSed id dui dolor, eu consectetur dui. Etiam commodo convallis laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel sem at sapien interdum pretium. Sed porttitor, odio in blandit ornare, arcu risus pulvinar ante, a gravida augue justo sagittis ante. Sed mattis consectetur metus quis rutrum. Phasellus ultrices nisi a orci dignissim nec rutrum turpis semper. Donec tempor libero ut nisl lacinia vel dignissim lacus tristique. Etiam accumsan velit in quam laoreet sollicitudin. Mauris euismod lacus ut magna placerat ac molestie augue consequat.', 'September 22, 2016  02:16 PM', 'DESIGN2'),
(3, 'Mae Gregorio', 'Administrator', 'Cupcake #3', 'post-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros. Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus tellus convallis. Mauris posuere, nisi vel vehicula pellentesque, libero lacus egestas ante, a bibendum mauris mi ut diam. Duis arcu odio, tincidunt eu dictum interdum, sagittis quis dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum egestas rutrum. Aenean a metus sit amet massa egestas vulputate sit amet a nisi. Sed nec enim erat. Sed laoreet imperdiet dui fermentum placerat. Donec purus mi, pellentesque et congue at, suscipit ac justo. Pellentesque et augue quis libero aliquam lacinia. Pellentesque a elit vitae nisl vulputate bibendum aliquet quis velit. Integer aliquet cursus erat, in pellentesque sapien tristique vitae. In tempus tincidunt leo id adipiscing. Sed eu sapien egestas arcu condimentum dapibus. Donec sit amet quam ut metus iaculis adipiscing eget quis eros. Sed id dui dolor, eu consectetur dui. Etiam commodo convallis laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel sem at sapien interdum pretium. Sed porttitor, odio in blandit ornare, arcu risus pulvinar ante, a gravida augue justo sagittis ante. Sed mattis consectetur metus quis rutrum. Phasellus ultrices nisi a orci dignissim nec rutrum turpis semper. Donec tempor libero ut nisl lacinia vel dignissim lacus tristique. Etiam accumsan velit in quam laoreet sollicitudin. Mauris euismod lacus ut magna placerat ac molestie augue consequat.', 'September 22, 2016  02:16 PM', 'DESIGN2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `ACCOUNT_TYPE` varchar(50) NOT NULL,
  `REG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ACTIVATED` tinyint(4) NOT NULL,
  `TEMPLATENAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `NAME`, `EMAIL`, `PASSWORD`, `ACCOUNT_TYPE`, `REG_TIME`, `ACTIVATED`, `TEMPLATENAME`) VALUES
(1, 'John Mark C. Abril', 'johnmarkabril@gmail.com', '34c87211821751f911c058bbf0cfb822', 'Administrator', '2016-07-31 06:13:37', 0, 'MAIN'),
(2, 'Farrah Mae Gregorio', 'frrhmgrgrio@gmail.com', '19a2be974580740e9ec96ab7fc016d1b', 'User', '2016-07-31 11:59:26', 0, 'MAIN'),
(3, 'Jm Abril', 'johnmark_abri12l@yahoo.com', '89daf6d74eeceabf2e74efe50f41c9b2', 'User', '2016-09-21 19:25:23', 0, 'DESIGN2'),
(4, 'Mae Gregorio', 'maegregorio@gmail.com', '7950b6bd370f715554900616819ffc4e', 'Administrator', '2016-09-21 19:43:18', 0, 'DESIGN2');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_section_post`
--
ALTER TABLE `comment_section_post`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posted`
--
ALTER TABLE `posted`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
