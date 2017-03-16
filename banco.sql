-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Jul 31, 2012 as 01:19 AM
-- Versão do Servidor: 5.0.45
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `escreve`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `clientes`
-- 

CREATE TABLE `clientes` (
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ddd` int(2) default NULL,
  `telefone` int(8) default NULL,
  `empresa` varchar(70) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `resposta` varchar(1024) NOT NULL,
  `login` varchar(12) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `aceito` varchar(8) default NULL,
  `id` int(200) NOT NULL auto_increment,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Extraindo dados da tabela `clientes`
-- 

INSERT INTO `clientes` (`nome`, `sobrenome`, `email`, `ddd`, `telefone`, `empresa`, `cidade`, `estado`, `cpf`, `resposta`, `login`, `senha`, `aceito`, `id`) VALUES 
('Fulano', 'da Silva', 'fulano@hotmail.com', 21, 55558908, 'ACME Corporate', 'Oiapoque', 'AP', 'Loteamento Samambaia', 'brasil', 'admin', '123telecom', 'ATIVO', 3);
