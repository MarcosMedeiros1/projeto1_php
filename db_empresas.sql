-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 01:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_empresas`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `cnpj` varchar(14) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `servicos` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(150) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `instagram` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`cnpj`, `nome`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `descricao`, `servicos`, `telefone`, `email`, `site`, `facebook`, `instagram`, `twitter`, `cpf`) VALUES
('12134567895879', 'Empresa 1', '35260000', 'MG', 'Cidade 1', 'Bairro 1', 'Rua 1', '351', 'lorem ipsum', 'lorem ipsmo ameno', '23598745', 'emp1@email.com', 'www.empresa1@email.com', '', '', '', '12345678925');

-- --------------------------------------------------------

--
-- Table structure for table `estagios`
--

CREATE TABLE `estagios` (
  `id_estagio` int(11) NOT NULL,
  `cnpj_responsavel` varchar(14) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `requisitos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estagios`
--

INSERT INTO `estagios` (`id_estagio`, `cnpj_responsavel`, `nome`, `descricao`, `requisitos`) VALUES
(6, '12134567895879', 'Estágio', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `cnpj_responsavel` varchar(14) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produto`, `cnpj_responsavel`, `nome`, `descricao`) VALUES
(2, '12134567895879', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `requisicoes`
--

CREATE TABLE `requisicoes` (
  `cnpj` varchar(14) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `servicos` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requisicoes`
--

INSERT INTO `requisicoes` (`cnpj`, `nome`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `descricao`, `servicos`, `telefone`, `email`, `cpf`) VALUES
('45875896254132', 'Empresa 3', '125478965', 'MG', 'Cidade', 'Bairro', 'Rua', '142', 'Lorem impsum ameno', 'interino adapare ameno', '125478968', 'email2@email.com', '12345678925');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `email`, `senha`, `tipo`) VALUES
('12345678925', 'User 1', 'user1@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('12345698736', 'Adm 1', 'adm1@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
('12385202545', 'Instituto 1', 'inst1@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
('35748965825', 'User 2', 'user2@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `fk_cpf` (`cpf`);

--
-- Indexes for table `estagios`
--
ALTER TABLE `estagios`
  ADD PRIMARY KEY (`id_estagio`),
  ADD KEY `kf1_responsavel` (`cnpj_responsavel`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk1_responsavel` (`cnpj_responsavel`);

--
-- Indexes for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `fk_cpf1` (`cpf`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estagios`
--
ALTER TABLE `estagios`
  MODIFY `id_estagio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `fk_cpf` FOREIGN KEY (`cpf`) REFERENCES `usuarios` (`cpf`);

--
-- Constraints for table `estagios`
--
ALTER TABLE `estagios`
  ADD CONSTRAINT `kf1_responsavel` FOREIGN KEY (`cnpj_responsavel`) REFERENCES `empresas` (`cnpj`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk1_responsavel` FOREIGN KEY (`cnpj_responsavel`) REFERENCES `empresas` (`cnpj`);

--
-- Constraints for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD CONSTRAINT `fk_cpf1` FOREIGN KEY (`cpf`) REFERENCES `usuarios` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
