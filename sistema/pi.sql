-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Mar-2020 às 22:21
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `tipo_servico_id` int(11) NOT NULL,
  `rua` varchar(25) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(10) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `tipo` (`tipo_servico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `tipo_servico_id`, `rua`, `numero`, `bairro`, `cidade`, `id_usuario`, `updated_at`, `created_at`) VALUES
(12, 'Carpiteiro', 'Mexe com madeira', 2, 'Rua da Paia', '123', 'Bairro', 'Pereiro/CE', 1, '2020-03-17 14:29:53', '2020-03-17 11:36:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servicos`
--

DROP TABLE IF EXISTS `tipo_servicos`;
CREATE TABLE IF NOT EXISTS `tipo_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_servicos`
--

INSERT INTO `tipo_servicos` (`id`, `nome`, `updated_at`, `created_at`) VALUES
(2, 'Limpeza doméstica', '2020-03-16 22:18:27', '2020-03-16 22:18:27'),
(3, 'Carpintaria', '2020-03-16 22:18:53', '2020-03-16 22:18:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `rua` varchar(25) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `telefone`, `senha`, `rua`, `numero`, `bairro`, `updated_at`, `created_at`) VALUES
(1, 'Danylo Aquino', '04744707335', 'danyloaquino@grupobrisanet.com.br', '88997662461', 'danylo', 'Avenida Nogueira Acioly', '1565', 'Centro', '2020-03-17 11:25:42', '2020-03-10 14:55:56'),
(17, 'Silvester Stalone', '12312312312', 'teste', '332333333', '12345', 'qweqweqweqweqweqweqe', 'qweqe', 'qweqweqweqwe', '2020-03-13 10:52:48', '2020-03-12 17:06:02');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`tipo_servico_id`) REFERENCES `tipo_servicos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
