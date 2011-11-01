-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-11-2011 a las 00:04:23
-- Versión del servidor: 5.5.17
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `deckdesign`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about_us_items`
--

DROP TABLE IF EXISTS `about_us_items`;
CREATE TABLE IF NOT EXISTS `about_us_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(255) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_text` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambients`
--

DROP TABLE IF EXISTS `ambients`;
CREATE TABLE IF NOT EXISTS `ambients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambient_items`
--

DROP TABLE IF EXISTS `ambient_items`;
CREATE TABLE IF NOT EXISTS `ambient_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ambient_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `mask` varchar(255) NOT NULL,
  `mask_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambient_item_hotspots`
--

DROP TABLE IF EXISTS `ambient_item_hotspots`;
CREATE TABLE IF NOT EXISTS `ambient_item_hotspots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ambient_item_id` int(11) NOT NULL,
  `tl_x` float NOT NULL,
  `tl_y` float NOT NULL,
  `tr_x` float NOT NULL,
  `tr_y` float NOT NULL,
  `bl_x` float NOT NULL,
  `bl_y` float NOT NULL,
  `br_x` float NOT NULL,
  `br_y` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambient_item_hotspot_textures`
--

DROP TABLE IF EXISTS `ambient_item_hotspot_textures`;
CREATE TABLE IF NOT EXISTS `ambient_item_hotspot_textures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ambient_item_hotspot_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery_categories`
--

DROP TABLE IF EXISTS `gallery_categories`;
CREATE TABLE IF NOT EXISTS `gallery_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery_category_items`
--

DROP TABLE IF EXISTS `gallery_category_items`;
CREATE TABLE IF NOT EXISTS `gallery_category_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_category_id` int(11) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `our_projects_items`
--

DROP TABLE IF EXISTS `our_projects_items`;
CREATE TABLE IF NOT EXISTS `our_projects_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(255) NOT NULL,
  `content_text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `mail`, `created`, `modified`)
VALUES
(1, '9f3b3146321d2a1c0cb457f9c1770ccdc2081c7a', 'admin@deckdesign.cl',
'0000-00-00 00:00:00', '0000-00-00 00:00:00');

