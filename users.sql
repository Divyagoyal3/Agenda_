-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 08:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `company` varchar(100) NOT NULL,
  `c_no` int(20) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `payable` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `email`, `password`, `contact`, `company`, `c_no`, `b_name`, `payable`) VALUES
(22, 'test1', 'aditya', 'gangwar', 'hopesmluckyenterprises', 'adityagangwar516@gmail.com', 0, '9876543214', 78548, 'BOB', 'All Branches'),
(23, 'test2', 'optimist', 'divya', 'test@test.com', 'Aditya91@', 2147483647, 'hopesmluckyenterprises', 78548, 'BOB', 'All Branches'),
(24, 'testingnew', '', '', '', '12346', 0, '', 0, '', ''),
(25, 'testing', '', '', '', 'Aditya91@@', 0, '', 0, '', ''),
(26, 'newtest', '', '', '', 'abcdefgh', 0, '', 0, '', ''),
(27, 'test1', '', '', '', 'Aditya91@', 0, '', 0, '', ''),
(28, 'test2', '', '', '', 'Aditya91@', 0, '', 0, '', ''),
(29, 't.byethost1.com', 'Vishal', 'Gangwar', 'gangwarvishal001@gmail.com', 'mxvdsigvidsgvsvisvidsv', 2147483647, 'xkcaksc', 0, 'vksbvskvis', 'kbvksvksd'),
(30, 'test2', 'csjcvs', 'dskcskvsd', 'vdskcvadskv', 'Aditya91@', 789456215, 'dsckdscvskv', 0, 'dvdsv', 'vdbvasj'),
(31, 'test2', '', '', '', 'Aditya91@', 0, '', 0, '', ''),
(32, 'test1', '', '', '', 'dgsdgds', 0, '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
