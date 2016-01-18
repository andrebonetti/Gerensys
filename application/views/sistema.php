<section class="sistema my-content">
    <div class="myContainer">
        
        <h1><?=$sistema["Titulo"]?></h1>
		
        <img class="print-1" src="<?=base_url('img/print_automac.jpg')?>" alt="sistema automacao comercial automac">
       
        <p><?=$sistema["Descricao"]?></p>
        
        <p>Suas principais características são:</p>
            
        <ul>
        	<?php foreach($sistema_caracteristicas as $content){?>
                <li>
                    <?=$content["Descricao"]?>    
                </li>
            <?php } ?>
    	</ul>
 
       	<div class="modulos">
       	
            <p><?=$sistema["SubTitulo"]?></p>

            <table class="no-phone">

                        <tr class="cab" >
                            <th class="rotulos titulo">Qual o Melhor Módulo do Sistema Para Você?</th>
                            <th class="frente">Frente de Caixa</th>
                            <th class="basico">Básico</th>
                            <th class="avancado">Avançado</th>
                        </tr>

                        <!--Frente de Caixa-->
                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de produtos</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de clientes</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Nota Fiscal Paulista</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de movimentação de caixa</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de usuários e suas permissões de uso</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <!--Básico-->
                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de serviços</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de fornecedores</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de transportadoras com vínculo ao cliente</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Emissão de etiquetas de gôndola, código de barras e mala direta</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Negociação de vendas por clientes e produtos (várias opções)</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Múltiplas tabelas de preços de venda</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Pedido de compra e recebimento de produtos</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Contas a pagar e receber</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Movimentação e controle de estoque</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Fórmulas de produção e desmembramento, operações automáticas e manuais</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de vendas a funcionários</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Recebimento de produtos através dos arquivos em XML</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Integração Consulta SERASA</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <!--Avançado-->
                        <tr class="line-1" >
                            <td class="rotulos">Emissão de Nota Fiscal Eletrônica de Vendas de Produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Emissão de Nota Fiscal Eletrônica de Serviços</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos"> Emissão de Nota Fiscal de Importação</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Inserção de fotos em cadastro de produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Envio de orçamentos, pedidos e tabelas de preços por e-mail</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de trocas de mercadorias com fornecedores</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle de despesas fixas e avulsas</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Fluxo de caixa</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cálculo de comissões</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle de depósitos bancários</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de devolução de cheque</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle especial das cotações em aberto</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle especial da expedição de produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Vendas e compras em consignação</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Exportação de dados para o SPED Fiscal</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                </table>      

            <!-- PHONE -->          
            <table class="only-phone">

                        <tr class="cab" >
                            <th class="rotulos titulo">Qual o Melhor Módulo do Sistema Para Você?</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="cab-phone"></td>
                            <td class="cab-phone"></td>
                            <td class="cab-phone"></td>
                        </tr>

                        <!--Frente de Caixa-->
                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de produtos</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de clientess</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Nota Fiscal Paulista</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de movimentação de caixa</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de usuários e suas permissões de uso</td>
                            <td class="ok-f"></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <!--Básico-->
                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de serviços</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Cadastro de fornecedores</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cadastro de transportadoras com vínculo ao cliente</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Emissão de etiquetas de gôndola, código de barras, mala direta</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Negociação de vendas por clientes e produtos (várias opções)</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Múltiplas tabelas de preços de venda</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Pedido de compra e recebimento de produtos</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Contas a pagar e receber</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de estoque</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Fórmulas de produção e desmembramento, operações automáticas e manuais</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de vendas a funcionários</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-1" >
                            <td class="rotulos">Recebimento de produtos através dos arquivos em XML</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Integração Consulta SERASA</td>
                            <td></td>
                            <td class="ok-b"></td>
                            <td class="ok-a"></td>
                        </tr>

                        <!--Avançado-->
                        <tr class="line-1" >
                            <td class="rotulos">Emissão de Nota Fiscal Eletrônica de Vendas de Produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Emissão de Nota Fiscal Eletrônica de Serviços</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos"> Emissão de Nota Fiscal de Importação</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Inserção de fotos em cadastro de produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Envio de orçamentos, pedidos e tabelas de preços por e-mail</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de trocas de mercadorias com fornecedores</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle de despesas fixas, avulsas e fluxo de caixa</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Cálculo de comissões</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle de depósitos bancárioso</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle de devolução de cheque</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Controle especial das cotações em aberto</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Controle especial da expedição de produtos</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                         <tr class="line-1" >
                            <td class="rotulos">Vendas e compras em consignação</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                        <tr class="line-2" >
                            <td class="rotulos">Speed Fiscal</td>
                            <td></td>
                            <td></td>
                            <td class="ok-a"></td>
                        </tr>

                </table>  

        </div>
        
        <h2><?=$implantacao["Titulo"]?></h2>
                
        <p><?=$implantacao["Descricao"]?></p>
                               
        <h2><?=$manutencao["Titulo"]?></h2>
            
        <p><?=$manutencao["Descricao"]?></p>
            
        <h3>Objetivos</h3>
        
        <?php foreach($objetivos as $content){?>
        
            <p><img class="check-objetivos checklist" src="<?=base_url("img/check.png")?>" alt="lista objetvos manutencao sistema"><?= $content["Descricao"] ?></p>
        
        <?php } ?>
            
        <h5>Forma da Prestação de serviço:</h5>
	    <p>Atendimento telefônico, e-mail e conexão remota.</p>
        <p>Atendimento presencial, na impossibilidade de atendimento remoto (Opção I de Contrato)</p>    
            
    </div>
</section>