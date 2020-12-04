-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 07:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irangiro_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `target` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `target`, `album_image`, `created_on`) VALUES
(1, '65', '2020_81myst.png=2020_37myst.png', '2020-12-04 13:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_on` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_at` datetime NOT NULL,
  `likes_counts_` int(11) NOT NULL,
  `dislikes_counts_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(10) UNSIGNED NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `follow_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follow_id`, `sender`, `receiver`, `follow_on`) VALUES
(2, 65, 80, '2020-12-01 13:11:43'),
(3, 65, 80, '2020-12-01 13:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(10) UNSIGNED NOT NULL,
  `like_by` int(11) NOT NULL,
  `like_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_to` int(11) NOT NULL,
  `message_from` int(11) NOT NULL,
  `message_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message`, `message_to`, `message_from`, `message_on`, `status`) VALUES
(136, 'amakuru', 65, 66, '2020-12-01 13:26:58', 1),
(137, 'ndaho', 66, 65, '2020-12-01 13:50:21', 1),
(138, 'turaburanye', 65, 66, '2020-12-01 13:57:51', 1),
(139, 'uraho', 66, 65, '2020-12-04 19:00:20', 0),
(140, 'turaburanye', 66, 65, '2020-12-04 19:00:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `notification_for` int(11) UNSIGNED NOT NULL,
  `notification_from` int(11) UNSIGNED NOT NULL,
  `target` int(11) UNSIGNED NOT NULL,
  `type` enum('follow','retweet','likes','mention') COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `status` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_for`, `notification_from`, `target`, `type`, `time`, `status`) VALUES
(1, 66, 65, 66, 'follow', '2020-12-01 14:11:07', 1),
(2, 80, 65, 80, 'follow', '2020-12-01 13:11:43', 0),
(3, 80, 65, 80, 'follow', '2020-12-01 13:11:56', 0),
(4, 65, 0, 20, 'likes', '2020-12-04 13:41:10', 1),
(5, 65, 0, 20, 'likes', '2020-12-04 13:41:10', 1),
(6, 65, 0, 20, 'likes', '2020-12-04 13:41:11', 1),
(7, 65, 0, 20, 'likes', '2020-12-04 13:41:12', 1),
(8, 65, 0, 20, 'likes', '2020-12-04 13:41:12', 1),
(9, 65, 0, 20, 'likes', '2020-12-04 13:41:13', 1),
(10, 65, 0, 20, 'likes', '2020-12-04 13:41:13', 1),
(11, 65, 0, 20, 'likes', '2020-12-04 13:41:13', 1),
(12, 65, 0, 20, 'likes', '2020-12-04 13:41:13', 1),
(13, 65, 0, 20, 'likes', '2020-12-04 13:41:14', 1),
(14, 65, 0, 20, 'likes', '2020-12-04 13:41:14', 1),
(15, 65, 0, 20, 'likes', '2020-12-04 13:41:17', 1),
(16, 65, 0, 20, 'likes', '2020-12-04 13:41:18', 1),
(17, 65, 0, 20, 'likes', '2020-12-04 13:41:21', 1),
(18, 65, 0, 20, 'likes', '2020-12-04 13:41:32', 1),
(19, 65, 0, 20, 'likes', '2020-12-04 13:41:32', 1),
(20, 65, 0, 20, 'likes', '2020-12-04 13:41:32', 1),
(21, 65, 0, 20, 'likes', '2020-12-04 13:41:32', 1),
(22, 65, 0, 20, 'likes', '2020-12-04 13:41:33', 1),
(23, 65, 0, 20, 'likes', '2020-12-04 13:41:33', 1),
(24, 65, 0, 20, 'likes', '2020-12-04 13:41:33', 1),
(25, 65, 0, 20, 'likes', '2020-12-04 13:41:34', 1),
(26, 65, 0, 20, 'likes', '2020-12-04 13:41:34', 1),
(27, 65, 0, 20, 'likes', '2020-12-04 13:41:34', 1),
(28, 65, 0, 20, 'likes', '2020-12-04 13:41:35', 1),
(29, 65, 0, 20, 'likes', '2020-12-04 13:41:35', 1),
(30, 65, 0, 20, 'likes', '2020-12-04 13:41:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `comment_id_` int(11) NOT NULL,
  `comment_` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_on_` int(11) NOT NULL,
  `comment_by_` int(11) NOT NULL,
  `comment_at_` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`comment_id_`, `comment_`, `comment_on_`, `comment_by_`, `comment_at_`) VALUES
(1, 'bite', 1, 61, '2019-08-25 07:54:16'),
(2, 'uraho', 1, 61, '2019-08-25 08:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `post_dislike`
--

CREATE TABLE `post_dislike` (
  `like_id_` int(11) NOT NULL,
  `like_on_` int(11) NOT NULL,
  `like_by_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_dislike`
--

INSERT INTO `post_dislike` (`like_id_`, `like_on_`, `like_by_`) VALUES
(1, 1, 61),
(2, 9, 83),
(3, 10, 83),
(4, 11, 83);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `like_id_` int(11) NOT NULL,
  `like_on_` int(11) NOT NULL,
  `like_by_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`like_id_`, `like_on_`, `like_by_`) VALUES
