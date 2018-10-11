-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 07:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  `vote` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `img_name`, `vote`) VALUES
(1, 'https://ak7.picdn.net/shutterstock/videos/1864747/thumb/5.jpg', ' Image 1', 0),
(2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1nZgMp8Br3T87LVx3wfiShE0VnXKeOueDyeTiSX371Hm-QTd-', ' Image 2', 0),
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVLHqj5GIHzV7BZB5ebrU1qcFdoQFa-DJYvJoLgQx3_JPj_VRA9w', ' Image 3', 0),
(4, 'https://images.pexels.com/photos/236047/pexels-photo-236047.jpeg?auto=compress&cs=tinysrgb&h=350', 'Image 4', 0),
(5, 'https://images.freeimages.com/images/large-previews/92e/pink-plate-1529411.jpg', 'Image 5', 0),
(6, 'https://images.freeimages.com/images/large-previews/241/night-fog-1521028.jpg', 'Image 6', 0),
(7, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOGUhZo0Qe81U5qY_Z-seXgsD79LEEet832TVOlLMOEy10ZPsV', 'Image 7', 0),
(8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw-jZ3F77ZDwzGdkX1jqlK_skmcva6aZmTWhycy5S5a1zjzWHv', ' Image 8', 0),
(9, 'https://techcrunch.com/wp-content/uploads/2018/03/gettyimages-705351545.jpg?w=730&crop=1', 'Image 9', 0),
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9B1qf4bABlNnX4I13nR3JIQUxwSvfUdbFlasF8kX3coGpCVtD', ' Image 10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(3, 'shubham', 'singh', 'azhar2070@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
