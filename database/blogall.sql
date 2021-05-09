-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 04:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'Dunyawat', 'Hongsupangpan', 'admin', '$2y$10$LTVvyqsow7hWvSVW0f7KdeVoldSyoiqIpyGS0vLKd9irNpvu6ZprO', 'superadmin', '2019-12-13 22:34:32', '2019-12-05 11:46:12', '2019-12-05 11:46:12'),
(3, 'Dunyawat', 'Hongsupangpan', 'admin2', '$2y$10$PlwKzKfFwmlIqJ4xYy/.VegRPUvL/CUEY9fs2poJb7h3CVU0FNmfC', 'admin', '2019-12-06 15:30:12', '2019-12-06 15:27:16', '2019-12-06 15:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `detail`, `created_at`) VALUES
(1, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'fdsfds', '2019-11-28'),
(2, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'fdsdfsdsf', '2019-12-03'),
(3, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'fdsf', '2019-12-03'),
(4, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'fdsf', '2019-12-03'),
(5, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'fdsf', '2019-12-03'),
(6, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dfs', '2019-12-03'),
(7, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsad', '2019-12-03'),
(8, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsad', '2019-12-03'),
(9, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsad', '2019-12-03'),
(10, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsa', '2019-12-03'),
(11, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsada', '2019-12-03'),
(12, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsad', '2019-12-03'),
(13, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsada', '2019-12-03'),
(14, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsad', '2019-12-03'),
(15, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsa', '2019-12-03'),
(16, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsa', '2019-12-03'),
(17, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsa', '2019-12-03'),
(18, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsadsa', '2019-12-03'),
(19, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'เต้หล่อ', '2019-12-03'),
(20, 'dsaf', 'dfsadfs', 'adfs#@dc', 'dsafds', '2019-12-03'),
(21, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dfsadf', '2019-12-03'),
(22, 'Dunyawat Hongsupangpan', '0917799179', 'dunyawat.h@ku.th', 'dsaxz', '2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `create_at`) VALUES
(1, 'โควาซิช ยก แลมพาร์ด พาสิงห์กลับมาผงาดอีกครั้ง', 'มาเตโอ โควาซิช กองกลางโครแอตของ​ เชลซี กล่าวยกย่องในฝีมือของ แฟรงค์ แลมพาร์ด ที่พาทีมก้าวขึ้นรั้งอันดับ 3 บนตาราง ​พรีเมียร์ลีก และยังทำให้เขามีฟอร์มการเล่นที่พัฒนาขึ้นมากในซีซันนี้', '<h1><strong>โควาซิช ยก แลมพาร์ด พาสิงห์กลับมาผงาดอีกครั้ง&nbsp; &nbsp; &nbsp; </strong>&nbsp; &nbsp;</h1>\r\n\r\n                <p>มาเตโอ โควาซิช กองกลางโครแอตของ​ เชลซี กล่าวยกย่องในฝีมือของ แฟรงค์ แลมพาร์ด ที่พาทีมก้าวขึ้นรั้งอันดับ 3 บนตาราง ​พรีเมียร์ลีก และยังทำให้เขามีฟอร์มการเล่นที่พัฒนาขึ้นมากในซีซันนี้</p>\r\n                \r\n                <p>นอกจาก &lsquo;ซุปเปอร์แฟรงค์&rsquo; จะให้โอกาสดาวรุ่งอย่าง แทมมี อับราฮัม, เมสัน เม้าท์ และ ฟิกาโย โทโมริ ลงเล่นในทีมชุดใหญ่แล้ว กุนซือหนุ่มวัย 41 ปียังได้ยกระดับฟอร์มการเล่นของนักเตะอย่าง จอร์จินโญ และ โควาซิช จนทั้งคู่ทำผลงานได้อย่างยอดเยี่ยมขณะนี้</p>\r\n                \r\n                <p>&ldquo;ตอนนี้ผมได้เห็นแล้วว่าทำไมเขาจึงเป็นนักเตะที่ยิ่งใหญ่ จิตใจของเขานั้นมันแข็งแกร่งมาก นั่นคือสิ่งที่เขาอยากให้เรามี การมีจิตใจที่แข็งแกร่งและมีทัศนคติของการเป็นผู้ชนะ ซึ่งเขาเป็นแชมป์มาแล้วมากมาย&rdquo;</p>\r\n                \r\n                <p>&ldquo;เขามีสายสัมพันธ์ที่ดีกับผู้เล่นทุก ๆ คน เขาเป็นคนดี ชอบเล่นมุกตลก ชอบหัวเราะเฮฮา เขาเป็นครูที่สมบูรณ์แบบสำหรับพวกเรา เราต้องเรียนรู้จากเขา และตอนนี้เราก็มีความสุขกันมาก เขาเองก็มีความสุขกับมัน ถือเป็นสายสัมพันธ์ที่ดีมาก ๆ&rdquo;</p>\r\n                \r\n                <p>&ldquo;ตอนนี้พวกเราอยู่ในช่วงเวลาที่ดี เมื่อเราเจอกับปัญหามันจะเป็นบททดสอบทั้งเราและเขา แต่เราต้องฝึกซ้อมกันต่อไปเหมือนอย่างที่กำลังทำอยู่ เราทำงานกันหนักมาก 4 เดือนที่เขาอยู่ที่นี่ การฝึกซ้อมทุกอย่างนั้นมันหนักมาก และนั่นคือสิ่งที่สำคัญกับสโมสรที่ยิ่งใหญ่อย่าง เชลซี&rdquo;</p>\r\n                \r\n                <p>ที่มา www.90min.com</p>', 'news1.jfif', 'all,news', 'true', '2019-11-27 06:18:33', '2019-11-27 00:00:00'),
(2, '“ก็องเต้”ยอมรับปัด P$G หลายรอบเพราะสุขดีกับสิงห์', 'เอ็นโกโล ก็องเต้ มิดฟิลด์เชลซี บอกว่าการที่เขาไม่ย้ายไปร่วมทีม ปารีส แซงต์-แชร์กแมงนั้นเพราะมีความสุขดีที่ลอนดอน', '<h1><strong>ก็องเต้ ยก แลมพาร์ด พาสิงห์กลับมาผงาดอีกครั้ง&nbsp; &nbsp; &nbsp; </strong>&nbsp; &nbsp;</h1>\r\n\r\n                <p>มาเตโอ โควาซิช กองกลางโครแอตของ​ เชลซี กล่าวยกย่องในฝีมือของ แฟรงค์ แลมพาร์ด ที่พาทีมก้าวขึ้นรั้งอันดับ 3 บนตาราง ​พรีเมียร์ลีก และยังทำให้เขามีฟอร์มการเล่นที่พัฒนาขึ้นมากในซีซันนี้</p>\r\n                \r\n                <p>นอกจาก &lsquo;ซุปเปอร์แฟรงค์&rsquo; จะให้โอกาสดาวรุ่งอย่าง แทมมี อับราฮัม, เมสัน เม้าท์ และ ฟิกาโย โทโมริ ลงเล่นในทีมชุดใหญ่แล้ว กุนซือหนุ่มวัย 41 ปียังได้ยกระดับฟอร์มการเล่นของนักเตะอย่าง จอร์จินโญ และ โควาซิช จนทั้งคู่ทำผลงานได้อย่างยอดเยี่ยมขณะนี้</p>\r\n                \r\n                <p>&ldquo;ตอนนี้ผมได้เห็นแล้วว่าทำไมเขาจึงเป็นนักเตะที่ยิ่งใหญ่ จิตใจของเขานั้นมันแข็งแกร่งมาก นั่นคือสิ่งที่เขาอยากให้เรามี การมีจิตใจที่แข็งแกร่งและมีทัศนคติของการเป็นผู้ชนะ ซึ่งเขาเป็นแชมป์มาแล้วมากมาย&rdquo;</p>\r\n                \r\n                <p>&ldquo;เขามีสายสัมพันธ์ที่ดีกับผู้เล่นทุก ๆ คน เขาเป็นคนดี ชอบเล่นมุกตลก ชอบหัวเราะเฮฮา เขาเป็นครูที่สมบูรณ์แบบสำหรับพวกเรา เราต้องเรียนรู้จากเขา และตอนนี้เราก็มีความสุขกันมาก เขาเองก็มีความสุขกับมัน ถือเป็นสายสัมพันธ์ที่ดีมาก ๆ&rdquo;</p>\r\n                \r\n                <p>&ldquo;ตอนนี้พวกเราอยู่ในช่วงเวลาที่ดี เมื่อเราเจอกับปัญหามันจะเป็นบททดสอบทั้งเราและเขา แต่เราต้องฝึกซ้อมกันต่อไปเหมือนอย่างที่กำลังทำอยู่ เราทำงานกันหนักมาก 4 เดือนที่เขาอยู่ที่นี่ การฝึกซ้อมทุกอย่างนั้นมันหนักมาก และนั่นคือสิ่งที่สำคัญกับสโมสรที่ยิ่งใหญ่อย่าง เชลซี&rdquo;</p>\r\n                \r\n                <p>ที่มา www.90min.com</p>', 'news2.jpg', 'all,gossip', 'true', '2019-11-27 00:00:00', '2019-11-27 00:00:00'),
(3, '“อากู๋”เห็นแลมพ์ทำทีมแล้ว”มีไฟ”ล้มทุกโต๊ะเลิกคิดขายสิงห์', 'อับราโมวิช เจ้าของทีม “สิงห์บลูส์” เชลซี ล้มเลิกความตั้งใจจะขายสโมสรลงเป็นที่เรียบร้อยแล้ว หลังแฟรงค์ แลมพาร์ด เข้ามาปลุกไฟ', 'ปกติ อับราโมวิช จะเดินทางเข้ามาดูทีมเล่นเป็นประจำในสแตมฟอร์ด บริดจ์ แต่ภายหลังเขาติดปัญหาเรื่องวีซ่าเดินทางเข้าสหราชอาณาจักร ทำให้เขาไม่มีโอกาสได้ดูลูกทีมเล่นด้วยตาตัวเองในบ้านอีกเลย\r\n\r\nปัญหาดังกล่าวทำให้มีกระแสข่าวลือก่อนหน้านี้ว่า สร้างความเบื่อหน่ายทำให้เขาหมดไฟ มีแผนจะขายสโมสรทอดตลาด แต่ล่าสุด The Telegraph รายงานว่า อากู๋โรมัน ตัดสินใจเป็นคำตอบสุดท้ายว่า จะไม่ขายสโมสรให้กับใครอย่างแน่นอน\r\n\r\nรายงานอ้าง 2 แหล่งข่าวใกล้ชิดกับตัวอากู๋ ที่ยืนยันได้ว่า สโมสรจะล้มโต๊ะการเจรจาทุกข้อเสนอเพื่อขอซื้อเชลซี หลังจากตลอดระยะเวลา 18 เดือนที่ผ่านมา ไม่มีข้อเสนอไหนเลยที่แสดงความจริงจังอยากจะเทคโอเวอร์ทีมจริงๆ\r\n\r\nส่วนสาเหตุที่ทำให้อากู๋เปลี่ยนใจ เกิดขึ้นเพราะ การที่สโมสรได้แลมพาร์ด เข้ามาทำทีมในซีซั่นนี้ และสร้างทีมสิงห์ที่แตกต่างไปจากเดิม มีผลงานน่าประทับใจอยู่สูงถึงอันดับ 3 อยู่ในขณะนี้ ทำให้อับราโมวิชเกิดไฟอยากจะนำสโมสรไปสู่ความสำเร็จอีกครั้งเหมือนสมัยที่เขาเข้ามาเทคโอเวอร์สโมสรใหม่ๆ\r\n\r\n“เขาพอใจอย่างยิ่งกับสิ่งที่กำลังเกิดขึ้น เด็กๆจากอะคาเดมี่ได้รับการโปรโมตสู่ทีมชุดใหญ่ มันคือสิ่งที่เขาต้องการมาสักระยะหนึ่งแล้ว และในที่สุดมันก็ประสบความสำเร็จ” แหล่งข่าวใกล้ชิดรายหนึ่งเปิดเผยกับ The Telegraph\r\n\r\nและเปิดเผยอีกว่า “อับราโมวิชไม่ได้ตั้งเป้าว่าทีมจะต้องได้คว้าโทรฟี่ย์ในตอนนี้ แค่ต้องการเห็นเด็กหนุ่มของสโมสรเล่นฟุตบอลที่ดีและไม่ทำให้เขาผิดหวัง”\r\n\r\nทั้งนี้ เชลซี เคยเจรจากับทางกลุ่มทุนจากตะวันออกกลาง มูลค่า 2.5 พันล้านปอนด์ แต่การเจรจาไม่ประสบความสำเร็จ เช่นเดียวกับปฏิเสธข้อเสนอจากเซอร์จิม แรตคลฟฟ์ ประธานและซีอีโอกลุ่มธุรกิจเคมีภัณฑ์ ชายผู้ได้ชื่อว่าร่ำรวยที่สุดบนเกาะอังกฤษ\r\n\r\nที่มา www.soccersuck.com', 'news3.jpg', 'all,gossip', 'true', '2019-11-27 06:18:33', '2019-11-27 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
