-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Fev-2016 às 18:32
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
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdTipo` int(11) NOT NULL,
  `IdSub_Tipo` int(11) NOT NULL,
  `IdSub_Tipo2` int(11) NOT NULL,
  `Ordem` int(11) NOT NULL DEFAULT '0',
  `Titulo` varchar(50) NOT NULL,
  `SubTitulo` text NOT NULL,
  `Imagem` varchar(30) NOT NULL,
  `Imagem_2` varchar(50) NOT NULL,
  `Descricao` text NOT NULL,
  `Tags` varchar(50) NOT NULL,
  `Class` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`Id`, `IdTipo`, `IdSub_Tipo`, `IdSub_Tipo2`, `Ordem`, `Titulo`, `SubTitulo`, `Imagem`, `Imagem_2`, `Descricao`, `Tags`, `Class`) VALUES
(1, 2, 0, 0, 1, 'SAT-CF-e', '', 'SAT(2).png', '', 'O Automac etá em pleno atendimento dessa nova portaria!</p>\r\n<p> O SAT substitui os emissores de cupons fiscais (ECFs) e é de uso obrigatório desde 1% de julho de 2015,inicialmente por novos contribuintes, estabelecimentos comerciais cujos equipamentos ECF tenham 5 anos de uso, e por todos os postos de combustíveis que utilizam ECF. A legislação que trata do SAT-CF- está aprovada nacionalmente (Ajuste) SINIEF 11/2010) e a transição para o novo sistema, em São Paulo está prevista na Portaria CAT 147/2012.\r\n\r\n<p>O SAT praticamente elimina erros no envio, fator que contribui para a redução do número de reclamações dos consumidores, autuações e multas dos lojistas. Os extratos dos documentos fiscais emitidos pelo sistema imprime o código QRCode, que permiti ao consumidor checar dados da compra e a validade do documento com o uso de Smartphone e aplicativo específico da Sefaz.</p>\r\n\r\n<p>Os varejistas não precisam mais instalar um equipamento por caixa. O SAT pode ser compartilhado por vários caixas, impressoras e rede de internet. Se o ponto-de-venda não estiver conectado à internet, o equipamento armazena todas as operações para serem enviadas à Fazenda assim que estabelecer conexão à Internet, ou pelo computador do escritório do estabelecimento comercial.</p>\r\n                    \r\nFonte e pesquisa de outras informações: <a target="_black" href="http://www.fazenda.sp.gov.br/sat">www.fazenda.sp.gov.br/sat</a>. ', 'SAT FISCAL NOTA CF', ''),
(2, 2, 0, 0, 3, 'Acesso ao CEP', '', 'correios.png', '', 'O recurso de <strong>Acesso ao CEP</strong>, interage entre o <strong>cadastro de CEP dos Correios</strong> \r\n                        e o sistema <strong>Automac</strong>, a fim de agilizar o cadastro de clientes e fornecedores, como também\r\n                        confirmar a veracidade do endereço.', 'Acesso CEP Correio Integração', ''),
(3, 2, 0, 0, 6, 'E-Automac (Automac Móvel)', '', 'Mobile.png', '', 'Possibilita, mesmo a distância, o vendedor fazer um pedido de venda diretamente do estabelecimento do cliente com a possibilidade \r\n                        da sua empresa separar a mercadoria e emitir NF-e antes mesmo do vendedor se despedir do comprador. Para fazer um pedido de compra \r\n                        diretamente no fornecedor olhando para a realidade do seu próprio estoque em tempo-real, para analisar o giro de estoque antes de \r\n                        tomadas de decisões estratégicas e fundamentais para a rentabilidade da empresa: Consulte-nos', 'Sistema Mobile', ''),
(4, 2, 0, 0, 5, 'Integração entre Lojas', '', 'Integracao(2).png', '', '    <strong>Automac Integração "on-line"</strong> - Permite interligar o banco de dados entre estabelecimentos do grupo.\r\n                        Tem como características: a unificação do cadastro de produtos, clientes e fornecedores; consulta em \r\n                        tempo real dos estoques; controle da utilização do limite de crédito -  considerando os movimentos \r\n                        em todas as unidades do grupo; controle de inadimplência - independente da origem; transferência de \r\n                        mercadorias com controle automático de estoques; atualização de preços nas filiais a partir da matriz.\r\n                    ', 'Integração Sistema', ''),
(5, 2, 0, 0, 4, 'Cobrança Bancária', 'Módulo adicional do Automac\r\n', 'cobranca_escritural.png', '', 'A Cobrança Escritural interage entre o Aplicativo de Cobrança dos Bancos e o sistema AUTOMAC, enviando arquivos textos contendo os dados dos Boletos Bancários - e recebendo os arquivos de retorno “pagamentos efetuados”.  E, ao receber os arquivos de retorno, automaticamente as quitações dos títulos pagos, são efetuadas no sistema.', 'Cobrança Bancária On-Line Boletos', ''),
(6, 1, 0, 0, 0, 'Sistema de Automação Comercial - Automac', 'Uma solução ideal para o seu comércio!', 'Balcao_venda.jpg', '', 'O Ponto de Venda apresenta facilidades e segurança nas operações.</p>\r\n\r\n<p>As telas de venda, são facilmente parametrizadas de forma a atender as necessidades de cada empresa usuária.</p>\r\n\r\n<p>O Controle da movimentação do Caixa é garantido e prático, e disponibiliza o detalhamento de todas as operações realizadas.</p>\r\n\r\n<p>Atende a legislação da Transparência Tributária e SAT-CFe. (Sistema Autenticador e transmissor do Cupom Fiscal Eletrônico).</p>\r\n\r\n<p>Homologado para o uso do TEF (Transferência Eletrônica de Fundos).\r\n', 'Sistema Automação Comercial Frente Caixa', 'slide-caixa'),
(7, 1, 0, 0, 0, 'Pré-Venda', 'Rotina Amigável e rica em informações para as negociações da venda.', 'Pedido_De_Venda.jpg', '', 'A rotina de pré-venda disponibiliza ao atendente informações rápidas sobre o produto/serviço, preços e estoque\r\n                      , bem como, seu prefil financeiro e histórico de vendas anteriores</p>\r\n\r\n                        ', 'Pedido Venda Caixa Sistema', 'slide-prevenda'),
(8, 1, 0, 0, 0, 'Pedidos de Venda por Telefone', 'Facilidades Exclusivas', 'Venda_telefone.jpg', 'Venda_Telefone_Balcao.jpg', 'O sistema dispõe de facilidades exclusivas para o atendimento ao cliente, como: Cadastrar um cliente novo, colher o pedido de venda, disponibilizando informações das características dos produtos, preços, estoque e histórico de vendas anteriores.', 'Balcao venda direta sistema', 'slide-telefone'),
(9, 1, 0, 0, 0, 'Relatórios', 'Insdispensáveis no Gerenciamento.', 'relatorios_vendas.jpg', 'estrategias_relatorios_negocios.jpg', 'O sistema disponibiliza uma série de relatórios, criteriosamente desenvolvidos, para apresentação dos resultados das operações, tanto de compras, como de vendas, financeiros, estoques e etc.</p>\r\n\r\n<p>Os relatórios poderão ser implementados e outros relatórios poderão ser desenvolvidos, durante o período de implantação e manutenção do sistema.', 'Relatorios estrategicos sistema negocios', 'slide-relatorios'),
(10, 3, 0, 0, 0, 'Implantação', '', '', '', 'A Gerensys oferece o que tem de melhor em implantação de sistema, seguindo um Guia muito bem elaborado, ministrando os treinamentos diretamente no ambiente da implantação.<p>\r\n<p>As parametrizações do sistema são feitas de forma bem criteriosa, objetivando o bom funcionamento da política de gerenciamento da empresa usuária, seguindo cada etapa, minuciosamente.</p>\r\n<p>E todas as parametrizações são acompanhadas do usuário, coordenador da implantação, para que posteriormente tenha condições de fazer as alterações quando julgar necessário, com total autonomia.</p>\r\n<p>Consideramos a implantação concluída, quando todas as etapas do Guia de Implantação estiverem assinadas, comprovando a realização das tarefas descritas e certamente, com todas as rotinas operacionais informatizadas.\r\n', '', ''),
(11, 4, 0, 0, 0, 'Manutenção', '', '', '', 'Concluído o período de implantação, propomos a continuidade do atendimento, através de Contrato de Manutenção do sistema, para mantê-lo atualizado e eficaz. E, ressaltamos que, para um melhor aproveitamento do sistema, essa continuidade do nosso atendimento torna-se imprescindível.', '', ''),
(12, 5, 0, 0, 0, '', '', '', '', 'Manter o sistema atualizado e virtude de mudança legal, fiscal ou monetária', '', ''),
(13, 5, 0, 0, 0, '', '', '', '', 'Efetuar atualização de versões decorrentes da evolução do sistema', '', ''),
(14, 5, 0, 0, 0, '', '', '', '', 'Corrigir possíveis defeitos que possam ocorrer no sistema e que prejudicam o seu perfeito funcionamento', '', ''),
(15, 5, 0, 0, 0, '', '', '', '', 'Assessorar os operadores na utilização do sistema', '', ''),
(16, 5, 0, 0, 0, '', '', '', '', 'Dar treinamentos das implementações do sistema', '', ''),
(17, 5, 0, 0, 0, '', '', '', '', 'Configurar e/ou, ajustar impressões de documentos', '', ''),
(18, 5, 0, 0, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial', '', ''),
(19, 5, 0, 0, 0, '', '', '', '', 'Reinstalar o sistema', '', ''),
(20, 6, 0, 0, 0, '', '', '', '', 'Atendimento telefônico, e-mail e conexão remota', '', ''),
(21, 6, 0, 0, 0, '', '', '', '', 'Atendimento presencial, na impossibilidade de atendimento remoto;', '', ''),
(22, 7, 0, 0, 0, 'Automac', 'O sistema é desmembrado em três níveis de recursos operacionais: <strong>Frente de Caixa</strong>, <strong>Básico</strong> e <strong>Avançado</strong>, para proporcionar uma maior tranquilidade no momento da aquisição e/ou da implantação.', '', '', 'O sistema <strong>Automac</strong> é uma excelente solução para tornar a sua empresa mais produtiva e segura. Engloba controle de compras, controle de vendas, estoque, contas a receber, contas a pagar, fluxo de caixa, controle de comissões, e muitas outras rotinas.</p>\r\n\r\n<p>É um sistema integrado com os aplicativos de Nota Fiscal Eletrônica, Sat-CF-e (Sistema Autenticador e Transmissor do Cupom Fiscal Eletrônico) e TEF (Transferência Eletrônica de Fundos), e também de fácil interação com os periféricos de automação; gaveta de valores, balança, impressora de cheque, leitor de código de barras, e outros periféricos.\r\n', '', ''),
(23, 8, 0, 0, 1, '', '', '', '', 'Parametrizável para moldar-se ao modo operacional da empresa', '', ''),
(24, 8, 0, 0, 2, '', '', '', '', 'Simplicidade nas operações', '', ''),
(25, 8, 0, 0, 3, '', '', '', '', 'Telas e legendas altamente explicativas', '', ''),
(26, 8, 0, 0, 4, '', '', '', '', 'Controle seguro das ações dos operadores;', '', ''),
(27, 8, 0, 0, 5, '', '', '', '', 'Consulta facilitada das movimentações de clientes, de fornecedores, de produtos e serviços', '', ''),
(28, 8, 0, 0, 6, '', '', '', '', 'Facilidade na busca de informações no banco de dados, sem ter a preocupação com acentos, cedilhas, traços, espaços, maiúsculos, minúsculos, etc.', '', ''),
(30, 8, 0, 0, 7, '', '', '', '', 'Possui recurso para que os pontos de vendas continuem em funcionamento, mesmo quando a comunicação com o servidor for interrompida', '', ''),
(33, 8, 0, 0, 8, '', '', '', '', 'Fácil interação com os periféricos de automação; gaveta, leitor, balança, impressora de etiquetas, e outros.', '', ''),
(34, 5, 0, 0, 0, '', '', '', '', 'Prestar serviço de suporte telefônico e/ou remotamente;', '', ''),
(35, 5, 0, 0, 0, '', '', '', '', 'Ministrar treinamentos das implementações do sistema;', '', ''),
(36, 5, 0, 0, 0, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial;', '', ''),
(37, 2, 0, 0, 2, 'Nota Fiscal Eletrônica', '\r\n', 'Nota_Fiscal_Eletronica.png', '', 'Emissão simplificada e segura.<p/>\r\n<p>Envio automático do arquivo XML, Danfe em PDF e Boleto Bancário.</p> \r\n<p>Registros das emissões de NF-e disponíveis para consulta no histórico dos clientes.</p> \r\n<p>Relatório para análise e envio à Contabilidade. ', '', ''),
(38, 9, 0, 0, 1, '', '', '', '', 'Sat Fiscal (Sistema Autenticador e Transmissor do Cupom Fiscal Eletrônico)', '', ''),
(39, 9, 0, 0, 2, '', '', '', '', 'NF-e (Nota Fiscal Eletrônica – SEFAZ)', '', ''),
(40, 9, 0, 0, 2, '', '', '', '', 'NFS-e (Nota Fiscal Eletrônica de Serviço - Prefeitura)', '', ''),
(41, 9, 0, 0, 4, '', '', '', '', 'TEF (Transferência Eletrônica de Fundos', '', ''),
(42, 10, 1, 1, 1, 'Usuários', '', '', '', 'Cadastro de usuários e senhas', '', ''),
(43, 10, 1, 1, 1, 'Usuários', '', '', '', 'Controle de permissão e bloqueios de acesso às rotinas operacionais ', '', ''),
(44, 10, 1, 2, 1, 'Produtos', '', '', '', 'Cadastro de produtos', '', ''),
(45, 10, 1, 2, 1, 'Produtos', '', '', '', 'Cadastro de códigos alternativos (possibilidade de vincular vários códigos para um mesmo produto).', '', ''),
(46, 10, 1, 2, 1, 'Produtos', '', '', '', 'Geração de códigos de barras para produtos sem código.', '', ''),
(47, 10, 1, 2, 1, 'Produtos', '', '', '', 'Produtos em promoções (diversas opções)', '', ''),
(48, 10, 1, 2, 1, 'Produtos', '', '', '', 'Recursos facilitados para manutenção nos cadastros de produtos.', '', ''),
(49, 10, 1, 3, 1, 'Vendas', '', '', '', 'Cadastro de cliente.s', '', ''),
(50, 10, 1, 3, 1, 'Vendas', '', '', '', 'Parametrização de vendas (desconto, alterações, e etc.).', '', ''),
(51, 10, 1, 3, 1, 'Vendas', '', '', '', 'Vendas em dinheiro, cartão de crédito e débito.', '', ''),
(52, 10, 1, 4, 1, 'Caixa', '', '', '', 'Controle da movimentação do Caixa: Saldo inicial, entradas por forma de pagamento e suprimentos, saídas por cancelamentos e sangrias.', '', ''),
(53, 10, 1, 5, 1, 'Fiscal', '', '', '', 'Nota Fiscal Paulista.', '', ''),
(54, 10, 1, 5, 1, 'Fiscal', '', '', '', 'Emissão por ECF (emissor de cupom fiscal – ainda no tempo de validade).', '', ''),
(55, 10, 1, 5, 1, 'Fiscal', '', '', '', 'Emissão por Sat-Fiscal (cupom fiscal eletrônico).', '', ''),
(56, 10, 2, 2, 1, 'Produtos', '', '', '', 'Múltiplas tabelas de preços de venda.', '', ''),
(57, 10, 2, 2, 1, 'Produtos', '', '', '', 'Emissão de etiquetas de gôndola e código de barras.', '', ''),
(58, 10, 2, 2, 1, 'Produtos', '', '', '', 'Preços especiais por produtos e/ou clientes.', '', ''),
(59, 10, 2, 2, 1, 'Produtos', '', '', '', 'Análise da movimentação de venda e compra do produto.', '', ''),
(60, 10, 2, 3, 1, 'Vendas', '', '', '', 'Vendas a prazo (cadastro de vários planos e opção de plano especial no momento da venda).', '', ''),
(61, 10, 2, 3, 1, 'Vendas', '', '', '', 'Vendas em cheque (cadastro de vários planos de pré-datados, e opção de pré datar no momento da venda).', '', ''),
(62, 10, 2, 3, 1, 'Vendas', '', '', '', 'Controle nas vendas, como: Limite de crédito, clientes em atraso e condição de pagamento.', '', ''),
(63, 10, 2, 3, 1, 'Vendas', '', '', '', 'Emissão de pré-venda / comandas.', '', ''),
(64, 10, 2, 3, 1, 'Vendas', '', '', '', 'Emissão e/ou envio por e-mail de pedido de venda.', '', ''),
(65, 10, 2, 3, 1, 'Vendas', '', '', '', 'Emissão e/ou envio por e-mail de orçamentos.', '', ''),
(66, 10, 2, 3, 1, 'Vendas', '', '', '', 'Cálculos automáticos para produtos vendáveis em metros e quilos.', '', ''),
(67, 10, 2, 3, 1, 'Vendas', '', '', '', 'Controle de vendas a funcionárioss.', '', ''),
(68, 10, 2, 3, 1, 'Vendas', '', '', '', 'Integração Consulta SERASA.', '', ''),
(69, 10, 2, 3, 1, 'Vendas', '', '', '', 'Integração com o CEP.', '', ''),
(70, 10, 2, 0, 1, 'Compras', '', '', '', 'Cadastro de Fornecedor.', '', ''),
(71, 10, 2, 0, 1, 'Compras', '', '', '', 'Pedido de Compra.', '', ''),
(72, 10, 2, 0, 1, 'Compras', '', '', '', 'Recebimento de Mercadoria (Manualmente ou por importação do XML da NF-e).', '', ''),
(73, 10, 2, 0, 1, 'Compras', '', '', '', 'Entrada automática do produto no estoque, com registro do último custo do produto, custo médio ponderado.', '', ''),
(74, 10, 2, 0, 1, 'Compras', '', '', '', 'Inclusão automática do Contas a pagar referente a compra.', '', ''),
(75, 10, 2, 0, 1, 'Compras', '', '', '', 'Registro automático da compra no histórico de movimentação do Fornecedor.', '', ''),
(76, 10, 2, 7, 1, 'Estoque', '', '', '', 'Controle dinâmico – na compra ocorre a entrada, na venda ocorre a saída', '', ''),
(77, 10, 2, 7, 1, 'Estoque', '', '', '', 'Registro de outras movimentações, como: avarias, brindes, uso próprio e etc.', '', ''),
(78, 10, 2, 7, 1, 'Estoque', '', '', '', 'Controle automático no desmembramento de itens, exemplo: caixa em unidades.', '', ''),
(79, 10, 2, 7, 1, 'Estoque', '', '', '', 'Controle automático na inclusão de kit’s (entrada do kit / baixa dos itens do kit).', '', ''),
(80, 10, 2, 7, 1, 'Estoque', '', '', '', 'Opção de fazer reserva de estoque ao finalizar um pedido de venda.', '', ''),
(81, 10, 2, 7, 1, 'Estoque', '', '', '', 'Opção de informar estoque mínimo / e pedido mínimo -  para sugestão de pedido de compra.', '', ''),
(82, 10, 2, 7, 1, 'Estoque', '', '', '', 'Inventário – Prático e seguro.', '', ''),
(83, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Contas a Pagar.', '', ''),
(84, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Contas a Receber.', '', ''),
(85, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Quitação por agrupamento de contas.', '', ''),
(86, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Fácil visualização das pendências.', '', ''),
(87, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Controle de cheques recebidos e emitidos.', '', ''),
(88, 10, 2, 8, 1, 'Financeiro', '', '', '', 'Controle de recebimento e pagamento com cheques de terceiros, com opções de rastreamento da origem e destino dos cheques.', '', ''),
(89, 10, 3, 2, 1, 'Produtos', '', '', '', 'Inserção de fotos por produto.', '', ''),
(90, 10, 3, 3, 1, 'Vendas', '', '', '', 'Cadastro de transportadoras com vínculo ao cliente.', '', ''),
(91, 10, 3, 3, 1, 'Vendas', '', '', '', 'Gerenciamento das Cotações de Venda – Modo Supervisor de Vendas .', '', ''),
(92, 10, 3, 3, 1, 'Vendas', '', '', '', 'Gerenciamento de Faturamento e Expedição – Modo Supervisor de Vendas .', '', ''),
(93, 10, 3, 5, 1, 'Fiscal', '', '', '', 'Emissão da NF-e (Nota Fiscal Eletrônica de Vendas).', '', ''),
(94, 10, 3, 0, 1, 'Compras', '', '', '', 'Pedido de compra analisado (com Banco de Dados MySQL).', '', ''),
(95, 10, 3, 0, 1, 'Compras', '', '', '', 'Controle de trocas de mercadorias com fornecedores.', '', ''),
(96, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Controle de Despesas Fixas.', '', ''),
(97, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Lançamentos de Despesas Avulsas.', '', ''),
(98, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Fluxo de Caixa.', '', ''),
(99, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Controle de créditos de clientes.', '', ''),
(100, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Emissão de boletos bancários - sem registro (Com registro ver Módulo Cobrança Bancária).', '', ''),
(101, 10, 3, 8, 1, 'Financeiro', '', '', '', 'Controle de Depósitos bancários e Devolução de cheque.', '', ''),
(102, 10, 3, 9, 1, 'Outros Recursos', '', '', '', 'Informações de Comissão para vendedores.', '', ''),
(103, 10, 3, 9, 1, 'Outros Recursos', '', '', '', 'Compras e/ou Vendas em consignação.', '', ''),
(104, 10, 3, 9, 1, 'Outros Recursos', '', '', '', 'Integração com Sped Fiscal.', '', ''),
(105, 10, 4, 10, 0, '', '', '', '', 'Cadastro dos animais Inserção de foto dos animais', '', ''),
(106, 10, 4, 10, 0, '', '', '', '', 'Cadastro de serviços – Exemplo: Banho e Tosa.', '', ''),
(107, 10, 4, 10, 0, '', '', '', '', 'Emissão da Ordem de Serviço (com possibilidade de incluir ou alterar o valor no momento de sua abertura).', '', ''),
(108, 10, 4, 10, 0, '', '', '', '', 'Consulta de serviços executados por animal.', '', ''),
(109, 10, 4, 10, 0, '', '', '', '', 'Busca do cliente pelo nome do animal.', '', ''),
(110, 10, 4, 10, 0, '', '', '', '', 'Agenda de serviços.', '', ''),
(111, 10, 4, 19, 0, '', '', '', '', 'Informações de comissão dos profissionais', '', ''),
(112, 10, 4, 19, 0, '', '', '', '', 'Histórico de consultas.', '', ''),
(113, 10, 4, 19, 0, '', '', '', '', 'Emissão do receituário.', '', ''),
(114, 10, 4, 19, 0, '', '', '', '', 'Agendamento de vacinação.', '', ''),
(115, 10, 4, 11, 0, '', '', '', '', 'Cadastro dos veículos vinculados.', '', ''),
(116, 10, 4, 11, 0, '', '', '', '', 'Emissão da Ordem de Serviço (com possibilidade de incluir ou alterar o valor no momento de sua abertura).', '', ''),
(117, 10, 4, 11, 0, '', '', '', '', 'Consulta de serviços executados por veículo.', '', ''),
(118, 10, 4, 11, 0, '', '', '', '', 'Busca do cliente pela placa do veículo.', '', ''),
(119, 10, 4, 12, 0, '', '', '', '', 'Cadastro de produtos com grade.', '', ''),
(120, 10, 4, 12, 0, '', '', '', '', 'Controle de estoque por grade.', '', ''),
(121, 10, 5, 13, 0, '', '', '', '', 'Este módulo Cobrança Bancária, interage entre o Aplicativo de Cobrança dos Bancos e o sistema AUTOMAC, enviando arquivos textos contendo os dados dos Boletos Bancários - e recebendo os arquivos de retorno “pagamentos efetuados”.  E, ao receber os arquivos de retorno, automaticamente as quitações dos títulos pagos, são efetuadas no sistema.', '', ''),
(122, 10, 5, 14, 0, '', '', '', '', 'Automac Integração entre Lojas “on-line” - Permite interligar o banco de dados entre os estabelecimentos do grupo. Tem como características: a unificação do cadastro de produtos, clientes e fornecedores; consulta em tempo real dos estoques; controle da utilização do limite de crédito - considerando os movimentos em todas as unidades do grupo; controle de inadimplência – independente da origem; transferência de mercadorias com controle automático de estoques; atualização de preços nas filiais a partir da matriz.', '', ''),
(123, 10, 5, 15, 0, '', '', '', '', 'Possibilita, mesmo a distância, o vendedor fazer um pedido de venda diretamente do estabelecimento do cliente com a possibilidade da sua empresa separar a mercadoria e emitir a NF-e antes mesmo do vendedor se despedir do comprador; Para fazer um pedido de compra diretamente no fornecedor olhando para a realidade do seu próprio estoque em tempo-real; Para analisar o giro de estoque antes de tomadas de decisões estratégicas e fundamentais para a rentabilidade da empresa e também pesquisa de preços e estoque.', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_tipo`
--

