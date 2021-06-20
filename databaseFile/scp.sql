-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-06-18 22:35
-- 서버 버전: 10.4.17-MariaDB
-- PHP 버전: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `scp`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `projecttable`
--

CREATE TABLE `projecttable` (
  `no` int(11) UNSIGNED NOT NULL,
  `writer` varchar(21) CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `hit` int(10) NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `img_name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `category` int(2) NOT NULL,
  `one_or_company` int(2) NOT NULL,
  `age` int(4) NOT NULL,
  `region` varchar(18) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `projecttable`
--

INSERT INTO `projecttable` (`no`, `writer`, `date`, `hit`, `content`, `img_name`, `category`, `one_or_company`, `age`, `region`) VALUES
(9, 'js2002', '2021-06-18 06:34:58', 0, '아니 이게 그니까 왜 안돼냐고 사발', 'C:\\fakepath\\민성_백준프로필.jpg', 1, 1, 1, 'seoul'),
(10, 'js2002', '2021-06-18 06:38:55', 0, '이거 안되면 진짜 시발', 'C:\\fakepath\\준상_백준프로필.png', 1, 1, 1, 'seoul');

-- --------------------------------------------------------

--
-- 테이블 구조 `user_info`
--

CREATE TABLE `user_info` (
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `sessionToken` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `user_info`
--

INSERT INTO `user_info` (`id`, `pw`, `salt`, `sessionToken`) VALUES
('js2002', '$2y$10$c5XwSZ3vviI4LyQqkAUfmuV8LfqL5b10UVLUQaZaS8RHFL/E/bVcC', '63b5abb0540afc50487d641b60bcc06f7a63f4facb0546ce043649fe5fa39216', '108a61181bc82080267d8236f7339d87');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `projecttable`
--
ALTER TABLE `projecttable`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `projecttable`
--
ALTER TABLE `projecttable`
  MODIFY `no` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
