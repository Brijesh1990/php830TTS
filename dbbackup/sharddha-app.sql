-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 06:19 AM
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
  `text_phone` bigint(20) NOT NULL,
  `text_address` text NOT NULL,
  `text_rdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `text_firstname`, `text_lastname`, `text_email`, `text_password`, `text_phone`, `text_address`, `text_rdatetime`) VALUES
(1, 'charmi', 'pandey', 'charmithummar444@gmail.com', 'MTIzNDU2', 9998003879, '150 feet ring road near alap green city', '20/09/2022 09:44:35 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
