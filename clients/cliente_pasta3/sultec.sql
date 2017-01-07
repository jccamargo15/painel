-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2016 às 18:45
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clients`
--

CREATE TABLE `tb_clients` (
  `client_cod` int(11) NOT NULL,
  `client_name` varchar(150) NOT NULL,
  `client_folder` varchar(150) NOT NULL,
  `client_email` varchar(150) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'user',
  `client_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_clients`
--

INSERT INTO `tb_clients` (`client_cod`, `client_name`, `client_folder`, `client_email`, `type`, `client_pass`) VALUES
(29, 'Admin', 'admin1', 'admin@admin.com.br', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(35, 'User', 'user1', 'user@user.com.br', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(41, 'Teste', 'teste1', 'teste@teste.com.br', 'user', '698dc19d489c4e4db73e28a713eab07b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dates`
--

CREATE TABLE `tb_dates` (
  `date_cod` int(11) NOT NULL,
  `date_name` varchar(150) NOT NULL,
  `date_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_dates`
--

INSERT INTO `tb_dates` (`date_cod`, `date_name`, `date_date`) VALUES
(10, 'INSS', '2016-06-20'),
(11, 'PIS', '2016-05-27'),
(12, 'IPVA', '2016-06-04'),
(14, 'FGTS', '2016-06-07'),
(15, 'Simples', '2016-05-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_news`
--

CREATE TABLE `tb_news` (
  `news_cod` int(11) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_category` varchar(50) NOT NULL,
  `news_date` date NOT NULL,
  `news_cover` varchar(250) NOT NULL,
  `news_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_news`
--

INSERT INTO `tb_news` (`news_cod`, `news_title`, `news_category`, `news_date`, `news_cover`, `news_text`) VALUES
(30, 'Quase 3 milhÃµes jÃ¡ ficam sem seguro-desemprego neste ano no Brasil', '', '2016-05-27', 'news_30.jpg', '&lt;p&gt;Mariana Tassi Barbosa, 28, recebeu neste m&amp;ecirc;s a &amp;uacute;ltima parcela do seguro-desemprego. A analista de m&amp;iacute;dias sociais, que est&amp;aacute; sem trabalho h&amp;aacute; oito meses, vinha usando o benef&amp;iacute;cio para pagar presta&amp;ccedil;&amp;otilde;es do apartamento que comprou com o noivo.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Estou quase aceitando ganhar menos do que antesÂ”, diz ela, que achava que j&amp;aacute; estaria empregada a esta hora.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;Agrave; medida que o desemprego avan&amp;ccedil;a, piora a situa&amp;ccedil;&amp;atilde;o dos que perdem o direito ao benef&amp;iacute;cio pago pelo governo, v&amp;aacute;lido por at&amp;eacute; cinco meses (veja quadro).&lt;br /&gt;\r\n&lt;br /&gt;\r\nAl&amp;eacute;m de Barbosa, outras 542,4 mil pessoas receberam a &amp;uacute;ltima parcela do benef&amp;iacute;cio neste m&amp;ecirc;s. Desde o come&amp;ccedil;o do ano, j&amp;aacute; foram 2,862 milh&amp;otilde;es, n&amp;uacute;mero 8% superior ao do mesmo per&amp;iacute;odo de 2015 (2,650 milh&amp;otilde;es), segundo o Minist&amp;eacute;rio do Trabalho.&lt;br /&gt;\r\n&lt;br /&gt;\r\nAo mesmo tempo, fica mais dif&amp;iacute;cil conseguir uma recoloca&amp;ccedil;&amp;atilde;o num momento em que a economia brasileira est&amp;aacute; fechando vagas em propor&amp;ccedil;&amp;atilde;o maior que abrindo novas.&lt;br /&gt;\r\n&lt;br /&gt;\r\nEm abril, pelo 13&amp;ordm; m&amp;ecirc;s seguido, o mercado de trabalho formal encerrou 62.844 postos de trabalho.&lt;br /&gt;\r\n&lt;br /&gt;\r\nESPERA RECORDE&lt;br /&gt;\r\n&lt;br /&gt;\r\nDe acordo com o IBGE, 30,9% dos desocupados nas seis principais regi&amp;otilde;es metropolitanas do pa&amp;iacute;s em fevereiro estavam fora do mercado de trabalho havia mais de seis meses. Trata-se do maior &amp;iacute;ndice para o m&amp;ecirc;s desde 2006.&lt;br /&gt;\r\n&lt;br /&gt;\r\nO seguro, com valor m&amp;aacute;ximo de R$ 1.542, &amp;eacute; em geral usado para despesas mais b&amp;aacute;sicas, como as de alimenta&amp;ccedil;&amp;atilde;o e rem&amp;eacute;dios.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Ele j&amp;aacute; &amp;eacute; usado no b&amp;aacute;sico. Quando acaba, nem isso eu consigo manter. Carro e geladeira d&amp;aacute; para postergar. Arroz, feij&amp;atilde;o e rem&amp;eacute;dio, n&amp;atilde;o d&amp;aacute;Â”, afirma Fabio Pina, assessor econ&amp;ocirc;mico da FecomercioSP.&lt;br /&gt;\r\n&lt;br /&gt;\r\nEntre os profissionais entrevistados pela Folha, v&amp;aacute;rios demonstraram surpresa pela dura&amp;ccedil;&amp;atilde;o do desemprego: mesmo com a crise, n&amp;atilde;o achavam que levariam tanto tempo para se recolocar.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“N&amp;atilde;o imaginava que ia ser t&amp;atilde;o dif&amp;iacute;cil. Minha &amp;aacute;rea n&amp;atilde;o &amp;eacute; t&amp;atilde;o concorridaÂ”, diz a t&amp;eacute;cnica em biblioteconomia Aline da Silva, 26, desempregada h&amp;aacute; quase dez meses e ainda recebendo o seguro-desemprego, que representa metade do que ganhava antes.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nA t&amp;eacute;cnica j&amp;aacute; fez ajustes nas contas: a filha de um ano e oito meses foi para uma creche p&amp;uacute;blica, por exemplo.&lt;br /&gt;\r\n&lt;br /&gt;\r\nEla desistiu de procurar vaga formal: est&amp;aacute; assessorando o cunhado, que tem um grupo de corrida, e vendendo almofadas personalizadas.&lt;br /&gt;\r\n&lt;br /&gt;\r\nCICLO EM PROGRESSO&lt;br /&gt;\r\n&lt;br /&gt;\r\nPara Pina, &amp;eacute; dif&amp;iacute;cil afirmar com precis&amp;atilde;o em que etapa do ciclo de desemprego o pa&amp;iacute;s est&amp;aacute; hoje. O n&amp;uacute;mero de benefici&amp;aacute;rios do seguro ainda pode variar muito conforme a evolu&amp;ccedil;&amp;atilde;o das demiss&amp;otilde;es, das mudan&amp;ccedil;as dos requisitos adotados para a concess&amp;atilde;o e do pr&amp;oacute;prio caixa do governo.&lt;br /&gt;\r\n&lt;br /&gt;\r\nA tend&amp;ecirc;ncia, entretanto, &amp;eacute; que os profissionais fiquem mais tempo fora do mercado. As sele&amp;ccedil;&amp;otilde;es est&amp;atilde;o demorando mais Â–as empresas t&amp;ecirc;m mais op&amp;ccedil;&amp;otilde;es e, ao mesmo tempo, mais receio de errar na contrata&amp;ccedil;&amp;atilde;o.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Tenho executivos que est&amp;atilde;o h&amp;aacute; quatro, cinco meses, em um mesmo processo seletivoÂ”, diz Claudia Monari, diretora de outplacement da consultoria Career Center, especializada em recoloca&amp;ccedil;&amp;atilde;o.&lt;br /&gt;\r\n&lt;br /&gt;\r\nKatia Beltr&amp;atilde;o &amp;eacute; formada em economia, tem p&amp;oacute;s-gradua&amp;ccedil;&amp;atilde;o em marketing e trabalha h&amp;aacute; mais de 20 anos na ind&amp;uacute;stria farmac&amp;ecirc;utica. H&amp;aacute; sete meses, foi demitida de um cargo de diretoria e, apesar de ter um bom planejamento financeiro, teve de reduzir o n&amp;iacute;vel de consumo.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Voc&amp;ecirc; elimina as despesas sup&amp;eacute;rfluas, a academia fora do pr&amp;eacute;dio, reduz o pacote de pacote de telefone, a frequ&amp;ecirc;ncia a restaurantesÂ”, conta ela.&lt;br /&gt;\r\n&lt;br /&gt;\r\nBeltr&amp;atilde;o tem consci&amp;ecirc;ncia de que, para o seu n&amp;iacute;vel hier&amp;aacute;rquico, a espera tende a ser maior. Â“Quando voc&amp;ecirc; vai contratar um diretor, h&amp;aacute; v&amp;aacute;rias etapas, entrevistas. At&amp;eacute; falar com todo mundo, &amp;eacute; normal que demore um pouco mais.Â”&lt;br /&gt;\r\n&lt;br /&gt;\r\nNaercio Menezes Filho, coordenador do Centro de Pol&amp;iacute;ticas P&amp;uacute;blicas do Insper, afirma que ficar desempregado por at&amp;eacute; seis meses &amp;eacute; normal, mesmo em &amp;eacute;pocas de crescimento econ&amp;ocirc;mico. Por&amp;eacute;m os motivos s&amp;atilde;o distintos: na bonan&amp;ccedil;a, &amp;eacute; mais comum que a rotatividade seja causada por uma busca de melhores oportunidades. Agora, trata-se de necessidade.&lt;br /&gt;\r\n&lt;br /&gt;\r\nMonari, da Career Center, diz que, durante sele&amp;ccedil;&amp;otilde;es, os candidatos devem Â“criar uma narrativaÂ” a respeito do que est&amp;atilde;o fazendo no per&amp;iacute;odo de desemprego e como est&amp;atilde;o se atualizando Â–cursos on-line gratuitos, a&amp;ccedil;&amp;otilde;es para aumentar a rede de contato etc.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Aos olhos dos recrutadores, n&amp;atilde;o &amp;eacute; grave ficar mais tempo fora do mercado em um momento de crise. O problema &amp;eacute; quando o mercado est&amp;aacute; favor&amp;aacute;vel e a pessoa n&amp;atilde;o consegue se recolocar.Â”&lt;br /&gt;\r\n&lt;br /&gt;\r\nCONHE&amp;Ccedil;A O SEGURO DESEMPREGO&lt;br /&gt;\r\n&lt;br /&gt;\r\nFAIXAS DE VALORES&lt;br /&gt;\r\nMinimo de R$ 880,00&lt;br /&gt;\r\nM&amp;aacute;ximo de R$ 1.542,24&lt;br /&gt;\r\n&lt;br /&gt;\r\nN&amp;Uacute;MERO DE PARCELAS&lt;br /&gt;\r\nde 3 a 5 Â– a depender se &amp;eacute; a primeira solicita&amp;ccedil;&amp;atilde;o do benef&amp;iacute;cio e do tempo de trabalho no emprego&lt;br /&gt;\r\n&lt;br /&gt;\r\nPRAZOS PARA SOLICITA&amp;Ccedil;&amp;Atilde;O&lt;br /&gt;\r\nDo 7&amp;ordm; ao 120&amp;ordm; dia Â– a depender de qual trabalho &amp;eacute; exercido&lt;br /&gt;\r\n&lt;br /&gt;\r\nONDE SOLICITAR&lt;br /&gt;\r\nNas Superintend&amp;ecirc;ncias Regionais do Trabalho e Emprego (SRTE), no Sistema Nacional de Emprego (SINE), ag&amp;ecirc;ncias credenciadas da Caixa e outros postos credenciados pelo MTE&lt;br /&gt;\r\n&lt;br /&gt;\r\nDOCUMENTOS NECESS&amp;Aacute;RIOS&lt;br /&gt;\r\n-Comunica&amp;ccedil;&amp;atilde;o de Dispensa Â– CD (via marrom) e Requerimento do Seguro&lt;br /&gt;\r\n-Desemprego Â– SD (via verde)&lt;br /&gt;\r\n-Termo de rescis&amp;atilde;o do Contrato de Trabalho Â– acompanhado do Termo de Quita&amp;ccedil;&amp;atilde;o de Rescis&amp;atilde;o do Contrato de Trabalho ou do Termo de Homologa&amp;ccedil;&amp;atilde;o de Rescis&amp;atilde;o&lt;br /&gt;\r\n-Carteira de Trabalho&lt;br /&gt;\r\n-Carteira de Identidade ou Certid&amp;atilde;o de Nascimento ou CNH ou Passaporte ou Certificado de Reservista&lt;br /&gt;\r\n-Comprovante de inscri&amp;ccedil;&amp;atilde;o no PIS/PASEP&lt;br /&gt;\r\n-Documento de levantamento dos dep&amp;oacute;sitos no FGTS ou extrato comprobat&amp;oacute;rio&lt;br /&gt;\r\nÂ– CPF&lt;br /&gt;\r\nÂ– Comprovante dos 2 &amp;uacute;ltimos contracheques ou recibos de pagamento para o trabalhador formal&lt;br /&gt;\r\n&lt;br /&gt;\r\nQUEM TEM DIREITO&lt;br /&gt;\r\n-Trabalhador formal e dom&amp;eacute;stico, em virtude da dispensa sem justa causa&lt;br /&gt;\r\n-Trabalhador formal com contrato de trabalho suspenso em virtude de participa&amp;ccedil;&amp;atilde;o em curso ou programa de qualifica&amp;ccedil;&amp;atilde;o profissional oferecido pelo empregador&lt;br /&gt;\r\n-Pescador profissional durante o per&amp;iacute;odo do defeso&lt;br /&gt;\r\n-Trabalhador resgatado da condi&amp;ccedil;&amp;atilde;o semelhante &amp;agrave; de escravo&lt;br /&gt;\r\n&lt;br /&gt;\r\nCONDI&amp;Ccedil;&amp;Otilde;ES&lt;br /&gt;\r\n&lt;br /&gt;\r\n1- ter recebido sal&amp;aacute;rios em:&lt;br /&gt;\r\na) pelo menos 12 meses nos &amp;uacute;ltimos 18 meses imediatamente anteriores &amp;agrave; data de dispensa, quando na primeira solicita&amp;ccedil;&amp;atilde;o&lt;br /&gt;\r\nb) pelo menos nove meses nos &amp;uacute;ltimos 12 meses imediatamente anteriores &amp;agrave; data de dispensa, quando na segunda solicita&amp;ccedil;&amp;atilde;o&lt;br /&gt;\r\nc) cada um dos seis meses imediatamente anteriores &amp;agrave; data de dispensa, quando nas demais solicita&amp;ccedil;&amp;otilde;es&lt;br /&gt;\r\n2-O trabalhador n&amp;atilde;o pode receber outra remunera&amp;ccedil;&amp;atilde;o oriunda de v&amp;iacute;nculo empregat&amp;iacute;cio formal ou informal&lt;br /&gt;\r\n3- N&amp;atilde;o estar recebendo qualquer benef&amp;iacute;cio previdenci&amp;aacute;rio, com exce&amp;ccedil;&amp;atilde;o da pens&amp;atilde;o por morte e aux&amp;iacute;lio-acidente&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nFolha de S&amp;atilde;o Paulo&lt;br /&gt;\r\n&lt;br /&gt;\r\nFonte: Portal Cont&amp;aacute;bil SC&lt;/p&gt;\r\n'),
(31, 'Fazenda fecha 1Âº quadrimestre com 84 operaÃ§Ãµes realizadas', '', '2016-05-27', 'news_31.jpg', '&lt;p&gt;A fiscaliza&amp;ccedil;&amp;atilde;o da Fazenda de Santa Catarina realizou 84 opera&amp;ccedil;&amp;otilde;es no primeiro quadrimestre deste ano, n&amp;uacute;mero maior do que em todo o ano de 2013 Â– 66 a&amp;ccedil;&amp;otilde;es. O saldo inclui a&amp;ccedil;&amp;otilde;es presenciais e auditorias internas a partir do cruzamento de dados dispon&amp;iacute;veis no Sistema de Administra&amp;ccedil;&amp;atilde;o Tribut&amp;aacute;ria (SAT). A meta &amp;eacute; fechar 2016 com pelo menos o mesmo n&amp;uacute;mero de opera&amp;ccedil;&amp;otilde;es realizadas no ano passado Â– 259 Â– um recorde hist&amp;oacute;rico do fisco catarinense.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Nos &amp;uacute;ltimos anos, investimos muito em sistemas tecnol&amp;oacute;gicos que facilitam o controle fiscal e dificultam fraudes tribut&amp;aacute;rias. Esse trabalho faz de Santa Catarina um dos Estados com menor &amp;iacute;ndice de inadimpl&amp;ecirc;ncia do ICMS, menos de 5%Â”, afirma o secret&amp;aacute;rio Antonio Gavazzoni. Ele ressalta ainda que a crise econ&amp;ocirc;mica e a queda na arrecada&amp;ccedil;&amp;atilde;o refor&amp;ccedil;am a import&amp;acirc;ncia da fiscaliza&amp;ccedil;&amp;atilde;o. Â“Combater a sonega&amp;ccedil;&amp;atilde;o &amp;eacute; mais justo do que elevar impostosÂ”.&lt;br /&gt;\r\n&lt;br /&gt;\r\nRegulariza&amp;ccedil;&amp;atilde;o espont&amp;acirc;nea&lt;br /&gt;\r\n&lt;br /&gt;\r\nEntre as a&amp;ccedil;&amp;otilde;es realizadas no primeiro quadrimestre, destaca-se a recupera&amp;ccedil;&amp;atilde;o de elevadas quantias de ICMS, pagas de forma espont&amp;acirc;nea pelo contribuinte, ou seja, sem a necessidade de notifica&amp;ccedil;&amp;atilde;o fiscal. A vantagem &amp;eacute; que elas t&amp;ecirc;m reflexo praticamente imediato aos cofres p&amp;uacute;blicos. Em duas auditorias fiscais realizadas neste ano no segmento de redes de lojas, por exemplo, a Fazenda recuperou R$ 18 milh&amp;otilde;es, volume de recursos suficiente para construir tr&amp;ecirc;s escolas para 1200 alunos cada. No setor de combust&amp;iacute;veis, o fisco recuperou R$ 2,9 milh&amp;otilde;es de um &amp;uacute;nico contribuinte.&lt;br /&gt;\r\n&lt;br /&gt;\r\nUso intenso de tecnologia&lt;br /&gt;\r\n&lt;br /&gt;\r\nA opera&amp;ccedil;&amp;atilde;o Concorr&amp;ecirc;ncia Leal &amp;eacute; um exemplo de como sistemas tecnol&amp;oacute;gicos podem ajudar a monitorar os contribuintes e combater a sonega&amp;ccedil;&amp;atilde;o. Elaborada por apenas tr&amp;ecirc;s auditores fiscais, a a&amp;ccedil;&amp;atilde;o trouxe &amp;agrave; tona uma s&amp;eacute;rie de irregularidades fiscais de empresas do Simples Nacional a partir do cruzamento de diferentes fontes de dados. Desde a primeira edi&amp;ccedil;&amp;atilde;o, em 2012, a arrecada&amp;ccedil;&amp;atilde;o desse grupo de contribuintes aumentou em quase 50%, um acr&amp;eacute;scimo de receita de mais de R$ 250 milh&amp;otilde;es.&lt;br /&gt;\r\n&lt;br /&gt;\r\nOutro caso bem sucedido de moderniza&amp;ccedil;&amp;atilde;o do fico catarinense &amp;eacute; ITCMD F&amp;aacute;cil, sistema automatizado de recolhimento do imposto sobre doa&amp;ccedil;&amp;otilde;es e heran&amp;ccedil;as. Aliado &amp;agrave; opera&amp;ccedil;&amp;atilde;o Doa&amp;ccedil;&amp;atilde;o Legal, auditoria que cruza dados da Fazenda com os das declara&amp;ccedil;&amp;otilde;es do imposto de renda disponibilizados pela Receita Federal, o ITCMD F&amp;aacute;cil impulsionou a arrecada&amp;ccedil;&amp;atilde;o deste tributo nos &amp;uacute;ltimos anos. No ano passado, o Estado recolheu R$ 213 milh&amp;otilde;es com ITCMD, 19,7% a mais do que em 2014.&lt;br /&gt;\r\n&lt;br /&gt;\r\nPresen&amp;ccedil;a fiscal&lt;br /&gt;\r\n&lt;br /&gt;\r\nMesmo com o intenso uso de tecnologias, a Fazenda continua investindo em opera&amp;ccedil;&amp;otilde;es presenciais, especialmente no varejo. A opera&amp;ccedil;&amp;atilde;o Veraneio, que registrou irregularidades em 238 dos 1000 restaurantes e bares fiscalizados no litoral catarinense, mostra a import&amp;acirc;ncia da presen&amp;ccedil;a do fisco para coibir fraudes. Nesta opera&amp;ccedil;&amp;atilde;o, os auditores encontraram inclusive estabelecimentos sem inscri&amp;ccedil;&amp;atilde;o no cadastro de contribuintes de ICMS.&lt;br /&gt;\r\n&lt;br /&gt;\r\nGrandes auditorias&lt;br /&gt;\r\n&lt;br /&gt;\r\nO fisco catarinense tamb&amp;eacute;m investe em grandes auditorias. No setor de medicamentos e produtos de higiene e beleza, por exemplo, a Fazenda deflagrou no primeiro quadrimestre duas opera&amp;ccedil;&amp;otilde;es que ir&amp;atilde;o fiscalizar 4.800 empresas, dentre as quais 3.283 j&amp;aacute; apresentaram irregularidades em verifica&amp;ccedil;&amp;otilde;es preliminares dos auditores. O potencial de recupera&amp;ccedil;&amp;atilde;o de ICMS nessas duas a&amp;ccedil;&amp;otilde;es chega a R$ 26 milh&amp;otilde;es.&lt;br /&gt;\r\n&lt;br /&gt;\r\nEvolu&amp;ccedil;&amp;atilde;o da fiscaliza&amp;ccedil;&amp;atilde;o&lt;br /&gt;\r\n&lt;br /&gt;\r\n2013 Â– 66 opera&amp;ccedil;&amp;otilde;es&lt;br /&gt;\r\n&lt;br /&gt;\r\n2014 Â– 140 opera&amp;ccedil;&amp;otilde;es&lt;br /&gt;\r\n&lt;br /&gt;\r\n2015 Â– 259 opera&amp;ccedil;&amp;otilde;es&lt;br /&gt;\r\n&lt;br /&gt;\r\n2016*- 259 opera&amp;ccedil;&amp;otilde;es&lt;br /&gt;\r\n&lt;br /&gt;\r\n*meta&lt;br /&gt;\r\n&lt;br /&gt;\r\nFonte: Portal Cont&amp;aacute;bil SC&lt;/p&gt;\r\n'),
(32, 'Impeachment foi Â“jeitinhoÂ” na ConstituiÃ§Ã£o, diz Â“EconomistÂ”', '', '2016-05-27', '', '&lt;p&gt;A revista brit&amp;acirc;nica The Economist afirma, em edi&amp;ccedil;&amp;atilde;o publicada nesta sexta-feira, que o afastamento da presidente Dilma Rousseff foi um Â‘jeitinhoÂ’ dado na Constitui&amp;ccedil;&amp;atilde;o.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“O impeachment de Dilma Rousseff, uma presidente impopular que n&amp;atilde;o foi pessoalmente acusada de malfeitos s&amp;eacute;rios, &amp;eacute; um Â‘jeitinhoÂ’ na Constitui&amp;ccedil;&amp;atilde;oÂ”, diz o texto, usando o termo em portugu&amp;ecirc;s.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Muitos dos pol&amp;iacute;ticos que votaram pelo impeachment recorrem a esses jeitinhos de forma incans&amp;aacute;vel, por exemplo com as leis de financiamento de campanhaÂ”, completa.&lt;br /&gt;\r\n&lt;br /&gt;\r\nA presidente foi afastada pelo Congresso sob acusa&amp;ccedil;&amp;atilde;o de ter editado cr&amp;eacute;ditos suplementares sem autoriza&amp;ccedil;&amp;atilde;o do Congresso e de ter usado recursos de bancos p&amp;uacute;blicos Â– as chamadas Â“pedaladas fiscaisÂ”. Sua defesa alega que isso n&amp;atilde;o constitui crime de responsabilidade.&lt;br /&gt;\r\n&lt;br /&gt;\r\nNesta semana, o ministro interino Romero Juc&amp;aacute; (PMDB-RR) caiu ap&amp;oacute;s revela&amp;ccedil;&amp;otilde;es de di&amp;aacute;logos em que ele dizia que a mudan&amp;ccedil;a de governo era necess&amp;aacute;ria para Â“estancar a sangriaÂ” da Lava Jato.&lt;br /&gt;\r\n&lt;br /&gt;\r\nO texto da Economist fala sobre palavras que s&amp;oacute; existem em portugu&amp;ecirc;s, como saudade, cafun&amp;eacute; e jeitinho Â– Â“uma forma de contornar algo, normalmente uma lei ou regraÂ”.&lt;br /&gt;\r\n&lt;br /&gt;\r\nAfirma que o jeitinho tem uma conota&amp;ccedil;&amp;atilde;o de ingenuidade mas tamb&amp;eacute;m de ilegalidade e que &amp;eacute; uma marca da identidade nacional.&lt;br /&gt;\r\n&lt;br /&gt;\r\nCita como exemplo restaurantes que oferecem refei&amp;ccedil;&amp;otilde;es a policiais que em troca patrulham suas ruas, empresas abertas com uso de Â“laranjasÂ” para pagar menos impostos e pessoas que usam crian&amp;ccedil;as ou idosos para evitar filas.&lt;br /&gt;\r\n&lt;br /&gt;\r\nA publica&amp;ccedil;&amp;atilde;o diz que, segundos alguns especialistas, os cat&amp;oacute;licos, tentados a considerar a confiss&amp;atilde;o como alternativa &amp;agrave; obedi&amp;ecirc;ncia &amp;agrave;s leis, s&amp;atilde;o mais suscet&amp;iacute;veis ao uso do jeitinho. O artigo prossegue dizendo que sociedades mesti&amp;ccedil;as como o Brasil tendem a ser mais flex&amp;iacute;veis Â– tanto com a lei quanto com a etnicidade. E afirma que talvez a desigualdade tenha seu papel (a l&amp;oacute;gica seria: se os ricos e poderosos quebram a lei, por que as pessoas comuns n&amp;atilde;o fariam isso?).&lt;br /&gt;\r\n&lt;br /&gt;\r\nMas conclui que o uso do Â‘jeitinhoÂ’ pode estar ficando mais dif&amp;iacute;cil, n&amp;atilde;o apenas devido a investiga&amp;ccedil;&amp;otilde;es como a Lava Jato mas tamb&amp;eacute;m pelo uso da tecnologia, como c&amp;acirc;meras e radares para multar e sistemas como o E-Poupatempo (sistema online do governo de S&amp;atilde;o Paulo).&lt;br /&gt;\r\n&lt;br /&gt;\r\nA revista cita o antrop&amp;oacute;logo Roberto DaMatta para dizer que o Brasil pode estar caminhando para um sistema anglosax&amp;atilde;o, onde as leis Â“s&amp;atilde;o obedecidas ou n&amp;atilde;o existemÂ”.&lt;br /&gt;\r\n&lt;br /&gt;\r\nÂ“Se isso acontecer, a satisfa&amp;ccedil;&amp;atilde;o que muitos brasileiros v&amp;atilde;o sentir pode ser tingida com cores de saudadesÂ”, conclui a revista.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;br /&gt;\r\nBBC&lt;br /&gt;\r\n&lt;br /&gt;\r\nFonte: Portal Cont&amp;aacute;bil SC&lt;/p&gt;\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`client_cod`);

--
-- Indexes for table `tb_dates`
--
ALTER TABLE `tb_dates`
  ADD PRIMARY KEY (`date_cod`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `client_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tb_dates`
--
ALTER TABLE `tb_dates`
  MODIFY `date_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
