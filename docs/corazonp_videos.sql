-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-07-2015 a las 13:28:08
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `corazonp_videos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dni`
--

CREATE TABLE IF NOT EXISTS `dni` (
  `dni` char(8) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `dni`
--

INSERT INTO `dni` (`dni`) VALUES
('80423781'),
('26385378'),
('20727418'),
('33949325'),
('01558686'),
('15378465'),
('04201996'),
('77231073'),
('19807430'),
('09780688'),
('75231039'),
('05520338'),
('77505112'),
('01702958'),
('31945197'),
('30810475'),
('85267218'),
('54381014'),
('28940164'),
('51257630'),
('24885596'),
('20049684'),
('63426113'),
('04030504'),
('87467098'),
('21523841'),
('28558262'),
('30488617'),
('77379082'),
('50282353'),
('75618133'),
('28693849'),
('23646618'),
('11595612'),
('04504343'),
('79349666'),
('73823036'),
('80587066'),
('01951301'),
('75742339'),
('11996654'),
('33132676'),
('24728420'),
('43778586'),
('31470885'),
('82125376'),
('58350313'),
('16021270'),
('81592332'),
('16362801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` char(8) COLLATE utf8_spanish2_ci NOT NULL,
  `archivo` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `extension` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
