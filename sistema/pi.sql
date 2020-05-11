-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Maio-2020 às 15:43
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contratars`
--

INSERT INTO `contratars` (`id`, `servico_id`, `user_id`, `estado`, `observacao`, `updated_at`, `created_at`) VALUES
(10, 27, 16, 'Cancelado', 'Sem motivo', '2020-05-11 11:25:54', '2020-04-27 18:28:12'),
(11, 26, 17, 'Pendente', 'A proposta foi enviada para o autônomo.', '2020-04-27 20:01:49', '2020-04-27 20:01:49'),
(12, 26, 16, 'Cancelado', 'Contrato cancelado pelo contratante', '2020-04-27 21:07:35', '2020-04-27 21:07:35'),
(14, 27, 16, 'Finalizado', 'O proposta foi enviada para o autônomo.', '2020-05-10 14:20:45', '2020-05-10 14:20:45'),
(15, 27, 16, 'Pendente', 'O proposta foi enviada para o autônomo.', '2020-05-10 15:15:47', '2020-05-10 15:15:47');

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

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'Rua Uzias Soareas Diniz', 'adsdad', 'dasad', 'dsaasd', 'adsasd', 16, '2020-05-10 00:00:00', '2020-05-10 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem_servicos`
--

INSERT INTO `imagem_servicos` (`id`, `servico_id`, `arquivo`, `updated_at`, `created_at`) VALUES
(6, 27, '082657202004215e9ed881bb15d.jpeg', '2020-04-21 08:26:58', '2020-04-21 08:26:58'),
(7, 26, '170146202004275ea73a2a0d287.jpeg', '2020-04-27 17:01:47', '2020-04-27 17:01:47'),
(8, 26, '170158202004275ea73a360ee22.jpeg', '2020-04-27 17:01:58', '2020-04-27 17:01:58'),
(9, 27, '190105202004275ea756211fd3b.jpeg', '2020-04-27 19:01:05', '2020-04-27 19:01:05'),
(10, 26, '151842202005105eb8458257ed8.jpeg', '2020-05-10 15:18:42', '2020-05-10 15:18:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivels`
--

INSERT INTO `nivels` (`id`, `nome`, `telas`, `updated_at`, `created_at`) VALUES
(1, 'Administrador', 'Todas', '2020-03-23 00:00:00', '2020-03-23 00:00:00'),
(2, 'Usuário comum', 'Algumas', '2020-03-23 00:00:00', '2020-03-23 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `menor_preco`, `maior_preco`, `imagem`, `tipo_servico_id`, `user_id`, `updated_at`, `created_at`) VALUES
(26, 'Carpintaria', 'Limpeza de casas', '40.00', '60.00', NULL, 3, 16, '2020-05-10 15:24:46', '2020-04-21 07:06:06'),
(27, 'Carpinteiro', 'Mexe com madeira', '412.31', '312.31', NULL, 2, 17, '2020-04-21 08:26:41', '2020-04-21 08:26:41');

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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `cpf`, `telefone`, `email`, `password`, `nivel_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'dadasda', '12345678911', '13131', 'sdad@dasda.ocm', '$2y$10$5sz61s6G1eSD.NZq3A0/hOQPBk5vlMdGHcY7ICVdKJuqZIUGMT/Qi', 1, 'wXIetYDQahsZ0wA61n27F9FfjanHpRj8WhMvyrb9Zb4ip4qAqU1wI6vUfopA', '2020-04-04 18:28:07', '2020-04-04 18:28:07'),
(16, 'Danylo Alysson Dias de  Aquino', '04744707335', '88997662468', 'danyloalyson1@gmail.com', '$2y$10$6pwDuIP55nstcByZwCZdO.Vsmm.OPPsXvmW7nIv7UlnvhXKALR7I.', 1, 'IM3z0CsHqX6o06ggimlk7zWREf0v3WZCBF7HJW9m8am5aryVgFuX3cVxDnHq', '2020-04-07 21:47:31', '2020-04-28 01:02:34'),
(17, 'Joao da Silva', '12345678912', '42342342342', 'joao@joao.com', '$2y$10$4.Y8.G9idxHhFjC50ZyT/OAZfgrSpii1K31p2hi1B1jnG0IJXCpXG', 1, 'eI3QUspHiQSKbqUliZG5LITosLwRi9TKoTkCN3vzsOHeL2j1uYtQI1mpekpF', '2020-04-20 22:50:53', '2020-04-27 23:17:08'),
(18, 'Autonomo', '32112313213', '32312312313', 'teste@teste.com', '$2y$10$lx7GouWwb1UtBZ3bUuSEJeSrGeGihd1VJliBWgcpmTsMLF8x5mswq', 2, '2MvKTnsKXfx1ddxQvIiCEflY5nfYhwFgSkCiC6eF9XAdmxljU8uzWsJ38Pr6', '2020-05-10 17:24:49', '2020-05-10 17:24:49');

--
-- Constraints for dumped tables
--

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
