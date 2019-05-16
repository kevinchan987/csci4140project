-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-05-15 20:10:26
-- 伺服器版本： 8.0.16
-- PHP 版本： 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `chatroom`
--

-- --------------------------------------------------------

--
-- 資料表結構 `chatbox`
--

CREATE TABLE `chatbox` (
  `fromid` int(255) NOT NULL,
  `toid` int(255) NOT NULL,
  `newmsg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `newtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `chatbox`
--

INSERT INTO `chatbox` (`fromid`, `toid`, `newmsg`) VALUES
(4, 3, 'i am lily!'),
(3, 4, 'tom here'),
(2, 3, 'thx'),
(3, 2, NULL),
(7, 3, 'hi'),
(3, 7, 'hi');

-- --------------------------------------------------------

--
-- 資料表結構 `chatmsg`
--

CREATE TABLE `chatmsg` (
  `fromid` int(255) NOT NULL,
  `toid` int(255) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `senttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `chatmsg`
--

INSERT INTO `chatmsg` (`fromid`, `toid`, `msg`) VALUES
(3, 2, 'ok'),
(3, 2, 'hi'),
(3, 4, 'hello!'),
(2, 3, 'hi i am jack.'),
(3, 2, 'i am Lily.'),
(3, 2, 'i have some questions.'),
(3, 2, 'okok'),
(2, 3, 'what is it?'),
(3, 2, 'When wil you free?'),
(2, 3, 'weekend is ok.'),
(3, 2, 'get it'),
(4, 3, 'hi'),
(3, 4, 'i am lily!'),
(4, 3, 'tom here'),
(3, 2, 'thx'),
(3, 7, 'hi'),
(7, 3, 'hi');

-- --------------------------------------------------------

--
-- 資料表結構 `chatters`
--

CREATE TABLE `chatters` (
  `name` text NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `chatters`
--

INSERT INTO `chatters` (`name`, `seen`) VALUES
('asd', '2019-05-14 15:10:18'),
('adc', '2019-05-14 15:10:22'),
('jack', '2019-05-15 15:28:39'),
('hi', '2019-05-15 16:43:02'),
('sad', '2019-05-15 17:08:09'),
('f', '2019-05-15 18:06:34');

-- --------------------------------------------------------

--
-- 資料表結構 `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('jack', 'hi', '2019-05-14 13:47:02'),
('jack', 'sad', '2019-05-14 13:48:15'),
('asd', 'hi', '2019-05-14 13:48:20'),
('asd', 'sa', '2019-05-14 14:00:26'),
('asd', 'sd', '2019-05-14 14:00:27'),
('asd', 'df', '2019-05-14 14:00:28'),
('asd', 'fgd', '2019-05-14 14:00:29'),
('asd', 'sf', '2019-05-14 14:00:30'),
('asd', 'dsg', '2019-05-14 14:00:31'),
('asd', 'dsg', '2019-05-14 14:00:32'),
('asd', 'dsg', '2019-05-14 14:00:33'),
('adc', 'jack', '2019-05-14 14:06:26'),
('adc', 'okok', '2019-05-14 14:06:44'),
('hi', 'hi', '2019-05-14 15:40:33'),
('hi', 'acb', '2019-05-14 15:46:49'),
('hi', 'asdfg', '2019-05-14 15:49:53'),
('hi', 'asd', '2019-05-14 15:49:59'),
('hi', 'okok', '2019-05-14 17:31:15'),
('hi', 'asd', '2019-05-14 17:35:29'),
('hi', 'sad', '2019-05-14 17:35:32'),
('hi', 'jack', '2019-05-14 18:28:24'),
('hi', 'hi', '2019-05-15 14:33:06'),
('jack', 'hi', '2019-05-15 14:50:47'),
('3', 'hi', '2019-05-15 16:42:46'),
('hi', 'hihi', '2019-05-15 16:43:07'),
('hi', 'abc', '2019-05-15 17:00:46'),
('sad', 'asd', '2019-05-15 17:13:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
