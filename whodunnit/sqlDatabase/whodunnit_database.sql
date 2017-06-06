-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 06, 2017 at 03:28 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whodunnit_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `image` varchar(25) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `image`, `name`) VALUES
(1, 'imagery/A_False_Alibi.jpg', ' A False Alibi'),
(3, 'imagery/Alien_dance.jpg', 'Alien Dance'),
(4, 'imagery/darkVeil.jpg', 'The Dark Veil'),
(5, 'imagery/Lennys.jpg', 'Lenny\'s Place'),
(6, 'imagery/blackwoodHall.jpg', 'The Hall of Blackwood'),
(7, 'imagery/FareweillSt.jpg', 'The Death of Fareweill'),
(8, 'imagery/macSherlock.jpg', 'Mac and Sherlock'),
(9, 'imagery/mistleNoose.jpg', 'Mistletoe Noose');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `image` varchar(25) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `position` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `image`, `name`, `position`) VALUES
(1, 'imagery/Finnegan.jpg', 'John Finnegan', 'President of the Board'),
(2, 'imagery/Hensley.jpg', 'Heather Hensley', 'Executive Producer'),
(3, 'imagery/Goldsmith.jpg', 'Erica Goldsmith', 'Creative Director'),
(4, 'imagery/Monroe.jpg', 'Joe Monroe', 'Vice President');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
