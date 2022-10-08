-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2022 at 11:55 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pate3275_a5`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookData`
--

CREATE TABLE `bookData` (
  `bookID` int(5) NOT NULL,
  `bookName` varchar(70) NOT NULL,
  `bookPrice` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookData`
--

INSERT INTO `bookData` (`bookID`, `bookName`, `bookPrice`) VALUES
(1, 'Rich Dad Poor Dad', 25);

-- --------------------------------------------------------

--
-- Table structure for table `userList`
--

CREATE TABLE `userList` (
  `username` varchar(70) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userList`
--

INSERT INTO `userList` (`username`, `password`) VALUES
('aa', '$2y$10$lTixvJXJPKBNcIfGgBZSIureSLiIe3R90IIw0nCaYhgX4rnL4A1xy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookData`
--
ALTER TABLE `bookData`
  ADD PRIMARY KEY (`bookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookData`
--
ALTER TABLE `bookData`
  MODIFY `bookID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
