-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Fev-2023 às 03:57
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int NOT NULL,
  `nome_adm` varchar(255) DEFAULT NULL,
  `email_adm` varchar(255) NOT NULL,
  `senha_adm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'Joaquim', 'Joaquim@gmail.com', '12345'),
(2, 'gil', 'gil@gmail.com', '123'),
(4, 'jon', 'jon@gmail.com', '123'),
(5, 'Henrique', 'henrique@gmail.com', 'henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int NOT NULL,
  `nome_aluno` varchar(255) DEFAULT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `senha_aluno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `senha_aluno`) VALUES
(1, 'Ramon', 'ramonYosef@gmail.com', '12345'),
(2, 'henrique', 'henrique@gmail.com', '12345'),
(3, 'Yosef', 'Yosef@gmail.com', '12345'),
(4, 'gui', 'gui@gmail.com', '123'),
(5, 'Kell', 'Kell@gmail.com', '123'),
(7, 'Henry', 'henry@gmail.com', 'henry'),
(9, 'henrique', 'henrique1@gmail.com', 'henrique'),
(10, 'Jennifer', 'jennifer@gmail.com', 'jenny');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int NOT NULL,
  `nome_curso` varchar(255) DEFAULT NULL,
  `valor_curso` varchar(255) DEFAULT NULL,
  `vagas_curso` varchar(255) DEFAULT NULL,
  `tipos_curso` varchar(255) DEFAULT NULL,
  `vagas_ocupadas` varchar(255) DEFAULT NULL,
  `id_adm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`, `valor_curso`, `vagas_curso`, `tipos_curso`, `vagas_ocupadas`, `id_adm`) VALUES
(1, 'curso_java', '10.00', '0', 'JAVA', '12', 1),
(2, 'curso_PHP', '200', '7', 'PHP', '3', 1),
(3, 'curso_daora', '350', '7', 'HTML', '3', 2),
(4, 'curso_html', '20', '1', 'C#', '1', 1),
(5, 'curso_daora_2', '10.00', '8', 'C#', '2', 4),
(6, 'curso_java_2', '200', '9', 'Java', '1', 1),
(7, 'curso_daora_3', '150', '5', 'HTML', '0', 2),
(8, 'HTML', '999', '43', 'HTML', '2', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int NOT NULL,
  `id_curso` int DEFAULT NULL,
  `id_aluno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `id_curso`, `id_aluno`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 2),
(4, 1, 2),
(5, 2, 1),
(6, 3, 1),
(7, 3, 3),
(8, 1, 1),
(9, 1, 4),
(10, 2, 4),
(11, 3, 4),
(12, 2, 5),
(13, 4, 4),
(14, 6, 4),
(15, 5, 4),
(16, 8, 7),
(17, 5, 7),
(18, 8, 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`),
  ADD UNIQUE KEY `email_adm` (`email_adm`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email_aluno` (`email_aluno`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_adm` (`id_adm`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `fk_curso` (`id_curso`),
  ADD KEY `fk_aluno` (`id_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_adm` FOREIGN KEY (`id_adm`) REFERENCES `adm` (`id_adm`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
