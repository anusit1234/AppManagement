-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 03:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards_categories`
--

CREATE TABLE `credit_cards_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'บัตรเครดิต',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `credit_cards_categories`
--

INSERT INTO `credit_cards_categories` (`id`, `name`, `created`) VALUES
(1, 'AEON (อีออน)\r\n', '0000-00-00'),
(2, 'AMEX (อเมริกัน เอ็กซ์เพรส)\r\n', '0000-00-00'),
(3, 'BBL (กรุงเทพ)\r\n', '0000-00-00'),
(4, 'Bank of China (แบงค์ออฟไชน่า)\r\n', '0000-00-00'),
(5, 'Central The 1 (เซ็นทรัล เดอะวัน)\r\n', '0000-00-00'),
(6, 'CIMB THAI (ซีไอเอ็มบี ไทย', '0000-00-00'),
(7, 'Citibank (ซิตี้แบงก์)', '0000-00-00'),
(8, 'First Choice (เฟิร์สช้อยส์)', '0000-00-00'),
(9, 'GSB (ออมสิน)\r\n', '0000-00-00'),
(10, 'ICBC THAI (ไอซีบีซี ไทย)', '0000-00-00'),
(11, 'KBANK (กสิกรไทย)', '0000-00-00'),
(12, 'Krungsri (บัตรกรุงศรีอยุธยา)', '0000-00-00'),
(13, 'KTC (บัตรกรุงไทย)\r\n', '0000-00-00'),
(14, 'SCB (ไทยพาณิชย์)\r\n', '0000-00-00'),
(15, 'SCBT (สแตนดาร์ดชาร์เตอร์)\r\n', '0000-00-00'),
(16, 'TESCO (เทสโก้ คาร์ด)\r\n', '0000-00-00'),
(17, 'Thanachart (ธนชาต)\r\n', '0000-00-00'),
(18, 'TMB (ทหารไทย)\r\n', '0000-00-00'),
(19, 'UOB (ยูโอบี)\r\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenses`
--

CREATE TABLE `daily_expenses` (
  `daily_expenses_id` int(11) NOT NULL COMMENT 'รหัส',
  `user_id` int(11) NOT NULL COMMENT 'รหัส',
  `daily_expenses_cate_id` int(11) NOT NULL COMMENT 'รหัส',
  `amount` double NOT NULL COMMENT 'จำนวนเงิน',
  `payment_channel_id` int(11) NOT NULL COMMENT 'รหัสช่องทางการชำระเงิน',
  `images` text COLLATE utf8_unicode_ci COMMENT 'รูปภาพ',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daily_expenses`
--

INSERT INTO `daily_expenses` (`daily_expenses_id`, `user_id`, `daily_expenses_cate_id`, `amount`, `payment_channel_id`, `images`, `created`) VALUES
(10, 3, 1, 150, 1, '', '2018-03-04'),
(11, 3, 1, 160, 1, '', '2018-03-01'),
(12, 3, 1, 150, 1, '', '2018-04-03'),
(13, 3, 1, 220, 1, '', '2018-04-02'),
(14, 3, 1, 160, 1, '', '2018-04-01'),
(15, 3, 2, 560, 2, '', '2018-03-18'),
(16, 3, 6, 1500, 1, '', '2018-04-20'),
(17, 3, 1, 200, 1, '', '2018-04-05'),
(18, 3, 1, 155, 1, '', '2018-03-05'),
(19, 3, 2, 740, 5, '', '2018-03-14'),
(20, 3, 20, 500, 1, '', '2018-03-17'),
(21, 3, 8, 120, 1, '', '2018-03-19'),
(22, 3, 1, 120, 1, '', '2018-04-18'),
(23, 3, 1, 100, 1, '', '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenses_categories`
--

CREATE TABLE `daily_expenses_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายจ่ายคงที่',
  `status` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'สถานะ',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daily_expenses_categories`
--

INSERT INTO `daily_expenses_categories` (`id`, `name`, `status`, `created`) VALUES
(1, 'อาหาร', '1', '2018-03-21'),
(2, 'เสื้อผ้า-เครื่องแต่งกาย', '1', '2018-03-21'),
(3, 'เครื่องสำอาง', '1', '2018-03-21'),
(4, 'สุขภาพ', '1', '2018-03-21'),
(5, 'ที่พัก', '1', '2018-03-21'),
(6, 'ค่าใช้จ่ายในครัวเรือน', '1', '2018-03-21'),
(7, 'เครื่องใช้ไฟฟ้า', '1', '2018-03-21'),
(8, 'การเดินทาง', '1', '2018-03-21'),
(9, 'การออม', '1', '2018-03-21'),
(10, 'การสือสาร', '1', '2018-03-21'),
(11, 'การศึกษา', '1', '2018-03-21'),
(12, 'การออกกำลังกาย / กีฬา', '1', '2018-03-21'),
(13, 'สัตว์เลี้ยง', '0', '2018-03-21'),
(14, 'เครื่องประดับ', '0', '2018-03-21'),
(15, 'สิ่งบันเทิง', '0', '2018-03-21'),
(16, 'ค่าน้ำมัน', '1', '2018-03-21'),
(17, 'ของขวัญ', '0', '2018-03-21'),
(18, 'การบริจาค', '1', '2018-03-21'),
(19, 'จิปาถะและเบ็ดเตล็ด', '0', '2018-03-21'),
(20, 'สุรา สิ่งเสพติด', '0', '2018-03-21'),
(21, 'อาหารว่าง', '1', '2018-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `due_date`
--

CREATE TABLE `due_date` (
  `id` int(13) NOT NULL,
  `water` int(11) NOT NULL,
  `electricity` int(5) NOT NULL,
  `internet` int(5) NOT NULL,
  `telephone` int(5) NOT NULL,
  `credit_card` int(5) DEFAULT NULL,
  `credit_card2` int(11) NOT NULL,
  `credit_card3` int(11) NOT NULL,
  `credit_card4` int(11) NOT NULL,
  `credit_card5` varchar(11) DEFAULT NULL,
  `credit_card_id` int(13) NOT NULL,
  `credit_card_id2` int(13) NOT NULL,
  `credit_card_id3` int(13) NOT NULL,
  `credit_card_id4` int(13) NOT NULL,
  `credit_card_id5` varchar(11) DEFAULT NULL,
  `created` date NOT NULL,
  `user_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `due_date`
--

INSERT INTO `due_date` (`id`, `water`, `electricity`, `internet`, `telephone`, `credit_card`, `credit_card2`, `credit_card3`, `credit_card4`, `credit_card5`, `credit_card_id`, `credit_card_id2`, `credit_card_id3`, `credit_card_id4`, `credit_card_id5`, `created`, `user_id`) VALUES
(2, 5, 5, 5, 5, 0, 0, 0, 0, '0', 2, 1, 1, 1, '1', '2018-03-26', 11);

-- --------------------------------------------------------

--
-- Table structure for table `financial_risk`
--

CREATE TABLE `financial_risk` (
  `risk_id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `direction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financial_risk`
--

INSERT INTO `financial_risk` (`risk_id`, `name`, `direction`) VALUES
(1, 'ดีมาก', 'คุณมีสุขภาพทางการเงินแข็งแรงดีมากอาจเป็นเพราะคุณมีมุมมอง ทัศนคติ และพฤติกรรมเกี่ยวกับการหารายได้และการใช้จ่ายที่ดี อีกทั้งยังมีวินัยในการออมสูง จึงทำให้คุณมีโอกาสที่จะบรรลุเป้าหมายตามที่ตั้งใจไว้ แต่เพื่อความไม่ประมาท คุณควรรักษาสิ่งดีๆ เหล่านี้ไว้ พร้อมทั้งเพิ่มพูนความมั่งคั่งให้ตนเองด้วยการออมและลงทุนอย่างต่อเนื่อง สุขภาพทางการเงินของคุณจะแข็งแรงอย่างนี้ตลอดไป'),
(2, 'ปานกลาง', 'สุขภาพการเงินของคุณอยู่ในเกณฑ์มาตรฐานทั่วไป แต่เพื่อความไม่ประมาทการเพิ่มความระมัดระวังด้านการใช้จ่ายที่เกินความจำเป็น จะช่วยเพิ่มพูนเงินออมหรือ เงินลงทุน ส่งผลให้สุขภาพทางการเงินของคุณมีความแข็งแรงมากขึ้น เป็นการสร้างความมั่งคั่ง มั่นคงให้กับตนเอง และบรรลุเป้าหมายตามที่ตั้งใจไว้'),
(3, 'เสี่ยง', 'มีสัญญาณบ่งบอกถึงความอ่อนแอในสุขภาพทางการเงินของคุณอาจเพราะคุณมีมุมมอง ทัศนคติ และพฤติกรรมการใช้จ่ายที่มุ่งเน้นความสะดวกสบายในปัจจุบัน แต่หากคุณจะใช้จ่ายอะไร ลองพิจารณาถึงความจำเป็น พร้อมทั้งหาทางเพิ่มรายได้ให้มากขึ้น เพียงเท่านี้...สุขภาพทางการเงินของคุณก็จะแข็งแรง เป้าหมายชีวิตและเป้าหมายทางการเงินก็จะเป็นไปตามที่ตั้งใจไว้'),
(4, 'เสี่ยงมาก', 'สุขภาพทางการเงินของคุณค่อนข้างมีความเสี่ยงมาก เนื่องจากมีการใช้จ่ายที่มุ่งเน้นความสะดวกสบายในปัจจุบัน และมีหนี้สินที่ต้องชำระในแต่ละเดือนเป็นจำนวนมาก ซึ่งรายได้ของคุณไม่เพียงพอต่อการใช้จ่อยในแต่ละเดือน แต่หากคุณใช้จ่ายในส่วนที่ไม่เป็นให้น้อยลง พร้อมกับประคองตัวไม่ให้มีหนี้สินเพิ่มเติม และหาทางเพิ่มรายได้ให้มากขึ้น  เพียงเท่านี้...สุขภาพทางการเงินของคุณก็จะแข็งแรง เป้าหมายชีวิตและเป้าหมายทางการเงินก็จะเป็นไปตามที่ตั้งใจไว้');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expenses`
--

CREATE TABLE `fixed_expenses` (
  `fix_expenses_id` int(11) NOT NULL COMMENT 'รหัส',
  `user_id` int(11) NOT NULL COMMENT 'รหัส',
  `fix_expenses_cate_id` int(11) NOT NULL COMMENT 'รหัส',
  `amount` double NOT NULL COMMENT 'จำนวนเงิน',
  `payment_channel_id` int(11) NOT NULL COMMENT 'รหัสช่องทางการชำระเงิน',
  `images` text COLLATE utf8_unicode_ci COMMENT 'รูปภาพ',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fixed_expenses`
--

INSERT INTO `fixed_expenses` (`fix_expenses_id`, `user_id`, `fix_expenses_cate_id`, `amount`, `payment_channel_id`, `images`, `created`) VALUES
(17, 3, 1, 400, 2, '', '2018-03-03'),
(18, 3, 2, 1200, 2, '', '2018-03-03'),
(19, 3, 4, 689, 1, '', '2018-03-03'),
(20, 3, 1, 360, 1, '', '2018-04-03'),
(21, 3, 2, 1300, 1, '', '2018-04-03'),
(22, 3, 5, 3000, 2, '', '2018-03-03'),
(23, 13, 1, 100, 1, '', '2018-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expenses_categories`
--

CREATE TABLE `fixed_expenses_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายจ่ายคงที่',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fixed_expenses_categories`
--

INSERT INTO `fixed_expenses_categories` (`id`, `name`, `created`) VALUES
(1, 'ชำระค่าน้ำ', '2018-03-21'),
(2, 'ชำระค่าไฟ', '2018-03-21'),
(3, 'ชำระค่าบริการอินเทอร์เน็ต', '2018-03-21'),
(4, 'ชำระค่าบริการโทรศัพท์มือถือ/โทรศัพท์บ้าน', '2018-03-21'),
(5, 'ชำระค่าบัตรเครดิต', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(11) NOT NULL COMMENT 'รหัส',
  `user_id` int(11) NOT NULL COMMENT 'รหัส',
  `income_cate_id` int(11) NOT NULL COMMENT 'รหัส',
  `amount` double NOT NULL COMMENT 'จำนวนเงิน',
  `images` text COLLATE utf8_unicode_ci COMMENT 'รูปภาพ',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `user_id`, `income_cate_id`, `amount`, `images`, `created`) VALUES
(13, 3, 1, 15000, '', '2018-03-02'),
(17, 3, 1, 20000, '', '2018-04-01'),
(18, 3, 3, 3000, '', '2018-04-01'),
(19, 13, 1, 20000, '', '2018-04-11'),
(20, 3, 0, 0, '', '0000-00-00'),
(21, 3, 0, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `income_categories`
--

CREATE TABLE `income_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายรับ',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income_categories`
--

INSERT INTO `income_categories` (`id`, `name`, `created`) VALUES
(1, 'เงินเดือน', '2018-03-21'),
(2, 'โบนัส', '2018-03-21'),
(3, 'ค่าทำงานล่วงเวลา (OT)', '2018-03-21'),
(4, 'เบี้ยบำนาญ', '2018-03-21'),
(5, 'เงินผู้สูงอายุ', '2018-03-21'),
(6, 'โครงการสวัสดิการสังคม', '2018-03-21'),
(7, 'ถูกรางวัลฉลากกินแบ่งรัฐบาล', '2018-03-21'),
(8, 'ขายสินค้า', '2018-03-21'),
(9, 'ค่านายหน้า', '2018-03-21'),
(11, 'บัตรเงินสด', '2018-03-21'),
(12, 'บัตรเครดิต', '2018-03-21'),
(15, 'งานพิเศษ', '2018-03-21'),
(18, 'ถ่ายภาพ..', '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `payment_channel_categories`
--

CREATE TABLE `payment_channel_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ช่องทางการจ่ายเงิน',
  `created` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_channel_categories`
--

INSERT INTO `payment_channel_categories` (`id`, `name`, `created`) VALUES
(1, 'เงินสด\r\n', '0000-00-00'),
(2, 'หักจากบัญชี/บัตรเดบิต\r\n', '0000-00-00'),
(3, 'บัตรเครดิต\r\n', '0000-00-00'),
(4, 'บัตรผ่อนสินค้า\r\n', '0000-00-00'),
(5, 'พร้อมเพย์\r\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อจริง',
  `surname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `age` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อายุ',
  `sex` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เพศ',
  `career` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อาชีพ',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `permission` enum('member','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member' COMMENT 'ประเภทผู้ใช้',
  `created` date NOT NULL COMMENT 'วันที่สร้าง',
  `status` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `password`, `age`, `sex`, `career`, `email`, `permission`, `created`, `status`) VALUES
(3, 'อนุศิษฐ์', 'สิงห์นิกร', 'anusit1234', '22', 'ชาย', 'นักศึกษา', 'anusit@hotmail.com', 'member', '2018-03-21', '1'),
(4, 'ศิริเดช', 'จันทเกษร', 'kaokao1234', '22', 'ชาย', 'นักศึกษา', 'sirideth.cha@northbkk.ac.th', 'member', '2018-03-21', '1'),
(9, 'อนุศิษฐ์', 'สิงห์นิกร', 'anusit1234', '22', 'ชาย', '', 'not_anusit@hotmail.com', 'admin', '2018-03-21', '1'),
(12, 'ศิริเดช', 'จันทเกษร', 'kao12345', '22', 'ชาย', '', 'kao_99_kao@hotmail.com', 'admin', '2018-03-27', '1'),
(13, 'ฟฟหกดหดหกด', 'กหดหกดหดหกดห', 'fsdfaflkn1231231', '18', 'ชาย', 'เกษตรกรรม/ปศุสัตว์/ประมง', 'sddfsdfsfs@hotmail.com', 'member', '2018-04-11', '1'),
(14, 'vfdvfdvfdvdfvd', 'vdfvfvdfvdffvdfvd', 'dfdgdfg32343', '18', 'ชาย', 'ข้าราชการ', 'fvdfvdfvdfvdfv@hggf.cd', 'member', '2018-04-19', '1'),
(15, 'gergerg', 'rgergeg', 'ergergerg3345435', '18', 'ชาย', 'เกษียณ/ว่างงาน', 'rgegergrgegrtgreg@hotma.v', 'member', '2018-04-19', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_cards_categories`
--
ALTER TABLE `credit_cards_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_expenses`
--
ALTER TABLE `daily_expenses`
  ADD PRIMARY KEY (`daily_expenses_id`);

--
-- Indexes for table `daily_expenses_categories`
--
ALTER TABLE `daily_expenses_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `due_date`
--
ALTER TABLE `due_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_risk`
--
ALTER TABLE `financial_risk`
  ADD PRIMARY KEY (`risk_id`);

--
-- Indexes for table `fixed_expenses`
--
ALTER TABLE `fixed_expenses`
  ADD PRIMARY KEY (`fix_expenses_id`);

--
-- Indexes for table `fixed_expenses_categories`
--
ALTER TABLE `fixed_expenses_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `income_categories`
--
ALTER TABLE `income_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_channel_categories`
--
ALTER TABLE `payment_channel_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_cards_categories`
--
ALTER TABLE `credit_cards_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `daily_expenses`
--
ALTER TABLE `daily_expenses`
  MODIFY `daily_expenses_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `daily_expenses_categories`
--
ALTER TABLE `daily_expenses_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `due_date`
--
ALTER TABLE `due_date`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `financial_risk`
--
ALTER TABLE `financial_risk`
  MODIFY `risk_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fixed_expenses`
--
ALTER TABLE `fixed_expenses`
  MODIFY `fix_expenses_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `fixed_expenses_categories`
--
ALTER TABLE `fixed_expenses_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `income_categories`
--
ALTER TABLE `income_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payment_channel_categories`
--
ALTER TABLE `payment_channel_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ใช้', AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
