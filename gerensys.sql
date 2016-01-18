-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Dez-2015 às 02:46
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gerensys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `container`
--

CREATE TABLE IF NOT EXISTS `container` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTela` int(11) NOT NULL,
  `NomeContainer` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `container`
--

INSERT INTO `container` (`Id`, `IdTela`, `NomeContainer`) VALUES
(1, 1, 'Slide'),
(2, 1, 'Produtos Integrados'),
(3, 1, 'Implantação'),
(4, 1, 'Manutenção'),
(5, 1, 'Manutenção/Objetivo'),
(6, 1, 'Manutenção/Forma Prestação de Serviço'),
(7, 3, 'Sistema'),
(8, 3, 'Sistema - Características');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdContainer` int(11) NOT NULL,
  `Ordem` int(11) NOT NULL DEFAULT '0',
  `Titulo` varchar(50) NOT NULL,
  `SubTitulo` text NOT NULL,
  `Imagem` varchar(30) NOT NULL,
  `Imagem_2` varchar(50) NOT NULL,
  `Descricao` text NOT NULL,
  `Tags` varchar(50) NOT NULL,
  `Class` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`Id`, `IdContainer`, `Ordem`, `Titulo`, `SubTitulo`, `Imagem`, `Imagem_2`, `Descricao`, `Tags`, `Class`) VALUES
