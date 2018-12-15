-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Ara 2018, 18:58:03
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphanedb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_giris`
--

CREATE TABLE `admin_giris` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baskanliklar`
--

CREATE TABLE `baskanliklar` (
  `daire_baskanligi_id` int(11) NOT NULL,
  `daire_baskanligi_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `daire_baskanligi`
--

CREATE TABLE `daire_baskanligi` (
  `daire_baskanligi_id` int(10) NOT NULL,
  `daire_baskanligi_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islemler_2017`
--

CREATE TABLE `islemler_2017` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tarihi` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_personel`
--

CREATE TABLE `kitap_personel` (
  `kp_id` int(11) NOT NULL,
  `kitap_id` int(11) NOT NULL,
  `personel_id` int(11) NOT NULL,
  `max_tes_sure` varchar(30) NOT NULL,
  `verilen_tarih` date NOT NULL,
  `alinan_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kitap_personel`
--

INSERT INTO `kitap_personel` (`kp_id`, `kitap_id`, `personel_id`, `max_tes_sure`, `verilen_tarih`, `alinan_tarih`) VALUES
(2, 1, 3, '15', '2018-11-01', '2018-12-14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_turu`
--

CREATE TABLE `kitap_turu` (
  `tur_id` int(11) NOT NULL,
  `tur_kitap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kitap_turu`
--

INSERT INTO `kitap_turu` (`tur_id`, `tur_kitap`) VALUES
(1, 'roman'),
(2, 'biyohrafi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `kullanici_soyad` varchar(50) NOT NULL,
  `ilgili_birim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_ad`, `kullanici_soyad`, `ilgili_birim`, `email`, `tel`) VALUES
(1, 'mmetin', 'metin', 'bilgi islem', 'masdasd@sdf', 213123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_kayit`
--

CREATE TABLE `personel_kayit` (
  `id` int(11) NOT NULL,
  `ilgili_birim` varchar(50) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `dahili_tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefonu` varchar(11) NOT NULL,
  `durum` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `personel_kayit`
--

INSERT INTO `personel_kayit` (`id`, `ilgili_birim`, `adi`, `soyadi`, `dahili_tel`, `email`, `telefonu`, `durum`) VALUES
(3, 'bilgi iÅŸlem', 'hasa', 'hÃ¼seyin', '112', 'hsnhsn@gmail.com', '052334454', 'Aktif'),
(4, 'adsf', 'dsf', 'dsf', 'dsf', 'adf', 'df', 'asd'),
(5, 'adf', 'sdfv', 'sdv', 'scdf', 'sdfv', 'ssdf', 'sdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sube_mudurlugu`
--

CREATE TABLE `sube_mudurlugu` (
  `sube_mudurlugu_id` int(10) NOT NULL,
  `daire_baskanligi_id` int(10) NOT NULL,
  `sube_mudurlugu_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_admin_kayit`
--

CREATE TABLE `tbl_admin_kayit` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_admin_kayit`
--

INSERT INTO `tbl_admin_kayit` (`id`, `ad`, `soyad`, `username`, `password`, `email`, `tel`) VALUES
(1, 'bayram', 'dÃ¼z', 'bayram', '123456', 'baysel_86@hotmail.com', '5541126867'),
(2, 'mmetin', 'mmetin', 'mmetin', '123', 'mmm@gasd.c', '123245'),
(3, 'samet ', 'Ã§elebi', 'clbsmt@gmail.com', '123', '123', '3245345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kayit`
--

CREATE TABLE `tbl_kayit` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `sifre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kitap`
--

CREATE TABLE `tbl_kitap` (
  `id` int(11) NOT NULL,
  `kitap_image` varchar(500) NOT NULL,
  `kitap_ad` varchar(50) NOT NULL,
  `yazar_ad` varchar(50) NOT NULL,
  `kitap_sayisi` int(11) NOT NULL,
  `turu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tbl_kitap`
--

INSERT INTO `tbl_kitap` (`id`, `kitap_image`, `kitap_ad`, `yazar_ad`, `kitap_sayisi`, `turu`) VALUES
(1, 'books_image/49b950d7f87c479190a9b3874a6beefaWhatsApp Image 2017-11-22 at 9.49.39 PM (1).jpeg', 'KÃ¼Ã§Ã¼k Prens', 'Cemal SÃ¼reya', 8, ''),
(2, 'books_image/b3e6aa6687a2d1b16ca26664d23119202016 vize.pdf', 'SimyacÄ±', 'Ã–zdemir Ä°nce', 1, ''),
(3, 'books_image/163f8c65b63e5ddbafe43e480f72a614WhatsApp Image 2017-11-22 at 9.49.39 PM (5).jpeg', 'asd', 'dsaf', 0, ''),
(4, 'books_image/dd63e92241b3ea0f1a8e26b81c3ede20WhatsApp Image 2017-11-22 at 9.49.39 PM (5).jpeg', 'hayata dÃ¶n', 'bugdayciaglu', 5, 'roman'),
(5, 'books_image/52efb78d97bf0e63b9e44fc5badbd0c41c43a604e3ebb697e2e9a0ef763010eeileri.png', 'leyla ile mecnun', 'muhammed akif danis', 10, 'biyohrafi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kullanici`
--

CREATE TABLE `tbl_kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(30) NOT NULL,
  `kullanici_sifre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `zaman`
--

CREATE TABLE `zaman` (
  `duration` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_giris`
--
ALTER TABLE `admin_giris`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `baskanliklar`
--
ALTER TABLE `baskanliklar`
  ADD PRIMARY KEY (`daire_baskanligi_id`);

--
-- Tablo için indeksler `daire_baskanligi`
--
ALTER TABLE `daire_baskanligi`
  ADD PRIMARY KEY (`daire_baskanligi_id`);

--
-- Tablo için indeksler `kitap_personel`
--
ALTER TABLE `kitap_personel`
  ADD PRIMARY KEY (`kp_id`);

--
-- Tablo için indeksler `kitap_turu`
--
ALTER TABLE `kitap_turu`
  ADD PRIMARY KEY (`tur_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `personel_kayit`
--
ALTER TABLE `personel_kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sube_mudurlugu`
--
ALTER TABLE `sube_mudurlugu`
  ADD PRIMARY KEY (`sube_mudurlugu_id`);

--
-- Tablo için indeksler `tbl_admin_kayit`
--
ALTER TABLE `tbl_admin_kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kayit`
--
ALTER TABLE `tbl_kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kitap`
--
ALTER TABLE `tbl_kitap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_giris`
--
ALTER TABLE `admin_giris`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `baskanliklar`
--
ALTER TABLE `baskanliklar`
  MODIFY `daire_baskanligi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `daire_baskanligi`
--
ALTER TABLE `daire_baskanligi`
  MODIFY `daire_baskanligi_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kitap_personel`
--
ALTER TABLE `kitap_personel`
  MODIFY `kp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kitap_turu`
--
ALTER TABLE `kitap_turu`
  MODIFY `tur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `personel_kayit`
--
ALTER TABLE `personel_kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sube_mudurlugu`
--
ALTER TABLE `sube_mudurlugu`
  MODIFY `sube_mudurlugu_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_admin_kayit`
--
ALTER TABLE `tbl_admin_kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kayit`
--
ALTER TABLE `tbl_kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kitap`
--
ALTER TABLE `tbl_kitap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
