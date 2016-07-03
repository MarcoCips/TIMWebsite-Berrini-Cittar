-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Giu 28, 2016 alle 20:46
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
  `TIPOLOGIA` varchar(20) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `PREZZO` decimal(6,2) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `CONNESSIONE` varchar(5) NOT NULL,
  `OS` varchar(15) NOT NULL,
  `SCONTO` decimal(6,2) NOT NULL,
  PRIMARY KEY (`NOME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Smartphone`
--

INSERT INTO `Smartphone` (`TIPOLOGIA`, `NOME`, `PREZZO`, `MARCA`, `CONNESSIONE`, `OS`, `SCONTO`) VALUES
('Smartphone', 'Samsung Galaxy S7', 699.90, 'Samsung', '4G', 'Android', 0.00),
('iPhone', 'Apple iPhone 6S', 789.90, 'Apple', '4G', 'iOS', 0.00),
('Smartphone', 'Huawei P9 Plus', 749.90, 'Huawei', '4G', 'Android', 75.00),
('Smartphone', 'Nokia Lumia 550', 99.90, 'Nokia', '4G', 'Windows', 0.00),
('iPhone', 'Apple iPhone SE', 509.90, 'Apple', '4G', 'iOS', 0.00),
('Smartphone', 'LG G5', 679.90, 'LG', '4G', 'Android', 60.00),
('Smartphone', 'Sony XPERIA X', 629.90, 'Sony', '4G', 'Android', 50.00),
('Smartphone', 'ZTE Blade L5', 79.90, 'ZTE', '4G', 'Android', 0.00),
('iPhone', 'Apple iPhone 5S', 429.90, 'Apple', '4G', 'iOS', 0.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
