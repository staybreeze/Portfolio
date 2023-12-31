-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-12-28 08:09:19
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
-- 資料表結構 `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `img`, `time`) VALUES
(1, ' 幼貓照護指南：啟蒙與關愛的開始', '幼貓是生命的初階，需要特別的照顧與愛護。首先，確保提供優質的幼貓糧，滿足牠們快速發展的需求。維持適宜的環境溫度，不僅可以促進食慾，還能避免感冒等健康問題。<br />\r\n<br />\r\n建立與幼貓的深厚關係至關重要。透過溫柔的撫摸、遊戲和語言互動，培養出親密無間的連結，有助於幼貓的社交發展和信任建立。提供豐富且安全的玩具，激發牠們的好奇心，促進身心發展。<br />\r\n<br />\r\n及早培養健康的飲食習慣，定期檢查口腔和牙齒，確保口腔健康。養成適時醫療檢查的習慣，以便發現潛在問題並及時處理。給予幼貓良好的衛生習慣，定期梳理毛髮，注意除蚤和驅蟲。<br />\r\n<br />\r\n最後，給予足夠的關愛和時間，讓牠們在愉快的環境中茁壯成長。這段幼貓時期不僅是生理發展的關鍵時期，更是建立牠們與人類之間深厚情感連結的寶貴時光。透過這份愛與關懷，創造出一個快樂、健康的幼貓成長環境。', 'kitten.jpg', 1703747189),
(2, '成貓照護指南：健康與活力的秘訣', '當貓咪邁入成貓階段，我們需要更為全面的照顧來確保牠們的健康和活力。首先，提供均衡營養的飲食，應滿足成貓的特定營養需求。了解貓咪的飲食喜好，可能需要調整飲食方案，以確保其營養攝取的平衡。<br />\r\n<br />\r\n定期的運動對於成貓的體重管理和心理健康至關重要。給予足夠的運動空間和各類玩具，鼓勵牠們進行鍛煉和發揮天性。除此之外，每日互動時間也是維護心理健康的必要元素，可以透過與主人的遊戲和陪伴達到。<br />\r\n<br />\r\n口腔衛生是成貓健康的一環，應定期檢查口腔並提供適當的牙科照護。進行毛髮的定期梳理，有助於防止毛球的形成，同時維持外觀整潔。建立固定的醫療計劃，包括疫苗接種和定期的健康檢查，以確保及早發現和處理潛在的健康問題。<br />\r\n<br />\r\n最後，給予豐富的心理刺激，如提供新玩具或安排新活動，有助於保持貓咪的活潑好奇心。成貓階段的照護是一項綜合性的工作，透過這些建議，我們能夠確保貓咪在成長過程中維持最佳的健康狀態和生活品質。', 'adult.jpg', 1703747231),
(3, '老貓照護指南：柔情伴隨，溫馨陪伴', '老貓照護需要更為細心和關愛，這個階段是貓咪生命中特別寶貴的時光。首先，我們應選擇適合老貓的易咀嚼食物，同時加入關節保健成分，以應對可能出現的關節問題，確保老貓的身體機能維持在最佳狀態。<br />\r\n<br />\r\n在創造舒適的居住環境方面，我們應提供柔軟的床舖和避免讓老貓長時間處於濕冷的地方。定期醫療檢查是老貓照護的重要一環，透過檢查及時發現並處理潛在的健康問題。尤其需要注意牙齒和口腔的清潔，以預防牙齒問題和口腔疾病。<br />\r\n<br />\r\n提供豐富的情感陪伴是老貓照護的重中之重。老貓可能會變得更加依賴主人，給予額外的關愛和陪伴，可以緩解老貓可能感受到的孤獨感。與老貓進行溫柔的互動，定期為牠們進行毛髮梳理，有助於保持外觀整潔，同時促進老貓的血液循環。<br />\r\n<br />\r\n總的來說，老貓照護需要綜合考慮牠們的生理和心理需求。這段時光不僅是老貓的晚年，更是主人與貓咪深厚情感連結的時光。透過柔情的陪伴和細心的照顧，我們可以確保老貓在晚年享受到滿滿的溫馨和關懷。', 'cat4.jpg', 1703747261),
(4, '從幼到老：貓咪生命的三個重要階段', '貓咪的生命旅程有如一幅美麗的畫卷，分為幼貓、成貓和老貓三個重要階段。在幼貓時期，我們需要提供充足的愛與關懷，確保牠們在成長過程中得到良好的照顧。選擇高品質的幼貓糧，滿足牠們的營養需求，並建立深厚的人貓關係，透過遊戲和互動培養出活潑好奇的性格。<br />\r\n<br />\r\n當貓咪邁入成貓階段，我們需要更全面的照顧。提供均衡營養的飲食，鼓勵規律運動，同時關注心理健康。成貓時期是貓咪最為活潑和好奇的階段，透過提供豐富的遊戲和挑戰，可以保持其身心的活力。<br />\r\n<br />\r\n老貓階段需要更多的柔情和細心。選擇適合老貓的食物，補充關節保健成分，提供舒適的環境，以減輕老貓可能面臨的生理壓力。給予更多的陪伴和愛，定期醫療檢查，以確保老貓的健康和舒適。<br />\r\n<br />\r\n從幼到老，每個階段都有其獨特的需求和美好。透過主人的細心照顧，貓咪可以在每個階段都綻放出最美好的生命光華。成就一個幸福、健康的貓咪生命旅程，是主人最大的心願。', 'cat11.webp', 1703747278),
(5, '探索貓咪的時光隧道', '在探索貓咪的時光隧道中，我們隨著牠們一同經歷幼貓、成貓和老貓的三個重要階段。幼貓時，我們應提供溫暖的環境和高品質的幼貓糧，建立深厚的情感連結。透過遊戲和互動，培養牠們好奇心，為未來奠定穩固基礎。<br />\r\n<br />\r\n成貓時，我們要更全面地照顧貓咪。均衡營養的飲食、豐富的運動和心理刺激，是確保貓咪維持活力和健康的關鍵。成貓期是牠們展現獨立性和品格的時期，透過主動的參與，共同度過充實而愉快的時光。<br />\r\n<br />\r\n老貓的階段需要更多的柔情和細心照顧。選擇適合老貓的食物，提供安逸的環境，並給予額外的情感陪伴。老貓期是懷舊和安詳的階段，透過維護健康、提供愛心，讓牠們安心地度過晚年。<br />\r\n<br />\r\n這個全方位照護指南旨在引導主人深入了解每個階段的貓咪需求，提供最貼心的照顧。透過時光隧道的探索，我們共同見證貓咪在不同階段展現的美好，為牠們的生命時光留下溫馨和珍貴的回憶。', 'cat2.jpeg', 1703747299),
(6, '貓咪的皮膚護理學問', '貓咪的皮膚健康對其整體幸福感至關重要，因此皮膚護理成為貓奴不可忽視的學問。首先，定期檢查貓咪的皮膚，留意是否有異常的紅腫、搔癢或脫毛現象。這有助於早期發現可能的皮膚問題，如皮膚炎、蟲害等。<br />\r\n<br />\r\n保持貓咪的毛髮清潔也是皮膚健康的重要步驟。定期給予貓咪梳理，不僅有助於除去脫落的毛髮，還可以促進血液循環，提升皮膚的新陳代謝。此外，選擇適合貓咪皮膚類型的洗毛精品，進行溫和的洗澡，有助於去除灰塵和過多的皮脂。<br />\r\n<br />\r\n適當的飲食也是皮膚護理的一部分。確保貓咪攝取足夠的水分，有助於保濕皮膚，減少乾燥和脫水引起的皮膚問題。同時，選用高品質的貓糧，確保營養均衡，有助於維持健康的皮膚狀態。<br />\r\n<br />\r\n若發現貓咪有皮膚問題，應及時諮詢獸醫的建議，並依醫囑進行治療。總的來說，透過定期檢查、適當的梳理、清潔和均衡的飲食，貓咪的皮膚將能保持良好狀態，使牠們在每個時刻都能展現出健康和自信。', 'cat3.webp', 1703747318);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
