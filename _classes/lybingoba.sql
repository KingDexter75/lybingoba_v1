-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 19 jan. 2025 à 09:37
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ap`
--

INSERT INTO `ap` (`idAP`, `nomAP`, `photoAP`, `departementAP`) VALUES
(7, 'paul', 'assets/img/AP/tonton678653b0accd15.76602919.jpg', 'physique'),
(8, 'irina', 'assets/img/AP/tata678652e761f164.51699956.jpg', 'mathematiques');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`idDocument`, `titreDocument`, `nomDocument`, `trimestreDocument`) VALUES
(1, 'expose sur samba', 'assets/fichier pdf/expose sur samba678c8e81987341.67312364.docx', 1);

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `idExamen` int NOT NULL AUTO_INCREMENT,
  `typeExamen` varchar(100) NOT NULL,
  `fichierExamen` varchar(200) NOT NULL,
  `descriptionExamen` text NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`idStaff`, `nomStaff`, `gradeStaff`, `photoStaff`, `descriptionStaff`) VALUES
(1, 'kouemo dakleu', 'ingenieur', 'assets/img/team/kouemo dakleu678c98d9aa01b0.85751782.jpg', 'Jeune passionné par la tech');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `loginUser`, `passwordUser`) VALUES
(1, 'admin', '1234'),
(2, 'admin@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
