-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2016 às 00:06
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gerensys_site`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

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
(8, 3, 'Sistema - Características'),
(9, 3, 'Sistema - Homologacoes'),
(10, 3, 'Sistema - Modulos');

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
  `ModuloFrenteCaixa` int(11) DEFAULT '0',
  `ModuloBasico` int(11) DEFAULT '0',
  `ModuoAvancado` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`Id`, `IdContainer`, `Ordem`, `Titulo`, `SubTitulo`, `Imagem`, `Imagem_2`, `Descricao`, `Tags`, `Class`, `ModuloFrenteCaixa`, `ModuloBasico`, `ModuoAvancado`) VALUES
(1, 2, 1, 'SAT-CF-e', '', 'SAT(2).png', '', 'O Automac etá em pleno atendimento dessa nova portaria!</p>\r\n<p> O SAT substitui os emissores de cupons fiscais (ECFs) e é de uso obrigatório desde 1% de julho de 2015,inicialmente por novos contribuintes, estabelecimentos comerciais cujos equipamentos ECF tenham 5 anos de uso, e por todos os postos de combustíveis que utilizam ECF. A legislação que trata do SAT-CF- está aprovada nacionalmente (Ajuste) SINIEF 11/2010) e a transição para o novo sistema, em São Paulo está prevista na Portaria CAT 147/2012.\r\n\r\n<p>O SAT praticamente elimina erros no envio, fator que contribui para a redução do número de reclamações dos consumidores, autuações e multas dos lojistas. Os extratos dos documentos fiscais emitidos pelo sistema imprime o código QRCode, que permiti ao consumidor checar dados da compra e a validade do documento com o uso de Smartphone e aplicativo específico da Sefaz.</p>\r\n\r\n<p>Os varejistas não precisam mais instalar um equipamento por caixa. O SAT pode ser compartilhado por vários caixas, impressoras e rede de internet. Se o ponto-de-venda não estiver conectado à internet, o equipamento armazena todas as operações para serem enviadas à Fazenda assim que estabelecer conexão à Internet, ou pelo computador do escritório do estabelecimento comercial.</p>\r\n                    \r\nFonte e pesquisa de outras informações: <a target="_black" href="http://www.fazenda.sp.gov.br/sat">www.fazenda.sp.gov.br/sat</a>. ', 'SAT FISCAL NOTA CF', '', 0, 0, 0),
(2, 2, 3, 'Acesso ao CEP', '', 'correios.png', '', 'O recurso de <strong>Acesso ao CEP</strong>, interage entre o <strong>cadastro de CEP dos Correios</strong> \r\n                        e o sistema <strong>Automac</strong>, a fim de agilizar o cadastro de clientes e fornecedores, como também\r\n                        confirmar a veracidade do endereço.', 'Acesso CEP Correio Integração', '', 0, 0, 0),
(3, 2, 6, 'E-Automac (Automac Móvel)', '', 'Mobile.png', '', 'Possibilita, mesmo a distância, o vendedor fazer um pedido de venda diretamente do estabelecimento do cliente com a possibilidade \r\n                        da sua empresa separar a mercadoria e emitir NF-e antes mesmo do vendedor se despedir do comprador. Para fazer um pedido de compra \r\n                        diretamente no fornecedor olhando para a realidade do seu próprio estoque em tempo-real, para analisar o giro de estoque antes de \r\n                        tomadas de decisões estratégicas e fundamentais para a rentabilidade da empresa: Consulte-nos', 'Sistema Mobile', '', 0, 0, 0),
(4, 2, 5, 'Integração entre Lojas', '', 'Integracao(2).png', '', '    <strong>Automac Integração "on-line"</strong> - Permite interligar o banco de dados entre estabelecimentos do grupo.\r\n                        Tem como características: a unificação do cadastro de produtos, clientes e fornecedores; consulta em \r\n                        tempo real dos estoques; controle da utilização do limite de crédito -  considerando os movimentos \r\n                        em todas as unidades do grupo; controle de inadimplência - independente da origem; transferência de \r\n                        mercadorias com controle automático de estoques; atualização de preços nas filiais a partir da matriz.\r\n                    ', 'Integração Sistema', '', 0, 0, 0),
(5, 2, 4, 'Cobrança Bancária', 'Módulo adicional do Automac\r\n', 'cobranca_escritural.png', '', 'A Cobrança Escritural interage entre o Aplicativo de Cobrança dos Bancos e o sistema AUTOMAC, enviando arquivos textos contendo os dados dos Boletos Bancários - e recebendo os arquivos de retorno “pagamentos efetuados”.  E, ao receber os arquivos de retorno, automaticamente as quitações dos títulos pagos, são efetuadas no sistema.', 'Cobrança Bancária On-Line Boletos', '', 0, 0, 0),
(6, 1, 0, 'Sistema de Automação Comercial - Automac', 'Uma solução ideal para o seu comércio!', 'Balcao_venda.jpg', '', 'O Ponto de Venda apresenta facilidades e segurança nas operações.</p>\r\n\r\n<p>As telas de venda, são facilmente parametrizadas de forma a atender as necessidades de cada empresa usuária.</p>\r\n\r\n<p>O Controle da movimentação do Caixa é garantido e prático, e disponibiliza o detalhamento de todas as operações realizadas.</p>\r\n\r\n<p>Atende a legislação da Transparência Tributária e SAT-CFe. (Sistema Autenticador e transmissor do Cupom Fiscal Eletrônico).</p>\r\n\r\n<p>Homologado para o uso do TEF (Transferência Eletrônica de Fundos).\r\n', 'Sistema Automação Comercial Frente Caixa', 'slide-caixa', 0, 0, 0),
(7, 1, 0, 'Pré-Venda', 'Rotina Amigável e rica em informações para as negociações da venda.', 'Pedido_De_Venda.jpg', '', 'A rotina de pré-venda disponibiliza ao atendente informações rápidas sobre o produto/serviço, preços e estoque\r\n                      , bem como, seu prefil financeiro e histórico de vendas anteriores</p>\r\n\r\n                        ', 'Pedido Venda Caixa Sistema', 'slide-prevenda', 0, 0, 0),
(8, 1, 0, 'Pedidos de Venda por Telefone', 'Facilidades Exclusivas', 'Venda_telefone.jpg', 'Venda_Telefone_Balcao.jpg', 'O sistema dispõe de facilidades exclusivas para o atendimento ao cliente, como: Cadastrar um cliente novo, colher o pedido de venda, disponibilizando informações das características dos produtos, preços, estoque e histórico de vendas anteriores.', 'Balcao venda direta sistema', 'slide-telefone', 0, 0, 0),
(9, 1, 0, 'Relatórios', 'Insdispensáveis no Gerenciamento.', 'relatorios_vendas.jpg', 'estrategias_relatorios_negocios.jpg', 'O sistema disponibiliza uma série de relatórios, criteriosamente desenvolvidos, para apresentação dos resultados das operações, tanto de compras, como de vendas, financeiros, estoques e etc.</p>\r\n\r\n<p>Os relatórios poderão ser implementados e outros relatórios poderão ser desenvolvidos, durante o período de implantação e manutenção do sistema.', 'Relatorios estrategicos sistema negocios', 'slide-relatorios', 0, 0, 0),
(10, 3, 0, 'Implantação', '', '', '', 'A Gerensys oferece o que tem de melhor em implantação de sistema, seguindo um Guia muito bem elaborado, ministrando os treinamentos diretamente no ambiente da implantação.<p>\r\n<p>As parametrizações do sistema são feitas de forma bem criteriosa, objetivando o bom funcionamento da política de gerenciamento da empresa usuária, seguindo cada etapa, minuciosamente.</p>\r\n<p>E todas as parametrizações são acompanhadas do usuário, coordenador da implantação, para que posteriormente tenha condições de fazer as alterações quando julgar necessário, com total autonomia.</p>\r\n<p>Consideramos a implantação concluída, quando todas as etapas do Guia de Implantação estiverem assinadas, comprovando a realização das tarefas descritas e certamente, com todas as rotinas operacionais informatizadas.\r\n', '', '', 0, 0, 0),
(11, 4, 0, 'Manutenção', '', '', '', 'Concluído o período de implantação, propomos a continuidade do atendimento, através de Contrato de Manutenção do sistema, para mantê-lo atualizado e eficaz. E, ressaltamos que, para um melhor aproveitamento do sistema, essa continuidade do nosso atendimento torna-se imprescindível.', '', '', 0, 0, 0),
(12, 5, 0, '', '', '', '', 'Manter o sistema atualizado e virtude de mudança legal, fiscal ou monetária', '', '', 0, 0, 0),
(13, 5, 0, '', '', '', '', 'Efetuar atualização de versões decorrentes da evolução do sistema', '', '', 0, 0, 0),
(14, 5, 0, '', '', '', '', 'Corrigir possíveis defeitos que possam ocorrer no sistema e que prejudicam o seu perfeito funcionamento', '', '', 0, 0, 0),
(15, 5, 0, '', '', '', '', 'Assessorar os operadores na utilização do sistema', '', '', 0, 0, 0),
(16, 5, 0, '', '', '', '', 'Dar treinamentos das implementações do sistema', '', '', 0, 0, 0),
(17, 5, 0, '', '', '', '', 'Configurar e/ou, ajustar impressões de documentos', '', '', 0, 0, 0),
(18, 5, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial', '', '', 0, 0, 0),
(19, 5, 0, '', '', '', '', 'Reinstalar o sistema', '', '', 0, 0, 0),
(20, 6, 0, '', '', '', '', 'Atendimento telefônico, e-mail e conexão remota', '', '', 0, 0, 0),
(21, 6, 0, '', '', '', '', 'Atendimento presencial, na impossibilidade de atendimento remoto;', '', '', 0, 0, 0),
(22, 7, 0, 'Automac', 'O sistema é desmembrado em três níveis de recursos operacionais: <strong>Frente de Caixa</strong>, <strong>Básico</strong> e <strong>Avançado</strong>, para proporcionar uma maior tranquilidade no momento da aquisição e/ou da implantação.', '', '', 'O sistema <strong>Automac</strong> é uma excelente solução para tornar a sua empresa mais produtiva e segura. Engloba controle de compras, controle de vendas, estoque, contas a receber, contas a pagar, fluxo de caixa, controle de comissões, e muitas outras rotinas.</p>\r\n\r\n<p>É um sistema integrado com os aplicativos de Nota Fiscal Eletrônica, Sat-CF-e (Sistema Autenticador e Transmissor do Cupom Fiscal Eletrônico) e TEF (Transferência Eletrônica de Fundos), e também de fácil interação com os periféricos de automação; gaveta de valores, balança, impressora de cheque, leitor de código de barras, e outros periféricos.\r\n', '', '', 0, 0, 0),
(23, 8, 1, '', '', '', '', 'Parametrizável para moldar-se ao modo operacional da empresa', '', '', 0, 0, 0),
(24, 8, 2, '', '', '', '', 'Simplicidade nas operações', '', '', 0, 0, 0),
(25, 8, 3, '', '', '', '', 'Telas e legendas altamente explicativas', '', '', 0, 0, 0),
(26, 8, 4, '', '', '', '', 'Controle seguro das ações dos operadores;', '', '', 0, 0, 0),
(27, 8, 5, '', '', '', '', 'Consulta facilitada das movimentações de clientes, de fornecedores, de produtos e serviços', '', '', 0, 0, 0),
(28, 8, 6, '', '', '', '', 'Facilidade na busca de informações no banco de dados, sem ter a preocupação com acentos, cedilhas, traços, espaços, maiúsculos, minúsculos, etc.', '', '', 0, 0, 0),
(30, 8, 7, '', '', '', '', 'Possui recurso para que os pontos de vendas continuem em funcionamento, mesmo quando a comunicação com o servidor for interrompida', '', '', 0, 0, 0),
(33, 8, 8, '', '', '', '', 'Fácil interação com os periféricos de automação; gaveta, leitor, balança, impressora de etiquetas, e outros.', '', '', 0, 0, 0),
(34, 5, 0, '', '', '', '', 'Prestar serviço de suporte telefônico e/ou remotamente;', '', '', 0, 0, 0),
(35, 5, 0, '', '', '', '', 'Ministrar treinamentos das implementações do sistema;', '', '', 0, 0, 0),
(36, 5, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial;', '', '', 0, 0, 0),
(37, 2, 2, 'Nota Fiscal Eletrônica', '\r\n', 'Nota_Fiscal_Eletronica.png', '', 'Emissão simplificada e segura.<p/>\r\n<p>Envio automático do arquivo XML, Danfe em PDF e Boleto Bancário.</p> \r\n<p>Registros das emissões de NF-e disponíveis para consulta no histórico dos clientes.</p> \r\n<p>Relatório para análise e envio à Contabilidade. ', '', '', 0, 0, 0),
(38, 9, 1, '', '', '', '', 'Sat Fiscal (Sistema Autenticador e Transmissor do Cupom Fiscal Eletrônico)', '', '', 0, 0, 0),
(39, 9, 2, '', '', '', '', 'NF-e (Nota Fiscal Eletrônica – SEFAZ)', '', '', 0, 0, 0),
(40, 9, 2, '', '', '', '', 'NFS-e (Nota Fiscal Eletrônica de Serviço - Prefeitura)', '', '', 0, 0, 0),
(41, 9, 4, '', '', '', '', 'TEF (Transferência Eletrônica de Fundos', '', '', 0, 0, 0),
(42, 10, 1, 'Usuários', '', '', '', 'Cadastro de usuários e senhas', '', '', 1, 1, 1),
(43, 10, 1, 'Usuários', '', '', '', 'Controle de permissão e bloqueios de acesso às rotinas operacionais ', '', '', 1, 1, 1),
(44, 10, 1, 'Produtos', '', '', '', 'Cadastro de produtos', '', '', 1, 1, 1),
(45, 10, 1, 'Produtos', '', '', '', 'Cadastro de códigos alternativos (possibilidade de vincular vários códigos para um mesmo produto).', '', '', 1, 1, 1),
(46, 10, 1, 'Produtos', '', '', '', 'Geração de códigos de barras para produtos sem código.', '', '', 1, 1, 1),
(47, 10, 1, 'Produtos', '', '', '', 'Produtos em promoções (diversas opções)', '', '', 1, 1, 1),
(48, 10, 1, 'Produtos', '', '', '', 'Recursos facilitados para manutenção nos cadastros de produtos.', '', '', 1, 1, 1),
(49, 10, 1, 'Vendas', '', '', '', 'Cadastro de cliente.s', '', '', 1, 1, 1),
(50, 10, 1, 'Vendas', '', '', '', 'Parametrização de vendas (desconto, alterações, e etc.).', '', '', 1, 1, 1),
(51, 10, 1, 'Vendas', '', '', '', 'Vendas em dinheiro, cartão de crédito e débito.', '', '', 1, 1, 1),
(52, 10, 1, 'Caixa', '', '', '', 'Controle da movimentação do Caixa: Saldo inicial, entradas por forma de pagamento e suprimentos, saídas por cancelamentos e sangrias.', '', '', 1, 1, 1),
(53, 10, 1, 'Fiscal', '', '', '', 'Nota Fiscal Paulista.', '', '', 1, 1, 1),
(54, 10, 1, 'Fiscal', '', '', '', 'Emissão por ECF (emissor de cupom fiscal – ainda no tempo de validade).', '', '', 1, 1, 1),
(55, 10, 1, 'Fiscal', '', '', '', 'Emissão por Sat-Fiscal (cupom fiscal eletrônico).', '', '', 1, 1, 1),
(56, 10, 1, 'Produtos', '', '', '', 'Múltiplas tabelas de preços de venda.', '', '', 0, 1, 1),
(57, 10, 1, 'Produtos', '', '', '', 'Emissão de etiquetas de gôndola e código de barras.', '', '', 0, 1, 1),
(58, 10, 1, 'Produtos', '', '', '', 'Preços especiais por produtos e/ou clientes.', '', '', 0, 1, 1),
(59, 10, 1, 'Produtos', '', '', '', 'Análise da movimentação de venda e compra do produto.', '', '', 0, 1, 1),
(60, 10, 1, 'Vendas', '', '', '', 'Vendas a prazo (cadastro de vários planos e opção de plano especial no momento da venda).', '', '', 0, 1, 1),
(61, 10, 1, 'Vendas', '', '', '', 'Vendas em cheque (cadastro de vários planos de pré-datados, e opção de pré datar no momento da venda).', '', '', 0, 1, 1),
(62, 10, 1, 'Vendas', '', '', '', 'Controle nas vendas, como: Limite de crédito, clientes em atraso e condição de pagamento.', '', '', 0, 1, 1),
(63, 10, 1, 'Vendas', '', '', '', 'Emissão de pré-venda / comandas.', '', '', 0, 1, 1),
(64, 10, 1, 'Vendas', '', '', '', 'Emissão e/ou envio por e-mail de pedido de venda.', '', '', 0, 1, 1),
(65, 10, 1, 'Vendas', '', '', '', 'Emissão e/ou envio por e-mail de orçamentos.', '', '', 0, 1, 1),
(66, 10, 1, 'Vendas', '', '', '', 'Cálculos automáticos para produtos vendáveis em metros e quilos.', '', '', 0, 1, 1),
(67, 10, 1, 'Vendas', '', '', '', 'Controle de vendas a funcionárioss.', '', '', 0, 1, 1),
(68, 10, 1, 'Vendas', '', '', '', 'Integração Consulta SERASA.', '', '', 0, 1, 1),
(69, 10, 1, 'Vendas', '', '', '', 'Integração com o CEP.', '', '', 0, 1, 1),
(70, 10, 1, 'Compras', '', '', '', 'Cadastro de Fornecedor.', '', '', 0, 1, 1),
(71, 10, 1, 'Compras', '', '', '', 'Pedido de Compra.', '', '', 0, 1, 1),
(72, 10, 1, 'Compras', '', '', '', 'Recebimento de Mercadoria (Manualmente ou por importação do XML da NF-e).', '', '', 0, 1, 1),
(73, 10, 1, 'Compras', '', '', '', 'Entrada automática do produto no estoque, com registro do último custo do produto, custo médio ponderado.', '', '', 0, 1, 1),
(74, 10, 1, 'Compras', '', '', '', 'Inclusão automática do Contas a pagar referente a compra.', '', '', 0, 1, 1),
(75, 10, 1, 'Compras', '', '', '', 'Registro automático da compra no histórico de movimentação do Fornecedor.', '', '', 0, 1, 1),
(76, 10, 1, 'Estoque', '', '', '', 'Controle dinâmico – na compra ocorre a entrada, na venda ocorre a saída', '', '', 0, 1, 1),
(77, 10, 1, 'Estoque', '', '', '', 'Registro de outras movimentações, como: avarias, brindes, uso próprio e etc.', '', '', 0, 1, 1),
(78, 10, 1, 'Estoque', '', '', '', 'Controle automático no desmembramento de itens, exemplo: caixa em unidades.', '', '', 0, 1, 1),
(79, 10, 1, 'Estoque', '', '', '', 'Controle automático na inclusão de kit’s (entrada do kit / baixa dos itens do kit).', '', '', 0, 1, 1),
(80, 10, 1, 'Estoque', '', '', '', 'Opção de fazer reserva de estoque ao finalizar um pedido de venda.', '', '', 0, 1, 1),
(81, 10, 1, 'Estoque', '', '', '', 'Opção de informar estoque mínimo / e pedido mínimo -  para sugestão de pedido de compra.', '', '', 0, 1, 1),
(82, 10, 1, 'Estoque', '', '', '', 'Inventário – Prático e seguro.', '', '', 0, 1, 1),
(83, 10, 1, 'Financeiro', '', '', '', 'Contas a Pagar.', '', '', 0, 1, 1),
(84, 10, 1, 'Financeiro', '', '', '', 'Contas a Receber.', '', '', 0, 1, 1),
(85, 10, 1, 'Financeiro', '', '', '', 'Quitação por agrupamento de contas.', '', '', 0, 1, 1),
(86, 10, 1, 'Financeiro', '', '', '', 'Fácil visualização das pendências.', '', '', 0, 1, 1),
(87, 10, 1, 'Financeiro', '', '', '', 'Controle de cheques recebidos e emitidos.', '', '', 0, 1, 1),
(88, 10, 1, 'Financeiro', '', '', '', 'Controle de recebimento e pagamento com cheques de terceiros, com opções de rastreamento da origem e destino dos cheques.', '', '', 0, 1, 1),
(89, 10, 1, 'Produtos', '', '', '', 'Inserção de fotos por produto.', '', '', 0, 0, 1),
(90, 10, 1, 'Vendas', '', '', '', 'Cadastro de transportadoras com vínculo ao cliente.', '', '', 0, 0, 1),
(91, 10, 1, 'Vendas', '', '', '', 'Gerenciamento das Cotações de Venda – Modo Supervisor de Vendas .', '', '', 0, 0, 1),
(92, 10, 1, 'Vendas', '', '', '', 'Gerenciamento de Faturamento e Expedição – Modo Supervisor de Vendas .', '', '', 0, 0, 1),
(93, 10, 1, 'Fiscal', '', '', '', 'Emissão da NF-e (Nota Fiscal Eletrônica de Vendas).', '', '', 0, 0, 1),
(94, 10, 1, 'Compras', '', '', '', 'Pedido de compra analisado (com Banco de Dados MySQL).', '', '', 0, 0, 1),
(95, 10, 1, 'Compras', '', '', '', 'Controle de trocas de mercadorias com fornecedores.', '', '', 0, 0, 1),
(96, 10, 1, 'Financeiro', '', '', '', 'Controle de Despesas Fixas.', '', '', 0, 0, 1),
(97, 10, 1, 'Financeiro', '', '', '', 'Lançamentos de Despesas Avulsas.', '', '', 0, 0, 1),
(98, 10, 1, 'Financeiro', '', '', '', 'Fluxo de Caixa.', '', '', 0, 0, 1),
(99, 10, 1, 'Financeiro', '', '', '', 'Controle de créditos de clientes.', '', '', 0, 0, 1),
(100, 10, 1, 'Financeiro', '', '', '', 'Emissão de boletos bancários - sem registro (Com registro ver Módulo Cobrança Bancária).', '', '', 0, 0, 1),
(101, 10, 1, 'Financeiro', '', '', '', 'Controle de Depósitos bancários e Devolução de cheque.', '', '', 0, 0, 1),
(102, 10, 1, 'Outros Recursos', '', '', '', 'Informações de Comissão para vendedores.', '', '', 0, 0, 1),
(103, 10, 1, 'Outros Recursos', '', '', '', 'Compras e/ou Vendas em consignação.', '', '', 0, 0, 1),
(104, 10, 1, 'Outros Recursos', '', '', '', 'Integração com Sped Fiscal.', '', '', 0, 0, 1);

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
