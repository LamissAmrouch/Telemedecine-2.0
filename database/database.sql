-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2018 at 09:01 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `authentification`
--

CREATE TABLE IF NOT EXISTS `authentification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `authentification`
--

INSERT INTO `authentification` (`id`, `login`, `password`, `user_type`, `user_id`) VALUES
(1, 'admin', '123123', 'admin', 2),
(2, 'medecin1', '123', 'med', 7),
(3, 'medecin2', '123', 'med', 171717),
(4, 'med', '250', 'med', 12),
(5, 'medecin', '456', 'med', 28000);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `id_cons` int(11) NOT NULL AUTO_INCREMENT,
  `tension` varchar(2000) NOT NULL,
  `frequence_car` varchar(2000) NOT NULL,
  `temperature` varchar(2000) NOT NULL,
  `examen_car` varchar(4000) NOT NULL,
  `symptotes` text,
  `maladie` text,
  `traitement` text,
  `bio_med` text,
  `conseil` text,
  `reorientation` varchar(5000) DEFAULT NULL,
  `synthese` text,
  `date_cons` date NOT NULL,
  `id_patient` int(11) NOT NULL,
  `situation_clinique` text NOT NULL,
  `anatologie_cytologie` text NOT NULL,
  `examen_compl` text NOT NULL,
  PRIMARY KEY (`id_cons`),
  KEY `id_patient` (`id_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id_cons`, `tension`, `frequence_car`, `temperature`, `examen_car`, `symptotes`, `maladie`, `traitement`, `bio_med`, `conseil`, `reorientation`, `synthese`, `date_cons`, `id_patient`, `situation_clinique`, `anatologie_cytologie`, `examen_compl`) VALUES
(16, '', '', '', '', 'Douleur en dos , vomissement', 'Acouphènes  ', 'Albendazole Phytoménadione Héparine  panadol', 'Test ADN Test ARN  ', '', '', '', '2018-09-20', 11, '', '', 'Analyses sanguins'),
(17, '', '', '', '', 'augmentation de la glysemie', 'Anxiété , Aphtes , Anémie', 'Pyrantel, Oxacilline , Métronidazole , Augmentin', 'Electrocardiogramme (ECG) , Scanner  ', '', '', '', '2018-09-20', 11, '', '', 'FNS'),
(18, '14/09', '', '39', '', 'Douleur en ventre', 'Claquage  ', 'Pyrantel, Métronidazole , Smecta , spasfon', 'Microbiologie , Scanner  ', 'régime', 'hématologie', '', '2018-09-20', 12, '', '', 'Analyses'),
(20, '12/07', '', '', '', 'douleur', 'Allergie , dermatologue  ', '  ', '  ', '', '', '', '2018-09-21', 11, '', '', ''),
(42, '', '', '', '', 'douleur en tete , en dos , fatigue', 'Cholestérol  ', 'Pyrantel , Ceftriaxone , Oxacilline   ', 'Ultrasons doppler , Scanner  ', '', '', '', '2018-09-22', 13, '', '', ''),
(43, '', '', '', '', 'douleur et rougeur en gorge , insomnie    ', '  ', 'Amoxicilline , Ampicillin , Warfarine  ', 'Microbiologie , Coloscopie  ', '', 'hématologie', '', '2018-09-22', 11, '', '', 'Analyses sanguines '),
(44, '', '', '', '', 'douleur en dos ,pamoisson ', 'Bursite Calvitie  ', 'Albendazole Pyrantel Oxacilline   ', 'Tests urinaires  ', '', 'anesthésiologie', '', '2018-09-22', 12, '', '', 'analyses urainaires'),
(45, '', '', '', '', 'Douleur en dos ', 'Asthme  Anémie', 'Albendazole Amoxicilline  ', 'Tests urinaires Test ADN  ', '', 'chirurgiéne', '', '2018-09-23', 11, '', '', ''),
(54, '', '', '', '', '', '   ', '  ', '  ', '', '', '', '2018-09-26', 11, '', '', ''),
(55, '', '', '', '', '', '   ', '  ', '  ', '', '', '', '2018-09-26', 11, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `Numero` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `Hopital_id` int(11) NOT NULL,
  `Service_id` int(11) NOT NULL,
  `Medecin_id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `Etat` varchar(250) NOT NULL DEFAULT 'Actife',
  PRIMARY KEY (`Numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=789819 ;

--
-- Dumping data for table `contrat`
--

INSERT INTO `contrat` (`Numero`, `DateDebut`, `DateFin`, `Hopital_id`, `Service_id`, `Medecin_id`, `type`, `Etat`) VALUES
(1, '2018-07-02', '2018-07-26', 1, 1, 1, 'rec', 'Active'),
(2, '2018-07-02', '2018-07-31', 2, 1, 2, 'rec', 'Active'),
(3, '2018-07-02', '2018-07-26', 2, 1, 3, 'rec', 'Active'),
(4, '2018-07-01', '2018-07-12', 3, 2, 5, 'rec', 'Bloquer'),
(6, '2018-07-02', '2018-07-31', 2, 1, 6, 'conv', 'Active'),
(9, '2018-07-01', '2018-07-12', 2, 2, 5, 'conv', 'Bloquer'),
(10, '2018-07-02', '2018-07-31', 4, 1, 6, 'rec', 'Active'),
(11, '2018-07-02', '2018-07-12', 3, 3, 4, 'rec', 'Active'),
(12, '2018-07-02', '2018-07-31', 3, 1, 7, 'conv', 'Active'),
(13, '2018-07-02', '2018-07-12', 4, 3, 4, 'conv', 'Active'),
(14, '2018-07-02', '2018-07-31', 2, 1, 7, 'rec', 'Active'),
(15, '2018-07-02', '2018-07-12', 4, 1, 8, 'rec', 'Bloquer'),
(16, '2018-07-02', '2018-07-12', 1, 1, 8, 'conv', 'Bloquer'),
(17, '2018-07-02', '2018-07-26', 1, 1, 9, 'rec', 'Active'),
(18, '2018-07-02', '2018-07-31', 3, 1, 10, 'rec', 'Active'),
(20, '0000-00-00', '0000-00-00', 1, 1, 0, '', 'Active'),
(21, '0000-00-00', '0000-00-00', 1, 1, 127, '', 'Active'),
(22, '0000-00-00', '0000-00-00', 1, 1, 128, '', 'Active'),
(23, '0000-00-00', '0000-00-00', 2, 2, 129, 'rec', 'Active'),
(24, '0000-00-00', '0000-00-00', 1, 1, 130, 'rec', 'Active'),
(25, '0000-00-00', '0000-00-00', 2, 2, 131, 'rec', 'Active'),
(26, '0000-00-00', '0000-00-00', 1, 1, 154545, 'rec', 'Active'),
(27, '0000-00-00', '0000-00-00', 1, 1, 45645646, 'rec', 'Active'),
(28, '0000-00-00', '0000-00-00', 1, 1, 77777, 'rec', 'Bloquer'),
(29, '0000-00-00', '0000-00-00', 1, 1, 777, 'rec', 'Active'),
(30, '0000-00-00', '0000-00-00', 1, 1, 787878, 'rec', 'Active'),
(31, '0000-00-00', '0000-00-00', 1, 1, 9898989, 'rec', 'Active'),
(32, '0000-00-00', '0000-00-00', 2, 2, 12122, 'rec', 'Active'),
(33, '0000-00-00', '0000-00-00', 2, 0, 121223, 'rec', 'Active'),
(34, '0000-00-00', '0000-00-00', 0, 0, 121223, '', 'Active'),
(35, '0000-00-00', '0000-00-00', 2, 2, 78789, 'rec', 'Active'),
(36, '0000-00-00', '0000-00-00', 0, 0, 78789, '', 'Active'),
(37, '0000-00-00', '0000-00-00', 1, 1, 123456, 'rec', 'Active'),
(38, '0000-00-00', '0000-00-00', 0, 2, 123456, 'assistance', 'Active'),
(39, '0000-00-00', '0000-00-00', 2, 2, 1234567, 'rec', 'Active'),
(40, '0000-00-00', '0000-00-00', 1, 1, 1234567, 'assistance', 'Active'),
(41, '0000-00-00', '0000-00-00', 1, 1, 123456789, 'rec', 'Active'),
(42, '0000-00-00', '0000-00-00', 1, 1, 1234567890, 'rec', 'Active'),
(43, '0000-00-00', '0000-00-00', 2, 2, 147, 'rec', 'Active'),
(44, '0000-00-00', '0000-00-00', 1, 1, 147, 'assistance', 'Active'),
(45, '2018-07-02', '0000-00-00', 1, 1, 1111, 'rec', 'Active'),
(46, '2018-09-01', '2018-09-30', 2, 2, 1111, 'assistance', 'Active'),
(47, '2018-09-01', '2018-09-27', 1, 1, 1111, 'aide', 'Active'),
(48, '2017-09-01', '0000-00-00', 1, 1, 555, 'rec', 'Active'),
(49, '2018-09-01', '2019-09-07', 2, 2, 555, 'assistance', 'Active'),
(50, '2012-09-01', '0000-00-00', 1, 1, 789, 'rec', 'Active'),
(51, '2018-09-01', '2019-09-30', 2, 2, 789, 'assistance', 'Bloquer'),
(52, '2018-09-01', '2020-09-27', 1, 1, 789, 'aide', 'Active'),
(53, '2011-09-01', '0000-00-00', 2, 2, 122, 'rec', 'Actife'),
(54, '2018-09-01', '2019-09-02', 1, 1, 122, 'aide', 'Avtive'),
(4545, '2018-07-01', '2019-09-06', 5, 7, 3, 'rec', 'Active'),
(4546, '0000-00-00', '0000-00-00', 0, 0, 0, '', 'Active'),
(4548, '2018-09-02', '0000-00-00', 7, 13, 899974, 'rec', 'Avtive'),
(4549, '2018-09-01', '2018-09-30', 4, 11, 899974, 'assistance', 'Avtive'),
(4550, '2018-09-01', '2019-09-30', 5, 6, 899974, 'aide', 'Avtive'),
(4551, '2018-09-02', '0000-00-00', 4, 21, 8999745, 'rec', 'Avtive'),
(4552, '0000-00-00', '0000-00-00', 0, 0, 8999745, '', 'Avtive'),
(4553, '0000-00-00', '0000-00-00', 0, 0, 8999745, '', 'Avtive'),
(4554, '2018-09-01', '0000-00-00', 4, 11, 78944, 'rec', 'Active'),
(4555, '2018-09-01', '2018-09-30', 7, 13, 78944, 'aide', 'Active'),
(4556, '2018-09-01', '0000-00-00', 1, 1, 1234556, 'rec', 'Active'),
(4557, '0000-00-00', '0000-00-00', 2, 2, 1234556, 'assistance', 'Avtive'),
(4558, '2018-09-01', '0000-00-00', 1, 1, 5558, 'rec', 'Active'),
(789789, '2018-09-04', '2018-09-04', 1, 3, 777, 'aide', 'Active'),
(789790, '2018-09-15', '0000-00-00', 5, 7, 258, 'rec', 'Active'),
(789793, '2018-09-01', '2018-09-30', 5, 7, 8, 'assistance', 'Avtive'),
(789794, '2018-07-02', '0000-00-00', 4, 11, 8, 'rec', 'Bloquer'),
(789795, '2018-07-02', '0000-00-00', 4, 3, 8, 'rec', 'Active'),
(789796, '2018-09-01', '2018-09-30', 3, 6, 8, 'assistance', 'Avtive'),
(789797, '2018-07-02', '2018-07-02', 4, 0, 8, '', 'Avtive'),
(789798, '2018-09-01', '2018-09-30', 7, 2, 8, 'assistance', 'Avtive'),
(789799, '2018-07-02', '2018-07-02', 4, 0, 8, '', 'Avtive'),
(789800, '2018-09-01', '2018-09-30', 7, 1, 8, 'assistance', 'Avtive'),
(789801, '2018-07-02', '2018-07-29', 4, 3, 8, '', 'Avtive'),
(789802, '2018-09-07', '2018-09-30', 5, 4, 8, 'assistance', 'Avtive'),
(789803, '2018-09-01', '2018-09-30', 5, 4, 8, 'assistance', 'Active'),
(789804, '2018-07-01', '0000-00-00', 3, 6, 5, 'rec', 'Active'),
(789805, '2018-09-01', '2018-09-23', 1, 1, 5, 'assistance', 'Active'),
(789806, '2018-09-01', '0000-00-00', 4, 6, 87878, 'rec', 'Active'),
(789807, '2018-09-07', '2018-09-30', 2, 9, 87878, 'assistance', 'Active'),
(789808, '0000-00-00', '0000-00-00', 1, 1, 77777, 'rec', 'Bloquer'),
(789809, '2018-09-01', '0000-00-00', 4, 6, 789789, 'rec', 'Active'),
(789810, '2018-09-01', '2018-09-30', 2, 9, 789789, 'assistance', 'Avtive'),
(789811, '2018-09-02', '0000-00-00', 5, 3, 1717, 'rec', 'Active'),
(789812, '2018-09-02', '0000-00-00', 5, 3, 171717, 'rec', 'Active'),
(789813, '2018-09-02', '0000-00-00', 5, 3, 171717, 'rec', 'Active'),
(789814, '2018-09-01', '0000-00-00', 3, 6, 12, 'rec', 'Active'),
(789815, '2018-09-01', '2018-09-30', 1, 1, 12, 'assistance', 'Avtive'),
(789816, '0000-00-00', '0000-00-00', 1, 1, 77777, 'rec', 'Active'),
(789817, '2018-09-01', '0000-00-00', 3, 9, 28000, 'rec', 'Active'),
(789818, '2018-09-01', '2018-09-30', 4, 1, 28000, 'assistance', 'Avtive');

-- --------------------------------------------------------

--
-- Table structure for table `demande_seance`
--

CREATE TABLE IF NOT EXISTS `demande_seance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hopital` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `degre` varchar(5000) NOT NULL,
  `motif` text NOT NULL,
  `type_seance` varchar(5000) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `Specialite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Specialite_id` (`Specialite_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `demande_seance`
--

INSERT INTO `demande_seance` (`id`, `hopital`, `description`, `date_debut`, `date_fin`, `degre`, `motif`, `type_seance`, `id_patient`, `Specialite_id`) VALUES
(8, 'Mustafa bacha', '', '2018-10-02', '2018-10-26', 'Trés urgent', '', 'Télé-Consultation', 11, 1),
(9, 'Djelfa', '', '2018-11-06', '2018-11-29', 'Urgent', '', 'Télé-Expertice', 12, 2),
(11, 'Mustafa bacha', '', '2018-11-08', '2018-12-07', 'Urgent', '', 'Télé-Consultation', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `disponibilite`
--

CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `HeureDebut` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `HeureFin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Medcine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `disponibilite`
--

INSERT INTO `disponibilite` (`id`, `Date`, `HeureDebut`, `HeureFin`, `Medcine_id`) VALUES
(1, '2018-09-11', '0000-00-00 00:00:00', '2018-09-17 14:00:00', 1),
(2, '2018-09-19', '2018-09-17 09:45:08', '2018-09-17 14:00:00', 1),
(3, '2018-09-28', '2018-09-17 03:00:00', '2018-09-17 11:00:00', 5),
(4, '2018-09-01', '2018-09-17 06:00:00', '2018-09-17 12:00:00', 5),
(5, '2018-09-01', '2018-09-17 14:23:26', '0000-00-00 00:00:00', 8),
(6, '2018-09-02', '2018-09-17 07:00:00', '2018-09-17 13:00:00', 8),
(7, '2018-09-24', '2018-09-17 09:00:00', '2018-09-17 11:00:00', 8),
(8, '2018-10-11', '2018-09-17 07:00:00', '2018-09-17 14:00:00', 8),
(9, '2018-10-01', '2018-09-17 05:00:00', '2018-09-17 07:00:00', 5),
(10, '2018-09-08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 77777),
(11, '2018-09-02', '2018-09-02 11:00:00', '2018-09-02 14:00:00', 789),
(12, '2018-09-16', '2018-09-16 11:00:00', '2018-09-16 16:00:00', 555),
(13, '2018-09-23', '2018-09-23 12:00:00', '2018-09-23 14:00:00', 555),
(14, '2018-09-23', '2018-09-23 09:00:00', '2018-09-23 11:00:00', 555),
(15, '2018-10-28', '2018-10-28 12:00:00', '2018-10-28 13:00:00', 555),
(16, '2018-11-11', '2018-11-11 11:00:00', '2018-11-11 16:00:00', 555),
(17, '2018-11-11', '2018-11-11 11:00:00', '2018-11-11 16:00:00', 555),
(18, '2018-10-01', '2018-10-01 09:00:00', '2018-10-01 11:00:00', 555),
(19, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 555),
(20, '2018-11-01', '2018-11-01 11:00:00', '2018-11-01 14:00:00', 789789),
(21, '2018-09-22', '2018-09-22 11:00:00', '2018-09-22 14:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `code_examen` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`code_examen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`code_examen`, `nom`) VALUES
(1, 'Vitesse de sédimentation'),
(2, 'Hémogramme'),
(3, 'Test de dépistage du VIH/SIDA'),
(4, 'Tests urinaires'),
(5, 'Test ADN'),
(6, 'Test ARN'),
(7, 'Echantillon de selles'),
(8, 'Gaz sanguins'),
(9, 'Microbiologie'),
(10, 'Lavement baryté'),
(11, 'Urographie intra-veineuse'),
(12, 'Ultrasons échographie'),
(13, 'Ultrasons doppler'),
(14, 'Ultrasons Échographie Doppler'),
(15, 'Electrocardiogramme (ECG)'),
(16, 'Electroencéphalogramme (EEG)'),
(17, 'Scanner'),
(18, 'Tomographie à émission de positron'),
(19, 'Imagerie par résonance magnétique (RNM, IRM)'),
(20, 'Endoscopie'),
(21, 'Coloscopie'),
(22, 'Cystoscopie'),
(23, 'Sigmoïdoscopie'),
(24, 'Hystéroscopie'),
(25, 'Cœlioscopie'),
(26, 'Colposcopie'),
(27, 'Pléthysmographie'),
(28, 'Examens sanguins');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Discription` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `Discription`) VALUES
(1, 'Docteur'),
(2, 'Professeur'),
(3, 'Professeur agrégé'),
(4, 'Professeur chef de service'),
(5, 'assistant hospitalo universitaire'),
(6, 'MCU-PH');

-- --------------------------------------------------------

--
-- Table structure for table `hopital`
--

CREATE TABLE IF NOT EXISTS `hopital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hopital`
--

INSERT INTO `hopital` (`id`, `nom`, `tel`, `adresse`) VALUES
(1, 'beniMessous', '45648786454', 'beniMessous Alger'),
(2, 'Mestefa Bacha', '4648645645', 'bvhbdhskchdsjgdjghqjs'),
(3, 'Reghaia', '45684523', 'hjkshffjsdkfjskfdsj'),
(4, 'Alger Centre', '45645645', 'hhgfuighisdodhruiherh'),
(5, 'Mohamed Boudiaf d''Oum El Bouaghi', '05464687895', 'hjdqkfhdjkfhqjkhjqkdhqj'),
(6, 'Zerdani Salah d''Aïn', '4564878643123', 'sfufhdkljqdjsqkqldsjqkl'),
(7, 'Mohamed Boudiaf', '456312314', 'hdqsidhqsukdqusdgqh'),
(8, 'Akloul Ali\r\n', '21454888', 'vhsjcjxwkhwjvhvwj'),
(9, 'Bachir Bennace', '1717177878', 'hvjckhvjxhjkhvjkc'),
(10, 'Béni Abbès', '45456456', 'vhjkhvjwkhvjwkwj'),
(11, 'Aïn Bessam', '4564645645', 'vhxkfghjfgqhjfqh');

-- --------------------------------------------------------

--
-- Table structure for table `maladie`
--

CREATE TABLE IF NOT EXISTS `maladie` (
  `codemaladie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(400) NOT NULL,
  PRIMARY KEY (`codemaladie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `maladie`
--

INSERT INTO `maladie` (`codemaladie`, `nom`) VALUES
(1, 'Asthme'),
(2, 'Allergie dermatologue'),
(4, 'Acné'),
(5, 'Albinisme'),
(6, 'Acouphènes'),
(7, 'Allergies alimentaires'),
(8, 'Alzheimer'),
(9, 'Amylose'),
(10, 'Anémie'),
(11, 'Anxiété'),
(12, 'Aphtes'),
(13, 'Asbestose'),
(14, 'Autisme'),
(15, 'Ataxie'),
(16, 'Bipolaires'),
(17, 'Bursite'),
(18, 'Brucellose'),
(19, 'Calvitie'),
(20, 'Cancer'),
(21, 'Carie dentaire'),
(22, 'Choléra'),
(23, 'Cholestérol'),
(24, 'Claquage'),
(25, 'maladie du Coeur'),
(26, 'Cors'),
(27, 'Colite'),
(28, 'Complications du diabète'),
(29, 'Dartres'),
(30, 'Déchaussement'),
(31, 'Dermatomyosite'),
(32, 'Diphtérie'),
(33, 'Dystonie'),
(34, 'Dyspraxie'),
(35, 'Dyspepsie');

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `NSS` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `DateNaissance` date NOT NULL,
  `Tel` varchar(250) NOT NULL,
  `Grade_id` int(11) NOT NULL,
  `Specialite_id` int(11) NOT NULL,
  `Mail` varchar(250) NOT NULL,
  `Adresse` varchar(250) NOT NULL,
  `teleMedecine` tinyint(1) NOT NULL DEFAULT '0',
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `Site` varchar(250) NOT NULL,
  PRIMARY KEY (`NSS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`NSS`, `Nom`, `Prenom`, `DateNaissance`, `Tel`, `Grade_id`, `Specialite_id`, `Mail`, `Adresse`, `teleMedecine`, `facebook`, `twitter`, `Site`) VALUES
(1, 'tayleb', 'khaled', '1987-09-06', '05554892', 4, 2, 'hakzlam@gmail.com', '', 0, '', '', ''),
(3, 'mohamed', 'moh', '1988-10-12', '055478123', 3, 5, 'lzeiao@yahoo.fr', '', 0, '', '', ''),
(7, 'Mouloud', 'Mohammed', '2018-07-17', '4568789312', 2, 5, 'Mouloud@gmail.com', '', 0, '', '', ''),
(8, 'Talhi', 'Khaira zouhra', '2000-07-07', '54687853123', 1, 4, 'hjkhjk@yahoo.fr', '', 0, '', '', ''),
(10, 'Boumahdi', 'Soulef', '2018-07-03', '456423154', 1, 3, 'Mehdi@gmail.com', '', 0, '', '', ''),
(11, 'Chakib', 'Chakib', '2018-07-01', '4564875323', 2, 1, 'Chakib@gmail.com', '', 0, '', '', ''),
(12, 'mahyou', 'houssem', '0000-00-00', '06684545789', 5, 2, 'lazilihicham@gmail.com', '', 0, 'www.facebook.com', '', 'www.google.com'),
(122, 'rouabhi', 'djamel', '1970-09-02', '055478999', 2, 1, 'rabeh@gmail.com', '', 0, '', '', ''),
(130, 'lazili', 'sofia', '2002-08-09', '06684545789', 2, 4, 'sofialazili@gmail.com', '', 0, '', '', ''),
(131, 'lazili', 'abderazak', '1990-08-09', '06684545789', 1, 4, 'abdrezak@gmail.com', '', 0, '', '', ''),
(258, 'mohammed', 'khaldoune', '1990-09-01', '06684545789', 5, 4, 'fh_lazili@esi.dz', '', 0, '', '', ''),
(555, 'lazili', 'hichem', '1987-09-01', '06654879448', 1, 1, 'hichemlazili@gmail.com', '', 0, '', '', ''),
(777, 'zizou', 'lait', '2018-09-06', '786456456456456', 2, 2, 'hichemlazili@gmail.com', '', 0, '', '', ''),
(789, 'lazili', 'abderazzak', '1982-09-01', '0665478889', 1, 1, 'hichemlazili@gmail.com', '', 0, '', '', ''),
(1111, 'lionelle', 'messi', '1980-09-01', '06684545789', 1, 2, 'lazilihicham@yahoo.fr', '', 0, '', '', ''),
(1788, 'xavi', 'khaled', '1987-09-06', '05554892', 3, 7, 'hakzlam@gmail.com', '', 0, '', '', ''),
(3455, 'mohamed', 'moh', '1988-10-12', '055478123', 3, 5, 'lzeiao@yahoo.fr', '', 0, '', '', ''),
(28000, 'kenoui', 'mouna', '2018-09-02', '45456456', 2, 2, 'sofialazili@gmail.com', '', 0, '', '', ''),
(77777, 'zizou', 'hichem', '2018-07-13', '456878623123', 2, 1, 'lazilihicham@yahoo.fr', '', 0, '', '', ''),
(87878, 'lazili', 'hameza', '1985-09-01', '054478596', 6, 4, 'lazilihicham@gmail.com', '', 0, '', '', ''),
(171717, 'khaldi', 'raoufe', '0000-00-00', '044478566', 5, 4, 'lalalala@gmail.com', '', 0, 'facebook', 'www.gooogle.com', 'www.google.com'),
(899974, 'alonso', 'mohammed', '1988-09-02', '06684545789', 3, 4, 'fh_lazili@esi.dz', '', 0, '', '', ''),
(1234556, 'lazili', 'sofia', '2018-09-01', '06684545789', 1, 2, 'sofialazili@gmail.com', '', 0, '', '', ''),
(8999745, 'alonso', 'raoufe', '1988-09-02', '06684545789', 1, 1, 'fh_lazili@esi.dz', '', 0, '', '', ''),
(45645646, 'iniesta', 'andreasse', '2018-09-13', '06684545789', 1, 2, 'tfghfghf@gjghj', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(5000) NOT NULL,
  `prenom` varchar(5000) NOT NULL,
  `nss` varchar(5000) NOT NULL,
  `groupage` varchar(5000) NOT NULL,
  `rh` varchar(5000) NOT NULL,
  `nom_if` varchar(5000) NOT NULL,
  `adresse` text NOT NULL,
  `n_tel` bigint(20) NOT NULL,
  `date_naiss` date NOT NULL,
  `gender` varchar(5000) NOT NULL,
  `fonction` varchar(5000) NOT NULL,
  `tabac` varchar(5000) NOT NULL,
  `alcol` varchar(5000) NOT NULL,
  `st_faml` varchar(5000) NOT NULL,
  `date_crea` date NOT NULL,
  `date_motif` date NOT NULL,
  `etat` varchar(5000) NOT NULL,
  `commune` varchar(400) NOT NULL,
  `type_antecedant` varchar(400) NOT NULL,
  `antecedant` varchar(400) NOT NULL,
  `allergie` varchar(400) NOT NULL,
  `wilaya` varchar(400) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `nss`, `groupage`, `rh`, `nom_if`, `adresse`, `n_tel`, `date_naiss`, `gender`, `fonction`, `tabac`, `alcol`, `st_faml`, `date_crea`, `date_motif`, `etat`, `commune`, `type_antecedant`, `antecedant`, `allergie`, `wilaya`, `image`) VALUES
(11, 'Rahim', 'Fatma', '964410001159', 'A+', '', '', 'Rue Sidi Chaker ', 661353539, '1958-11-06', 'Female', 'Enseignante retraitée', 'Non', 'Non ', 'Marièe', '2018-08-14', '0000-00-00', '', 'Maghnia', '', 'Diabéte , coullon', 'Alimentaire', 'Tlemcen', 'Fatma.JPG'),
(12, 'Messar', 'Reda', '684433001159', 'O+', '', '', 'Quartier sbaat', 771523419, '1980-09-05', 'Male', 'Commerçant', 'Oui', 'Non', 'Marié', '2018-09-18', '0000-00-00', '', 'Rouiba', '', 'Asthme', 'Réspératoire', 'Alger', 'Reda.JPG'),
(13, 'Bakir', 'Imane', '261710461133', 'O-', '', '', 'Rue Jabri Ali Batiment A10', 558546789, '1997-04-22', 'Female', 'Etudiante', 'Non', 'Non', 'Célibataire', '2018-07-24', '0000-00-00', '', 'Arbaa', '', 'Aucun', 'Aucune', 'Blida', 'Imane.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `duree` int(11) NOT NULL,
  `Validation` varchar(20) NOT NULL,
  `Demande_id` int(11) NOT NULL,
  `Commentaire` varchar(250) NOT NULL,
  `titre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`id`, `Date`, `duree`, `Validation`, `Demande_id`, `Commentaire`, `titre`) VALUES
(12, '2018-09-12 14:30:00', 2, '', 1, 'consultation', 'Teleexpertise');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`ID`, `title`, `start`, `end`, `description`) VALUES
(16, '12', '2018-09-16 14:30:00', '2018-09-16 15:30:00', 'voir les analyses'),
(17, '1', '2018-09-12 14:30:00', '0000-00-00 00:00:00', 'sdsdsfs'),
(19, '22', '2018-09-22 14:30:00', '2018-09-22 14:30:00', 'consultation');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Discription` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `Discription`) VALUES
(1, 'Consultation'),
(2, 'General'),
(3, 'Anatomie pathologique'),
(4, 'Anesthésiologie'),
(5, 'Cellule Soins palliatifs - Soins continus'),
(6, 'Centre d''Aide aux Fumeurs'),
(7, 'Centre de Revalidation Gériatrique (CRG)'),
(8, 'Cardiologie'),
(9, 'Centre de Revalidation Gériatrique (CRG)');

-- --------------------------------------------------------

--
-- Table structure for table `service_hopital`
--

CREATE TABLE IF NOT EXISTS `service_hopital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Service_id` int(11) NOT NULL,
  `Hopital_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `service_hopital`
--

INSERT INTO `service_hopital` (`id`, `Service_id`, `Hopital_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 4),
(4, 2, 4),
(5, 1, 5),
(6, 2, 5),
(7, 4, 5),
(8, 7, 5),
(9, 3, 5),
(11, 3, 4),
(12, 1, 7),
(13, 2, 7),
(14, 3, 7),
(15, 4, 7),
(16, 5, 7),
(17, 2, 8),
(18, 3, 8),
(19, 5, 8),
(20, 6, 3),
(21, 6, 4),
(22, 6, 1),
(23, 6, 5),
(24, 9, 1),
(25, 9, 2),
(26, 9, 3),
(27, 9, 4),
(28, 9, 7),
(29, 10, 7),
(30, 10, 2),
(31, 10, 5),
(32, 10, 7),
(33, 11, 3),
(34, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Discription` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `specialite`
--

INSERT INTO `specialite` (`id`, `Discription`) VALUES
(1, 'cardio'),
(2, 'dentiste'),
(4, 'Chirurgien Cardiaque '),
(5, 'Neurlogue');

-- --------------------------------------------------------

--
-- Table structure for table `specialite_med`
--

CREATE TABLE IF NOT EXISTS `specialite_med` (
  `code_specialite` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`code_specialite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `specialite_med`
--

INSERT INTO `specialite_med` (`code_specialite`, `nom`) VALUES
(1, 'immunologue'),
(2, 'anesthésiologue'),
(3, 'andrologue'),
(4, 'cardiologue'),
(5, 'chirurgiéne'),
(6, 'dermatologue'),
(7, 'endocrinologue'),
(8, 'gastro-entérologue'),
(9, 'gériatrie'),
(10, 'gynécologue'),
(11, 'hématologue'),
(12, 'hépatologue'),
(13, 'infectiologue');

-- --------------------------------------------------------

--
-- Table structure for table `typeseance`
--

CREATE TABLE IF NOT EXISTS `typeseance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Discroption` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Planning_id` int(11) NOT NULL,
  `Disponibilite_id` int(11) NOT NULL,
  `validation` varchar(20) NOT NULL DEFAULT 'en attent',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande_seance`
--
ALTER TABLE `demande_seance`
  ADD CONSTRAINT `demande_seance_ibfk_1` FOREIGN KEY (`Specialite_id`) REFERENCES `specialite_med` (`code_specialite`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
