-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 03/09/2015 às 19:57
-- Versão do servidor: 5.6.24
-- Versão do PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `friendsplay`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categoria_Esportiva`
--

CREATE TABLE IF NOT EXISTS `Categoria_Esportiva` (
  `nome_categ_esportiva` varchar(30) DEFAULT NULL,
  `num_min_participantes_cat` int(11) DEFAULT NULL,
  `num_max_participantes_cat` int(11) DEFAULT NULL,
  `id_categoria_esportiva_cat` smallint(5) unsigned NOT NULL,
  `num_atual_participante_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Categoria_Esportiva`
--

INSERT INTO `Categoria_Esportiva` (`nome_categ_esportiva`, `num_min_participantes_cat`, `num_max_participantes_cat`, `id_categoria_esportiva_cat`, `num_atual_participante_cat`) VALUES
('Voolei2', NULL, NULL, 1, NULL),
('Voolei2', NULL, NULL, 2, NULL),
('Categ', NULL, NULL, 3, NULL),
('222', NULL, NULL, 4, NULL),
('Teste', 2, 50, 5, NULL),
('Voolei2', NULL, NULL, 6, NULL),
('Baba', 10, 15, 7, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Convite`
--

CREATE TABLE IF NOT EXISTS `Convite` (
  `id_convite` smallint(5) unsigned NOT NULL,
  `id_vento` smallint(6) DEFAULT NULL,
  `resposta_convite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Evento`
--

CREATE TABLE IF NOT EXISTS `Evento` (
  `id_evento` smallint(5) unsigned NOT NULL,
  `nome_evento` varchar(50) DEFAULT NULL,
  `data_evento` date DEFAULT NULL,
  `horario_evento` time DEFAULT NULL,
  `numMax` int(11) NOT NULL,
  `numMin` int(11) NOT NULL,
  `local_evento` varchar(50) DEFAULT NULL,
  `descricao_evento` varchar(200) DEFAULT NULL,
  `privacidade_evento` enum('publico','privado') DEFAULT NULL,
  `id_categoria_esportiva_cat` smallint(5) unsigned DEFAULT NULL,
  `id_usuario` smallint(5) unsigned DEFAULT NULL,
  `contador_participantes_evento` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Evento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `link_usuario` varchar(50) DEFAULT NULL,
  `nome_usuario` varchar(30) DEFAULT NULL,
  `data_de_nascimento_usuario` date DEFAULT NULL,
  `genero_usuario` enum('M','F') DEFAULT NULL,
  `id_usuario` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Índices de tabela `Categoria_Esportiva`
--
ALTER TABLE `Categoria_Esportiva`
  ADD PRIMARY KEY (`id_categoria_esportiva_cat`);

--
-- Índices de tabela `Convite`
--
ALTER TABLE `Convite`
  ADD PRIMARY KEY (`id_convite`);

--
-- Índices de tabela `Evento`
--
ALTER TABLE `Evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_categoria_evento` (`id_categoria_esportiva_cat`);

--
-- Índices de tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Categoria_Esportiva`
--
ALTER TABLE `Categoria_Esportiva`
  MODIFY `id_categoria_esportiva_cat` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `Convite`
--
ALTER TABLE `Convite`
  MODIFY `id_convite` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Evento`
--
ALTER TABLE `Evento`
  MODIFY `id_evento` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `fk_categoria_evento` FOREIGN KEY (`id_categoria_esportiva_cat`) REFERENCES `Categoria_Esportiva` (`id_categoria_esportiva_cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
