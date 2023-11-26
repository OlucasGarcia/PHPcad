bdaluno.sql
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

--
-- Database: `bdaluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_aluno`
--
create DATABASE phpCharles;
use phpCharles;

CREATE TABLE tbl_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    unidade_escolar VARCHAR(255) NOT NULL,
    cpf INT NOT NULL,
    rg INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);


CREATE TABLE `tbl_aluno` (
  `aluno_id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_nome` varchar(45) DEFAULT NULL,
  `aluno_sobrenome` varchar(45) DEFAULT NULL,
  `aluno_endereco` varchar(70) DEFAULT NULL,
  `aluno_bairro` varchar(40) DEFAULT NULL,
  `aluno_cidade` varchar(40) DEFAULT NULL,
  `aluno_cep` varchar(15) DEFAULT NULL,
  `aluno_cpf` varchar(15) DEFAULT NULL,
  `aluno_rg` varchar(18) DEFAULT NULL,
  `aluno_data_nasc` date DEFAULT NULL,
  `aluno_celular` varchar(16) DEFAULT NULL,
  `aluno_email` varchar(50) DEFAULT NULL
  PRIMARY KEY (aluno_id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `tbl_aluno`
  ADD PRIMARY KEY (`aluno_id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aluno`
--
ALTER TABLE `tbl_aluno`
  MODIFY `aluno_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;