-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 03:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plants`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_Id`, `Name`) VALUES
(7, 'plants'),
(10, 'accecsories');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `user_id` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`user_id`, `name`, `email`, `feedback`) VALUES
(1, '', '', ''),
(2, '', 'hassankhan123@gmail.com', ''),
(3, 'Hamza', 'hamza222@gmail.com', 'vknfbeibniebk fbebne,krbe'),
(4, 'shahzain', 'shah@gmail.com', 'hello shah!'),
(5, 'Hamna Khan', 'hassankhan123@gmail.com', 'aptech cake kahan hai '),
(6, 'hassan', 'hamna2913@gmail.com', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Plant_Id` int(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Order_Date` varchar(255) NOT NULL,
  `Total_Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_cart`
--

CREATE TABLE `orders_cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(233) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_total` int(11) NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_cart`
--

INSERT INTO `orders_cart` (`id`, `customer_id`, `p_id`, `p_name`, `p_price`, `p_quantity`, `p_total`, `ordertime`) VALUES
(1, 21, 11, 'a1 ', 45, 1, 45, '2023-08-11 20:25:58'),
(2, 21, 14, 'plants-3', 54, 2, 108, '2023-08-12 05:42:38'),
(3, 21, 11, 'a1 ', 45, 3, 135, '2023-08-12 05:42:38'),
(5, 21, 11, 'a1 ', 45, 1, 45, '2023-08-12 06:04:54'),
(6, 21, 14, 'plants-3', 54, 1, 54, '2023-08-12 06:04:54'),
(8, 21, 11, 'a1 ', 45, 4, 180, '2023-08-12 06:08:24'),
(9, 21, 14, 'plants-3', 54, 2, 108, '2023-08-12 06:14:09'),
(10, 21, 11, 'a1 ', 45, 1, 45, '2023-08-12 06:50:09'),
(11, 21, 11, 'a1 ', 45, 2, 90, '2023-08-12 06:51:35'),
(12, 21, 14, 'plants-3', 54, 3, 162, '2023-08-12 06:51:35'),
(14, 21, 11, 'a1 ', 45, 12, 540, '2023-08-12 07:35:33'),
(15, 21, 14, 'plants-3', 54, 1, 54, '2023-08-12 07:55:48'),
(16, 21, 11, 'a1 ', 45, 1, 45, '2023-08-12 08:08:18'),
(17, 21, 14, 'plants-3', 54, 1, 54, '2023-08-12 08:08:38'),
(18, 21, 11, 'a1 ', 45, 3, 135, '2023-08-12 08:20:35'),
(19, 21, 11, 'a1 ', 45, 2, 90, '2023-08-12 13:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `o_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_code` varchar(200) NOT NULL,
  `bill_total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`o_id`, `customer_id`, `name`, `email`, `country`, `city`, `address`, `postal_code`, `bill_total`, `status`, `order_time`) VALUES
(1, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 55, 1, '2023-08-11 20:25:58'),
(2, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 253, 1, '2023-08-12 05:42:38'),
(3, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 109, 1, '2023-08-12 06:04:54'),
(4, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 190, 1, '2023-08-12 06:08:24'),
(5, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 118, 1, '2023-08-12 06:14:09'),
(6, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 55, 1, '2023-08-12 06:50:09'),
(7, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 262, 1, '2023-08-12 06:51:35'),
(8, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 550, 1, '2023-08-12 07:35:33'),
(9, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 64, 1, '2023-08-12 07:55:48'),
(10, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 55, 1, '2023-08-12 08:08:18'),
(11, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 64, 1, '2023-08-12 08:08:38'),
(12, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 145, 1, '2023-08-12 08:20:35'),
(13, 21, 'Hassan Khan', 'hassankhan123@gmail.com', 'pak', 'khi', 'u9878ygushd', '678', 100, 1, '2023-08-12 13:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Plant_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(3000) NOT NULL,
  `Price` int(255) NOT NULL,
  `Image_Url` varchar(255) NOT NULL,
  `Category` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Plant_id`, `Name`, `Description`, `Price`, `Image_Url`, `Category`) VALUES
(11, 'a1 ', ' fdgersgsdfgsegsd dfbgdfbdsddb drgerv  cvb dcc b dvvf', 45, 'product8.jpg', 6),
(15, 'Plants Accessories', ' Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 60, 'product2.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(244) NOT NULL,
  `p_image` varchar(244) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Username`, `FullName`, `Email`, `Password`, `Role`) VALUES
(19, 'Usman', 'Usman Gani', 'usman123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(20, 'hsk56', 'Hassan Khan', 'hassqankhan0323@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(21, 'hsk1213', 'Hassan Khan', 'hassankhan123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Plant_Id` (`Plant_Id`);

--
-- Indexes for table `orders_cart`
--
ALTER TABLE `orders_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Plant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Category_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_cart`
--
ALTER TABLE `orders_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Plant_Id`) REFERENCES `products` (`Plant_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
