-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 12:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parentalleave`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3d83d85e0166cda7ebc17029ba280cfd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1556706894, 'a:2:{s:9:\"user_data\";s:0:\"\";s:14:\"AllBenefitData\";a:28:{i:0;a:4:{s:7:\"Country\";s:7:\"Albania\";s:8:\"Holidays\";s:1:\"1\";s:9:\"Leavetype\";s:4:\"paid\";s:7:\"Details\";s:82:\"Mixed (Social security for maternity leave; employer liability for parental leave)\";}i:1;a:4:{s:7:\"Country\";s:7:\"Armenia\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:15:\"Social security\";}i:2;a:4:{s:7:\"Country\";s:7:\"Austria\";s:8:\"Holidays\";s:3:\"104\";s:9:\"Leavetype\";s:9:\"Flat Rate\";s:7:\"Details\";s:15:\"Social security\";}i:3;a:4:{s:7:\"Country\";s:10:\"Azerbaijan\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:9:\"Flat rate\";s:7:\"Details\";s:15:\"Social security\";}i:4;a:4:{s:7:\"Country\";s:7:\"Belarus\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:19:\"80% of minimum wage\";s:7:\"Details\";s:15:\"Social security\";}i:5;a:4:{s:7:\"Country\";s:7:\"Belgium\";s:8:\"Holidays\";s:2:\"17\";s:9:\"Leavetype\";s:9:\"Flat rate\";s:7:\"Details\";s:67:\"Mixed (3 days\' paternity leave employer liability; Social security)\";}i:6;a:4:{s:7:\"Country\";s:22:\"Bosnia and Herzegovina\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:6:\"unpaid\";s:7:\"Details\";s:75:\"Mixed (Social security maternity leave; employer liability paternity leave)\";}i:7;a:4:{s:7:\"Country\";s:8:\"Bulgaria\";s:8:\"Holidays\";s:3:\"104\";s:9:\"Leavetype\";s:39:\"Flat-rate for 52 weeks; unpaid reminder\";s:7:\"Details\";s:15:\"Social security\";}i:8;a:4:{s:7:\"Country\";s:7:\"Croatia\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:75:\"Mixed (Social security maternity leave; employer liability paternity leave)\";}i:9;a:4:{s:7:\"Country\";s:6:\"Cyprus\";s:8:\"Holidays\";s:2:\"13\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:15:\"Social security\";}i:10;a:4:{s:7:\"Country\";s:7:\"Denmark\";s:8:\"Holidays\";s:2:\"32\";s:9:\"Leavetype\";s:4:\"Paid\";s:7:\"Details\";s:34:\"Mixed (social security & employer)\";}i:11;a:4:{s:7:\"Country\";s:7:\"Estonia\";s:8:\"Holidays\";s:2:\"36\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:15:\"Social security\";}i:12;a:4:{s:7:\"Country\";s:7:\"Finland\";s:8:\"Holidays\";s:2:\"26\";s:9:\"Leavetype\";s:3:\"70%\";s:7:\"Details\";s:15:\"Social security\";}i:13;a:4:{s:7:\"Country\";s:6:\"France\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:9:\"Flat rate\";s:7:\"Details\";s:15:\"Social security\";}i:14;a:4:{s:7:\"Country\";s:9:\"Germany 	\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:50:\"67%, with a maximum, for 52 weeks; unpaid remainde\";s:7:\"Details\";s:44:\"Mixed (social security & employer liability)\";}i:15;a:4:{s:7:\"Country\";s:9:\"Greece 		\";s:8:\"Holidays\";s:2:\"17\";s:9:\"Leavetype\";s:7:\"Unpaid	\";s:7:\"Details\";s:75:\"Mixed (Social security maternity leave; employer liability paternity leave)\";}i:16;a:4:{s:7:\"Country\";s:7:\"Hungary\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:36:\"70% (up to a ceiling) for 104 weeks;\";s:7:\"Details\";s:35:\"flat rate remainder	Social security\";}i:17;a:4:{s:7:\"Country\";s:7:\"Iceland\";s:8:\"Holidays\";s:2:\"26\";s:9:\"Leavetype\";s:45:\"80%, with a maximum, for first 13 weeks each;\";s:7:\"Details\";s:16:\"unpaid remainder\";}i:18;a:4:{s:7:\"Country\";s:7:\"Ireland\";s:8:\"Holidays\";s:2:\"18\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:16:\"Social Security \";}i:19;a:4:{s:7:\"Country\";s:5:\"Italy\";s:8:\"Holidays\";s:2:\"26\";s:9:\"Leavetype\";s:4:\"30%	\";s:7:\"Details\";s:15:\"Social security\";}i:20;a:4:{s:7:\"Country\";s:11:\"Netherlands\";s:8:\"Holidays\";s:2:\"26\";s:9:\"Leavetype\";s:34:\"Unpaid but eligible for tax-breaks\";s:7:\"Details\";s:76:\"	Mixed (Social security maternity leave; employer liability paternity leave)\";}i:21;a:4:{s:7:\"Country\";s:6:\"Norway\";s:8:\"Holidays\";s:2:\"36\";s:9:\"Leavetype\";s:50:\"100% for 46 weeks or 80% for 56 weeks (up to a cei\";s:7:\"Details\";s:15:\"Social security\";}i:22;a:4:{s:7:\"Country\";s:6:\"Poland\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:50:\"60% for 26 weeks; flat rate for 104; unpaid remain\";s:7:\"Details\";s:15:\"Social security\";}i:23;a:4:{s:7:\"Country\";s:8:\"Portugal\";s:8:\"Holidays\";s:2:\"13\";s:9:\"Leavetype\";s:3:\"25%\";s:7:\"Details\";s:15:\"Social security\";}i:24;a:4:{s:7:\"Country\";s:6:\"Russia\";s:8:\"Holidays\";s:3:\"156\";s:9:\"Leavetype\";s:50:\"40%, with a maximum, for 78 weeks; unpaid remainde\";s:7:\"Details\";s:15:\"Social security\";}i:25;a:4:{s:7:\"Country\";s:5:\"Spain\";s:8:\"Holidays\";s:1:\"0\";s:9:\"Leavetype\";s:10:\"No details\";s:7:\"Details\";s:15:\"Social security\";}i:26;a:4:{s:7:\"Country\";s:6:\"Sweden\";s:8:\"Holidays\";s:2:\"56\";s:9:\"Leavetype\";s:50:\"80% (up to a ceiling) for 56 weeks; flat rate for \";s:7:\"Details\";s:15:\"Social security\";}i:27;a:4:{s:7:\"Country\";s:14:\"United Kingdom\";s:8:\"Holidays\";s:2:\"13\";s:9:\"Leavetype\";s:6:\"Unpaid\";s:7:\"Details\";s:28:\"Mixed (employers reimbursed)\";}}}');

-- --------------------------------------------------------

--
-- Table structure for table `maternityleave`
--

CREATE TABLE `maternityleave` (
  `Country` varchar(200) NOT NULL,
  `Weeks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `longDescription` varchar(250) NOT NULL,
  `largeImage` varchar(50) NOT NULL,
  `smallImage` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `dateUploaded` date NOT NULL,
  `dateExp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `userId`, `shortDescription`, `longDescription`, `largeImage`, `smallImage`, `area`, `dateUploaded`, `dateExp`) VALUES
(2, 1, 'art classes', 'all types available for birthdays', 'art.jpg', 'art.jpg', 'Limerick', '2014-03-18', '2014-03-25'),
(3, 3, 'fish', 'a fishy description', 'fish.jpg', 'fish.jpg', 'limerick', '2014-03-25', '2014-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `parentalleave`
--

CREATE TABLE `parentalleave` (
  `Country` varchar(50) NOT NULL,
  `Holidays` int(30) NOT NULL,
  `Leavetype` varchar(50) NOT NULL,
  `Details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentalleave`
--

INSERT INTO `parentalleave` (`Country`, `Holidays`, `Leavetype`, `Details`) VALUES
('Albania', 1, 'paid', 'Mixed (Social security for maternity leave; employer liability for parental leave)'),
('Armenia', 156, 'Unpaid', 'Social security'),
('Austria', 104, 'Flat Rate', 'Social security'),
('Azerbaijan', 156, 'Flat rate', 'Social security'),
('Belarus', 156, '80% of minimum wage', 'Social security'),
('Belgium', 17, 'Flat rate', 'Mixed (3 days\' paternity leave employer liability; Social security)'),
('Bosnia and Herzegovina', 156, 'unpaid', 'Mixed (Social security maternity leave; employer liability paternity leave)'),
('Bulgaria', 104, 'Flat-rate for 52 weeks; unpaid reminder', 'Social security'),
('Croatia', 156, 'Unpaid', 'Mixed (Social security maternity leave; employer liability paternity leave)'),
('Cyprus', 13, 'Unpaid', 'Social security'),
('Denmark', 32, 'Paid', 'Mixed (social security & employer)'),
('Estonia', 36, 'Unpaid', 'Social security'),
('Finland', 26, '70%', 'Social security'),
('France', 156, 'Flat rate', 'Social security'),
('Germany 	', 156, '67%, with a maximum, for 52 weeks; unpaid remainde', 'Mixed (social security & employer liability)'),
('Greece 		', 17, 'Unpaid	', 'Mixed (Social security maternity leave; employer liability paternity leave)'),
('Hungary', 156, '70% (up to a ceiling) for 104 weeks;', 'flat rate remainder	Social security'),
('Iceland', 26, '80%, with a maximum, for first 13 weeks each;', 'unpaid remainder'),
('Ireland', 18, 'Unpaid', 'Social Security '),
('Italy', 26, '30%	', 'Social security'),
('Netherlands', 26, 'Unpaid but eligible for tax-breaks', '	Mixed (Social security maternity leave; employer liability paternity leave)'),
('Norway', 36, '100% for 46 weeks or 80% for 56 weeks (up to a cei', 'Social security'),
('Poland', 156, '60% for 26 weeks; flat rate for 104; unpaid remain', 'Social security'),
('Portugal', 13, '25%', 'Social security'),
('Russia', 156, '40%, with a maximum, for 78 weeks; unpaid remainde', 'Social security'),
('Spain', 0, 'No details', 'Social security'),
('Sweden', 56, '80% (up to a ceiling) for 56 weeks; flat rate for ', 'Social security'),
('United Kingdom', 13, 'Unpaid', 'Mixed (employers reimbursed)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `SurName` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `AddressLine1` varchar(50) NOT NULL,
  `AddressLine2` varchar(50) NOT NULL,
  `AddressLine3` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FirstName`, `SurName`, `Mobile`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `Email`) VALUES
(1, 'Lisa', 'e9803a706f81a40884b8aeafafb2cfd3', 'Lisa', 'Ryan', '1111111111', 'Moylish', 'Limerick', 'Limerick', 'lisa@lit.ie'),
(2, 'Mike', '4c3e1ec04215f69d6a8e9c023c9e4572', 'Mike', 'Ryan', '88888888888', 'Main Street', 'Dublin Road', 'Limerick', 'gh@lit.ie'),
(3, 'Geetha', '74f34876de8d87677f952d0f8821a55b', 'Geetha', 'Raju', '454545454', 'some where', 'some address', 'some town', 'email@lit.ie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `maternityleave`
--
ALTER TABLE `maternityleave`
  ADD PRIMARY KEY (`Country`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `parentalleave`
--
ALTER TABLE `parentalleave`
  ADD PRIMARY KEY (`Country`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
