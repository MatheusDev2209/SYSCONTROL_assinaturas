-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/07/2024 às 18:32
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
  `valorplano` varchar(100) NOT NULL,
  `datacadastro` date NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nome`, `sobrenome`, `email`, `senha`, `usuario`) VALUES
(4, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(3, 'teste', 'tesste', 'teste@gmail.com', 'teste', 'teste'),
(5, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(6, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(7, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(8, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(9, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(10, 'teste', 'teste', 'teste@gmail.com', 'teste', 'teste'),
(11, 'aaa', 'aaaa', 'aaa@gmail.com', 'asd', 'asdd'),
(12, 'aaaaa', 'aaaa', 'aaa@gmail.com', 'aaaa', 'aaa'),
(13, 'aaaaa', 'aaaa', 'aaa@gmail.com', 'aaaa', 'aaa'),
(14, '', '', 'asdadsa@gmail.com', 'asdasd', 'asdasd'),
(15, 'wfdew', 'wefw', 'weqr@email.com', 'tyuj', 'fghf'),
(16, 'Matheus', 'Henrique', 'amhenrique157@gmail.com', '@Srvsa2022', 'matheus'),
(17, 'asdas', 'asdasdsada', 'afasfdas@email.com', '1234', 'asdas'),
(18, 'Antonio', 'Helio', 'ahssilva157@gmail.com', '@Srvsa2022', '@Srvsa2022'),
(19, 'Antonio ', 'Segundo', 'ahsssaddadfilva157@gmail.com', '@Srvsa2022', '@helio'),
(20, 'Antoniowedfds', 'Segundossd', 'ahsssaddadfilva157@gmail.com', '@Srvsa2022', '@helio234'),
(21, 'Luciana Henrique', 'Rodrigues da Silva', 'lhrsilva157@gmail.com', '@Srvsa2022', 'luciana');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
