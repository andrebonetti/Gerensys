<?php 
    
    function url_exists($url) {

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return ($code == 200); // verifica se recebe "status OK"
        
    }
?>

<section class="clientes my-content">
    <div class="myContainer">
    	
    	<h1>Nossos Clientes</h1>
        
        <div class="only-phone"></div>
            
        <div class="lista_atividades no-phone">
                      
            <div class="atividade class-000">
                <button id="000" class="btn btn-default btnAtividade btnTodos active" >Todos</button>
            </div> 
                
            <?php foreach($lista_atividades as $atividade ){?>

                <div class="atividade class-<?=$atividade["Codigo"]?>">
                    <button id="<?=$atividade["Codigo"]?>" class="btn btn-default btnAtividade" ><?= /*character_limiter(*/$atividade["Nome"]/*, 8);*/?></button>
                </div>    
            
            <?php }	?>

        </div>
    	
        <div class="lista_clientes" id="por_atividade">
            <?php foreach($lista_clientes as $atividade ){?>
                             
                <?php foreach($atividade as $cliente){?>
            
                <?php $url = url_exists("http://gerensys.dyndns.org/site/clientes/logo_{$cliente["Codigo"]}.bmp")?>
            
                    <?php if($url == 1) {?>
                        <div class="cliente cliente_atual" name="clienteAtividade_<?=$cliente["IdAtividadeWeb"]?>">                       
                            <img src="http://gerensys.dyndns.org/site/clientes/logo_<?=$cliente["Codigo"]?>.bmp"  alt="<?=$cliente["DescricaoAtividadeWeb"]?>" title="<?=$cliente["RazaoSocial"]?> Cliente desde <?=$cliente["DataCadastro"]?> ">
                            <p><?= $cliente["NomeFantasia"]?></p>
                        </div>   
                    <?php }	else {?>
                        <div class="cliente cliente_atual sem-imagem" name="clienteAtividade_<?=$cliente["IdAtividadeWeb"]?>">                       
                            <p><?= $cliente["NomeFantasia"]?></p>
                        </div>  
                    <?php }	?>
            
                <?php }	?>
                   
            <?php } ?>
        </div>   
        
        <div class="lista_clientes" id="todos_clientes">
            
            <?php foreach($lista_clientes as $atividade ){?>
                           
                <?php 
                $cont = 0;                                          
                foreach($atividade as $cliente){?>
            
                    <?php if($cont == 0){ ?>
                        <h2><?=$cliente["DescricaoAtividadeWeb"]?></h2>
                    <?php } ?>
            
                    <?php $url = url_exists("http://gerensys.dyndns.org/site/clientes/logo_{$cliente["Codigo"]}.bmp") ?>
            
                    <?php if($url == 1) {?>
                        <div class="cliente">                       
                            <img src="http://gerensys.dyndns.org/site/clientes/logo_<?=$cliente["Codigo"]?>.bmp" alt="<?=$cliente["DescricaoAtividadeWeb"]?>" title="<?=$cliente["RazaoSocial"]?>, Cliente desde <?=$cliente["DataCadastro"]?>">
                            <p><?= $cliente["NomeFantasia"]?></p>
                        </div>   
                    <?php }	else {?>
                        <div class="cliente sem-imagem">                       
                            <p title="<?=$cliente["RazaoSocial"]?>"><?= $cliente["NomeFantasia"]?></p>
                         </div>  
                    <?php } ?>
      
            <?php
            $cont++;                                    
            }} 
            ?>
            
        </div>  
    	
    </div>
</section> 

<script src="<?=base_url("js/my_script-clientes.js")?>"></script>