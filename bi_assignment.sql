-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2023 at 05:32 PM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bi_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `Shop_ID` varchar(50) NOT NULL,
  `Shop_Type` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `No_Ordered_Products` int DEFAULT NULL,
  `Ave_age_products` double DEFAULT NULL,
  PRIMARY KEY (`Shop_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`Shop_ID`, `Shop_Type`, `District`, `No_Ordered_Products`, `Ave_age_products`) VALUES
('Jaff_001', 'Shopping Mall', 'Jaffna', 10, 15.5),
('Jaff_002', 'Retail Store', 'Jaffna', 20, 9.4),
('Jaff_003', 'Grocery Shop', 'Jaffna', 7, 17.8),
('Jaff_004', 'Shopping Mall', 'Jaffna', 9, 16.3),
('Kil_001', 'Grocery Shop', 'Killinochchi', 12, 18.6),
('Kil_002', 'Shopping Mall', 'Killinochchi', 14, 13.2),
('Kil_003', 'Retail Store', 'Killinochchi', 13, 14.7),
('Kil_004', 'Grocery Shop', 'Killinochchi', 11, 18.3),
('Mann_001', 'Grocery Shop', 'Mannar', 5, 20.2),
('Mann_002', 'Shopping Mall', 'Mannar', 6, 14.3),
('Mann_003', 'Retail Store', 'Mannar', 4, 19.5),
('Mann_004', 'Grocery Shop', 'Mannar', 6, 13.7),
('Mul_001', 'Shopping Mall', 'Mullaitheevu', 15, 10.1),
('Mul_002', 'Retail Store', 'Mullaitheevu', 18, 16.9),
('Mul_003', 'Grocery Shop', 'Mullaitheevu', 16, 11.9),
('Mul_004', 'Shopping Mall', 'Mullaitheevu', 17, 12.5),
('Vav_001', 'Retail Store', 'Vavuniya', 8, 12.8),
('Vav_002', 'Grocery Shop', 'Vavuniya', 9, 11.7),
('Vav_003', 'Shopping Mall', 'Vavuniya', 11, 8.2),
('Vav_004', 'Retail Store', 'Vavuniya', 10, 15.1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

DROP TABLE IF EXISTS `feedback_details`;
CREATE TABLE IF NOT EXISTS `feedback_details` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `Feedback` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`UserID`, `Customer_Name`, `District`, `Email_Address`, `Feedback`, `Date`) VALUES
(1, 'Warren Buffett', 'Jaffna', 'warren@example.com', 'Great service!', '2023-05-01'),
(2, 'Jeff Bezos', 'Mannar', 'jeff@example.com', 'Excellent experience!', '2023-05-02'),
(3, 'Bernard Arnault', 'Vavuniya', 'bernard@example.com', 'Highly satisfied!', '2023-05-03'),
(4, 'Francoise Bettencourt Meyers', 'Mullaitheevu', 'francoise@example.com', 'Amazing product quality!', '2023-05-04'),
(5, 'Amancio Ortega', 'Killinochchi', 'amancio@example.com', 'Prompt delivery!', '2023-05-05'),
(6, 'Larry Ellison', 'Jaffna', 'larry@example.com', 'Friendly staff!', '2023-05-06'),
(7, 'Larry Page', 'Mannar', 'larry@example.com', 'Impressive variety!', '2023-05-07'),
(8, 'Sergey Brin', 'Vavuniya', 'sergey@example.com', 'Quick response!', '2023-05-08'),
(9, 'Steve Ballmer', 'Mullaitheevu', 'steve@example.com', 'Top-notch service!', '2023-05-09'),
(10, 'Mukesh Ambani', 'Killinochchi', 'mukesh@example.com', 'Great value for money!', '2023-05-10'),
(11, 'François Pinault', 'Jaffna', 'francois@example.com', 'Wonderful shopping experience!', '2023-05-11'),
(12, 'Carlos Slim Helu', 'Mannar', 'carlos@example.com', 'Outstanding customer support!', '2023-05-12'),
(13, 'Amancio Ortega', 'Vavuniya', 'amancio@example.com', 'Highly recommended!', '2023-05-13'),
(14, 'Michele Ferrero', 'Mullaitheevu', 'michele@example.com', 'Excellent quality products!', '2023-05-14'),
(15, 'Zhong Shanshan', 'Killinochchi', 'zhong@example.com', 'Great attention to detail!', '2023-05-15'),
(16, 'Ma Huateng', 'Jaffna', 'ma@example.com', 'Smooth transaction!', '2023-05-16'),
(17, 'Jack Ma', 'Mannar', 'jack@example.com', 'Amazing customer service!', '2023-05-17'),
(18, 'Michael Bloomberg', 'Vavuniya', 'michael@example.com', 'Satisfied with my purchase!', '2023-05-18'),
(19, 'Sheldon Adelson', 'Mullaitheevu', 'sheldon@example.com', 'Quick and efficient!', '2023-05-19'),
(20, 'Wang Jianlin', 'Killinochchi', 'wang@example.com', 'Fantastic shopping experience!', '2023-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `Order_ID` varchar(25) NOT NULL,
  `Product_Name` varchar(50) DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
  `Product_Price` decimal(10,2) DEFAULT NULL,
  `Order_Date` date DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_ID`, `Product_Name`, `Quantity`, `Product_Price`, `Order_Date`, `District`, `Status`) VALUES
