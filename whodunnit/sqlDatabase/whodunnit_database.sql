-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 15, 2017 at 03:40 PM
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
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `image`, `name`, `description`) VALUES
(1, 'imagery/A_False_Alibi.jpg', ' A False Alibi', 'Mystery novelist Phil Blackwood is dead. Clues to his death reveal key plots to some of his most famous work, and to Nina, a gorgeous immigrant charged with his gruesome murder. Now it\'s time figure out if she is truly guilty or if her shaky alibi holds.'),
(3, 'imagery/Alien_dance.jpg', 'Alien Dance', 'Denise was driving home with her husband after work when she claims to have seen a mysterious light. She is found several days later covered in blood and her husband is now missing. Police suspect foul play; it\'s time to gather the clues.'),
(4, 'imagery/darkVeil.jpg', 'The Dark Veil', 'Paranormal investigators have gathered at the home of the Perron family, where a supernatural presence has made itself known. One investigator is now dead and the Perrons are suspected. Is this murder supernatural or something more sinister? '),
(5, 'imagery/Lennys.jpg', 'Lenny\'s Place', 'The bar was hoppin. Randy worked there, tending bar. Lawyer Carl was there until past closing. Detective Dehling arrived once it became a crime scene. Was it the dead body that tied these men together, or the stunning young woman aptly named Jewel.'),
(6, 'imagery/blackwoodHall.jpg', 'The Hall of Blackwood', 'A millionaire invites a number of people to stay in a vast creepy insane asylum for one night for a cash prize. Once the doors lock they won\'t open until morning. Now with everyone trapped, bodies begin to drop, but who is behind it?'),
(7, 'imagery/FareweillSt.jpg', 'The Death of Fareweill', 'Kyle Fisher heads to Las Vegas with four friends. But things take a turn when one of them kills a hired stripper. The only questions is, is why and who did it? Can Kyle figure out this mystery before he and his friends become the next victims?'),
(8, 'imagery/macSherlock.jpg', 'Mac and Sherlock', 'When a string of brutal murders terrorizes London, it\'s up to detectives James Sherlock and Mac Holmes to find the killer. there\'s just one catch: The killer has left clues that lead to a local precinct. Is this a ruse or a true murder mystery?  '),
(9, 'imagery/mistleNoose.jpg', 'Mistletoe Noose', 'Millionaire, Greg Jameson III, was celebrating his 65th birthday with friends and family at his remote mansion. After a toast ends with his apparent heart-attack. Three are suspected: his new young bride, his jealous brother, and ... you.');

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
