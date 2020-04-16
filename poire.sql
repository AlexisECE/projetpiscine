-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 avr. 2020 à 13:42
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `poire`
--

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `IdItem` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Prix` int(16) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`IdItem`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`IdItem`, `Nom`, `Photo`, `Description`, `Video`, `Prix`, `Categorie`) VALUES
(1, 'tableau', 'photo', 'Tableau du 17e siecle', 'video', 300, 'Bon pour le musee'),
(2, 'Casque logitech', 'photo casque', 'Casque de grande qualite', 'video casque', 200, 'Accessoire VIP');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TypeUser` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Photo` int(64) NOT NULL,
  `ImageDeFond` int(64) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `NumeroCarte` int(64) NOT NULL,
  `NomAffiche` varchar(255) NOT NULL,
  `DateExpiration` date NOT NULL,
  `CodeSecu` int(64) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `NumTelephone` int(64) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUser`, `Pseudo`, `Email`, `TypeUser`, `Nom`, `Prenom`, `Photo`, `ImageDeFond`, `TypeCarte`, `NumeroCarte`, `NomAffiche`, `DateExpiration`, `CodeSecu`, `Adresse1`, `Adresse2`, `Ville`, `CodePostal`, `Pays`, `NumTelephone`) VALUES
(1, 'Wuzih', 'wuzih.ouai@gmail.com', 'Admin', 'Dupre', 'Jean', 0, 0, 'Visa', 2125232422, 'Dupre', '2020-04-17', 54, '42 rue des jardins', '', 'Paris', '75015', 'France', 102030405),
(2, 'PA', 'pa.ouai@gmail.com', 'Vendeur', 'Dujardin', 'David', 0, 0, 'Visa', 10203405, 'Dujardin', '2020-04-24', 68, '21 avenue Zidane', '', 'Marseille', '13015', 'France', 654789863),
(3, 'azertyuiop', 'azert@gamil.com', 'Acheteur', 'Michel', 'Jean', 0, 0, 'Visa', 458795, 'Michel', '2020-05-15', 547, '45 rue Groupama', '32 avenue Lulli', 'Lyon', '69008', 'France', 784858682);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
