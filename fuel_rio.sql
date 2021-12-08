-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 09:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel_rio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cold_drink`
--

CREATE TABLE `cold_drink` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cold_drink`
--

INSERT INTO `cold_drink` (`id`, `name`, `small`, `large`, `photo`) VALUES
(1, 'Iced Rio', 10, 14, 'f7-icon.png'),
(2, 'Iced Tea', 10, 14, 'f7-icon.png'),
(3, 'Iced Coffee', 10, 14, 'f7-icon.png'),
(4, 'Iced Vanilla', 10, 14, 'f7-icon.png'),
(5, 'Passion Fruit', 10, 14, 'f7-icon.png'),
(6, 'Iced Americano', 10, 14, 'f7-icon.png'),
(7, 'Iced Mocha', 10, 14, 'f7-icon.png'),
(8, 'Iced Latte', 10, 14, 'f7-icon.png'),
(9, 'Iced Cappuccino', 10, 14, 'f7-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`id`, `email`) VALUES
(1, 'momen@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `hot_drink`
--

CREATE TABLE `hot_drink` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hot_drink`
--

INSERT INTO `hot_drink` (`id`, `name`, `small`, `large`, `photo`) VALUES
(1, 'Rio', 12, 15, 'f7-icon.png'),
(2, 'Espresso', 7, 9, 'f7-icon.png'),
(3, 'Americano', 9, 12, 'f7-icon.png'),
(4, 'Cappuccino', 10, 14, 'f7-icon.png'),
(5, 'French Vanila', 10, 14, 'f7-icon.png'),
(6, 'Hot Nutella', 10, 12, 'f7-icon.png'),
(7, 'Nescafe Espresso', 9, 12, 'f7-icon.png'),
(8, 'Tea', 5, 7, 'f7-icon.png'),
(9, 'Chai Latte', 10, 14, 'f7-icon.png'),
(10, 'Salted Caramel', 10, 14, 'f7-icon.png'),
(11, 'Toffee Caramel', 12, 16, 'f7-icon.png'),
(12, 'Rio Lotus', 12, 16, 'f7-icon.png'),
(13, 'Latte', 0, 12, 'f7-icon.png'),
(14, 'Mocha', 0, 14, 'f7-icon.png'),
(15, 'Hot Choclate', 0, 14, 'f7-icon.png'),
(16, 'Oreo Latte ', 0, 14, 'f7-icon.png'),
(17, 'Caramel Latte', 0, 14, 'f7-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `ice_cream`
--

CREATE TABLE `ice_cream` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice_cream`
--

INSERT INTO `ice_cream` (`id`, `name`, `small`, `large`, `photo`) VALUES
(1, 'Bubbly Gum', 8, 12, 'f7-icon.png'),
(2, 'Nutella', 8, 12, 'f7-icon.png'),
(3, 'Vanilla', 6, 10, 'f7-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`) VALUES
(1, 'ريو الطيرة'),
(2, 'ريو البالوع'),
(3, 'ريو طولكرم'),
(4, 'ريو سلفيت'),
(5, 'ريو نابلس'),
(6, 'ريو بيت عور '),
(7, 'ريو اريحا');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cust_id`, `date`, `status`, `location`, `total`, `name`, `phone`) VALUES
(22, 922169, '2021-08-18 21:59:39', 0, 1, 10, 'momen', '0592978425'),
(21, 922169, '2021-08-18 21:33:20', 0, 1, 10, 'momen', '0592978425'),
(20, 1, '2021-08-13 14:13:43', 0, 1, 12, 'momen', '0592978425'),
(19, 1, '2021-08-13 14:12:41', 0, 1, 20, 'momen', '0592978425'),
(23, 922169, '2021-08-24 17:14:48', 1, 1, 30, 'momen khalefa', '0592978425');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `cat_id`, `product_id`, `size`, `quantity`) VALUES
(14, 19, 1, 1, 0, 1),
(15, 19, 1, 2, 0, 1),
(16, 20, 0, 1, 0, 1),
(17, 21, 1, 1, 0, 1),
(18, 22, 1, 1, 0, 1),
(19, 0, 1, 3, 0, 3),
(20, 0, 1, 2, 0, 1),
(21, 23, 1, 3, 0, 1),
(22, 23, 1, 4, 0, 1),
(23, 23, 1, 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rio_login`
--

CREATE TABLE `rio_login` (
  `id` int(11) NOT NULL,
  `id_rio` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rio_login`
--

INSERT INTO `rio_login` (`id`, `id_rio`, `user`, `password`) VALUES
(1, 1, 'momen', '1234'),
(2, 2, 'momen2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `snakes`
--

CREATE TABLE `snakes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snakes`
--

INSERT INTO `snakes` (`id`, `name`, `small`, `large`, `photo`) VALUES
(1, 'BlueBerry', 12, 16, 'f7-icon.png'),
(2, 'Oreo', 10, 14, 'f7-icon.png'),
(3, 'Red Berry', 10, 14, 'f7-icon.png'),
(4, 'Cinnamon', 10, 14, 'f7-icon.png'),
(5, 'Chocolate Snake', 10, 14, 'f7-icon.png'),
(6, 'Caramel Snake', 10, 14, 'f7-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'momen khalefa', 'momen@gmail.com', '0592978425', '1234'),
(3, 'momen khalefa', 'momen@test.com', '0592978425', 'momenmomen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cold_drink`
--
ALTER TABLE `cold_drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_drink`
--
ALTER TABLE `hot_drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice_cream`
--
ALTER TABLE `ice_cream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rio_login`
--
ALTER TABLE `rio_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snakes`
--
ALTER TABLE `snakes`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cold_drink`
--
ALTER TABLE `cold_drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hot_drink`
--
ALTER TABLE `hot_drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ice_cream`
--
ALTER TABLE `ice_cream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rio_login`
--
ALTER TABLE `rio_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snakes`
--
ALTER TABLE `snakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
