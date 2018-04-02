-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 01:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narslogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `Str_Code` int(11) NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Last` varchar(255) NOT NULL,
  `First` varchar(255) NOT NULL,
  `Phone1` varchar(255) NOT NULL,
  `Info1` varchar(255) NOT NULL,
  `Last_Sale_Dt` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Prc_Lvl` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Total_Unit` varchar(255) NOT NULL,
  `Total_Sale` varchar(255) NOT NULL,
  `Total_Trans` varchar(255) NOT NULL,
  `Visits` varchar(255) NOT NULL,
  `Created_By` varchar(255) NOT NULL,
  `Create_Dt` varchar(255) NOT NULL,
  `Race` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_sales`
--

CREATE TABLE `customer_sales` (
  `Store_Name` varchar(255) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Email_Addr` varchar(255) NOT NULL,
  `ALU` varchar(255) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `DCS_Code` varchar(255) NOT NULL,
  `INVC_No` varchar(255) NOT NULL,
  `Qty_Sold` int(11) NOT NULL,
  `Orig_Price` varchar(255) NOT NULL,
  `Sales` varchar(255) NOT NULL,
  `Disc` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Orig_Tax` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Id` int(11) NOT NULL,
  `Web_Path` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `File_Name` varchar(255) NOT NULL,
  `File_Size` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `Web_Path`, `Type`, `File_Name`, `File_Size`) VALUES
(1, '/private/upload/User/1519975707_1.jpg', 'User', 'nars.jpg', '56449');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `First` varchar(255) NOT NULL,
  `Last` varchar(255) NOT NULL,
  `IC_No` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Contact_No` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Cust_ID` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `Name`, `First`, `Last`, `IC_No`, `DOB`, `Contact_No`, `Email`, `Cust_ID`) VALUES
(1, 'Hau', '', '', '888888', '', '111111', '', ''),
(2, 'Amaina', '', '', '222222', '', '333333', '', ''),
(4, '', 'Nina', 'Zaidi', '555555', '', '123123', 'nina@gmail.com', ''),
(5, '', 'aini', 'aina', '767676', '7/6/1996', '998989', 'aini@gmail.com', ''),
(6, '', 'Aliya', 'Haniff', '121212', '11/1/1990', '989898', 'aliya.hanif@gmail.com', ''),
(8, '', 'hana', 'ali', '212121', '1/1/1890', '656565', 'hana@ymail.com', ''),
(9, '', 'aina', 'aini', '878787', '8/11/1998', '323232', 'aina@gmail.com', ''),
(11, '', 'afiq', 'mohd', '123123', '1/2/1990', '010110', 'afiq@yahoo.com', ''),
(12, '', 'maria', 'alina', '141414', '2000-03-10', '123456789', 'maria@yahoo.com', ''),
(13, '', 'alya', 'hanif', '979797', '2018-02-06', '909090', 'alya@gmail.com', ''),
(14, '', 'aruna', 'aruna', '191919', '2018-03-15', '202020', 'aruna@gmail.com', ''),
(15, '', 'a', 'c', '123456', '2018-03-08', '212121', 'ac@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redemptmethod`
--

CREATE TABLE `redemptmethod` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redemptmethod`
--

INSERT INTO `redemptmethod` (`id`, `value`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sales_item_summary`
--

CREATE TABLE `sales_item_summary` (
  `DCS_Code` varchar(255) NOT NULL,
  `D` varchar(255) NOT NULL,
  `C` varchar(255) NOT NULL,
  `S` varchar(255) NOT NULL,
  `Description1` varchar(255) NOT NULL,
  `ALU` varchar(255) NOT NULL,
  `UPC` varchar(255) NOT NULL,
  `Qty_Sold` varchar(255) NOT NULL,
  `Disc` varchar(255) NOT NULL,
  `Disc_Amt` varchar(255) NOT NULL,
  `Ext_P` varchar(255) NOT NULL,
  `Ext_PT` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_receipt_data`
--

CREATE TABLE `sales_receipt_data` (
  `Customer` varchar(255) NOT NULL,
  `Store` varchar(255) NOT NULL,
  `Rcpt` varchar(255) NOT NULL,
  `Rcpt_Date` varchar(255) NOT NULL,
  `Rcpt_Date_Time` varchar(255) NOT NULL,
  `Tender_Name` varchar(255) NOT NULL,
  `Ext_Orig_Price` varchar(255) NOT NULL,
  `Disc` varchar(255) NOT NULL,
  `Ext_Disc_Amt` varchar(255) NOT NULL,
  `Ext_P` varchar(255) NOT NULL,
  `Ext_PT` varchar(255) NOT NULL,
  `Rcpt_Tax_Amt` varchar(255) NOT NULL,
  `Rcpt_Amt` varchar(255) NOT NULL,
  `UPC` varchar(255) NOT NULL,
  `ALU` varchar(255) NOT NULL,
  `DCS` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Desc1` varchar(255) NOT NULL,
  `Sold_Qty` varchar(255) NOT NULL,
  `P` varchar(255) NOT NULL,
  `PT` varchar(255) NOT NULL,
  `Cost` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_receipt_summary`
--

CREATE TABLE `sales_receipt_summary` (
  `Customer_Name` varchar(255) NOT NULL,
  `Store` varchar(255) NOT NULL,
  `Rcpt` varchar(255) NOT NULL,
  `Rcpt_Date_Time` varchar(255) NOT NULL,
  `Tender_Name` varchar(255) NOT NULL,
  `Ext_Orig_Price` varchar(255) NOT NULL,
  `Ext_Disc` varchar(255) NOT NULL,
  `Ext_Disc_Amt` varchar(255) NOT NULL,
  `Ext_P` varchar(255) NOT NULL,
  `Ext_PT` varchar(255) NOT NULL,
  `Rcpt_Tax_Amt` varchar(255) NOT NULL,
  `Rcpt_Total` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `Name`, `Quantity`) VALUES
(1, 'Lipstick', 10),
(2, 'mascara', 11),
(3, 'foundation', 30),
(4, 'balm', 12),
(5, 'Eye Shadow', 10),
(6, 'Nail Polish', 12),
(7, 'BB Cushion', 11),
(8, 'Blusher', 5);

-- --------------------------------------------------------

--
-- Table structure for table `store_list`
--

CREATE TABLE `store_list` (
  `Store` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_sales_transaction`
--

CREATE TABLE `total_sales_transaction` (
  `Store_Name` varchar(255) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `INVC_No` varchar(255) NOT NULL,
  `Rolling_Month` varchar(255) NOT NULL,
  `DCS_Code` varchar(255) NOT NULL,
  `ALU` varchar(255) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Qty_Sold` varchar(255) NOT NULL,
  `Orig_Price` varchar(255) NOT NULL,
  `Sales` varchar(255) NOT NULL,
  `Disc` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Orig_Tax` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', '$2y$10$uQI0r7mYhrF/y4Y0IpK1LO8Z6RHpmsrycYNTJA.FQhOFexM1jwFre', 'admin', 'YuONKNDoYi7o77WtviH2EJa6W92rrL0EyTmPTJG4iERpplPX6I7TvX2Pgozy', '2018-01-14 19:55:29', '2018-01-14 19:55:29'),
(4, 'amalina', 'amalina@yahoo.com', '$2y$10$9iDalWdjoyuLBO/FoSoaOuFuD6s2gd359k18qePOtPLowxzZM6lX.', '', 'HugrdgCirt9OfbVMywZB5yqcxXNs3FcDEbpwqFLXpZf5j1rVYEgJ8qhsj5ti', '2018-01-16 18:04:00', '2018-01-16 18:04:00'),
(5, 'malar', 'malar@gmail.com', '$2y$10$yRGdDx/A42NTKIMtJ4SoGeSMZFoSJ8Arxtcw689oYrgfc1z4rGV.e', '', 'KgaPlfvm9TozG03DUtXaS7AuZxamLl1Npqbj37NipfmP8RxCkoWMHTR10R1r', '2018-01-17 22:26:14', '2018-01-17 22:26:14'),
(10, 'lala', 'lala@gmail.com', '$2y$10$UpVbcTgn0MuWrYhX0MAon.LKSDGobmDU.hhInAWgzjiRNY4xW91qK', '', 'GvT842mbgllQc28OkY0023L46MAjqXPRpbbbD4ynozs7AQue4BCWeUvBIoSy', '2018-01-28 18:05:58', '2018-01-28 18:05:58'),
(9, 'shasha', 'shasha1@gmail.com', '$2y$10$1QAbE2.8QxQqMzZLZOoT9udzQoWytX/yXzV9IIiqo70oqPCpZtzRC', '', '0L6NIESNx4TAjcB1MCavvESTJzrf06Zi6C0F7qBs77xySi3uHpAR9zaDm6lD', '2018-01-28 17:42:27', '2018-01-28 17:42:27'),
(11, 'nana', 'nana@gmail.com', '$2y$10$hI.5sFhdcNPATqQq1lN0N.uXukYNrB9up2UoZ6NSrdDei9kNKVOx.', '', 'DOU0WyXowJf6U6DdhjHgMJrD6zguEcXRfT7mAKvnzv6pZc0gpSmQpWPlN4pG', '2018-01-28 20:08:09', '2018-01-28 20:08:09'),
(12, 'ali', 'ali@gmail.com', '$2y$10$oqm9.92mzU11ZBqlRSGkXeGNYgQpifWt73RjDEz5eoKDcW3755H32', '', '4YJoqe10Mv9QHUtkjsWxqojTflAmIdBY2Sbeu8I7rOVeEMLs0gBdtiLDjeoz', NULL, NULL),
(13, 'izzah', 'izzah@gmail.com', '$2y$10$w0k762VejsVzbdwLiIB9PO5y4W9t.stEjTnTcbOVDSSxvTWA6IVzO', 'admin', NULL, NULL, NULL),
(14, 'NARS KUALA LUMPUR', 'narskl@gmail.com', '$2y$10$RNoaDrRrCIPO.vvTln9qG.ArDuF0sMWCigi3fzrjh9MmB/CZeDYXa', 'store', 'sul4aJ8OsQ2SlZNHehreloCOGFSSNnJXl4DlgxAIv8nU38MSeFUcPvyxf0qz', NULL, NULL),
(15, 'afiq', 'afiq@gmail.com', '$2y$10$Xm7zO4ARGWAZI58m42ltIetkwdBe1qUeXb7qe5aaeMweWso8fJWmu', 'admin', NULL, NULL, NULL),
(16, 'NARS Johor', 'narsjohor@gmail.com', '$2y$10$cgz4EaVMVxSRZfgFKeoaZext9yEUPDMwhYMaMz6Xa3K0vaXFod/Te', 'store', '09nArN0HjpVqFS6J9UO1HswFaYECQHD8H0dKXeQdFEGmwVEtsJmyyb0CIWsN', NULL, NULL),
(18, 'hau sin', 'hau@ymail.com', '$2y$10$o5eZLDV7Dqkrp.EhAOwLReLU3.Vt.PF5HKNHyGvzQuqsanLSCO/ka', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redemptmethod`
--
ALTER TABLE `redemptmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
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
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `redemptmethod`
--
ALTER TABLE `redemptmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