(1, 2, 1, 'SAT-CF-e', '', 'SAT(2).png', '', 'O Automac etá em pleno atendimento dessa nova portaria!</p>\r\n<p> O SAT substitui os emissores de cupons fiscais (ECFs) e é de uso obrigatório desde 1% de julho de 2015,inicialmente por novos contribuintes, estabelecimentos comerciais cujos equipamentos ECF tenham 5 anos de uso, e por todos os postos de combustíveis que utilizam ECF. A legislação que trata do SAT-CF- está aprovada nacionalmente (Ajuste) SINIEF 11/2010) e a transição para o novo sistema, em São Paulo está prevista na Portaria CAT 147/2012.\r\n\r\n<p>O SAT praticamente elimina erros no envio, fator que contribui para a redução do número de reclamações dos consumidores, autuações e multas dos lojistas. Os extratos dos documentos fiscais emitidos pelo sistema imprime o código QRCode, que permiti ao consumidor checar dados da compra e a validade do documento com o uso de Smartphone e aplicativo específico da Sefaz.</p>\r\n\r\n<p>Os varejistas não precisam mais instalar um equipamento por caixa. O SAT pode ser compartilhado por vários caixas, impressoras e rede de internet. Se o ponto-de-venda não estiver conectado à internet, o equipamento armazena todas as operações para serem enviadas à Fazenda assim que estabelecer conexão à Internet, ou pelo computador do escritório do estabelecimento comercial.</p>\r\n                    \r\nFonte e pesquisa de outras informações: <a target="_black" href="http://www.fazenda.sp.gov.br/sat">www.fazenda.sp.gov.br/sat</a>. ', 'SAT FISCAL NOTA CF', ''),
(2, 2, 3, 'Acesso ao CEP', '', 'correios.png', '', 'O recurso de <strong>Acesso ao CEP</strong>, interage entre o <strong>cadastro de CEP dos Correios</strong> \r\n                        e o sistema <strong>Automac</strong>, a fim de agilizar o cadastro de clientes e fornecedores, como também\r\n                        confirmar a veracidade do endereço.', 'Acesso CEP Correio Integração', ''),
(3, 2, 6, 'E-Automac (Automac Móvel)', '', 'Mobile.png', '', 'Possibilita, mesmo a distância, o vendedor fazer um pedido de venda diretamente do estabelecimento do cliente com a possibilidade \r\n                        da sua empresa separar a mercadoria e emitir NF-e antes mesmo do vendedor se despedir do comprador. Para fazer um pedido de compra \r\n                        diretamente no fornecedor olhando para a realidade do seu próprio estoque em tempo-real, para analisar o giro de estoque antes de \r\n                        tomadas de decisões estratégicas e fundamentais para a rentabilidade da empresa: Consulte-nos', 'Sistema Mobile', ''),
(4, 2, 5, 'Integração entre Lojas', '', 'Integracao(2).png', '', '    <strong>Automac Integração "on-line"</strong> - Permite interligar o banco de dados entre estabelecimentos do grupo.\r\n                        Tem como características: a unificação do cadastro de produtos, clientes e fornecedores; consulta em \r\n                        tempo real dos estoques; controle da utilização do limite de crédito -  considerando os movimentos \r\n                        em todas as unidades do grupo; controle de inadimplência - independente da origem; transferência de \r\n                        mercadorias com controle automático de estoques; atualização de preços nas filiais a partir da matriz.\r\n                    ', 'Integração Sistema', ''),
(5, 2, 4, 'Cobrança Bancária', 'Módulo adicional do Automac\r\n', 'cobranca_escritural.png', '', 'A Cobrança Escritural interage entre o Aplicativo de Cobrança dos Bancos e o sistema AUTOMAC, enviando arquivos textos contendo os dados dos Boletos Bancários - e recebendo os arquivos de retorno “pagamentos efetuados”.  E, ao receber os arquivos de retorno, automaticamente as quitações dos títulos pagos, são efetuadas no sistema.', 'Cobrança Bancária On-Line Boletos', ''),
(6, 1, 0, 'Sistema de Automação Comercial - Automac', 'Uma solução ideal para o seu comércio!', 'Balcao_venda.jpg', '', 'O Ponto de Venda apresenta facilidades e segurança nas operações.</p>\r\n\r\n<p>As telas de venda, são facilmente parametrizadas de forma a atender as necessidades de cada empresa usuária.</p>\r\n\r\n<p>O Controle da movimentação do Caixa é garantido e prático, e disponibiliza o detalhamento de todas as operações realizadas.</p>\r\n\r\n<p>Atende a legislação da Transparência Tributária e SAT-CFe. (Sistema Autenticador e transmissor do Cupom Fiscal Eletrônico).</p>\r\n\r\n<p>Homologado para o uso do TEF (Transferência Eletrônica de Fundos).\r\n', 'Sistema Automação Comercial Frente Caixa', 'slide-caixa'),
(7, 1, 0, 'Pré-Venda', 'Rotina Amigável e rica em informações para as negociações da venda.', 'Pedido_De_Venda.jpg', '', 'A rotina de pré-venda disponibiliza ao atendente informações rápidas sobre o produto/serviço, preços e estoque\r\n                      , bem como, seu prefil financeiro e histórico de vendas anteriores</p>\r\n\r\n                        ', 'Pedido Venda Caixa Sistema', 'slide-prevenda'),
(8, 1, 0, 'Pedidos de Venda por Telefone', 'Facilidades Exclusivas', 'Venda_telefone.jpg', 'Venda_Telefone_Balcao.jpg', 'O sistema dispõe de facilidades exclusivas para o atendimento ao cliente, como: Cadastrar um cliente novo, colher o pedido de venda, disponibilizando informações das características dos produtos, preços, estoque e histórico de vendas anteriores.', 'Balcao venda direta sistema', 'slide-telefone'),
(9, 1, 0, 'Relatórios', 'Insdispensáveis no Gerenciamento.', 'relatorios_vendas.jpg', 'estrategias_relatorios_negocios.jpg', 'O sistema disponibiliza uma série de relatórios, criteriosamente desenvolvidos, para apresentação dos resultados das operações, tanto de compras, como de vendas, financeiros, estoques e etc.</p>\r\n\r\n<p>Os relatórios poderão ser implementados e outros relatórios poderão ser desenvolvidos, durante o período de implantação e manutenção do sistema.', 'Relatorios estrategicos sistema negocios', 'slide-relatorios'),
(10, 3, 0, 'Implantação', '', '', '', 'A Gerensys oferece o que tem de melhor em implantação de sistema, seguindo um Guia muito bem elaborado, ministrando os treinamentos diretamente no ambiente da implantação.<p>\r\n<p>As parametrizações do sistema são feitas de forma bem criteriosa, objetivando o bom funcionamento da política de gerenciamento da empresa usuária, seguindo cada etapa, minuciosamente.</p>\r\n<p>E todas as parametrizações são acompanhadas do usuário, coordenador da implantação, para que posteriormente tenha condições de fazer as alterações quando julgar necessário, com total autonomia.</p>\r\n<p>Consideramos a implantação concluída, quando todas as etapas do Guia de Implantação estiverem assinadas, comprovando a realização das tarefas descritas e certamente, com todas as rotinas operacionais informatizadas.\r\n', '', ''),
(11, 4, 0, 'Manutenção', '', '', '', 'Concluído o período de implantação, propomos a continuidade do atendimento, através de Contrato de Manutenção do sistema, para mantê-lo atualizado e eficaz. E, ressaltamos que, para um melhor aproveitamento do sistema, essa continuidade do nosso atendimento torna-se imprescindível.', '', ''),
(12, 5, 0, '', '', '', '', 'Manter o sistema atualizado e virtude de mudança legal, fiscal ou monetária', '', ''),
(13, 5, 0, '', '', '', '', 'Efetuar atualização de versões decorrentes da evolução do sistema', '', ''),
(14, 5, 0, '', '', '', '', 'Corrigir possíveis defeitos que possam ocorrer no sistema e que prejudicam o seu perfeito funcionamento', '', ''),
(15, 5, 0, '', '', '', '', 'Assessorar os operadores na utilização do sistema', '', ''),
(16, 5, 0, '', '', '', '', 'Dar treinamentos das implementações do sistema', '', ''),
(17, 5, 0, '', '', '', '', 'Configurar e/ou, ajustar impressões de documentos', '', ''),
(18, 5, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial', '', ''),
(19, 5, 0, '', '', '', '', 'Reinstalar o sistema', '', ''),
(20, 6, 0, '', '', '', '', 'Atendimento telefônico, e-mail e conexão remota', '', ''),
(21, 6, 0, '', '', '', '', 'Atendimento presencial, na impossibilidade de atendimento remoto;', '', ''),
(22, 7, 0, 'Automac', 'O sistema é desmembrado em três níveis de recursos operacionais: <strong>Frente de Caixa</strong>, <strong>Básico</strong> e <strong>Avançado</strong>, para proporcionar uma maior tranquilidade no momento da aquisição e/ou da implantação.', '', '', 'O sistema <strong>Automac</strong> é uma excelente solução para tornar a sua empresa mais produtiva e segura. Engloba controle de compras, controle de vendas, estoque, contas a receber, contas a pagar, fluxo de caixa, controle de comissões, e muitas outras rotinas.</p>\r\n\r\n<p>É um sistema integrado com os aplicativos de Nota Fiscal Eletrônica, Sat-CF-e (Sistema Autenticador e Transmissor do Cupom Fiscal Eletrônico) e TEF (Transferência Eletrônica de Fundos), e também de fácil interação com os periféricos de automação; gaveta de valores, balança, impressora de cheque, leitor de código de barras, e outros periféricos.\r\n', '', ''),
(23, 8, 0, '', '', '', '', 'Parametrizável para moldar-se ao modo operacional da empresa', '', ''),
(24, 8, 0, '', '', '', '', 'Simplicidade nas operações', '', ''),
(25, 8, 0, '', '', '', '', 'Telas e legendas altamente explicativas', '', ''),
(26, 8, 0, '', '', '', '', 'Bloqueios automáticos a clientes inadimplentes e das operações em desacordo aos critérios pré-estabelecidos', '', ''),
(27, 8, 0, '', '', '', '', 'Controle seguro das ações dos operadores', '', ''),
(28, 8, 0, '', '', '', '', 'Consulta facilitada das movimentações de clientes, de fornecedores, de produtos e serviços', '', ''),
(29, 8, 0, '', '', '', '', 'Agilidade na localização dos produtos', '', ''),
(30, 8, 0, '', '', '', '', 'Possui recurso para que os pontos de vendas continuem em funcionamento, mesmo quando a comunicação com o servidor for interrompida', '', ''),
(31, 8, 0, '', '', '', '', 'Possibilita ao operador interromper momentaneamente uma tarefa, para ser continuada posteriormente', '', ''),
(32, 8, 0, '', '', '', '', 'Gera códigos de barras EAN8 (controle interno)', '', ''),
(33, 8, 0, '', '', '', '', 'O sistema disponibiliza uma série de relatórios gerenciais, os quais poderão ser personalizados', '', ''),
(34, 5, 0, '', '', '', '', 'Prestar serviço de suporte telefônico e/ou remotamente;', '', ''),
(35, 5, 0, '', '', '', '', 'Ministrar treinamentos das implementações do sistema;', '', ''),
(36, 5, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial;', '', ''),
(37, 2, 2, 'Nota Fiscal Eletrônica', '\r\n', 'Nota_Fiscal_Eletronica.png', '', 'Emissão simplificada e segura.<p/>\r\n<p>Envio automático do arquivo XML, Danfe em PDF e Boleto Bancário.</p> \r\n<p>Registros das emissões de NF-e disponíveis para consulta no histórico dos clientes.</p> \r\n<p>Relatório para análise e envio à Contabilidade. ', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telas`
--

CREATE TABLE IF NOT EXISTS `telas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NomeTela` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `telas`
--

INSERT INTO `telas` (`Id`, `NomeTela`) VALUES
(1, 'Home'),
(2, 'Empresa'),
(3, 'Sistema');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
