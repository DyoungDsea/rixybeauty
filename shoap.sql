-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 04:28 PM
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
-- Database: `shoap`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `bid` varchar(25) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `time_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `bid`, `title`, `content`, `img`, `time_created`) VALUES
(12, '3894785762789039422', 'Morning Shift', 'As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.\r\n\r\nInstead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?', '201215101426-1', '2020-05-25 03:54:44'),
(13, '3894785762789039434', 'Morning Shift', 'As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.\r\n\r\nInstead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?', '201215101416-1', '2020-05-25 03:56:45'),
(14, '201215090510405510', 'Rixy Blog', 'As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.\r\n\r\nInstead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?', '201215101114-1', '2020-12-15 09:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `dadmin`
--

CREATE TABLE `dadmin` (
  `id` int(11) NOT NULL,
  `daid` varchar(25) DEFAULT NULL,
  `dname` varchar(20) DEFAULT NULL,
  `demail` varchar(30) DEFAULT NULL,
  `dpass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dadmin`
--

INSERT INTO `dadmin` (`id`, `daid`, `dname`, `demail`, `dpass`) VALUES
(1, '236568909209387487', 'Rixy', 'admin@rixy.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dcategory`
--

CREATE TABLE `dcategory` (
  `id` int(11) NOT NULL,
  `cid` varchar(25) DEFAULT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `ddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dcategory`
--

INSERT INTO `dcategory` (`id`, `cid`, `dname`, `ddate`) VALUES
(1, '201124101746576405', 'Body Soap', '2020-11-24 22:17:46'),
(2, '201124101906330203', 'Face Kit', '2020-11-24 22:19:06'),
(3, '201124101956515338', 'Acne Kit', '2020-11-24 22:19:56'),
(4, '201124103457977907', 'Oils', '2020-11-24 22:34:57'),
(5, '201124103648793237', 'Body Lotion', '2020-11-24 22:36:48'),
(6, '20112410365917888', 'Exfoliating Scrub', '2020-11-24 22:36:59'),
(13, '201208084825831430', 'Skin Repair Oil', '2020-12-08 20:48:25'),
(14, '201208084908140130', 'Stretch Mark Kit', '2020-12-08 20:49:08'),
(15, '201208084932513112', 'Knuckle Kit', '2020-12-08 20:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `dproducts`
--

CREATE TABLE `dproducts` (
  `id` int(11) NOT NULL,
  `pid` varchar(35) DEFAULT NULL,
  `dsku` varchar(20) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `pprice` varchar(11) DEFAULT NULL,
  `pdesc` text DEFAULT NULL,
  `dcategory` varchar(100) DEFAULT NULL,
  `dsub_cat` varchar(100) DEFAULT NULL,
  `dimg` varchar(20) DEFAULT NULL,
  `ddate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dproducts`
--

INSERT INTO `dproducts` (`id`, `pid`, `dsku`, `pname`, `pprice`, `pdesc`, `dcategory`, `dsub_cat`, `dimg`, `ddate`) VALUES
(1, '20121109341878199789', '20121118-1809', 'Citrus Herbal Cleanser 2oz.', '1000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Body Lotion', 'Lixir body lotion (whitening tone)', '202012093418-1', '2020-12-11 09:34:18'),
(2, '20121109363121977423', '20121131-3109', 'Retexturing Activator', '5000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Body Lotion', 'Lixir body lotion (whitening tone)', '202012093631-1', '2020-12-11 09:36:31'),
(3, '20121210303748263128', '20121237-3710', 'Retexturing Activator', '5000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Body Soap', 'Beauty bubbles whitening black soap', '202012103037-1', '2020-12-12 10:30:37'),
(4, '20121210322050401515', '20121220-2010', 'Citrus Herbal Cleanser 2oz.', '3000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Acne Kit', 'Lucent face cream', '202012103220-1', '2020-12-12 10:32:20'),
(5, '20121211265026315112', '20121250-5011', 'Eye Alive Serum', '100', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Body Lotion', 'Lixir body lotion (whitening tone)', '202012113139-1', '2020-12-12 11:26:50'),
(7, '20121212063023840176', '20121230-3012', 'A.g.e. Eye Complex', '4000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Face Kit', 'gleam face serum', '202012120630-1', '2020-12-12 12:06:30'),
(8, '2012121208148171491', '20121214-1412', 'Ferulic', '2000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Exfoliating Scrub', 'Ageless whitening scrub', '202012120814-1', '2020-12-12 12:08:14'),
(9, '20121212091313766418', '20121213-1312', 'Retexturing Activator', '6000', 'Gluta is an anti-oxidant that cleans the liver, takes off free-radicals and helps the brain too (did u know that our brain\'s anti-oxidant is gluta and that low level of it results', 'Oils', 'luminous glow oil', '202012120934-1', '2020-12-12 12:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `dsettings`
--

CREATE TABLE `dsettings` (
  `id` int(11) NOT NULL,
  `dphone` varchar(50) DEFAULT NULL,
  `demail` varchar(40) DEFAULT NULL,
  `daddress` text DEFAULT NULL,
  `dweb` varchar(40) NOT NULL,
  `ddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsettings`
--

INSERT INTO `dsettings` (`id`, `dphone`, `demail`, `daddress`, `dweb`, `ddate`) VALUES
(1, '+2348061234567, +2348061234567', 'info@rixy.com', '121 King St, Abuja Vic 3000, Nigeria.', 'www.rixy.com', '2020-11-28 11:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `dsubcategory`
--

CREATE TABLE `dsubcategory` (
  `id` int(11) NOT NULL,
  `dsid` varchar(35) DEFAULT NULL,
  `dcategory` varchar(50) DEFAULT NULL,
  `dsub_cat` varchar(100) DEFAULT NULL,
  `ddate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsubcategory`
--

INSERT INTO `dsubcategory` (`id`, `dsid`, `dcategory`, `dsub_cat`, `ddate`) VALUES
(1, '201208091444522776', 'Body Soap', 'Beauty bubbles whitening black soap', '2020-12-08 21:14:44'),
(2, '201208091923233252', 'Body Soap', 'beauty bubbles exfoliating black soap', '2020-12-08 21:19:23'),
(3, '201208091945209945', 'Body Soap', 'claire extra whitening bubbles', '2020-12-08 21:19:45'),
(4, '201208092007681666', 'Oils', 'luminous glow oil', '2020-12-08 21:20:07'),
(5, '201208092030458344', 'Oils', 'Sublime extra whitening oil', '2020-12-08 21:20:30'),
(6, '201208092110661748', 'Exfoliating Scrub', 'Ageless whitening scrub', '2020-12-08 21:21:10'),
(7, '201208092157498643', 'Body Lotion', 'Lixir body lotion (whitening tone)', '2020-12-08 21:21:57'),
(8, '201208092219800114', 'Body Lotion', 'Silk skin body lotion (caramel tone)', '2020-12-08 21:22:19'),
(9, '20120809223962371', 'Body Lotion', 'Flawless body lotion (melanin tone)', '2020-12-08 21:22:39'),
(10, '201208092311708483', 'Acne Kit', 'Lucent face cleanser', '2020-12-08 21:23:11'),
(11, '201208092329150109', 'Acne Kit', 'Lucent face soap', '2020-12-08 21:23:29'),
(12, '201208092349463757', 'Acne Kit', 'Lucent face cream', '2020-12-08 21:23:49'),
(13, '201208092430711679', 'Face Kit', 'facial radiance herbal soap', '2020-12-08 21:24:30'),
(14, '201208092454854761', 'Face Kit', 'gleam face serum', '2020-12-08 21:24:54'),
(15, '201208092512236779', 'Face Kit', 'facial radiance face toner', '2020-12-08 21:25:12'),
(16, '201208092527424103', 'Face Kit', 'LIXIR face cream(whitening tone)', '2020-12-08 21:25:27'),
(17, '201208092543265631', 'Face Kit', 'silk face cream (caramel tone)', '2020-12-08 21:25:43'),
(18, '201208092605140089', 'Face Kit', 'flawless face cream (melanin tone)', '2020-12-08 21:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dadmin`
--
ALTER TABLE `dadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dcategory`
--
ALTER TABLE `dcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dproducts`
--
ALTER TABLE `dproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsettings`
--
ALTER TABLE `dsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsubcategory`
--
ALTER TABLE `dsubcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dadmin`
--
ALTER TABLE `dadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dcategory`
--
ALTER TABLE `dcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dproducts`
--
ALTER TABLE `dproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dsettings`
--
ALTER TABLE `dsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dsubcategory`
--
ALTER TABLE `dsubcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
