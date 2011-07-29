-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2011 at 03:21 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moasis_sga`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 358),
(2, 1, NULL, NULL, 'Pages', 2, 17),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 2, NULL, NULL, 'build_acl', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'index', 11, 12),
(8, 2, NULL, NULL, 'view', 13, 14),
(9, 2, NULL, NULL, 'delete', 15, 16),
(10, 1, NULL, NULL, 'Aros', 18, 31),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 10, NULL, NULL, 'build_acl', 29, 30),
(17, 1, NULL, NULL, 'Groups', 32, 45),
(18, 17, NULL, NULL, 'index', 33, 34),
(19, 17, NULL, NULL, 'view', 35, 36),
(20, 17, NULL, NULL, 'add', 37, 38),
(21, 17, NULL, NULL, 'edit', 39, 40),
(22, 17, NULL, NULL, 'delete', 41, 42),
(23, 17, NULL, NULL, 'build_acl', 43, 44),
(24, 1, NULL, NULL, 'T0002funcionarios', 46, 59),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(30, 24, NULL, NULL, 'build_acl', 57, 58),
(31, 1, NULL, NULL, 'T0003cursos', 60, 73),
(32, 31, NULL, NULL, 'index', 61, 62),
(33, 31, NULL, NULL, 'view', 63, 64),
(34, 31, NULL, NULL, 'add', 65, 66),
(35, 31, NULL, NULL, 'edit', 67, 68),
(36, 31, NULL, NULL, 'delete', 69, 70),
(37, 31, NULL, NULL, 'build_acl', 71, 72),
(38, 1, NULL, NULL, 'T0004disciplinas', 74, 87),
(39, 38, NULL, NULL, 'index', 75, 76),
(40, 38, NULL, NULL, 'view', 77, 78),
(41, 38, NULL, NULL, 'add', 79, 80),
(42, 38, NULL, NULL, 'edit', 81, 82),
(43, 38, NULL, NULL, 'delete', 83, 84),
(44, 38, NULL, NULL, 'build_acl', 85, 86),
(45, 1, NULL, NULL, 'T0005planoestudos', 88, 101),
(46, 45, NULL, NULL, 'index', 89, 90),
(47, 45, NULL, NULL, 'view', 91, 92),
(48, 45, NULL, NULL, 'add', 93, 94),
(49, 45, NULL, NULL, 'edit', 95, 96),
(50, 45, NULL, NULL, 'delete', 97, 98),
(51, 45, NULL, NULL, 'build_acl', 99, 100),
(52, 1, NULL, NULL, 'T0006planoestudoanos', 102, 115),
(53, 52, NULL, NULL, 'index', 103, 104),
(54, 52, NULL, NULL, 'view', 105, 106),
(55, 52, NULL, NULL, 'add', 107, 108),
(56, 52, NULL, NULL, 'edit', 109, 110),
(57, 52, NULL, NULL, 'delete', 111, 112),
(58, 52, NULL, NULL, 'build_acl', 113, 114),
(59, 1, NULL, NULL, 'T0007grupodisciplinas', 116, 129),
(60, 59, NULL, NULL, 'index', 117, 118),
(61, 59, NULL, NULL, 'view', 119, 120),
(62, 59, NULL, NULL, 'add', 121, 122),
(63, 59, NULL, NULL, 'edit', 123, 124),
(64, 59, NULL, NULL, 'delete', 125, 126),
(65, 59, NULL, NULL, 'build_acl', 127, 128),
(66, 1, NULL, NULL, 'T0008alunos', 130, 143),
(67, 66, NULL, NULL, 'index', 131, 132),
(68, 66, NULL, NULL, 'view', 133, 134),
(69, 66, NULL, NULL, 'add', 135, 136),
(70, 66, NULL, NULL, 'edit', 137, 138),
(71, 66, NULL, NULL, 'delete', 139, 140),
(72, 66, NULL, NULL, 'build_acl', 141, 142),
(73, 1, NULL, NULL, 'T0009anolectivos', 144, 157),
(74, 73, NULL, NULL, 'index', 145, 146),
(75, 73, NULL, NULL, 'view', 147, 148),
(76, 73, NULL, NULL, 'add', 149, 150),
(77, 73, NULL, NULL, 'edit', 151, 152),
(78, 73, NULL, NULL, 'delete', 153, 154),
(79, 73, NULL, NULL, 'build_acl', 155, 156),
(80, 1, NULL, NULL, 'T0010turmas', 158, 171),
(81, 80, NULL, NULL, 'index', 159, 160),
(82, 80, NULL, NULL, 'view', 161, 162),
(83, 80, NULL, NULL, 'add', 163, 164),
(84, 80, NULL, NULL, 'edit', 165, 166),
(85, 80, NULL, NULL, 'delete', 167, 168),
(86, 80, NULL, NULL, 'build_acl', 169, 170),
(87, 1, NULL, NULL, 'Tg0001grauacademicos', 172, 185),
(88, 87, NULL, NULL, 'index', 173, 174),
(89, 87, NULL, NULL, 'view', 175, 176),
(90, 87, NULL, NULL, 'add', 177, 178),
(91, 87, NULL, NULL, 'edit', 179, 180),
(92, 87, NULL, NULL, 'delete', 181, 182),
(93, 87, NULL, NULL, 'build_acl', 183, 184),
(94, 1, NULL, NULL, 'Tg0002paises', 186, 199),
(95, 94, NULL, NULL, 'index', 187, 188),
(96, 94, NULL, NULL, 'view', 189, 190),
(97, 94, NULL, NULL, 'add', 191, 192),
(98, 94, NULL, NULL, 'edit', 193, 194),
(99, 94, NULL, NULL, 'delete', 195, 196),
(100, 94, NULL, NULL, 'build_acl', 197, 198),
(101, 1, NULL, NULL, 'Tg0003provincias', 200, 213),
(102, 101, NULL, NULL, 'index', 201, 202),
(103, 101, NULL, NULL, 'view', 203, 204),
(104, 101, NULL, NULL, 'add', 205, 206),
(105, 101, NULL, NULL, 'edit', 207, 208),
(106, 101, NULL, NULL, 'delete', 209, 210),
(107, 101, NULL, NULL, 'build_acl', 211, 212),
(108, 1, NULL, NULL, 'Tg0004cidades', 214, 227),
(109, 108, NULL, NULL, 'index', 215, 216),
(110, 108, NULL, NULL, 'view', 217, 218),
(111, 108, NULL, NULL, 'add', 219, 220),
(112, 108, NULL, NULL, 'edit', 221, 222),
(113, 108, NULL, NULL, 'delete', 223, 224),
(114, 108, NULL, NULL, 'build_acl', 225, 226),
(115, 1, NULL, NULL, 'Tg0005cargos', 228, 241),
(116, 115, NULL, NULL, 'index', 229, 230),
(117, 115, NULL, NULL, 'view', 231, 232),
(118, 115, NULL, NULL, 'add', 233, 234),
(119, 115, NULL, NULL, 'edit', 235, 236),
(120, 115, NULL, NULL, 'delete', 237, 238),
(121, 115, NULL, NULL, 'build_acl', 239, 240),
(122, 1, NULL, NULL, 'Tg0006departamentos', 242, 255),
(123, 122, NULL, NULL, 'index', 243, 244),
(124, 122, NULL, NULL, 'view', 245, 246),
(125, 122, NULL, NULL, 'add', 247, 248),
(126, 122, NULL, NULL, 'edit', 249, 250),
(127, 122, NULL, NULL, 'delete', 251, 252),
(128, 122, NULL, NULL, 'build_acl', 253, 254),
(129, 1, NULL, NULL, 'Tg0007tipocursos', 256, 269),
(130, 129, NULL, NULL, 'index', 257, 258),
(131, 129, NULL, NULL, 'view', 259, 260),
(132, 129, NULL, NULL, 'add', 261, 262),
(133, 129, NULL, NULL, 'edit', 263, 264),
(134, 129, NULL, NULL, 'delete', 265, 266),
(135, 129, NULL, NULL, 'build_acl', 267, 268),
(136, 1, NULL, NULL, 'Tg0008grupodisciplinars', 270, 283),
(137, 136, NULL, NULL, 'index', 271, 272),
(138, 136, NULL, NULL, 'view', 273, 274),
(139, 136, NULL, NULL, 'add', 275, 276),
(140, 136, NULL, NULL, 'edit', 277, 278),
(141, 136, NULL, NULL, 'delete', 279, 280),
(142, 136, NULL, NULL, 'build_acl', 281, 282),
(143, 1, NULL, NULL, 'Tg0009documentos', 284, 297),
(144, 143, NULL, NULL, 'index', 285, 286),
(145, 143, NULL, NULL, 'view', 287, 288),
(146, 143, NULL, NULL, 'add', 289, 290),
(147, 143, NULL, NULL, 'edit', 291, 292),
(148, 143, NULL, NULL, 'delete', 293, 294),
(149, 143, NULL, NULL, 'build_acl', 295, 296),
(150, 1, NULL, NULL, 'Tg0010areatrabalhos', 298, 311),
(151, 150, NULL, NULL, 'index', 299, 300),
(152, 150, NULL, NULL, 'view', 301, 302),
(153, 150, NULL, NULL, 'add', 303, 304),
(154, 150, NULL, NULL, 'edit', 305, 306),
(155, 150, NULL, NULL, 'delete', 307, 308),
(156, 150, NULL, NULL, 'build_acl', 309, 310),
(157, 1, NULL, NULL, 'Tg0011tipofuncionarios', 312, 325),
(158, 157, NULL, NULL, 'index', 313, 314),
(159, 157, NULL, NULL, 'view', 315, 316),
(160, 157, NULL, NULL, 'add', 317, 318),
(161, 157, NULL, NULL, 'edit', 319, 320),
(162, 157, NULL, NULL, 'delete', 321, 322),
(163, 157, NULL, NULL, 'build_acl', 323, 324),
(164, 1, NULL, NULL, 'Tg0012turnos', 326, 339),
(165, 164, NULL, NULL, 'index', 327, 328),
(166, 164, NULL, NULL, 'view', 329, 330),
(167, 164, NULL, NULL, 'add', 331, 332),
(168, 164, NULL, NULL, 'edit', 333, 334),
(169, 164, NULL, NULL, 'delete', 335, 336),
(170, 164, NULL, NULL, 'build_acl', 337, 338),
(171, 1, NULL, NULL, 'Users', 340, 357),
(172, 171, NULL, NULL, 'index', 341, 342),
(173, 171, NULL, NULL, 'view', 343, 344),
(174, 171, NULL, NULL, 'add', 345, 346),
(175, 171, NULL, NULL, 'edit', 347, 348),
(176, 171, NULL, NULL, 'delete', 349, 350),
(177, 171, NULL, NULL, 'login', 351, 352),
(178, 171, NULL, NULL, 'logout', 353, 354),
(179, 171, NULL, NULL, 'build_acl', 355, 356);

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `nomepai` varchar(100) DEFAULT NULL,
  `nomemae` varchar(100) DEFAULT NULL,
  `foto` varchar(512) DEFAULT NULL,
  `genero_id` char(1) DEFAULT NULL,
  `paise_id` int(11) DEFAULT NULL,
  `moradarua` varchar(100) DEFAULT NULL,
  `moradalocal` varchar(45) DEFAULT NULL,
  `moradacpostal` varchar(45) DEFAULT NULL,
  `cidade_id` int(11) DEFAULT NULL,
  `natcidade` int(11) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `telemovel` varchar(45) DEFAULT NULL,
  `documento_id` int(11) DEFAULT NULL,
  `numdocumento` varchar(45) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `dataingresso` date DEFAULT NULL,
  `proveniencianome` varchar(45) DEFAULT NULL,
  `provenienciacidade` int(11) DEFAULT NULL,
  `provenienciaprovincia` int(11) DEFAULT NULL,
  `provenienciapais` int(11) DEFAULT NULL,
  `etrabalhador` tinyint(1) DEFAULT NULL,
  `areatrabalho_id` int(11) DEFAULT NULL,
  `empresanome` varchar(45) DEFAULT NULL,
  `empresamorada` varchar(45) DEFAULT NULL,
  `empresacontacto` varchar(45) DEFAULT NULL,
  `empresatelefone` varchar(45) DEFAULT NULL,
  `empresaemail` varchar(45) DEFAULT NULL,
  `empresasite` varchar(45) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `docdataemissao` date DEFAULT NULL,
  `doclocalemissao` varchar(255) DEFAULT NULL,
  `detalhes` text,
  `estadoentidade_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `entidade_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alunos`
