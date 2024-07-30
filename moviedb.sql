-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2024 at 08:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(50) NOT NULL,
  `mid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `seat` int(11) NOT NULL,
  `seatnums` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `snack_id` text NOT NULL,
  `snack_amt` text NOT NULL,
  `total` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `cid`, `mid`, `tid`, `sid`, `bdate`, `seat`, `seatnums`, `amount`, `snack_id`, `snack_amt`, `total`) VALUES
(11, 'abhishek@gmail.com', 107, 9, 1, '2024-04-30', 2, 'A7,A8', 200, '0', '0', '0'),
(13, 'abhishek@gmail.com', 107, 9, 6, '2024-04-30', 3, 'C4,C5,C6', 300, '0', '0', '0'),
(14, 'mahesh@gmail.com', 101, 9, 1, '2024-05-01', 8, 'A1,A2,A3,A4,A5,A6,A7,A8', 800, '0', '0', '0'),
(15, 'abhishek@gmail.com', 101, 9, 1, '2024-05-13', 2, 'B5,B6', 200, '0', '0', '0'),
(16, 'abhishek@gmail.com', 106, 10, 1, '2024-05-17', 1, 'A6', 100, '21', '99', '888'),
(18, 'mahesh@gmail.com', 103, 10, 1, '2024-05-29', 2, 'A7,A8', 200, 'Fries Combo', '200.00', '400'),
(30, 'mahesh@gmail.com', 104, 9, 1, '2024-05-29', 2, 'D5,D6', 200, '0', '0', '0'),
(31, 'mahesh@gmail.com', 106, 9, 1, '2024-05-30', 2, 'B7,B8', 200, '21', '99', '888'),
(32, 'mahesh@gmail.com', 103, 12, 1, '2024-05-30', 2, 'A7,A8', 200, '21', '99', '888'),
(35, 'abhishek@gmail.com', 103, 9, 1, '2024-05-31', 2, 'A7,A8', 200, 'Regular Pizza', '100.00', '300'),
(34, 'mahesh@gmail.com', 104, 10, 5, '2024-05-30', 2, 'A7,A8', 200, '0', '0', '0'),
(36, 'mahesh@gmail.com', 103, 12, 1, '2024-05-31', 2, 'B5,B6', 0, 'Pasta', '150.00', '150'),
(37, 'abhis@gmail.com', 102, 9, 1, '2024-06-18', 2, 'A7,C1', 0, 'Pasta', '150.00', '150');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uname`, `email`, `phone`, `gender`) VALUES
(1, 'abhishek', 'abhishek@gmail.com', '8373635355', 'Male'),
(2, 'Abhishek', 'abhishek@gmail.com', '7656787656', 'Male'),
(3, 'Mahesh', 'mahesh@gmail.com', '9878657854', 'Male'),
(4, 'abhi', 'abhis@gmail.com', '2345678904', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `query` varchar(1000) NOT NULL,
  `edate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `subject`, `email`, `phone`, `query`, `edate`) VALUES
(1, 'Abhishek', 'Review', 'abhis@gmail.com', '7975564214', '\nSure, I can help you with that! What kind of ticket booking are you looking to do?', '2024-04-25 13:20:28'),
(2, 'Abhsiehek', 'Query', 'abhis@gmail.com', '6360897654', 'Sure, I can help you with that! What kind of ticket booking are you looking to do?', '2024-04-25 13:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `mid` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `reldate` date NOT NULL,
  `director` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `actress` varchar(100) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `banner` varchar(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `mname`, `reldate`, `director`, `actor`, `actress`, `trailer`, `poster`, `descr`, `banner`) VALUES
(101, 'Jurassic World 2', '2019-10-16', 'New Director', 'Anand Singh', 'New Actress', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/vn9mMeWcgoM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/101.jpg', 'Amazing movie of dinosours real looking dinosource and adventurous', 'banners/101.jpg'),
(102, 'Stuart Little 2', '2020-09-04', 'Rob Minkof', 'A Rat', 'A Sparrow', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/IDbsJeOgItw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/102.jpg', 'Funny and full of comedy of a rat named Stuart adopted by a family and a sparrow.', 'banners/102.jpg'),
(103, 'Iron Man 3', '2020-03-09', 'Shane Black', 'Robert Downey Jr.,  Don Cheadle', 'Gwyneth Paltrow', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/oYSD2VQagc4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/103.jpg', 'Very nice movie of Iron Man', 'banners/103.jpg'),
(104, 'Terminator Dark fate', '2015-05-14', 'Alen Tailer', 'Arnold Schwarzenegger, ', ' Linda Hamilton', '<iframe width=\"861\" height=\"538\" src=\"https://www.youtube.com/embed/k64P4l2Wmeg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/104.jpg', 'Thriller and action movie based on Machines. Very good performance of Arnold', 'banners/104.jpg'),
(106, 'Jumanji The next level', '2020-06-12', 'Jake Kasdan', 'Serdarius Blain, Alex Wolff, Karen Gillan', 'Serdarius Blain', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/rBxcF-r9Ibs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/106.jpg', 'Best comedy movie', 'banners/106.jpg'),
(107, 'Bahubali the beginning', '2019-10-16', 'SS Rajamouli', 'Prabhas, Rana Daggubati,', 'Anushka Shetty', '<iframe width=\"861\" height=\"538\" src=\"https://www.youtube.com/embed/sOEg_YZQsTI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/107.jpg', 'Best Mahesmati and Amrendra Bahulbali movie', 'banners/107.jpg'),
(108, 'Good News', '2020-09-10', 'Raj Mehta', 'Akshay Kumar,', 'Kareena Kapoor Khan', '<iframe width=\"956\" height=\"538\" src=\"https://www.youtube.com/embed/r9VJpqoAr84\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'posters/108.jpg', 'Good News by Akshay kumar full of comedy', 'banners/108.jpg'),
(113, 'KGF', '2018-12-21', 'Prashanth Neel', 'Yash ', ' Srinidhi Shetty', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-KfsY-qwBS0?si=oy5yE_msGfJ1QTUA&amp;start=2\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;></iframe>', 'posters/113.jpg', 'Rocky, a young man, seeks power and wealth in order to fulfil a promise to his dying mother. His quest takes him to Mumbai, where he gets involved with the notorious gold mafia.\r\nRelease da', 'banners/113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `offerid` int(10) NOT NULL AUTO_INCREMENT,
  `offercode` varchar(25) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `offeramt` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`offerid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerid`, `offercode`, `startdate`, `enddate`, `offeramt`, `status`) VALUES
(1, '44365', '2024-04-27', '2024-04-30', 20.00, 'Active'),
(3, '76434', '2024-05-15', '2024-05-20', 15.00, 'Active'),
(4, '67998', '2024-05-11', '2024-05-16', 10.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

DROP TABLE IF EXISTS `shows`;
CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `showname` varchar(50) NOT NULL,
  `showtime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `showname`, `showtime`, `endtime`, `amount`) VALUES
