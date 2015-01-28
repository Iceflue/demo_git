-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Janvier 2015 à 19:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `dateMessage` datetime NOT NULL,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`idMessage`, `pseudo`, `message`, `dateMessage`) VALUES
(1, 'user1', 'coucou c''est nous!!!', '0000-00-00 00:00:00'),
(2, 'user2', 'yop les gens', '0000-00-00 00:00:00'),
(3, 'user1', 'comment ca va???', '0000-00-00 00:00:00'),
(4, 'user3', 'loooooooooooooooool', '0000-00-00 00:00:00'),
(5, 'user2', 'qué passa?', '0000-00-00 00:00:00'),
(6, 'user1', 'il a encore péter un cable le loulou^^ vous faites quoi de beau? test d''un message long. quoi écrire? telle est la question^^', '0000-00-00 00:00:00'),
(7, 'user2', 'amis poetes....', '0000-00-00 00:00:00'),
(8, 'user3', 'je roxx!!!!!!', '0000-00-00 00:00:00'),
(9, 'user4', 'message9', '0000-00-00 00:00:00'),
(10, 'user1', 'le message qui tue - 10', '0000-00-00 00:00:00'),
(11, 'user2', 'à 11 il se passe quoi?', '0000-00-00 00:00:00'),
(12, 'user3', 'message12', '0000-00-00 00:00:00'),
(13, 'hacker', '&lt;strong&gt;Gras?&lt;/strong&gt;', '0000-00-00 00:00:00'),
(16, 'hack?', 'lt', '0000-00-00 00:00:00'),
(18, 'bug', 'bug :(', '0000-00-00 00:00:00'),
(19, 'quoi quoi', 'ou ou', '0000-00-00 00:00:00'),
(20, 'CookieTest', 'essai', '0000-00-00 00:00:00'),
(21, 'etla', 'glkjgkjhg', '0000-00-00 00:00:00'),
(22, 'retenu', 'lhkjlkjh', '0000-00-00 00:00:00'),
(23, 'coucou', 'c''est nous', '0000-00-00 00:00:00'),
(24, 'test', 'insertion pour test rafraichssement', '0000-00-00 00:00:00'),
(25, 'retenu', 'yoiupi', '0000-00-00 00:00:00'),
(26, 'changement', 'message', '0000-00-00 00:00:00'),
(27, 'test', 'jkmjkl', '0000-00-00 00:00:00'),
(28, 'test', 'mjkj', '0000-00-00 00:00:00'),
(29, 'test', 'dsqfsdq', '0000-00-00 00:00:00'),
(30, 'test', 'uyt', '0000-00-00 00:00:00'),
(31, 'test', '21231', '0000-00-00 00:00:00'),
(32, 'test', '546564', '0000-00-00 00:00:00'),
(33, 'test', '789', '0000-00-00 00:00:00'),
(34, 'test', 'message 31', '0000-00-00 00:00:00'),
(35, 'test', 'new msg', '0000-00-00 00:00:00'),
(36, 'ZeDate', 'coucou', '2015-01-26 19:07:26'),
(37, 'heure', 'test du message horodaté', '2015-01-26 19:07:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
