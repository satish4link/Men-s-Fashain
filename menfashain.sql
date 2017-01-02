-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 05:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menfashain`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `username`, `password`, `email`, `date`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '2016-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `name`, `email`, `message`) VALUES
(2, 'satish', 'satish4link@gmail.com', 'hello, how are you!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_rate` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_rate`, `product_image`) VALUES
(1, 1, 'Hoodie', 'Summer Hoodie for men', 1100, '1.0x0.jpg'),
(2, 1, 'Hoodie', 'Nike best aw77 half zip mens hoodie', 1600, 'nike-best-aw77-half-zip-mens-hoodie.jpg'),
(3, 1, 'Hoodie', 'Mens Cowl Neck Hoodie', 1800, 's-l1000.jpg'),
(4, 1, 'Hoodie', 'Tokyo Tigers Horten Aztec Print Pullover Hoodie Hoody Hooded Top ', 2200, '7ed80e5772d6328829c7add2928b3542.jpg'),
(5, 1, 'Leather Jacket', 'PU Leather Stand Collar Horizontal Zipper Epaulet Rib Spliced Long Sleeves Mens Slimming Jacket', 1700, '1438728825207-P-2916320.jpg'),
(6, 1, 'Leather Jacket', 'Stand Collar Solid Color Multi-Pocket Long Sleeve Mens PU-Leather Jacket', 3200, '1447812673525-P-3464558.jpg'),
(7, 1, 'Leather Jacket', 'Slimming Rib Stand Collar Multi-Zipper Epaulet Design Long Sleeves Mens PU Leather Motorcycle Jacket', 2200, '1443050487403-P-3164497.jpg'),
(8, 1, 'Leather Jacket', 'Slim-Fit Zipper-Up Faux Leather Biker Jacket', 2600, '20160906101300_35902.jpg'),
(9, 1, 'Sweater', 'Dioufond New Pullover Men Gradient O-Neck Mens Sweaters Long Sleeve Sueter Hombre Fashion Sweater', 800, 'Dioufond-New-Pullover-font-b-Men-b-font-Gradient-O-Neck-font-b-Mens-b-font.jpg'),
(10, 1, 'Sweater', 'Hot sale brand sweater new design men casual slim style sweater man thick sweater pullover winter', 950, 'Hot-sale-brand-font-b-sweater-b-font-new-font-b-design-b-font-font-b.jpg'),
(11, 1, 'Sweater', 'Men Polo Sweater Brand Design Autumn Winter Warm Pullovers Knitted Sweater Male Slim Fit Euro Size', 1200, '-font-b-Men-b-font-font-b-Polo-b-font-font-b-Sweater-b-font.jpg'),
(12, 1, 'Sweater', 'New Winter Fashion Warm Thick Cardigan Sweaters Zipper Design Stand Collar Casual Men Sweater Solid Coat Pattern Knitwear M-3XL', 1800, 'New-Winter-Fashion-Warm-Thick-Cardigan-font-b-Sweaters-b-font-font-b-Zipper-b-font.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `password`, `email`, `dob`, `phonenumber`, `gender`, `hash`, `active`) VALUES
(31, 'Roshan', 'Rijal', 'roshan', 'gamer4link@gmail.com', '0000-00-00', '', '', '92977ae4d2ba21425a59afb269c2a14e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
