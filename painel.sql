-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jan-2017 às 17:38
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sultec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_answers`
--

CREATE TABLE `tb_answers` (
  `answer_cod` int(10) UNSIGNED NOT NULL,
  `client_cod` int(10) UNSIGNED DEFAULT NULL,
  `call_cod` int(10) UNSIGNED DEFAULT NULL,
  `answer_date` datetime DEFAULT NULL,
  `answer_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_answers`
--

INSERT INTO `tb_answers` (`answer_cod`, `client_cod`, `call_cod`, `answer_date`, `answer_text`) VALUES
(5, 8, 14, '2016-08-01 21:40:06', '&lt;p&gt;Estou com um problema.&lt;/p&gt;\r\n'),
(6, 3, 14, '2016-08-01 21:42:28', '&lt;p&gt;RESPONDENDO ao seu chamado!&lt;/p&gt;\r\n'),
(7, 8, 14, '2016-08-01 21:44:09', '&lt;p&gt;Eu ainda estou com o problema.&lt;/p&gt;\r\n'),
(8, 3, 14, '2016-08-01 21:47:48', '&lt;p&gt;Esta &amp;eacute; a resposta final.&lt;/p&gt;\r\n'),
(9, 8, 14, '2016-08-01 21:55:07', '&lt;p&gt;Ainda n&amp;atilde;o resolvido.&lt;/p&gt;\r\n'),
(10, 3, 14, '2016-08-01 21:56:32', '&lt;p&gt;Outra resposta.&lt;/p&gt;\r\n'),
(11, 8, 14, '2016-08-01 21:56:49', '&lt;p&gt;Respondendo a resposta.&lt;/p&gt;\r\n'),
(12, 3, 14, '2016-08-01 21:57:46', '&lt;p&gt;N&amp;atilde;o sei ent&amp;atilde;o.&lt;/p&gt;\r\n'),
(13, 8, 14, '2016-08-02 16:28:11', '&lt;p&gt;Ainda n&amp;atilde;o foi resolvido!&lt;/p&gt;\r\n'),
(14, 5, 15, '2016-08-29 03:59:34', '&lt;p&gt;texto&lt;/p&gt;\r\n'),
(15, 5, 16, '2016-08-29 04:06:28', ''),
(16, 5, 17, '2016-08-29 04:15:28', '&lt;p&gt;Mais outro&lt;/p&gt;\r\n'),
(17, 3, 17, '2016-08-29 04:16:44', '&lt;p&gt;Respondendo ao seu terceiro chamado Cliente pasta!&lt;/p&gt;\r\n'),
(18, 5, 17, '2016-08-29 04:18:34', '&lt;p&gt;Esta &amp;eacute; a r&amp;eacute;plica Sr. Admin&lt;/p&gt;\r\n'),
(19, 3, 17, '2016-08-29 04:19:22', '&lt;p&gt;Ent&amp;atilde;o aqui est&amp;aacute; a tr&amp;eacute;plica.&lt;/p&gt;\r\n'),
(20, 3, 16, '2016-08-29 04:19:36', '&lt;p&gt;Resposta!&lt;/p&gt;\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_calls`
--

