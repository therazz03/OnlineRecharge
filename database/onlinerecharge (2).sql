-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 09:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinerecharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ano` int(2) NOT NULL,
  `aname` varchar(24) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ano`, `aname`, `username`, `password`) VALUES
(1, 'Admin', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sno` int(10) NOT NULL,
  `name` varchar(24) NOT NULL,
  `password` text NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(34) NOT NULL,
  `balance` int(4) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sno`, `name`, `password`, `phone`, `email`, `balance`, `dt`) VALUES
(2, 'raj', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 7617824214, 'abc@gmail.com', 2596, '2022-03-12 21:39:44'),
(3, 're', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 123456, 're@sd', 0, '2022-03-13 23:24:27'),
(4, 'user', '1faec9f981d5553f48141959697a4d72efcb5a219edf78f530cd6d9864d4f849', 1234567890, 'user@mail', 0, '2022-03-17 01:41:08'),
(5, 'Raj Vardhan Upreti', '1faec9f981d5553f48141959697a4d72efcb5a219edf78f530cd6d9864d4f849', 7310031016, 'razz73100@gmail.com', 0, '2022-03-17 02:14:43'),
(6, 'raa', '1faec9f981d5553f48141959697a4d72efcb5a219edf78f530cd6d9864d4f849', 20123456789, 'raa@mail', 0, '2022-03-17 02:28:19'),
(7, 'Vibhir Mishra', '1faec9f981d5553f48141959697a4d72efcb5a219edf78f530cd6d9864d4f849', 1111122222, 'chutiya@gmail.com', 4791, '2022-03-22 00:44:21'),
(8, 'vaibhav kumar sharma', '66b22e2726cf9ec340c15c33585ba98543f1d7c3326f9fd69a784dee66331016', 8234293472, 'name@gmail.com', 2966, '2022-03-22 11:34:18'),
(9, 'new user', '1faec9f981d5553f48141959697a4d72efcb5a219edf78f530cd6d9864d4f849', 11111, 'newuser@mail', 4985, '2022-03-23 01:25:33'),
(11, 'vibhor', '7d4d197dca6be69f267ca1e98a1ca35808f053aedbf99c62efa08799e344143d', 1234567891, 'vibhorilal@gmail.com', 5000, '2022-03-24 11:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `operater`
--

CREATE TABLE `operater` (
  `ono` int(2) NOT NULL,
  `oname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operater`
--

INSERT INTO `operater` (`ono`, `oname`) VALUES
(1, 'jio'),
(2, 'vi'),
(3, 'airtel'),
(4, 'bsnl');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `pno` int(3) NOT NULL,
  `pr` int(5) NOT NULL,
  `pdesc` text NOT NULL,
  `ono` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`pno`, `pr`, `pdesc`, `ono`) VALUES
(1, 4199, '365 days,1095 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(2, 3119, '365 days,2GB/day + 10GB', 1),
(3, 2999, '365 days,912.5 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(4, 2879, '365 days,730 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(5, 2545, '336 days,504 GB total data+ Unlimited Voice call + 100 SMS/day', 1),
(6, 1199, '84 days, 252 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(7, 1066, '84 days,173 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(8, 799, '56 days,112 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(9, 719, '84 days,168 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(10, 666, '84 days,126 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(11, 601, '28 days,90 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(12, 533, '56 days,112 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(13, 499, '28 days,90 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(14, 479, '56 days,84 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(15, 419, '28 days,84 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(16, 299, '28 days,56 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(17, 296, '30 days,25 Gb total data + Unlimited Voice call + 100 SMS/day', 1),
(18, 249, '23 days,46 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(19, 239, '28 days,42 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(20, 209, '28 days,28 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(21, 199, '23 days,34.5 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(22, 179, '24 days,24 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(23, 149, '20 days,20 GB total data + Unlimited Voice call + 100 SMS/day', 1),
(24, 119, '14 days,21 GB + Unlimited Voice call + 300 SMS', 1),
(25, 121, 'Active Plan,12GB', 1),
(26, 61, 'Active Plan,6GB', 1),
(27, 25, 'Active Plan,2GB', 1),
(28, 15, 'Active Plan,1GB', 1),
(29, 299, '28 days, Unlimited calls + 1.5GB/day', 2),
(30, 601, '28 days, Unlimited calls + 3 GB/day', 2),
(31, 479, '56 days, Unlimited calls + 1.5 GB/day', 2),
(32, 179, '28 days, Unlimited calls + 2 GB/day', 2),
(33, 901, '70 days, Unlimited calls + 3 GB/day', 2),
(34, 459, '84 days, Unlimited calls + 6 GB/day', 2),
(35, 269, '28 days, Unlimited calls + 1 GB/day', 2),
(36, 719, '84 days, Unlimited calls + 1.5 GB/day', 2),
(37, 475, '28 days, Unlimited calls + 3 GB/day', 2),
(38, 666, '77 days, Unlimited calls + 1.5 GB/day', 2),
(39, 239, '24 days, Unlimited calls + 1 GB/day', 2),
(40, 699, '56 days, Unlimited calls + 3 GB/day', 2),
(41, 539, '56 days, Unlimited calls + 2 GB/day', 2),
(42, 839, '84 days, Unlimited calls + 2 GB/day', 2),
(43, 2899, '365 days, Unlimited calls + 1.5 GB/day', 2),
(44, 1799, '365 days, 24 GB', 2),
(45, 409, '28 days, 2.5 GB/day', 2),
(46, 1499, '180 days, 1.5 GB/day', 2),
(47, 5000, 'No Validity, Rs4237.29talktime', 3),
(48, 3359, '365 days, Unlimited local & STD calls + 100 SMS/day', 3),
(49, 2999, '365 days, Unlimited local & STD calls + 100 SMS/day', 3),
(50, 1799, '365 days, Unlimited local & STD calls + 3600 SMS', 3),
(51, 839, '84 days, Unlimited local & STD calls + 100 SMS/day', 3),
(52, 838, '56 days, Unlimited local & STD calls + 100 SMS/day', 3),
(53, 719, '84 days, Unlimited local & STD calls + 100 SMS/day', 3),
(54, 699, '56 days, Unlimited local & STD calls + 100 SMS/day', 3),
(55, 666, '84 days, Unlimited local & STD calls + 100 SMS/day', 3),
(56, 549, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(57, 549, '56 days, Unlimited local & STD calls + 100 SMS/day', 3),
(58, 479, '56 days, Unlimited local & STD calls + 90 SMS', 3),
(59, 455, '84 days, Unlimited local & STD calls + 100 SMS/day', 3),
(60, 449, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(61, 309, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(62, 299, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(63, 265, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(64, 239, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(65, 209, '28 days, Unlimited local & STD calls + 100 SMS/day', 3),
(66, 179, '28 days, Unlimited local & STD calls + 300 SMS', 3),
(67, 155, '24 days, Unlimited local & STD calls + 300 SMS', 3),
(68, 1000, 'No Validity, Rs847.46talktime', 3),
(69, 500, 'No Validity, Rs423.73talktime', 3),
(70, 100, 'No Validity, Rs81.75talktime', 3),
(71, 20, 'No Validity, Rs14.95talktime', 3),
(72, 10, 'No Validity, Rs7.47talktime', 3),
(73, 99, '28 days, Rs99talktime + local STD at 1p/sec', 3),
(74, 197, '150 days, 2 GB/day', 4),
(75, 22, '90 days, Rs22 for 90 days', 4),
(76, 397, '300 days, 2 GB/day + Plan Migration Pack', 4),
(77, 107, '90 days, 10 GB data + local & STD calls + 3600 SMS', 4),
(78, 13, '1 day', 4),
(79, 499, '90 days, 2 GB/day', 4),
(80, 48, '30 days, 5 GB data', 4),
(81, 1498, '365 days, 2 GB/day', 4),
(82, 99, '22 day, NA talktime', 4),
(83, 10, 'Rs7.47', 4),
(84, 198, '50 days, 2 GB/day + Plan Migration Pack', 4),
(85, 88, '90 days, NAtalktime', 4),
(86, 94, '75 days, 3 GB only', 4),
(87, 50, 'Rs39.37talktime', 4),
(88, 56, '10 days, 10 GB data', 4),
(89, 220, 'Rs220talktime', 4),
(90, 97, '18 days, 2 GB/day', 4),
(91, 25, '7 days, 130 SMS', 4),
(92, 68, '14 days, 1.5 GB/day', 4),
(93, 118, '26 days, 0.5 GB/day', 4),
(94, 98, '22 days, NA talk time', 4),
(95, 319, '22 days, 2 GB/day', 4),
(96, 98, '22 days, 2 GB', 4),
(97, 49, '24 days, NA talk time', 4),
(98, 1570, '365 days, 2 GB/day', 4),
(99, 100, 'Rs81.75talktime', 4),
(100, 151, '28 days, 40 GB', 4);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `sno` int(10) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(30) NOT NULL,
  `concern` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`sno`, `name`, `email`, `concern`, `dt`) VALUES
(1, 'Raj', 'razz73100@gmail.com', 'an example for support table.', '2022-01-13 00:00:00'),
(2, 'Raj Vardhan Upreti', 'iamrazz01@gmail.com', 'another try for support table', '2022-01-13 00:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tn` int(11) NOT NULL,
  `userno` bigint(11) DEFAULT NULL,
  `tm` int(11) NOT NULL,
  `tdesc` varchar(30) DEFAULT NULL,
  `dt` datetime DEFAULT NULL,
  `sno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tn`, `userno`, `tm`, `tdesc`, `dt`, `sno`) VALUES
(2, 1234561234, 61, 'Mobile Recharge', '2022-03-23 03:38:38', 2),
(3, 1234561234, 61, 'Mobile Recharge', '2022-03-23 03:38:38', 2),
(4, 123456789, 25, 'Mobile Recharge', '2022-03-23 03:42:42', 2),
(5, 1234123412, 20, 'Dth Recharge', '2022-03-23 03:46:04', 2),
(6, 123412341234, 10, 'Credit Card Payment', '2022-03-23 03:46:36', 2),
(7, 6394634323, 209, 'Mobile Recharge', '2022-03-23 04:25:56', 7),
(8, 7310031016, 719, 'Mobile Recharge', '2022-03-23 04:37:35', 2),
(9, 1234567891, 0, 'Mobile Recharge', '2022-03-24 11:08:26', 11),
(10, 1234561234, 239, 'Mobile Recharge', '2022-03-24 13:48:43', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `phone` (`phone`,`email`);

--
-- Indexes for table `operater`
--
ALTER TABLE `operater`
  ADD PRIMARY KEY (`ono`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`pno`),
  ADD KEY `ono` (`ono`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tn`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ano` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `pno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`ono`) REFERENCES `operater` (`ono`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction` FOREIGN KEY (`sno`) REFERENCES `members` (`sno`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
