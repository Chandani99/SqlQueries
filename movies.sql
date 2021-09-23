-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 11:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviedetails`
--

CREATE TABLE `moviedetails` (
  `Sr. No` bigint(8) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LeadActor` varchar(50) NOT NULL,
  `LeadActress` varchar(50) NOT NULL,
  `YearOfRelease` year(4) NOT NULL,
  `DirectorName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviedetails`
--

INSERT INTO `moviedetails` (`Sr. No`, `Name`, `LeadActor`, `LeadActress`, `YearOfRelease`, `DirectorName`) VALUES
(1, 'BABY', 'Akshay Kumar', 'Tapsi Pannu', 2015, ' Neeraj Pandey'),
(2, 'Chhichhore', 'Sushant Singh Rajput', 'Shraddha Kapoor', 2019, 'Nitesh Tiwari'),
(3, 'M.S. Dhoni: The Untold Story', 'Sushant Singh Rajput', 'Disha Patani,Kiara Advani', 2016, 'Neeraj Pandey'),
(4, 'Lagaan', 'Aamir Khan', 'Gracy Singh', 2001, 'Ashutosh Gowariker'),
(5, '3 Idiots', 'Aamir Khan', 'Kareena Kapoor', 2009, 'Rajkumar Hirani'),
(6, 'Kesari', 'Akshay Kumar', 'Parineeti Chopra', 2019, 'Anurag Singh'),
(7, 'Saala Khadoos', 'R. Madhavan', 'Ritika Singh', 2016, 'Sudha Kongara Prasad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviedetails`
--
ALTER TABLE `moviedetails`
  ADD PRIMARY KEY (`Sr. No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviedetails`
--
ALTER TABLE `moviedetails`
  MODIFY `Sr. No` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
