-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 12:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbluabf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `acctid` int(5) NOT NULL,
  `emailadd` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`acctid`, `emailadd`, `username`, `password`, `usertype`) VALUES
(5, 'raphaelchase302@gmail.com', 'theChis!', '$2y$10$Y3qoGSVo6UxR4XozLLyV7OAD7wWhwypW5WZDn0a1Q2Yguw4OsyvdC', ''),
(7, 'slammkhelmer@gmail.com', 'Requiem53', '$2y$10$NGBeSMG3nGth6pAmxjaL1eTezyx8SJUPwox2liFsJVjfvkfxpahei', ''),
(8, 'carlveloso@gmail.com', 'Vsucram', '$2y$10$dx/l7t2hNUq2EIMHsUQ/ouWrGBiulZ/M/hr6oTN0tvJZ.JDImCPZ.', ''),
(9, 'markbaring926@gmail.com', 'xfinity', '$2y$10$ryiUWix.6/UjV75GUXrDGOuvAVxM6/Zo6oJ7XbB14aW9kIDcTfUrG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`acctid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
