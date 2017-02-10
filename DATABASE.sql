-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2017 at 08:35 AM
-- Server version: 5.5.50-MariaDB
-- PHP Version: 5.4.16

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
-- Table structure for table `stwChoice`
--

CREATE TABLE IF NOT EXISTS `stwChoice` (
  `stwChoice_id` int(10) unsigned NOT NULL,
  `stwQuestion_id` int(10) unsigned NOT NULL,
  `stwChoice_text` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwAnswer` set('yes','no') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwChoice`
--

INSERT INTO `stwChoice` (`stwChoice_id`, `stwQuestion_id`, `stwChoice_text`, `stwAnswer`) VALUES
(53, 14, 'sss', 'no'),
(54, 14, 'ssssssssssss', 'no'),
(55, 14, 'ssssssssssss', 'yes'),
(56, 14, 'sss', 'no'),
(57, 15, 'asdas', 'no'),
(58, 15, 'asdasd', 'no'),
(59, 15, 'asdas', 'yes'),
(60, 15, 'asda', 'no'),
(61, 16, 'asdas', 'no'),
(62, 16, 'adasฟหกฟห', 'no'),
(63, 16, 'asdasฟกฟหก', 'yes'),
(64, 16, 'asda', 'no'),
(65, 17, 'ฟกฟห', 'no'),
(66, 17, 'กฟหกฟหก', 'no'),
(67, 17, 'กฟก', 'yes'),
(68, 17, 'ฟกฟหกฟ', 'no'),
(69, 18, 'ฟหกฟห', 'no'),
(70, 18, 'ฟกฟห', 'no'),
(71, 18, 'ฟหกฟห', 'no'),
(72, 18, 'ฟหกฟก', 'yes'),
(73, 19, 'ฟหกฟห', 'no'),
(74, 19, 'ฟหกฟหก', 'no'),
(75, 19, 'ฟหกฟห', 'yes'),
(76, 19, 'ฟหกฟก', 'no'),
(77, 20, 'ฟหกฟห', 'no'),
(78, 20, 'ฟหกฟห', 'no'),
(79, 20, 'ฟหกฟห', 'no'),
(80, 20, 'ฟหกฟก', 'yes'),
(81, 21, 'ฟหกฟหก', 'yes'),
(82, 21, 'ฟหกฟห', 'no'),
(83, 21, 'กฟหกฟหก', 'no'),
(84, 21, 'ฟหกฟหกฟ', 'no'),
(85, 22, 'ฟหกฟหกฟหกฟห', 'no'),
(86, 22, 'ฟหกฟหหก', 'no'),
(87, 22, 'กฟหก', 'no'),
(88, 22, 'ฟฟหกฟ', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `stwContent`
--

CREATE TABLE IF NOT EXISTS `stwContent` (
  `stwContent_id` int(10) unsigned NOT NULL,
  `stwLesson_id` int(10) unsigned NOT NULL,
  `stwContent_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `stwContent_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwYoutube` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `stwContent`
--

INSERT INTO `stwContent` (`stwContent_id`, `stwLesson_id`, `stwContent_title`, `stwContent_detail`, `stwContent_img`, `stwYoutube`) VALUES
(6, 1, 'sssssssss', 'เป็นที่ทราบกันดีอยู่แล้วว่าการออกกำลังกายนั้นเป็นสิ่งที่ดีและมีประโยชน์ต่อร่างกายเป็นอย่างมาก เพราะนอกจากจะช่วยให้ร่างกายมีความแข็งแรงและมีรูปร่างที่ดีสมส่วนแล้ว ยังช่วยสร้างเสริมภูมิคุ้มกันให้ร่างกายห่างไกลจากโรคภัยไข้เจ็บอีกด้วย\r\nในปัจจุบันนี้มีสถานที่สำหรับออกกำลังกายอยู่มากมาย ไม่ว่าจะเป็นฟิตเนส ยิม สนามกีฬา แม้แต่ในลานชุมชนต่างๆก็จัดสถานที่และอุปกรณ์สำหรับการออกกำลังกายไว้ให้คนในชุมชนหรือประชาชนทั่วไปได้ใช้บริการ แต่ก็ดูเหมือนว่าเป็นเรื่องยากสำหรับใครหลายคนที่จะได้มีโอกาสไปออกกำลังกายตามสถานที่ต่างๆที่กล่าวมาข้างต้น อาจเพราะเลิกงานช้า จราจรติดขัด หรือแม้แต่เหตุผลที่ว่าไม่ชอบที่ๆมีคนมาอยู่รวมกันมากๆ ดังนั้น ผู้เขียนจึงขอนำเสนอวิธีการออกกำลังอย่างง่ายๆที่ผู้อ่านสามารถทำได้ที่บ้าน ดังนี้\r\n1.แกว่ง การแกว่งแขนนั้นเป็นการออกกำลังกายที่ง่ายมาก อีกทั้งสามารถทำได้ในทุกสถานที่และทุกเวลาโดยไม่ต้องพึ่งพาอุปกรณ์ใดๆเลย การแกว่งแขนควรทำติดต่อกันประมาณ10นาที และภายในหนึ่งวันควรทำให้ได้ 30นาที ซึ่งจะส่งผลให้ร่างกายแข็งแรง รู้สึกผ่อนคลายทำให้ร่างกายสดชื่นกระฉับกระเฉง ลดอาการปวดคอบ่าไหล่จากการทำงาน ลดน้ำตาลในเลือด ลดความดันโลหิตสูง ลดการสะสมของไขมัน อีกทั้งช่วยให้เลือดลมไหลเวียนได้ดีขึ้น ทำให้ลดการเกิดโรคหัวใจอีกด้วย จะเห็นได้ว่าการแกว่งแขนเป็นการออกกำลังกายง่ายๆที่มีประโยชน์อย่างมหาศาลทีเดียว   ', 'Infophoto/pandas-live_64dff22c2fe56e9.jpg', 'NJ3SlVM3CkU');

-- --------------------------------------------------------

--
-- Table structure for table `stwDepartment`
--

CREATE TABLE IF NOT EXISTS `stwDepartment` (
  `stwDept_id` int(11) unsigned NOT NULL,
  `stwDept_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwDepartment`
--

INSERT INTO `stwDepartment` (`stwDept_id`, `stwDept_name`) VALUES
(1, 'ITt'),
(2, 'HR'),
(3, 'OG'),
(0, 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `stwFileupload`
--

CREATE TABLE IF NOT EXISTS `stwFileupload` (
  `stwFileupload_id` int(10) unsigned NOT NULL,
  `stwFileupload_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `stwFileupload_path` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwFileupload`
--

INSERT INTO `stwFileupload` (`stwFileupload_id`, `stwFileupload_name`, `stwFileupload_path`) VALUES
(1, 'er.docx', 'fileupload/er.docx');

-- --------------------------------------------------------

--
-- Table structure for table `stwLesson`
--

CREATE TABLE IF NOT EXISTS `stwLesson` (
  `stwLesson_id` int(10) unsigned NOT NULL,
  `stwLesson_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwLesson`
--

INSERT INTO `stwLesson` (`stwLesson_id`, `stwLesson_name`) VALUES
(1, 'การแนะนำเบื้องต้นเกี่ยวกับการทำงาน'),
(2, 'สภาพแวดล้อมที่ปลอดภัยในการทำงาน');

-- --------------------------------------------------------

--
-- Table structure for table `stwPrefix`
--

CREATE TABLE IF NOT EXISTS `stwPrefix` (
  `stwPrefix_id` int(11) unsigned NOT NULL,
  `stwPrefix_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwPrefix`
--

INSERT INTO `stwPrefix` (`stwPrefix_id`, `stwPrefix_name`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว');

-- --------------------------------------------------------

--
-- Table structure for table `stwQuestion`
--

CREATE TABLE IF NOT EXISTS `stwQuestion` (
  `stwQuestion_id` int(10) unsigned NOT NULL,
  `stwSubject_id` int(10) unsigned DEFAULT NULL,
  `stwQuestion_text` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwQuestion`
--

INSERT INTO `stwQuestion` (`stwQuestion_id`, `stwSubject_id`, `stwQuestion_text`) VALUES
(14, 40, 'ssssss'),
(15, 40, 'sadas'),
(16, 40, 'dasdad'),
(17, 41, 'กฟหก'),
(18, 41, 'ฟหกฟหกฟ'),
(19, 41, 'ฟกฟหก'),
(20, 41, 'ฟหกฟหกฟฟ'),
(21, 41, 'ฟหกฟหก'),
(22, 41, 'ฟหกฟหกฟก');

--
-- Triggers `stwQuestion`
--
DELIMITER $$
CREATE TRIGGER `delstwChoice` AFTER DELETE ON `stwQuestion`
 FOR EACH ROW BEGIN
	DELETE FROM stwChoice
    	WHERE stwQuestion_id = old.stwQuestion_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stwscore`
--

CREATE TABLE IF NOT EXISTS `stwscore` (
  `stwUser_id` int(10) unsigned NOT NULL,
  `stwSubject_id` int(10) unsigned NOT NULL,
  `amount` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stwscore`
--

INSERT INTO `stwscore` (`stwUser_id`, `stwSubject_id`, `amount`) VALUES
(1, 40, 1),
(1, 40, 2),
(1, 40, 1),
(0, 40, 2),
(5, 40, 2),
(22, 12, 40),
(369, 40, 3),
(369, 41, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stwShowlogo`
--

CREATE TABLE IF NOT EXISTS `stwShowlogo` (
  `stwShowlogo_id` int(10) unsigned NOT NULL,
  `stwUrllogo_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwShowlogo`
--

INSERT INTO `stwShowlogo` (`stwShowlogo_id`, `stwUrllogo_id`) VALUES
(1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `stwStatus`
--

CREATE TABLE IF NOT EXISTS `stwStatus` (
  `stwStatus_id` int(11) unsigned NOT NULL,
  `stwStatus_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwStatus`
--

INSERT INTO `stwStatus` (`stwStatus_id`, `stwStatus_name`) VALUES
(1, 'Administrator'),
(2, 'Super User'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `stwSubject`
--

CREATE TABLE IF NOT EXISTS `stwSubject` (
  `stwSubject_id` int(10) unsigned NOT NULL,
  `stwSubject_text` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stwDate_test` date DEFAULT NULL,
  `stwTime_start` time DEFAULT NULL,
  `stwTime_end` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwSubject`
--

INSERT INTO `stwSubject` (`stwSubject_id`, `stwSubject_text`, `stwDate_test`, `stwTime_start`, `stwTime_end`) VALUES
(40, 'การทดสอบ', '2017-02-10', '10:00:00', '15:00:00'),
(41, 'ทดสอบ ตาราง', '2017-02-10', '14:28:00', '18:00:00');

--
-- Triggers `stwSubject`
--
DELIMITER $$
CREATE TRIGGER `delstwQuestion` AFTER DELETE ON `stwSubject`
 FOR EACH ROW BEGIN
	DELETE FROM stwQuestion 
    	WHERE stwSubject_id = old.stwSubject_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stwtesting`
--

CREATE TABLE IF NOT EXISTS `stwtesting` (
  `stwUser_id` int(10) unsigned NOT NULL,
  `stwSubject_id` int(10) unsigned NOT NULL,
  `stwQuestion_id` int(10) unsigned NOT NULL,
  `stwChoice_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stwtesting`
--

INSERT INTO `stwtesting` (`stwUser_id`, `stwSubject_id`, `stwQuestion_id`, `stwChoice_id`) VALUES
(367, 40, 14, 55),
(367, 40, 15, 58),
(367, 40, 16, 61),
(369, 40, 14, 55),
(369, 40, 15, 59),
(369, 40, 16, 63),
(369, 41, 17, 67),
(369, 41, 18, 71),
(369, 41, 19, 75),
(369, 41, 20, 79),
(369, 41, 21, 83),
(369, 41, 22, 87),
(371, 40, 14, 55),
(371, 40, 15, 59),
(371, 40, 16, 63);

-- --------------------------------------------------------

--
-- Table structure for table `stwUrllogo`
--

CREATE TABLE IF NOT EXISTS `stwUrllogo` (
  `stwUrllogo_id` int(10) unsigned NOT NULL,
  `stwUrlname` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwUrllogo`
--

INSERT INTO `stwUrllogo` (`stwUrllogo_id`, `stwUrlname`) VALUES
(27, 'photo/newscms_thaihealth_c_abdiklnsty17.jpg'),
(32, 'photo/IMG_20170207_130205.jpg'),
(36, 'photo/wwf-logo-design.jpg'),
(37, 'photo/1461349110_9239.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stwUser`
--

CREATE TABLE IF NOT EXISTS `stwUser` (
  `stwUser_id` int(10) unsigned NOT NULL,
  `stwUsername` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwPassword` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwFirstname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwLastname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `stwEmail` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `stwTel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stwGender` tinyint(1) unsigned NOT NULL,
  `stwActivate` tinyint(1) unsigned NOT NULL,
  `stwDept_id` int(11) unsigned NOT NULL,
  `stwStatus_id` int(11) unsigned NOT NULL,
  `stwPrefix_id` int(11) unsigned NOT NULL,
  `stwCreated_date` datetime NOT NULL,
  `stwRequest` tinyint(1) unsigned NOT NULL,
  `stwProfileurl` varchar(250) COLLATE utf8_unicode_ci DEFAULT 'Images/avatar.png	'
) ENGINE=InnoDB AUTO_INCREMENT=373 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stwUser`
--

INSERT INTO `stwUser` (`stwUser_id`, `stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`, `stwStatus_id`, `stwPrefix_id`, `stwCreated_date`, `stwRequest`, `stwProfileurl`) VALUES
(361, 'leavetar123', '5d780364c63ff5cc9005fdd53d39a52a', '', '', '', '', 0, 1, 0, 1, 0, '2016-11-12 14:48:36', 0, 'photos/p1a27co0t41ojq1qqt55i1k9s16v652.jpg'),
(367, 'leavetar12345', '2b792dabb4328a140caef066322c49ff', 'niwat', 'thaiprathom', 'kootardodo@hotmail.com', '0944174005', 1, 1, 0, 3, 1, '2017-01-27 07:38:19', 3, 'Images/avatar.png	'),
(368, 'nattee', '8892dda9ffc2c5c15344bfaae3ea2fdd', 'นัทที', 'สุวานิช', 'natteesuvanit@outlook.clo.th', '0876776704', 1, 2, 1, 3, 1, '2017-01-30 10:26:18', 1, 'Images/avatar.png	'),
(369, '445566', '2b792dabb4328a140caef066322c49ff', 'thaiprathom', 'niwat', 'kodotardodo@hotmail.com', '0944174005', 1, 1, 1, 3, 1, '2017-01-31 09:42:17', 3, 'Images/avatar.png	'),
(370, 'ball123659', '61017160b25e937e7f8d430c90b1dc84', 'ธนา', 'จันทร์อบ', 'ball123659@gmail.com', '0867745834', 1, 1, 1, 2, 1, '2017-01-31 16:18:59', 1, 'Images/avatar.png	'),
(371, 'leavetar1234596', '5d780364c63ff5cc9005fdd53d39a52a', 'niwat', 'thaiprathom', 'kootarddodo@hotmail.com', '0944174005', 1, 1, 1, 3, 1, '2017-02-03 14:09:13', 3, 'Images/avatar.png	'),
(372, 'johntar', '5d780364c63ff5cc9005fdd53d39a52a', 'j', 'k', 'k@hotmail.com', '0944174005', 1, 2, 3, 3, 3, '2017-02-09 11:14:34', 1, 'Images/avatar.png	');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stwChoice`
--
ALTER TABLE `stwChoice`
  ADD PRIMARY KEY (`stwChoice_id`);

--
-- Indexes for table `stwContent`
--
ALTER TABLE `stwContent`
  ADD PRIMARY KEY (`stwContent_id`);

--
-- Indexes for table `stwFileupload`
--
ALTER TABLE `stwFileupload`
  ADD PRIMARY KEY (`stwFileupload_id`);

--
-- Indexes for table `stwLesson`
--
ALTER TABLE `stwLesson`
  ADD PRIMARY KEY (`stwLesson_id`);

--
-- Indexes for table `stwQuestion`
--
ALTER TABLE `stwQuestion`
  ADD PRIMARY KEY (`stwQuestion_id`);

--
-- Indexes for table `stwShowlogo`
--
ALTER TABLE `stwShowlogo`
  ADD PRIMARY KEY (`stwShowlogo_id`);

--
-- Indexes for table `stwSubject`
--
ALTER TABLE `stwSubject`
  ADD PRIMARY KEY (`stwSubject_id`);

--
-- Indexes for table `stwtesting`
--
ALTER TABLE `stwtesting`
  ADD PRIMARY KEY (`stwUser_id`,`stwSubject_id`,`stwQuestion_id`);

--
-- Indexes for table `stwUrllogo`
--
ALTER TABLE `stwUrllogo`
  ADD PRIMARY KEY (`stwUrllogo_id`);

--
-- Indexes for table `stwUser`
--
ALTER TABLE `stwUser`
  ADD PRIMARY KEY (`stwUser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stwChoice`
--
ALTER TABLE `stwChoice`
  MODIFY `stwChoice_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `stwContent`
--
ALTER TABLE `stwContent`
  MODIFY `stwContent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stwFileupload`
--
ALTER TABLE `stwFileupload`
  MODIFY `stwFileupload_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stwLesson`
--
ALTER TABLE `stwLesson`
  MODIFY `stwLesson_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stwQuestion`
--
ALTER TABLE `stwQuestion`
  MODIFY `stwQuestion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `stwShowlogo`
--
ALTER TABLE `stwShowlogo`
  MODIFY `stwShowlogo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stwSubject`
--
ALTER TABLE `stwSubject`
  MODIFY `stwSubject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `stwUrllogo`
--
ALTER TABLE `stwUrllogo`
  MODIFY `stwUrllogo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `stwUser`
--
ALTER TABLE `stwUser`
  MODIFY `stwUser_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=373;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