CREATE TABLE IF NOT EXISTS `sub_tipo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTipo` int(11) NOT NULL,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `sub_tipo`
--

INSERT INTO `sub_tipo` (`Id`, `IdTipo`, `Descricao`) VALUES
(1, 10, 'Frente de Caixa'),
(2, 10, 'Básico'),
(3, 10, 'Avançado'),
(4, 10, 'Rotinas Específicas'),
(5, 10, 'Outros Módulos '),
(6, 10, 'Módulos Customizáveis'),
(7, 10, 'Relatórios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_tipo2`
--

CREATE TABLE IF NOT EXISTS `sub_tipo2` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdSub_Tipo` int(11) NOT NULL,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `sub_tipo2`
--

INSERT INTO `sub_tipo2` (`Id`, `IdSub_Tipo`, `Descricao`) VALUES
(1, 1, 'Usuario'),
(2, 1, 'Produtos'),
(3, 1, 'Vendas'),
(4, 1, 'Caixa'),
(5, 1, 'Fiscal'),
(6, 1, 'Compras'),
(7, 1, 'Estoque'),
(8, 1, 'Financeiro'),
(9, 1, 'Outros Recursos'),
(10, 1, 'Pet Shop'),
(11, 1, 'Centro Automotivo'),
(12, 1, 'Magazine '),
(13, 1, 'Cobrança Bancária'),
(14, 1, 'Integração entre Lojas'),
(15, 1, 'e-Automac (Automac Móvel)'),
(16, 1, 'Integração com Loja Virtual'),
(17, 1, 'Importação de Tabela de Preços'),
(18, 1, 'Nota Fiscal de Importação (leitura dos dados da DI)'),
(19, 1, 'Clinica Veterinaria');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTela` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`Id`, `IdTela`, `Descricao`) VALUES
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
