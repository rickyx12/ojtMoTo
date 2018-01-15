-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 02:06 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeSheet`
--

CREATE TABLE `timeSheet` (
  `id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `timeIn` datetime NOT NULL,
  `timeOut` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeSheet`
--

INSERT INTO `timeSheet` (`id`, `student`, `date`, `timeIn`, `timeOut`) VALUES
(1, 'ricardo', '2017-12-22', '2017-12-22 08:55:00', '2017-12-22 16:00:00'),
(2, 'ricardo', '2017-12-23', '2017-12-23 08:25:00', '2017-12-23 17:55:00'),
(3, 'ricardo', '2017-12-23 ', '2017-12-23 09:56:00', '2017-12-23 16:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timeSheet`
--
ALTER TABLE `timeSheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timeSheet`
--
ALTER TABLE `timeSheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
