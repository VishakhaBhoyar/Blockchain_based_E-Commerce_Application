-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2023 at 04:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blockchain_based_electronics_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(999) NOT NULL,
  `product_id` varchar(999) NOT NULL,
  `dist_id` varchar(999) NOT NULL,
  `quantity` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `user_id`, `product_id`, `dist_id`, `quantity`) VALUES
(1, '45', '73', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(999) NOT NULL,
  `username` varchar(999) NOT NULL,
  `product_id` varchar(999) NOT NULL,
  `comment` longtext NOT NULL,
  `rate` varchar(999) NOT NULL,
  `Time` varchar(111) NOT NULL,
  `Date` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `user_id`, `username`, `product_id`, `comment`, `rate`, `Time`, `Date`) VALUES
(1, '34', 'kushaldhole', '39', 'sdf', '', '07:43 pm ', '24-02-2016'),
(2, '34', 'kushaldhole', '39', 'hello', '', '07:51 pm ', '24-02-2016'),
(3, '8', 'garpit', '45', 'nice handset', '', '05:50 pm ', '10-03-2016'),
(4, '8', 'garpit', '38', 'good handset..', '', '06:29 pm ', '10-03-2016'),
(5, '8', 'garpit', '46', 'nice phone', '', '05:36 pm ', '11-03-2016'),
(6, '8', 'garpit', '47', 'nice phone', '', '10:28 pm ', '21-03-2016'),
(7, '27', 'daniem', '51', 'sdfsdfsf  good awsome sf sdf sdf ', '', '12:08 am ', '29-03-2016'),
(8, '27', 'daniem', '51', 'good good good', '', '12:08 am ', '29-03-2016'),
(9, '27', 'daniem', '51', 'good', '', '12:10 am ', '29-03-2016'),
(10, '27', 'daniem', '51', 'good good', '', '12:11 am ', '29-03-2016'),
(11, '27', 'daniem', '54', 'good good good', '', '12:17 am ', '29-03-2016'),
(12, '27', 'daniem', '54', 'awsome', '', '12:21 am ', '29-03-2016'),
(13, '8', 'garpit', '53', 'good ', '', '04:15 am ', '31-03-2016'),
(14, '8', 'garpit', '55', 'wrongful information provided with mobile.', '', '04:49 pm ', '31-03-2016'),
(15, '8', 'garpit', '55', 'cool phone', '', '04:51 pm ', '31-03-2016'),
(16, '36', 'kvd11', '55', 'd', '2', '02:39 pm ', '01-03-2017'),
(17, '36', 'kvd11', '55', 'Great Phone!', '5', '06:45 pm ', '01-03-2017'),
(18, '36', 'kvd11', '54', 'nice mobile', '5', '11:14 am ', '10-03-2017'),
(19, '36', 'kvd11', '55', 'nicwe phone', '5', '10:55 am ', '16-03-2017'),
(20, '36', 'kvd11', '55', 'awsome Handset', '5', '07:03 pm ', '26-03-2017'),
(21, '36', 'kvd11', '55', 'wrong  product information mentioned.', '4', '07:08 pm ', '26-03-2017'),
(22, '36', 'kvd11', '55', 'nice but not good product', '3', '11:02 am ', '10-04-2017'),
(23, '36', 'kvd11', '55', 'not good product', '2', '11:03 am ', '10-04-2017'),
(24, '36', 'kvd11', '55', 'abound  product', '5', '11:03 am ', '10-04-2017'),
(25, '36', 'kvd11', '55', 'bad not', '4', '11:05 am ', '10-04-2017'),
(57, '41', 'kushal', '81', 'display is good lcd is good', '5', '09:54 am ', '12-03-2018'),
(58, '41', 'kushal', '81', 'display is abound', '5', '09:56 am ', '12-03-2018'),
(59, '41', 'kushal', '81', 'display is abound', '5', '09:58 am ', '12-03-2018'),
(60, '41', 'kushal', '81', 'display is bad lcd is bad', '5', '09:59 am ', '12-03-2018'),
(61, '41', 'kushal', '81', 'display is bad lcd is good', '3', '09:59 am ', '12-03-2018'),
(62, '41', 'kushal', '81', 'display works accurately and lcd panel is also good but screen is bad', '5', '10:00 am ', '12-03-2018'),
(63, '41', 'kushal', '81', ' display working accurately and lcd panel is also good but screen is bad', '3', '10:01 am ', '12-03-2018'),
(64, '41', 'kushal', '81', 'display is not good lcd is works fine', '2', '10:03 am ', '12-03-2018'),
(65, '41', 'kushal', '81', 'poor display quality but lcd is good', '5', '10:04 am ', '12-03-2018'),
(66, '41', 'kushal', '81', '    display is good lcd is good\r\n\r\n', '3', '10:11 am ', '12-03-2018'),
(67, '41', 'kushal', '81', 'good product', '5', '06:19 pm ', '13-03-2018'),
(68, '41', 'kushal', '68', 'product is good front camera is good rear camera is very good', '5', '05:00 pm ', '16-03-2018'),
(69, '41', 'kushal', '81', 'sound is nice and display quality is awsome', '5', '02:14 pm ', '18-03-2018'),
(70, '41', 'kushal', '81', 'display is good lcd is good', '5', '02:17 pm ', '18-03-2018'),
(71, '41', 'kushal', '81', 'sound is nice and display quality is awsome', '5', '05:18 pm ', '18-03-2018'),
(72, '41', 'kushal', '81', 'sadf df asf sdf asdf ', '5', '05:20 pm ', '18-03-2018'),
(73, '41', 'kushal', '81', ' sound is nice and display quality is awsome', '5', '05:20 pm ', '18-03-2018'),
(74, '41', 'kushal', '81', '    sound is nice and display quality is awsome', '5', '05:21 pm ', '18-03-2018'),
(75, '41', 'kushal', '81', '   sound is nice and display quality is awsome', '4', '05:24 pm ', '18-03-2018'),
(76, '41', 'kushal', '81', 'sound is nice and display quality is awsome', '5', '05:26 pm ', '18-03-2018'),
(77, '41', 'kushal', '81', '    sound is nice and display quality is awsome', '5', '05:28 pm ', '18-03-2018'),
(78, '41', 'kushal', '81', ' sound is nice and display quality is awsome', '5', '05:29 pm ', '18-03-2018'),
(79, '41', 'kushal', '81', 'sound is nice and display quality is awsome', '5', '05:31 pm ', '18-03-2018'),
(80, '41', 'kushal', '81', ' sound is nice and display quality is awsome', '5', '05:34 pm ', '18-03-2018'),
(81, '41', 'kushal', '81', '    LCD is nice and sound quality is awsome', '5', '05:35 pm ', '18-03-2018'),
(82, '41', 'kushal', '81', ' LCD is bad and sound quality is worst', '5', '05:35 pm ', '18-03-2018'),
(83, '41', 'kushal', '81', ' LCD is nice and sound quality is bad', '5', '06:04 pm ', '18-03-2018'),
(84, '41', 'kushal', '81', ' LCD is nice and sound quality is bad', '5', '06:05 pm ', '18-03-2018'),
(85, '41', 'kushal', '72', 'display is amazing', '5', '06:09 pm ', '18-03-2018'),
(86, '41', 'kushal', '72', 'camera is awsome', '5', '06:09 pm ', '18-03-2018'),
(87, '41', 'kushal', '72', 'worst camera ever', '4', '06:09 pm ', '18-03-2018'),
(88, '41', 'kushal', '81', 'tv is good', '5', '07:36 pm ', '22-03-2018'),
(89, '41', 'kushal', '81', ' d sf sdf sf s fs dfs df', '5', '07:40 pm ', '22-03-2018'),
(90, '41', 'kushal', '81', 'sf sf sds dfsdf', '3', '07:41 pm ', '22-03-2018'),
(91, '41', 'kushal', '81', 'ds sd sdf sdf', '4', '07:44 pm ', '22-03-2018'),
(92, '41', 'kushal', '81', 'tv is okay', '5', '07:45 pm ', '22-03-2018'),
(93, '41', 'kushal', '81', 'product is okay', '5', '07:54 pm ', '22-03-2018'),
(94, '41', 'kushal', '72', 'Camera is amazing in this phone.', '5', '11:31 am ', '03-05-2018'),
(95, '41', 'kushal', '72', 'phone is okay.....', '3', '11:32 am ', '03-05-2018'),
(96, '41', 'kushal', '72', 'phone is not good', '5', '11:32 am ', '03-05-2018'),
(97, '41', 'kushal', '72', 'phone is not good', '2', '11:33 am ', '03-05-2018'),
(98, '41', 'kushal', '69', 'phone camera is not good', '4', '11:36 am ', '03-05-2018'),
(99, '41', 'kushal', '69', '    phone camera is not good', '4', '11:37 am ', '03-05-2018'),
(100, '41', 'kushal', '69', 'phone camera is not good', '3', '11:38 am ', '03-05-2018'),
(101, '41', 'kushal', '69', 'phone is not good', '2', '11:42 am ', '03-05-2018'),
(102, '41', 'kushal', '69', 'camera is not good, screen is awsome', '1', '11:49 am ', '03-05-2018'),
(103, '41', 'kushal', '69', ' phone is not good', '1', '11:50 am ', '03-05-2018'),
(104, '41', 'kushal', '73', ' phone is not good', '2', '11:51 am ', '03-05-2018'),
(105, '41', 'kushal', '73', 'phone is not good', '1', '11:52 am ', '03-05-2018'),
(106, '41', 'kushal', '70', 'phone is not good', '5', '11:53 am ', '03-05-2018'),
(107, '41', 'kushal', '67', 'phone is not good', '2', '11:54 am ', '03-05-2018'),
(108, '8', 'garpit', '71', 'really great phon best performance under 8k', '5', '11:10 am ', '11-04-2021'),
(109, '8', 'garpit', '71', 'worst battery backup', '4', '11:10 am ', '11-04-2021'),
(110, '8', 'garpit', '72', 'great camera and battery performance is good', '5', '11:46 am ', '11-04-2021'),
(111, '8', 'garpit', '82', 'nice project', '5', '06:15 pm ', '04-05-2021'),
(112, '8', 'garpit', '81', 'Great Product', '5', '08:18 pm ', '16-04-2022'),
(113, '8', 'garpit', '70', 'great phone', '5', '09:20 pm ', '17-04-2022'),
(114, '8', 'garpit', '72', 'awsome mobile and value for money. great display', '5', '10:32 am ', '04-05-2022'),
(115, '8', 'garpit', '72', 'amazing display', '5', '10:32 am ', '04-05-2022'),
(116, '8', 'garpit', '72', 'worst display ever', '5', '10:32 am ', '04-05-2022'),
(117, '8', 'garpit', '71', 'this mobile is perfect. display quality is really good.', '5', '11:46 am ', '04-05-2022'),
(118, '8', 'garpit', '73', 'DISPLAY IS GOOD BUT BATTERY BACKUP IS WORST', '5', '12:13 pm ', '04-05-2022'),
(119, '8', 'garpit', '73', 'BATTERY AND DISPLAY IS BEST', '5', '12:14 pm ', '04-05-2022'),
(120, '8', 'garpit', '70', 'MOBILE IS GOOD DISPLAY IS GREAT', '5', '12:32 pm ', '04-05-2022'),
(121, '8', 'garpit', '70', 'POOR BATTERY BACKUP', '3', '12:34 pm ', '04-05-2022'),
(122, '8', 'garpit', '73', 'camera of phone is great', '5', '01:03 pm ', '20-06-2022'),
(123, '8', 'garpit', '81', 'awsome tv, screen is very good', '5', '01:18 pm ', '10-07-2022'),
(124, '8', 'garpit', '81', 'tv is really great', '5', '01:19 pm ', '10-07-2022'),
(125, '8', 'garpit', '81', 'very nice product great battery life', '5', '08:01 pm ', '12-02-2023'),
(126, '8', 'garpit', '81', 'GReat Battery Life', '5', '08:02 pm ', '12-02-2023'),
(127, '8', 'garpit', '81', 'nice Battery life', '5', '08:03 pm ', '12-02-2023'),
(128, '8', 'garpit', '82', 'battery backup is awsome', '5', '10:32 pm ', '14-02-2023'),
(129, '8', 'garpit', '82', 'camera is nice', '5', '10:32 pm ', '14-02-2023'),
(130, '8', 'garpit', '71', 'camera is perfect', '5', '10:33 pm ', '14-02-2023'),
(131, '8', 'garpit', '71', 'battery backup us good', '5', '10:34 pm ', '14-02-2023'),
(132, '8', 'garpit', '68', 'very nice display', '5', '11:04 am ', '04-03-2023'),
(133, '8', 'garpit', '83', 'This tv is really nice...sound quality is awsome', '5', '11:16 am ', '04-03-2023'),
(134, '8', 'garpit', '83', 'sound is really great', '3', '11:16 am ', '04-03-2023'),
(135, '8', 'garpit', '83', 'nice tv and display is amazing', '4', '11:17 am ', '04-03-2023'),
(136, '8', 'garpit', '83', 'i hate display but sound quality is good', '3', '11:17 am ', '04-03-2023'),
(137, '8', 'garpit', '83', 'i don''t like the diplay of thi tv', '4', '11:35 am ', '04-03-2023'),
(138, '8', 'user', '73', 'really nice tv', '5', '11:43 am ', '12-03-2023');