CREATE TABLE `tb_calls` (
  `call_cod` int(10) UNSIGNED NOT NULL,
  `tb_clients_client_cod` int(10) UNSIGNED NOT NULL,
  `call_subject` varchar(255) DEFAULT NULL,
  `call_status` varchar(10) DEFAULT 'answered',
  `call_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_calls`
--

INSERT INTO `tb_calls` (`call_cod`, `tb_clients_client_cod`, `call_subject`, `call_status`, `call_date`) VALUES
(14, 8, 'Novo Chamado', 'closed', '2016-08-01 21:40:06'),
(15, 5, '', 'waiting', '2016-08-29 03:59:34'),
(16, 5, 'Outro Chamado aberto pelo CLIENTE PASTA', 'answered', '2016-08-29 04:06:28'),
(17, 5, 'Terceiro chamado do Cliente Pasta', 'answered', '2016-08-29 04:15:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clients`
--

CREATE TABLE `tb_clients` (
  `client_cod` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(150) NOT NULL,
  `client_email` varchar(150) NOT NULL,
  `client_type` varchar(5) NOT NULL DEFAULT 'user',
  `client_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_clients`
--

INSERT INTO `tb_clients` (`client_cod`, `client_name`, `client_email`, `client_type`, `client_pass`) VALUES
(1, 'Admin', 'admin2@admin.com.br', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Admin', 'admin@admin.com.br', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Cliente Teste', 'cliente@cliente.com.br', 'user', '25d55ad283aa400af464c76d713c07ad'),
(8, 'Cliente Pasta', 'pasta@pasta.com.br', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Teste de Cliente', 'email@cliente.com.br', 'user', 'ce85bf9881b52a531083b31b21767501'),
(10, 'Outro Cliente', 'cliente@email.com.br', 'user', '6c8bac1d8c4455068b9277dbf2024cbb'),
(11, 'Willian', 'willian@willian.com.br', 'user', '6c4ee85ff749b114211a5517ac76ac09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_covers`
--

CREATE TABLE `tb_covers` (
  `cover_cod` int(10) UNSIGNED NOT NULL,
  `tb_news_news_cod` int(10) UNSIGNED NOT NULL,
  `cover_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_depositions`
--

CREATE TABLE `tb_depositions` (
  `deposition_cod` int(10) UNSIGNED NOT NULL,
  `deposition_text` text,
  `deposition_name` varchar(150) DEFAULT NULL,
  `deposition_role` varchar(150) DEFAULT NULL,
  `deposition_media` varchar(255) DEFAULT NULL,
  `deposition_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_depositions`
--

INSERT INTO `tb_depositions` (`deposition_cod`, `deposition_text`, `deposition_name`, `deposition_role`, `deposition_media`, `deposition_type`) VALUES
(8, 'Estamos iniciando essa parceria com a Sultec, buscando sempre essa conexÃ£o que Ã© agregar ao nosso dia-a-dia, ao nosso trabalho, mais e mais INFORMAÃ‡ÃƒO. Pois isso somos clientes do Grupo Sultec.', 'Douglas e LaÃ­sa', 'ProprietÃ¡rios Cia do Sono', '', ''),
(9, 'NÃ³s temos tranquilidade dessa parceria com o Grupo Sultec, que tem sido de extrema confianÃ§a, um aliado nos momentos das decisÃµes. O Grupo Sultec representa este amparo e assistÃªncia, nos trazendo INFORMAÃ‡ÃƒO em todas as Ã¡reas.', 'JosÃ© AntÃ´nio', 'ProprietÃ¡rio da empresa KairÃ³s RepresentaÃ§Ãµes', '<iframe width="100%" height="315" src="https://www.youtube.com/embed/cj_pAUzaa6g" frameborder="0" allowfullscreen></iframe>', 'video'),
(10, '', 'Felipe Azambuja e Gian Lucena', 'ProprietÃ¡rios da AL Corretora de Seguros', 'depositions/felipe_azambuja_e_gian_lucenaproprietarios_da_al_corretora_de_seguros.jpg', 'image'),
(11, '', 'Jair e Carmem Thurow', 'ProprietÃ¡rios do Mercado e Padaria Cantinho do PÃ£o', 'depositions/jair_e_carmem_thurowproprietarios_do_mercado_e_padaria_cantinho_do_pao.jpg', 'image'),
(12, '', 'Genesi Santos', 'ProprietÃ¡ria do mini mercado Big Bom', 'depositions/genesi_santosproprietaria_do_mini_mercado_big_bom.jpg', 'image'),
(13, '', 'Daniela Barbosa', 'ProprietÃ¡ria da empresa Daniela Cortinas e Persianas', 'depositions/daniela_barbosaproprietaria_da_empresa_daniela_cortinas_e_persianas.jpg', 'image');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_downloads`
--

CREATE TABLE `tb_downloads` (
  `download_cod` int(10) UNSIGNED NOT NULL,
  `tb_folders_tb_clients_client_cod` int(10) UNSIGNED NOT NULL,
  `tb_folders_folder_cod` int(10) UNSIGNED NOT NULL,
  `download_file` varchar(150) NOT NULL,
  `download_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_downloads`
--

INSERT INTO `tb_downloads` (`download_cod`, `tb_folders_tb_clients_client_cod`, `tb_folders_folder_cod`, `download_file`, `download_date`) VALUES
(2, 8, 1, 'sultec.sql', '2016-07-11 22:04:33'),
(3, 9, 2, 'ftp.txt', '2016-07-29 13:59:52'),
(4, 9, 2, 'ftp.txt', '2016-07-29 14:16:50'),
(5, 9, 2, 'ftp.txt', '2016-07-29 14:25:14'),
(6, 9, 2, 'ftp.txt', '2016-07-29 14:25:55'),
(7, 9, 2, 'ftp.txt', '2016-07-29 14:25:57'),
(8, 9, 2, 'ftp.txt', '2016-07-29 14:26:14'),
(9, 9, 2, 'ftp.txt', '2016-07-29 14:27:01'),
(10, 9, 2, 'junho.pdf', '2016-07-29 14:27:59'),
(11, 9, 2, 'Arquivo.docx', '2016-07-29 14:35:33'),
(12, 10, 3, 'Arquivo.docx', '2016-07-29 16:30:50'),
(13, 11, 4, 'Arquivo.docx', '2016-08-27 00:49:13'),
(14, 11, 4, 'Cao_', '2016-08-27 00:49:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_folders`
--

CREATE TABLE `tb_folders` (
  `folder_cod` int(10) UNSIGNED NOT NULL,
  `tb_clients_client_cod` int(10) UNSIGNED NOT NULL,
  `folder_name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_folders`
--

INSERT INTO `tb_folders` (`folder_cod`, `tb_clients_client_cod`, `folder_name`) VALUES
(1, 8, 'cliente_pasta3'),
(2, 9, 'teste_de_cliente1'),
(3, 10, 'outro_cliente1'),
(4, 11, 'willian1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_news`
--

CREATE TABLE `tb_news` (
  `news_cod` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(150) DEFAULT NULL,
  `news_date` datetime DEFAULT NULL,
  `news_cover` varchar(250) DEFAULT NULL,
  `news_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_news`
--

INSERT INTO `tb_news` (`news_cod`, `news_title`, `news_date`, `news_cover`, `news_text`) VALUES
(1, 'Primeira NotÃ­cia', '2016-07-08 22:21:57', NULL, '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa a imperdiet facilisis. Pellentesque ac feugiat enim. Nam lobortis aliquet nibh, ac suscipit sapien elementum a. Etiam et elementum velit, sit amet tincidunt ex. Donec hendrerit, nunc ut ornare maximus, sem arcu egestas nisl, et suscipit mi magna quis odio. Aliquam eu metus nec nulla elementum aliquam. Nullam volutpat blandit felis quis rhoncus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Etiam vestibulum scelerisque porttitor. Fusce non maximus leo. Vivamus sit amet vestibulum tellus, eget posuere nulla. Cras sit amet ante mattis, accumsan sapien id, iaculis lectus. Proin et mauris hendrerit, varius dolor ut, pulvinar mauris. Duis nibh tellus, dignissim sodales purus quis, pretium maximus mauris. In vel lobortis lacus, eget consequat quam. Aenean ornare laoreet vehicula. Sed dictum leo ut dolor ultrices porta. Phasellus molestie mauris suscipit diam feugiat, a malesuada augue dictum. Quisque sem dolor, aliquam consequat hendrerit a, posuere eget massa. In ligula lacus, lobortis vitae nisl maximus, fringilla semper velit. Proin ut neque blandit, finibus risus sed, euismod tellus. Donec scelerisque sapien augue, vitae tristique arcu gravida sed.&lt;/p&gt;\r\n'),
(2, 'Segunda NotÃ­cia', '2016-07-29 13:56:32', 'news_2.jpg', '&lt;p&gt;Texto da Seguda Not&amp;iacute;cia.&lt;/p&gt;\r\n'),
(3, 'Terceira Noticia', '2016-07-29 16:25:22', NULL, '&lt;p&gt;Texto da not&amp;iacute;cia.&lt;/p&gt;\r\n'),
(4, 'O que esperar da reforma do Pis/Confins?', '2016-08-04 22:43:58', NULL, '&lt;p&gt;Primeiramente, &amp;eacute; v&amp;aacute;lido lembrar que o PIS (Programa de Integra&amp;ccedil;&amp;atilde;o Social) e a COFINS (Contribui&amp;ccedil;&amp;atilde;o para o Financiamento da Seguridade Social) recaem sobre a mesma base de c&amp;aacute;lculo e s&amp;atilde;o de car&amp;aacute;ter social. Ent&amp;atilde;o, a unifica&amp;ccedil;&amp;atilde;o no pagamento de tributo &amp;eacute; sempre muito bem-vinda, haja vista o exemplo do SIMPLES NACIONAL, em que as empresas, numa &amp;uacute;nica guia de arrecada&amp;ccedil;&amp;atilde;o (DAS), recolhem diferentes tributos que, posteriormente, s&amp;atilde;o redirecionados para os &amp;oacute;rg&amp;atilde;os p&amp;uacute;blicos espec&amp;iacute;ficos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para o PIS, devemos entender que financia o capital do Banco Nacional de Desenvolvimento &amp;ndash; BNDES e o Fundo de Amparo ao Trabalhador (FAT). J&amp;aacute; a COFINS financia a Seguridade Social &amp;ndash; sa&amp;uacute;de, assist&amp;ecirc;ncia social e previd&amp;ecirc;ncia social.&lt;/p&gt;\r\n\r\n&lt;p&gt;Feito este introito, &amp;eacute; importante salientar que o governo pretende, num primeiro momento, apresentar a reforma isolada como forma de &amp;ldquo;teste&amp;rdquo;, come&amp;ccedil;ando pelo PIS. E, segundo a Receita Federal, essa reforma gradual do PIS servir&amp;aacute; como &amp;ldquo;per&amp;iacute;odo de avalia&amp;ccedil;&amp;atilde;o das novas regras&amp;rdquo;, inclusive quanto &amp;agrave; calibragem de al&amp;iacute;quotas, evitando perdas e ganhos de arrecada&amp;ccedil;&amp;atilde;o em rela&amp;ccedil;&amp;atilde;o &amp;agrave; legisla&amp;ccedil;&amp;atilde;o atual, al&amp;eacute;m de permitir outros ajustes que mostrem ser necess&amp;aacute;rios ou convenientes.&lt;/p&gt;\r\n\r\n&lt;p&gt;De acordo com a Receita Federal, n&amp;atilde;o h&amp;aacute; uma &amp;uacute;nica e principal mudan&amp;ccedil;a, sen&amp;atilde;o quatro principais aspectos a serem mudados/alterados: simplifica&amp;ccedil;&amp;atilde;o no recolhimento, neutralidade econ&amp;ocirc;mica, ajustamento de regimes diferenciados (reduzir ou eliminar incentivos a determinados setores) e isonomia no tratamento de pequenas empresas. Isso caracteriza uma esp&amp;eacute;cie de tributo sobre o valor agregado em que as empresas se creditam para abatimentos na compra de insumos e mat&amp;eacute;ria prima.&lt;/p&gt;\r\n\r\n&lt;p&gt;Esta nova proposta pode ser vista como ben&amp;eacute;fica, desde que as al&amp;iacute;quotas sejam coesas, principalmente pela diferencia&amp;ccedil;&amp;atilde;o que poder&amp;aacute; existir em setores de bens e servi&amp;ccedil;os. Isso porque a proposta prev&amp;ecirc; um valor menor de al&amp;iacute;quotas para setores como educa&amp;ccedil;&amp;atilde;o, sa&amp;uacute;de, tecnologia da informa&amp;ccedil;&amp;atilde;o, entre outros.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para os setores de constru&amp;ccedil;&amp;atilde;o civil, hotelaria, ag&amp;ecirc;ncias de viagens e outros, as al&amp;iacute;quotas ser&amp;atilde;o intermedi&amp;aacute;rias. J&amp;aacute; para os setores farmac&amp;ecirc;uticos, de ve&amp;iacute;culos e autope&amp;ccedil;as continuar&amp;atilde;o com regime diferenciado.&lt;/p&gt;\r\n\r\n&lt;p&gt;Hoje, o processo acontece da seguinte maneira: a cobran&amp;ccedil;a &amp;eacute; realizada de forma diferenciada para as empresas que operam no lucro real ou no lucro presumido, al&amp;eacute;m daquelas que est&amp;atilde;o cadastradas no Programa do SIMPLES NACIONAL.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para as empresas que operam pelo lucro real (ind&amp;uacute;strias, por exemplo) s&amp;atilde;o deduzidas al&amp;iacute;quotas de 1,65% do PIS e 7,6% da COFINS, totalizando 9,25%, e pelo sistema n&amp;atilde;o-cumulativo, conseguem deduzir do tributo a pagar o que j&amp;aacute; foi pago pelos fornecedores, ent&amp;atilde;o, com redu&amp;ccedil;&amp;otilde;es em custos, despesas e encargos.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para as empresas que operam no lucro presumido (maioria das empresas de servi&amp;ccedil;os, por exemplo) pagam al&amp;iacute;quotas de 0,65% do PIS e 3% da COFINS, num total de 3,65% sobre a receita operacional bruta (faturamento) e no sistema cumulativo.&lt;/p&gt;\r\n\r\n&lt;p&gt;As empresas que est&amp;atilde;o cadastradas no SIMPLES NACIONAL arrecadam de forma &amp;uacute;nica toda a carga tribut&amp;aacute;ria existente e com al&amp;iacute;quotas reduzidas. Hoje, a al&amp;iacute;quota para estas empresas &amp;eacute; de 0,57% e permanecer&amp;aacute; esse mesmo percentual sobre o faturamento bruto.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para o novo sistema do PIS, o recolhimento ser&amp;aacute; pelo regime n&amp;atilde;o-cumulativo, o que possibilitar&amp;aacute; o cr&amp;eacute;dito mais amplo de desconto, por exemplo, de produtos intang&amp;iacute;veis. Ademais, para alguns bens adquiridos poder&amp;atilde;o se beneficiar com abatimento, por exemplo, no material de escrit&amp;oacute;rio adquirido por empresas de servi&amp;ccedil;os.&lt;/p&gt;\r\n\r\n&lt;p&gt;E a ado&amp;ccedil;&amp;atilde;o das regras sobre custos e despesas ser&amp;aacute; a mesma utilizada para custos e despesas dedut&amp;iacute;veis para fins de Imposto de Renda Pessoa Jur&amp;iacute;dica - IRPJ. J&amp;aacute; as empresas do SIMPLES poder&amp;atilde;o gerar cr&amp;eacute;dito para seus clientes, independente do regime tribut&amp;aacute;rio em que estiver sendo regida.&lt;/p&gt;\r\n\r\n&lt;p&gt;H&amp;aacute; ainda regimes diferenciados de recolhimento para institui&amp;ccedil;&amp;otilde;es financeiras, entidades sem fins lucrativos, empresas de fomento comercial, e tamb&amp;eacute;m recolhimentos nos diferenciados nos casos de substitui&amp;ccedil;&amp;otilde;es tribut&amp;aacute;rias, al&amp;iacute;quotas reduzidas, al&amp;iacute;quotas concentradas, ou seja, uma complexidade de normas a que os contribuintes devem estar atentos. Caso contr&amp;aacute;rio, se tornar&amp;atilde;o inadimplentes junto ao Fisco por desconhecimento do emaranhado e calamitoso sistema tribut&amp;aacute;rio do PIS/COFINS.&lt;/p&gt;\r\n'),
(5, 'A nova fase do SPED Fiscal para as empresas: Bloco K', '2016-08-04 22:45:40', NULL, '&lt;p&gt;Estamos acompanhando a obrigatoriedade do Bloco K no &amp;acirc;mbito do SPED, institu&amp;iacute;da pelo Governo Federal, atrav&amp;eacute;s do Decreto 6.022/2007, para estabelecimentos industriais, ou a eles equiparados, e atacadistas. Para essas empresas, ser&amp;aacute; obrigat&amp;oacute;ria a escritura&amp;ccedil;&amp;atilde;o do Bloco K no SPED Fiscal, a partir de janeiro de 2017, conforme Ajuste Sinief n&amp;ordm; 8, de outubro de 2015, contendo as informa&amp;ccedil;&amp;otilde;es de movimenta&amp;ccedil;&amp;atilde;o de estoques e da produ&amp;ccedil;&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;Inicialmente, todas as ind&amp;uacute;strias estariam obrigadas a apresentar o Bloco K a partir de 1&amp;ordm; de janeiro de 2016. Entretanto, esse prazo ter&amp;aacute; de ser observado somente pelas empresas com faturamento anual igual ou superior a R$ 300 milh&amp;otilde;es e pelas pessoas jur&amp;iacute;dicas habilitadas no Regime Aduaneiro Especial de Entreposto Industrial sob Controle Informatizado (Recof).&lt;/p&gt;\r\n\r\n&lt;p&gt;A nova regra ainda determina que as ind&amp;uacute;strias com faturamento igual ou superior a R$ 78 milh&amp;otilde;es ficar&amp;atilde;o obrigadas ao Bloco K somente a partir de 1&amp;ordm; de janeiro de 2018. Para outras empresas e comerciantes atacadistas, a exig&amp;ecirc;ncia valer&amp;aacute; a partir de 1&amp;ordm; de janeiro de 2019.&lt;/p&gt;\r\n\r\n&lt;p&gt;Como toda novidade cont&amp;aacute;bil gera um pouco de preocupa&amp;ccedil;&amp;atilde;o por parte das empresas, diante da demanda de responsabilidades e das penalidades envolvidas, &amp;eacute; indispens&amp;aacute;vel se atualizar sobre os processos que ser&amp;atilde;o informados e as caracter&amp;iacute;sticas que dever&amp;atilde;o ser aplicadas ao Bloco K. Em caso de omiss&amp;atilde;o de informa&amp;ccedil;&amp;otilde;es em meio magn&amp;eacute;tico ou a sua entrega em condi&amp;ccedil;&amp;otilde;es que impossibilitem a leitura e tratamento e/ou com dados incompletos, correspondente ao controle de estoque e/ou registro de invent&amp;aacute;rio, a multa &amp;eacute; o equivalente a 1% do valor do estoque no final do per&amp;iacute;odo conforme prev&amp;ecirc; o artigo 527, inciso VIII &amp;ldquo;Z&amp;rdquo; do RICMS/SP.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mas, o que realmente ser&amp;aacute; mudado com as novas informa&amp;ccedil;&amp;otilde;es do Bloco K?&lt;/p&gt;\r\n\r\n&lt;p&gt;A atua&amp;ccedil;&amp;atilde;o da fiscaliza&amp;ccedil;&amp;atilde;o passar&amp;aacute; a ter um amplo acesso com as novas informa&amp;ccedil;&amp;otilde;es das empresas, facilitando as informa&amp;ccedil;&amp;otilde;es de cruzamento de saldos com toda a parte de invent&amp;aacute;rio da companhia.&lt;/p&gt;\r\n\r\n&lt;p&gt;A Receita Federal do Brasil ter&amp;aacute; registradas no Bloco K as quantidades produzidas a partir das informa&amp;ccedil;&amp;otilde;es do estoque das empresas, contemplando os insumos adquiridos em cada opera&amp;ccedil;&amp;atilde;o de produto acabado, a proje&amp;ccedil;&amp;atilde;o de estoque de mat&amp;eacute;ria-prima e de produto acabado, e ainda, informa&amp;ccedil;&amp;otilde;es de industrializa&amp;ccedil;&amp;atilde;o efetuada por terceiros.&lt;/p&gt;\r\n\r\n&lt;p&gt;A gest&amp;atilde;o da empresa e os seus controles de estoque ter&amp;atilde;o a oportunidade de se aperfei&amp;ccedil;oar, j&amp;aacute; que a nova exig&amp;ecirc;ncia deve obrigar o contribuinte a aprimor&amp;aacute;-los.&lt;/p&gt;\r\n\r\n&lt;p&gt;A produ&amp;ccedil;&amp;atilde;o dever&amp;aacute; abrir informa&amp;ccedil;&amp;otilde;es sigilosas, o que exige aten&amp;ccedil;&amp;atilde;o, caso a caso. A ficha t&amp;eacute;cnica padronizada, registrada no Bloco K, por exemplo, dever&amp;aacute; informar o consumo espec&amp;iacute;fico padronizado e a perda normal para se produzir uma unidade de produto.&lt;/p&gt;\r\n\r\n&lt;p&gt;A multa pelo n&amp;atilde;o fornecimento de informa&amp;ccedil;&amp;otilde;es relacionadas ao Bloco K ou sua entrega com dados incompletos pode chegar a 1% do valor total do estoque no per&amp;iacute;odo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Resumindo, o Bloco K est&amp;aacute; gerando riscos, desafios e oportunidades para as empresas, que a partir de ent&amp;atilde;o, precisar&amp;atilde;o elaborar um planejamento de qualifica&amp;ccedil;&amp;atilde;o para a equipe de profissionais respons&amp;aacute;vel pelas &amp;aacute;reas fiscal e cont&amp;aacute;bil.&lt;/p&gt;\r\n'),
(6, 'Governo faz pente-fino em desoneraÃ§Ãµes', '2016-08-04 22:47:49', NULL, '&lt;p&gt;A equipe econ&amp;ocirc;mica est&amp;aacute; passando um pente-fino nas desonera&amp;ccedil;&amp;otilde;es tribut&amp;aacute;rias para tentar cobrir os R$ 55 bilh&amp;otilde;es que faltam para o cumprimento da meta fiscal de 2017. Com um universo de desonera&amp;ccedil;&amp;otilde;es superior a R$ 271 bilh&amp;otilde;es em 2016, o governo pretende come&amp;ccedil;ar a an&amp;aacute;lise pelos regimes especiais de tributa&amp;ccedil;&amp;atilde;o. Est&amp;atilde;o na mira os programas de incentivos que geraram pouco resultado. Mas o trabalho n&amp;atilde;o ser&amp;aacute; f&amp;aacute;cil, j&amp;aacute; que a maioria das mudan&amp;ccedil;as depende de aprova&amp;ccedil;&amp;atilde;o pelo Congresso.&lt;/p&gt;\r\n\r\n&lt;p&gt;Entre os atingidos devem estar os regimes que ajudam no controle de pre&amp;ccedil;os, mas que acabaram aumentando a margem de lucro de pequenos grupos de empresas. O governo entende que esse &amp;eacute; um tipo de desonera&amp;ccedil;&amp;atilde;o que, no longo prazo, distorce o valor dos produtos. &amp;ldquo;Benef&amp;iacute;cios com o objetivo de conter os pre&amp;ccedil;os d&amp;atilde;o uma ideia falsa de justi&amp;ccedil;a, porque impactam da mesma maneira o consumo de ricos e pobres. Muitas vezes, distribuir um produto para uma classe da popula&amp;ccedil;&amp;atilde;o d&amp;aacute; mais resultado do que abrir m&amp;atilde;o da arrecada&amp;ccedil;&amp;atilde;o do tributo para todos&amp;rdquo;, afirmou uma fonte.&lt;/p&gt;\r\n\r\n&lt;p&gt;Na &amp;aacute;rea econ&amp;ocirc;mica, a avalia&amp;ccedil;&amp;atilde;o &amp;eacute; que a recupera&amp;ccedil;&amp;atilde;o das receitas tribut&amp;aacute;rias e as receitas a serem obtidas com privatiza&amp;ccedil;&amp;otilde;es, concess&amp;otilde;es e securitiza&amp;ccedil;&amp;atilde;o n&amp;atilde;o ser&amp;atilde;o suficientes para garantir que as contas de 2017 fechem dentro da meta, fixada em um d&amp;eacute;ficit de R$ 139 bilh&amp;otilde;es. Por isso, ser&amp;aacute; necess&amp;aacute;rio acionar o chamado &amp;ldquo;plano C&amp;rdquo;, do ministro da Fazenda, Henrique Meirelles: aumento de impostos e contribui&amp;ccedil;&amp;otilde;es. &amp;Eacute; nessa linha que est&amp;aacute; a revis&amp;atilde;o dos programas que envolvem desonera&amp;ccedil;&amp;otilde;es.&lt;/p&gt;\r\n\r\n&lt;p&gt;O pr&amp;oacute;prio ministro voltou a admitir, ontem, no semin&amp;aacute;rio Pensamentos Ol&amp;iacute;mpicos sobre a Economia Brasileira, no Rio, que poder&amp;aacute; elevar alguns tributos, a depender da evolu&amp;ccedil;&amp;atilde;o da arrecada&amp;ccedil;&amp;atilde;o. Os aumentos, se vierem a ocorrer, ser&amp;atilde;o feitos da forma &amp;ldquo;mais pontual poss&amp;iacute;vel&amp;rdquo;, prometeu. Ele acrescentou que a decis&amp;atilde;o ser&amp;aacute; tomada at&amp;eacute; o dia 31 deste m&amp;ecirc;s, quando se encerra o prazo para envio, ao Congresso Nacional, da proposta do Or&amp;ccedil;amento federal para o ano que vem.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ca&amp;ccedil;a &amp;agrave;s bruxas. Para o coordenador do N&amp;uacute;cleo de Estudos Fiscais da Funda&amp;ccedil;&amp;atilde;o Get&amp;uacute;lio Vargas (FGV) e diretor do Centro de Cidadania Fiscal, Eurico Marcos Diniz de Santi, o governo precisa atacar a quest&amp;atilde;o, mas n&amp;atilde;o pode fazer uma &amp;ldquo;ca&amp;ccedil;a &amp;agrave;s bruxas&amp;rdquo; nos benef&amp;iacute;cios tribut&amp;aacute;rios. O economista defende que essas desonera&amp;ccedil;&amp;otilde;es sejam revertidas completamente, mas com uma regra de transi&amp;ccedil;&amp;atilde;o, de cinco a dez anos, que d&amp;ecirc; seguran&amp;ccedil;a aos agentes econ&amp;ocirc;micos que firmaram contratos de longo prazo baseados na atual realidade tribut&amp;aacute;ria. Uma mudan&amp;ccedil;a mais suave, no entanto, n&amp;atilde;o teria resultado imediato.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;&amp;Eacute; importante que essas ren&amp;uacute;ncias, hoje protegidas pelo sigilo fiscal dos benefici&amp;aacute;rios, passem para o Or&amp;ccedil;amento da Uni&amp;atilde;o, de uma forma que ganhem transpar&amp;ecirc;ncia e possam ter sua aloca&amp;ccedil;&amp;atilde;o discutida pela sociedade&amp;rdquo;, diz De Santi.&lt;/p&gt;\r\n\r\n&lt;p&gt;O especialista aponta ainda que o atual sistema tribut&amp;aacute;rio, cheio de exce&amp;ccedil;&amp;otilde;es e judicializado, ajuda a fomentar a atividade de lobby setorial que muitas vezes acaba se transformando em corrup&amp;ccedil;&amp;atilde;o. O &amp;uacute;ltimo relat&amp;oacute;rio do governo central j&amp;aacute; deu um primeiro sinal. Em uma tabela at&amp;iacute;pica, o Tesouro afirmou que &amp;ldquo;a carga tribut&amp;aacute;ria associada &amp;agrave;s receitas administradas pela Receita Federal caiu de 14,5% em novembro de 2011 ara 12,8% em junho de 2016&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Muitas das desonera&amp;ccedil;&amp;otilde;es vigentes foram institu&amp;iacute;das ainda no governo da presidente afastada Dilma Rousseff e, mesmo com prazo para acabar, demorar&amp;atilde;o para se dissolver. Para reduzir esses gastos, a equipe econ&amp;ocirc;mica precisar&amp;aacute; contar com a ajuda do Congresso, o que j&amp;aacute; se mostrou dif&amp;iacute;cil ap&amp;oacute;s a tentativa de aprova&amp;ccedil;&amp;atilde;o do Projeto de Lei que auxilia as contas dos Estados.&lt;/p&gt;\r\n'),
(7, 'Produto importado abaixo de US$ 100 nÃ£o pode ser taxado, decide TNU', '2016-08-09 19:48:50', NULL, '&lt;p&gt;Conforme prev&amp;ecirc; o Decreto-Lei 1.804/1980, a importa&amp;ccedil;&amp;atilde;o via postal at&amp;eacute; US$ 100 &amp;eacute; isenta de imposto. A decis&amp;atilde;o &amp;eacute; da Turma Nacional de Uniformiza&amp;ccedil;&amp;atilde;o dos Juizados Especiais Federais, que reconheceu a ilegalidade da fixa&amp;ccedil;&amp;atilde;o de limite de isen&amp;ccedil;&amp;atilde;o, no valor de US$ 50, para importa&amp;ccedil;&amp;otilde;es via postal.&lt;/p&gt;\r\n\r\n&lt;p&gt;O colegiado tamb&amp;eacute;m declarou ilegal a exig&amp;ecirc;ncia de que a isen&amp;ccedil;&amp;atilde;o fosse aplicada somente &amp;agrave;s remessas de mercadorias enviadas por pessoas f&amp;iacute;sicas. O entendimento &amp;eacute; que Minist&amp;eacute;rio da Fazenda e a Receita Federal n&amp;atilde;o podem, por meio de ato administrativo, ainda que normativo, extrapolar os limites estabelecidos em lei.&lt;/p&gt;\r\n\r\n&lt;p&gt;A decis&amp;atilde;o, tomada na sess&amp;atilde;o do dia 20 de julho, torna ilegal a aplica&amp;ccedil;&amp;atilde;o da Portaria 156/99, do Minist&amp;eacute;rio da Fazenda, e da Instru&amp;ccedil;&amp;atilde;o Normativa 96/99, da Receita Federal.&lt;/p&gt;\r\n\r\n&lt;p&gt;O tema foi analisado pela TNU nos autos de um incidente de uniformiza&amp;ccedil;&amp;atilde;o interposto pela Uni&amp;atilde;o Federal contra um ac&amp;oacute;rd&amp;atilde;o de Turma Recursal do Paran&amp;aacute;, que julgou n&amp;atilde;o haver nenhuma rela&amp;ccedil;&amp;atilde;o jur&amp;iacute;dica a sustentar a incid&amp;ecirc;ncia do imposto de importa&amp;ccedil;&amp;atilde;o sobre bens remetidos a residente no pa&amp;iacute;s, quando o valor for inferior a US$ 100.&lt;/p&gt;\r\n\r\n&lt;p&gt;Em seu recurso &amp;agrave; Turma Nacional, a Uni&amp;atilde;o alegou que o Decreto-Lei 1.804/1980 delegou ao Minist&amp;eacute;rio da Fazenda a compet&amp;ecirc;ncia para dispor sobre isen&amp;ccedil;&amp;atilde;o desse tipo de imposto, fixando um limite de at&amp;eacute; U$ 100 para essa modalidade de ren&amp;uacute;ncia fiscal.&lt;/p&gt;\r\n\r\n&lt;p&gt;A Uni&amp;atilde;o defendeu ainda que o mesmo racioc&amp;iacute;nio deveria ser aplicado &amp;agrave; situa&amp;ccedil;&amp;atilde;o dos remetentes de produtos, porque a legisla&amp;ccedil;&amp;atilde;o teria estabelecido que esse tratamento poderia ocorrer somente no caso de os destinat&amp;aacute;rios serem pessoas f&amp;iacute;sicas, o que permitiria concluir que tal isen&amp;ccedil;&amp;atilde;o n&amp;atilde;o ocorreria quando o destinat&amp;aacute;rio fosse pessoa jur&amp;iacute;dica.&lt;/p&gt;\r\n\r\n&lt;p&gt;Como fundamento para o recurso, a Uni&amp;atilde;o apresentou ac&amp;oacute;rd&amp;atilde;o de Turma Recursal do Esp&amp;iacute;rito Santo com entendimento divergente sobre a mat&amp;eacute;ria, afirmando inexist&amp;ecirc;ncia de ilegalidade na Portaria 156/99, do Minist&amp;eacute;rio da Fazenda, e na Instru&amp;ccedil;&amp;atilde;o Normativa 96/99, da Receita Federal &amp;mdash; tanto com rela&amp;ccedil;&amp;atilde;o &amp;agrave; fixa&amp;ccedil;&amp;atilde;o do limite de isen&amp;ccedil;&amp;atilde;o quanto no que diz respeito ao condicionamento da isen&amp;ccedil;&amp;atilde;o &amp;agrave; pessoa f&amp;iacute;sica.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para o relator do processo na TNU, juiz federal Rui Costa Gon&amp;ccedil;alves, o Decreto-Lei 1.804/1980 n&amp;atilde;o prev&amp;ecirc; essas exig&amp;ecirc;ncias, motivo pelo qual os atos administrativos normativos extrapolam o regramento contido na pr&amp;oacute;pria legisla&amp;ccedil;&amp;atilde;o, ao criar mais um requisito para a frui&amp;ccedil;&amp;atilde;o da isen&amp;ccedil;&amp;atilde;o tribut&amp;aacute;ria, e subvertem a hierarquia das normas jur&amp;iacute;dicas com a redu&amp;ccedil;&amp;atilde;o da faixa de isen&amp;ccedil;&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;O Decreto-Lei 1.804/1980 ao reconhecer que o Minist&amp;eacute;rio da Fazenda poder&amp;aacute; dispor acerca de isen&amp;ccedil;&amp;atilde;o tribut&amp;aacute;ria em comento, em nenhum ponto delegou &amp;agrave; autoridade fiscal a discricionariedade para modificar a faixa de isen&amp;ccedil;&amp;atilde;o e a qualidade dos benefici&amp;aacute;rios dessa modalidade de ren&amp;uacute;ncia fiscal, dado se tratarem de temas reservados &amp;agrave; lei em sentido formal, dada sua natureza vinculante, que n&amp;atilde;o pode ficar ao sabor do ju&amp;iacute;zo de conveni&amp;ecirc;ncia e oportunidade do agente p&amp;uacute;blico&amp;quot;, conclui o relator em seu voto.&lt;/p&gt;\r\n\r\n&lt;p&gt;O advogado tributarista Augusto Fauvel ressalta que esta &amp;eacute; mais uma decis&amp;atilde;o que reconhece o abuso de poder ao legislar sobre mat&amp;eacute;ria j&amp;aacute; regulamentada. &amp;quot;Fica evidente que h&amp;aacute; conflito de normas hierarquicamente inferiores ao decreto-lei para regulamentar a mesma mat&amp;eacute;ria. Percebe-se que tanto a portaria do Minist&amp;eacute;rio da Fazenda como a Instru&amp;ccedil;&amp;atilde;o Normativa da Secretaria da Receita Federal extrapolaram os limites estabelecidos por norma recepcionada com status de lei, inovando aqueles atos normativos na ordem jur&amp;iacute;dica ao exigir, como condi&amp;ccedil;&amp;atilde;o para concess&amp;atilde;o da isen&amp;ccedil;&amp;atilde;o do imposto de importa&amp;ccedil;&amp;atilde;o, que, al&amp;eacute;m do destinat&amp;aacute;rio do bem, o remetente tamb&amp;eacute;m seja pessoa f&amp;iacute;sica, o que &amp;eacute; ilegal e arbitr&amp;aacute;rio, devendo ser questionado no Judici&amp;aacute;rio toda e qualquer cobran&amp;ccedil;a nesse sentido&amp;quot;, explica.&lt;/p&gt;\r\n\r\n&lt;p&gt;Fim da isen&amp;ccedil;&amp;atilde;o&lt;br /&gt;\r\nEnquanto o Judici&amp;aacute;rio discute o valor das compras isentas, o governo do presidente interino Michel Temer estuda alterar a legisla&amp;ccedil;&amp;atilde;o para taxar todo tipo de remessa, ou adotar um valor apenas simb&amp;oacute;lico para a isen&amp;ccedil;&amp;atilde;o. Segundo o jornal Folha de S.Paulo, a iniciativa foi debatida pelos ministros da Fazenda, Henrique Meirelles, e da Ind&amp;uacute;stria, Marcos Pereira, nessa quinta-feira (28/7) e &amp;eacute; bem-vista pela equipe econ&amp;ocirc;mica, que promete definir em breve as mudan&amp;ccedil;as.&lt;/p&gt;\r\n\r\n&lt;p&gt;Augusto Fauvel afirmou que, se a medida for levada adiante, dever&amp;aacute; ser questionada. &amp;quot;Caso haja movimenta&amp;ccedil;&amp;atilde;o do governo em coibir este direito na qualidade de presidente da Comiss&amp;atilde;o de Direito Aduaneiro da OAB-SP, levarei a discuss&amp;atilde;o no sentido de viabilizar a&amp;ccedil;&amp;otilde;es pontuais e/ou at&amp;eacute; mesmo uma a&amp;ccedil;&amp;atilde;o coletiva contra os abusos praticados pelo Fisco.&amp;quot;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Fonte: Revista Consultor Jur&amp;iacute;dico&lt;/p&gt;\r\n'),
(8, 'Valor de IPI incide sobre preÃ§o total da venda, sendo ela Ã  vista ou a prazo', '2016-08-09 19:50:25', NULL, '&lt;p&gt;O valor de Imposto sobre Produtos Industrializados incide sobre pre&amp;ccedil;o total da venda, sendo ela &amp;agrave; vista ou a prazo. Com esse entendimento, a 2&amp;ordf; Turma do Superior Tribunal de Justi&amp;ccedil;a rejeitou recurso de uma fabricante de balas e chicletes referente &amp;agrave; base de c&amp;aacute;lculo para a cobran&amp;ccedil;a desse tributo.&lt;/p&gt;\r\n\r\n&lt;p&gt;A empresa questionou os valores tribut&amp;aacute;veis, com o argumento de que no caso de vendas a prazo, a parte correspondente a juros incidentes deveria ser exclu&amp;iacute;da da base de c&amp;aacute;lculo, j&amp;aacute; que se trata de uma opera&amp;ccedil;&amp;atilde;o financeira, e n&amp;atilde;o de manufatura.&lt;/p&gt;\r\n\r\n&lt;p&gt;Para o ministro relator do recurso, Herman Benjamin, &amp;eacute; preciso fazer uma diferencia&amp;ccedil;&amp;atilde;o entre a venda a prazo e a venda financiada. O ministro destacou que ambas as transa&amp;ccedil;&amp;otilde;es n&amp;atilde;o se confundem, s&amp;oacute; havendo opera&amp;ccedil;&amp;atilde;o de cr&amp;eacute;dito na segunda.&lt;/p&gt;\r\n\r\n&lt;p&gt;No voto, acompanhado pelos demais ministros da 2&amp;ordf; Turma, Benjamin disse que embora plaus&amp;iacute;vel, &amp;eacute; imposs&amp;iacute;vel auferir qual valor em uma opera&amp;ccedil;&amp;atilde;o de venda a prazo &amp;eacute; correspondente a juros. Portanto, o valor devido de IPI, conforme o C&amp;oacute;digo Tribut&amp;aacute;rio Nacional, deve ser o total da transa&amp;ccedil;&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;Se o produto foi vendido por R$ 1.000,00 &amp;agrave; vista, o imposto incidir&amp;aacute; sobre esse valor; se for R$ 1.200,00 em tr&amp;ecirc;s parcelas de R$ 400,00, o imposto incidir&amp;aacute; sobre esses R$ 1.200,00. Coisa inteiramente diversa aconteceria se o comprador, n&amp;atilde;o tendo como pagar &amp;agrave; vista, contratasse um financiamento para a compra&amp;rdquo;, explicou o magistrado.&lt;/p&gt;\r\n\r\n&lt;p&gt;Precedente de ICMS&lt;br /&gt;\r\nBenjamin destacou que um julgamento do STJ sobre o Imposto sobre Circula&amp;ccedil;&amp;atilde;o de Mercadorias e Servi&amp;ccedil;os, feito sob o rito dos repetitivos, pode ser aplicado ao caso analisado, que versa sobre o IPI.&lt;/p&gt;\r\n\r\n&lt;p&gt;A decis&amp;atilde;o do tribunal sobre ICMS, aplicada neste caso, afirma que n&amp;atilde;o h&amp;aacute; como calcular o valor que seria referente a juros na venda a prazo. Portanto, a base de c&amp;aacute;lculo deve incluir o valor total pago na opera&amp;ccedil;&amp;atilde;o.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;Se o vendedor est&amp;aacute; cobrando mais caro quando vende a prazo, n&amp;atilde;o h&amp;aacute; como dizer que o valor cobrado a mais na venda a termo n&amp;atilde;o comp&amp;otilde;e o valor da opera&amp;ccedil;&amp;atilde;o&amp;rdquo;, concluiu Benjamin.&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Fonte: Revista Consultor Jur&amp;iacute;dico&lt;/p&gt;\r\n'),
(9, 'NotÃ­cia com foto', '2016-10-06 13:54:37', 'news_9.jpg', '&lt;p&gt;Teste de foto.&lt;/p&gt;\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_answers`
--
ALTER TABLE `tb_answers`
  ADD PRIMARY KEY (`answer_cod`);

--
-- Indexes for table `tb_calls`
--
ALTER TABLE `tb_calls`
  ADD PRIMARY KEY (`call_cod`,`tb_clients_client_cod`),
  ADD KEY `tb_calls_FKIndex1` (`tb_clients_client_cod`);

--
-- Indexes for table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`client_cod`);

--
-- Indexes for table `tb_covers`
--
ALTER TABLE `tb_covers`
  ADD PRIMARY KEY (`cover_cod`,`tb_news_news_cod`),
  ADD KEY `tb_covers_FKIndex1` (`tb_news_news_cod`);

--
-- Indexes for table `tb_depositions`
--
ALTER TABLE `tb_depositions`
  ADD PRIMARY KEY (`deposition_cod`);

--
-- Indexes for table `tb_downloads`
--
ALTER TABLE `tb_downloads`
  ADD PRIMARY KEY (`download_cod`,`tb_folders_tb_clients_client_cod`,`tb_folders_folder_cod`),
  ADD KEY `tb_downloads_FKIndex1` (`tb_folders_folder_cod`,`tb_folders_tb_clients_client_cod`);

--
-- Indexes for table `tb_folders`
--
ALTER TABLE `tb_folders`
  ADD PRIMARY KEY (`folder_cod`,`tb_clients_client_cod`),
  ADD KEY `tb_folders_FKIndex1` (`tb_clients_client_cod`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_answers`
--
ALTER TABLE `tb_answers`
  MODIFY `answer_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_calls`
--
ALTER TABLE `tb_calls`
  MODIFY `call_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `client_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_covers`
--
ALTER TABLE `tb_covers`
  MODIFY `cover_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_depositions`
--
ALTER TABLE `tb_depositions`
  MODIFY `deposition_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_downloads`
--
ALTER TABLE `tb_downloads`
  MODIFY `download_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_folders`
--
ALTER TABLE `tb_folders`
  MODIFY `folder_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_calls`
--
ALTER TABLE `tb_calls`
  ADD CONSTRAINT `tb_calls_ibfk_1` FOREIGN KEY (`tb_clients_client_cod`) REFERENCES `tb_clients` (`client_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_covers`
--
ALTER TABLE `tb_covers`
  ADD CONSTRAINT `tb_covers_ibfk_1` FOREIGN KEY (`tb_news_news_cod`) REFERENCES `tb_news` (`news_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_folders`
--
ALTER TABLE `tb_folders`
  ADD CONSTRAINT `tb_folders_ibfk_1` FOREIGN KEY (`tb_clients_client_cod`) REFERENCES `tb_clients` (`client_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
