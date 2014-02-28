-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 28 feb 2014 om 13:50
-- Serverversie: 5.5.27
-- PHP-versie: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `twitboard`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `user` varchar(999) NOT NULL,
  `text` text NOT NULL,
  `hashtags` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `tweets`
--

INSERT INTO `tweets` (`id`, `time`, `user`, `text`, `hashtags`) VALUES
(1, '2014-02-28 23:59:59', '@stefan2200', 'This is a demo text of #Twitboard, More functions will come soon.', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
