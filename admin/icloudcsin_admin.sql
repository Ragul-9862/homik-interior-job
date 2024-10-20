-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 06:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icloudcsin_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UpdationDate`) VALUES
(1, 'Admin', 'admin', 1234567899, 'admin@test.com', 'f925916e2754e5e03f75dd58a5733251', '2023-02-27 13:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbanner`
--

CREATE TABLE `tblbanner` (
  `iId` int(11) NOT NULL,
  `vBannerImage` varchar(255) NOT NULL,
  `iStatus` int(11) DEFAULT 1,
  `vCreatAd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbanner`
--

INSERT INTO `tblbanner` (`iId`, `vBannerImage`, `iStatus`, `vCreatAd`) VALUES
(1, 'uploads/banner/3.png', 1, '2023-07-03 15:13:09'),
(2, 'uploads/banner/summer poster.jpeg', 1, '2023-07-04 17:42:15'),
(3, 'uploads/banner/nick-fewings-0y_DB18swVc-unsplash (1).jpg', 1, '2023-07-07 16:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

CREATE TABLE `tblbrand` (
  `iId` int(11) NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `dCreated_At` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`iId`, `brandname`, `Status`, `dCreated_At`) VALUES
(1, 'redminote', 0, '2023-07-06 11:13:23'),
(2, 'redminote', 1, '2023-07-06 12:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrandimg`
--

CREATE TABLE `tblbrandimg` (
  `iId` int(11) NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `brandimg` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `dCreateAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrandimg`
--

INSERT INTO `tblbrandimg` (`iId`, `brandname`, `brandimg`, `Status`, `dCreateAt`) VALUES
(1, 'Redmi', 'uploads/brandimg/summer poster.jpeg', 1, '2023-07-06 12:53:04'),
(2, 'redmiiii', 'uploads/brandimg/pexels-quintin-gellar-313782.jpg', 1, '2023-07-06 15:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `iId` int(11) NOT NULL,
  `vCategoryName` varchar(255) NOT NULL,
  `vCatCode` varchar(255) NOT NULL,
  `vCatdiscription` text NOT NULL,
  `vCategoryImage` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreateAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`iId`, `vCategoryName`, `vCatCode`, `vCatdiscription`, `vCategoryImage`, `iStatus`, `dCreateAt`) VALUES
(1, 'prem ', '', '', 'uploads/category/summer poster.jpeg', 0, '2023-07-04 15:54:37'),
(2, 'Pendent', 'pendent', 'Our business commenced with making jewellery for retailers and distributors. with growing needs from our customers; we have expanded our business directly to the consumers, via new age interactive e-commerce website.', 'uploads/category/summer poster.jpeg', 1, '2023-07-04 15:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblcolor`
--

CREATE TABLE `tblcolor` (
  `iId` int(11) NOT NULL,
  `vColorName` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcolor`
--

INSERT INTO `tblcolor` (`iId`, `vColorName`, `iStatus`, `dCreatedAt`) VALUES
(2, 'red', 1, '2023-07-05 09:25:18'),
(3, 'red', 1, '2023-07-05 09:26:42'),
(4, 'blue', 1, '2023-07-05 09:38:16'),
(5, 'red', 1, '2023-07-05 09:56:52'),
(6, 'edfdgf', 1, '2023-07-06 17:06:37'),
(7, 'reedf', 1, '2023-07-06 17:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblcolorimg`
--

CREATE TABLE `tblcolorimg` (
  `iId` int(11) NOT NULL,
  `vColorName` varchar(255) NOT NULL,
  `vColorImage` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreateAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcolorimg`
--

INSERT INTO `tblcolorimg` (`iId`, `vColorName`, `vColorImage`, `iStatus`, `dCreateAt`) VALUES
(1, 'prem mm', 'uploads/color-img/pendant.png', 0, '2023-07-05 11:12:19'),
(2, 'prem ', 'uploads/color-img/daily-wear.jpg', 1, '2023-07-06 12:24:58'),
(3, '', 'uploads/color-img/', 1, '2023-07-07 15:50:08'),
(4, '', 'uploads/color-img/', 1, '2023-07-07 16:11:42'),
(5, '', 'uploads/color-img/', 1, '2023-07-07 16:12:04'),
(6, '', 'uploads/color-img/', 1, '2023-07-07 16:21:08'),
(7, '', 'uploads/color-img/', 1, '2023-07-07 16:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `iId` int(11) NOT NULL,
  `vFeedbackName` varchar(255) NOT NULL,
  `vFeedbackPosition` varchar(255) DEFAULT NULL,
  `vFeedbackDiscription` text NOT NULL,
  `vFeedbackImage` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreat_Ad` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`iId`, `vFeedbackName`, `vFeedbackPosition`, `vFeedbackDiscription`, `vFeedbackImage`, `iStatus`, `dCreat_Ad`) VALUES
(1, 'Karan', 'SEO Analyst', 'Best product\'s on the website', 'uploads/feedback-img/PARKING SPACES EPOXY FLOORING .png', 1, '2023-07-07 13:14:34'),
(2, 'Prem', 'DEVELOPMENT HEAD', 'Nice Quality', 'uploads/feedback-img/user.png', 1, '2023-07-07 13:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblheight`
--

CREATE TABLE `tblheight` (
  `iId` int(11) NOT NULL,
  `vHeight` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreatAd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblheight`
--

INSERT INTO `tblheight` (`iId`, `vHeight`, `iStatus`, `dCreatAd`) VALUES
(1, '10802', 1, '2023-07-07 11:26:42'),
(2, '200m', 1, '2023-07-07 11:29:19'),
(3, '450', 1, '2023-07-07 12:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblinsta`
--

CREATE TABLE `tblinsta` (
  `iId` int(11) NOT NULL,
  `vInstaImg` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreatAd` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblinsta`
--

INSERT INTO `tblinsta` (`iId`, `vInstaImg`, `iStatus`, `dCreatAd`) VALUES
(6, 'uploads/insta/img/PARKING SPACES EPOXY FLOORING .png', 0, '2023-07-07 16:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblinstavideo`
--

CREATE TABLE `tblinstavideo` (
  `iId` int(11) NOT NULL,
  `vInstaVideo` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL,
  `dCreatAd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblinstavideo`
--

INSERT INTO `tblinstavideo` (`iId`, `vInstaVideo`, `iStatus`, `dCreatAd`) VALUES
(3, 'uploads/insta/video/28 March 2023_2.mp4', 0, '2023-07-07 17:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblsize`
--

CREATE TABLE `tblsize` (
  `iId` int(11) NOT NULL,
  `sizename` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `dCreated_At` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsize`
--

INSERT INTO `tblsize` (`iId`, `sizename`, `Status`, `dCreated_At`) VALUES
(1, '2.5', 1, '2023-07-06 10:58:46'),
(2, '2.543', 1, '2023-07-06 11:02:36'),
(3, '5.0', 1, '2023-07-06 15:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblsizeimg`
--

CREATE TABLE `tblsizeimg` (
  `iId` int(11) NOT NULL,
  `sizeimgname` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `sizeimg` varchar(255) NOT NULL,
  `dCreateAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsizeimg`
--

INSERT INTO `tblsizeimg` (`iId`, `sizeimgname`, `Status`, `sizeimg`, `dCreateAt`) VALUES
(2, '2.555', 0, 'uploads/sizeimg/pendant.png', '2023-07-06 13:27:29'),
(3, '2.5422', 0, 'uploads/sizeimg/pendant.png', '2023-07-06 14:44:17'),
(4, '5.0', 1, 'uploads/sizeimg/—Pngtree—data the internet cloud network_926213.jpg', '2023-07-06 15:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `iId` int(11) NOT NULL,
  `vCategoryName` varchar(255) NOT NULL,
  `vSubcatagoryCode` varchar(255) NOT NULL,
  `vSubCategoryName` varchar(255) NOT NULL,
  `vSubCategoryImage` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `tSubCatDescription` text DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreated_At` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`iId`, `vCategoryName`, `vSubcatagoryCode`, `vSubCategoryName`, `vSubCategoryImage`, `tSubCatDescription`, `iStatus`, `dCreated_At`) VALUES
(1, 'Karan', '', 'SEO Analyst', 'uploads/sub-cat/daily-wear.jpg', '', 0, '2023-07-04 14:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbltopscroll`
--

CREATE TABLE `tbltopscroll` (
  `iId` int(11) NOT NULL,
  `vtopname` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `dCreated_At` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltopscroll`
--

INSERT INTO `tbltopscroll` (`iId`, `vtopname`, `Status`, `dCreated_At`) VALUES
(1, '12', 1, '2023-07-05 13:14:20'),
(2, '122', 1, '2023-07-05 13:17:21'),
(3, 'Great Deal', 1, '2023-07-06 16:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `tblunits`
--

CREATE TABLE `tblunits` (
  `iId` int(11) NOT NULL,
  `vUnitName` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT 1,
  `dCreated_At` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblunits`
--

INSERT INTO `tblunits` (`iId`, `vUnitName`, `iStatus`, `dCreated_At`) VALUES
(3, '50Kg', 1, '2023-07-07 10:48:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblbrand`
--
ALTER TABLE `tblbrand`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblbrandimg`
--
ALTER TABLE `tblbrandimg`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblcolor`
--
ALTER TABLE `tblcolor`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblcolorimg`
--
ALTER TABLE `tblcolorimg`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblheight`
--
ALTER TABLE `tblheight`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblinsta`
--
ALTER TABLE `tblinsta`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblinstavideo`
--
ALTER TABLE `tblinstavideo`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblsize`
--
ALTER TABLE `tblsize`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblsizeimg`
--
ALTER TABLE `tblsizeimg`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tbltopscroll`
--
ALTER TABLE `tbltopscroll`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `tblunits`
--
ALTER TABLE `tblunits`
  ADD PRIMARY KEY (`iId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbrand`
--
ALTER TABLE `tblbrand`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbrandimg`
--
ALTER TABLE `tblbrandimg`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcolor`
--
ALTER TABLE `tblcolor`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcolorimg`
--
ALTER TABLE `tblcolorimg`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblheight`
--
ALTER TABLE `tblheight`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblinsta`
--
ALTER TABLE `tblinsta`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblinstavideo`
--
ALTER TABLE `tblinstavideo`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsize`
--
ALTER TABLE `tblsize`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsizeimg`
--
ALTER TABLE `tblsizeimg`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltopscroll`
--
ALTER TABLE `tbltopscroll`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblunits`
--
ALTER TABLE `tblunits`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
