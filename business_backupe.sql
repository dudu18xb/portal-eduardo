-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 26/10/2022 às 01:32
-- Versão do servidor: 5.6.51
-- Versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `business`
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
-- Despejando dados para a tabela `about`
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
-- Despejando dados para a tabela `autores`
--

INSERT INTO `autores` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Eduardo Rocha', '2019-01-21 21:43:19', '2019-01-21 21:43:19');

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
-- Despejando dados para a tabela `backgroundparalax`
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
-- Despejando dados para a tabela `banners`
--

INSERT INTO `banners` (`id`, `titulo`, `sub_titulo`, `imagem`, `status`, `link`, `texto_botao`, `created`, `modified`) VALUES
(3, 'Banner Teste', 'Teste', 'pexels-andrew-neel-8347199.jpg', 1, 'https://g1.globo.com/', 'Saiba mais', '2022-05-12 22:06:13', '2022-05-12 22:49:17');

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
  `visualizacao` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `meta_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `blogs`
--

INSERT INTO `blogs` (`id`, `autores_id`, `categoria_id`, `titulo`, `data`, `descricao`, `imagemdescricao`, `capa`, `slug`, `created`, `modified`, `status`, `description`, `keywords`, `visualizacao`, `tipo_id`, `meta_image`) VALUES
(5, 1, 4, 'Tesla de Elon Musk projeta bateria de carro elétrico para durar 100 anos', '2022-05-29', '<p>O grupo de pesquisa avan&ccedil;ada de baterias da Tesla no Canad&aacute; publicou, no in&iacute;cio deste m&ecirc;s, um artigo no qual relata o&nbsp;<a href=\"https://www.tecmundo.com.br/ciencia/237876-nova-bateria-leva-6-minutos-carregar-60-carro-eletrico.htm\" target=\"_blank\">desenvolvimento de uma nova bateria</a>&nbsp;&agrave; base de n&iacute;quel que pode ser usada em&nbsp;<a href=\"https://www.tecmundo.com.br/eletricos\" target=\"_blank\"><strong>carros el&eacute;tricos</strong></a>. De acordo com o estudo,&nbsp;<strong>a bateria pode durar at&eacute; 100 anos.</strong></p>\r\n\r\n<p>A equipe da montadora de ve&iacute;culos el&eacute;tricos trabalha, desde 2016, em conjunto com o laborat&oacute;rio do especialista Jeff Dahn na Universidade de Dalhousie, na cidade de Halifax.</p>\r\n\r\n<p><img alt=\"Carro elétrico é recarregado em estação na rua\" src=\"https://img.ibxk.com.br/2022/05/27/27145941382314.jpg?ims=328x\" />Carro el&eacute;trico &eacute; recarregado em esta&ccedil;&atilde;o na ruaFonte:&nbsp;<a href=\"https://www.shutterstock.com/\" target=\"_blank\">&nbsp;Shutterstock&nbsp;</a></p>\r\n\r\n<p>Depois da produ&ccedil;&atilde;o de algumas patentes e publica&ccedil;&otilde;es sobre baterias, a parceria foi estendida at&eacute; 2026, tendo como foco a redu&ccedil;&atilde;o dos custos das baterias, via aumento potencial da sua densidade e durabilidade de energia.</p>\r\n\r\n<h2>Como ir&aacute; funcionar a bateria de 100 anos?</h2>\r\n\r\n<p><strong>Um dos conceitos-chave para a autonomia da bateria &eacute; a sua densidade</strong>, que &eacute; a quantidade de energia capaz de ser armazenada em um volume de combust&iacute;vel. Uma bateria com maior densidade, por exemplo, ocupa menos espa&ccedil;o no ve&iacute;culo. No caso da Tesla, s&atilde;o usadas atualmente as baterias de &iacute;ons de l&iacute;tio do tipo LFP (fosfato de ferro e l&iacute;tio), que oferecem um&nbsp;<a href=\"https://www.tecmundo.com.br/mobilidade-urbana-smart-cities/237178-tesla-incluir-carregador-carros-eletricos.htm\" target=\"_blank\">intervalo maior entre as cargas</a>.</p>\r\n\r\n<p>A proposta do novo artigo &eacute; justamente aumentar a densidade de energia,&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/238205-tesla-confirma-acordo-vale-fornecimento-niquel.htm\" target=\"_blank\">utilizando n&iacute;quel</a>&nbsp;na composi&ccedil;&atilde;o qu&iacute;mica da bateria, para assegurar uma autonomia maior. As baterias com esse metal de transi&ccedil;&atilde;o revelaram-se tamb&eacute;m mais dur&aacute;veis que as LFPs. Na hip&oacute;tese de uso da bateria de n&iacute;quel a uma temperatura de 25&ordm;C constantes, o seu tempo de vida poderia ultrapassar os 100 anos, afirma o estudo.</p>\r\n\r\n<p>A melhora da vida &uacute;til &quot;em alta temperatura &eacute; demonstrada com eletr&oacute;litos que cont&ecirc;m sal de bis(flurosulonil)mida de l&iacute;tio (LiFSl), muito al&eacute;m daqueles fornecidos pelos eletr&oacute;litos convencionais de LiPF6&rdquo;, afirma o estudo. Os pesquisadores acrescentam que o benef&iacute;cio ocorre mesmo em qu&iacute;micas<strong>&nbsp;com pouco ou nenhum cobalto</strong>.</p>\r\n\r\n<p><strong>ARTIGO</strong>&nbsp;- Journal of The Electrochemical Society -&nbsp;<a href=\"https://doi.org/10.1149/1945-7111/ac67b5\" target=\"_blank\">DOI 10.1149/1945-7111/ac67b5</a>.</p>\r\n', 'pexels-cottonbro-4709285.jpg', 'pexels-cottonbro-4709285.jpg', 'tesla-de-elon-musk-projeta-bateria-de-carro-eletrico-para-durar-100-anos', '2022-05-29 22:45:54', '2022-10-25 22:29:43', 1, 'Tesla de Elon Musk projeta bateria de carro elétrico para durar 100 anos', 'Tesla de Elon Musk projeta bateria de carro elétrico para durar 100 anos', 4, NULL, NULL),
(6, 1, 1, 'Kakashi: 10 vezes em que o personagem de Naruto encantou os fãs', '2022-05-29', '<p><a href=\"https://www.tecmundo.com.br/minha-serie/naruto\" target=\"_blank\"><em>Naruto</em></a>&nbsp;se tornou um dos&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/tag/anime\" target=\"_blank\">animes</a>&nbsp;mais famosos de todos os tempos e, mesmo ap&oacute;s d&eacute;cadas do in&iacute;cio de seu lan&ccedil;amento, ainda carrega consigo uma legi&atilde;o de f&atilde;s.</p>\r\n\r\n<p>Entre os personagens apresentados, o sensei do time 7,&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/228934-kakashi-8-coisas-voce-nao-sabia-personagem-naruto.htm\" target=\"_blank\">Kakashi</a>, se tornou um dos queridinhos e mais amados, j&aacute; que conseguia ser misteriosamente habilidoso com o uso do seu sharingan para copiar os inimigos.</p>\r\n\r\n<p>Para os f&atilde;s do ninja, n&oacute;s separamos uma sele&ccedil;&atilde;o completa com 10 vezes em que o sensei de&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/naruto-shippuden\" target=\"_blank\"><em>Naruto</em></a>&nbsp;encantou os f&atilde;s. Confira!</p>\r\n\r\n<h2>10. Arco da Vila da N&eacute;voa</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091403226055.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Um dos momentos mais marcantes de toda a hist&oacute;ria do anime cl&aacute;ssico com certeza foi o arco da Vila da N&eacute;voa e a luta contra o dem&ocirc;nio da n&eacute;voa, Zabuza, al&eacute;m de seu companheiro Haku.</p>\r\n\r\n<p>Assim, o ninja copiador estrelou uma luta ic&ocirc;nica na qual utilizou o seu jutsu de invoca&ccedil;&atilde;o e trouxe seu c&atilde;o para farejar o inimigo em meio ao nevoeiro.</p>\r\n\r\n<h2>9. Conversa com Sasuke ap&oacute;s luta com Naruto</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091344961054.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Kakashi consegue enxergar em si muitas semelhan&ccedil;as com o rebelde Sasuke e, ap&oacute;s o Uchiha lutar contra Naruto em um embate de vida ou morte, ele d&aacute; alguns conselhos para que o ninja n&atilde;o seja consumido pela vingan&ccedil;a.</p>\r\n\r\n<p>Al&eacute;m disso, Kakashi come&ccedil;a a ensinar Sasuke a utilizar o chidori e relembra sua &eacute;poca de ninja jovem com o Uchiha.</p>\r\n\r\n<h2>8. Seu v&iacute;cio pelos romances Icha Icha</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091307789053.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Uma das caracter&iacute;sticas mais interessantes do ninja copiador &eacute; o seu v&iacute;cio pelos romances Icha Icha e como ele n&atilde;o para de ler os livros nem mesmo quando est&aacute; em uma luta de vida ou morte.</p>\r\n\r\n<p>Assim, no primeiro filler em que os seus alunos tentam ver sob sua m&aacute;scara, vemos o sensei bastante alegre com o an&uacute;ncio de mais uma obra da franquia.</p>\r\n\r\n<h2>7. Corrida entre Kakashi e Guy</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091244492051.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Rivalidades s&atilde;o sempre uma boa quando se trata de animes e, em&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/226386-veja-onde-assistir-temporadas-naruto-shippuden.htm\" target=\"_blank\"><em>Naruto</em></a>, a amizade e, ao mesmo tempo, competi&ccedil;&atilde;o entre os senseis Kakashi e Guy s&atilde;o muito cativantes, j&aacute; que eles est&atilde;o tentando superar um ao outro a cada momento.</p>\r\n\r\n<p>E um dos momentos mais marcantes da hist&oacute;ria dos dois &eacute; a corrida que acontece ao longo da vers&atilde;o cl&aacute;ssica de&nbsp;<em>Naruto</em>.</p>\r\n\r\n<h2>6. Fillers focados na sua m&aacute;scara</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091203695050.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>O uso da m&aacute;scara pelo sensei foi um verdadeiro mist&eacute;rio ao longo de todo o&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/232848-hinata-tudo-personagem-naruto-anime.htm\" target=\"_blank\">anime</a>&nbsp;e, durante dois epis&oacute;dios focados somente nessa caracter&iacute;stica, vimos os seus alunos falharem ao tentar descobrir seu verdadeiro rosto.</p>\r\n\r\n<p>Somente no spin-off Rock Lee &amp; His Ninja Pals descobrimos que o motivo da m&aacute;scara s&atilde;o os sangramentos nasais que ele precisa esconder.</p>\r\n\r\n<h2>5. Seus momentos de traumas</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091147539049.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Kakashi &eacute;, sem sombra de d&uacute;vidas, um dos ninjas de<em>&nbsp;Naruto</em>&nbsp;que mais sofreram ao longo do anime, e alguns momentos, como a morte de Rin, o suic&iacute;dio de seu pai e a morte de Minato e Kushina marcaram fortemente a vida do ninja.</p>\r\n\r\n<p>Ap&oacute;s todos esses momentos, o sensei s&oacute; conseguiu um momento de tranquilidade ap&oacute;s come&ccedil;ar a ensinar jovens ninjas.</p>\r\n\r\n<h2>4. Sua luta contra Kakuzu e Hidan</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091131101048.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Os ninjas da Akatsuki s&atilde;o inimigos altamente poderosos, at&eacute; mesmo para o sensei do time 7, e uma das lutas mais incr&iacute;veis envolvendo o personagem foi a que ele travou contra Hidan e Kakuzu.</p>\r\n\r\n<p>Mesmo estando no seu limite, Kakashi conseguiu tirar for&ccedil;as da alma para utilizar suas habilidades de estrat&eacute;gia e copiar os ataques dos inimigos.</p>\r\n\r\n<h2>3. A mudan&ccedil;a no seu ideal</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091053586047.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Um dos ideais mais fortes do sensei, at&eacute; determinado momento, era o de n&atilde;o abandonar por nada as miss&otilde;es, uma vez que seu pai foi condenado por isso, mas ele acabou mudando esse pensamento.</p>\r\n\r\n<p>A morte de Rin e o discurso de Obito fizeram com que Kakashi percebesse a import&acirc;ncia de salvar seus companheiros mesmo nesses momentos.</p>\r\n\r\n<h2>2. Sua luta contra Obito</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091036351044.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>Depois de anos achando que seu parceiro Obito estava morto, Kakashi descobre que Tobi era na verdade o Uchiha e, durante a Quarta Grande Guerra Shinobi, trava uma batalha marcante contra o vil&atilde;o.</p>\r\n\r\n<p>O tom dram&aacute;tico envolvendo toda a hist&oacute;ria que os dois ninjas tiveram no passado tornam esse embate ainda mais emocionante durante o anime.</p>\r\n\r\n<h2>1. O posto de Hokage</h2>\r\n\r\n<p><img alt=\"(Fonte: TXN/Divulgação)\" src=\"https://img.ibxk.com.br/2022/05/24/24091011336043.jpg?ims=328x\" />(Fonte: TXN/Divulga&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.cbr.com/naruto-kakashi-likable-moments/\" target=\"_blank\">&nbsp;TXN&nbsp;</a></p>\r\n\r\n<p>No final de&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/157617-naruto-por-que-o-anime-e-tao-popular-.htm\" target=\"_blank\"><em>Naruto Shippuden</em></a>, Kakashi finalmente consegue um momento de tranquilidade e paz ap&oacute;s tudo o que passou e se torna o Sexto Hokage de Konoha, um t&iacute;tulo merecido pela contribui&ccedil;&atilde;o do ninja com todo o mundo.</p>\r\n\r\n<p>Entre todos esses momentos marcantes envolvendo o ninja copiador, sensei do time 7 e, por fim, Sexto Hokage, qual o seu favorito?</p>\r\n', 'pexels-midory-pho-13672305.jpg', 'pexels-midory-pho-13672305.jpg', 'kakashi-10-vezes-em-que-o-personagem-de-naruto-encantou-os-fas', '2022-05-29 22:47:46', '2022-10-25 22:14:06', 1, 'Kakashi: 10 vezes em que o personagem de Naruto encantou os fãs', 'Kakashi: 10 vezes em que o personagem de Naruto encantou os fãs', 7, NULL, NULL),
(7, 1, 4, 'Quais são os melhores bancos do Brasil? Veja top 10!', '2022-05-29', '<p>Anualmente, a&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/236698-elon-musk-pessoa-rica-mundo-ranking-anual-forbes.htm\" target=\"_blank\"><em><strong>Forbes</strong></em></a>&nbsp;apresenta um ranking com os 15&nbsp;<strong>melhores bancos digitais e institui&ccedil;&otilde;es financeiras</strong><strong>&nbsp;</strong>em atividade no Brasil. De acordo com o ranking, alguns dos aspectos que s&atilde;o levados em considera&ccedil;&atilde;o para definir as respectivas posi&ccedil;&otilde;es das<strong>&nbsp;</strong>s&atilde;o: satisfa&ccedil;&atilde;o dos clientes, confiabilidade, digitaliza&ccedil;&atilde;o, atendimento e assessoria financeira.</p>\r\n\r\n<p>Abaixo, voc&ecirc; pode conferir a lista completa e alguns detalhes sobre cada um dos&nbsp;<a href=\"https://www.tecmundo.com.br/banco\" target=\"_blank\">bancos&nbsp;</a>que a comp&otilde;em o ranking da Forbes em 2022.</p>\r\n\r\n<h2>1. Nubank</h2>\r\n\r\n<p><img alt=\"(Nubank/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27105937216111.jpg?ims=328x\" />(Nubank/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://nubank.com.br/\" target=\"_blank\">&nbsp;Nubank&nbsp;</a></p>\r\n\r\n<p>Nesta posi&ccedil;&atilde;o pelo quarto ano consecutivo, o&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/238781-nubank-diz-investidores-devem-manter-acoes-mesmo-quedas.htm\" target=\"_blank\">Nubank</a>&nbsp;foi fundado em 2013 pelos CEOs David V&eacute;lez e Cristina Junqueira, que dividem suas opera&ccedil;&otilde;es no Brasil e em outros territ&oacute;rios globais. A sede do banco digital est&aacute; localizada no bairro Pinheiros, em S&atilde;o Paulo. O &ldquo;roxinho&rdquo;, como tamb&eacute;m &eacute; chamado o&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/225545-nubank-veja-criar-cartao-virtual.htm\" target=\"_blank\">cart&atilde;o pessoal da institui&ccedil;&atilde;o</a>, se tornou bastante popular entre os consumidores com o passar dos anos, justamente por todos os seus benef&iacute;cios digitais.</p>\r\n\r\n<h2>2. Banco Inter</h2>\r\n\r\n<p><img alt=\"(Banco Inter/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27110130669112.jpg?ims=328x\" />(Banco Inter/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/220367-banco-inter-oferece-10-mil-bolsas-gratuitas-devs-android.htm\" target=\"_blank\">&nbsp;Banco Inter&nbsp;</a></p>\r\n\r\n<p>Na sequ&ecirc;ncia, um outro banco digital que mant&eacute;m sua posi&ccedil;&atilde;o no ranking com rela&ccedil;&atilde;o ao ano anterior. O&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/231997-banco-inter-atualiza-app-correntistas-varias-novidades.htm\" target=\"_blank\">Inter</a>&nbsp;foi fundado em 1994, quando era chamado de Banco Intermedium. Jo&atilde;o Vitor Menin &eacute; o seu atual presidente, atuando na sede de Belo Horizonte, em Minas Gerais.</p>\r\n\r\n<h2>3. C6 Bank</h2>\r\n\r\n<p><img alt=\"(C6 Bank/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27110621232121.jpg?ims=328x\" />(C6 Bank/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://blog.c6bank.com.br/c6-bank-recebe-premio-de-melhor-marketing-financeiro-no-forum-lide\" target=\"_blank\">&nbsp;C6 Bank&nbsp;</a></p>\r\n\r\n<p>Em terceiro lugar no ranking, h&aacute; o&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/238694-c6-bank-libera-seguro-c6-conta-clientes-2-meses.htm\" target=\"_blank\">C6 Bank</a>, que foi fundado h&aacute; quatro anos. Seu presidente, Marcelo Kalim, atua em S&atilde;o Paulo, com o slogan &ldquo;&Eacute; da sua vida&rdquo;. Assim como os bancos digitais anteriores, a institui&ccedil;&atilde;o n&atilde;o possui ag&ecirc;ncias f&iacute;sicas e seu atendimento ocorre de forma totalmente online.</p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.tecmundo.com.br/mercado/238694-c6-bank-libera-seguro-c6-conta-clientes-2-meses.htm\" target=\"_blank\">C6 Bank libera Seguro C6 Conta para todos os clientes por 2 meses</a></strong></li>\r\n</ul>\r\n\r\n<h2>4. Sicredi</h2>\r\n\r\n<p><img alt=\"(Sicredi/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27110800466126.jpg?ims=328x\" />(Sicredi/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.sicredi.com.br/site/blog/entenda-diferencas-entre-cooperativa-de-credito-e-os-bancos-comerciais/\" target=\"_blank\">&nbsp;Sicredi&nbsp;</a></p>\r\n\r\n<p>Esse &eacute; o primeiro banco mais antigo da lista que aparece em uma posi&ccedil;&atilde;o alta. O&nbsp;<a href=\"https://www.tecmundo.com.br/seguranca/137100-sicredi-investiga-ataque-hacker-vazamento-1-tb-dados-de-clientes.htm\" target=\"_blank\">Sicredi</a>&nbsp;foi fundado em 1902 e tem sede em Porto Alegre, no Rio Grande do Sul. Seu CEO &eacute; Jo&atilde;o Tavares, que, ao que tudo indica, conseguiu trabalhar em melhorias no &uacute;ltimo ano para subir tr&ecirc;s posi&ccedil;&otilde;es no ranking da Forbes.</p>\r\n\r\n<h2>5. PagBank</h2>\r\n\r\n<p><img alt=\"(PagSeguro/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111014544129.jpg?ims=328x\" />(PagSeguro/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://blog.pagseguro.uol.com.br/\" target=\"_blank\">&nbsp;PagSeguro&nbsp;</a></p>\r\n\r\n<p>O Top 5 se fecha com o&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/141454-pagseguro-lanca-conta-digital-gratis-pagbank-olho-desbancarizados.htm\" target=\"_blank\">PagBank</a>, que atua diretamente com a carteira digital do PagSeguro, ambos pertencentes ao grupo UOL. A funda&ccedil;&atilde;o ocorreu em 2006, tamb&eacute;m sendo sediado na capital paulista. Em 2021, a institui&ccedil;&atilde;o estava uma posi&ccedil;&atilde;o &agrave; frente e, portanto, caiu no ranking atual.</p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.tecmundo.com.br/produto/224600-pagphone-funciona-celular-maquininha-pagseguro.htm\" target=\"_blank\">PagPhone: como funciona o celular e maquininha do PagSeguro</a></strong></li>\r\n</ul>\r\n\r\n<h2>6. Neon</h2>\r\n\r\n<p><img alt=\"(Neon/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111132341130.jpg?ims=328x\" />(Neon/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://neon.com.br/aprenda/financas-pessoais/como-ser-aprovado-no-cartao-de-credito/\" target=\"_blank\">&nbsp;Neon&nbsp;</a></p>\r\n\r\n<p>Outro banco que tamb&eacute;m caiu uma posi&ccedil;&atilde;o foi o Neon. Fundado em 2016, seu presidente atual &eacute; Pedro Conrade, que atua na sede em S&atilde;o Paulo, embora tenha nascido anteriormente em Belo Horizonte (MG). Os cart&otilde;es da fintech s&atilde;o emitidos com a bandeira Visa em parceria direta com o Banco Votorantim &mdash; que n&atilde;o faz parte deste ranking.</p>\r\n\r\n<h2>7. Next</h2>\r\n\r\n<p><img alt=\"(Next/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111347982131.jpg?ims=328x\" />(Next/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://next.me/whatsnext\" target=\"_blank\">&nbsp;Next&nbsp;</a></p>\r\n\r\n<p>Trazendo o slogan: &quot;O banco digital que faz acontecer&quot;, o Next foi fundado em 2017 como um complemento ao Bradesco, que tamb&eacute;m estava disposto a entrar no mercado de fintechs. Com sede em S&atilde;o Paulo, seu CEO &eacute; Renato Ejnisman. A institui&ccedil;&atilde;o aparecia na sexta posi&ccedil;&atilde;o do ranking em 2021.</p>\r\n\r\n<h2>8. Ita&uacute;</h2>\r\n\r\n<p><img alt=\"(Reuters/Pilar Olivares/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111600576132.jpg?ims=328x\" />(Reuters/Pilar Olivares/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://exame.com/future-of-money/itau-comete-falha-com-pix-transfere-1-milhao-indevidamente-e-processa-bancos/\" target=\"_blank\">&nbsp;Reuters/Pilar Olivares&nbsp;</a></p>\r\n\r\n<p>Mantendo a posi&ccedil;&atilde;o de 2021, o&nbsp;<a href=\"https://www.tecmundo.com.br/mercado/238664-itau-abre-programa-capacitacao-400-vagas-tecnologia.htm\" target=\"_blank\">Ita&uacute;</a>&nbsp;foi fundado de forma oficial em 2008, a partir de uma fus&atilde;o com o Unibanco. Atualmente, seu presidente &eacute; Milton Maluhy Filho, que atua na cidade de S&atilde;o Paulo. Tamb&eacute;m segundo a Forbes, o banco em quest&atilde;o &eacute; o maior do Brasil.</p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.tecmundo.com.br/mercado/238861-itau-uber-xp-confira-450-vagas-tecnologia-estagios.htm\" target=\"_blank\">Ita&uacute;, Uber, XP: confira mais de 450 vagas em tecnologia e est&aacute;gios</a></strong></li>\r\n</ul>\r\n\r\n<h2>9. Banco BMG</h2>\r\n\r\n<p><img alt=\"(BGM/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111715404133.jpg?ims=328x\" />(BGM/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.bancobmg.com.br/blog/cartao-de-credito-consignado/como-ler-a-fatura-do-meu-bmg-card/\" target=\"_blank\">&nbsp;BGM&nbsp;</a></p>\r\n\r\n<p>O BGM tamb&eacute;m manteve sua posi&ccedil;&atilde;o com rela&ccedil;&atilde;o ao ranking passado. Fundado em 1930 pelo m&eacute;dico e empres&aacute;rio Ant&ocirc;nio Mour&atilde;o Guimar&atilde;es, sua presid&ecirc;ncia &eacute; administrada por Ana Karina Bortoni Dias. A sede est&aacute; localizada em S&atilde;o Paulo.</p>\r\n\r\n<h2>10. Santander</h2>\r\n\r\n<p><img alt=\"(Wikipédia/Junius/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/27/27111810529136.jpg?ims=328x\" />(Wikip&eacute;dia/Junius/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://pt.m.wikipedia.org/wiki/Ficheiro:Banco_Santander.jpg\" target=\"_blank\">&nbsp;Wikip&eacute;dia/Junius&nbsp;</a></p>\r\n\r\n<p>Em 2021, o Santander aparecia na 11&ordf; posi&ccedil;&atilde;o. Dessa maneira, o banco conseguiu subir no ranking. Sua sede oficial est&aacute; localizada na Espanha e, desse modo, seus CEOs s&atilde;o Jos&eacute; Antonio &Aacute;lvarez &Aacute;lvarez, na esfera mundial, e Mario Opice Le&atilde;o, que atua no Brasil.</p>\r\n', 'pexels-pixabay-270632.jpg', 'pexels-midory-pho-13672305.jpg', 'quais-sao-os-melhores-bancos-do-brasil-veja-top-10', '2022-05-29 22:48:53', '2022-10-25 22:29:54', 1, 'Quais são os melhores bancos do Brasil? Veja top 10!', 'Quais são os melhores bancos do Brasil? Veja top 10!', 3, NULL, 'pexels-midory-pho-13672305.jpg'),
(8, 1, 1, 'COMPARTILHE Aplicativo espião: o que é stalkerware e spouserware?', '2022-05-29', '<p>A&nbsp;<a href=\"https://www.tecmundo.com.br/ciberseguranca-hp/226854-conheca-proteja-ameacas-ciberneticas-redes-domesticas.htm\" target=\"_blank\"><strong>seguran&ccedil;a&nbsp;</strong><strong>digital</strong></a><strong>&nbsp;</strong>&eacute; um dos t&oacute;picos que merecem nossa aten&ccedil;&atilde;o nos &uacute;ltimos tempos, sobretudo pela&nbsp;<strong>evolu&ccedil;&atilde;o tecnol&oacute;gica</strong>&nbsp;cada vez mais presente em nosso cotidiano. Nesse sentido, h&aacute; dois termos ligados a softwares que geram muita pol&ecirc;mica quando s&atilde;o discutidos:&nbsp;<strong>stalkerware&nbsp;</strong>e&nbsp;<strong>spouserware</strong>.</p>\r\n\r\n<p>Segundo dados da empresa de seguran&ccedil;a digital Kaspersky, 1 em cada 4 brasileiros&nbsp;<a href=\"https://www.tecmundo.com.br/seguranca/238779-1-cada-4-brasileiros-sendo-espionado-app-em-celular.htm\" target=\"_blank\">est&aacute; sendo espionado</a>&nbsp;ou j&aacute; foi monitorado por meio de tecnologias como apps. Ou seja, o alcance dos softwares espi&otilde;es &eacute; bastante amplo e pode ser que at&eacute; mesmo voc&ecirc;, leitor ou leitora, j&aacute; tenha sofrido com impactos desse tipo de a&ccedil;&atilde;o.</p>\r\n\r\n<p>Quer saber a&nbsp;<strong>diferen&ccedil;a entre stalkerware e malware</strong>? Ent&atilde;o confira o texto completo com mais detalhes logo abaixo!</p>\r\n\r\n<h2>O que &eacute; Stalkerware?</h2>\r\n\r\n<p>Em linhas gerais, um stalkerware &eacute; um software desenvolvido para espionar outros usu&aacute;rios em seus dispositivos eletr&ocirc;nicos. De certa maneira, trata-se de um programa legal, licenciado para&nbsp;<a href=\"https://www.tecmundo.com.br/seguranca/231743-metaverso-reino-unido-convoca-meta-debater-controle-parental.htm\" target=\"_blank\">controle parental</a>, por exemplo. No entanto, h&aacute; outras problem&aacute;ticas envolvidas nesse caso que podem ser prejudiciais dependendo do cen&aacute;rio em que est&aacute; inserido.</p>\r\n\r\n<p>Um stalkerware se diferencia do spyware &mdash; software malicioso de mesma fun&ccedil;&atilde;o &mdash; justamente por levar em considera&ccedil;&atilde;o que o dispositivo a ser controlado concedeu uma autoriza&ccedil;&atilde;o f&iacute;sica para sua instala&ccedil;&atilde;o. Contando com sistemas profundos de sigilo e seguran&ccedil;a, esse software pode ficar oculto no aparelho. Portanto, caso a v&iacute;tima n&atilde;o saiba de sua exist&ecirc;ncia, ela nunca ir&aacute; notar seu funcionamento.</p>\r\n\r\n<p><img alt=\"(Shutterstock/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/26/26140654138348.jpg?ims=328x\" />(Shutterstock/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.shutterstock.com/\" target=\"_blank\">&nbsp;Shutterstock&nbsp;</a></p>\r\n\r\n<p>Um aplicativo de stalkerware tamb&eacute;m &eacute; capaz de se camuflar no dispositivo, como se fosse um app nativo para gerenciamento do sistema, sendo incapaz de ser desinstalado sem que o invasor tenha conhecimento da a&ccedil;&atilde;o.</p>\r\n\r\n<p>E embora seja legalmente comercializado pelas companhias em muitos territ&oacute;rios, softwares de stalkerware ainda s&atilde;o enquadrados dentro do&nbsp;<a href=\"https://www.tecmundo.com.br/seguranca/223145-cyberstalking-crime-perseguicao-meios-digitais.htm\" target=\"_blank\"><strong>Cyberstalking</strong></a>, um termo guarda-chuva para a persegui&ccedil;&atilde;o de indiv&iacute;duos por meio da&nbsp;<a href=\"https://www.tecmundo.com.br/tecnologia\" target=\"_blank\">tecnologia</a>.</p>\r\n\r\n<h2>O que &eacute; Spouseware?</h2>\r\n\r\n<p>Enquanto o Stalkerware pode designar todos os softwares criados para controle digital dos indiv&iacute;duos com autoriza&ccedil;&atilde;o f&iacute;sica de seus dispositivos, o Spouseware se encaixa dentro desse termo, sendo mais espec&iacute;fico para o uso de programas e aplicativos do g&ecirc;nero para controle ou persegui&ccedil;&atilde;o entre c&ocirc;njuges.</p>\r\n\r\n<p>Geralmente, motivados por desconfian&ccedil;as e suspeitas de trai&ccedil;&atilde;o, homens e mulheres de todas as idades acabam utilizando esse recurso para conseguir provas contra seus companheiros afetivos. No entanto, &eacute; interessante lembrar-se de que realizar o processo de instala&ccedil;&atilde;o de um stalkerware sem o consentimento das partes &eacute; ilegal em muitos pa&iacute;ses, pois continua tratando-se de Cyberstalking.</p>\r\n\r\n<p><img alt=\"(Shutterstock/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/26/26140657185349.jpg?ims=328x\" />(Shutterstock/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.shutterstock.com/\" target=\"_blank\">&nbsp;Shutterstock&nbsp;</a></p>\r\n\r\n<h2>O que um Stalkerware &eacute; capaz de visualizar?</h2>\r\n\r\n<p>Uma vez instalados no dispositivo da v&iacute;tima, esses aplicativos t&ecirc;m acesso a quase todos os seus movimentos no aparelho. &Eacute; poss&iacute;vel que as fotos, v&iacute;deos e outros arquivos sejam explorados, bem como todas as informa&ccedil;&otilde;es escritas e recebidas em apps de trocas de mensagens. Al&eacute;m disso, um Stalkerware &eacute; capaz de fazer capturas de tela, grava&ccedil;&atilde;o de v&iacute;deos e &aacute;udios de todas as naturezas.</p>\r\n\r\n<p>Caso o perseguidor seja malicioso, esse software pode ser um perigo, pois fornece informa&ccedil;&atilde;o de rastreio e localiza&ccedil;&atilde;o do dispositivo, intercepta mensagens vindas de SMS ou liga&ccedil;&otilde;es, al&eacute;m de transferir todos os dados para outros locais de f&aacute;cil manipula&ccedil;&atilde;o. Sendo assim, um Stalkerware pode construir provas falsas contra o indiv&iacute;duo invadido, colocando em risco sua conduta digital.</p>\r\n\r\n<h2>&Eacute; poss&iacute;vel detectar a presen&ccedil;a de um Stalkerware?</h2>\r\n\r\n<p>Muitas informa&ccedil;&otilde;es contidas aqui podem estar assustando algumas pessoas. Mas existem determinados sinais indicativos muito espec&iacute;ficos que acabam ajudando a detectar a presen&ccedil;a de um Stalkerware no aparelho.</p>\r\n\r\n<p>Um dos sinais de alerta para ficar atento est&aacute; ligado &agrave;s permiss&otilde;es do dispositivo. Verifique sempre quais aplicativos t&ecirc;m acesso &agrave; sua c&acirc;mera, microfone e localiza&ccedil;&atilde;o, por exemplo, desativando todos aqueles que considerar suspeitos.</p>\r\n\r\n<p><img alt=\"(Shutterstock/Reprodução)\" src=\"https://img.ibxk.com.br/2022/05/26/26140659592350.jpg?ims=328x\" />(Shutterstock/Reprodu&ccedil;&atilde;o)Fonte:&nbsp;<a href=\"https://www.shutterstock.com/\" target=\"_blank\">&nbsp;Shutterstock&nbsp;</a></p>\r\n\r\n<p>Monitorar o gasto de internet m&oacute;vel ou conex&atilde;o Wi-Fi com rela&ccedil;&atilde;o aos aplicativos instalados tamb&eacute;m pode ser crucial na descoberta de um software do g&ecirc;nero, sobretudo quando voc&ecirc; n&atilde;o utiliza determinados apps com tanta frequ&ecirc;ncia.</p>\r\n\r\n<p>Junto desses dois modos, a instala&ccedil;&atilde;o de antiv&iacute;rus tamb&eacute;m pode ser uma forma interessante de descobrir poss&iacute;veis invasores, pois esses programas, geralmente, detectam a presen&ccedil;a desses softwares.</p>\r\n\r\n<p>Gostou do conte&uacute;do? Ent&atilde;o continue ligado aqui no&nbsp;<a href=\"https://www.tecmundo.com.br/\" target=\"_blank\"><strong>TecMundo</strong></a>&nbsp;para saber mais sobre as tend&ecirc;ncias da tecnologia!</p>\r\n', 'pexels-christina-morillo-1181279.jpg', 'pexels-christina-morillo-1181279.jpg', 'compartilhe-aplicativo-espiao-o-que-e-stalkerware-e-spouserware', '2022-05-29 22:51:48', '2022-05-29 22:52:08', 1, 'COMPARTILHE Aplicativo espião: o que é stalkerware e spouserware?', 'COMPARTILHE Aplicativo espião: o que é stalkerware e spouserware?', NULL, NULL, NULL),
(9, 1, 4, 'Estudo usa vírus para destruir câncer em humanos pela primeira vez', '2022-05-29', '<p>Na &uacute;ltima ter&ccedil;a-feira (17), as empresas americanas de sa&uacute;de Imugene Limited e City of Hope anunciaram o in&iacute;cio do&nbsp;<strong>primeiro estudo experimental com humanos para testar um&nbsp;</strong><a href=\"https://www.tecmundo.com.br/ciencia/239098-cientistas-publicam-genoma-virus-causador-do-surto-variola-macacos.htm\" target=\"_blank\"><strong>v&iacute;rus</strong></a><strong>&nbsp;que pode destruir c&eacute;lulas cancer&iacute;genas no corpo</strong>. A primeira fase do ensaio cl&iacute;nico foi realizada e um paciente foi dosado com o v&iacute;rus&nbsp;<strong>CF33-hNIS (Vaxinia)</strong>, que j&aacute; demonstrou reduzir tumores de c&oacute;lon, p&acirc;ncreas, ov&aacute;rio, mama em outros testes realizados com animais.</p>\r\n\r\n<p>O CF33-hNIS &eacute; um v&iacute;rus oncol&iacute;tico, ou seja, &eacute; geneticamente modificado para ajudar o organismo a destruir c&eacute;lulas cancer&iacute;genas. Basicamente, ele entra no corpo e explode as c&eacute;lulas identificadas como cancer&iacute;genas, liberando part&iacute;culas virais que estimulam o sistema imunol&oacute;gico a continuar atacando outras c&eacute;lulas cancer&iacute;genas. A a&ccedil;&atilde;o do v&iacute;rus j&aacute; havia sido aprovada em animais, mas &eacute; a primeira vez que o estudo &eacute; realizado em humanos.</p>\r\n\r\n<p>A fase 1 do teste experimental fornecer&aacute; baixas doses do v&iacute;rus a pacientes com tumores s&oacute;lidos metast&aacute;ticos ou&nbsp;<a href=\"https://www.tecmundo.com.br/ciencia/238882-infertilidade-ligada-risco-cancer-mama-homens.htm\" target=\"_blank\">c&acirc;ncer</a>&nbsp;avan&ccedil;ado, contudo, eles j&aacute; devem ter realizado outras duas formas de tratamentos comuns. A aplica&ccedil;&atilde;o &eacute; realizada via intravenosa ou por inje&ccedil;&atilde;o diretamente nos tumores.</p>\r\n\r\n<p><img alt=\"O vírus foi modificado geneticamente para infectar e matar as células cancerígenas\" src=\"https://img.ibxk.com.br/2022/05/24/24115015018207.jpg?ims=328x\" />O v&iacute;rus foi modificado geneticamente para infectar e matar as c&eacute;lulas cancer&iacute;genasFonte:&nbsp;<a href=\"https://unsplash.com/photos/tGYrlchfObE\" target=\"_blank\">&nbsp;Unsplash&nbsp;</a></p>\r\n\r\n<h2>V&iacute;rus destruidor de c&acirc;ncer</h2>\r\n\r\n<p>&ldquo;Nossa pesquisa anterior demonstrou que os v&iacute;rus oncol&iacute;ticos podem estimular o sistema imunol&oacute;gico a responder e matar o c&acirc;ncer, bem como estimular o sistema imunol&oacute;gico a ser mais responsivo a outras imunoterapias, incluindo inibidores de checkpoints&rdquo;, disse o m&eacute;dico, professor e principal investigador do estudo, Daneng Li.</p>\r\n\r\n<p>Os pesquisadores preveem recrutar 100 pacientes em 10 locais de estudos selecionados nos Estados Unidos e na Austr&aacute;lia, onde operam as companhias City of Hope e Imugene Limited, respectivamente.</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.tecmundo.com.br/ciencia/238410-nova-linhagem-virus-dengue-detectada-brasil.htm\" target=\"_blank\"><strong>Nova linhagem do v&iacute;rus da dengue &eacute; detectada no Brasil</strong></a></li>\r\n</ul>\r\n\r\n<p>Ap&oacute;s o tratamento dos primeiros pacientes do estudo, o objetivo dos pesquisadores &eacute; combinar a aplica&ccedil;&atilde;o do v&iacute;rus com o medicamento pembrolizumab, que visa a melhorar a imunidade do sistema imunol&oacute;gico. Por enquanto, a pesquisa est&aacute; programada para durar aproximadamente 24 meses.</p>\r\n', 'pexels-christina-morillo-1181273.jpg', 'pexels-christina-morillo-1181273.jpg', 'estudo-usa-virus-para-destruir-cancer-em-humanos-pela-primeira-vez', '2022-05-29 22:56:40', '2022-05-29 22:56:40', 1, 'Estudo usa vírus para destruir câncer em humanos pela primeira vez', 'Estudo usa vírus para destruir câncer em humanos pela primeira vez', NULL, NULL, NULL),
(10, 1, 1, 'Stranger Things: quando estreia a parte 2 da 4ª temporada?', '2022-05-29', '<p>No mundo geek, ao falarmos em crossover, n&atilde;o tem para ningu&eacute;m: a&nbsp;<a href=\"https://www.tecmundo.com.br/marvel/\" target=\"_blank\">Marvel</a>&nbsp;&eacute; campe&atilde; no quesito &#39;conectar&#39; personagens e tramas em seus filmes e s&eacute;ries. Desde 2008, quando lan&ccedil;ou o primeiro&nbsp;<em>Homem de Ferr</em>o, o est&uacute;dio se preocupa em entrela&ccedil;ar todas as produ&ccedil;&otilde;es no que &eacute; conhecido como&nbsp;<a href=\"https://www.tecmundo.com.br/minha-serie/222377-marvel-multiverso-futuro-fases-4-5-mcu.htm\" target=\"_blank\">Marvel Cinematic Universe</a>&nbsp;(Universo Cinematogr&aacute;fico da Marvel, em portugu&ecirc;s).</p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://www.tecmundo.com.br/cultura-geek/231872-10-filmes-super-herois-mais-esperados-2022.htm\" target=\"_blank\">10 filmes de super-her&oacute;is mais esperados de 2022</a></strong></li>\r\n</ul>\r\n\r\n<p>Em meio a tantas produ&ccedil;&otilde;es do MCU, &eacute; comum que muitas pessoas se percam com a ordem cronol&oacute;gica dos acontecimentos vistos nas s&eacute;ries e filmes do est&uacute;dio. Se voc&ecirc; faz parte deste grupo, n&atilde;o se preocupe. Preparamos uma lista completa com a ordem cronol&oacute;gica de todos os filmes e s&eacute;ries que fazem parte do MCU.</p>\r\n\r\n<h2>Ordem cronol&oacute;gica dos filmes e s&eacute;ries da Marvel</h2>\r\n\r\n<p><strong>1.</strong>&nbsp;<em>Capit&atilde;o Am&eacute;rica: O Primeiro Vingador</em>&nbsp;(1943 - 1945)</p>\r\n\r\n<p><strong>2.</strong>&nbsp;<em>Capit&atilde; Marvel</em>&nbsp;(1995)</p>\r\n\r\n<p><strong>3.</strong>&nbsp;<em>O Incr&iacute;vel Hulk</em>&nbsp;(2005 - 2009)</p>\r\n\r\n<p><strong>4.</strong>&nbsp;<em>Homem de Ferro</em>&nbsp;(2009 - 2010)</p>\r\n\r\n<p><strong>5.</strong>&nbsp;<em>Homem de Ferro 2</em>&nbsp;(2011)</p>\r\n\r\n<p><strong>6.</strong>&nbsp;<em>Thor</em>&nbsp;(2011)</p>\r\n\r\n<p><strong>7.</strong>&nbsp;<em>Os Vingadores</em>&nbsp;(2012)</p>\r\n\r\n<p><strong>8.</strong>&nbsp;<em>Homem de Ferro 3</em>&nbsp;(2012)</p>\r\n\r\n<p><strong>9.</strong>&nbsp;<em>Thor: O Mundo Sombrio</em>&nbsp;(2013)</p>\r\n\r\n<p><strong>10.</strong>&nbsp;<em>Capit&atilde;o Am&eacute;rica: Soldado Invernal</em>&nbsp;(2014)</p>\r\n\r\n<p><strong>11.</strong>&nbsp;<em>Guardi&otilde;es da Gal&aacute;xia</em>&nbsp;(2014)</p>\r\n\r\n<p><strong>12.</strong>&nbsp;<em>Guardi&otilde;es da Gal&aacute;xia Vol.2</em>&nbsp;(2014)</p>\r\n\r\n<p><strong>13.</strong>&nbsp;<em>Vingadores: Era de Ultron</em>&nbsp;(2015)</p>\r\n\r\n<p><strong>14.</strong>&nbsp;<em>Homem-Formiga</em>&nbsp;(2015)</p>\r\n\r\n<p><strong>15.</strong>&nbsp;<em>Capit&atilde;o Am&eacute;rica: Guerra Civil</em>&nbsp;(2016)</p>\r\n\r\n<p><strong>16.</strong>&nbsp;<em>Pantera Negr</em>a (2016)</p>\r\n\r\n<p><strong>17.</strong><em>&nbsp;Homem-Aranha: De Volta ao Lar</em>&nbsp;(2016)</p>\r\n\r\n<p><strong>18.</strong>&nbsp;<em>Vi&uacute;va Negra</em>&nbsp;(2016)</p>\r\n\r\n<p><strong>19.</strong>&nbsp;<em>Doutor Estranho</em>&nbsp;(2016 a 2017)</p>\r\n\r\n<p><strong>20.</strong>&nbsp;<em>Thor: Ragnarok</em>&nbsp;(2017)</p>\r\n\r\n<p><strong>21.</strong>&nbsp;<em>Vingadores: Guerra Infinita</em>&nbsp;(2018)</p>\r\n\r\n<p><strong>22.</strong>&nbsp;<em>Homem-Formiga e a Vespa</em>&nbsp;(2018 - o filme termina com a Dizima&ccedil;&atilde;o de Thanos)</p>\r\n\r\n<p><strong>23.</strong>&nbsp;<em>Vingadores: Ultimato</em>&nbsp;(entre 2018 e 2023 na linha do tempo atual)</p>\r\n\r\n<p><strong>24.</strong>&nbsp;<em>Loki</em>&nbsp;(diferentes per&iacute;odos temporais, mas come&ccedil;a em 2012)</p>\r\n\r\n<p><strong>25.</strong>&nbsp;<em>WandaVision</em>&nbsp;(2023)</p>\r\n\r\n<p><strong>26.</strong>&nbsp;<em>Shang-Chi e a Lenda dos Dez An&eacute;is</em>&nbsp;(2023)</p>\r\n\r\n<p><strong>27.</strong>&nbsp;F<em>alc&atilde;o e o Soldado Invernal</em>&nbsp;(2024)</p>\r\n\r\n<p><strong>28.</strong>&nbsp;<em>Eternos</em>&nbsp;(2024)</p>\r\n\r\n<p><strong>29.</strong>&nbsp;<em>Homem-Aranha: Longe de Casa</em>&nbsp;(2024)</p>\r\n\r\n<p><strong>30.</strong>&nbsp;<em>Homem-Aranha: Sem Volta para Casa</em>&nbsp;(2024)</p>\r\n\r\n<p><strong>31.</strong>&nbsp;<em>Gavi&atilde;o Arqueiro</em>&nbsp;(2024)</p>\r\n\r\n<p><strong>32.</strong>&nbsp;<em>Doutor Estranho: No Multiverso da Loucura</em>&nbsp;(2024)</p>\r\n\r\n<p>S&eacute;ries como&nbsp;<em><a href=\"https://www.tecmundo.com.br/minha-serie/238139-cavaleiro-lua-2-temporada-o-que-esperar.htm\" target=\"_blank\">Cavaleiro da Lua</a></em>&nbsp;e&nbsp;<em><a href=\"https://www.tecmundo.com.br/marvel-s-what-if/\" target=\"_blank\">What If...?</a></em>&nbsp;n&atilde;o est&atilde;o diretamente inseridas na linha temporal que vimos nas s&eacute;ries do MCU at&eacute; o momento.</p>\r\n', 'pexels-andrew-neel-8347199.jpg', 'pexels-andrew-neel-8347199.jpg', 'stranger-things-quando-estreia-a-parte-2-da-4-temporada', '2022-05-29 22:58:19', '2022-10-25 22:11:08', 1, 'Stranger Things: quando estreia a parte 2 da 4ª temporada?', 'Stranger Things: quando estreia a parte 2 da 4ª temporada?', 4, NULL, NULL);

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
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `slug`, `created`, `modified`) VALUES
(1, 'Informatica', 'informatica', '2019-02-09 14:35:48', '2022-05-19 20:27:16'),
(3, 'Filmes Comedia', 'filmes-comedia', '2019-02-16 18:22:01', '2019-02-16 18:40:27'),
(4, 'Tecnologia', 'tecnologia', '2022-05-29 22:43:15', '2022-05-29 22:43:15'),
(5, 'Anime', 'anime', '2022-05-29 22:46:20', '2022-05-29 22:46:20');

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
  `modified` datetime DEFAULT NULL,
  `manutencao` tinyint(1) DEFAULT NULL,
  `nome_site` varchar(255) DEFAULT NULL,
  `logo_site` varchar(255) DEFAULT NULL,
  `favicon_site` varchar(255) DEFAULT NULL,
  `codigo_google_analytics` longtext,
  `codigo_facebook_pixel` longtext,
  `site_key` varchar(255) DEFAULT NULL,
  `secrete_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `configs`
