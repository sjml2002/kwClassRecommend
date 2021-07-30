-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-30 07:32
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `gpsservice`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `location`
--

CREATE TABLE `location` (
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `age` int(2) NOT NULL,
  `gender` int(1) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `location`
--

INSERT INTO `location` (`latitude`, `longitude`, `age`, `gender`, `job`) VALUES
(37.4219, -122.084, 20, 1, 'student'),
(37.4219, -122.084, 20, 1, 'student'),
(37.422, -122.084, 20, 1, 'student'),
(37.422, -122.084, 20, 1, 'student');

-- --------------------------------------------------------

--
-- 테이블 구조 `userinfo`
--

CREATE TABLE `userinfo` (
  `id` varchar(21) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` int(1) NOT NULL,
  `job` varchar(10) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `userinfo`
--

INSERT INTO `userinfo` (`id`, `pw`, `age`, `gender`, `job`, `salt`) VALUES
('js2002', '$2y$10$8lEA/pFIgf4w5YDFiRWfueLAkeyv62UBKFLxJdoJPUuflG9ZJMP0S', 20, 1, 'student', '89414f9ef28fc378803c580bc7385a66cd02b0a7ff4890a448f3933e4cafa745');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
