-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 17:01
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `ALUNO_ID` int(11) NOT NULL,
  `N1` double DEFAULT NULL,
  `N2` double DEFAULT NULL,
  `MEDIA` double NOT NULL,
  `PESSOA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`ALUNO_ID`, `N1`, `N2`, `MEDIA`, `PESSOA_ID`) VALUES
(1, 8.5, 9.3, 8.9, 1),
(2, 5.5, 4.3, 4.9, 2),
(3, 7, 6.8, 6.9, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_turmas`
--

CREATE TABLE `alunos_turmas` (
  `ALUNO_ID` int(11) NOT NULL,
  `TURMA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `DISC_ID` int(11) NOT NULL,
  `DISC_NOME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `PESSOA_ID` int(12) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`PESSOA_ID`, `NOME`, `EMAIL`, `SENHA`) VALUES
(1, 'Augusto', 'augusto@aluno.br', 'AUG20RA'),
(2, 'Carlos', 'carlos@aluno.br', 'CAR20RA'),
(3, 'Gustavo', 'gustavo@aluno.br', 'GUS20RA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `PROFESSOR_ID` int(11) NOT NULL,
  `PESSOA_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `TURMA_ID` int(11) NOT NULL,
  `PROFESSOR_ID` int(11) DEFAULT NULL,
  `DISC_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ALUNO_ID`),
  ADD KEY `fk_PESSOA_ID` (`PESSOA_ID`);

--
-- Índices para tabela `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD PRIMARY KEY (`TURMA_ID`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`DISC_ID`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`PESSOA_ID`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`PROFESSOR_ID`),
  ADD KEY `fk_PESSOA_ID_PF` (`PESSOA_ID`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`TURMA_ID`),
  ADD KEY `fk_PROFESSOR_ID` (`PROFESSOR_ID`),
  ADD KEY `fk_DISC_ID` (`DISC_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `ALUNO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `DISC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `PESSOA_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `PROFESSOR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `TURMA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_PESSOA_ID` FOREIGN KEY (`PESSOA_ID`) REFERENCES `pessoas` (`PESSOA_ID`);

--
-- Limitadores para a tabela `alunos_turmas`
--
ALTER TABLE `alunos_turmas`
  ADD CONSTRAINT `fk_ALUNO_ID` FOREIGN KEY (`ALUNO_ID`) REFERENCES `alunos` (`ALUNO_ID`),
  ADD CONSTRAINT `fk_TURMA_ID` FOREIGN KEY (`TURMA_ID`) REFERENCES `turmas` (`TURMA_ID`);

--
-- Limitadores para a tabela `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `fk_PESSOA_ID_PF` FOREIGN KEY (`PESSOA_ID`) REFERENCES `pessoas` (`PESSOA_ID`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `fk_DISC_ID` FOREIGN KEY (`DISC_ID`) REFERENCES `disciplinas` (`DISC_ID`),
  ADD CONSTRAINT `fk_PROFESSOR_ID` FOREIGN KEY (`PROFESSOR_ID`) REFERENCES `professores` (`PROFESSOR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
