-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 11 İyun, 2021 saat 00:30
-- Server versiyası: 10.4.11-MariaDB
-- PHP Versiyası: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `sifaris_qebulu`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `sayt_title` varchar(300) NOT NULL,
  `sayt_desc` varchar(300) NOT NULL,
  `sayt_keyw` varchar(300) NOT NULL,
  `sayt_author` varchar(150) NOT NULL,
  `sayt_favicon` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `sayt_title`, `sayt_desc`, `sayt_keyw`, `sayt_author`, `sayt_favicon`) VALUES
(1, 'Sifariş Qəbulu Scripti..', 'Script Sifariş qəbulu,Sifarişlərə nəzarət və s. kimi işlərə nəzarət üçün köməklik edir.', 'Sifariş qəbulu,Sifarişlərə nəzarət,Sifariş çatdırma...', 'Yalçın Gülməmmədov', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `istifadeci`
--

CREATE TABLE `istifadeci` (
  `istifadeci_id` int(11) NOT NULL,
  `istifadeci_ad` varchar(300) NOT NULL,
  `istifadeci_mail` varchar(300) NOT NULL,
  `istifadeci_parol` varchar(300) NOT NULL,
  `istifadeci_tarix` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `istifadeci`
--

INSERT INTO `istifadeci` (`istifadeci_id`, `istifadeci_ad`, `istifadeci_mail`, `istifadeci_parol`, `istifadeci_tarix`) VALUES
(1, 'Yalcin', 'yalcin.09700@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-04 14:57:18'),
(2, 'Elcin', 'elcin_695@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-05 21:30:01'),
(4, 'Eli', 'eli_007@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-05 22:49:59'),
(6, 'Orxan', 'orxan_007@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-05 22:55:26'),
(7, 'Qara', 'qara_007@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-05 23:00:54');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `proyekt`
--

CREATE TABLE `proyekt` (
  `proyekt_id` int(11) NOT NULL,
  `proyekt_baslig` varchar(300) NOT NULL,
  `proyekt_bitis_tarix` date NOT NULL,
  `proyekt_vaxt` varchar(300) NOT NULL,
  `proyekt_veziyyet` varchar(300) NOT NULL,
  `proyekt_file` varchar(300) NOT NULL,
  `proyekt_detay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `proyekt`
--

INSERT INTO `proyekt` (`proyekt_id`, `proyekt_baslig`, `proyekt_bitis_tarix`, `proyekt_vaxt`, `proyekt_veziyyet`, `proyekt_file`, `proyekt_detay`) VALUES
(1, 'E-Commerce', '2021-10-07', 'Normal', 'Bitdi', 'ab.jpg', 'Gelen ay bitmeli olan blog proyekti.'),
(2, 'Online odeeme', '2021-11-27', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(3, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Bitdi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(4, 'Blog script', '2021-10-07', 'Tecili', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti'),
(5, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(6, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(7, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(8, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(10, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(12, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(13, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(14, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(15, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(16, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(17, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(18, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(19, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(20, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(21, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(22, 'Blog script', '2021-10-07', 'Tecili deyil', 'Davam Eliyir', '', 'Gelen ay bitmeli olan blog proyekti.'),
(23, 'Sifaris Qebulu scripti', '2021-12-06', 'Tecili', 'Yeni Basladi', '', '1 Həftəyə təhvil vermək lazımdır proyekti.'),
(25, 'Online odeme', '2021-07-12', 'Tecili', 'Yeni Basladi', '', 'Her sey qaydasindadi'),
(26, 'E-Commerce', '3033-03-03', 'Normal', 'Davam Eliyir', '', 'Salam'),
(27, 'Sifaris Qebulu scripti', '2021-06-05', 'Tecili deyil', 'Bitdi', '', 'Tebrikler'),
(28, 'E-Commerce', '2022-02-03', 'Tecili deyil', 'Bitdi', '', 'sada'),
(29, 'E-Commerce', '2021-06-16', 'Tecili deyil', 'Bitdi', '359.jpg', 'sdweew'),
(30, 'Sifaris Qebulu scripti', '2021-06-24', 'Tecili deyil', 'Bitdi', '3659.jpg', 'ghfhf'),
(31, 'CRM', '2021-10-21', 'Tecili deyil', 'Davam Eliyir', 'ac.jpg', 'CRM'),
(32, 'E-Commerce', '2021-06-24', 'Tecili', 'Davam Eliyir', '', 'saew'),
(33, 'Blog script', '2021-06-22', 'Tecili deyil', 'Bitdi', '', 'aleykum'),
(34, 'Online odeme', '2021-06-23', 'Tecili', 'Davam Eliyir', '', 'sdsd');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `sifarisler`
--

CREATE TABLE `sifarisler` (
  `sif_id` int(11) NOT NULL,
  `musderi_ad` varchar(300) NOT NULL,
  `musderi_mail` varchar(300) NOT NULL,
  `musderi_tel` bigint(20) NOT NULL,
  `sif_baslig` varchar(300) NOT NULL,
  `sif_teslim_zamani` date NOT NULL,
  `sif_tecililik` varchar(100) NOT NULL,
  `sif_veziyyet` varchar(100) NOT NULL,
  `sif_detay` text NOT NULL,
  `sif_qiymet` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `sifarisler`
--

INSERT INTO `sifarisler` (`sif_id`, `musderi_ad`, `musderi_mail`, `musderi_tel`, `sif_baslig`, `sif_teslim_zamani`, `sif_tecililik`, `sif_veziyyet`, `sif_detay`, `sif_qiymet`) VALUES
(1, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Tecili', 'Bitdi', 'Blog Sayti olacaq', 900),
(2, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Normal', 'Davam Eliyir', 'Blog Sayti olacaq', 2000),
(3, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2022-02-02', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(4, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Tecili', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(5, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(6, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Tecili', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(7, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(8, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(9, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(13, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(14, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(15, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(16, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(17, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(18, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Tecili deyil', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(19, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(20, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(21, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Tecili', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(22, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(23, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Tecili deyil', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(24, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(25, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Tecili', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(26, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(27, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(28, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(29, 'Yalcin Gulmemmedov', 'yalcin.09700@gmail.xom', 703107166, 'WebSayt', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(30, 'Elcin Gulmemmedov', 'yalcin.09700@gmail.com', 703107166, 'Content', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(31, 'Orxan', 'orxan.09700@gmail.xom', 703107166, 'E-Commerce', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800),
(32, 'Ruslan ', 'ruslan.09700@gmail.com', 703107166, 'CRM', '2021-08-06', 'Normal', 'Yeni Basladi', 'Blog Sayti olacaq', 800);

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `istifadeci`
--
ALTER TABLE `istifadeci`
  ADD PRIMARY KEY (`istifadeci_id`);

--
-- Cədvəl üçün indekslər `proyekt`
--
ALTER TABLE `proyekt`
  ADD PRIMARY KEY (`proyekt_id`);

--
-- Cədvəl üçün indekslər `sifarisler`
--
ALTER TABLE `sifarisler`
  ADD PRIMARY KEY (`sif_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `istifadeci`
--
ALTER TABLE `istifadeci`
  MODIFY `istifadeci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `proyekt`
--
ALTER TABLE `proyekt`
  MODIFY `proyekt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Cədvəl üçün AUTO_INCREMENT `sifarisler`
--
ALTER TABLE `sifarisler`
  MODIFY `sif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
