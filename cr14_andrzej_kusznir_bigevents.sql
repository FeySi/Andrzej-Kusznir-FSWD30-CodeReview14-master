-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Mrz 2018 um 22:52
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_andrzej_kusznir_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bige`
--

CREATE TABLE `bige` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateandtime` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `bige`
--

INSERT INTO `bige` (`id`, `name`, `dateandtime`, `description`, `image`, `capacity`, `contact`, `contact_phone`, `address`, `URL`, `type`) VALUES
(1, 'party1', '2018-04-15 02:12:00', 'Party', 'http://sportslinkinternational.com/sportslink/wp-content/uploads/2017/11/party-in-barcelona.jpg', '100', 'Alex@gmail.com', '12131231', 'burggase 12', 'https://www.events.at/c/wien/party', 'party'),
(2, 'party2', '2018-04-03 05:03:00', 'Super PARTY!!!!', 'http://themocracy.com/wp-content/uploads/2016/12/Parties.jpg', '100', 'Alex@gmail.com', '123124123412', 'bellergasse 9', 'https://www.events.at/c/wien/party', 'party'),
(3, 'party3', '2018-07-20 22:12:00', 'PARTY!!!!', 'https://www.collegeatlas.org/wp-content/uploads/2014/06/Top-Party-Schools-main-image.jpg', '100', 'Alex@gmail.com', '123456789', 'beasegasse 18', 'https://www.events.at/c/wien/party', 'party'),
(7, 'party4', '2018-03-21 03:09:05', ' makes you feel free', 'https://vignette3.wikia.nocookie.net/rave/images/5/50/Wiki-background/revision/latest?cb=20160716160645', '100', 'Alex@gmail.com', '23423423489', 'dufbstrasse 55', 'https://www.events.at/c/wien/party', 'party'),
(8, 'party5', '2018-03-15 01:01:00', 'PARTY!!!', 'http://www.fazemag.de/wp-content/uploads/2016/04/MAYDAY_201604.jpg', '100', 'Alex@gmail.com', '123456789', 'somestreet 55', 'https://www.events.at/c/wien/party', 'Party'),
(9, 'party5', '2018-04-01 12:12:00', 'Party!!!', 'http://www.recklinghaeuser-zeitung.de/storage/pic/dortmund/mdhl/artikelbilder/lokales/rn/dolo/do-lokal/486487_1_MAYDAY_2012_6.jpg?version=1331565325', '5', 'Alex@gmail.com', '3425234235', 'hdfvgasse 55', 'https://www.events.at/c/wien/party', 'party'),
(10, 'party7', '2018-04-12 01:02:00', 'Party', 'https://cdn.shopify.com/s/files/1/0806/6545/files/huge_rave_large.jpg?15191631012681675332', '100', 'Alex@gmail.com', '23223', 'blablagasse 55', 'https://www.events.at/c/wien/party', 'party');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(3, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bige`
--
ALTER TABLE `bige`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bige`
--
ALTER TABLE `bige`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
