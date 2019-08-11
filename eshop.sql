-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 02:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(47, 'xorrrex@gmail.com', 'Hello UWL!!!'),
(48, '', ''),
(49, 'peter@email.com', 'Hello!'),
(50, '', ''),
(51, '', ''),
(52, '', ''),
(53, '', ''),
(54, '', ''),
(55, '', ''),
(56, '', ''),
(57, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(2, 'Orestas', '', 'Augustinaitis', '5 The Boulevard, Flat 14', 'Crawley', 'RH101UR', '07491293839', '', 'xorrrex@gmail.com', '12345678910'),
(3, 'S', '', 'S', 'Flat 5, 119 Inwood Road', 'United Kingdom', 'TW3 1XH', '', '', 'sigitos@inbox.lt', '123'),
(4, 'John', '', 'West', 'Flat 14, 5 The Boulevard', 'Crawley', 'rh101ur', '', '', 'johnwest@gmail.com', '12345678910'),
(5, 'Orestas', '', 'Augustinaitis', 'Flat 14, 5 The boulevard', 'West Sussex', 'RH101Ur', '752452123', '', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` text NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(55, '20 Euros, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'gfjybbg4.jpg', 'Props4You', 'football'),
(214, '20 Pounds, \"Specimen\" 100PCS', '7.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '1313.jpg', 'Props4You', 'running'),
(269, '5 Pounds, \"Specimen\" 100PCS', '6.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '2.jpg', 'Props4You', 'running'),
(545, '100 Dollars - Old Style, 5 Batches.', '6.99', 'Older style dollars, perfect for \"Big Piles\" 5x20PCS', '3.jpg', 'Props4You', 'basketball'),
(601, '20,50 Pounds, \"Specimen\" 2x100PCS Bundle', '13.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '444.jpg', 'Props4You', 'running'),
(1132, '5 Pounds, Bent Batch, 20PCS', '3.49', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 20PCS Notes', '1ss.jpg', 'Props4You', 'running'),
(2985, '1 Million Dollars, Double sided, 10000PCS', '459.99', 'One million dollars, double sided 100s, 10.000PCS of Notes.', '1 million dollars.png', 'Props4You', 'feature'),
(4268, '10.000 Dollars Stack, 100PCS', '6.99', 'One stack of 100s, 10,000 Dollars in total. 100PCS', '10k dollar.png', 'Props4You', 'basketball'),
(6233, '20 Pounds, Bent Batch, 20 PCS', '3.49', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', 'ffhf.jpg', 'Props4You', 'running'),
(6421, '500 Euro, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'hgdh5.jpg', 'Props4You', 'football'),
(7827, '50 Euros, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'eg5562.jpg', 'Props4You', 'football'),
(9480, '10 Pounds, Bent Batch, 20 PCS', '3.49', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '4gff.jpg', 'Props4You', 'running'),
(9951, '20,50 Pounds Luggage Bundle, 1000PCS', '59.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '5139343.jpg', 'Props4You', 'feature'),
(19850, 'Pound Set, 40 PCS', '3.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 10PCS Each Denomination', 'SET5555.jpg', 'Props4You', 'feature'),
(20191, '100 Dollars, Old style, 20 Batches', '16.99', 'Older style dollars, perfect for \"Big Piles\" 5x20PCS', '5.jpg', 'Props4You', 'basketball'),
(27646, '10 Pounds, \"Specimen\" 100PCS', '6.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '111.jpg', 'Props4You', 'running'),
(63711, '5x20,5x50 Pounds Bundle, Luggage, \"Specimen\" 1000PCS', '69.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '222.jpg', 'Props4You', 'running'),
(94297, '5,10,20,50,100,200,500 Euro Set, 70PCS', '5.49', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. A set of every Euro Banknote, 10PCS Each Denomination.', '3344ddd.jpg', 'Props4You', 'football'),
(262140, '10 Euros, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'adadsdfs.jpg', 'Props4You', 'football'),
(482372, '50 Pounds, \"Specimen\" 100PCS', '7.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '123.jpg', 'Props4You', 'running'),
(586473, '50 Pounds, Bent Batch, 20PCS', '3.49', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 20PCS Notes', 'ssfdgdg.jpg', 'Props4You', 'running'),
(651132, '5 Euros, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'ssssss.jpg', 'Props4You', 'football'),
(862939, '5,10,20,50 Pounds Bundle, \"Specimen\" 400PCS', '24.99', 'Approved by Bank of England Legal Prop Notes. Has a word \"Specimen\" In the Middle. Perfect for all occasions. 1 Pack - 100PCS Notes', '666.jpg', 'Props4You', 'running'),
(3257705, '100 Euro, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', '6666h.jpg', 'Props4You', 'football'),
(3538816, '200 Euro, Souvenir Production, 100PCS', '6.99', 'Euro Prop Notes, has a \"Souvenir Production\" Markings at both sides. Perfect for filming where Euros are required. 1 Pack - 100PCS Notes.', 'fgfg452.jpg', 'Props4You', 'football');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(96, 4268, 58),
(95, 2985, 7),
(94, 19850, 69),
(93, 9951, 9),
(92, 94297, 52),
(91, 6421, 37),
(90, 3538816, 37),
(89, 3257705, 33),
(88, 7827, 21),
(87, 55, 45),
(86, 262140, 52),
(85, 651132, 54),
(84, 586473, 63),
(83, 6233, 24),
(82, 9480, 86),
(81, 1132, 63),
(80, 63711, 12),
(79, 862939, 16),
(78, 601, 7),
(77, 482372, 15),
(74, 269, 43),
(76, 214, 9),
(75, 27646, 18),
(71, 20191, 10),
(70, 545, 20);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(4590, 2, 21, 'Confirmed', 'Aug 08, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(29, 3257705, 3, 4590);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
