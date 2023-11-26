-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 09:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'NOTEBOOK'),
(2, 'MONITOR'),
(3, 'PC'),
(4, 'CPU'),
(5, 'MAINBOARD'),
(6, 'RAM'),
(7, 'HARDDISK'),
(8, 'SSD_SATA'),
(9, 'SSD_M2'),
(10, 'VGA'),
(11, 'POWER'),
(12, 'CASE'),
(13, 'COOLER'),
(14, 'FAN'),
(15, 'MOUSE'),
(16, 'KEYBOARD'),
(17, 'COMBOSET'),
(18, 'HEADPHONE'),
(19, 'JOYSTICK'),
(20, 'SPEAKER'),
(21, 'ACCESSORIES'),
(22, 'NETWORK'),
(23, 'ETC');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_town` varchar(255) NOT NULL,
  `customer_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_address`, `customer_town`, `customer_phone`) VALUES
(1, 'นายแดง', '199/1', 'กรุงเทพ', '0661116666'),
(2, 'นายดำ', '191 หมู่ 5', 'เชียงใหม่', '0989989998'),
(3, 'ณัฏฐพัฒน์ ศิริขันธ์', '11 หมู่ 6 หมู่บ้านท่าพระเนาว์ ต.ท่าพระ อ.เมือง จ.ขอนแก่น 40260', 'ขอนแก่น', '081-209-0882'),
(4, 'ศุภกฤต บุญเจือ', 'เลขที่65 หมู่ 20 ต.เมืองเดช  อ. เดชอุดม อุบลราชธานี 34160', 'อุบลราชธานี', '086-262-4431'),
(5, 'ธารินทร์ ศิลานนท์', '2/14 ม.4 (ห้องเเถวหลังตึก) อ.บ้านแหลม ต.บ้านเเหลม จังหวัดเพชรบุรี 76110', 'เพชรบุรี', '090-993-0772');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(255) NOT NULL,
  `dealer_address` varchar(255) NOT NULL,
  `dealer_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealer_name`, `dealer_address`, `dealer_phone`) VALUES
(1, 'โรงเรียนยอแซฟอุปถัมภ์ สามพราน', '2 หมู่ 6 ต.ท่าข้าม อ.สามพราน จ.นครปฐม 73110', '02-101-4687'),
(2, 'โรงเรียนมารีย์อุปถัมภ์', '42/72 หมู่ 5 ต.ไร่ขิง อำเภอสามพราน จังหวัดนครปฐม 73210', '02-429-0414'),
(3, 'นภดล บุญปลอด', 'หมู่บ้านไอลีพทาวว์รังสิตคลอง 3 เลขที่ 100/64 ต.บึงยี่โถ อ.ธัญบุรี', '095-335-1213');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_phone`) VALUES
(1, 'กลวัฒน์', '064-252-3542'),
(2, 'ปิติภัทร', '092-639-8542');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `product_serial` varchar(255) NOT NULL,
  `product_date` date NOT NULL,
  `warranty_com_id` int(11) NOT NULL,
  `warranty` date NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `price_buy` decimal(10,2) NOT NULL,
  `price_sell` decimal(10,2) NOT NULL,
  `price_net` decimal(10,2) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `brand`, `model`, `product_serial`, `product_date`, `warranty_com_id`, `warranty`, `dealer_id`, `price_buy`, `price_sell`, `price_net`, `comment`, `employee_id`) VALUES
(1, 2, 'MSI', 'GF65', '1212312121', '2023-11-25', 2, '2023-11-30', 1, 10000.00, 15000.00, 14000.00, 'ทดสอบอีกแล้ว', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spec_monitor`
--

CREATE TABLE `spec_monitor` (
  `sku` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `resolution` varchar(255) NOT NULL,
  `panel` varchar(255) NOT NULL,
  `hz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spec_nb`
--

CREATE TABLE `spec_nb` (
  `sku` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ssd1` varchar(255) NOT NULL,
  `ssd2` varchar(255) NOT NULL,
  `hdd` varchar(255) NOT NULL,
  `vga` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `adapter` varchar(255) NOT NULL,
  `acc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spec_nb`
--

INSERT INTO `spec_nb` (`sku`, `cpu`, `ram`, `ssd1`, `ssd2`, `hdd`, `vga`, `display`, `adapter`, `acc`) VALUES
('1', 'i7', '8gb', '512gb', '', '', 'rtx3050', '15.6\"', '19v', 'กล่อง'),
('1', 'i7', '8gb', '512gb', '', '', 'rtx3050', '15.6\"', '19v', 'กล่อง'),
('2', 'i7', '8gb', '512gb', '1TB', '', 'RTX1650', '15.6\"', '19v 2A', 'กล่อง กระเป๋า');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `sku` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockplace`
--

CREATE TABLE `stockplace` (
  `sku` varchar(255) NOT NULL,
  `inshop` int(11) NOT NULL,
  `box1` int(11) NOT NULL,
  `f3` int(11) NOT NULL,
  `f4` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warranty_com`
--

CREATE TABLE `warranty_com` (
  `warranty_com_id` int(11) NOT NULL,
  `warranty_com_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warranty_com`
--

INSERT INTO `warranty_com` (`warranty_com_id`, `warranty_com_name`) VALUES
(1, 'Synnex'),
(2, 'SVOA'),
(3, 'JIB'),
(4, 'Ascenti'),
(5, 'CHIN INTER'),
(6, 'SIS '),
(7, 'Plenty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranty_com`
--
ALTER TABLE `warranty_com`
  ADD PRIMARY KEY (`warranty_com_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warranty_com`
--
ALTER TABLE `warranty_com`
  MODIFY `warranty_com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
