-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 01:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `customerid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `isadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`customerid`, `username`, `password`, `point`, `name`, `lastname`, `address`, `tel`, `isadmin`) VALUES
(1, 'user', '1234', 0, '', '', '', '', 0),
(2, 'admin', '1234', 0, '', '', '', '', 1),
(3, '6006021620011', '123', 58210, 'ติดถ้ำ', 'หลวง', '102 /8 มจพ', '0897564895', 0),
(4, '123456789', '1234', 0, '', '', '', '', 0),
(5, '0123456', '1234', 59230, 'จุฬาลักษณ์ ', 'จูมวรรณณา', 'มจพ', '0123456789', 0),
(6, '111111111', '1234', 0, 'จุฬาลักษณ์ ', 'จูมวรรณณา', 'มจพ', '0123456789', 0),
(7, 'Julalak', '1234', 597880, 'จุฬาลักษณ์ ', 'จูมวรรณณา', 'มจพ', '0123456789', 0),
(8, 'toey', '123', 9400, 'จุฬาลักษณ์ ', 'จูมวรรณณา', 'มจพ', '0123456789', 0),
(9, 'ttt', '123', 64400, 'จุฬาลักษณ์ ', 'จูมวรรณณา', 'มจพ', '0123456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `Cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`Cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'รองเท้าผ้าใบ', 'เพื่อสวมใส่'),
(2, 'สัตว์เลี้ยง', 'อาหารหรืออุปกรณ์สำหรับสัตว์เลี้ยง'),
(3, 'เสื้อ', 'เสื้อคูลๆใส่แล้วมี style'),
(4, 'เครื่องดื่ม', 'น้ำอัดลม , น้ำดื่ม , แอลกอฮอ'),
(5, 'กางเกง', 'กางเกงขาสั้น , กางเกงขายาว '),
(6, 'คอมพิวเตอร์', 'อุปกรณ์คอมพิวเตอร์'),
(7, 'เครื่องใช้ไฟฟ้า', 'เครื่องใช้ไฟฟ้าภายในบ้าน'),
(8, 'สิ่งบันเทิงภายในบ้าน', 'สิ่งบันเทิงต่างๆภายในบ้าน'),
(9, 'ของใช้ส่วนตัว', 'ของใช้ส่วนตัวต่างๆสำหรับผู้ชายและผู้หญิง'),
(10, 'กีฬา1', 'อุปกรณ์การกีฬา'),
(11, 'โทรศัพท์มือถือ', 'เฉพาะ iPhone'),
(12, 'เครื่องสำอางค์', 'ตกแต่งใบหน้าให้สวยงาม'),
(13, 'อาหาร', 'กิน');

-- --------------------------------------------------------

--
-- Table structure for table `logbuy`
--

CREATE TABLE `logbuy` (
  `idlog` int(11) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `product_id` int(50) NOT NULL,
  `datelog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logbuy`
--

INSERT INTO `logbuy` (`idlog`, `customerid`, `product_id`, `datelog`) VALUES
(1, '3', 2, '2019-04-26'),
(2, '3', 61, '2019-04-26'),
(3, '5', 16, '2019-04-26'),
(4, '7', 15, '2019-04-26'),
(5, '7', 72, '2019-04-26'),
(6, '8', 1, '2019-04-26'),
(7, '9', 1, '2019-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_pic` varchar(255) NOT NULL,
  `product_left` int(10) NOT NULL,
  `product_cat` int(10) NOT NULL,
  `product_date` date NOT NULL,
  `product_issale` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_price`, `product_pic`, `product_left`, `product_cat`, `product_date`, `product_issale`) VALUES
(1, 'รองเท้าผ้าใบ', 'รองเท้าผ้าใบกัดตีน', 200, 'shoes1.jpg', 198, 1, '2019-04-26', 1),
(2, 'Adapter iPhone', 'ที่ชาจไอโฟน', 590, 'Adapter.jpg', 9, 11, '2019-04-02', 1),
(3, 'Zowie Benq xl2411p', 'เมาส์ Gaming 144 Hz', 8750, 'com.jpg', 15, 1, '2019-03-16', 0),
(4, 'Mouse Pad : Zowie ', 'แผ่นรองเมาส์ Gaming', 1390, 'c3.jpg', 20, 6, '2019-03-08', 0),
(5, 'Keyboard Zowie', 'Keyboard Gaming', 3750, 'c4.jpg', 12, 6, '2019-02-18', 0),
(6, 'Head Phone Gaming', 'หูฟัง Gaming 7.1', 890, 'c5.jpg', 33, 6, '2019-04-09', 1),
(7, 'GTX 1080 TI ', 'การ์ดจอคอมพิมเตอร์', 5900, 'c6.jpg', 5, 6, '2019-04-16', 1),
(8, 'CPU Core i7', 'CPU Computer', 4500, 'c7.jpg', 7, 6, '2019-04-01', 0),
(9, 'AMD : A320M', 'Mainboard Computer', 7900, 'c8.jpg', 2, 6, '2019-02-07', 0),
(10, 'MI2', 'Power Supply Computer ', 1390, 'c9.jpg', 4, 6, '2019-04-24', 1),
(11, 'ลำโพง', 'ลำโพงคอมพิวเตอร์', 990, 'c10.jpg', 16, 6, '2019-04-08', 0),
(12, 'MOUSE ZOWIE FK1 GAMING GEAR', 'Mouse Gaming DPI สูงสุด 4000', 2970, 'com.jpg', 32, 6, '2019-03-07', 0),
(13, 'หูฟัง iPhone', 'สายยาว 2 M', 450, 'Ephone1.jpg', 12, 6, '2019-04-03', 0),
(14, 'หูฟังไร้สาย iPhone', 'สัญญาณไกลสุด 500 M.', 770, 'Ephone2.jpg', 2, 11, '2019-04-10', 1),
(15, 'กางเกงยีนส์', 'สำหรับผู้หญิงเอว 32 ', 770, 'g1.jpg', 49, 5, '2019-04-02', 0),
(16, 'กางเกงยีนส์', 'สำหรับผู้หญิง เอว 34', 770, 'g2.jpg', 9, 5, '2019-04-01', 0),
(17, 'Nudie ', 'กางเกงยีนส์สำหรับผู้ชาย เอว 30', 5500, 'g3.jpg', 10, 1, '2019-04-01', 0),
(18, 'Nudie', 'สำหรับผู้ชายเอว 30', 5500, 'g4.jpg', 10, 5, '2019-04-09', 0),
(19, 'Nudie', 'สำหรับผู้ชายเอว 32', 4500, '', 10, 5, '2019-04-01', 0),
(20, 'กางเกงยีนส์ขาสั้น', 'สำหรับผู้ชายเอว 30', 450, 'g6.jpg', 10, 5, '2019-04-22', 0),
(21, 'กางเกงยีนส์', 'สำหรับผู้หญิงเอว 30', 450, 'g7.jpg', 12, 5, '2019-04-04', 0),
(22, 'กางเกงยีนส์ขาสั้น', 'สำหรับผู้หญิงเอว 24', 450, 'g8.jpg', 14, 5, '2019-03-08', 1),
(23, 'กางเกงยีนส์', 'สำหรับผู้ชายเอว 32', 1200, 'g9.jpg', 3, 5, '2019-04-01', 1),
(24, 'หม้อหุงข้าว', 'สำหรับหุงข้าว', 890, 'h.jpg', 21, 7, '2019-04-03', 0),
(25, 'กระทะไฟฟ้า', 'สำหรับใช้ทำอาหาร', 890, 'h2.jpg', 20, 7, '2019-04-15', 0),
(26, 'กาน้ำร้อน', 'สำหรับต้มน้ำร้อน', 450, 'h3.jpg', 30, 7, '2019-04-03', 0),
(27, 'เตาบาบีคิว', 'สำหรับปิ้งย่าง', 1490, 'h4.jpg', 20, 7, '2019-04-11', 0),
(28, 'พัดลม', 'ติดผนัง', 990, 'h5.jpg', 12, 7, '2019-04-04', 0),
(29, 'พัดลม', 'สำหรับตั้ง', 550, 'h6.jpg', 21, 7, '2019-04-10', 1),
(30, 'ไดร์เป่าผม', 'สำหรับเป่าผม', 1300, 'h7.jpg', 11, 7, '2019-04-03', 0),
(31, 'ตู้เย็น', '2 ประตู', 5500, 'h8.jpg', 33, 7, '2019-02-07', 0),
(32, 'SAMSUNG Air', 'แอร์บ้านประหยัดไฟเบอร์ 5', 9900, 'h9.jpg', 4, 7, '2019-04-18', 0),
(33, 'โคมไฟ', 'โคมไฟอ่านหนังสือ', 670, 'h10.jpg', 24, 7, '2019-04-04', 0),
(34, 'ทีวี', '32 นิ้ว', 8900, 'hh.jpg', 15, 8, '2019-04-01', 0),
(35, 'ทีวี', '35 นิ้ว', 13000, 'hh2.jpg', 13, 8, '2019-04-09', 0),
(36, 'ทีวี', '48 นิ้ว', 14000, 'hh3.jpg', 24, 8, '2019-04-02', 0),
(37, 'ทีวี', '50 นิ้ว', 22000, 'hh4.jpg', 14, 8, '2019-04-16', 0),
(38, 'ทีวี จอโค้ง', '58 นิ้ว', 32000, 'hh5.jpg', 32, 8, '2019-04-03', 0),
(39, 'รีโมททีวี', 'ใช้กับ SAMSUNG', 250, 'hh6.jpg', 25, 8, '2019-03-21', 0),
(40, 'รีโมททีวี', 'ใช้กับ SAMSUNG', 250, 'hh7.jpg', 23, 8, '2019-03-15', 0),
(41, 'Play station 4', 'เกมส์ Play ต่อเข้ากับจอทีวี', 12000, 'hh8.jpg', 8, 8, '2019-04-25', 0),
(42, 'Game Boy', 'เกมส์พกพา', 3200, 'hh9.jpg', 30, 8, '2019-04-05', 0),
(43, 'Nintendo', 'เกมส์พกพา', 6000, 'hh10.jpg', 25, 8, '2019-04-12', 0),
(44, 'Dettol', 'สบู่ทำความสะอาดร่างกาย แบบแพ็ค', 150, 'inh.jpg', 20, 9, '2019-02-08', 0),
(45, 'Colgate', 'ยาสีฟัน', 30, 'inh2.jpg', 25, 9, '2019-04-06', 0),
(46, 'แปรงสีฟันไฟฟ้า', 'สามารถหมุนได้เพียงแค่ใส่ถ่าน', 1300, 'inh3.jpg', 40, 9, '2019-04-03', 0),
(47, 'Nevia', 'โลออนดับกลิ่นกาย', 58, 'inh4.jpg', 32, 9, '2019-04-04', 0),
(48, 'Dulex', '56 มม.', 105, 'inh5.jpg', 10, 9, '2019-04-04', 0),
(49, 'Nevia', 'โลชั่นทาผิวกาย', 55, 'inh6.jpg', 32, 9, '2019-03-21', 0),
(50, 'น้ำหอม', 'ใช้ได้ทั้งผู้ชายและผู้หญิงด', 30, 'inh7.jpg', 22, 9, '2019-04-03', 0),
(51, 'แป้ง', 'แป้งแคร์', 40, 'inh8.jpg', 20, 9, '2019-04-03', 0),
(52, 'akamoto', 'ถุงยางอนามัย XL', 55, 'inh9.jpg', 20, 9, '2019-04-05', 1),
(53, 'Listerine', 'น้ำยาบ้วนปาก', 105, 'inh10.jpg', 20, 9, '2019-04-12', 0),
(54, 'iPhone6s', 'โทรศัพท์มือถือ', 9900, 'iPhone6s.jpg', 30, 11, '2019-04-16', 0),
(55, 'iPhone7Pluse', 'โทรศัพท์มือถือ', 150000, 'iPhone7Plus.jpg', 30, 11, '2019-04-10', 0),
(56, 'iPhone8', 'โทรศัพท์มือถือ', 18000, 'iPhone8.jpg', 30, 11, '2019-04-01', 0),
(57, 'iPhoneX', 'โทรศัพท์มือถือ', 22000, 'iphoneX.jpg', 30, 11, '2019-04-02', 0),
(58, 'iPhoneXR', 'โทรศัพท์มือถือ', 30000, 'iphoneXR.jpg', 30, 11, '2019-04-06', 0),
(59, 'iPhoneXS', 'โทรศัพท์มือถือ', 35000, 'iphoneXS.jpg', 30, 11, '2019-04-06', 1),
(60, 'Lighting USB 1 M', 'สายชาร์ตไอโฟนความยาว 1 M', 890, 'LightningUsb1m.jpg', 20, 11, '2019-04-18', 0),
(61, 'Lighting USB 2 M', 'สายชาร์ตไอโฟนความยาว 2 M', 1200, 'LightningUsb2m.jpg', 19, 11, '2019-04-19', 0),
(62, 'Meo', 'อาหารแมวรสซีฟู๊ด', 111, 'pet.jpg', 15, 2, '2019-04-13', 0),
(63, 'Meo', 'อาหารแมวเปียก', 16, 'pet2.jpg', 15, 2, '2019-04-06', 0),
(64, 'Whiskas', 'อาหารแมวรสนม', 111, 'pet3.jpg', 15, 2, '2019-04-09', 0),
(65, 'Purina One', 'อาหารแมวรสแซลม่อน', 220, 'pet4.jpg', 15, 2, '2019-04-02', 0),
(66, 'Nekko', 'อาหารแมวแบบซอง', 26, 'pet5.jpg', 15, 2, '2019-04-05', 0),
(67, 'Felipo', 'อาหารแมวรสซีฟู๊ด', 135, 'pet6.jpg', 15, 2, '2019-04-07', 0),
(68, 'Kit cat', 'ทรายแมว', 350, 'pet7.jpg', 15, 2, '2019-04-02', 0),
(69, 'คอนโดแมว', 'ไว้สำหรับเจ้าเหมียว', 450, 'pet8.jpg', 15, 2, '2019-04-03', 0),
(70, 'ของเล่นแมว', 'สำหรับเจ้าเหมียว', 155, 'pet9.jpg', 15, 2, '2019-04-07', 0),
(71, 'ของเล่นแมว', 'สำหรับเจ้าเหมียว', 255, 'pet10.jpg', 15, 2, '2019-04-12', 0),
(72, 'Hopsin ', 'เสื้อฮู๊ด Hopis สีเทา', 1350, 's1.jpg', 54, 3, '2019-04-22', 0),
(73, 'Hopsin ', 'เสื้อฮู๊ด Hopis สีดำ', 1350, 's2.jpg', 55, 3, '2019-04-01', 0),
(74, 'Eminem', 'เสื้อเชิร์ตสีดำ', 950, 's3.jpg', 55, 3, '2019-04-10', 0),
(75, 'Eminem', 'เสื้อแขนยาวสีขาว', 1550, 's4.jpg', 55, 3, '2019-04-10', 0),
(76, 'เสื้อฮาวาย', 'สำหรับใส่เที่ยว', 150, 's5.jpg', 55, 3, '2019-04-06', 0),
(77, 'Adidas', 'เสื้อกันหนาว', 350, 's6.jpg', 55, 3, '2019-04-05', 0),
(78, 'เสื้อใส่เที่ยว', 'สีขาวยาว 24', 450, 's7.jpg', 55, 3, '2019-04-11', 0),
(79, 'เสื้อใส่เที่ยว', 'สีม่วง ยาว 24', 350, 's8.jpg', 55, 3, '2019-04-01', 0),
(80, 'เสื้อใส่เที่ยว', 'สีแดงแขนยาว ยาว 28', 450, 's9.jpg', 55, 3, '2019-04-15', 0),
(81, 'เสื้อกล้าม', 'สีขาวยาว 27', 250, 's10.jpg', 55, 3, '2019-04-08', 0),
(82, 'รองเท้า', 'สีดำแดง Us 10', 5500, 'shoes1.jpg', 35, 1, '2019-04-04', 1),
(83, 'ลูกฟุ๊ตบอล', 'สีทองมีตราทีมฟุ๊ตบอล', 2500, 'sport.jpg', 35, 10, '2019-04-20', 1),
(84, 'ลูกบาสเก็ตบอล', 'สีส้ม', 450, 'sport1.jpg', 35, 10, '2019-04-12', 0),
(85, 'ไม้แบตมินตัน', 'สีฟ้าดำ', 980, 'sport3.jpg', 35, 10, '2019-04-11', 0),
(86, 'ลูกเทนนิส', '1 กล่องมี 4 ลูก', 550, 'sport4.JPG', 35, 10, '2019-04-06', 0),
(87, 'ไม้แบตมินตัน', 'มี 2 ไม้', 880, 'sport5.jpg', 35, 10, '2019-04-05', 0),
(88, 'ลูกแบตมินตัน', 'ตราม้าบิน 1 กล่อง มี 10 ลูก', 660, 'sport6.jpg', 35, 10, '2019-04-25', 0),
(89, 'แป้นบาสเก็ตบอล', 'สูง 350 ซม.', 900, 'sport7.jpg', 35, 10, '2019-04-06', 0),
(90, 'จักรยาน', 'สำหรับนักกีฬา', 11500, 'sport8.jpg', 35, 10, '2019-04-04', 0),
(91, 'โกลฟุ๊ตบอล', 'ยาว 50 ซม.', 1200, 'sport9.jpg', 35, 10, '2019-04-05', 0),
(92, 'กระสอบทราย', 'สีแดง', 800, 'sport10.jpg', 35, 10, '2019-04-04', 1),
(93, 'Coke ', 'แพ็ค 12 ขวด 1.5 ', 125, 'water.jpg', 40, 4, '2019-04-06', 0),
(94, 'coke', 'แพ็คกระป๋อง 12 ชิ้น', 85, 'water2.jpg', 60, 4, '2019-04-02', 1),
(95, 'Papsi', '1 แพ็คมี 6 กระป๋อง', 79, 'water3.jpg', 65, 4, '2019-04-11', 0),
(96, 'Papsi', '1 แพ็คมี 12 ขวด ', 100, 'water4.jpg', 65, 4, '2019-04-06', 0),
(97, 'Leo', '1 ลังมี 12 ขวด', 620, 'water5.jpg', 10, 4, '2019-04-04', 0),
(98, 'เบียร์ ช้าง', '1 ลังมี 12 ขวด', 589, 'water6.jpg', 10, 4, '2019-04-05', 0),
(99, 'เฟียวไลฟ์', 'น้ำดื่ม ขนาด 12 ขวด ต่อ 1 แพ็ค', 60, 'water7.jpg', 45, 4, '2019-04-12', 0),
(100, 'คริสตัล', 'น้ำดื่ม 1 แพ็คมี 12 ขวด', 55, 'water8.jpg', 45, 4, '2019-04-05', 0),
(101, 'สิงห์', 'น้ำดื่ม 1 แพ็คมี 12 ขวด', 75, 'water9.jpg', 45, 4, '2019-04-06', 0),
(102, 'เฟียวไลฟ์', 'ฝาสี 1 แพ็ค มี 12 ขวด', 55, 'water10.jpg', 45, 4, '2019-04-02', 0),
(103, 'ยาดม', 'เพื่อความสดชื่น', 50, '123.jpg', 2, 9, '2019-01-12', 1),
(104, 'ไดร์เป่า', 'ทำให้ผมแห้ง', 120, '456.jpg', 3, 7, '2019-04-26', 1),
(105, 'ไดร์เป่าผม', '..', 23, '', 3, 1, '2019-04-24', 0),
(106, 'เตารีด', 'รีดผ้าให้เรียบ', 125, '555.jpg', 3, 7, '2019-04-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `statusdelivery`
--

CREATE TABLE `statusdelivery` (
  `delivery_id` int(11) NOT NULL,
  `tacking_id` varchar(255) NOT NULL,
  `tacking_detail` varchar(255) NOT NULL,
  `customerid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statusdelivery`
--

INSERT INTO `statusdelivery` (`delivery_id`, `tacking_id`, `tacking_detail`, `customerid`) VALUES
(1, 'Xn0Fj5CJRaT23', 'กำลังจัดส่ง', '3'),
(2, 'caUHb10vnPZoK', 'กำลังจัดส่ง', '5'),
(3, 'Cbicr0WjPFTuK', 'กำลังจัดส่ง', '7'),
(4, '3yfG2mA6v0OR9', 'กำลังจัดส่ง', '8'),
(5, 'vx62IDPK0Z73J', 'กำลังจัดส่ง', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `logbuy`
--
ALTER TABLE `logbuy`
  ADD PRIMARY KEY (`idlog`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `statusdelivery`
--
ALTER TABLE `statusdelivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `Cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logbuy`
--
ALTER TABLE `logbuy`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `statusdelivery`
--
ALTER TABLE `statusdelivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
