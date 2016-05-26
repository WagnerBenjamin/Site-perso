-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Mai 2016 à 11:38
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
-- Structure de la table `changelog`
--

CREATE TABLE IF NOT EXISTS `changelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `changelog`
--

INSERT INTO `changelog` (`id`, `date`, `titre`, `description`) VALUES
(1, '2016-05-26', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(2, '2015-02-17', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(3, '2016-02-26', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(4, '2016-05-10', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(5, '2016-09-04', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(6, '2016-05-26', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(7, '2015-02-17', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(8, '2016-02-26', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(9, '2016-05-10', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(10, '2016-09-04', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla eget purus non dignissim. Duis id velit ac nisi vehicula vehicula. Nulla convallis at massa consequat posuere. Etiam ullamcorper commodo quam, sed feugiat metus posuere quis. Aliq'),
(13, '2016-05-26', 'fhiuhfoi\r\n', 'fgorpgjpesogjpoerj gehjgio ehgj gh ooshg ou hgo hpjgo pjg jop');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
