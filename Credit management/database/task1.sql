-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 06:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `log2`
--

CREATE TABLE `log2` (
  `amt` int(6) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log2`
--

INSERT INTO `log2` (`amt`, `id`) VALUES
(-100000, 3),
(2900, 1),
(5500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `name` varchar(255) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`name`, `id`) VALUES
('vikas', 1),
('nitesh', 2),
('null', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Credit` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`name`, `email`, `Credit`) VALUES
('rohit', 'rohit@gmail.com', 5646),
('Rahul', 'rahul@gmail.com', 7054),
('nitesh', 'nitesh@gmail.com', 5554),
('deepak', 'deepak@gmail.com', 6000),
('vikas', 'vikas@gmail.com', 2846),
('yash', 'yash@gmail.com', 3500),
('atul', 'atul@gmail.com', 4650),
('tarun', 'tarun@gmail.com', 5412),
('saurabh', 'saurabh@gmail.com', 6548),
('abhay', 'abhay@gmail.com', 3256);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
