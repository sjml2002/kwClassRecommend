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
-- Table structure for table `classList`
--

DROP TABLE IF EXISTS `classList`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classList` (
  `number` varchar(15) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `classification` varchar(3) DEFAULT NULL,
  `professor` varchar(8) DEFAULT NULL,
  `period` varchar(5) DEFAULT NULL,
  `grades` tinyint(1) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classList`
--

LOCK TABLES `classList` WRITE;
/*!40000 ALTER TABLE `classList` DISABLE KEYS */;
/*!40000 ALTER TABLE `classList` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `majorList`
--

DROP TABLE IF EXISTS `majorList`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majorList` (
  `college` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `majorList`
--

LOCK TABLES `majorList` WRITE;
/*!40000 ALTER TABLE `majorList` DISABLE KEYS */;
INSERT INTO `majorList` VALUES ('전자정보공과대학','전자공학과'),('전자정보공과대학','전자통신공학과'),('전자정보공과대학','전자융합공학과'),('전자정보공과대학','전자재료공학과'),('전자정보공과대학','전기공학과'),('전자정보공과대학','로봇학부'),('소프트웨어융합대학','소프트웨어학부'),('소프트웨어융합대학','컴퓨터정보공학부'),('소프트웨어융합대학','정보융합학부'),('공과대학','화학공학과'),('공과대학','환경공학과'),('공과대학','건축공학과'),('공과대학','건축학과'),('자연과학대학','수학과'),('자연과학대학','화학과'),('자연과학대학','전자바이오물리학과'),('자연과학대학','정보콘텐츠학과'),('경영대학','경영학부'),('경영대학','국제통상학부'),('인문사회과학대학','국어국문학과'),('인문사회과학대학','영어산업학과'),('인문사회과학대학','산업심리학과'),('인문사회과학대학','미디어커뮤니케이션학부'),('인문사회과학대학','동북아문화산업학부'),('정책법학대학','행정학과'),('정책법학대학','법학부'),('정책법학대학','국제학부'),('정책법학대학','자산관리학과'),('자연과학대학','스포츠융합과학과');
/*!40000 ALTER TABLE `majorList` ENABLE KEYS */;
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
INSERT INTO `user_info` VALUES ('2021202054','$2y$10$E5XCK0O0bxpPyJrGrQ6hh.V9WdYZVOCQEel.8MMPzFHUELW9cGy.O','6a7b8b3351e196cb2e0483119fff6764dda93e85dc39623ae6b399968508c5f9',NULL,'컴퓨터정보공학부','수학과'),('2021202055','$2y$10$8SyvZkwGNZ6j/9Ss4AFmeOKdNyR10.DB5JqaeDa8olzhnianfLMJa','1409641e78e67bbe140266208986e9f9fd02d1818ca1ee1d6ce7e37985024efe','ddd4a8b3d36717d30fa5e1b1440289f9','컴퓨터정보공학부',''),('2022202080','$2y$10$qKxkWWA4S8a6k9Cu2ENjUO8TTfd5Uy8K4rnSwRa7aBx397Oqjqa.y','4ae51e2c818b85597af475b7fd6c6427dee321d7358e574f9955c5ec1196081d',NULL,'컴퓨터정보공학부','');
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

-- Dump completed on 2023-02-19  6:22:42
