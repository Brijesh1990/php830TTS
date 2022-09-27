-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 07:13 AM
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
-- Database: `sharddha-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Surat'),
(4, 1, 'Junagad'),
(5, 4, 'Bhopal'),
(6, 4, 'Indore'),
(7, 3, 'Jaipur'),
(8, 3, 'Udaipur'),
(9, 3, 'Kota'),
(10, 3, 'Mount abu'),
(11, 2, 'Varansi'),
(12, 2, 'Mathura'),
(13, 2, 'Agra'),
(14, 2, 'Mirzapur'),
(15, 2, 'Gaziabad'),
(16, 2, 'Pandeypur'),
(17, 2, 'Noida'),
(18, 2, 'Ayodya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `text_firstname` varchar(255) NOT NULL,
  `text_lastname` varchar(255) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `text_mobile` bigint(20) NOT NULL,
  `text_message` text NOT NULL,
  `text_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `text_firstname`, `text_lastname`, `text_email`, `text_mobile`, `text_message`, `text_datetime`) VALUES
(1, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi i am not able to find a customer care number please send us number', '20/09/2022 09:15:27 am'),
(2, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:20:04 am'),
(3, 'nikesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:23:49 am'),
(4, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:25:56 am'),
(5, 'hitesh', 'joshi', 'hitesh@gmail.com', 9998003879, 'hi', '20/09/2022 09:29:29 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `text_firstname` varchar(255) NOT NULL,
  `text_lastname` varchar(255) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `text_password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `upload_photo` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `text_phone` bigint(20) NOT NULL,
  `text_address` text NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `text_rdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `text_firstname`, `text_lastname`, `text_email`, `text_password`, `dob`, `upload_photo`, `gender`, `text_phone`, `text_address`, `sid`, `ctid`, `text_rdatetime`) VALUES
(1, 'charmi', 'pandya', 'charmithummar444@gmail.com', 'Y2hhcm1pJCQxMjM=', '2022-09-24', 'uploads/customers/brijesh.jpg', 'female', 9998003879, '150 feet ring road rajkot', 1, 1, '24/09/2022 09:22:56 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `sname`) VALUES
(1, 'gujrat'),
(2, 'uttar pradesh'),
(3, 'Rajsthan'),
(4, 'Madhya pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
