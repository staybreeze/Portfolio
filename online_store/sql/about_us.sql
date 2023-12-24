-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-12-24 09:03:35
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

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
-- 資料表結構 `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `origin` text NOT NULL,
  `goal` text NOT NULL,
  `cheetos` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about_us`
--

INSERT INTO `about_us` (`id`, `origin`, `goal`, `cheetos`, `img`) VALUES
(1, '奇多喵合作社的誕生源自一位極為熱愛貓咪的男生，Vincent Liao。他和他的貓咪一同冒險，卻發現市面上的貓咪商品總是缺乏趣味。於是，他決定開創奇多喵合作社，專注提供有趣又溫馨的貓咪商品，像是貓咪玩偶、趣味窩等。這裡不僅是一個購物天堂，更是貓奴們分享愛貓心得的幸福樂園。Vincent以奇多喵合作社為平台，讓更多貓奴找到滿滿的愛與喜悅，讓每一隻貓咪都過上充滿趣味的生活。', '奇多喵合作社的團隊目標是在貓奴社群中建立堅實的信任和喜愛，成為貓咪商品的領先品牌。我們將透過提供獨特有趣的商品、貼心的客戶服務以及滿足各類貓奴需求的商品線，不斷擴大產品範疇，提升品牌影響力。同時，我們致力於建立一個充滿愛心、互助和尊重的工作環境，使每位團隊成員都能在這個大家庭中茁壯成長。我們的使命是讓每一位貓奴都能在奇多喵合作社找到滿滿的愛和快樂。', '奇多，一隻兩歲半的孟加拉豹貓，是個小男生。他的名字源自奇多餅乾，就像餅乾一樣，奇多充滿活力和甜蜜，擁有美麗的斑點和親人的性格。他是我們的快樂夥伴，帶來無盡的歡樂。', 'cheetos2.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
