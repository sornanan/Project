-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 05:34 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL COMMENT 'รหัสลูกค้า',
  `name_customer` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `address` varchar(50) NOT NULL COMMENT 'ที่อยู่',
  `email` varchar(20) NOT NULL COMMENT 'อีเมล',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `address`, `email`, `telephone`) VALUES
(1, 'นาย ก', '11/11', 'qwqe@gmail.com', '08888886'),
(2, 'นาย ค', '33/33', 'aa@a.com', '111'),
(3, 'นาย ข', '22/22', 'aa@a.com', '884456969'),
(4, 'vv', 'xcv', 'xcv@gmail.com', '012346578');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `id_move` int(10) NOT NULL COMMENT 'รหัส',
  `id_product` int(10) NOT NULL COMMENT 'รหัสสินค้า',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่',
  `amount` varchar(10) NOT NULL COMMENT 'สินค้าเข้า',
  `balance` varchar(10) NOT NULL COMMENT 'ยอดคงเหลือสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movement`
--

INSERT INTO `movement` (`id_move`, `id_product`, `date`, `amount`, `balance`) VALUES
(1, 2, '2018-08-19 16:32:04', '10', '0'),
(4, 4, '2018-09-27 17:09:31', '20', '0'),
(7, 3, '2018-10-03 13:35:58', '30', '25'),
(8, 4, '2018-10-03 14:00:26', '15', '5'),
(9, 5, '2018-11-07 18:32:05', '10', '10'),
(10, 1, '2018-11-20 16:41:28', '10', '0'),
(11, 1, '2018-11-20 17:30:12', '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL COMMENT 'รหัสสินค้า',
  `product` varchar(20) NOT NULL COMMENT 'สินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product`) VALUES
(1, 'Mouse1'),
(2, 'keyboard'),
(3, 'ดินสอ'),
(4, 'Cpu1'),
(5, 'สมุด');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_order` int(10) NOT NULL COMMENT 'รหัสซื้อสินค้า',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่',
  `id_supplier` int(10) NOT NULL COMMENT 'รหัสผู้จัดจำหน่าย',
  `id_user` int(10) NOT NULL COMMENT 'รหัสพนักงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_order`, `date`, `id_supplier`, `id_user`) VALUES
