-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:57 PM
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
(1, 12001, 'MSI', 'GF65 THIN 10UE-233TH ', 'BB510020H16GXXDX10EMH', '2023-11-24', 2, '2023-11-23', 1, 12000.00, 25000.00, 24000.00, 'ทดสอบลองใส่ข้อมูล', 1),
(3, 12002, 'Asus ', 'VivoBook 14 5413EA-EB301TS ', 'M7N0CX13N876296', '2023-11-24', 1, '2023-11-14', 1, 10000.00, 25000.00, 24000.00, 'ทดสอบลองใส่ข้อมูล', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
