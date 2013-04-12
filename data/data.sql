-- Adminer 3.5.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cislo`;
CREATE TABLE `cislo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casopis_id` tinyint(2) NOT NULL,
  `rocnik` tinyint(2) NOT NULL,
  `cislo` tinyint(2) NOT NULL,
  `rok` smallint(4) NOT NULL,
  `mesic` tinyint(2) NOT NULL,
  `verejne` tinyint(1) NOT NULL,
  `priloha` tinyint(1) NOT NULL,
  `poznamka` text COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  `pocet_stran` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `cislo` (`id`, `casopis_id`, `rocnik`, `cislo`, `rok`, `mesic`, `verejne`, `priloha`, `poznamka`, `popis`, `pocet_stran`) VALUES
(1,	0,	6,	1,	0,	0,	0,	0,	'',	'',	0),
(2,	0,	6,	1,	0,	0,	1,	0,	'',	'',	0),
(3,	0,	0,	0,	0,	0,	0,	0,	'',	'',	0),
(4,	0,	0,	0,	0,	0,	0,	0,	'',	'',	0),
(5,	0,	0,	0,	0,	0,	0,	0,	'',	'',	0),
(6,	0,	13,	3,	2011,	6,	1,	0,	'první testovací',	'xxx',	28);

DROP TABLE IF EXISTS `obsah`;
CREATE TABLE `obsah` (
  `cislo_id` int(11) NOT NULL,
  `strana` int(11) NOT NULL,
  `strany_navic` tinyint(4) NOT NULL,
  `nazev` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`cislo_id`,`strana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `obsah` (`cislo_id`, `strana`, `strany_navic`, `nazev`, `popis`) VALUES
(6,	1,	0,	'x',	''),
(6,	4,	3,	'Znalec indiánù',	''),
(6,	14,	1,	'',	'');

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `cislo_id` int(11) NOT NULL,
  `strana` int(11) NOT NULL,
  `tag` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  KEY `cislo_id_strana` (`cislo_id`,`strana`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `tag` (`cislo_id`, `strana`, `tag`) VALUES
(6,	4,	'vlèek/svìtýlko'),
(6,	4,	'bžunda');

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2013-01-08 23:33:44
