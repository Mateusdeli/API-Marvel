-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 14-Fev-2021 às 01:19
-- Versão do servidor: 8.0.22
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_marvel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_13_012631_characters_table', 1),
(2, '2021_02_13_014943_comics_table', 1),
(3, '2021_02_13_014952_events_table', 1),
(4, '2021_02_13_014959_series_table', 1),
(5, '2021_02_13_015006_stories_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_characters`
--

CREATE TABLE `tb_characters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `resourceURI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comics`
--

CREATE TABLE `tb_comics` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `diamondCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `character_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_events`
--

CREATE TABLE `tb_events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `resourceURI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `character_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_series`
--

CREATE TABLE `tb_series` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `resourceURI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startYear` int DEFAULT NULL,
  `endYear` int DEFAULT NULL,
  `rating` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `character_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_stories`
--

CREATE TABLE `tb_stories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `resourceURI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `character_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_characters`
--
ALTER TABLE `tb_characters`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_comics`
--
ALTER TABLE `tb_comics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_comics_character_id_foreign` (`character_id`);

--
-- Índices para tabela `tb_events`
--
ALTER TABLE `tb_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_events_character_id_foreign` (`character_id`);

--
-- Índices para tabela `tb_series`
--
ALTER TABLE `tb_series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_series_character_id_foreign` (`character_id`);

--
-- Índices para tabela `tb_stories`
--
ALTER TABLE `tb_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_stories_character_id_foreign` (`character_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_characters`
--
ALTER TABLE `tb_characters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_comics`
--
ALTER TABLE `tb_comics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_events`
--
ALTER TABLE `tb_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_series`
--
ALTER TABLE `tb_series`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_stories`
--
ALTER TABLE `tb_stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_comics`
--
ALTER TABLE `tb_comics`
  ADD CONSTRAINT `tb_comics_character_id_foreign` FOREIGN KEY (`character_id`) REFERENCES `tb_characters` (`id`);

--
-- Limitadores para a tabela `tb_events`
--
ALTER TABLE `tb_events`
  ADD CONSTRAINT `tb_events_character_id_foreign` FOREIGN KEY (`character_id`) REFERENCES `tb_characters` (`id`);

--
-- Limitadores para a tabela `tb_series`
--
ALTER TABLE `tb_series`
  ADD CONSTRAINT `tb_series_character_id_foreign` FOREIGN KEY (`character_id`) REFERENCES `tb_characters` (`id`);

--
-- Limitadores para a tabela `tb_stories`
--
ALTER TABLE `tb_stories`
  ADD CONSTRAINT `tb_stories_character_id_foreign` FOREIGN KEY (`character_id`) REFERENCES `tb_characters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
