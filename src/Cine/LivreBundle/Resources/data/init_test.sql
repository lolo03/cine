USE cine;
SET NAMES UTF8;
SET foreign_key_checks=0;

TRUNCATE TABLE `auteur`;
TRUNCATE TABLE `categ`;
TRUNCATE TABLE `editeur`;
TRUNCATE TABLE `livre`;

SET foreign_key_checks=1;

LOCK TABLES `auteur` WRITE;
INSERT INTO `auteur` (id, nom, prenom) VALUES 
(1, 'Lenne', 'Gérard'),
(2, 'Brion', 'Patrick');

LOCK TABLES `categ` WRITE;
INSERT INTO `categ` (id, nom) VALUES 
(1, 'Horreur'),
(2, 'Science-Fiction');

LOCK TABLES `editeur` WRITE;
INSERT INTO `editeur` (id, nom) VALUES 
(1, 'Dreamland'),
(2, 'Rouge Profond');

LOCK TABLES `livre` WRITE;
INSERT INTO `livre` (id, type, titre, num, editeur, annee, mois, pages, langue, comment, stops) VALUES 
(1, 'type1', 'titre1', 0, 1, 1990, 12, 200, 'fr', ' ', 0),
(2, 'type2', 'titre2', 0, 1, 1990, 12, 200, 'fr', ' ', 0);

UNLOCK TABLES;

