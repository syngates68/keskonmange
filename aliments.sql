-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 avr. 2020 à 23:13
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
-- Structure de la table `aliments`
--

DROP TABLE IF EXISTS `aliments`;
CREATE TABLE IF NOT EXISTS `aliments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_aliment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aliments`
--

INSERT INTO `aliments` (`id`, `nom_aliment`) VALUES
(1, 'Tomate'),
(2, 'Abricot'),
(3, 'Agneau'),
(4, 'Ail'),
(5, 'Ananas'),
(6, 'Artichaut'),
(7, 'Aubergine'),
(8, 'Avocat'),
(9, 'Banane'),
(10, 'Beurre'),
(11, 'Betterave'),
(12, 'Boeuf'),
(13, 'Brocoli'),
(14, 'Cacao'),
(15, 'Café'),
(16, 'Caille'),
(17, 'Calmar'),
(18, 'Canard'),
(19, 'Cannelle'),
(20, 'Carotte'),
(21, 'Cassis'),
(22, 'Céleri'),
(23, 'Cerise'),
(24, 'Champignons'),
(25, 'Châtaigne'),
(26, 'Chocolat'),
(27, 'Chou'),
(28, 'Chou-fleur'),
(29, 'Choux de Bruxelles'),
(30, 'Ciboulette'),
(31, 'Citron'),
(32, 'Clémentine'),
(33, 'Concombre'),
(34, 'Cornichon'),
(35, 'Coquille Saint-Jacques'),
(36, 'Coriandre'),
(37, 'Courges'),
(38, 'Courgette'),
(39, 'Crabe'),
(40, 'Crème fraîche'),
(41, 'Crevette'),
(42, 'Cumin'),
(43, 'Curcuma'),
(44, 'Curry'),
(45, 'Datte'),
(46, 'Dinde'),
(47, 'Echalote'),
(48, 'Endive'),
(49, 'Epinards'),
(50, 'Estragon'),
(51, 'Fenouil'),
(52, 'Figue'),
(53, 'Flageolet'),
(54, 'Foie gras'),
(55, 'Fraise'),
(56, 'Framboise'),
(57, 'Fromage'),
(58, 'Fruit de la passion'),
(59, 'Gingembre'),
(60, 'Goyave'),
(61, 'Grenade'),
(62, 'Griottes'),
(63, 'Groseille'),
(64, 'Hareng'),
(65, 'Haricot vert'),
(66, 'Homard'),
(67, 'Huître'),
(68, 'Kiwi'),
(69, 'Lait'),
(70, 'Laitue'),
(71, 'Lapin'),
(72, 'Lentilles'),
(73, 'Litchi'),
(74, 'Mâche'),
(75, 'Maïs'),
(76, 'Mandarine'),
(77, 'Mangue'),
(78, 'Maquereau'),
(79, 'Marron'),
(80, 'Melon'),
(81, 'Menthe'),
(82, 'Mérou'),
(83, 'Miel'),
(84, 'Mirabelle'),
(85, 'Morue'),
(86, 'Moule'),
(87, 'Moutarde'),
(88, 'Myrtille'),
(89, 'Mayonnaise'),
(90, 'Ketchup'),
(91, 'Navet'),
(92, 'Nectarine'),
(93, 'Noisette'),
(94, 'Noix'),
(95, 'Noix de coco'),
(96, 'Oeuf'),
(97, 'Oignon'),
(98, 'Olive'),
(99, 'Orange'),
(100, 'Pain'),
(101, 'Palourde'),
(102, 'Pamplemousse'),
(103, 'Papaye'),
(104, 'Paprika'),
(105, 'Pastèque'),
(106, 'Pêche'),
(107, 'Persil'),
(108, 'Petits pois'),
(109, 'Piment'),
(110, 'Pistache'),
(111, 'Poire'),
(112, 'Poireau'),
(113, 'Pois chiche'),
(114, 'Poivron'),
(115, 'Pizza'),
(116, 'Pomme'),
(117, 'Pomme de terre'),
(118, 'Porc'),
(119, 'Potimarron'),
(120, 'Poulet'),
(121, 'Prune'),
(122, 'Pruneau'),
(123, 'Quetsche'),
(124, 'Quinoa'),
(125, 'Quiche'),
(126, 'Radis'),
(127, 'Raifort'),
(128, 'Raisin'),
(129, 'Rhubarbe'),
(130, 'Riz'),
(131, 'Safran'),
(132, 'Salsifis'),
(133, 'Sardine'),
(134, 'Sarrasin'),
(135, 'Sauge'),
(136, 'Saumon'),
(137, 'Semoule'),
(138, 'Sésame'),
(139, 'Sirop d\'Erable'),
(140, 'Coca'),
(141, 'Ice-Tea'),
(142, 'Bière'),
(143, 'Thé'),
(144, 'Jus d\'orange'),
(145, 'Jus de pomme'),
(146, 'Jus d\'ananas'),
(147, 'Jus multivitaminé'),
(148, 'Thon'),
(149, 'Thon en boîte'),
(150, 'Thym'),
(151, 'Truite'),
(152, 'Vanille'),
(153, 'Veau'),
(154, 'Vin'),
(155, 'Vinaigre'),
(156, 'Wasabi'),
(157, 'Yaourt'),
(158, 'Tarte Flambée'),
(159, 'Tourte');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