--


-- --------------------------------------------------------

--
-- Table structure for table `anolectivoepocas`
--

CREATE TABLE IF NOT EXISTS `anolectivoepocas` (
  `id` int(11) NOT NULL,
  `anolectivo_id` int(11) DEFAULT NULL,
  `epocaavaliacao_id` int(11) DEFAULT NULL,
  `limite` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anolectivoepocas`
--


-- --------------------------------------------------------

--
-- Table structure for table `anolectivos`
--

CREATE TABLE IF NOT EXISTS `anolectivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `ano` varchar(30) DEFAULT NULL,
  `num_semestre` int(11) NOT NULL,
  `datainicio` date DEFAULT NULL,
  `datafim` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `anolectivos`
--


-- --------------------------------------------------------

--
-- Table structure for table `areatrabalhos`
--

CREATE TABLE IF NOT EXISTS `areatrabalhos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `areatrabalhos`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, 1, 'User', 1, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `avaliacaos`
--

CREATE TABLE IF NOT EXISTS `avaliacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) NOT NULL,
  `tipoavaliacao_id` int(11) DEFAULT NULL,
  `inscricao_id` int(11) DEFAULT NULL,
  `nota` double DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `funcionario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `t0015tipoavaliacao_id` (`tipoavaliacao_id`,`inscricao_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `avaliacaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cargos`
