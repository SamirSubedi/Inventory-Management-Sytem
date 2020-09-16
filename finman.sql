-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 02:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finman`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`, `permission`, `addedby`, `date`) VALUES
(1, 'Ishwor', 'admin', 'Administrator', '', '0000-00-00'),
(2, 'ram', 'ram', 'Guest', 'Ishwor', '2019-08-09'),
(3, 'samir', 'admin', 'Administrator', 'Ishwor', '2020-03-13'),
(4, 'hero', '123', 'Guest', 'samir', '2020-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `vatno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(150) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdes` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `updatedate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updatedby` varchar(200) NOT NULL,
  `invoiceno` int(255) NOT NULL,
  `changemadeby` varchar(255) NOT NULL,
  `updatedqn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdes`, `quantity`, `updatedate`, `updatedby`, `invoiceno`, `changemadeby`, `updatedqn`) VALUES
(5, 'Kinderjoy', 'dsadsad', 2840, '2019-08-23 08:06:41.000000', 'Ishwor', 1010, 'SALES', '- 140'),
(6, 'Snickers', 'nnn', 9320, '2019-08-23 08:06:41.000000', 'Ishwor', 1010, 'SALES', '- 170'),
(7, 'RedBull', 'wwerew', 3250, '2019-08-23 08:06:41.000000', 'Ishwor', 1010, 'SALES', '- 60'),
(8, 'Digestive', 'ghghfn', 5170, '2019-08-23 08:06:41.000000', 'Ishwor', 1010, 'SALES', '- 100'),
(9, 'Vita-Milk', 'dbsk', 4000, '2019-08-16 06:11:30.852728', 'Ishwor', 1003, 'SALES', '- 36'),
(10, 'Cadbury', 'kkjjhjv', 1291, '2019-08-09 12:40:32.000000', 'Ishwor', 878, 'PURCHASE', '+ 541');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pid` int(100) NOT NULL,
  `bno` int(100) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdetail` varchar(551) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `pdate` date NOT NULL,
  `quantity` bigint(100) NOT NULL,
  `price` bigint(100) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pid`, `bno`, `pname`, `pdetail`, `supplier`, `pdate`, `quantity`, `price`, `image`) VALUES
(6, 145, 'Kinderjoy', 'hjhjghg', 'Vishal Group', '2019-07-19', 800, 50, 'samir.JPG'),
(7, 45, 'Kinderjoy', 'asdasd', 'Vishal Group', '2019-08-09', 600, 60, 'Screenshot (1).png'),
(8, 554, 'Digestive', 'fdsfds', 'Vishal Group', '2019-08-20', 220, 62, 'Screenshot (5).png'),
(9, 878, 'Cadbury', 'dsfdsf', 'Vishal Group', '2019-08-13', 541, 55, 'Screenshot (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(100) NOT NULL,
  `Pname` varchar(500) NOT NULL,
  `Party` varchar(230) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `pmt` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `sman` varchar(200) NOT NULL,
  `discount` int(255) NOT NULL,
  `vat` bigint(255) NOT NULL,
  `invno` int(255) NOT NULL,
  `enteredby` varchar(255) NOT NULL,
  `entereddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `Pname`, `Party`, `quantity`, `price`, `pmt`, `area`, `date`, `sman`, `discount`, `vat`, `invno`, `enteredby`, `entereddate`) VALUES
