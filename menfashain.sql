-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 11:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `username`, `password`, `email`, `date`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '2016-05-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Top Wear '),
(2, 'Bottom Wear'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `company_name` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`company_name`, `street_name`, `city_name`, `country`, `postal_code`, `phone_number`) VALUES
('Mens Fashain PVT.LTD.', 'Kumari Club Balkhu', 'Kathmandu', 'Nepal', 42600, 986076653);

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
(3, 'Alex', 'alex@gmail.com', 'Hello, I want to buy jeans do you have search bar option with which I can search what i want.');

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
(12, 1, 'Sweater', 'New Winter Fashion Warm Thick Cardigan Sweaters Zipper Design Stand Collar Casual Men Sweater Solid Coat Pattern Knitwear M-3XL', 1800, 'New-Winter-Fashion-Warm-Thick-Cardigan-font-b-Sweaters-b-font-font-b-Zipper-b-font.jpg'),
(14, 2, 'Blue Jeans', 'Man pants fashion 2016 ripped jeans, network burst models Slim demin pants.', 1250, 'Man-pants-fashion-2016-ripped-font-b-jeans-b-font-network-burst-font-b-models-b.jpg'),
(15, 2, 'Blue Jeans', '2015 Fashion Brand Classic Mens Tapered Jeans Robin Jeans Pants Men Denim Pants Male Ripped Hole', 1650, '2015-Fashion-Brand-Classic-font-b-Men-s-b-font-Tapered-font-b-Jeans-b-font.jpg'),
(16, 2, 'Blue Jeans', 'Gratis pengiriman kedatangan baru denim jins busana pria, Pria jins kapas, Merek jins, Lurus ramping denim panjang lakilaki ukuran 28 to 44(China (Mainland))', 2100, 'Gratis-pengiriman-kedatangan-baru-denim-jins-busana-pria-Pria-jins-kapas-Merek-jins-Lurus-ramping-denim.jpg'),
(17, 2, 'Black Jeans', 'Black Sid skinny stretch jeans', 2500, '274519_main.jpg'),
(18, 2, 'Black Jeans', 'express view skinny fit skinny leg performance stretch black jeans', 2200, '24_277_5512_098_f01.jpg'),
(19, 2, 'Black Jeans', 'ASOS Skinny Jeans With Knee Rips In Black', 2100, 'image1xl.jpg'),
(20, 2, 'Black Jeans', 'Men Black Jeans RIe268sN', 2600, 'Men-Black-Jeans-zdskp00j2dx.jpg'),
(21, 2, 'Black Jeans', '2016 New Black Ripped Jeans Men With Holes Denim Super Skinny Famous Designer Brand Slim Fit', 2600, '2016-New-font-b-Black-b-font-font-b-Ripped-b-font-font-b-Jeans-b.jpg'),
(22, 2, 'Black Jeans', '2014 new fashion men faux leather jeans pant mens skinny leather denim pants trousers 28', 3000, '2014-new-fashion-men-faux-leather-jeans-pant-mens-skinny-leather-denim-pants-trousers-28-34.jpg_640x640.jpg'),
(23, 2, 'Track for men', 'China Track Pants, China Track Pants Manufacturers and Suppliers on Alibaba.com', 2200, 'Nice-track-pants-for-men-2015-newest.jpg'),
(24, 2, 'Track', 'Mens Soft Slim Fit Casual Sports Track Pants', 1250, '31.jpg'),
(25, 2, 'Track', 'Men Grey Melange Track Pants', 1500, 'Men-Grey-Melange-Track-Pants.jpg'),
(26, 3, 'Rayban Glasses', 'Ray-Ban Clubmaster Classic', 900, '$_32.JPG'),
(27, 3, 'Rayban Glasses', 'Eyeglasses, Ray bans and 60s style', 800, '81281bbff996ac5f13a0ad6d73fc6c51.jpg'),
(28, 3, 'Rayban Glasses', 'prices of ray ban glasses oakley sunglasses ray ban 4141', 500, 'The-Color-for-Ray-Ban-Sunglasses-for-Men.jpg'),
(29, 3, 'Watch', 'Daniel Wellington Watch', 5000, 'Best-Minimalist-Watches-for-Men.jpg'),
(30, 3, 'Stainless Steel Watch', 'Gucci Black Stainless Steel Watch for Men 2016', 2500, 'gucci-mens-watch-2016.jpeg'),
(31, 3, 'Watch', 'Wrist Watches For Men 2015', 6500, 'watches-for-men.jpg'),
(32, 3, 'Wallet', 'Men Hasp Wallet Leather Purse Trifold Wallets For Man High Quality Big Capacity Credit Crad Holders', 1200, '-font-b-Men-b-font-Hasp-font-b-Wallet-b-font-font-b-Leather-b.jpg'),
(33, 3, 'Wallet', 'Men Hasp Wallet Leather Purse Trifold Wallets For Man High Quality Big Capacity Credit Crad Holders', 1100, 'Hot-Sale-Cowather-font-b-Mens-b-font-font-b-Wallets-b-font-Leather-Genuine-Luxury.jpg'),
(34, 3, 'Bag', 'Khaki-Leather-bag-Genuine-leather-canvas-bag-Men-', 3500, 'khaki-leather-bag-genuine-leather-canvas-bag-men-leather-satchel-briefcase-messenger-bag-laptop-bag-510x443.jpg'),
(35, 3, 'Bag', 'Khaki-Leather-bag-Genuine-leather-canvas-bag-Men-', 2500, 'New-2015-Hot-Sale-Fashion-Men-Business-Bags-Men-Genuine-Leather-Messenger-Bag-High-Quality-Man.jpg');

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
(9, 'Satish', 'Chaudhary', '5d41402abc4b2a76b9719d911017c592', 'satish4link@gmail.com', '1996-04-19', '9860776653', 'Male', '81558531c9b07a99216fe3d7120c58e2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
