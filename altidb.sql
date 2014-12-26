-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2014 at 01:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `altidb`
--
CREATE DATABASE IF NOT EXISTS `altidb` DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci;
USE `altidb`;

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

CREATE TABLE IF NOT EXISTS `basicinfo` (
  `userid` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `lastname` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `birthdate` date NOT NULL,
  `phone` int(12) NOT NULL,
  `mail` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`userid`,`id_fk`),
  KEY `id_fk` (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `ime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `rodj` varchar(15) COLLATE utf8_croatian_ci NOT NULL,
  `zanimanje` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `html` int(5) NOT NULL,
  `css` int(5) NOT NULL,
  `ai` int(5) NOT NULL,
  `ps` int(5) NOT NULL,
  `email` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `web` varchar(50) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ime`, `rodj`, `zanimanje`, `html`, `css`, `ai`, `ps`, `email`, `prezime`, `web`) VALUES
('Nikola', '08.03.1990', '', 30, 0, 0, 0, '', '', ''),
('Nikola', '08.03.1990', '', 30, 0, 0, 0, '', '', ''),
('Nikola', '08.03.1990', '', 30, 0, 0, 0, '', '', ''),
('Nikola', '08.03.1990', '', 30, 0, 0, 0, '', '', ''),
('Nikola', '08.03.1990', '', 20, 0, 0, 0, '', '', ''),
('Nikola', '08.03.1990', '', 30, 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE IF NOT EXISTS `extras` (
  `id_fk` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `fildwork` tinyint(1) DEFAULT NULL,
  `remotework` tinyint(1) DEFAULT NULL,
  `invalidity` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fk` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fk` (`id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=203 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `id_fk`, `name`) VALUES
(1, 1, 'Arhitektonski fakultet'),
(2, 1, 'Biološki fakultet'),
(3, 1, 'Ekonomski fakultet'),
(4, 1, 'Elektrotehnički fakultet'),
(5, 1, 'Fakultet bezbednosti'),
(6, 1, 'Fakultet organizacionih nauka'),
(7, 1, 'Fakultet političkih nauka'),
(8, 1, 'Fakultet sporta i fizičkog vaspitanja'),
(9, 1, 'Fakultet veterinarske medicine'),
(10, 1, 'Fakultet za fizičku hemiju'),
(11, 1, 'Fakultet za specijalnu edukaciju i rehabilitaciju'),
(12, 1, 'Farmaceutski fakultet'),
(13, 1, 'Filološki fakultet'),
(14, 1, 'Filozofski fakultet'),
(15, 1, 'Fizički fakultet'),
(16, 1, 'Geografski fakultet'),
(17, 1, 'Građevinski fakultet'),
(18, 1, 'Hemijski fakultet'),
(19, 1, 'Mašinski fakultet'),
(20, 1, 'Matematički fakultet'),
(21, 1, 'Medicinski fakultet'),
(22, 1, 'Poljoprivredni fakultet'),
(23, 1, 'Pravni fakultet'),
(24, 1, 'Pravoslavni bogoslovski fakultet'),
(25, 1, 'Rudarsko-geološki fakultet'),
(26, 1, 'Saobraćajni fakultet'),
(27, 1, 'Stomatološki fakultet'),
(28, 1, 'Šumarski fakultet'),
(29, 1, 'Tehnički fakultet u Boru'),
(30, 1, 'Tehnološko-metalurški fakultet'),
(31, 1, 'Učiteljski fakultet'),
(32, 2, 'Fakultet dramskih umetnosti'),
(33, 2, 'Fakultet likovnih umetnosti'),
(34, 2, 'Fakultet muzičke umetnosti'),
(35, 2, 'Fakultet primenjenih umetnosti'),
(36, 3, 'Fakultet scenskih i primenjenih umetnosti'),
(37, 4, 'Akademija umetnosti'),
(38, 4, 'Ekonomski fakultet'),
(39, 4, 'Fakultet sporta i fizičkog vaspitanja'),
(40, 4, 'Fakultet tehničkih nauka'),
(41, 4, 'Filozofski fakultet'),
(42, 4, 'Građevinski fakultet'),
(43, 4, 'Medicinski fakultet'),
(44, 4, 'Pedagoški fakultet'),
(45, 4, 'Poljoprivredni fakultet'),
(46, 4, 'Pravni fakultet'),
(47, 4, 'Prirodno-matematički fakultet'),
(48, 4, 'Tehnički fakultet „Mihajlo Pupin“'),
(49, 4, 'Tehnološki fakultet'),
(50, 4, 'Pedagoški fakultet u Somboru'),
(52, 5, 'Ekonomski fakultet'),
(53, 5, 'Elektronski fakultet'),
(54, 5, 'Fakultet sporta i fizičkog vaspitanja'),
(55, 5, 'Fakultet umetnosti'),
(56, 5, 'Fakultet zaštite na radu'),
(57, 5, 'Filozofski fakultet'),
(58, 5, 'Građevinsko-arhitektonski fakultet'),
(59, 5, 'Mašinski fakultet'),
(60, 5, 'Medicinski fakultet'),
(61, 5, 'Pravni fakultet'),
(62, 5, 'Prirodno-matematički fakultet'),
(63, 5, 'Tehnološki fakultet'),
(64, 5, 'Učiteljski fakultet'),
(65, 6, 'Agronomski fakultet'),
(66, 6, 'Ekonomski fakultet'),
(67, 6, 'Filološko-umetnički fakultet'),
(68, 6, 'Mašinski fakultet u Kragujevcu'),
(69, 6, 'Mašinki fakultet u Kraljevu'),
(70, 6, 'Medicinski fakultet'),
(71, 6, 'Pedagoški fakultet'),
(72, 6, 'Pravni fakultet'),
(73, 6, 'Prirodno-matematički fakultet'),
(74, 6, 'Tehnički fakultet'),
(75, 6, 'Učiteljski fakultet'),
(76, 7, 'Departman za biohemijske i medicinske nauke'),
(77, 7, 'Departman za filozofsko-filološke nauke'),
(78, 8, 'Vojna akademija'),
(79, 8, 'Medicinski fakultet vojnomedicinske akademije'),
(85, 9, 'Ekonomski fakultet'),
(86, 9, 'Fakultet tehničkih nauka'),
(87, 9, 'Fakultet umetnosti'),
(88, 9, 'Fakultet za sport i fizičko vaspitanje'),
(89, 9, 'Filozofski fakultet'),
(90, 9, 'Medicinski fakultet'),
(91, 9, 'Poljoprivredni fakultet'),
(92, 9, 'Pravni fakultet'),
(93, 9, 'Prirodno-matematički fakultet'),
(94, 9, 'Učiteljski fakultet'),
(95, 9, 'International Business College Mitrovica'),
(96, 10, 'Akademija za estetiku i kozmetologiju'),
(97, 10, 'Beogradska Poslovna Škola – Visoka Škola Strukovnih Studija'),
(98, 10, 'Visoka Građevinsko – Geodetska Škola Strukovnih Studija'),
(99, 10, 'Visoka Hotelijerska Škola'),
(100, 10, 'Visoka Inženjerska Škola Strukovnih Studija Tehnikum Taurunum'),
(101, 10, 'Visoka Medicinska Škola Strukovnih Studija „Milutin Milankov'),
(102, 10, 'Visoka sportska i zdravstvena škola- Beograd'),
(103, 10, 'Visoka Strukovna Škola za Preduzetništvo'),
(104, 10, 'Visoka Strukovna Škola za Propagandu i Odnose sa Javnošću'),
(105, 10, 'Visoka Škola Elektrotehnike i Računarstva Strukovnih Studija'),
(106, 10, 'Visoka Škola Likovnih i Primenjenih Umetnosti Strukovnih Studija'),
(107, 10, 'Visoka Škola Strukovnih Studija Beogradska Politehnika'),
(108, 10, 'Visoka Škola Strukovnih Studija za Informacione Tehnologije'),
(109, 10, 'Visoka Škola Strukovnih Studija za Menadžment u Saobracaju - Niš '),
(110, 10, 'Visoka Škola Vojnomedicinske Akademije'),
(111, 10, 'Visoka Škola za Informacione i Komunikacione Tehnologije Strukovnih Studija'),
(112, 10, 'Visoka škola za informacione tehnologije računarski dizajn i savremeno poslovanje'),
(113, 10, 'Visoka Škola za Poslovnu Ekonomiju i Preduzetništvo'),
(114, 10, 'Visoka Škola za Projektni Menadžment'),
(115, 10, 'Visoka Škola za Računovodstveno i Berzansko Poslovanje'),
(116, 10, 'Visoka Tehnička Škola Strukovnih Studija'),
(117, 10, 'Visoka Tekstilna Strukovna Škola za Dizajn Tehnologiju i Menadžment'),
(118, 10, 'Visoka Turistička Škola Strukovnih Studija'),
(119, 10, 'Visoka Zdravstvena Škola Strukovnih Studija'),
(120, 10, 'Visoka Zdravstvenosanitarna Škola Strukovnih Studija – Visan'),
(121, 10, 'Visoka Železnička Škola'),
(122, 10, 'Akademija Fudbala – Visoka Škola Strukovnih Studija'),
(123, 11, 'Kriminalističko policijska akademija'),
(124, 12, 'Fakultet informacionih tehnologija'),
(125, 12, 'Fakultet za trgovinu i bankarstvo'),
(126, 12, 'Fakultet za menadžment u sportu'),
(127, 12, 'Akademija umetnosti'),
(128, 12, 'Fakultet za ekonomiju i političke nauke'),
(129, 12, 'Fakultet za strane jezike'),
(130, 12, 'Fakultet za inženjerski menadžment'),
(131, 13, 'Evropski Univerzitet Zlatibor'),
(132, 13, 'Fakultet za inženjerski internacionalni menadžment '),
(133, 13, 'Fakultet za evropski biznis i marketing'),
(134, 13, 'Farmaceutski fakultet'),
(135, 13, 'NOVA akademija umetnosti'),
(136, 14, 'Filološke nauke'),
(137, 14, 'Prirodno-tehničke nauke'),
(138, 14, 'Pedagoško-psihološke nauke'),
(139, 14, 'Pravne nauke'),
(140, 14, 'Ekonomske nauke'),
(141, 14, 'Umetnost'),
(142, 15, 'Fakultet za poslovne studije – Beograd'),
(143, 15, 'Fakultet za međunarodnu ekonomiju – Beograd'),
(144, 15, 'Fakultet za kulturu i medije – Beograd'),
(145, 15, 'Fakultet za državnu upravu i administraciju – Beograd'),
(146, 15, 'Fakultet za umetnost i dizajn – Beograd'),
(147, 15, 'Fakultet za kompjuterske nauke – Beograd'),
(148, 15, 'Fakultet za menadžment – Zaječar'),
(149, 15, 'Fakultet za poslovne studije – Požarevac'),
(150, 15, 'Fakultet za poslovnu ekonomiju – Valjevo'),
(151, 15, 'Fakultet za poslovne studije – Vršac'),
(152, 15, 'Fakultet za biofarming – Bačka Topola'),
(153, 15, 'Visoka poslovna škola „Megatrend“ – strukovne studije – Beograd'),
(154, 15, 'Visoka škola za košarku „Borislav Stanković“ – strukovne studije - Beograd'),
(155, 15, 'Visoka škola za menadžment i biznis – strukovne studije – Zaječar'),
(156, 15, 'Megatrend virtuelni univerzitet MTVU'),
(157, 16, 'Saobraćajni fakultet'),
(158, 16, 'Fakultet filoloskih nauka'),
(159, 16, 'Fakultet poslovne ekonomije'),
(160, 16, 'Fakultet informacionih tehnologija'),
(161, 16, 'Fakultet zdravstvenih nauka'),
(162, 16, 'Fakultet pravnih nauka'),
(163, 16, 'Fakultet sportskih nauka'),
(164, 17, 'Fakultet poslovne ekonomije'),
(165, 17, 'Fakultet zaštite životne sredine'),
(166, 17, 'Fakultet za primenjenu bezbednost'),
(167, 17, 'Fakultet za digitalnu produkciju'),
(168, 17, 'Akademija klasičnog slikarstva'),
(169, 17, 'Fakultet ekološke poljoprivrede'),
(170, 17, 'Fakultet za uslužni biznis'),
(171, 17, 'Fakultet za sport i turizam – TIMS'),
(172, 17, 'Fakultet za evropske pravno-političke studije'),
(173, 18, 'Fakultet informacionih tehnologija (integrisan)'),
(174, 18, 'Fakultet digitalnih umetnosti (integrisan)'),
(175, 18, 'Fakultet za menadžment (integrisan)'),
(176, 19, 'Pravni fakultet za privredu i pravosuđe'),
(177, 19, 'Fakultet za ekonomiju i inženjerski menadžment'),
(178, 19, 'Stomatološki fakultet'),
(179, 19, 'Fakultet za menadžment malih i srednjih preduzeća'),
(180, 20, 'Poslovni fakultet'),
(181, 20, 'Fakultet za turistički i hotelijerski menadžment'),
(182, 20, 'Fakultet za informatiku i računarstvo'),
(183, 20, 'Tehnički fakultet'),
(184, 20, 'Poslovni fakultet u Valjevu'),
(185, 20, 'Fakultet za ekonomiju finansije i administraciju (FEFA)'),
(186, 20, 'Fakultet za medije i komunikaciju (FMK)'),
(187, 20, 'Fakultet za primenjenu ekologiju (FUTURA)'),
(188, 20, 'Autrian-Serbian Tourism Bachelor Program (English)'),
(189, 21, 'Akademija lepih umetnosti'),
(190, 21, 'Beogradska bankarska akademija – Fakultet za bankarstvo osiguranje i finansije'),
(191, 21, 'Fakultet za poslovno industrijski menadžment Mladenovac'),
(192, 21, 'Fakultet za pravne i poslovne studije'),
(193, 21, 'Pravni fakultet Univerziteta Union'),
(194, 21, 'Računarski fakultet'),
(195, 22, 'Fakultet za graditeljski menadžment'),
(196, 22, 'Fakultet za menadžment nekretnina'),
(197, 22, 'Fakultet za poslovne studije i pravo'),
(198, 22, 'Fakultet za preduzetnički biznis'),
(199, 22, 'Fakultet za sport'),
(200, 22, 'Fakultet za strateški i operativni menadžment'),
(201, 22, 'Fakultet za primenjeni menadžment ekonomiju i finansije- Uni. priv. akad.'),
(202, 22, 'Fakultet za ekologiju i zaštitu životne sredine');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id_fk` int(11) NOT NULL,
  `cv` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unis`
--

CREATE TABLE IF NOT EXISTS `unis` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `unis`
--

INSERT INTO `unis` (`id`, `name`) VALUES
(1, 'Univerzitet u Beogradu'),
(2, 'Univerzitet umetnosti u Beogradu'),
(3, 'Akademija Lepih Umetnosti'),
(4, 'Univerzitet u Novom Sadu'),
(5, 'Univerzitet u Nišu'),
(6, 'Univerzitet u Kragujevcu'),
(7, 'Univerzitet u Novom Pazaru'),
(8, 'Univerzitet odbrane'),
(9, 'Univerzitet u Prištini sa trenutnim sedištem u Kosovskoj Mitrovici'),
(10, 'Visoke škole strukovnih studija'),
(11, 'Kriminalističko Policijska Akademija'),
(12, 'Alfa Univerzitet'),
(13, 'Evropski univerzitet'),
(14, 'Internacionalni univerzitet u Novom Pazaru'),
(15, 'Megatrend Univerzitet'),
(16, 'Panevropski univerzitet Apeiron'),
(17, 'Univerzitet Educons'),
(18, 'Univerzitet Metropolitan'),
(19, 'Univerzitet Privredna akademija'),
(20, 'Univerzitet Singidunum'),
(21, 'Univerzitet Union'),
(22, 'Univerzitet UNION – Nikola Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `edulevel`
--

CREATE TABLE IF NOT EXISTS `edulevel` (
  `id` int(5) NOT NULL,
  `name` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci COMMENT='Tabela sa imenima nivoa strucne spreme';

--
-- Dumping data for table `edulevel`
--

INSERT INTO `edulevel` (`id`, `name`) VALUES
(1, 'III stepen - trogodišnja srednja skola'),
(2, 'IV stepen - četvorogodišnja srednja škol'),
(3, 'VI-1 stepen - trogodišnje strukovne stud'),
(4, 'VI-2 stepen - trogodišnje akademske stud'),
(5, 'VII-1a stepen - četvorogodišnje akademsk'),
(6, 'VII-1b stepen - master studije'),
(7, 'VII-2 stepen - magistarske studije'),
(8, 'VIII stepen - doktorske studije studije');

-- --------------------------------------------------------

--
-- Table structure for table `highschool`
--

CREATE TABLE IF NOT EXISTS `highschool` (
  `id_fk` int(11) NOT NULL,
  `field` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `smer` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hstypes`
--

CREATE TABLE IF NOT EXISTS `hstypes` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(5) NOT NULL,
  `name` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci COMMENT='Tabela sa imenima profesija';

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `name`) VALUES
(1, 'Administrativni tehničar (birotehničar)'),
(2, 'Agroekonomski tehničar'),
(3, 'Alatničar'),
(4, 'Automehaničar'),
(5, 'Autosaobraćajni tehničar'),
(6, 'Bravar'),
(7, 'Daktilograf'),
(8, 'Dipl. ing. arhitekture'),
(9, 'Dipl. ing. za menadžment'),
(10, 'Dipl. ing. melioracije'),
(11, 'Dipl. ing. organizacije za informacione '),
(12, 'Dipl. ing. poljoprivrede'),
(13, 'Dipl. ing. prehrambene tehnologije'),
(14, 'Dipl. ing. ratarstva i povrtarstva'),
(15, 'Dipl. ing. stočarstva'),
(16, 'Dipl. ing. tehnologije'),
(17, 'Dipl. ing. za zaštitu na radu'),
(18, 'Diplomirani agroekonomista'),
(19, 'Diplomirani biolog'),
(20, 'Diplomirani ekonomista'),
(21, 'Diplomirani farmaceut'),
(22, 'Diplomirani filolog'),
(23, 'Diplomirani filozof'),
(24, 'Diplomirani geograf'),
(25, 'Diplomirani građevinski inženjer'),
(26, 'Diplomirani hemičar'),
(27, 'Diplomirani inženjer organizacionih nauk'),
(28, 'Diplomirani mašinski inženjer'),
(29, 'Diplomirani politikolog'),
(30, 'Diplomirani pravnik'),
(31, 'Diplomirani psiholog'),
(32, 'Diplomirani saobraćajni inženjer'),
(33, 'Diplomirani socijalni radnik'),
(34, 'Diplomirani sociolog'),
(35, 'Diplomirani stomatolog'),
(36, 'Diplomirani turizmolog'),
(37, 'Diplomirani veterinar'),
(38, 'Dizajner'),
(39, 'Doktor medicine'),
(40, 'Ekonomski tehničar'),
(41, 'Električar'),
(42, 'Elektromehaničar'),
(43, 'Elektromehaničar za termičke i rashladne'),
(44, 'Elektrotehničar'),
(45, 'Farmaceutski tehničar'),
(46, 'Finansijski tehničar'),
(47, 'Grafički dizajner'),
(48, 'Građevinski tehničar'),
(49, 'Hemijski laborant'),
(50, 'Hemijski tehničar'),
(51, 'Informatičar'),
(52, 'Inženjer organizacionih nauka'),
(53, 'Inženjer saobraćaja'),
(54, 'Knjigovođa'),
(55, 'Komercijalni tehničar'),
(56, 'Komjuterski tehničar'),
(57, 'Magacinski radnik'),
(58, 'Magistar ekonomije'),
(59, 'Magistar poljoprivrede'),
(60, 'Mašinbravar'),
(61, 'Mašinski inženjer'),
(62, 'Mašinski tehničar'),
(63, 'Mašinski tehničar za kompjutersko konstr'),
(64, 'Maturant gimnazije'),
(65, 'Mehaničar'),
(66, 'Mesar'),
(67, 'Operater na računaru'),
(68, 'Osnovna škola'),
(69, 'Ostalo'),
(70, 'Pogonski tehničar'),
(71, 'Poljoprivredni tehničar'),
(72, 'Poslovni sekretar'),
(73, 'Pravni tehničar'),
(74, 'Prehrambeni tehničar'),
(75, 'Programer'),
(76, 'Računovodstveni tehničar'),
(77, 'Saobraćajni tehničar'),
(78, 'Serviser rashladnih uređaja'),
(79, 'Stomatološki tehničar'),
(80, 'Trgovac'),
(81, 'Turistički tehničar'),
(82, 'Vozač');

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `workexp1`
--

CREATE TABLE IF NOT EXISTS `workexp1` (
  `id_fk` int(11) NOT NULL,
  `employer` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `od` date DEFAULT NULL,
  `do` date DEFAULT NULL,
  `position` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `about` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workexp2`
--

CREATE TABLE IF NOT EXISTS `workexp2` (
  `id_fk` int(11) NOT NULL,
  `employer` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `od` date DEFAULT NULL,
  `do` date DEFAULT NULL,
  `position` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `about` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workexp3`
--

CREATE TABLE IF NOT EXISTS `workexp3` (
  `id_fk` int(11) NOT NULL,
  `employer` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `od` date DEFAULT NULL,
  `do` date DEFAULT NULL,
  `position` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `about` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workexp4`
--

CREATE TABLE IF NOT EXISTS `workexp4` (
  `id_fk` int(11) NOT NULL,
  `employer` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `od` date DEFAULT NULL,
  `do` date DEFAULT NULL,
  `position` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `about` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD CONSTRAINT `basicinfo_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `extras`
--
ALTER TABLE `extras`
  ADD CONSTRAINT `extras_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `unis` (`id`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `workexp1`
--
ALTER TABLE `workexp1`
  ADD CONSTRAINT `workexp1_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `workexp2`
--
ALTER TABLE `workexp2`
  ADD CONSTRAINT `workexp2_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `workexp3`
--
ALTER TABLE `workexp3`
  ADD CONSTRAINT `workexp3_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `workexp4`
--
ALTER TABLE `workexp4`
  ADD CONSTRAINT `workexp4_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
