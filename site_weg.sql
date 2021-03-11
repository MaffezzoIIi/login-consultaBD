-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Mar-2021 às 17:48
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_weg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) DEFAULT NULL,
  `matricula` varchar(40) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `matricula`, `senha`) VALUES
(1, '67280', '1234'),
(2, '67281', '4321'),
(3, '67283', '2468');

-- --------------------------------------------------------

--
-- Estrutura da tabela `weg`
--

DROP TABLE IF EXISTS `weg`;
CREATE TABLE IF NOT EXISTS `weg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Secao` int(11) NOT NULL,
  `Titulo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `SubTitulo` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `Texto` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `SubTexto` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `ItensLista` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Img` varchar(500) DEFAULT NULL,
  `Tipo` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Video` varchar(100) DEFAULT NULL,
  `Botao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `weg`
--

INSERT INTO `weg` (`ID`, `Secao`, `Titulo`, `SubTitulo`, `Texto`, `SubTexto`, `ItensLista`, `Img`, `Tipo`, `Status`, `Video`, `Botao`) VALUES
(1, 1, 'Nova tecnologia da linha Compose Nobac', 'adasda', 'Combate com ate 99.99% o coronavirus* *As placas com protecao antimicrobiana e antiviral  sao fabricadas com nanopartÃ­culas atoxicas especiais, que combatem a proliferacao de microbios, bacterias e varus do gÃªnero BetacoronavÃ­rus (mesmo genero das especies SARS-CoV-1, SARS-CoV-2, MERS e outros).', '', '', '1615396034.jpg', 'Banner', 1, NULL, NULL),
(2, 1, 'Motores W60 ABC', '', 'Eltrecidade e a nossa area', '', '', '1615398159.jpg', 'Banner', 1, NULL, NULL),
(3, 1, 'Ta bom', '', 'WEG MOTORES', NULL, NULL, 'banner_linkedin.jpg', 'Banner', 1, NULL, NULL),
(4, 1, 'WEG drive scan', '', 'ExcelÃªncia em conectividade. EficiÃªncia no monitoramento.', NULL, NULL, 'BANNER_Drive_scan-HOME-WEG-1900x600px-A.jpg', 'Banner', 1, NULL, NULL),
(5, 1, 'Quer saber o valor do investimento e o quanto pode economizar?', '', 'Baixe o app e simule seu projeto', NULL, NULL, 'BR-solar-rotating_banner2.jpg', 'Banner', 1, NULL, NULL),
(6, 1, 'WEG motor scan', '', 'Eficiente como sempre. Completo como nunca.', NULL, NULL, 'banner_WMS_july-site-ok.jpg', 'Banner', 1, NULL, NULL),
(7, 1, 'WEG  Motor Fleet Management', '', 'Gerenciamento da frotas de acionamentos na indÃºstria.', NULL, NULL, '9371541372958.jpg', 'Banner', 1, NULL, NULL),
(8, 1, 'WEG Digital Solutions', NULL, 'Uma nova forma de combinar pessoas, empresas e produtos inteligentes.', NULL, NULL, 'banner_weg_digital_home_1920x600.jpg', 'Banner', 1, NULL, NULL),
(9, 1, 'VocÃª jÃ¡ conhece nossas videoaulas?', '', 'Invista na sua capacitaÃ§Ã£o profissional sem sair de casa com o conteÃºdo exclusivo em nosso canal no YouTube. Novas aulas disponÃ­veis!', NULL, NULL, 'Web-Banner-Curso-CTC_1900x600px_B2.jpg', 'Banner', 1, NULL, NULL),
(10, 1, 'Nossa EficiÃªncia garante a sua economia', '', 'ConheÃ§a nossas soluÃ§Ãµes', NULL, NULL, 'eficiencia-energetica-banner-site.jpg', 'Banner', 1, NULL, NULL),
(11, 2, 'SeguranÃ§a de Maquinas e Sensores', '', '', '', 'Cortinas de Luz de SeguranÃ§a, Controladores Programados de SeguranÃ§a', '1614800644.jpg', 'Carrousel', 1, NULL, NULL),
(12, 2, 'Paineis ElÃ©tricos', '', '', '', 'CubÃ­culos MT, Centro de Controle de Motores', '1614800662.jpg', 'Carrousel', 1, NULL, NULL),
(13, 2, 'Tintas e Vernizes', NULL, NULL, NULL, 'Tinta Liquida, Tinta Pó', NULL, 'Carrousel', 1, NULL, NULL),
(14, 2, 'Partes e PeÃ§as', '', '', '', 'Equipamentos de grande porte', '1614800669.jpg', 'Carrousel', 1, NULL, NULL),
(15, 2, 'ServiÃ§os', '', '', '', 'AutomÃ¡tico,  Motores e Geradores', '1614800686.jpg', 'Carrousel', 1, NULL, NULL),
(16, 2, 'Motores ElÃ©tricos', '', '', '', 'MonofÃ¡sico, TrifÃ¡sico - Baixa TensÃ£o', '1614800705.jpg', 'Carrousel', 1, NULL, NULL),
(17, 2, 'Motorredutores', NULL, NULL, NULL, 'Motorredutores, Redutores', NULL, 'Carrousel', 1, NULL, NULL),
(18, 2, 'GeraÃ§Ã£o, TransmissÃ£o e DistribuiÃ§Ã£o', '', '', '', 'Geradores, Turbinas HidrÃ¡ulicas', '1614800800.jpg', 'Carrousel', 1, NULL, NULL),
(19, 2, 'AutomaÃ§Ã£o e Controle Industrial', '', '', '', 'Drives, Dispositivos para Conectividade e Monitoramento', '1614800808.jpg', 'Carrousel', 1, NULL, NULL),
(20, 2, 'Building & Infrastructure', NULL, NULL, NULL, 'Tomadas e Interruptores Residenciais, Plugues e Tomadas Industriais', NULL, 'Carrousel', 1, NULL, NULL),
(21, 2, 'Critical Power', NULL, NULL, NULL, 'Residencial, Corporativo / Empresas', NULL, 'Carrousel', 1, NULL, NULL),
(22, 3, 'Quer saber como transformamos energia em soluÃ§Ãµes?', '', 'Conheï¿½a nossas soluï¿½ï¿½es com mï¿½quinas elï¿½tricas, automaï¿½ï¿½o e sistemas de energia para a indï¿½stria e descubra como os nossos negï¿½cios se interligam para melhorar sua empresa.', '', '', '1614800815.jpg', 'info', 1, NULL, 'Descubra mais, veja o infográfico'),
(23, 4, 'NÃ³s somos a WEG, movidos por energia, tecnologia, desafios e por oportunidades.', '', '', '', '', '1614800823.jpg', 'Video', 1, 'WEG - Vídeo Institucional 2019', NULL),
(24, 5, 'ConheÃ§a nossas Ãreas de soluÃ§Ãµes', 'Eficiï¿½ncia Energï¿½tica, Energia', '', 'Conheï¿½a as soluï¿½ï¿½es WEG em Eficiï¿½ncia Energï¿½tica que irï¿½o otimizar o seu negï¿½cio, Soluï¿½ï¿½es WEG para a indï¿½stria de Energia', '', '1614800869.jpg', 'SoluÃ§Ãµes', 1, NULL, NULL),
(25, 4, 'ConheÃ§a o WEG Motor Scan, a soluÃ§Ã£o para o monitoramento de performance de motores elÃ©tricos', '', '', '', '', '1614800897.jpg', 'video', 1, 'Solução para acompanhamento do funcionamento de motores na indústria - WEG Digital Solutions', 'Clique Aqui e saiba Mais'),
(26, 6, 'Payback Solar', NULL, 'Baixe nosso aplicativo e calcule o retorno financeiro que teria adotando as soluções em Energia Solar WEG.', NULL, NULL, 'banner_payback_solar-1280x490.png', 'Sombreado', 1, NULL, 'IOS, ANDROID'),
(27, 6, 'Descubra como o motor elÃ©trico pode tornar a sua indÃºstria mais eficiente.', '', 'Acesse nosso aplicativo de cï¿½lculo de eficiï¿½ncia energï¿½tica e simule os ganhos que vocï¿½ pode obter com a troca de motores elï¿½tricos.', '', '', '1614800910.jpg', 'Sombreado', 1, NULL, 'Saiba Mais'),
(28, 3, 'RelaÃ§Ã£o com a comunidade', '', 'A WEG busca impactar positivamente nas comunidades locais onde estÃ¡ inserida. Projetos sociais que tragam mais educaÃ§Ã£o, cultura, saÃºde e inclusÃ£o social sÃ£o importantes para estimular uma sociedade com mais oportunidades e qualidade de vida para as pessoas.', '', '', '1615393963.jpg', 'Info', 1, NULL, 'Saiba Mais'),
(29, 3, 'Acompanhe as novidades', 'WEG recebe certificação no Programa de Qualificação da CSA, WEG lança pacote de acionamento descentr', NULL, 'A WEG Motores, divisão da WEG que fabrica motores e redutores, acaba de renovar sua Qualificação de Laboratórios de Teste, Redutores WG20 com motor integrado EUSAS operando a 100/120 Hz para o dobro da potência com MW500', NULL, '9438095343646.jpg', 'Info', 1, NULL, 'Mais, Mais');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
