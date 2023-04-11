-- Adminer 4.8.1 MySQL 10.4.27-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `avancement`;
CREATE TABLE `avancement` (
  `id` int(11) NOT NULL,
  `avancement` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `phone`;
CREATE TABLE `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `stockage` varchar(255) DEFAULT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `price`;
CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `quality`;
CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `Etat` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `quality_has_price`;
CREATE TABLE `quality_has_price` (
  `quality_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  PRIMARY KEY (`quality_id`,`price_id`),
  KEY `fk_quality_has_price_price1_idx` (`price_id`),
  KEY `fk_quality_has_price_quality1_idx` (`quality_id`),
  CONSTRAINT `fk_quality_has_price_price1` FOREIGN KEY (`price_id`) REFERENCES `price` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_quality_has_price_quality1` FOREIGN KEY (`quality_id`) REFERENCES `quality` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `specificite`;
CREATE TABLE `specificite` (
  `id` int(11) NOT NULL,
  `marque` varchar(45) NOT NULL,
  `stockage` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `batterie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `specificite_has_price`;
CREATE TABLE `specificite_has_price` (
  `specificite_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  PRIMARY KEY (`specificite_id`,`price_id`),
  KEY `fk_specificite_has_price_price1_idx` (`price_id`),
  KEY `fk_specificite_has_price_specificite1_idx` (`specificite_id`),
  CONSTRAINT `fk_specificite_has_price_price1` FOREIGN KEY (`price_id`) REFERENCES `price` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_specificite_has_price_specificite1` FOREIGN KEY (`specificite_id`) REFERENCES `specificite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1,	'PHONEX',	'azzedine.ob@outlook.fr',	'$2y$10$b0qorCr4Cx6w07DK1JG67O9ZAQI8hd4N3he9J4WfjjQbnjKZ2isf.'),
(7,	'azzed',	'azzedine.o@outlook.fr',	'$2y$10$HuAJZCxECCww2M.mWSEW/ugQCX5tloa.ZX6COl1RAiRVeOjVf2h9C');

-- 2023-04-11 17:19:17