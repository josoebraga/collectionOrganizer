-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para comics
CREATE DATABASE IF NOT EXISTS `comics` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `comics`;

-- Copiando estrutura para tabela comics.edicoes
CREATE TABLE IF NOT EXISTS `edicoes` (
  `idEdicao` int(11) NOT NULL AUTO_INCREMENT,
  `idEditora` int(11) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `argumento1` varchar(50) DEFAULT NULL,
  `argumento2` varchar(50) DEFAULT NULL,
  `argumento3` varchar(50) DEFAULT NULL,
  `argumento4` varchar(50) DEFAULT NULL,
  `roteiro1` varchar(50) DEFAULT NULL,
  `roteiro2` varchar(50) DEFAULT NULL,
  `roteiro3` varchar(50) DEFAULT NULL,
  `roteiro4` varchar(50) DEFAULT NULL,
  `arte1` varchar(50) DEFAULT NULL,
  `arte2` varchar(50) DEFAULT NULL,
  `arte3` varchar(50) DEFAULT NULL,
  `arte4` varchar(50) DEFAULT NULL,
  `arteFinal1` varchar(50) DEFAULT NULL,
  `arteFinal2` varchar(50) DEFAULT NULL,
  `arteFinal3` varchar(50) DEFAULT NULL,
  `arteFinal4` varchar(50) DEFAULT NULL,
  `anoLancamento` smallint(6) DEFAULT NULL,
  `mesLancamento` tinyint(4) DEFAULT NULL,
  `isbn` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idEdicao`),
  KEY `idEdicao` (`idEdicao`,`idEditora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela comics.edicoes: 0 rows
/*!40000 ALTER TABLE `edicoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `edicoes` ENABLE KEYS */;

-- Copiando estrutura para tabela comics.editoras
CREATE TABLE IF NOT EXISTS `editoras` (
  `idEditora` int(11) NOT NULL AUTO_INCREMENT,
  `editora` varchar(50) DEFAULT NULL,
  `idPais` int(11) DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEditora`),
  KEY `idEditora` (`idEditora`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela comics.editoras: 1 rows
/*!40000 ALTER TABLE `editoras` DISABLE KEYS */;
INSERT INTO `editoras` (`idEditora`, `editora`, `idPais`, `cnpj`) VALUES
	(1, 'Mythos', 1, NULL);
/*!40000 ALTER TABLE `editoras` ENABLE KEYS */;

-- Copiando estrutura para tabela comics.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL DEFAULT '0',
  `senha` varchar(100) DEFAULT NULL,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `dataNascimento` date DEFAULT NULL,
  `cpf` varchar(11) DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `id_tipo_de_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_tipo_de_usuario` (`id_tipo_de_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela comics.usuarios: 1 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `dataNascimento`, `cpf`, `email`, `id_tipo_de_usuario`) VALUES
	(1, 'josoe.braga', '8f7c768705f0d2fbe65003acbf4d4f7a2f7c1b17', 'Josoe Schmidt Braga', '1986-11-25', '01445674076', 'josoe.braga@gmail.com', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela comics.usuarios_tipo
CREATE TABLE IF NOT EXISTS `usuarios_tipo` (
  `id_tipo_de_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_de_usuario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_de_usuario`),
  UNIQUE KEY `id_tipo_de_usuario` (`id_tipo_de_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela comics.usuarios_tipo: 0 rows
/*!40000 ALTER TABLE `usuarios_tipo` DISABLE KEYS */;
INSERT INTO `usuarios_tipo` (`id_tipo_de_usuario`, `tipo_de_usuario`) VALUES
	(1, 'Administrador'),
	(2, 'Usuário');
/*!40000 ALTER TABLE `usuarios_tipo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
