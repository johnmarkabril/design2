-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 03:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_my_site`
--

CREATE TABLE `about_my_site` (
  `NO` int(11) NOT NULL,
  `TITLE` varchar(500) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL,
  `ACTIVE` int(11) NOT NULL,
  `DELETION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_my_site`
--

INSERT INTO `about_my_site` (`NO`, `TITLE`, `IMAGEURL`, `DESCRIPTION`, `ACTIVE`, `DELETION`) VALUES
(1, 'Best Sweet and Pastries', 'page1-img1.jpg', 'We have goals, purposes, focuses, reasons for being on our blogs. What do you do on your blog? In this Blog Exercise let’s change this to “What do you do on your blog?” On your blog, with your blog, whichever works for you.\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `about_user`
--

CREATE TABLE `about_user` (
  `NO` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `ABOUTUS` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_contacts`
--

CREATE TABLE `admin_contacts` (
  `NO` int(11) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL,
  `LASTNAME` varchar(150) NOT NULL,
  `FIRSTNAME` varchar(150) NOT NULL,
  `POSITION` varchar(150) NOT NULL,
  `COMPANY` varchar(150) NOT NULL,
  `ADDRESS` varchar(500) NOT NULL,
  `PHONE_NUM` varchar(15) NOT NULL,
  `DELETION` varchar(100) NOT NULL,
  `ADMIN_UNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_posted`
--

CREATE TABLE `admin_posted` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `USERNAME` varchar(500) NOT NULL,
  `DESCRIPTION` varchar(5000) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `HOUR` varchar(100) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL,
  `DELETION` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calendarevents`
--

CREATE TABLE `calendarevents` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `color` varchar(50) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `NO` int(11) NOT NULL,
  `CATNAME` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `contactsform`
--

CREATE TABLE `contactsform` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `PHONE` varchar(500) NOT NULL,
  `MESSAGE` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `NO` int(11) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(5000) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DELETION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `NO` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PLACE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `NO` int(11) NOT NULL,
  `SUBJECT` varchar(500) NOT NULL,
  `NAMEFROM` varchar(100) NOT NULL,
  `EMAILFROM` varchar(500) NOT NULL,
  `EMAILTO` varchar(500) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `TIME` varchar(100) NOT NULL,
  `BODYCONTENT` varchar(5000) NOT NULL,
  `DELETION` int(11) NOT NULL,
  `UNREAD` int(11) NOT NULL,
  `HASHNOEMAIL` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `CONTENT` varchar(500) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `HOUR` varchar(100) NOT NULL,
  `ACTIVE` int(11) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_configuration`
--

CREATE TABLE `paypal_configuration` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `ACCOUNT_TYPE` varchar(100) NOT NULL,
  `PAYPAL_EMAIL` varchar(500) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_data`
--

CREATE TABLE `permission_data` (
  `NO` int(11) NOT NULL,
  `PERMISSION` varchar(100) NOT NULL,
  `ACTIVE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posted`
--

CREATE TABLE `posted` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `ACCOUNT_TYPE` varchar(20) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `IMAGEURL` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(5000) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TEMPLATENAME` varchar(50) NOT NULL,
  `RECIPES` varchar(5000) NOT NULL,
  `COMMAND` varchar(50) NOT NULL,
  `PRICE` double(8,2) NOT NULL,
  `CATEGORIES` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `USERNAME` varchar(150) NOT NULL,
  `PRODUCT_NAME` varchar(100) NOT NULL,
  `PRODUCT_CATEGORY` varchar(100) NOT NULL,
  `PRICE` varchar(100) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `IMAGEURL` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `NO` int(11) NOT NULL,
  `USERNAME` varchar(500) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `SUBSCRIBER` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `REG_TIME` varchar(100) NOT NULL,
  `ACTIVATED` tinyint(4) NOT NULL,
  `TEMPLATENAME` varchar(50) NOT NULL,
  `VERIFIED` varchar(50) NOT NULL,
  `VERIFICATIONCODE` varchar(50) NOT NULL,
  `PERMISSION` varchar(5000) NOT NULL,
  `SKILLS` varchar(5000) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL,
  `DELETION` varchar(10) NOT NULL,
  `LATITUDE` double(16,7) NOT NULL,
  `LONGHITUDE` double(16,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `NAME`, `USERNAME`, `PHONENUMBER`, `EMAIL`, `PASSWORD`, `ACCOUNT_TYPE`, `REG_TIME`, `ACTIVATED`, `TEMPLATENAME`, `VERIFIED`, `VERIFICATIONCODE`, `PERMISSION`, `SKILLS`, `IMAGEURL`, `DELETION`, `LATITUDE`, `LONGHITUDE`) VALUES
(31, 'Admin Admin', 'administrator', '00000000000', 'admin@gmail.com', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Administrator', 'November 21, 2016 11:36 AM', 0, 'DESIGN2', 'YES', '', 'Dashboard|Messages|Compose Message|Inbox|Notification|Statistics|Reports|Settings|About My Site|Events|Advertisements|PayPal Configuration|Product Category|Product Grid|Product Sales|Product_Management|User_Management|Accounts|Co-Administrator|', 'Administrator', 'firstprof.png', '0', 0.0000000, 0.0000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_my_site`
--
ALTER TABLE `about_my_site`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `about_user`
--
ALTER TABLE `about_user`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `admin_contacts`
--
ALTER TABLE `admin_contacts`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `admin_posted`
--
ALTER TABLE `admin_posted`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `calendarevents`
--
ALTER TABLE `calendarevents`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contactsform`
--
ALTER TABLE `contactsform`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `paypal_configuration`
--
ALTER TABLE `paypal_configuration`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `permission_data`
--
ALTER TABLE `permission_data`
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
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
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
-- AUTO_INCREMENT for table `about_my_site`
--
ALTER TABLE `about_my_site`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `about_user`
--
ALTER TABLE `about_user`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `admin_contacts`
--
ALTER TABLE `admin_contacts`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin_posted`
--
ALTER TABLE `admin_posted`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `calendarevents`
--
ALTER TABLE `calendarevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment_section_post`
--
ALTER TABLE `comment_section_post`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;
--
-- AUTO_INCREMENT for table `contactsform`
--
ALTER TABLE `contactsform`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `paypal_configuration`
--
ALTER TABLE `paypal_configuration`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permission_data`
--
ALTER TABLE `permission_data`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posted`
--
ALTER TABLE `posted`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
