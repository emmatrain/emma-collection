# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: emma-collection
# Generation Time: 2021-03-29 11:06:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table wines
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wines`;

CREATE TABLE `wines` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wine-name` varchar(255) NOT NULL DEFAULT '',
  `origin` varchar(255) NOT NULL DEFAULT '',
  `grape` varchar(255) NOT NULL DEFAULT '',
  `style` varchar(255) NOT NULL DEFAULT '',
  `farming` varchar(255) NOT NULL DEFAULT '',
  `abv` float(3,1) NOT NULL,
  `image-url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;

INSERT INTO `wines` (`id`, `wine-name`, `origin`, `grape`, `style`, `farming`, `abv`, `image-url`)
VALUES
	(1,'Pierre Peters \'Cuvee de Reserve\' Blanc de Blanc Brut Champagne NV','Champagne, France','Chardonnay','Sparkling','Sustainable',12.0,'images/pierre-peters.png'),
	(2,'Julien Sunier Morgon 2019','Beaujolais, France','Gamay','Red','Organic',12.5,'images/julien-sunier.png'),
	(3,'Hirsch Vineyards Chardonnay 2018','California, USA','Chardonnay','White','Biodynamic',13.0,'images/hirsch.png'),
	(4,'Fontodi IGT \'Flaccianello della Pieve\' 2004','Tuscany, Italy','Sangiovese','Red','Organic',14.0,'images/fontodi.png'),
	(5,'Claude Dugat Bourgogne Rouge 2018','Burgundy, France','Pinot Noir','Red','Biodynamic',12.0,'images/dugat.png'),
	(6,'JJ Prum \'Graacher Himmelreich\' Kabinett 2019','Mosel, Germany','Riesling','White','Conventional',9.5,'images/prum.png'),
	(7,'Jolie-Laide Gamay Rose \'Witters\' El Dorado 2020','California, USA','Gamay','Rosé','Sustainable',13.0,'images/jolie-laide.png'),
	(9,'Vajra Barolo \'Albe\' 2017','Piedmonte, Italy','Nebbiolo','Red','Organic',13.5,'images/vajra.png'),
	(10,'By Farr Chardonnay 2018','Geelong, Australia','Chardonnay','White','Sustainable',13.0,'images/by-farr.png');

/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
