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
 
       	<div class="modulos">
       	
            <p><?=$sistema["SubTitulo"]?></p>
            
            <?php foreach($modulos as $modulo){?>
            
                <?php foreach($modulo as $tipo){?>
            
                    <?php foreach($tipo as $content){?>
                        
                        <?php var_dump($content) ?>
            
            <?php }}} ?>

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