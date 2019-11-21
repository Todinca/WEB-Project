-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 21, 2019 la 10:06 PM
-- Versiune server: 10.4.8-MariaDB
-- Versiune PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `machiaje`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `buze`
--

CREATE TABLE `buze` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `buze`
--

INSERT INTO `buze` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'ruj MAC', '90 lei', 10, 'ruj.mac.jpg'),
(2, 'ruj Maybelline', '32 lei', 5, 'ruj.maybelline.jpg'),
(3, 'ruj LOreal Paris', '30 lei', 5, 'ruj.Loreal.jpg'),
(4, 'ruj NYX', '40 lei', 20, 'ruj.nyx.jpg'),
(5, 'ruj Catrice', '25 lei', 11, 'ruj.catrice.jpg'),
(6, 'ruj Sleek', '30 lei', 25, 'ruj.sleek.jpg'),
(7, 'ruj MaxFactor', '23 lei', 2, 'ruj.maxfactor.jpg'),
(8, 'ruj Rimmel', '21 lei', 4, 'ruj.rimmel.jpg'),
(9, 'ruj Dior', '100 lei', 4, 'ruj.dior.jpg'),
(10, 'ruj Bourjois', '18 lei', 1, 'ruj.bourjois.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `fata`
--

CREATE TABLE `fata` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `fata`
--

INSERT INTO `fata` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'corector lichid Catrice', '16 lei', '15 buc', 'corector.catrice.jpg'),
(2, 'pudra Rimmel', '19 lei', '10 buc', 'pudra.rimmel.jpg'),
(3, 'iluminator Bourjois', '29 lei', '9 buc', 'iluminator.bourjois.jpg'),
(4, 'fond de ten NYX', '79 lei', '4 buc', 'fondeten.nyx.jpg'),
(5, 'fond de ten Estee Lauder', '165 lei', '3 buc', 'fonddeten.esteelauder.jpg'),
(6, 'anticearcan Estee Lauder', '130 lei', '1 buc', 'anticearcan.esteelauder.jpg'),
(7, 'blush Bourjois', '34 lei', '4 buc', 'blush.bourjois.jpg'),
(8, 'bronzer NYX', '50 lei', '4 buc', 'bronzer.nyx.jpg'),
(9, 'spray facial MAC', '90 lei', '5 buc', 'spray.mac.jpg'),
(10, 'perle bronzante Avon', '29 lei', '10 buc', 'perle.avon.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ochi`
--

CREATE TABLE `ochi` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `pret` varchar(50) NOT NULL,
  `cantitate` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `ochi`
--

INSERT INTO `ochi` (`id`, `nume`, `pret`, `cantitate`, `img`) VALUES
(1, 'mascara Pupa', '42 lei', '4 buc', 'mascara.pupa.jpg'),
(2, 'paleta farduri Revolution', '25 lei', '5 buc', 'paleta.revolution.jpg'),
(3, 'mascara Maybelline', '25 lei', '30 buc', 'mascara.maybelline.jpg'),
(4, 'paleta farduri Huda Beauty', '310 lei', '2 buc', 'paleta.huda.jpg'),
(5, 'eyeliner NYX', '50 lei', '12 buc', 'eyeliner.nyx.jpg'),
(6, 'baza pleoapa Avon', '14 lei', '34 buc', 'bazapleoapa.avon.jpg'),
(7, 'adeziv gene false', '22 lei', '7 buc', 'adezivgene.jpg'),
(8, 'baza pentru sclipici NYX', '43 lei', '4 buc', 'bazasclipici.nyx.jpg'),
(9, 'fard de pleoape theBalm', '76 lei', '3 buc', 'fard.thebalm.jpg'),
(10, 'fixator baza pleoapa Revolution', '19 lei', '5 buc', 'fixator.revolution.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isAdmin` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`, `email`, `nume`, `prenume`) VALUES
(1, 'adi', '123', 1, 'adi@gmail.com', 'Dea', 'Adi'),
(2, 'florina', 'florina', 1, 'florina@gmail.com', 'florina', 'todinca');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `buze`
--
ALTER TABLE `buze`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `fata`
--
ALTER TABLE `fata`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `ochi`
--
ALTER TABLE `ochi`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `buze`
--
ALTER TABLE `buze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `fata`
--
ALTER TABLE `fata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `ochi`
--
ALTER TABLE `ochi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
