-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 nov. 2021 à 12:00
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `belize bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(255) NOT NULL,
  `title_article` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `text_article` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `image_article` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `price_article` float NOT NULL,
  `description_article` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `quantity` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title_article`, `text_article`, `image_article`, `price_article`, `description_article`, `quantity`, `id_utilisateur`) VALUES
(2, 'Enceintes Cabasses', '2 enceintes front, 1 enceinte center, 2 enceintes back', 'LD0003394579_2date=MonNov15123047CET2021d.jpg', 1200.99, 'Enceintes de qualité supérieure, système 7.1, Dolby Atmos.', 5, 11),
(9, 'hello', 'darling', 'le-bol-tibetain-mysterieux-accessoire-des-yogisdate=MonNov15123021CET2021d.jpg', 156166, 'my', 555, 11),
(10, 'Lap Lap', 'très calinou', 'rabbit-373691_1920date=MonNov15122610CET2021d.jpg', 10999.6, 'lapinou super chouette', 1, 11),
(11, '2 ème lap lap', 'très attachant', 'rabbit-373691_1920date=MonNov15122643CET2021d.jpg', 22000, 'super actif', 1, 11),
(12, 'Amir', 'qui aime les filles', 'phone-contact.jpg', 523, 'Petit connard', 2, 11),
(15, 'Lucifer', 'Seigneur des enfers', 'lucifer.jpg', 133, 'Satanus', 5, 11),
(17, 'YOOOOOOOOOOOOOOOOOOOO', 'reyrey', 'armelo_0.png', 45525, 'nouvel article', 45, 11);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `star_comment` int(11) NOT NULL,
  `id_article` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id_comment`, `star_comment`, `id_article`, `id_utilisateur`) VALUES
(158, 1, 9, 11),
(160, 2, 15, 11),
(161, 3, 12, 11),
(162, 4, 12, 12),
(163, 5, 15, 12),
(164, 4, 9, 12),
(165, 4, 9, 12),
(166, 5, 10, 12),
(167, 1, 2, 12);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(255) NOT NULL,
  `nom` varchar(55) COLLATE utf8mb4_bin DEFAULT NULL,
  `prenom` varchar(55) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(55) COLLATE utf8mb4_bin DEFAULT NULL,
  `droit` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `password`, `droit`) VALUES
(4, 'tar', 'tampion', 'audemars@gmail.com', 'hey123456', 0),
(7, 'Piguet', 'Audemars', 'piguet@gmail.com', '3e9e8ca22046b75c136f2b1f1e7959d84e4c63e5', 0),
(8, 'Rolex', 'Daytona', 'Rolexsuisse@gmail.com', 'e44e992c48646503ed7b95cf0b79ddabe49a49d4', 0),
(9, 'Enzo', 'Ferrari', 'ferrari_testarossa@gmail.com', '116227c2505be5b02137fb92f3551a36f1538ef7', 0),
(10, 'Mamaille', 'de la rivière', 'fontaine@eau.com', '80b31b06500104691404a2cfab6b01788c815cf5', 0),
(11, 'Armel', 'SAIFI', 'armel@hotmail.fr', '3b004ac6d8a602681f5ee3587c924855679e21d9', 1),
(12, '50', 'Cent', '50cent@gmail.com', '3b004ac6d8a602681f5ee3587c924855679e21d9', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_utilistaeur` (`id_utilisateur`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_article` (`id_article`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
