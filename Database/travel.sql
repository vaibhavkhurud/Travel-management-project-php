-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 05:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingId` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `destination` varchar(1000) NOT NULL,
  `package` varchar(100) NOT NULL,
  `arrivals` varchar(100) NOT NULL,
  `leaving` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingId`, `uid`, `address`, `destination`, `package`, `arrivals`, `leaving`, `status`) VALUES
(34, 18, 'Nagamthan', '', 'Bronze', '2024-03-12', '2024-03-15', 3),
(35, 18, 'Nagamthan', '', 'Bronze', '2024-03-12', '2024-03-15', 3),
(36, 18, 'Nagamthan', 'Shivneri', 'Bronze', '2024-03-12', '2024-03-15', 2),
(37, 18, 'Nagamthan', 'Raigad', 'Bronze', '2024-03-12', '2024-03-12', 3),
(38, 22, 'Rampur', 'Harishchandra gad', 'Platinum', '2024-03-20', '2024-03-23', 1),
(39, 19, 'ASDFGH', 'Shivneri', 'Platinum', '2024-04-15', '2024-04-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `srno` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `loc_name` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `vr` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`srno`, `state`, `loc_name`, `description`, `vr`, `photo`) VALUES
(55, ' Maharashtra', 'Shivneri', 'A 17th century fort, Shivneri is the birthplace of Shivaji Maharaj. The fort carries small temple of Goddess Shivai Devi after whom he was named.', 'https://maps.app.goo.gl/dksiz6wAN92671GD6', '../files/Shivneri.jpg'),
(56, ' Maharashtra', 'Panhala', 'Panhala Fort, also known as Panhalgad and Panhalla, is located in Panhala, Maharashtra, India. It stands strategically overlooking a pass in the Sahyadri mountain range, which served as a major trade route from Bijapur in the interior of Maharashtra to the coastal areas.', 'https://maps.app.goo.gl/QnyJMEyXxGBnLyPH9', '../files/Panhala.jpg'),
(57, ' Maharashtra', 'Harishchandra gad', 'Harishchandra Fort is a hill fort in the Ahiyanagar in Nashik district of India. Its history is linked with that of Malshej Ghat, Kothale village and it has played a role in guarding and controlling the surrounding region.', 'https://maps.app.goo.gl/ZozrZYUcEnCjQerq5', '../files/Harishchandra gad.jpg'),
(58, ' Maharashtra', 'Pratapgad', 'Pratapgad is famous for the encounter between Shivaji and the mighty Afzal Khan. It was here that Shivaji’s true reign began after he defeated Afzal Khan, making this fort one of the most important events in the Maratha history.', 'https://maps.app.goo.gl/x4sqj8BF3pxBdEwi6', '../files/Pratapgad.jpg'),
(59, ' Maharashtra', 'Torna', 'The first feather on his royal crown, Torna was Shivaji’s premiere conquest at the young age of 16. Having rechristened it to Prachandgad, Shivaji Maharaj constructed monuments on its massive spread.', 'https://maps.app.goo.gl/6Ee4MVYeb6ng8TeM6', '../files/Torna.jpg'),
(60, ' Maharashtra', 'Sindhudurg', 'Once a powerful naval base for the Maratha Kingdom, this sea fort now remains a beautiful history. It impregnates the only temple dedicated to Shivaji Maharaj and also preserves his footprints. It is a popular tourist destination and ferries are available to reach this place.', 'https://maps.app.goo.gl/z6E5TXXWF6XfQ8H48', '../files/Sindhudurg.jpg'),
(61, ' Maharashtra', 'Lohagad', 'Having conquered this fort twice by Shivaji Maharaj, Lohagad held its prime importance due to its strategic location. The trade route to Khandala was guarded against here', 'https://maps.app.goo.gl/XJ7eV7uWD95vtafcA', '../files/Lohagad.jpg'),
(65, 'Maharashtra', 'Raigad', 'An epoch-making fort in the history of Maharashtra, Raigad was the capital of the Maratha Empire. It was here that the royal coronation of Shivaji Maharaj as the official king of the Maratha Empire took place. Although the fort was purloined and wrecked by the Britishers in 1818, much of its glory still remains. Shivaji Maharaj breathed his last in this fort.', '', '../files/Raigad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkg_id` int(20) NOT NULL,
  `pkg_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `description2` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `pkg_name`, `price`, `description`, `description2`, `photo`) VALUES
(12, 'Bronze', '9,999', '2 Star Hotel', '5 Nights Stay', '../files/Bronze.jpg'),
(13, 'Silver', '19,999', '3 Star Hotel', '7 Nights Stay', '../files/Silver.jpg'),
(14, 'Gold', '29,999', '5 Star Hotel', '10 Nights Stay', '../files/Gold.jpg'),
(15, 'Platinum', '39,999', '7 Star Hotel', '14 Nights Stay', '../files/Platinum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `uid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`uid`, `name`, `username`, `email`, `phone`, `password`) VALUES
(18, 'Vaibhav Khurud', 'vaibhav', 'vaibhav@gmail.com', 2147483647, '$2y$10$twJ9dLNtKD4bmbx8y2iwXu0H5sfSWSJ5vBNpgUoNbGSZdO6K9CYyW'),
(19, 'sai', 'sai', 'sai@gmail.com', 2147483647, '$2y$10$Czut9smpaz06vK3jiaNv4.gAOZ3yBwjS4i6QK8wqZYnW.c61xY7FG'),
(20, 'sushya', 'sushya', 'sush@gmail.com', 2147483647, '$2y$10$4lNyfrdsUzyQwMHX0C/pnOZE1f/n/YtDVNbqu4WJ8bNrhhepQFT2e'),
(21, 'abhi', 'abhi', 'abhi@gmail.com', 1234567890, '$2y$10$D5ZvR5l3V0Nqe79fZoJEgOFs3JYtkJ6qDTDdG0Bf3i.tfTDy1pusa'),
(22, 'Dakhu Gabbar ', 'dakhu_gabbar', 'dakhu@gmail.com', 1223334444, '$2y$10$ULt1xpu9YrLXjXVoAMYdW.xQViMdP24qovEvleYtlKhbUsp0V5S9G'),
(23, 'vairal sir', 'vairalsir', '', 0, '$2y$10$AEsw3MRj3TVa7bypD4ol2.hC0hF3ltQMHNSJh0X9Gmmrklg7KF1Um');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
