-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 02:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_id` int(100) NOT NULL,
  `appoint_date` date NOT NULL,
  `appoint_time` time(6) NOT NULL,
  `consul_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `appoint_date`, `appoint_time`, `consul_name`) VALUES
(12, '2021-01-07', '21:06:00.000000', 'nahid'),
(13, '2021-01-08', '18:46:00.000000', 'rashed');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `consul_name` varchar(20) NOT NULL,
  `consul_id` int(10) NOT NULL,
  `consul_password` int(20) NOT NULL,
  `consul_address` varchar(20) NOT NULL,
  `consul_phone` int(15) NOT NULL,
  `consul_mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`consul_name`, `consul_id`, `consul_password`, `consul_address`, `consul_phone`, `consul_mail`) VALUES
('nahid', 24, 123456, 'comilla', 187654432, 'nahid@gmail.com'),
('rashed', 25, 123456, 'dhaka', 187654432, 'rashed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(100) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `disease_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`, `disease_img`) VALUES
(10, 'scrab', 'anthracnose-1.jpg'),
(11, 'yellow leaf', 'unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `disease_discrip`
--

CREATE TABLE `disease_discrip` (
  `disease_id` int(100) NOT NULL,
  `crop_name` varchar(100) NOT NULL,
  `disease_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease_discrip`
--

INSERT INTO `disease_discrip` (`disease_id`, `crop_name`, `disease_name`) VALUES
(13, 'rice', 'scrab'),
(14, 'crown', 'yellow leaf');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_bill`
--

CREATE TABLE `farmer_bill` (
  `bill_id` int(100) NOT NULL,
  `medi_cost` int(100) NOT NULL,
  `consul_fee` int(100) NOT NULL,
  `tot_bill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_bill`
--

INSERT INTO `farmer_bill` (`bill_id`, `medi_cost`, `consul_fee`, `tot_bill`) VALUES
(14, 100, 400, 500),
(15, 300, 350, 650);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_info`
--

CREATE TABLE `farmer_info` (
  `farm_name` varchar(20) NOT NULL,
  `farm_id` int(10) NOT NULL,
  `farm_password` int(20) NOT NULL,
  `farm_address` varchar(20) NOT NULL,
  `farm_phone` int(15) NOT NULL,
  `farm_mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_info`
--

INSERT INTO `farmer_info` (`farm_name`, `farm_id`, `farm_password`, `farm_address`, `farm_phone`, `farm_mail`) VALUES
('shuvo', 24, 123456, 'lakshmipur', 191356789, 'shuvo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medi_id` int(100) NOT NULL,
  `medi_name` varchar(100) NOT NULL,
  `medi_dose` int(100) NOT NULL,
  `medi_apply_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medi_id`, `medi_name`, `medi_dose`, `medi_apply_time`) VALUES
(5, 'ttt', 3, '1 month'),
(6, 'kkk', 3, '2month');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treat_id` int(100) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `medi_name` varchar(100) NOT NULL,
  `medi_cost` int(100) NOT NULL,
  `consul_fee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treat_id`, `disease_name`, `medi_name`, `medi_cost`, `consul_fee`) VALUES
(11, 'scrab', 'ttt', 100, 400),
(12, 'yellow leaf', 'kkk', 300, 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consul_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `disease_discrip`
--
ALTER TABLE `disease_discrip`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `farmer_bill`
--
ALTER TABLE `farmer_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `farmer_info`
--
ALTER TABLE `farmer_info`
  ADD PRIMARY KEY (`farm_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medi_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `consul_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `disease_discrip`
--
ALTER TABLE `disease_discrip`
  MODIFY `disease_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `farmer_bill`
--
ALTER TABLE `farmer_bill`
  MODIFY `bill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `farmer_info`
--
ALTER TABLE `farmer_info`
  MODIFY `farm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
