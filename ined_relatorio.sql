-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2018 às 23:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ined_relatorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ined_relatorio`
--

CREATE TABLE `ined_relatorio` (
  `id_relatorio` int(11) NOT NULL,
  `nome_relatorio` varchar(25) NOT NULL,
  `tipo_relatorio` varchar(25) NOT NULL,
  `categoria_relatorio` varchar(25) NOT NULL,
  `descricao_relatorio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ined_relatorio`
--

INSERT INTO `ined_relatorio` (`id_relatorio`, `nome_relatorio`, `tipo_relatorio`, `categoria_relatorio`, `descricao_relatorio`) VALUES
(1, 'mis', 'sintetico', 'nutrição', 'descrito'),
(2, 'mis', 'sintetico', 'nutriÃ§Ã£o', 'descrito');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ined_relatorio`
--
ALTER TABLE `ined_relatorio`
  ADD PRIMARY KEY (`id_relatorio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ined_relatorio`
--
ALTER TABLE `ined_relatorio`
  MODIFY `id_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
