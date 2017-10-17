-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 05:47 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucketlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE `cover` (
  `coverID` int(200) NOT NULL,
  `covername` varchar(300) NOT NULL,
  `coverpath` blob NOT NULL,
  `userID` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cover`
--

INSERT INTO `cover` (`coverID`, `covername`, `coverpath`, `userID`) VALUES
(1, 'bg1.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f436f7665722f6267312e6a7067, '9'),
(2, 'background1.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f436f7665722f6261636b67726f756e64312e6a7067, '8');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(30) NOT NULL,
  `userid` int(30) NOT NULL,
  `mateid` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photoID` int(255) NOT NULL,
  `photoname` varchar(1000) NOT NULL,
  `pathfile` blob NOT NULL,
  `userID` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photoID`, `photoname`, `pathfile`, `userID`) VALUES
(4, 'black.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626c61636b2e706e67, 8),
(3, 'cart.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f636172742e706e67, 8),
(5, 'cart11.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f6361727431312e706e67, 8),
(6, 'box.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626f782e706e67, 8),
(7, 'box1.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626f78312e706e67, 8),
(8, 'blue.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626c75652e706e67, 8),
(9, 'box26.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626f7832362e706e67, 8),
(10, 'logo1.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f6c6f676f312e706e67, 8),
(11, 'Cartoon10.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f436172746f6f6e31302e706e67, 8),
(12, '4a2ac6cb29c207ef18cc47bf2d1a36ca.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f34613261633663623239633230376566313863633437626632643161333663612e6a7067, 10),
(13, 'bg7.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f6267372e6a7067, 9),
(14, 'bg71.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626737312e6a7067, 9),
(15, 'vector.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f766563746f722e6a7067, 9),
(16, 'bg72.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f626737322e6a7067, 8),
(17, 'd8d47af9059b6b3f12e47ea6014c966d.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f64386434376166393035396236623366313265343765613630313463393636642e706e67, 8),
(18, 'd8d47af9059b6b3f12e47ea6014c966d1.png', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f6438643437616639303539623662336631326534376561363031346339363664312e706e67, 8),
(19, 'image12.jpg', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f696d61676531322e6a7067, 8),
(20, '8_EDUARDO.JPG', 0x433a2f77616d702f7777772f4275636b65744c6973742f55706c6f61642f385f4544554152444f2e4a5047, 8);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `userID` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `motto` varchar(200) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `sex` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`userID`, `firstname`, `middlename`, `nickname`, `lastname`, `motto`, `birthdate`, `sex`) VALUES
(7, '', '', 'jaysonCruz', '', '', '', ''),
(8, '', '', 'DELAVEGA!', '', '', '', ''),
(9, '', '', 'brixx', '', '', '', ''),
(10, '', '', 'lolo jr', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `Email`, `password`) VALUES
(8, 'dlvg22', 'dlvg22@yahoo.com', 'dlvg22'),
(9, 'brixx', 'brixx@yahoo.com', 'brixx'),
(10, 'ricardo', 'lolomo@yahoo.com', 'lolojr'),
(7, 'jayson', 'jaysoncruz@yahoo.com', 'jayson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`coverID`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `coverID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photoID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
