-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 14 Noi 2015 la 22:27
-- Versiune server: 5.5.8
-- Versiune PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `telekom`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `abonamente`
--

CREATE TABLE IF NOT EXISTS `abonamente` (
  `id_abon` int(1) NOT NULL,
  `denum_abon` char(20) NOT NULL,
  `pachet` int(4) NOT NULL COMMENT 'numarul de minute lunare',
  `tarif_zi` float NOT NULL COMMENT 'tarif extra-abonament (zi)',
  `tarif_noapte` float NOT NULL COMMENT 'tarif extra-abonament (noapte)',
  `pret` int(3) NOT NULL COMMENT 'abonamentul lunar',
  PRIMARY KEY (`id_abon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `abonamente`
--

INSERT INTO `abonamente` (`id_abon`, `denum_abon`, `pachet`, `tarif_zi`, `tarif_noapte`, `pret`) VALUES
(1, 'Standart', 300, 0.096, 0.084, 24),
(2, 'Econom', 200, 0.24, 0.144, 6),
(3, 'Special', 700, 0.168, 0.12, 6);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `beneficiar`
--

CREATE TABLE IF NOT EXISTS `beneficiar` (
  `denumire` char(30) NOT NULL,
  `cod_ben` bigint(11) NOT NULL,
  `cod_fisc` bigint(13) NOT NULL,
  `adresa` varchar(300) NOT NULL,
  PRIMARY KEY (`cod_ben`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `beneficiar`
--

INSERT INTO `beneficiar` (`denumire`, `cod_ben`, `cod_fisc`, `adresa`) VALUES
('S.A. TelekomMD', 20040230384, 3064764769580, 'or. Chisinau, str. Sarmizegetusa 33, MD-2001');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `clienti`
--

CREATE TABLE IF NOT EXISTS `clienti` (
  `cod_pers` bigint(13) NOT NULL,
  `nume` char(30) NOT NULL,
  `prenume` char(30) NOT NULL,
  `adresa_cl` varchar(300) NOT NULL,
  PRIMARY KEY (`cod_pers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`cod_pers`, `nume`, `prenume`, `adresa_cl`) VALUES
(2804199817401, 'Cherman', 'Alexei', 'or. Chisinau, bd-ul Cuza-Voda 3, bl.1, ap.41'),
(6012119940201, 'Botezat', 'Mihail', 'or. Chisinau, str. Trandafirilor 5, bl.4, ap.27');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `contracte`
--

CREATE TABLE IF NOT EXISTS `contracte` (
  `id_contr` bigint(11) NOT NULL,
  `cod_ben` bigint(11) NOT NULL,
  `cod_pers` bigint(13) NOT NULL,
  `id_abon` int(1) NOT NULL,
  `durata` int(2) NOT NULL COMMENT 'durata contractului in ani',
  `telefon` int(9) NOT NULL,
  PRIMARY KEY (`id_contr`),
  UNIQUE KEY `telefon` (`telefon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `contracte`
--

INSERT INTO `contracte` (`id_contr`, `cod_ben`, `cod_pers`, `id_abon`, `durata`, `telefon`) VALUES
(1111222233, 20040230384, 6012119940201, 1, 5, 815377),
(2222333344, 20040230384, 2804199817401, 3, 7, 916211);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `facturi`
--

CREATE TABLE IF NOT EXISTS `facturi` (
  `id_contr` bigint(11) NOT NULL,
  `data_in` date NOT NULL,
  `data_fin` date NOT NULL,
  `consum_abon` int(5) NOT NULL,
  `extra_zi` int(5) NOT NULL,
  `extra_np` int(5) NOT NULL,
  `id_fact` bigint(7) NOT NULL,
  PRIMARY KEY (`id_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `facturi`
--

INSERT INTO `facturi` (`id_contr`, `data_in`, `data_fin`, `consum_abon`, `extra_zi`, `extra_np`, `id_fact`) VALUES
(1111222233, '2015-10-14', '2015-11-14', 187, 0, 0, 1000000),
(2222333344, '2015-10-11', '2015-11-11', 700, 23, 45, 1000001);
