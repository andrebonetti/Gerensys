<section class="artigos my-content">
    <div class="myContainer">
        
        <article class="<?=$artigo["Class"]?>">
            
            <?php if($artigo["Id"] == 6){ ?>
                <h1>Atendimento no Caixa</h1>
                       
                <h2>Rotinas Fáceis, Rápidas e Seguras</h2>
            <?php } else {?>
            
                <h1><?=$artigo["Titulo"]?></h1>

                <?php if($artigo["SubTitulo"] != ""){ ?>
                    <h2><?=$artigo["SubTitulo"]?></h2>
                <?php } ?>
            
            <?php } ?>
            
            <?php 
                $pasta_Imagem = "";
                if($artigo["IdContainer"] == 1){$pasta_Imagem = "Slide-Home";}
                if($artigo["IdContainer"] == 2){$pasta_Imagem = "Produtos-Integrados";} 
            ?>
            
            <?php
                $imagem_Descricao = "";
                if($artigo["Imagem_2"] != ""){$imagem_Descricao = "Imagem_2";}
                if(($artigo["Imagem_2"] == "")&&($artigo["Imagem"] != "")){$imagem_Descricao = "Imagem";}
            ?>
            
            <?php if($imagem_Descricao != "") { ?>
                <img src="<?=base_url("img/$pasta_Imagem/{$artigo[$imagem_Descricao]}")?>" alt="<?=$artigo["Tags"]?>">
            <?php } ?>
            
            <p><?=$artigo["Descricao"]?></p>
            
            <?php if($artigo["Id"] == 11){ ?>
            
                <?php foreach($objetivos as $objetivo){?>
                    <p class="objetivos"><img src="<?=base_url("img/check.png")?>" class="checklist"><?=$objetivo["Descricao"]?></p>
                <?php } ?>
                
                <br>
                <p><strong>Forma da Prestação de serviço:</strong></p>
	               <p>Atendimento telefônico, e-mail e conexão remota.</p>
                <p>Atendimento presencial, na impossibilidade de atendimento remoto (Opção I de Contrato)</p> 
            
            <?php } ?>
            
            <?= anchor("","Voltar à Página Principal",array("class"=>"btn btn-default"))?>
 
        </article>
        
        <aside>
            
            <h2>Destaques</h2>
            <ul>
                <?php foreach($conteudo_slide as $content){?>
                    <li class="<?=active_class($artigo_atual, $content["Id"])?>">
                        <?=anchor("artigos/Descricao/{$content["Id"]}",$content["Titulo"])?>                                 
                    </li>
                <?php } ?>
            </ul>
            
            <h2>Sistema</h2>
            <ul>
                <li class="<?=active_class($artigo_atual, $implantacao["Id"])?>"><?=anchor("artigos/Descricao/{$implantacao["Id"]}","Implantação",array("class"=>""))?></li>                               
                <li class="<?=active_class($artigo_atual, $manutencao["Id"])?>"><?=anchor("artigos/Descricao/{$manutencao["Id"]}","Manutenção",array("class"=>""))?></li>                               
            </ul>
                
            <h2>Produtos Integrados</h2>
            <ul>
                <?php foreach($produtos_integrados as $content){?>
                     <li class="<?=active_class($artigo_atual, $content["Id"])?>">
                        <?=anchor("artigos/Descricao/{$content["Id"]}",$content["Titulo"])?>                                 
                    </li>
                <?php } ?>
            </ul>
            
        </aside>
        
    </div>
</section>    