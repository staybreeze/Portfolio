-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-09 04:02:45
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `new` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `old_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `like_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `goods`
--

INSERT INTO `goods` (`id`, `name`, `img`, `new`, `discount`, `old_price`, `price`, `quantity`, `like_item`) VALUES
(1, '逗貓棒替換頭：羽毛毛條', 'good1.webp', 1, 0, 35, 35, 1, 0),
(2, '皮繩逗貓棒', 'good2.webp', 0, 20, 400, 320, 1, 0),
(3, 'KONG｜Solo Toy：貓草玩具刺蝟', 'good3.webp', 0, 0, 220, 220, 1, 0),
(4, 'KONG｜Solo Toy：貓草玩具胡蘿蔔', 'good4.webp', 0, 0, 220, 220, 1, 0),
(5, 'KONG｜三臂型塞食器S', 'good5.webp', 1, 0, 399, 399, 1, 0),
(6, 'Doge Daddy｜秘密花園趣食碗', 'good6.webp', 0, 15, 400, 340, 1, 0),
(7, 'CIAO｜貓咪肉泥 訓練獎勵好幫手', 'good7.webp', 0, 0, 55, 55, 1, 0),
(8, '放輕鬆｜舒芙巾', 'good8.webp', 1, 0, 29, 29, 1, 0),
(9, '逗貓棒替換頭：麂皮小花', 'good9.webp', 0, 30, 100, 70, 1, 0),
(10, '木天雪茄', 'good10.webp', 1, 0, 150, 150, 1, 0),
(11, 'PUZZLE FEEDER™｜Puzzle Mat 小草嗅聞慢食盤', 'good11.webp', 0, 15, 1000, 850, 1, 0),
(12, 'TUFFY｜耐咬動物玩具', 'good12.webp', 0, 0, 540, 540, 1, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
