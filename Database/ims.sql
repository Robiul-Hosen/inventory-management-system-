-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 09:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'vivo'),
(4, 'Iphone');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `Product_name` int(11) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `Category_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_details` varchar(120) DEFAULT NULL,
  `product_Total_quantity` varchar(100) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `Supplier_ID` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_details`, `product_Total_quantity`, `product_price`, `Supplier_ID`, `Category_id`) VALUES
(1, 'jfgjgj', 'jhkjhkh', '7876', '6986', 2, 2),
(2, 'milk', 'fdgfdgfdgdfg', '32', '322', 2, 2),
(8, 'vivo y21t', '6gb ran and 128 gb rom', '10', '21000', 1, 1),
(9, 'iphone12', '6GB+128GB (4G)', '1', '120000', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `Supplier_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Address` varchar(120) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `Supplier_Name`, `Email`, `password`, `Address`, `phone`) VALUES
(1, 'sojib', 'admin@gmail.com', 'admin', 'Bangladesh,Dhaka', '1617703090'),
(3, 'Sharif Hosen', NULL, NULL, 'Bangladesh,chittagong', '1992484123'),
(4, 'Sakib Hosen', NULL, NULL, 'Bangladesh,Noakhali', '1777892734');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `password`) VALUES
(1, 'emon', 'emon@gmail.com', '1111'),
(2, 'sojib', 'sojib@gmail.com', '123'),
(3, 'kamal', 'kamal@gmail.com', '123'),
(4, 'Sakib Hosen', 'sakib@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Category_id` (`Category_id`),
  ADD KEY `Product_name` (`Product_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `Supplier_ID` (`Supplier_ID`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`Product_name`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
