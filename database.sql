-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2025 at 02:58 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `edutasker`
--

-- --------------------------------------------------------

--
-- Table structure for table `devoirs`
--

CREATE TABLE `devoirs` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL,
  `description` text,
  `date_de_creation` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_limite` date default NULL,
  `idprof` int(11) default NULL,
  `type_devoir` enum('QCM','Rédaction') default 'QCM',
  `nommatiere` varchar(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `idprof` (`idprof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `devoirs`
--

INSERT INTO `devoirs` (`id`, `titre`, `description`, `date_de_creation`, `date_limite`, `idprof`, `type_devoir`, `nommatiere`) VALUES
(1, 'tp1-fonctions', 'Question 1\r\nQuelle est la solution de l''équation \r\n2\r\n????\r\n+\r\n5\r\n=\r\n13\r\n2x+5=13 ?\r\na) \r\n????\r\n=\r\n3\r\nx=3\r\nb) \r\n????\r\n=\r\n4\r\nx=4\r\nc) \r\n????\r\n=\r\n5\r\nx=5\r\nd) \r\n????\r\n=\r\n6\r\nx=6\r\n\r\nQuestion 2\r\nQuel est le périmètre d''un carré de côté 7 cm ?\r\na) 14 cm\r\nb) 28 cm\r\nc) 21 cm\r\nd) 49 cm\r\n\r\nQuestion 3\r\nQuel est le résultat de \r\n64\r\n64\r\n?\r\n  ?\r\na) 6\r\nb) 7\r\nc) 8\r\nd) 9', '2024-06-06 14:21:16', '2024-06-07', 1, 'QCM', 'Mathématiques'),
(2, 'tp2-limites', 'exemple des limites ', '2024-06-07 19:20:10', '2024-06-10', 1, 'Rédaction', 'Mathématiques'),
(3, 'tp3-algèbre', 'Question 1\r\nQuelle est la valeur de x si 3x + 4 = 10 ?\r\na) 1\r\nb) 2\r\nc) 3\r\nd) 4\r\n\r\nQuestion 2\r\nSi y = 2x + 3, quelle est la valeur de y quand x = 2 ?\r\na) 5\r\nb) 6\r\nc) 7\r\nd) 8\r\n\r\nQuestion 3\r\nQuelle est la valeur de 5² ?\r\na) 20\r\nb) 25\r\nc) 30\r\nd) 35', '2024-06-10 10:30:00', '2024-06-12', 1, 'QCM', 'Mathématiques'),
(4, 'tp1-révolution française', 'Question 1\r\nEn quelle année a eu lieu la prise de la Bastille ?\r\na) 1787\r\nb) 1788\r\nc) 1789\r\nd) 1790\r\n\r\nQuestion 2\r\nQui était le roi de France en 1789 ?\r\na) Louis XIV\r\nb) Louis XV\r\nc) Louis XVI\r\nd) Louis XVII\r\n\r\nQuestion 3\r\nQuelle déclaration a été adoptée en 1789 ?\r\na) La Déclaration des Droits de l’Homme et du Citoyen\r\nb) La Déclaration d’Indépendance\r\nc) La Déclaration Universelle des Droits de l’Homme\r\nd) La Déclaration de l’Empire', '2024-06-11 09:45:00', '2024-06-13', 2, 'QCM', 'Histoire'),
(5, 'tp1-biomolécules', 'Question 1\r\nQuel est le principal constituant des protéines ?\r\na) Les acides nucléiques\r\nb) Les acides aminés\r\nc) Les glucides\r\nd) Les lipides\r\n\r\nQuestion 2\r\nQuelle est la base azotée trouvée uniquement dans l''ADN ?\r\na) Thymine\r\nb) Uracile\r\nc) Cytosine\r\nd) Guanine\r\n\r\nQuestion 3\r\nQuelle est la formule chimique de l''eau ?\r\na) H2O\r\nb) H2O2\r\nc) CO2\r\nd) O2', '2024-06-12 14:00:00', '2024-06-14', 3, 'QCM', 'Biologie'),
(6, 'tp1-conjugaison des verbes', 'Question 1\r\nQuel est le passé composé du verbe "manger" ?\r\na) Mangi\r\nb) Mangé\r\nc) Mangera\r\nd) Mangait\r\n\r\nQuestion 2\r\nQuel est l''imparfait du verbe "être" ?\r\na) Êtais\r\nb) Était\r\nc) Sera\r\nd) Serais\r\n\r\nQuestion 3\r\nQuel est le futur simple du verbe "faire" ?\r\na) Faisait\r\nb) Fait\r\nc) Fera\r\nd) Fait', '2024-06-13 15:00:00', '2024-06-15', 4, 'QCM', 'Français'),
(7, 'tp1-électricité', 'Question 1\r\nQuelle est l''unité de mesure de la résistance électrique ?\r\na) Ohm\r\nb) Volt\r\nc) Ampère\r\nd) Watt\r\n\r\nQuestion 2\r\nQuel est le symbole de l''ampère ?\r\na) A\r\nb) V\r\nc) W\r\nd) ?\r\n\r\nQuestion 3\r\nQuelle est la formule de la loi d''Ohm ?\r\na) V = I * R\r\nb) I = V / R\r\nc) R = V / I\r\nd) Toutes les réponses ci-dessus', '2024-06-14 10:00:00', '2024-06-16', 5, 'QCM', 'Physique'),
(8, 'tp2-la vie des plantes', 'Question 1\r\nQuelle partie de la plante est responsable de la photosynthèse ?\r\na) La racine\r\nb) La tige\r\nc) La feuille\r\nd) La fleur\r\n\r\nQuestion 2\r\nQuel gaz est absorbé par les plantes pour la photosynthèse ?\r\na) L''oxygène\r\nb) L''azote\r\nc) Le dioxyde de carbone\r\n\r\nd) L''hélium\r\n\r\nQuestion 3\r\nQuelle est la fonction des racines ?\r\na) Absorber l''eau et les nutriments\r\nb) Produire des fleurs\r\nc) Fabriquer des graines\r\nd) Capturer la lumière du soleil', '2024-06-15 11:30:00', '2024-06-17', 3, 'QCM', 'Biologie'),
(9, 'tp2-les ondes sonores', 'Question 1\r\nQuelle est l''unité de mesure de la fréquence des ondes sonores ?\r\na) Hertz\r\nb) Pascal\r\nc) Décibel\r\nd) Newton\r\n\r\nQuestion 2\r\nQuelle est la vitesse approximative du son dans l''air ?\r\na) 340 m/s\r\nb) 300 m/s\r\nc) 1500 m/s\r\nd) 1000 m/s\r\n\r\nQuestion 3\r\nQuel instrument mesure l''intensité sonore ?\r\na) Un oscilloscope\r\nb) Un sonomètre\r\nc) Un voltmètre\r\nd) Un thermomètre', '2024-06-16 13:45:00', '2024-06-18', 5, 'QCM', 'Physique'),
(10, 'tp2-la révolution industrielle', 'Question 1\r\nQuel pays est considéré comme le berceau de la révolution industrielle ?\r\na) France\r\nb) États-Unis\r\nc) Angleterre\r\nd) Allemagne\r\n\r\nQuestion 2\r\nQuel inventeur est associé à la machine à vapeur ?\r\na) James Watt\r\nb) Thomas Edison\r\nc) Nikola Tesla\r\nd) Henry Ford\r\n\r\nQuestion 3\r\nQuelle industrie a été la première à bénéficier de la mécanisation ?\r\na) L''industrie textile\r\nb) L''industrie automobile\r\nc) L''industrie métallurgique\r\nd) L''industrie chimique', '2024-06-17 09:00:00', '2024-06-19', 2, 'QCM', 'Histoire'),
(11, 'tp3-mécanique des solides', 'Question 1\r\nQuelle est la force qui s''oppose au mouvement ?\r\na) La gravité\r\nb) La friction\r\nc) La force normale\r\nd) La tension\r\n\r\nQuestion 2\r\nQuel est le centre de masse d''un objet homogène ?\r\na) Le point de gravité\r\nb) Le centre géométrique\r\nc) Le centre de surface\r\nd) Le centre de volume\r\n\r\nQuestion 3\r\nQuelle loi décrit l''action et la réaction ?\r\na) La première loi de Newton\r\nb) La deuxième loi de Newton\r\nc) La troisième loi de Newton\r\nd) La loi de la gravitation universelle', '2024-06-18 16:00:00', '2024-06-20', 5, 'QCM', 'Physique'),
(12, 'tp3-l''évolution des espèces', 'Question 1\r\nQui est le père de la théorie de l''évolution ?\r\na) Isaac Newton\r\nb) Albert Einstein\r\nc) Charles Darwin\r\nd) Galilée\r\n\r\nQuestion 2\r\nQuel livre a été écrit par Darwin ?\r\na) L''Origine des espèces\r\nb) La théorie de la relativité\r\nc) Les Principia\r\nd) La Divine Comédie\r\n\r\nQuestion 3\r\nQuelle est la sélection naturelle ?\r\na) Un processus où les individus les mieux adaptés survivent et se reproduisent\r\nb) Un processus où toutes les espèces survivent également\r\nc) Un processus où les plus grands deviennent dominants\r\nd) Un processus où les mutations sont éliminées', '2024-06-19 11:00:00', '2024-06-21', 3, 'QCM', 'Biologie'),
(13, 'tp3-les guerres mondiales', 'Question 1\r\nQuand a débuté la Première Guerre mondiale ?\r\na) 1914\r\nb) 1915\r\nc) 1916\r\nd) 1917\r\n\r\nQuestion 2\r\nQuel pays était allié avec l''Allemagne pendant la Seconde Guerre mondiale ?\r\na) Italie\r\nb) France\r\nc) Russie\r\nd) Royaume-Uni\r\n\r\nQuestion 3\r\nQuel traité a mis fin à la Première Guerre mondiale ?\r\na) Traité de Versailles\r\nb) Traité de Paris\r\nc) Traité de Londres\r\nd) Traité de Genève', '2024-06-20 09:30:00', '2024-06-22', 2, 'QCM', 'Histoire'),
(14, 'tp4-géométrie euclidienne', 'Question 1\r\nQuel est le théorème de Pythagore ?\r\na) a² + b² = c²\r\nb) a + b = c\r\nc) ab = c\r\nd) a² = b² + c²\r\n\r\nQuestion 2\r\nCombien de degrés a un angle droit ?\r\na) 45 degrés\r\nb) 60 degrés\r\nc) 90 degrés\r\nd) 120 degrés\r\n\r\nQuestion 3\r\nQuel est la somme des angles dans un triangle ?\r\na) 180 degrés\r\nb) 270 degrés\r\nc) 360 degrés\r\nd) 540 degrés', '2024-06-21 10:15:00', '2024-06-23', 1, 'QCM', 'Mathématiques'),
(20, 'tp4-la guerre froide', 'Question 1\r\nQuand a commencé la guerre froide ?\r\na) 1945\r\nb) 1947\r\nc) 1950\r\nd) 1953\r\n\r\nQuestion 2\r\nQuel pays faisait partie du bloc de l''Est ?\r\na) URSS\r\nb) États-Unis\r\nc) Royaume-Uni\r\nd) France\r\n\r\nQuestion 3\r\nQuel mur symbolisait la séparation entre l''Est et l''Ouest ?\r\na) Le mur de Berlin\r\nb) Le mur de la Chine\r\nc) Le mur de l''Atlantique\r\nd) Le mur des Lamentations', '2024-06-27 14:00:00', '2024-06-29', 2, 'QCM', 'Histoire'),
(21, 'tp2-la grammaire française', 'Question 1\r\nQuelle est la fonction d''un sujet dans une phrase ?\r\na) Déterminer l''action\r\nb) Exécuter l''action\r\nc) Modifier l''action\r\nd) Finir l''action\r\n\r\nQuestion 2\r\nQuel est le complément d''objet direct dans "Elle mange une pomme" ?\r\na) Elle\r\nb) Mange\r\nc) Une\r\nd) Pomme\r\n\r\nQuestion 3\r\nQuel est l''antécédent du pronom "qui" dans "L''homme qui parle" ?\r\na) L''homme\r\nb) Qui\r\nc) Parle\r\nd) Il', '2024-06-29 09:00:00', '2024-07-01', 4, 'QCM', 'Français'),
(23, 'tp4-thermodynamique', 'Question 1\r\nQuelle est la première loi de la thermodynamique ?\r\na) L''énergie ne peut être ni créée ni détruite\r\nb) La chaleur passe toujours du chaud au froid\r\nc) La pression est constante pour un gaz parfait\r\nd) La température reste constante\r\n\r\nQuestion 2\r\nQuel est le nom de la constante des gaz parfaits ?\r\na) R\r\nb) k\r\nc) T\r\nd) P\r\n\r\nQuestion 3\r\nQuel est le processus où la chaleur est absorbée par un système ?\r\na) Endothermique\r\nb) Exothermique\r\nc) Isothermique\r\nd) Adiabatique', '2024-07-01 14:30:00', '2024-07-03', 5, 'QCM', 'Physique'),
(29, 'tp1-la poésie française', 'Question 1\r\nQuel poète a écrit "Les Fleurs du mal" ?\r\na) Charles Baudelaire\r\nb) Arthur Rimbaud\r\nc) Paul Verlaine\r\nd) Stéphane Mallarmé\r\n\r\nQuestion 2\r\nQuel est le thème principal des poèmes de Baudelaire ?\r\na) L''amour\r\nb) La mort\r\nc) La nature\r\nd) La guerre\r\n\r\nQuestion 3\r\nQuel est le mètre le plus utilisé dans la poésie classique française ?\r\na) L''alexandrin\r\nb) L''octosyllabe\r\nc) Le décasyllabe\r\nd) L''hexasyllabe', '2024-07-10 14:00:00', '2024-07-12', 6, 'QCM', 'Littérature'),
(30, 'tp3-la littérature française', 'Question 1\r\nQuel écrivain a écrit "Les Misérables" ?\r\na) Victor Hugo\r\nb) Molière\r\nc) Gustave Flaubert\r\nd) Émile Zola\r\n\r\nQuestion 2\r\nQuel est le genre littéraire de "Candide" de Voltaire ?\r\na) Roman\r\nb) Nouvelle\r\nc) Essai\r\nd) Poésie\r\n\r\nQuestion 3\r\nQuel est le thème principal de "Madame Bovary" ?\r\na) L''amour\r\nb) La trahison\r\nc) La critique sociale\r\nd) L''aventure', '2024-07-10 10:30:00', '2024-07-12', 4, 'QCM', 'Français'),
(31, 'tp2-le roman réaliste', 'Question 1\r\nQuel romancier est associé au réalisme français ?\r\na) Gustave Flaubert\r\nb) Marcel Proust\r\nc) Émile Zola\r\nd) Guy de Maupassant\r\n\r\nQuestion 2\r\nQuel est le titre du roman de Flaubert qui est un exemple de réalisme ?\r\na) Madame Bovary\r\nb) L''Éducation sentimentale\r\nc) La Comédie humaine\r\nd) Les Rougon-Macquart\r\n\r\nQuestion 3\r\nQuel est le style d''écriture caractéristique du réalisme ?\r\na) Descriptions détaillées\r\nb) Descriptions succinctes\r\nc) Usage de la poésie\r\nd) Narration subjective', '2024-07-12 10:00:00', '2024-07-14', 6, 'QCM', 'Littérature'),
(34, 'tp11-algebre', 'Question 1\r\nQuelle est la valeur de x si 3x + 4 = 10 ?\r\na) 1\r\nb) 2\r\nc) 3\r\nd) 4\r\n\r\nQuestion 2\r\nSi y = 2x + 3, quelle est la valeur de y quand x = 2 ?\r\na) 5\r\nb) 6\r\nc) 7\r\nd) 8\r\n\r\nQuestion 3\r\nQuelle est la valeur de 5² ?\r\na) 20\r\nb) 25\r\nc) 30\r\nd) 35', '2025-01-25 13:56:30', '2023-09-10', 1, 'QCM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecole`
--

CREATE TABLE `ecole` (
  `idecole` int(11) NOT NULL,
  `nomecole` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel1` varchar(50) NOT NULL,
  `tel2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `anneefondation` date NOT NULL,
  `anneedemarrage` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `interlocuteur` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  PRIMARY KEY  (`idecole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecole`
--

INSERT INTO `ecole` (`idecole`, `nomecole`, `logo`, `adresse`, `tel1`, `tel2`, `email`, `anneefondation`, `anneedemarrage`, `type`, `description`, `interlocuteur`, `motdepasse`) VALUES
(1, 'École primaire Sainte-Marie', '../images/logocdp.jpg', '123 rue Sainte-Marie, Paris', '01 23 45 67 89', '01 23 45 67 90', 'contact@sainte-marie.fr', '2005-09-15', '2005-09-20', 'Primaire', 'École catholique privée', 'Jean Dupont', 'motdepasse1'),
(2, 'Lycée Louis Pasteur', '../images/logo.png', '456 Avenue Louis Pasteur, Lyon', '02 34 56 78 90', '02 34 56 78 91', 'contact@lycee-pasteur.fr', '1990-08-25', '1990-09-01', 'Secondaire', 'Établissement public', 'Marie Dupuis', 'motdepasse2'),
(3, 'École internationale de Genève', '../images/techtime.png', '789 Avenue des Nations, Genève', '03 45 67 89 01', '03 45 67 89 02', 'contact@geneve-international-school.ch', '1980-07-10', '1980-09-01', 'International', 'École internationale', 'Pierre Martin', 'motdepasse3'),
(4, 'supisi', '../images/logo-removebg-preview.png', 'av mouritania', '06578758', '0756476', 'ayoubzekri13@gmail.com', '2000-11-11', '2010-10-10', 'image/png', 'ecole de devlopement web', 'mouslim', 'supisi123'),
(5, 'sidi dris', '../images/file.png', 'av mojahidin', '054552', '05449884', 'ayoubzekri13@gmail.com', '2003-02-11', '2020-10-01', 'image/png', 'yvrtyr', 'ayoub', 'rtgyry'),
(6, 'AzSchool', '../images/A (1).png', 'av zemouri', '0566661410', '0577187623', 'azschool@gmail.com', '2024-12-12', '2025-01-15', 'image/png', 'Ecole des ingenieur civile', 'Zahra', 'azschool123'),
(7, 'professionnel', '../images/A.png', 'avenue mohamed 6', '0511141763', '0566123478', 'ayoubzokri@gmail.com', '2020-10-10', '2022-10-10', 'image/png', 'lycee profesionel', 'ayoub zokri', 'profesionel123');

-- --------------------------------------------------------

--
-- Table structure for table `ecoleprof`
--

CREATE TABLE `ecoleprof` (
  `idecole` int(11) NOT NULL,
  `idprof` int(11) NOT NULL,
  `annee` date NOT NULL,
  PRIMARY KEY  (`idecole`,`idprof`),
  KEY `idecole` (`idecole`),
  KEY `idprof` (`idprof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecoleprof`
--

INSERT INTO `ecoleprof` (`idecole`, `idprof`, `annee`) VALUES
(1, 1, '2024-05-16'),
(2, 1, '2024-05-16'),
(3, 2, '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `mdp` varchar(100) default NULL,
  PRIMARY KEY  (`idetudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nom`, `prenom`, `adresse`, `tel`, `email`, `datenaissance`, `mdp`) VALUES
(1, 'Dupont', 'Jean', '123 Rue de la Liberté, Paris', '01 23 45 67 89', 'jean.dupont@example.com', '1998-01-01', 'dupont123'),
(2, 'Martin', 'Marie', '456 Avenue Victor Hugo, Lyon', '02 34 56 78 90', 'marie.martin@example.com', '1999-02-02', 'martin123'),
(3, 'Dubois', 'Pierre', '789 Rue des Fleurs, Genève', '03 45 67 89 01', 'pierre.dubois@example.com', '2000-03-03', 'dubois123');

-- --------------------------------------------------------

--
-- Table structure for table `etudiantgroupe`
--

CREATE TABLE `etudiantgroupe` (
  `idetudiant` int(11) NOT NULL,
  `idgroupe` int(11) NOT NULL,
  PRIMARY KEY  (`idetudiant`,`idgroupe`),
  KEY `idetudiant` (`idetudiant`),
  KEY `idgroupe` (`idgroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiantgroupe`
--

INSERT INTO `etudiantgroupe` (`idetudiant`, `idgroupe`) VALUES
(1, 2),
(2, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examens`
--

CREATE TABLE `examens` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(255) NOT NULL,
  `description` text,
  `date_de_creation` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_exam` date default NULL,
  `idprof` int(11) default NULL,
  `type_examen` enum('QCM','Rédaction') default 'QCM',
  PRIMARY KEY  (`id`),
  KEY `idprof` (`idprof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `examens`
--

INSERT INTO `examens` (`id`, `titre`, `description`, `date_de_creation`, `date_exam`, `idprof`, `type_examen`) VALUES
(1, 'examen-mathématiques', 'Examen final couvrant l''ensemble des chapitres abordés au cours de l''année.', '2024-06-06 14:21:16', '2024-06-20', 1, 'QCM'),
(2, 'examen-histoire', 'Examen couvrant la période de la Révolution française à la Première Guerre mondiale.', '2024-06-07 19:20:10', '2024-06-22', 2, 'Rédaction'),
(3, 'examen-biologie', 'Examen final portant sur les biomolécules et les processus biologiques fondamentaux.', '2024-06-10 10:30:00', '2024-06-25', 3, 'QCM'),
(4, 'examen-français', 'Examen couvrant les principales règles de grammaire et de conjugaison.', '2024-06-11 09:45:00', '2024-06-26', 4, 'Rédaction'),
(5, 'examen-physique', 'Examen final portant sur l''électricité et la mécanique des solides.', '2024-06-12 14:00:00', '2024-06-27', 5, 'QCM'),
(6, 'examen-littérature', 'Examen final sur les principales œuvres de la littérature française.', '2024-06-13 15:00:00', '2024-06-28', 6, 'Rédaction');

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `idgroupe` int(11) NOT NULL auto_increment,
  `nomgroupe` varchar(50) NOT NULL,
  `abreviation` varchar(50) NOT NULL,
  `cycle` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `anneescolaire` varchar(20) NOT NULL,
  `numgroupe` int(11) NOT NULL,
  `idecole` int(11) NOT NULL,
  PRIMARY KEY  (`idgroupe`),
  KEY `idecole` (`idecole`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`idgroupe`, `nomgroupe`, `abreviation`, `cycle`, `filiere`, `niveau`, `anneescolaire`, `numgroupe`, `idecole`) VALUES
(1, 'Groupe Alpha', 'GA', 'Secondaire', 'Scientifique', '2ème année', '2023-2024', 1, 1),
(2, 'Groupe Bêta', 'GB', 'Secondaire', 'Littéraire', '1ère année', '2023-2024', 2, 1),
(3, 'Groupe Gamma', 'GC', 'Primaire', 'Scientifique', '3ème année', '2023-2024', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(11) NOT NULL auto_increment,
  `nommatiere` varchar(20) default NULL,
  `description` text,
  `idecole` int(11) NOT NULL,
  `idprof` int(11) NOT NULL,
  PRIMARY KEY  (`idmatiere`),
  KEY `idecole` (`idecole`),
  KEY `idprof` (`idprof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `description`, `idecole`, `idprof`) VALUES
(1, 'Mathématiques', 'Cours de mathématiques pour les classes de primaire', 1, 1),
(2, 'Sciences', 'Cours de sciences pour les classes de collège', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

CREATE TABLE `paiement` (
  `idpaiement` int(11) NOT NULL,
  `idplan` int(11) NOT NULL,
  `idecole` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `paye` varchar(50) NOT NULL,
  `mdepaiemment` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `datepaiement` date NOT NULL,
  PRIMARY KEY  (`idpaiement`),
  KEY `idplan` (`idplan`,`idecole`),
  KEY `idecole` (`idecole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paiement`
--

INSERT INTO `paiement` (`idpaiement`, `idplan`, `idecole`, `datedebut`, `datefin`, `paye`, `mdepaiemment`, `description`, `datepaiement`) VALUES
(1, 1, 1, '2024-01-01', '2024-12-31', 'Oui', 'Carte de crédit', 'Paiement annuel pour l''école primaire Sainte-Marie', '2024-01-05'),
(2, 2, 2, '2024-02-01', '2024-02-29', 'Oui', 'Prélèvement automatique', 'Paiement mensuel pour le Lycée Louis Pasteur', '2024-02-10'),
(3, 3, 3, '2024-03-01', '2024-05-31', 'Non', 'Virement bancaire', 'Paiement trimestriel pour l''École internationale d', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `idplan` int(11) NOT NULL,
  `paiement` varchar(50) NOT NULL,
  `modepaiement` varchar(50) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `nbrecole` varchar(50) NOT NULL,
  `nbrprof` varchar(50) NOT NULL,
  `devoire` varchar(50) NOT NULL,
  `nbrdevoire` varchar(50) NOT NULL,
  `examen` varchar(50) NOT NULL,
  `nbrexamen` varchar(50) NOT NULL,
  `duree` varchar(50) NOT NULL,
  PRIMARY KEY  (`idplan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`idplan`, `paiement`, `modepaiement`, `periode`, `nbrecole`, `nbrprof`, `devoire`, `nbrdevoire`, `examen`, `nbrexamen`, `duree`) VALUES
(1, 'Annuel', 'Carte de crédit', '1 an', '1-10', '1-5', 'Mensuel', '10', 'Annuel', '2', '12 mois'),
(2, 'Mensuel', 'Prélèvement automatique', '1 mois', '10-50', '5-20', 'Bimensuel', '20', 'Semestriel', '4', '6 mois'),
(3, 'Trimestriel', 'Virement bancaire', '3 mois', '50-100', '20-50', 'Hebdomadaire', '50', 'Trimestriel', '1', '3 mois');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `idprof` int(11) NOT NULL,
  `nomprof` varchar(50) NOT NULL,
  `prenomprof` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `emailprof` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `datecreation` date NOT NULL,
  PRIMARY KEY  (`idprof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`idprof`, `nomprof`, `prenomprof`, `tel`, `emailprof`, `description`, `mdp`, `datecreation`) VALUES
(1, 'Dupont', 'Jean', '0123456789', 'jean.dupont@example.com', 'Professeur de mathématiques', 'mdp123', '2024-05-15'),
(2, 'Martin', 'Sophie', '0987654321', 'sophie.martin@example.com', 'Professeur d''Histoire', 'mdp456', '2024-05-15'),
(3, 'Leroy', 'Pierre', '0678901234', 'pierre.leroy@example.com', 'Professeur de Biologie', 'mdp789', '2024-05-15'),
(4, 'Moreau', 'Clara', '0543216789', 'clara.moreau@example.com', 'Professeur de Français', 'mdp101', '2024-05-16'),
(5, 'Rousseau', 'Lucas', '0532167890', 'lucas.rousseau@example.com', 'Professeur de Physique', 'mdp102', '2024-05-16'),
(6, 'Durand', 'Emma', '0521678901', 'emma.durand@example.com', 'Professeur de Littérature', 'mdp103', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `profgroupe`
--

CREATE TABLE `profgroupe` (
  `idprof` int(11) NOT NULL,
  `idgroupe` int(11) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`idprof`,`idgroupe`),
  KEY `idprof` (`idprof`),
  KEY `idgroupe` (`idgroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profgroupe`
--

INSERT INTO `profgroupe` (`idprof`, `idgroupe`, `matiere`, `description`) VALUES
(1, 1, 'Mathématiques', 'Enseignement des mathématiques avancées'),
(2, 2, 'Physique', 'Cours de physique appliquée'),
(3, 3, 'Chimie', 'Laboratoire de chimie organique');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devoirs`
--
ALTER TABLE `devoirs`
  ADD CONSTRAINT `devoirs_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `prof` (`idprof`);

--
-- Constraints for table `ecoleprof`
--
ALTER TABLE `ecoleprof`
  ADD CONSTRAINT `ecoleprof_ibfk_1` FOREIGN KEY (`idecole`) REFERENCES `ecole` (`idecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ecoleprof_ibfk_2` FOREIGN KEY (`idprof`) REFERENCES `prof` (`idprof`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `etudiantgroupe`
--
ALTER TABLE `etudiantgroupe`
  ADD CONSTRAINT `etudiantgroupe_ibfk_1` FOREIGN KEY (`idetudiant`) REFERENCES `etudiant` (`idetudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etudiantgroupe_ibfk_2` FOREIGN KEY (`idgroupe`) REFERENCES `groupe` (`idgroupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examens`
--
ALTER TABLE `examens`
  ADD CONSTRAINT `examens_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `prof` (`idprof`);

--
-- Constraints for table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`idecole`) REFERENCES `ecole` (`idecole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`idecole`) REFERENCES `ecole` (`idecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matiere_ibfk_2` FOREIGN KEY (`idprof`) REFERENCES `prof` (`idprof`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idplan`) REFERENCES `plan` (`idplan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`idecole`) REFERENCES `ecole` (`idecole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profgroupe`
--
ALTER TABLE `profgroupe`
  ADD CONSTRAINT `profgroupe_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `prof` (`idprof`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profgroupe_ibfk_2` FOREIGN KEY (`idgroupe`) REFERENCES `groupe` (`idgroupe`) ON DELETE CASCADE ON UPDATE CASCADE;
