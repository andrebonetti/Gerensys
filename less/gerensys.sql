-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2015 às 02:08
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
  `Titulo` varchar(50) NOT NULL,
  `SubTitulo` text NOT NULL,
  `Imagem` varchar(30) NOT NULL,
  `Imagem_2` varchar(50) NOT NULL,
  `Descricao` text NOT NULL,
  `Tags` varchar(50) NOT NULL,
  `Class` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`Id`, `IdContainer`, `Titulo`, `SubTitulo`, `Imagem`, `Imagem_2`, `Descricao`, `Tags`, `Class`) VALUES
(1, 2, 'Cobrança Bancária On-Line', '', 'codigo_de_barras.png', '', 'Este módulo <strong>Cobrana Escritural</strong>, interage entre o <strong>Aplicativo de Cobrança dos Bancos</strong>\r\n                        e o sistema <strong>VISUAL AUTOMAC</strong>, enviando aequivos textos contendo os dados dos Boletos Bancários - \r\n                        e recebendo os arquivos de retorno "pagamentos efetuados". E, ao receber os arquivos de retorno, automaticamente \r\n                        as quitações dos titulos pagos, são efetuadas no sistema', 'Cobrança Bancária On-Line Boletos', ''),
(2, 2, 'Acesso ao CEP', '', 'correios.png', '', 'Este módulo <strong>Acesso ao CEP</strong>, interage entre o <strong>Cadastro de CEP dos Correios</strong> \r\n                        e o sistema <strong>VISUAL AUTOMAC</strong>, a fim de agilizar o cadastro de clientes e fornecedores, como também\r\n                        confirmar a veracidade do endereço.', 'Acesso CEP Correio Integração', ''),
(3, 2, 'E-Automac (Automac Móvel)', '', 'Mobile.png', '', 'Possibilita, mesmo a distância, o vendedor fazer um pedido de venda diretamento do estabelecimento do cliente com a possibilidade \r\n                        da sua empresa separar a mercadoria e emitir NF-e antes mesmo do vendedos se despedir do comprador. Para fazer um pedido de compra \r\n                        diretamente no fornecedor olhando para a realidade do seu próprio estoque em tempo-real, Para analisar o giro de estoque antes de \r\n                        tomadas de decisões estratégicas e fundamentais para a rentabilidade da empresa: Consulte-nos', 'Sistema Mobile', ''),
(4, 2, 'Sistema Mobile', '', 'Integracao.png', '', '    <strong>Automac Ingegração "on-line"</strong> - Permite interigar o banco de dados entre estabelecientos do grupo.\r\n                        Tem como caracteristicas: a unificação do cadastro de produtos, clientes e fornecedores; consulta em \r\n                        tempo real dos estoques; controle da utilização do limite de crédito -  considerando os movimentos \r\n                        em todas as unidades do grupo; controle de inadimplência - independente da origem; transferência de \r\n                        mercadorias com controle automático de estoques; atualização de preços nas filiais a partir da matriz.\r\n                    ', 'Integração Sistema', ''),
(5, 2, 'SAT-CF-e', '', 'SAT.png', '', 'O Automac etá em pleno atendimento dessa nova portaria!\r\n                    </p>\r\n                    <p>\r\n                        O SAT substituirá os emissores de cupons fiscais (ECFs) e será de uso obrigatório a partir de 1% de julho de 2015\r\n                        ,inicialmente por novos contribuintes, estabelecimentos comerciais cujos equipamentos ECF tenham 5 anos de uso, e por todos os\r\n                        postos de combustíveis que utilizam ECF. A legislação que trata do SAT-CF- está aprovada nacionalmente (Ajuste) SINIEF 11/2010) \r\n                        e a transição para o novo sistema, em São Paulo está prevista na Portaria CAT 147/2012.\r\n                    ', 'SAT FISCAL NOTA CF', ''),
(6, 1, 'Sistema de Automação Comercial - Automac', 'Atendimento no Caixa - Rotinas Fáceis, Rápidas e Seguras', 'Balcao_venda.jpg', '', 'As rotinas do Ponto de Venda (PDV), como, busca de itens, o cadastro ou a\r\n                          busca de clientes, as formas de pagamento, a autonomia dos operadores, os descontos, a identificação de vendedores\r\n                          a quitação de contas e outras operações, são configuradas atendendo a necessidade de cada empresa.</p>\r\n\r\n                          <p>O Controle de movimentação do Caixa é garantido e prático, \r\n                              e disponibiliza o detalhamento de todas as operações realizadas</p>\r\n\r\n                          <p>Atende a legislação da Transparência Tributária e <span class="destaque_sat">Sat-CF-e.</span>(Sistema Autenticador \r\n                              e transmissor de Cupom Fiscal Eletrônico', 'Sistema Automação Comercial Frente Caixa', 'slide-caixa'),
(7, 1, 'Pré-Venda - Pedido de Venda', 'Rotina Amigável e rica em informações para as negociações da venda.', 'Pedido_De_Venda.jpg', '', 'A rotina de pré-venda disponibiliza ao atendente informações rápidas sobre o produto/serviço, preços e estoque\r\n                      , bem como, seu prefil financeiro e histórico de compras anteriores</p>\r\n\r\n                        ', 'Pedido Venda Caixa Sistema', 'slide-prevenda'),
(8, 1, 'Pedidos de Venda por Telefone', 'Fáceis de serem negociados.', 'Venda_telefone.jpg', 'Venda_Telefone_Balcao.jpg', 'O sistem despõe de facilidades exclusivas para tendimento ao cliente, por telefone, \r\n                            além dos recursos ja descritos nas rotinas de pré-venda.', 'Balcao venda direta sistema', 'slide-telefone'),
(9, 1, 'Relatórios', 'Insdispensáveis no Gerenciamento.', 'relatorios_vendas.jpg', 'estrategias_relatorios_negocios.jpg', 'O sistem despõe de facilidades exclusivas para tendimento ao cliente, por telefone, \r\n                            além dos recursos ja descritos nas rotinas de pré-venda.', 'Relatorios estrategicos sistema negocios', 'slide-relatorios'),
(10, 3, 'Implantação', '', '', '', 'Como o Sistema Automac é Bem flexivel e dispões de muitas opções operacionais, seguimos um Guia de Implantação, elaborado em várias etapas, para facilitar o aprendizado e proporcionar uma implantação tranquila e com excelentes resultados.</p>\r\n\r\n<p>Todos os treinamentos são diretamente no ambiente do cliente, com dia e horarios previamente agendados.</p>\r\n\r\n<p>Não limitamos a quantidade de visitas para o período de implantação do sistema, pois temos o compromisso de seguir minuciosamente, cada item do guia, até finalizarmos a última etapa.</p>\r\n\r\n<p>Também elegemos um único profissional para realizar as tarefas de implantação do sistema do começo ao fim, evitado com isso o desencontro de informações, bem com a repetição de informações que são essenciais nesse período.</p>\r\n\r\n<p>Contamos com profissionais bem preparados, atenciosos e dispostos em fazer o melhor trabalho na implantação do sistema, sempre visando facilitar a vida de seus operadores', '', ''),
(11, 4, 'Manutenção', '', '', '', 'Concluído o período de implantação, propomos a continuidade do atendimento, através de Contrato de Manutenção do Sistema, para mantê-lo atualizado e eficaz. E, ressaltamos que, para um melhor aproveitamento do sistema, essa continuidade do nosso atendimento toma-se imprescindível.', '', ''),
(12, 5, '', '', '', '', 'Manter o sistema atualizado e virtude de modança legal, fiscal ou monetária', '', ''),
(13, 5, '', '', '', '', 'Efetuar atualização de versões decorrentes da evolução do sistema', '', ''),
(14, 5, '', '', '', '', 'Corrigir possíveis defeitos que possam ocorrer no sistema e que prejudicam o seu perfeito funcionamento', '', ''),
(15, 5, '', '', '', '', 'Assessorar os operadores na utilização do sistema', '', ''),
(16, 5, '', '', '', '', 'Dar treinamentos das implementações do sistema', '', ''),
(17, 5, '', '', '', '', 'Configurar e/ou, ajustar impressões de documentos', '', ''),
(18, 5, '', '', '', '', 'Executar instalações lógicas dos periféricos de automação comercial', '', ''),
(19, 5, '', '', '', '', 'Reinstalação do sistema', '', ''),
(20, 6, '', '', '', '', 'Atendimento telefônico, e-mail e conexão remota', '', ''),
(21, 6, '', '', '', '', 'Atendimento presencial, na impossibilidade de atendimento remoto;', '', ''),
(22, 7, 'Visual Automac', 'O sistema Visual Automac é uma excelente solução para micro e pequenas empresas de diversos segmentos terem total controle de seus negócios.', '', '', '', '', ''),
(23, 8, '', '', '', '', 'Parametrizável para moldar-se ao modo operacional da empresa', '', ''),
(24, 8, '', '', '', '', 'Simplicidade nas operações', '', ''),
(25, 8, '', '', '', '', 'Telas e legendas altamente explicativas', '', ''),
(26, 8, '', '', '', '', 'Bloqueios automáticos a clientes inadimplentes e das operações em desacordo aos critérios pré-estabelecidos', '', ''),
(27, 8, '', '', '', '', 'Controle seguro das ações dos operadores', '', ''),
(28, 8, '', '', '', '', 'Consulta facilitada das movimentações de clientes, de fornecedores, de produtos e serviços', '', ''),
(29, 8, '', '', '', '', 'Agilidade na localização dos produtos', '', ''),
(30, 8, '', '', '', '', 'Possui recurso para que os pontos de vendas continuem em funcionamento, mesmo quando a comunicação com o servidor for interrompida', '', ''),
(31, 8, '', '', '', '', 'Possibilita ao operador interromper momentaneamente uma tarefa, para ser continuada posteriormente', '', ''),
(32, 8, '', '', '', '', 'Gera códigos de barras EAN8 (controle interno)', '', ''),
(33, 8, '', '', '', '', 'O sistema disponibiliza uma série de relatórios gerenciais, os quais poderão ser personalizados', '', '');

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
