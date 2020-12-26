-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 08:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_pocket_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `c_dob` date NOT NULL,
  `c_credit` double DEFAULT 0,
  `vouchers` int(11) NOT NULL DEFAULT 0,
  `c_package` varchar(20) NOT NULL DEFAULT 'Basic',
  `c_assigned_manager` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_password`, `c_username`, `c_email`, `c_gender`, `c_dob`, `c_credit`, `vouchers`, `c_package`, `c_assigned_manager`) VALUES
(1, 'shafin ahmed', '123', 'shafin580', 'shafin@gmail.com', 'Male', '2020-12-01', 0, 0, 'Basic', 'rabbi'),
(2, 'rakib ahmed', '1234', 'rakib', 'rakib@gmail.com', 'Male', '2020-12-09', 0, 0, 'Basic', 'shafin'),
(3, 'Md shafin', '123456', 'shafin123', 'shafin580@gmail.com', 'Male', '2020-12-21', 7020, 9, 'Ultimate', '');

-- --------------------------------------------------------

--
-- Table structure for table `client_billing_account`
--

CREATE TABLE `client_billing_account` (
  `username` varchar(20) NOT NULL,
  `billing_account_name` varchar(20) NOT NULL,
  `billing_account_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_billing_account`
--

INSERT INTO `client_billing_account` (`username`, `billing_account_name`, `billing_account_number`) VALUES
('shafin123', 'DBBL', '4125896321'),
('shafin123', 'Bkash', '4125896322'),
('shafin123', 'Nagad', '4654664664'),
('shafin123', 'DBBL', '4654664666'),
('shafin123', 'Bkash', '4654664668'),
('shafin123', 'Nagad', '7412356985');

-- --------------------------------------------------------

--
-- Table structure for table `client_stock_products`
--

CREATE TABLE `client_stock_products` (
  `c_username` varchar(30) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  `sp_name` varchar(30) NOT NULL,
  `sp_price` double DEFAULT NULL,
  `sp_bought_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_stock_products`
--

INSERT INTO `client_stock_products` (`c_username`, `sp_id`, `sp_name`, `sp_price`, `sp_bought_qty`) VALUES
('shafin123', 'sp-001', 'pen', 3, 0),
('shafin123', 'sp-002', 'buiscuit', 4, 6),
('shafin123', 'sp-003', 'paper', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`) VALUES
('rakib', '1234', 'Client'),
('shafin123', '123456', 'Client'),
('shafin580', '123', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `offered_products`
--

CREATE TABLE `offered_products` (
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `co_client_username` varchar(50) NOT NULL,
  `platform` varchar(30) NOT NULL,
  `discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offered_products`
--

INSERT INTO `offered_products` (`p_id`, `p_name`, `p_price`, `stock`, `co_client_username`, `platform`, `discount`) VALUES
('p-001', 'iphone 12', 1200, 5, 'rabbi-int', 'amazon', 100),
('p-002', 'laptop', 1500, 19, 'rakib', 'daraz', 70),
('p-003', 'monitor', 20000, 0, 'ahmed', 'pickaboo', 500);

-- --------------------------------------------------------

--
-- Table structure for table `stock_products`
--

CREATE TABLE `stock_products` (
  `sp_id` varchar(10) NOT NULL,
  `sp_name` varchar(25) NOT NULL,
  `sp_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_products`
--

INSERT INTO `stock_products` (`sp_id`, `sp_name`, `sp_price`) VALUES
('sp-001', 'pen', 3),
('sp-002', 'buiscuit', 4),
('sp-003', 'paper', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `product_item` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `stock_action` varchar(10) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `username`, `product_id`, `product_item`, `price`, `stock_action`, `status`, `date`) VALUES
(1, 'shafin123', 'P-Pro', 'Pro Package', 500, NULL, 'Pending', '2020-12-16'),
(2, 'shafin123', 'D', 'Deposite', 3000, NULL, 'Pending', '2020-12-16'),
(3, 'shafin123', 'W', 'Withdraw', 1000, NULL, 'Pending', '2020-12-16'),
(4, 'shafin123', 'D', 'Deposite', 2000, NULL, 'Clear', '2020-12-16'),
(5, 'shafin123', 'W', 'Withdraw', 2000, NULL, 'Pending', '2020-12-16'),
(6, 'shafin123', 'F', '01711644986', 100, 'null', 'Pending', '2020-12-18'),
(7, 'shafin123', 'F', '01711644985', 100, 'null', 'Pending', '2020-12-18'),
(8, 'shafin123', 'F', '01711644984', 100, 'null', 'Pending', '2020-12-18'),
(9, 'shafin123', 'F', '01711644982', 100, 'no', 'Pending', '2020-12-18'),
(10, 'shafin123', 'F', '01711644981', 100, NULL, 'Clear', '2020-12-18'),
(11, 'shafin123', 'F', '01711644981', 100, NULL, 'Clear', '2020-12-18'),
(12, 'shafin123', 'D', 'Deposite', 500, NULL, 'Clear', '2020-12-18'),
(13, 'shafin123', 'W', 'Withdraw', 500, NULL, 'Pending', '2020-12-18'),
(14, 'shafin123', 'P-Ultimate', 'Ultimate Package', 1000, NULL, 'Pending', '2020-12-18'),
(15, 'shafin123', 'W', 'Withdraw', 1000, NULL, 'Pending', '2020-12-18'),
(16, 'shafin123', 'D', 'Deposite', 1000, NULL, 'Clear', '2020-12-18'),
(17, 'shafin123', 'F', '01711382280', 1000, NULL, 'Clear', '2020-12-18'),
(18, 'shafin123', 'F', '01711382280', 500, NULL, 'Clear', '2020-12-18'),
(19, 'shafin123', 'F', '01711382280', 200, NULL, 'Clear', '2020-12-18'),
(20, 'shafin123', 'F', '01711382280', 100, NULL, 'Clear', '2020-12-18'),
(23, 'shafin123', 'sp-002', '', 2000, 'buy', 'Pending', '2020-12-24'),
(24, 'shafin123', 'D', 'Deposite', 5800, NULL, 'Clear', '2020-12-24'),
(25, 'shafin123', 'sp-001', '', 30, 'buy', 'Pending', '2020-12-24'),
(26, 'shafin123', 'sp-002', 'buiscuit', 400, 'buy', 'Pending', '2020-12-24'),
(27, 'shafin123', 'sp-002', 'buiscuit', 400, 'buy', 'Pending', '2020-12-24'),
(28, 'shafin123', 'sp-001', 'pen', 600, 'buy', 'Pending', '2020-12-24'),
(29, 'shafin123', 'sp-001', 'pen', 300, 'buy', 'Pending', '2020-12-24'),
(30, 'shafin123', 'sp-001', 'pen', 300, 'buy', 'Pending', '2020-12-24'),
(31, 'shafin123', 'sp-003', 'paper', 100, 'buy', 'Pending', '2020-12-24'),
(33, 'shafin123', 'p-001', 'iphone 12', 1050, 'buy', 'Pending', '2020-12-24'),
(34, 'shafin123', 'p-002', 'laptop', 1380, 'buy', 'Pending', '2020-12-24'),
(35, 'shafin123', 'D', 'Deposite', 10000, NULL, 'Clear', '2020-12-24'),
(36, 'shafin123', 'p-001', 'iphone 12', 1050, 'buy', 'Pending', '2020-12-24'),
(37, 'shafin123', 'sp-001', 'pen', 90, 'buy', 'Pending', '2020-12-24'),
(38, 'shafin123', 'sp-002', 'buiscuit', 40, 'buy', 'Pending', '2020-12-24'),
(39, 'shafin123', 'sp-003', 'paper', 20, 'buy', 'Pending', '2020-12-24'),
(40, 'shafin123', 'sp-002', 'buiscuit', 40, 'buy', 'Pending', '2020-12-24'),
(41, 'shafin123', 'p-001', 'iphone 12', 1050, 'buy', 'Pending', '2020-12-26'),
(42, 'shafin123', 'p-001', 'iphone 12', 1050, NULL, 'Pending', '2020-12-26'),
(43, 'shafin123', 'sp-001', 'pen', 60, 'sell', 'Pending', '2020-12-26'),
(44, 'shafin123', 'sp-002', 'buiscuit', 40, 'sell', 'Pending', '2020-12-26'),
(45, 'shafin123', 'sp-002', 'buiscuit(2)', 8, 'sell', 'Pending', '2020-12-26'),
(46, 'shafin123', 'sp-001', 'pen(10)', 30, 'buy', 'Pending', '2020-12-26'),
(47, 'shafin123', 'sp-002', 'buiscuit(2)', 8, 'sell', 'Pending', '2020-12-26'),
(48, 'shafin123', 'sp-001', 'pen(20)', 60, 'sell', 'Pending', '2020-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `client_billing_account`
--
ALTER TABLE `client_billing_account`
  ADD UNIQUE KEY `billing_account_number` (`billing_account_number`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `offered_products`
--
ALTER TABLE `offered_products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `stock_products`
--
ALTER TABLE `stock_products`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
