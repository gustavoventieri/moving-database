-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2023 às 16:53
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autoria`
--
create database `autoria`;
-- --------------------------------------------------------
use `autoria`;
--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_autor` int(11) NOT NULL,
  `NomeAutor` varchar(100) NOT NULL,
  `Sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Cod_autor`, `NomeAutor`, `Sobrenome`, `email`, `nasc`) VALUES
(2, 'Gabrela', 'Lujan', 'GAbrielaLujan@gmail.com', '2003-05-07'),
(1, 'Gustavo', 'Ventieri', 'gustavoventieir@gmail.com', '2003-05-01'),
(3, 'Geovanne', 'Rodrigues', 'Geovannerodrigues@gmail.com', '2013-03-01'),
(4, 'carlos', 'Eduardo', 'carloseduardor@gmail.com', '2002-01-01'),
(5, 'Arthur', 'Da Silva', 'Arthursilva@gmail.com', '2001-02-01'),
(6, 'Daniel', 'Couto', 'danielcouto@gmail.com', '2003-05-01'),
(7, 'Andressa', 'martins', 'andressamartins@gmail.com', '2003-07-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_autor` int(11) NOT NULL,
  `Cod_livro` int(11) NOT NULL,
  `Datalancamento` date NOT NULL,
  `Editora` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`Cod_autor`, `Cod_livro`, `Datalancamento`, `Editora`) VALUES
(1, 1, '2006-05-03', 'Sbt'),
(2, 2, '2006-05-03', 'Sbt'),
(3, 3, '2007-05-03', 'globo'),
(4, 4, '2008-05-03', 'record'),
(5, 5, '2010-09-01', 'band'),
(6, 6, '0201-02-09', 'sbt'),
(7, 7, '2002-09-09', 'sbt'),
(8, 8, '2006-05-03', 'Sbt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_livro` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `Idioma` varchar(100) NOT NULL,
  `QtdePag` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'O mundo de sofia', 'Filosofia', '123-45-789010-0-9', 'Portugues', 520),
(2, 'O pequeno principe', 'Fabula', '123-432-719010-0-9', 'Argentina', 220),
(3, 'grande sertão veredas', 'Filosofia', '123-42-789110-0-9', 'Portugues', 540),
(4, 'o prinicpe', 'Filosofia', '123-45-789013-1-9', 'Espanhol', 900),
(5, 'A revolução dos bichos', 'Historia', '123-45-729410-0-9', 'Mandarim', 120),
(6, 'Ultimo homem', 'Ação', '123-45-789020-1-8', 'Ingles', 780),
(7, 'O exraordinario', 'Aventura', '123-09-789010-0-9', 'Arabe', 700);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
