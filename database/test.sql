-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 fév. 2024 à 11:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `admini`
--

CREATE TABLE `admini` (
  `id` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `passw0rd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admini`
--

INSERT INTO `admini` (`id`, `email`, `passw0rd`) VALUES
(1, 'admin@gmail.com', 'mot12');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'Plats Africain'),
(2, 'Plats Europeen'),
(3, 'Plats Americains'),
(4, 'Plats Asiatiques');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `descr` text NOT NULL,
  `prix` int(10) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`id`, `img`, `nom`, `descr`, `prix`, `cat_id`) VALUES
(1, 'u', 'Riz', 'Du riz à la cuisine americaine', 3000, 2),
(2, 'd', 'piron', '', 2000, 3),
(3, 'ss', 'Mafé', 'riz', 12, 3),
(4, 'sssssd', 'patte', 'sdd', 200, 3),
(19, 'uploads/Garba.jpg', 'Salade napolitaine', 'laitue,oignon,carotte,choux,thon,oeuf', 5000, 2),
(20, 'ddd', 'piron et sauce de gombo', 'sauce asaisonnée de gombo', 2000, 3),
(22, 'ss', 'Couscous au poulet', 'couscous,poulet,carotte', 1200, 3);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `passw0rd` varchar(15) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `email`, `passw0rd`, `birthday`) VALUES
(1, 'BOGNINOU', 'Gracais', 'bogninougracias@gmail.com', 'gracias1245', '2003-06-02');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `addresse` text NOT NULL,
  `numero` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `client`, `prix`, `plat`, `addresse`, `numero`) VALUES
(1, 'sossou', 200, 'riz', 'ouando', '58581223');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD CONSTRAINT `enregistrement_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
