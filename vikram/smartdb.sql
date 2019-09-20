-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 12:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ann_admin`
--

CREATE TABLE `ann_admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ann_admin`
--

INSERT INTO `ann_admin` (`admin_id`, `user_name`, `password`, `station_id`) VALUES
(1, 'vipul', 'user96', 1),
(2, 'yash', 'user97', 0),
(3, 'chirag', 'user21', 0),
(4, 'vikram', 'user94', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ann_info`
--

CREATE TABLE `ann_info` (
  `ann_id` int(11) NOT NULL,
  `station_id` int(11) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(511) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ann_info`
--

INSERT INTO `ann_info` (`ann_id`, `station_id`, `date_time`, `title`, `content`) VALUES
(1, 1, '2018-03-21 19:57:31', 'Train to Rajpura Junction.', 'Arriving on platform no-2.'),
(2, 1, '2018-03-24 20:02:22', '', ''),
(3, 1, '2018-03-24 20:03:22', '', ''),
(4, 1, '2018-03-24 20:04:00', '', ''),
(5, 1, '2018-03-24 20:04:50', 'title', 'content'),
(6, 1, '2018-03-24 20:06:48', 'This is a title', 'This is the required content'),
(7, 1, '2018-03-25 16:24:48', 'This is an announcement.', 'No train is coming.'),
(8, 1, '2018-03-30 08:43:02', 'Now a train is coming', 'On platform no.63'),
(9, 1, '2018-03-30 09:41:23', 'Train Cancellaton', 'Train no. 12314 cancelled'),
(10, 1, '2018-03-30 13:00:51', 'Train late', 'Hawrah train is running late by 30 minutes.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_answers`
--

CREATE TABLE `enquiry_answers` (
  `answer_id` int(11) NOT NULL,
  `enquiry_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_answer_comments`
--

CREATE TABLE `enquiry_answer_comments` (
  `comment_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_answer_votes`
--

CREATE TABLE `enquiry_answer_votes` (
  `vote_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_questions`
--

CREATE TABLE `enquiry_questions` (
  `enquiry_id` int(11) NOT NULL,
  `station_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(511) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `official_reply` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_questions`
--

INSERT INTO `enquiry_questions` (`enquiry_id`, `station_id`, `user_id`, `title`, `content`, `date_time`, `official_reply`) VALUES
(1, 1, 4, 'When will the train to Rajpura arrive?', NULL, '2018-03-25 17:32:03', 'This is the official reply.'),
(2, 1, 4, 'What is the booking cost of Retiring room?', 'I have to stay with my family tonight. Me and My wife and my two kids.', '2018-03-25 17:32:03', 'This is the official reply.'),
(3, 1, 1, 'title', 'content', '2018-03-25 17:32:03', 'This is the official reply.'),
(4, 1, 1, 'Title', 'Content', '2018-03-25 17:32:03', 'This is the official reply.'),
(5, 1, 1, 'Title', 'Content\r\n', '2018-03-25 17:32:03', 'This is the official reply.'),
(6, 1, 1, 'This is my first enquiry.', 'This is the first enquiry description.', '2018-03-25 17:34:21', 'So, this would be your first official answer.'),
(7, 1, 1, 'This my second enquiry', 'This is the second description.', '2018-03-30 08:34:25', NULL),
(8, 1, 1, 'This is yash', 'This is chirag', '2018-03-30 08:42:12', 'this is reply'),
(9, 1, 1, 'this is my enquiry', 'this is my description', '2018-03-30 12:38:59', 'this is my official reply');

-- --------------------------------------------------------

--
-- Table structure for table `enq_admin`
--

CREATE TABLE `enq_admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enq_admin`
--

INSERT INTO `enq_admin` (`admin_id`, `user_name`, `password`, `station_id`) VALUES
(1, 'vipul', 'user96', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_answers`
--

CREATE TABLE `forum_answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answers`
--

INSERT INTO `forum_answers` (`answer_id`, `question_id`, `user_id`, `answer`, `date_time`) VALUES
(1, 1, 1, 'This the first awesome answer.', '2018-03-24 08:49:30'),
(2, 1, 5, 'This is the second awesome answer.', '2018-03-24 08:49:30'),
(3, 4, 1, 'ok', '2018-03-31 09:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer_comments`
--

CREATE TABLE `forum_answer_comments` (
  `comment_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer_comments`
--

INSERT INTO `forum_answer_comments` (`comment_id`, `answer_id`, `user_id`, `comment`, `date_time`) VALUES
(1, 1, 3, 'This is the first comment.', '2018-03-24 08:50:18'),
(2, 1, 4, 'This is the second comment.', '2018-03-24 08:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer_votes`
--

CREATE TABLE `forum_answer_votes` (
  `vote_id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_questions`
--

CREATE TABLE `forum_questions` (
  `question_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(511) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `official_reply` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_questions`
--

INSERT INTO `forum_questions` (`question_id`, `user_id`, `title`, `content`, `date_time`, `official_reply`) VALUES
(1, 2, 'This is the first question.', 'This is the first answer.', '2018-03-24 08:48:32', NULL),
(2, 3, 'This is the second question.', 'This is the second answer.', '2018-03-24 08:48:32', NULL),
(3, 1, 'This is the third question', 'This is the third description.', '2018-03-31 09:16:58', NULL),
(4, 1, '', 'This is a answer', '2018-03-31 09:34:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `journey_info`
--

CREATE TABLE `journey_info` (
  `journey_id` int(11) NOT NULL,
  `train_no` int(11) DEFAULT NULL,
  `tte_id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey_info`
--

INSERT INTO `journey_info` (`journey_id`, `train_no`, `tte_id`, `date`, `status`) VALUES
(1, 12345, 1, '03-04-2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `journey_route`
--

CREATE TABLE `journey_route` (
  `journey_route` int(11) NOT NULL,
  `journey_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `arrival` varchar(255) DEFAULT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `journey_day` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey_route`
--

INSERT INTO `journey_route` (`journey_route`, `journey_id`, `route_id`, `arrival`, `departure`, `journey_day`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL),
(5, 1, 5, NULL, NULL, NULL),
(6, 1, 6, NULL, NULL, NULL),
(7, 1, 7, NULL, NULL, NULL),
(8, 1, 8, NULL, NULL, NULL),
(9, 1, 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pantry_info`
--

CREATE TABLE `pantry_info` (
  `pantry_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pantry_info`
--

INSERT INTO `pantry_info` (`pantry_id`, `user_name`, `password`) VALUES
(1, 'vipul', 'user96');

-- --------------------------------------------------------

--
-- Table structure for table `pnr_info`
--

CREATE TABLE `pnr_info` (
  `pnr_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `journey_id` int(11) DEFAULT NULL,
  `coach_no` varchar(255) DEFAULT NULL,
  `seat_no` int(11) DEFAULT NULL,
  `start_point` int(11) DEFAULT NULL,
  `end_point` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnr_info`
--

INSERT INTO `pnr_info` (`pnr_no`, `user_id`, `journey_id`, `coach_no`, `seat_no`, `start_point`, `end_point`, `status`) VALUES
(123456789, 1, 1, 'B2', 32, 3, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `safai_admin`
--

CREATE TABLE `safai_admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safai_admin`
--

INSERT INTO `safai_admin` (`admin_id`, `user_name`, `password`, `station_id`) VALUES
(1, 'vipul', 'user96', 1);

-- --------------------------------------------------------

--
-- Table structure for table `safai_request`
--

CREATE TABLE `safai_request` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `content` varchar(511) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `final` int(11) DEFAULT '0',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safai_request`
--

INSERT INTO `safai_request` (`request_id`, `user_id`, `station_id`, `latitude`, `longitude`, `file_name`, `content`, `status`, `final`, `date_time`) VALUES
(1, 1, 1, '18.5279237', '73.85116630000002', 'f961d03c423ef0016451e75a31e4637e22abac02.jpg', 'This is request 1.', 'third\r\n', 1, '2018-03-30 11:15:31'),
(2, 1, 1, '18.527935499999998', '73.85118369999999', '0ff8d2448247890446c7c73219fddddefa71eccb.png', 'This is safai request 2.', 'This is next update.', 1, '2018-03-30 11:17:42'),
(3, 1, 1, '18.527970399999997', '73.85123', '8b90c9ac3d08f9b234475a3a6e6d02865546951f.jpg', 'many plastic bottels', 'where are you', 1, '2018-03-30 12:57:44'),
(4, 1, 1, '18.527953099999998', '73.8511596', '64e785592c9b479153fd5fe8730e7b7494426fbf.jpg', 'Platfrom no.3 is very dirty.', NULL, 0, '2018-03-30 13:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `safai_workers`
--

CREATE TABLE `safai_workers` (
  `worker_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safai_workers`
--

INSERT INTO `safai_workers` (`worker_id`, `full_name`, `user_name`, `password`, `station_id`) VALUES
(1, 'Tanshu Jindal', 'tanshu', 'tanshu123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `station_info`
--

CREATE TABLE `station_info` (
  `station_id` int(11) NOT NULL,
  `station_name` varchar(255) DEFAULT NULL,
  `station_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station_info`
--

INSERT INTO `station_info` (`station_id`, `station_name`, `station_code`) VALUES
(1, 'PATIALA', 'PTA'),
(2, 'Station_2', 'ST_2'),
(3, 'Station_3', 'ST_3'),
(4, 'Station_4', 'ST_4'),
(5, 'Station_5', 'ST_5'),
(6, 'Station_6', 'ST_6'),
(7, 'Station_7', 'ST_7'),
(8, 'Station_8', 'ST_8'),
(9, 'Station_9', 'ST_9'),
(10, 'Station_10', 'ST_10'),
(11, 'Station_11', 'ST_11');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_info`
--

CREATE TABLE `train_info` (
  `train_no` int(11) NOT NULL,
  `train_name` varchar(255) DEFAULT NULL,
  `start_point` int(11) DEFAULT NULL,
  `end_point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_info`
--

INSERT INTO `train_info` (`train_no`, `train_name`, `start_point`, `end_point`) VALUES
(12345, 'Station_2 To Station_10 Passenger', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `train_medic`
--

CREATE TABLE `train_medic` (
  `medic_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_medic`
--

INSERT INTO `train_medic` (`medic_id`, `user_name`, `password`) VALUES
(1, 'vipul', 'user96');

-- --------------------------------------------------------

--
-- Table structure for table `train_route`
--

CREATE TABLE `train_route` (
  `route_id` int(11) NOT NULL,
  `train_no` int(11) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `arrival` varchar(255) DEFAULT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `halt_time` int(11) DEFAULT NULL,
  `distance_covered` int(11) DEFAULT NULL,
  `journey_day` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_route`
--

INSERT INTO `train_route` (`route_id`, `train_no`, `station_id`, `arrival`, `departure`, `halt_time`, `distance_covered`, `journey_day`) VALUES
(1, 12345, 2, NULL, '09:45', 0, 0, 1),
(2, 12345, 3, '11:20', '11:25', 5, 45, 1),
(3, 12345, 4, '13:10', '13:20', 10, 100, 1),
(4, 12345, 5, '16:22', '16:25', 3, 220, 1),
(5, 12345, 6, '19:23', '19:35', 12, 400, 1),
(6, 12345, 7, '23:10', '23:15', 5, 650, 1),
(7, 12345, 8, '01:00', '01:10', 10, 720, 2),
(8, 12345, 9, '01:45', '01:47', 2, 750, 2),
(11, 12345, 10, '02:15', NULL, 0, 800, 2);

-- --------------------------------------------------------

--
-- Table structure for table `train_safai`
--

CREATE TABLE `train_safai` (
  `safai_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_safai`
--

INSERT INTO `train_safai` (`safai_id`, `user_name`, `password`) VALUES
(1, 'vipul', 'user96');

-- --------------------------------------------------------

--
-- Table structure for table `tte_info`
--

CREATE TABLE `tte_info` (
  `tte_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tte_info`
--

INSERT INTO `tte_info` (`tte_id`, `user_name`, `full_name`, `password`) VALUES
(1, 'vipul', 'Vipul Sharma', 'user96');

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE `user_experience` (
  `exp_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `finish` varchar(255) DEFAULT NULL,
  `description` varchar(511) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upvote` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`exp_id`, `user_id`, `start`, `finish`, `description`, `date_time`, `upvote`) VALUES
(1, 1, 'PATIALA - PTA', 'PUNE JN - PUNE', 'Hello', '2018-03-30 03:47:38', 0),
(2, 1, 'PATIALA - PTA', 'PUNE JN - PUNE', '', '2018-03-30 04:12:12', 0),
(3, 1, 'PATIALA - PTA', 'PUNE JN - PUNE', 'Nice Journey', '2018-03-30 09:40:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `full_name`, `mobile_no`, `email_id`, `password`) VALUES
(1, 'vipul', 'Vipul Sharma', 7347673767, 'vipuls526@gmail.com', 'vipul123'),
(2, 'tanshu', 'Tanshu Jindal', NULL, NULL, 'tanshu123'),
(3, 'chirag', 'Chirag', NULL, NULL, 'chirag123'),
(4, 'yash', 'Yash Srivastava', NULL, '', 'yash123'),
(5, 'vikram', 'Vikram Singh Vishnoi', NULL, NULL, 'vikram123'),
(6, 'ishan', 'Ishan Bhargava', NULL, NULL, 'ishan123');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `link` varchar(511) DEFAULT 'notifications.php',
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_code` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notifications`
--

INSERT INTO `user_notifications` (`notification_id`, `user_id`, `link`, `title`, `content`, `date_time`, `read_code`) VALUES
(1, 1, 'notifications.php', 'Congratulations', 'We will always be there for you.', '2018-03-30 20:58:26', 1),
(2, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-30 22:12:27', 1),
(3, 1, 'notifications.php', 'Congratulations', '', '2018-03-31 02:32:17', 1),
(4, 1, 'notifications.php', 'Congratulations', '', '2018-03-31 03:57:52', 1),
(5, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 03:57:52', 1),
(6, 1, 'notifications.php', 'Congratulations', '', '2018-03-31 03:57:52', 1),
(7, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:01:34', 1),
(8, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:01:34', 1),
(9, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:03:56', 1),
(10, 1, 'notifications.php', 'Great you are on time.', 'Now, get ready to board your train.', '2018-03-31 04:04:03', 1),
(11, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:27:07', 1),
(12, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:27:07', 1),
(13, 1, 'notifications.php', 'Great you are on time.', 'Now, get ready to board your train.', '2018-03-31 04:27:07', 1),
(14, 1, 'notifications.php', 'Get ready for your journey', 'Less than 24hrs left for your journey. Get ready for an awesome travel experience.', '2018-03-31 04:39:59', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ann_admin`
--
ALTER TABLE `ann_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ann_info`
--
ALTER TABLE `ann_info`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `enquiry_answers`
--
ALTER TABLE `enquiry_answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `enquiry_answer_comments`
--
ALTER TABLE `enquiry_answer_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `enquiry_answer_votes`
--
ALTER TABLE `enquiry_answer_votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `enquiry_questions`
--
ALTER TABLE `enquiry_questions`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `enq_admin`
--
ALTER TABLE `enq_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `forum_answers`
--
ALTER TABLE `forum_answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `forum_answer_comments`
--
ALTER TABLE `forum_answer_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `forum_answer_votes`
--
ALTER TABLE `forum_answer_votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `forum_questions`
--
ALTER TABLE `forum_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `journey_info`
--
ALTER TABLE `journey_info`
  ADD PRIMARY KEY (`journey_id`);

--
-- Indexes for table `journey_route`
--
ALTER TABLE `journey_route`
  ADD PRIMARY KEY (`journey_route`);

--
-- Indexes for table `pantry_info`
--
ALTER TABLE `pantry_info`
  ADD PRIMARY KEY (`pantry_id`);

--
-- Indexes for table `pnr_info`
--
ALTER TABLE `pnr_info`
  ADD PRIMARY KEY (`pnr_no`);

--
-- Indexes for table `safai_admin`
--
ALTER TABLE `safai_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `safai_request`
--
ALTER TABLE `safai_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `safai_workers`
--
ALTER TABLE `safai_workers`
  ADD PRIMARY KEY (`worker_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `station_info`
--
ALTER TABLE `station_info`
  ADD PRIMARY KEY (`station_id`),
  ADD UNIQUE KEY `station_code` (`station_code`);

--
-- Indexes for table `train_info`
--
ALTER TABLE `train_info`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `train_medic`
--
ALTER TABLE `train_medic`
  ADD PRIMARY KEY (`medic_id`);

--
-- Indexes for table `train_route`
--
ALTER TABLE `train_route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `train_safai`
--
ALTER TABLE `train_safai`
  ADD PRIMARY KEY (`safai_id`);

--
-- Indexes for table `tte_info`
--
ALTER TABLE `tte_info`
  ADD PRIMARY KEY (`tte_id`);

--
-- Indexes for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ann_admin`
--
ALTER TABLE `ann_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ann_info`
--
ALTER TABLE `ann_info`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enquiry_answers`
--
ALTER TABLE `enquiry_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquiry_answer_comments`
--
ALTER TABLE `enquiry_answer_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquiry_answer_votes`
--
ALTER TABLE `enquiry_answer_votes`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquiry_questions`
--
ALTER TABLE `enquiry_questions`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `enq_admin`
--
ALTER TABLE `enq_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forum_answers`
--
ALTER TABLE `forum_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forum_answer_comments`
--
ALTER TABLE `forum_answer_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `forum_answer_votes`
--
ALTER TABLE `forum_answer_votes`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_questions`
--
ALTER TABLE `forum_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `journey_info`
--
ALTER TABLE `journey_info`
  MODIFY `journey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `journey_route`
--
ALTER TABLE `journey_route`
  MODIFY `journey_route` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pantry_info`
--
ALTER TABLE `pantry_info`
  MODIFY `pantry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `safai_admin`
--
ALTER TABLE `safai_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `safai_request`
--
ALTER TABLE `safai_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `safai_workers`
--
ALTER TABLE `safai_workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `station_info`
--
ALTER TABLE `station_info`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `train_medic`
--
ALTER TABLE `train_medic`
  MODIFY `medic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `train_route`
--
ALTER TABLE `train_route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `train_safai`
--
ALTER TABLE `train_safai`
  MODIFY `safai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tte_info`
--
ALTER TABLE `tte_info`
  MODIFY `tte_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
