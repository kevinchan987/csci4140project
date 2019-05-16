-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-05-09 19:09:38
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
-- 資料庫： `csci4140project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `applysp`
--

CREATE TABLE `applysp` (
  `applyspid` int(11) NOT NULL,
  `spid` int(255) DEFAULT NULL,
  `applyuid` int(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `applytime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `applysp`
--

INSERT INTO `applysp` (`applyspid`, `spid`, `applyuid`, `firstname`, `lastname`) VALUES
(4, 2, 2, 'jack', 'ng'),
(5, 2, 4, 'Tom', 'chan'),
(6, 5, 2, 'jack', 'ng'),
(7, 6, 4, 'Tom', 'chan'),
(8, 7, 4, 'Tom', 'chan'),
(9, 8, 4, 'Tom', 'chan'),
(10, 9, 4, 'Tom', 'chan');

-- --------------------------------------------------------

--
-- 資料表結構 `applytp`
--

CREATE TABLE `applytp` (
  `applytpid` int(11) NOT NULL,
  `tpid` int(255) DEFAULT NULL,
  `applyuid` int(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `applytime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `applytp`
--

INSERT INTO `applytp` (`applytpid`, `tpid`, `applyuid`, `firstname`, `lastname`) VALUES
(3, 2, 3, 'd', 'd'),
(4, 1, 3, 'd', 'd'),
(5, 3, 5, 'jason', 'lau'),
(6, 4, 6, 'Jenny', 'Wong'),
(7, 2, 6, 'Jenny', 'Wong'),
(8, 3, 3, 'Lily', 'Tong'),
(9, 8, 3, 'Lily', 'Tong'),
(10, 9, 3, 'Lily', 'Tong');

-- --------------------------------------------------------

--
-- 資料表結構 `saccept`
--

CREATE TABLE `saccept` (
  `sacceptid` int(11) NOT NULL,
  `spid` int(255) DEFAULT NULL,
  `applyuid` int(255) DEFAULT NULL,
  `suid` int(255) NOT NULL,
  `accepttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `saccept`
--

INSERT INTO `saccept` (`sacceptid`, `spid`, `applyuid`, `suid`) VALUES
(1, 2, 4, 3),
(2, 6, 4, 3),
(3, 7, 4, 3),
(4, 8, 4, 3),
(5, 9, 4, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `sprate`
--

CREATE TABLE `sprate` (
  `sprid` int(11) NOT NULL,
  `spid` int(255) DEFAULT NULL,
  `suid` int(255) DEFAULT NULL,
  `tuid` int(255) DEFAULT NULL,
  `rating` int(255) DEFAULT NULL,
  `ratetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `sprate`
--

INSERT INTO `sprate` (`sprid`, `spid`, `suid`, `tuid`, `rating`) VALUES
(1, 2, 3, 4, 5),
(2, 6, 3, 4, 2),
(3, 7, 3, 4, 5),
(4, 8, 3, 4, 2),
(5, 8, 3, 4, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `stupost`
--

CREATE TABLE `stupost` (
  `spid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `edlevel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `posttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '1',
  `rated` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `stupost`
--

INSERT INTO `stupost` (`spid`, `uid`, `subject`, `region`, `day`, `price`, `edlevel`, `active`, `rated`) VALUES
(2, '3', 'Chinese Physics Chinese History ', 'Yau Tsim Mong', 'sunday monday ', '300', 'Primary 6', 0, 1),
(3, '5', 'Chinese English ', 'Sha Tin', 'monday tuesday ', '280', 'Form 1', 1, 0),
(4, '6', 'Economy BAFS ', 'Central and Western', 'friday saturday ', '300', 'Form 4', 1, 0),
(5, '3', 'Physics Chinese History ', 'Yau Tsim Mong', 'sunday ', '340', 'Form 5', 1, 0),
(6, '3', 'English ', 'Central and Western', 'monday ', '250', 'Primary 1', 0, 1),
(7, '3', 'English ', 'Central and Western', 'thursday ', '250', 'Primary 5', 0, 1),
(8, '3', 'English ', 'Central and Western', 'monday ', '250', 'Form 4', 0, 1),
(9, '3', 'Economy ', 'Central and Western', 'tuesday ', '250', 'Primary 1', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `taccept`
--

CREATE TABLE `taccept` (
  `tacceptid` int(11) NOT NULL,
  `tpid` int(255) DEFAULT NULL,
  `applyuid` int(255) DEFAULT NULL,
  `tuid` int(255) NOT NULL,
  `accepttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `taccept`
--

INSERT INTO `taccept` (`tacceptid`, `tpid`, `applyuid`, `tuid`) VALUES
(1, 1, 3, 2),
(2, 8, 3, 4),
(3, 9, 3, 2),
(4, 2, 6, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `tprate`
--

CREATE TABLE `tprate` (
  `tprid` int(11) NOT NULL,
  `tpid` int(255) DEFAULT NULL,
  `suid` int(255) DEFAULT NULL,
  `tuid` int(255) DEFAULT NULL,
  `rating` int(255) DEFAULT NULL,
  `ratetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tprate`
--

INSERT INTO `tprate` (`tprid`, `tpid`, `suid`, `tuid`, `rating`) VALUES
(1, 1, 3, 2, 4),
(2, 9, 3, 2, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `tutorpost`
--

CREATE TABLE `tutorpost` (
  `tpid` int(11) NOT NULL,
  `price` int(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `edlevel` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `day` varchar(255) NOT NULL,
  `posttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '1',
  `rated` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tutorpost`
--

INSERT INTO `tutorpost` (`tpid`, `price`, `region`, `edlevel`, `uid`, `subject`, `day`, `active`, `rated`) VALUES
(1, 190, 'Central and Western', 'Secondary', '2', 'English Chemistry Chinese History ', 'sunday thursday ', 0, 1),
(2, 200, 'Islands', 'Phd', '4', 'Chinese English ', 'monday friday saturday ', 0, 0),
(3, 290, 'Tai Po', 'University', '7', 'Physics Chemistry ', 'sunday saturday ', 1, 0),
(4, 220, 'Tai Po', 'University', '7', 'Maths ', 'friday ', 1, 0),
(5, 120, 'Kowloon City', 'University', '2', 'English Physics Chemistry ', 'tuesday saturday ', 1, 0),
(6, 290, 'Yau Tsim Mong', 'University', '2', 'English ', 'sunday wednesday ', 1, 0),
(7, 350, 'Kwun Tong', 'Secondary', '3', 'Physics Chemistry ', 'sunday saturday ', 1, 0),
(8, 250, 'Central and Western', 'Secondary', '4', 'English ', 'tuesday ', 0, 1),
(9, 250, 'Central and Western', 'Secondary', '2', 'Maths ', 'friday ', 0, 1),
(10, 250, 'Central and Western', 'Secondary', '4', 'Chinese Maths ', 'monday ', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `identity` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `firstname`, `lastname`, `identity`, `sex`, `rating`) VALUES
(2, 'a23833727', 'jack', 'jack', 'ng', 'tutor', 'male', 4.5),
(3, 'a', 'd', 'Lily', 'Tong', 'student', 'female', 3),
(4, 'tom123', 'tom', 'Tom', 'chan', 'tutor', 'male', 3.8),
(5, 'st1', 'st1', 'jason', 'lau', 'student', 'male', 3),
(6, 'st2', 'st2', 'Jenny', 'Wong', 'student', 'female', 3),
(7, 'tc1', 'tc1', 'Mary', 'Leung', 'tutor', 'female', 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `applysp`
--
ALTER TABLE `applysp`
  ADD PRIMARY KEY (`applyspid`);

--
-- 資料表索引 `applytp`
--
ALTER TABLE `applytp`
  ADD PRIMARY KEY (`applytpid`);

--
-- 資料表索引 `saccept`
--
ALTER TABLE `saccept`
  ADD PRIMARY KEY (`sacceptid`);

--
-- 資料表索引 `sprate`
--
ALTER TABLE `sprate`
  ADD PRIMARY KEY (`sprid`);

--
-- 資料表索引 `stupost`
--
ALTER TABLE `stupost`
  ADD PRIMARY KEY (`spid`);

--
-- 資料表索引 `taccept`
--
ALTER TABLE `taccept`
  ADD PRIMARY KEY (`tacceptid`);

--
-- 資料表索引 `tprate`
--
ALTER TABLE `tprate`
  ADD PRIMARY KEY (`tprid`);

--
-- 資料表索引 `tutorpost`
--
ALTER TABLE `tutorpost`
  ADD PRIMARY KEY (`tpid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `applysp`
--
ALTER TABLE `applysp`
  MODIFY `applyspid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `applytp`
--
ALTER TABLE `applytp`
  MODIFY `applytpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `saccept`
--
ALTER TABLE `saccept`
  MODIFY `sacceptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `sprate`
--
ALTER TABLE `sprate`
  MODIFY `sprid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `stupost`
--
ALTER TABLE `stupost`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `taccept`
--
ALTER TABLE `taccept`
  MODIFY `tacceptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `tprate`
--
ALTER TABLE `tprate`
  MODIFY `tprid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `tutorpost`
--
ALTER TABLE `tutorpost`
  MODIFY `tpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
