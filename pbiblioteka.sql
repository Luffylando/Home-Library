-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2018 at 02:23 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbiblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `itachi_knjige`
--

CREATE TABLE `itachi_knjige` (
  `knjige_id` int(10) UNSIGNED NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `naslov` varchar(255) DEFAULT NULL,
  `zanr` varchar(255) DEFAULT NULL,
  `citat` text,
  `slika` varchar(255) DEFAULT NULL,
  `korisnicko_ime` varchar(255) DEFAULT NULL,
  `komentar` text,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itachi_knjige`
--

INSERT INTO `itachi_knjige` (`knjige_id`, `autor`, `naslov`, `zanr`, `citat`, `slika`, `korisnicko_ime`, `komentar`, `status`) VALUES
(1, 'Lav Nikolajevic Tolstoj', 'Rat i Mir', 'Roman', 'Osobu koja ti je draga mozes voleti covecijom ljubavlju, ali neprijatelj se jedino moze voleti ljubavlju koja je bozija. ', 'http://localhost/Home-Library/assets/img/Rat i Mir.jpg', 'Itachi', 'Nema komentara.', 'Procitano'),
(2, 'Dzordz Orvel', '1984', 'Filozofija', 'Rat je Mir, Sloboda je Ropstvo, Neznanje je Moc.', 'http://localhost/Home-Libary/assets/img/1984.jpg', 'Itachi', 'Knjiga o zamisljenom totalitarnom drustvu koje ocekuje ljudsku rasu u buducnosti.', 'Procitano');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnici_id` int(11) NOT NULL,
  `korisnicko_ime` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `datum_uclanjivanja` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnici_id`, `korisnicko_ime`, `eposta`, `lozinka`, `datum_uclanjivanja`) VALUES
(21, 'Itachi', 'Itachi@gmail.com', 'sifra123', '2018-08-28 14:08:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itachi_knjige`
--
ALTER TABLE `itachi_knjige`
  ADD PRIMARY KEY (`knjige_id`),
  ADD KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnici_id`),
  ADD UNIQUE KEY `eposta` (`eposta`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itachi_knjige`
--
ALTER TABLE `itachi_knjige`
  MODIFY `knjige_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `itachi_knjige`
--
ALTER TABLE `itachi_knjige`
  ADD CONSTRAINT `itachi_knjige_ibfk_1` FOREIGN KEY (`korisnicko_ime`) REFERENCES `korisnici` (`korisnicko_ime`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
