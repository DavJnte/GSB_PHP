-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 mai 2021 à 21:29
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsb_medicament`
--

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `idFamille` int(3) NOT NULL,
  `libFamille` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`idFamille`, `libFamille`) VALUES
(1, 'antihistaminique'),
(2, 'antidépresseur'),
(3, 'antibiotique'),
(4, 'Paracetamol'),
(5, 'analgésiques'),
(6, 'anti-inflammatoires'),
(7, 'bronchodilatateur'),
(8, 'antiagrégant'),
(9, 'antalgique '),
(11, 'contraceptif'),
(14, 'antispasmodique');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `idMedicament` int(3) NOT NULL,
  `Nom_produit` varchar(60) DEFAULT NULL,
  `idFamilleMedicament` int(3) NOT NULL,
  `Qte_stock` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`idMedicament`, `Nom_produit`, `idFamilleMedicament`, `Qte_stock`) VALUES
(16, 'Voltarene', 1, 6),
(17, 'Advil', 6, 4),
(18, 'Ventoline', 7, 10),
(19, 'Plavix', 8, 4),
(20, 'Efferalgan', 9, 4),
(27, 'spasfon', 14, 5),
(28, 'Doliprane 1000g', 4, 3),
(30, 'Codine', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `date`, `nom`, `prenom`, `login`, `pass`) VALUES
(3, '2021-04-24 14:47:42', 'Causet', 'David', 'v', '9e3669d19b675bd57058fd4664205d2a'),
(4, '2021-04-24 15:52:37', 'GUEROT', 'Sael', 'soso', '54b1d109dc7156ef46816a9527a861bc'),
(5, '2021-04-24 16:25:11', 'Soral', 'Victor', 'trefk', '7b37ca333c8d57d1721e189851859c6b'),
(12, '2021-05-17 22:53:05', 'jeannette', 'david', 'pp', 'c483f6ce851c9ecd9fb835ff7551737c'),
(17, '2021-05-17 23:28:36', 'Utilisateur', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`idFamille`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`idMedicament`),
  ADD KEY `FK_idFamilleMedicament` (`idFamilleMedicament`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `idFamille` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `idMedicament` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `FK_famille` FOREIGN KEY (`idFamilleMedicament`) REFERENCES `famille` (`idFamille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
