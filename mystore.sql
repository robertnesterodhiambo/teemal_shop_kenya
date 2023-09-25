-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Michelin'),
(2, 'Bridgestone'),
(3, 'Goodyear'),
(4, 'Continental'),
(5, 'Pirelli'),
(6, 'Firestone'),
(7, 'Yokohama'),
(8, 'Dunlop'),
(9, 'Hankook'),
(10, 'Cooper'),
(11, 'Toyo'),
(12, 'Falken'),
(13, 'Nitto'),
(14, 'Kumho'),
(15, 'BFGoodrich'),
(18, 'TYRE PRESSURE MONITO');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(5, '::1', 0),
(9, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Summer Tires'),
(2, 'Winter Tires'),
(3, 'All-Season Tires'),
(4, 'Performance Tires'),
(5, 'Touring Tires'),
(6, 'Off-Road Tires'),
(7, 'All-Terrain Tires'),
(8, 'Mud-Terrain Tires'),
(9, 'Run-Flat Tires'),
(10, 'Low Rolling Resistance Tires'),
(11, 'Highway Tires'),
(12, 'Commercial Tires'),
(13, 'Vintage Tires'),
(14, 'SUV Tires'),
(15, 'Truck Tires'),
(18, 'TYRE HEALTH'),
(19, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `productt_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` mediumtext NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `prduct_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `productt_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `prduct_price`, `date`, `status`) VALUES
(3, 'BFGoodrich-Terrain-T-A-KO2-Radial-tire-LT265-60R18-E-119-116S-119S', 'The BFGoodrich KO2: Premier all-terrain tire for trucks & SUVs. Aggressive tread, durability, 119/116S load index. Perfect for off-road & on-road. Buy for reliability!', 'BFGoodrich-Terrain', 5, 15, 'BFGoodrich-Terrain-T-A-KO2-Radial-tire-LT265-60R18-E-119-116S-119S.jpg', 'BFGoodrich-Terrain-T-A-KO2-Radial-tire-LT265-60R18-E-119-116S-119S.jpg', 'BFGoodrich-Terrain-T-A-KO2-Radial-tire-LT265-60R18-E-119-116S-119S.jpg', '25000', '2023-09-05 11:24:35', 'true'),
(4, 'BF Goodrich Trail Terrain T 26560R18 110T Tire', '\"Discover the BF Goodrich Trail Terrain T 265/60R18 110T Tire in Nairobi, Kenya. This versatile all-terrain tire offers superior performance on and off the road, perfect for Kenyan adventures. Get yours for reliability and stability!\"', 'BF Goodrich Trail', 7, 15, 'BF Goodrich Trail Terrain T 26560R18 110T Tire.jpg', 'BF Goodrich Trail Terrain T 26560R18 110T Tire.jpg', 'BF Goodrich Trail Terrain T 26560R18 110T Tire.jpg', '25000', '2023-09-05 11:28:21', 'true'),
(5, 'Bosch DIN 74 S4H35 74AH Battery', '\"Upgrade your vehicle with the Bosch DIN 74 S4H35 74AH Battery in Nairobi, Kenya. Enjoy reliable starting power and longevity. Get your battery today for worry-free driving in Nairobi!\"', 'Bosch DIN', 15, 1, 'Bosch DIN 74 S4H35 74AH Battery.jpg', 'Bosch DIN 74 S4H35 74AH Battery.jpg', 'Bosch DIN 74 S4H35 74AH Battery.jpg', '15000', '2023-09-05 11:30:14', 'true'),
(6, 'bridgestone-sport-rft', '\"Experience the ultimate performance with Bridgestone Sport RFT tires in Nairobi, Kenya. These run-flat tires offer superb handling, safety, and durability for Nairobi\'s roads. Upgrade your ride today!\"', 'bridgestone-sport-rft', 1, 2, 'bridgestone-sport-rft.jpg', 'bridgestone-sport-rft.jpg', 'bridgestone-sport-rft.jpg', '25000', '2023-09-05 11:37:24', 'true'),
(7, 'DUNLOP GRANDTREK AT30 26555R19', ' Unleash off-road adventure. Exceptional traction & durability in a versatile tire. Your journey, elevated.', 'DUNLOP GRANDTREK AT30 ', 8, 8, 'DUNLOP GRANDTREK AT30 26555R19.jpg', 'DUNLOP GRANDTREK AT30 26555R19.jpg', 'DUNLOP GRANDTREK AT30 26555R19.jpg', '25000', '2023-09-05 11:39:43', 'true'),
(8, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 'Enhance your driving safety with the Smart Car TPMS Solar Power Digital System. Monitor tire pressure effortlessly, ensuring a smooth and secure journey.', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 10, 14, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', '15000', '2023-09-05 11:41:45', 'true'),
(9, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 'Enhance your driving safety with the Smart Car TPMS Solar Power Digital System. Monitor tire pressure effortlessly, ensuring a smooth and secure journey.', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 10, 14, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', '15000', '2023-09-05 16:40:32', 'true'),
(10, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 'Enhance your driving safety with the Smart Car TPMS Solar Power Digital System. Monitor tire pressure effortlessly, ensuring a smooth and secure journey.', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital', 10, 14, 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', 'Smart Car TPMS Tire Pressure Monitoring System Solar Power Digital.jpg', '15000', '2023-09-06 09:16:43', 'true'),
(17, 'gggggggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggggggggggg', 6, 6, 'Screenshot (107).png', 'Screenshot (26).png', 'Screenshot (28).png', '250000', '2023-09-20 18:41:39', 'true'),
(18, 'gggggggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggggggggggg', 6, 6, 'Screenshot (107).png', 'Screenshot (26).png', 'Screenshot (28).png', '250000', '2023-09-25 08:50:32', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
