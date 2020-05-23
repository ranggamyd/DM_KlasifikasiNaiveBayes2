-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 09:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_statlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_input`
--

CREATE TABLE `tb_input` (
  `Name` varchar(50) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Sex` int(10) DEFAULT NULL,
  `CPT` int(10) DEFAULT NULL,
  `RBP` int(10) DEFAULT NULL,
  `SC` int(10) DEFAULT NULL,
  `FBS` int(10) DEFAULT NULL,
  `RER` int(10) DEFAULT NULL,
  `MHRA` int(10) DEFAULT NULL,
  `EIA` int(10) DEFAULT NULL,
  `Oldpeak` float DEFAULT NULL,
  `TSofTPESTS` int(10) DEFAULT NULL,
  `NoMV` int(10) DEFAULT NULL,
  `Thal` int(10) DEFAULT NULL,
  `Hasil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_statlog`
--

CREATE TABLE `tb_statlog` (
  `ID` int(10) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Sex` int(10) DEFAULT NULL,
  `CPT` int(10) DEFAULT NULL,
  `RBP` int(10) DEFAULT NULL,
  `SC` int(10) DEFAULT NULL,
  `FBS` int(10) DEFAULT NULL,
  `RER` int(10) DEFAULT NULL,
  `MHRA` int(10) DEFAULT NULL,
  `EIA` int(10) DEFAULT NULL,
  `Oldpeak` float DEFAULT NULL,
  `TSofTPESTS` int(10) DEFAULT NULL,
  `NoMV` int(10) DEFAULT NULL,
  `Thal` int(10) DEFAULT NULL,
  `Label` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_statlog`
--

INSERT INTO `tb_statlog` (`ID`, `Age`, `Sex`, `CPT`, `RBP`, `SC`, `FBS`, `RER`, `MHRA`, `EIA`, `Oldpeak`, `TSofTPESTS`, `NoMV`, `Thal`, `Label`) VALUES
(1, 70, 1, 4, 130, 322, 0, 2, 109, 0, 2.4, 2, 3, 3, 2),
(2, 67, 0, 3, 115, 564, 0, 2, 160, 0, 1.6, 2, 0, 7, 1),
(3, 57, 1, 2, 124, 261, 0, 0, 141, 0, 0.3, 1, 0, 7, 2),
(4, 64, 1, 4, 128, 263, 0, 0, 105, 1, 0.2, 2, 1, 7, 1),
(5, 74, 0, 2, 120, 269, 0, 2, 121, 1, 0.2, 1, 1, 3, 1),
(6, 65, 1, 4, 120, 177, 0, 0, 140, 0, 0.4, 1, 0, 7, 1),
(7, 56, 1, 3, 130, 256, 1, 2, 142, 1, 0.6, 2, 1, 6, 2),
(8, 59, 1, 4, 110, 239, 0, 2, 142, 1, 1.2, 2, 1, 7, 2),
(9, 60, 1, 4, 140, 293, 0, 2, 170, 0, 1.2, 2, 2, 7, 2),
(10, 63, 0, 4, 150, 407, 0, 2, 154, 0, 4, 2, 3, 7, 2),
(11, 59, 1, 4, 135, 234, 0, 0, 161, 0, 0.5, 2, 0, 7, 1),
(12, 53, 1, 4, 142, 226, 0, 2, 111, 1, 0, 1, 0, 7, 1),
(13, 44, 1, 3, 140, 235, 0, 2, 180, 0, 0, 1, 0, 3, 1),
(14, 61, 1, 1, 134, 234, 0, 0, 145, 0, 2.6, 2, 2, 3, 2),
(15, 57, 0, 4, 128, 303, 0, 2, 159, 0, 0, 1, 1, 3, 1),
(16, 71, 0, 4, 112, 149, 0, 0, 125, 0, 1.6, 2, 0, 3, 1),
(17, 46, 1, 4, 140, 311, 0, 0, 120, 1, 1.8, 2, 2, 7, 2),
(18, 53, 1, 4, 140, 203, 1, 2, 155, 1, 3.1, 3, 0, 7, 2),
(19, 64, 1, 1, 110, 211, 0, 2, 144, 1, 1.8, 2, 0, 3, 1),
(20, 40, 1, 1, 140, 199, 0, 0, 178, 1, 1.4, 1, 0, 7, 1),
(21, 67, 1, 4, 120, 229, 0, 2, 129, 1, 2.6, 2, 2, 7, 2),
(22, 48, 1, 2, 130, 245, 0, 2, 180, 0, 0.2, 2, 0, 3, 1),
(23, 43, 1, 4, 115, 303, 0, 0, 181, 0, 1.2, 2, 0, 3, 1),
(24, 47, 1, 4, 112, 204, 0, 0, 143, 0, 0.1, 1, 0, 3, 1),
(25, 54, 0, 2, 132, 288, 1, 2, 159, 1, 0, 1, 1, 3, 1),
(26, 48, 0, 3, 130, 275, 0, 0, 139, 0, 0.2, 1, 0, 3, 1),
(27, 46, 0, 4, 138, 243, 0, 2, 152, 1, 0, 2, 0, 3, 1),
(28, 51, 0, 3, 120, 295, 0, 2, 157, 0, 0.6, 1, 0, 3, 1),
(29, 58, 1, 3, 112, 230, 0, 2, 165, 0, 2.5, 2, 1, 7, 2),
(30, 71, 0, 3, 110, 265, 1, 2, 130, 0, 0, 1, 1, 3, 1),
(31, 57, 1, 3, 128, 229, 0, 2, 150, 0, 0.4, 2, 1, 7, 2),
(32, 66, 1, 4, 160, 228, 0, 2, 138, 0, 2.3, 1, 0, 6, 1),
(33, 37, 0, 3, 120, 215, 0, 0, 170, 0, 0, 1, 0, 3, 1),
(34, 59, 1, 4, 170, 326, 0, 2, 140, 1, 3.4, 3, 0, 7, 2),
(35, 50, 1, 4, 144, 200, 0, 2, 126, 1, 0.9, 2, 0, 7, 2),
(36, 48, 1, 4, 130, 256, 1, 2, 150, 1, 0, 1, 2, 7, 2),
(37, 61, 1, 4, 140, 207, 0, 2, 138, 1, 1.9, 1, 1, 7, 2),
(38, 59, 1, 1, 160, 273, 0, 2, 125, 0, 0, 1, 0, 3, 2),
(39, 42, 1, 3, 130, 180, 0, 0, 150, 0, 0, 1, 0, 3, 1),
(40, 48, 1, 4, 122, 222, 0, 2, 186, 0, 0, 1, 0, 3, 1),
(41, 40, 1, 4, 152, 223, 0, 0, 181, 0, 0, 1, 0, 7, 2),
(42, 62, 0, 4, 124, 209, 0, 0, 163, 0, 0, 1, 0, 3, 1),
(43, 44, 1, 3, 130, 233, 0, 0, 179, 1, 0.4, 1, 0, 3, 1),
(44, 46, 1, 2, 101, 197, 1, 0, 156, 0, 0, 1, 0, 7, 1),
(45, 59, 1, 3, 126, 218, 1, 0, 134, 0, 2.2, 2, 1, 6, 2),
(46, 58, 1, 3, 140, 211, 1, 2, 165, 0, 0, 1, 0, 3, 1),
(47, 49, 1, 3, 118, 149, 0, 2, 126, 0, 0.8, 1, 3, 3, 2),
(48, 44, 1, 4, 110, 197, 0, 2, 177, 0, 0, 1, 1, 3, 2),
(49, 66, 1, 2, 160, 246, 0, 0, 120, 1, 0, 2, 3, 6, 2),
(50, 65, 0, 4, 150, 225, 0, 2, 114, 0, 1, 2, 3, 7, 2),
(51, 42, 1, 4, 136, 315, 0, 0, 125, 1, 1.8, 2, 0, 6, 2),
(52, 52, 1, 2, 128, 205, 1, 0, 184, 0, 0, 1, 0, 3, 1),
(53, 65, 0, 3, 140, 417, 1, 2, 157, 0, 0.8, 1, 1, 3, 1),
(54, 63, 0, 2, 140, 195, 0, 0, 179, 0, 0, 1, 2, 3, 1),
(55, 45, 0, 2, 130, 234, 0, 2, 175, 0, 0.6, 2, 0, 3, 1),
(56, 41, 0, 2, 105, 198, 0, 0, 168, 0, 0, 1, 1, 3, 1),
(57, 61, 1, 4, 138, 166, 0, 2, 125, 1, 3.6, 2, 1, 3, 2),
(58, 60, 0, 3, 120, 178, 1, 0, 96, 0, 0, 1, 0, 3, 1),
(59, 59, 0, 4, 174, 249, 0, 0, 143, 1, 0, 2, 0, 3, 2),
(60, 62, 1, 2, 120, 281, 0, 2, 103, 0, 1.4, 2, 1, 7, 2),
(61, 57, 1, 3, 150, 126, 1, 0, 173, 0, 0.2, 1, 1, 7, 1),
(62, 51, 0, 4, 130, 305, 0, 0, 142, 1, 1.2, 2, 0, 7, 2),
(63, 44, 1, 3, 120, 226, 0, 0, 169, 0, 0, 1, 0, 3, 1),
(64, 60, 0, 1, 150, 240, 0, 0, 171, 0, 0.9, 1, 0, 3, 1),
(65, 63, 1, 1, 145, 233, 1, 2, 150, 0, 2.3, 3, 0, 6, 1),
(66, 57, 1, 4, 150, 276, 0, 2, 112, 1, 0.6, 2, 1, 6, 2),
(67, 51, 1, 4, 140, 261, 0, 2, 186, 1, 0, 1, 0, 3, 1),
(68, 58, 0, 2, 136, 319, 1, 2, 152, 0, 0, 1, 2, 3, 2),
(69, 44, 0, 3, 118, 242, 0, 0, 149, 0, 0.3, 2, 1, 3, 1),
(70, 47, 1, 3, 108, 243, 0, 0, 152, 0, 0, 1, 0, 3, 2),
(71, 61, 1, 4, 120, 260, 0, 0, 140, 1, 3.6, 2, 1, 7, 2),
(72, 57, 0, 4, 120, 354, 0, 0, 163, 1, 0.6, 1, 0, 3, 1),
(73, 70, 1, 2, 156, 245, 0, 2, 143, 0, 0, 1, 0, 3, 1),
(74, 76, 0, 3, 140, 197, 0, 1, 116, 0, 1.1, 2, 0, 3, 1),
(75, 67, 0, 4, 106, 223, 0, 0, 142, 0, 0.3, 1, 2, 3, 1),
(76, 45, 1, 4, 142, 309, 0, 2, 147, 1, 0, 2, 3, 7, 2),
(77, 45, 1, 4, 104, 208, 0, 2, 148, 1, 3, 2, 0, 3, 1),
(78, 39, 0, 3, 94, 199, 0, 0, 179, 0, 0, 1, 0, 3, 1),
(79, 42, 0, 3, 120, 209, 0, 0, 173, 0, 0, 2, 0, 3, 1),
(80, 56, 1, 2, 120, 236, 0, 0, 178, 0, 0.8, 1, 0, 3, 1),
(81, 58, 1, 4, 146, 218, 0, 0, 105, 0, 2, 2, 1, 7, 2),
(82, 35, 1, 4, 120, 198, 0, 0, 130, 1, 1.6, 2, 0, 7, 2),
(83, 58, 1, 4, 150, 270, 0, 2, 111, 1, 0.8, 1, 0, 7, 2),
(84, 41, 1, 3, 130, 214, 0, 2, 168, 0, 2, 2, 0, 3, 1),
(85, 57, 1, 4, 110, 201, 0, 0, 126, 1, 1.5, 2, 0, 6, 1),
(86, 42, 1, 1, 148, 244, 0, 2, 178, 0, 0.8, 1, 2, 3, 1),
(87, 62, 1, 2, 128, 208, 1, 2, 140, 0, 0, 1, 0, 3, 1),
(88, 59, 1, 1, 178, 270, 0, 2, 145, 0, 4.2, 3, 0, 7, 1),
(89, 41, 0, 2, 126, 306, 0, 0, 163, 0, 0, 1, 0, 3, 1),
(90, 50, 1, 4, 150, 243, 0, 2, 128, 0, 2.6, 2, 0, 7, 2),
(91, 59, 1, 2, 140, 221, 0, 0, 164, 1, 0, 1, 0, 3, 1),
(92, 61, 0, 4, 130, 330, 0, 2, 169, 0, 0, 1, 0, 3, 2),
(93, 54, 1, 4, 124, 266, 0, 2, 109, 1, 2.2, 2, 1, 7, 2),
(94, 54, 1, 4, 110, 206, 0, 2, 108, 1, 0, 2, 1, 3, 2),
(95, 52, 1, 4, 125, 212, 0, 0, 168, 0, 1, 1, 2, 7, 2),
(96, 47, 1, 4, 110, 275, 0, 2, 118, 1, 1, 2, 1, 3, 2),
(97, 66, 1, 4, 120, 302, 0, 2, 151, 0, 0.4, 2, 0, 3, 1),
(98, 58, 1, 4, 100, 234, 0, 0, 156, 0, 0.1, 1, 1, 7, 2),
(99, 64, 0, 3, 140, 313, 0, 0, 133, 0, 0.2, 1, 0, 7, 1),
(100, 50, 0, 2, 120, 244, 0, 0, 162, 0, 1.1, 1, 0, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_statlog`
--
ALTER TABLE `tb_statlog`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
