-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-08-19 14:50:40
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `personal`
--

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(11) UNSIGNED NOT NULL,
  `num` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `img`
--

INSERT INTO `img` (`id`, `num`, `name`, `file`) VALUES
(1, 1, 'calendar-1.jpg', 'calendar'),
(3, 1, 'calendar-2.jpg', 'calendar'),
(4, 1, 'calendar-3.jpg', 'calendar'),
(5, 2, 'vote-1.jpg', 'vote'),
(6, 2, 'vote-2.jpg', 'vote'),
(7, 2, 'vote-3.jpg', 'vote'),
(8, 3, 'blood-1.jpg', 'blood'),
(9, 3, 'blood-2.jpg', 'blood'),
(10, 3, 'blood-3.jpg', 'blood');

-- --------------------------------------------------------

--
-- 資料表結構 `project`
--

CREATE TABLE `project` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `web` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `project`
--

INSERT INTO `project` (`id`, `name`, `num`, `web`, `type`, `date`, `introduce`) VALUES
(2, 'calendar', 1, 'http://220.128.133.15/s1110216/calendar/', 'php', '2022-05-21', '第一個獨立製作的PHP成品，可以藉由切換月份改變月曆'),
(3, 'vote', 2, 'http://220.128.133.15/s1110216/vote/', 'php', '2022-07-05', '結合登入系統，可加入會員、更新會員資料，有後台可以新增、刪除投票，可以看到投票結果，首頁是由canvas完成的小動畫'),
(4, 'blood', 3, 'http://220.128.133.15/s1110216/blood/', 'JS', '2022-06-15', '血染鐘樓是一款類似狼人殺的桌上遊戲，我設計了幫助開局的助手網頁，還有各個腳色的詳細介紹。');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
