-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 01:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynews1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` tinyint(4) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `admin_name`, `admin_password`, `name`, `email`, `contact`, `address`) VALUES
(1, 'admin', 'admin123', 'NDEGE', 'heavenlyamuya45@gmail.com', 127, 'jkk'),
(2, 'admin1', 'admin123', 'john', 'heavenlyamuya5@gmail.com', 127, 'tz'),
(3, 'admin23', 'admin123', 'heaven', 'heavenlyamuya5@gmail.com', 127, 'tz'),
(4, 'admin234', 'admin123', 'NDEGE', 'heavenlyamuya45@gmail.com', 127, 'tz'),
(5, 'admin2378', 'admin123', 'heaven', 'heavenlyamuya@gmail.com', 127, 'tz'),
(6, 'veida', 'admin123', 'heaven', 'heavenlyamuya45@gmail.com', 127, 'tz');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_name`) VALUES
(18, 'SPORT'),
(19, 'ENTARTAIMENT'),
(20, 'POLITICAL'),
(21, 'TECHNOLOGY'),
(22, 'LIFESTYLE');

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_description` text NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_img` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_views` int(11) NOT NULL,
  `post_category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_details`
--

INSERT INTO `post_details` (`post_id`, `post_title`, `post_description`, `post_category_id`, `post_img`, `post_date`, `post_views`, `post_category_name`) VALUES
(37, 'simba vs yanga', 'mechi ya simba vs yanga', 18, '8a878b9512723759ba66d03e26ddaf8f.gif', '2023-09-04 01:05:08', 13, ''),
(38, 'mam samia suluhu hassan', 'hellasnncksaa ajnfvas adsfoa ndsjkds', 20, '8a878b9512723759ba66d03e26ddaf8f.gif', '2023-09-04 10:12:13', 3, ''),
(39, 'vituko vya instagram leo hii', 'jejjflc,l lklazka', 19, '646c8915fc1096c12b679108e7022df9.jpg', '2023-09-04 00:53:50', 1, ''),
(40, 'vituko vya instagram leo hii', 'jejjflc,l lklazka', 19, '646c8915fc1096c12b679108e7022df9.jpg', '2023-09-04 00:53:52', 1, ''),
(42, 'hello', 'hello', 19, '505e59c459d38ce4e740e3c9f5c6caf7.jpg', '2023-09-04 10:12:06', 4, ''),
(43, 'hello', 'hello', 19, '505e59c459d38ce4e740e3c9f5c6caf7.jpg', '2023-09-04 00:51:51', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` int(10) NOT NULL,
  `img` varchar(250) NOT NULL,
  `about_us` text NOT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `name`, `email`, `contact`, `img`, `about_us`, `logo`) VALUES
(8, 'News portal', 'heavenlyamuya45@gmail.com', 743262450, '', 'for staring no bou us until later on but when the sytem its under maintainace ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `user_password` int(11) NOT NULL,
  `user_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