(1, 1, 61),
(2, 9, 83),
(3, 10, 83);

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `trend_id` int(10) UNSIGNED NOT NULL,
  `hashtag` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`trend_id`, `hashtag`, `target`, `created_on`) VALUES
(6, 'php', '16', '2020-11-22 14:35:45'),
(7, 'amakuru', '18', '2020-11-22 13:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `tweet_id` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweetBy` int(11) NOT NULL,
  `retweet_id` int(11) NOT NULL,
  `retweet_by` int(11) NOT NULL,
  `tweet_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweet_image_size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes_counts` int(11) NOT NULL,
  `retweet_counts` int(11) NOT NULL,
  `posted_on` datetime NOT NULL,
  `retweet_Msg` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`tweet_id`, `status`, `tweetBy`, `retweet_id`, `retweet_by`, `tweet_image`, `tweet_image_size`, `likes_counts`, `retweet_counts`, `posted_on`, `retweet_Msg`) VALUES
(16, '@irangiro #php', 65, 0, 0, '', '', 0, 0, '2020-11-22 14:35:45', ''),
(17, 'amakuru uraho turaburanye kbs', 65, 0, 0, '', '', 0, 0, '2020-11-22 13:45:17', ''),
(18, '#amakuru banyarwanda', 65, 0, 0, '', '', 0, 0, '2020-11-22 13:48:12', ''),
(19, 'muraho bantu banjye', 65, 0, 0, '', '', 0, 0, '2020-12-01 13:26:32', ''),
(20, 'ndagurisha izi', 65, 0, 0, '2020_840_ai.jpeg=2020_400air.jpeg=2020_760011.jpeg', '10423=8051=13018', 0, 0, '2020-12-01 13:13:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `date_registry` date NOT NULL,
  `last_login` datetime NOT NULL,
  `last_profile_edit` datetime NOT NULL,
  `counts_login` int(11) NOT NULL,
  `forgotUsernameCounts` int(11) NOT NULL,
  `forgotUsernameCountsTimesHeCreates` int(11) NOT NULL,
  `forgotUsernameCountsTimesHeCreatespassword` int(11) NOT NULL,
  `profile_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img_crop` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diploma` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbys` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followers` int(11) NOT NULL,
  `following` int(11) NOT NULL,
  `approval` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_education` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_business` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_of_people` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_structure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_facilities` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_statement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unemployment` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_fields` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districts` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_education` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_date_start` date NOT NULL,
  `primary_date_end` date NOT NULL,
  `secondary_education` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_date_start` date NOT NULL,
  `secondary_date_end` date NOT NULL,
  `university_education` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_date_start` date NOT NULL,
  `university_date_end` date NOT NULL,
  `experience_date_start` date NOT NULL,
  `experience_working` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_duties` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_field` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_field1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_field2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `chat`, `career`, `country`, `date_birth`, `date_registry`, `last_login`, `last_profile_edit`, `counts_login`, `forgotUsernameCounts`, `forgotUsernameCountsTimesHeCreates`, `forgotUsernameCountsTimesHeCreatespassword`, `profile_img`, `profile_img_crop`, `cover_img`, `background`, `language`, `color`, `education`, `diploma`, `skills`, `location`, `hobbys`, `followers`, `following`, `approval`, `company_education`, `type_of_business`, `address`, `size_of_people`, `companyname`, `overview`, `history`, `team`, `legal_structure`, `location_facilities`, `mission_statement`, `website`, `unemployment`, `categories_fields`, `phone`, `about`, `province`, `districts`, `sector`, `cell`, `village`, `primary_education`, `primary_date_start`, `primary_date_end`, `secondary_education`, `secondary_date_start`, `secondary_date_end`, `university_education`, `university_date_start`, `university_date_end`, `experience_date_start`, `experience_working`, `experience_duties`, `experience_field`, `experience_field1`, `experience_field2`) VALUES
