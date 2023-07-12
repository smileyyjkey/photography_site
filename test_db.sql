-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: test_db
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (85,'upload/1689043877.jpg'),(86,'upload/1689043883.jpg'),(87,'upload/1689043888.jpg'),(88,'upload/1689043917.jpg'),(89,'upload/1689043922.jpg'),(90,'upload/1689044013.jpg'),(91,'upload/1689044032.jpg'),(92,'upload/1689044038.jpg'),(93,'upload/1689044043.jpg'),(94,'upload/1689044393.jpg'),(95,'upload/1689044401.jpg'),(96,'upload/1689044407.jpg'),(97,'upload/1689044542.jpg'),(98,'upload/1689044549.jpg'),(99,'upload/1689044554.jpg'),(100,'upload/1689044805.jpg'),(101,'upload/1689044810.jpg'),(102,'upload/1689044815.jpg'),(103,'upload/1689045106.jpg'),(104,'upload/1689045112.jpg'),(105,'upload/1689045117.jpg'),(106,'upload/1689045278.jpg'),(107,'upload/1689045283.jpg'),(108,'upload/1689045288.jpg'),(109,'upload/1689045624.jpg'),(110,'upload/1689045631.jpg'),(111,'upload/1689045636.jpg'),(112,'upload/1689045768.jpg'),(113,'upload/1689045773.jpg'),(114,'upload/1689045778.jpg'),(115,'upload/1689046022.jpg'),(116,'upload/1689046027.jpg'),(117,'upload/1689046032.jpg'),(120,'upload/1689130477.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-12  8:42:35
