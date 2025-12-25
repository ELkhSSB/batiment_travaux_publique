-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 mai 2024 à 15:31
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(23) DEFAULT NULL,
  `nomComplet` varchar(23) DEFAULT NULL,
  `nom_projet` varchar(23) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `besoins` varchar(200) DEFAULT NULL,
  `budget` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `email`, `nomComplet`, `nom_projet`, `description`, `besoins`, `budget`) VALUES
(1, 'salma12@gmail.com', 'salma5', 'walo', 'walo', '', 1234),
(2, 'salma12@gmail.com', 'salma5', 'walo1', 'walo1', '', 12344),
(3, 'salma12@gmail.com', 'salma5', 'ana', 'nxri', '', 1),
(4, 'salma12@gmail.com', 'salma5', 'salma', 'salma', '', 122),
(5, 'salma12@gmail.com', 'salma5', '1', '1', '2', 0),
(6, 'salma12@gmail.com', 'salma5', 'salma', 'salma', 'salma', 123),
(7, 'salma12@gmail.com', 'salma5', 'walo', 'walo', 'walo', 12);

-- --------------------------------------------------------

--
-- Structure de la table `temoi`
--

DROP TABLE IF EXISTS `temoi`;
CREATE TABLE IF NOT EXISTS `temoi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(34) NOT NULL,
  `nomComplet` varchar(23) NOT NULL,
  `coment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `temoi`
--

INSERT INTO `temoi` (`id`, `email`, `nomComplet`, `coment`) VALUES
(1, 'M@W', 'N', 'M'),
(2, 'elkhalfisalma83@gmail.com', 'salma', '\"Nous avons fait appel à Entreprise BTP pour la construction de notre nouvelle maison et nous sommes'),
(3, 'sava@gmail.com', 'sava', 'asd'),
(4, 'sama@gmail', 'salma', 'dffsg'),
(5, 'salma1@gmail', 'sama', 'monde ');

-- --------------------------------------------------------

--
-- Structure de la table `user1`
--

DROP TABLE IF EXISTS `user1`;
CREATE TABLE IF NOT EXISTS `user1` (
  `email` varchar(34) NOT NULL,
  `nomComplet` varchar(43) NOT NULL,
  `telephone` varchar(14) NOT NULL,
  `pwd` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` blob,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user1`
--

INSERT INTO `user1` (`email`, `nomComplet`, `telephone`, `pwd`, `image`) VALUES
('salma@gmail.com', 'salma', '3245638', '$2y$10$R.3sz8613qq225KttFfzoe/IHJuDrCwZyXG.i4xkHatHGpWSNp/du', NULL),
('salma1@gmail.com', 'salma', '3245638', '$2y$10$.H1Z4zuQpqT/mKX6YyOPJuuWw4yYTUJcdgMF0p1Mh6gIVZ.D0sJiy', NULL),
('salma2@gmail.com', 'salma2', '087654', '$2y$10$HbotZKlulsjT1qlJPuBus.OYnaqyMbF5fS3DsCt5bbrdjvGZ5ddQi', NULL),
('salma4@gmail.com', 'salma4', '12345789', '$2y$10$WuuyZG0/qXejKdIIdvV2.e1PNhHHtnMSdmPlC/fR2TkVUkVdqFZfa', NULL),
('salma12@gmail.com', 'salma5', '02456474', '$2y$10$xHtL.UqOj6iUTgnbNM6L9.3KyIhIe7ci6dO5s92X3NBzVwjk1jbd6', NULL),
('salma45@gmail', 'salma', 'salma', '$2y$10$hNqgEqqwdAd7t2y78SABpemjOWXjpIFDtg8bQBs87v0KNLIpmMdvG', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