--

INSERT INTO `configs` (`id`, `facebook`, `instagram`, `twitter`, `telefone`, `celular`, `endereco`, `created`, `modified`, `manutencao`, `nome_site`, `logo_site`, `favicon_site`, `codigo_google_analytics`, `codigo_facebook_pixel`, `site_key`, `secrete_key`) VALUES
(1, 'https://www.facebook.com/dudu18xb', 'https://www.instagram.com/dudu18xb', 'https://twitter.com/dudu18xb', '(44) 3632-1093', '(44)9 8442-8711', 'Avenida Parana, 640 , Casa Branca 87536-000 - Xambrê', '2019-03-02 21:08:14', '2019-03-02 21:08:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Despejando dados para a tabela `contato`
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
-- Despejando dados para a tabela `equipes`
--

INSERT INTO `equipes` (`id`, `nome`, `cargo`, `imagem`, `created`, `modified`, `status`) VALUES
(0, 'Filmes Comedia', 'adasdsadsad', 'dept_2.jpg', '2019-02-16 21:43:46', '2019-02-16 21:51:05', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `blogs_id` int(11) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `about_id` int(11) DEFAULT NULL,
  `descricao` text
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
-- Despejando dados para a tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `status`, `slug`, `meta_description`, `meta_keywords`, `created`, `modified`) VALUES
(1, 'Home', 1, '/home', 'Página de inicio do site ', 'Odontologia, Herrera, Umuarama, Parana', '2019-02-26 22:28:56', '2019-02-28 23:12:21'),
(2, 'Quem Somos', 1, '/quem-somos', 'Meta Description Pagina sobre quem Somos', 'Meta Keywords Pagina sobre quem Somos', '2019-02-28 22:59:38', '2019-02-28 23:11:05'),
(3, 'Serviços', 1, '/servicos', 'Pagina de Serviços prestados pela Odonto Herrera', 'Meta Keywords da pagina Odonto Herrera', '2019-02-28 23:17:01', '2019-02-28 23:17:01'),
(4, 'Blogs', 1, '/blogs', 'Pagina de blog para saber mais noticias sobre a Odonto Herrera', 'Meta Keywords, Pagina de blog para saber mais noticias sobre a Odonto Herrera', '2019-03-02 16:27:26', '2019-03-02 16:27:26'),
(5, 'Contato', 1, '/contato', 'Pagina de contato, para entrar em contato com a equipe da Odonto Herrera, temos o prazer de atendelo', 'Meta Keywords Pagina de contato, para entrar em contato com a equipe da Odonto Herrera, temos o prazer de atendelo', '2019-03-02 16:35:14', '2019-03-02 16:35:14'),
(6, 'Sobre Nos', 1, '/sobre-nos', 'Conheça nossa Empresa', 'Sobre, Nos', '2022-10-25 22:04:56', '2022-10-25 22:04:56');

-- --------------------------------------------------------

--
-- Estrutura para tabela `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20211124005308, 'NovosCamposconfig', '2022-10-25 21:56:19', '2022-10-25 21:56:20', 0),
(20220605172121, 'CriandoNovosCamposBlogs', '2022-10-25 21:56:20', '2022-10-25 21:56:21', 0),
(20220606030330, 'DescricaoBlog', '2022-10-25 21:56:21', '2022-10-25 21:56:21', 0);

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
-- Estrutura para tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
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
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `status`, `login`, `nome`, `role`, `password`, `photo`, `created`, `modified`) VALUES
(1, 1, 'admin', 'Administrador', 'admin', '$2y$10$kkGkoiaz0mxdmVNlU58LyuDGEOBd8BAU9X3heoG0vPQ7Rr6ljVuTe', 'pexels-andrea-piacquadio-842567.jpg', '2018-12-29 19:48:25', '2022-05-12 22:02:06');

--
-- Índices para tabelas despejadas
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
  ADD KEY `fk_blogs_categoria1_idx` (`categoria_id`),
  ADD KEY `tipo_id` (`tipo_id`);

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
-- Índices de tabela `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicos_categoriaservicos1_idx` (`categoriaservicos_id`);

--
-- Índices de tabela `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`),
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
