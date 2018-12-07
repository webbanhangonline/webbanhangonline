-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 03:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingbanaoquan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`category_id` int(11) NOT NULL,
  `categry_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `categry_name`) VALUES
(1, 'Áo Khoác Nữ'),
(2, 'Áo Len'),
(4, 'Áo Sơ Mi'),
(5, 'Áo Ngắn');

-- --------------------------------------------------------

--
-- Table structure for table `deltail_category`
--

CREATE TABLE IF NOT EXISTS `deltail_category` (
`deltail_category_id` int(11) NOT NULL,
  `deltail_category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_idpk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deltail_category`
--

INSERT INTO `deltail_category` (`deltail_category_id`, `deltail_category_name`, `category_idpk`) VALUES
(1, 'Áo Khoác Vải', 1),
(2, 'Áo Khoác Len', 1),
(3, 'Áo Len Cổ Tròn', 2),
(13, 'Tay Dài', 4);

-- --------------------------------------------------------

--
-- Table structure for table `deltail_product`
--

CREATE TABLE IF NOT EXISTS `deltail_product` (
`detail_product_id` int(11) NOT NULL,
  `deltail_product_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deltail_product`
--

INSERT INTO `deltail_product` (`detail_product_id`, `deltail_product_image`, `product_id`) VALUES
(1, 'img/product-img/deltai_1.jpg', 5),
(2, 'img/product-img/deltai_2.jpg', 5),
(3, 'img/product-img/deltai_3.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `firstname`, `lastname`, `address`, `phone`, `email`, `order_time`) VALUES
(42, 0, 'le dinh', 'phung', 'Hue, Hue', '0978531401', 'phungle.29.11@gmail.com', '2018-11-19 10:21:51'),
(43, 0, 'le dinh', 'phung', 'Hue, Hue', '0978531401', 'phungle.29.11@gmail.com', '2018-11-19 10:31:55'),
(44, 0, 'le dinh', 'phung', 'Hue, Hue', '', '', '2018-11-20 03:54:40'),
(45, 0, 'le dinh tam', 'phung', 'Hue, Hue', '0978531401', 'phungle.29.11@gmail.com', '2018-11-20 03:55:37'),
(46, 0, 'le dinh', 'phung', 'Hue, Hue', '0978531401', 'phungle.29.11@gmail.com', '2018-12-01 08:53:04'),
(47, 0, 'le dinh', 'phung', 'Hue, Hue', '123123', 'ldtamphung97@gmail.com', '2018-12-07 14:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
`id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_idpk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `quantity`, `price`, `order_id`, `product_idpk`) VALUES
(53, 1, 1290000, 42, 5),
(54, 1, 1290000, 42, 6),
(55, 1, 1290000, 42, 7),
(56, 6, 1290000, 43, 5),
(57, 6, 1290000, 44, 5),
(58, 4, 1290000, 44, 6),
(59, 4, 1290000, 44, 7),
(60, 4, 1290000, 45, 7),
(61, 1, 1290000, 46, 5),
(62, 3, 1290000, 47, 5),
(63, 1, 1290000, 47, 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deltail_category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_quantity`, `product_price`, `product_image`, `deltail_category_id`) VALUES
(5, 'Áo khoác ghilê nữ dáng dài', 10, 1290000, 'img/product-img/aokhoacgile.jpg', 1),
(6, 'Áo khoác ghilê nữ dáng dài', 10, 1290000, 'img/product-img/aokhoacgile1.jpg', 1),
(7, 'Áo khoác ghilê nữ dáng dài', 10, 1290000, 'img/product-img/aokhoacgile2.jpg', 1),
(8, 'Áo khoác nữ có mũ một mặt lông', 10, 1290000, 'img/product-img/aokhoacgile3.jpg', 1),
(9, 'Áo khoác nữ có mũ một mặt lông', 20, 1290000, 'img/product-img/aokhoacgile4.jpg', 1),
(10, 'Áo khoác len nữ', 12, 499000, 'img/product-img/aokhoaclen1.jpg', 2),
(11, 'Áo khoác len nữ', 10, 500000, 'img/product-img/aokhoaclen2.jpg', 2),
(12, 'Áo khoác len nữ', 10, 499000, 'img/product-img/aokhoaclen3.jpg', 2),
(13, 'Áo khoác len nữ', 10, 500000, 'img/product-img/aokhoaclen4.jpg', 2),
(14, 'Áo khoác sợi nữ sợi cotton acrylic', 10, 499000, 'img/product-img/aokhoaclen5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_birthday` date NOT NULL,
  `user_gender` tinyint(1) NOT NULL,
  `user_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_author` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_fullname`, `user_birthday`, `user_gender`, `user_phone`, `user_email`, `user_address`, `user_author`) VALUES
(1, 'le dinh', '123', 'ldtamphung', '2018-11-01', 0, '0978531401', 'ldtamphung97@gmail.com', 'hue', 'admin'),
(2, 'ldtamphung', '123', 'ldtamphung', '2018-11-01', 0, '0197116112', 'ldtamphung97@gmail.com', 'hue', 'user'),
(8, 'phungle', '123', 'le dinh phung', '2018-11-09', 0, '01421336566', 'ldtamphung97@gmail.com', '', 'user'),
(9, 'phungle', '123', 'le dinh phung', '2018-11-05', 0, '01421336566', 'ldtamphung97@gmail.com', 'Hue, Hue', 'user'),
(10, 'phungle', '123', 'le dinh phung', '2018-11-07', 0, '01421336566', 'ldtamphung97@gmail.com', 'Hue, Hue', 'user'),
(11, 'phungle', '321', 'LeDinhTamPhung', '2018-12-12', 1, '01421336566', 'ldtamphung97@gmail.com', 'Hue, Hue', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `deltail_category`
--
ALTER TABLE `deltail_category`
 ADD PRIMARY KEY (`deltail_category_id`), ADD KEY `category_idpk` (`category_idpk`);

--
-- Indexes for table `deltail_product`
--
ALTER TABLE `deltail_product`
 ADD PRIMARY KEY (`detail_product_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
 ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`), ADD KEY `product_idpk` (`product_idpk`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`), ADD KEY `deltail_category_id` (`deltail_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deltail_category`
--
ALTER TABLE `deltail_category`
MODIFY `deltail_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `deltail_product`
--
ALTER TABLE `deltail_product`
MODIFY `detail_product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deltail_category`
--
ALTER TABLE `deltail_category`
ADD CONSTRAINT `deltail_category_ibfk_1` FOREIGN KEY (`category_idpk`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deltail_product`
--
ALTER TABLE `deltail_product`
ADD CONSTRAINT `deltail_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_product_ibfk_3` FOREIGN KEY (`product_idpk`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`deltail_category_id`) REFERENCES `deltail_category` (`deltail_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
