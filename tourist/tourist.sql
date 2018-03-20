-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 08:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `guide_16`
--

CREATE TABLE `guide_16` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visitor_id` int(11) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_16`
--

INSERT INTO `guide_16` (`id`, `date`, `visitor_id`, `paid`) VALUES
(1, '2018-03-20 19:20:55', 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guide_17`
--

CREATE TABLE `guide_17` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visitor_id` int(11) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_table`
--

CREATE TABLE `place_table` (
  `place_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_table`
--

INSERT INTO `place_table` (`place_id`, `city_name`, `place_name`, `price`) VALUES
(1, 'jodhpur', 'Mehrangarh Fort', 70),
(2, 'jodhpur', 'Fort 2', 62);

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide_list`
--

CREATE TABLE `tour_guide_list` (
  `guide_id` int(11) NOT NULL,
  `guide_email` varchar(255) NOT NULL,
  `guide_number` bigint(20) NOT NULL,
  `guide_password` text NOT NULL,
  `guide_name` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `guide_address` text NOT NULL,
  `guide_language` varchar(255) NOT NULL,
  `guide_city` varchar(255) NOT NULL,
  `guide_location` varchar(255) NOT NULL DEFAULT '0',
  `guide_attendance` varchar(255) NOT NULL DEFAULT '0',
  `guide_available` int(11) NOT NULL DEFAULT '0',
  `guide_approve` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_guide_list`
--

INSERT INTO `tour_guide_list` (`guide_id`, `guide_email`, `guide_number`, `guide_password`, `guide_name`, `guide_address`, `guide_language`, `guide_city`, `guide_location`, `guide_attendance`, `guide_available`, `guide_approve`) VALUES
(16, 'shivamjain248@gmail.com', 9997188960, '123456', 'Shivam Jain', 'Atmaram Jain And Sons, Mandi Sultan Ganj, Mahaveer Margh, Railway Road, Baraut', 'hindi,english,punjabi', 'jodhpur', 'Mehrangarh Fort', '2018-03-21', 0, 1),
(17, 'shashwatjain99@gmail.com', 9999363374, '123456', 'Shashwat Jain', 'address', 'hindi,english', 'jodhpur', '0', '0', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_table`
--

CREATE TABLE `visitor_table` (
  `visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_email` varchar(255) NOT NULL,
  `visitor_number` bigint(20) NOT NULL,
  `visitor_language` varchar(255) NOT NULL,
  `visitor_city` varchar(255) NOT NULL,
  `visitor_place_to_visit` text NOT NULL,
  `visitor_price` int(11) NOT NULL DEFAULT '0',
  `visitor_book` varchar(255) NOT NULL DEFAULT '0',
  `visitor_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_table`
--

INSERT INTO `visitor_table` (`visitor_id`, `visitor_name`, `visitor_email`, `visitor_number`, `visitor_language`, `visitor_city`, `visitor_place_to_visit`, `visitor_price`, `visitor_book`, `visitor_date`) VALUES
(8, 'priyanka', 'pksharma@gmail.com', 7065210493, 'hindi', 'jodhpur', 'Mehrangarh Fort, Fort 2', 132, 'Mehrangarh Fort', '2018-03-20 19:19:48'),
(9, 'priyanka', 'pksharma@gmail.com', 7065210493, 'hindi', 'jodhpur', 'Mehrangarh Fort, Fort 2', 132, 'Mehrangarh Fort', '2018-03-20 19:20:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guide_16`
--
ALTER TABLE `guide_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide_17`
--
ALTER TABLE `guide_17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_table`
--
ALTER TABLE `place_table`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tour_guide_list`
--
ALTER TABLE `tour_guide_list`
  ADD PRIMARY KEY (`guide_id`),
  ADD UNIQUE KEY `guide_number` (`guide_number`),
  ADD UNIQUE KEY `guide_email` (`guide_email`);

--
-- Indexes for table `visitor_table`
--
ALTER TABLE `visitor_table`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guide_16`
--
ALTER TABLE `guide_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guide_17`
--
ALTER TABLE `guide_17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place_table`
--
ALTER TABLE `place_table`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_guide_list`
--
ALTER TABLE `tour_guide_list`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `visitor_table`
--
ALTER TABLE `visitor_table`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
