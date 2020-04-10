-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 avr. 2020 à 23:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `keskonmange`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `rang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom_utilisateur`, `pass`, `rang`) VALUES
(1, 'Quentin', 'syngates68', '$2y$10$13WS2hB/2vPR4ONHof.MpuIgiEqFQN4zw8kuemAqKmJa8HEi/2mi.', 'admin'),
(2, 'Nathan', 'nathan.schifferle', '$2y$10$GdYnYgWzoAPBxwI6xvZgJe.e.C4P/20rHVxU0lvp8rgQ0tDWzVa5S', 'membre'),
(3, 'Camille', 'camille_s68', '$2y$10$DU4r8/LZkr9vG0kqtk5tm.rb6OOX6DSxGRX.FE/B6fdDuKI8OGTGC', 'membre'),
(4, 'Laurent', 'lolodieu', '$2y$10$Eef76oKOynfUVmAdxC4c0.NHBQcO9pMPVE8t45j19JJKwfOQ43F/O', 'membre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
