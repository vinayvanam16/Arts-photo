-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 06:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manoj`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  `products` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `file`, `type`, `size`, `products`) VALUES
(30, '62736-10_tips_for_kids_birthday_party_from_real_mom_1.jpg', 'image/jpeg', '65876', 'Birthdays'),
(31, '62135-download.jpg', 'image/jpeg', '14095', 'Marriages'),
(32, '39599-607077-marriageregistration.jpg', 'image/jpeg', '135151', 'Marriages'),
(33, '20293-arranged-marriages-in-india-665x347.jpg', 'image/jpeg', '81560', 'Marriages'),
(34, '24315-5.jpg', 'image/jpeg', '348547', 'Marriages'),
(38, '73586-16.jpg', 'image/jpeg', '310643', 'Marriages'),
(39, '10459-images (1).jpg', 'image/jpeg', '12815', 'Events'),
(40, '74743-images.jpg', 'image/jpeg', '8432', 'Events'),
(41, '59763-events.jpg', 'image/jpeg', '433398', 'Events'),
(42, '20097-event.jpg', 'image/jpeg', '141671', 'Events'),
(46, '94357-rafting-trekking-camping-in-rishikesh-awararahi.jpg', 'image/jpeg', '711458', 'Birthdays'),
(47, '53298-t2.jpg', 'image/jpeg', '6406', 'Marriages'),
(48, '70307-t1.jpg', 'image/jpeg', '14975', 'Travels'),
(49, '74975-t2.jpg', 'image/jpeg', '6406', 'Travels'),
(50, '85199-te2.jpg', 'image/jpeg', '44117', 'Technology'),
(51, '75498-te1.jpg', 'image/jpeg', '12779', 'Technology'),
(52, '37720-te.jpg', 'image/jpeg', '12147', 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Uname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pwd` varchar(30) NOT NULL,
  `cPwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Uname`, `Email`, `Pwd`, `cPwd`) VALUES
('Manoj', 'Manoj@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'reddy', 'reddy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
