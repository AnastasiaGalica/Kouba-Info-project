-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 21 mai 2024 à 17:10
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mail_list`
--

-- --------------------------------------------------------

--
-- Structure de la table `mails`
--

CREATE TABLE `mails` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mails`
--

INSERT INTO `mails` (`id`, `email`) VALUES
(1, 'derkaoui.batoulatika54@g.ens-kouba.dz'),
(2, 'mail1@gmail.com'),
(5, 'mail1@gmail.com'),
(6, 'mail1@gmail.com'),
(7, 'mail1@gmail.com'),
(8, 'mail1@gmail.com'),
(9, 'test@gmail.com'),
(10, 'hello@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
