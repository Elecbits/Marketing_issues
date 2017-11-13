-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 08:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flybuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(256) DEFAULT NULL,
  `pass` varchar(256) DEFAULT NULL,
  `desgn` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `pass`, `desgn`, `name`, `location`) VALUES
('abc@gmail.com', '12345', 'Senior Supervisor', 'ABC', '18.5199669,73.9420556|'),
('mem@mem.com', '12345', 'Employee', 'Member1', NULL),
('me2@me2.com', '12345', 'Employee', 'Member2', NULL),
('mem3@mem3.com', '12345', 'Employee', 'member3', NULL),
('mem4@mem4.com', '12345', 'Employee', 'member4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer` varchar(256) DEFAULT NULL,
  `coin` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `value` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer`, `coin`, `email`, `id`, `value`) VALUES
('yar', '100', 'kbc@gmail.com', 1, '60'),
('hello world', '70', 'kbc@gmail.com', 2, '60'),
('dfkhbej', '10', 'kbc@gmail.com', 3, '100');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `shop_name` varchar(256) DEFAULT NULL,
  `owner_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `category` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `hoarding` varchar(256) DEFAULT NULL,
  `offers` varchar(256) DEFAULT NULL,
  `coins` varchar(256) DEFAULT NULL,
  `sales` varchar(256) DEFAULT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`shop_name`, `owner_name`, `email`, `contact`, `category`, `address`, `location`, `hoarding`, `offers`, `coins`, `sales`, `pass`) VALUES
('KBC', 'Test', 'kbc@gmail.com', '', 'shopping', 'Pawar Public School Street, Amanora Park Town, Hadapsar, Pune, Maharashtra 411028, India', '18.519969,73.9420785|', 'sentiment_analysis_matlab.jpg', 'KNV,coin1|offer2,coin2|offer3,coin3', '294', '250', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
