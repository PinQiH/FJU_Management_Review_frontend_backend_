-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mamba`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `articleid` int(11) NOT NULL,
  `articlename` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `articletype` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `articlecontent` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `articlepath` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contributor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewer1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewer2` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `managerreply` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`articleid`, `articlename`, `articletype`, `articlecontent`, `articlepath`, `contributor`, `reviewer1`, `reviewer2`, `managerreply`) VALUES
(21, 'article5', '會計', 'blahblahblahblahblah', NULL, 'con1', 're1', 're3', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `article5`
--

CREATE TABLE `article5` (
  `replyid` int(11) NOT NULL,
  `reviewer` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replydecision` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replycontent` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replypath` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `managerreply` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conreplyname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `conreplytype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `conreplycontent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `article5`
--

INSERT INTO `article5` (`replyid`, `reviewer`, `replydecision`, `replycontent`, `replypath`, `managerreply`, `conreplyname`, `conreplytype`, `conreplycontent`) VALUES
(1, 're1', '接受', 'mmmmm', NULL, NULL, '', '', ''),
(2, 're3', '拒絕', 'nnnnnnn', NULL, NULL, '', '', ''),
(3, NULL, NULL, NULL, NULL, NULL, 'rfgerwgth', '數量方法', 'erwhgrtj');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`userid`, `username`, `auth`, `profession`, `email`, `phone`, `password`) VALUES
(1, 'con1', '投稿者', '管理與政策,國際企業', 'con1@gmail.com', '0900000001', 'con1con1'),
(2, 'con2', '投稿者', '行銷管理,國際貿易', 'con2@gmail.com', '0900000002', 'con2con2'),
(3, 're1', '審稿者', '生產與作業管理,統計', 're1@gmail.com', '0900000003', 're1re1'),
(4, 'man1', '管理者', '資訊管理,會計,財務管理,審計', 'man1@gmail.com', '0900000005', '12345678'),
(5, 're2', '審稿者', '生產與作業管理,統計', 're2@gmail.com', '', 're2re2'),
(7, 're3', '審稿者', '國際貿易', 're3@gmail.com', '0900000011', 're3re3');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleid`);

--
-- 資料表索引 `article5`
--
ALTER TABLE `article5`
  ADD PRIMARY KEY (`replyid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article5`
--
ALTER TABLE `article5`
  MODIFY `replyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
