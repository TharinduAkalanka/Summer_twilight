-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 06:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `invoice` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `zip` varchar(7) NOT NULL,
  `confirm` varchar(10) NOT NULL,
  `weddingdate` date NOT NULL,
  `package` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`invoice`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `district`, `zip`, `confirm`, `weddingdate`, `package`) VALUES
(1, 'Tharindu', 'Akalanka', 'tharinduchessmail@gm', '1231232323', 'Kendalanda Road', 'New Town', 'Rathnapura', 'asdasd', '70000', 'Confirmed', '2020-03-26', 2),
(2, 'Tharindu', 'Akalanka', 'tharinduchessmail@gm', '1231232323', 'Kendalanda Road', 'New Town', 'Rathnapura', 'asdasd', '70000', 'Confirmed', '2020-03-26', 2),
(3, 'kavindu', 'Akalanka', 'tharinduchessmail@gm', '1231232323', 'Kendalanda Road', 'New Town', 'Rathnapura', 'sad', '70000', 'Confirmed', '2020-03-20', 1),
(4, 'Tharindu', 'Akalanka', 'tharinduchessmail@gm', '1231232323', 'Kendalanda Road', 'New Town', 'Rathnapura', 'aasdasd', '70000', 'Confirmed', '2020-03-28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`invoice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `invoice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
