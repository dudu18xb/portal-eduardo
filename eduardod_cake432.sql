-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 25/05/2019 às 12:16
-- Versão do servidor: 5.7.24
-- Versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eduardod_cake432`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `descricao` text,
  `imagem` varchar(255) DEFAULT NULL,
  `missao` text,
  `visao` text,
  `valores` text,
  `bg_visao` varchar(255) DEFAULT NULL,
  `bg_missao` varchar(255) DEFAULT NULL,
  `bg_valores` varchar(255) DEFAULT NULL,
  `diastrabalhados` int(11) DEFAULT NULL,
  `pacientesatendidos` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `bg_topo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `about`
--

INSERT INTO `about` (`id`, `descricao`, `imagem`, `missao`, `visao`, `valores`, `bg_visao`, `bg_missao`, `bg_valores`, `diastrabalhados`, `pacientesatendidos`, `created`, `modified`, `status`, `bg_topo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum rutrum nunc a semper. Etiam eu ligula at neque ultrices tempus. In dignissim odio sit amet orci congue varius. Suspendisse accumsan elit nec mollis cursus. Nunc id arcu nec augue mattis placerat. Quisque tincidunt pulvinar erat id luctus. Aliquam sagittis, dolor et consectetur egestas, tellus velit porta justo, id aliquet tortor risus ut libero. In enim nibh, lobortis ac ornare nec, imperdiet sit amet augue. Suspendisse quis dolor ac arcu mattis posuere nec sed sem. ', 'about_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum rutrum nunc a semper. Etiam eu ligula at neque ultrices tempus. In dignissim odio sit amet orci congue varius. Suspendisse accumsan elit nec mollis cursus. Nunc id arcu nec augue mattis placerat. Quisque tincidunt pulvinar erat id luctus. Aliquam sagittis, dolor et consectetur egestas, tellus velit porta justo, id aliquet tortor risus ut libero. In enim nibh, lobortis ac ornare nec, imperdiet sit amet augue. Suspendisse quis dolor ac arcu mattis posuere nec sed sem. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum rutrum nunc a semper. Etiam eu ligula at neque ultrices tempus. In dignissim odio sit amet orci congue varius. Suspendisse accumsan elit nec mollis cursus. Nunc id arcu nec augue mattis placerat. Quisque tincidunt pulvinar erat id luctus. Aliquam sagittis, dolor et consectetur egestas, tellus velit porta justo, id aliquet tortor risus ut libero. In enim nibh, lobortis ac ornare nec, imperdiet sit amet augue. Suspendisse quis dolor ac arcu mattis posuere nec sed sem. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum rutrum nunc a semper. Etiam eu ligula at neque ultrices tempus. In dignissim odio sit amet orci congue varius. Suspendisse accumsan elit nec mollis cursus. Nunc id arcu nec augue mattis placerat. Quisque tincidunt pulvinar erat id luctus. Aliquam sagittis, dolor et consectetur egestas, tellus velit porta justo, id aliquet tortor risus ut libero. In enim nibh, lobortis ac ornare nec, imperdiet sit amet augue. Suspendisse quis dolor ac arcu mattis posuere nec sed sem. ', 'dept_1.jpg', 'dept_2.jpg', 'dept_3.jpg', 365, 400, '2019-01-22 22:37:38', '2019-02-02 23:43:14', 1, 'about.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autores`
--

CREATE TABLE `autores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `autores`
--

INSERT INTO `autores` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Eduardo Rocha', '2019-01-21 21:43:19', '2019-01-21 21:43:19'),
(2, 'Raffael', '2019-01-28 22:41:00', '2019-01-28 22:41:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `backgroundparalax`
--

CREATE TABLE `backgroundparalax` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `sub_titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `texto_botao` varchar(255) DEFAULT NULL,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `backgroundparalax`
--

INSERT INTO `backgroundparalax` (`id`, `titulo`, `sub_titulo`, `imagem`, `created`, `modified`, `status`, `texto_botao`, `url`) VALUES
(1, 'Solicite seu orçamento, vem para Odonto Herrera', 'Morbi arcu neque, scelerisque eget ligula ac, congue tempor', 'dept_3.jpg', '2019-02-16 21:23:42', '2019-02-23 22:50:42', 1, 'Saiba mais', 'https://g1.globo.com/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `sub_titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `texto_botao` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `banners`
--

INSERT INTO `banners` (`id`, `titulo`, `sub_titulo`, `imagem`, `status`, `link`, `texto_botao`, `created`, `modified`) VALUES
(1, 'Volte a sorrir', 'Dedicação, Tecnologia e especialização profissional a serviço da sua saúde.', 'index_hero.jpg', 1, 'https://g1.globo.com/', 'Saiba Mais', '2019-01-20 21:54:55', '2019-02-17 15:53:32'),
(2, 'Conheça os cuidados básicos', 'Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis.Integer tempor, eros a egestas.                         ', 'contact.jpg', 1, 'https://g1.globo.com/', 'Saiba Mais', '2019-02-17 15:50:33', '2019-02-17 15:53:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `autores_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date DEFAULT NULL,
  `descricao` text,
  `imagemdescricao` varchar(255) DEFAULT NULL,
  `capa` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `visualizacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `blogs`
--

INSERT INTO `blogs` (`id`, `autores_id`, `categoria_id`, `titulo`, `data`, `descricao`, `imagemdescricao`, `capa`, `slug`, `created`, `modified`, `status`, `description`, `keywords`, `visualizacao`) VALUES
(2, 1, 1, '10 Tips on how to live a healthy life', '2019-02-17', '<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>\r\n', 'news_1.jpg', 'news_1.jpg', '10-tips-on-how-to-live-a-healthy-life', '2019-02-17 22:28:57', '2019-05-24 02:32:49', 1, 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 14),
(3, 1, 3, 'New lab tests that could save your life', '2019-02-17', '<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>\r\n', 'news_2.jpg', 'news_2.jpg', 'new-lab-tests-that-could-save-your-life', '2019-02-17 22:29:31', '2019-05-24 02:32:51', 1, 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 17),
(4, 1, 1, 'Maternity can be a wonderful thing', '2019-02-17', '<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>\r\n', 'news_3.jpg', 'news_3.jpg', 'maternity-can-be-a-wonderful-thing', '2019-02-17 22:30:06', '2019-05-24 02:32:52', 1, 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 'Conheça mitos e verdades sobre alimentos que são aliados para dentes fortes e saudáveis', 23);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `slug`, `created`, `modified`) VALUES
(1, 'Informatica', 'informatica', '2019-02-09 14:35:48', '2019-02-16 18:42:08'),
(3, 'Filmes Comedia', 'filmes-comedia', '2019-02-16 18:22:01', '2019-02-16 18:40:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriaservicos`
--

CREATE TABLE `categoriaservicos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `configs`
--

INSERT INTO `configs` (`id`, `facebook`, `instagram`, `twitter`, `telefone`, `celular`, `endereco`, `created`, `modified`) VALUES
(1, 'https://www.facebook.com/dudu18xb', 'https://www.instagram.com/dudu18xb', 'https://twitter.com/dudu18xb', '(44) 3632-1093', '(44)9 8442-8711', 'Avenida Parana, 640 , Casa Branca 87536-000 - Xambrê', '2019-03-02 21:08:14', '2019-03-02 21:08:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contato`
--

INSERT INTO `contato` (`id`, `status`, `nome`, `email`, `assunto`, `mensagem`, `created`, `modified`) VALUES
(6, 1, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdsadsa', 'asdad', '2019-02-23 23:35:09', '2019-02-23 23:54:36'),
(7, 1, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'teste', 'asdsadasd', '2019-02-23 23:38:15', '2019-02-23 23:54:43'),
(8, 1, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'adasda', 'asdsada', '2019-02-23 23:38:52', '2019-02-23 23:56:40'),
(9, NULL, 'asdasdas', 'eduardorocha460@gmail.com', 'asdsa', 'asdsad', '2019-02-23 23:39:47', '2019-02-23 23:39:47'),
(10, 1, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'Assunto Teste', 'asdsadasd', '2019-02-23 23:41:06', '2019-03-10 18:44:40'),
(11, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdsad', 'sadad', '2019-02-23 23:42:59', '2019-02-23 23:42:59'),
(12, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'teste', 'asdsadsad', '2019-02-23 23:43:44', '2019-02-23 23:43:44'),
(13, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdads', 'asdasda', '2019-02-23 23:44:20', '2019-02-23 23:44:20'),
(14, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdad', 'sadsadad', '2019-02-23 23:47:32', '2019-02-23 23:47:32'),
(15, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'teste', 'asdada', '2019-02-23 23:48:25', '2019-02-23 23:48:25'),
(16, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'adad', 'asdsad', '2019-02-23 23:49:52', '2019-02-23 23:49:52'),
(17, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdasdsad', 'asdsad', '2019-02-23 23:50:28', '2019-02-23 23:50:28'),
(18, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'asdad', 'asdadsad', '2019-02-23 23:52:11', '2019-02-23 23:52:11'),
(19, NULL, 'EDUARDO SILVA ROCHA', 'eduardorocha460@gmail.com', 'teste', 'asdsadad', '2019-02-23 23:52:53', '2019-02-23 23:52:53'),
(20, 0, 'Eduardo Rocha', 'eduardorocha460@gmail.com', 'Teste', 'Teste', '2019-03-07 23:36:20', '2019-03-07 23:36:20'),
(21, 0, 'Eduardo Rocha', 'eduardorocha460@gmail.com', 'Teste', 'Teste', '2019-03-10 17:25:16', '2019-03-10 17:25:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `equipes`
--

INSERT INTO `equipes` (`id`, `nome`, `cargo`, `imagem`, `created`, `modified`, `status`) VALUES
(0, 'Filmes Comedia', 'adasdsadsad', 'dept_2.jpg', '2019-02-16 21:43:46', '2019-02-16 21:51:05', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `blogs_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `informativos`
--

CREATE TABLE `informativos` (
  `id` int(11) NOT NULL,
  `paginas_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` text,
  `imagem` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `url_video` text,
  `status` tinyint(1) DEFAULT NULL,
  `status_nome` tinyint(1) DEFAULT NULL,
  `status_email` tinyint(1) DEFAULT NULL,
  `status_telefone` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `slug` text,
  `meta_description` text,
  `meta_keywords` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `status`, `slug`, `meta_description`, `meta_keywords`, `created`, `modified`) VALUES
(1, 'Home', 1, '/home', 'Página de inicio do site ', 'Odontologia, Herrera, Umuarama, Parana', '2019-02-26 22:28:56', '2019-02-28 23:12:21'),
(2, 'Quem Somos', 1, '/quem-somos', 'Meta Description Pagina sobre quem Somos', 'Meta Keywords Pagina sobre quem Somos', '2019-02-28 22:59:38', '2019-02-28 23:11:05'),
(3, 'Serviços', 1, '/servicos', 'Pagina de Serviços prestados pela Odonto Herrera', 'Meta Keywords da pagina Odonto Herrera', '2019-02-28 23:17:01', '2019-02-28 23:17:01'),
(4, 'Blogs', 1, '/blogs', 'Pagina de blog para saber mais noticias sobre a Odonto Herrera', 'Meta Keywords, Pagina de blog para saber mais noticias sobre a Odonto Herrera', '2019-03-02 16:27:26', '2019-03-02 16:27:26'),
(5, 'Contato', 1, '/contato', 'Pagina de contato, para entrar em contato com a equipe da Odonto Herrera, temos o prazer de atendelo', 'Meta Keywords Pagina de contato, para entrar em contato com a equipe da Odonto Herrera, temos o prazer de atendelo', '2019-03-02 16:35:14', '2019-03-02 16:35:14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `categoriaservicos_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text,
  `imagem` varchar(255) DEFAULT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `status`, `login`, `nome`, `role`, `password`, `photo`, `created`, `modified`) VALUES
(1, 0, 'admin', 'Administrador', 'admin', '$2y$10$HNzOE57FTgngR8msL8mx7ObSm7ls9KMdbBlYbSiuSK7m5yHF8xUOO', NULL, '2018-12-29 19:48:25', '2018-12-29 19:48:25');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `backgroundparalax`
--
ALTER TABLE `backgroundparalax`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blogs_autores1_idx` (`autores_id`),
  ADD KEY `fk_blogs_categoria1_idx` (`categoria_id`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categoriaservicos`
--
ALTER TABLE `categoriaservicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fotos_blogs_idx` (`blogs_id`);

--
-- Índices de tabela `informativos`
--
ALTER TABLE `informativos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_informativos_paginas1_idx` (`paginas_id`);

--
-- Índices de tabela `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicos_categoriaservicos1_idx` (`categoriaservicos_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `backgroundparalax`
--
ALTER TABLE `backgroundparalax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categoriaservicos`
--
ALTER TABLE `categoriaservicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_blogs_autores1` FOREIGN KEY (`autores_id`) REFERENCES `autores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blogs_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_fotos_blogs` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `informativos`
--
ALTER TABLE `informativos`
  ADD CONSTRAINT `fk_informativos_paginas1` FOREIGN KEY (`paginas_id`) REFERENCES `paginas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_servicos_categoriaservicos1` FOREIGN KEY (`categoriaservicos_id`) REFERENCES `categoriaservicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
