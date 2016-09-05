-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 06:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudoop`
--

CREATE TABLE `crudoop` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `number` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudoop`
--

INSERT INTO `crudoop` (`id`, `name`, `mail`, `number`) VALUES
(1, 'gunel', 'gunel555@yahoo.com', '0000-00-00'),
(39, 'gunel', 'sdf', '0000-00-00'),
(40, 'AAAAAA', 'AAAA', '2016-09-01'),
(41, 'gundd', 'gggd', '2016-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `gunel`
--

CREATE TABLE `gunel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudoop`
--
ALTER TABLE `crudoop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gunel`
--
ALTER TABLE `gunel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudoop`
--
ALTER TABLE `crudoop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `gunel`
--
ALTER TABLE `gunel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
