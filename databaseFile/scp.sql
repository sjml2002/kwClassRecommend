-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: scp
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

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
-- Table structure for table `projecttable`
--

DROP TABLE IF EXISTS `projecttable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projecttable` (
  `no` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `writer` varchar(21) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hit` int(10) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `img_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `category` int(2) NOT NULL,
  `one_or_company` int(2) NOT NULL,
  `age` int(4) NOT NULL,
  `region` varchar(18) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projecttable`
--

LOCK TABLES `projecttable` WRITE;
/*!40000 ALTER TABLE `projecttable` DISABLE KEYS */;
INSERT INTO `projecttable` VALUES (9,'js2002','2021-06-18 06:34:58',0,'아니 이게 그니까 왜 안돼냐고 사발','C:\\fakepath\\민성_백준프로필.jpg',1,1,1,'seoul'),(10,'js2002','2021-06-18 06:38:55',0,'이거 안되면 진짜 시발','C:\\fakepath\\준상_백준프로필.png',1,1,1,'seoul');
/*!40000 ALTER TABLE `projecttable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `id` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `pw` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `salt` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `sessionToken` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `major` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `subMajor` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES ('2021202054','$2y$10$E5XCK0O0bxpPyJrGrQ6hh.V9WdYZVOCQEel.8MMPzFHUELW9cGy.O','6a7b8b3351e196cb2e0483119fff6764dda93e85dc39623ae6b399968508c5f9',NULL,'컴퓨터정보공학부','수학과'),('2021202055','$2y$10$8SyvZkwGNZ6j/9Ss4AFmeOKdNyR10.DB5JqaeDa8olzhnianfLMJa','1409641e78e67bbe140266208986e9f9fd02d1818ca1ee1d6ce7e37985024efe','','컴퓨터정보공학부','');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-09  5:06:49
