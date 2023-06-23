

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2023 às 23:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

/*
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cardapio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--
/*
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preço` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preço`, `quantidade`, `image`) VALUES
(1, 'sorvete', '10', 2, NULL),
(2, 'pc da xuxa', '350', 1, NULL),
(3, 'pc da xuxa', '350', 1, NULL),
(8, 'dasdasdasdasE', '340.32', 1, NULL),
(11, 'Juliano', '123.123', 5, NULL),
(13, 'iop', '123.123.12', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastros`
--

CREATE TABLE `tb_cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastros`
--

INSERT INTO `tb_cadastros` (`id`, `nome`, `senha`, `email`, `numero`, `complemento`, `bairro`, `cidade`) VALUES
(1, 'Juliano', '$2y$10$AN3SzPvCduRt9TcBONLXcey8cFAT34tREykVL/bJFHm2GK8ZwOYha', 'duqwhudqw@gmail.com', 571, 'ap 03', 'centro', 'nova iguaçu'),
(2, 'Juliano', '$2y$10$ACjBTfTWJH5xITOPadIT9u5ivm7V00b75z/1L4GaQi4cDDavPdFti', 'duqwhudqw@gmail.com', 571, 'ap 03', 'centro', 'nova iguaçu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cadastros`
--
ALTER TABLE `tb_cadastros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_cadastros`
--
ALTER TABLE `tb_cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;