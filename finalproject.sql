-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2021 at 09:08 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `services` varchar(500) NOT NULL,
  `workinghours` varchar(100) NOT NULL,
  `insurances` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `location`, `services`, `workinghours`, `insurances`) VALUES
(19, 'Madina Community Hospital', 'Madina', 'General consultations', '24/7', 'Nationwide,NHIS,Rubins'),
(20, 'Lapaz Community Hospital', 'Lapaz', 'General', '24/7', 'Nationwide,NHIS'),
(14, 'Legon Community Hospital', 'Legon', 'General', '24/7', 'NHIS,Nationwide,Rubins'),
(21, 'St. Johns Hospital', 'Lapaz', 'Gynaecology, Child Health', '24/7', 'NHIS,Rubins'),
(18, 'KorleBu', 'Accra', 'General', '24/7', 'NHIS,Nationwide'),
(15, 'Greenville Hospital', 'Tema', 'General', '24/7', 'NHIS'),
(16, 'Narh-Bita Hospital', 'Tema', 'General consultation', '24/7', 'Nationwide,Rubins'),
(17, 'MediCare', 'Madina', 'Dental care', '8am-5pm', 'Nationwide,Rubins'),
(22, 'Ridge Hospital', 'Accra', 'General', '24/7', 'NHIS,Natinwide,Rubins'),
(23, 'PharsCare', 'Accra', 'Dental Care', '8am-5pm', 'Nationwide,Rubins'),
(24, 'PediactricCare', 'Accra', 'Child Health', '24/7', 'NHIS,Nationwide');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'lorraine', 'lorraine@example.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Kojo', 'kojo@gmail.com', '6531401f9a6807306651b87e44c05751'),
(9, 'joana', 'joana@example.com', '25d55ad283aa400af464c76d713c07ad'),
(10, 'AdjoaMensah', 'adwoa@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(11, 'kweku', 'kweku@gmail.com', '8f562a872c4a1ee488c27a3c40215e57'),
(12, 'Abena', 'abena@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9'),
(13, 'NaaAdoley', 'naaadoley46@gmail.com', 'e13dd027be0f2152ce387ac0ea83d863'),
(14, 'Jeff', 'jeff@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(15, 'Koko', 'koko@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(16, 'Selassie', 'selassie@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(17, 'Dorcas', 'dorcas@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(18, 'Cecilia', 'cecilia@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9'),
(19, 'juliet', 'juliet@gmail.com', '62e7616ef249814d84e031ca1d8a0a48'),
(20, 'Kelvin', 'kelvin@gmail.com', '6fb42da0e32e07b61c9f0251fe627a9c'),
(21, 'Miranda', 'miranda@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(22, 'Calvin', 'calvin@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(23, 'Paul', 'paul@gmail.com', 'c33367701511b4f6020ec61ded352059'),
(24, 'Peter', 'peter@gmail.com', '6c44e5cd17f0019c64b042e4a745412a'),
(25, 'Uriah', 'uriah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Bridget', 'bridget@example.com', '25d55ad283aa400af464c76d713c07ad'),
(27, 'Silas', 'silas234@gmail.com', '25d55ad283aa400af464c76d713c07ad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
