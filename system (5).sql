-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 16, 2024 lúc 07:30 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answertext` varchar(50) NOT NULL,
  `userid` int(20) NOT NULL,
  `questiontid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id`, `answertext`, `userid`, `questiontid`) VALUES
(6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 12, 43),
(7, 'aaaaaaaaaaaaaaaaaaaaaaaa', 12, 44),
(8, 'aaaaaaaaaaaaaaaa', 11, 44),
(9, 'ssssssssssssssssssssssssssssssssssssss', 11, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `messagetext` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `messagetext`, `title`, `userid`) VALUES
(16, 'help me with it!', 'help me!', 11),
(17, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `module`
--

CREATE TABLE `module` (
  `id` int(50) NOT NULL,
  `modulename` varchar(50) NOT NULL,
  `moduletext` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `module`
--

INSERT INTO `module` (`id`, `modulename`, `moduletext`) VALUES
(2, 'Comp1841', '\"Web Programming\" is a broad field that encompasses the development of websites and web applications......'),
(5, 'Comp1752', 'Object-Oriented Programming (OOP) is a programming paradigm that uses \"objects\" – which can contain data in the form of fields (often known as attributes or properties) and code in the form of procedures (often known as methods). The main goal of OOP is to increase the reusability, scalability, and '),
(6, 'Comp1770  ', 'Professional Project Management is a course designed to equip students with the knowledge, skills, and tools necessary to effectively manage projects across various industries. The course covers the entire project management lifecycle, from initiation to closure, emphasizing best practices, methodol');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` int(50) NOT NULL,
  `questiontext` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `moduleid` int(50) NOT NULL,
  `questiondate` date NOT NULL,
  `filetoupload` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `questiontext`, `userid`, `moduleid`, `questiondate`, `filetoupload`) VALUES
(41, 'Some one can help me at php', 12, 2, '2024-08-16', '3.jpg'),
(43, 'Some one can help me at python?', 12, 5, '2024-08-16', 'question1.png'),
(44, 'It so hard, i need help!!!', 12, 5, '2024-08-16', 'question2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name_user`, `email`, `username`, `pass`, `adress`, `role`, `date_of_birth`) VALUES
(8, 'cuong', 'cuong@gmail.com', 'cuongimen', '123', 'mong cai quang ninh', 1, '2014-08-05'),
(11, 'khoi            ', 'khoimen             ', 'khoimen', '123            ', 'xuan thuy', 0, '2014-08-28'),
(12, 'duc            ', 'duc@gmail.com            ', 'duc', '123            ', 'ba dinh    ha noi', 0, '2017-08-03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `questiontid` (`questiontid`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Chỉ mục cho bảng `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`moduleid`),
  ADD KEY `moduleid` (`moduleid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `module`
--
ALTER TABLE `module`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`questiontid`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`moduleid`) REFERENCES `module` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
