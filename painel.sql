-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2018 às 18:11
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `emitted_date` date NOT NULL,
  `emitted_hour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `birth`, `emitted_date`, `emitted_hour`) VALUES
(78, 'Raquel Barra', 'raquel@teste.com.br', '123456', '1996-03-12', '2018-12-08', '14:38'),
(79, 'Daniel Soares', 'daniel@teste.com.br', '123456', '1996-04-12', '2018-12-09', '17:18'),
(82, 'Lidia Barra', 'lidia@teste.com.br', '12345', '2004-03-27', '2018-12-09', '21:19'),
(83, 'Teste 1', 'teste1@gmail.com', '123456', '0000-00-00', '2018-12-09', '21:24'),
(84, 'Teste 2', 'teste2@gmail.com', '123456', '0000-00-00', '2018-12-09', '21:24'),
(85, 'Teste 4', 'teste4@gmail.com', '123456', '0000-00-00', '2018-12-09', '21:25'),
(86, 'Teste5', 'teste5@gmail.com', '1234567', '0000-00-00', '2018-12-09', '21:25'),
(87, 'Teste 6', 'teste6@gmail.com', '123456', '0000-00-00', '2018-12-10', '01:19'),
(88, 'Teste7', 'teste7@gmail.com', '123456', '0000-00-00', '2018-12-10', '01:19'),
(89, 'Teste8 ', 'Teste8@gmail.com', '123456', '0000-00-00', '2018-12-10', '01:19'),
(90, 'Teste 11', 'teste11@gmail.com', '123456', '0000-00-00', '2018-12-10', '01:20'),
(91, 'Teste 12', 'teste12@teste.com', '123456', '0000-00-00', '2018-12-10', '01:54'),
(92, 'Teste 13', 'teste13@teste.com', '123456', '0000-00-00', '2018-12-10', '01:54'),
(94, 'Testando', 'testando@gmail.com', '123456', '0000-00-00', '2018-12-10', '11:59'),
(96, 'Testando 2', 'testando1@gmail.com', '1234', '0000-00-00', '2018-12-10', '13:30'),
(97, 'Testando 3', 'testando3@gmail.com', '1236', '1996-03-12', '2018-12-10', '14:39'),
(98, 'Testando 14', 'testando14@gmail.com', '123456', '0000-00-00', '2018-12-10', '14:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
