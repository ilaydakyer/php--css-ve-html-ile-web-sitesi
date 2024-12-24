-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2024, 16:12:06
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitaplar`
--

CREATE TABLE `kitaplar` (
  `id` int(11) NOT NULL,
  `kitap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kitaplar`
--

INSERT INTO `kitaplar` (`id`, `kitap`) VALUES
(4, 'kitap1.jpg'),
(5, 'kitap2.jpg'),
(6, 'kitap3.jpeg'),
(7, 'kitap4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sairler`
--

CREATE TABLE `sairler` (
  `id` int(11) NOT NULL,
  `resim` varchar(100) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `yazi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sairler`
--

INSERT INTO `sairler` (`id`, `resim`, `baslik`, `yazi`) VALUES
(2, 'Ümit_Yaşar.png', 'Ümit Yaşar Oğuzcan', 'Lorem ipsum dolor sit ameaaaaaaaaaaaaaat consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?'),
(7, 'Özdemir_Asaf.jpeg', 'Özdemir Asaf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?'),
(8, 'Turgut_Uyar.jpg', 'Turgut Uyar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?'),
(11, 'Attila_İlhan.jpg', 'dsjsfklsajfsadf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?'),
(12, 'Nazim_Hikmet.jpg', 'dsjsfklsajfsadf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?'),
(13, 'Turgut_Uyar.jpg', 'dsjsfklsajfsadf', 'dejwelkejqlejqwkelwel'),
(14, 'Turgut_Uyar.jpg', '456456', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perspiciatis labore, corporis possimus quis officia laborum eius doloribus quibusdam neque placeat ipsam debitis ullam delectus. Blanditiis assumenda culpa minima fugit?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt eos magnam modi veritatis quas at amet nostrum sapiente culpa ratione incidunt, debitis aliquid ex eius quidem rerum obcaecati dolorem odio?');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kitaplar`
--
ALTER TABLE `kitaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sairler`
--
ALTER TABLE `sairler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kitaplar`
--
ALTER TABLE `kitaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `sairler`
--
ALTER TABLE `sairler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
