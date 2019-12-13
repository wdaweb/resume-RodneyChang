-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 09:39:42
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `login`
--

-- --------------------------------------------------------

--
-- 資料表結構 `backend`
--

CREATE TABLE `backend` (
  `id` int(100) UNSIGNED NOT NULL,
  `birth` date NOT NULL,
  `tel` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `backend`
--

INSERT INTO `backend` (`id`, `birth`, `tel`, `email`, `lo`, `school`, `job`, `biography`) VALUES
(1, '1992-03-08', '0910452311', 'justpure01@gmail.com', '泰山區', '銘傳大學', '長榮鳳凰酒店', '2011-2015\r\n銘傳大學商業設計學系\r\n\r\n2017-2019\r\n大未來林舍畫廊\r\n長榮鳳凰酒店\r\n蘭威創意\r\n');

-- --------------------------------------------------------

--
-- 資料表結構 `pics`
--

CREATE TABLE `pics` (
  `id` int(10) UNSIGNED NOT NULL,
  `pic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `note` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `pics`
--

INSERT INTO `pics` (`id`, `pic`, `sh`, `note`) VALUES
(2, './img/2.jpg', '1', '攝影作品集_02'),
(3, './img/3.jpg', '1', '攝影作品集_03'),
(4, './img/1.jpg', '1', '攝影作品集_01'),
(25, './img/4.jpg', '1', ''),
(26, './img/5.jpg', '1', ''),
(27, './img/6.jpg', '1', '');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(100) UNSIGNED NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `username`) VALUES
(1, 'rodney', '1234', 'rodney');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `backend`
--
ALTER TABLE `backend`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `backend`
--
ALTER TABLE `backend`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
