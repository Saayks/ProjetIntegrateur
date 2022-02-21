-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 03 Mai 2021 à 21:01
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdparking`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

CREATE TABLE IF NOT EXISTS `donnees` (
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `nbPlaces` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `donnees`
--

INSERT INTO `donnees` (`date`, `heure`, `nbPlaces`, `id`) VALUES
('2021-05-03', '17:25:29', 58, 1),
('2021-05-03', '17:26:02', 44, 1),
('2021-05-03', '17:27:02', 52, 1),
('2021-05-03', '17:30:27', 40, 1),
('2021-05-03', '17:33:54', 49, 1),
('2021-05-03', '17:34:04', 48, 1),
('2021-05-03', '17:38:30', 41, 1),
('2021-05-03', '17:57:08', 45, 1),
('2021-05-03', '18:02:07', 58, 1),
('2021-05-03', '18:06:09', 51, 1),
('2021-05-03', '18:09:19', 47, 1),
('2021-05-03', '18:55:56', 49, 1),
('2021-05-03', '18:57:10', 47, 1),
('2021-05-03', '19:03:00', 65, 1),
('2021-05-03', '19:04:50', 70, 1),
('2021-05-03', '19:07:32', 64, 1),
('2021-05-03', '19:10:41', 64, 1),
('2021-05-03', '19:11:46', 68, 1),
('2021-05-03', '19:16:13', 67, 1),
('2021-05-03', '19:17:34', 63, 1),
('2021-05-03', '19:22:10', 60, 1),
('2021-05-03', '19:54:42', 61, 1),
('2021-05-03', '19:55:44', 64, 1),
('2021-05-03', '19:56:25', 66, 1),
('2021-05-03', '19:58:21', 72, 1),
('2021-05-03', '20:04:44', 61, 1),
('2021-05-03', '20:05:52', 60, 1),
('2021-05-03', '20:10:21', 61, 1),
('2021-05-03', '20:12:43', 61, 1),
('2021-05-03', '20:13:32', 68, 1),
('2021-05-03', '20:14:38', 71, 1),
('2021-05-03', '20:15:14', 72, 1),
('2021-05-03', '20:22:28', 67, 1),
('2021-05-03', '20:23:07', 64, 1),
('2021-05-03', '20:51:33', 70, 1),
('2021-05-03', '20:52:01', 62, 1),
('2021-05-03', '20:53:53', 65, 1),
('2021-05-03', '20:54:21', 71, 1),
('2021-05-03', '20:55:05', 70, 1),
('2021-05-03', '20:56:07', 60, 1),
('2021-05-03', '20:57:09', 70, 1),
('2021-05-03', '20:59:06', 66, 1),
('2021-05-03', '21:00:10', 60, 1),
('2021-05-03', '21:01:58', 65, 1),
('2021-05-03', '21:02:19', 66, 1),
('2021-05-03', '21:03:54', 70, 1),
('2021-05-03', '21:09:58', 68, 1),
('2021-05-03', '21:12:46', 64, 1),
('2021-05-03', '21:18:02', 61, 1),
('2021-05-03', '21:19:48', 70, 1),
('2021-05-03', '21:49:49', 72, 1),
('2021-05-03', '22:43:59', 64, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`idutilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adressemail` varchar(50) NOT NULL,
  `pseudonyme` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nom`, `prenom`, `adressemail`, `pseudonyme`, `motdepasse`) VALUES
(1, 'Macron', 'Emmanuel', 'emmanuelmacron@gmail.com', 'test', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `donnees`
--
ALTER TABLE `donnees`
 ADD PRIMARY KEY (`date`,`heure`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`idutilisateur`), ADD UNIQUE KEY `pseudonyme` (`pseudonyme`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