--


-- --------------------------------------------------------

--
-- Table structure for table `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(3) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `paise_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cidades`
--


-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `configs`
--


-- --------------------------------------------------------

--
-- Table structure for table `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id_fk` (`aluno_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contas`
--


-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escola_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `grauacademico_id` int(11) DEFAULT NULL,
  `tipocurso_id` int(11) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cursos`
--


-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `departamentos`
--


-- --------------------------------------------------------

--
-- Table structure for table `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `grupodisciplinar_id` int(11) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `disciplinas`
--


-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `documentos`
--


-- --------------------------------------------------------

--
-- Table structure for table `entidades`
--

CREATE TABLE IF NOT EXISTS `entidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `nomepai` varchar(45) DEFAULT NULL,
  `nomemae` varchar(45) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `genero_id` int(11) DEFAULT NULL,
  `paise_id` int(11) DEFAULT NULL,
  `moradarua` varchar(255) DEFAULT NULL,
  `moradalocal` varchar(255) DEFAULT NULL,
  `moradacpostal` varchar(255) DEFAULT NULL,
  `cidade_id` int(11) DEFAULT NULL,
  `natcidade` int(11) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `telemovel` varchar(45) DEFAULT NULL,
  `documento_id` int(11) DEFAULT NULL,
  `numdocumento` varchar(45) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `docdataemissao` date DEFAULT NULL,
  `estadoentidade_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `entidades`
--


-- --------------------------------------------------------

--
-- Table structure for table `epocaavaliacaos`
--

CREATE TABLE IF NOT EXISTS `epocaavaliacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `epocaavaliacaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `escolas`
--

CREATE TABLE IF NOT EXISTS `escolas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `escolas`
--


-- --------------------------------------------------------

--
-- Table structure for table `estadoentidades`
--

CREATE TABLE IF NOT EXISTS `estadoentidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `estadoentidades`
--


-- --------------------------------------------------------

--
-- Table structure for table `estadoinscricaos`
--

CREATE TABLE IF NOT EXISTS `estadoinscricaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `estadoinscricaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `estadomatriculas`
--

CREATE TABLE IF NOT EXISTS `estadomatriculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `estadomatriculas`
--


-- --------------------------------------------------------

--
-- Table structure for table `estadomessages`
--

CREATE TABLE IF NOT EXISTS `estadomessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `estadomessages`
--


-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `genero_id` char(1) DEFAULT NULL,
  `grauacademico_id` int(11) DEFAULT NULL,
  `paise_id` int(11) DEFAULT NULL,
  `moradarua` varchar(100) DEFAULT NULL,
  `moradalocal` varchar(100) DEFAULT NULL,
  `moradacpostal` varchar(50) DEFAULT NULL,
  `cidade_id` int(11) DEFAULT NULL,
  `natcidade` int(11) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `natpais` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `telemovel` varchar(40) DEFAULT NULL,
  `documento_id` int(11) DEFAULT NULL COMMENT 'Documento de Identificação',
  `numdocid` varchar(45) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `responsavel` int(11) DEFAULT NULL,
  `datainicio` date DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `tipofuncionario_id` int(11) DEFAULT NULL,
  `estadoentidade_id` int(11) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `entidade_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `funcionarios`