(1, '2018-11-13 19:29:59', 1, 3),
(2, '2018-09-03 19:07:52', 2, 2),
(3, '2018-10-04 15:03:07', 3, 3),
(4, '2018-11-13 19:30:58', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_detail`
--

CREATE TABLE `purchase_order_detail` (
  `id_orderdetail` int(10) NOT NULL COMMENT 'รหัสรายละอียดซื้อสินค้า',
  `id_order` int(10) NOT NULL COMMENT 'รหัสซื้อสินค้า',
  `detail` varchar(50) NOT NULL COMMENT 'รายละเอียด',
  `quantity` varchar(10) NOT NULL COMMENT 'จำนวน',
  `price` varchar(10) NOT NULL COMMENT 'ราคา',
  `amount` varchar(10) NOT NULL COMMENT 'จำนวนเงิน',
  `id_product` int(10) NOT NULL COMMENT 'รหัสสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order_detail`
--

INSERT INTO `purchase_order_detail` (`id_orderdetail`, `id_order`, `detail`, `quantity`, `price`, `amount`, `id_product`) VALUES
(1, 2, 'กระป๋อง', '20', '500', '10000', 1),
(3, 3, 'wifi', '20', '500', '10000', 1),
(4, 1, 'hj', '5', '100', '500', 1),
(5, 1, 'wifi', '5', '20', '100', 1);

-- --------------------------------------------------------

--
-- Table structure for table `re_product`
--

CREATE TABLE `re_product` (
  `id_return` int(10) NOT NULL,
  `date` date NOT NULL,
  `id_customer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `re_product`
--

INSERT INTO `re_product` (`id_return`, `date`, `id_customer`) VALUES
(1, '2540-05-20', 2),
(2, '2018-11-11', 3),
(3, '2018-11-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sell_order`
--

CREATE TABLE `sell_order` (
  `id_sell` int(10) NOT NULL COMMENT 'รหัส',
  `date` date NOT NULL COMMENT 'วันที่ขาย',
  `date_quatation` date NOT NULL COMMENT 'วันที่เสนอราคา',
  `id_customer` int(10) NOT NULL COMMENT 'รหัสลูกค้า',
  `id_user` int(10) NOT NULL COMMENT 'รหัสพนักงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sell_order`
--

INSERT INTO `sell_order` (`id_sell`, `date`, `date_quatation`, `id_customer`, `id_user`) VALUES
(1, '2018-09-12', '2018-09-03', 1, 1),
(2, '2018-10-13', '2018-10-18', 1, 1),
(3, '2018-10-26', '2018-10-19', 1, 1),
(4, '2018-10-01', '2018-10-01', 3, 3),
(5, '2018-10-25', '2018-10-26', 2, 2),
(6, '2018-10-31', '2018-10-25', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sell_order_detail`
--

CREATE TABLE `sell_order_detail` (
  `id_selldetail` int(10) NOT NULL COMMENT 'รหัส',
  `id_sell` int(10) NOT NULL COMMENT 'รหัสขายสินค้า',
  `id_product` int(10) NOT NULL COMMENT 'รหัสสินค้า',
  `quantity` varchar(20) NOT NULL COMMENT 'จำนวน',
  `price` varchar(20) NOT NULL COMMENT 'ราคา',
  `amount` varchar(20) NOT NULL COMMENT 'จำนวนเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sell_order_detail`
--

INSERT INTO `sell_order_detail` (`id_selldetail`, `id_sell`, `id_product`, `quantity`, `price`, `amount`) VALUES
(1, 1, 1, '5', '500', '2500'),
(2, 2, 2, '5', '20', '100'),
(3, 1, 1, '20', '50', '1000'),
(4, 1, 1, '100', '20', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL COMMENT 'รหัสผู้จัดจำหน่าย ',
  `name_supplier` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `address` varchar(30) NOT NULL COMMENT 'ที่อยู่',
  `email` varchar(20) NOT NULL COMMENT 'อีเมล',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `name_supplier`, `address`, `email`, `telephone`) VALUES
(1, 'นาย ก', 'จ.ปทุมธานี', 'aaa@gmail.com', '0888888888'),
(2, 'wanda', 'www', 'dd@g', '011111'),
(3, 'นาย ไก่', '55/55', 'aa@a.com', '111'),
(4, 'นาย ข', '222', 'qwqe111@gmail.com', '0821234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `telephone`) VALUES
(1, '1234', 'niking01@hotmail.com', '$2y$10$9SaMcxzYQKUbwdNoihRC.OQGlm1vPT2SWY.2SPQMkqpy0pwZf14Nq', '5SbZRZ8QbYXkdw3CyFozLCPQc1TQJXZMNcETkO9TT7IOtkvveUIxeQ5FtYiH', '2018-06-24 23:10:07', '2018-06-24 23:10:07', '0'),
(2, 'dfg', 'aa@a.com', '$2y$10$IdJkNx4/i7y2I4tKgEDABebYHaaF2Uywi.wYXsCJck0s1m4v0y5Oq', 'p9uJSRds6G1g8gvNJnSciqWsqCrntC9IxfTIMAEG4IncX3uquJThkpKBdObH', '2018-08-22 10:40:44', '2018-08-22 10:40:44', '1'),
(3, 'q', 'a1a@a.com', '$2y$10$x.FlGjKwmNfVVQjtE6B/DumVcD51muXl8aWN7m0/CN8YqSGDF.omi', 'tUj8jPXZ9cIHV9IEsSrdSqvQdEKcipYj01FHP5p0sH9cFTcVZTkjvsi4v6fT', '2018-09-27 10:02:45', '2018-09-27 10:02:45', '0'),
(4, 'a', 'aaa@a.com', '$2y$10$GNuK7ILBeosTtexvp3q7ZunhOc8OGc8WKiPUtuELrWPtboVkerB46', 'WpJRaD7WM7uZ5xeH9TaTwDNqJF579Cs4ja1hC7PCXUwO4T3rqOyvfZym2Nbq', '2018-10-16 06:12:31', '2018-10-16 06:12:31', '111'),
(5, 'w', 'w@w.com', '$2y$10$CXVZVzD7GO0XzrboFMIMRuJwilteqY5/whsmZTh/1IlhjhuIuyM66', 'RLRZy4TtuxjLGlS518G32z3vlllFZXaJRNePvLx6gmcShmjG9hb7br0a1ujf', '2018-10-16 08:34:44', '2018-10-16 08:34:44', '2'),
(6, 'a', 'aaa@gmail.com', '$2y$10$X6ysxSVpEX7s/Og6Av9Sx.6TTNrXJSYRM0tf5hBszqvcvvK2yG0zq', NULL, '2018-11-13 11:41:08', '2018-11-13 11:41:08', '0845693652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movement`
--
ALTER TABLE `movement`
  ADD PRIMARY KEY (`id_move`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `purchase_order_detail`
--
ALTER TABLE `purchase_order_detail`
  ADD PRIMARY KEY (`id_orderdetail`);

--
-- Indexes for table `re_product`
--
ALTER TABLE `re_product`
  ADD PRIMARY KEY (`id_return`);

--
-- Indexes for table `sell_order`
--
ALTER TABLE `sell_order`
  ADD PRIMARY KEY (`id_sell`);

--
-- Indexes for table `sell_order_detail`
--
ALTER TABLE `sell_order_detail`
  ADD PRIMARY KEY (`id_selldetail`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลูกค้า', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movement`
--
ALTER TABLE `movement`
  MODIFY `id_move` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสซื้อสินค้า', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_order_detail`
--
ALTER TABLE `purchase_order_detail`
  MODIFY `id_orderdetail` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรายละอียดซื้อสินค้า', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `re_product`
--
ALTER TABLE `re_product`
  MODIFY `id_return` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell_order`
--
ALTER TABLE `sell_order`
  MODIFY `id_sell` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sell_order_detail`
--
ALTER TABLE `sell_order_detail`
  MODIFY `id_selldetail` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้จัดจำหน่าย ', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
