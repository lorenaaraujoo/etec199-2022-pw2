-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2022 às 00:20
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdescola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `codAluno` int(11) NOT NULL,
  `nomeAluno` varchar(120) NOT NULL,
  `generoAluno` varchar(1) NOT NULL,
  `cpfAluno` varchar(15) NOT NULL,
  `codTurma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbaluno`
--

INSERT INTO `tbaluno` (`codAluno`, `nomeAluno`, `generoAluno`, `cpfAluno`, `codTurma`) VALUES
(1, 'Gabriel Goes', 'M', '458.714.088-00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbturma`
--

CREATE TABLE `tbturma` (
  `codTurma` int(11) NOT NULL,
  `nomeTurma` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbturma`
--

INSERT INTO `tbturma` (`codTurma`, `nomeTurma`) VALUES
(1, 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`codAluno`),
  ADD KEY `fk_codTurma` (`codTurma`);

--
-- Índices para tabela `tbturma`
--
ALTER TABLE `tbturma`
  ADD PRIMARY KEY (`codTurma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `codAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbturma`
--
ALTER TABLE `tbturma`
  MODIFY `codTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD CONSTRAINT `tbaluno_ibfk_1` FOREIGN KEY (`codTurma`) REFERENCES `tbturma` (`codTurma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
