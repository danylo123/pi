-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Jul-2020 às 21:06
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
-- Estrutura da tabela `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contratar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `visto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contratar_id` (`contratar_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratars`
--

DROP TABLE IF EXISTS `contratars`;
CREATE TABLE IF NOT EXISTS `contratars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `observacao` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servico_id` (`servico_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_servicos`
--

DROP TABLE IF EXISTS `imagem_servicos`;
CREATE TABLE IF NOT EXISTS `imagem_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico_id` int(11) NOT NULL,
  `arquivo` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servico_id` (`servico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivels`
--

DROP TABLE IF EXISTS `nivels`;
CREATE TABLE IF NOT EXISTS `nivels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(15) NOT NULL,
  `telas` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivels`
--

INSERT INTO `nivels` (`id`, `nome`, `telas`, `updated_at`, `created_at`) VALUES
(1, 'Administrador', 'Todas', '2020-03-23 00:00:00', '2020-03-23 00:00:00'),
(2, 'Usuário comum', 'Algumas', '2020-03-23 00:00:00', '2020-03-23 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ouvidorias`
--

DROP TABLE IF EXISTS `ouvidorias`;
CREATE TABLE IF NOT EXISTS `ouvidorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assunto` varchar(100) NOT NULL,
  `observacao` varchar(250) NOT NULL,
  `resposta` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(73, 'danyloalyson1@gmail.com', '$2y$10$GwcfkSCY9a3Y3fjlARmMeuUnIRHEGSdNlMjMGJA/W2YHvG7bFp8NC', '2020-05-10 16:27:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `menor_preco` decimal(9,2) NOT NULL,
  `maior_preco` decimal(9,2) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `tipo_servico_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `servicos_ibfk_2` (`tipo_servico_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(2, 'Limpeza doméstica', '2020-03-30 17:19:07', '2020-03-16 22:18:27'),
(3, 'Carpintaria', '2020-03-16 22:18:53', '2020-03-16 22:18:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  KEY `nivel_id` (`nivel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`contratar_id`) REFERENCES `contratars` (`id`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `contratars`
--
ALTER TABLE `contratars`
  ADD CONSTRAINT `contratars_ibfk_1` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`),
  ADD CONSTRAINT `contratars_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `imagem_servicos`
--
ALTER TABLE `imagem_servicos`
  ADD CONSTRAINT `imagem_servicos_ibfk_1` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`);

--
-- Limitadores para a tabela `ouvidorias`
--
ALTER TABLE `ouvidorias`
  ADD CONSTRAINT `ouvidorias_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`tipo_servico_id`) REFERENCES `tipo_servicos` (`id`),
  ADD CONSTRAINT `servicos_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `nivels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