(65, 'fayzo', 'shema', 'irangiro', 'irangiroltd@gmail.com', 'fafa', 'Male', 'off', 'CEO', 'RW', '2020-11-26', '2020-11-20', '2020-12-04 19:10:43', '2020-12-04 12:54:44', 21, 0, 0, 0, '194laye.jpg', '', '100myst.png', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(66, 'muhire', 'muhire', 'muhire', 'muhire@yahoo.com', 'muhire', 'Male', 'off', '', 'RW', '1994-06-12', '2020-12-01', '2020-12-03 20:49:44', '0000-00-00 00:00:00', 3, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(67, 'qiqi', 'qiqi', 'qiqi', 'qiqi@gmail.com', 'qiqi', 'Male', '', '', 'AX', '1994-02-02', '2020-12-04', '2020-12-04 19:27:26', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(68, 'didi', 'didi', 'didi', 'didi@yahoo.com', 'didi', 'Male', '', '', 'AL', '1994-03-02', '2020-12-04', '2020-12-04 19:28:08', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(69, 'momo', 'momo', 'momo', 'momo@gmail.com', 'momo', 'Female', '', '', 'AX', '1994-03-03', '2020-12-04', '2020-12-04 19:28:36', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(70, 'mqmq', 'mqmq', 'mqmq', 'mqmq@yahoo.com', 'mqmq', 'Female', '', '', 'AF', '1995-03-03', '2020-12-04', '2020-12-04 19:08:57', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(71, 'mwmw', 'mwmw', 'mwmw', 'mwmw@yahoo.com', 'mwmw', 'Male', '', '', 'AF', '1997-03-03', '2020-12-04', '2020-12-04 19:09:30', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(72, 'meme', 'meme', 'meme', 'meme@yahoo.com', 'meme', 'Male', '', '', 'AX', '1995-04-03', '2020-12-04', '2020-12-04 19:10:00', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(73, 'mrmr', 'mrmr', 'mrmr', 'mrmr@yahoo.com', 'mrmr', 'Male', '', '', 'AL', '1997-04-03', '2020-12-04', '2020-12-04 19:10:30', '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', '', '', 'black', '', '', '', '', '', 0, 0, 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`comment_id_`);

--
-- Indexes for table `post_dislike`
--
ALTER TABLE `post_dislike`
  ADD PRIMARY KEY (`like_id_`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`like_id_`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`trend_id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `comment_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_dislike`
--
ALTER TABLE `post_dislike`
  MODIFY `like_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `like_id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `trend_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `tweet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
