-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 07:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobdesc` varchar(700) NOT NULL,
  `vacno` int(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `basicpay` varchar(100) DEFAULT NULL,
  `fnarea` varchar(100) DEFAULT NULL,
  `ugqual` varchar(100) DEFAULT NULL,
  `pgqual` varchar(100) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `postdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `title`, `jobdesc`, `vacno`, `experience`, `basicpay`, `fnarea`, `ugqual`, `pgqual`, `profile`, `postdate`) VALUES
(6, 'devo', 'good dev', 34, '5', 'Rs 45000', 'js', 'BCA', 'Not Pursuing Post Graduation', 'asdfgdv', '20-02-19'),
(7, 'qweqwe', 'asdgfvxsg', 234, '7', 'Rs 436', 'sdfhgdf', 'BVSC', 'Not Pursuing Post Graduation', 'dfhggh', '20-02-19'),
(9, 'qwqwerr', 'sadf', 3434, '1', 'Rs 4654', 'qweqwer', 'BHM', 'M.Pharma', 'sdfgsdg', '25-03-19'),
(10, 'asdfghjkl', 'sadsafasdfgazdssssssss', 3, '1', 'Rs SWAEFD', 'fewefr', 'BVSC', 'MVSC', 'WEAGTFAERHYUTSRHYEG', '07-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `jsee`
--

CREATE TABLE `jsee` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `mobile` int(12) NOT NULL,
  `jid` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `resume` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsee`
--

INSERT INTO `jsee` (`id`, `name`, `mobile`, `jid`, `email`, `date`, `resume`) VALUES
(89, 'wqrsfdv', 2147483647, 7, '12342AF@fDSFG.SDAF', '2019-04-07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `jsee`
--
ALTER TABLE `jsee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jsee`
--
ALTER TABLE `jsee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
