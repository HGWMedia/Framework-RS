-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.25a - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4174
-- Date/time:                    2013-03-10 10:49:29
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for rs
DROP DATABASE IF EXISTS `rs`;
CREATE DATABASE IF NOT EXISTS `rs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rs`;


-- Dumping structure for table rs.rsme_advertisers
DROP TABLE IF EXISTS `rsme_advertisers`;
CREATE TABLE IF NOT EXISTS `rsme_advertisers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `uid` int(10) NOT NULL,
  `type` enum('S','B') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_advertisers: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_advertisers` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_advertisers` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_banners
DROP TABLE IF EXISTS `rsme_banners`;
CREATE TABLE IF NOT EXISTS `rsme_banners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) NOT NULL DEFAULT '0',
  `publish` tinyint(4) DEFAULT '0',
  `size` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `url` varchar(15) DEFAULT NULL,
  `clicks` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_banners: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_banners` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_candidates
DROP TABLE IF EXISTS `rsme_candidates`;
CREATE TABLE IF NOT EXISTS `rsme_candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vid` int(10) NOT NULL DEFAULT '0',
  `university` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_candidates: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_candidates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_candidates` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_events
DROP TABLE IF EXISTS `rsme_events`;
CREATE TABLE IF NOT EXISTS `rsme_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `location` text,
  `geomap` text,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `tickets_qty` int(11) DEFAULT '0',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_events: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_events` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_gifts
DROP TABLE IF EXISTS `rsme_gifts`;
CREATE TABLE IF NOT EXISTS `rsme_gifts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '0',
  `uid` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_gifts: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_gifts` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_gifts` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_internship
DROP TABLE IF EXISTS `rsme_internship`;
CREATE TABLE IF NOT EXISTS `rsme_internship` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `address` mediumtext,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_internship: ~1 rows (approximately)
/*!40000 ALTER TABLE `rsme_internship` DISABLE KEYS */;
REPLACE INTO `rsme_internship` (`id`, `fullname`, `address`, `phone`, `email`) VALUES
	(1, 'Le Angelo', 'JBR', '0504362684', 'adones.fuentes@vz.ae'),
	(2, 'Le Angelo', 'Tecom', '0504362684', 'leangelo@vz.ae'),
	(3, 'Le Dominic', 'Philippines', '0504362684', 'leangelo@vz.ae');
/*!40000 ALTER TABLE `rsme_internship` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_purchased
DROP TABLE IF EXISTS `rsme_purchased`;
CREATE TABLE IF NOT EXISTS `rsme_purchased` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0',
  `eid` int(10) NOT NULL DEFAULT '0',
  `amount` int(10) NOT NULL DEFAULT '0',
  `others` varchar(50) DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_purchased: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_purchased` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_purchased` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_sessions
DROP TABLE IF EXISTS `rsme_sessions`;
CREATE TABLE IF NOT EXISTS `rsme_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_sessions: ~3 rows (approximately)
/*!40000 ALTER TABLE `rsme_sessions` DISABLE KEYS */;
REPLACE INTO `rsme_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('064e83deee3450539ddf76197d673dc6', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.152 Safari/537.22', 1362895081, ''),
	('3db9d529c9287737e6506433dbdcbc66', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0', 1362896772, 'a:6:{s:9:"user_data";s:0:"";s:5:"email";s:16:"don@hgwmedia.com";s:5:"fname";s:3:"Don";s:5:"lname";s:7:"Fuentes";s:7:"isadmin";s:1:"1";s:9:"logged_in";b:1;}'),
	('d9ddf9bd79ea74967ddd894fb801a3ed', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.152 Safari/537.22', 1362896649, 'a:5:{s:5:"email";s:16:"don@hgwmedia.com";s:5:"fname";s:3:"Don";s:5:"lname";s:7:"Fuentes";s:7:"isadmin";s:1:"1";s:9:"logged_in";b:1;}');
/*!40000 ALTER TABLE `rsme_sessions` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_users
DROP TABLE IF EXISTS `rsme_users`;
CREATE TABLE IF NOT EXISTS `rsme_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `isadmin` int(11) DEFAULT '0',
  `aax` int(11) DEFAULT '0',
  `type` varchar(12) DEFAULT '0',
  `aax_type` enum('G','S','P') DEFAULT NULL,
  `sts` int(11) DEFAULT '0',
  `internship` int(11) DEFAULT '0',
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` text,
  `phone` text,
  `age` varchar(10) DEFAULT NULL,
  `gender` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `rsme_users` DISABLE KEYS */;
REPLACE INTO `rsme_users` (`id`, `email`, `pwd`, `isadmin`, `aax`, `type`, `aax_type`, `sts`, `internship`, `fname`, `lname`, `address`, `phone`, `age`, `gender`) VALUES
	(1, 'don@hgwmedia.com', 'pK8JgY6P68GMtGJ593hqARPDn4MYXFEEE9mIdhGN+otzoyjMe6bM2UM+/sP8qzYIZ+tAB/rau//6s9vI0kdZJQ==', 1, 0, 'rs', NULL, 0, 0, 'Don', 'Fuentes', NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `rsme_users` ENABLE KEYS */;


-- Dumping structure for table rs.rsme_votes
DROP TABLE IF EXISTS `rsme_votes`;
CREATE TABLE IF NOT EXISTS `rsme_votes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) DEFAULT '0',
  `uid` int(10) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rs.rsme_votes: ~0 rows (approximately)
/*!40000 ALTER TABLE `rsme_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsme_votes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
