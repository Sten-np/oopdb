-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 okt 2023 om 13:14
-- Serverversie: 10.6.5-MariaDB
-- PHP-versie: 8.1.2

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
-- Tabelstructuur voor tabel `orderitems`
--

CREATE TABLE `orderitems` (
  `orderitems_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `adress` varchar(35) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
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
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `productName`, `price`, `description`, `image`, `category`) VALUES
(7, 'Xbox Series X', '500', 'High-performance gaming console', 'img/xbox_series_x.png', 'xbox'),
(9, 'Playstation 5', '500', 'playstation console', 'img/playstation_5.png', 'playstation'),
(11, 'Nintendo Switch', '250', 'A nintendo switch console', 'img/nintendo_switch.png', 'nintendo'),
(12, 'Payday 3', '39', 'The much anticipated sequel to the famous heisting game Payday 2.', 'img/payday3.png', 'games'),
(13, 'Playstation 4 Pro', '380', 'The playstation 4 pro with 1tb of disk space.', 'img/ps4pro.png', 'playstation'),
(15, 'Xbox Series S', '380', 'The  Xbox Series S with 500gb of storage.', 'img/xboxseriess.png', 'xbox');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
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
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `emailadress`, `password`, `phonenumber`, `bool_adm`) VALUES
(11, 'z', 'z@gmail.com', '$2y$10$D1DXH0naRWL1CkEPXsBCguC8BX1i0DOZXyodrsrsfnw9gOZ.4qL.O', '06123456', 0),
(12, 'Z', '123@outlook.nl', '$2y$10$werYupr23n3OehhkFnR6vO2ql0f6/KzUqS6LvcuWia/MTOT7ydyee', '06123456', 0),
(13, 'z', 'z@mail.com', '$2y$10$7AIZKKaKXBplkV6npdDVfOWDszuBaboSUwMWoeBTJWWyM9H9tUQG.', 'z', 1),
(14, 'z', 'z@mail.com', '$2y$10$H.V0kN7Mb0Zl4/t80CvNZuOKfH5zNJEiAR86WriZJN9Mfm3PaKn7W', 'z', 1),
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
(25, 'z', 'zz@s', '$2y$10$SJqaXBUDfiTR8UZFH3GYdOLn5NM1XUmY8fFlXZErAKCLreuqWaTbq', 'z', 0),
(26, 'sten', 'stennierop@yahoo.nl', '$2y$10$ZfN7qQQYQEaSmh/vRMgmq.eig4VIMQ8uORZ3ctJcG77jjNnASfqnm', '06-12391547', 1),
(27, 'Sten', 'stennierop@gmail.com', '$2y$10$OVjhxYotuOgRH0FQ88xAtu4hyqyxA77CLFETvRVKXx9h/QHBs48BG', '06-12391547', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`orderitems_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `orderitems_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
