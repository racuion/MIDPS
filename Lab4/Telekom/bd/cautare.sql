-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 16 Noi 2015 la 11:09
-- Versiune server: 5.5.8
-- Versiune PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `cautare`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `page_body` text,
  `page_views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `page_title` (`page_title`,`page_body`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Salvarea datelor din tabel `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_url`, `page_body`, `page_views`) VALUES
(1, 'Asistenta', 'help.html', '<p><b>Serviciul Clientela</b>, intrebari comerciale: telefonie fixa tel.: <b>2213</b>\r\n<p>2213@moldtelecom.md\r\n<p><b>Serviciul de asistenta tehnica:</b> telefonie fixa tel.: 2213\r\nmonitoring@telekom.md\r\n<p><b>Serviciul Suport Clienti Business</b>, tel.: 22133 sau 022 77 05 05\r\n<p><b>Serviciul Reclamatii:</b> reclamatii@telekom.md\r\n<p><b>Serviciul Control Fraude:</b> fraud@telekom.md\r\n \r\n<p><b>Orarul de audienta a cetatenilor:</b><br>\r\nDe luni pina vineri, intre orele 16:00-17:00.<br>\r\nIn sala de audienta la etajul 2. <br>\r\nTelefon anticamera: (373 22) 870-202\r\n<p>\r\nVicedirector general: <b>Sevcenco Dan</b> ', 0),
(3, 'Administratia', 'admin.html', 'Membrii Consiliului de administrare a S.A. TelekomMD sunt:\r\n<ul>\r\n<li>Presedinte al Consiliului - Toloaca Alexandru</li>\r\n<li>Membru - Vasilache Diana</li>\r\n<li>Membru - Sima Ion</li>\r\n<li>Membru - Advahova Irina</li>\r\n<li>Membru - Sevcenco Dan</li>\r\n</ul>\r\n', 0),
(2, 'Despre noi', 'about.html', '<b>TelekomMD</b> - Operatorul de Telecomunicatii din Republica Moldova, care reuseste sa raspunda cu succes necesitatilor de comunicare ale consumatorilor,\r\n oferindu-le o gama larga si accesibila de servicii de telecomunicatii.\r\n </p>\r\nInfiintata in 1993, TelekomMD a evoluat cu multe eforturi, dar inteligent, de la o companie traditionala de stat la o companie inovatoare si social \r\nresponsabila. Operatorul si-a demonstrat competitivitatea pe piata telecomunicatiilor, prin tranzitia de la oferirea serviciilor traditionale de telefonie \r\nfixa la servicii de Internet de banda larga, telefonie mobila 3G si televiziune digitala interactiva IPTV.\r\n <p>\r\nAni la rind, operatorul national nu doar uneste oamenii, dar prin activitatea sa contribuie la dezvoltarea economica a tarii. \r\nTelekomMD este considerat unul dintre cei mai mari contribuabili la bugetul de stat, acesta numara aproximativ 3600 de angajati.\r\n</p>\r\nInca de la inceputul activitatii sale, misiunea companiei a fost de a conecta intre ei oamenii din Republica Moldova. \r\nDe la inceput dar si pentru viitor, TelekomMD isi propune sa asigure comunicarea interpersonala, limitind astfel distanta fizica dintre oameni, \r\nconectindu-i cu intreaga lume.', 0),
(6, 'Structura organizatorica', 'admin.html', '\r\n<p>Din punct de vedere organizational Societatea pe Actiuni TelekomMD este constituita din aparatul central si filiale.</p>\r\n \r\n<p>Structura aparatului central este alcatuita din urmatoarele subdiviziuni:</p>\r\n<ol>\r\n<li><b>Departamentul Comercial</b> - asigura prestarea si vinzarea serviciilor de telecomunicatii, deservirea clientelei, elaborarea si realizarea politicii \r\ntarifare a companiei, promovarea serviciilor si produselor.</li>\r\n<br>\r\n<li><b>Departamentul Tehnic </b>- asigura functionarea fiabila, dezvoltarea si modernizarea mijloacelor de telecomunicatii si calitatea serviciilor.</li>\r\n<br>\r\n<li><b>Departamentul Finante </b>- asigura strategia unica In domeniul economiei si finantelor necesare gestiunii efective a patrimoniului, stocarii si analizei \r\nrezultatelor obtinute.</li>\r\n<br>\r\n<li><b>Departamentul Logistica </b>- asigura organizarea lucrarilor de constructie, reconstructie si reparatie capitala a obiectelor de telecomunicatii si civile, exploatarii transportului si aprovizionarii cu materiale si utilaj.</li>\r\n <br>\r\n<li><b>Departamentul Resurse Umane</b> - asigura politica de cadre, salarizarea angajatilor, protectia muncii.</li>\r\n</ol>', 0),
(4, 'Abonamente', 'abonamente.html', '<h4>Puteti selecta unul din cele 3 tipuri de abonamente cu minute incluse:</h4>\r\n<table class=''tabel'' width=500 height=210 cellspacing=0 cellpadding=10  frame=''box''>\r\n  <tr align=''center'' bgcolor=#0099CC ><td align=''center''><b>Nume abonament</td><td align=''center''><b>Abonament lunar</td><td align=''center''><b>Minute incluse</td></tr>\r\n  <tr align=''center''><td><b>Standart</td><td>24 lei</td><td>300</td></tr>\r\n  <tr align=''center''><td><b>Econom</td><td>6 lei</td><td>200</td></tr>\r\n  <tr align=''center''><td><b>Special</td><td>6 lei</td><td>700</td></tr>\r\n  </table>\r\n<br>\r\n<table class="tabel" cellspacing=0 cellpadding=10  frame=''box''>\r\n  <tr bgcolor=#0099CC><td colspan=4><b>Tarife extra-abonament, lei/minut:</td></tr>\r\n  <tr><td></td><td><b>Standart</td><td><b>Econom</td><td><b>Special</td></tr>\r\n  <tr><td><b>8:00-22:00</td><td>0,096</td><td>0,24</td><td>0,168</td></tr>\r\n  <tr><td><b>22:00-8:00</td><td>0,084</td><td>0,144</td><td>0,12</td></tr>\r\n  <tr><td colspan=4 bgcolor=#0099CC><b>Suport tehnic la solicitarea abonatului*</td></tr>\r\n  <tr><td>suport tehnic (consultare)</td><td align=''center'' colspan=3>132 lei</td></tr>\r\n  <tr><td>suport tehnic (remediere)</td><td align=''center'' colspan=3>150 lei</td></tr>\r\n  </table>\r\n  ', 0),
(5, 'Localizare', 'locatia.html', '<p><b>Adresa noastra:</b> str. Sarmizegetusa 33, Chisinau, Republica Moldova, MD 2001</p>\r\n', 0),
(7, 'Oferta lunii', 'oferta.html', '<b>Devino client TelekomMD acum si primesti:</b>\r\n<br>\r\n<ul type="square">\r\n<li>primele 3 luni de abonament gratuite;</li><br>\r\n<li>reducere 50% la apeluri internationale in primele 6 luni;</li><br>\r\n<li>convorbiri nationale gratuite seara si in weekend timp de 1 an;</li>\r\n</ul>', 0);
