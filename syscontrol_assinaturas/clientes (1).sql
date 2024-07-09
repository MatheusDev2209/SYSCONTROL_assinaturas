-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09/07/2024 às 18:38
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sc_assinatura`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cli` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  `servico` varchar(100) NOT NULL,
  `usuario_serv` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `plano` varchar(100) NOT NULL,
  `valorplano` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datacadastro` datetime NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nome`, `email`, `telefone`, `servico`, `usuario_serv`, `senha`, `plano`, `valorplano`, `datacadastro`) VALUES
(1, 'Joana darte', 'teste@gmail.com', '88981253173', 'IPTV', '050459649', '350045517', 'Mensal', '30,00', '2024-06-20 00:00:00'),
(2, 'Miguel Henrique', 'teste@gmail.com', '85997708547', 'IPTV', '606763134', '925253589', 'Mensal', '7,00', '2024-06-26 00:00:00'),
(3, 'Jose Cabral', 'teste@gmail.com', '88981529516', 'IPTV', '546276697', '304111925', 'Mensal', '30,00', '2024-06-20 00:00:00'),
(4, 'João Henrique', 'teste@gmail.com', '88996723053', 'IPTV', '094933801', '506708930', 'Mensal', '30,00', '2024-07-09 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
