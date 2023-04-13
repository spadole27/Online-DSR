-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 08:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushi_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `item_entry` (
  `id` int(11) NOT NULL,
  `iname` varchar(11) NOT NULL,
  `iquantity` int(11) NOT NULL,
  `ispec` varchar(40) NOT NULL,
  `price` int(7) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item_entry`
--

INSERT INTO `item_entry` (`id`, `iname`, `iquantity`, `ispec`, `price`, `date`) VALUES
(14, 'desktop pc', 2, 'intel i5 12th gen 8gb ram,1tb ssd', 10000, '08-04-2023'),
(15, 'desktop pc', 1, '121', 1212, '08-04-2023'),
(16, 'sdf', 123, 'ddfafa', 21312, '08-04-2023'),
(17, 'awrf', 12, 'asfdaf', 24, '08-04-2023'),
(18, 'desktop pc', 12, 'intel i5 12th gen 8gb ram,1tb ssd', 12312312, '08-04-2023'),
(19, 'kdddddddddd', 12, '21', 1212, '10-04-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_entry`
--
ALTER TABLE `item_entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_entry`
--
ALTER TABLE `item_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
