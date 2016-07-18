-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Lug 17, 2016 alle 13:12
-- Versione del server: 5.6.29-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_timhyp53`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Smartphone`
--

CREATE TABLE IF NOT EXISTS `Smartphone` (
  `ID` int(6) NOT NULL,
  `Tipologia` varchar(20) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Prezzo` decimal(6,2) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Connessione` varchar(5) NOT NULL,
  `OS` varchar(15) NOT NULL,
  `Sconto` decimal(6,2) NOT NULL,
  `Sito` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Smartphone`
--

INSERT INTO `Smartphone` (`ID`, `Tipologia`, `Nome`, `Prezzo`, `Marca`, `Connessione`, `OS`, `Sconto`, `Sito`) VALUES
(1, 'Smartphone', 'Samsung Galaxy S7', 699.90, 'Samsung', '4G', 'Android', 0.00, 0),
(2, 'iPhone', 'Apple iPhone 6S', 789.90, 'Apple', '4G', 'iOS', 0.00, 1),
(3, 'Smartphone', 'Huawei P9 Plus', 749.90, 'Huawei', '4G', 'Android', 75.00, 0),
(4, 'Smartphone', 'Nokia Lumia 550', 99.90, 'Nokia', '4G', 'Windows', 0.00, 0),
(5, 'iPhone', 'Apple iPhone SE', 509.90, 'Apple', '4G', 'iOS', 0.00, 0),
(6, 'Smartphone', 'LG G5', 679.90, 'LG', '4G', 'Android', 60.00, 0),
(7, 'Smartphone', 'Sony XPERIA X', 629.90, 'Sony', '4G', 'Android', 50.00, 0),
(8, 'Smartphone', 'ZTE Blade L5', 79.90, 'ZTE', '4G', 'Android', 0.00, 0),
(9, 'iPhone', 'Apple iPhone 5S', 429.90, 'Apple', '4G', 'iOS', 0.00, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `Tablet`
--

CREATE TABLE IF NOT EXISTS `Tablet` (
  `ID` int(6) NOT NULL,
  `Tipologia` varchar(20) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Prezzo` decimal(6,2) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Display` decimal(3,1) NOT NULL,
  `Connessione` varchar(5) NOT NULL,
  `OS` varchar(15) NOT NULL,
  `Sconto` decimal(6,2) NOT NULL,
  `Sito` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Tablet`
--

INSERT INTO `Tablet` (`ID`, `Tipologia`, `Nome`, `Prezzo`, `Marca`, `Display`, `Connessione`, `OS`, `Sconto`, `Sito`) VALUES
(1, 'iPad', 'Apple iPad mini 4', 529.90, 'Apple', 7.9, '4G', 'iOS', 0.00, 0),
(2, 'Tablet', 'Samsung Galaxy Tab A', 299.90, 'Samsung', 9.7, '4G', 'Android', 0.00, 0),
(3, 'Tablet', 'Samsung Galaxy Tab 4', 209.90, 'Samsung', 8.0, '4G', 'Android', 30.00, 0),
(4, 'Tablet', 'Huawei MediaPad 10', 199.90, 'Huawei', 10.1, '4G', 'Android', 0.00, 0),
(5, 'iPad', 'Apple iPad Pro 128GB', 1249.90, 'Apple', 12.9, '4G', 'iOS', 0.00, 1),
(6, 'Tablet', 'Alcatel Pixi3 10', 139.90, 'Alcatel', 10.1, '4G', 'Android', 0.00, 0),
(7, 'Tablet', 'Acer Iconia W4', 299.90, 'Acer', 8.0, '4G', 'Windows', 0.00, 0),
(8, 'iPad', 'Apple iPad Air 2', 509.90, 'Apple', 9.7, '4G', 'iOS', 30.00, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
