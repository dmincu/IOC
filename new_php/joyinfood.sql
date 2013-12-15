-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 23 Noi 2013 la 14:43
-- Versiune server: 5.5.20
-- Versiune PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

drop database joyinfood;
create database joyinfood;
use joyinfood;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `joyinfood`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `parola` varchar(30) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username_user` varchar(30) NOT NULL,
  `username_friend` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `sesiuni` (
  `id_sesiune` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_sesiune`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


CREATE TABLE IF NOT EXISTS `asoc_user_sesiune` (
  `id_asoc` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesiune` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `is_creator` int(2) NOT NULL,
  PRIMARY KEY (`id_asoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `comanda` (
  `idcomanda` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesiune` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nume_mancare` varchar(30) NOT NULL,
  `nume_restaurant` varchar(30) NOT NULL,
  `pret` float(8, 4) NOT NULL,
  PRIMARY KEY(`idcomanda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `parola`, `telefon`) VALUES
(1, 'merca', 'merca', ''),
(2, 'andreea', 'andreea', '12312312312'),
(3, 'admin', 'admin', '54123131'),
(4, 'diana', 'diana', '123819283901'),
(5, 'serban', 'serban', '12151231231231');

INSERT INTO `sesiuni` (`id_sesiune`, `nume`) VALUES (1, 'asdf');

INSERT INTO `comanda` (`id_sesiune`, `username`, `nume_mancare`, `nume_restaurant`, `pret`)
 VALUES (1, 'diana', 'Pizza', 'SprintTime', '12.00');
INSERT INTO `comanda` (`id_sesiune`, `username`, `nume_mancare`, `nume_restaurant`, `pret`)
 VALUES (1, 'merca', 'Sarmale', 'PizzaHut', '10.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
