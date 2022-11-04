-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 11:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminName` text NOT NULL COMMENT 'The name of the administrator.',
  `AdminPassword` varchar(100) NOT NULL COMMENT 'The administrators Password.',
  `AdminEmail` varchar(150) NOT NULL COMMENT 'The Administrator''s Email.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminName`, `AdminPassword`, `AdminEmail`) VALUES
('Munywoki', 'Kiteme1735', 'munywoki1735@gmail.com'),
('Munywoki', 'Kiteme1735', 'munywoki1735@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `UserName` varchar(100) NOT NULL COMMENT 'The name of the writer.',
  `Seen` text NOT NULL COMMENT 'Comment seen Or not',
  `Message` text NOT NULL COMMENT 'Message of the reply.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`UserName`, `Seen`, `Message`) VALUES
('Null', 'Null Someone Bid heigher than your Bid price on productVolvo! , You Can Bid Again This Product ', 'No'),
('Null', 'Null Someone Bid heigher than your Bid price on productLenovo! , You Can Bid Again This Product ', 'No'),
('Null', 'Null Someone Bid heigher than your Bid price on productHp System! , You Can Bid Again This Product ', 'No'),
('David', 'David Someone Bid heigher than your Bid price on productHp System! , You Can Bid Again This Product ', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductName` varchar(100) NOT NULL COMMENT 'Product Name.',
  `ProductID` varchar(200) NOT NULL COMMENT 'This is the product id',
  `CatagoryName` varchar(100) NOT NULL COMMENT 'The category name of the Item.',
  `Quantity` int(200) NOT NULL COMMENT 'The number of the Item.',
  `Y-m-d` date NOT NULL COMMENT 'The Current Date.',
  `StartDate` date NOT NULL COMMENT 'The Bidding starting date.',
  `EndDate` date NOT NULL COMMENT 'The Bidding date end.',
  `ProductStatus` varchar(150) NOT NULL COMMENT 'The status of Bidding either Yes or No.',
  `Buyer` varchar(100) NOT NULL COMMENT 'The Buyer of the Item',
  `Image` varchar(100) NOT NULL DEFAULT 'Image' COMMENT 'The image of the Product.',
  `Description` varchar(500) NOT NULL COMMENT 'The description of the Bidding item.',
  `Price` bigint(20) UNSIGNED NOT NULL COMMENT 'The Price of the Item',
  `UserName` varchar(100) NOT NULL COMMENT 'The name of the seller of the Product.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductName`, `ProductID`, `CatagoryName`, `Quantity`, `Y-m-d`, `StartDate`, `EndDate`, `ProductStatus`, `Buyer`, `Image`, `Description`, `Price`, `UserName`) VALUES
('HeavyDuty', '234567', 'Car', 2, '0000-00-00', '2022-08-21', '2022-09-10', 'No', 'Null', 'ProductPhoto/original.jpg', ' Bullet Proof', 20000000, 'CHISIRA'),
('Hp classic', '3546758', 'Computer', 21, '0000-00-00', '2022-08-01', '2022-08-26', 'No', 'Null', 'ProductPhoto/hp.jpg', ' Corei 7', 500000, 'David'),
('Iphone', '3585676', 'Mobile', 7, '0000-00-00', '2022-08-22', '2022-09-10', 'No', 'Null', 'ProductPhoto/iphone6.jpg', ' IphoneX', 75000, 'David'),
('Volvo', '456764', 'Car', 21, '0000-00-00', '2022-08-09', '2022-08-31', 'Yes', 'CHISIRA', 'ProductPhoto/2014-corolla-india-2.jpg', ' Old Model', 2000301, 'David'),
('Toyota', '5344675', 'Car', 2, '0000-00-00', '2022-08-07', '2022-08-31', 'No', 'Null', 'ProductPhoto/hmmitsubishi-640x480_320x240.jpg', ' New Model', 700000, 'David'),
('Lenovo', '56478590', 'Computer', 5, '0000-00-00', '2022-08-17', '2022-08-31', 'No', 'CHISIRA', 'ProductPhoto/laptop-image.jpg', 'Core i5', 45100, 'David'),
('Dell', '6454737', 'Computer', 3, '0000-00-00', '2022-07-31', '2022-09-10', 'No', 'Null', 'ProductPhoto/del.jpg', ' Refurb System', 25000, 'CHISIRA'),
('Infinix', '764653', 'Mobile', 20, '0000-00-00', '2022-08-01', '2022-09-10', 'Yes', 'Null', 'ProductPhoto/walton-primo-gm.jpg', 'Hot6 Infinix', 15000, 'David'),
('Hp System', '98765', 'Computer', 2, '0000-00-00', '2022-08-08', '2022-08-25', 'Yes', 'David', 'ProductPhoto/hp.png', ' Refurb System', 80400, 'CHISIRA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` text NOT NULL COMMENT 'The name of the user',
  `UserName` text NOT NULL COMMENT 'User Name of the user',
  `Password` varchar(50) NOT NULL COMMENT 'The Password',
  `Email` varchar(150) NOT NULL COMMENT 'Email of the user.',
  `Phone` int(15) NOT NULL COMMENT 'Phone Number of the User.',
  `Gender` text NOT NULL COMMENT 'The Gender',
  `DOB` date NOT NULL COMMENT 'Date of Birth',
  `Address` varchar(50) NOT NULL COMMENT 'Address',
  `Photo` varchar(50) NOT NULL COMMENT 'Photo of the user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `UserName`, `Password`, `Email`, `Phone`, `Gender`, `DOB`, `Address`, `Photo`) VALUES
('Munywoki', 'Munywoki', 'Kiteme1735', 'munywoki1735@gmail.com', 716333716, 'Male', '2022-08-02', '2279', 'UserPhoto/image1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `Price` (`Price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Price` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'The Price of the Item', AUTO_INCREMENT=20000001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
