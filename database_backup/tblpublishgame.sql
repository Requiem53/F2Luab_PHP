-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 09:42 AM
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
-- Table structure for table `tblpublishgame`
--

CREATE TABLE `tblpublishgame` (
  `gameID` int(5) NOT NULL,
  `nameofgame` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` int(20) NOT NULL,
  `developer` text NOT NULL,
  `publisher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpublishgame`
--

INSERT INTO `tblpublishgame` (`gameID`, `nameofgame`, `description`, `price`, `developer`, `publisher`) VALUES
(1, 'TesterGame', 'james baxter', 1200, 'james baxter', 'james baxter'),
(2, 'ASDAasd', 'asdasd', 12, 'asdasd', 'asdad'),
(3, 'talksjfl', 'talksjfl', 12453, 'talksjfl', 'talksjfl'),
(4, 'adfadf', 'asfda', 24, 'adfadf', 'adfadf'),
(5, '32423', 'adad', 342, 'asda', 'si loonie yon ah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  ADD PRIMARY KEY (`gameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  MODIFY `gameID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
