-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 09:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Email` varchar(250) NOT NULL,
  `NIC` int(15) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `JobNo` int(5) NOT NULL,
  `Payments` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Email`, `NIC`, `Password`, `JobNo`, `Payments`, `Status`) VALUES
('patric@gmail.com', 2147483647, 'patric', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordertype` varchar(250) NOT NULL,
  `jobNo` int(100) NOT NULL,
  `dimensions` varchar(250) NOT NULL,
  `deadline` varchar(250) NOT NULL,
  `noOfUnits` int(100) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordertype`, `jobNo`, `dimensions`, `deadline`, `noOfUnits`, `Status`) VALUES
('cottom', 1, '66', '2020-10-30', 123, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(250) NOT NULL,
  `accountnum` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `amount` int(10) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `accountnum`, `email`, `amount`, `Status`) VALUES
('john patric', 1234567890, 'johnpatric@gmail.com', 50000, '');

-- --------------------------------------------------------

--
-- Table structure for table `workdetails`
--

CREATE TABLE `workdetails` (
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `EmailAddress` varchar(200) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `DOB` varchar(250) NOT NULL,
  `JobType` varchar(300) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workdetails`
--

INSERT INTO `workdetails` (`FirstName`, `LastName`, `Gender`, `MobileNumber`, `EmailAddress`, `Address`, `DOB`, `JobType`, `Status`) VALUES
('patric ', 'jane', 'Male', 123456789, 'patric@gmail.com', 'No12, Kings street, colombo', '1999-02-16', 'Stock Management', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