--


-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `generos`
--


-- --------------------------------------------------------

--
-- Table structure for table `grauacademicos`
--

CREATE TABLE IF NOT EXISTS `grauacademicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grauacademicos`
--


-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Estudante'),
(4, 'Docente');

-- --------------------------------------------------------

--
-- Table structure for table `grupodisciplinars`
--

CREATE TABLE IF NOT EXISTS `grupodisciplinars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grupodisciplinars`
--


-- --------------------------------------------------------

--
-- Table structure for table `grupodisciplinas`
--

CREATE TABLE IF NOT EXISTS `grupodisciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) DEFAULT NULL,
  `planoestudo_id` int(11) NOT NULL,
  `tipo` enum('A','O') DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  `grupodisciplinasprec` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grupodisciplinas`
--


-- --------------------------------------------------------

--
-- Table structure for table `grupodisciplinasprecedentes`
--

CREATE TABLE IF NOT EXISTS `grupodisciplinasprecedentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupodisciplina_id` int(11) NOT NULL,
  `grupodisciplinaprecedente_id` int(11) NOT NULL,
  `tipoprecedencia` enum('O','A') NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `grupodisciplinasprecedentes`
--


-- --------------------------------------------------------

--
-- Table structure for table `inscricaos`
--

CREATE TABLE IF NOT EXISTS `inscricaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) NOT NULL,
  `aluno_id` int(11) DEFAULT NULL,
  `turma_id` int(11) DEFAULT NULL,
  `estadoinscricao_id` int(11) DEFAULT NULL,
  `notafrequencia` double DEFAULT NULL,
  `notafinal` double DEFAULT NULL,
  `epocaavaliacao_id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inscricaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `logmvs`
--

CREATE TABLE IF NOT EXISTS `logmvs` (
  `logmv_uname` text,
  `tipomovimento_id` int(11) DEFAULT NULL,
  `seqmovimento_id` int(11) DEFAULT NULL,
  `logmv_dtdia` date DEFAULT NULL,
  `id_tab` int(11) DEFAULT NULL,
  `descricao_tab` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logmvs`
--


-- --------------------------------------------------------

--
-- Table structure for table `matricularevisaos`
--

CREATE TABLE IF NOT EXISTS `matricularevisaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `revisao` int(11) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  `aluno_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `planoestudo_id` int(11) DEFAULT NULL,
  `datamatricula` date DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `matricularevisaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) NOT NULL,
  `aluno_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `planoestudo_id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `estadomatricula_id` int(11) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `matriculas`
--


-- --------------------------------------------------------

--
-- Table structure for table `mensalidades`
--

CREATE TABLE IF NOT EXISTS `mensalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `month_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `valor_multa` double DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mensalidades`
--


-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `recipient_id` int(11) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text,
  `datainicio` datetime DEFAULT NULL,
  `datafim` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `months`
--


-- --------------------------------------------------------

--
-- Table structure for table `movimentoentidades`
--

CREATE TABLE IF NOT EXISTS `movimentoentidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tipomovimento_id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `detalhes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `movimentoentidades`
--


-- --------------------------------------------------------

--
-- Table structure for table `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) DEFAULT NULL,
  `conta_id` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pagamentos`
--


-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(3) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `paises`
--


-- --------------------------------------------------------

--
-- Table structure for table `planoestudoanos`
--

CREATE TABLE IF NOT EXISTS `planoestudoanos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planoestudo_id` int(11) NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `cargahorariateoricas` int(11) DEFAULT '0',
  `cargahorariapraticas` int(11) DEFAULT '0',
  `creditos` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT '0',
  `codigo` varchar(25) DEFAULT NULL,
  `ramo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `planoestudoanos`
--


-- --------------------------------------------------------

--
-- Table structure for table `planoestudos`
--

CREATE TABLE IF NOT EXISTS `planoestudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `semestresano` int(11) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `planoestudos`
--


-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `paise_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `provincias`
--


-- --------------------------------------------------------

--
-- Table structure for table `ramos`
--

CREATE TABLE IF NOT EXISTS `ramos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela para armazenar ramos diferentes de um mesmo curso' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ramos`
--


-- --------------------------------------------------------

--
-- Table structure for table `semestrelectivos`
--

