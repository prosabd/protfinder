-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 avr. 2022 à 12:56
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
-- Base de données : `protfinder`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

DROP TABLE IF EXISTS `acheter`;
CREATE TABLE IF NOT EXISTS `acheter` (
  `ID` int(11) NOT NULL,
  `ID_Utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`ID_Utilisateurs`),
  KEY `acheter_Utilisateurs0_FK` (`ID_Utilisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Avis_text` varchar(50) NOT NULL,
  `ID_Utilisateurs` int(11) NOT NULL,
  `ID_proteines` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Avis_Utilisateurs_FK` (`ID_Utilisateurs`),
  KEY `Avis_proteines0_FK` (`ID_proteines`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proteines`
--

DROP TABLE IF EXISTS `proteines`;
CREATE TABLE IF NOT EXISTS `proteines` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(500) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `Prix` float NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Gouts` varchar(50) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proteines`
--

INSERT INTO `proteines` (`ID`, `Nom`, `Categorie`, `Prix`, `Quantite`, `Description`, `Gouts`, `Marque`) VALUES
(1, 'pack de 8 boissons proteinee carb killa banane', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'banane', 'carb killa'),
(2, 'pack de 8 boissons proteinee carb killa chocolat menthe', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat menthe', 'carb killa'),
(3, 'pack de 8 boissons proteinee carb killa beurre de cacahuete', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'beurre de cacahuete', 'carb killa'),
(4, 'whey protein foodspring coco', 'sachet', 49.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'coco', 'foodspring'),
(5, 'whey protein foodspring vanille', 'sachet', 49.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'vanille', 'foodspring'),
(6, 'whey protein foodspring fraise', 'sachet', 49.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'foodspring'),
(7, 'barre proteinee biotechusa banane', 'barre', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'banane', 'biotechusa'),
(8, 'barre proteinee biotechusa fraise', 'barre', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'biotechusa'),
(9, 'barre proteinee biotechusa pistache', 'barre', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'pistache', 'biotechusa'),
(10, 'boisson proteinee optimum nutrition chocolat', 'boisson', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat', 'optimum nutrition '),
(11, 'boisson proteinee optimum nutrition vanille', 'boisson', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'vanille', 'optimum nutrition '),
(12, 'boisson proteinee optimum nutrition fraise', 'boisson', 2.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'optimum nutrition '),
(13, 'whey protein nu3 chocolat', 'sachet', 25.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat', 'nu3'),
(14, 'whey protein nu3 cookie', 'sachet', 25.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'cookie', 'nu3'),
(15, 'whey protein nu3 fraise', 'sachet', 25.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'nu3'),
(16, 'pack de 5 barres proteinee stc nutrition chocolat', 'barre', 10.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat', 'stc nutrition'),
(17, 'pack de 5 barres proteinee stc nutrition coco', 'barre', 10.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'coco', 'stc nutrition'),
(18, 'pack de 5 barres proteinee stc nutrition pomme', 'barre', 10.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'pomme', 'stc nutrition'),
(19, 'pack de 12 boissons proteinee nxt level cafe', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'cafe', 'nxt level'),
(20, 'pack de 12 boissons proteinee nxt level fraise', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'nxt level'),
(21, 'pack de 12 boissons proteinee nxt level banane', 'boisson', 24.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'banane', 'nxt level'),
(22, 'whey protein trendhunter chocolat', 'sachet', 14.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat', 'trendhunter'),
(23, 'whey protein trendhunter fraise', 'sachet', 14.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'fraise', 'trendhunter'),
(24, 'whey protein trendhunter banane', 'sachet', 14.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'banane', 'trendhunter'),
(25, 'barre proteinee inshape caramel cajou', 'barre', 1.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'caramel cajou', 'inshape'),
(26, 'barre proteinee inshape cookie', 'barre', 1.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'cookie', 'inshape'),
(27, 'barre proteinee inshape chocolat', 'barre', 1.99, 50, 'Barre hyperprotéinée enrichie en Vitamines et Minéraux, avec sucres et édulcorant, conforme à la norme AFNOR anti-dopage NF V94-001*.\r\n\r\nSpécialement élaborée pour servir d’en-cas protéiné. Riche en Protéines, qui contribuent au maintien de la masse musculaire, et riche en Vitamine B6, qui participe au métabolisme des Protéines.\r\n\r\nConditionnement : Etui de 5 barres de 45g - Goût Chocolat, Coconut, Pomme, Fruits Rouges ou Vanille', 'chocolat', 'inshape');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin` int(1) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `admin`, `Nom`, `Prenom`, `Adresse`, `Telephone`, `mail`, `password`) VALUES
(1, 2, 'Bounas', 'Yanis', '64 rue de gigas, Fontenay-saint-georges 92140 ', '01.03.40.56.03', 'yanisbounas@gmail.com', '123'),
(2, 1, 'bing', 'younes', '12 rue des quartiers, bagnolet 93330', '07.45.75.24.67', 'younesbing@gmail.com', '123'),
(3, 1, 'Bos', 'hugues', '16 rue de bourres, Fartichant 95140 ', '01.63.47.58.13', 'huguesbos@gmail.com', '123'),
(4, 1, 'paring', 'jeen', '52 rue des quatre-quarts, marseille 13330', '01.55.85.24.07', 'jeenparing@gmail.com', '123');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acheter`
--
ALTER TABLE `acheter`
  ADD CONSTRAINT `acheter_Utilisateurs0_FK` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`),
  ADD CONSTRAINT `acheter_proteines_FK` FOREIGN KEY (`ID`) REFERENCES `proteines` (`ID`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `Avis_Utilisateurs_FK` FOREIGN KEY (`ID_Utilisateurs`) REFERENCES `utilisateurs` (`ID`),
  ADD CONSTRAINT `Avis_proteines0_FK` FOREIGN KEY (`ID_proteines`) REFERENCES `proteines` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
