-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2015 at 11:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bktragpo_mr`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate_paiment_invoice`
--

CREATE TABLE IF NOT EXISTS `allocate_paiment_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facture` varchar(25) NOT NULL,
  `valeur` double NOT NULL,
  `id_balance` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_balancee` (`id_balance`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `allocate_paiment_invoice`
--

INSERT INTO `allocate_paiment_invoice` (`id`, `facture`, `valeur`, `id_balance`) VALUES
(1, 'FCT0001', 45000, 'RCV0000001'),
(2, 'FCT0006', 40000, 'RCV0000002'),
(3, 'FCT0015', 11600, 'RCV0000003'),
(4, 'FCT0016', 10000, 'RCV0000003'),
(5, 'FCT0017', 1000, 'RCV0000003'),
(6, 'FCT0026', 1000, 'RCV0000003'),
(7, 'FCT0026', 1000, 'RCV0000003'),
(8, 'FCT0026', 1000, 'RCV0000003'),
(9, 'FCT0026', 576400, 'RCV0000003'),
(10, 'FCT0030', 1200, 'RCV0000004'),
(11, 'FCT0022', 400, 'RCV0000005'),
(12, 'FCT0023', 100, 'RCV0000005'),
(13, 'FCT0024', 300, 'RCV0000005'),
(14, 'FCT0023', 300, 'RCV0000005'),
(15, 'FCT0023', 300, 'RCV0000005'),
(16, 'FCT0031', 1000, 'RCV0000006');

-- --------------------------------------------------------

--
-- Table structure for table `allocate_paiment_purchase`
--

CREATE TABLE IF NOT EXISTS `allocate_paiment_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facture` varchar(25) NOT NULL,
  `valeur` double NOT NULL,
  `id_balance` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_balancee` (`id_balance`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `allocate_paiment_purchase`
--

INSERT INTO `allocate_paiment_purchase` (`id`, `facture`, `valeur`, `id_balance`) VALUES
(1, 'COM0002', 44000, 'PAY0000001'),
(2, 'COM0002', 1000, 'PAY0000002'),
(3, 'COM0002', 1000, 'PAY0000003'),
(4, 'COM0002', 1000, 'PAY0000004'),
(5, 'COM0002', 20000, 'PAY0000005'),
(6, 'COM0004', 3.2, 'PAY0000006'),
(7, 'COM0004', 3.2, 'PAY0000006'),
(8, 'COM0004', 973.6, 'PAY0000006'),
(9, 'COM0004', 300, 'PAY0000006'),
(10, 'COM0004', 6.4, 'PAY0000006'),
(11, 'COM0004', 6.4, 'PAY0000006'),
(12, 'COM0004', 6.4, 'PAY0000006'),
(13, 'COM0004', 633.6, 'PAY0000006'),
(14, 'COM0002', 2600, 'PAY0000007'),
(15, 'COM0008', 355999.4, 'PAY0000008'),
(16, 'COM0008', 640999.8, 'PAY0000008'),
(17, 'COM0009', 19000, 'PAY0000009'),
(18, 'COM0010', 800, 'PAY0000010'),
(19, 'COM0009', 81000, 'PAY0000011'),
(20, 'COM0010', 1200, 'PAY0000011'),
(21, 'COM0013', 2500, 'PAY0000011');

-- --------------------------------------------------------

--
-- Table structure for table `attach`
--

CREATE TABLE IF NOT EXISTS `attach` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Nom_file` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attach_envoi`
--

CREATE TABLE IF NOT EXISTS `attach_envoi` (
  `operation` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`operation`,`file`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attach_envoi`
--

INSERT INTO `attach_envoi` (`operation`, `file`, `Description`) VALUES
('EXP0003', 'EXP00032015-05-22 11-42-37.php', 'exonoration'),
('EXP0003', 'EXP00032015-05-22 11-43-47.png', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `attach_invoice`
--

CREATE TABLE IF NOT EXISTS `attach_invoice` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Ref_facture` varchar(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Ref_facture` (`Ref_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `balance_invoice`
--

CREATE TABLE IF NOT EXISTS `balance_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facture` varchar(25) NOT NULL,
  `valeur` double NOT NULL,
  `Monnaie` varchar(11) NOT NULL,
  `id_balance` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_balancee` (`id_balance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `balance_invoice_purchase`
--

CREATE TABLE IF NOT EXISTS `balance_invoice_purchase` (
  `id` varchar(40) NOT NULL,
  `valeur` double NOT NULL,
  `Monnaie` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `partenere` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `partenere` (`partenere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `balance_purchase`
--

CREATE TABLE IF NOT EXISTS `balance_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande` varchar(25) NOT NULL,
  `valeur` double NOT NULL,
  `Monnaie` varchar(11) NOT NULL,
  `id_balance` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_balance` (`id_balance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE IF NOT EXISTS `bank_account` (
  `Numero_Compte` varchar(60) NOT NULL,
  `Nom_Banque` varchar(30) NOT NULL,
  `groupe_banque` varchar(30) NOT NULL,
  `Cash` varchar(12) NOT NULL DEFAULT '',
  `virement` varchar(12) NOT NULL,
  `cheque` varchar(12) NOT NULL,
  `sold` double NOT NULL,
  `Monnaie` varchar(40) NOT NULL DEFAULT 'MRO',
  `decouvert` double NOT NULL DEFAULT '0',
  `code_comptable` varchar(60) NOT NULL,
  PRIMARY KEY (`Numero_Compte`),
  KEY `code_comptable` (`code_comptable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`Numero_Compte`, `Nom_Banque`, `groupe_banque`, `Cash`, `virement`, `cheque`, `sold`, `Monnaie`, `decouvert`, `code_comptable`) VALUES
('1', 'Caisse Bureau NKC', 'Caisse Bureau NKC', '1', '0', '0', 88300, 'MRO', 0, 'Caisse Bureau NKC(MRO)'),
('2147483647', 'BPM', 'BPM', '1', '1', '1', 1499101.5, 'EUR', 0, 'BPM(EUR)'),
('585988888', 'bmci', 'bmci', '1', '1', '1', 1486777.2, 'EUR', 0, 'bmci(EUR)');

-- --------------------------------------------------------

--
-- Table structure for table `before_payement`
--

CREATE TABLE IF NOT EXISTS `before_payement` (
  `Num_appurement` varchar(30) NOT NULL,
  `appurement` varchar(100) NOT NULL,
  PRIMARY KEY (`Num_appurement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `prefixe` varchar(13) NOT NULL,
  `appliquer_sur` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `Nom`, `prefixe`, `appliquer_sur`) VALUES
(5, 'Road Export', 'RE', '001'),
(8, 'Road Import', 'RI', '001'),
(12, 'Entreprise BKT', 'EN', '100'),
(17, 'Air Import', 'AI', '001'),
(18, 'Air Export', 'AE', '001'),
(19, 'Ocean Import', 'OI', '001'),
(20, 'Ocean Export', 'OE', '001'),
(21, 'Logistics', 'LG', '011'),
(22, 'Remise Documentaire', 'RM', '001');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `Nom_Code` varchar(60) NOT NULL,
  `Code` varchar(60) NOT NULL,
  `declaration` varchar(60) NOT NULL,
  `type_Compte` varchar(60) NOT NULL,
  `etat_affiche` varchar(4) NOT NULL DEFAULT '111',
  `Classement` varchar(50) NOT NULL,
  PRIMARY KEY (`Code`),
  UNIQUE KEY `Nom_Code` (`Nom_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`Nom_Code`, `Code`, `declaration`, `type_Compte`, `etat_affiche`, `Classement`) VALUES
('Client', '01255', 'PL', 'Client', '010', ''),
('Capital ', '100', 'Capital', 'Capital', '010', ''),
('bmci(EUR)', '1003', 'Comptable', 'Débiteur', '111', ''),
('Revenue', '200', 'Revenue', 'Revenue', '110', ''),
('Production de l’entreprise pour elle-même', '2300', 'Dépense', 'Créditeur', '111', 'Passif'),
('Caisse Bureau NKC(MRO)', '2325', 'Caisse NKC', 'Caisse', '100', ''),
('Depense fix', '300', 'Charge', 'Charge', '110', ''),
('Depense Admin', '301', 'Charge', 'Charge', '101', ''),
('Depense Telecom', '302', 'Charge', 'Charge', '110', ''),
('Depense carburant', '303', 'Charge', 'Charge', '000', ''),
('Depense Operationnel', '310', 'Charge', 'Charge', '110', ''),
('Salaire', '320', 'Dépense', 'Charge', '000', ''),
('BPM(EUR)', '3659', 'Comptable', 'Créditeur', '111', 'Passif'),
('Fournisseur', '56565', 'BC', 'Fournisseur', '110', ''),
('TAXES', '700505', 'Les taxes', 'Couts', '000', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactclient`
--

CREATE TABLE IF NOT EXISTS `contactclient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_prenom` varchar(40) NOT NULL,
  `Telphone` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Fonction` varchar(50) NOT NULL,
  `client` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client` (`client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactclient`
--

INSERT INTO `contactclient` (`id`, `Nom_prenom`, `Telphone`, `Email`, `Fonction`, `client`) VALUES
(2, 'Mohamed', '2255', 'mohamedloulyef@gmail.com', 'Technicieng', 'Baker Hughes EHO LTD Mauritania Branch');

-- --------------------------------------------------------

--
-- Table structure for table `contactfournisseur`
--

CREATE TABLE IF NOT EXISTS `contactfournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_prenom` varchar(40) NOT NULL,
  `Telphone` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Fonction` varchar(50) NOT NULL,
  `fournisseur` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client` (`fournisseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactfournisseur`
--

INSERT INTO `contactfournisseur` (`id`, `Nom_prenom`, `Telphone`, `Email`, `Fonction`, `fournisseur`) VALUES
(1, 'Mohamed Ould Mohamed Yeslem', '002204334830', 'mohamedloulyef@gmail.com', 'Comptable', 'Agent Port Non categ');

-- --------------------------------------------------------

--
-- Table structure for table `control_panel`
--

CREATE TABLE IF NOT EXISTS `control_panel` (
  `databese` varchar(60) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_compet` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `control_panel`
--

INSERT INTO `control_panel` (`databese`, `id`, `nom_compet`) VALUES
('bktragpo_mr', 1, 'Bktrans NKC'),
('bktragpo_demo', 3, 'Démo');

-- --------------------------------------------------------

--
-- Table structure for table `costs_value`
--

CREATE TABLE IF NOT EXISTS `costs_value` (
  `Numro` int(10) NOT NULL,
  `client` varchar(50) NOT NULL,
  `valeur` float DEFAULT NULL,
  `etat` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Numro`,`client`),
  KEY `client` (`client`),
  KEY `Numro` (`Numro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `Abreviation_Monnai` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Monnaie` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `choix_monnai` int(5) NOT NULL DEFAULT '0',
  `Valeur_Devise` float NOT NULL,
  `Monnaie_utliser` int(11) NOT NULL,
  PRIMARY KEY (`Nom_Monnaie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`Abreviation_Monnai`, `Nom_Monnaie`, `choix_monnai`, `Valeur_Devise`, `Monnaie_utliser`) VALUES
('EUR', 'EUR Euro', 1, 352.098, 0),
('USD', 'EURO', 1, 310.5, 0),
('MRO', 'Unité Mauritanienne ', 1, 1, 1),
('USD', 'United States Dollars', 1, 310.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `custemer`
--

CREATE TABLE IF NOT EXISTS `custemer` (
  `Nom_Soc` varchar(45) NOT NULL,
  `loi` varchar(45) DEFAULT NULL,
  `Prenom` varchar(40) DEFAULT NULL,
  `titre` varchar(40) DEFAULT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `AdressMail` varchar(40) DEFAULT NULL,
  `Telephone1` varchar(40) DEFAULT NULL,
  `Telephone2` varchar(40) DEFAULT NULL,
  `type_entreprise` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Compte` varchar(50) NOT NULL,
  `Numero_entreprise` varchar(40) DEFAULT NULL,
  `Skype` varchar(40) DEFAULT NULL,
  `Siteweb` varchar(40) DEFAULT NULL,
  `Fax` varchar(40) DEFAULT NULL,
  `archives` varchar(40) DEFAULT NULL,
  `type_client` varchar(40) DEFAULT NULL,
  `projet_defaut` varchar(40) DEFAULT NULL,
  `exonoration` varchar(30) NOT NULL,
  `Adress` text,
  `city` varchar(200) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `date_ajout` date NOT NULL,
  `terme` int(11) NOT NULL,
  PRIMARY KEY (`Nom_Soc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custemer`
--

INSERT INTO `custemer` (`Nom_Soc`, `loi`, `Prenom`, `titre`, `Nom`, `AdressMail`, `Telephone1`, `Telephone2`, `type_entreprise`, `Compte`, `Numero_entreprise`, `Skype`, `Siteweb`, `Fax`, `archives`, `type_client`, `projet_defaut`, `exonoration`, `Adress`, `city`, `pays`, `cat`, `date_ajout`, `terme`) VALUES
('Appsfinity', '', '', '', '', 'info@appsfinity.com', '00 3356232665', '', 'Partenaire', '', '254658', 'appsfinityInfo', 'http://appsfinity.com/', '', 'Non', 'Client et partenaire', '', 'non', 'AppsFinity BVBA. BP: 1235', 'Antwerp', 'Belgique ', 'partenaire ', '2015-06-04', 2),
('Baker Hughes EHO LTD Mauritania Branch', '', '', '', '', 'mohamedloulyef@gmail.com', '', '', '', 'Client', '', '', '', '', 'Non', 'Client', 'non', '', 'Nouakchott\r\nMauritania', '', '', '', '0000-00-00', 0),
('Bana blanc ', '', '', '', '', 'salem.banablanc@yahoo.fr', '22448000', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'Carefour Cité smar', 'Nouakchott', 'Mauritanie ', 'Client', '2015-03-26', 0),
('Brahim Soueilem', '00', '', '', '', 'brahimsoueilem@yahoo.fr', '00', '00', 'seul opérateur', 'Client', '00', '00', 'http://demo.com', '00', 'Non', 'Client', 'non', 'oui', '00', 'NKC', 'Mauritanie', 'Client', '0000-00-00', 0),
('CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '000', '', '', '', 'CDI@cdi-sa.com', '0022236242400', '0022236242400', 'Entreprise', 'Client', '000', '000', 'http://demo.com', '00', 'Non', 'Client', '', 'non', 'Ilot k124  , Nouakchott', 'Nouakchott', 'Mauritanie', 'partenaire ', '2015-03-23', 0),
('DACHSER MOROCCO', '    56464546', '', '', '', 'anass.thami@dachser.com', '00212522675960', '00212522675960', 'Partenaire', 'Client', '1000', 'jhvkjh', '', '00212522675851', 'Non', 'Client', '', 'non', '32 Rue Abou Baker Bnou Koutia Oukacha\r\n20250 Casablanca', 'casablanca', 'Maroc', 'partenaire ', '2015-03-11', 7),
('EL MECHRIGH SERVET', '', '', '', '', 'EMS@EMS.com', '', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'BP2375', 'Nouakchott ', 'Mauritanie ', 'partenaire ', '2015-03-30', 0),
('GRNAD MOULIN DU SAHEL', '', '', '', '', 'gms@gms.com', '0022246430078', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'Route du port de l''amitié', 'Nouakchott', 'Mauritanie ', 'partenaire ', '2015-03-30', 30),
('Haier Mauritanie', '', '', '', '', 'waf1900@yahoo.com', '', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', '', 'NKC', 'Mauritanie ', 'Client', '2015-03-26', 0),
('KEDA TEXTILES', '', 'KALAGI', 'MR', 'SAFI', '', '', '', 'Company', 'Client', '', '', '', '', 'Non', 'Customer', 'non', 'non', '', '', '', '', '0000-00-00', 0),
('MAFCI', '', '', '', '', 'ml.benauf@mafci.mr', '', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'ROUTE DE ROSSO ZONE PORT 2 ', 'NKC', 'Mauritanie', 'Client', '2015-03-19', 15),
('Maurimedis', '0', '', '', '', 'maurimedis@gmail.com', '112', '1212', 'Entreprise', 'Client', '122', 'SS', 'http://demo.com', '49888', 'Non', 'Client', '', 'Entreprise', '1VV', 'NKC', 'Mauritanie', 'partenaire ', '2015-03-17', 0),
('Mohamed & co', '', '', '', '', 'coinfo@gmail.com', '233565656', '', 'Entreprise', '', '', '', '', '', 'Non', 'Client', '', 'non', '', '', 'nice, France ', 'partenaire ', '2015-06-04', 0),
('Ocean Team Logistics Ltd', '', '', '', '', 'alan@oceanteamlogistics', '', '', '', 'Client', '', '', '', '', 'Non', 'Client et partenaire', 'non', 'non', 'Blackthorne Road\r\nBerkshire SL3 0AX\r\nUK', '', '', '', '0000-00-00', 0),
('Oceanteam logistics', '11111111111111111', '', '', '', 'alan@oceanteamlogistics.co.uk', '01753765910', '00441753765910', 'Entreprise', 'Client', '111111111', '1111111', 'http://www.oceanteamlogistics.com', '00441753685803', 'Non', 'Client', '', 'non', 'Unit 8 Trident Industrial Estate, Blackthorne Road, Colnbrook, Berkshire SL3 0AX', 'slough', 'Royaume_Uni', '', '2015-03-11', 7),
('Panalpina AG Switzerland', '', '', '', '', '', '', '', '', 'Client', '', '', '', '', 'Non', 'Client', 'non', 'non', 'Eichstrase 50, 8152\r\nGlattbrugg\r\nSwitzerland', '', '', '', '0000-00-00', 0),
('Panalpina China   ', '', '', '', '', 'Minnie.Zhang@panalpina.com', '', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client et partenaire', '', 'non', '', 'Shanghai', 'Chine', 'partenaire ', '2015-03-19', 45),
('Panalpina USA', '', '', '', '', 'Narciso.Botett@panalpina.com', '+1 (201) 272 2318', '+1(201)-272-1183', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client et partenaire', '', 'non', '1000B Castle Road; 1000B Castle Road', 'NYC', 'Etats Unis ', 'partenaire ', '2015-03-31', 90),
('RIM GAZ', '', '', '', '', '', '', '', '', 'Client', '', '', '', '', 'Non', 'Client', 'non', 'non', '', '', '', '', '0000-00-00', 0),
('SAMMA', '', '', '', '', 'EKHYARHOUM.MEDLEMINE@SNIM.COM', '0022222291610', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', '', 'Nouadhibou', 'Mauritanie ', 'Client', '2015-03-24', 0),
('Sascha Vens-Cappell ', '', '', '', '', 's.vens-cappell@alfons-koester.de', '+49/40/2 84 24-362', '', 'Entreprise', 'Client', '', '', 'http://www.alfons-koester.de', '+49/40/2 84 24-362', 'Non', 'Client et partenaire', '', 'non', 'Beim Strohhause 2\r\n20097 Hamburg – Germany\r\n', 'Hamburg ', 'Allemagne ', 'partenaire ', '2015-03-31', 0),
('SNIM', '', '', '', '', 'SNIM@SNIM.mr', '', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'BP42 Nouadhibou', 'Nouadhibou', 'Mauritanie ', 'partenaire ', '2015-03-30', 30),
('SOC', '', '', '', '', 'souleimane@soc.mr', '45253376', '', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client', '', 'non', 'BP 2279', 'Nouakchott', 'Mauritanie ', 'Client', '2015-03-31', 0),
('Volga-Dnepr UK Ltd', '', '', '', '', 'hm@volga-dnepr.co.uk', '00441279682140', '00441279661166', 'Entreprise', 'Client', '', '', '', '', 'Non', 'Client et partenaire', '', 'non', 'Endeavour House, Coopers End Road', 'London Stansted Airport, CM24 1AL', 'Royaume_Uni', 'Client', '2015-03-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `default_billing`
--

CREATE TABLE IF NOT EXISTS `default_billing` (
  `nb` int(10) NOT NULL,
  `description` text NOT NULL,
  `valeur` double NOT NULL,
  `Monnaie` varchar(20) NOT NULL,
  `type` varchar(12) NOT NULL,
  `variable` varchar(50) NOT NULL,
  PRIMARY KEY (`nb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `default_billing`
--

INSERT INTO `default_billing` (`nb`, `description`, `valeur`, `Monnaie`, `type`, `variable`) VALUES
(1, 'Declaration douane ', 50000, 'MRO', 'Air Import', '101'),
(2, ' Manutantion / Handling Airport MIN', 10000, 'MRO', 'Air Import', '102'),
(3, ' Manutation / Handling Airport per kg', 400, 'MRO', 'Air Import', '103'),
(4, ' Livraison / Delivery from Airport to city limit MIN', 15000, 'MRO', 'Air Import', '104'),
(5, ' Livraison / Delivery city limit per kg ', 400, 'MRO', 'Air Import', '105');

-- --------------------------------------------------------

--
-- Table structure for table `detaile_journal`
--

CREATE TABLE IF NOT EXISTS `detaile_journal` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Numero_Compte` int(11) NOT NULL,
  `Compte` varchar(50) NOT NULL,
  `Libelle` text NOT NULL,
  `Debit` float NOT NULL,
  `Credit` float NOT NULL,
  `id_journal` int(50) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Numero_Compte` (`Numero_Compte`),
  KEY `id_journal` (`id_journal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data for table `detaile_journal`
--

INSERT INTO `detaile_journal` (`id`, `Numero_Compte`, `Compte`, `Libelle`, `Debit`, `Credit`, `id_journal`, `etat`) VALUES
(120, 310, 'Depense Operationnel', 'dgfg', 100000, 0, 28, 0),
(121, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 100000, 28, 1),
(122, 310, 'Depense Operationnel', 'Remise doc', 0, 100000, 29, 0),
(123, 1255, 'Client', 'MAFCI', 100000, 0, 29, 1),
(124, 2325, 'Caisse Bureau NKC(MRO)', 'COM0009', 19000, 0, 30, 1),
(125, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 19000, 30, 0),
(126, 200, 'Revenue', 'rrrrrty', 0, 100, 31, 0),
(127, 1255, 'Client', 'Bana blanc ', 100, 0, 31, 1),
(128, 200, 'Revenue', 'desc1', 0, 1000, 32, 0),
(129, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 1000, 0, 32, 1),
(130, 310, 'Depense Operationnel', 'test_rapport', 2000, 0, 33, 0),
(131, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 2000, 33, 1),
(132, 2325, 'Caisse Bureau NKC(MRO)', 'COM0010', 800, 0, 34, 1),
(133, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 800, 34, 0),
(136, 1003, 'bmci(EUR)', '', 0, 171542, 35, 1),
(137, 320, 'Salaire', '023655666', 171542, 0, 35, 0),
(138, 200, 'Revenue', 'Declaration douane ', 0, 50000, 36, 0),
(139, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 50000, 0, 36, 1),
(140, 2300, 'Production de l’entreprise pour elle-même', 'gfh', 100000, 0, 37, 0),
(141, 56565, 'Fournisseur', 'Baker Hughes EHO LTD Mauritania Branch', 0, 100000, 37, 1),
(142, 2300, 'Production de l’entreprise pour elle-même', 'sdf', -90000, 0, 38, 0),
(143, 56565, 'Fournisseur', 'Baker Hughes EHO LTD Mauritania Branch', 0, -90000, 38, 1),
(144, 0, 'Production de l’entreprise pour el', 'FH', 0, 100000, 39, 0),
(145, 200, 'Revenue', 'GU', 0, 30000, 39, 0),
(146, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 130000, 0, 39, 1),
(147, 200, 'Revenue', 'gfjj', 0, 10000, 40, 0),
(148, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 10000, 0, 40, 1),
(149, 2300, 'Production de l’entreprise pour elle-même', 'dgg', 100000, 0, 41, 0),
(150, 2300, 'Production de l’entreprise pour elle-même', 'fg', 200000, 0, 41, 0),
(151, 56565, 'Fournisseur', 'Agent Port Non categ', 0, 300000, 41, 1),
(152, 3659, 'BPM(EUR)', 'EUR', 0, 316360, 42, 1),
(153, 320, 'Salaire', '023655666', 316360, 0, 42, 0),
(154, 310, 'Depense Operationnel', 'ocean freight', 2500, 0, 43, 0),
(155, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 2500, 43, 1),
(156, 310, 'Depense Operationnel', 'air freight ', 780000, 0, 44, 0),
(157, 56565, 'Fournisseur', 'BKtrans', 0, 780000, 44, 1),
(158, 200, 'Revenue', 'charge local ', 0, 0.3125, 45, 0),
(159, 200, 'Revenue', 'fret mritime', 0, 6.875, 45, 0),
(160, 700505, 'TAXES', 'TVA', 0, 0.05, 45, 0),
(161, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 7.2375, 0, 45, 1),
(162, 2325, 'Caisse Bureau NKC(MRO)', 'COM0013', 84700, 0, 46, 1),
(163, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 84700, 46, 0),
(164, 200, 'Revenue', 'frtet mariti,e ', 0, 20000, 47, 0),
(165, 200, 'Revenue', 'Declaration douane ', 0, 50000, 47, 0),
(166, 700505, 'TAXES', 'TVA', 0, 3200, 47, 0),
(167, 1255, 'Client', 'Baker Hughes EHO LTD Mauritania Branch', 73200, 0, 47, 1),
(168, 310, 'Depense Operationnel', 'conteneur', 20000, 0, 48, 0),
(169, 700505, 'TAXES', 'TVA', 3200, 0, 48, 0),
(170, 56565, 'Fournisseur', 'CMA Mauritanie', 0, 23200, 48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `element_invoice`
--

CREATE TABLE IF NOT EXISTS `element_invoice` (
  `id` int(8) NOT NULL,
  `Description` text NOT NULL,
  `Quantite` int(5) NOT NULL,
  `Prix` double NOT NULL,
  `TVA` double NOT NULL,
  `Monnaie` varchar(60) NOT NULL,
  `devis` double NOT NULL,
  `Reference` varchar(60) NOT NULL,
  `code` varchar(34) NOT NULL,
  `Type_tax` varchar(50) NOT NULL,
  `etat_pay_tax` int(11) NOT NULL,
  PRIMARY KEY (`id`,`Reference`),
  KEY `Reference` (`Reference`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_invoice`
--

INSERT INTO `element_invoice` (`id`, `Description`, `Quantite`, `Prix`, `TVA`, `Monnaie`, `devis`, `Reference`, `code`, `Type_tax`, `etat_pay_tax`) VALUES
(1, 'R', 10, -10, 0, 'MRO', 1, 'AV0000001', 'Revenue', '0', 0),
(1, 'ghj', 20, -30, 0, 'MRO', 1, 'AV0000002', 'Depense Operationnel', '0', 0),
(1, 'Door to Door Service', 1, 5201527.9, 0, 'MRO', 1, 'FAC0003', 'Revenue', '0', 0),
(1, '1x40 container rental of three Months from 28-Oct to 28-Jan of 1600 EUR / Month', 3, 1600, 0, 'EUR', 410, 'FAC0004', 'Revenue', ' ', 0),
(1, 'Port charges', 1, 400, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(1, 'Customs clearance and delivery', 1, 250, 0, 'EUR', 1, 'FAC0007', 'Revenue', '0', 0),
(1, 'Remise Doc', 3, 15000, 0, 'MRO', 1, 'FCT0001', 'Revenue', '0', 0),
(1, 'Ocean freight 40FR ', 8, 9500, 0, 'USD', 1, 'FCT0002', 'Revenue', '0', 0),
(1, 'Customs clearance & delivery', 1, 300, 0, 'EUR', 1, 'FCT0003', 'Revenue', '0', 0),
(1, 'Remise doc', 10, 10000, 0, 'MRO', 1, 'FCT0004', 'Depense Operationnel', '0', 0),
(1, 'Crane hire for one night at the airport', 1, 7000, 0, 'USD', 1, 'FCT0005', 'Revenue', '0', 0),
(1, 'Remise Documentaire', 2, 20000, 0, 'MRO', 1, 'FCT0006', 'Revenue', '0', 0),
(1, 'Remise Doc', 1, 17000, 0, 'MRO', 1, 'FCT0007', 'Revenue', '0', 0),
(1, 'Remise doc', 1, 30000, 0, 'MRO', 1, 'FCT0008', 'Revenue', '0', 0),
(1, 'Remise doc', 1, 30000, 0, 'MRO', 1, 'FCT0009', 'Revenue', '0', 0),
(1, 'Remise doc', 1, 20000, 0, 'MRO', 1, 'FCT0010', 'Revenue', '0', 0),
(1, 'Remise doc', 1, 20000, 0, 'MRO', 1, 'FCT0011', 'Revenue', '0', 0),
(1, 'Remise doc 1 x 20 dry ', 1, 30000, 0, 'MRO', 1, 'FCT0012', 'Revenue', '0', 0),
(1, 'Customs Clearance and delivery', 1, 3200, 0, 'EUR', 1, 'FCT0013', 'Revenue', '0', 0),
(1, ' Manutation / Handling Airport per kg\r\n', 1, 4000, 0, 'MRO', 1, 'FCT0014', 'Revenue', '0', 0),
(1, ' Manutantion / Handling Airport MIN\r\n', 1, 10000, 16, 'MRO', 1, 'FCT0015', 'Depense Admin', 'TVA', 0),
(1, ' Manutantion / Handling Airport MIN\r\n', 1, 10000, 0, 'MRO', 1, 'FCT0016', 'Revenue', '0', 0),
(1, ' Manutantion / Handling Airport MIN\r\n', 1, 1000, 0, 'MRO', 1, 'FCT0017', 'Revenue', '0', 0),
(1, 'Declaration douane \r\n', 1, 5000, 0, 'MRO', 1, 'FCT0018', 'Caisse Bureau NKC(MRO)', '0', 0),
(1, ' Livraison / Delivery from Airport to city limit MIN\r\n', 1, 15000, 16, 'MRO', 1, 'FCT0019', 'TAXES', 'TVA', 0),
(1, ' Manutation / Handling Airport per kg\r\n', 1, 400, 16, 'MRO', 1, 'FCT0020', 'Revenue', 'TVA', 0),
(1, ' Livraison / Delivery from Airport to city limit MIN\r\n', 1, 15000, 0, 'MRO', 1, 'FCT0021', 'Revenue', '0', 0),
(1, ' Manutation / Handling Airport per kg\r\n', 1, 400, 0, 'MRO', 1, 'FCT0022', 'Depense fix', '0', 0),
(1, ' Manutation / Handling Airport per kg', 1, 400, 0, 'MRO', 1, 'FCT0023', 'Revenue', '0', 0),
(1, ' Manutation / Handling Airport per kg', 1, 400, 0, 'MRO', 1, 'FCT0024', 'Revenue', '0', 0),
(1, ' Manutantion / Handling Airport MIN', 1, 10000, 0, 'MRO', 1, 'FCT0025', 'Revenue', '0', 0),
(1, 'DESC', 1000, 1000, 16, 'MRO', 1, 'FCT0026', 'Revenue', 'TVA', 0),
(1, 'DESC', 1000, 1000, 16, 'MRO', 1, 'FCT0027', 'Revenue', 'TVA', 0),
(1, 'DESC', 1000, 1000, 16, 'MRO', 1, 'FCT0028', 'Revenue', 'TVA', 0),
(1, 'DESC', 1000, 10, 16, 'MRO', 1, 'FCT0029', 'Revenue', 'TVA', 0),
(1, 'FCT', 1200, 1, 0, 'MRO', 1, 'FCT0030', 'Revenue', '0', 0),
(1, 'sdg', 100, 10, 0, 'MRO', 1, 'FCT0031', 'Revenue', '0', 0),
(1, ' Manutation / Handling Airport per kg', 1, 4000, 0, 'MRO', 1, 'FCT0032', 'Revenue', '0', 0),
(1, 'gj', 200, 12, 0, 'MRO', 1, 'FCT0033', 'Depense fix', '0', 0),
(1, 'rrrrrty', 10, 10, 0, 'MRO', 1, 'FCT0034', 'Revenue', '0', 0),
(1, 'desc1', 10, 100, 0, 'MRO', 1, 'FCT0035', 'Revenue', '0', 0),
(1, 'Declaration douane ', 1, 50000, 0, 'MRO', 1, 'FCT0036', 'Revenue', '0', 0),
(1, '1', 1, 50000, 0, 'MRO', 1, 'FCT0037', 'Revenue', '0', 0),
(1, 'FH', 10, 100, 0, 'MRO', 10, 'FCT0038', 'Production de l’entreprise pour el', '0', 0),
(1, 'gfjj', 100, 100, 0, 'MRO', 1, 'FCT0039', 'Revenue', '0', 0),
(1, ' Livraison / Delivery from Airport to city limit MIN\r\n', 1, 15000, 0, 'MRO', 1, 'FCT0040', 'Revenue', '0', 0),
(1, 'charge local ', 1, 50000, 16, 'MRO', 0.0025, 'FCT0041', 'Revenue', 'TVA', 0),
(1, 'frtet mariti,e ', 1, 20000, 16, 'MRO', 1, 'FCT0042', 'Revenue', 'TVA', 0),
(2, 'THC', 1, 350, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(2, 'NIF Penalty', 1, 100, 0, 'EUR', 1, 'FAC0007', 'Revenue', '0', 0),
(2, 'Ocean freight 40OT', 3, 7500, 0, 'USD', 1, 'FCT0002', 'Revenue', '0', 0),
(2, 'Customs duties', 1, 200, 0, 'EUR', 1, 'FCT0003', 'Revenue', '0', 0),
(2, 'GU', 300, 10, 0, 'MRO', 1, 'FCT0038', 'Revenue', '0', 0),
(2, 'fret mritime', 1, 2500, 0, 'USD', 1.1, 'FCT0041', 'Revenue', '0', 0),
(2, 'Declaration douane ', 1, 50000, 0, 'MRO', 1, 'FCT0042', 'Revenue', '0', 0),
(3, 'Empty container positioning', 1, 700, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(3, 'Customs duties', 1, 402.75, 0, 'EUR', 1, 'FAC0007', 'Revenue', '0', 0),
(3, 'Assurance', 1, 900, 0, 'USD', 1, 'FCT0002', 'Revenue', '0', 0),
(3, '8% Service charge', 1, 18, 0, 'EUR', 1, 'FCT0003', 'Revenue', '0', 0),
(4, 'Double handling at 3rd party warehouse', 2, 120, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(4, 'MBL', 2, 160, 0, 'USD', 1, 'FCT0002', 'Revenue', '0', 0),
(5, 'Customs clearance', 1, 350, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(6, 'warehousing of container waiting', 180, 20, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(7, 'Shipping line container detention', 180, 20, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0),
(8, 'Ocean freight to Rotterdam', 1, 1950, 0, 'EUR', 1, 'FAC0005', 'Revenue', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `element_offre`
--

CREATE TABLE IF NOT EXISTS `element_offre` (
  `id` int(8) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Quantite` int(5) NOT NULL,
  `Prix` float NOT NULL,
  `TVA` float NOT NULL,
  `Monnaie` varchar(60) NOT NULL,
  `devis` double NOT NULL,
  `Reference` varchar(60) NOT NULL,
  `code` varchar(34) NOT NULL,
  `Tax` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`Reference`),
  KEY `Reference` (`Reference`),
  KEY `code` (`code`),
  KEY `Tax` (`Tax`),
  KEY `Tax_2` (`Tax`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_offre`
--

INSERT INTO `element_offre` (`id`, `Description`, `Quantite`, `Prix`, `TVA`, `Monnaie`, `devis`, `Reference`, `code`, `Tax`) VALUES
(1, ' Manutantion / Handling Airport MIN', 1, 1000, 0, 'MRO', 1, 'OFR0005', '', '0'),
(1, ' Manutantion / Handling Airport MIN', 1, 10000, 0, 'MRO', 1, 'OFR0006', '', '0'),
(1, ' Manutation / Handling Airport per kg', 1, 4000, 0, 'MRO', 1, 'OFR0007', '', '0'),
(1, ' Manutantion / Handling Airport MIN', 1, 10000, 16, 'MRO', 1, 'OFR0008', '', 'TVA'),
(1, 'Declaration douane ', 1, 5000, 0, 'MRO', 1, 'OFR0009', '', '0'),
(1, ' Livraison / Delivery from Airport to city limit MIN', 1, 10000, 0, 'MRO', 0.012, 'OFR0010', '', '0'),
(1, ' Livraison / Delivery from Airport to city limit MIN', 1, 15000, 16, 'MRO', 1, 'OFR0011', '', 'TVA'),
(1, ' Manutation / Handling Airport per kg', 1, 400, 0, 'MRO', 1, 'OFR0012', '', '0'),
(1, ' Livraison / Delivery from Airport to city limit MIN', 1, 15000, 0, 'MRO', 1, 'OFR0013', '', '0'),
(1, ' Manutation / Handling Airport per kg', 1, 400, 16, 'MRO', 1, 'OFR0014', '', 'TVA'),
(1, ' Livraison / Delivery from Airport to city limit MIN', 1, 1500, 0, 'MRO', 1, 'OFR0015', '', '0'),
(1, ' Livraison / Delivery from Airport to city limit MIN', 1, 15000, 0, 'MRO', 1, 'OFR0016', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `element_purchase`
--

CREATE TABLE IF NOT EXISTS `element_purchase` (
  `id` int(40) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `designation` text NOT NULL,
  `quantite` int(5) NOT NULL,
  `prix_unitaire` double NOT NULL,
  `monnaie` varchar(30) NOT NULL,
  `devise` float NOT NULL,
  `tva` float NOT NULL,
  `code_comptable` varchar(60) NOT NULL,
  `Type_tax` varchar(50) NOT NULL,
  `etat_pay_tax` int(11) NOT NULL,
  PRIMARY KEY (`id`,`reference`),
  KEY `reference` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_purchase`
--

INSERT INTO `element_purchase` (`id`, `reference`, `designation`, `quantite`, `prix_unitaire`, `monnaie`, `devise`, `tva`, `code_comptable`, `Type_tax`, `etat_pay_tax`) VALUES
(1, 'AV0000001', 'dsgf', 10, -100, 'MRO', 1, 0, 'Revenue', '0', 0),
(1, 'AV0000002', 'sdf', 1, -90000, 'MRO', 1, 0, 'Production de l’entreprise pour elle-même', '0', 0),
(1, 'COM0001', 'local charges , customs clearance , handling charges ', 156300, 1, 'MRO', 1, 16, 'Depense Operationnel', 'TVA', 0),
(1, 'COM0002', 'crane hire at the airport for one night', 1, 700000, 'MRO', 1, 16, 'Depense Operationnel', 'TVA', 0),
(1, 'COM0003', 'different access facilities', 1, 70000, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0004', 'Ocean freight for 11 container FR', 1, 84980, 'USD', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0005', 'Customs duties', 1, 70000, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0006', 'Formalité douane et livraison', 1, 25000, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0007', 'Ocean freight of 1x40', 1, 4361.46, 'USD', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0008', 'Achat de conteneur', 1, 600000, 'MRO', 1, 16, 'Depense Operationnel', 'TVA', 0),
(1, 'COM0009', 'dgfg', 1000, 100, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0010', 'test_rapport', 200, 10, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0011', 'gfh', 100, 1000, 'MRO', 1, 0, 'Production de l’entreprise pour elle-même', '0', 0),
(1, 'COM0012', 'dgg', 1, 100000, 'MRO', 1, 0, 'Production de l’entreprise pour elle-même', '0', 0),
(1, 'COM0013', 'ocean freight', 1, 2500, 'MRO', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0014', 'air freight ', 1, 2400, 'USD', 1, 0, 'Depense Operationnel', '0', 0),
(1, 'COM0015', 'conteneur', 1, 20000, 'MRO', 1, 16, 'Depense Operationnel', 'TVA', 0),
(2, 'COM0002', 'Achats de marchandises', 1, 1000, 'EUR', 200, 16, 'Revenue', 'TVA', 0),
(3, 'COM0012', 'fg', 1, 200000, 'MRO', 1, 0, 'Production de l’entreprise pour elle-même', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `email_envoi`
--

CREATE TABLE IF NOT EXISTS `email_envoi` (
  `host` varchar(100) NOT NULL,
  `port` int(10) NOT NULL,
  `mtd_sec` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_envoi`
--

INSERT INTO `email_envoi` (`host`, `port`, `mtd_sec`, `user`, `password`) VALUES
('smtp.office365.com', 587, 'tls', 'mohamed.yeslem@bktrans-sa.com', '123789456A!!');

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `Sigle` varchar(50) DEFAULT NULL,
  `Adress` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `web-site` varchar(50) NOT NULL,
  `Nom_Entreprise` varchar(60) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Pays` varchar(200) NOT NULL,
  `footer` text,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entreprise`
--

INSERT INTO `entreprise` (`Sigle`, `Adress`, `phone`, `Fax`, `Email`, `web-site`, `Nom_Entreprise`, `City`, `Pays`, `footer`) VALUES
('BKTrans NKC.png', 'Cite plage BP:1235', '+22245255385', '+22245255386', 'bktrans@bktrans.mr', 'www.bktrans.mr', 'BKTrans NKC', 'Nouakchott ', 'Mauritanie', 'BKTrans SARL Registered Office :1. Nouakchott ,Mauritanie,1235.Company Number :11191');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `Num` varchar(50) NOT NULL,
  `Marque` varchar(60) NOT NULL,
  `Etat` varchar(60) NOT NULL,
  `Kilometrage_Debut` float NOT NULL,
  `Kilometrage_Fin` float NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`Num`, `Marque`, `Etat`, `Kilometrage_Debut`, `Kilometrage_Fin`, `Description`) VALUES
('1000AS00', 'AWB00012', '1', 1000, 5000, 'iuol');

-- --------------------------------------------------------

--
-- Table structure for table `estimated_costs`
--

CREATE TABLE IF NOT EXISTS `estimated_costs` (
  `Libelle` varchar(100) NOT NULL,
  `cout_estime` double NOT NULL,
  `monnaie` varchar(12) NOT NULL,
  `Date` date NOT NULL,
  `Reference` varchar(60) NOT NULL,
  `Devise` float NOT NULL,
  `id` int(50) NOT NULL,
  PRIMARY KEY (`Reference`,`id`),
  KEY `Reference` (`Reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimated_costs`
--

INSERT INTO `estimated_costs` (`Libelle`, `cout_estime`, `monnaie`, `Date`, `Reference`, `Devise`, `id`) VALUES
('frais total', 91000, 'MRO', '2015-03-11', 'AI000001', 1, 1),
('ddp', 0, 'MRO', '2015-03-11', 'AI000002', 1, 1),
('communication', 500, 'MRO', '2015-03-17', 'AI000003', 1, 1),
('Air Freight ', 1000, 'EUR', '2015-03-31', 'AI000004', 375, 1),
('Door to door Service ', 1000, 'EUR', '2015-03-31', 'AI000005', 390, 1),
('Air Freight ', 420, 'EUR', '2015-03-31', 'AI000006', 375, 1),
('jgjhg', 10, 'MRO', '2015-06-02', 'EN000001', 1, 1),
('location conteneur 40', 400000, 'MRO', '2015-03-19', 'LG000001', 1, 1),
('Crane hire ', 800000, 'MRO', '2015-03-19', 'LG000002', 1, 1),
('fret maritime', 4500, 'USD', '2015-01-17', 'OE000002', 325, 1),
('charge local ', 380000, 'MRO', '2015-01-17', 'OE000002', 1, 2),
('Purchase of pallets and Pails ', 800000, 'MRO', '2015-03-31', 'OE000003', 1, 1),
('Ocean freight', 25000, 'USD', '2015-03-31', 'OE000003', 315, 2),
('Transport and Logistics', 6000000, 'MRO', '2015-03-31', 'OE000003', 1, 3),
('LCL pour un petit colis de 60kg de la France', 200, 'EUR', '2015-03-19', 'OI000001', 375, 1),
('facture votra ', 28500, 'MRO', '2015-01-05', 'OI000001', 1, 3),
('customs clearance  and Delivery ', 2300, 'EUR', '2015-03-31', 'OI000002', 339, 1),
('Customs Clearance and delivery ', 584.42, 'EUR', '2015-03-31', 'OI000003', 339, 1),
('Panalpina Invoice', 4361.46, 'USD', '2015-01-13', 'OI000004', 315, 1),
('Shipping Line', 45000, 'MRO', '2015-01-13', 'OI000004', 1, 2),
('Customs Duties', 3203000, 'MRO', '2015-01-13', 'OI000004', 1, 3),
('Amende d''assurance ', 146668, 'MRO', '2015-01-13', 'OI000004', 1, 4),
('NIF', 100000, 'MRO', '2015-01-13', 'OI000004', 1, 5),
('TS', 15000, 'MRO', '2015-01-13', 'OI000004', 1, 6),
('Port Charges', 45000, 'MRO', '2015-01-13', 'OI000004', 1, 7),
('Plat form', 55000, 'MRO', '2015-01-13', 'OI000004', 1, 8),
('Forklift H3', 18000, 'MRO', '2015-01-13', 'OI000004', 1, 9),
('BKtrans', 200000, 'MRO', '2015-01-13', 'OI000004', 1, 10),
('Local services + VAT 16%', 110200, 'MRO', '2015-01-19', 'OI000005', 1, 1),
('Ocean freigh + sogeco ', 350000, 'MRO', '2015-01-23', 'OI000006', 1, 1),
('handling and local charges', 120000, 'MRO', '2015-01-23', 'OI000006', 1, 2),
('11X40FR from china to Nouakchott', 85000, 'USD', '2015-02-12', 'OI000007', 310, 1),
('description', 100, 'MRO', '2015-05-14', 'RE000001', 1, 1),
('description', 100, 'MRO', '2015-05-14', 'RE000002', 1, 1),
('ret', 10, 'MRO', '2015-05-14', 'RI000001', 1, 1),
('Remise documentaire de tous les envois', 10000, 'MRO', '2015-03-19', 'RM000001', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exonoration`
--

CREATE TABLE IF NOT EXISTS `exonoration` (
  `Reference` int(45) NOT NULL,
  `Ref_Delivry` int(50) NOT NULL,
  PRIMARY KEY (`Reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exonoration`
--

INSERT INTO `exonoration` (`Reference`, `Ref_Delivry`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expiration_admission`
--

CREATE TABLE IF NOT EXISTS `expiration_admission` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `operation` varchar(40) NOT NULL,
  `Date_renovation` date NOT NULL,
  `Date_expiration` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `export`
--

CREATE TABLE IF NOT EXISTS `export` (
  `id` varchar(40) NOT NULL,
  `Ref_doss` varchar(60) NOT NULL,
  `client` varchar(60) NOT NULL,
  `Reference_Client` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `type` varchar(60) NOT NULL,
  `Consultation` int(60) NOT NULL DEFAULT '0',
  `ETD` varchar(10) NOT NULL,
  `ETA` varchar(12) NOT NULL,
  `Exnoration` varchar(60) NOT NULL,
  `Enelvement_direct` varchar(60) NOT NULL,
  `Invoicing` varchar(60) NOT NULL,
  `Terme_operation` text NOT NULL,
  `Dimenssion` varchar(30) NOT NULL,
  `type_objet` varchar(30) NOT NULL,
  `Num_piece` varchar(40) NOT NULL,
  `Origine` varchar(40) NOT NULL,
  `Destination` varchar(40) NOT NULL,
  `Shipping_line` varchar(20) NOT NULL,
  `Valeur_facturee` float NOT NULL,
  `Monnaie_facture` varchar(10) NOT NULL,
  `Taux_val_fact` float NOT NULL,
  `valeur_trans` double NOT NULL,
  `Monnaie_trans` varchar(30) NOT NULL,
  `taux_trans` double NOT NULL,
  `Fournisseur` varchar(30) NOT NULL,
  `Reference` varchar(30) NOT NULL,
  `Designation_comercial` varchar(30) NOT NULL,
  `Num_declaration_douane` varchar(30) NOT NULL,
  `Num_appurement` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Tracking` text,
  `type_operation` varchar(40) NOT NULL,
  `url` text,
  `Enlevement_date` varchar(40) DEFAULT NULL,
  `Douane_S_date` varchar(40) DEFAULT NULL,
  `Transport_date` varchar(40) DEFAULT NULL,
  `Arrive_date` varchar(40) DEFAULT NULL,
  `Douane_E_date` varchar(40) DEFAULT NULL,
  `Livraison_date` varchar(40) DEFAULT NULL,
  `fiche_exonoration` varchar(40) NOT NULL,
  `Num_exonoration` varchar(40) NOT NULL,
  `num_exportation` varchar(40) NOT NULL,
  `type_exportation` varchar(30) NOT NULL,
  `exportation` varchar(40) NOT NULL,
  `tble` varchar(20) NOT NULL DEFAULT 'export',
  `Enlevement` int(2) NOT NULL,
  `Douane_S` int(2) NOT NULL,
  `Transport` int(2) NOT NULL,
  `Arrive` int(2) NOT NULL,
  `Douane_E` int(2) NOT NULL,
  `Livraison` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client` (`client`),
  KEY `Reference` (`Ref_doss`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `export`
--

INSERT INTO `export` (`id`, `Ref_doss`, `client`, `Reference_Client`, `Date`, `type`, `Consultation`, `ETD`, `ETA`, `Exnoration`, `Enelvement_direct`, `Invoicing`, `Terme_operation`, `Dimenssion`, `type_objet`, `Num_piece`, `Origine`, `Destination`, `Shipping_line`, `Valeur_facturee`, `Monnaie_facture`, `Taux_val_fact`, `valeur_trans`, `Monnaie_trans`, `taux_trans`, `Fournisseur`, `Reference`, `Designation_comercial`, `Num_declaration_douane`, `Num_appurement`, `Tracking`, `type_operation`, `url`, `Enlevement_date`, `Douane_S_date`, `Transport_date`, `Arrive_date`, `Douane_E_date`, `Livraison_date`, `fiche_exonoration`, `Num_exonoration`, `num_exportation`, `type_exportation`, `exportation`, `tble`, `Enlevement`, `Douane_S`, `Transport`, `Arrive`, `Douane_E`, `Livraison`) VALUES
('EXP0001', 'AI000006', 'Baker Hughes EHO LTD Mauritania Branch', 'REF000RX', '2015-04-24', '', 1, '', '', 'non', '', 'non', '', '', '', '1', 'Mauritanie ', 'Afghanistan ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', 'Air Export', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 'ED', 'Exportation Definitive', 'export', 0, 0, 0, 0, 0, 0),
('EXP0002', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', 'REF000RX', '2015-04-24', '', 1, '', '', 'non', '', 'oui', '', '', '', '1', 'Mauritanie ', 'Afghanistan ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', 'Air Export', '', '', '', '', '', '', '', '', '', '', 'ED', 'Exportation Definitive', 'export', 0, 0, 0, 0, 0, 0),
('EXP0003', 'AI000001', 'Baker Hughes EHO LTD Mauritania Branch', 'MAURITANIAlkl122', '2015-04-27', '', 1, '', '', 'non', '', 'oui', '', '', '', '1', 'Afghanistan ', 'Afrique du Sud ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', 'Air Export', '', '', '', '', '', '', '', '', '', '', 'ET', 'Exportation Temporaire', 'export', 0, 0, 0, 0, 0, 0),
('EXP0004', 'AI000002', 'Bana blanc ', 'MAURITANIA-OU 12365', '2015-04-28', '', 1, '', '', 'non', '', 'oui', '', '', '', '1', 'Algerie ', 'Andorre ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', 'Ocean Export', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 'ED', 'Exportation Definitive', 'export', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `Reference` varchar(60) NOT NULL,
  `Catagorie` varchar(60) NOT NULL,
  `partenaire` varchar(70) NOT NULL,
  `client` varchar(20) NOT NULL,
  `Option_affichage` varchar(70) NOT NULL,
  `etat_dossier` varchar(30) NOT NULL,
  `date_lancement` varchar(12) DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `date_estimer_fin` date DEFAULT NULL,
  PRIMARY KEY (`Reference`),
  KEY `id_2` (`partenaire`),
  KEY `client` (`client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`Reference`, `Catagorie`, `partenaire`, `client`, `Option_affichage`, `etat_dossier`, `date_lancement`, `date_fin`, `date_estimer_fin`) VALUES
('AI000001', 'Air Import', '107', 'DACHSER MOROCCO', '', 'ouvert', '2015-03-11', '0000-00-00', '2015-02-11'),
('AI000002', 'Air Import', '108', 'Oceanteam logistics ', '', 'ouvert', '2015-03-11', '0000-00-00', '2015-02-18'),
('AI000003', 'Air Import', '109', 'Maurimedis', '', 'ouvert', '2015-03-17', '0000-00-00', '2015-03-26'),
('AI000004', 'Air Import', '118', 'MAFCI', '', 'ouvert', '2015-03-31', '0000-00-00', '2015-04-30'),
('AI000005', 'Air Import', '119', 'MAFCI', '', 'ouvert', '2015-03-31', '0000-00-00', '2015-04-30'),
('AI000006', 'Air Import', '120', 'MAFCI', '', 'ouvert', '2015-03-31', '0000-00-00', '2015-04-30'),
('EN000001', 'Entreprise BKT', 'Mohamed', '', '1', 'ouvert', '2015-06-02', '0000-00-00', '2015-06-24'),
('LG000001', 'Logistics', '112', 'Baker Hughes EHO LTD', '', 'ouvert', '2015-03-19', '0000-00-00', '2015-02-28'),
('LG000002', 'Logistics', '113', 'Volga-Dnepr UK Ltd', '', 'ouvert', '2015-03-19', '0000-00-00', '2015-03-20'),
('LO000001', 'Logistique', '102', 'Baker Hughes EHO LTD', '', 'ouvert', '2015-01-19', '0000-00-00', '2015-03-31'),
('OE000002', 'Ocean Export', '101', 'Brahim Soueilem', '', 'ouvert', '2015-01-17', '0000-00-00', '2015-01-04'),
('OE000003', 'Ocean Export', '115', 'Panalpina USA', '0', 'ouvert', '2015-03-31', '0000-00-00', '2015-05-31'),
('OI000001', 'Ocean Import', '110', 'MAFCI', '', 'ouvert', '2015-03-19', '0000-00-00', '2015-05-31'),
('OI000002', 'Ocean Import', '116', 'Sascha Vens-Cappell ', '', 'ouvert', '2015-03-31', '0000-00-00', '2015-04-20'),
('OI000003', 'Ocean Import', '117', 'MAFCI', '', 'ouvert', '2015-03-31', '0000-00-00', '2015-04-30'),
('OI000004', 'Ocean Import', '92', 'Brahim Soueilemm', '', 'fermer', '2015-01-13', '0000-00-00', '2015-01-13'),
('OI000005', 'Ocean Import', '103', 'MAFCI', '', 'ouvert', '2015-01-19', '0000-00-00', '2015-01-19'),
('OI000006', 'Ocean Export', '104', 'Panalpina AG Switzer', '', 'ouvert', '2015-01-23', '0000-00-00', '2015-01-31'),
('OI000007', 'Ocean Import', '105', 'RIM GAZ', '', 'ouvert', '2015-02-12', '0000-00-00', '2015-03-31'),
('RE000001', 'Road Export', 'Mohamed', 'CDI CENTRE DE DISTRI', '0', 'ouvert', '2015-05-14', '0000-00-00', '2015-05-19'),
('RE000002', 'Road Export', 'Mohamed', 'Baker Hughes EHO LTD', 'mohamedloulyef@gmail.com', 'ouvert', '2015-05-14', '0000-00-00', '2015-05-19'),
('RI000001', 'Road Import', 'Mohamed', 'Brahim Soueilem', 'amina.hamoud88@gmail.com', 'ouvert', '2015-05-14', '0000-00-00', '2015-05-27'),
('RM000001', 'Remise Documentaire', '111', 'Brahim Soueilem', '', 'ouvert', '2015-03-19', '0000-00-00', '2015-12-31');

-- --------------------------------------------------------

--
-- Stand-in structure for view `finalinvoice`
--
CREATE TABLE IF NOT EXISTS `finalinvoice` (
`id_element` int(8)
,`facture` varchar(60)
,`description` text
,`quantite` int(5)
,`prix` double
,`Net` double
,`tva` double
,`TotalElement` double
,`monnaie` varchar(60)
,`devise` double
,`operation` varchar(40)
,`ClientFacture` varchar(50)
,`DossierFacture` varchar(60)
,`date_c` date
,`code` varchar(34)
,`taux` float
,`draft` int(11)
,`date_p` date
,`Pay` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `finaloffre2`
--
CREATE TABLE IF NOT EXISTS `finaloffre2` (
`id_element` int(8)
,`id_offre` varchar(60)
,`description` varchar(100)
,`quantite` int(5)
,`prix` float
,`Net` double
,`tva` double
,`TotalElement` double
,`monnaie` varchar(60)
,`devise` double
,`ClientOffre` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `finalpurchase`
--
CREATE TABLE IF NOT EXISTS `finalpurchase` (
`BonCommande` varchar(30)
,`designation` text
,`quantite` int(5)
,`prix_unitaire` double
,`Net_Paye` double
,`tva` double
,`DeviseElement` float
,`Total` double
,`MonnaieCommande` varchar(30)
,`MonnaieDefaut` varchar(30)
,`TauxMonnaieDefaut` float
,`FournisseurCommande` varchar(50)
,`DossierCommande` varchar(30)
,`OperationCommande` varchar(40)
,`date_c` date
,`code` varchar(60)
,`taux` float
,`date_p` date
,`Pay` int(1)
,`Livraison` int(1)
);
-- --------------------------------------------------------

--
-- Table structure for table `financial_period`
--

CREATE TABLE IF NOT EXISTS `financial_period` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `etat` int(2) DEFAULT '0',
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `financial_period`
--

INSERT INTO `financial_period` (`id`, `etat`, `date_debut`, `date_fin`) VALUES
(12, 1, '2014-12-31', '2015-12-31'),
(13, 0, '2015-01-01', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `groupe_account`
--

CREATE TABLE IF NOT EXISTS `groupe_account` (
  `Catagorie` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE IF NOT EXISTS `hardware` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `designation` text NOT NULL,
  `type` varchar(40) NOT NULL,
  `date_achat` date NOT NULL,
  `valeur_achat` double NOT NULL,
  `Duree_vie` double NOT NULL,
  `motive` varchar(30) DEFAULT NULL,
  `val_actuel` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `historic`
--

CREATE TABLE IF NOT EXISTS `historic` (
  `Email` varchar(40) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL,
  `id` int(40) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=398 ;

--
-- Dumping data for table `historic`
--

INSERT INTO `historic` (`Email`, `Message`, `Date`, `id`) VALUES
('brahim.khiyar@bktrans-sa.com', 'Offre : OFR0001   à été Modifier avec succés  ', '2015-03-19 09:21:43', 1),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FAC0007   à été Modifier avec succés  ', '2015-03-19 14:58:58', 2),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FAC0007   à été Modifier avec succés  ', '2015-03-19 18:06:23', 3),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FAC0007   à été Modifier avec succés  ', '2015-03-19 18:07:36', 4),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FAC0003   à été Modifier avec succés  ', '2015-03-19 18:21:40', 5),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FAC0003   à été Modifier avec succés  ', '2015-03-19 19:13:36', 6),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FCT0005   à été Modifier avec succés  ', '2015-03-19 20:43:09', 7),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FCT0006   à été Modifier avec succés  ', '2015-03-23 14:04:39', 8),
('brahim.khiyar@bktrans-sa.com', 'Clients : SAMMA   à été Ajouter avec succés ', '2015-03-24 11:37:51', 9),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0009   à été Ajouter avec succés ', '2015-03-24 11:47:32', 10),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FCT0007   à été Ajouter avec succés ', '2015-03-24 11:51:40', 11),
('brahim.khiyar@bktrans-sa.com', 'Utilisateurs : mohamed.khlil@bktrans-sa.com   à été Ajouter avec succés ', '2015-03-26 09:39:52', 12),
('brahim.khiyar@bktrans-sa.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-26 09:41:08', 13),
('brahim.khiyar@bktrans-sa.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-26 09:49:48', 14),
('mohamed.khlil@bktrans-sa.com', 'Clients : Haier Mauritanie   à été Ajouter avec succés ', '2015-03-26 10:32:31', 15),
('mohamed.khlil@bktrans-sa.com', 'Offre : OFR0002   à été Ajouter avec succés ', '2015-03-26 10:42:09', 16),
('mohamed.khlil@bktrans-sa.com', 'Offre : OFR0003   à été Ajouter avec succés ', '2015-03-26 10:50:45', 17),
('mohamed.khlil@bktrans-sa.com', 'Clients : Bana blanc    à été Ajouter avec succés ', '2015-03-26 10:54:49', 18),
('mohamed.khlil@bktrans-sa.com', 'Offre : OFR0004   à été Ajouter avec succés ', '2015-03-26 11:00:43', 19),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0007   à été Modifier avec succés  ', '2015-03-26 11:58:48', 20),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0007   à été Modifier avec succés  ', '2015-03-26 12:02:46', 21),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0007   à été Modifier avec succés  ', '2015-03-26 12:10:39', 22),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0007   à été Modifier avec succés  ', '2015-03-26 12:14:23', 23),
('brahim.khiyar@bktrans-sa.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-26 19:02:16', 24),
('brahim.khiyar@bktrans-sa.com', 'Utilisateurs : mohamedloulyef@gmail.com   à été Ajouter avec succés ', '2015-03-26 19:06:25', 25),
('brahim.khiyar@bktrans-sa.com', 'Pérmission : mohamedloulyef@gmail.com   Son Permission à été changé avec succès ', '2015-03-26 19:06:43', 26),
('mohamedloulyef@gmail.com', 'KPIS : KPI   à été Modifier avec succés  ', '2015-03-26 20:48:00', 27),
('mohamedloulyef@gmail.com', 'KPIS : KPI   à été Modifier avec succés  ', '2015-03-26 20:48:48', 28),
('mohamedloulyef@gmail.com', 'KPIS : KPI   à été Modifier avec succés  ', '2015-03-26 20:49:17', 29),
('mohamedloulyef@gmail.com', 'Utilisateurs : mohamedloulyef@gmail.com   à été Modifier avec succés  ', '2015-03-30 10:39:46', 30),
('mohamedloulyef@gmail.com', 'Opérations : IMP0010   à été Ajouter avec succés ', '2015-03-30 10:44:13', 31),
('mohamedloulyef@gmail.com', 'Facturation : FCT0008   à été Ajouter avec succés ', '2015-03-30 10:45:52', 32),
('mohamedloulyef@gmail.com', 'Facturation : FCT0008   à été Modifier avec succés  ', '2015-03-30 10:47:36', 33),
('mohamedloulyef@gmail.com', 'Clients : GRNAD MOULIN DU SAHEL   à été Ajouter avec succés ', '2015-03-30 10:53:02', 34),
('mohamedloulyef@gmail.com', 'Opérations : IMP0011   à été Ajouter avec succés ', '2015-03-30 10:56:27', 35),
('mohamedloulyef@gmail.com', 'Facturation : FCT0009   à été Ajouter avec succés ', '2015-03-30 10:58:18', 36),
('mohamedloulyef@gmail.com', 'Facturation : FCT0009   à été Modifier avec succés  ', '2015-03-30 10:59:10', 37),
('mohamedloulyef@gmail.com', 'Clients : EL MECHRIGH SERVET   à été Ajouter avec succés ', '2015-03-30 11:03:54', 38),
('mohamedloulyef@gmail.com', 'Opérations : IMP0012   à été Ajouter avec succés ', '2015-03-30 11:09:25', 39),
('mohamedloulyef@gmail.com', 'Facturation : FCT0010   à été Ajouter avec succés ', '2015-03-30 11:11:15', 40),
('mohamedloulyef@gmail.com', 'Clients : SNIM   à été Ajouter avec succés ', '2015-03-30 11:15:00', 41),
('mohamedloulyef@gmail.com', 'Opérations : IMP0013   à été Ajouter avec succés ', '2015-03-30 11:18:54', 42),
('mohamedloulyef@gmail.com', 'Facturation : FCT0011   à été Ajouter avec succés ', '2015-03-30 11:20:36', 43),
('mohamedloulyef@gmail.com', 'Facturation : FCT0011   à été Modifier avec succés  ', '2015-03-30 11:22:00', 44),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 11:46:49', 45),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 12:27:41', 46),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 12:28:59', 47),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 12:30:11', 48),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 12:57:56', 49),
('mohamedloulyef@gmail.com', 'Pérmission : mohamed.khlil@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-30 13:04:22', 50),
('brahim.khiyar@bktrans-sa.com', 'Clients : SOC   à été Ajouter avec succés ', '2015-03-31 09:46:43', 51),
('brahim.khiyar@bktrans-sa.com', 'Clients : SOC   à été Modifier avec succés  ', '2015-03-31 09:48:50', 52),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0014   à été Ajouter avec succés ', '2015-03-31 09:54:52', 53),
('brahim.khiyar@bktrans-sa.com', 'Opérations : IMP0015   à été Ajouter avec succés ', '2015-03-31 09:54:53', 54),
('brahim.khiyar@bktrans-sa.com', 'Facturation : FCT0012   à été Ajouter avec succés ', '2015-03-31 09:57:30', 55),
('brahim.khiyar@bktrans-sa.com', 'Fournisseur : Panalpina Italy    à été Ajouter avec succés ', '2015-03-31 10:21:21', 56),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0007   à été Ajouter avec succés ', '2015-03-31 10:30:13', 57),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0007  a été Confirmer ', '2015-03-31 10:30:47', 58),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : la reception de facture du bon de comande N°  COM0007', '2015-03-31 10:31:55', 59),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0007  a été Livrée ', '2015-03-31 10:33:57', 60),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0007   à été Modifier avec succés  ', '2015-03-31 10:36:57', 61),
('brahim.khiyar@bktrans-sa.com', 'Clients : Panalpina USA   à été Ajouter avec succés ', '2015-03-31 10:48:24', 62),
('brahim.khiyar@bktrans-sa.com', 'Dossiers : OE000003   à été Ajouter avec succés ', '2015-03-31 10:50:35', 63),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-31 10:58:08', 64),
('oumar.brahim@bktrans-sa.com', 'Clients : Sascha Vens-Cappell    à été Ajouter avec succés ', '2015-03-31 11:17:46', 65),
('oumar.brahim@bktrans-sa.com', 'Dossiers : OI000002   à été Ajouter avec succés ', '2015-03-31 11:23:06', 66),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0016   à été Ajouter avec succés ', '2015-03-31 11:33:21', 67),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0016   à été Modifier avec succés  ', '2015-03-31 11:39:42', 68),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0016   à été Modifier avec succés  ', '2015-03-31 11:41:09', 69),
('oumar.brahim@bktrans-sa.com', 'Facturation : FCT0013   à été Ajouter avec succés ', '2015-03-31 11:51:07', 70),
('oumar.brahim@bktrans-sa.com', 'Facturation : FCT0013   à été Modifier avec succés  ', '2015-03-31 11:56:24', 71),
('oumar.brahim@bktrans-sa.com', 'Facturation : FCT0013   à été Modifier avec succés  ', '2015-03-31 11:57:24', 72),
('oumar.brahim@bktrans-sa.com', 'Facturation : FCT0013   à été Modifier avec succés  ', '2015-03-31 11:57:54', 73),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0002  a été Confirmer ', '2015-03-31 12:33:14', 74),
('brahim.khiyar@bktrans-sa.com', 'Bon de Commande : COM0007   à été Modifier avec succés  ', '2015-03-31 12:53:01', 75),
('oumar.brahim@bktrans-sa.com', 'Dossiers : OI000003   à été Ajouter avec succés ', '2015-03-31 13:35:49', 76),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0017   à été Ajouter avec succés ', '2015-03-31 13:42:25', 77),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0017   à été Modifier avec succés  ', '2015-03-31 13:43:10', 78),
('oumar.brahim@bktrans-sa.com', 'Dossiers : AI000004   à été Ajouter avec succés ', '2015-03-31 13:50:54', 79),
('oumar.brahim@bktrans-sa.com', 'Dossiers : AI000005   à été Ajouter avec succés ', '2015-03-31 13:50:54', 80),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0018   à été Ajouter avec succés ', '2015-03-31 13:53:59', 81),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0018   à été Modifier avec succés  ', '2015-03-31 15:17:21', 82),
('mohamedloulyef@gmail.com', 'Pérmission : Resource id #6   Son Permission à été changé avec succès ', '2015-03-31 16:04:59', 83),
('mohamedloulyef@gmail.com', 'Pérmission : bah.didi@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-31 16:07:15', 84),
('mohamedloulyef@gmail.com', 'Pérmission : bah.didi@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-31 16:07:51', 85),
('oumar.brahim@bktrans-sa.com', 'Dossiers : AI000006   à été Ajouter avec succés ', '2015-03-31 16:13:52', 86),
('mohamedloulyef@gmail.com', 'Pérmission : bah.didi@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-03-31 16:14:42', 87),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0019   à été Ajouter avec succés ', '2015-03-31 16:16:09', 88),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0019   à été Supprimer avec succés ', '2015-03-31 16:17:23', 89),
('oumar.brahim@bktrans-sa.com', 'Dossiers : AI000004   à été Modifier avec succés  ', '2015-03-31 16:23:33', 90),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 11:50:28', 91),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 13:29:23', 92),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 13:40:59', 93),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 13:41:16', 94),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 13:43:18', 95),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-01 13:43:24', 96),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-05 17:24:19', 97),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-05 17:37:26', 98),
('oumar.brahim@bktrans-sa.com', 'Dossiers : OE000004   à été Ajouter avec succés ', '2015-04-06 13:17:27', 99),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0019   à été Ajouter avec succés ', '2015-04-06 13:23:33', 100),
('oumar.brahim@bktrans-sa.com', 'Opérations : IMP0019   à été Supprimer avec succés ', '2015-04-06 13:27:43', 101),
('oumar.brahim@bktrans-sa.com', 'Dossiers : OE000004   à été Supprimer avec succés ', '2015-04-06 13:28:17', 102),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:53:55', 103),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:54:48', 104),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:56:50', 105),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:57:15', 106),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:57:37', 107),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:58:03', 108),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:58:14', 109),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:58:33', 110),
('mohamedloulyef@gmail.com', 'Pérmission : oumar.brahim@bktrans-sa.com   Son Permission à été changé avec succès ', '2015-04-07 13:59:13', 111),
('mohamedloulyef@gmail.com', 'Utilisateurs : amina.hamoud88@gmail.com   a été Ajouté avec succés. ', '2015-04-23 16:36:56', 112),
('mohamedloulyef@gmail.com', 'Agent Port Non categ : Mohamed Ould Mohamed Yeslem   a été Ajouté avec succés. ', '2015-04-23 16:43:38', 113),
('mohamedloulyef@gmail.com', 'Agent Port Non categ : Mohamed Ould Mohamed Yeslem   a été Modifié avec succés.  ', '2015-04-23 16:43:43', 114),
('mohamedloulyef@gmail.com', 'Offres : OFR0005   a été Ajouté avec succés. ', '2015-04-23 16:54:16', 115),
('mohamedloulyef@gmail.com', 'Opérations : IMP0019   a été Ajouté avec succés. ', '2015-04-24 13:14:14', 116),
('mohamedloulyef@gmail.com', 'Opérations : IMP0020   a été Ajouté avec succés. ', '2015-04-24 13:17:03', 117),
('mohamedloulyef@gmail.com', 'Opérations : IMP0021   a été Ajouté avec succés. ', '2015-04-24 13:19:08', 118),
('mohamedloulyef@gmail.com', 'Offres : OFR0004    a été supprimé avec succès.', '2015-04-24 14:03:12', 119),
('mohamedloulyef@gmail.com', 'Offres : OFR0003    a été supprimé avec succès.', '2015-04-24 14:03:16', 120),
('mohamedloulyef@gmail.com', 'Offres : OFR0002    a été supprimé avec succès.', '2015-04-24 14:03:19', 121),
('mohamedloulyef@gmail.com', 'Offres : OFR0001    a été supprimé avec succès.', '2015-04-24 14:03:24', 122),
('mohamedloulyef@gmail.com', 'Offres : OFR0006   a été Ajouté avec succés. ', '2015-04-24 14:07:59', 123),
('mohamedloulyef@gmail.com', 'Opérations : EXP0001   a été Ajouté avec succés. ', '2015-04-24 14:11:14', 124),
('mohamedloulyef@gmail.com', 'Opérations : IMP0022   a été Ajouté avec succés. ', '2015-04-24 14:13:07', 125),
('mohamedloulyef@gmail.com', 'Opérations : IMP0023   a été Ajouté avec succés. ', '2015-04-24 14:17:33', 126),
('mohamedloulyef@gmail.com', 'Opérations : IMP0023   a été Ajouté avec succés. ', '2015-04-24 14:18:36', 127),
('mohamedloulyef@gmail.com', 'Opérations : IMP0023   a été Ajouté avec succés. ', '2015-04-24 14:21:21', 128),
('mohamedloulyef@gmail.com', 'Opérations : EXP0002   a été Ajouté avec succés. ', '2015-04-24 14:21:55', 129),
('mohamedloulyef@gmail.com', 'Offres : OFR0007   a été Ajouté avec succés. ', '2015-04-24 14:40:38', 130),
('mohamedloulyef@gmail.com', 'Opérations : IMP0024   a été Ajouté avec succés. ', '2015-04-24 14:41:26', 131),
('mohamedloulyef@gmail.com', 'Offres : OFR0007   a été Facturé(e) avec succés  ', '2015-04-24 14:43:41', 132),
('mohamedloulyef@gmail.com', 'Opérations : IMP0024   a été Modifié avec succés.  ', '2015-04-24 14:46:34', 133),
('mohamedloulyef@gmail.com', 'Offres : OFR0008   a été Ajouté avec succés. ', '2015-04-24 14:49:27', 134),
('mohamedloulyef@gmail.com', 'Opérations : IMP0025   a été Ajouté avec succés. ', '2015-04-24 14:49:40', 135),
('mohamedloulyef@gmail.com', 'Opérations : IMP0001   a été Modifié avec succés.  ', '2015-04-24 14:53:59', 136),
('mohamedloulyef@gmail.com', 'Logistique : MG000001   a été Ajouté avec succés. ', '2015-04-27 14:06:32', 137),
('mohamedloulyef@gmail.com', 'Logistique : MG000001   a été Modifié avec succés.  ', '2015-04-27 14:06:45', 138),
('mohamedloulyef@gmail.com', 'Opérations : IMP0020   a été Modifié avec succés.  ', '2015-04-27 14:39:03', 139),
('mohamedloulyef@gmail.com', 'Opérations : IMP0001   a été Modifié avec succés.  ', '2015-04-27 14:42:44', 140),
('mohamedloulyef@gmail.com', 'Opérations : IMP0019   a été Modifié avec succés.  ', '2015-04-27 14:54:03', 141),
('mohamedloulyef@gmail.com', 'Opérations : EXP0003   a été Ajouté avec succés. ', '2015-04-27 15:17:07', 142),
('mohamedloulyef@gmail.com', 'Opérations : IMP0026   a été Ajouté avec succés. ', '2015-04-27 15:18:04', 143),
('mohamedloulyef@gmail.com', 'Opérations : IMP0019   a été Modifié avec succés.  ', '2015-04-27 16:58:03', 144),
('mohamedloulyef@gmail.com', 'Opérations : IMP0019   a été supprimé avec succès.', '2015-04-27 16:59:06', 145),
('mohamedloulyef@gmail.com', 'Opérations : EXP0003   a été Modifié avec succés.  ', '2015-04-27 17:04:38', 146),
('mohamedloulyef@gmail.com', 'Offres : OFR0008   a été Facturé(e) avec succés  ', '2015-04-27 18:34:00', 147),
('mohamedloulyef@gmail.com', 'Opérations : IMP0025   a été Modifié avec succés.  ', '2015-04-27 18:34:41', 148),
('mohamedloulyef@gmail.com', 'Opérations : EXP0002   a été Modifié avec succés.  ', '2015-04-28 13:04:49', 149),
('mohamedloulyef@gmail.com', 'Offres : OFR0006   a été Facturé(e) avec succés  ', '2015-04-28 13:37:40', 150),
('mohamedloulyef@gmail.com', 'Offres : OFR0005   a été Facturé(e) avec succés  ', '2015-04-28 13:46:31', 151),
('mohamedloulyef@gmail.com', 'Opérations : IMP0023   a été Modifié avec succés.  ', '2015-04-28 13:46:48', 152),
('mohamedloulyef@gmail.com', 'Offres : OFR0009   a été Ajouté avec succés. ', '2015-04-28 14:04:09', 153),
('mohamedloulyef@gmail.com', 'Opérations : IMP0027   a été Ajouté avec succés. ', '2015-04-28 14:09:55', 154),
('mohamedloulyef@gmail.com', 'Offres : OFR0009   a été Facturé(e) avec succés  ', '2015-04-28 14:10:31', 155),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Ajouté avec succés. ', '2015-04-28 14:12:30', 156),
('mohamedloulyef@gmail.com', 'Offres : OFR0011   a été Ajouté avec succés. ', '2015-04-28 14:21:27', 157),
('mohamedloulyef@gmail.com', 'Opérations : EXP0004   a été Ajouté avec succés. ', '2015-04-28 14:21:46', 158),
('mohamedloulyef@gmail.com', 'Offres : OFR0011   a été Facturé(e) avec succés  ', '2015-04-28 14:27:20', 159),
('mohamedloulyef@gmail.com', 'Opérations : IMP0028   a été Ajouté avec succés. ', '2015-04-28 15:19:16', 160),
('mohamedloulyef@gmail.com', 'Offres : OFR0012   a été Ajouté avec succés. ', '2015-04-28 16:03:46', 161),
('mohamedloulyef@gmail.com', 'Equipements : 1000AS00   a été Ajouté avec succés. ', '2015-04-28 16:17:39', 162),
('mohamedloulyef@gmail.com', 'Logistique : LCT000002   a été Ajouté avec succés. ', '2015-04-28 16:18:24', 163),
('mohamedloulyef@gmail.com', 'Offres : OFR0013   a été Ajouté avec succés. ', '2015-04-28 16:28:03', 164),
('mohamedloulyef@gmail.com', 'Offres : OFR0014   a été Ajouté avec succés. ', '2015-04-28 16:29:15', 165),
('mohamedloulyef@gmail.com', 'Logistique : LS000003   a été Ajouté avec succés. ', '2015-04-28 16:50:00', 166),
('mohamedloulyef@gmail.com', 'Logistique : MG000002   a été Ajouté avec succés. ', '2015-04-28 16:51:31', 167),
('mohamedloulyef@gmail.com', 'Logistique : LS000004   a été Ajouté avec succés. ', '2015-04-28 16:52:15', 168),
('mohamedloulyef@gmail.com', 'Baker Hughes EHO LTD Mauritania Branch : Mohamed   a été Ajouté avec succés. ', '2015-04-28 17:49:59', 169),
('mohamedloulyef@gmail.com', 'Baker Hughes EHO LTD Mauritania Branch : Mohamed Ould Mohamed Yeslem   a été supprimé avec succès.', '2015-04-28 17:50:05', 170),
('mohamedloulyef@gmail.com', 'Offres : OFR0014   a été Facturé(e) avec succés  ', '2015-04-28 18:30:30', 171),
('mohamedloulyef@gmail.com', 'Offres : OFR0013   a été Facturé(e) avec succés  ', '2015-04-28 18:35:12', 172),
('mohamedloulyef@gmail.com', 'Offres : OFR0012   a été Facturé(e) avec succés  ', '2015-04-28 18:36:30', 173),
('mohamedloulyef@gmail.com', 'Facturation : FCT0023   a été Ajouté avec succés. ', '2015-04-29 11:09:42', 174),
('mohamedloulyef@gmail.com', 'Facturation : FCT0024   a été Ajouté avec succés. ', '2015-04-29 11:27:37', 175),
('mohamedloulyef@gmail.com', 'Offres : OFR0015   a été Ajouté avec succés. ', '2015-04-29 11:28:37', 176),
('mohamedloulyef@gmail.com', 'Logistique : LS000005   a été Ajouté avec succés. ', '2015-04-29 11:28:52', 177),
('mohamedloulyef@gmail.com', 'Facturation : FCT0025   a été Ajouté avec succés. ', '2015-04-29 11:29:48', 178),
('mohamedloulyef@gmail.com', 'Opérations : EXP0003   a été Modifié avec succés.  ', '2015-04-29 12:04:03', 179),
('mohamedloulyef@gmail.com', 'Opérations : EXP0003   a été Modifié avec succés.  ', '2015-04-29 12:04:11', 180),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Ajouté avec succés. ', '2015-04-29 13:01:22', 181),
('mohamedloulyef@gmail.com', 'Logistique : LS000006   a été Ajouté avec succés. ', '2015-04-29 13:02:20', 182),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:29:49', 183),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:38:21', 184),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:40:09', 185),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:40:31', 186),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:44:26', 187),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:46:30', 188),
('mohamedloulyef@gmail.com', 'Offres : OFR0010   a été Modifié avec succés.  ', '2015-04-29 14:46:47', 189),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:10:27', 190),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:15:15', 191),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:15:21', 192),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:15:28', 193),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:15:36', 194),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:16:28', 195),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:17:31', 196),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Modifié avec succés.  ', '2015-04-29 15:19:26', 197),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0002', '2015-04-30 14:24:42', 198),
('mohamedloulyef@gmail.com', 'Codes : Fournisseur   a été Ajouté avec succés. ', '2015-04-30 14:46:26', 199),
('mohamedloulyef@gmail.com', 'Codes : client   a été Ajouté avec succés. ', '2015-04-30 14:50:12', 200),
('mohamedloulyef@gmail.com', 'Clients : Baker Hughes EHO LTD Mauritania Branch   a été Modifié avec succés.  ', '2015-04-30 15:08:06', 201),
('mohamedloulyef@gmail.com', 'Fournisseur : Keda Textilesdf    a été Ajouté avec succés. ', '2015-04-30 15:25:10', 202),
('mohamedloulyef@gmail.com', 'Fournisseur : Keda Textilesdf    a été Modifié avec succés.  ', '2015-04-30 15:28:48', 203),
('mohamedloulyef@gmail.com', 'Fournisseur : Keda Textilesdf    a été Modifié avec succés.  ', '2015-04-30 15:29:04', 204),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 16:33:55', 205),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:11:56', 206),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:18:49', 207),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:18:55', 208),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:19:54', 209),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:35:59', 210),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:37:19', 211),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002   a été Modifié avec succés.  ', '2015-04-30 17:39:43', 212),
('mohamedloulyef@gmail.com', 'Supprimer : COM0002  a été Confirmé(e) ', '2015-04-30 17:39:49', 213),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 17:40:25', 214),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:01:53', 215),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002   a été Modifié avec succés.  ', '2015-04-30 18:06:01', 216),
('mohamedloulyef@gmail.com', 'Supprimer : COM0002  a été Confirmé(e) ', '2015-04-30 18:06:21', 217),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:06:30', 218),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:11:20', 219),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:11:46', 220),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:12:15', 221),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:13:41', 222),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:14:00', 223),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:15:55', 224),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-04-30 18:29:50', 225),
('mohamedloulyef@gmail.com', 'Facturation : FCT0029   a été Ajouté avec succés. ', '2015-05-06 11:06:54', 226),
('mohamedloulyef@gmail.com', 'Facturation : FCT0029   a été Modifié avec succés.  ', '2015-05-06 11:12:53', 227),
('mohamedloulyef@gmail.com', 'Facturation : FCT0030   a été Ajouté avec succés. ', '2015-05-06 11:13:37', 228),
('mohamedloulyef@gmail.com', 'Facturation : FCT0030   a été Modifié avec succés.  ', '2015-05-06 11:50:01', 229),
('mohamedloulyef@gmail.com', 'Facturation : FCT0030   a été Modifié avec succés.  ', '2015-05-06 11:52:13', 230),
('mohamedloulyef@gmail.com', 'Facturation : FCT0030    a été supprimé avec succès.', '2015-05-06 11:57:12', 231),
('mohamedloulyef@gmail.com', 'Facturation : AV0000001   a été Ajouté avec succés. ', '2015-05-06 11:59:31', 232),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-05-06 12:02:12', 233),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Livré(e) ', '2015-05-06 12:03:22', 234),
('mohamedloulyef@gmail.com', 'Facturation : AV0000002   a été Ajouté avec succés. ', '2015-05-06 13:08:28', 235),
('mohamedloulyef@gmail.com', 'Facturation : AV0000001   a été Modifié avec succés.  ', '2015-05-06 13:16:48', 236),
('mohamedloulyef@gmail.com', 'Facturation : AV0000002   a été Modifié avec succés.  ', '2015-05-06 13:24:40', 237),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0002  a été Confirmé(e) pour le Paiement  ', '2015-05-06 13:56:28', 238),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000001', '2015-05-06 14:48:09', 239),
('mohamedloulyef@gmail.com', ' Paiement Reçus  : RCV0000003   a été Ajouté avec succés. ', '2015-05-06 14:54:01', 240),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000002', '2015-05-06 16:23:18', 241),
('mohamedloulyef@gmail.com', 'Le devise à été Configuré avec succés ', '2015-05-06 17:13:35', 242),
('mohamedloulyef@gmail.com', 'Le devise à été Configuré avec succés ', '2015-05-06 17:14:41', 243),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,', '2015-05-06 17:20:42', 244),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000004', '2015-05-06 17:27:17', 245),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000005', '2015-05-06 17:30:27', 246),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0007  a été Confirmé(e) pour le Paiement  ', '2015-05-06 17:33:21', 247),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0004  a été Confirmé(e) pour le Paiement  ', '2015-05-06 17:33:33', 248),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0005', '2015-05-06 17:34:27', 249),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0006', '2015-05-06 17:34:41', 250),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000003', '2015-05-06 18:14:23', 251),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000003', '2015-05-06 18:15:14', 252),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000003', '2015-05-06 18:20:25', 253),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000003', '2015-05-06 18:21:12', 254),
('mohamedloulyef@gmail.com', ' Paiement Emis : PAY0000006   a été Ajouté avec succés. ', '2015-05-06 18:23:20', 255),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:24:47', 256),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:25:59', 257),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:27:07', 258),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:30:02', 259),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:36:28', 260),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:37:26', 261),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:37:42', 262),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000006', '2015-05-06 18:37:54', 263),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000003', '2015-05-07 11:29:15', 264),
('mohamedloulyef@gmail.com', 'Bons de Commande : AV0000001   a été Ajouté avec succés. ', '2015-05-08 12:56:59', 265),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0001', '2015-05-08 13:00:11', 266),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0001  a été Livré(e) ', '2015-05-08 13:00:23', 267),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000007', '2015-05-11 11:20:11', 268),
('mohamedloulyef@gmail.com', 'Facturation : FCT0030   a été Ajouté avec succés. ', '2015-05-11 11:56:33', 269),
('mohamedloulyef@gmail.com', ' Paiement Reçus  : RCV0000004   a été Ajouté avec succés. ', '2015-05-11 12:01:42', 270),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000004', '2015-05-11 12:07:20', 271),
('mohamedloulyef@gmail.com', ' Paiement Reçus  : RCV0000005   a été Ajouté avec succés. ', '2015-05-11 12:23:10', 272),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000005', '2015-05-11 12:24:23', 273),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000005', '2015-05-11 12:25:15', 274),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000005', '2015-05-11 12:25:40', 275),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0008   a été Ajouté avec succés. ', '2015-05-11 12:34:28', 276),
('mohamedloulyef@gmail.com', 'Supprimer : COM0008  a été Confirmé(e) ', '2015-05-11 12:34:34', 277),
('mohamedloulyef@gmail.com', 'Supprimer : COM0008  a été Confirmé(e) ', '2015-05-11 12:35:05', 278),
('mohamedloulyef@gmail.com', 'Supprimer : COM0008  a été Confirmé(e) ', '2015-05-11 12:36:01', 279),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0008', '2015-05-11 12:36:33', 280),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0008  a été Livré(e) ', '2015-05-11 12:36:47', 281),
('mohamedloulyef@gmail.com', ' Paiement Emis : PAY0000008   a été Ajouté avec succés. ', '2015-05-11 12:38:24', 282),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   PAY0000008', '2015-05-11 12:43:38', 283),
('mohamedloulyef@gmail.com', 'Facturation : FCT0031   a été Ajouté avec succés. ', '2015-05-11 13:03:09', 284),
('mohamedloulyef@gmail.com', ' Paiement Reçus  : RCV0000006   a été Ajouté avec succés. ', '2015-05-11 13:04:15', 285),
('mohamedloulyef@gmail.com', 'Argent ENV/REC  : des allocations ont été appliquées sur le Paiement   RCV0000006', '2015-05-11 13:04:34', 286),
('mohamedloulyef@gmail.com', 'Facturation : FCT0032   a été Ajouté avec succés. ', '2015-05-11 17:59:18', 287),
('mohamedloulyef@gmail.com', 'Facturation : FCT0033   a été Ajouté avec succés. ', '2015-05-11 18:04:38', 288),
('mohamedloulyef@gmail.com', 'Supprimer : COM0003  a été Confirmé(e) ', '2015-05-12 11:35:27', 289),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0003', '2015-05-12 11:35:43', 290),
('mohamedloulyef@gmail.com', 'Supprimer : AV0000001  a été Confirmé(e) ', '2015-05-12 11:36:25', 291),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0009   a été Ajouté avec succés. ', '2015-05-12 11:36:56', 292),
('mohamedloulyef@gmail.com', 'Supprimer : COM0009  a été Confirmé(e) ', '2015-05-12 11:37:01', 293),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0009', '2015-05-12 11:37:22', 294),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0009  a été Livré(e) ', '2015-05-12 11:37:34', 295),
('mohamedloulyef@gmail.com', 'Facturation : FCT0004   a été Modifié avec succés.  ', '2015-05-12 11:54:19', 296),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0009  a été Confirmé(e) pour le Paiement  ', '2015-05-12 12:18:37', 297),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000009', '2015-05-12 12:19:40', 298),
('amina.hamoud88@gmail.com', 'Pérmissions : bah.didi@bktrans-sa.com   Sa Permission à été changée avec succès ', '2015-05-12 12:20:54', 299),
('mohamedloulyef@gmail.com', 'Facturation : FCT0034   a été Ajouté avec succés. ', '2015-05-12 12:36:02', 300),
('mohamedloulyef@gmail.com', 'Codes : TAXES   a été Modifié avec succés.  ', '2015-05-12 15:47:06', 301),
('mohamedloulyef@gmail.com', 'Codes : TAXES   a été Modifié avec succés.  ', '2015-05-12 15:47:36', 302),
('mohamedloulyef@gmail.com', 'Codes : TAXES   a été Modifié avec succés.  ', '2015-05-12 15:48:10', 303),
('mohamedloulyef@gmail.com', 'Facturation : FCT0035   a été Ajouté avec succés. ', '2015-05-12 16:29:03', 304),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0010   a été Ajouté avec succés. ', '2015-05-12 16:32:05', 305),
('mohamedloulyef@gmail.com', 'Supprimer : COM0010  a été Confirmé(e) ', '2015-05-12 16:32:12', 306),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0010', '2015-05-12 16:32:29', 307),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0010  a été Livré(e) ', '2015-05-12 16:32:42', 308),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0010  a été Confirmé(e) pour le Paiement  ', '2015-05-12 16:34:47', 309),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000010', '2015-05-12 16:35:21', 310),
('mohamedloulyef@gmail.com', 'Opérations : IMP0021   a été Modifié avec succés.  ', '2015-05-12 16:43:21', 311),
('mohamedloulyef@gmail.com', 'Comptes Bancaires : BPM-2355   a été Ajouté avec succés. ', '2015-05-12 17:53:17', 312),
('mohamedloulyef@gmail.com', 'Codes : Production de l’entreprise pour elle-même   a été Ajouté avec succés. ', '2015-05-12 18:05:45', 313),
('mohamedloulyef@gmail.com', ' Personnels   : 023655666   a été Ajouté avec succés. ', '2015-05-13 13:22:34', 314),
('mohamedloulyef@gmail.com', 'Salaires : 023655666   a été Ajouté avec succés. ', '2015-05-13 13:23:19', 315),
('mohamedloulyef@gmail.com', 'Comptes Bancaires : Caisse Bureau NKC-1   a été Modifié avec succés.  ', '2015-05-13 14:12:16', 316),
('mohamedloulyef@gmail.com', 'Salaires : 023655666   a été Ajouté avec succés. ', '2015-05-13 14:28:44', 317),
('mohamedloulyef@gmail.com', 'Dossiers : RE000001   a été Ajouté avec succés. ', '2015-05-14 11:42:14', 318),
('mohamedloulyef@gmail.com', 'Dossiers : RE000002   a été Ajouté avec succés. ', '2015-05-14 11:43:08', 319),
('mohamedloulyef@gmail.com', 'Dossiers : RE000002   a été Ajouté avec succés. ', '2015-05-14 11:44:12', 320),
('mohamedloulyef@gmail.com', 'Utilisateurs : bah.didi@bktrans-sa.com   Son Mot de passe à été changé avec succès ', '2015-05-14 11:46:13', 321),
('mohamedloulyef@gmail.com', 'Pérmissions : bah.didi@bktrans-sa.com   Sa Permission à été changée avec succès ', '2015-05-14 12:06:41', 322),
('mohamedloulyef@gmail.com', 'Dossiers : RI000001   a été Ajouté avec succés. ', '2015-05-14 12:12:12', 323),
('mohamedloulyef@gmail.com', 'Afficher pour : RE000002   a été Modifié avec succés.  ', '2015-05-14 13:35:51', 324),
('mohamedloulyef@gmail.com', 'Afficher pour : RE000002   a été Modifié avec succés.  ', '2015-05-14 13:36:46', 325),
('mohamedloulyef@gmail.com', 'Afficher pour : RE000002   a été Modifié avec succés.  ', '2015-05-14 13:37:28', 326),
('bah.didi@bktrans-sa.com', 'Afficher pour : RI000001   a été Modifié avec succés.  ', '2015-05-14 13:38:42', 327),
('mohamedloulyef@gmail.com', 'Afficher pour : OE000003   a été Modifié avec succés.  ', '2015-05-14 13:42:04', 328),
('mohamedloulyef@gmail.com', 'Clients : Oceanteam logistics   a été Modifié avec succés.  ', '2015-05-14 15:58:46', 329),
('mohamedloulyef@gmail.com', 'Facturation : FCT0036   a été Ajouté avec succés. ', '2015-05-18 12:54:01', 330),
('mohamedloulyef@gmail.com', 'Fournisseur : Baker Hughes EHO LTD Mauritania Branch    a été Ajouté avec succés. ', '2015-05-18 13:04:29', 331),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0011   a été Ajouté avec succés. ', '2015-05-18 13:16:29', 332),
('mohamedloulyef@gmail.com', 'Supprimer : COM0011  a été Confirmé(e) ', '2015-05-18 13:16:34', 333),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0011', '2015-05-18 13:16:53', 334),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0011  a été Livré(e) ', '2015-05-18 13:17:25', 335),
('mohamedloulyef@gmail.com', 'Bons de Commande : AV0000002   a été Ajouté avec succés. ', '2015-05-18 15:29:04', 336),
('mohamedloulyef@gmail.com', 'Supprimer : AV0000002  a été Confirmé(e) ', '2015-05-18 15:29:09', 337),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  AV0000002', '2015-05-18 15:29:28', 338),
('mohamedloulyef@gmail.com', 'Bons de Commande : AV0000002  a été Livré(e) ', '2015-05-18 15:29:39', 339),
('mohamedloulyef@gmail.com', 'Clients : Baker Hughes EHO LTD Mauritania Branch   a été Modifié avec succés.  ', '2015-05-18 16:15:58', 340),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:17:30', 341),
('mohamedloulyef@gmail.com', 'Clients : Baker Hughes EHO LTD Mauritania Branch   a été Modifié avec succés.  ', '2015-05-18 16:19:42', 342),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:20:07', 343),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:22:10', 344),
('mohamedloulyef@gmail.com', 'Clients : Baker Hughes EHO LTD Mauritania Branch   a été Modifié avec succés.  ', '2015-05-18 16:23:05', 345),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:23:35', 346),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:24:06', 347),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:27:31', 348),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:31:39', 349),
('mohamedloulyef@gmail.com', 'Clients : SOA a été envoyé avec succés au le client Baker Hughes EHO LTD Mauritania Branch', '2015-05-18 14:37:35', 350),
('mohamedloulyef@gmail.com', 'Pérmissions : demo@gmail.com   Sa Permission à été changée avec succès ', '2015-05-21 13:47:23', 351),
('mohamedloulyef@gmail.com', 'Pérmissions : demo@gmail.com   Sa Permission à été changée avec succès ', '2015-05-21 13:47:31', 352),
('mohamedloulyef@gmail.com', 'Pérmissions : demo@gmail.com   Sa Permission à été changée avec succès ', '2015-05-21 13:48:22', 353),
('mohamedloulyef@gmail.com', 'Pérmissions : demo@gmail.com   Sa Permission à été changée avec succès ', '2015-05-21 13:49:27', 354),
('mohamedloulyef@gmail.com', 'Facturation : FCT0037   a été Ajouté avec succés. ', '2015-05-21 17:27:39', 355),
('mohamedloulyef@gmail.com', 'Codes : 1   a été supprimé avec succès.', '2015-05-22 12:48:42', 356),
('mohamedloulyef@gmail.com', 'Codes : 3   a été supprimé avec succès.', '2015-05-22 13:30:57', 357),
('mohamedloulyef@gmail.com', 'KPIS :    a été Modifié avec succés.  ', '2015-05-27 12:02:28', 358),
('mohamedloulyef@gmail.com', 'KPIS : gh   a été Ajouté avec succés. ', '2015-05-27 12:02:55', 359),
('mohamedloulyef@gmail.com', 'KPIS : dd   a été supprimé avec succès.', '2015-05-27 12:03:22', 360),
('mohamedloulyef@gmail.com', 'Facturation : FCT0038   a été Ajouté avec succés. ', '2015-06-01 14:13:18', 361),
('mohamedloulyef@gmail.com', 'Taxe : Tax  des impots   a été Ajouté avec succés. ', '2015-06-01 18:22:30', 362),
('mohamedloulyef@gmail.com', 'Facturation : FCT0039   a été Ajouté avec succés. ', '2015-06-02 10:47:20', 363),
('mohamedloulyef@gmail.com', 'Dossiers : EN000001   a été Ajouté avec succés. ', '2015-06-02 11:33:15', 364),
('mohamedloulyef@gmail.com', 'Dépenses : COM0012    a été Ajouté avec succés. ', '2015-06-02 11:36:01', 365),
('mohamedloulyef@gmail.com', 'Supprimer : COM0012  a été Confirmé(e) ', '2015-06-02 11:36:14', 366),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0012', '2015-06-02 11:36:31', 367),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0012  a été Livré(e) ', '2015-06-02 11:36:49', 368),
('mohamedloulyef@gmail.com', 'Salaires : 023655666   a été Ajouté avec succés. ', '2015-06-02 17:01:44', 369),
('azizachom@live.fr', 'Clients : Appsfinity   a été Ajouté avec succés. ', '2015-06-04 13:43:59', 370),
('azizachom@live.fr', 'Clients : Mohamed & co   a été Ajouté avec succés. ', '2015-06-04 13:45:13', 371),
('mohamedloulyef@gmail.com', ' Paiement Reçus  : RCV0000007   a été Ajouté avec succés. ', '2015-06-09 16:35:50', 372),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0013   a été Ajouté avec succés. ', '2015-06-09 16:54:34', 373),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0014   a été Ajouté avec succés. ', '2015-06-09 16:57:11', 374),
('mohamedloulyef@gmail.com', 'KPIS : KPI   a été Modifié avec succés.  ', '2015-06-09 17:02:08', 375),
('mohamedloulyef@gmail.com', 'Entreprise : BKTrans NKC  a été Configuré avec succés', '2015-06-09 17:46:39', 376),
('mohamedloulyef@gmail.com', 'Supprimer : COM0013  a été Confirmé(e) ', '2015-06-09 18:28:24', 377),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0013', '2015-06-09 18:29:47', 378),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0013  a été Livré(e) ', '2015-06-09 18:30:33', 379),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0013  a été Confirmé(e) pour le Paiement  ', '2015-06-09 18:31:28', 380),
('mohamedloulyef@gmail.com', 'Supprimer : COM0014  a été Confirmé(e) ', '2015-06-10 12:02:02', 381),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0012  a été Confirmé(e) pour le Paiement  ', '2015-06-10 12:04:23', 382),
('mohamedloulyef@gmail.com', 'Logistique : LS000007   a été Ajouté avec succés. ', '2015-06-10 12:42:08', 383),
('mohamedloulyef@gmail.com', 'Offres : OFR0016   a été Facturé(e) avec succés  ', '2015-06-10 12:44:42', 384),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0014', '2015-06-10 15:51:04', 385),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0014  a été Livré(e) ', '2015-06-10 15:51:48', 386),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0014  a été Confirmé(e) pour le Paiement  ', '2015-06-10 15:52:54', 387),
('mohamedloulyef@gmail.com', 'Facturation : FCT0041   a été Ajouté avec succés. ', '2015-06-10 16:05:28', 388),
('mohamedloulyef@gmail.com', 'Paiement : Paiement sur les bons de commande et les factures :     ,PAY0000011', '2015-06-10 16:24:21', 389),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0011  a été Confirmé(e) pour le Paiement  ', '2015-06-11 13:16:29', 390),
('mohamedloulyef@gmail.com', 'Entreprise : BKTrans NKC  a été Configuré avec succés', '2015-06-12 13:10:06', 391),
('mohamedloulyef@gmail.com', 'Facturation : FCT0042   a été Ajouté avec succés. ', '2015-06-15 23:13:07', 392),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0015   a été Ajouté avec succés. ', '2015-06-15 23:37:26', 393),
('mohamedloulyef@gmail.com', 'Supprimer : COM0015  a été Confirmé(e) ', '2015-06-15 23:38:06', 394),
('mohamedloulyef@gmail.com', 'Bons de Commande : la reception de facture du bon de comande N°  COM0015', '2015-06-15 23:39:14', 395),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0015  a été Livré(e) ', '2015-06-15 23:40:06', 396),
('mohamedloulyef@gmail.com', 'Bons de Commande : COM0015  a été Confirmé(e) pour le Paiement  ', '2015-06-15 23:40:46', 397);

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE IF NOT EXISTS `import` (
  `Ref_doss` varchar(60) NOT NULL,
  `client` varchar(60) NOT NULL,
  `Refernce_Client` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `type` varchar(60) NOT NULL,
  `Consultation` int(60) NOT NULL DEFAULT '0',
  `ETD` varchar(10) NOT NULL,
  `ETA` varchar(12) NOT NULL,
  `Exnoration` varchar(60) NOT NULL,
  `Enelvement_direct` varchar(60) NOT NULL,
  `Invoicing` varchar(60) NOT NULL,
  `id` varchar(40) NOT NULL,
  `Terme_operation` text NOT NULL,
  `Dimonssion` varchar(30) NOT NULL,
  `type_objet` varchar(30) NOT NULL,
  `Num_piece` varchar(40) NOT NULL,
  `Origine` varchar(40) NOT NULL,
  `Destination` varchar(40) NOT NULL,
  `Shipping_line` varchar(20) NOT NULL,
  `Valeur_facturee` float NOT NULL,
  `Monnaie_facture` varchar(10) NOT NULL,
  `Taux_val_fact` float NOT NULL,
  `valeur_trans` double DEFAULT NULL,
  `Monnaie_trans` varchar(30) DEFAULT NULL,
  `taux_trans` double DEFAULT NULL,
  `Fournisseur` varchar(30) NOT NULL,
  `Reference` varchar(30) NOT NULL,
  `Designation_comercial` text NOT NULL,
  `Num_declaration_douane` varchar(30) DEFAULT NULL,
  `Num_appurement` varchar(30) DEFAULT NULL,
  `Tracking` text,
  `url` text,
  `Enlevement_date` varchar(40) DEFAULT NULL,
  `Douane_S_date` varchar(40) DEFAULT NULL,
  `Transport_date` varchar(40) DEFAULT NULL,
  `Arrive_date` varchar(40) DEFAULT NULL,
  `Douane_E_date` varchar(40) DEFAULT NULL,
  `Livraison_date` varchar(40) DEFAULT NULL,
  `delevry_note` varchar(40) DEFAULT NULL,
  `fiche_exonoration` varchar(40) NOT NULL,
  `type_operation` varchar(40) NOT NULL,
  `declaration_im` varchar(10) NOT NULL,
  `app` varchar(10) NOT NULL,
  `type_exo` varchar(40) DEFAULT NULL,
  `Date_expiration` varchar(10) DEFAULT NULL,
  `Quantite` int(30) DEFAULT '1',
  `tble` varchar(20) NOT NULL DEFAULT 'import',
  `Enlevement` int(2) NOT NULL DEFAULT '0',
  `Douane_S` int(2) NOT NULL DEFAULT '0',
  `Transport` int(2) NOT NULL DEFAULT '0',
  `Arrive` int(2) NOT NULL DEFAULT '0',
  `Douane_E` int(2) NOT NULL DEFAULT '0',
  `Livraison` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `client` (`client`),
  KEY `Reference` (`Ref_doss`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`Ref_doss`, `client`, `Refernce_Client`, `Date`, `type`, `Consultation`, `ETD`, `ETA`, `Exnoration`, `Enelvement_direct`, `Invoicing`, `id`, `Terme_operation`, `Dimonssion`, `type_objet`, `Num_piece`, `Origine`, `Destination`, `Shipping_line`, `Valeur_facturee`, `Monnaie_facture`, `Taux_val_fact`, `valeur_trans`, `Monnaie_trans`, `taux_trans`, `Fournisseur`, `Reference`, `Designation_comercial`, `Num_declaration_douane`, `Num_appurement`, `Tracking`, `url`, `Enlevement_date`, `Douane_S_date`, `Transport_date`, `Arrive_date`, `Douane_E_date`, `Livraison_date`, `delevry_note`, `fiche_exonoration`, `type_operation`, `declaration_im`, `app`, `type_exo`, `Date_expiration`, `Quantite`, `tble`, `Enlevement`, `Douane_S`, `Transport`, `Arrive`, `Douane_E`, `Livraison`) VALUES
('AI000001', 'DACHSER MOROCCO', '  147 4302 5356', '2015-03-11', '14743025356', 1, '2015-02-05', '2015-02-05', 'non', '', 'oui', 'IMP0001', '///', '', '', '1', 'Maroc', 'Mauritanie', 'Royal Air Maroc', 0, 'MRO', 1, 0, 'MRO', 1, 'SOTHEMA', '147 4302 5356', 'Materiel promotionnel Medicaments ', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM4', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('AI000002', 'Oceanteam logistics', '147-8856 3720', '2015-03-11', '147-8856 3720', 1, '2015-02-10', '2015-02-10', 'non', '', 'oui', 'IMP0002', '///', '', '', '1', 'France', 'Mauritanie', 'Royal Air Maroc', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 2, 'import', 0, 0, 0, 0, 0, 0),
('AI000003', 'Maurimedis', 'roche', '2015-03-17', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0003', '///', '', '', '1', 'Allemagne', 'Mauritanie', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('OE000002', 'Brahim Soueilem', 'MAURITANIA-OU 12365', '2015-01-17', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0005', '///', '', '', '1', 'Mauritanie', 'Mauritanie', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Road Import', 'IM1', 'oui', 'Consomable', '', 122, 'import', 0, 0, 0, 0, 0, 0),
('OI000005', 'MAFCI', 'B.P. 5291', '2015-01-19', 'LEH000079', 1, '08/12/2014', '20/12/2014', 'non', 'non', 'oui', 'IMP0006', '///', '', '', '3', 'France', 'Mauritanie', 'MAERSK LINE', 5517.37, 'EUR', 368, 0, 'MRO', 1, 'Panalpina LEH', 'I344268', 'Spare Parts', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 3, 'import', 0, 0, 0, 0, 0, 0),
('OI000007', 'RIM GAZ', 'Rimgaz', '2015-02-12', 'QDCL030905', 1, '10/02/2015', '2015-04-10', 'non', '', 'oui', 'IMP0007', '///', '', '', '1', 'Chine ', 'Mauritanie ', 'CMA', 250000, 'USD', 315, 99500, 'USD', 315, 'TAISHAN GROUP TAIAN BOAO', '11X40FR ', '  SPHERICAL TANK ', '', '', '', 'https://www.cma-cgm.com/ebusiness/tracking/search?SearchBy=BL&Reference=QDCL030905&search=Search', '23/02/2015', '24/02/2015', '25/02/2015', '', '', '', '', '', 'Ocean Import', 'IM1', '', 'Consomable', '', 11, 'import', 1, 1, 1, 0, 0, 0),
('RM000001', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '303400-303330', '2015-03-23', 'HKG 303400', 1, '', '', 'oui', 'oui', 'oui', 'IMP0008', '///', '', '', '5', 'Chine', 'Mauritanie', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'SAMMA', '6500025010', '2015-03-24', '6600025010', 1, '', '', 'oui', 'oui', 'oui', 'IMP0009', '///', '', '', '8', 'Allemagne ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 6, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '15556479060', '2015-03-30', 'szx479060', 1, '', '', 'oui', 'oui', 'oui', 'IMP0010', '///', '', '', '1', 'Chine ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'GRNAD MOULIN DU SAHEL', '15328702255', '2015-03-30', 'ZRH702255', 1, '', '', 'oui', 'oui', 'oui', 'IMP0011', '///', '', '', '1', 'Chine ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'EL MECHRIGH SERVET', '00-0001500029', '2015-03-30', 'POZ 700240', 1, '', '', 'oui', 'oui', 'oui', 'IMP0012', '///', '', '', '1', 'Polynesie ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 2, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'SNIM', '057-9342 9895', '2015-03-30', 'GRZ-8000 4795', 1, '', '', 'oui', 'oui', 'oui', 'IMP0013', '///', '', '', '1', 'Autriche ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'SOC', 'DESTR630350034', '2015-03-31', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0014', '///', '', '', '1', 'Mauritanie ', 'France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('RM000001', 'SOC', 'DESTR630350034', '2015-03-31', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0015', '///', '', '', '1', 'Mauritanie ', 'France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('OI000002', 'Sascha Vens-Cappell ', 'SEP SA', '2015-03-31', 'HAM/NKC 1503005301', 1, '2015-03-27', '2015-04-16', 'non', '', 'oui', 'IMP0016', '///', '', '', '4', 'Allemagne ', 'Mauritanie ', 'ecu line ', 4520, 'EUR', 339, 0, 'MRO', 1, 'BKtrans', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 5, 'import', 0, 0, 0, 0, 0, 0),
('OI000003', 'MAFCI', 'T72565', '2015-03-31', '', 1, '', '', 'non', '', 'non', 'IMP0017', '///', '', '', '4', 'italie ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ocean Import', 'IM1', 'oui', 'Consomable', '', 2, 'import', 0, 0, 0, 0, 0, 0),
('AI000005', 'MAFCI', 'MAFCI Mauritania ', '2015-03-31', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0018', '///', '', '', '1', 'italie ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('AI000001', 'Baker Hughes EHO LTD Mauritania Branch', 'Chine 256889', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0020', '///', '', '', '1', 'Afghanistan ', 'nice, France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 0, 'import', 0, 0, 0, 0, 0, 0),
('AI000002', 'Baker Hughes EHO LTD Mauritania Branch', 'Chine 256889', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'pret', 'IMP0021', '///', '', '', '1', 'Afghanistan ', 'nice, France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 0, 'import', 0, 0, 0, 0, 0, 0),
('AI000004', 'Baker Hughes EHO LTD Mauritania Branch', 'Chine 256889', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0022', '///', '', '', '1', 'Afghanistan ', 'nice, France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 0, 'import', 0, 0, 0, 0, 0, 0),
('AI000001', 'Baker Hughes EHO LTD Mauritania Branch', 'Chine 256889', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'pret', 'IMP0023', '///', '', '', '1', 'Afghanistan ', 'nice, France ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('AI000004', 'Bana blanc ', 'MAURITANIA-OU 12365', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0024', '///', '', '', '1', 'Mauritanie ', 'Afghanistan ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('AI000003', 'Baker Hughes EHO LTD Mauritania Branch', 'REF000RX', '2015-04-24', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0025', '///', '', '', '1', 'Mauritanie ', 'Afrique Centrale ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 10, 'import', 0, 0, 0, 0, 0, 0),
('AI000001', 'Baker Hughes EHO LTD Mauritania Branch', 'MAURITANIA-OU 12365', '2015-04-27', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0026', '///', '', '', '1', 'Maurice ', 'Mauritanie ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 1, 'import', 0, 0, 0, 0, 0, 0),
('AI000002', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', 'REF000RX', '2015-04-28', '', 1, '', '', 'oui', 'oui', 'oui', 'IMP0027', '///', '', '', '1', 'Afrique du Sud ', 'Afrique Centrale ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 10, 'import', 0, 0, 0, 0, 0, 0),
('AI000004', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', 'CL002258', '2015-04-28', '', 1, '', '', 'oui', 'oui', 'non', 'IMP0028', '///', '', '', '1', 'Algerie ', 'Afrique du Sud ', '', 0, 'MRO', 1, 0, 'MRO', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Air Import', 'IM1', 'oui', 'Consomable', '', 122, 'import', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `Resume_facture` text NOT NULL,
  `payement` varchar(60) NOT NULL,
  `Remerciement` varchar(60) NOT NULL,
  `id_facture` varchar(11) NOT NULL,
  `Reference` varchar(60) NOT NULL,
  `client` varchar(50) NOT NULL,
  `date_lancement` date NOT NULL,
  `Date_paiment` date NOT NULL,
  `id` int(50) DEFAULT NULL,
  `Monnaie` varchar(12) NOT NULL,
  `Ref` text NOT NULL,
  `etat_payement` int(2) DEFAULT '0',
  `Monnaie_secondaire` varchar(23) DEFAULT NULL,
  `devise_monnaie_sec` float DEFAULT NULL,
  `validation` int(11) NOT NULL DEFAULT '0',
  `Jours_echue` int(11) DEFAULT NULL,
  `def_Monnaie` varchar(40) NOT NULL DEFAULT 'MRO',
  `Taux` float NOT NULL DEFAULT '1',
  `valeur_payer` double NOT NULL DEFAULT '0',
  `Ref_operration` varchar(40) NOT NULL,
  `frequence` int(10) DEFAULT NULL,
  `occurrence` int(10) DEFAULT NULL,
  `rang` int(10) DEFAULT '1',
  `id_regroup` int(12) DEFAULT NULL,
  `periode` int(60) NOT NULL DEFAULT '1',
  `draft` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_facture`,`Reference`,`client`),
  KEY `client` (`client`),
  KEY `Reference` (`Reference`),
  KEY `operation` (`Ref_operration`),
  KEY `periode` (`periode`),
  KEY `Monnaie` (`Monnaie`,`Monnaie_secondaire`),
  KEY `Monnaie_secondaire` (`Monnaie_secondaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Resume_facture`, `payement`, `Remerciement`, `id_facture`, `Reference`, `client`, `date_lancement`, `Date_paiment`, `id`, `Monnaie`, `Ref`, `etat_payement`, `Monnaie_secondaire`, `devise_monnaie_sec`, `validation`, `Jours_echue`, `def_Monnaie`, `Taux`, `valeur_payer`, `Ref_operration`, `frequence`, `occurrence`, `rang`, `id_regroup`, `periode`, `draft`) VALUES
('', '15 Jours', '', 'AV0000001', 'AI000001', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-06', '2015-05-07', 0, 'MRO', 'MAURITANIA-OU 12365Z', 0, 'MRO', 1, 0, 38, 'MRO', 1, 0, 'EXP0003', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'AV0000002', 'AI000001', 'DACHSER MOROCCO', '2015-05-06', '2015-05-14', 0, 'MRO', 'sd', 0, 'MRO', 1, 0, 31, 'MRO', 1, 0, 'IMP0001', 0, 0, 0, 0, 12, 1),
('Clear and deliver 1*40\r\nLubricating Oil ', '15 Jours', 'Thank you for your Business', 'FAC0003', 'OE000002', 'Brahim Soueilem', '2015-01-13', '2015-01-30', 0, 'MRO', 'Lub oil Petronas', 0, 'MRO', 1, 0, 135, 'MRO', 1, 0, 'IMP0005', 0, 0, 0, 0, 12, 1),
('1x40 Container rental \r\nCurrency exchange: 1 EUR ; 410 MRO', '15 Jours', 'Payment per transfer', 'FAC0004', 'LO000001', 'Baker Hughes EHO LTD Mauritania Branch', '2015-01-19', '2015-02-28', 0, 'MRO', 'container rental', 0, 'MRO', 1, 0, 107, 'MRO', 1, 0, 'LS000001', 0, 0, 0, 0, 12, 1),
('1x20 container \r\nPOL NKC\r\nPOD RTD\r\nEMAIL: SARAH.RUDIGIER@PANALPINA.COM', '15 Jours', 'Merci Pour votre Entreprise!', 'FAC0005', 'OI000006', 'Panalpina AG Switzerland', '2015-01-12', '2015-02-02', 0, 'EUR', 'Pilatus ', 0, 'EUR', 366.85, 0, 133, 'MRO', 366.85, 0, 'EXP0000002', 0, 0, 0, 0, 12, 1),
('MAWB: 147-88563720\r\nWeight: 14kg \r\n', '15 Jours', 'Payment before delivery', 'FAC0007', 'AI000002', 'Oceanteam logistics', '2015-02-16', '2015-02-16', 0, 'EUR', 'SITA / 147-88563720', 0, 'EUR', 375, 0, 119, 'MRO', 375, 0, 'IMP0002', 0, 0, 0, 0, 12, 1),
('LTA; 147-8826 8073\r\nLTA; 147-8826 8202\r\nLTA; 147-8826 8493', '15 Jours', '', 'FCT0001', 'AI000003', 'Maurimedis', '2015-03-17', '2015-03-17', 0, 'MRO', 'Remise documentaire ', 1, 'MRO', 1, 0, 0, 'MRO', 1, 45000, 'IMP0003', 0, 0, 0, 0, 12, 1),
('Ancienne Facture N FAC0000005\r\n11 Contenaires de la chine', '15 Jours', '', 'FCT0002', 'OI000007', 'RIM GAZ', '2015-02-12', '2015-03-26', 0, 'USD', 'LNG CHINA', 0, 'USD', 330, 0, 79, 'MRO', 330, 0, 'IMP0007', 0, 0, 0, 0, 12, 1),
('Ancienne facture N FAC0000007\r\nUne Pallet de 120kg \r\nProvenance: Casablanca\r\nShipper: SOTHEMA\r\nConsignee: Anaphar\r\nAWB: 147-43025356', '15 Jours', '', 'FCT0003', 'AI000001', 'DACHSER MOROCCO', '2015-02-17', '2015-02-28', 0, 'EUR', '120kg / SOTHEMA', 0, 'EUR', 375, 0, 107, 'MRO', 375, 0, 'IMP0001', 0, 0, 0, 0, 12, 1),
('Ancienne facture N FAC0000001\r\nPaiement par cheque ', '15 Jours', '', 'FCT0004', 'OI000005', 'MAFCI', '2015-01-05', '2015-03-08', 0, 'MRO', 'LEH000079', 0, 'MRO', 1, 0, 97, 'MRO', 1, 0, 'IMP0006', 0, 0, 0, 0, 12, 1),
('invoice paid Cash and received from the Master at the airport at 0745am ', '15 Jours', '', 'FCT0005', 'LG000002', 'Volga-Dnepr UK Ltd', '2015-03-19', '2015-03-19', 0, 'USD', 'crane hire airport', 0, 'USD', 325, 0, 86, 'MRO', 325, 0, 'LS000002', 0, 0, 0, 0, 12, 1),
('LTA; HKG 303330\r\nLTA; HKG 303400\r\n', '15 Jours', '', 'FCT0006', 'RM000001', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '2015-03-23', '2015-03-23', 0, 'MRO', '303400-303330', 1, 'MRO', 1, 0, 0, 'MRO', 1, 40000, 'IMP0008', 0, 0, 0, 0, 12, 1),
('BL:6500025010', '15 Jours', '', 'FCT0007', 'RM000001', 'SAMMA', '2015-03-24', '2015-03-25', 0, 'MRO', '6500025010', 0, 'MRO', 1, 0, 80, 'MRO', 1, 0, 'IMP0009', 0, 0, 0, 0, 12, 1),
('BL N°:  SZX479060', '15 Jours', '', 'FCT0008', 'RM000001', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '2015-03-30', '2015-03-30', 0, 'MRO', 'Pantainer AMS NO.)UTN:15556479060', 0, 'MRO', 1, 0, 75, 'MRO', 1, 0, 'IMP0010', 0, 0, 0, 0, 12, 1),
('BL N°:  ZRH702255', '15 Jours', '', 'FCT0009', 'RM000001', 'GRNAD MOULIN DU SAHEL', '2015-03-30', '2015-03-30', 0, 'MRO', '15328702255', 0, 'MRO', 1, 0, 75, 'MRO', 1, 0, 'IMP0011', 0, 0, 0, 0, 12, 1),
('AWB N° : POZ 700240', '15 Jours', '', 'FCT0010', 'RM000001', 'EL MECHRIGH SERVET', '2015-03-30', '2015-03-30', 0, 'MRO', '00-0001500029', 0, 'MRO', 1, 0, 75, 'MRO', 1, 0, 'IMP0012', 0, 0, 0, 0, 12, 1),
('AWB N° : GRZ-8000  4795', '15 Jours', '', 'FCT0011', 'RM000001', 'SNIM', '2015-03-30', '2015-03-30', 0, 'MRO', '057-9342  9895', 0, 'MRO', 1, 0, 75, 'MRO', 1, 0, 'IMP0013', 0, 0, 0, 0, 12, 1),
('1X20 DRY \r\nBL MSC MSCURF381512', '15 Jours', '', 'FCT0012', 'RM000001', 'SOC', '2015-03-31', '2015-04-01', 0, 'MRO', 'DESTR630350034', 0, 'MRO', 1, 0, 74, 'MRO', 1, 0, 'IMP0015', 0, 0, 0, 0, 12, 1),
('5x pallets spare parts\r\nBL: HAM/NKC 1503005301', '15 Jours', '', 'FCT0013', 'OI000002', 'Sascha Vens-Cappell ', '2015-03-31', '2015-04-30', 0, 'EUR', '1', 0, 'EUR', 339, 0, 45, 'MRO', 339, 0, 'IMP0016', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0014', 'AI000004', 'Bana blanc ', '2015-04-23', '2015-05-02', 0, 'MRO', 'MAURITANIA-OU 12365', 0, 'MRO', 1, 0, 43, 'MRO', 1, 0, 'IMP0024', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0015', 'AI000003', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-14', '2015-04-15', 0, 'MRO', 'REF000RX', 1, 'MRO', 1, 0, 21, 'MRO', 1, 11600, 'IMP0025', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0016', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-14', '2015-04-30', 0, 'MRO', 'REF000RX', 1, 'MRO', 1, 0, 6, 'MRO', 1, 10000, 'EXP0002', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0017', 'AI000001', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-20', '2015-04-30', 0, 'MRO', 'Chine 256889', 1, 'MRO', 1, 0, 6, 'MRO', 1, 1000, 'IMP0023', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0018', 'AI000002', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '2015-04-13', '2015-05-09', 0, 'MRO', 'REF000RX', 0, 'MRO', 1, 0, 36, 'MRO', 1, 0, 'IMP0027', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0019', 'AI000002', 'Bana blanc ', '2015-04-07', '2015-05-02', 0, 'MRO', 'MAURITANIA-OU 12365', 0, 'MRO', 1, 0, 43, 'MRO', 1, 0, 'EXP0004', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0020', 'LG000001', 'Brahim Soueilem', '2015-04-21', '2015-04-23', 0, 'MRO', 'MAURITANIA-OU 12365', 0, 'MRO', 1, 0, 52, 'MRO', 1, 0, 'LS000004', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0021', 'AI000001', 'Brahim Soueilem', '2015-04-14', '2015-04-15', 0, 'MRO', 'MAURITANIA-OU 12365', 0, 'MRO', 1, 0, 60, 'MRO', 1, 0, 'MG000002', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0022', 'LG000001', 'DACHSER MOROCCO', '2015-04-15', '2015-04-22', 0, 'MRO', 'CL002258', 1, 'MRO', 1, 0, 19, 'MRO', 1, 400, 'LCT000002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0023', 'LG000001', 'DACHSER MOROCCO', '2015-04-29', '2015-04-30', 0, 'MRO', '1', 1, 'MRO', 1, 0, 11, 'MRO', 1, 700, 'LCT000001', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0024', 'LG000001', 'DACHSER MOROCCO', '2015-04-29', '2015-04-30', 0, 'MRO', '1', 0, 'MRO', 1, 0, 45, 'MRO', 1, 300, 'LCT000001', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0025', 'LG000001', 'Brahim Soueilem', '2015-04-29', '2015-04-30', 0, 'MRO', '1', 0, 'MRO', 1, 0, 45, 'MRO', 1, 0, 'LS000005', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0026', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-06', '2015-05-07', 0, 'MRO', '1', 0, 'MRO', 1, 0, 38, 'MRO', 1, 579400, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0027', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-06', '2015-05-07', 0, 'MRO', '1', 0, 'MRO', 1, 0, 38, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0028', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-06', '2015-05-07', 0, 'MRO', '1', 0, 'MRO', 1, 0, 38, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0029', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-06', '2015-05-07', 0, 'MRO', '1', 0, 'MRO', 1, 0, 38, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('ere', '15 Jours', '', 'FCT0030', 'AI000001', 'DACHSER MOROCCO', '2015-05-11', '2015-05-12', 0, 'MRO', '1', 1, 'MRO', 1, 0, 0, 'MRO', 1, 1200, 'IMP0001', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0031', 'AI000001', 'Brahim Soueilem', '2015-05-11', '2015-05-12', 0, 'MRO', '1', 1, 'MRO', 1, 0, 0, 'MRO', 1, 1000, 'MG000002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0032', 'AI000001', 'DACHSER MOROCCO', '2015-05-11', '2015-05-19', 0, 'MRO', '1', 0, 'MRO', 1, 0, 26, 'MRO', 1, 0, 'IMP0001', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0033', 'AI000002', 'Oceanteam logistics', '2015-05-11', '2015-05-19', 0, 'MRO', '1', 0, 'MRO', 1, 0, 26, 'MRO', 1, 0, 'IMP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0034', 'AI000002', 'Bana blanc ', '2015-05-12', '2015-05-13', 0, 'MRO', '1', 0, 'MRO', 1, 0, 32, 'MRO', 1, 0, 'EXP0004', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0035', 'AI000003', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-12', '2015-05-13', 0, 'MRO', '1', 0, 'MRO', 1, 0, 32, 'MRO', 1, 0, 'IMP0025', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0036', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-18', '2015-05-19', 0, 'MRO', '1', 0, 'MRO', 1, 0, 26, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0037', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-05-21', '2015-05-21', 0, 'MRO', '1', 0, 'MRO', 1, 0, 24, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 0),
('', '15 Jours', '', 'FCT0038', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-06-01', '2015-06-02', 0, 'MRO', '1', 0, 'MRO', 1, 0, 13, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0039', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-06-02', '2015-06-03', 0, 'MRO', '1', 0, 'MRO', 1, 0, 12, 'MRO', 1, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('\r\n', '15 Jours', '', 'FCT0040', 'LG000002', 'Bana blanc ', '2015-06-08', '2015-06-30', 0, 'MRO', 'REF000RX', 0, 'MRO', 1, 0, 0, 'MRO', 1, 0, 'LS000007', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0041', 'AI000002', 'Baker Hughes EHO LTD Mauritania Branch', '2015-06-10', '2015-06-30', 0, 'EUR', '1', 0, 'EUR', 375, 0, 0, 'MRO', 375, 0, 'EXP0002', 0, 0, 0, 0, 12, 1),
('', '15 Jours', '', 'FCT0042', 'AI000001', 'Baker Hughes EHO LTD Mauritania Branch', '2015-06-15', '2015-06-16', 0, 'MRO', '1', 0, 'MRO', 1, 0, 0, 'MRO', 1, 0, 'EXP0003', 0, 0, 0, 0, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(50) NOT NULL,
  `journal` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `piece` varchar(60) NOT NULL,
  `Partenaire` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `journal`, `Date`, `piece`, `Partenaire`) VALUES
(28, 'Achat', '2015-05-12', 'COM0009', 'CMA Mauritanie'),
(29, 'Vente', '2015-05-12', 'FCT0004', 'MAFCI'),
(30, 'Paiement', '2015-05-12', 'PAY0000009', 'CMA Mauritanie'),
(31, 'Vente', '2015-05-12', 'FCT0034', 'Bana blanc '),
(32, 'Vente', '2015-05-12', 'FCT0035', 'Baker Hughes EHO LTD Mauritania Branch'),
(33, 'Achat', '2015-05-12', 'COM0010', 'CMA Mauritanie'),
(34, 'Paiement', '2015-05-12', 'PAY0000010', 'CMA Mauritanie'),
(35, 'Paiment Salaire', '2015-05-13', 'PS0000002', '023655666'),
(36, 'Vente', '2015-05-18', 'FCT0036', 'Baker Hughes EHO LTD Mauritania Branch'),
(37, 'Achat', '2015-05-18', 'COM0011', 'Baker Hughes EHO LTD Mauritania Branch'),
(38, 'Achat', '2015-05-18', 'AV0000002', 'Baker Hughes EHO LTD Mauritania Branch'),
(39, 'Vente', '2015-06-01', 'FCT0038', 'Baker Hughes EHO LTD Mauritania Branch'),
(40, 'Vente', '2015-06-02', 'FCT0039', 'Baker Hughes EHO LTD Mauritania Branch'),
(41, 'Achat', '2015-06-02', 'COM0012', 'Agent Port Non categ'),
(42, 'Paiment Salaire', '2015-06-02', 'PS0000003', '023655666'),
(43, 'Achat', '2015-06-09', 'COM0013', 'CMA Mauritanie'),
(44, 'Achat', '2015-06-10', 'COM0014', 'BKtrans'),
(45, 'Vente', '2015-06-10', 'FCT0041', 'Baker Hughes EHO LTD Mauritania Branch'),
(46, 'Paiement', '2015-06-10', 'PAY0000011', 'CMA Mauritanie'),
(47, 'Vente', '2015-06-15', 'FCT0042', 'Baker Hughes EHO LTD Mauritania Branch'),
(48, 'Achat', '2015-06-15', 'COM0015', 'CMA Mauritanie');

-- --------------------------------------------------------

--
-- Table structure for table `kpi`
--

CREATE TABLE IF NOT EXISTS `kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbroffre` int(11) DEFAULT NULL,
  `nbroffreacc` double DEFAULT NULL,
  `nbrclients` int(11) DEFAULT NULL,
  `nbrnouveauxclient` int(11) DEFAULT NULL,
  `nbropps` int(11) DEFAULT NULL,
  `nbroppfact` double DEFAULT NULL,
  `nbrdossier` int(11) NOT NULL,
  `nbrdossierovrt` int(11) NOT NULL,
  `nbrva` double DEFAULT NULL,
  `nbrvaimp` double DEFAULT NULL,
  `nbrre` double DEFAULT NULL,
  `profit` double NOT NULL,
  `validation` varchar(12) NOT NULL,
  `idperiod` int(11) NOT NULL,
  `app` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kpi`
--

INSERT INTO `kpi` (`id`, `nbroffre`, `nbroffreacc`, `nbrclients`, `nbrnouveauxclient`, `nbropps`, `nbroppfact`, `nbrdossier`, `nbrdossierovrt`, `nbrva`, `nbrvaimp`, `nbrre`, `profit`, `validation`, `idperiod`, `app`) VALUES
(1, 20, 20, 20, 20, 14, 20, 20, 20, 20, 20, 20, 20, '', 0, 0),
(2, 122, 30, 120, 12, 200, 75, 50, 50, 120000, 2000000, 1000000, 1999999, '111111111111', 12, 1),
(3, 12, 100, 24, 18, 41, 63.414634146341, 23, 96, 22247730.19, 23285630.19, -5136036.9986, 21602827.9914, '110000000000', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `Reference` varchar(40) NOT NULL,
  `Client` varchar(40) NOT NULL,
  `Dossier` varchar(40) NOT NULL,
  `Date_debut` date NOT NULL,
  `Date_fin` date NOT NULL,
  `Kilometrage_debut` double NOT NULL,
  `Kilometrage_fin` double NOT NULL,
  `Etat` int(2) NOT NULL,
  `Equipment` varchar(60) NOT NULL,
  `Description` text NOT NULL,
  `facturation` varchar(20) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`Reference`),
  KEY `Equipment` (`Equipment`),
  KEY `Dossier` (`Dossier`),
  KEY `Client` (`Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Reference`, `Client`, `Dossier`, `Date_debut`, `Date_fin`, `Kilometrage_debut`, `Kilometrage_fin`, `Etat`, `Equipment`, `Description`, `facturation`) VALUES
('LCT000001', 'DACHSER MOROCCO', 'LG000001', '2015-04-01', '2015-04-22', 1000, 1000, 1, '1000AS00', 'oio', 'oui'),
('LCT000002', 'DACHSER MOROCCO', 'LG000001', '2015-04-01', '2015-04-22', 1000, 1000, 1, '1000AS00', 'oio', 'oui');

-- --------------------------------------------------------

--
-- Table structure for table `logistics_services`
--

CREATE TABLE IF NOT EXISTS `logistics_services` (
  `Reference` varchar(40) NOT NULL,
  `Client` varchar(40) NOT NULL,
  `Dossier` varchar(40) NOT NULL,
  `Etat` int(2) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `facturation` varchar(20) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`Reference`),
  KEY `Dossier` (`Dossier`),
  KEY `Client` (`Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logistics_services`
--

INSERT INTO `logistics_services` (`Reference`, `Client`, `Dossier`, `Etat`, `Description`, `Date`, `facturation`) VALUES
('LS000001', 'Baker Hughes EHO LTD Mauritania Branch', 'LG000001', 0, 'Container hire of 40 dry ', '2015-03-19', 'non'),
('LS000002', 'Volga-Dnepr UK Ltd', 'LG000002', 0, 'Crane hire for one night operation at the airport for lifting one piece to the trailer', '2015-03-19', 'non'),
('LS000003', 'Brahim Soueilem', 'LG000001', 1, 'kjhklh', '2015-04-28', 'non'),
('LS000004', 'Brahim Soueilem', 'LG000001', 1, 'lklmi', '2015-04-28', 'oui'),
('LS000005', 'Brahim Soueilem', 'LG000001', 1, '$type = substr("$OP",0,3);', '2015-04-29', 'oui'),
('LS000006', 'Bana blanc ', 'LG000001', 1, 'e', '2015-04-29', 'non'),
('LS000007', 'Bana blanc ', 'LG000002', 1, 'location engin', '2015-06-10', 'oui');

-- --------------------------------------------------------

--
-- Table structure for table `magasinage`
--

CREATE TABLE IF NOT EXISTS `magasinage` (
  `Reference` varchar(40) NOT NULL,
  `Client` varchar(40) NOT NULL,
  `Dossier` varchar(40) NOT NULL,
  `Date_debut` date NOT NULL,
  `Date_fin` date NOT NULL,
  `Etat` int(2) NOT NULL,
  `Description` text NOT NULL,
  `facturation` varchar(20) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`Reference`),
  KEY `Dossier` (`Dossier`),
  KEY `Client` (`Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magasinage`
--

INSERT INTO `magasinage` (`Reference`, `Client`, `Dossier`, `Date_debut`, `Date_fin`, `Etat`, `Description`, `facturation`) VALUES
('MG000001', 'Baker Hughes EHO LTD Mauritania Branch', 'LG000001', '2015-04-15', '2015-05-07', 0, 'jhy', 'partiel'),
('MG000002', 'Brahim Soueilem', 'AI000001', '2015-04-01', '2015-04-27', 0, 'kjljk', 'oui');

-- --------------------------------------------------------

--
-- Table structure for table `mai_envoyer`
--

CREATE TABLE IF NOT EXISTS `mai_envoyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `to` text NOT NULL,
  `cc` text NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mai_envoyer`
--

INSERT INTO `mai_envoyer` (`id`, `date`, `to`, `cc`, `subject`, `msg`, `user`) VALUES
(1, '2015-03-10 01:13:29', 'mohamedloulyef@gmail.com', '', 'EXP0001,RI000001,LF', 'fghh', 'admin@gmail.com'),
(2, '2015-03-10 01:16:03', 'mohamedloulyef@gmail.com', '', 'EXP0001,RI000001,LF', 'fghh', 'admin@gmail.com'),
(3, '2015-03-10 01:36:41', 'mohamedloulyef@gmail.com', 'mohamed.yeslem@bktrans-sa.com', 'FACTURE 00025', 'FACTURE POUR YAC', 'admin@gmail.com'),
(4, '2015-03-10 01:36:52', 'mohamedloulyef@gmail.com', 'mohamed.yeslem@bktrans-sa.com', 'FACTURE 00025', 'FACTURE POUR YAC', 'admin@gmail.com'),
(5, '2015-03-10 01:38:32', 'mohamedloulyef@gmail.com', 'mohamed.yeslem@bktrans-sa.com', 'FACTURE 00025', 'FACTURE POUR YAC', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `id` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `type` varchar(40) NOT NULL,
  `file_paiment` varchar(40) NOT NULL,
  `method_paiement` varchar(40) NOT NULL,
  `num_compte` varchar(60) NOT NULL,
  `valeur` double NOT NULL,
  `MN_Non_allue` double NOT NULL DEFAULT '0',
  `client` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `num_compte` (`num_compte`),
  KEY `client` (`client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `Description`, `Date`, `type`, `file_paiment`, `method_paiement`, `num_compte`, `valeur`, `MN_Non_allue`, `client`) VALUES
('PAY0000001', '', '2015-05-06', 'out', '', '', '1', 44000, 0, 'KL Logistics'),
('PAY0000002', '', '2015-05-06', 'out', '', '', '1', 1000, 0, 'KL Logistics'),
('PAY0000003', '', '2015-05-06', 'out', '', '', '1', 1000, 0, 'KL Logistics'),
('PAY0000004', '', '2015-05-06', 'out', '', '', '1', 1000, 0, 'KL Logistics'),
('PAY0000005', '', '2015-05-06', 'out', '', '', '1', 20000, 0, 'KL Logistics'),
('PAY0000006', 'pour le paiment de bon de comande N°=', '2015-05-14', 'out', '', 'especes', '1', 600000, 0, 'Panalpina China   '),
('PAY0000007', '', '2015-05-11', 'out', '', '', '585988888', 2600, 0, 'KL Logistics'),
('PAY0000008', 'pour le paiement', '2015-05-11', 'out', '', 'especes', '585988888', 10000, 7200, 'SOGECO'),
('PAY0000009', '', '2015-05-12', 'out', '', '', '1', 19000, 0, 'CMA Mauritanie'),
('PAY0000010', '', '2015-05-12', 'out', '', '', '1', 800, 0, 'CMA Mauritanie'),
('PAY0000011', '', '2015-06-10', 'out', '', '', '1', 84700, 0, 'CMA Mauritanie'),
('RCV0000001', 'paiment de la facture FCT0001 (Remise documentaire)', '2015-03-17', 'in', '', 'especes', '1', 45000, 0, 'Maurimedis'),
('RCV0000002', 'IMP0008-Remise documentaire', '2015-03-25', 'in', '', 'especes', '1', 40000, 0, 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE '),
('RCV0000003', 'paiment de facture 000122', '2015-05-21', 'in', '', 'especes', '1', 600000, 0, 'Baker Hughes EHO LTD Mauritania Branch'),
('RCV0000004', 'pour le paiment de FCT0030', '2015-05-11', 'in', '', 'especes', '1', 600, 0, 'DACHSER MOROCCO'),
('RCV0000005', 'd', '2015-05-14', 'in', '', 'especes', '1', 200, 300, 'DACHSER MOROCCO'),
('RCV0000006', 'paiement de FCT0031', '2015-05-11', 'in', '', 'especes', '1', 1000, 0, 'Brahim Soueilem'),
('RCV0000007', 'ssvsdff', '2015-06-09', 'in', '', 'especes', '1', 30000, 30000, 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `Email` varchar(40) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL,
  `etat` int(2) NOT NULL DEFAULT '0',
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `objet` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Email`, `Message`, `Date`, `etat`, `id`, `objet`) VALUES
('admin@gmail.com', '', '2015-03-10 01:03:05', 1, 95, 'COM0001'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-19 09:03:16', 1, 96, 'COM0001'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-19 20:03:21', 1, 97, 'COM0004'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-22 08:03:21', 1, 98, 'COM0006'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-22 08:03:58', 1, 99, 'COM0005'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-31 10:30:47', 1, 100, 'COM0007'),
('brahim.khiyar@bktrans-sa.com', '', '2015-03-31 12:33:14', 1, 101, 'COM0002'),
('mohamedloulyef@gmail.com', '', '2015-04-30 17:39:49', 1, 102, 'COM0002'),
('mohamedloulyef@gmail.com', '', '2015-04-30 18:06:21', 1, 103, 'COM0002'),
('mohamedloulyef@gmail.com', '', '2015-05-11 12:34:34', 1, 104, 'COM0008'),
('mohamedloulyef@gmail.com', '', '2015-05-11 12:35:05', 1, 105, 'COM0008'),
('mohamedloulyef@gmail.com', '', '2015-05-11 12:36:01', 1, 106, 'COM0008'),
('mohamedloulyef@gmail.com', '', '2015-05-12 11:35:27', 1, 107, 'COM0003'),
('mohamedloulyef@gmail.com', '', '2015-05-12 11:36:25', 1, 108, 'AV0000001'),
('mohamedloulyef@gmail.com', '', '2015-05-12 11:37:01', 1, 109, 'COM0009'),
('mohamedloulyef@gmail.com', '', '2015-05-12 16:32:12', 1, 110, 'COM0010'),
('mohamedloulyef@gmail.com', '', '2015-05-18 13:16:34', 1, 111, 'COM0011'),
('mohamedloulyef@gmail.com', '', '2015-05-18 15:29:09', 1, 112, 'AV0000002'),
('mohamedloulyef@gmail.com', '', '2015-06-02 11:36:14', 1, 113, 'COM0012'),
('mohamedloulyef@gmail.com', '', '2015-06-09 18:28:24', 1, 114, 'COM0013'),
('mohamedloulyef@gmail.com', '', '2015-06-10 12:02:02', 1, 115, 'COM0014'),
('mohamedloulyef@gmail.com', '', '2015-06-15 23:38:06', 1, 116, 'COM0015');

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `Resume_offre` varchar(60) NOT NULL,
  `id_offre` varchar(20) NOT NULL,
  `client` varchar(50) NOT NULL,
  `date_lancement` date NOT NULL,
  `Date_validation` date DEFAULT NULL,
  `Monnaie` varchar(12) NOT NULL,
  `Ref` text NOT NULL,
  `validation` int(11) NOT NULL DEFAULT '0',
  `def_Monnaie` varchar(40) NOT NULL DEFAULT '',
  `Taux` float NOT NULL DEFAULT '1',
  `id_facture` varchar(60) DEFAULT NULL,
  `OPERATION` varchar(50) DEFAULT NULL,
  `destination` varchar(50) NOT NULL,
  `origine` varchar(50) NOT NULL,
  `Services` text NOT NULL,
  `Type_offre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `client` (`client`),
  KEY `id_facture` (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`Resume_offre`, `id_offre`, `client`, `date_lancement`, `Date_validation`, `Monnaie`, `Ref`, `validation`, `def_Monnaie`, `Taux`, `id_facture`, `OPERATION`, `destination`, `origine`, `Services`, `Type_offre`) VALUES
('', 'OFR0005', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-23', NULL, 'MRO', 'Chine 256889', 1, 'MRO', 0, 'FCT0017', 'IMP0023', 'Afghanistan ', 'nice, France ', 'EXW&CPT', 'Air Import'),
('offre pour un fret aérien pour l''entreprise X ', 'OFR0006', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-24', NULL, 'MRO', 'REF000RX', 1, 'MRO', 1, 'FCT0016', 'EXP0002', 'Mauritanie ', 'Afghanistan ', 'EXW&CPT', 'Air Export'),
('', 'OFR0007', 'Bana blanc ', '2015-04-24', NULL, 'MRO', 'MAURITANIA-OU 12365', 1, 'MRO', 1, 'FCT0014', 'IMP0024', 'Mauritanie ', 'Afghanistan ', 'EXW&CPT', 'Air Import'),
('', 'OFR0008', 'Baker Hughes EHO LTD Mauritania Branch', '2015-04-24', NULL, 'MRO', 'REF000RX', 1, 'MRO', 1, 'FCT0015', 'IMP0025', 'Mauritanie ', 'Afrique Centrale ', 'EXW&CPT', 'Air Import'),
('', 'OFR0009', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '2015-04-28', NULL, 'MRO', 'REF000RX', 1, 'MRO', 1, 'FCT0018', 'IMP0027', 'Afrique du Sud ', 'Afrique Centrale ', 'EXW&CPT', 'Air Import'),
('', 'OFR0010', 'CDI CENTRE DE DISTRIBUTION INFORMATIQUE ', '2015-04-28', '2015-04-29', 'MRO', 'CL002258', 1, 'MRO', 311, NULL, 'IMP0028', 'Algerie ', 'Afrique du Sud ', 'EXW&CPT', 'Air Import'),
('', 'OFR0011', 'Bana blanc ', '2015-04-28', NULL, 'MRO', 'MAURITANIA-OU 12365', 1, 'MRO', 1, 'FCT0019', 'EXP0004', 'Algerie ', 'Andorre ', 'EXW&CPT', 'Ocean Export'),
('', 'OFR0012', 'DACHSER MOROCCO', '2015-04-28', '2015-04-28', 'MRO', 'CL002258', 1, 'MRO', 1, 'FCT0022', 'LCT000002', '', '', 'EXW&EXW', 'LC'),
('', 'OFR0013', 'Brahim Soueilem', '2015-04-28', '2015-04-28', 'MRO', '', 1, 'MRO', 1, 'FCT0021', 'MG000002', '', '', 'EXW&EXW', 'MG'),
('', 'OFR0014', 'Brahim Soueilem', '2015-04-28', '2015-04-28', 'MRO', '', 1, 'MRO', 1, 'FCT0020', 'LS000004', '', '', 'EXW&EXW', 'LS'),
('', 'OFR0015', 'Brahim Soueilem', '2015-04-29', '2015-04-29', 'MRO', '', 1, 'MRO', 1, 'FCT0025', 'LS000005', '', '', 'EXW&EXW', 'LS'),
('', 'OFR0016', 'Bana blanc ', '2015-04-29', '2015-06-10', 'MRO', 'REF000RX', 1, 'MRO', 1, 'FCT0040', 'LS000007', '', '', '', 'LS');

-- --------------------------------------------------------

--
-- Stand-in structure for view `operation`
--
CREATE TABLE IF NOT EXISTS `operation` (
`id` varchar(40)
,`Ref_doss` varchar(60)
,`client` varchar(60)
,`ETA` varchar(12)
,`ETD` varchar(10)
,`origine` varchar(40)
,`destination` varchar(40)
,`type_operation` varchar(40)
,`tble` varchar(20)
,`invoicing` varchar(60)
,`type` varchar(60)
,`Date` date
);
-- --------------------------------------------------------

--
-- Table structure for table `paiment_salaire`
--

CREATE TABLE IF NOT EXISTS `paiment_salaire` (
  `id` varchar(70) NOT NULL,
  `Montant_peyye` float NOT NULL,
  `Date_paiment` date NOT NULL,
  `file` varchar(50) NOT NULL,
  `Banque` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Banque` (`Banque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paiment_salaire`
--

INSERT INTO `paiment_salaire` (`id`, `Montant_peyye`, `Date_paiment`, `file`, `Banque`) VALUES
('PS0000001', 157000, '2015-05-13', '', '1'),
('PS0000002', 487.2, '2015-05-13', '', '585988888'),
('PS0000003', 898.5, '2015-06-02', '', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `payement_tax`
--

CREATE TABLE IF NOT EXISTS `payement_tax` (
  `id` int(50) NOT NULL,
  `Tax` varchar(50) NOT NULL,
  `Montant_peyye` float NOT NULL,
  `Date_paiment` date NOT NULL,
  `File_attacher` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tax_invoice`
--

CREATE TABLE IF NOT EXISTS `payment_tax_invoice` (
  `Reference` varchar(50) NOT NULL,
  `id_payment` int(50) NOT NULL,
  `Montant` double NOT NULL,
  UNIQUE KEY `Reference` (`Reference`,`id_payment`),
  KEY `id_payment` (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tax_purchase`
--

CREATE TABLE IF NOT EXISTS `payment_tax_purchase` (
  `Reference` varchar(50) NOT NULL,
  `id_payment` int(50) NOT NULL,
  `Montant` double NOT NULL,
  UNIQUE KEY `Reference` (`Reference`,`id_payment`),
  KEY `id_payment` (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE IF NOT EXISTS `personel` (
  `CIN` varchar(45) NOT NULL,
  `Nom_prenom` varchar(40) NOT NULL,
  `Telphone` varchar(40) NOT NULL,
  `adress` text NOT NULL,
  `Sexe` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Fonction` varchar(50) NOT NULL,
  `Compte_bancaire` varchar(50) DEFAULT NULL,
  `code_comptable` varchar(50) NOT NULL,
  PRIMARY KEY (`CIN`),
  KEY `code_comptable` (`code_comptable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`CIN`, `Nom_prenom`, `Telphone`, `adress`, `Sexe`, `Email`, `Fonction`, `Compte_bancaire`, `code_comptable`) VALUES
('023655666', 'Mohamed loulyef', '364765125', 'Nouakchott -teyart BP:0999 ', 'Homme', 'mohamedloulyef@gmail.com', 'IT', 'BPM-202586', 'Salaire');

-- --------------------------------------------------------

--
-- Table structure for table `piece_export`
--

CREATE TABLE IF NOT EXISTS `piece_export` (
  `id` int(50) NOT NULL,
  `Poids` varchar(40) NOT NULL,
  `Dimension` varchar(40) NOT NULL,
  `Quantite` varchar(40) NOT NULL,
  `id_operation` varchar(40) NOT NULL,
  `Numero_contener` varchar(50) DEFAULT NULL,
  `Poid_chargeable` float NOT NULL,
  `Objet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`id_operation`),
  KEY `id_operation` (`id_operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piece_export`
--

INSERT INTO `piece_export` (`id`, `Poids`, `Dimension`, `Quantite`, `id_operation`, `Numero_contener`, `Poid_chargeable`, `Objet`) VALUES
(1, '100', '10x10x10', '10', 'EXP0002', '', 1000, 'piece'),
(1, '10', '12x10x10', '1', 'EXP0003', '', 10, 'piece'),
(1, '10', '12x50x12', '12', 'EXP0004', '', 120, 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `piece_import`
--

CREATE TABLE IF NOT EXISTS `piece_import` (
  `id` int(50) NOT NULL,
  `Poids` varchar(40) NOT NULL,
  `Dimension` varchar(40) NOT NULL,
  `Quantite` varchar(40) NOT NULL,
  `id_operation` varchar(40) NOT NULL,
  `Numero_contener` varchar(50) NOT NULL,
  `Poid_chargeable` float NOT NULL,
  `Objet` varchar(40) NOT NULL,
  PRIMARY KEY (`id`,`id_operation`),
  KEY `id_operation` (`id_operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piece_import`
--

INSERT INTO `piece_import` (`id`, `Poids`, `Dimension`, `Quantite`, `id_operation`, `Numero_contener`, `Poid_chargeable`, `Objet`) VALUES
(0, '5', '82x82x82', '1', 'IMP0006', '', 5, 'piece'),
(0, '234665', '12043x234x2272', '11', 'IMP0007', '', 709, 'Conteneur 40 Open Top'),
(1, '122', '120x120x120', '1', 'IMP0001', '', 122, 'piece'),
(1, '14', '82x42x42', '2', 'IMP0002', '', 0, ''),
(1, '1', '1x1x1', '1', 'IMP0003', '', 0, ''),
(1, '111', '12x12x12', '122', 'IMP0005', '', 13542, 'piece'),
(1, '52.5', '10x10x10', '1', 'IMP0008', '', 52.5, 'piece'),
(1, '3440', '1204.5x1204.5x1204.5', '1', 'IMP0009', 'MRKU 06655022', 3440, 'Conteneur 40 Dry'),
(1, '6136.5', '1204.5x1204.5x1204.5', '1', 'IMP0010', 'TCNU9147615', 6136.5, 'Conteneur 40 Dry'),
(1, '1276', '591.9x591.9x591.9', '1', 'IMP0011', 'XINU1083361', 1276, 'Conteneur 20 Dry'),
(1, '160', '80x80x80', '2', 'IMP0012', '', 320, 'piece'),
(1, '156', '80x80x80', '1', 'IMP0013', '', 156, 'piece'),
(1, '11174', '591.9x591.9x591.9', '1', 'IMP0014', 'IPXU 396919 4', 22100, 'Conteneur 20 Dry'),
(1, '11174', '591.9x591.9x591.9', '1', 'IMP0015', 'IPXU 396919 4', 22100, 'Conteneur 20 Dry'),
(1, '100', '140x150x125', '1', 'IMP0016', '', 100, 'piece'),
(1, '110', '120x80x120', '1', 'IMP0017', '', 192, 'piece'),
(1, '60', '60x40x40', '1', 'IMP0018', '', 60, 'piece'),
(1, '2000', '591.9x234x238', '1', 'IMP0023', 'MSKU5200603', 22100, 'Conteneur 20 Dry'),
(1, '10', '10x10x10', '1', 'IMP0024', '', 10, 'piece'),
(1, '100', '10x10x10', '10', 'IMP0025', '', 1000, 'piece'),
(1, '10', '100x100x100', '1', 'IMP0026', '', 166.667, 'piece'),
(1, '10', '100x10x10', '10', 'IMP0027', '', 100, 'piece'),
(1, '12', '1204.5x233.6x238', '122', 'IMP0028', 'MSKU5200603', 27398, 'Conteneur 40 Dry'),
(2, '3440', '1204.5x1204.5x1204.5', '1', 'IMP0009', '403', 3440, 'Conteneur 40 Dry'),
(2, '316', '115x115x125', '4', 'IMP0016', '', 1264, 'piece'),
(2, '50', '300x40x30', '1', 'IMP0017', '', 60, 'piece'),
(3, '281', '10x10x10', '1', 'IMP0008', '', 281, 'piece'),
(3, '3408', '1204.5x1204.5x1204.5', '1', 'IMP0009', 'N', 3408, 'Conteneur 40 Dry'),
(4, '3600', '1204.5x1204.5x1204.5', '1', 'IMP0009', 'N', 3600, 'Conteneur 40 Dry'),
(5, '3600', '1204.5x1204.5x1204.5', '1', 'IMP0009', 'N', 3600, 'Conteneur 40 Dry'),
(6, '3574', '1204.5x1204.5x1204.5', '1', 'IMP0009', 'N', 3567, 'Conteneur 40 Dry');

-- --------------------------------------------------------

--
-- Table structure for table `piece_offre`
--

CREATE TABLE IF NOT EXISTS `piece_offre` (
  `id` int(50) NOT NULL,
  `Poids` varchar(40) NOT NULL,
  `Dimension` varchar(40) NOT NULL,
  `Quantite` varchar(40) NOT NULL,
  `id_operation` varchar(40) NOT NULL,
  `Numero_contener` varchar(50) DEFAULT NULL,
  `Poid_chargeable` float NOT NULL,
  `Objet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`id_operation`),
  KEY `id_operation` (`id_operation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piece_offre`
--

INSERT INTO `piece_offre` (`id`, `Poids`, `Dimension`, `Quantite`, `id_operation`, `Numero_contener`, `Poid_chargeable`, `Objet`) VALUES
(1, '2000', '591.9x234x238', '1', 'OFR0005', 'MSKU5200603', 22100, 'Conteneur 20 Dry'),
(1, '100', '10x10x10', '10', 'OFR0006', '', 1000, 'piece'),
(1, '10', '10x10x10', '1', 'OFR0007', '', 10, 'piece'),
(1, '100', '10x10x10', '10', 'OFR0008', '', 1000, 'piece'),
(1, '10', '100x10x10', '10', 'OFR0009', '', 100, 'piece'),
(1, '', 'xx', '', 'OFR0010', '', 0, ''),
(1, '10', '12x50x12', '12', 'OFR0011', '', 120, 'piece'),
(1, '', 'xx', '', 'OFR0012', '', 0, ''),
(1, '', 'xx', '', 'OFR0013', '', 0, ''),
(1, '', 'xx', '', 'OFR0014', '', 0, ''),
(1, '', 'xx', '', 'OFR0015', '', 0, ''),
(1, '', 'xx', '', 'OFR0016', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE IF NOT EXISTS `prefix` (
  `id` varchar(50) NOT NULL,
  `element` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`id`, `element`) VALUES
('AV', 'Avoir'),
('COM', 'Commande'),
('FCT', 'Facture'),
('OFR', 'Offre'),
('PAY', 'Argent_sortie'),
('PS', 'paiment_salaire'),
('RCV', 'Argent_entrer'),
('TPAY', 'P_Tax'),
('TRN', 'Virement');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `reference` varchar(30) NOT NULL,
  `fournisseur` varchar(50) DEFAULT NULL,
  `dossiers` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date_commande` date NOT NULL,
  `date_echeance` date NOT NULL,
  `etat_commande` int(1) NOT NULL,
  `type_de_monnaie` varchar(30) NOT NULL,
  `etat_paiement` int(1) NOT NULL,
  `Taux_monnaie_def` float NOT NULL,
  `confirmation` int(1) NOT NULL,
  `utilisateur` varchar(30) NOT NULL,
  `def_monnaie` varchar(30) NOT NULL,
  `operation` varchar(40) NOT NULL,
  `valeur_payer` double NOT NULL DEFAULT '0',
  `Reference_four` varchar(40) DEFAULT NULL,
  `periode` int(50) NOT NULL,
  `Date_reception` date DEFAULT NULL,
  `file_facture` varchar(60) DEFAULT NULL,
  `confirmation_paiment` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reference`),
  KEY `fournisseur` (`fournisseur`),
  KEY `dossiers` (`dossiers`),
  KEY `utilisateur` (`utilisateur`),
  KEY `operation` (`operation`),
  KEY `periode` (`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`reference`, `fournisseur`, `dossiers`, `description`, `date_commande`, `date_echeance`, `etat_commande`, `type_de_monnaie`, `etat_paiement`, `Taux_monnaie_def`, `confirmation`, `utilisateur`, `def_monnaie`, `operation`, `valeur_payer`, `Reference_four`, `periode`, `Date_reception`, `file_facture`, `confirmation_paiment`) VALUES
('AV0000001', 'Agent Port Non categ', 'AI000002', '', '2015-05-08', '2015-06-08', 0, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0004', 0, 'REF000RX', 12, NULL, NULL, 0),
('AV0000002', 'Baker Hughes EHO LTD Mauritania Branch', 'AI000002', '', '2015-05-18', '2015-07-03', 1, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0002', 0, 'AW007RD', 12, '2015-05-30', NULL, 0),
('COM0001', 'BKtrans', 'AI000002', '', '2015-02-18', '2015-02-18', 1, 'MRO', 0, 1, 1, 'bah.didi@bktrans-sa.com', 'MRO', 'IMP0002', 0, '147-8856 3720', 12, '2015-05-09', NULL, 0),
('COM0002', 'KL Logistics', 'LG000002', 'Crane hire at the airport for one night', '2015-03-11', '2015-03-12', 1, 'MRO', 1, 1, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'LS000002', 1044000, 'airport at night', 12, '2015-04-27', NULL, 1),
('COM0003', 'BKtrans', 'LG000002', 'crane hire at the airport', '2015-03-11', '2015-03-11', 1, 'MRO', 0, 1, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'LS000002', 0, 'crane hire airport', 12, '2015-05-12', NULL, 0),
('COM0004', 'Panalpina China   ', 'OI000007', 'Ocean freight of 11 container 40 FR from China \r\nPOL: Qingdao\r\nPOD: NKC\r\nWeight: 277Ton\r\n', '2015-02-10', '2015-04-30', 1, 'USD', 0, 325, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'IMP0007', 1932.8, '174052', 12, '2015-03-30', NULL, 1),
('COM0005', 'La Douane mauritanienne', 'AI000001', '147 4302 5356\r\n122kg ', '2015-02-06', '2015-03-06', 1, 'MRO', 0, 1, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'IMP0001', 0, 'Dachser 147 4302 5356', 12, '2015-05-12', NULL, 0),
('COM0006', 'Transiteur Bekay', 'AI000001', '147 4302 5356\r\n122kg ', '2015-02-06', '2015-02-06', 1, 'MRO', 0, 1, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'IMP0001', 0, 'Dachser 147 4302 5356', 12, '2015-05-19', NULL, 0),
('COM0007', 'Panalpina Italy', 'OE000002', '1x40 from EXW to CFR NKC \r\nHBL MIL066667\r\nMBL MSCUGQ878030\r\nINVOICE N° 314000039612 ', '2015-03-31', '2015-04-30', 1, 'USD', 0, 1, 1, 'brahim.khiyar@bktrans-sa.com', 'MRO', 'IMP0005', 0, 'inv N 314000039612 ', 12, '2015-02-01', 'Fct_COM0007.pdf', 1),
('COM0008', 'SOGECO', 'AI000002', 'achat de conteneur', '2015-05-11', '2015-06-26', 1, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0002', 640999.8, 'SOG-FS-C002', 12, '2015-05-18', NULL, 0),
('COM0009', 'CMA Mauritanie', 'AI000002', '', '2015-05-12', '2015-06-12', 1, 'MRO', 1, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0004', 100000, 'INV1259', 12, '2015-05-12', NULL, 1),
('COM0010', 'CMA Mauritanie', 'AI000001', '', '2015-05-12', '2015-05-12', 1, 'MRO', 1, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'MG000002', 2000, 'MAURITANIA-OU 12365', 12, '2015-05-12', NULL, 1),
('COM0011', 'Baker Hughes EHO LTD Mauritania Branch', 'AI000002', '', '2015-05-18', '2015-07-18', 1, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0002', 0, 'CL002258', 12, '2015-05-28', NULL, 1),
('COM0012', 'Agent Port Non categ', 'EN000001', '', '2015-06-02', '2015-06-04', 1, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', '', 0, 'MAURITANIA-OU 12365', 12, '2015-06-02', NULL, 1),
('COM0013', 'CMA Mauritanie', 'AI000002', '1x40 entre NKC et ANR', '2015-06-09', '2015-07-10', 1, 'MRO', 1, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0002', 2500, '125425', 12, '2017-11-05', NULL, 1),
('COM0014', 'BKtrans', 'AI000004', '20kg from PAR to NKC', '2015-06-09', '2015-06-10', 1, 'USD', 0, 325, 1, 'mohamedloulyef@gmail.com', 'MRO', 'IMP0022', 0, '548210', 12, '2017-12-06', NULL, 1),
('COM0015', 'CMA Mauritanie', 'AI000002', '', '2015-06-15', '2015-07-16', 1, 'MRO', 0, 1, 1, 'mohamedloulyef@gmail.com', 'MRO', 'EXP0002', 0, '02230', 12, '2015-06-15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salaire_payer`
--

CREATE TABLE IF NOT EXISTS `salaire_payer` (
  `CIN` varchar(50) NOT NULL,
  `id_payment` varchar(70) NOT NULL,
  `Montant` double NOT NULL,
  `periode_pay` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `devise` double NOT NULL,
  PRIMARY KEY (`CIN`,`id_payment`),
  KEY `id_payment` (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaire_payer`
--

INSERT INTO `salaire_payer` (`CIN`, `id_payment`, `Montant`, `periode_pay`, `MN`, `devise`) VALUES
('023655666', 'PS0000001', 157000, '05/2015', 'MRO', 1),
('023655666', 'PS0000002', 487.2, '06/2015', 'MRO', 0.0028),
('023655666', 'PS0000003', 898.5, '07/2015', 'USD', 0.8985);

-- --------------------------------------------------------

--
-- Table structure for table `salaried`
--

CREATE TABLE IF NOT EXISTS `salaried` (
  `CIN` varchar(70) NOT NULL,
  `Salaire_base` int(20) NOT NULL,
  `augmantation` int(20) NOT NULL,
  `ind_fonct` int(20) NOT NULL,
  `ind_log` int(20) NOT NULL,
  `ind_Trans` int(20) NOT NULL,
  `ind_Eau_Elect` int(20) NOT NULL,
  `Iindemnit_risque` int(10) NOT NULL,
  `prime_Exception` int(20) NOT NULL,
  `Total_brut` int(20) NOT NULL,
  `CNSS` int(20) NOT NULL,
  `CNAM` int(20) NOT NULL,
  `Mont_impot` int(20) NOT NULL,
  `ITS` int(20) NOT NULL,
  `Total_Ret` int(20) NOT NULL,
  `Avance` int(20) NOT NULL,
  `Salaire` int(20) NOT NULL,
  `Mois` varchar(20) NOT NULL,
  `annee` varchar(20) NOT NULL,
  `pay` int(3) NOT NULL DEFAULT '0',
  `Monnaie` varchar(50) NOT NULL,
  PRIMARY KEY (`CIN`,`Mois`,`annee`),
  KEY `CIN` (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaried`
--

INSERT INTO `salaried` (`CIN`, `Salaire_base`, `augmantation`, `ind_fonct`, `ind_log`, `ind_Trans`, `ind_Eau_Elect`, `Iindemnit_risque`, `prime_Exception`, `Total_brut`, `CNSS`, `CNAM`, `Mont_impot`, `ITS`, `Total_Ret`, `Avance`, `Salaire`, `Mois`, `annee`, `pay`, `Monnaie`) VALUES
('023655666', 150000, 12000, 12000, 0, 0, 0, 0, 0, 174000, 0, 0, 104000, 17000, 17000, 0, 157000, '05', '2015', 1, 'MRO'),
('023655666', 200000, 0, 0, 0, 0, 0, 0, 0, 200000, 0, 0, 140000, 26000, 26000, 0, 174000, '06', '2015', 1, 'MRO'),
('023655666', 1000, 0, 0, 0, 0, 0, 0, 0, 1000, 0, 0, 0, 0, 0, 0, 1000, '07', '2015', 1, 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `user` varchar(50) NOT NULL,
  `Service` int(50) NOT NULL,
  PRIMARY KEY (`user`,`Service`),
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`user`, `Service`) VALUES
('azizachom@live.fr', 1),
('azizachom@live.fr', 2),
('azizachom@live.fr', 3),
('azizachom@live.fr', 4),
('azizachom@live.fr', 5),
('azizachom@live.fr', 6),
('azizachom@live.fr', 7),
('azizachom@live.fr', 8),
('azizachom@live.fr', 15),
('azizachom@live.fr', 16),
('mohamed.khlil@bktrans-sa.com', 3),
('mohamed.khlil@bktrans-sa.com', 26),
('mohamedloulyef@gmail.com', 3),
('mohamedloulyef@gmail.com', 21),
('mohamedloulyef@gmail.com', 22),
('oumar.brahim@bktrans-sa.com', 1),
('oumar.brahim@bktrans-sa.com', 2),
('oumar.brahim@bktrans-sa.com', 3),
('oumar.brahim@bktrans-sa.com', 4),
('oumar.brahim@bktrans-sa.com', 5),
('oumar.brahim@bktrans-sa.com', 6),
('oumar.brahim@bktrans-sa.com', 7),
('oumar.brahim@bktrans-sa.com', 8),
('oumar.brahim@bktrans-sa.com', 9),
('oumar.brahim@bktrans-sa.com', 10),
('oumar.brahim@bktrans-sa.com', 11),
('oumar.brahim@bktrans-sa.com', 12),
('oumar.brahim@bktrans-sa.com', 13),
('oumar.brahim@bktrans-sa.com', 14),
('oumar.brahim@bktrans-sa.com', 15),
('oumar.brahim@bktrans-sa.com', 16),
('oumar.brahim@bktrans-sa.com', 17),
('oumar.brahim@bktrans-sa.com', 18),
('oumar.brahim@bktrans-sa.com', 19),
('oumar.brahim@bktrans-sa.com', 20),
('oumar.brahim@bktrans-sa.com', 21),
('oumar.brahim@bktrans-sa.com', 22),
('oumar.brahim@bktrans-sa.com', 23),
('oumar.brahim@bktrans-sa.com', 24),
('oumar.brahim@bktrans-sa.com', 25),
('oumar.brahim@bktrans-sa.com', 26),
('oumar.brahim@bktrans-sa.com', 27),
('oumar.brahim@bktrans-sa.com', 28),
('oumar.brahim@bktrans-sa.com', 29),
('oumar.brahim@bktrans-sa.com', 30),
('oumar.brahim@bktrans-sa.com', 31);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Nom_Soc` varchar(45) NOT NULL,
  `loi` varchar(45) DEFAULT NULL,
  `Prenom` varchar(40) DEFAULT NULL,
  `titre` varchar(40) DEFAULT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `AdressMail` varchar(40) DEFAULT NULL,
  `Telephone1` varchar(40) DEFAULT NULL,
  `Telephone2` varchar(40) DEFAULT NULL,
  `type_entreprise` varchar(40) DEFAULT NULL,
  `compte` varchar(50) NOT NULL,
  `Numero_entreprise` varchar(40) DEFAULT NULL,
  `Skype` varchar(40) DEFAULT NULL,
  `Siteweb` varchar(40) DEFAULT NULL,
  `Fax` varchar(40) DEFAULT NULL,
  `terme_paiement` int(12) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `cat` varchar(20) NOT NULL,
  PRIMARY KEY (`Nom_Soc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Nom_Soc`, `loi`, `Prenom`, `titre`, `Nom`, `AdressMail`, `Telephone1`, `Telephone2`, `type_entreprise`, `compte`, `Numero_entreprise`, `Skype`, `Siteweb`, `Fax`, `terme_paiement`, `adresse`, `city`, `pays`, `cat`) VALUES
('Agent Port Non categ', '', '', '', '', '', '', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 30, '', '', '', ''),
('Appsfinity', '', '', '', '', 'info@appsfinity.com', '00 3356232665', '', 'Partenaire', '', '254658', 'appsfinityInfo', 'http://appsfinity.com/', '', 2, 'AppsFinity BVBA. BP:', 'Antwerp', 'Belgique ', 'partenaire '),
('Baker Hughes EHO LTD Mauritania Branch', '', '', 'Mr', '', 'mohamedloulyef@gmail.com', '', '', 'Opérateur', 'Fournisseur', '', '', '', '', 45, '', '', 'nice, France ', ''),
('BKtrans', '44444444', 'Brahim', 'Operations', 'KHIYAR', 'brahim.khiyar@bktrans-sa.com', '47220660', '27220660', 'Partenaire', 'Fournisseur', '0022247220660', '222222', 'http://www.demo.com', '22200000000', 0, 'cité plage - tevragh', 'nouakchott', 'Mauritanie', ''),
('CMA Mauritanie', '', '', '', '', '', '', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 30, '', '', '', ''),
('Keda Textilesdf', '', '', '', '', 'mohamed.yeslem@bktrans-sa.com', '', '', 'Opérateur', 'Fournisseur', '', '', '', '', 45, '', '', 'nice, France ', ''),
('KL Logistics', '00', 'Khaddad', 'Mr', 'Cheikh ', 'cheikh128@yahoo.com', '44626466', '00', 'Entreprise', 'Fournisseur', '00', '00', 'http://demo.com', '00', 45, 'NKC ', 'NKC', 'Mauritanie', ''),
('La Douane mauritanienne', '', '', '', '', 'contact@douane.mr', '0022245258306', '0022245256304', 'Seul opérateur', 'Fournisseur', '', '', 'http://www.douane.mr/', '0022245294577', 30, '', '', '', ''),
('MSC Mauritania', '', '', '', '', '', '0022245253628', '', 'Entreprise', 'Fournisseur', '', '', '', '0022245253787', 30, '', '', '', ''),
('Panalpina China   ', '00', 'Mr', 'Mr', 'Mr', 'Minnie.Zhang@panalpina.com', '00', '00', 'Partenaire', 'Fournisseur', '00', '00', 'http://demo.com', '00', 45, ' 6 FLOOR AZIA CENTER', 'Shanghai ', 'Chine', ''),
('Panalpina Italy', '', '', '', '', 'raffaele.iaconeta@panalpina.com', '', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 90, '', 'Milano', 'italie ', ''),
('Panalpina Transporti Mondiali SPA', '', 'Pozzi', '', 'Edoardo ', 'edoardo.pozzi@panalpina.com', '+39 0331 530 71', '', 'Partenaire', 'Fournisseur', '', '', '', '+39 0331 530 750', 30, '', '', '', ''),
('Panalpina USA', '', '', '', '', 'Narciso.Botett@panalpina.com', '+1 (201) 272 2318', '+1(201)-272-1183', 'Entreprise', 'Fournisseur', '', '', '', '', 90, '1000B Castle Road; 1', 'NYC', 'Etats Unis ', 'partenaire '),
('Port of Nouakchott', '', '', '', '', '', '+222 45251453', '', 'Seul opérateur', 'Fournisseur', '', '', '', '+222 45251794', 30, '', '', '', ''),
('Sascha Vens-Cappell ', '', '', '', '', 's.vens-cappell@alfons-koester.de', '+49/40/2 84 24-362', '', 'Entreprise', 'Fournisseur', '', '', 'http://www.alfons-koester.de', '+49/40/2 84 24-362', 0, 'Beim Strohhause 2\r\n2', 'Hamburg ', 'Allemagne ', 'partenaire '),
('SEP PORT NKC', '', '', '', '', '', '', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 30, '', '', '', ''),
('SOGECO', '00', 'MR', 'MR', 'MR', 'sogeco@sogeco.mr', '00', '00', 'Entreprise', 'Fournisseur', '00', '00', 'http://demo.com', '00', 45, 'NKC', 'NKC', 'Mauritanie', ''),
('Transiteur Bekay', '', 'Hamme Hjour', '', 'Bekay', '', '46491245', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 30, '', '', '', ''),
('Votra', '', '', '', '', '', '', '', 'Seul opérateur', 'Fournisseur', '', '', '', '', 30, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `user` varchar(20) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `Nom_tax` varchar(30) NOT NULL,
  `valeur` float NOT NULL,
  `appliquer_client` int(1) NOT NULL,
  `appliquer_fournisseur` int(1) NOT NULL,
  `CA` int(11) NOT NULL DEFAULT '0',
  `Profit` int(11) NOT NULL DEFAULT '0',
  `code_comptable` varchar(50) NOT NULL,
  PRIMARY KEY (`Nom_tax`),
  KEY `code_comptable` (`code_comptable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`Nom_tax`, `valeur`, `appliquer_client`, `appliquer_fournisseur`, `CA`, `Profit`, `code_comptable`) VALUES
('Tax  des impots', 23, 0, 0, 0, 1, 'TAXES'),
('TVA', 16, 1, 1, 0, 0, 'TAXES');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_money`
--

CREATE TABLE IF NOT EXISTS `transfer_money` (
  `id` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `compte_destination` varchar(40) NOT NULL,
  `method_paiement` varchar(40) NOT NULL,
  `num_compte` varchar(60) NOT NULL,
  `valeur` double NOT NULL,
  PRIMARY KEY (`id`,`num_compte`),
  KEY `num_compte` (`num_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type_acces` varchar(50) NOT NULL,
  `Nom_prenom` varchar(40) NOT NULL,
  `CIN` varchar(40) NOT NULL,
  `Telphone` varchar(40) NOT NULL,
  `adress` text NOT NULL,
  `avatar` text NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `Nom_Utilisateur` varchar(60) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `password`, `type_acces`, `Nom_prenom`, `CIN`, `Telphone`, `adress`, `avatar`, `occupation`, `Nom_Utilisateur`) VALUES
('amina.hamoud88@gmail.com', '2039952c42f9791ce8ce3f72fa84c00e', 'Administrateur', 'Amina', '3', '26544968', 'nouakchott', '', '', ''),
('azizachom@live.fr', 'a8b09d186468d603d3576088ce285e09', 'Administrateur', 'Bah Didi', '000000', '47220808', 'Nouakchott, Mauritanie', '', '', 'aziza2018'),
('brahim.khiyar@bktrans-sa.com', '8c30a04eec3ebca1eef11b31b8e8deb0', 'Administrateur', 'Brahim khiyar', '12345678', '0022247220660', '', '', '', ''),
('demo@gmail.com', 'd6725a452efb257481f41d0355b8037e', 'Agent_Operation', 'demo site', '02535888', '002204334830', 'NKC', '', '', 'DEMO0000'),
('mohamed.khlil@bktrans-sa.com', '1c0d3e49fbfb7f07e0221872d5248f0f', 'Agent_Operation', 'Mohamed Khlil', '00', '47874707', 'Nouakchott', '', '', ''),
('mohamedloulyef@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrateur', 'BPM', '4034638953', '00222', 'Nouakchot Mauritanie', '', '', 'mmlloulyef'),
('oumar.brahim@bktrans-sa.com', '8ed9d109e791e7dd127ff95e69aa92b4', 'Operation Manager', 'Administrateur', '12566633', '0022236608028', 'Aravat ', '', 'Operation Manager', 'Hafizmed');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE IF NOT EXISTS `user_database` (
  `database` varchar(60) NOT NULL,
  `user` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`database`, `user`) VALUES
('bktragpo_demo', 'oumar.brahim@bktrans-sa.com'),
('bktragpo_gm', 'oumar.brahim@bktrans-sa.com'),
('bktragpo_demo', 'bah.didi@bktrans-sa.com'),
('bktragpo_mr', 'bah.didi@bktrans-sa.com'),
('bktragpo_mr', 'oumar.brahim@bktrans-sa.com'),
('bktragpo_demo', 'demo@gmail.com'),
('bktragpo_mr', 'demo@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vueinvoicetotale`
--
CREATE TABLE IF NOT EXISTS `vueinvoicetotale` (
`facture` varchar(60)
,`ClientFacture` varchar(50)
,`DossierFacture` varchar(60)
,`TOTAL` double
,`monnaie` varchar(60)
,`operation` varchar(40)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vuepurchasetotale`
--
CREATE TABLE IF NOT EXISTS `vuepurchasetotale` (
`BonCommande` varchar(30)
,`FournisseurCommande` varchar(50)
,`DossierCommande` varchar(30)
,`TOTAL_COM` double
,`monnaie` varchar(30)
,`OperationCommande` varchar(40)
);
-- --------------------------------------------------------

--
-- Structure for view `finalinvoice`
--
DROP TABLE IF EXISTS `finalinvoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `finalinvoice` AS (select `element_invoice`.`id` AS `id_element`,`element_invoice`.`Reference` AS `facture`,`element_invoice`.`Description` AS `description`,`element_invoice`.`Quantite` AS `quantite`,`element_invoice`.`Prix` AS `prix`,(`element_invoice`.`Quantite` * `element_invoice`.`Prix`) AS `Net`,(((`element_invoice`.`Quantite` * `element_invoice`.`Prix`) * `element_invoice`.`TVA`) / 100) AS `tva`,(((`element_invoice`.`Quantite` * `element_invoice`.`Prix`) + (((`element_invoice`.`Quantite` * `element_invoice`.`Prix`) * `element_invoice`.`TVA`) / 100)) * `element_invoice`.`devis`) AS `TotalElement`,`element_invoice`.`Monnaie` AS `monnaie`,`element_invoice`.`devis` AS `devise`,`invoice`.`Ref_operration` AS `operation`,`invoice`.`client` AS `ClientFacture`,`invoice`.`Reference` AS `DossierFacture`,`invoice`.`date_lancement` AS `date_c`,`element_invoice`.`code` AS `code`,`invoice`.`Taux` AS `taux`,`invoice`.`draft` AS `draft`,`invoice`.`Date_paiment` AS `date_p`,`invoice`.`etat_payement` AS `Pay` from (`element_invoice` join `invoice`) where (`invoice`.`id_facture` = `element_invoice`.`Reference`));

-- --------------------------------------------------------

--
-- Structure for view `finaloffre2`
--
DROP TABLE IF EXISTS `finaloffre2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `finaloffre2` AS (select `element_offre`.`id` AS `id_element`,`element_offre`.`Reference` AS `id_offre`,`element_offre`.`Description` AS `description`,`element_offre`.`Quantite` AS `quantite`,`element_offre`.`Prix` AS `prix`,(`element_offre`.`Quantite` * `element_offre`.`Prix`) AS `Net`,(((`element_offre`.`Quantite` * `element_offre`.`Prix`) * `element_offre`.`TVA`) / 100) AS `tva`,(((`element_offre`.`Quantite` * `element_offre`.`Prix`) + (((`element_offre`.`Quantite` * `element_offre`.`Prix`) * `element_offre`.`TVA`) / 100)) * `element_offre`.`devis`) AS `TotalElement`,`element_offre`.`Monnaie` AS `monnaie`,`element_offre`.`devis` AS `devise`,`offre`.`client` AS `ClientOffre` from (`element_offre` join `offre`) where (`offre`.`id_offre` = `element_offre`.`Reference`));

-- --------------------------------------------------------

--
-- Structure for view `finalpurchase`
--
DROP TABLE IF EXISTS `finalpurchase`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `finalpurchase` AS (select `element_purchase`.`reference` AS `BonCommande`,`element_purchase`.`designation` AS `designation`,`element_purchase`.`quantite` AS `quantite`,`element_purchase`.`prix_unitaire` AS `prix_unitaire`,(`element_purchase`.`quantite` * `element_purchase`.`prix_unitaire`) AS `Net_Paye`,(((`element_purchase`.`quantite` * `element_purchase`.`prix_unitaire`) * `element_purchase`.`tva`) / 100) AS `tva`,`element_purchase`.`devise` AS `DeviseElement`,(((`element_purchase`.`quantite` * `element_purchase`.`prix_unitaire`) + (((`element_purchase`.`quantite` * `element_purchase`.`prix_unitaire`) * `element_purchase`.`tva`) / 100)) * `element_purchase`.`devise`) AS `Total`,`purchase`.`type_de_monnaie` AS `MonnaieCommande`,`purchase`.`def_monnaie` AS `MonnaieDefaut`,`purchase`.`Taux_monnaie_def` AS `TauxMonnaieDefaut`,`purchase`.`fournisseur` AS `FournisseurCommande`,`purchase`.`dossiers` AS `DossierCommande`,`purchase`.`operation` AS `OperationCommande`,`purchase`.`date_commande` AS `date_c`,`element_purchase`.`code_comptable` AS `code`,`purchase`.`Taux_monnaie_def` AS `taux`,`purchase`.`date_echeance` AS `date_p`,`purchase`.`etat_paiement` AS `Pay`,`purchase`.`etat_commande` AS `Livraison` from (`purchase` join `element_purchase`) where (`purchase`.`reference` = `element_purchase`.`reference`));

-- --------------------------------------------------------

--
-- Structure for view `operation`
--
DROP TABLE IF EXISTS `operation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `operation` AS (select `export`.`id` AS `id`,`export`.`Ref_doss` AS `Ref_doss`,`export`.`client` AS `client`,`export`.`ETA` AS `ETA`,`export`.`ETD` AS `ETD`,`export`.`Origine` AS `origine`,`export`.`Destination` AS `destination`,`export`.`type_operation` AS `type_operation`,`export`.`tble` AS `tble`,`export`.`Invoicing` AS `invoicing`,`export`.`type` AS `type`,`export`.`Date` AS `Date` from `export`) union (select `import`.`id` AS `id`,`import`.`Ref_doss` AS `Ref_doss`,`import`.`client` AS `client`,`import`.`ETA` AS `ETA`,`import`.`ETD` AS `ETD`,`import`.`Origine` AS `origine`,`import`.`Destination` AS `destination`,`import`.`type_operation` AS `type_operation`,`import`.`tble` AS `tble`,`import`.`Invoicing` AS `invoicing`,`import`.`type` AS `type`,`import`.`Date` AS `Date` from `import`);

-- --------------------------------------------------------

--
-- Structure for view `vueinvoicetotale`
--
DROP TABLE IF EXISTS `vueinvoicetotale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinvoicetotale` AS (select `finalinvoice`.`facture` AS `facture`,`finalinvoice`.`ClientFacture` AS `ClientFacture`,`finalinvoice`.`DossierFacture` AS `DossierFacture`,sum(`finalinvoice`.`TotalElement`) AS `TOTAL`,`finalinvoice`.`monnaie` AS `monnaie`,`finalinvoice`.`operation` AS `operation` from `finalinvoice` group by `finalinvoice`.`facture`);

-- --------------------------------------------------------

--
-- Structure for view `vuepurchasetotale`
--
DROP TABLE IF EXISTS `vuepurchasetotale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepurchasetotale` AS (select `finalpurchase`.`BonCommande` AS `BonCommande`,`finalpurchase`.`FournisseurCommande` AS `FournisseurCommande`,`finalpurchase`.`DossierCommande` AS `DossierCommande`,sum(`finalpurchase`.`Total`) AS `TOTAL_COM`,`finalpurchase`.`MonnaieCommande` AS `monnaie`,`finalpurchase`.`OperationCommande` AS `OperationCommande` from `finalpurchase` group by `finalpurchase`.`BonCommande`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocate_paiment_invoice`
--
ALTER TABLE `allocate_paiment_invoice`
  ADD CONSTRAINT `allocate_paiment_invoice_ibfk_1` FOREIGN KEY (`id_balance`) REFERENCES `money` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `allocate_paiment_purchase`
--
ALTER TABLE `allocate_paiment_purchase`
  ADD CONSTRAINT `allocate_paiment_purchase_ibfk_1` FOREIGN KEY (`id_balance`) REFERENCES `money` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attach_invoice`
--
ALTER TABLE `attach_invoice`
  ADD CONSTRAINT `attach_invoice_ibfk_1` FOREIGN KEY (`Ref_facture`) REFERENCES `invoice` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `balance_invoice`
--
ALTER TABLE `balance_invoice`
  ADD CONSTRAINT `balance_invoice_ibfk_1` FOREIGN KEY (`id_balance`) REFERENCES `balance_invoice_purchase` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `balance_purchase`
--
ALTER TABLE `balance_purchase`
  ADD CONSTRAINT `balance_purchase_ibfk_1` FOREIGN KEY (`id_balance`) REFERENCES `balance_invoice_purchase` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD CONSTRAINT `bank_account_ibfk_1` FOREIGN KEY (`code_comptable`) REFERENCES `codes` (`Nom_Code`);

--
-- Constraints for table `contactclient`
--
ALTER TABLE `contactclient`
  ADD CONSTRAINT `contactclient_ibfk_1` FOREIGN KEY (`client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contactfournisseur`
--
ALTER TABLE `contactfournisseur`
  ADD CONSTRAINT `contactfournisseur_ibfk_1` FOREIGN KEY (`fournisseur`) REFERENCES `supplier` (`Nom_Soc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `costs_value`
--
ALTER TABLE `costs_value`
  ADD CONSTRAINT `nb` FOREIGN KEY (`Numro`) REFERENCES `default_billing` (`nb`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Nom_Soc` FOREIGN KEY (`client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detaile_journal`
--
ALTER TABLE `detaile_journal`
  ADD CONSTRAINT `detaile_journal_ibfk_1` FOREIGN KEY (`id_journal`) REFERENCES `journal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `element_invoice`
--
ALTER TABLE `element_invoice`
  ADD CONSTRAINT `element_invoice_ibfk_1` FOREIGN KEY (`Reference`) REFERENCES `invoice` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `element_offre`
--
ALTER TABLE `element_offre`
  ADD CONSTRAINT `element_offre_ibfk_1` FOREIGN KEY (`Reference`) REFERENCES `offre` (`id_offre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `element_purchase`
--
ALTER TABLE `element_purchase`
  ADD CONSTRAINT `element_purchase_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `purchase` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `estimated_costs`
--
ALTER TABLE `estimated_costs`
  ADD CONSTRAINT `estimated_costs_ibfk_1` FOREIGN KEY (`Reference`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `export_ibfk_1` FOREIGN KEY (`Ref_doss`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`Ref_doss`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `import_ibfk_2` FOREIGN KEY (`client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`periode`) REFERENCES `financial_period` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_4` FOREIGN KEY (`client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_5` FOREIGN KEY (`Reference`) REFERENCES `files` (`Reference`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`Dossier`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `location_ibfk_4` FOREIGN KEY (`Equipment`) REFERENCES `equipment` (`Num`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `logistics_services`
--
ALTER TABLE `logistics_services`
  ADD CONSTRAINT `logistics_services_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `logistics_services_ibfk_2` FOREIGN KEY (`Dossier`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `magasinage`
--
ALTER TABLE `magasinage`
  ADD CONSTRAINT `magasinage_ibfk_1` FOREIGN KEY (`Client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `magasinage_ibfk_2` FOREIGN KEY (`Dossier`) REFERENCES `files` (`Reference`) ON DELETE CASCADE;

--
-- Constraints for table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_ibfk_1` FOREIGN KEY (`num_compte`) REFERENCES `bank_account` (`Numero_Compte`) ON UPDATE CASCADE;

--
-- Constraints for table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`id_facture`) REFERENCES `invoice` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offre_ibfk_2` FOREIGN KEY (`client`) REFERENCES `custemer` (`Nom_Soc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paiment_salaire`
--
ALTER TABLE `paiment_salaire`
  ADD CONSTRAINT `paiment_salaire_ibfk_1` FOREIGN KEY (`Banque`) REFERENCES `bank_account` (`Numero_Compte`) ON UPDATE CASCADE;

--
-- Constraints for table `payment_tax_invoice`
--
ALTER TABLE `payment_tax_invoice`
  ADD CONSTRAINT `payment_tax_invoice_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `payement_tax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_tax_purchase`
--
ALTER TABLE `payment_tax_purchase`
  ADD CONSTRAINT `payment_tax_purchase_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `payement_tax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `personel_ibfk_1` FOREIGN KEY (`code_comptable`) REFERENCES `codes` (`Nom_Code`);

--
-- Constraints for table `piece_export`
--
ALTER TABLE `piece_export`
  ADD CONSTRAINT `piece_export_ibfk_1` FOREIGN KEY (`id_operation`) REFERENCES `export` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piece_import`
--
ALTER TABLE `piece_import`
  ADD CONSTRAINT `piece_import_ibfk_1` FOREIGN KEY (`id_operation`) REFERENCES `import` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `piece_offre`
--
ALTER TABLE `piece_offre`
  ADD CONSTRAINT `piece_offre_ibfk_1` FOREIGN KEY (`id_operation`) REFERENCES `offre` (`id_offre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`dossiers`) REFERENCES `files` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_4` FOREIGN KEY (`fournisseur`) REFERENCES `supplier` (`Nom_Soc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_5` FOREIGN KEY (`periode`) REFERENCES `financial_period` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `salaire_payer`
--
ALTER TABLE `salaire_payer`
  ADD CONSTRAINT `salaire_payer_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `paiment_salaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salaried`
--
ALTER TABLE `salaried`
  ADD CONSTRAINT `salaried_ibfk_1` FOREIGN KEY (`CIN`) REFERENCES `personel` (`CIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transfer_money`
--
ALTER TABLE `transfer_money`
  ADD CONSTRAINT `transfer_money_ibfk_1` FOREIGN KEY (`num_compte`) REFERENCES `bank_account` (`Numero_Compte`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
