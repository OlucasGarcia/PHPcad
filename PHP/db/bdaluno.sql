-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Out-2023 às 02:51
-- Versão do servidor: 5.6.25-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `phpCharles`
--
CREATE DATABASE IF NOT EXISTS phpCharles;
USE phpCharles;

-- --------------------------------------------------------

-- Estrutura da tabela `tbl_user`
--
CREATE TABLE IF NOT EXISTS `tbl_user` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome_completo` VARCHAR(255) NOT NULL,
    `unidade_escolar` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(15) NOT NULL,
    `rg` VARCHAR(18) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `senha` VARCHAR(255) NOT NULL
);

-- Estrutura da tabela `tbl_aluno`
--
CREATE TABLE IF NOT EXISTS `tbl_aluno` (
  `aluno_id` INT AUTO_INCREMENT PRIMARY KEY,
  `aluno_nome` VARCHAR(45) DEFAULT NULL,
  `aluno_sobrenome` VARCHAR(45) DEFAULT NULL,
  `aluno_endereco` VARCHAR(70) DEFAULT NULL,
  `aluno_bairro` VARCHAR(40) DEFAULT NULL,
  `aluno_cidade` VARCHAR(40) DEFAULT NULL,
  `aluno_cep` VARCHAR(15) DEFAULT NULL,
  `aluno_cpf` VARCHAR(15) DEFAULT NULL,
  `aluno_rg` VARCHAR(18) DEFAULT NULL,
  `aluno_data_nasc` DATE DEFAULT NULL,
  `aluno_celular` VARCHAR(16) DEFAULT NULL,
  `aluno_email` VARCHAR(50) DEFAULT NULL
);

-- AUTO_INCREMENT for dumped tables
--

-- AUTO_INCREMENT for table `tbl_aluno`
--
ALTER TABLE `tbl_aluno`
  MODIFY `aluno_id` INT AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
