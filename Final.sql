-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 10:44 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(20) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_no` varchar(15) NOT NULL,
  `product_id` int(20) NOT NULL,
  `customer_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_address`, `customer_email`, `customer_no`, `product_id`, `customer_pass`) VALUES
('fz', 'fasdasdasdsada', 'adada@gmail.com', '12212121212', 0, 'cf4bc985bb09b19d2f5914adbf8597da');

-- --------------------------------------------------------

--
-- Table structure for table `delivered`
--

CREATE TABLE `delivered` (
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_no` varchar(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivered`
--

INSERT INTO `delivered` (`customer_name`, `customer_email`, `customer_no`, `product_id`, `delivery_date`) VALUES
('', '', '', 0, '2017-12-28'),
('fz', 'adada@gmail.com', '12212121212', 6, '2017-12-28'),
('', '', '', 0, '2017-12-28'),
('fz', 'adada@gmail.com', '12212121212', 6, '2017-12-28'),
('', '', '', 0, '2017-12-28'),
('fz', 'adada@gmail.com', '12212121212', 9, '2017-12-28'),
('fz', 'adada@gmail.com', '12212121212', 10, '2017-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(15) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_no` varchar(15) NOT NULL,
  `product_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `order_date`, `customer_email`, `customer_no`, `product_id`) VALUES
(1, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 1),
(3, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 6),
(4, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 10),
(5, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 4),
(6, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 7),
(7, 'fz', '2017-12-28', 'adada@gmail.com', '12212121212', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(15) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` varchar(1000) DEFAULT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_price` float NOT NULL,
  `supplier_id` int(25) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_quantity`, `product_price`, `supplier_id`, `image`) VALUES
(1, 'UBANTE Digit', 'Electronic Micrometer with Large Display - Inch / Metric Conversion 0-1 ', 25, 58, 11, '71VLS3YbclL._SL1500_.jpg'),
(2, 'Directional Control Valv', 'Prince RD522CCAA5A4B1 Directional Control Valve, Two Spool, 4 Ways, 3 Positions, Tandem Center, Cast Iron, 3000 psi, Lever Handle, 25 gpm, In/Out: 3/4', 26, 200.99, 11, '81H7wwjsL-L._SL1500_.jpg'),
(4, 'SACAM Wireless ', 'SACAM Wireless 720P Network Security CCTV IP Camera Night Vision WiFi Webcam Pan Tilt Home Surveillance Alarm System OEM WANSCAM', 4, 25.67, 10, 'SACAM-Wireless-720P-Network-Security-CCTV-IP-Camera-Night-Vision-WiFi-Webcam-Pan-Tilt-Home-Surveillance.jpg_640x640.jpg'),
(5, 'body thermometer', 'Basal Thermometer from Fairhaven Health - Free shipping, specifically for BBT charting purposes, reads to 1/100th of a degree and features memory recall.', 6, 23.4, 10, 'body tharmometer.jpg'),
(7, 'Glass Slide', 'This is a 25-piece very nice microscope prepared slide set of various plants, insects and/or animal tissues. The slides are cover-slipped and preserved in cedar wood oil. All slides are carefully labe... AmScope 144 Pre-Cleaned Blank Microscope Slides & 200 22x22mm Square Cover Glass.', 7, 13.5, 10, 'Glass Slide.jpg'),
(8, 'Binocular', 'Optics Vanquish 10x26 Reverse Porro Prism Binocular. ... Bushnell Legend Ultra HD Compact Waterproof Binoculars 10x26. ', 7, 67.4, 11, 'binocular.jpg'),
(9, 'Graduated Cylinders', 'Scientific Glass Graduated Cylinder measuring cylinder 10ml 25ml 50ml 100ml. ... 4pcs Clear Measuring Plastic Graduated Cylinder Cup 10ml / 25ml / 50ml / 100ml. ... 4 PIXNOR Transparent Measuring Plastic Graduated Cylinder 10ml / 25ml / 50ml / 100ml.', 9, 3.4, 11, 'Graduated Cylinders.jpg'),
(10, 'Florence Flask', 'BOILING FLASK 500mL 500 mL BOROSILICATE GLASS Irregular. ... 100mL Florence Boiling Flask; Flat bottom; Eisco Labs Premium Borosilicate Glass; Narrow neck; Beaded Rim.', 3, 33.6, 11, 'Florence Flask.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(25) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_no` varchar(15) NOT NULL,
  `supplier_adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_no`, `supplier_adress`) VALUES
(10, 'Fazley ', '01681231269', 'Dhaka'),
(11, 'Oishy', '016000000', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) DEFAULT NULL,
  `user_no` int(15) DEFAULT NULL,
  `u_first_name` varchar(10) NOT NULL,
  `u_last_name` varchar(10) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_address` varchar(50) DEFAULT NULL,
  `u_pass` varchar(50) NOT NULL,
  `edit_product` varchar(10) DEFAULT NULL,
  `remove_product` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_no`, `u_first_name`, `u_last_name`, `u_email`, `u_address`, `u_pass`, `edit_product`, `remove_product`) VALUES
(NULL, NULL, 'as', 'ss', 'abc@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL),
(NULL, NULL, 'asda', 'asda', 'adsas@aa', NULL, '7815696ecbf1c96e6894b779456d330e', NULL, NULL),
(NULL, NULL, 'anika', 'anan', 'ass@jo.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL),
(NULL, NULL, 'fa', 'aa', 'fasf@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL),
(NULL, NULL, 'Fazley', 'Rabbi', 'fazleybiswas143@gmail.com', NULL, 'a60c8f207a31b7c56fc100f7b3fe305a', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`) USING BTREE,
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
