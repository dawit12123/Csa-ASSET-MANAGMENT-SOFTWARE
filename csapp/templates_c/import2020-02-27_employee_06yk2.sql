-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 10:07 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csaasset`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `house_no` int(11) DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `workunit_id` int(11) DEFAULT NULL,
  `department` varchar(43) NOT NULL,
  `photo` varchar(300) NOT NULL DEFAULT '[{"name":"files\\/photo not available_grzovs0r.jfif","usrName":"photo not available.jfif","size":4656,"type":"image\\/jpeg","searchStr":"photo not available.jfif,!:sStrEnd"}]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `email`, `phone`, `hire_date`, `salary`, `house_no`, `status`, `job_id`, `manager_id`, `workunit_id`, `department`, `photo`) VALUES
(1, 'dawit', 'girma', 'dawit@gmail.com', NULL, '2019-11-03', 2300, 1254, 'working', 1, 1, 3, '15', '[{\"name\":\"files\\/22549864_1984873805088506_1103852639388707058_n (1)_mf7qqda3.jpg\",\"usrName\":\"22549864_1984873805088506_1103852639388707058_n (1).jpg\",\"size\":16750,\"type\":\"image\\/jpeg\",\"searchStr\":\"22549864_1984873805088506_1103852639388707058_n (1).jpg,!:sStrEnd\"}]'),
(2, 'helen', 'abraraw', 'helen@gmail.com', NULL, '2019-11-05', 2000, 3434, '', 3, 1, NULL, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(3, 'eyob', 'debebe', 'eyob@gmail.com', NULL, '2019-09-17', 4000, 445, '', 2, 3, NULL, '4', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(4, 'helen', 'temesgern', 'he@gmail.com', NULL, '2020-01-07', 2000, 1234, 'working', 3, 1, NULL, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(5, 'dawit', 'girma', 'dawit@gmail.com', NULL, '2020-01-05', 2300, 1254, '', 1, 1, 2, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(6, 'dawit', 'girma', 'dawit@gmail.com', NULL, '2019-12-31', 4000, 1254, '', 2, 1, 3, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(7, 'esrael', 'girma', 'esrael@gmail.com', NULL, '2020-01-13', 2300, 1254, '', 1, 1, 1, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(8, 'helen', 'girma', 'helen12@gmail.com', NULL, '2020-01-28', NULL, NULL, '', NULL, NULL, NULL, '8', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(9, 'selam', 'abebe', 'selam@gmail.com', NULL, '2020-01-06', 4000, 3232, '', 2, 1, 2, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(10, 'mieraf', 'haylom', 'm233@gmail.com', NULL, '2020-01-05', 2000, 3232, '', 4, 1, 2, '15', '[{\"name\":\"files\\/photo not available_grzovs0r.jfif\",\"usrName\":\"photo not available.jfif\",\"size\":4656,\"type\":\"image\\/jpeg\",\"searchStr\":\"photo not available.jfif,!:sStrEnd\"}]'),
(11, 'efrata', 'hailu', 'efrata@gmail.com', NULL, '2020-01-30', 4000, 2334, '', 9, 1, 1, '15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