CREATE TABLE IF NOT EXISTS `semestrelectivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(30) NOT NULL,
  `anolectivo_id` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `semestrelectivos`
--


-- --------------------------------------------------------

--
-- Table structure for table `seqmovimentos`
--

CREATE TABLE IF NOT EXISTS `seqmovimentos` (
  `seqmovimento_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`seqmovimento_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `seqmovimentos`
--


-- --------------------------------------------------------

--
-- Table structure for table `tipoavaliacaos`
--

CREATE TABLE IF NOT EXISTS `tipoavaliacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `codigo` varchar(255) NOT NULL,
  `epocaavaliacao_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tipoavaliacaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `tipocursos`
--

CREATE TABLE IF NOT EXISTS `tipocursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tipocursos`
--


-- --------------------------------------------------------

--
-- Table structure for table `tipofuncionarios`
--

CREATE TABLE IF NOT EXISTS `tipofuncionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tipofuncionarios`
--


-- --------------------------------------------------------

--
-- Table structure for table `tipomovimentos`
--

CREATE TABLE IF NOT EXISTS `tipomovimentos` (
  `tipomovimento_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tipomovimento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tipomovimentos`
--


-- --------------------------------------------------------

--
-- Table structure for table `turmas`
--

CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anolectivo_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `planoestudo_id` int(11) DEFAULT NULL,
  `anosemestrecurr` int(11) DEFAULT NULL,
  `turno_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  `funcionario_ass_id` int(11) DEFAULT NULL,
  `nummaximo` int(11) DEFAULT NULL,
  `numaprovados` int(11) DEFAULT NULL,
  `mediaturma` float DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `numreprovados` int(11) DEFAULT NULL,
  `escola_id` int(11) DEFAULT NULL,
  `codigo` varchar(25) NOT NULL,
  `anocurricular` int(11) DEFAULT NULL,
  `semestrecurricular` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `turmas`
--


-- --------------------------------------------------------

--
-- Table structure for table `turmatipoavaliacaos`
--

