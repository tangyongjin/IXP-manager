-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: ixp2
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `api_keys`
--

DROP TABLE IF EXISTS `api_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `api_keys` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `apiKey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expires` datetime DEFAULT NULL,
  `allowedIPs` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `lastseenAt` datetime DEFAULT NULL,
  `lastseenFrom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9579321F800A1141` (`apiKey`),
  KEY `IDX_9579321FA76ED395` (`user_id`),
  CONSTRAINT `FK_9579321FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `api_keys`
--

LOCK TABLES `api_keys` WRITE;
/*!40000 ALTER TABLE `api_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bgpsessiondata`
--

DROP TABLE IF EXISTS `bgpsessiondata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bgpsessiondata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `srcipaddressid` int(11) DEFAULT NULL,
  `dstipaddressid` int(11) DEFAULT NULL,
  `protocol` int(11) DEFAULT NULL,
  `vlan` int(11) DEFAULT NULL,
  `packetcount` int(11) DEFAULT '0',
  `timestamp` datetime DEFAULT NULL,
  `source` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bgpsessiondata`
--

LOCK TABLES `bgpsessiondata` WRITE;
/*!40000 ALTER TABLE `bgpsessiondata` DISABLE KEYS */;
INSERT INTO `bgpsessiondata` VALUES (1,12,201,4,3602,1,'2017-01-06 14:10:09','118.186.221.154'),(2,1,201,4,3602,1,'2017-01-06 14:37:22','118.186.221.154'),(3,201,3,4,3602,1,'2017-01-06 17:32:09','118.186.221.154'),(4,208,201,4,3602,1,'2017-01-06 18:13:59','118.186.221.154'),(5,201,10,4,3602,1,'2017-01-06 18:17:10','118.186.221.154'),(6,1,201,4,3602,1,'2017-01-06 19:12:07','118.186.221.154'),(7,201,3,4,3602,1,'2017-01-06 20:04:57','118.186.221.154'),(8,4,201,4,3602,1,'2017-01-06 21:49:43','118.186.221.154'),(9,201,15,4,3602,1,'2017-01-06 21:56:45','118.186.221.154'),(10,201,10,4,3602,1,'2017-01-06 22:09:49','118.186.221.154'),(11,2,201,4,3602,1,'2017-01-06 22:13:47','118.186.221.154'),(12,201,7,4,3602,1,'2017-01-06 22:59:43','118.186.221.154'),(13,8,201,4,3602,1,'2017-01-06 23:32:51','118.186.221.154'),(14,10,201,4,3602,1,'2017-01-06 23:37:52','118.186.221.154'),(15,17,201,4,3602,1,'2017-01-07 00:21:11','118.186.221.154'),(16,201,207,4,3602,1,'2017-01-07 00:52:50','118.186.221.154'),(17,6,201,4,3602,1,'2017-01-07 02:10:04','118.186.221.154'),(18,9,201,4,3602,1,'2017-01-07 02:32:00','118.186.221.154'),(19,6,201,4,3602,1,'2017-01-07 02:34:54','118.186.221.154'),(20,201,6,4,3602,1,'2017-01-07 03:18:16','118.186.221.154'),(21,201,6,4,3602,1,'2017-01-07 04:03:04','118.186.221.154'),(22,13,201,4,3602,1,'2017-01-07 04:14:50','118.186.221.154'),(23,201,13,4,3602,1,'2017-01-07 04:59:22','118.186.221.154'),(24,15,201,4,3602,1,'2017-01-07 05:15:04','118.186.221.154'),(25,3,201,4,3602,1,'2017-01-07 06:04:41','118.186.221.154'),(26,201,4,4,3602,1,'2017-01-07 06:23:01','118.186.221.154'),(27,201,6,4,3602,1,'2017-01-07 06:41:19','118.186.221.154'),(28,14,201,4,3602,1,'2017-01-07 07:29:17','118.186.221.154'),(29,201,207,4,3602,1,'2017-01-07 09:24:34','118.186.221.154'),(30,201,14,4,3602,1,'2017-01-07 13:11:55','118.186.221.154'),(31,4,201,4,3602,1,'2017-01-07 13:15:06','118.186.221.154'),(32,201,7,4,3602,1,'2017-01-07 14:17:12','118.186.221.154'),(33,203,201,4,3602,1,'2017-01-07 14:27:07','118.186.221.154'),(34,3,201,4,3602,1,'2017-01-07 14:46:34','118.186.221.154'),(35,6,201,4,3602,1,'2017-01-07 21:44:17','118.186.221.154'),(36,9,201,4,3602,1,'2017-01-07 23:28:10','118.186.221.154'),(37,201,16,4,3602,1,'2017-01-08 00:52:09','118.186.221.154'),(38,201,204,4,3602,1,'2017-01-08 02:10:10','118.186.221.154'),(39,201,15,4,3602,1,'2017-01-08 02:51:12','118.186.221.154'),(40,201,16,4,3602,1,'2017-01-08 04:05:03','118.186.221.154'),(41,9,201,4,3602,1,'2017-01-08 04:19:44','118.186.221.154'),(42,10,201,4,3602,1,'2017-01-08 04:43:55','118.186.221.154'),(43,2,201,4,3602,1,'2017-01-08 05:01:02','118.186.221.154'),(44,201,6,4,3602,1,'2017-01-08 05:21:57','118.186.221.154'),(45,7,201,4,3602,1,'2017-01-08 05:38:55','118.186.221.154'),(46,201,6,4,3602,1,'2017-01-08 06:08:17','118.186.221.154'),(47,17,201,4,3602,1,'2017-01-08 06:19:46','118.186.221.154'),(48,6,201,4,3602,1,'2017-01-08 06:35:37','118.186.221.154'),(49,201,7,4,3602,1,'2017-01-08 06:46:32','118.186.221.154'),(50,2,201,4,3602,1,'2017-01-08 06:54:16','118.186.221.154'),(51,201,3,4,3602,1,'2017-01-08 07:51:10','118.186.221.154'),(52,201,6,4,3602,1,'2017-01-08 09:23:45','118.186.221.154'),(53,201,1,4,3602,1,'2017-01-08 11:07:35','118.186.221.154'),(54,10,201,4,3602,1,'2017-01-08 11:19:11','118.186.221.154'),(55,201,17,4,3602,1,'2017-01-08 11:22:55','118.186.221.154'),(56,201,2,4,3602,1,'2017-01-08 11:25:05','118.186.221.154'),(57,201,14,4,3602,1,'2017-01-08 11:27:27','118.186.221.154'),(58,201,4,4,3602,1,'2017-01-08 12:25:05','118.186.221.154'),(59,16,201,4,3602,1,'2017-01-08 13:14:35','118.186.221.154'),(60,201,203,4,3602,1,'2017-01-08 15:01:08','118.186.221.154'),(61,207,201,4,3602,1,'2017-01-08 15:15:37','118.186.221.154'),(62,201,207,4,3602,1,'2017-01-08 16:14:08','118.186.221.154'),(63,201,3,4,3602,1,'2017-01-08 22:19:43','118.186.221.154'),(64,201,203,4,3602,1,'2017-01-08 22:23:34','118.186.221.154'),(65,13,201,4,3602,1,'2017-01-08 23:34:28','118.186.221.154'),(66,14,201,4,3602,1,'2017-01-08 23:41:27','118.186.221.154'),(67,15,201,4,3602,1,'2017-01-09 01:32:14','118.186.221.154'),(68,203,201,4,3602,1,'2017-01-09 01:48:29','118.186.221.154'),(69,10,201,4,3602,1,'2017-01-09 01:57:37','118.186.221.154'),(70,9,201,4,3602,1,'2017-01-09 02:22:15','118.186.221.154'),(71,208,201,4,3602,1,'2017-01-09 03:46:30','118.186.221.154'),(72,201,6,4,3602,1,'2017-01-09 04:03:22','118.186.221.154'),(73,4,201,4,3602,1,'2017-01-09 04:06:45','118.186.221.154'),(74,2,201,4,3602,1,'2017-01-09 04:14:57','118.186.221.154'),(75,203,201,4,3602,1,'2017-01-09 04:47:55','118.186.221.154'),(76,201,208,4,3602,1,'2017-01-09 05:22:05','118.186.221.154'),(77,1,201,4,3602,1,'2017-01-09 05:34:57','118.186.221.154'),(78,17,201,4,3602,1,'2017-01-09 05:35:33','118.186.221.154'),(79,201,15,4,3602,1,'2017-01-09 06:30:23','118.186.221.154'),(80,201,17,4,3602,1,'2017-01-09 06:34:37','118.186.221.154'),(81,2,201,4,3602,1,'2017-01-09 07:01:51','118.186.221.154'),(82,15,201,4,3602,1,'2017-01-09 08:59:32','118.186.221.154'),(83,201,6,4,3602,1,'2017-01-09 09:05:37','118.186.221.154'),(84,10,201,4,3602,1,'2017-01-09 09:22:56','118.186.221.154'),(85,201,1,4,3602,1,'2017-01-09 10:10:55','118.186.221.154'),(86,4,201,4,3602,1,'2017-01-09 10:14:08','118.186.221.154'),(87,208,201,4,3602,1,'2017-01-09 11:52:22','118.186.221.154'),(88,13,201,4,3602,1,'2017-01-09 12:32:40','118.186.221.154'),(89,201,4,4,3602,1,'2017-01-09 13:23:52','118.186.221.154'),(90,201,13,4,3602,1,'2017-01-09 14:09:30','118.186.221.154'),(91,207,201,4,3602,1,'2017-01-09 14:25:52','118.186.221.154'),(92,201,17,4,3602,1,'2017-01-09 14:58:34','118.186.221.154'),(93,208,201,4,3602,1,'2017-01-09 15:22:20','118.186.221.154'),(94,201,8,4,3602,1,'2017-01-09 15:24:28','118.186.221.154'),(95,201,14,4,3602,1,'2017-01-09 19:17:25','118.186.221.154'),(96,14,201,4,3602,1,'2017-01-09 21:30:53','118.186.221.154'),(97,201,4,4,3602,1,'2017-01-09 21:35:23','118.186.221.154'),(98,201,6,4,3602,1,'2017-01-09 21:39:58','118.186.221.154'),(99,203,201,4,3602,1,'2017-01-09 22:46:39','118.186.221.154'),(100,201,2,4,3602,1,'2017-01-10 00:43:43','118.186.221.154'),(101,6,201,4,3602,1,'2017-01-10 01:16:04','118.186.221.154'),(102,201,7,4,3602,1,'2017-01-10 01:48:18','118.186.221.154'),(103,201,12,4,3602,1,'2017-01-10 01:53:09','118.186.221.154'),(104,201,3,4,3602,1,'2017-01-10 02:01:44','118.186.221.154'),(105,6,201,4,3602,1,'2017-01-10 02:20:19','118.186.221.154'),(106,10,201,4,3602,1,'2017-01-10 03:21:13','118.186.221.154'),(107,201,12,4,3602,1,'2017-01-10 04:02:27','118.186.221.154'),(108,1,201,4,3602,1,'2017-01-10 04:31:52','118.186.221.154'),(109,201,4,4,3602,1,'2017-01-10 04:39:41','118.186.221.154'),(110,201,14,4,3602,1,'2017-01-10 04:40:45','118.186.221.154'),(111,207,201,4,3602,1,'2017-01-10 05:16:38','118.186.221.154'),(112,201,3,4,3602,1,'2017-01-10 05:20:19','118.186.221.154'),(113,201,12,4,3602,1,'2017-01-10 06:25:02','118.186.221.154'),(114,6,201,4,3602,1,'2017-01-10 06:28:01','118.186.221.154'),(115,207,201,4,3602,1,'2017-01-10 06:31:06','118.186.221.154'),(116,201,9,4,3602,1,'2017-01-10 06:54:20','118.186.221.154'),(117,201,2,4,3602,1,'2017-01-10 07:57:44','118.186.221.154'),(118,201,7,4,3602,1,'2017-01-10 08:04:09','118.186.221.154'),(119,7,201,4,3602,1,'2017-01-10 08:19:47','118.186.221.154'),(120,201,17,4,3602,1,'2017-01-10 09:01:31','118.186.221.154'),(121,6,201,4,3602,1,'2017-01-10 12:30:42','118.186.221.154'),(122,12,201,4,3602,1,'2017-01-10 12:55:39','118.186.221.154'),(123,1,201,4,3602,1,'2017-01-10 13:54:49','118.186.221.154'),(124,201,2,4,3602,1,'2017-01-10 14:06:19','118.186.221.154'),(125,201,16,4,3602,1,'2017-01-10 15:20:12','118.186.221.154'),(126,1,201,4,3602,1,'2017-01-10 15:50:13','118.186.221.154'),(127,201,8,4,3602,1,'2017-01-10 16:15:23','118.186.221.154'),(128,201,207,4,3602,1,'2017-01-10 19:34:22','118.186.221.154'),(129,14,201,4,3602,1,'2017-01-10 21:02:19','118.186.221.154'),(130,6,201,4,3602,1,'2017-01-10 21:23:10','118.186.221.154'),(131,13,201,4,3602,1,'2017-01-10 21:51:08','118.186.221.154'),(132,7,201,4,3602,1,'2017-01-10 21:51:23','118.186.221.154'),(133,11,201,4,3602,1,'2017-01-10 22:58:54','118.186.221.154'),(134,17,201,4,3602,1,'2017-01-10 23:08:00','118.186.221.154'),(135,201,204,4,3602,1,'2017-01-10 23:12:49','118.186.221.154'),(136,3,201,4,3602,1,'2017-01-10 23:43:58','118.186.221.154'),(137,201,204,4,3602,1,'2017-01-11 00:41:23','118.186.221.154'),(138,17,201,4,3602,1,'2017-01-11 01:24:48','118.186.221.154'),(139,8,201,4,3602,1,'2017-01-11 01:55:02','118.186.221.154'),(140,208,201,4,3602,1,'2017-01-11 02:04:45','118.186.221.154'),(141,16,201,4,3602,1,'2017-01-11 02:56:50','118.186.221.154'),(142,3,201,4,3602,1,'2017-01-11 03:31:46','118.186.221.154'),(143,201,7,4,3602,1,'2017-01-11 04:27:19','118.186.221.154'),(144,3,201,4,3602,1,'2017-01-11 04:56:01','118.186.221.154'),(145,201,16,4,3602,1,'2017-01-11 04:57:46','118.186.221.154'),(146,13,201,4,3602,1,'2017-01-11 05:03:46','118.186.221.154'),(147,201,9,4,3602,1,'2017-01-11 05:56:15','118.186.221.154'),(148,208,201,4,3602,1,'2017-01-11 06:00:43','118.186.221.154'),(149,12,201,4,3602,1,'2017-01-11 07:08:19','118.186.221.154'),(150,201,9,4,3602,1,'2017-01-11 07:30:45','118.186.221.154'),(151,1,201,4,3602,1,'2017-01-11 09:44:37','118.186.221.154'),(152,12,201,4,3602,1,'2017-01-11 11:24:18','118.186.221.154'),(153,17,201,4,3602,1,'2017-01-11 11:24:51','118.186.221.154'),(154,207,201,4,3602,1,'2017-01-11 11:44:20','118.186.221.154'),(155,201,204,4,3602,1,'2017-01-11 12:10:24','118.186.221.154'),(156,6,201,4,3602,1,'2017-01-11 12:56:50','118.186.221.154'),(157,11,201,4,3602,1,'2017-01-11 13:22:00','118.186.221.154'),(158,7,201,4,3602,1,'2017-01-11 13:52:30','118.186.221.154'),(159,201,1,4,3602,1,'2017-01-11 18:18:50','118.186.221.154'),(160,3,201,4,3602,1,'2017-01-11 18:38:27','118.186.221.154'),(161,8,201,4,3602,1,'2017-01-11 22:45:53','118.186.221.154'),(162,201,1,4,3602,1,'2017-01-11 23:00:32','118.186.221.154'),(163,12,201,4,3602,1,'2017-01-11 23:06:27','118.186.221.154'),(164,201,16,4,3602,1,'2017-01-11 23:16:46','118.186.221.154'),(165,15,201,4,3602,1,'2017-01-12 01:35:39','118.186.221.154'),(166,7,201,4,3602,1,'2017-01-12 01:41:10','118.186.221.154'),(167,10,201,4,3602,1,'2017-01-12 01:43:38','118.186.221.154'),(168,14,201,4,3602,1,'2017-01-12 02:22:13','118.186.221.154'),(169,201,9,4,3602,1,'2017-01-12 03:31:17','118.186.221.154'),(170,201,14,4,3602,1,'2017-01-12 03:51:50','118.186.221.154'),(171,201,209,4,3602,1,'2017-01-12 03:57:09','118.186.221.154'),(172,11,201,4,3602,1,'2017-01-12 03:57:18','118.186.221.154'),(173,201,3,4,3602,1,'2017-01-12 03:58:25','118.186.221.154'),(174,2,201,4,3602,1,'2017-01-12 03:58:57','118.186.221.154'),(175,201,204,4,3602,1,'2017-01-12 04:10:02','118.186.221.154'),(176,9,201,4,3602,1,'2017-01-12 04:11:17','118.186.221.154'),(177,4,201,4,3602,1,'2017-01-12 04:43:00','118.186.221.154'),(178,203,201,4,3602,1,'2017-01-12 04:48:44','118.186.221.154'),(179,201,6,4,3602,1,'2017-01-12 04:49:56','118.186.221.154'),(180,201,1,4,3602,1,'2017-01-12 05:22:53','118.186.221.154'),(181,201,13,4,3602,1,'2017-01-12 05:35:16','118.186.221.154'),(182,201,15,4,3602,1,'2017-01-12 05:37:30','118.186.221.154'),(183,201,8,4,3602,1,'2017-01-12 05:38:10','118.186.221.154'),(184,201,1,4,3602,1,'2017-01-12 05:39:11','118.186.221.154'),(185,6,201,4,3602,1,'2017-01-12 06:03:11','118.186.221.154'),(186,209,201,4,3602,1,'2017-01-12 06:13:54','118.186.221.154'),(187,16,201,4,3602,1,'2017-01-12 06:44:28','118.186.221.154'),(188,201,14,4,3602,1,'2017-01-12 06:45:24','118.186.221.154'),(189,208,201,4,3602,1,'2017-01-12 07:44:58','118.186.221.154'),(190,201,6,4,3602,1,'2017-01-12 08:39:59','118.186.221.154'),(191,201,9,4,3602,1,'2017-01-12 11:41:05','118.186.221.154'),(192,4,201,4,3602,1,'2017-01-12 11:56:18','118.186.221.154'),(193,8,201,4,3602,1,'2017-01-12 12:43:10','118.186.221.154'),(194,201,4,4,3602,1,'2017-01-12 14:15:23','118.186.221.154'),(195,11,201,4,3602,1,'2017-01-12 16:41:17','118.186.221.154'),(196,201,2,4,3602,1,'2017-01-12 17:02:44','118.186.221.154'),(197,6,201,4,3602,1,'2017-01-12 17:51:14','118.186.221.154'),(198,2,201,4,3602,1,'2017-01-12 18:23:30','118.186.221.154'),(199,201,7,4,3602,1,'2017-01-12 19:59:05','118.186.221.154'),(200,6,201,4,3602,1,'2017-01-12 22:39:35','118.186.221.154'),(201,201,10,4,3602,1,'2017-01-12 22:40:40','118.186.221.154'),(202,201,15,4,3602,1,'2017-01-13 01:05:37','118.186.221.154'),(203,1,201,4,3602,1,'2017-01-13 01:49:39','118.186.221.154'),(204,201,12,4,3602,1,'2017-01-13 02:15:06','118.186.221.154'),(205,201,4,4,3602,1,'2017-01-13 02:21:00','118.186.221.154'),(206,201,3,4,3602,1,'2017-01-13 03:03:18','118.186.221.154'),(207,17,201,4,3602,1,'2017-01-13 04:15:53','118.186.221.154'),(208,7,201,4,3602,1,'2017-01-13 04:42:56','118.186.221.154'),(209,8,201,4,3602,1,'2017-01-13 05:34:34','118.186.221.154'),(210,12,201,4,3602,1,'2017-01-13 05:34:36','118.186.221.154'),(211,201,203,4,3602,1,'2017-01-13 06:43:30','118.186.221.154'),(212,3,201,4,3602,1,'2017-01-13 09:16:12','118.186.221.154'),(213,201,9,4,3602,1,'2017-01-13 12:14:50','118.186.221.154'),(214,201,6,4,3602,1,'2017-01-13 12:53:19','118.186.221.154'),(215,208,201,4,3602,1,'2017-01-13 16:10:36','118.186.221.154'),(216,6,201,4,3602,1,'2017-01-13 16:58:23','118.186.221.154'),(217,201,6,4,3602,1,'2017-01-13 17:32:23','118.186.221.154'),(218,209,201,4,3602,1,'2017-01-13 19:29:11','118.186.221.154'),(219,207,201,4,3602,1,'2017-01-13 20:22:30','118.186.221.154'),(220,201,4,4,3602,1,'2017-01-13 20:50:30','118.186.221.154'),(221,209,201,4,3602,1,'2017-01-13 21:43:43','118.186.221.154'),(222,204,201,4,3602,1,'2017-01-13 22:50:00','118.186.221.154'),(223,11,201,4,3602,1,'2017-01-14 00:57:05','118.186.221.154'),(224,9,201,4,3602,1,'2017-01-14 01:12:38','118.186.221.154'),(225,201,203,4,3602,1,'2017-01-14 03:34:28','118.186.221.154'),(226,207,201,4,3602,1,'2017-01-14 03:34:58','118.186.221.154'),(227,201,17,4,3602,1,'2017-01-14 03:41:06','118.186.221.154'),(228,6,201,4,3602,1,'2017-01-14 04:47:21','118.186.221.154'),(229,1,201,4,3602,1,'2017-01-14 05:07:01','118.186.221.154'),(230,9,201,4,3602,1,'2017-01-14 05:09:17','118.186.221.154'),(231,201,9,4,3602,1,'2017-01-14 05:27:51','118.186.221.154'),(232,9,201,4,3602,1,'2017-01-14 05:51:15','118.186.221.154'),(233,201,2,4,3602,1,'2017-01-14 05:59:43','118.186.221.154'),(234,13,201,4,3602,1,'2017-01-14 06:06:17','118.186.221.154'),(235,209,201,4,3602,1,'2017-01-14 06:18:14','118.186.221.154'),(236,201,207,4,3602,1,'2017-01-14 06:44:18','118.186.221.154'),(237,209,201,4,3602,1,'2017-01-14 07:52:16','118.186.221.154'),(238,204,201,4,3602,1,'2017-01-14 12:16:22','118.186.221.154'),(239,201,6,4,3602,1,'2017-01-14 12:59:45','118.186.221.154'),(240,201,3,4,3602,1,'2017-01-14 17:19:59','118.186.221.154'),(241,201,2,4,3602,1,'2017-01-14 18:37:08','118.186.221.154'),(242,201,3,4,3602,1,'2017-01-14 21:50:00','118.186.221.154'),(243,201,10,4,3602,1,'2017-01-14 21:50:32','118.186.221.154'),(244,201,10,4,3602,1,'2017-01-15 01:20:29','118.186.221.154'),(245,204,201,4,3602,1,'2017-01-15 01:44:41','118.186.221.154'),(246,12,201,4,3602,1,'2017-01-15 02:17:33','118.186.221.154'),(247,201,2,4,3602,1,'2017-01-15 02:19:55','118.186.221.154'),(248,1,201,4,3602,1,'2017-01-15 02:26:03','118.186.221.154'),(249,201,4,4,3602,1,'2017-01-15 02:36:43','118.186.221.154'),(250,7,201,4,3602,1,'2017-01-15 02:39:25','118.186.221.154'),(251,204,201,4,3602,1,'2017-01-15 03:37:46','118.186.221.154'),(252,13,201,4,3602,1,'2017-01-15 03:49:37','118.186.221.154'),(253,19,201,4,3602,1,'2017-01-15 04:16:18','118.186.221.154'),(254,201,13,4,3602,1,'2017-01-15 04:41:08','118.186.221.154'),(255,201,13,4,3602,1,'2017-01-15 04:57:17','118.186.221.154'),(256,8,201,4,3602,1,'2017-01-15 05:01:43','118.186.221.154'),(257,201,4,4,3602,1,'2017-01-15 05:15:57','118.186.221.154'),(258,17,201,4,3602,1,'2017-01-15 05:29:42','118.186.221.154'),(259,8,201,4,3602,1,'2017-01-15 06:13:34','118.186.221.154'),(260,201,203,4,3602,1,'2017-01-15 07:13:28','118.186.221.154'),(261,201,4,4,3602,1,'2017-01-15 07:34:32','118.186.221.154'),(262,3,201,4,3602,1,'2017-01-15 07:48:06','118.186.221.154'),(263,15,201,4,3602,1,'2017-01-15 08:02:48','118.186.221.154'),(264,201,6,4,3602,1,'2017-01-15 09:33:10','118.186.221.154'),(265,9,201,4,3602,1,'2017-01-15 09:52:42','118.186.221.154'),(266,14,201,4,3602,1,'2017-01-15 10:45:06','118.186.221.154'),(267,6,201,4,3602,1,'2017-01-15 10:56:30','118.186.221.154'),(268,14,201,4,3602,1,'2017-01-15 11:15:28','118.186.221.154'),(269,9,201,4,3602,1,'2017-01-15 13:53:42','118.186.221.154'),(270,9,201,4,3602,1,'2017-01-15 17:54:19','118.186.221.154'),(271,201,17,4,3602,1,'2017-01-15 20:07:48','118.186.221.154'),(272,201,15,4,3602,1,'2017-01-15 20:22:04','118.186.221.154'),(273,201,8,4,3602,1,'2017-01-15 21:04:27','118.186.221.154'),(274,2,201,4,3602,1,'2017-01-15 22:36:02','118.186.221.154'),(275,201,9,4,3602,1,'2017-01-15 23:37:07','118.186.221.154'),(276,201,1,4,3602,1,'2017-01-16 01:29:53','118.186.221.154'),(277,201,11,4,3602,1,'2017-01-16 01:37:55','118.186.221.154'),(278,201,7,4,3602,1,'2017-01-16 04:21:34','118.186.221.154'),(279,201,4,4,3602,1,'2017-01-16 05:38:30','118.186.221.154'),(280,201,208,4,3602,1,'2017-01-16 05:41:37','118.186.221.154'),(281,201,2,4,3602,1,'2017-01-16 08:11:59','118.186.221.154'),(282,201,9,4,3602,1,'2017-01-16 08:22:24','118.186.221.154'),(283,201,209,4,3602,1,'2017-01-16 10:31:56','118.186.221.154'),(284,201,9,4,3602,1,'2017-01-16 10:56:44','118.186.221.154'),(285,207,201,4,3602,1,'2017-01-16 11:18:23','118.186.221.154');
/*!40000 ALTER TABLE `bgpsessiondata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cabinet`
--

DROP TABLE IF EXISTS `cabinet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locationid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cololocation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4CED05B05E237E06` (`name`),
  KEY `IDX_4CED05B03530CCF` (`locationid`),
  CONSTRAINT `FK_4CED05B03530CCF` FOREIGN KEY (`locationid`) REFERENCES `location` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabinet`
--

LOCK TABLES `cabinet` WRITE;
/*!40000 ALTER TABLE `cabinet` DISABLE KEYS */;
INSERT INTO `cabinet` VALUES (1,1,'MODE5','MODE5',47,'','');
/*!40000 ALTER TABLE `cabinet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `change_log`
--

DROP TABLE IF EXISTS `change_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `change_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `visibility` int(11) NOT NULL,
  `livedate` date NOT NULL,
  `version` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E1A0AD8DE12AB56` (`created_by`),
  CONSTRAINT `FK_5E1A0AD8DE12AB56` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `change_log`
--

LOCK TABLES `change_log` WRITE;
/*!40000 ALTER TABLE `change_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `change_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_billing_detail`
--

DROP TABLE IF EXISTS `company_billing_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_billing_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billingContactName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingAddress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingAddress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingAddress3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingTownCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingPostcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingCountry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingTelephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vatNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vatRate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purchaseOrderRequired` tinyint(1) NOT NULL DEFAULT '0',
  `invoiceMethod` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoiceEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billingFrequency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_billing_detail`
--

LOCK TABLES `company_billing_detail` WRITE;
/*!40000 ALTER TABLE `company_billing_detail` DISABLE KEYS */;
INSERT INTO `company_billing_detail` VALUES (1,NULL,'c/o The Bill Payers','Money House, Moneybags Street',NULL,'Dublin','D4','IE',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL),(9,'','','','','','','','','','','',0,'','',''),(10,'','','','','','','','','','','',0,'','',''),(11,'','','','','','','','','','','',0,'','',''),(12,'','','','','','','','','','','',0,'','',''),(13,'','','','','','','','','','','',0,'','',''),(14,'','','','','','','','','','','',0,'','',''),(15,'','','','','','','','','','','',0,'','',''),(16,'','','','','','','','','','','',0,'','',''),(17,'','','','','','','','','','','',0,'','',''),(18,'','','','','','','','','','','',0,'','',''),(19,'','','','','','','','','','','',0,'','',''),(20,'','','','','','','','','','','',0,'','',''),(21,'','','','','','','','','','','',0,'','',''),(22,'','','','','','','','','','','',0,'','','');
/*!40000 ALTER TABLE `company_billing_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_registration_detail`
--

DROP TABLE IF EXISTS `company_registration_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_registration_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registeredName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurisdiction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `townCity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_registration_detail`
--

LOCK TABLES `company_registration_detail` WRITE;
/*!40000 ALTER TABLE `company_registration_detail` DISABLE KEYS */;
INSERT INTO `company_registration_detail` VALUES (1,'Somecity Internet Exchange Point Limited','123456','Ireland','5 Somewhere',NULL,NULL,'Dublin','D4','IE'),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'','','','','','','','',''),(10,'','','','','','','','',''),(11,'','','','','','','','',''),(12,'','','','','','','','',''),(13,'','','','','','','','',''),(14,'','','','','','','','',''),(15,'','','','','','','','',''),(16,'','','','','','','','',''),(17,'','','','','','','','',''),(18,'','','','','','','','',''),(19,'','','','','','','','',''),(20,'','','','','','','','',''),(21,'','','','','','','','',''),(22,'','','','','','','','','');
/*!40000 ALTER TABLE `company_registration_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consoleserverconnection`
--

DROP TABLE IF EXISTS `consoleserverconnection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consoleserverconnection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `switchid` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `parity` int(11) DEFAULT NULL,
  `stopbits` int(11) DEFAULT NULL,
  `flowcontrol` int(11) DEFAULT NULL,
  `autobaud` tinyint(1) DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_530316DCDA0209B9` (`custid`),
  KEY `IDX_530316DCDC2C08F8` (`switchid`),
  CONSTRAINT `FK_530316DCDA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_530316DCDC2C08F8` FOREIGN KEY (`switchid`) REFERENCES `switch` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consoleserverconnection`
--

LOCK TABLES `consoleserverconnection` WRITE;
/*!40000 ALTER TABLE `consoleserverconnection` DISABLE KEYS */;
/*!40000 ALTER TABLE `consoleserverconnection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `custid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facilityaccess` tinyint(1) NOT NULL DEFAULT '0',
  `mayauthorize` tinyint(1) NOT NULL DEFAULT '0',
  `notes` longtext COLLATE utf8_unicode_ci,
  `lastupdated` datetime DEFAULT NULL,
  `lastupdatedby` int(11) DEFAULT NULL,
  `creator` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4C62E638A76ED395` (`user_id`),
  KEY `IDX_4C62E638DA0209B9` (`custid`),
  CONSTRAINT `FK_4C62E638A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_4C62E638DA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,1,1,'Jason','Master of the CNIX','jason.yang@cnix.com.cn','','+86 18510627106',1,1,'','2016-12-19 11:23:19',1,'1','2016-11-10 10:22:56'),(2,2,2,'shaoyangmin','manager','ip-noc@baidu.com','18511870868','18511870868',1,1,'','2016-11-10 21:09:05',1,'jason','2016-11-10 16:54:14'),(3,3,3,'Houjue','manager','','','',1,1,'','2016-11-10 17:08:19',1,'jason','2016-11-10 17:08:19'),(4,4,1,'cnix-noc','NOC','noc@cnix.com.cn','','',1,1,'','2016-12-19 11:24:09',1,'jason','2016-12-19 11:24:09');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_group`
--

DROP TABLE IF EXISTS `contact_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `limited_to` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_40EA54CA5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_group`
--

LOCK TABLES `contact_group` WRITE;
/*!40000 ALTER TABLE `contact_group` DISABLE KEYS */;
INSERT INTO `contact_group` VALUES (1,'Billing','Contact role for billing matters','ROLE',1,0,'2016-11-10 10:22:56'),(2,'Technical','Contact role for technical matters','ROLE',1,0,'2016-11-10 10:22:56'),(3,'Admin','Contact role for admin matters','ROLE',1,0,'2016-11-10 10:22:56'),(4,'Marketing','Contact role for marketing matters','ROLE',1,0,'2016-11-10 10:22:56');
/*!40000 ALTER TABLE `contact_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_to_group`
--

DROP TABLE IF EXISTS `contact_to_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_to_group` (
  `contact_id` int(11) NOT NULL,
  `contact_group_id` bigint(20) NOT NULL,
  PRIMARY KEY (`contact_id`,`contact_group_id`),
  KEY `IDX_FCD9E962E7A1254A` (`contact_id`),
  KEY `IDX_FCD9E962647145D0` (`contact_group_id`),
  CONSTRAINT `FK_FCD9E962647145D0` FOREIGN KEY (`contact_group_id`) REFERENCES `contact_group` (`id`),
  CONSTRAINT `FK_FCD9E962E7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_to_group`
--

LOCK TABLES `contact_to_group` WRITE;
/*!40000 ALTER TABLE `contact_to_group` DISABLE KEYS */;
INSERT INTO `contact_to_group` VALUES (2,2),(3,2);
/*!40000 ALTER TABLE `contact_to_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cust`
--

DROP TABLE IF EXISTS `cust`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cust` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `irrdb` int(11) DEFAULT NULL,
  `company_registered_detail_id` int(11) DEFAULT NULL,
  `company_billing_details_id` int(11) DEFAULT NULL,
  `reseller` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abbreviatedName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autsys` int(11) DEFAULT NULL,
  `maxprefixes` int(11) DEFAULT NULL,
  `peeringemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noc24hphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocfax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nochours` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocwww` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peeringmacro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peeringmacrov6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peeringpolicy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `corpwww` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datejoin` date DEFAULT NULL,
  `dateleave` date DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `activepeeringmatrix` tinyint(1) DEFAULT NULL,
  `peeringDb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastupdated` date DEFAULT NULL,
  `lastupdatedby` int(11) DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` date DEFAULT NULL,
  `MD5Support` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'UNKNOWN',
  `isReseller` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_997B25A64082763` (`shortname`),
  KEY `IDX_997B25A666E98DF` (`irrdb`),
  KEY `IDX_997B25A98386213` (`company_registered_detail_id`),
  KEY `IDX_997B25A84478F0C` (`company_billing_details_id`),
  KEY `IDX_997B25A18015899` (`reseller`),
  CONSTRAINT `FK_997B25A18015899` FOREIGN KEY (`reseller`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_997B25A666E98DF` FOREIGN KEY (`irrdb`) REFERENCES `irrdbconfig` (`id`),
  CONSTRAINT `FK_997B25A84478F0C` FOREIGN KEY (`company_billing_details_id`) REFERENCES `company_billing_detail` (`id`),
  CONSTRAINT `FK_997B25A98386213` FOREIGN KEY (`company_registered_detail_id`) REFERENCES `company_registration_detail` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cust`
--

LOCK TABLES `cust` WRITE;
/*!40000 ALTER TABLE `cust` DISABLE KEYS */;
INSERT INTO `cust` VALUES (1,NULL,1,1,NULL,'CNIX Internet Exchange Point',1,'cnix','CNIX',12345,1000,'peering@lonap.net','+353 1 123 4567','+353 1 123 4567','+353 1 123 4568','noc@siep.com','24x7','http://www.siep.com/noc/','AS-SIEP','AS-SIEP6','mandatory','http://www.cnix.com.cn/','2016-07-01',NULL,1,1,NULL,'2016-11-10',1,'jason','2016-11-10','YES',0),(2,5,2,2,NULL,'百度',1,'baidu','Baidu',38365,12000,'ip-noc@baidu.com','13601147367','13601147367','','ip-noc@baidu.com','24x7','http://www.baidu.com/','103.216.40.11','2404:E780:F872:A:1::95DD:1/64','open','http://www.baidu.com/','2016-09-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2016-11-10','YES',0),(3,5,3,3,NULL,'中联互动',1,'zhld','ZhonglianHD',58863,12000,'','','','','','24x7','','103.216.40.12','2404:E780:F872:A:1::‭E5EF:1','open','http://www.vhost.com.cn/','2016-09-10',NULL,1,1,NULL,'2017-02-21',1,'jason','2016-11-10','YES',0),(4,5,4,4,NULL,'昆时',1,'kuntime','KunTime',63598,12000,'','','','','','0','','103.216.40.13','2404:E780:F872:A:1::F86E:1','open','','2016-12-08',NULL,1,1,NULL,'2017-02-21',1,'jason','2016-12-08','MANDATORY',0),(5,NULL,5,5,NULL,'方正宽带',1,'founder','方正宽带',63598,0,'','','','','','0','','','','','www.founderbn.com','2016-09-26','2016-01-03',1,1,NULL,'2017-01-04',1,'jason','2016-12-19','MANDATORY',0),(6,5,6,6,NULL,'方正',1,'fzkd','Fangzheng',18245,12000,'','','010 82524122','','','24x7','','103.216.40.14','2404:E780:F872:A:1::4745:1','selective','www.founderbn.com','2016-09-26',NULL,1,1,NULL,'2017-02-21',1,'jason','2016-12-19','MANDATORY',0),(7,5,7,7,NULL,'Tencent',1,'tencent','TenCent',45090,12000,'tencent_noc@tencent.com','','0755-86013388-6000','','tencent_noc@tencent.com','24x7','','103.216.40.16','2404:E780:F872:A:1::B022:1','open','www.qq.com','2016-10-09',NULL,1,1,NULL,'2017-01-04',1,'jason','2016-12-19','MANDATORY',0),(8,5,8,8,NULL,'CCTV',1,'cctv','CCTV',55957,12000,'','','','','','24x7','','103.216.40.17','','open','www.cctv.com','2016-11-15',NULL,1,1,NULL,'2017-01-04',1,'jason','2016-12-19','MANDATORY',0),(9,5,9,9,NULL,'Kuandaiyi',1,'kuandaiyi','Kuandaiyi',58999,12000,'','','','','','0','','103.216.40.18','','open','','2017-01-06',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-06','MANDATORY',0),(10,5,10,10,NULL,'上海游驰',1,'shanghaiyouchi','Shanghaiyouchi',59060,12000,'','','','','','0','','103.216.40.19','','selective','','2017-01-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2017-01-06','MANDATORY',0),(11,5,11,11,NULL,'阿里巴巴',1,'alibaba','alibaba',37963,12000,'','','','','','0','','103.216.40.20','','open','','2017-01-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2017-01-06','MANDATORY',0),(12,5,12,12,NULL,'21vianet',1,'21vianet','21vianet',17428,12000,'','','','','','0','','103.216.40.21','','open','','2017-01-06',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-06','MANDATORY',0),(13,5,13,13,NULL,'yiantianxia',1,'yiantianxia','yiantianxia',45093,12000,'','','','','','0','','103.216.40.22','','open','','2017-01-06',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-06','MANDATORY',0),(14,5,14,14,NULL,'宏伟信达',1,'hongweixinda','hongweixinda',63649,12000,'','','','','','0','','103.216.40.23','','open','','2017-01-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2017-01-06','MANDATORY',0),(15,5,15,15,NULL,'乐视',1,'leshi','leshi',58548,12000,'','','','','','0','','103.216.40.24','','open','','2017-01-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2017-01-06','MANDATORY',0),(16,5,16,16,NULL,'21vianet',1,'shijihulian','21vianet',24133,12000,'','','','','','0','','','','selective','','2017-01-06',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-06','MANDATORY',0),(17,5,17,17,NULL,'guanghuanshixun',1,'guanghuanshixun','guanghuanshixun',63530,12000,'','','','','','0','','103.216.40.26','','open','','2017-01-06',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-06','MANDATORY',0),(18,5,18,18,NULL,'搜狐',1,'sohu','sohu',65510,12000,'','','','','','0','','103.216.40.27','','open','','2017-01-06',NULL,1,1,NULL,'2017-02-21',1,'jason','2017-01-06','MANDATORY',0),(19,5,19,19,NULL,'guanghuanxinwang',1,'guanghuanxinwang','guanghuanxinwang',23844,12000,'','','','','','0','','103.216.40.29','','open','','2017-01-13',NULL,1,1,NULL,NULL,NULL,'jason','2017-01-13','MANDATORY',0),(20,5,20,20,NULL,'ksyun',1,'ksyun','ksyun',59019,12000,'','','','','','0','','','','open','','2017-02-16',NULL,1,1,NULL,NULL,NULL,'jason','2017-02-16','MANDATORY',0),(21,5,21,21,NULL,'Tencent2',1,'tencent2','Tencent2',45090,12000,'','','','','','0','','103.216.40.31','','open','','2017-02-21',NULL,1,1,NULL,NULL,NULL,'jason','2017-02-21','MANDATORY',0),(22,5,22,22,NULL,'Aipu',1,'aipu','Aipu',58837,12000,'','','','','','0','','103.216.40.30','','open','','2017-02-21',NULL,1,1,NULL,NULL,NULL,'jason','2017-02-21','MANDATORY',0);
/*!40000 ALTER TABLE `cust` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cust_notes`
--

DROP TABLE IF EXISTS `cust_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cust_notes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6377D8679395C3F3` (`customer_id`),
  CONSTRAINT `FK_6377D8679395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cust_notes`
--

LOCK TABLES `cust_notes` WRITE;
/*!40000 ALTER TABLE `cust_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `cust_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custkit`
--

DROP TABLE IF EXISTS `custkit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custkit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `cabinetid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8127F9AADA0209B9` (`custid`),
  KEY `IDX_8127F9AA2B96718A` (`cabinetid`),
  CONSTRAINT `FK_8127F9AA2B96718A` FOREIGN KEY (`cabinetid`) REFERENCES `cabinet` (`id`),
  CONSTRAINT `FK_8127F9AADA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custkit`
--

LOCK TABLES `custkit` WRITE;
/*!40000 ALTER TABLE `custkit` DISABLE KEYS */;
/*!40000 ALTER TABLE `custkit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_to_ixp`
--

DROP TABLE IF EXISTS `customer_to_ixp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_to_ixp` (
  `customer_id` int(11) NOT NULL,
  `ixp_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`,`ixp_id`),
  KEY `IDX_E85DBF209395C3F3` (`customer_id`),
  KEY `IDX_E85DBF20A5A4E881` (`ixp_id`),
  CONSTRAINT `FK_E85DBF209395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_E85DBF20A5A4E881` FOREIGN KEY (`ixp_id`) REFERENCES `ixp` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_to_ixp`
--

LOCK TABLES `customer_to_ixp` WRITE;
/*!40000 ALTER TABLE `customer_to_ixp` DISABLE KEYS */;
INSERT INTO `customer_to_ixp` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1);
/*!40000 ALTER TABLE `customer_to_ixp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infrastructure`
--

DROP TABLE IF EXISTS `infrastructure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infrastructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ixp_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isPrimary` tinyint(1) NOT NULL DEFAULT '0',
  `aggregate_graph_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `IXPSN` (`shortname`,`ixp_id`),
  KEY `IDX_D129B190A5A4E881` (`ixp_id`),
  CONSTRAINT `FK_D129B190A5A4E881` FOREIGN KEY (`ixp_id`) REFERENCES `ixp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infrastructure`
--

LOCK TABLES `infrastructure` WRITE;
/*!40000 ALTER TABLE `infrastructure` DISABLE KEYS */;
INSERT INTO `infrastructure` VALUES (1,1,'CNIX AlphaNet','cnix alphanet',1,'cnix-statistics');
/*!40000 ALTER TABLE `infrastructure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipv4address`
--

DROP TABLE IF EXISTS `ipv4address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipv4address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vlanid` int(11) DEFAULT NULL,
  `address` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A44BCBEEF48D6D0` (`vlanid`),
  CONSTRAINT `FK_A44BCBEEF48D6D0` FOREIGN KEY (`vlanid`) REFERENCES `vlan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipv4address`
--

LOCK TABLES `ipv4address` WRITE;
/*!40000 ALTER TABLE `ipv4address` DISABLE KEYS */;
INSERT INTO `ipv4address` VALUES (1,1,'103.216.40.11'),(2,1,'103.216.40.12'),(3,1,'103.216.40.13'),(4,1,'103.216.40.14'),(5,1,'103.216.40.15'),(6,1,'103.216.40.16'),(7,1,'103.216.40.17'),(8,1,'103.216.40.18'),(9,1,'103.216.40.19'),(10,1,'103.216.40.20'),(11,1,'103.216.40.21'),(12,1,'103.216.40.22'),(13,1,'103.216.40.23'),(14,1,'103.216.40.24'),(15,1,'103.216.40.25'),(16,1,'103.216.40.26'),(17,1,'103.216.40.27'),(18,1,'103.216.40.28'),(19,1,'103.216.40.29'),(20,1,'103.216.40.30'),(21,1,'103.216.40.31'),(22,1,'103.216.40.32'),(23,1,'103.216.40.33'),(24,1,'103.216.40.34'),(25,1,'103.216.40.35'),(26,1,'103.216.40.36'),(27,1,'103.216.40.37'),(28,1,'103.216.40.38'),(29,1,'103.216.40.39'),(30,1,'103.216.40.40'),(31,1,'103.216.40.41'),(32,1,'103.216.40.42'),(33,1,'103.216.40.43'),(34,1,'103.216.40.44'),(35,1,'103.216.40.45'),(36,1,'103.216.40.46'),(37,1,'103.216.40.47'),(38,1,'103.216.40.48'),(39,1,'103.216.40.49'),(40,1,'103.216.40.50'),(41,1,'103.216.40.51'),(42,1,'103.216.40.52'),(43,1,'103.216.40.53'),(44,1,'103.216.40.54'),(45,1,'103.216.40.55'),(46,1,'103.216.40.56'),(47,1,'103.216.40.57'),(48,1,'103.216.40.58'),(49,1,'103.216.40.59'),(50,1,'103.216.40.60'),(51,1,'103.216.40.61'),(52,1,'103.216.40.62'),(53,1,'103.216.40.63'),(54,1,'103.216.40.64'),(55,1,'103.216.40.65'),(56,1,'103.216.40.66'),(57,1,'103.216.40.67'),(58,1,'103.216.40.68'),(59,1,'103.216.40.69'),(60,1,'103.216.40.70'),(61,1,'103.216.40.71'),(62,1,'103.216.40.72'),(63,1,'103.216.40.73'),(64,1,'103.216.40.74'),(65,1,'103.216.40.75'),(66,1,'103.216.40.76'),(67,1,'103.216.40.77'),(68,1,'103.216.40.78'),(69,1,'103.216.40.79'),(70,1,'103.216.40.80'),(71,1,'103.216.40.81'),(72,1,'103.216.40.82'),(73,1,'103.216.40.83'),(74,1,'103.216.40.84'),(75,1,'103.216.40.85'),(76,1,'103.216.40.86'),(77,1,'103.216.40.87'),(78,1,'103.216.40.88'),(79,1,'103.216.40.89'),(80,1,'103.216.40.90'),(81,1,'103.216.40.91'),(82,1,'103.216.40.92'),(83,1,'103.216.40.93'),(84,1,'103.216.40.94'),(85,1,'103.216.40.95'),(86,1,'103.216.40.96'),(87,1,'103.216.40.97'),(88,1,'103.216.40.98'),(89,1,'103.216.40.99'),(90,1,'103.216.40.100'),(91,1,'103.216.40.101'),(92,1,'103.216.40.102'),(93,1,'103.216.40.103'),(94,1,'103.216.40.104'),(95,1,'103.216.40.105'),(96,1,'103.216.40.106'),(97,1,'103.216.40.107'),(98,1,'103.216.40.108'),(99,1,'103.216.40.109'),(100,1,'103.216.40.110'),(101,1,'103.216.40.111'),(102,1,'103.216.40.112'),(103,1,'103.216.40.113'),(104,1,'103.216.40.114'),(105,1,'103.216.40.115'),(106,1,'103.216.40.116'),(107,1,'103.216.40.117'),(108,1,'103.216.40.118'),(109,1,'103.216.40.119'),(110,1,'103.216.40.120'),(111,1,'103.216.40.121'),(112,1,'103.216.40.122'),(113,1,'103.216.40.123'),(114,1,'103.216.40.124'),(115,1,'103.216.40.125'),(116,1,'103.216.40.126'),(117,1,'103.216.40.127'),(118,1,'103.216.40.128'),(119,1,'103.216.40.129'),(120,1,'103.216.40.130'),(121,1,'103.216.40.131'),(122,1,'103.216.40.132'),(123,1,'103.216.40.133'),(124,1,'103.216.40.134'),(125,1,'103.216.40.135'),(126,1,'103.216.40.136'),(127,1,'103.216.40.137'),(128,1,'103.216.40.138'),(129,1,'103.216.40.139'),(130,1,'103.216.40.140'),(131,1,'103.216.40.141'),(132,1,'103.216.40.142'),(133,1,'103.216.40.143'),(134,1,'103.216.40.144'),(135,1,'103.216.40.145'),(136,1,'103.216.40.146'),(137,1,'103.216.40.147'),(138,1,'103.216.40.148'),(139,1,'103.216.40.149'),(140,1,'103.216.40.150'),(141,1,'103.216.40.151'),(142,1,'103.216.40.152'),(143,1,'103.216.40.153'),(144,1,'103.216.40.154'),(145,1,'103.216.40.155'),(146,1,'103.216.40.156'),(147,1,'103.216.40.157'),(148,1,'103.216.40.158'),(149,1,'103.216.40.159'),(150,1,'103.216.40.160'),(151,1,'103.216.40.161'),(152,1,'103.216.40.162'),(153,1,'103.216.40.163'),(154,1,'103.216.40.164'),(155,1,'103.216.40.165'),(156,1,'103.216.40.166'),(157,1,'103.216.40.167'),(158,1,'103.216.40.168'),(159,1,'103.216.40.169'),(160,1,'103.216.40.170'),(161,1,'103.216.40.171'),(162,1,'103.216.40.172'),(163,1,'103.216.40.173'),(164,1,'103.216.40.174'),(165,1,'103.216.40.175'),(166,1,'103.216.40.176'),(167,1,'103.216.40.177'),(168,1,'103.216.40.178'),(169,1,'103.216.40.179'),(170,1,'103.216.40.180'),(171,1,'103.216.40.181'),(172,1,'103.216.40.182'),(173,1,'103.216.40.183'),(174,1,'103.216.40.184'),(175,1,'103.216.40.185'),(176,1,'103.216.40.186'),(177,1,'103.216.40.187'),(178,1,'103.216.40.188'),(179,1,'103.216.40.189'),(180,1,'103.216.40.190'),(181,1,'103.216.40.191'),(182,1,'103.216.40.192'),(183,1,'103.216.40.193'),(184,1,'103.216.40.194'),(185,1,'103.216.40.195'),(186,1,'103.216.40.196'),(187,1,'103.216.40.197'),(188,1,'103.216.40.198'),(189,1,'103.216.40.199'),(190,1,'103.216.40.200'),(191,1,'103.216.40.201'),(192,1,'103.216.40.202'),(193,1,'103.216.40.203'),(194,1,'103.216.40.204'),(195,1,'103.216.40.205'),(196,1,'103.216.40.206'),(197,1,'103.216.40.207'),(198,1,'103.216.40.208'),(199,1,'103.216.40.209'),(200,1,'103.216.40.210'),(201,1,'103.216.40.1'),(202,1,'103.216.40.2'),(203,1,'103.216.40.3'),(204,1,'103.216.40.4'),(205,1,'103.216.40.5'),(206,1,'103.216.40.6'),(207,1,'103.216.40.7'),(208,1,'103.216.40.8'),(209,1,'103.216.40.9'),(210,1,'103.216.40.10');
/*!40000 ALTER TABLE `ipv4address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipv6address`
--

DROP TABLE IF EXISTS `ipv6address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipv6address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vlanid` int(11) DEFAULT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E66ECC93F48D6D0` (`vlanid`),
  CONSTRAINT `FK_E66ECC93F48D6D0` FOREIGN KEY (`vlanid`) REFERENCES `vlan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipv6address`
--

LOCK TABLES `ipv6address` WRITE;
/*!40000 ALTER TABLE `ipv6address` DISABLE KEYS */;
INSERT INTO `ipv6address` VALUES (2,1,'2404:E780:F872:A:1::95DD:1'),(3,1,'2404:E780:F872:A:1::B022:1');
/*!40000 ALTER TABLE `ipv6address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `irrdb_asn`
--

DROP TABLE IF EXISTS `irrdb_asn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `irrdb_asn` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `asn` int(11) NOT NULL,
  `protocol` int(11) NOT NULL,
  `first_seen` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `custasn` (`asn`,`protocol`,`customer_id`),
  KEY `IDX_87BFC5569395C3F3` (`customer_id`),
  CONSTRAINT `FK_87BFC5569395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `irrdb_asn`
--

LOCK TABLES `irrdb_asn` WRITE;
/*!40000 ALTER TABLE `irrdb_asn` DISABLE KEYS */;
/*!40000 ALTER TABLE `irrdb_asn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `irrdb_prefix`
--

DROP TABLE IF EXISTS `irrdb_prefix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `irrdb_prefix` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `protocol` int(11) NOT NULL,
  `first_seen` datetime NOT NULL,
  `last_seen` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `custprefix` (`prefix`,`protocol`,`customer_id`),
  KEY `IDX_FE73E77C9395C3F3` (`customer_id`),
  CONSTRAINT `FK_FE73E77C9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `irrdb_prefix`
--

LOCK TABLES `irrdb_prefix` WRITE;
/*!40000 ALTER TABLE `irrdb_prefix` DISABLE KEYS */;
INSERT INTO `irrdb_prefix` VALUES (1,8,'103.216.40.17/32',4,'2017-01-03 10:00:12','2017-01-04 06:34:57'),(2,6,'103.216.40.14/32',4,'2017-01-03 10:00:13','2017-01-04 06:34:58'),(3,6,'2404:e780:f872:a:1:0:4745:1/128',6,'2017-01-03 10:00:13','2017-01-04 06:34:58'),(4,7,'103.216.40.16/32',4,'2017-01-03 10:00:14','2017-01-04 06:35:00'),(5,7,'2404:e780:f872:a:1:0:b022:1/128',6,'2017-01-03 10:00:15','2017-01-04 06:35:01'),(6,2,'103.216.40.11/32',4,'2017-01-04 06:34:56','2017-01-04 06:34:56'),(7,2,'2404:e780:f872:a::/64',6,'2017-01-04 06:34:56','2017-01-04 06:34:56'),(8,4,'103.216.40.13/32',4,'2017-01-04 06:34:59','2017-01-04 06:34:59'),(9,4,'2404:e780:f872:a:1:0:f86e:1/128',6,'2017-01-04 06:35:00','2017-01-04 06:35:00'),(10,3,'103.216.40.12/32',4,'2017-01-04 06:35:02','2017-01-04 06:35:02'),(11,3,'2404:e780:f872:a:1:0:e5ef:1/128',6,'2017-01-04 06:35:03','2017-01-04 06:35:03');
/*!40000 ALTER TABLE `irrdb_prefix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `irrdbconfig`
--

DROP TABLE IF EXISTS `irrdbconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `irrdbconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protocol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `irrdbconfig`
--

LOCK TABLES `irrdbconfig` WRITE;
/*!40000 ALTER TABLE `irrdbconfig` DISABLE KEYS */;
INSERT INTO `irrdbconfig` VALUES (1,'whois.ripe.net','ripe','RIPE','RIPE Query from RIPE Database'),(2,'whois.radb.net','irrd','RADB','RADB Query from RADB Database'),(3,'whois.lacnic.net','ripe','LACNIC','LACNIC Query from LACNIC Database'),(4,'whois.afrinic.net','ripe','AFRINIC','AFRINIC Query from AFRINIC Database'),(5,'whois.apnic.net','ripe','APNIC','APNIC Query from APNIC Database'),(6,'rr.level3.net','ripe','LEVEL3','Level3 Query from Level3 Database'),(7,'whois.radb.net','irrd','ARIN','ARIN Query from RADB Database'),(8,'whois.radb.net','irrd','RADB,ARIN','RADB+ARIN Query from RADB Database'),(9,'whois.radb.net','irrd','ALTDB','ALTDB Query from RADB Database'),(10,'whois.radb.net','irrd','RADB,RIPE','RADB+RIPE Query from RADB Database'),(11,'whois.radb.net','irrd','RADB,APNIC,ARIN','RADB+APNIC+ARIN Query from RADB Database'),(12,'whois.radb.net','irrd','RIPE,ARIN','RIPE+ARIN Query from RADB Database');
/*!40000 ALTER TABLE `irrdbconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ixp`
--

DROP TABLE IF EXISTS `ixp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ixp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrtg_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mrtg_p2p_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aggregate_graph_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smokeping` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FA4AB7F64082763` (`shortname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ixp`
--

LOCK TABLES `ixp` WRITE;
/*!40000 ALTER TABLE `ixp` DISABLE KEYS */;
INSERT INTO `ixp` VALUES (1,'Somecity Internet Exchange Point','SIEP','5 Somewhere','Somebourogh','Dublin','D4','IE','/media/ramedisk_ixp/mrtg','http://114.113.88.2/ixp/sflow/sflow-graph.php','aggregate_graph_name',NULL);
/*!40000 ALTER TABLE `ixp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdb_facility_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocphone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocfax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nocemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officefax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `officeemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5E9E89CB64082763` (`shortname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,NULL,'CNIX TOP','CNIX TOP','CNIX TOP','No.56,Building 16,JiuJingZhuang Streat,FengTai District, Beijing ','18510627106','','noc@cnix.com.cn','18510627106','','jason.yang@cnix.com.cn','');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macaddress`
--

DROP TABLE IF EXISTS `macaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `virtualinterfaceid` int(11) DEFAULT NULL,
  `firstseen` datetime DEFAULT NULL,
  `lastseen` datetime DEFAULT NULL,
  `mac` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42CD65F6BFDF15D5` (`virtualinterfaceid`),
  CONSTRAINT `FK_42CD65F6BFDF15D5` FOREIGN KEY (`virtualinterfaceid`) REFERENCES `virtualinterface` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macaddress`
--

LOCK TABLES `macaddress` WRITE;
/*!40000 ALTER TABLE `macaddress` DISABLE KEYS */;
INSERT INTO `macaddress` VALUES (332,23,'2017-02-21 18:09:44',NULL,'0819a6e6f67a'),(333,15,'2017-02-21 18:09:44',NULL,'04f938a3a50a'),(334,22,'2017-02-21 18:09:44',NULL,'d46d5017f8ca'),(335,4,'2017-02-21 18:09:44',NULL,'fce33cb2ec77'),(336,5,'2017-02-21 18:09:44',NULL,'3c94d5d387f0'),(337,9,'2017-02-21 18:09:44',NULL,'c471fe027d80'),(338,6,'2017-02-21 18:09:44',NULL,'04f938ae6396'),(339,8,'2017-02-21 18:09:44',NULL,'d46d503cc032'),(340,10,'2017-02-21 18:09:44',NULL,'6891d0603deb'),(341,21,'2017-02-21 18:09:44',NULL,'4071839bde89'),(342,11,'2017-02-21 18:09:44',NULL,'70e4225bfb51'),(343,17,'2017-02-21 18:09:44',NULL,'0002fc09a103'),(344,18,'2017-02-21 18:09:44',NULL,'14144b767179'),(345,12,'2017-02-21 18:09:44',NULL,'68a8281b8e7e'),(346,7,'2017-02-21 18:09:44',NULL,'70e42263b9a0'),(347,16,'2017-02-21 18:09:44',NULL,'407183a388fa'),(348,13,'2017-02-21 18:09:44',NULL,'dc38e1138801'),(349,20,'2017-02-21 18:09:44',NULL,'cce17f700820');
/*!40000 ALTER TABLE `macaddress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macaddress_copy`
--

DROP TABLE IF EXISTS `macaddress_copy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macaddress_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `virtualinterfaceid` int(11) DEFAULT NULL,
  `firstseen` datetime DEFAULT NULL,
  `lastseen` datetime DEFAULT NULL,
  `mac` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42CD65F6BFDF15D5` (`virtualinterfaceid`),
  CONSTRAINT `macaddress_copy_ibfk_1` FOREIGN KEY (`virtualinterfaceid`) REFERENCES `virtualinterface` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macaddress_copy`
--

LOCK TABLES `macaddress_copy` WRITE;
/*!40000 ALTER TABLE `macaddress_copy` DISABLE KEYS */;
INSERT INTO `macaddress_copy` VALUES (19,8,'2017-01-04 12:53:13',NULL,'d46d503cc032'),(20,4,'2017-01-04 12:53:13',NULL,'fce33cb2ec77'),(21,7,'2017-01-04 12:53:13',NULL,'70e42263b9a0'),(22,5,'2017-01-04 12:53:13',NULL,'3c94d5d387f0'),(23,6,'2017-01-04 12:53:13',NULL,'04f938ae6396'),(24,9,'2017-01-04 12:53:13',NULL,'c471fe027d80');
/*!40000 ALTER TABLE `macaddress_copy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `before_text` longtext COLLATE utf8_unicode_ci,
  `after_text` longtext COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F515E139DE12AB56` (`created_by`),
  CONSTRAINT `FK_F515E139DE12AB56` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting_item`
--

DROP TABLE IF EXISTS `meeting_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meeting_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `presentation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_content` tinyint(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F3EADDCC67433D9C` (`meeting_id`),
  CONSTRAINT `FK_F3EADDCC67433D9C` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting_item`
--

LOCK TABLES `meeting_item` WRITE;
/*!40000 ALTER TABLE `meeting_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `netinfo`
--

DROP TABLE IF EXISTS `netinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `netinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vlan_id` int(11) NOT NULL,
  `protocol` int(11) NOT NULL,
  `property` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ix` int(11) NOT NULL DEFAULT '0',
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F843DE6B8B4937A1` (`vlan_id`),
  KEY `VlanProtoProp` (`protocol`,`property`,`vlan_id`),
  CONSTRAINT `FK_F843DE6B8B4937A1` FOREIGN KEY (`vlan_id`) REFERENCES `vlan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `netinfo`
--

LOCK TABLES `netinfo` WRITE;
/*!40000 ALTER TABLE `netinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `netinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `networkinfo`
--

DROP TABLE IF EXISTS `networkinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `networkinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vlanid` int(11) DEFAULT NULL,
  `protocol` int(11) DEFAULT NULL,
  `network` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masklen` int(11) DEFAULT NULL,
  `rs1address` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rs2address` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dnsfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6A0AF167F48D6D0` (`vlanid`),
  CONSTRAINT `FK_6A0AF167F48D6D0` FOREIGN KEY (`vlanid`) REFERENCES `vlan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `networkinfo`
--

LOCK TABLES `networkinfo` WRITE;
/*!40000 ALTER TABLE `networkinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `networkinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oui`
--

DROP TABLE IF EXISTS `oui`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oui` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oui` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DAEC0140DAEC0140` (`oui`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oui`
--

LOCK TABLES `oui` WRITE;
/*!40000 ALTER TABLE `oui` DISABLE KEYS */;
/*!40000 ALTER TABLE `oui` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peering_manager`
--

DROP TABLE IF EXISTS `peering_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peering_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `peerid` int(11) DEFAULT NULL,
  `email_last_sent` datetime DEFAULT NULL,
  `emails_sent` int(11) DEFAULT NULL,
  `peered` tinyint(1) DEFAULT NULL,
  `rejected` tinyint(1) DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_35A72597DA0209B9` (`custid`),
  KEY `IDX_35A725974E5F9AFF` (`peerid`),
  CONSTRAINT `FK_35A725974E5F9AFF` FOREIGN KEY (`peerid`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_35A72597DA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peering_manager`
--

LOCK TABLES `peering_manager` WRITE;
/*!40000 ALTER TABLE `peering_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `peering_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peering_matrix`
--

DROP TABLE IF EXISTS `peering_matrix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peering_matrix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x_custid` int(11) DEFAULT NULL,
  `y_custid` int(11) DEFAULT NULL,
  `vlan` int(11) DEFAULT NULL,
  `x_as` int(11) DEFAULT NULL,
  `y_as` int(11) DEFAULT NULL,
  `peering_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C1A6F6F9A4CA6408` (`x_custid`),
  KEY `IDX_C1A6F6F968606496` (`y_custid`),
  CONSTRAINT `FK_C1A6F6F968606496` FOREIGN KEY (`y_custid`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_C1A6F6F9A4CA6408` FOREIGN KEY (`x_custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peering_matrix`
--

LOCK TABLES `peering_matrix` WRITE;
/*!40000 ALTER TABLE `peering_matrix` DISABLE KEYS */;
/*!40000 ALTER TABLE `peering_matrix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `physicalinterface`
--

DROP TABLE IF EXISTS `physicalinterface`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `physicalinterface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switchportid` int(11) DEFAULT NULL,
  `fanout_physical_interface_id` int(11) DEFAULT NULL,
  `virtualinterfaceid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `duplex` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monitorindex` int(11) DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5FFF4D60E5F6FACB` (`switchportid`),
  UNIQUE KEY `UNIQ_5FFF4D602E68AB8C` (`fanout_physical_interface_id`),
  KEY `IDX_5FFF4D60BFDF15D5` (`virtualinterfaceid`),
  CONSTRAINT `FK_5FFF4D602E68AB8C` FOREIGN KEY (`fanout_physical_interface_id`) REFERENCES `physicalinterface` (`id`),
  CONSTRAINT `FK_5FFF4D60BFDF15D5` FOREIGN KEY (`virtualinterfaceid`) REFERENCES `virtualinterface` (`id`),
  CONSTRAINT `FK_5FFF4D60E5F6FACB` FOREIGN KEY (`switchportid`) REFERENCES `switchport` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `physicalinterface`
--

LOCK TABLES `physicalinterface` WRITE;
/*!40000 ALTER TABLE `physicalinterface` DISABLE KEYS */;
INSERT INTO `physicalinterface` VALUES (8,169,NULL,5,1,10000,'full',18,''),(9,170,NULL,4,1,10000,'full',19,'百度'),(11,265,NULL,6,1,10000,'full',0,''),(12,171,NULL,7,1,10000,'full',1,NULL),(13,174,NULL,8,1,10000,'full',1,NULL),(14,175,NULL,9,1,10000,'full',1,NULL),(15,177,NULL,10,1,10000,'full',1,NULL),(16,176,NULL,11,1,10000,'full',1,NULL),(17,178,NULL,12,1,10000,'full',1,NULL),(18,185,NULL,13,1,10000,'full',1,NULL),(19,180,NULL,14,1,10000,'full',1,NULL),(20,184,NULL,15,1,10000,'full',1,NULL),(21,186,NULL,16,1,10000,'full',1,NULL),(22,172,NULL,17,1,10000,'full',1,NULL),(23,223,NULL,18,1,10000,'full',1,NULL),(24,239,NULL,19,1,10000,'full',1,NULL),(25,224,NULL,20,1,10000,'full',1,NULL),(26,225,NULL,21,1,10000,'full',1,NULL),(27,228,NULL,22,1,10000,'full',1,NULL),(28,226,NULL,23,1,10000,'full',1,NULL);
/*!40000 ALTER TABLE `physicalinterface` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rs_prefixes`
--

DROP TABLE IF EXISTS `rs_prefixes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rs_prefixes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `prefix` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protocol` int(11) DEFAULT NULL,
  `irrdb` int(11) DEFAULT NULL,
  `rs_origin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29FA9871DA0209B9` (`custid`),
  CONSTRAINT `FK_29FA9871DA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rs_prefixes`
--

LOCK TABLES `rs_prefixes` WRITE;
/*!40000 ALTER TABLE `rs_prefixes` DISABLE KEYS */;
/*!40000 ALTER TABLE `rs_prefixes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sec_event`
--

DROP TABLE IF EXISTS `sec_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sec_event` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `switchid` int(11) DEFAULT NULL,
  `switchportid` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `recorded_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D265481DA0209B9` (`custid`),
  KEY `IDX_D265481DC2C08F8` (`switchid`),
  KEY `IDX_D265481E5F6FACB` (`switchportid`),
  CONSTRAINT `FK_D265481DA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`),
  CONSTRAINT `FK_D265481DC2C08F8` FOREIGN KEY (`switchid`) REFERENCES `switch` (`id`),
  CONSTRAINT `FK_D265481E5F6FACB` FOREIGN KEY (`switchportid`) REFERENCES `switchport` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sec_event`
--

LOCK TABLES `sec_event` WRITE;
/*!40000 ALTER TABLE `sec_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `sec_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `switch`
--

DROP TABLE IF EXISTS `switch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `switch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infrastructure` int(11) DEFAULT NULL,
  `cabinetid` int(11) DEFAULT NULL,
  `vendorid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hostname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ipv4addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ipv6addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `snmppasswd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `switchtype` int(11) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `os` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `osDate` datetime DEFAULT NULL,
  `osVersion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serialNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauSupported` tinyint(1) DEFAULT NULL,
  `lastPolled` datetime DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6FE94B185E237E06` (`name`),
  KEY `IDX_6FE94B18D129B190` (`infrastructure`),
  KEY `IDX_6FE94B182B96718A` (`cabinetid`),
  KEY `IDX_6FE94B18420FB55F` (`vendorid`),
  CONSTRAINT `FK_6FE94B182B96718A` FOREIGN KEY (`cabinetid`) REFERENCES `cabinet` (`id`),
  CONSTRAINT `FK_6FE94B18420FB55F` FOREIGN KEY (`vendorid`) REFERENCES `vendor` (`id`),
  CONSTRAINT `FK_6FE94B18D129B190` FOREIGN KEY (`infrastructure`) REFERENCES `infrastructure` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `switch`
--

LOCK TABLES `switch` WRITE;
/*!40000 ALTER TABLE `switch` DISABLE KEYS */;
INSERT INTO `switch` VALUES (4,1,1,18,'114.113.88.21','114.113.88.21','103.216.40.0/23','2404:E780:F872:A::/64','test1234',1,'Unknown',1,'Unknown',NULL,'Unknown','(not implemented)',0,'2017-01-16 12:15:39','');
/*!40000 ALTER TABLE `switch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `switchport`
--

DROP TABLE IF EXISTS `switchport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `switchport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switchid` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `ifIndex` int(11) DEFAULT NULL,
  `ifName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ifAlias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ifHighSpeed` int(11) DEFAULT NULL,
  `ifMtu` int(11) DEFAULT NULL,
  `ifPhysAddress` varchar(17) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ifAdminStatus` int(11) DEFAULT NULL,
  `ifOperStatus` int(11) DEFAULT NULL,
  `ifLastChange` int(11) DEFAULT NULL,
  `lastSnmpPoll` datetime DEFAULT NULL,
  `lagIfIndex` int(11) DEFAULT NULL,
  `mauType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauState` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauAvailability` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauJacktype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mauAutoNegSupported` tinyint(1) DEFAULT NULL,
  `mauAutoNegAdminState` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F84274F1DC2C08F8` (`switchid`),
  CONSTRAINT `FK_F84274F1DC2C08F8` FOREIGN KEY (`switchid`) REFERENCES `switch` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=266 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `switchport`
--

LOCK TABLES `switchport` WRITE;
/*!40000 ALTER TABLE `switchport` DISABLE KEYS */;
INSERT INTO `switchport` VALUES (156,4,5,'MEth0/0/1',1,4,'MEth0/0/1','',10,1500,'244C07899CA0',2,2,1484538488,'2017-01-16 12:15:43',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(157,4,3,'XGigabitEthernet0/0/1',1,6,'XGigabitEthernet0/0/1','ut:bj.top.rs.1.cnix:ge-0/1/0',1000,1500,'244C07899CA0',1,1,1482515180,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(158,4,3,'XGigabitEthernet0/0/2',1,7,'XGigabitEthernet0/0/2','ut:bj.top.i.1.cnix:T1/1 for bangongwang',10000,1500,'244C07899CA0',1,1,1482515359,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(159,4,0,'XGigabitEthernet0/0/3',1,8,'XGigabitEthernet0/0/3','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(160,4,0,'XGigabitEthernet0/0/4',1,9,'XGigabitEthernet0/0/4','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(161,4,0,'XGigabitEthernet0/0/5',1,10,'XGigabitEthernet0/0/5','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(162,4,0,'XGigabitEthernet0/0/6',1,11,'XGigabitEthernet0/0/6','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(163,4,0,'XGigabitEthernet0/0/7',1,12,'XGigabitEthernet0/0/7','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(164,4,0,'XGigabitEthernet0/0/8',1,13,'XGigabitEthernet0/0/8','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(165,4,0,'XGigabitEthernet0/0/9',1,14,'XGigabitEthernet0/0/9','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(166,4,0,'XGigabitEthernet0/0/10',1,15,'XGigabitEthernet0/0/10','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(167,4,0,'XGigabitEthernet0/0/11',1,16,'XGigabitEthernet0/0/11','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(168,4,0,'XGigabitEthernet0/0/12',1,17,'XGigabitEthernet0/0/12','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(169,4,1,'XGigabitEthernet0/0/13',1,18,'XGigabitEthernet0/0/13','to:Zhonglianhudong:as58863:CID:LID:20160913',10000,1500,'244C07899CA0',1,1,1482514953,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(170,4,1,'XGigabitEthernet0/0/14',1,19,'XGigabitEthernet0/0/14','to:baidu:as38365:CID:LID:20140911',10000,1500,'244C07899CA0',1,1,1482512214,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(171,4,1,'XGigabitEthernet0/0/15',1,20,'XGigabitEthernet0/0/15','to:fangzhengkuandai:as18245:CID:LID:20150926',10000,1500,'244C07899CA0',1,1,1482514947,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(172,4,1,'XGigabitEthernet0/0/16',1,21,'XGigabitEthernet0/0/16','to:guanghuanshixun:AS63530:CID:LID:20161223',10000,1500,'244C07899CA0',1,1,1483512989,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(173,4,1,'XGigabitEthernet0/0/17',1,22,'XGigabitEthernet0/0/17','to:meituan:as59025:CID:LID:20161009',10000,1500,'244C07899CA0',1,2,1484189808,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(174,4,1,'XGigabitEthernet0/0/18',1,23,'XGigabitEthernet0/0/18','to:tencent:as45090:CID:LID:20161009',10000,1500,'244C07899CA0',1,1,1483931461,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(175,4,1,'XGigabitEthernet0/0/19',1,24,'XGigabitEthernet0/0/19','to:yangshiguoji:as55957:CID:LID:20161009',10000,1500,'244C07899CA0',1,1,1482512725,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(176,4,1,'XGigabitEthernet0/0/20',1,25,'XGigabitEthernet0/0/20','to:shanghaiyouchi:as59060:CID:LID:20161027',10000,1500,'244C07899CA0',1,1,1482517855,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(177,4,1,'XGigabitEthernet0/0/21',1,26,'XGigabitEthernet0/0/21','to:kuandaiyi:as58999:CID:LID:20161027',10000,1500,'244C07899CA0',1,1,1484246674,'2017-01-16 12:15:45',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(178,4,1,'XGigabitEthernet0/0/22',1,27,'XGigabitEthernet0/0/22','to:alibaba:as37963:CID:LID:20161103',10000,1500,'244C07899CA0',1,1,1484306298,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(179,4,1,'XGigabitEthernet0/0/23',1,28,'XGigabitEthernet0/0/23','',10000,1500,'244C07899CA0',2,2,1483433617,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(180,4,1,'XGigabitEthernet0/0/24',1,29,'XGigabitEthernet0/0/24','to:yiantianxia:as45093:CID:LID:20161208',10000,1500,'244C07899CA0',1,1,1482514424,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(181,4,1,'XGigabitEthernet0/0/25',1,30,'XGigabitEthernet0/0/25','to:hebeikunshi:as63598:CID:LID:20160914',10000,1500,'244C07899CA0',1,1,1482514856,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(182,4,1,'XGigabitEthernet0/0/26',1,31,'XGigabitEthernet0/0/26','to:hebeikunshi:as63598:CID:LID:20160914',10000,1500,'244C07899CA0',1,1,1482515259,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(183,4,1,'XGigabitEthernet0/0/27',1,32,'XGigabitEthernet0/0/27','to:hebeikunshi:as63598:CID:LID:20160914',10000,1500,'244C07899CA0',1,1,1482515259,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(184,4,1,'XGigabitEthernet0/0/28',1,33,'XGigabitEthernet0/0/28','to:hongweixinda:CID:LID:20161211',10000,1500,'244C07899CA0',1,1,1482514037,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(185,4,1,'XGigabitEthernet0/0/29',1,34,'XGigabitEthernet0/0/29','to:21vianet-IDC:CID:LID:20161115',10000,1500,'244C07899CA0',1,1,1482515891,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(186,4,1,'XGigabitEthernet0/0/30',1,35,'XGigabitEthernet0/0/30','to:leshi:as58548:CID:LID:20161222',10000,1500,'244C07899CA0',1,1,1482816479,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(187,4,1,'XGigabitEthernet0/0/31',1,36,'XGigabitEthernet0/0/31','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(188,4,1,'XGigabitEthernet0/0/32',1,37,'XGigabitEthernet0/0/32','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(189,4,1,'XGigabitEthernet0/0/33',1,38,'XGigabitEthernet0/0/33','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(190,4,1,'XGigabitEthernet0/0/34',1,39,'XGigabitEthernet0/0/34','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(191,4,1,'XGigabitEthernet0/0/35',1,40,'XGigabitEthernet0/0/35','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(192,4,0,'XGigabitEthernet0/0/36',1,41,'XGigabitEthernet0/0/36','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(193,4,0,'XGigabitEthernet0/0/37',1,42,'XGigabitEthernet0/0/37','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(194,4,0,'XGigabitEthernet0/0/38',1,43,'XGigabitEthernet0/0/38','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(195,4,0,'XGigabitEthernet0/0/39',1,44,'XGigabitEthernet0/0/39','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(196,4,0,'XGigabitEthernet0/0/40',1,45,'XGigabitEthernet0/0/40','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(197,4,0,'XGigabitEthernet0/0/41',1,46,'XGigabitEthernet0/0/41','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(198,4,0,'XGigabitEthernet0/0/42',1,47,'XGigabitEthernet0/0/42','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(199,4,0,'XGigabitEthernet0/0/43',1,48,'XGigabitEthernet0/0/43','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(200,4,0,'XGigabitEthernet0/0/44',1,49,'XGigabitEthernet0/0/44','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(201,4,0,'XGigabitEthernet0/0/45',1,50,'XGigabitEthernet0/0/45','to:bj.top.i.1.cnix:G0/20',10000,1500,'244C07899CA0',2,2,1484106931,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(202,4,5,'XGigabitEthernet0/0/46',1,51,'XGigabitEthernet0/0/46','to:CNIX-DDOS:DNS-server:ifcfg-eth1:103.216.40.66',1000,1500,'244C07899CA0',1,1,1482517427,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(203,4,5,'XGigabitEthernet0/0/47',1,52,'XGigabitEthernet0/0/47','to Huawei-server eth0 service-port ibgp 103.216.40.7/8',1000,1500,'244C07899CA0',1,1,1482519163,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(204,4,5,'XGigabitEthernet0/0/48',1,53,'XGigabitEthernet0/0/48','to Huawei-server eth0 management port 118.186.197.2',1000,1500,'244C07899CA0',1,1,1482519127,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(205,4,0,'40GE0/0/1',1,54,'40GE0/0/1','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(206,4,0,'40GE0/0/2',1,55,'40GE0/0/2','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:48',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(207,4,0,'40GE0/1/3',1,58,'40GE0/1/3','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(208,4,3,'40GE0/1/1',1,56,'40GE0/1/1','to:40GE1/1/2:stackport:can\'t modify',40000,1500,'244C07899CA0',1,1,1482389659,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(209,4,3,'40GE0/1/2',1,57,'40GE0/1/2','to:40GE1/1/1:stackport:can\'t modify',40000,1500,'244C07899CA0',1,1,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(210,4,0,'40GE0/1/4',1,59,'40GE0/1/4','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(211,4,3,'XGigabitEthernet1/0/1',1,60,'XGigabitEthernet1/0/1','ut:bj.top.rs.1.cnix:ge-0/0/0',1000,1500,'244C07899CA0',1,1,1482733746,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(212,4,0,'XGigabitEthernet1/0/2',1,61,'XGigabitEthernet1/0/2','to:bj.top.i.1.cnix:T2/2 dns server',10000,1500,'244C07899CA0',1,1,1482995604,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(213,4,0,'XGigabitEthernet1/0/3',1,62,'XGigabitEthernet1/0/3','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(214,4,0,'XGigabitEthernet1/0/4',1,63,'XGigabitEthernet1/0/4','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(215,4,0,'XGigabitEthernet1/0/5',1,64,'XGigabitEthernet1/0/5','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(216,4,0,'XGigabitEthernet1/0/6',1,65,'XGigabitEthernet1/0/6','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(217,4,0,'XGigabitEthernet1/0/7',1,66,'XGigabitEthernet1/0/7','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(218,4,0,'XGigabitEthernet1/0/8',1,67,'XGigabitEthernet1/0/8','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(219,4,0,'XGigabitEthernet1/0/9',1,68,'XGigabitEthernet1/0/9','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(220,4,0,'XGigabitEthernet1/0/10',1,69,'XGigabitEthernet1/0/10','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(221,4,0,'XGigabitEthernet1/0/11',1,70,'XGigabitEthernet1/0/11','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(222,4,0,'XGigabitEthernet1/0/12',1,71,'XGigabitEthernet1/0/12','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(223,4,1,'XGigabitEthernet1/0/13',1,72,'XGigabitEthernet1/0/13','to:sohu:as65510:CID:LID:20161228',10000,1500,'244C07899CA0',1,1,1482912330,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(224,4,1,'XGigabitEthernet1/0/14',1,73,'XGigabitEthernet1/0/14','to:guanghuanxinwang:asxxx:CID:LID:20170111',10000,1500,'244C07899CA0',1,1,1484208544,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(225,4,1,'XGigabitEthernet1/0/15',1,74,'XGigabitEthernet1/0/15','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(226,4,1,'XGigabitEthernet1/0/16',1,75,'XGigabitEthernet1/0/16','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(227,4,0,'XGigabitEthernet1/0/17',1,76,'XGigabitEthernet1/0/17','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(228,4,1,'XGigabitEthernet1/0/18',1,77,'XGigabitEthernet1/0/18','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:50',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(229,4,0,'XGigabitEthernet1/0/19',1,78,'XGigabitEthernet1/0/19','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(230,4,0,'XGigabitEthernet1/0/20',1,79,'XGigabitEthernet1/0/20','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(231,4,0,'XGigabitEthernet1/0/21',1,80,'XGigabitEthernet1/0/21','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(232,4,0,'XGigabitEthernet1/0/22',1,81,'XGigabitEthernet1/0/22','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(233,4,0,'XGigabitEthernet1/0/23',1,82,'XGigabitEthernet1/0/23','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(234,4,0,'XGigabitEthernet1/0/24',1,83,'XGigabitEthernet1/0/24','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(235,4,0,'XGigabitEthernet1/0/25',1,84,'XGigabitEthernet1/0/25','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(236,4,0,'XGigabitEthernet1/0/26',1,85,'XGigabitEthernet1/0/26','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(237,4,0,'XGigabitEthernet1/0/27',1,86,'XGigabitEthernet1/0/27','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(238,4,0,'XGigabitEthernet1/0/28',1,87,'XGigabitEthernet1/0/28','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(239,4,1,'XGigabitEthernet1/0/29',1,88,'XGigabitEthernet1/0/29','to:21vianet-CPSP:CID:LID:20161115',10000,1500,'244C07899CA0',1,1,1482906581,'2017-01-16 12:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(240,4,0,'XGigabitEthernet1/0/30',1,89,'XGigabitEthernet1/0/30','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(241,4,0,'XGigabitEthernet1/0/31',1,90,'XGigabitEthernet1/0/31','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(242,4,0,'XGigabitEthernet1/0/32',1,91,'XGigabitEthernet1/0/32','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(243,4,0,'XGigabitEthernet1/0/33',1,92,'XGigabitEthernet1/0/33','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(244,4,0,'XGigabitEthernet1/0/34',1,93,'XGigabitEthernet1/0/34','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(245,4,0,'XGigabitEthernet1/0/35',1,94,'XGigabitEthernet1/0/35','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(246,4,0,'XGigabitEthernet1/0/36',1,95,'XGigabitEthernet1/0/36','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(247,4,0,'XGigabitEthernet1/0/37',1,96,'XGigabitEthernet1/0/37','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(248,4,0,'XGigabitEthernet1/0/38',1,97,'XGigabitEthernet1/0/38','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(249,4,0,'XGigabitEthernet1/0/39',1,98,'XGigabitEthernet1/0/39','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(250,4,0,'XGigabitEthernet1/0/40',1,99,'XGigabitEthernet1/0/40','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:52',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(251,4,0,'XGigabitEthernet1/0/41',1,100,'XGigabitEthernet1/0/41','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(252,4,0,'XGigabitEthernet1/0/42',1,101,'XGigabitEthernet1/0/42','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(253,4,0,'XGigabitEthernet1/0/43',1,102,'XGigabitEthernet1/0/43','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(254,4,0,'XGigabitEthernet1/0/44',1,103,'XGigabitEthernet1/0/44','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(255,4,0,'XGigabitEthernet1/0/45',1,104,'XGigabitEthernet1/0/45','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(256,4,0,'XGigabitEthernet1/0/46',1,105,'XGigabitEthernet1/0/46','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(257,4,0,'XGigabitEthernet1/0/47',1,106,'XGigabitEthernet1/0/47','',10000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(258,4,0,'XGigabitEthernet1/0/48',1,107,'XGigabitEthernet1/0/48','',1000,1500,'244C07899CA0',1,1,1484107136,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(259,4,0,'40GE1/0/1',1,108,'40GE1/0/1','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(260,4,0,'40GE1/0/2',1,109,'40GE1/0/2','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(261,4,3,'40GE1/1/1',1,110,'40GE1/1/1','to:40GE0/1/2:stackport:can\'t modify',40000,1500,'244C07899CA0',1,1,1482389037,'2017-01-16 12:15:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(262,4,3,'40GE1/1/2',1,111,'40GE1/1/2','to:40GE0/1/1:stackport:can\'t modify',40000,1500,'244C07899CA0',1,1,1482389664,'2017-01-16 12:15:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(263,4,0,'40GE1/1/3',1,112,'40GE1/1/3','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(264,4,0,'40GE1/1/4',1,113,'40GE1/1/4','',40000,1500,'244C07899CA0',2,2,0,'2017-01-16 12:15:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(265,4,1,'Eth-Trunk27',1,116,'Eth-Trunk27','to:hebeikunshi:as63598:CID:LID:20160914',20000,1500,'244C07899CA0',1,1,1482515267,'2017-01-16 12:15:54',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `switchport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traffic_95th`
--

DROP TABLE IF EXISTS `traffic_95th`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traffic_95th` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `average` bigint(20) DEFAULT NULL,
  `max` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_70BB409ABFF2A482` (`cust_id`),
  CONSTRAINT `FK_70BB409ABFF2A482` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traffic_95th`
--

LOCK TABLES `traffic_95th` WRITE;
/*!40000 ALTER TABLE `traffic_95th` DISABLE KEYS */;
/*!40000 ALTER TABLE `traffic_95th` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traffic_95th_monthly`
--

DROP TABLE IF EXISTS `traffic_95th_monthly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traffic_95th_monthly` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `month` date DEFAULT NULL,
  `max_95th` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ED79F9DCBFF2A482` (`cust_id`),
  CONSTRAINT `FK_ED79F9DCBFF2A482` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traffic_95th_monthly`
--

LOCK TABLES `traffic_95th_monthly` WRITE;
/*!40000 ALTER TABLE `traffic_95th_monthly` DISABLE KEYS */;
/*!40000 ALTER TABLE `traffic_95th_monthly` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traffic_daily`
--

DROP TABLE IF EXISTS `traffic_daily`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `traffic_daily` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `ixp_id` int(11) NOT NULL,
  `day` date DEFAULT NULL,
  `category` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_avg_in` bigint(20) DEFAULT NULL,
  `day_avg_out` bigint(20) DEFAULT NULL,
  `day_max_in` bigint(20) DEFAULT NULL,
  `day_max_out` bigint(20) DEFAULT NULL,
  `day_tot_in` bigint(20) DEFAULT NULL,
  `day_tot_out` bigint(20) DEFAULT NULL,
  `week_avg_in` bigint(20) DEFAULT NULL,
  `week_avg_out` bigint(20) DEFAULT NULL,
  `week_max_in` bigint(20) DEFAULT NULL,
  `week_max_out` bigint(20) DEFAULT NULL,
  `week_tot_in` bigint(20) DEFAULT NULL,
  `week_tot_out` bigint(20) DEFAULT NULL,
  `month_avg_in` bigint(20) DEFAULT NULL,
  `month_avg_out` bigint(20) DEFAULT NULL,
  `month_max_in` bigint(20) DEFAULT NULL,
  `month_max_out` bigint(20) DEFAULT NULL,
  `month_tot_in` bigint(20) DEFAULT NULL,
  `month_tot_out` bigint(20) DEFAULT NULL,
  `year_avg_in` bigint(20) DEFAULT NULL,
  `year_avg_out` bigint(20) DEFAULT NULL,
  `year_max_in` bigint(20) DEFAULT NULL,
  `year_max_out` bigint(20) DEFAULT NULL,
  `year_tot_in` bigint(20) DEFAULT NULL,
  `year_tot_out` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F0F81A7BFF2A482` (`cust_id`),
  KEY `IDX_1F0F81A7A5A4E881` (`ixp_id`),
  CONSTRAINT `FK_1F0F81A7A5A4E881` FOREIGN KEY (`ixp_id`) REFERENCES `ixp` (`id`),
  CONSTRAINT `FK_1F0F81A7BFF2A482` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=573 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traffic_daily`
--

LOCK TABLES `traffic_daily` WRITE;
/*!40000 ALTER TABLE `traffic_daily` DISABLE KEYS */;
INSERT INTO `traffic_daily` VALUES (1,2,1,'2017-01-04','bits',323074207,33869640,626678138,57048350,38576998727955,4044238267671,54205292,5681986,626678138,57048350,38914304288055,4079131986171,13547162,1420060,626678138,57048350,38914304288055,4079131986171,1231446,129084,626678138,57048350,38914304288055,4079131986171),(2,2,1,'2017-01-04','pkts',294704,210509,543100,391563,35189454297,25135986171,49452,35313,543100,391563,35501992197,25351558071,12359,8826,543100,391563,35501992197,25351558071,1123,802,543100,391563,35501992197,25351558071),(3,2,1,'2017-01-04','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4,2,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(5,8,1,'2017-01-04','bits',1432011,46604,8446494,251506,170992177897,5564835193,238950,7774,8446494,251506,171544121197,5581338193,59719,1943,8446494,251506,171544121197,5581338193,5429,177,8446494,251506,171544121197,5581338193),(6,8,1,'2017-01-04','pkts',955,519,5549,2912,113982813,61997882,159,87,5549,2912,114354813,62183882,40,22,5549,2912,114354813,62183882,4,2,5549,2912,114354813,62183882),(7,8,1,'2017-01-04','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(8,8,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(9,6,1,'2017-01-04','bits',9586067,13981665,22160926,31276480,1144643487719,1669508642404,1606267,2342302,22160926,31276480,1153150655219,1681554932404,401444,585396,22160926,31276480,1153150655219,1681554932404,36492,53213,22160926,31276480,1153150655219,1681554932404),(10,6,1,'2017-01-04','pkts',18931,14421,63696,29050,2260443184,1721979944,3171,2416,63696,29050,2276247484,1734592844,792,604,63696,29050,2276247484,1734592844,72,55,63696,29050,2276247484,1734592844),(11,6,1,'2017-01-04','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(12,6,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(13,4,1,'2017-01-04','bits',17355522,411956015,33521120,771970460,2072370826799,49190431839238,2910437,69076710,33521120,771970460,2089423396199,49590653744638,727387,17263893,33521120,771970460,2089423396199,49590653744638,66120,1569299,33521120,771970460,2089423396199,49590653744638),(14,4,1,'2017-01-04','pkts',165949,286397,317950,534844,19815491736,34197798006,27830,48023,317950,534844,19979705736,34475886906,6955,12002,317950,534844,19979705736,34475886906,632,1091,317950,534844,19979705736,34475886906),(15,4,1,'2017-01-04','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(16,4,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(17,7,1,'2017-01-04','bits',58556183,35556151,135207051,79374666,6992018179368,4245653269739,9796809,5954245,135207051,79374666,7033197928668,4274594229239,2448453,1488106,135207051,79374666,7033197928668,4274594229239,222566,135270,135207051,79374666,7033197928668,4274594229239),(18,7,1,'2017-01-04','pkts',77477,107853,161157,238240,9251316130,12878373170,12970,18062,161157,238240,9311569030,12966612170,3242,4514,161157,238240,9311569030,12966612170,295,410,161157,238240,9311569030,12966612170),(19,7,1,'2017-01-04','errs',2,0,6,0,221400,0,0,0,6,0,224400,0,0,0,6,0,224400,0,0,0,6,0,224400,0),(20,7,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(21,3,1,'2017-01-04','bits',150049311,167147474,239603080,268990730,17916938051431,19958578401458,25158471,28059116,239603080,268990730,18061442520931,20143835898158,6287693,7012632,239603080,268990730,18061442520931,20143835898158,571555,637453,239603080,268990730,18061442520931,20143835898158),(22,3,1,'2017-01-04','pkts',250788,180458,417633,273721,29945883259,21547904947,42073,30297,417633,273721,30204428959,21750770647,10515,7572,417633,273721,30204428959,21750770647,956,688,417633,273721,30204428959,21750770647),(23,3,1,'2017-01-04','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(24,3,1,'2017-01-04','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(25,2,1,'2017-01-05','bits',351712773,36786615,655922818,80494483,41996615384904,4392542507196,95127644,9956235,655922818,80494483,68292706127004,7147640907096,23774609,2488295,655922818,80494483,68292706127004,7147640907096,2161127,226188,655922818,80494483,68292706127004,7147640907096),(26,2,1,'2017-01-05','pkts',319294,228839,569314,415555,38125588332,27324809097,86848,62015,569314,415555,62348860032,44521161297,21705,15499,569314,415555,62348860032,44521161297,1973,1409,569314,415555,62348860032,44521161297),(27,2,1,'2017-01-05','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(28,2,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(29,8,1,'2017-01-05','bits',1540592,50573,8446494,251506,183955923240,6038701518,397149,13144,8446494,251506,285115645440,9436348518,99257,3285,8446494,251506,285115645440,9436348518,9023,299,8446494,251506,285115645440,9436348518),(30,8,1,'2017-01-05','pkts',1028,562,5549,2912,122751270,67059546,265,146,5549,2912,190177170,104873946,66,37,5549,2912,190177170,104873946,6,3,5549,2912,190177170,104873946),(31,8,1,'2017-01-05','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(32,8,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(33,6,1,'2017-01-05','bits',8725658,13593865,22160926,31276480,1041895951560,1623189091086,2477635,3795592,22160926,31276480,1778709045660,2724878016486,619219,948607,22160926,31276480,1778709045660,2724878016486,56287,86229,22160926,31276480,1778709045660,2724878016486),(34,6,1,'2017-01-05','pkts',17620,13991,63696,29050,2103948018,1670579187,4977,3901,63696,29050,3572848818,2800523787,1244,975,63696,29050,3572848818,2800523787,113,89,63696,29050,3572848818,2800523787),(35,6,1,'2017-01-05','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(36,6,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(37,4,1,'2017-01-05','bits',19023810,443666517,34928925,758491570,2271557031081,52976444161059,5143671,120673725,34928925,771970460,3692672265981,86632390939059,1285523,30159168,34928925,771970460,3692672265981,86632390939059,116855,2741487,34928925,771970460,3692672265981,86632390939059),(38,4,1,'2017-01-05','pkts',183356,308208,332732,525815,21893790663,36801846651,49440,83835,332732,534844,35493412263,60185480451,12356,20952,332732,534844,35493412263,60185480451,1123,1905,332732,534844,35493412263,60185480451),(39,4,1,'2017-01-05','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(40,4,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(41,7,1,'2017-01-05','bits',77430183,39297346,141131419,79374666,9245705861748,4692378228981,18171182,10328055,141131419,79374666,13045218846348,7414582918581,4541405,2581224,141131419,79374666,13045218846348,7414582918581,412817,234635,141131419,79374666,13045218846348,7414582918581),(42,7,1,'2017-01-05','pkts',99160,125552,166835,238240,11840352834,14991733226,23918,31922,166835,238240,17170732134,22917026726,5978,7978,166835,238240,17170732134,22917026726,543,725,166835,238240,17170732134,22917026726),(43,7,1,'2017-01-05','errs',1,0,6,0,132300,0,0,0,6,0,236400,0,0,0,6,0,236400,0,0,0,6,0,236400,0),(44,7,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(45,3,1,'2017-01-05','bits',137986747,168134546,239603080,263306336,16476583548466,20076441698213,39919622,47542268,239603080,268990730,28658576239066,34130926984613,9976852,11881930,239603080,268990730,28658576239066,34130926984613,906902,1080075,239603080,268990730,28658576239066,34130926984613),(46,3,1,'2017-01-05','pkts',246161,183806,395377,278752,29393292724,21947772716,69813,51643,417633,278752,50119470124,37074673616,17448,12907,417633,278752,50119470124,37074673616,1586,1173,417633,278752,50119470124,37074673616),(47,3,1,'2017-01-05','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(48,3,1,'2017-01-05','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(49,12,1,'2017-01-06','bits',18960999,7728445,89653360,28771098,2264227731000,922892273820,3153894,1285517,89653360,28771098,2264227731000,922892273820,788239,321284,89653360,28771098,2264227731000,922892273820,71652,29205,89653360,28771098,2264227731000,922892273820),(50,12,1,'2017-01-06','pkts',45115,26378,215931,91377,5387398695,3149962230,7504,4388,215931,91377,5387398695,3149962230,1875,1097,215931,91377,5387398695,3149962230,170,100,215931,91377,5387398695,3149962230),(51,12,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(52,12,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(53,16,1,'2017-01-06','bits',471,37505,47195,994893,56267670,4478616945,78,6238,47195,994893,56267670,4478616945,20,1559,47195,994893,56267670,4478616945,2,142,47195,994893,56267670,4478616945),(54,16,1,'2017-01-06','pkts',1,266,34,7428,124515,31736745,0,44,34,7428,124515,31736745,0,11,34,7428,124515,31736745,0,1,34,7428,124515,31736745),(55,16,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(56,16,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(57,11,1,'2017-01-06','bits',22235621,54615740,61749906,183141766,2655266735880,6521938549605,3698581,9084555,61749906,183141766,2655266735880,6521938549605,924370,2270463,61749906,183141766,2655266735880,6521938549605,84026,206387,61749906,183141766,2655266735880,6521938549605),(58,11,1,'2017-01-06','pkts',48786,81739,146921,279703,5825794125,9760807185,8115,13596,146921,279703,5825794125,9760807185,2028,3398,146921,279703,5825794125,9760807185,184,309,146921,279703,5825794125,9760807185),(59,11,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(60,11,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(61,2,1,'2017-01-06','bits',393984713,40278101,674555669,80494483,47047684517936,4809809378681,138557934,14465464,674555669,80494483,99472819355336,10384973598281,34629173,3615290,674555669,80494483,99472819355336,10384973598281,3147823,328633,674555669,80494483,99472819355336,10384973598281),(62,2,1,'2017-01-06','pkts',353237,250391,591426,415555,42181831618,29900492859,126090,89676,591426,415555,90521585218,64379617059,31513,22412,591426,415555,90521585218,64379617059,2865,2037,591426,415555,90521585218,64379617059),(63,2,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(64,2,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(65,8,1,'2017-01-06','bits',1580117,52428,5476015,190541,188689619980,6260723543,570447,18863,8446494,251506,409532299480,13541959943,142569,4714,8446494,251506,409532299480,13541959943,12960,429,8446494,251506,409532299480,13541959943),(66,8,1,'2017-01-06','pkts',1053,577,3611,2054,125730136,68856371,380,209,5549,2912,273038836,149780171,95,52,5549,2912,273038836,149780171,9,5,5549,2912,273038836,149780171),(67,8,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(68,8,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(69,6,1,'2017-01-06','bits',8415329,14579097,20862338,39099742,1004924923600,1740977431016,3422775,5503023,22160926,39099742,2457264754000,3950708342216,855440,1375348,22160926,39099742,2457264754000,3950708342216,77760,125020,22160926,39099742,2457264754000,3950708342216),(70,6,1,'2017-01-06','pkts',18715,14660,81164,34686,2234828624,1750667096,7155,5574,81164,34686,5136867224,4001750096,1788,1393,81164,34686,5136867224,4001750096,163,127,81164,34686,5136867224,4001750096),(71,6,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(72,6,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(73,17,1,'2017-01-06','bits',917,21772,20958,584922,109544380,2599948872,153,3622,20958,584922,109544380,2599948872,38,905,20958,584922,109544380,2599948872,3,82,20958,584922,109544380,2599948872),(74,17,1,'2017-01-06','pkts',7,21,229,402,821116,2484600,1,3,229,402,821116,2484600,0,1,229,402,821116,2484600,0,0,229,402,821116,2484600),(75,17,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(76,17,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(77,14,1,'2017-01-06','bits',3403280,17574689,14101340,70861383,406406040304,2098699017492,566091,2923321,14101340,70861383,406406040304,2098699017492,141481,730614,14101340,70861383,406406040304,2098699017492,12861,66413,14101340,70861383,406406040304,2098699017492),(78,14,1,'2017-01-06','pkts',18940,17446,76966,70421,2261691124,2083351948,3150,2902,76966,70421,2261691124,2083351948,787,725,76966,70421,2261691124,2083351948,72,66,76966,70421,2261691124,2083351948),(79,14,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(80,14,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(81,9,1,'2017-01-06','bits',69,109,1846,1716,8194795,13066789,11,18,1846,1716,8194795,13066789,3,5,1846,1716,8194795,13066789,0,0,1846,1716,8194795,13066789),(82,9,1,'2017-01-06','pkts',1,1,19,19,60316,66916,0,0,19,19,60316,66916,0,0,19,19,60316,66916,0,0,19,19,60316,66916),(83,9,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(84,9,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(85,4,1,'2017-01-06','bits',19948516,454888875,41293665,852187192,2382172013720,54321009948007,7334831,170457520,41293665,852187192,5265792702620,122374181189407,1833164,42601740,41293665,852187192,5265792702620,122374181189407,166636,3872537,41293665,852187192,5265792702620,122374181189407),(86,4,1,'2017-01-06','pkts',230149,355057,14070656,12934637,27483500039,42399483170,76857,124944,14070656,12934637,55177156439,89699536070,19209,31227,14070656,12934637,55177156439,89699536070,1746,2839,14070656,12934637,55177156439,89699536070),(87,4,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(88,4,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(89,15,1,'2017-01-06','bits',14,40,52,266,1665442,4782431,2,7,52,266,1665442,4782431,1,2,52,266,1665442,4782431,0,0,52,266,1665442,4782431),(90,15,1,'2017-01-06','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(91,15,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(92,15,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(93,10,1,'2017-01-06','bits',225912886,140273662,771481175,494198159,26977839130715,16751059932443,37577936,23332864,771481175,494198159,26977839130715,16751059932443,9391707,5831492,771481175,494198159,26977839130715,16751059932443,853715,530088,771481175,494198159,26977839130715,16751059932443),(94,10,1,'2017-01-06','pkts',221697,197810,762535,706447,26474356443,23621823591,36877,32903,762535,706447,26474356443,23621823591,9216,8223,762535,706447,26474356443,23621823591,838,748,762535,706447,26474356443,23621823591),(95,10,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(96,10,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(97,18,1,'2017-01-06','bits',45193,42,698369,269,5396835020,5024016,7517,7,698369,269,5396835020,5024016,1879,2,698369,269,5396835020,5024016,171,0,698369,269,5396835020,5024016),(98,18,1,'2017-01-06','pkts',53,0,635,0,6317367,0,9,0,635,0,6317367,0,2,0,635,0,6317367,0,0,0,635,0,6317367,0),(99,18,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(100,18,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(101,7,1,'2017-01-06','bits',79576022,41641119,143078253,114414755,9502729793011,4972657482969,27028923,15166142,143078253,114414755,19404523445611,10888031485869,6755234,3790415,143078253,114414755,19404523445611,10888031485869,614057,344552,143078253,114414755,19404523445611,10888031485869),(102,7,1,'2017-01-06','pkts',105516,134521,177961,312495,12600441573,16064073522,35823,47240,177961,312495,25717657773,33914587422,8953,11807,177961,312495,25717657773,33914587422,814,1073,177961,312495,25717657773,33914587422),(103,7,1,'2017-01-06','errs',0,0,2,0,10800,0,0,0,6,0,224700,0,0,0,6,0,224700,0,0,0,6,0,224700,0),(104,7,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(105,13,1,'2017-01-06','bits',45684697,48095448,167073541,154515705,5455529511553,5743414142365,7599109,8000109,167073541,154515705,5455529511553,5743414142365,1899216,1999436,167073541,154515705,5455529511553,5743414142365,172641,181751,167073541,154515705,5455529511553,5743414142365),(106,13,1,'2017-01-06','pkts',64765,77351,236054,241395,7734164058,9237118530,10773,12867,236054,241395,7734164058,9237118530,2692,3216,236054,241395,7734164058,9237118530,245,292,236054,241395,7734164058,9237118530),(107,13,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(108,13,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(109,3,1,'2017-01-06','bits',146096179,179632499,293967676,283609704,17446513551486,21451353727182,57009172,68216055,293967676,283609704,40927910692986,48973534081482,14248095,17048991,293967676,283609704,40927910692986,48973534081482,1295166,1549770,293967676,283609704,40927910692986,48973534081482),(110,3,1,'2017-01-06','pkts',261981,197100,497743,307908,31285220148,23537253984,100293,74601,497743,307908,72002159748,53557446084,25066,18645,497743,307908,72002159748,53557446084,2279,1695,497743,307908,72002159748,53557446084),(111,3,1,'2017-01-06','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(112,3,1,'2017-01-06','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(113,12,1,'2017-01-07','bits',41901571,14365890,71345597,28771098,5003550340560,1715459602176,8233136,2923161,89653360,28771098,5910667082160,2098572254676,2057665,730570,89653360,28771098,5910667082160,2098572254676,187043,66409,89653360,28771098,5910667082160,2098572254676),(114,12,1,'2017-01-07','pkts',89012,52007,140598,91377,10629075876,6210209592,17855,10380,215931,91377,12818272776,7451983992,4462,2594,215931,91377,12818272776,7451983992,406,236,215931,91377,12818272776,7451983992),(115,12,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(116,12,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(117,16,1,'2017-01-07','bits',8818,25857,490859,729346,1052934412,3087717812,1515,8632,490859,994893,1087543012,6197350712,379,2157,490859,994893,1087543012,6197350712,34,196,490859,994893,1087543012,6197350712),(118,16,1,'2017-01-07','pkts',8,168,322,5434,928814,20029464,1,60,322,7428,973514,43047264,0,15,322,7428,973514,43047264,0,1,322,7428,973514,43047264),(119,16,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(120,16,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(121,11,1,'2017-01-07','bits',45512495,98802746,75852587,186109113,5434829030628,11798431120126,9102658,19904250,75852587,186109113,6534925494528,14289539753326,2274985,4974576,75852587,186109113,6534925494528,14289539753326,206798,452193,75852587,186109113,6534925494528,14289539753326),(122,11,1,'2017-01-07','pkts',110843,142603,199217,251118,13236240658,17028803910,21641,29209,199217,279703,15536659558,20969867310,5409,7300,199217,279703,15536659558,20969867310,492,664,199217,279703,15536659558,20969867310),(123,11,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(124,11,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(125,2,1,'2017-01-07','bits',441888756,40167536,686499579,74416987,52767703937772,4796566108298,188248788,18988145,686499579,80494483,135146440502472,13631855368298,47048140,4745618,686499579,80494483,135146440502472,13631855368298,4276717,431381,686499579,80494483,135146440502472,13631855368298),(126,2,1,'2017-01-07','pkts',386934,271249,591426,421294,46205307050,32390894320,169727,120229,591426,421294,121849389050,86313955420,42419,30048,591426,421294,121849389050,86313955420,3856,2731,591426,421294,121849389050,86313955420),(127,2,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(128,2,1,'2017-01-07','discs',0,0,0,5,0,1200,0,0,0,5,0,1200,0,0,0,5,0,1200,0,0,0,5,0,1200),(129,8,1,'2017-01-07','bits',1674178,55762,5383846,183041,199920329288,6658795996,759087,25229,8446494,251506,544959251588,18111893596,189715,6305,8446494,251506,544959251588,18111893596,17245,573,8446494,251506,544959251588,18111893596),(130,8,1,'2017-01-07','pkts',1117,618,3595,1973,133389486,73756461,506,279,5549,2912,363288486,200369061,126,70,5549,2912,363288486,200369061,11,6,5549,2912,363288486,200369061),(131,8,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(132,8,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(133,6,1,'2017-01-07','bits',11316052,19214651,31576274,49800714,1351306370854,2294517525218,4736069,7715112,31576274,49800714,3400095311554,5538794337518,1183665,1928204,31576274,49800714,3400095311554,5538794337518,107596,175275,31576274,49800714,3400095311554,5538794337518),(134,6,1,'2017-01-07','pkts',25116,18723,81164,45958,2999210761,2235791351,9963,7716,81164,45958,7152268261,5539493051,2490,1928,81164,45958,7152268261,5539493051,226,175,81164,45958,7152268261,5539493051),(135,6,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(136,6,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(137,17,1,'2017-01-07','bits',737,7175,51744,307714,88033541,856753620,237,4055,51744,584922,170015141,2911487520,59,1014,51744,584922,170015141,2911487520,5,92,51744,584922,170015141,2911487520),(138,17,1,'2017-01-07','pkts',3,6,109,212,362115,765600,1,4,229,402,1029915,2817600,0,1,229,402,1029915,2817600,0,0,229,402,1029915,2817600),(139,17,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(140,17,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(141,14,1,'2017-01-07','bits',7075660,35899618,14575372,72460099,844939898235,4286952928428,1325220,6744118,14575372,72460099,951395443335,4841703244428,331206,1685528,14575372,72460099,951395443335,4841703244428,30107,153216,14575372,72460099,951395443335,4841703244428),(142,14,1,'2017-01-07','pkts',39838,35904,80770,72803,4757268016,4287490028,7424,6725,80770,72803,5329637416,4827807428,1855,1681,80770,72803,5329637416,4827807428,169,153,80770,72803,5329637416,4827807428),(143,14,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(144,14,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(145,9,1,'2017-01-07','bits',144,208,1846,1716,17181536,24837633,28,42,1846,1716,20228336,30003933,7,10,1846,1716,20228336,30003933,1,1,1846,1716,20228336,30003933),(146,9,1,'2017-01-07','pkts',1,1,19,19,125415,130815,0,0,19,19,147315,157515,0,0,19,19,147315,157515,0,0,19,19,147315,157515),(147,9,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(148,9,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(149,4,1,'2017-01-07','bits',24874018,577912245,41526247,852187192,2970330855942,69011390792608,10196167,237602227,41526247,852187192,7319981427642,170578202951608,2548283,59382876,41526247,852187192,7319981427642,170578202951608,231641,5397956,41526247,852187192,7319981427642,170578202951608),(150,4,1,'2017-01-07','pkts',244017,398888,399842,590772,29139317772,47633151884,105058,171251,14070656,12934637,75422802972,122943335684,26257,42800,14070656,12934637,75422802972,122943335684,2387,3891,14070656,12934637,75422802972,122943335684),(151,4,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(152,4,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(153,15,1,'2017-01-07','bits',28,67,52,266,3392786,7991624,6,14,52,266,4016486,9844124,1,3,52,266,4016486,9844124,0,0,52,266,4016486,9844124),(154,15,1,'2017-01-07','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(155,15,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(156,15,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(157,10,1,'2017-01-07','bits',534527223,305688504,772271471,498781816,63831102860810,36504098444764,99788096,57779155,772271471,498781816,71639471035310,41480579810164,24939625,14440504,772271471,498781816,71639471035310,41480579810164,2267035,1312655,772271471,498781816,71639471035310,41480579810164),(158,10,1,'2017-01-07','pkts',511314,446042,769357,711268,61059044328,53264547386,95755,83818,769357,711268,68743882728,60173939786,23932,20948,769357,711268,68743882728,60173939786,2175,1904,769357,711268,68743882728,60173939786),(159,10,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(160,10,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(161,18,1,'2017-01-07','bits',97978,72,1423737,269,11700120844,8565302,20178,15,1423737,269,14486054944,10514402,5043,4,1423737,269,14486054944,10514402,458,0,1423737,269,14486054944,10514402),(162,18,1,'2017-01-07','pkts',132,0,1294,0,15792370,0,26,0,1294,0,18591370,0,6,0,1294,0,18591370,0,1,0,1294,0,18591370,0),(163,18,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(164,18,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(165,7,1,'2017-01-07','bits',86102628,46555633,145912097,119946340,10282031382914,5559487410714,36525025,20450309,145912097,119946340,26221899823514,14681604140514,9128548,5111061,145912097,119946340,26221899823514,14681604140514,829793,464600,145912097,119946340,26221899823514,14681604140514),(166,7,1,'2017-01-07','pkts',113254,148272,180500,312495,13524297460,17706053608,48528,63860,180500,312495,34838880160,45846396808,12128,15960,180500,312495,34838880160,45846396808,1102,1451,180500,312495,34838880160,45846396808),(167,7,1,'2017-01-07','errs',1,0,5,0,103800,0,0,0,6,0,316200,0,0,0,6,0,316200,0,0,0,6,0,316200,0),(168,7,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(169,13,1,'2017-01-07','bits',91018244,99625067,203815803,154515705,10869034570752,11896826998816,17909941,19276980,203815803,154515705,12857833357152,13839252156916,4476157,4817816,203815803,154515705,12857833357152,13839252156916,406887,437944,203815803,154515705,12857833357152,13839252156916),(170,13,1,'2017-01-07','pkts',129577,171574,312339,274753,15473600900,20488708818,25388,33083,312339,274753,18226170200,23750847918,6345,8268,312339,274753,18226170200,23750847918,577,752,312339,274753,18226170200,23750847918),(171,13,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(172,13,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(173,3,1,'2017-01-07','bits',160062765,188118505,293967676,288680363,19114055186852,22464359339704,74932595,89663761,293967676,288680363,53795308865552,64371048566704,18727592,22409292,293967676,288680363,53795308865552,64371048566704,1702355,2037025,293967676,288680363,53795308865552,64371048566704),(174,3,1,'2017-01-07','pkts',278905,206146,513036,315997,33305666021,24617104218,131953,98154,513036,315997,94731304121,70466344818,32979,24531,513036,315997,94731304121,70466344818,2998,2230,513036,315997,94731304121,70466344818),(175,3,1,'2017-01-07','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(176,3,1,'2017-01-07','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(177,12,1,'2017-01-08','bits',44335394,13641448,71377809,28213180,5294222411363,1628966179843,13455398,4480005,89653360,28771098,9659804972663,3216253565743,3362841,1119665,89653360,28771098,9659804972663,3216253565743,305685,101779,89653360,28771098,9659804972663,3216253565743),(178,12,1,'2017-01-08','pkts',89631,51772,127544,74624,10703162646,6182221184,28227,16281,215931,91377,20264627946,11688449384,7055,4069,215931,91377,20264627946,11688449384,641,370,215931,91377,20264627946,11688449384),(179,12,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(180,12,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(181,16,1,'2017-01-08','bits',872,20354,65938,107198,104178905,2430538124,1642,10778,490859,994893,1178920205,7737457424,410,2694,490859,994893,1178920205,7737457424,37,245,490859,994893,1178920205,7737457424),(182,16,1,'2017-01-08','pkts',3,130,45,897,302414,15519917,2,73,322,7428,1171814,52530017,0,18,322,7428,1171814,52530017,0,2,322,7428,1171814,52530017),(183,16,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(184,16,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(185,11,1,'2017-01-08','bits',44129428,114667915,75852587,211776290,5269671518900,13692954375066,13949571,33587287,75852587,211776290,10014592654400,24112783680966,3486351,8394314,75852587,211776290,10014592654400,24112783680966,316912,763050,75852587,211776290,10014592654400,24112783680966),(186,11,1,'2017-01-08','pkts',117786,163242,199217,259506,14065258361,19493324197,34028,48627,199217,279703,24429161561,34909878397,8504,12153,199217,279703,24429161561,34909878397,773,1105,199217,279703,24429161561,34909878397),(187,11,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(188,11,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(189,2,1,'2017-01-08','bits',430539467,39179249,686499579,74416987,51412439968234,4678550886536,235220448,23308041,686499579,80494483,168868052354734,16733169118136,58787547,5825270,686499579,80494483,168868052354734,16733169118136,5343839,529522,686499579,80494483,168868052354734,16733169118136),(190,2,1,'2017-01-08','pkts',378358,269382,582475,421294,45181249618,32167978842,211335,149816,591426,421294,151720459018,107555316942,52818,37443,591426,421294,151720459018,107555316942,4801,3404,591426,421294,151720459018,107555316942),(191,2,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(192,2,1,'2017-01-08','discs',0,0,0,5,0,1200,0,0,0,5,0,1200,0,0,0,5,0,1200,0,0,0,5,0,1200),(193,8,1,'2017-01-08','bits',1942523,66566,6325436,252296,231964439320,7948936258,984400,33084,8446494,252296,706714514920,23751300358,246026,8268,8446494,252296,706714514920,23751300358,22364,752,8446494,252296,706714514920,23751300358),(194,8,1,'2017-01-08','pkts',1294,737,4201,2708,154466114,88013142,656,365,5549,2912,470947814,262379142,164,91,5549,2912,470947814,262379142,15,8,5549,2912,470947814,262379142),(195,8,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(196,8,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(197,6,1,'2017-01-08','bits',12802094,22038685,31576274,56192417,1528749225948,2631727508338,6125443,10003863,31576274,56192417,4397540935248,7181913545938,1530903,2500219,31576274,56192417,4397540935248,7181913545938,139160,227272,31576274,56192417,4397540935248,7181913545938),(198,6,1,'2017-01-08','pkts',27926,21004,93056,48871,3334700082,2508216164,12916,9917,93056,48871,9272593182,7119766364,3228,2479,93056,48871,9272593182,7119766364,293,225,93056,48871,9272593182,7119766364),(199,6,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(200,6,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(201,17,1,'2017-01-08','bits',422,1820,9347,43367,50370502,217325584,288,4295,51744,584922,206734102,3083293084,72,1073,51744,584922,206734102,3083293084,7,98,51744,584922,206734102,3083293084),(202,17,1,'2017-01-08','pkts',2,2,15,33,201614,282356,2,4,229,402,1136714,2993456,0,1,229,402,1136714,2993456,0,0,229,402,1136714,2993456),(203,17,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(204,17,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(205,14,1,'2017-01-08','bits',8092249,36375199,22049380,72658111,966335965299,4343744400104,2240503,10650673,22049380,72658111,1608491059899,7646278263704,559959,2661876,22049380,72658111,1608491059899,7646278263704,50901,241967,22049380,72658111,1608491059899,7646278263704),(206,14,1,'2017-01-08','pkts',41949,37709,89212,84921,5009299917,4503031945,11999,10832,89212,84921,8614145217,7776148945,2999,2707,89212,84921,8614145217,7776148945,273,246,89212,84921,8614145217,7776148945),(207,14,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(208,14,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(209,9,1,'2017-01-08','bits',139,194,784,682,16628595,23131960,45,65,1846,1716,32197095,46626760,11,16,1846,1716,32197095,46626760,1,1,1846,1716,32197095,46626760),(210,9,1,'2017-01-08','pkts',1,1,7,7,121515,122415,0,0,19,19,234615,242715,0,0,19,19,234615,242715,0,0,19,19,234615,242715),(211,9,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(212,9,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(213,4,1,'2017-01-08','bits',24671379,591175096,41526247,848391995,2946132737985,70595174141025,12845777,302911424,41526247,852187192,9222176028885,217464654976125,3210488,75705316,41526247,852187192,9222176028885,217464654976125,291836,6881681,41526247,852187192,9222176028885,217464654976125),(214,4,1,'2017-01-08','pkts',240982,408525,399842,589344,28776879780,48783981705,130815,216397,14070656,12934637,93913974780,155354346105,32694,54083,14070656,12934637,93913974780,155354346105,2972,4916,14070656,12934637,93913974780,155354346105),(215,4,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(216,4,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(217,15,1,'2017-01-08','bits',27,59,47,206,3236145,7056900,9,21,52,266,6216945,14791500,2,5,52,266,6216945,14791500,0,0,52,266,6216945,14791500),(218,15,1,'2017-01-08','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(219,15,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(220,15,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(221,10,1,'2017-01-08','bits',549452666,302302756,772271471,498781816,65612890113285,36099483610995,160422561,90601785,772271471,498781816,115169762986785,65044380422595,40093703,22643704,772271471,498781816,115169762986785,65044380422595,3644553,2058333,772271471,498781816,115169762986785,65044380422595),(222,10,1,'2017-01-08','pkts',521332,442485,769357,711268,62254828125,52839308100,152971,131499,769357,711268,109819911525,94405257000,38231,32865,769357,711268,109819911525,94405257000,3475,2987,769357,711268,109819911525,94405257000),(223,10,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(224,10,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(225,18,1,'2017-01-08','bits',160947,64,1252918,209,19219623958,7650417,41023,22,1423737,269,29451008458,15904317,10253,6,1423737,269,29451008458,15904317,932,1,1423737,269,29451008458,15904317),(226,18,1,'2017-01-08','pkts',179,0,1139,0,21359419,0,49,0,1294,0,34940119,0,12,0,1294,0,34940119,0,1,0,1294,0,34940119,0),(227,18,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(228,18,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(229,7,1,'2017-01-08','bits',83788666,62017350,145912097,153765241,10005707361569,7405863844649,45618910,27999119,145912097,153765241,32750545397069,20101015451849,11401345,6997704,145912097,153765241,32750545397069,20101015451849,1036393,636098,145912097,153765241,32750545397069,20101015451849),(230,7,1,'2017-01-08','pkts',112441,163036,181083,315672,13427251322,19469127788,60949,82346,181083,315672,43756285922,59117221688,15233,20580,181083,315672,43756285922,59117221688,1385,1871,181083,315672,43756285922,59117221688),(231,7,1,'2017-01-08','errs',3,0,10,0,304264,0,1,0,10,0,591064,0,0,0,10,0,591064,0,0,0,10,0,591064,0),(232,7,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(233,13,1,'2017-01-08','bits',96796920,86180392,203815803,138006986,11559101038163,10291317701548,28530356,28430836,203815803,154515705,20482399322363,20410952299948,7130474,7105601,203815803,154515705,20482399322363,20410952299948,648167,645906,203815803,154515705,20482399322363,20410952299948),(234,13,1,'2017-01-08','pkts',139658,166857,312339,274753,16677422892,19925425752,40424,50536,312339,274753,29021218092,36280596252,10103,12630,312339,274753,29021218092,36280596252,918,1148,312339,274753,29021218092,36280596252),(235,13,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(236,13,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(237,3,1,'2017-01-08','bits',183916448,182337156,354511280,288680363,21962566608680,21773973849088,96230132,109855144,354511280,288680363,69085151325980,78866765568388,24050397,27455640,354511280,288680363,69085151325980,78866765568388,2186203,2495743,354511280,288680363,69085151325980,78866765568388),(238,3,1,'2017-01-08','pkts',310277,199689,548841,315997,37052062604,23846014876,167449,120296,548841,315997,120214509404,86362562176,41850,30065,548841,315997,120214509404,86362562176,3804,2733,548841,315997,120214509404,86362562176),(239,3,1,'2017-01-08','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(240,3,1,'2017-01-08','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(241,12,1,'2017-01-09','bits',45838751,14760909,82946442,25030266,5473742824069,1762644369830,19118973,6269219,89653360,28771098,13725759036469,4500754172030,4778311,1566835,89653360,28771098,13725759036469,4500754172030,434352,142427,89653360,28771098,13725759036469,4500754172030),(242,12,1,'2017-01-09','pkts',92141,52693,137144,79293,11002797503,6292175611,39224,22461,215931,91377,28159611203,16124809711,9803,5613,215931,91377,28159611203,16124809711,891,510,215931,91377,28159611203,16124809711),(243,12,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(244,12,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(245,16,1,'2017-01-09','bits',1675481,17631,22619948,80558,200074231101,2105314788,280316,12624,22619948,994893,201242722701,9062735088,70058,3155,22619948,994893,201242722701,9062735088,6368,287,22619948,994893,201242722701,9062735088),(246,16,1,'2017-01-09','pkts',3499,108,31299,610,417830918,12898473,583,84,31299,7428,418893818,60511473,146,21,31299,7428,418893818,60511473,13,2,31299,7428,418893818,60511473),(247,16,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(248,16,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(249,11,1,'2017-01-09','bits',44167237,109775348,65328534,211776290,5274142287128,13108603575801,19088458,45190002,75852587,211776290,13703852431028,32442490028901,4770684,11294114,75852587,211776290,13703852431028,32442490028901,433659,1026644,75852587,211776290,13703852431028,32442490028901),(250,11,1,'2017-01-09','pkts',112860,165986,177439,259506,13477021955,19821057912,47072,66996,199217,279703,33793596455,48097082712,11764,16744,199217,279703,33793596455,48097082712,1069,1522,199217,279703,33793596455,48097082712),(251,11,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(252,11,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(253,2,1,'2017-01-09','bits',381432037,38271938,661313598,64444992,45548325258324,4570205204562,275872780,27639246,686499579,80494483,198052930652124,19842601757562,68947595,6907748,686499579,80494483,198052930652124,19842601757562,6267396,627920,686499579,80494483,198052930652124,19842601757562),(254,2,1,'2017-01-09','pkts',343560,245073,582475,415187,41025885779,29265148974,248494,176426,591426,421294,178397567279,126658921074,62105,44093,591426,421294,178397567279,126658921074,5645,4008,591426,421294,178397567279,126658921074),(255,2,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(256,2,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,5,0,0,0,0,0,5,0,0),(257,8,1,'2017-01-09','bits',1741226,59000,6325436,252296,207926781202,7045435394,1134073,37948,8446494,252296,814166689102,27243195794,283433,9484,8446494,252296,814166689102,27243195794,25764,862,8446494,252296,814166689102,27243195794),(258,8,1,'2017-01-09','pkts',1162,651,4201,2708,138722754,77779740,756,419,5549,2912,542530254,301023840,189,105,5549,2912,542530254,301023840,17,10,5549,2912,542530254,301023840),(259,8,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(260,8,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(261,6,1,'2017-01-09','bits',10032058,18342403,23799468,56192417,1197968193409,2190339700801,7150412,11661100,31576274,56192417,5133381037309,8371666844101,1787069,2914404,31576274,56192417,5133381037309,8371666844101,162446,264922,31576274,56192417,5133381037309,8371666844101),(262,6,1,'2017-01-09','pkts',21856,17721,93056,48871,2609911607,2116150600,15036,11570,93056,48871,10794415007,8306083900,3758,2892,93056,48871,10794415007,8306083900,342,263,93056,48871,10794415007,8306083900),(263,6,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(264,6,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(265,17,1,'2017-01-09','bits',2411,25774,155358,411846,287851088,3077802666,679,8558,155358,584922,487810988,6143670966,170,2139,155358,584922,487810988,6143670966,15,194,155358,584922,487810988,6143670966),(266,17,1,'2017-01-09','pkts',16,23,448,284,1934714,2747414,4,8,448,402,3005114,5641214,1,2,448,402,3005114,5641214,0,0,448,402,3005114,5641214),(267,17,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(268,17,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(269,14,1,'2017-01-09','bits',8920743,33406856,22083941,74081963,1065261577694,3989246354362,3162755,14075026,22083941,74081963,2270585824994,10104658019662,790452,3517705,22083941,74081963,2270585824994,10104658019662,71853,319762,22083941,74081963,2270585824994,10104658019662),(270,14,1,'2017-01-09','pkts',39886,36645,90293,84974,4762995996,4375947436,16089,14578,90293,84974,11550186096,10465679536,4021,3643,90293,84974,11550186096,10465679536,366,331,90293,84974,11550186096,10465679536),(271,14,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(272,14,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(273,9,1,'2017-01-09','bits',136,211,379,541,16223569,25202290,61,91,1846,1716,43771969,65291290,15,23,1846,1716,43771969,65291290,1,2,1846,1716,43771969,65291290),(274,9,1,'2017-01-09','pkts',1,1,4,4,120015,121815,0,0,19,19,317415,322815,0,0,19,19,317415,322815,0,0,19,19,317415,322815),(275,9,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(276,9,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(277,4,1,'2017-01-09','bits',17916633,445315460,34703081,835421926,2139514726253,53177345657981,14715607,349448418,41526247,852187192,10564555272653,250874261357381,3677807,87336101,41526247,852187192,10564555272653,250874261357381,334316,7938930,41526247,852187192,10564555272653,250874261357381),(278,4,1,'2017-01-09','pkts',169495,310436,332372,580985,20240292806,37070754440,148482,248890,14070656,12934637,106597711706,178681583540,37110,62204,14070656,12934637,106597711706,178681583540,3373,5654,14070656,12934637,106597711706,178681583540),(279,4,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(280,4,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(281,15,1,'2017-01-09','bits',27,77,39,300,3243962,9184269,12,30,52,300,8471162,21891969,3,8,52,300,8471162,21891969,0,1,52,300,8471162,21891969),(282,15,1,'2017-01-09','pkts',0,0,0,1,0,900,0,0,0,1,0,900,0,0,0,1,0,900,0,0,0,1,0,900),(283,15,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(284,15,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(285,10,1,'2017-01-09','bits',408879772,255533705,767702815,477087475,48826377969525,30514557423780,202954426,117136040,772271471,498781816,145704026668725,84093720061080,50723504,29275294,772271471,498781816,145704026668725,84093720061080,4610812,2661150,772271471,498781816,145704026668725,84093720061080),(286,10,1,'2017-01-09','pkts',407332,343771,752788,626730,48641529570,41051389200,195306,167239,769357,711268,140213090070,120063687300,48812,41797,769357,711268,140213090070,120063687300,4437,3799,769357,711268,140213090070,120063687300),(287,10,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(288,10,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(289,18,1,'2017-01-09','bits',135668,75,1196124,260,16200798105,8983635,57269,32,1423737,269,41114514705,22648935,14313,8,1423737,269,41114514705,22648935,1301,1,1423737,269,41114514705,22648935),(290,18,1,'2017-01-09','pkts',154,0,1088,1,18341835,900,67,0,1294,1,47836035,900,17,0,1294,1,47836035,900,2,0,1294,1,47836035,900),(291,18,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(292,18,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(293,7,1,'2017-01-09','bits',76787396,63895162,150270597,153765241,9169566857400,7630040789655,53920496,33924603,150270597,153765241,38710332982500,24354981661755,13476112,8478626,150270597,153765241,38710332982500,24354981661755,1224991,770715,150270597,153765241,38710332982500,24354981661755),(294,7,1,'2017-01-09','pkts',106228,156280,192767,315672,12685171800,18662143800,72628,98299,192767,315672,52140747600,70570315800,18152,24567,192767,315672,52140747600,70570315800,1650,2233,192767,315672,52140747600,70570315800),(295,7,1,'2017-01-09','errs',3,0,10,0,414016,0,1,0,10,0,837916,0,0,0,10,0,837916,0,0,0,10,0,837916,0),(296,7,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(297,13,1,'2017-01-09','bits',86221547,79860958,164142273,134470759,10296232263239,9536676114831,38248577,37409420,203815803,154515705,27459265438439,26856821200431,9559308,9349581,203815803,154515705,27459265438439,26856821200431,868950,849886,203815803,154515705,27459265438439,26856821200431),(298,13,1,'2017-01-09','pkts',120603,154521,210574,274158,14401893575,18452285854,53984,68133,312339,274753,38756217575,48913631554,13492,17028,312339,274753,38756217575,48913631554,1226,1548,312339,274753,38756217575,48913631554),(299,13,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(300,13,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(301,3,1,'2017-01-09','bits',159419844,176148833,354511280,274350746,19037280077676,21034989042283,111423517,129782351,354511280,288680363,79992725887776,93172826180083,27847617,32435964,354511280,288680363,79992725887776,93172826180083,2531374,2948459,354511280,288680363,79992725887776,93172826180083),(302,3,1,'2017-01-09','pkts',275372,194783,548841,293633,32883855352,23260236151,196108,142382,548841,315997,140789261152,102218655751,49013,35585,548841,315997,140789261152,102218655751,4455,3235,548841,315997,140789261152,102218655751),(303,3,1,'2017-01-09','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(304,3,1,'2017-01-09','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(305,12,1,'2017-01-10','bits',44172005,14645727,86192365,32200475,5274711640772,1748890161678,24025470,7954111,89653360,32200475,17248197589772,5710359497778,6004567,1987932,89653360,32200475,17248197589772,5710359497778,545820,180705,89653360,32200475,17248197589772,5710359497778),(306,12,1,'2017-01-10','pkts',93401,52736,146239,99602,11153251486,6297348689,50070,28503,215931,99602,35946035686,20463010289,12514,7124,215931,99602,35946035686,20463010289,1138,648,215931,99602,35946035686,20463010289),(307,12,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(308,12,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(309,16,1,'2017-01-10','bits',253410015,17806634,1004580941,70886335,30260450130030,2126343627895,42153039,2973572,1004580941,70886335,30262214941530,2134766091895,10535101,743170,1004580941,70886335,30262214941530,2134766091895,957649,67555,1004580941,70886335,30262214941530,2134766091895),(310,16,1,'2017-01-10','pkts',191005,124360,721822,492382,22808476937,14850156650,31773,20764,721822,492382,22810054337,14906735750,7941,5189,721822,492382,22810054337,14906735750,722,472,721822,492382,22810054337,14906735750),(311,16,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(312,16,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(313,11,1,'2017-01-10','bits',46633444,147059572,75342647,304988735,5568639508078,17560824687976,24484496,65062030,75852587,304988735,17577737787778,46708877448376,6119289,16260632,75852587,304988735,17577737787778,46708877448376,556248,1478105,75852587,304988735,17577737787778,46708877448376),(314,11,1,'2017-01-10','pkts',115918,210559,177439,396432,13842157006,25143452318,60097,94287,199217,396432,43144510006,67690220618,15020,23565,199217,396432,43144510006,67690220618,1365,2142,199217,396432,43144510006,67690220618),(315,11,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(316,11,1,'2017-01-10','discs',0,0,0,73,0,21300,0,0,0,73,0,21300,0,0,0,73,0,21300,0,0,0,73,0,21300),(317,2,1,'2017-01-10','bits',395037559,44361048,689240691,71663028,47172619988300,5297285802033,319496472,32657730,689240691,80494483,229370670362300,23445408818133,79850177,8161985,689240691,80494483,229370670362300,23445408818133,7258448,741931,689240691,80494483,229370670362300,23445408818133),(318,2,1,'2017-01-10','pkts',357401,257883,599456,435281,42678374931,30794564485,288324,205107,599456,435281,206991737031,147249025885,72059,51261,599456,435281,206991737031,147249025885,6550,4660,599456,435281,206991737031,147249025885),(319,2,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(320,2,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,5,0,0,0,0,0,5,0,0),(321,8,1,'2017-01-10','bits',1621360,47258,6830522,206398,193613086306,5643252167,1333795,43588,8446494,252296,957550064206,31292581367,333349,10894,8446494,252296,957550064206,31292581367,30302,990,8446494,252296,957550064206,31292581367),(322,8,1,'2017-01-10','pkts',1076,525,4505,2283,128500719,62722055,888,482,5549,2912,637409619,345929555,222,120,5549,2912,637409619,345929555,20,11,5549,2912,637409619,345929555),(323,8,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(324,8,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(325,6,1,'2017-01-10','bits',9967149,15034309,21722908,33580458,1190217106447,1795306929878,8277327,13351159,31576274,56192417,5942408604547,9584983738178,2068714,3336793,31576274,56192417,5942408604547,9584983738178,188048,303317,31576274,56192417,5942408604547,9584983738178),(326,6,1,'2017-01-10','pkts',19580,15472,74484,47016,2338073881,1847515165,17148,13301,93056,48871,12310568581,9549292165,4286,3324,93056,48871,12310568581,9549292165,390,302,93056,48871,12310568581,9549292165),(327,6,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(328,6,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(329,17,1,'2017-01-10','bits',8856,99391,205332,1782834,1057568831,11868646909,1971,24309,205332,1782834,1415126531,17451944809,493,6075,205332,1782834,1415126531,17451944809,45,552,205332,1782834,1415126531,17451944809),(330,17,1,'2017-01-10','pkts',52,78,1167,1273,6268514,9284717,12,20,1167,1273,8498714,14202917,3,5,1167,1273,8498714,14202917,0,0,1167,1273,8498714,14202917),(331,17,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(332,17,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(333,14,1,'2017-01-10','bits',6186514,21923679,22083941,74081963,738756374250,2617994176876,3600327,15622720,22083941,74081963,2584725204150,11215769401576,899813,3904513,22083941,74081963,2584725204150,11215769401576,81794,354924,22083941,74081963,2584725204150,11215769401576),(334,14,1,'2017-01-10','pkts',29465,23951,90293,84974,3518477028,2860091904,18433,16199,90293,84974,13233159228,11629393104,4607,4049,90293,84974,13233159228,11629393104,419,368,90293,84974,13233159228,11629393104),(335,14,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(336,14,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(337,9,1,'2017-01-10','bits',135,264,465,622,16138562,31519542,77,123,1846,1716,55371362,88137942,19,31,1846,1716,55371362,88137942,2,3,1846,1716,55371362,88137942),(338,9,1,'2017-01-10','pkts',1,1,5,5,120314,132614,1,1,19,19,402614,418514,0,0,19,19,402614,418514,0,0,19,19,402614,418514),(339,9,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(340,9,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(341,4,1,'2017-01-10','bits',19350182,422872317,45522283,894901128,2310682624924,50496874899330,16923999,394664826,45522283,894901128,12149975713324,283335403556430,4229736,98636735,45522283,894901128,12149975713324,283335403556430,384487,8966164,45522283,894901128,12149975713324,283335403556430),(342,4,1,'2017-01-10','pkts',177843,299542,410796,640304,21236964900,35769517756,168464,281216,14070656,12934637,120942730200,201888551956,42103,70283,14070656,12934637,120942730200,201888551956,3827,6389,14070656,12934637,120942730200,201888551956),(343,4,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(344,4,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(345,15,1,'2017-01-10','bits',29,127,38,479,3439636,15149843,15,46,52,479,10865836,32912843,4,11,52,479,10865836,32912843,0,1,52,479,10865836,32912843),(346,15,1,'2017-01-10','pkts',0,0,0,2,0,9000,0,0,0,2,0,9000,0,0,0,2,0,9000,0,0,0,2,0,9000),(347,15,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(348,15,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(349,10,1,'2017-01-10','bits',271378507,263955007,767702815,481233060,32406664388688,31520187136658,225040131,145658667,772271471,498781816,161559685863588,104570542199558,56243287,36403828,772271471,498781816,161559685863588,104570542199558,5112565,3309140,772271471,498781816,161559685863588,104570542199558),(350,10,1,'2017-01-10','pkts',321938,303413,752788,626730,38444242965,36232013178,225331,197505,769357,711268,161768521965,141791673078,56316,49362,769357,711268,161768521965,141791673078,5119,4487,769357,711268,161768521965,141791673078),(351,10,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(352,10,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(353,18,1,'2017-01-10','bits',156556,109,1196124,438,18695124000,13075042,75553,45,1423737,438,54240934500,32205742,18883,11,1423737,438,54240934500,32205742,1716,1,1423737,438,54240934500,32205742),(354,18,1,'2017-01-10','pkts',174,0,1088,2,20824579,9000,87,0,1294,2,62776879,9000,22,0,1294,2,62776879,9000,2,0,1294,2,62776879,9000),(355,18,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(356,18,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(357,7,1,'2017-01-10','bits',65909089,42807798,150270597,115006697,7870533877470,5111893186080,60271440,38490601,150270597,153765241,43269771070470,27632979831180,15063375,9619786,150270597,153765241,43269771070470,27632979831180,1369274,874447,150270597,153765241,43269771070470,27632979831180),(358,7,1,'2017-01-10','pkts',95040,131803,192767,299339,11349207015,15739265370,82276,112322,192767,315672,59067085815,80637468870,20563,28072,192767,315672,59067085815,80637468870,1869,2552,192767,315672,59067085815,80637468870),(359,7,1,'2017-01-10','errs',2,0,5,0,217800,0,1,0,10,0,962100,0,0,0,10,0,962100,0,0,0,10,0,962100,0),(360,7,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(361,13,1,'2017-01-10','bits',146231979,216708958,341148528,681701726,17462291794530,25878300169170,57838846,68820236,341148528,681701726,41523375474330,49407079844370,14455408,17199938,341148528,681701726,41523375474330,49407079844370,1314009,1563490,341148528,681701726,41523375474330,49407079844370),(362,13,1,'2017-01-10','pkts',238784,259332,624914,635332,28514375715,30968168430,87031,102173,624914,635332,62480663115,73351467330,21751,25536,624914,635332,62480663115,73351467330,1977,2321,624914,635332,62480663115,73351467330),(363,13,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(364,13,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(365,3,1,'2017-01-10','bits',133774689,179171175,273105138,275852359,15974838228581,21395905062504,127116288,149889770,354511280,288680363,91258816831781,107608264088904,31769646,37461328,354511280,288680363,91258816831781,107608264088904,2887890,3405269,354511280,288680363,91258816831781,107608264088904),(366,3,1,'2017-01-10','pkts',253367,201104,500939,302120,30256036849,24015051659,225329,165362,548841,315997,161767470349,118715783159,56316,41328,548841,315997,161767470349,118715783159,5119,3757,548841,315997,161767470349,118715783159),(367,3,1,'2017-01-10','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(368,3,1,'2017-01-10','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(369,16,1,'2017-01-15','bits',0,0,0,0,0,0,182311574,13176696,1056768660,70886335,66072084384644,4775405807013,26250624,1899417,1056768660,70886335,66073162316444,4780857386013,2114679,153012,1056768660,70886335,66073162316444,4780857386013),(370,16,1,'2017-01-15','pkts',0,0,0,0,0,0,134855,91238,755375,518819,48873249769,33065774477,19418,13152,755375,518819,48874110169,33103653677,1564,1059,755375,518819,48874110169,33103653677),(371,16,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(372,16,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(373,12,1,'2017-01-15','bits',0,0,0,0,0,0,44133177,13912819,86192365,32200475,15994437018732,5042186355548,8195206,2674171,89653360,32200475,20627439634332,6730922455148,660183,215424,89653360,32200475,20627439634332,6730922455148),(374,12,1,'2017-01-15','pkts',0,0,0,0,0,0,91004,50907,146239,99602,32981053147,18449491029,17152,9667,215931,99602,43171339147,24330857829,1382,779,215931,99602,43171339147,24330857829),(375,12,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(376,12,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(377,11,1,'2017-01-15','bits',0,0,0,0,0,0,44170689,139626831,75852587,304988735,16008031769284,50602578839865,8387444,24502534,75852587,304988735,21111304771684,61673197715865,675670,1973857,75852587,304988735,21111304771684,61673197715865),(378,11,1,'2017-01-15','pkts',0,0,0,0,0,0,111167,198126,199217,396432,40288271696,71803257727,20501,35023,199217,396432,51601003496,88153942927,1651,2821,199217,396432,51601003496,88153942927),(379,11,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(380,11,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,73,0,21300,0,0,0,73,0,21300,0,0,0,73,0,21300),(381,2,1,'2017-01-15','bits',0,0,0,0,0,0,383034954,40609608,705776792,74416987,138816846660953,14717449819083,103165423,10749772,705776792,80494483,259668709787153,27057317084283,8310725,865972,705776792,80494483,259668709787153,27057317084283),(382,2,1,'2017-01-15','pkts',0,0,0,0,0,0,345014,247644,610024,444806,125037396488,89749276220,93173,66403,610024,444806,234516789488,167136624020,7506,5349,610024,444806,234516789488,167136624020),(383,2,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(384,2,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,5,0,0,0,0,0,5,0,0),(385,8,1,'2017-01-15','bits',0,0,0,0,0,0,1815417,58063,7976965,310219,657932373258,21042800986,453186,14736,8446494,310219,1140674366058,37090783786,36507,1187,8446494,310219,1140674366058,37090783786),(386,8,1,'2017-01-15','pkts',0,0,0,0,0,0,1206,643,5353,3397,437059326,233064040,301,163,5549,3397,758758926,410169640,24,13,5549,3397,758758926,410169640),(387,8,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(388,8,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(389,6,1,'2017-01-15','bits',0,0,0,0,0,0,9965942,16645705,31576274,56192417,3611797031854,6032636646794,2604988,4248800,31576274,56192417,6556791070054,10694289099194,209851,342272,31576274,56192417,6556791070054,10694289099194),(390,6,1,'2017-01-15','pkts',0,0,0,0,0,0,20915,16522,93056,59012,7579864190,5987681740,5430,4258,93056,59012,13668630590,10716443740,437,343,93056,59012,13668630590,10716443740),(391,6,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(392,6,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(393,17,1,'2017-01-15','bits',0,0,0,0,0,0,9766,66066,550263,1782834,3539489520,23943142216,1469,10664,550263,1782834,3697493520,26842090816,118,859,550263,1782834,3697493520,26842090816),(394,17,1,'2017-01-15','pkts',0,0,0,0,0,0,38,51,1167,1273,13708856,18634570,6,8,1167,1273,14635856,21323770,0,1,1167,1273,14635856,21323770),(395,17,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(396,17,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(397,19,1,'2017-01-15','bits',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(398,19,1,'2017-01-15','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(399,19,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(400,19,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(401,14,1,'2017-01-15','bits',0,0,0,0,0,0,5560024,21507030,22083941,74081963,2015030362656,7794448894486,1072683,4493218,22083941,74081963,2699958183456,11309492276686,86412,361962,22083941,74081963,2699958183456,11309492276686),(402,14,1,'2017-01-15','pkts',0,0,0,0,0,0,28043,22810,90293,84974,10163064984,8266577924,5564,4671,90293,84974,14005703184,11755966124,448,376,90293,84974,14005703184,11755966124),(403,14,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(404,14,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(405,9,1,'2017-01-15','bits',0,0,0,0,0,0,149,239,15292,13075,53972533,86761479,28,44,15292,13075,70321933,111385479,2,4,15292,13075,70321933,111385479),(406,9,1,'2017-01-15','pkts',0,0,0,0,0,0,1,1,67,72,383714,399314,0,0,67,72,498914,518114,0,0,67,72,498914,518114),(407,9,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(408,9,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(409,4,1,'2017-01-15','bits',0,0,0,0,0,0,19652427,446827543,45522283,962637668,7122314831296,161936557006771,5411191,124736624,45522283,962637668,13620042316696,313963828703371,435911,10048446,45522283,962637668,13620042316696,313963828703371),(410,4,1,'2017-01-15','pkts',0,0,0,0,0,0,185702,312380,413697,664458,67300995946,113211054701,53490,88726,14070656,12934637,134634508546,223325773901,4309,7148,14070656,12934637,134634508546,223325773901),(411,4,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(412,4,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(413,15,1,'2017-01-15','bits',0,0,0,0,0,0,27,93,47,479,9853635,33803145,5,17,52,479,12953235,41813145,0,1,52,479,12953235,41813145),(414,15,1,'2017-01-15','pkts',0,0,0,0,0,0,0,0,0,2,0,9900,0,0,0,2,0,9900,0,0,0,2,0,9900),(415,15,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(416,15,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(417,10,1,'2017-01-15','bits',0,0,0,0,0,0,331389464,257620469,772271471,506594461,120100512635805,93365522204280,69326118,49546611,772271471,506594461,174494878108005,124709561911680,5584727,3991343,772271471,506594461,174494878108005,124709561911680),(418,10,1,'2017-01-15','pkts',0,0,0,0,0,0,356541,322474,769357,711268,129215779485,116869493235,71980,64436,769357,711268,181174250085,162185773035,5799,5191,769357,711268,181174250085,162185773035),(419,10,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(420,10,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(421,18,1,'2017-01-15','bits',0,0,0,0,0,0,163527,86,1252918,438,59264752650,31259520,27826,16,1423737,438,70038985650,39822120,2242,1,1423737,438,70038985650,39822120),(422,18,1,'2017-01-15','pkts',0,0,0,0,0,0,178,0,1139,2,64473270,9900,31,0,1294,2,78686070,9900,3,0,1294,2,78686070,9900),(423,18,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(424,18,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(425,7,1,'2017-01-15','bits',0,0,0,0,0,0,63670741,48702910,150270597,153765241,23075231708162,17650665209159,18429522,12191548,150270597,153765241,46387384396562,30686309359559,1484633,982119,150270597,153765241,46387384396562,30686309359559),(426,7,1,'2017-01-15','pkts',0,0,0,0,0,0,92089,134639,192767,315672,33374428273,48795070149,25616,35558,192767,315672,64477045873,89500774149,2064,2864,192767,315672,64477045873,89500774149),(427,7,1,'2017-01-15','errs',0,0,0,0,0,0,2,0,10,0,788745,0,0,0,10,0,1080345,0,0,0,10,0,1080345,0),(428,7,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(429,13,1,'2017-01-15','bits',0,0,0,0,0,0,130924313,179463135,358450141,705212916,47448934875892,65040132122339,22611874,30151136,358450141,705212916,56914425566092,75890861576339,1821552,2428895,358450141,705212916,56914425566092,75890861576339),(430,13,1,'2017-01-15','pkts',0,0,0,0,0,0,212647,226767,661149,657744,77066634218,82183726290,35815,39699,661149,657744,90145961618,99922224090,2885,3198,661149,657744,90145961618,99922224090),(431,13,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(432,13,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(433,3,1,'2017-01-15','bits',0,0,0,0,0,0,147416875,171588628,354511280,288680363,53426234228416,62186464254248,40415109,47952920,354511280,288680363,101725476355816,120698267824448,3255734,3862961,354511280,288680363,101725476355816,120698267824448),(434,3,1,'2017-01-15','pkts',0,0,0,0,0,0,265051,193003,548841,315997,96058705868,69947486948,72018,53229,548841,315997,181271704868,133978256948,5802,4288,548841,315997,181271704868,133978256948),(435,3,1,'2017-01-15','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(436,3,1,'2017-01-15','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(437,16,1,'2017-01-16','bits',0,0,0,0,0,0,239379998,17295446,1056768660,70886335,66071991441644,4773767952813,27183744,1966935,1056768660,70886335,66073162316444,4780857386013,2120542,153436,1056768660,70886335,66073162316444,4780857386013),(438,16,1,'2017-01-16','pkts',0,0,0,0,0,0,177068,119760,755375,518819,48873049969,33055300277,20108,13619,755375,518819,48874110169,33103653677,1569,1062,755375,518819,48874110169,33103653677),(439,16,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(440,16,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(441,12,1,'2017-01-16','bits',0,0,0,0,0,0,43872165,14126831,86192365,32200475,12109287765132,3899188972748,8486517,2769228,89653360,32200475,20627439634332,6730922455148,662014,216021,89653360,32200475,20627439634332,6730922455148),(442,12,1,'2017-01-16','pkts',0,0,0,0,0,0,91986,51234,146239,99602,25389315547,14141327829,17762,10010,215931,99602,43171339147,24330857829,1386,781,215931,99602,43171339147,24330857829),(443,12,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(444,12,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(445,11,1,'2017-01-16','bits',0,0,0,0,0,0,44851019,150688681,75342647,304988735,12379464428284,41592034981665,8685589,25373516,75852587,304988735,21111304771684,61673197715865,677543,1979331,75852587,304988735,21111304771684,61673197715865),(446,11,1,'2017-01-16','pkts',0,0,0,0,0,0,110442,212732,177439,396432,30483425096,58716823927,21230,36268,199217,396432,51601003496,88153942927,1656,2829,199217,396432,51601003496,88153942927),(447,11,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(448,11,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,73,0,21300,0,0,0,73,0,21300,0,0,0,73,0,21300),(449,2,1,'2017-01-16','bits',0,0,0,0,0,0,376684702,41669697,705776792,71663028,103969874525753,11501378041683,106832601,11131890,705776792,80494483,259668709787153,27057317084283,8333770,868374,705776792,80494483,259668709787153,27057317084283),(450,2,1,'2017-01-16','pkts',0,0,0,0,0,0,341826,245628,610024,444806,94348397288,67796631020,96485,68763,610024,444806,234516789488,167136624020,7527,5364,610024,444806,234516789488,167136624020),(451,2,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(452,2,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,5,0,0),(453,8,1,'2017-01-16','bits',0,0,0,0,0,0,1855944,58318,7976965,310219,512266500258,16096580986,469295,15260,8446494,310219,1140674366058,37090783786,36609,1190,8446494,310219,1140674366058,37090783786),(454,8,1,'2017-01-16','pkts',0,0,0,0,0,0,1233,646,5353,3397,340296726,178354840,312,169,5549,3397,758758926,410169640,24,13,5549,3397,758758926,410169640),(455,8,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(456,8,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(457,6,1,'2017-01-16','bits',0,0,0,0,0,0,9220425,15810406,23799468,56192417,2544966335854,4363893408194,2697586,4399830,31576274,56192417,6556791070054,10694289099194,210433,343221,31576274,56192417,6556791070054,10694289099194),(458,6,1,'2017-01-16','pkts',0,0,0,0,0,0,19271,15878,93056,59012,5319015590,4382418340,5624,4409,93056,59012,13668630590,10716443740,439,344,93056,59012,13668630590,10716443740),(459,6,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(460,6,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(461,17,1,'2017-01-16','bits',0,0,0,0,0,0,12666,86124,550263,1782834,3496014120,23771535616,1521,11043,550263,1782834,3697493520,26842090816,119,861,550263,1782834,3697493520,26842090816),(462,17,1,'2017-01-16','pkts',0,0,0,0,0,0,49,67,1167,1273,13590056,18485170,6,9,1167,1273,14635856,21323770,0,1,1167,1273,14635856,21323770),(463,17,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(464,17,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(465,19,1,'2017-01-16','bits',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(466,19,1,'2017-01-16','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(467,19,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(468,19,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(469,14,1,'2017-01-16','bits',0,0,0,0,0,0,5245020,18007576,22083941,74081963,1447698968256,4970343012886,1110813,4652936,22083941,74081963,2699958183456,11309492276686,86652,362965,22083941,74081963,2699958183456,11309492276686),(470,14,1,'2017-01-16','pkts',0,0,0,0,0,0,25242,19717,90293,84974,6967265784,5442077324,5762,4837,90293,84974,14005703184,11755966124,449,377,90293,84974,14005703184,11755966124),(471,14,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(472,14,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(473,9,1,'2017-01-16','bits',0,0,0,0,0,0,152,254,15292,13075,41962933,70145679,29,46,15292,13075,70321933,111385479,2,4,15292,13075,70321933,111385479),(474,9,1,'2017-01-16','pkts',0,0,0,0,0,0,1,1,67,72,297314,312914,0,0,67,72,498914,518114,0,0,67,72,498914,518114),(475,9,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(476,9,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(477,4,1,'2017-01-16','bits',0,0,0,0,0,0,18129754,404084011,45522283,962637668,5004065905096,111532844225971,5603540,129170584,45522283,962637668,13620042316696,313963828703371,437120,10076309,45522283,962637668,13620042316696,313963828703371),(478,4,1,'2017-01-16','pkts',0,0,0,0,0,0,168203,284208,413697,664458,46426264546,78445437101,55391,91880,14070656,12934637,134634508546,223325773901,4321,7167,14070656,12934637,134634508546,223325773901),(479,4,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(480,4,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(481,15,1,'2017-01-16','bits',0,0,0,0,0,0,28,104,39,479,7616235,28811745,5,17,52,479,12953235,41813145,0,1,52,479,12953235,41813145),(482,15,1,'2017-01-16','pkts',0,0,0,0,0,0,0,0,0,2,0,9900,0,0,0,2,0,9900,0,0,0,2,0,9900),(483,15,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(484,15,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(485,10,1,'2017-01-16','bits',0,0,0,0,0,0,265160799,249627792,767702815,506594461,73188358073805,68901015038280,71790423,51307822,772271471,506594461,174494878108005,124709561911680,5600213,4002410,772271471,506594461,174494878108005,124709561911680),(486,10,1,'2017-01-16','pkts',0,0,0,0,0,0,309892,289295,752788,626730,85534869885,79849868835,74538,66726,769357,711268,181174250085,162185773035,5815,5205,769357,711268,181174250085,162185773035),(487,10,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(488,10,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(489,18,1,'2017-01-16','bits',0,0,0,0,0,0,159001,94,1215499,438,43886573250,25836120,28815,16,1423737,438,70038985650,39822120,2248,1,1423737,438,70038985650,39822120),(490,18,1,'2017-01-16','pkts',0,0,0,0,0,0,174,0,1105,2,47963670,9900,32,0,1294,2,78686070,9900,3,0,1294,2,78686070,9900),(491,18,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(492,18,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(493,7,1,'2017-01-16','bits',0,0,0,0,0,0,59102119,48010806,150270597,153765241,16313071505762,13251702742559,19084629,12624916,150270597,153765241,46387384396562,30686309359559,1488750,984842,150270597,153765241,46387384396562,30686309359559),(494,7,1,'2017-01-16','pkts',0,0,0,0,0,0,88010,131283,192767,315672,24291954073,36236092149,26527,36822,192767,315672,64477045873,89500774149,2069,2872,192767,315672,64477045873,89500774149),(495,7,1,'2017-01-16','errs',0,0,0,0,0,0,2,0,10,0,664545,0,0,0,10,0,1080345,0,0,0,10,0,1080345,0),(496,7,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(497,13,1,'2017-01-16','bits',0,0,0,0,0,0,141765646,210135470,358450141,705212916,39129444836092,58000541807939,23415648,31222905,358450141,705212916,56914425566092,75890861576339,1826603,2435630,358450141,705212916,56914425566092,75890861576339),(498,13,1,'2017-01-16','pkts',0,0,0,0,0,0,235087,247644,661149,657744,64887458018,68353469490,37088,41110,661149,657744,90145961618,99922224090,2893,3207,661149,657744,90145961618,99922224090),(499,13,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(500,13,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(501,3,1,'2017-01-16','bits',0,0,0,0,0,0,142484767,171105403,354511280,275852359,39328075519216,47227828794848,41851727,49657481,354511280,288680363,101725476355816,120698267824448,3264762,3873672,354511280,288680363,101725476355816,120698267824448),(502,3,1,'2017-01-16','pkts',0,0,0,0,0,0,257673,194070,548841,305386,71121968468,53566336748,74579,55121,548841,315997,181271704868,133978256948,5818,4300,548841,315997,181271704868,133978256948),(503,3,1,'2017-01-16','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(504,3,1,'2017-01-16','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(505,16,1,'2017-01-17','bits',0,0,0,0,0,0,348453795,25168720,1056768660,70886335,66071369485844,4772316562413,28185648,2039430,1056768660,70886335,66073162316444,4780857386013,2126439,153863,1056768660,70886335,66073162316444,4780857386013),(506,16,1,'2017-01-17','pkts',0,0,0,0,0,0,257749,174283,755375,518819,48872529769,33046404677,20849,14121,755375,518819,48874110169,33103653677,1573,1065,755375,518819,48874110169,33103653677),(507,16,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(508,16,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(509,12,1,'2017-01-17','bits',0,0,0,0,0,0,43356091,13973539,86192365,32200475,8220878428932,2649564601148,8799303,2871293,89653360,32200475,20627439634332,6730922455148,663855,216622,89653360,32200475,20627439634332,6730922455148),(510,12,1,'2017-01-17','pkts',0,0,0,0,0,0,92920,51590,146239,99602,17618792947,9782100429,18416,10379,215931,99602,43171339147,24330857829,1389,783,215931,99602,43171339147,24330857829),(511,12,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(512,12,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(513,11,1,'2017-01-17','bits',0,0,0,0,0,0,46226927,168033060,75342647,304988735,8765226278884,31861252565865,9005711,26308700,75852587,304988735,21111304771684,61673197715865,679427,1984834,75852587,304988735,21111304771684,61673197715865),(514,11,1,'2017-01-17','pkts',0,0,0,0,0,0,112948,234400,177439,396432,21416317496,44445322327,22012,37605,199217,396432,51601003496,88153942927,1661,2837,199217,396432,51601003496,88153942927),(515,11,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(516,11,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,73,0,21300,0,0,0,73,0,21300,0,0,0,73,0,21300),(517,2,1,'2017-01-17','bits',0,0,0,0,0,0,393352397,45313647,705776792,71663028,74584728111953,8592056462883,110770101,11542175,705776792,80494483,259668709787153,27057317084283,8356943,870788,705776792,80494483,259668709787153,27057317084283),(518,2,1,'2017-01-17','pkts',0,0,0,0,0,0,356440,257568,610024,444806,67585606688,48838230020,100041,71298,610024,444806,234516789488,167136624020,7547,5379,610024,444806,234516789488,167136624020),(519,2,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(520,2,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,5,0,0),(521,8,1,'2017-01-17','bits',0,0,0,0,0,0,1946799,59079,7976965,310219,369140286858,11202127186,486591,15822,8446494,310219,1140674366058,37090783786,36710,1194,8446494,310219,1140674366058,37090783786),(522,8,1,'2017-01-17','pkts',0,0,0,0,0,0,1291,656,5353,3397,244810326,124356640,324,175,5549,3397,758758926,410169640,24,13,5549,3397,758758926,410169640),(523,8,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(524,8,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(525,6,1,'2017-01-17','bits',0,0,0,0,0,0,9185995,14820464,21722908,37427689,1741793212054,2810167525394,2797010,4561994,31576274,56192417,6556791070054,10694289099194,211018,344175,31576274,56192417,6556791070054,10694289099194),(526,6,1,'2017-01-17','pkts',0,0,0,0,0,0,18835,15388,74484,59012,3571435190,2917850140,5831,4571,93056,59012,13668630590,10716443740,440,345,93056,59012,13668630590,10716443740),(527,6,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(528,6,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(529,17,1,'2017-01-17','bits',0,0,0,0,0,0,16978,109648,550263,1782834,3219193920,20790840016,1577,11450,550263,1782834,3697493520,26842090816,119,864,550263,1782834,3697493520,26842090816),(530,17,1,'2017-01-17','pkts',0,0,0,0,0,0,62,85,1167,1273,11764856,16058770,6,9,1167,1273,14635856,21323770,0,1,1167,1273,14635856,21323770),(531,17,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(532,17,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(533,19,1,'2017-01-17','bits',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(534,19,1,'2017-01-17','pkts',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(535,19,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(536,19,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(537,14,1,'2017-01-17','bits',0,0,0,0,0,0,4254767,13296845,22083941,74081963,806763448056,2521267881886,1151754,4824428,22083941,74081963,2699958183456,11309492276686,86893,363974,22083941,74081963,2699958183456,11309492276686),(538,14,1,'2017-01-17','pkts',0,0,0,0,0,0,21505,14715,90293,84974,4077684384,2790227324,5975,5015,90293,84974,14005703184,11755966124,451,378,90293,84974,14005703184,11755966124),(539,14,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(540,14,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(541,9,1,'2017-01-17','bits',0,0,0,0,0,0,160,279,15292,13075,30313333,52845879,30,48,15292,13075,70321933,111385479,2,4,15292,13075,70321933,111385479),(542,9,1,'2017-01-17','pkts',0,0,0,0,0,0,1,1,67,72,210914,226514,0,0,67,72,498914,518114,0,0,67,72,498914,518114),(543,9,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(544,9,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(545,4,1,'2017-01-17','bits',0,0,0,0,0,0,19235760,410820058,45522283,962637668,3647369480296,77897234416771,5810068,133931385,45522283,962637668,13620042316696,313963828703371,438335,10104328,45522283,962637668,13620042316696,313963828703371),(546,4,1,'2017-01-17','pkts',0,0,0,0,0,0,177610,289776,413697,664458,33677325346,54945537101,57433,95267,14070656,12934637,134634508546,223325773901,4333,7187,14070656,12934637,134634508546,223325773901),(547,4,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(548,4,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(549,15,1,'2017-01-17','bits',0,0,0,0,0,0,28,121,38,479,5389635,23010345,6,18,52,479,12953235,41813145,0,1,52,479,12953235,41813145),(550,15,1,'2017-01-17','pkts',0,0,0,0,0,0,0,0,0,2,0,9900,0,0,0,2,0,9900,0,0,0,2,0,9900),(551,15,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(552,15,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(553,10,1,'2017-01-17','bits',0,0,0,0,0,0,223498731,262626302,767702815,506594461,42378711929805,49797886336080,74436380,53198858,772271471,506594461,174494878108005,124709561911680,5615785,4013539,772271471,506594461,174494878108005,124709561911680),(554,10,1,'2017-01-17','pkts',0,0,0,0,0,0,289706,285459,752788,626730,54932544285,54127386435,77286,69186,769357,711268,181174250085,162185773035,5831,5220,769357,711268,181174250085,162185773035),(555,10,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(556,10,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(557,18,1,'2017-01-17','bits',0,0,0,0,0,0,174793,105,1215499,438,33143329050,19910520,29877,17,1423737,438,70038985650,39822120,2254,1,1423737,438,70038985650,39822120),(558,18,1,'2017-01-17','pkts',0,0,0,0,0,0,187,0,1105,2,35550870,9900,34,0,1294,2,78686070,9900,3,0,1294,2,78686070,9900),(559,18,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(560,18,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(561,7,1,'2017-01-17','bits',0,0,0,0,0,0,55348177,41338309,150270597,115006697,10494844673762,7838363482559,19788025,13090228,150270597,153765241,46387384396562,30686309359559,1492890,987580,150270597,153765241,46387384396562,30686309359559),(562,7,1,'2017-01-17','pkts',0,0,0,0,0,0,84784,124898,192767,299339,16076259073,23682566349,27505,38179,192767,315672,64477045873,89500774149,2075,2880,192767,315672,64477045873,89500774149),(563,7,1,'2017-01-17','errs',0,0,0,0,0,0,2,0,6,0,351345,0,0,0,10,0,1080345,0,0,0,10,0,1080345,0),(564,7,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(565,13,1,'2017-01-17','bits',0,0,0,0,0,0,169850615,273112846,358450141,705212916,32206224431692,51786292357139,24278671,32373678,358450141,705212916,56914425566092,75890861576339,1831682,2442403,358450141,705212916,56914425566092,75890861576339),(566,13,1,'2017-01-17','pkts',0,0,0,0,0,0,291453,297316,661149,657744,55263875018,56375488290,38455,42625,661149,657744,90145961618,99922224090,2901,3216,661149,657744,90145961618,99922224090),(567,13,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(568,13,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(569,3,1,'2017-01-17','bits',0,0,0,0,0,0,134844571,174139750,273105138,275852359,25568688166216,33019682871248,43394242,51487690,354511280,288680363,101725476355816,120698267824448,3273840,3884444,354511280,288680363,101725476355816,120698267824448),(570,3,1,'2017-01-17','pkts',0,0,0,0,0,0,252826,198777,500939,305386,47939851268,37691326748,77327,57153,548841,315997,181271704868,133978256948,5834,4312,548841,315997,181271704868,133978256948),(571,3,1,'2017-01-17','errs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(572,3,1,'2017-01-17','discs',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `traffic_daily` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorisedMobile` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `privs` int(11) DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `lastupdated` datetime DEFAULT NULL,
  `lastupdatedby` int(11) DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  KEY `IDX_8D93D649DA0209B9` (`custid`),
  CONSTRAINT `FK_8D93D649DA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,1,'jason','$2a$09$13rn7NQkPdz2EXs3uSbh5e96YelRKt2gu1wHHglGCPyKPk/e3mV2W','jason.yang@cnix.com.cn',NULL,NULL,3,0,'2016-12-19 11:23:19',1,'jason','2016-11-10 10:22:56'),(2,2,'shaoyangmin','$2a$09$moAc47l8pCzsdBScZWuGzuNouzAV9ANTqDUO0Kf99Bs3xYhgtmTsC','ip-noc@baidu.com',NULL,NULL,1,0,'2016-11-10 21:09:05',1,'jason','2016-11-10 16:54:14'),(3,3,'houjue','$2a$09$0uS1ptZvQvRYjKBm7aoaEOqDLxVtGemBYFX/FfEfK6DuAEj2m/.zy','',NULL,NULL,1,0,'2016-11-10 17:08:19',1,'jason','2016-11-10 17:08:19'),(4,1,'cnix-noc','$2a$09$NVwhwgO7lqv2hn1IHsb4lu0pyuccigtM7mtqB2nF7a9PYDc7.EiOC','noc@cnix.com.cn',NULL,NULL,3,0,'2016-12-19 11:24:09',1,'jason','2016-12-19 11:24:09');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logins`
--

DROP TABLE IF EXISTS `user_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_logins` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL,
  `at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6341CC99A76ED395` (`user_id`),
  KEY `at_idx` (`at`,`user_id`),
  CONSTRAINT `FK_6341CC99A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logins`
--

LOCK TABLES `user_logins` WRITE;
/*!40000 ALTER TABLE `user_logins` DISABLE KEYS */;
INSERT INTO `user_logins` VALUES (1,1,'10.0.2.2','2016-11-10 10:23:17'),(2,1,'10.0.2.2','2016-11-10 10:24:49'),(3,1,'10.0.2.2','2016-11-10 15:34:14'),(4,1,'10.0.2.2','2016-11-10 15:38:38'),(5,1,'10.0.2.2','2016-11-10 17:16:40'),(6,3,'10.0.2.2','2016-11-10 17:21:37'),(7,1,'10.0.2.2','2016-11-10 17:23:06'),(8,1,'10.0.2.2','2016-11-10 20:52:30'),(9,1,'10.0.2.2','2016-11-11 12:23:48'),(10,1,'10.0.2.2','2016-11-11 13:44:21'),(11,1,'10.0.2.2','2016-11-11 13:58:17'),(12,1,'10.0.2.2','2016-11-14 11:26:05'),(13,3,'10.0.2.2','2016-11-14 11:30:13'),(14,1,'10.0.2.2','2016-11-14 11:32:21'),(15,1,'10.0.2.2','2016-11-14 20:34:18'),(16,1,'10.0.2.2','2016-11-15 15:06:29'),(17,1,'10.0.2.2','2016-11-15 16:17:18'),(18,1,'10.0.2.2','2016-11-15 20:51:19'),(19,1,'10.0.2.2','2016-11-16 09:11:30'),(20,1,'10.0.2.2','2016-11-16 22:06:05'),(21,1,'10.0.2.2','2016-11-17 09:35:47'),(22,1,'10.0.2.2','2016-11-18 15:48:56'),(23,1,'10.0.2.2','2016-11-23 09:09:39'),(24,1,'10.0.2.2','2016-11-24 09:15:28'),(25,1,'10.0.2.2','2016-11-28 15:27:21'),(26,1,'10.0.2.2','2016-11-28 15:31:08'),(27,1,'10.0.2.2','2016-11-29 09:15:58'),(28,1,'10.0.2.2','2016-11-30 10:45:24'),(29,1,'10.0.2.2','2016-11-30 23:02:31'),(30,1,'10.0.2.2','2016-12-02 11:38:13'),(31,1,'10.0.2.2','2016-12-02 11:51:28'),(32,3,'10.0.2.2','2016-12-02 12:40:55'),(33,1,'10.0.2.2','2016-12-02 12:41:56'),(34,1,'10.0.2.2','2016-12-02 17:23:24'),(35,1,'10.0.2.2','2016-12-05 13:44:47'),(36,1,'10.0.2.2','2016-12-06 14:56:12'),(37,1,'10.0.2.2','2016-12-06 16:35:00'),(38,1,'10.0.2.2','2016-12-06 17:56:24'),(39,1,'10.0.2.2','2016-12-08 09:29:02'),(40,1,'10.0.2.2','2016-12-08 12:10:19'),(41,1,'10.0.2.2','2016-12-08 17:32:29'),(42,1,'10.0.2.2','2016-12-09 14:05:08'),(43,1,'10.0.2.2','2016-12-11 10:13:10'),(44,1,'10.0.2.2','2016-12-13 12:17:42'),(45,1,'10.0.2.2','2016-12-15 13:46:48'),(46,1,'10.0.2.2','2016-12-19 09:49:53'),(47,1,'10.0.2.2','2016-12-19 10:06:20'),(48,1,'10.0.2.2','2016-12-21 22:19:50'),(49,1,'10.0.2.2','2016-12-30 14:08:06'),(50,1,'10.0.2.2','2016-12-30 14:24:02'),(51,1,'1.180.206.192','2017-01-03 15:53:31'),(52,1,'106.2.238.131','2017-01-03 15:54:29'),(53,1,'27.112.104.177','2017-01-03 19:58:11'),(54,1,'27.112.104.177','2017-01-03 20:06:08'),(55,1,'1.180.206.192','2017-01-03 20:08:51'),(56,1,'27.112.104.177','2017-01-03 20:47:42'),(57,1,'1.180.212.117','2017-01-03 21:30:05'),(58,1,'1.180.206.192','2017-01-04 11:21:36'),(59,1,'1.180.206.192','2017-01-04 11:22:05'),(60,1,'106.2.238.131','2017-01-05 10:05:15'),(61,1,'106.2.238.131','2017-01-06 10:25:16'),(62,1,'118.26.0.2','2017-01-06 19:30:20'),(63,1,'118.26.0.2','2017-01-06 21:13:18'),(64,1,'118.26.0.2','2017-01-06 21:15:17'),(65,1,'118.26.0.2','2017-01-06 21:16:42'),(66,1,'124.64.235.174','2017-01-07 23:35:09'),(67,1,'106.2.238.132','2017-01-09 09:07:54'),(68,1,'106.2.238.131','2017-01-09 16:59:38'),(69,1,'106.2.238.131','2017-01-09 17:28:51'),(70,1,'106.2.238.131','2017-01-11 13:26:31'),(71,1,'1.180.212.117','2017-01-11 21:50:34'),(72,1,'123.121.3.123','2017-01-11 22:54:24'),(73,1,'218.241.251.181','2017-01-12 10:57:09'),(74,1,'218.241.251.181','2017-01-12 20:34:15'),(75,1,'106.2.238.131','2017-01-13 10:16:45'),(76,1,'114.242.248.63','2017-01-13 14:45:25'),(77,1,'123.122.200.115','2017-01-14 20:38:02'),(78,1,'183.93.46.106','2017-01-15 08:33:42'),(79,1,'111.173.157.205','2017-01-16 09:07:34'),(80,1,'211.151.207.254','2017-01-16 12:39:52'),(81,1,'118.186.202.187','2017-02-16 14:18:51'),(82,1,'118.186.202.187','2017-02-16 16:07:50'),(83,1,'125.39.138.253','2017-02-17 09:32:20'),(84,1,'125.39.138.253','2017-02-17 14:42:59'),(85,1,'221.219.133.177','2017-02-18 09:18:06'),(86,1,'61.148.244.33','2017-02-18 19:13:26'),(87,1,'123.114.100.110','2017-02-18 22:13:25'),(88,1,'221.222.26.219','2017-02-18 23:02:52'),(89,1,'221.219.133.177','2017-02-19 11:32:16'),(90,1,'118.26.186.241','2017-02-19 22:02:50'),(91,1,'124.239.176.52','2017-02-20 09:27:14'),(92,1,'124.239.176.52','2017-02-21 08:53:59'),(93,1,'124.239.176.52','2017-02-21 12:19:27'),(94,1,'211.151.207.241','2017-02-21 12:32:57'),(95,1,'114.113.88.254','2017-02-21 12:51:44'),(96,1,'211.151.207.241','2017-02-21 21:03:15'),(97,1,'106.121.4.232','2017-02-22 06:21:49'),(98,1,'124.239.176.52','2017-02-22 09:19:08'),(99,1,'114.113.88.254','2017-02-22 13:26:46'),(100,1,'124.239.176.52','2017-02-22 15:36:56');
/*!40000 ALTER TABLE `user_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_pref`
--

DROP TABLE IF EXISTS `user_pref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_pref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `attribute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ix` int(11) NOT NULL DEFAULT '0',
  `op` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `expire` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `IX_UserPreference_1` (`user_id`,`attribute`,`op`,`ix`),
  KEY `IDX_DBD4D4F8A76ED395` (`user_id`),
  CONSTRAINT `FK_DBD4D4F8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_pref`
--

LOCK TABLES `user_pref` WRITE;
/*!40000 ALTER TABLE `user_pref` DISABLE KEYS */;
INSERT INTO `user_pref` VALUES (1,1,'auth.last_login_from',0,'=','124.239.176.52',0),(2,1,'auth.last_login_at',0,'=','1487749016',0),(3,1,'customer-notes.2.last_read',0,'=','1487610071',0),(4,3,'auth.last_login_from',0,'=','10.0.2.2',0),(5,3,'auth.last_login_at',0,'=','1480653655',0),(6,1,'customer-notes.3.last_read',0,'=','1483430469',0),(7,1,'customer-notes.6.last_read',0,'=','1483444789',0),(8,1,'customer-notes.5.last_read',0,'=','1483503480',0),(9,4,'customer-notes.read_upto',0,'=','1482117849',0),(10,1,'customer-notes.1.last_read',0,'=','1483426554',0),(11,1,'customer-notes.8.last_read',0,'=','1483441216',0),(12,1,'customer-notes.4.last_read',0,'=','1487314559',0),(13,1,'customer-notes.9.last_read',0,'=','1483670342',0),(14,1,'customer-notes.12.last_read',0,'=','1487658727',0),(15,1,'customer-notes.21.last_read',0,'=','1487658404',0);
/*!40000 ALTER TABLE `user_pref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nagios_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` VALUES (1,'Cisco Systems','Cisco','cisco'),(2,'Foundry Networks','Brocade','brocade'),(3,'Extreme Networks','Extreme','extreme'),(4,'Force10 Networks','Force10','force10'),(5,'Glimmerglass','Glimmerglass','glimmerglass'),(6,'Allied Telesyn','AlliedTel','alliedtel'),(7,'Enterasys','Enterasys','enterasys'),(8,'Dell','Dell','dell'),(9,'Hitachi Cable','Hitachi','hitachi'),(10,'MRV','MRV','mrv'),(11,'Transmode','Transmode','transmode'),(12,'Brocade','Brocade','brocade'),(13,'Juniper Networks','Juniper','juniper'),(14,'Cumulus Networks','Cumulus','cumulus'),(15,'Linux','Linux','linux'),(16,'Hewlett-Packard','HP','hp'),(18,'HUAWEI','HUAWEI','HUAWEI'),(19,'tang','tang','tang');
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view_cust_current_active`
--

DROP TABLE IF EXISTS `view_cust_current_active`;
/*!50001 DROP VIEW IF EXISTS `view_cust_current_active`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_cust_current_active` AS SELECT 
 1 AS `id`,
 1 AS `irrdb`,
 1 AS `company_registered_detail_id`,
 1 AS `company_billing_details_id`,
 1 AS `reseller`,
 1 AS `name`,
 1 AS `type`,
 1 AS `shortname`,
 1 AS `abbreviatedName`,
 1 AS `autsys`,
 1 AS `maxprefixes`,
 1 AS `peeringemail`,
 1 AS `nocphone`,
 1 AS `noc24hphone`,
 1 AS `nocfax`,
 1 AS `nocemail`,
 1 AS `nochours`,
 1 AS `nocwww`,
 1 AS `peeringmacro`,
 1 AS `peeringmacrov6`,
 1 AS `peeringpolicy`,
 1 AS `corpwww`,
 1 AS `datejoin`,
 1 AS `dateleave`,
 1 AS `status`,
 1 AS `activepeeringmatrix`,
 1 AS `peeringDb`,
 1 AS `lastupdated`,
 1 AS `lastupdatedby`,
 1 AS `creator`,
 1 AS `created`,
 1 AS `MD5Support`,
 1 AS `isReseller`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_switch_details_by_custid`
--

DROP TABLE IF EXISTS `view_switch_details_by_custid`;
/*!50001 DROP VIEW IF EXISTS `view_switch_details_by_custid`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_switch_details_by_custid` AS SELECT 
 1 AS `id`,
 1 AS `custid`,
 1 AS `virtualinterfacename`,
 1 AS `virtualinterfaceid`,
 1 AS `status`,
 1 AS `speed`,
 1 AS `duplex`,
 1 AS `monitorindex`,
 1 AS `notes`,
 1 AS `switchport`,
 1 AS `switchportid`,
 1 AS `spifname`,
 1 AS `switch`,
 1 AS `switchid`,
 1 AS `vendorid`,
 1 AS `snmppasswd`,
 1 AS `infrastructure`,
 1 AS `cabinet`,
 1 AS `colocabinet`,
 1 AS `locationname`,
 1 AS `locationshortname`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_vlaninterface_details_by_custid`
--

DROP TABLE IF EXISTS `view_vlaninterface_details_by_custid`;
/*!50001 DROP VIEW IF EXISTS `view_vlaninterface_details_by_custid`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_vlaninterface_details_by_custid` AS SELECT 
 1 AS `id`,
 1 AS `custid`,
 1 AS `virtualinterfaceid`,
 1 AS `monitorindex`,
 1 AS `virtualinterfacename`,
 1 AS `vlan`,
 1 AS `vlanname`,
 1 AS `vlanid`,
 1 AS `rcvrfname`,
 1 AS `vlaninterfaceid`,
 1 AS `ipv4enabled`,
 1 AS `ipv4hostname`,
 1 AS `ipv4canping`,
 1 AS `ipv4monitorrcbgp`,
 1 AS `ipv6enabled`,
 1 AS `ipv6hostname`,
 1 AS `ipv6canping`,
 1 AS `ipv6monitorrcbgp`,
 1 AS `as112client`,
 1 AS `mcastenabled`,
 1 AS `ipv4bgpmd5secret`,
 1 AS `ipv6bgpmd5secret`,
 1 AS `rsclient`,
 1 AS `irrdbfilter`,
 1 AS `busyhost`,
 1 AS `notes`,
 1 AS `ipv4address`,
 1 AS `ipv6address`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `virtualinterface`
--

DROP TABLE IF EXISTS `virtualinterface`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `virtualinterface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mtu` int(11) DEFAULT NULL,
  `trunk` tinyint(1) DEFAULT NULL,
  `channelgroup` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_11D9014FDA0209B9` (`custid`),
  CONSTRAINT `FK_11D9014FDA0209B9` FOREIGN KEY (`custid`) REFERENCES `cust` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `virtualinterface`
--

LOCK TABLES `virtualinterface` WRITE;
/*!40000 ALTER TABLE `virtualinterface` DISABLE KEYS */;
INSERT INTO `virtualinterface` VALUES (4,2,'V_baidu','',0,0,0),(5,3,'V_Zhonglian','',0,0,0),(6,4,'V_Kuntime','',0,0,0),(7,6,'V_founder','',0,0,0),(8,7,'V_Tencent','',0,0,0),(9,8,'V_CCTV','',0,0,0),(10,9,'v_kuandayi','',0,0,0),(11,10,'v_shanghaiyouchi','',0,0,0),(12,11,'V_ali','',0,0,0),(13,12,'v_21via','',0,0,0),(14,13,'V_yiantianixa','',0,0,0),(15,14,'v_hongweixinda','',0,0,0),(16,15,'v_leshi','',0,0,0),(17,17,'V_guanghuanshixun','',0,0,0),(18,18,'v_sohu','',0,0,0),(19,16,'v_21viaNET','',0,0,0),(20,19,'v_ghxw','',0,0,0),(21,20,'v_ksyun','',0,0,0),(22,21,'','',0,0,0),(23,22,'','',0,0,0);
/*!40000 ALTER TABLE `virtualinterface` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vlan`
--

DROP TABLE IF EXISTS `vlan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vlan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infrastructureid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `rcvrfname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0',
  `peering_matrix` tinyint(1) NOT NULL DEFAULT '0',
  `peering_manager` tinyint(1) NOT NULL DEFAULT '0',
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_F83104A1721EBF79` (`infrastructureid`),
  CONSTRAINT `FK_F83104A1721EBF79` FOREIGN KEY (`infrastructureid`) REFERENCES `infrastructure` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vlan`
--

LOCK TABLES `vlan` WRITE;
/*!40000 ALTER TABLE `vlan` DISABLE KEYS */;
INSERT INTO `vlan` VALUES (1,1,'Public Vlan',3602,'',0,1,0,'');
/*!40000 ALTER TABLE `vlan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vlaninterface`
--

DROP TABLE IF EXISTS `vlaninterface`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vlaninterface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ipv4addressid` int(11) DEFAULT NULL,
  `ipv6addressid` int(11) DEFAULT NULL,
  `virtualinterfaceid` int(11) DEFAULT NULL,
  `vlanid` int(11) DEFAULT NULL,
  `ipv4enabled` tinyint(1) DEFAULT '1',
  `ipv4hostname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ipv6enabled` tinyint(1) DEFAULT '1',
  `ipv6hostname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mcastenabled` tinyint(1) DEFAULT '0',
  `irrdbfilter` tinyint(1) DEFAULT '1',
  `bgpmd5secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ipv4bgpmd5secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ipv6bgpmd5secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxbgpprefix` int(11) DEFAULT NULL,
  `rsclient` tinyint(1) DEFAULT NULL,
  `ipv4canping` tinyint(1) DEFAULT NULL,
  `ipv6canping` tinyint(1) DEFAULT NULL,
  `ipv4monitorrcbgp` tinyint(1) DEFAULT NULL,
  `ipv6monitorrcbgp` tinyint(1) DEFAULT NULL,
  `as112client` tinyint(1) DEFAULT NULL,
  `busyhost` tinyint(1) DEFAULT NULL,
  `notes` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B4B4411A73720641` (`ipv4addressid`),
  UNIQUE KEY `UNIQ_B4B4411A7787D67C` (`ipv6addressid`),
  KEY `IDX_B4B4411ABFDF15D5` (`virtualinterfaceid`),
  KEY `IDX_B4B4411AF48D6D0` (`vlanid`),
  CONSTRAINT `FK_B4B4411A73720641` FOREIGN KEY (`ipv4addressid`) REFERENCES `ipv4address` (`id`),
  CONSTRAINT `FK_B4B4411A7787D67C` FOREIGN KEY (`ipv6addressid`) REFERENCES `ipv6address` (`id`),
  CONSTRAINT `FK_B4B4411ABFDF15D5` FOREIGN KEY (`virtualinterfaceid`) REFERENCES `virtualinterface` (`id`),
  CONSTRAINT `FK_B4B4411AF48D6D0` FOREIGN KEY (`vlanid`) REFERENCES `vlan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vlaninterface`
--

LOCK TABLES `vlaninterface` WRITE;
/*!40000 ALTER TABLE `vlaninterface` DISABLE KEYS */;
INSERT INTO `vlaninterface` VALUES (1,3,NULL,6,1,1,'',0,'',0,1,NULL,'f34n93z2','',12000,1,1,0,0,0,0,0,''),(2,4,NULL,7,1,1,'',0,'',0,1,NULL,'nqr9rv5v','',12000,1,1,0,0,0,0,0,NULL),(3,6,3,8,1,1,'',1,'',0,1,NULL,'aq0hmdyq','aq0hmdyq',12000,1,1,1,0,0,0,0,NULL),(4,7,NULL,9,1,1,'',0,'',0,1,NULL,'3lvx79h9','',12000,1,1,0,0,0,0,0,NULL),(5,1,NULL,4,1,1,'',0,'',0,1,NULL,'f34n93z1','KcsHsoJzWY7VL62F',12000,1,1,0,0,0,0,0,''),(6,2,NULL,5,1,1,'',0,'',0,1,NULL,'cztmt2ap','FSQu3mr5EUSDvnWb',12000,1,1,0,0,0,0,0,''),(7,8,NULL,10,1,1,'',0,'',0,0,NULL,'f4ibf2uv','',12000,1,1,0,0,0,0,0,NULL),(8,9,NULL,11,1,1,'',0,'',0,0,NULL,'p53carkc','',12000,1,1,0,0,0,0,0,NULL),(9,10,NULL,12,1,1,'',0,'',0,0,NULL,'^63602_37963$','',12000,1,1,0,0,0,0,0,''),(10,11,NULL,13,1,1,'',0,'',0,1,NULL,'5acxbl3u','',12000,1,1,0,0,0,0,0,''),(11,12,NULL,14,1,1,'',0,'',0,0,NULL,'rsa3cwcn','',12000,1,1,0,0,0,0,0,''),(12,13,NULL,15,1,1,'',0,'',0,0,NULL,'zx1u592u','',12000,1,1,0,0,0,0,0,NULL),(13,14,NULL,16,1,1,'',0,'',0,0,NULL,'057dtyho','',12000,1,1,0,0,0,0,0,NULL),(14,16,NULL,17,1,1,'',0,'',0,0,NULL,'jx9t1yg3','',12000,1,1,0,0,0,0,0,NULL),(15,17,NULL,18,1,1,'',0,'',0,0,NULL,'5gn1tqr8','',12000,1,1,0,0,0,0,0,NULL),(16,15,NULL,19,1,1,'',0,'',0,0,NULL,'f93cewk9','',12000,1,1,0,0,0,0,0,NULL),(17,19,NULL,20,1,1,'',0,'',0,1,NULL,'8t8f7z5s','',12000,1,1,0,0,0,0,0,NULL),(18,18,NULL,21,1,1,'',0,'',0,0,NULL,'5acwn91u','',12000,1,1,0,0,0,0,0,NULL),(19,21,NULL,22,1,1,'',0,'',0,1,NULL,'x52ao3tx','',12000,1,1,0,0,0,0,0,NULL),(20,20,NULL,23,1,1,'',0,'',0,0,NULL,'ljz858vp','',12000,1,1,0,0,0,0,0,NULL);
/*!40000 ALTER TABLE `vlaninterface` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `view_cust_current_active`
--

/*!50001 DROP VIEW IF EXISTS `view_cust_current_active`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_cust_current_active` AS select `cu`.`id` AS `id`,`cu`.`irrdb` AS `irrdb`,`cu`.`company_registered_detail_id` AS `company_registered_detail_id`,`cu`.`company_billing_details_id` AS `company_billing_details_id`,`cu`.`reseller` AS `reseller`,`cu`.`name` AS `name`,`cu`.`type` AS `type`,`cu`.`shortname` AS `shortname`,`cu`.`abbreviatedName` AS `abbreviatedName`,`cu`.`autsys` AS `autsys`,`cu`.`maxprefixes` AS `maxprefixes`,`cu`.`peeringemail` AS `peeringemail`,`cu`.`nocphone` AS `nocphone`,`cu`.`noc24hphone` AS `noc24hphone`,`cu`.`nocfax` AS `nocfax`,`cu`.`nocemail` AS `nocemail`,`cu`.`nochours` AS `nochours`,`cu`.`nocwww` AS `nocwww`,`cu`.`peeringmacro` AS `peeringmacro`,`cu`.`peeringmacrov6` AS `peeringmacrov6`,`cu`.`peeringpolicy` AS `peeringpolicy`,`cu`.`corpwww` AS `corpwww`,`cu`.`datejoin` AS `datejoin`,`cu`.`dateleave` AS `dateleave`,`cu`.`status` AS `status`,`cu`.`activepeeringmatrix` AS `activepeeringmatrix`,`cu`.`peeringDb` AS `peeringDb`,`cu`.`lastupdated` AS `lastupdated`,`cu`.`lastupdatedby` AS `lastupdatedby`,`cu`.`creator` AS `creator`,`cu`.`created` AS `created`,`cu`.`MD5Support` AS `MD5Support`,`cu`.`isReseller` AS `isReseller` from `cust` `cu` where ((`cu`.`datejoin` <= curdate()) and (isnull(`cu`.`dateleave`) or (`cu`.`dateleave` < '1970-01-01') or (`cu`.`dateleave` >= curdate())) and ((`cu`.`status` = 1) or (`cu`.`status` = 2))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_switch_details_by_custid`
--

/*!50001 DROP VIEW IF EXISTS `view_switch_details_by_custid`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_switch_details_by_custid` AS select `vi`.`id` AS `id`,`vi`.`custid` AS `custid`,`vi`.`name` AS `virtualinterfacename`,`pi`.`virtualinterfaceid` AS `virtualinterfaceid`,`pi`.`status` AS `status`,`pi`.`speed` AS `speed`,`pi`.`duplex` AS `duplex`,`pi`.`monitorindex` AS `monitorindex`,`pi`.`notes` AS `notes`,`sp`.`name` AS `switchport`,`sp`.`id` AS `switchportid`,`sp`.`ifName` AS `spifname`,`sw`.`name` AS `switch`,`sw`.`id` AS `switchid`,`sw`.`vendorid` AS `vendorid`,`sw`.`snmppasswd` AS `snmppasswd`,`sw`.`infrastructure` AS `infrastructure`,`ca`.`name` AS `cabinet`,`ca`.`cololocation` AS `colocabinet`,`lo`.`name` AS `locationname`,`lo`.`shortname` AS `locationshortname` from (((((`virtualinterface` `vi` join `physicalinterface` `pi`) join `switchport` `sp`) join `switch` `sw`) join `cabinet` `ca`) join `location` `lo`) where ((`pi`.`virtualinterfaceid` = `vi`.`id`) and (`pi`.`switchportid` = `sp`.`id`) and (`sp`.`switchid` = `sw`.`id`) and (`sw`.`cabinetid` = `ca`.`id`) and (`ca`.`locationid` = `lo`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_vlaninterface_details_by_custid`
--

/*!50001 DROP VIEW IF EXISTS `view_vlaninterface_details_by_custid`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `view_vlaninterface_details_by_custid` AS select `pi`.`id` AS `id`,`vi`.`custid` AS `custid`,`pi`.`virtualinterfaceid` AS `virtualinterfaceid`,`pi`.`monitorindex` AS `monitorindex`,`vi`.`name` AS `virtualinterfacename`,`vlan`.`number` AS `vlan`,`vlan`.`name` AS `vlanname`,`vlan`.`id` AS `vlanid`,`vlan`.`rcvrfname` AS `rcvrfname`,`vli`.`id` AS `vlaninterfaceid`,`vli`.`ipv4enabled` AS `ipv4enabled`,`vli`.`ipv4hostname` AS `ipv4hostname`,`vli`.`ipv4canping` AS `ipv4canping`,`vli`.`ipv4monitorrcbgp` AS `ipv4monitorrcbgp`,`vli`.`ipv6enabled` AS `ipv6enabled`,`vli`.`ipv6hostname` AS `ipv6hostname`,`vli`.`ipv6canping` AS `ipv6canping`,`vli`.`ipv6monitorrcbgp` AS `ipv6monitorrcbgp`,`vli`.`as112client` AS `as112client`,`vli`.`mcastenabled` AS `mcastenabled`,`vli`.`ipv4bgpmd5secret` AS `ipv4bgpmd5secret`,`vli`.`ipv6bgpmd5secret` AS `ipv6bgpmd5secret`,`vli`.`rsclient` AS `rsclient`,`vli`.`irrdbfilter` AS `irrdbfilter`,`vli`.`busyhost` AS `busyhost`,`vli`.`notes` AS `notes`,`v4`.`address` AS `ipv4address`,`v6`.`address` AS `ipv6address` from ((`physicalinterface` `pi` join `virtualinterface` `vi`) join (((`vlaninterface` `vli` left join `ipv4address` `v4` on((`vli`.`ipv4addressid` = `v4`.`id`))) left join `ipv6address` `v6` on((`vli`.`ipv6addressid` = `v6`.`id`))) left join `vlan` on((`vli`.`vlanid` = `vlan`.`id`)))) where ((`pi`.`virtualinterfaceid` = `vi`.`id`) and (`vli`.`virtualinterfaceid` = `vi`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-22 17:35:16
