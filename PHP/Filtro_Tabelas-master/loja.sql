-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/05/2019 às 23:02
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cliente`
--

CREATE TABLE `Cliente` (
  `ID` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `cep` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Cliente`
--

INSERT INTO `Cliente` (`ID`, `nome`, `email`, `telefone`, `cep`) VALUES
(1, 'Joao', 'JoaoPedro@gmail.com', '2122458247', '22240080'),
(2, 'Fernanda Ferreira', 'Feer34@gmail.com', '2124157891', '22230904'),
(3, 'Kleber', 'kleberrodriguez@gmail.com', '2122365623', ''),
(4, 'Adalton', 'adaltonfer@gmail.com', '2122457716', '22230100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(10) NOT NULL,
  `compra` varchar(500) NOT NULL,
  `valor` float(8,2) NOT NULL,
  `entrega` tinyint(1) NOT NULL,
  `ID_cliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `compra`, `valor`, `entrega`, `ID_cliente`) VALUES
(1, 'Pe de cabra', 40.00, 1, 2),
(2, 'brinquedo moto suzuki ', 10.00, 0, 3),
(3, 'bone', 99.99, 0, 1),
(4, 'skate ', 99.99, 1, 4),
(5, 'bone', 99.99, 0, 1),
(6, 'skate ', 99.99, 1, 3),
(7, 'Pe de cabra', 40.00, 1, 1),
(8, 'bone', 99.99, 0, 3),
(9, 'brinquedo moto suzuki ', 10.00, 1, 1),
(10, 'PC Gamer', 10000.99, 0, 4),
(11, 'Casaco BRS', 99.99, 0, 4),
(12, 'PC Gamer', 10000.99, 0, 4),
(13, 'Casaco BRS', 99.99, 0, 4),
(14, 'Casaco BRS', 99.99, 1, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
