-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 05:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolo`
--

CREATE TABLE `bolo` (
  `id` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL,
  `tamanho` enum('mini','pequeno','medio','grande','extra grande') NOT NULL,
  `preco` float NOT NULL,
  `decoracao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bolo`
--

INSERT INTO `bolo` (`id`, `Nome`, `tipo`, `tamanho`, `preco`, `decoracao`) VALUES
(2, 'chifon', 1, 'grande', 700, 'com creme de chocolate'),
(3, 'chifon', 2, 'medio', 1500, 'com chocolte'),
(13, 'Caseiro', 3, 'medio', 600, 'com calda de laranja'),
(14, 'bolo gelado', 4, 'extra grande', 2500, 'caramel');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `telefone_alternativo` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `telefone_alternativo`, `email`, `endereco`) VALUES
(1, 'Cusodio Muandula', '846106673', '856106673', 'custodioMuandula@gmail.com', 'maputo'),
(2, 'Dulce Rosa', '8576465', '82984859', 'DulceRosa@gmail.com', 'matola'),
(3, 'Osvaldo', '849047467', '879065478', 'Osvaldo@gamail.com', 'baixa');

-- --------------------------------------------------------

--
-- Table structure for table `confeiteira`
--

CREATE TABLE `confeiteira` (
  `id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `genero` enum('Masculino','Feminino') NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `telefone_alternativo` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(150) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confeiteira`
--

INSERT INTO `confeiteira` (`id`, `Nome`, `genero`, `telefone`, `telefone_alternativo`, `email`, `website`, `endereco`) VALUES
(1, 'Yune Hipolito', 'Masculino', '848648495', '858137498', 'YuneHipolito@gamil.com', 'Bolos_yune.com', 'Maguanine'),
(2, 'katia Romao', 'Feminino', '8568984', '82763487', 'katia@gamil.com', 'katiadoces.com', 'Zona verde');

-- --------------------------------------------------------

--
-- Table structure for table `encomenda`
--

CREATE TABLE `encomenda` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `bolo` int(11) DEFAULT NULL,
  `data_encomenda` date NOT NULL,
  `data_entrega` date NOT NULL,
  `endereco_entrega` varchar(255) NOT NULL,
  `contacto_entrega` varchar(20) NOT NULL,
  `valor_pagar` float NOT NULL,
  `estado` enum('pendente','concluido') NOT NULL,
  `forma_pagamento` enum('m-pesa','e-mola','conta movel','transferencia','numerario') NOT NULL,
  `estado_pagamento` enum('pendente','pago') NOT NULL,
  `data_pagamento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `encomenda`
--

INSERT INTO `encomenda` (`id`, `cliente`, `bolo`, `data_encomenda`, `data_entrega`, `endereco_entrega`, `contacto_entrega`, `valor_pagar`, `estado`, `forma_pagamento`, `estado_pagamento`, `data_pagamento`) VALUES
(2, 1, 13, '2022-06-02', '2022-06-09', 'Matola', '8678687', 345, 'concluido', 'm-pesa', 'pendente', '0000-00-00'),
(72, 1, 3, '2022-06-09', '2022-06-10', 'Zimpento', '8678687', 1500, 'pendente', 'm-pesa', 'pendente', '0000-00-00'),
(73, 3, 14, '2022-06-11', '2022-06-15', 'Fometo', '898858', 2500, 'concluido', 'm-pesa', 'pendente', '0000-00-00'),
(74, 3, 14, '2022-06-02', '2022-06-16', 'CMC', '898858', 2500, 'pendente', 'm-pesa', 'pendente', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `receita`
--

CREATE TABLE `receita` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ingredientes` text NOT NULL,
  `confeiteira_id` int(11) NOT NULL,
  `modo_preparo` mediumtext NOT NULL,
  `info_adicional` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `data_criacao` date NOT NULL,
  `data_actualizacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receita`
--

INSERT INTO `receita` (`id`, `nome`, `ingredientes`, `confeiteira_id`, `modo_preparo`, `info_adicional`, `tipo`, `data_criacao`, `data_actualizacao`) VALUES
(1, 'bolo de chifon', 'trigo,acucar,leite,matega,avos', 1, 'preparamos os ovos seprados da gema, adicionalo um copo de leite..', 'nao pode ficar mas de 1h no forno', 1, '2021-06-01', '0000-00-00'),
(2, 'Bolos Amategados', 'avos,trigo,leite,acucar,custarde,mateiga', 1, '3ovos,6culhres de acucar,leite', 'podes adicinar uma barra de chocalate ', 3, '2020-06-10', '2022-06-01'),
(3, 'bolo gelado', 'avos,acucar,natas', 2, 'bates os ovos, deixas asnats na celera', 'nao deixar o bolo em sitio quente', 4, '2018-06-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_bolo`
--

CREATE TABLE `tipo_bolo` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_bolo`
--

INSERT INTO `tipo_bolo` (`id`, `nome`, `descricao`) VALUES
(1, 'chifon', 'bolo com massa fofa'),
(2, 'maracuja', 'bolo de maracuja'),
(3, 'Amategado', 'bolo caseiro simples'),
(4, 'bolo gelado', 'bolo de Maizena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolo`
--
ALTER TABLE `bolo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confeiteira`
--
ALTER TABLE `confeiteira`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encomenda`
--
ALTER TABLE `encomenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `bolo` (`bolo`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `confeiteira_id` (`confeiteira_id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indexes for table `tipo_bolo`
--
ALTER TABLE `tipo_bolo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolo`
--
ALTER TABLE `bolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confeiteira`
--
ALTER TABLE `confeiteira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `encomenda`
--
ALTER TABLE `encomenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_bolo`
--
ALTER TABLE `tipo_bolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `receita_ibfk_1` FOREIGN KEY (`confeiteira_id`) REFERENCES `confeiteira` (`id`),
  ADD CONSTRAINT `receita_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo_bolo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