('Nes/Ord/001', 'Nangrow', 874, '5423856.23', '2023-05-04', 'Jaffna', 'Sent'),
('Nes/Ord/002', 'Lactogrow Comfopro', 934, '9432567.12', '2023-05-03', 'Vavuniya', 'Hold'),
('Nes/Ord/003', 'Ceregrow', 513, '1234567.89', '2023-05-02', 'Mannar', 'Ongoing'),
('Nes/Ord/004', 'Nespray', 756, '8754289.43', '2023-05-01', 'Killinochchi', 'Sent'),
('Nes/Ord/005', 'Milo', 456, '7845961.65', '2023-04-30', 'Mullaitheevu', 'Hold'),
('Nes/Ord/006', 'Maggi', 892, '6543210.98', '2023-04-29', 'Jaffna', 'Ongoing'),
('Nes/Ord/007', 'Nescafe', 784, '7845961.65', '2023-04-28', 'Vavuniya', 'Sent'),
('Nes/Ord/008', 'Milkmaid', 654, '8754289.43', '2023-04-27', 'Mannar', 'Hold'),
('Nes/Ord/009', 'Nestomalt', 498, '1234567.89', '2023-04-26', 'Killinochchi', 'Ongoing'),
('Nes/Ord/010', 'Breakfast cereals', 789, '5423856.23', '2023-04-25', 'Mullaitheevu', 'Sent'),
('Nes/Ord/011', 'KitKat', 614, '9432567.12', '2023-04-24', 'Jaffna', 'Hold'),
('Nes/Ord/012', 'Nangrow', 431, '1234567.89', '2023-04-23', 'Vavuniya', 'Ongoing'),
('Nes/Ord/013', 'Lactogrow Comfopro', 874, '8754289.43', '2023-04-22', 'Mannar', 'Sent'),
('Nes/Ord/014', 'Ceregrow', 623, '5423856.23', '2023-04-21', 'Killinochchi', 'Hold'),
('Nes/Ord/015', 'Nespray', 514, '6543210.98', '2023-04-20', 'Mullaitheevu', 'Ongoing'),
('Nes/Ord/016', 'Milo', 753, '9432567.12', '2023-04-19', 'Jaffna', 'Sent'),
('Nes/Ord/017', 'Maggi', 531, '7845961.65', '2023-04-18', 'Vavuniya', 'Hold'),
('Nes/Ord/018', 'Nescafe', 784, '1234567.89', '2023-04-17', 'Mannar', 'Ongoing'),
('Nes/Ord/019', 'Milkmaid', 697, '5423856.23', '2023-04-16', 'Killinochchi', 'Sent'),
('Nes/Ord/020', 'Nestomalt', 824, '9432567.12', '2023-04-15', 'Mullaitheevu', 'Hold'),
('Nes/Ord/021', 'Breakfast cereals', 365, '8754289.43', '2023-04-14', 'Jaffna', 'Ongoing'),
('Nes/Ord/022', 'KitKat', 879, '6543210.98', '2023-04-13', 'Vavuniya', 'Sent'),
('Nes/Ord/023', 'Nangrow', 562, '7845961.65', '2023-04-12', 'Mannar', 'Hold'),
('Nes/Ord/024', 'Lactogrow Comfopro', 987, '1234567.89', '2023-04-11', 'Killinochchi', 'Ongoing'),
('Nes/Ord/025', 'Ceregrow', 478, '5423856.23', '2023-04-10', 'Mullaitheevu', 'Sent'),
('Nes/Ord/026', 'Nespray', 814, '9432567.12', '2023-04-09', 'Jaffna', 'Hold'),
('Nes/Ord/027', 'Milo', 625, '8754289.43', '2023-04-08', 'Vavuniya', 'Ongoing'),
('Nes/Ord/028', 'Maggi', 751, '6543210.98', '2023-04-07', 'Mannar', 'Sent'),
('Nes/Ord/029', 'Nescafe', 516, '7845961.65', '2023-04-06', 'Killinochchi', 'Hold'),
('Nes/Ord/030', 'Milkmaid', 964, '1234567.89', '2023-04-05', 'Mullaitheevu', 'Ongoing'),
('Nes/Ord/031', 'Nestomalt', 625, '5423856.23', '2023-04-04', 'Jaffna', 'Sent'),
('Nes/Ord/032', 'Breakfast cereals', 751, '9432567.12', '2023-04-03', 'Vavuniya', 'Hold'),
('Nes/Ord/033', 'KitKat', 862, '8754289.43', '2023-04-02', 'Mannar', 'Ongoing'),
('Nes/Ord/034', 'Nangrow', 479, '1234567.89', '2023-04-01', 'Killinochchi', 'Sent'),
('Nes/Ord/035', 'Lactogrow Comfopro', 846, '7845961.65', '2023-03-31', 'Mullaitheevu', 'Hold'),
('Nes/Ord/036', 'Ceregrow', 689, '6543210.98', '2023-03-30', 'Jaffna', 'Ongoing'),
('Nes/Ord/037', 'Nespray', 568, '9432567.12', '2023-03-29', 'Vavuniya', 'Sent'),
('Nes/Ord/038', 'Milo', 412, '8754289.43', '2023-03-28', 'Mannar', 'Hold'),
('Nes/Ord/039', 'Maggi', 951, '1234567.89', '2023-03-27', 'Killinochchi', 'Ongoing'),
('Nes/Ord/040', 'Nescafe', 732, '5423856.23', '2023-03-26', 'Mullaitheevu', 'Sent'),
('Nes/Ord/041', 'Milkmaid', 613, '9432567.12', '2023-03-25', 'Jaffna', 'Hold'),
('Nes/Ord/042', 'Nestomalt', 795, '7845961.65', '2023-03-24', 'Vavuniya', 'Ongoing'),
('Nes/Ord/043', 'Breakfast cereals', 547, '8754289.43', '2023-03-23', 'Mannar', 'Sent'),
('Nes/Ord/044', 'KitKat', 385, '6543210.98', '2023-03-22', 'Killinochchi', 'Hold'),
('Nes/Ord/045', 'Nangrow', 824, '1234567.89', '2023-03-21', 'Mullaitheevu', 'Ongoing'),
('Nes/Ord/046', 'Lactogrow Comfopro', 457, '5423856.23', '2023-03-20', 'Jaffna', 'Sent'),
('Nes/Ord/047', 'Ceregrow', 936, '9432567.12', '2023-03-19', 'Vavuniya', 'Hold'),
('Nes/Ord/048', 'Nespray', 652, '8754289.43', '2023-03-18', 'Mannar', 'Ongoing'),
('Nes/Ord/049', 'Milo', 743, '7845961.65', '2023-03-17', 'Killinochchi', 'Sent'),
('Nes/Ord/050', 'Maggi', 524, '6543210.98', '2023-03-16', 'Mullaitheevu', 'Hold'),
('Nes/Ord/051', 'Nescafe', 875, '1234567.89', '2023-03-15', 'Jaffna', 'Ongoing'),
('Nes/Ord/052', 'Milkmaid', 417, '5423856.23', '2023-03-14', 'Vavuniya', 'Sent'),
('Nes/Ord/053', 'Nestomalt', 795, '9432567.12', '2023-03-13', 'Mannar', 'Hold'),
('Nes/Ord/054', 'Breakfast cereals', 628, '8754289.43', '2023-03-12', 'Killinochchi', 'Ongoing'),
('Nes/Ord/055', 'KitKat', 536, '7845961.65', '2023-03-11', 'Mullaitheevu', 'Sent'),
('Nes/Ord/056', 'Nangrow', 795, '6543210.98', '2023-03-10', 'Jaffna', 'Hold'),
('Nes/Ord/057', 'Lactogrow Comfopro', 592, '1234567.89', '2023-03-09', 'Vavuniya', 'Ongoing'),
('Nes/Ord/058', 'Ceregrow', 473, '5423856.23', '2023-03-08', 'Mannar', 'Sent'),
('Nes/Ord/059', 'Nespray', 951, '9432567.12', '2023-03-07', 'Killinochchi', 'Hold'),
('Nes/Ord/060', 'Milo', 674, '8754289.43', '2023-03-06', 'Mullaitheevu', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `sales_partners_info`
--

DROP TABLE IF EXISTS `sales_partners_info`;
CREATE TABLE IF NOT EXISTS `sales_partners_info` (
  `Sales_ID` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `District` varchar(25) NOT NULL,
  `No_of_Total_Purchase` int NOT NULL,
  `Allocated_Sales_Limit` int NOT NULL,
  PRIMARY KEY (`Sales_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales_partners_info`
--

INSERT INTO `sales_partners_info` (`Sales_ID`, `Name`, `District`, `No_of_Total_Purchase`, `Allocated_Sales_Limit`) VALUES
('Jaf_001', 'John Doe', 'Jaffna', 123456, 500000),
('Jaff_006', 'Sarah Brown', 'Jaffna', 678901, 600000),
('Jaff_011', 'James Adams', 'Jaffna', 234567, 500000),
('Jaff_016', 'Ava Clark', 'Jaffna', 789012, 600000),
('Kil_004', 'Emily Davis', 'Killinochchi', 456789, 200000),
('Kil_009', 'Daniel Clark', 'Killinochchi', 901234, 900000),
('Kil_014', 'Isabella Wilson', 'Killinochchi', 567890, 200000),
('Kil_019', 'William Wright', 'Killinochchi', 123456, 900000),
('Man_003', 'Michael Johnson', 'Mannar', 345678, 300000),
('Man_008', 'Jessica Taylor', 'Mannar', 890123, 800000),
('Man_013', 'Matthew Harris', 'Mannar', 456789, 300000),
('Man_018', 'Mia Lewis', 'Mannar', 901234, 800000),
('Mul_005', 'David Wilson', 'Mullaitheevu', 567890, 100000),
('Mul_010', 'Olivia Martinez', 'Mullaitheevu', 123456, 1000000),
('Mul_015', 'Ethan Brown', 'Mullaitheevu', 678901, 100000),
('Mul_020', 'Charlotte Turner', 'Mullaitheevu', 234567, 1000000),
('Vav_002', 'Jane Smith', 'Vavuniya', 234567, 400000),
('Vav_007', 'Christopher Lee', 'Vavuniya', 789012, 700000),
('Vav_012', 'Sophia Rodriguez', 'Vavuniya', 345678, 400000),
('Vav_017', 'Alexander Thompson', 'Vavuniya', 890123, 700000);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

DROP TABLE IF EXISTS `staff_details`;
CREATE TABLE IF NOT EXISTS `staff_details` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(25) DEFAULT NULL,
  `Username` varchar(25) DEFAULT NULL,
  `Staff_Name` varchar(25) DEFAULT NULL,
  `NIC` varchar(25) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Address` varchar(25) DEFAULT NULL,
  `Telephone_No` varchar(25) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `Position` varchar(25) DEFAULT NULL,
  `Join_Date` varchar(25) DEFAULT NULL,
  `Password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`ID`, `User_ID`, `Username`, `Staff_Name`, `NIC`, `Email`, `Address`, `Telephone_No`, `Gender`, `Position`, `Join_Date`, `Password`) VALUES
(2, 'MGR/Jaf/001', 'jaffnamgr', 'Bill Gates', '111111111111', 'nestlejaffmgr@gmail.com', 'Jaffna', '0762112931', 'Male', 'Jaffna Manager', '2019/0101', '654321'),
(3, 'MGR/Vav/002', 'vavuniyamgr', 'Sundar Pichai', '222222222222', 'nestlevavmgr@gmail.com', 'Vavuniya', '0762442931', 'Male', 'Vavuniya Manager', '2019/05/12', '654321'),
(4, 'MGR/Man/003', 'mannarmgr', 'Steve Jobs', '333333333333', 'nestlemannmgr@gmail.com', 'Mannar', '0762252931', 'Male', 'Mannar Manager', '2020/03/10', '654471'),
(5, 'MGR/Kil/004', 'killinomgr', 'Elon Musk', '444444444444', 'nestlekilmgr@gmail.com', 'Killinochchi', '0762332931', 'Male', 'Killinochchi Manager', '2021/02/28', '651251'),
(6, 'MGR/Mul/005', 'mullaitheemgr', 'Mark Zuckerberg', '555555555555', 'nestlemullmgr@gmail.com', 'Mullaitheevu', '0764582931', 'Male', 'Mullaitheevu Manager', '2022/07/15', '651475');

-- --------------------------------------------------------

--
-- Table structure for table `userpass_detail`
--

DROP TABLE IF EXISTS `userpass_detail`;
CREATE TABLE IF NOT EXISTS `userpass_detail` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UserID` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Role` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userpass_detail`
--

INSERT INTO `userpass_detail` (`ID`, `UserID`, `Username`, `Role`, `Password`, `Email`) VALUES
(1, 'Nes/ADM/001', 'Nestleadmin', 'Province Manager', '123456', 'nestleadmin@gmail.com'),
(2, 'MGR/Jaf/001', 'jaffnamgr', 'Jaffna Manager', '654321', 'nestlejaffmgr@gmail.com'),
(3, 'MGR/Vav/002', 'vavuniyamgr', 'Vavuniya Manager', '654321', 'nestlevavmgr@gmail.com'),
(4, 'MGR/Man/003', 'mannarmgr', 'Mannar Manager', '654471', 'nestlemannmgr@gmail.com'),
(5, 'MGR/Kil/004', 'killinomgr', 'Killinochchi Manager', '651251', 'nestlekilmgr@gmail.com'),
(6, 'MGR/Mul/005', 'mullaitheemgr', 'Mullaitheevu Manager', '651475', 'nestlemullmgr@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
