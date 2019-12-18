-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 01:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `periodico`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(50) NOT NULL,
  `codigo_noticia` varchar(50) NOT NULL,
  `titulo` text CHARACTER SET utf8 NOT NULL,
  `subtitulo` longtext CHARACTER SET utf8 NOT NULL,
  `noticia` mediumtext CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `codigo_noticia`, `titulo`, `subtitulo`, `noticia`, `fecha`, `status`, `categoria`, `imagen`) VALUES
(142, '5da8a05dbda5c', '		fffffff', '		  ffffffff', '		fffffffffff', '2019-10-17', 'activa', 'Tecnologia', 'imagenes/Penguins.jpg'),
(143, '5da8a079dc505', '		gggg', '		  ggggggg', '		gggggggg', '2019-10-17', 'activa', 'Deporte', 'imagenes/Lighthouse.jpg'),
(145, '5da8a0e0a9424', '		sfsdf', '		  sadfsdf', '		sdfsadf', '2019-10-17', 'activa', 'Tecnologia', 'imagenes/Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `nivel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `id_usuario`, `nivel`) VALUES
(1, 'admin', '123', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
