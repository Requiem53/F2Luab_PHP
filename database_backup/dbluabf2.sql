-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 12:20 PM
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
-- Table structure for table `tblgamesbought`
--

CREATE TABLE `tblgamesbought` (
  `transactionID` int(5) NOT NULL,
  `userID` int(200) NOT NULL,
  `gameBought` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgamesbought`
--

INSERT INTO `tblgamesbought` (`transactionID`, `userID`, `gameBought`) VALUES
(4, 72, 1),
(5, 72, 2),
(6, 72, 3),
(7, 72, 4),
(8, 73, 1),
(9, 73, 2),
(10, 73, 4);

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
(5, '32423', 'adad', 342, 'asda', 'si loonie yon ah'),
(6, 'LabExercise12', 'Developer publishes game', 1200, 'KIsteria', 'Luab');

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
(38, 'test@gmail.com', 'theChis!', '$2y$10$qMyxP8oq28DrPXN8NGPxj.BuVApZVE92aFBR5abktaVQ.MYkDLJRe', ''),
(39, 'tester@gmail.com', 'Vsucram', '$2y$10$fkcygv.eS/kc5q6zY9WmhOXCUdKJs3zEcgJ02ADdYsbVNS0BvijCG', ''),
(40, 'asdasd@gmail.com', 'Vsu', '$2y$10$gg2tFOUEbPprDqWihmB.PenvnoZinpgiEib23EFwH5Qg.tvQrZo/2', ''),
(41, 'asdasdad@gmail.com', 'Vtest', '$2y$10$kESom2M8./tIlnuU1TPI4.FYT/sh4/3/GlPbhFFclOSa.abAjJZES', ''),
(42, 'asdasd@gmail.com', 'Vcrum', '$2y$10$81Ftjhe.3kLXAnRGfPItsOZLHekA0Y7p1FuPdUs5oxm3PU4D2pFGi', ''),
(43, 'asdasd', 'Vasdasd', '$2y$10$UIoepkoe9sva1V9EI7bPr.S6H7aDcIWBQbt0VfZNtGbpk/gwqIami', ''),
(44, 'asdad', 'asdfad', '$2y$10$mW7ivwYg6ZCo7I40nU3dauVTfbcRDhTBrjRES279FInks.l3mfApW', ''),
(45, 'asdasd', 'Vraa', '$2y$10$JnKogdFQsWmuno0EM0cib.niGmw5fh9BDMP13/QB/LfOjEor6/.ty', ''),
(46, 'sadad', 'asdasd', '$2y$10$r2uKmkl9bNNt7M2xtsnsHONYXJG0XM3jX1NX4gAOpVam7GzqyTO8e', ''),
(47, '1212asd', 'Vasda', '$2y$10$zwih5zArdF765ULWtvZKhe1r/U3G6xAPz.WSgi1zcj8GeUgBmBBLu', ''),
(48, 'asdasd', 'Vasd', '$2y$10$8qmJTJBs9yZApTy6ae8Zk.z/P/Em.onRavxfJvXsSofWzeTyNKdYm', ''),
(49, 'chase@gmail.com', 'ChaseOsoria', '$2y$10$vdbHRlW7aAwKQ1.8az3yWOitnT1akUfLWF8UZelBjsmfhYzsLQ3tu', ''),
(50, 'ma@gmail.com', 'KahitSandaliiiii', '$2y$10$UHOKAaNkaQPJEjFjzwwKRuTz/3LJDASNbWlSq29iXrmD2gVOK5Eom', ''),
(51, 'sm@gmail.com', 'Mark', '$2y$10$VsuFJBMDJZLb.dNlUbnmWu6OVNoWcgVpi/qtr/1Okm4EJi51T0JIi', ''),
(52, 'asda', 'asdad', '$2y$10$AuVVgSv49dwWESyWgaBri.rG/N8AxpsNPk5.jjIxBYjLOr2mr0n0e', ''),
(53, 'as', 'as', '$2y$10$T7pKQXGsQrRbfQm0fV.maetXYqFRcI5yWa/FakSVSNF4x4k2SNhm2', ''),
(54, '1234', 'asasa', '$2y$10$7Qf4ZPSvGAGDOlMvqK98eONeYIlkt/UY975fLmGcU8fBRpFGtBddG', ''),
(55, 'as', 'asas', '$2y$10$WLzCL5VXxzsHeNiCUml9L.NgknHvi1MPAaWGdEG6mbUdwVlOMOVtm', ''),
(56, 'asdas', 'any and every', '$2y$10$gMNTvZE.kqPIuw64saQZjOLaTD3zo7c0sFzK0EScJ5sb5D1JPXP76', ''),
(57, 'asd', 'asa', '$2y$10$kAatv86OLdtbLx8gFopamuDibcBgDgNzOq3KfCx1cELs0YLph9.My', ''),
(58, 'asda', 'tears', '$2y$10$Bgflc/tTZTh7uaMoBPJdiOgRVdXh8WrBl/UnusCnx8c8iJ4kNp4cy', ''),
(59, '1234', 'asdaddddd', '$2y$10$LfzcA2nCSVqgJsTW.nSopuHR4rda7oKpWo8PxTe5j7ulzD3oTopya', ''),
(60, '1242314', 'tasasa', '$2y$10$rv0zcSIf7XDT8Enf19V1e.5vmwpogZUhTWGdiuoifqLll9ipzDMCK', ''),
(61, '12', '12', '$2y$10$SrCGOBSUpbqUT1m2cUCsfeUtV/OW6vGI.EgwidasHGbFUQL.HQ0bS', ''),
(62, '12qdsf', '1234', '$2y$10$CY7D45RcjPT5fUIysZRqcuiWGca3gR/uW.iTyeiI3akb8A.hKqJXm', ''),
(63, 'asdas', 'testy', '$2y$10$l.khhyOPSvnC8rtOCdiXeOdKOAqmH67Udv3tnHXPAXQRD2q1pU/BC', ''),
(64, '12sda', 'stars', '$2y$10$Fa1kfWSWjaJNTsLEDLKFbO5HT9ktJdf9BQogeiW0m5XrDPaNJpwde', ''),
(65, 'asda', 'agaaaa', '$2y$10$1olQODU4m0IOA7eGrvLESuwtAbrRcVcidZ8ixCPsrAPSRB2sC/wna', ''),
(66, 'asda', 'agaaaar', '$2y$10$PaIqGxanh3hCcN3OPd13PeG5yvA2MFVW6uJHKN3SN5M4Ol36yBVtG', ''),
(67, 'asda', 'agaaaarasd', '$2y$10$sbafNxTDoI2OqkNuNBOCy.BCcT32tVu6Sw4/0dEQIMCDVdoLa1pTW', ''),
(68, 'asda', 'agaaaarasds', '$2y$10$RIFBrsLgexucWO90hWWSZO2mGUDLGHJLK4YdXzK6J1qX5XV4Bj/X.', ''),
(69, 'asdasd', 'weare', '$2y$10$iAIRM6MLOXx/xGvxDMHPpuj4YpH6nOvli9XTGw.z.q1gbvkN2cHaW', ''),
(70, 'waeea', 'asdasdsd', '$2y$10$OKofgP22SGtdogLD3u3hheIwfyLrCqdE0RShe4tkEh9gvWT8Xr7Va', ''),
(71, 'sdfsdf', 'chaser', '$2y$10$2r9zSgycJUsvECAfOBfRyu8v1Dv4s7YKmDdv1FeiVEKFimcb7bL7y', ''),
(72, 'testdeveloper@gmail.com', 'TestDeveloper', '$2y$10$.UIEENawflFXoLS1T.rnWu2.TBOcNayOtWR/Uu9dY9ZT1qYOR7NlK', ''),
(73, 'LabExercise12Kisteria@gmail.com', 'LabExercise12Kisteria', '$2y$10$3fT9dcHA3Uxy0REhuRIOCuedqoQJqB4Zss7v7tMEOqZVOaD7nP.76', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `userid` int(5) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `acctid` int(5) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`userid`, `firstname`, `lastname`, `gender`, `acctid`, `birthday`) VALUES
(38, 'Slamm', 'Luab', 'Male', 38, '2024-04-06'),
(39, 'Carl ', 'Veloso', 'Male', 39, '2024-04-06'),
(40, 'test', 'test', 'Female', 40, '2024-04-06'),
(41, 'Vsu', 'Cram', 'Male', 41, '2024-04-06'),
(42, 'TEster', 'adfkjllajk', 'Male', 42, '2024-04-06'),
(43, 'SAD', 'asdasd', 'Male', 43, '2024-04-06'),
(44, 'asdasd', 'asdasd', 'Other', 44, '2024-04-22'),
(45, 'asas', 'asas', 'Male', 45, '2024-04-06'),
(46, 'asdasd', 'asdasd', 'Female', 46, '2024-04-06'),
(47, 'SAD', 'asdasd', 'Male', 47, '2024-04-06'),
(48, 'SADA', 'aASDAS', 'Female', 48, '2024-04-06'),
(49, 'Cchase', 'Osoria', 'Prefer not to say', 49, '2024-04-08'),
(50, 'main', 'main', 'Prefer not to say', 50, '2024-04-08'),
(51, 'Baring', 'Baring', 'Prefer not to say', 51, '2024-04-08'),
(52, 'asdasd', 'asdasd', 'Male', 52, '2024-05-10'),
(53, 'as', 'as', 'Male', 53, '2024-04-08'),
(54, 'asadasd', 'sdad', 'Female', 54, '2024-04-08'),
(55, 'asas', 'asas', 'Other', 55, '2024-04-18'),
(56, '1212', 'asdasd', 'Male', 56, '2024-04-09'),
(57, 'asa', 'asas', 'Female', 57, '2024-04-09'),
(58, 'asad', 'asda', 'Female', 58, '2024-04-09'),
(59, 'asdasd', 'asdasd', 'Female', 59, '2024-04-09'),
(60, 'asa', 'asasd', 'Female', 60, '2024-04-09'),
(61, '12', '12', 'Female', 61, '2024-04-09'),
(62, '12', '123rwe', 'Female', 62, '2024-04-09'),
(63, 'asdfas', 'asdasd', 'Female', 63, '2024-04-09'),
(64, 'asdasd', 'asdasd', 'Other', 64, '2024-04-09'),
(65, 'asdasd', 'asdasd', 'Male', 65, '2024-04-09'),
(66, 'asdasd', 'asdasd', 'Male', 66, '2024-04-09'),
(67, 'asdasd', 'asdasd', 'Male', 67, '2024-04-09'),
(68, 'asdasd', 'asdasd', 'Male', 68, '2024-04-09'),
(69, 'asdfasd', 'asdasd', 'Male', 69, '2024-04-09'),
(70, 'asasd', 'asdasd', 'Male', 70, '2024-04-09'),
(71, 'sdfsdf', 'sdfsdf', 'Prefer not to say', 71, '2024-04-09'),
(72, 'Test', 'Developer', 'Prefer not to say', 72, '2024-04-13'),
(73, 'Lab', '12', 'Female', 73, '2024-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgamesbought`
--
ALTER TABLE `tblgamesbought`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `acctid` (`acctid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgamesbought`
--
ALTER TABLE `tblgamesbought`
  MODIFY `transactionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpublishgame`
--
ALTER TABLE `tblpublishgame`
  MODIFY `gameID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
