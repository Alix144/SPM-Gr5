-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2023, 19:03:05
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `intern`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminn`
--

CREATE TABLE `adminn` (
  `sname` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sid` int(20) NOT NULL,
  `10th_marks` varchar(25) NOT NULL,
  `12th_marks` varchar(25) NOT NULL,
  `grad_marks` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `m_status` varchar(30) NOT NULL,
  `partner_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `adminn`
--

INSERT INTO `adminn` (`sname`, `mobile`, `sid`, `10th_marks`, `12th_marks`, `grad_marks`, `gender`, `m_status`, `partner_name`, `username`, `pass`) VALUES
('yusuf', '9047473874', 17, '100', '50', '90', 'male', 'Unmarried', '', 'yusuf', 'qwertyuiopedfvbnpojhg37e24f16ce915e7b6496daf5552ac311de3c5ba7ghjklcvbnm'),
('ali', '9055283726', 18, '100', '100', '100', 'male', 'Unmarried', '', 'ali', 'qwertyuiopedfvbnpojhg40bd001563085fc35165329ea1ff5c5ecbdbbeefghjklcvbnm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `coordinator`
--

CREATE TABLE `coordinator` (
  `cid` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sid` int(20) NOT NULL,
  `c_username` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(25) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `cname`, `pos`, `city`, `pass`) VALUES
('1000', 'GRFIVE', 'emredatan@gmail.com', '1000', 'Mumbai', 'qwertyuiopedfvbnpojhg40bd001563085fc35165329ea1ff5c5ecbdbbeefghjklcvbnm'),
('99', 'uskudar', 'career@cc.uskudar.edu.tr', '5532835848', '?STANBUL', 'qwertyuiopedfvbnpojhg40bd001563085fc35165329ea1ff5c5ecbdbbeefghjklcvbnm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `job`
--

CREATE TABLE `job` (
  `jid` varchar(20) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `jdesc` varchar(5000) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `jpost` varchar(20) NOT NULL,
  `sal` varchar(20) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `job`
--

INSERT INTO `job` (`jid`, `cname`, `jdesc`, `loc`, `jpost`, `sal`, `uname`, `eid`) VALUES
('1', 'Meta', 'web developer', 'istanbul', 'developer', '5000', '0,ali', '1000'),
('12', 'google', 'asdfjah;s', 'istanbul', 'goolge', '500000000', '0', '99');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student`
--

CREATE TABLE `student` (
  `sname` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sid` int(20) NOT NULL,
  `10th_marks` varchar(25) NOT NULL,
  `12th_marks` varchar(25) NOT NULL,
  `grad_marks` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `m_status` varchar(30) NOT NULL,
  `partner_name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `student`
--

INSERT INTO `student` (`sname`, `mobile`, `sid`, `10th_marks`, `12th_marks`, `grad_marks`, `gender`, `m_status`, `partner_name`, `username`, `pass`) VALUES
('yusuf', '9047473874', 17, '100', '50', '90', 'male', 'Unmarried', '', 'yusuf', 'qwertyuiopedfvbnpojhg37e24f16ce915e7b6496daf5552ac311de3c5ba7ghjklcvbnm'),
('ali', '9055283726', 18, '100', '100', '100', 'male', 'Unmarried', '', 'ali', 'qwertyuiopedfvbnpojhg40bd001563085fc35165329ea1ff5c5ecbdbbeefghjklcvbnm');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`mobile`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Tablo için indeksler `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`cid`);

--
-- Tablo için indeksler `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Tablo için indeksler `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`);

--
-- Tablo için indeksler `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`mobile`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminn`
--
ALTER TABLE `adminn`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