-- --------------------------------------------------------

--
-- Table structure for table `ep_category`
--

CREATE TABLE IF NOT EXISTS `ep_category` (
  `CAT_ID` int(15) NOT NULL AUTO_INCREMENT,
  `CATEGORY_NAME` varchar(45) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(45) NOT NULL,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `ep_category`
--

INSERT INTO `ep_category` (`CAT_ID`, `CATEGORY_NAME`, `DATE_CREATED`, `STATUS`) VALUES
(10, 'Smart Phone', '2018-03-04 12:31:57', 'Activate'),
(11, 'SMART TV', '2018-03-04 12:29:37', 'Activate'),
(12, 'TAB', '2018-03-04 12:29:57', 'Activate'),
(13, 'Cases & Covers', '2023-04-01 12:19:32', 'Activate'),
(14, 'Screen Protectors', '2023-04-01 12:19:32', 'Activate'),
(15, 'Power Banks', '2023-04-01 12:19:32', 'Activate'),
(16, 'Laptops', '2023-04-01 12:19:32', 'Activate'),
(17, 'Drives & Storage', '2023-04-01 12:19:32', 'Activate'),
(18, 'Printers & Ink', '2023-04-01 12:19:32', 'Activate'),
(19, 'Networking Devices', '2023-04-01 12:19:32', 'Activate'),
(20, 'Computer Accessories', '2023-04-01 12:19:32', 'Activate'),
(21, 'Game Zone', '2023-04-01 12:19:32', 'Activate'),
(22, 'Software', '2023-04-01 12:19:32', 'Activate'),
(23, 'Televisions', '2023-04-01 12:19:32', 'Activate'),
(24, 'Headphones', '2023-04-01 12:19:32', 'Activate'),
(25, 'Speakers', '2023-04-01 12:19:32', 'Activate'),
(26, 'Cameras', '2023-04-01 12:19:32', 'Activate'),
(27, 'DSLR Cameras', '2023-04-01 12:19:32', 'Activate'),
(28, 'Musical Instruments', '2023-04-01 12:19:32', 'Activate'),
(29, 'Gaming Consoles', '2023-04-01 12:19:32', 'Activate'),
(30, 'Air Conditioners', '2023-04-01 12:19:32', 'Activate'),
(31, 'Refrigerators', '2023-04-01 12:19:32', 'Activate'),
(32, 'Washing Machines', '2023-04-01 12:19:32', 'Activate'),
(33, 'Kitchen & Home Appliances', '2023-04-01 12:19:32', 'Activate'),
(34, 'Heating & Cooling Appliances', '2023-04-01 12:19:32', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `ep_product`
--

CREATE TABLE IF NOT EXISTS `ep_product` (
  `PD_ID` int(15) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(45) NOT NULL,
  `PRICE` varchar(45) NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `color` varchar(999) NOT NULL,
  `brand` varchar(111) NOT NULL,
  `PRODUCT_TYPE` varchar(45) NOT NULL,
  `image1` varchar(111) NOT NULL,
  `image2` varchar(999) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(45) NOT NULL,
  PRIMARY KEY (`PD_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `ep_product`
--

INSERT INTO `ep_product` (`PD_ID`, `PRODUCT_NAME`, `PRICE`, `DESCRIPTION`, `color`, `brand`, `PRODUCT_TYPE`, `image1`, `image2`, `DATE_CREATED`, `STATUS`) VALUES
(73, 'SAMSUNG Galaxy On Nxt (Gold, 16 GB)  (3 GB RA', '15900', '3 GB RAM, 16 GB ROM, Expandable Upto 256 GB, ', 'Rose Gold', 'SAMSUNG', 'Smart Phone', '05062017173057-samsung-galaxy-on-nxt-sm-g610fzdgins-original-imaenkzvmnyf7sby.jpeg', '05062017173057-samsung-galaxy-on-nxt-sm-g610fzdgins-original-imaenkzpuxhtxsf9.jpeg', '2023-05-07 20:07:36', ''),
(72, 'SAMSUNG Galaxy On Nxt (Gold, 32 GB)  (3 GB RA', '15900', '3 GB RAM, 32 GB ROM, Expandable Upto 256 GB, ', 'Rose Gold', 'SAMSUNG', 'Smart Phone', '05062017173052-samsung-galaxy-on-nxt-sm-g610fzdgins-original-imaenkzvmnyf7sby.jpeg', '05062017173052-samsung-galaxy-on-nxt-sm-g610fzdgins-original-imaenkzpuxhtxsf9.jpeg', '2023-05-07 20:07:36', ''),
(71, 'SAMSUNG Galaxy On5 (Black, 8 GB)  (1.5 GB RAM', '7490', '1.5 GB RAM, 8 GB ROM, Expandable Upto 128 GB,', 'black', 'SAMSUNG', 'Smart Phone', '05062017172712-samsung-galaxy-on7-sm-g600f-original-imaecqkgfgtmaw2y.jpeg', '05062017172712-samsung-galaxy-on5-sm-g550f-original-imaecqg9thg7n4em.jpeg', '2023-05-07 20:07:36', ''),
(70, 'OPPO A37f (Gold, 16 GB)', '12999', '4 GB RAM, 64 GB ROM, Expandable Upto 128 GB, ', 'silver', 'OPPO', 'Smart Phone', '05062017172429-oppo-a37f-a37f-original-imaehzsxmepq4pxq.jpeg', '05062017172429-oppo-a37-a37-original-imaekapjmhkfzj5u.jpeg', '2023-05-07 20:07:36', ''),
(69, 'OPPO F1s (Grey, 64 GB)  (4 GB RAM)', '17990', '4 GB RAM, 64 GB ROM, Expandable Upto 128 GB, ', 'black', 'OPPO', 'Smart Phone', '05062017172240-oppo-f1s-a1601-original-imaepzdw5egzhvur.jpeg', '05062017172240-oppo-f1s-a1601-original-imaepzdwtvbeadfj.jpeg', '2023-05-07 20:07:36', ''),
(67, 'Vivo V5s (Matte Black, 64 GB)  (4 GB RAM)', '18990', '4 GB RAM, 64 GB ROM, Expandable Upto 256 GB, ', 'black', '', 'Smart Phone', '05062017171630-vivo-v5s-1713-original-imaetdbdhcbgzn3d.jpeg', '05062017171630-vivo-v5s-1713-original-imaetdbeavsnxrq2.jpeg', '2018-03-04 12:33:13', ''),
(68, 'Vivo V3s (Matte Black, 64 GB)  (4 GB RAM)', '16990', '2 GB RAM, 64 GB ROM, Expandable Upto 256 GB, ', 'black', 'Vivo', 'Smart Phone', '05062017171638-vivo-v5s-1713-original-imaetdbdhcbgzn3d.jpeg', '05062017171638-vivo-v5s-1713-original-imaetdbeavsnxrq2.jpeg', '2023-05-07 20:07:36', ''),
(82, 'Honor MediaPad T3 10 32 GB 9.6 inch with Wi-F', '15999', '3 GB RAM | 32 GB ROM\r\nExpandable Upto 128 GB\r\n5 MP Primary Camera | 2 MP Front\r\nAndroid 7.0 (Nougat)\r\nBattery: 4800 mAh Li-ion Polymer\r\nVoice Call (Single Sim, LTE)\r\nProcessor: Qualcomm MSM8917 Quad Core Processor', 'White', 'Honor', 'TAB', '03042018083533-honor-ags-l09-original-imaey3sggrzmsvjf.jpeg', '03042018083533-honor-ags-l09-original-imaey3sghbt472m6.jpeg', '2022-05-04 11:59:22', '1'),
(81, 'Mi LED Smart TV 4 138.8 cm ', '39999', 'Take your TV-viewing experience to the next level with the Mi LED Smart TV 4. Thanks to its beautiful Frameless Display, you can have a fully immersive experience no matter what you are watching. The 4K+HDR and the Dolby+DTS technologies, along with the flagship performance and connectivity features this TV offers, make for a seamless experience.', 'Black', 'MI', 'SMART TV', '03042018082745-mi-l55m5-ai-original-imaf2h8sn7fzqkzd.jpeg', '03042018082745-mi-l55m5-ai-original-imaf2ewhysuseffz.jpeg', '2022-05-04 11:59:22', '1'),
(83, 'MI TV', '14000', 'MI Good Quality TV', 'Black', 'MI', 'SMART TV', '03042023064550-istockphoto-1317473239-170667a.jpg', '03042023064550-istockphoto-1317473239-170667a.jpg', '2023-03-04 11:15:50', '1'),
(84, 'Syska 10000 mAh Power Bank (Fast Charging)  (', '799', '1N Power Bank::1N Type-C Cable::1N User Manual cum Warranty Card', 'Black', 'Syska', 'Power Banks', '04062023154935-p1070d-elegant-black-10000-p1070d-elegant-black-syska-original-imaggmg6zj4d8yhb.jpeg', '04062023154935-p1070d-elegant-black-10000-p1070d-elegant-black-syska-original-imaggd4twbytk967.jpeg', '2023-04-06 19:19:35', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ep_search`
--

CREATE TABLE IF NOT EXISTS `ep_search` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `category` varchar(999) NOT NULL,
  `name` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `ep_search`
--

INSERT INTO `ep_search` (`ID`, `category`, `name`) VALUES
(2, 'Product', 'Crocine'),
(3, 'Distrubutor', 'fas'),
(4, 'City', 'Amravati'),
(5, 'Product', 'Metacin (500 mg)'),
(6, 'Distrubutor', 'LIfe Line Medical'),
(7, 'City', 'Akola'),
(8, 'Product', 'Crocin (15 ml)'),
(9, 'Distrubutor', 'Shree Medical'),
(10, 'City', 'Amravati'),
(11, 'Product', 'Althrocin (250 mg)'),
(12, 'Distrubutor', 'Datta Medical'),
(13, 'City', 'Akola'),
(14, 'Product', 'Dettol (Skin) (110 ml)'),
(15, 'Distrubutor', 'Akola Medical'),
(16, 'City', 'Akola'),
(17, 'Product', 'Acerock P Susp'),
(18, 'Distrubutor', 'Padia Medical'),
(19, 'City', 'Akola'),
(20, 'Product', 'Esgrapyrin'),
(21, 'Distrubutor', 'Shree Medical'),
(22, 'City', 'Akola'),
(23, 'Product', 'Crocine'),
(24, 'Distrubutor', 'Shri Medical'),
(25, 'City', 'aas'),
(26, 'Product', 'vidur'),
(27, 'Distrubutor', 'Shree Medical'),
(28, 'City', 'Akola'),
(29, 'Product', 'Enima'),
(30, 'Distrubutor', 'Malpani Medical'),
(31, 'City', 'Akola'),
(32, 'Product', 'Dispovan Syring'),
(33, 'Distrubutor', 'Gurukrupa Medical'),
(34, 'City', 'Akola'),
(35, 'Product', 'Glucose bottel'),
(36, 'Distrubutor', 'Shri Krupa Medical'),
(37, 'City', 'Akola'),
(38, 'Product', 'Alfansy'),
(39, 'Distrubutor', 'Shri Krupa Medical'),
(40, 'City', 'Akola'),
(41, 'Product', 'Glycodin'),
(42, 'Distrubutor', 'Joshi medical'),
(43, 'City', 'Amravati'),
(44, 'Product', 'Fabrex Plus'),
(45, 'Distrubutor', 'Nalat Medical'),
(46, 'City', 'Amravati'),
(47, 'Product', 'Liptocan Tablet'),
(48, 'Distrubutor', 'Chandak Medical'),
(49, 'City', 'Yavatmal'),
(50, 'Product', 'sdf'),
(51, 'Distrubutor', 'Shri Medical'),
(52, 'City', 'sdf'),
(53, 'Product', 'sdf'),
(54, 'Distrubutor', 'Shri Medical'),
(55, 'City', 'sdf'),
(56, 'Product', 'sdf'),
(57, 'Distrubutor', 'Shri Medical'),
(58, 'City', 'sdf'),
(59, 'Product', 'Asus Zenfone 5'),
(60, 'Distrubutor', '<br />\r\n<b>Notice</b>'),
(61, 'City', 'Amravati'),
(62, 'Product', 'Asus Zenfone 5'),
(63, 'Distrubutor', '<br />\r\n<b>Notice</b>'),
(64, 'City', 'Amravati');

-- --------------------------------------------------------

--
-- Table structure for table `ep_user`
--

CREATE TABLE IF NOT EXISTS `ep_user` (
  `USER_ID` int(15) NOT NULL AUTO_INCREMENT,
  `F_NAME` varchar(45) NOT NULL,
  `TYPE_BUSINESS` varchar(45) NOT NULL,
  `L_NAME` varchar(45) NOT NULL,
  `DOB` date NOT NULL,
  `SEX` varchar(45) NOT NULL,
  `ADDRESS` varchar(45) NOT NULL,
  `CITY` varchar(45) NOT NULL,
  `DISTRICT` varchar(45) NOT NULL,
  `PIN` varchar(45) NOT NULL,
  `STATE` varchar(45) NOT NULL,
  `PHONE` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `DATE_CREATED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `STATUS` varchar(45) NOT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `PHONE` (`PHONE`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `ep_user`
--

INSERT INTO `ep_user` (`USER_ID`, `F_NAME`, `TYPE_BUSINESS`, `L_NAME`, `DOB`, `SEX`, `ADDRESS`, `CITY`, `DISTRICT`, `PIN`, `STATE`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `DATE_CREATED`, `STATUS`) VALUES
(45, 'Kushal', 'Retailer', 'Dhole', '0000-00-00', 'Male', 'asdad', 'Amravati', '', '444606', '', '09890546711', 'kushaldholeasd@hotmail.com', 'kkushall', 'kkushal', '2023-03-25 00:06:36', '0');

-- --------------------------------------------------------

--
-- Table structure for table `final_order`
--

CREATE TABLE IF NOT EXISTS `final_order` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(999) NOT NULL,
  `order_id` varchar(111) NOT NULL,
  `p_id` varchar(999) NOT NULL,
  `quantity` varchar(999) NOT NULL,
  `price` varchar(111) NOT NULL,
  `dist_id` varchar(999) NOT NULL,
  `dist_name` varchar(123) NOT NULL,
  `order_date` varchar(123) NOT NULL,
  `previous_block_hash` varchar(999) NOT NULL,
  `current_block_hash` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1070 ;

--
-- Dumping data for table `final_order`
--

INSERT INTO `final_order` (`ID`, `user_id`, `order_id`, `p_id`, `quantity`, `price`, `dist_id`, `dist_name`, `order_date`, `previous_block_hash`, `current_block_hash`) VALUES
(1069, '44', '1215309019', '72', '1', '15900', '14', '14', '06-04-2023', '6f24bb2e107a9d7d5d66334c688fb5b1211b467b', '252a517262dd7d25101f72398e2a29e5b398ee54'),
(1068, '44', '1162603361', '69', '1', '17990', '14', '14', '06-04-2023', '21852f2146eda0f116448cd9e67663c088ac1b69', '6f24bb2e107a9d7d5d66334c688fb5b1211b467b'),
(1067, '45', '1347707234', '73', '1', '15900', '14', '14', '02-04-2023', '384d26ac33e81b1faa22c364ec8a4ab5b49f6505', '21852f2146eda0f116448cd9e67663c088ac1b69'),
(1066, '45', '1313759208', '72', '1', '15900', '14', '14', '01-04-2023', 'e81d252326b02977d5e8ebd4b305cccb4f9d8559', '384d26ac33e81b1faa22c364ec8a4ab5b49f6505');

-- --------------------------------------------------------

--
-- Table structure for table `miners`
--

CREATE TABLE IF NOT EXISTS `miners` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `psw` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `miners`
--

INSERT INTO `miners` (`ID`, `name`, `email`, `psw`, `contact`) VALUES
(2, 'Kushal Dhole', 'miner', 'miner', '5412435465');

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE IF NOT EXISTS `payment_mode` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(111) NOT NULL,
  `payment_mode` varchar(999) NOT NULL,
  `screenshot` varchar(999) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `payment_mode`
--

INSERT INTO `payment_mode` (`ID`, `order_id`, `payment_mode`, `screenshot`, `dt`) VALUES
(1, '1252459344', 'online', 'Jellyfish.jpg', '2023-04-01 14:38:11'),
(2, '1156071034', 'online', 'Jellyfish.jpg', '2023-04-01 14:38:34'),
(3, '1292912327', 'online', 'Tulips.jpg', '2023-04-01 14:39:43'),
(4, '1341101921', 'cod', '-', '2023-04-01 14:40:13'),
(5, '1313759208', 'cod', '-', '2023-04-01 14:41:36'),
(6, '1398040818', 'cod', '-', '2023-04-01 14:41:57'),
(7, '1347707234', 'online', 'Chrysanthemum.jpg', '2023-04-02 07:54:51'),
(8, '1162603361', 'online', 'Tulips.jpg', '2023-04-06 19:15:52'),
(9, '1215309018', 'cod', '-', '2023-04-06 19:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `proof_of_work`
--

CREATE TABLE IF NOT EXISTS `proof_of_work` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `blockchain_id` int(111) NOT NULL,
  `miners_id` int(111) NOT NULL,
  `order_id` varchar(111) NOT NULL,
  `P_id` varchar(111) NOT NULL,
  `status` int(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `proof_of_work`
--

INSERT INTO `proof_of_work` (`ID`, `blockchain_id`, `miners_id`, `order_id`, `P_id`, `status`) VALUES
(42, 0, 0, 'a', 'a', 0),
(43, 1067, 0, '1347707234', '73', 1),
(44, 1067, 0, '1347707234', '73', 1),
(45, 1066, 0, '1313759208', '72', 0),
(46, 1067, 0, '1347707234', '73', 1),
(47, 1069, 0, '1215309018', '72', 1),
(48, 1069, 0, '1215309019', '72', 0);
