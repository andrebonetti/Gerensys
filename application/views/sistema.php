<section class="sistema my-content">
    <div class="myContainer">
        
        <h1><?=$sistema["Titulo"]?></h1>
		
        <img class="print-1" src="<?=base_url('img/print_automac.jpg')?>" alt="sistema automacao comercial automac">
       
        <p><?=$sistema["Descricao"]?></p>
        
        <p class="titulo_container">Suas principais características são:</p>
            
        <ul>
        	<?php foreach($sistema_caracteristicas as $content){?>
                <li>
                    <img src="<?=base_url("img/check.png")?>" class="checklist" alt="lista objetvos manutencao sistema"> <?=$content["Descricao"]?>    
                </li>
            <?php } ?>
    	</ul>
        
        <p class="titulo_container">Homologado para as seguintes rotinas fiscais:</p>
            
        <ul>
        	<?php foreach($sistema_homologacao as $content){?>
                <li>
                    <img src="<?=base_url("img/check.png")?>" class="checklist" alt="lista objetvos manutencao sistema"> <?=$content["Descricao"]?>    
                </li>
            <?php } ?>
    	</ul>
        
        <?php /* <section class="ac-container">
						
            <!--MENU MED-->
            <div>
				<input id="ac-1" name="accordion-1" type="radio" checked />
				<label for="ac-1">Medida</label>                    
				<article class="ac-auto">
				   Usuario
Cadastro de usuários e senhas
Controle de permissão e bloqueios de acesso às rotinas operacionais
Produtos
Cadastro de produtos
Cadastro de códigos alternativos (possibilidade de vincular vários códigos para um mesmo produto).
Geração de códigos de barras para produtos sem código.
Produtos em promoções (diversas opções)
Recursos facilitados para manutenção nos cadastros de produtos.
Vendas
Cadastro de cliente.s
Parametrização de vendas (desconto, alterações, e etc.).
Vendas em dinheiro, cartão de crédito e débito.
Caixa
Controle da movimentação do Caixa: Saldo inicial, entradas por forma de pagamento e suprimentos, saídas por cancelamentos e sangrias.
Fiscal                   
				</article>
            </div>    
            
            <!--MENU CAT--> 
            <div>	
			     <input id="ac-2" name="accordion-1" type="radio" />
				 <label for="ac-2">Veículo</label>
				 <article class="ac-auto">
                     TESTE 2
				 </article>
            </div>
            
            <!--MENU CAT--> 
            <div>	
			     <input id="ac-3" name="accordion-1" type="radio" />
				 <label for="ac-3">Veículo</label>
				 <article class="ac-auto">
                     TESTE 3
				 </article>
            </div>
									
        </section>*/ ?>
                
 
       	<div class="modulos">
       	
            <p><?=$sistema["SubTitulo"]?></p>
            
            <section class="ac-container">
				
                <?php 
                $count_modulo = 0;
                $lista_modulos = array_keys($modulos);
                foreach($modulos as $modulo){?>
                    
                    <div>
                        <input id="ac-<?=$count_modulo?>" name="accordion-1" type="radio"/>
                        <label for="ac-<?=$count_modulo?>"><h2><?= $lista_modulos[$count_modulo] ?> </h2></label> 
                        <article class="ac-auto">
                            
                            
                            <?php 
                            $count_tipo = 0;
                            $lista_tipo = array_keys($modulo);                 
                            foreach($modulo as $tipo){?>

                                <?php if(count($tipo) > 0){?>
                                     
                                    <h3><?= $lista_tipo[$count_tipo] ?></h3>
                                    <?php foreach($tipo as $content){?>

                                        <p><?=$content["Descricao"]?></p>

                                    <?php } ?>

                                <?php  } ?>
                                
                                <?php if($count_modulo == 5){?>
                                    
                                    <?php if(($count_tipo >= 15)&&($count_tipo <= 17)){?>
                                        <h3><?php $lista_tipo[$count_tipo] ?></h3>
                                    <?php } ?>
                            
                                <?php } ?>
                            
                            <?php $count_tipo++; } ?>
                            
                        </article>
                    </div>
                
                <?php $count_modulo++; }  ?>        
                
            </section>    

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