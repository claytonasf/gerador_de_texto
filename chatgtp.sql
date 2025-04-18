-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2024 às 00:29
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chatgtp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `keyword` text NOT NULL,
  `text` varchar(5000) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `page` varchar(255) NOT NULL,
  `dateInsert` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `options`
--

CREATE TABLE `options` (
  `option` varchar(255) NOT NULL,
  `values` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `options`
--

INSERT INTO `options` (`option`, `values`) VALUES
('key', ''),
('token', '1300'),
('prompt', 'Escreva um conteúdo em português, de no mínimo 350 palavras, sem erros ortográficos, do tipo informativo, com foco na experiência do usuário e ranqueamento no Google. O conteúdo deve ser finalizado dentro do padrão de código HTML, limpo e com todas as tags de parágrafo, título e lista. O conteúdo é sobre o tema [keyword], e deve iniciar com uma copy bem elaborada\r\nconvidando o leitor a fazer uma cotação na empresa [company] do segmento de [segment]. Depois deve ter mais 3 ou 4 blocos e cada bloco deve ter um H2 e, em pelo menos uma H2 deve conter a expressão [keyword]. Como sugestão, os blocos podem abordar assuntos interessantes para o usuário trazendo informações gerais sobre [keyword], uso, vantagens, funcionalidade,\r\naplicabilidade e recomendações e outros que sejam relevantes para o segmento de [segment]. As informações devem ser precisas e atualizadas, correspondendo às expectativas do usuário que fez a pesquisa sobre o tema. \r\nNão adicione nenhuma forma de contato. Não adicione frases do prompt no conteúdo.\r\nNão se esqueça de inserir as apenas as tags <p> para parágrafo, <ul> e <li> para listas e <h2> para títulos.   '),
('system', 'Você é redator da empresa [company] e deve criar um texto coerente de acordo com os dados da empresa; O texto deve possuir no mínimo 350 palavras, sem erros ortográficos, do tipo informativo, com foco na experiência do usuário e ranqueamento no Google. [custom01]; A empresa trabalha com [segment]; [custom02]; A empresa está localizada em [custom03]; Você precisa inserir apenas as tag <p>, <h1>, <h2>, <h3>, <ul> para englobar os parágrafos, títulos e listas; Não se esqueça de inserir a <h1> no início do texto; Insira a palavra-chave <strong>:[keyword]</strong> entre as tags <strong> e </strong> em todas as variações. Exemplo: <strong>:[keyword]</strong> . A palavra-chave tem que se repetir em ao menos 2 parágrafos em todo o conteúdo.  ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `id`) VALUES
('adim@admin', 'admin', '$2y$10$2AW3SFcmBj5tanRjGaZvaOkGnyXtBtAD4xdl0jh3RB19ycfuTALWO', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76920;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