(1, 'First Show', '09:00', '11:00', 100),
(2, 'Matinee Show', '12:00', '1:00', 120),
(4, 'Noon Show', '14:00', '16:00', 50),
(5, 'Night Show', '21:00', '23:00', 120),
(6, 'My Show', '10:00', '12:00', 60),
(8, 'First Show', '10:00', '12:30', 300),
(9, 'Morning', '20:28', '12:32', 250);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

DROP TABLE IF EXISTS `snacks`;
CREATE TABLE IF NOT EXISTS `snacks` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`s_id`, `name`, `description`, `price`, `image_path`) VALUES
(17, 'Pizza Combo', 'Pizza,Cold Drinks,Fries', '240.00', 'posters/images (3).jpg'),
(24, 'Momo', 'Steam Momos', '80.00', 'posters/m.jpg'),
(21, 'Regular Pizza', 'Onion Pizza', '100.00', 'posters/p5.jpg'),
(22, 'Pasta', 'Red Pasta', '150.00', 'posters/p6.jpg'),
(15, 'Burger Combo', 'Burger and Cold Drinks', '260.00', 'posters/download (3).jpg'),
(20, 'Pizza', 'Paneer pizza', '250.00', 'posters/p2.jpg'),
(19, 'Fries Combo', 'Fries and Cold Drinks', '200.00', 'posters/download (2).jpg'),
(23, 'Pizza', 'Tomato Pizza', '120.00', 'posters/p7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

DROP TABLE IF EXISTS `theatre`;
CREATE TABLE IF NOT EXISTS `theatre` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `seats` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`tid`, `tname`, `location`, `seats`) VALUES
(12, 'Gold Films', 'Hinjewadi', 100),
(9, 'Bollywood Theatre', 'Kharadi', 80),
(11, 'PVR Cinemas', 'Viman Nagar', 80),
(10, 'RadhaKrishna Cinema', 'Kolhapur', 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(30) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `uname`, `pwd`, `role`) VALUES
('admin', 'Administrator', 'admin', 'admin'),
('abhishek@gmail.com', 'abhishek', '1111', 'customer'),
('mahesh@gmail.com', 'Mahesh', '1111', 'customer'),
('abhis@gmail.com', 'abhi', '1111', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