CREATE TABLE IF NOT EXISTS `turmatipoavaliacaos` (
  `id` int(11) NOT NULL,
  `turma_id` int(11) DEFAULT NULL,
  `tipoavaliacao_id` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `scanpauta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turmatipoavaliacaos`
--


-- --------------------------------------------------------

--
-- Table structure for table `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `turnos`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `codigocartao` varchar(30) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id_fk` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `codigocartao`, `group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(2, '172009', '133afeabb6a0e54bec4663f2eb528dc0', '172009', 1),
(3, '412010', '332d0ecb6cd3d40d1824d9a4018719dd', '412010', 3),
(4, '432010', '0c817fa2bab287969230dc4618dbc0e1', '432010', 3),
(5, '562010', '253a59fbc98e83010e0d0cdf86260d39', '562010', 3),
(6, '62009', '7d806c9058c2b2f675b33fd861750308', '62009', 3),
(7, '422010', '432a7dfd17c24bd1851fb849d5d9a8d8', '422010', 3),
(8, '452010', '052a03df800d4d046bedf4625843c3d3', '452010', 3),
(9, '112009', '69a382811e6dbf95f2744d64249eb913', '112009', 3),
(10, '1332010', '55dcdb2c65ee6578df4381dc7b2e66b5', '1332010', 3),
(11, '142009', '46392238bdc66ea45f64683665ac1c7a', '142009', 3),
(12, '132009', '1f78ec739a4f8592e9b05ac56d9907f0', '132009', 3),
(13, '92009', '0457e6b0bad7217a8b8e39de48069f52', '92009', 3),
(14, '462010', '0c5c62b40d2380d22319e5d74801a2e9', '462010', 3),
(15, '102009', '5c40637db9e64b69d4e949dd3f79b312', '102009', 3),
(16, '1192010', '8ceb9612ef5ea3b2f3f545f571bdd53f', '1192010', 3),
(17, '82009', 'fa3a6526569956b7e39960592bf0e30d', '82009', 3),
(18, '712010', '629515fb5a1054c85efbee1179e5ffa2', '712010', 3),
(19, '202009', 'c111e2209dcd275ff9ac418118155647', '202009', 3),
(20, '482010', '34af120a16187793abef7d01080505e2', '482010', 3),
(21, '42009', '8377024228992216a378ad009c990156', '42009', 3),
(22, '1232010', '2c7004201b370fabca2318472254edfa', '1232010', 3),
(23, '192009', 'c5043f333f978646bbf6d85ffd90b3fb', '192009', 3),
(24, '472010', 'e07e966186c2ef27e6db3f4f5d9e47a3', '472010', 3),
(25, '72009', '58b01554621302f8f421740665362fa9', '72009', 3),
(26, '442010', 'e8069ba9fc839c924b01aaa508b88b00', '442010', 3),
(27, '32009', '44c7d2e7b23eee739f61b49c659a25f5', '32009', 3),
(28, '152009', '1ec5f6acf774b618d1723d140ac8acf5', '152009', 3),
(29, '1292010', 'a35a6aadea1a9cc0043a14da90e64ca8', '1292010', 3),
(30, '702010', '847a8fc486b14a471b7a5301294a8f10', '702010', 3),
(31, '732010', '31b20e392e3b54554d3b0d9f7414e656', '732010', 3),
(32, '662010', '572da2e33a7279f12456a9c80f4dd0a1', '662010', 3),
(33, '812010', 'c65a0637b10dc30368f3fc6e90b5ad48', '812010', 3),
(34, '832010', 'c3701c1cdf9b7f13dd5854a5b8c3c567', '832010', 3),
(35, '632010', 'cd400ae3f99ed3d524bae79c3b64d11b', '632010', 3),
(36, '1132010', '1223562daa6395ba314a146ce57896a1', '1132010', 3),
(37, '772010', '241d81787c5d296ba5ec3c362d8c1096', '772010', 3),
(38, '802010', '765a661b941d3e81828a56c4596f0caa', '802010', 3),
(39, '1212010', '345fbef74bb9ef03ac4b7fa5591cc0fc', '1212010', 3),
(40, '862010', 'b8716a2f980a590654340eb15b4fb393', '862010', 3),
(41, '672010', '3840f161331b63b158f67190ba59f2ba', '672010', 3),
(42, '722010', 'cb888f0fe7da8de0c72b05a2cc2ea35e', '722010', 3),
(43, '642010', 'b79ed47d5ad0566cfd8b489f1acbcdd9', '642010', 3),
(44, '752010', '619ccc48124989c9c1f547f9be7fbf06', '752010', 3),
(45, '842010', 'a8369de48c3f409471862c143916bc5c', '842010', 3),
(46, '622010', 'bbccd5686c94a8aede4a9949e7f2976f', '622010', 3),
(47, '782010', 'b9f946add1a25b6c17827aac317c54a9', '782010', 3),
(48, '742010', '9481776cf6bacf3d30f325e0aa579049', '742010', 3),
(49, '792010', 'fd045ee4189130815a888d64e009e7c2', '792010', 3),
(50, '122009', 'aeb9c328872eb7a71e97f2856d8206e0', '122009', 3),
(51, '682010', 'b63cc0d7241341f3419a00b289e37da7', '682010', 3),
(52, '1312010', 'e6597e998077aad9da5dba322e4fa861', '1312010', 3),
(53, '822010', '53f4826b662efbf6c30a19a4f71cc887', '822010', 3),
(54, '852010', 'eb66afa59481e4689b257fdd427711cd', '852010', 3),
(55, '592010', '7e4ce37c7305f50b7168428936eca208', '592010', 3),
(56, '1302010', '5f26f554066c8c2b1826054953df0f24', '1302010', 3),
(57, '762010', '02a7057a06ab1db2b8f6e651d9bf2ccd', '762010', 3),
(58, '582010', 'f9b129cc8624d1d0a8bafc6c3d06b084', '582010', 3),
(59, '612010', '59bc8fafa0e0c6d7477a82fd37d9b1bf', '612010', 3),
(60, '602010', 'adb91d04fae7e67b566999bcefa97877', '602010', 3),
(61, '572010', 'bde4fde68d03a0fc8e9aeb2fed8fd525', '572010', 3),
(62, '1322010', 'b11fb186fc90c2a06b6a46fdcc6b625e', '1322010', 3),
(63, '1242010', 'd1864746a4ee5b66d1cca5e67211c2c3', '1242010', 3),
(64, '1272010', '7bc88924194f41c5fdac5365e843b519', '1272010', 3),
(65, '652010', '3e6248d8624827ebcc49954a9c6f6e3e', '652010', 3),
(66, '692010', '8a128e1ef07262a1ed23916126f7adb2', '692010', 3),
(67, '1182010', '870069d5c4328e78261c33e688b93a48', '1182010', 3),
(68, '1262010', '852b86ce6f296276fc3fcde4eaa073d4', '1262010', 3),
(69, '282009', '2f6fcfe934bedb49088af2f49a41a339', '282009', 3),
(70, '242009', '9a7a998cada8b093c9e9f41066bba780', '242009', 3),
(71, '352009', 'e6b49fae3939688ad41f730410fd82e2', '352009', 3),
(72, '542010', '765c1314a8a94363bc1940eb64e9f163', '542010', 3),
(73, '552010', '6396275abf3f52e846932158caa7cb7a', '552010', 3),
(74, '1172010', 'cf9cb55f553fec9a9dc6813431089210', '1172010', 3),
(75, '502010', '06c01ef349aea715f0d24931d9108dbc', '502010', 3),
(76, '532010', '6d3f94e940a7093b65f5554372e5c9d1', '532010', 3),
(77, '342009', 'e7bd7fc5734d694e9f5acade64dce835', '342009', 3),
(78, '492009', 'b5ee53ebe6e1b2d6d5681d67a80d2046', '492009', 3),
(79, '222009', '536de17eaab1cd59355e45ef0be83e84', '222009', 3),
(80, '522010', '038fe86f24a3af98699823a0050b7056', '522010', 3),
(81, '1282010', 'aed0fe584cfb1a22a901c9f1bcd78a59', '1282010', 3),
(82, '322009', '1b83f37cca1987220318a61d17ee8c44', '322009', 3),
(83, '332009', '957a532708d3385496a4c5fab2f9ec3b', '332009', 3),
(84, '252009', 'e7eacad38b35f618fabb3d945792c243', '252009', 3),
(85, '1252010', '420b9fc6610da8e9156194967392c385', '1252010', 3),
(86, '1222010', '1881639ff29a7cd890a15f8ce5a0932d', '1222010', 3),
(87, '292009', 'a34e809fc6321f34ea42394077aef8e6', '292009', 3),
(88, '512010', '0bbfb9fefd4a01b30efbb63b9c7e048d', '512010', 3),
(89, '392009', 'f09fbb5b740d8bbca00e2d4e215b2d95', '392009', 3),
(90, '269009', 'a29b7ca3f95c05854c02b8071ecb4865', '269009', 3),
(91, '272009', 'cf1ca9fe04cbfceaddc7b1326d9948ad', '272009', 3),
(92, '312009', '91c4074027ffc40050d2b9c98527a905', '312009', 3),
(93, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(94, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(95, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(96, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(97, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(98, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(99, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(100, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(101, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(102, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(103, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(104, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(105, '1202010', 'e149d390279a48484fe95b542788ddb5', '1202010', 3),
(106, '992010', '16984fbb57316494a14543ad6d70a2e8', '992010', 3),
(107, '892010', 'b953bf9b49e8224f6d295367e9a720bb', '892010', 3),
(108, '962010', 'a8354f8f1d4d4617f074989d1f65de21', '962010', 3),
(109, '1142010', 'dc69755c293eb467649a936e59811273', '1142010', 3),
(110, '942010', '80c73d29efb04ebbea65d602178370d1', '942010', 3),
(111, '1152010', 'e7b165a20d4a9d26fea9aed40cf6735f', '1152010', 3),
(112, '1052010', '9959f490e2f8698e741264f36cbcae72', '1052010', 3),
(113, '1022010', 'a30f0eb3fa51b56b90f142d58944a934', '1022010', 3),
(114, '902010', 'fb7facf13cf66ea96aef33592eeded00', '902010', 3),
(115, '912010', '859abaf90d5267b7d0c38c67cc74f5f6', '912010', 3),
(116, '872010', '47906414d35ef64b8ca9bd6b35e6f097', '872010', 3),
(117, '1062010', 'a622bc44c6541c35cc6b71e0bcc2d274', '1062010', 3),
(118, '1162010', 'fbc45b471394d04ff0d0795b30171060', '1162010', 3),
(119, '952010', '8d1b53e7951bbfcc41f1bb89d6ffb020', '952010', 3),
(120, '1082010', '1362b538a370055d708eef099c7efbf2', '1082010', 3),
(121, '1012010', '64dac0c594ffa9f035434809efc7b958', '1012010', 3),
(122, '932010', 'a38bc2d9dd3b328fc6e09a031581b0ba', '932010', 3),
(123, '1032010', 'c78259d4b369af8c1b9217f9f362493f', '1032010', 3),
(124, '882010', 'b490a92b4104d31b24a1c8a968d51dff', '882010', 3),
(125, '972010', 'e240bd219fbc4665c594cd6c6ec5ebef', '972010', 3),
(126, '1102010', '09eb49ca58d7e595346c24b6ac639f2e', '1102010', 3),
(127, '982010', '0e2740748d2254d8f79960b2911b4a03', '982010', 3),
(128, '1042010', '868d358fae6919f7e4f433f360f1976d', '1042010', 3),
(129, '1112010', 'eb8316567ba6d1338f28338b8c440989', '1112010', 3),
(130, '302009', '4cd529bc5949ed222c06295d4094949c', '302009', 3),
(131, '1092010', 'f84f9d91b2d6c8bbf60c38fcd4f28e59', '1092010', 3),
(132, '1122010', 'c1ff656ecd27721c8074a36f3def6e4f', '1122010', 3),
(133, '1072010', '69fe07ab62869bb2fc873aee67a5945a', '1072010', 3),
(134, '922010', 'edec7f49a2e20afe7459d83692ffb996', '922010', 3),
(135, '1002010', '2041a530a9a11e79dce23a0b2df39c04', '1002010', 3),
(136, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(137, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(138, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(139, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(140, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(141, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(142, '', 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
(143, '201100142', '098633873ac7e9a8d7b7e23524c0ab4c', '201100142', 3),
(144, '201100143', 'fefedba44bdb1f3d6657ae8555e4341c', '201100143', 3),
(145, '201100144', '931a80c6b24665c9279997594c9c3d93', '201100144', 3),
(146, '201100145', '8dbc46b76a784d6efb65eb2494a397ed', '201100145', 3),
(147, '201100146', 'f83ac5cb5daebcc4c62f0b69a794c6f7', '201100146', 3),
(148, '201100147', '1fa4215794dfe069b9f1f5228b4b1157', '201100147', 3),
(149, '201100148', '71a1439fb9d13354e0ba8b17c90f076e', '201100148', 3),
(150, '201100149', '993ddc7100d8dbac56cc6088e1ddb5ac', '201100149', 3),
(151, '201100150', '5227a3101b403ce363213e9c05a78d10', '201100150', 3),
(152, '201100151', '8a57a87c2057d72e18434a0c29eb0ae6', '201100151', 3),
(153, '201100152', '48a7b253e1e15d910cc24ab5bf575379', '201100152', 3),
(154, '201100153', '2afc84012abb8c26b29fc345a4a227ea', '201100153', 3),
(155, '201100154', '37a3825107a98896218bd75906d80013', '201100154', 3),
(156, '201100155', '8424185eabc24358c874a0cf12d5d996', '201100155', 3),
(157, '201100156', '36d058b7ae84b891ed18295e6250b086', '201100156', 3),
(158, '201100156', '36d058b7ae84b891ed18295e6250b086', '201100156', 3),
(159, '201100158', '990785f95cec6a1b4ae38de88b206aa7', '201100158', 3),
(160, '201100159', 'a52919666759bdc38f156305d888fa9b', '201100159', 3),
(161, '201100160', '6df2aa660738ada0bc336609d32df837', '201100160', 3),
(162, '201100161', '5ef83f97cf9965372a18ce1a02a11f3f', '201100161', 3),
(163, '201100162', '7a402d2e2a6ee79477e08bc0188fd8a7', '201100162', 3),
(164, '201100163', '2a5edb100dbe809b5f4c47e6ee38c9fe', '201100163', 3),
(165, '201100164', '4448dcf0f692a08eed0b85dfc47b8171', '201100164', 3),
(166, '201100165', '7701a8083137b5cf911577ae592700f2', '201100165', 3),
(167, '201100166', '42d60a70548165d8dafa2495660dd356', '201100166', 3),
(168, '201100167', '80c6536845622a45e9f3f9eacbf1278b', '201100167', 3),
(169, '201100168', 'c879734e644486892f2212dcdeaf31ea', '201100168', 3),
(170, '201100169', 'c8a252d9d120566e3925c8218262b520', '201100169', 3),
(171, '201100170', '81fa4628f30b2b0b89b7c7792260c311', '201100170', 3),
(172, '201100171', '94e5f24444d6adcf079a65a9d0a147b4', '201100171', 3),
(173, '201100172', '6253ee6eb71bc242b28c9726966ed758', '201100172', 3),
(174, '201100173', '7f6c93d06697ef2378c0d89ad32ba5e2', '201100173', 3),
(175, '201100174', '915b9a66d980fed4abb5505b75d83e3e', '201100174', 3),
(176, '201100175', '85c2461c23a6464495631f4b01a4a81d', '201100175', 3),
(177, '201100176', 'f2e5049ea875694cfa7547d9118a0a1c', '201100176', 3),
(181, '201100177', '8e3ac8a8052d1e5b8e7298b0f1024ecd', '201100177', 3),
(182, 'vnhamona', 'd040ae803bad66f6763f04c1ef65d438', 'vnhamona', 1),
(183, 'jmuianga', '36438c73455fcf967743eb9269679dd1', 'jmuianga', 1),
(184, '201100170', '81fa4628f30b2b0b89b7c7792260c311', '201100170', 3),
(185, '201100179', '1d80da0365cef45dd60dadca4db45d85', '201100179', 3),
(186, '201100180', 'e9e472d3f3781b4c95c643a48f280a29', '201100180', 3),
(187, '201100181', '804d2041c7aa64a696bc211d538f7218', '201100181', 3),
(188, '201100182', 'fe7c41e7ec1f21d2c0853a35260c7b18', '201100182', 3),
(189, '201100183', '5d9673e9f10140a1167d9fe3d6c007fe', '201100183', 3),
(190, '201100184', 'ed21d8384eef520478a76a9382eee80d', '201100184', 3),
(191, '201100185', 'efbf02fe3acb6e33a355085005cfd170', '201100185', 3),
(192, '201100186', 'de9d3faf4eb1c7104dd8b0078749f5f9', '201100186', 3),
(193, '201100187', '6b854bc24323715f0e6dc337ba3f89bb', '201100187', 3),
(194, '201100188', 'c63e3d161fb8b2f04baf3b2b0b09c378', '201100188', 3),
(195, '201100189', '26f659baf6e9d57b222c44faaf85f959', '201100189', 3),
(196, '201100190', 'de5b1fca0ce3c042bf26e8b86d3ff2df', '201100190', 3),
(197, '201100191', 'c58bf9d404c30e45d62e5220895a808f', '201100191', 3),
(198, '201100192', '6585c3f94759bc0676fa9fd37fec9ac6', '201100192', 3),
(199, '201100193', '6cd175fc62b2e696468011af11599d11', '201100193', 3),
(200, '201100194', '201af506644c0bf9ad864ddcfef559bb', '201100194', 3),
(201, '201100195', '3ce05224808146577dead6d23e9298ce', '201100195', 3),
(202, '201100196', 'e0048cd4cf53dfa0813211d606fe41d9', '201100196', 3),
(203, '201100197', '83cb668eeacd26cedcb81fcb6a1d74dd', '201100197', 3),
(204, '201100198', 'c06a86be3ed616f2cba3f067608e6a9d', '201100198', 3),
(205, '201100199', '4355a901ee7c3bcdcf70158ae1701851', '201100199', 3),
(206, '201100200', '5cce63d720a3a2bd1142030560b557a0', '201100200', 3),
(207, '201100201', '538abd9b67ebbe25935356903e1d77b2', '201100201', 3),
(208, '201100202', 'd9bbe8367534b2cdac0c65afaa8867b9', '201100202', 3),
(209, '201100203', 'f22b9ba3b6dafd1966a2ffa529694684', '201100203', 3),
(210, '201100204', '95160999f8db0e8afaea1abba097f6b9', '201100204', 3),
(211, 'rrahman', 'b3522d3e7cb723070d252681ded6cc22', 'rrahman', 4),
(212, 'omabasso', '828ce588ccb3476f8573f5c05ce12b91', 'omabasso', 4),
(213, 'gborges', 'a8f780aedbf33e5611f4980060f73121', 'gborges', 4),
(214, 'malmeida', '5d1683420485eb36946e68c3e0e8eab3', 'malmeida', 4),
(215, 'asibanda', '0ee58b431e35ef0efba4c526095312fe', 'asibanda', 4),
(216, 'abotelho', 'f22633067de7598c31a1044b6bad8692', 'abotelho', 4),
(217, 'rguambe', '051dc74326188b7acf70edecddef4acf', 'rguambe', 4),
(218, 'hnunes', '5c59a66a0011e2848e7c9c9b97562663', 'hnunes', 4),
(219, 'vhalle', '02a2ecdef50b0102681fe05faf4483df', 'vhalle', 4),
(220, 'salberto', 'ee01316a09156f069f48e5b6cb192447', 'salberto', 4),
(221, 'jdamião', '2b539a9b8e7ecde3a9f5b294639d8617', 'jdamião', 4),
(222, 'hnuaila', '3050d8e9b25dfc0576c7c98943598bbe', 'hnuaila', 4),
(223, 'pmarote', 'a9df5e8a14c1c6b446a12d3d5486c56d', 'pmarote', 4),
(224, 'amoura', '8f1b7646800a8b2823c9b16f3069485b', 'amoura', 4),
(225, 'aissak', 'ca4560fc0b34e9450ba87efb22c17401', 'aissak', 4),
(226, 'jfaria', '4d797e6f20c68d36ce4b2f1c5090b0f8', 'jfaria', 4),
(227, 'mlocaniam', 'b5af6f6baf1a46cd830409e75684e98e', 'mlocaniam', 4),
(228, 'bfeliciano', 'fdc9c754febcd9e1eb722c3453bf120f', 'bfeliciano', 4),
(229, 'acabrita', '83c013a1871233fa3cb0a12c66a39819', 'acabrita', 4),
(230, 'fribeiro', '0d2c6eb1a80341c9e01bca14bcefae9d', 'fribeiro', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `aluno_id_fk` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `group_id_fk` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
