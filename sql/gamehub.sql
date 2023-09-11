-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 sep 2023 om 14:48
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
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `emailadress` varchar(55) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bool_adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `emailadress`, `phonenumber`, `password`, `bool_adm`) VALUES
(1, 'Toad', '', '', '$2y$10$spCTG69KaL03X.hZjvyL5.LYsgbs4PHBJHGfCN/cbf4BMiNC0E9e.', 0),
(2, 'Sanic the Hedgehog', '', '', '$2y$10$G/QL4cawfI/NPVxans5l9e6UMVr6anE4GSAu6NdRBARAaX0DSrWda', 0),
(7, 'Andrew Tate', '', '', '$2y$10$2/ig1.1P.ejl3WA4GeF50eje0kICVeN3srV1kGZGnyKCZm1cL7n9m', 0),
(8, 'EGirl simper', '', '', '$2y$10$jf/DblIr5kSdwItKlLm/V.gHU9ns9EAMbgIImrLZf2RcvK9ixhlCy', 0),
(9, 'Username', 'username@gmail.com', '0612345678', '$2y$10$7/zqbJAkTrolTL3mYsP7DO9NyYPm.Am0gVsqLl4QoBjKdKbI2Ed7S', 0),
(10, 'Danny', 'dannyduyanhnguyen@outlook.com', '0610348622', '$2y$10$l2waAL8jVazL2khwRZbvv.0DJ34.13Mamh/PdTSGp0JKzWLmQJQle', 0),
(11, 'sten', 'stennierop@yahoo.nl', '06-12391547', '$2y$10$a/KGv.Jxn9xrCgIQ/apuS.D4GuQUwnzdNytxh5d57Oy9G.OffcUcG', 0),
(12, '9017412@student.zadkine.nl', 'stennierop@yahoo.nl', '678456456', '$2y$10$380JuyS9sZusaL/XOpLkx.erSosuFFuOu0uLVtgu8K5UiP3u1Kgty', 0),
(13, 'shrek', 'shrek@outlook.com', '06-2134123', '$2y$10$rO6AjakI4hbrq9yt218Oe.hLWkXPMgLysD5C/j9HO1hlXOfGIlJRW', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
