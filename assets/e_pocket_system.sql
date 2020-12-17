-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:49 AM
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
  `c_assigned_manager` varchar(30) NOT NULL,
  `product_invested` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_password`, `c_username`, `c_email`, `c_gender`, `c_dob`, `c_credit`, `vouchers`, `c_package`, `c_assigned_manager`, `product_invested`) VALUES
(1, 'shafin ahmed', '123', 'shafin580', 'shafin@gmail.com', 'Male', '2020-12-01', 0, 0, 'Basic', 'rabbi', 0),
(2, 'rakib ahmed', '1234', 'rakib', 'rakib@gmail.com', 'Male', '2020-12-09', 0, 0, 'Basic', 'shafin', 0),
(3, 'Md shafin', '123456', 'shafin123', 'shafin580@gmail.com', 'Male', '2020-12-21', 4500, 7, 'Pro', '', 0);

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
('shafin123', 'Nagad', '7412356985');

-- --------------------------------------------------------

--
-- Table structure for table `client_stock_products`
--

CREATE TABLE `client_stock_products` (
  `c_username` varchar(30) NOT NULL,
  `sp_id` varchar(10) NOT NULL,
  `sp_name` varchar(30) NOT NULL,
  `sp_bought_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `co_client_username` varchar(50) NOT NULL,
  `platform` varchar(30) NOT NULL,
  `discount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'shafin123', 'W', 'Withdraw', 2000, NULL, 'Pending', '2020-12-16');

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
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
