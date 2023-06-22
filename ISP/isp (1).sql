-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 12:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `email` varchar(100) NOT NULL,
  `complain` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`email`, `complain`) VALUES
('arpon@gmail.com', 'Good Service\r\n'),
('arpon@gmail.com', '5* Services'),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `conpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `gender`, `mail`, `adres`, `pass`, `conpass`) VALUES
('Shuchi Brata Roy', 'Male', 'arpon@gmail.com', 'Nagbari , Golachipa', '09876', 'Passsword matched '),
('Md. Shahzad Hussain Rayied ', 'Male', 'rayied@gmail.com', 'West Dewbhog, narayanganj', '12345', '12345'),
('Md. Shahzad Hussain Rayied ', 'Male', 'ss@gmail.com', 'West Dewbhog, narayanganj', '098765', 'Passsword matched ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `router` varchar(100) NOT NULL,
  `range` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`router`, `range`, `price`) VALUES
('TP-Link', '150-200 sqr feet', 'BDT 2000.00'),
('Asus', '400 sqr feet', 'BDT 5500.00'),
('WAV-LINK', '250-500 sqr feet', 'BDT 2500.00'),
('Tenda-150', '100 sqr feet', 'BDT 1650.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
