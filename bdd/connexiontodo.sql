-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 mai 2022 à 08:21
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connexiontodo`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`id`, `titre`, `description`, `nom`) VALUES
(75, 'simonfrfrfrf', 'camillerfrfrfdcrcrcybybyb', 'simob'),
(69, 'huhuhuh', '', ''),
(68, 'huhuh', '', ''),
(59, 'juju', '', ''),
(58, 'hujj', '', ''),
(37, 't(t(t(t(t', '', 'simon'),
(36, 't(t(t(', '', 'camille'),
(35, 'tttttt(t(t(t', '', ''),
(34, '', '', ''),
(33, 't(t(tt', '', ''),
(32, 't(t(t(', 't(t(t(t', ''),
(31, 't(t(', 't(t(t', 'camille'),
(30, 't', 't', 'simon'),
(29, 't', 't', ''),
(71, 'huhuhuh', '', ''),
(56, 'vgvg', '', ''),
(49, 't(t(t(t(t(', 't(t(t(t(t', 'simon'),
(48, 't(t(t(t(t(', 't(t(t(t(t', 'simon'),
(55, ':l:l:l:', '', ''),
(50, 't(t(t(t(t(', 't(t(t(t(t', 'simon'),
(72, 'vgvgvgv', '', ''),
(73, 'vgvgv', '', ''),
(74, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `usertodo`
--

DROP TABLE IF EXISTS `usertodo`;
CREATE TABLE IF NOT EXISTS `usertodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `usertodo`
--

INSERT INTO `usertodo` (`id`, `user_name`, `password`) VALUES
(1, 'simon', 'oui'),
(2, 'camille', '123'),
(3, 'ange', 'ange123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
