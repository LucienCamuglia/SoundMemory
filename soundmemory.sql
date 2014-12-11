-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Décembre 2014 à 13:45
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `soundmemory`
--

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `idMedia` int(11) NOT NULL AUTO_INCREMENT,
  `MediaType` enum('Sound','Image') NOT NULL DEFAULT 'Sound',
  `Name` varchar(150) NOT NULL,
  `Path` varchar(150) NOT NULL,
  PRIMARY KEY (`idMedia`),
  UNIQUE KEY `Path` (`Path`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `medias`
--

INSERT INTO `medias` (`idMedia`, `MediaType`, `Name`, `Path`) VALUES
(1, 'Sound', 'Anti Douleur', './Anti-douleur.wav'),
(2, 'Sound', 'TNT Delight', 'TnT_Delight.wav'),
(3, 'Sound', 'Dear Darkness', 'PJ Harvey-White Chalk-02-Dear Darkness.mp3'),
(4, 'Sound', 'myAudio', './myAudio.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
