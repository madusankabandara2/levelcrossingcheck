-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 09:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `dbId` int(11) NOT NULL,
  `dbDate` varchar(12) NOT NULL,
  `dbName` varchar(50) NOT NULL,
  `dbTime` varchar(6) NOT NULL,
  `dbACPower` varchar(4) NOT NULL,
  `dbDCPower` varchar(4) NOT NULL,
  `dbLR` varchar(4) NOT NULL,
  `dbLight` varchar(4) NOT NULL,
  `dbStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`dbId`, `dbDate`, `dbName`, `dbTime`, `dbACPower`, `dbDCPower`, `dbLR`, `dbLight`, `dbStatus`) VALUES
(71, '2022-05-31', 'Mattala - WLD', '23:52', 'ON', 'OFF', 'OFF', 'OFF', 'DC Fail'),
(72, '2022-06-18', 'Japura - KUE', '22:50', 'OFF', 'OFF', 'ON', 'ON', 'Power Fail'),
(73, '2022-06-09', 'Colombo - FVT', '12:58', 'OFF', 'OFF', 'ON', 'ON', 'Power Fail'),
(74, '2022-02-01', 'Japura - KUE', '22:56', 'ON', 'OFF', 'ON', 'ON', 'DC Fail'),
(75, '2022-01-04', 'Mattala - WLD', '09:09', 'ON', 'ON', 'ON', 'ON', 'Normal'),
(76, '', '', '', '', '', '', '', 'Check'),
(77, '2022-3-3', 'Colombo - FVT', '20:20', 'ON', 'ON', 'ON', 'ON', 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`dbId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `dbId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
