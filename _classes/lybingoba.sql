-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 jan. 2025 à 06:01
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lybingoba`
--

-- --------------------------------------------------------

--
-- Structure de la table `ap`
--

DROP TABLE IF EXISTS `ap`;
CREATE TABLE IF NOT EXISTS `ap` (
  `idAP` int NOT NULL AUTO_INCREMENT,
  `nomAP` varchar(50) NOT NULL,
  `photoAP` varchar(200) NOT NULL,
  `departementAP` varchar(50) NOT NULL,
  PRIMARY KEY (`idAP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `idBlog` int NOT NULL AUTO_INCREMENT,
  `photoBlog` varchar(200) NOT NULL,
  `contenuBlog` text NOT NULL,
  `dateBlog` date NOT NULL,
  `titreBlog` text NOT NULL,
  PRIMARY KEY (`idBlog`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `idDocument` int NOT NULL AUTO_INCREMENT,
  `titreDocument` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomDocument` varchar(100) NOT NULL,
  `trimestreDocument` int NOT NULL,
  PRIMARY KEY (`idDocument`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `idExamen` int NOT NULL AUTO_INCREMENT,
  `typeExamen` varchar(100) NOT NULL,
  `sessionExamen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fichierExamen` varchar(200) NOT NULL,
  `pourcentage` varchar(20) NOT NULL,
  `nombrePresentes` int NOT NULL,
  `nombreAdmis` int NOT NULL,
  `nombreEchoue` int NOT NULL,
  PRIMARY KEY (`idExamen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `idStaff` int NOT NULL AUTO_INCREMENT,
  `nomStaff` varchar(50) NOT NULL,
  `gradeStaff` varchar(30) NOT NULL,
  `photoStaff` varchar(250) NOT NULL,
  `descriptionStaff` text NOT NULL,
  PRIMARY KEY (`idStaff`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `loginUser` varchar(50) NOT NULL,
  `passwordUser` varchar(100) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `loginUser`, `passwordUser`) VALUES
(1, 'administrateur', 'administrateur12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
