-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 07:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(5) NOT NULL,
  `username` varchar(75) NOT NULL,
  `emailadress` varchar(55) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idUser` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `emailadress` varchar(45) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `adress` varchar(35) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productName` varchar(75) NOT NULL,
  `price` decimal(3,0) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `price`, `description`, `image`, `category`) VALUES
(1, 'game', '100', 'this is a game', 'img/GameHub.png', ''),
(7, 'Xbox Series X', '500', 'High-performance gaming console', 'img/xbox_series_x.png', 'xbox'),
(9, 'Playstation 5', '500', 'playstation console', 'img/playstation_5.png', 'playstation'),
(11, 'Nintendo Switch', '250', 'A nintendo switch console', 'img/nintendo_switch.png', 'nintendo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(75) NOT NULL,
  `emailadress` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `bool_adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `emailadress`, `password`, `phonenumber`, `bool_adm`) VALUES
(11, 'z', 'z@gmail.com', '$2y$10$D1DXH0naRWL1CkEPXsBCguC8BX1i0DOZXyodrsrsfnw9gOZ.4qL.O', '06123456', 1),
(12, 'Z', '123@outlook.nl', '$2y$10$werYupr23n3OehhkFnR6vO2ql0f6/KzUqS6LvcuWia/MTOT7ydyee', '06123456', 0),
(13, 'z', 'z@mail.com', '$2y$10$7AIZKKaKXBplkV6npdDVfOWDszuBaboSUwMWoeBTJWWyM9H9tUQG.', 'z', 0),
(14, 'z', 'z@mail.com', '$2y$10$H.V0kN7Mb0Zl4/t80CvNZuOKfH5zNJEiAR86WriZJN9Mfm3PaKn7W', 'z', 0),
(15, 'z', 'z@mail.com', '$2y$10$fT54q.inKhXOw2OWF9ymcuWkXospSW7iWuy5Rj01836wKvIVy4xEC', 'z', 0),
(16, 'z', 'z@mail.com', '$2y$10$9CalmcIGgv5nMVmZ.iO.VOSnq/d5.kjUsHwWnhMG8ApgMXtEvFIku', 'z', 0),
(17, 'z', 'z@mail.com', '$2y$10$o.hgIc5hUGHUQVJ.LLiwtOaZMex679Vi.jfS4YYhDqr7Agk6.Lhqa', 'z', 0),
(18, 'z', 'z@mail.com', '$2y$10$crghUgLA.CZ0v84tSQiMYu8MkHEl0prfr5whUjMuOwH8tBR9tx1da', 'z', 0),
(19, 'z', 'z@mail.com', '$2y$10$BpWAvUqGyGM9fYt0CW4rK.yceLSvVl4vAVVapsYoruE1Mt3kNTZae', 'z', 0),
(20, 'z', 'z@mail.com', '$2y$10$9NNP9RXxIr/O.vsCeOuCCuFkiQURnxTgNRYond79cqjAgsKXnyRqO', 'z', 0),
(21, 'z', 'zzzz@dd', '$2y$10$p4Teem5RGAJusvNoZ2z3neTD8YTGaNGO4p5sCkGGUOi2hNYBZbPdy', 'z', 0),
(22, 'z', 'zzzz@dd', '$2y$10$JwfEwD2sIpm2EhedW2iX4uVZeXEDKXPnRCX3Gl4Af/9uKzbHpw2b.', 'z', 0),
(23, 'z', 'zzzz@dd', '$2y$10$/Ei5AEQPlYyeRK2wd/3IZedlXx45wn6RMIMmeQNemyVllX91r0Mqe', 'z', 0),
(24, 'z', 'zz@s', '$2y$10$M9zXvtfTug1e0OUqs8G9I.8SzKYEfjGKzSCLbidUufg4hnvPEnace', 'z', 0),
(25, 'z', 'zz@s', '$2y$10$SJqaXBUDfiTR8UZFH3GYdOLn5NM1XUmY8fFlXZErAKCLreuqWaTbq', 'z', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
