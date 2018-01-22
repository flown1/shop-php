-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2018 at 12:52 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `address` mediumtext NOT NULL,
  `id_customer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `address`, `id_customer`) VALUES
(1, 'Lodz, ul. Piotrkowska 37 m.1', 1),
(2, 'Lodz, ul. Brzezna 16 m.6', 1),
(12, ' Lodz, Brzezna 16 ', 1),
(14, ' TomaszÃ³w Maz. 13 ', 1),
(15, ' TomaszÃ³w Maz. 123 ', 1),
(16, ' PiotrkÃ³w Tryb. ul .SÅ‚owackiego 13 ', 1),
(17, ' Warszawa, ul. MarszaÅ‚kowska 19 ', 1),
(18, ' hey ', 1),
(19, ' Adres usera TEST ', 2),
(20, ' Adres JANA ', 2),
(21, ' Piotrkowska 35 ', 2),
(22, ' W ', 1),
(23, ' awdaW ', 1),
(24, ' W ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_product_category` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_product_category`, `category_name`, `id_product`) VALUES
(1, 'fishing_rods', 1),
(2, 'sales', 1),
(3, 'fishing_rods', 2),
(4, 'floats', 4),
(5, 'baits', 5),
(6, 'sales', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `surname`, `email`, `password`) VALUES
(1, 'Wiktor', 'Pabich', 'pabichwiktor@gmail.com', '123qwe'),
(2, 'Jan', 'Kowalski', 'test@test.com', '123qwe');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id_order` int(10) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_history`
--

CREATE TABLE `orders_history` (
  `order_history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `brand_name` varchar(45) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image_url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `category`, `brand_name`, `price`, `image_url`) VALUES
(1, 'WEDKA TRABUCCO ASTORE TLS', 1, 'ASTORE', 100.00, 'http://www.wedkarski.com/6352/wedka-black-rock-spinning-okuma.jpg'),
(2, 'WEDKA TRABUCCO SYNTIUM POLE', 1, 'TRABUCCO', 200.00, 'https://cdn.xl.thumbs.canstockphoto.pl/pr%C4%99t-rysunek-w%C4%99dkarski-rysunek_csp26503403.jpg'),
(3, 'SPLAWIK BOBBER DRENNAN\r\n', 0, 'BOBBER', 50.00, 'http://www.wedkarski.com/24771-pmain/splawik-bobber-drennan.jpg'),
(4, 'SPLAWIK LOADED PELLET PEACOCKS', 0, 'LOADED', 50.00, 'http://www.wedkarski.com/25074/splawik-loaded-pellet-peacocks-drennan.jpg'),
(5, 'ATRAKTOR 300 G SENSAS', 1, 'Atraktor', 12.50, 'http://www.zloty-karas.pl/image/data/product/zaneta/Traper/00032.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `id_product_purchase` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `product_quantity` varchar(45) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`id_product_purchase`, `id_product`, `product_quantity`, `total_price`, `order_id`) VALUES
(1, 3, '1', 50.00, 2),
(2, 4, '1', 50.00, 2),
(3, 2, '1', 200.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id_product_review` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_product_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `orders_history`
--
ALTER TABLE `orders_history`
  ADD PRIMARY KEY (`order_history_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`id_product_purchase`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_product_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_history`
--
ALTER TABLE `orders_history`
  MODIFY `order_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `id_product_purchase` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