(1, 'Kinderjoy', 'Retail', 400, 50, 'Cash', 'Manmaiju', '2019-07-26', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(2, 'Kinderjoy', 'Wholesale', 100, 50, 'Credit', 'Gongabu', '2019-07-06', 'Vishal Group', 0, 0, 0, '', '0000-00-00 00:00:00'),
(3, 'Kinderjoy', 'Wholesale', 50, 50, 'Cheque', 'Naranthan', '2019-07-18', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(4, 'Kinderjoy', 'Retail', 400, 50, 'Cheque', 'Hattisar', '2019-07-18', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(5, 'Kinderjoy', 'Retail', 300, 55, 'Cheque', 'gkg', '2019-07-18', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(6, ' Kinderjoy', 'Ram Stores', 10, 0, 'Cheque', 'dsadsa', '2019-08-07', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(7, ' Kinderjoy', 'ghffgfgh', 20, 0, 'Cheque', 'hgffgfghfhg', '2019-08-08', 'Samir', 0, 0, 0, '', '0000-00-00 00:00:00'),
(8, ' RedBull', 'ghfghfghf', 20, 0, 'Cheque', 'hjghgh', '2019-08-07', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(9, ' RedBull', 'WHOLESALE', 50, 0, 'Cheque', 'ygygygygygjj', '2019-08-07', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(10, ' RedBull', 'WHOLESALE', 50, 0, 'Cheque', 'jhgjhgjghgvjvj', '2019-08-07', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(61, ' Snickers', 'dgfdgdf', 66, 52, 'Cheque', 'dsfsdfds', '2019-08-09', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(62, ' Kinderjoy', 'ghhgc', 50, 0, 'Cheque', 'hkjhkjh', '2019-08-08', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(63, ' Kinderjoy', 'ghhgc', 50, 0, 'Cheque', 'dgdgfgfd', '2019-08-08', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(64, ' Kinderjoy', 'zxzdsds', 100, 55, 'Cheque', 'vxcxvcxvcx', '2019-08-08', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(65, ' Snickers', 'zxzdsds', 150, 40, 'Cheque', 'vxcxvcxvcx', '2019-08-08', 'Samir', 0, 0, 1111, '', '0000-00-00 00:00:00'),
(66, ' Kinderjoy', 'Yes Mart', 120, 57, 'Cash', 'Gongabu', '2019-08-15', 'Samir', 0, 0, 2147483647, '', '2019-08-16 06:23:22'),
(67, ' Snickers', 'Om Mart', 240, 48, 'Cash', 'Gongabu', '2019-08-15', 'Samir', 0, 0, 2147483647, '', '0000-00-00 00:00:00'),
(68, ' RedBull', 'Om Mart', 140, 88, 'Cash', 'Gongabu', '2019-08-15', 'Samir', 0, 0, 2147483647, '', '0000-00-00 00:00:00'),
(69, ' Kinderjoy', 'Grace  Mart', 88, 65, 'Cheque', 'Baniyatar', '2019-08-09', 'Samir', 0, 0, 2147483644, 'Ishwor', '2019-08-08 18:15:00'),
(70, ' Snickers', 'Grace  Mart', 63, 67, 'Cheque', 'Baniyatar', '2019-08-09', 'Samir', 0, 0, 2147483644, 'Ishwor', '2019-08-08 18:15:00'),
(71, ' Cadbury', 'Grace  Mart', 50, 69, 'Cheque', 'Baniyatar', '2019-08-09', 'Samir', 0, 0, 2147483644, 'Ishwor', '2019-08-08 18:15:00'),
(72, ' Kinderjoy', 'Sai Mart', 44, 48, 'Cheque', 'Gongabu', '2019-08-08', 'Samir', 0, 0, 2147483647, 'Ishwor', '2019-08-08 18:15:00'),
(73, ' Snickers', 'Sai Mart', 20, 44, 'Cheque', 'Gongabu', '2019-08-08', 'Samir', 0, 0, 2147483647, 'Ishwor', '2019-08-08 18:15:00'),
(78, ' Kinderjoy', 'sadsadsa', 5, 87, 'Cheque', 'dsadasd', '2019-08-08', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-09 11:36:15'),
(79, ' Snickers', 'sadsadsa', 7, 88, 'Cheque', 'dsadasd', '2019-08-08', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-09 11:36:15'),
(80, ' Kinderjoy', 'Ram Traders', 4, 45, 'Cheque', 'jygjygyj', '2019-08-09', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-16 06:23:01'),
(81, ' Snickers', 'hjgyj', 2, 48, 'Cheque', 'jygjygyj', '2019-08-09', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-09 11:44:39'),
(82, ' Kinderjoy', 'Hari Stores', 45, 54, 'Cheque', 'sdsadas', '2019-08-14', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-16 06:22:52'),
(83, ' Snickers', 'fdsfdsfsd', 54, 45, 'Cheque', 'sdsadas', '2019-08-14', 'Samir', 0, 0, 1000, 'Ishwor', '2019-08-09 12:44:14'),
(86, ' Kinderjoy', 'hjghj', 50, 48, 'Cheque', 'hjghjghj', '2019-08-09', 'Samir', 0, 0, 1001, 'Ishwor', '2019-08-09 13:22:06'),
(87, ' Snickers', 'Homely Grocery', 44, 87, 'Cheque', 'nmbmb', '2019-08-16', 'Samir', 0, 0, 1002, 'Ishwor', '2019-08-16 06:24:04'),
(88, ' RedBull', 'Himalayan Mart', 91, 54, 'Cheque', 'hjvjhv', '2019-08-23', 'Samir', 0, 0, 1003, 'Ishwor', '2019-08-16 06:22:15'),
(89, ' Vita-Milk', 'Sales Mart', 36, 45, 'Cheque', 'hjvjhv', '2019-08-23', 'Samir', 0, 0, 1003, 'Ishwor', '2019-08-16 06:23:33'),
(90, ' Kinderjoy', 'Basundhara Mart', 110, 56, 'Cheque', 'GONGABU', '2019-08-15', 'Samir', 0, 0, 1004, 'Ishwor', '2019-08-16 06:26:25'),
(91, ' Snickers', 'Family Mart', 48, 57, 'Cheque', 'GONGABU', '2019-08-15', 'Samir', 0, 0, 1004, 'Ishwor', '2019-08-16 06:24:17'),
(92, ' RedBull', 'Shiva Traders', 88, 57, 'Cheque', 'GONGABU', '2019-08-15', 'Samir', 0, 0, 1004, 'Ishwor', '2019-08-16 06:24:34'),
(93, ' Digestive', 'Rumba Mart', 110, 59, 'Cheque', 'GONGABU', '2019-08-15', 'Samir', 0, 0, 1004, 'Ishwor', '2019-08-16 06:25:52'),
(94, ' Kinderjoy', 'Ramanada Traders', 44, 65, 'Cheque', 'Lekhnath', '2019-08-15', 'Samir', 2, 0, 1005, 'Ishwor', '2019-08-15 08:40:01'),
(95, ' Snickers', 'Ramanada Traders', 55, 69, 'Cheque', 'Lekhnath', '2019-08-15', 'Samir', 2, 0, 1005, 'Ishwor', '2019-08-15 08:40:01'),
(96, ' Kinderjoy', 'fdgfd', 20, 10, 'Cheque', 'vvv', '2019-08-15', 'Samir', 0, 0, 1006, 'Ishwor', '2019-08-15 08:55:11'),
(97, ' Kinderjoy', 'fdsfdsf', 44, 55, 'Cheque', 'ygjygjyg', '2019-08-09', 'Samir', 6, 55255522, 1007, 'Ishwor', '2019-08-15 09:36:26'),
(99, ' Kinderjoy', 'Himalayan Mini Mart', 180, 57, 'Cheque', 'Naxal', '2019-08-09', 'Samir', 3, 60068587, 1009, 'Ishwor', '2019-08-16 02:26:43'),
(100, ' Snickers', 'Himalayan Mini Mart', 210, 59, 'Cheque', 'Naxal', '2019-08-09', 'Samir', 3, 60068587, 1009, 'Ishwor', '2019-08-16 02:26:43'),
(101, ' RedBull', 'Himalayan Mini Mart', 300, 88, 'Cheque', 'Naxal', '2019-08-09', 'Samir', 3, 60068587, 1009, 'Ishwor', '2019-08-16 02:26:43'),
(102, ' Digestive', 'Himalayan Mini Mart', 20, 110, 'Cheque', 'Naxal', '2019-08-09', 'Samir', 3, 60068587, 1009, 'Ishwor', '2019-08-16 02:26:43'),
(103, ' Kinderjoy', 'Grace Mini Mart', 140, 58, 'Cash', 'Baniyatar', '2019-08-23', 'Samir', 2, 60568165, 1010, 'Ishwor', '2019-08-23 08:06:41'),
(104, ' Snickers', 'Grace Mini Mart', 170, 65, 'Cash', 'Baniyatar', '2019-08-23', 'Samir', 2, 60568165, 1010, 'Ishwor', '2019-08-23 08:06:41'),
(105, ' RedBull', 'Grace Mini Mart', 60, 70, 'Cash', 'Baniyatar', '2019-08-23', 'Samir', 2, 60568165, 1010, 'Ishwor', '2019-08-23 08:06:41'),
(106, ' Digestive', 'Grace Mini Mart', 100, 100, 'Cash', 'Baniyatar', '2019-08-23', 'Samir', 2, 60568165, 1010, 'Ishwor', '2019-08-23 08:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `sid` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `slast` varchar(200) NOT NULL,
  `sphone` bigint(200) NOT NULL,
  `sdate` date NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`sid`, `sname`, `slast`, `sphone`, `sdate`, `saddress`, `image`) VALUES
(1, 'Samir ', 'Subedi', 9861282140, '2019-07-10', 'Gongabu', 'samir.JPG'),
(3, 'etfgfd', 'gsdfgfds', 545454, '2019-08-28', 'gfdgfd', 'bhanu.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sid` int(100) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `sphone` bigint(255) NOT NULL,
  `saddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sid`, `sname`, `semail`, `sphone`, `saddress`) VALUES
(1, 'Vishal Group', 'annsa@gmai.com', 98612521470, 'wdfdwf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
  MODIFY `sid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
