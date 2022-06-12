-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 juin 2022 à 11:23
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `ID` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`ID`, `user`, `passwd`) VALUES
(1, 'kamechnoue', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `ID_eleve` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID_eleve`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`, `Photo`, `etat`) VALUES
(19, '56431', 'Ferd', 'khadija', '505, BOUKALEF', 'Tanger', 'khadija.ferd@gmail.com', '../CONTENU/uploads/Ferd', 0),
(22, '2135', 'abou', 'fedyy', '534, boukhalef', 'Tangier', 'jhgf@gmail.com', '629711ea9b9e37.51273056.png', 0),
(23, '354', 'qskjd', 'lkqgd', '534, boukhalef', 'qligd', 'dkg:s<d', 'uploads/QSKJDpng', 0),
(24, '3654', 'qskjd', 'lkqgd', '534, boukhalef', 'qligd', 'dkg:s<d', 'uploads/QSKJD.png', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_name` (`user`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`ID_eleve`,`CNE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `ID_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
