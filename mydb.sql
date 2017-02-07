-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 11:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `stwchoice`
--

CREATE TABLE `stwchoice` (
  `stwChoice_id` int(10) UNSIGNED NOT NULL,
  `stwQuestion_id` int(10) UNSIGNED NOT NULL,
  `stwChoice_text` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwAnswer` set('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwchoice`
--

INSERT INTO `stwchoice` (`stwChoice_id`, `stwQuestion_id`, `stwChoice_text`, `stwAnswer`) VALUES
(37, 10, 'กกก', 'no'),
(38, 10, 'กก', 'no'),
(39, 10, 'กก', 'no'),
(40, 10, 'กก', 'yes'),
(41, 11, '22', 'no'),
(42, 11, '33', 'no'),
(43, 11, '33', 'no'),
(44, 11, '33', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `stwcontent`
--

CREATE TABLE `stwcontent` (
  `stwContent_id` int(10) UNSIGNED NOT NULL,
  `stwLesson_id` int(10) UNSIGNED NOT NULL,
  `stwContent_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `stwdepartment`
--

CREATE TABLE `stwdepartment` (
  `stwDept_id` int(11) UNSIGNED NOT NULL,
  `stwDept_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwdepartment`
--

INSERT INTO `stwdepartment` (`stwDept_id`, `stwDept_name`) VALUES
(1, 'ITt'),
(2, 'HR'),
(3, 'OG'),
(0, 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `stwlesson`
--

CREATE TABLE `stwlesson` (
  `stwLesson_id` int(10) UNSIGNED NOT NULL,
  `stwLesson_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwlesson`
--

INSERT INTO `stwlesson` (`stwLesson_id`, `stwLesson_name`) VALUES
(1, 'adasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `stwprefix`
--

CREATE TABLE `stwprefix` (
  `stwPrefix_id` int(11) UNSIGNED NOT NULL,
  `stwPrefix_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwprefix`
--

INSERT INTO `stwprefix` (`stwPrefix_id`, `stwPrefix_name`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว');

-- --------------------------------------------------------

--
-- Table structure for table `stwquestion`
--

CREATE TABLE `stwquestion` (
  `stwQuestion_id` int(10) UNSIGNED NOT NULL,
  `stwSubject_id` int(10) UNSIGNED DEFAULT NULL,
  `stwQuestion_text` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwquestion`
--

INSERT INTO `stwquestion` (`stwQuestion_id`, `stwSubject_id`, `stwQuestion_text`) VALUES
(10, 38, '1. ควย '),
(11, 38, '2.ขวย');

-- --------------------------------------------------------

--
-- Table structure for table `stwshowlogo`
--

CREATE TABLE `stwshowlogo` (
  `stwShowlogo_id` int(10) UNSIGNED NOT NULL,
  `stwUrllogo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwshowlogo`
--

INSERT INTO `stwshowlogo` (`stwShowlogo_id`, `stwUrllogo_id`) VALUES
(1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `stwstatus`
--

CREATE TABLE `stwstatus` (
  `stwStatus_id` int(11) UNSIGNED NOT NULL,
  `stwStatus_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwstatus`
--

INSERT INTO `stwstatus` (`stwStatus_id`, `stwStatus_name`) VALUES
(1, 'Administrator'),
(2, 'Super User'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `stwsubject`
--

CREATE TABLE `stwsubject` (
  `stwSubject_id` int(10) UNSIGNED NOT NULL,
  `stwSubject_text` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stwDate_test` date DEFAULT NULL,
  `stwTime_start` text COLLATE utf8_unicode_ci,
  `stwTime_end` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwsubject`
--

INSERT INTO `stwsubject` (`stwSubject_id`, `stwSubject_text`, `stwDate_test`, `stwTime_start`, `stwTime_end`) VALUES
(38, 'ทดสอย', '2017-02-09', '19:00', '20:00');

-- --------------------------------------------------------

--
-- Table structure for table `stwurllogo`
--

CREATE TABLE `stwurllogo` (
  `stwUrllogo_id` int(10) UNSIGNED NOT NULL,
  `stwUrlname` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwurllogo`
--

INSERT INTO `stwurllogo` (`stwUrllogo_id`, `stwUrlname`) VALUES
(18, 'photo/panda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stwuser`
--

CREATE TABLE `stwuser` (
  `stwUser_id` int(10) UNSIGNED NOT NULL,
  `stwUsername` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwPassword` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwFirstname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwLastname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwEmail` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `stwTel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stwGender` tinyint(1) UNSIGNED NOT NULL,
  `stwActivate` tinyint(1) UNSIGNED NOT NULL,
  `stwDept_id` int(11) UNSIGNED NOT NULL,
  `stwStatus_id` int(11) UNSIGNED NOT NULL,
  `stwPrefix_id` int(11) UNSIGNED NOT NULL,
  `stwCreated_date` datetime NOT NULL,
  `stwRequest` tinyint(1) UNSIGNED NOT NULL,
  `stwProfileurl` varchar(250) COLLATE utf8_unicode_ci DEFAULT 'Images/avatar.png	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwuser`
--

INSERT INTO `stwuser` (`stwUser_id`, `stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`, `stwStatus_id`, `stwPrefix_id`, `stwCreated_date`, `stwRequest`, `stwProfileurl`) VALUES
(361, 'leavetar123', '5d780364c63ff5cc9005fdd53d39a52a', '', '', '', '', 0, 1, 0, 1, 0, '2016-11-12 14:48:36', 0, 'photos/16251480_1206062469449147_822287148_o.jpg'),
(364, 'natteesuvanit', '8892dda9ffc2c5c15344bfaae3ea2fdd', 'นัทที', 'สุวานิช', 'natteesuvanit@gmail.com', '0876776704', 1, 1, 1, 3, 1, '2017-01-23 10:23:37', 3, 'photos/CT121icon.jpg'),
(365, 'Kuy', 'ea2fd9732bf0a85522e8c11ce00d3371', 'ควย', 'ควย', 'cha@gmail.com', '0000000000', 1, 1, 1, 3, 1, '2017-01-23 13:28:53', 3, 'photos/1485152975140-1381746899.jpg'),
(366, 'leavetar1234', '5d780364c63ff5cc9005fdd53d39a52a', '44556', '44566', 'aa@hotmail.com', '0944174005', 1, 2, 1, 3, 1, '2017-01-26 11:18:45', 1, 'photos/001.jpg'),
(367, 'leavetar12345', '5d780364c63ff5cc9005fdd53d39a52a', 'niwat', 'thaiprathom', 'kootardodo@hotmail.com', '0944174005', 1, 2, 0, 3, 1, '2017-01-27 07:38:19', 1, 'Images/avatar.png	');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stwchoice`
--
ALTER TABLE `stwchoice`
  ADD PRIMARY KEY (`stwChoice_id`);

--
-- Indexes for table `stwcontent`
--
ALTER TABLE `stwcontent`
  ADD PRIMARY KEY (`stwContent_id`);

--
-- Indexes for table `stwlesson`
--
ALTER TABLE `stwlesson`
  ADD PRIMARY KEY (`stwLesson_id`);

--
-- Indexes for table `stwquestion`
--
ALTER TABLE `stwquestion`
  ADD PRIMARY KEY (`stwQuestion_id`);

--
-- Indexes for table `stwshowlogo`
--
ALTER TABLE `stwshowlogo`
  ADD PRIMARY KEY (`stwShowlogo_id`);

--
-- Indexes for table `stwsubject`
--
ALTER TABLE `stwsubject`
  ADD PRIMARY KEY (`stwSubject_id`);

--
-- Indexes for table `stwurllogo`
--
ALTER TABLE `stwurllogo`
  ADD PRIMARY KEY (`stwUrllogo_id`);

--
-- Indexes for table `stwuser`
--
ALTER TABLE `stwuser`
  ADD PRIMARY KEY (`stwUser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stwchoice`
--
ALTER TABLE `stwchoice`
  MODIFY `stwChoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `stwcontent`
--
ALTER TABLE `stwcontent`
  MODIFY `stwContent_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stwlesson`
--
ALTER TABLE `stwlesson`
  MODIFY `stwLesson_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stwquestion`
--
ALTER TABLE `stwquestion`
  MODIFY `stwQuestion_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stwshowlogo`
--
ALTER TABLE `stwshowlogo`
  MODIFY `stwShowlogo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stwsubject`
--
ALTER TABLE `stwsubject`
  MODIFY `stwSubject_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `stwurllogo`
--
ALTER TABLE `stwurllogo`
  MODIFY `stwUrllogo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `stwuser`
--
ALTER TABLE `stwuser`
  MODIFY `stwUser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
