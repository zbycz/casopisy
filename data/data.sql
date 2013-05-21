-- Adminer 3.6.3 MySQL dump

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


DROP TABLE IF EXISTS `obsah`;
CREATE TABLE `obsah` (
  `cislo_id` int(11) NOT NULL,
  `strana` int(11) NOT NULL,
  `strany_navic` tinyint(4) NOT NULL,
  `nazev` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `popis` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`cislo_id`,`strana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `cislo_id` int(11) NOT NULL,
  `strana` int(11) NOT NULL,
  `tag` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  KEY `cislo_id_strana` (`cislo_id`,`strana`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `firstlogin` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2013-05-22 01:21:27
