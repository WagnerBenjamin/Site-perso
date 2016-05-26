-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Mai 2016 à 17:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `siteperso`
--

-- --------------------------------------------------------

--
-- Structure de la table `skillbar`
--

CREATE TABLE IF NOT EXISTS `skillbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(255) NOT NULL,
  `value` int(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `skillbar`
--

INSERT INTO `skillbar` (`id`, `skill`, `value`, `category`) VALUES
(1, 'HTML5', 60, 'web'),
(2, 'CSS', 40, 'web'),
(3, 'Unity3D', 50, 'game'),
(4, 'PHP', 50, 'web'),
(5, 'SQL', 50, 'web'),
(6, 'Unreal Engine', 30, 'game'),
(7, 'Java', 30, 'language'),
(8, 'C', 50, 'language'),
(9, 'C++', 60, 'language'),
(10, 'C#', 70, 'language'),
(11, 'Python', 20, 'language'),
(12, 'Linux', 35, 'system'),
(13, 'Windows Client', 40, 'system'),
(14, 'Windows Server', 30, 'system');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
