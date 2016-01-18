    <!-- SLIDE -->
    <div id="myCarousel" class="carousel slide slide-show" data-ride="carousel">
        
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
       
      <div class="carousel-inner" role="listbox">    
                       
          <?php 
            $countSlide = 0;
            foreach($conteudo_slide as $content){
                
                $countSlide++;  
                $status = "";

                if($countSlide == 1){$status = "active";}    
          ?>             
               <div class="item <?=$status?> <?=$content["Class"]?>">
                  <img src="<?=base_url("img/Slide-Home/{$content["Imagem"]}")?>" alt="<?=$content["Tags"]?>">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1><?=$content["Titulo"]?></h1>
                      <p class="descricao"><?=$content["SubTitulo"]?></p>
                        <p class="link"><?=anchor("artigos/Descricao/{$content["Id"]}","Leia Mais",array("class"=>"btn btn-lg btn-default","role"=>"button"))?></p>
                    </div> 
                  </div>
                </div>
          
          <?php } ?>
                        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        
    </div><!-- /.carousel -->
    
<section class="home my-content">
    
    <div class="myContainer">
        
        <!-- Produtos Integraveis --> 
        <div class="produtos-integraveis boxes">

            <?php foreach($produtos_integrados as $produto){?>
            
                <div class="box">
                    <?=anchor("artigos/Descricao/{$produto["Id"]}",
                    
                    "<div class='img_content'><img src='".base_url("img/Produtos-Integrados/{$produto["Imagem"]}")."' alt='Cobrança Bancária On-Line'></div>
                    
                    <h2>{$produto["Titulo"]}</h2>")?>
                    
                    <div class="descricao">
                        <p><?= word_limiter($produto["Descricao"], 25) ?></p>
                    </div>
                    
                    <?=anchor("artigos/Descricao/{$produto["Id"]}","Leia Mais",array("class"=>"btn btn-default leia-mais"))?>
                    
                </div>
            
            <?php } ?>
            
        </div>
        
        <div class="implantacao-manutencao">
        
            <div class="implantacao">
            
                <h2><?=$implantacao["Titulo"]?></h2>
                
                <p><?= word_limiter($implantacao["Descricao"],75)?><?=anchor("artigos/Descricao/{$implantacao["Id"]}","Leia Mais",array("class"=>""))?></p>
                     
            </div>
            
            <div class="manutencao">
                
                <h2><?=$manutencao["Titulo"]?></h2>
            
                <p><?=$manutencao["Descricao"]?></p>
            
                <h3>Objetivos</h3>
                
                <p><img src="<?=base_url("img/check.png")?>" class="checklist" alt="lista objetvos manutencao sistema"><?=$objetivos[0]["Descricao"]?></p>
                
                <p><img src="<?=base_url("img/check.png")?>" class="checklist" alt="lista objetvos manutencao sistema"><?=$objetivos[1]["Descricao"]?>...<?=anchor("artigos/Descricao/{$manutencao["Id"]}","Leia Mais",array("class"=>""))?></p>
                              
            </div>
            
        </div>

        <div class="sistema">
            
            <h2><?=$sistema["Titulo"]?></h2>
            
            <p><?=$sistema["Descricao"]?></p>
            
            <p>Suas principais características são:</p>
            
            <ul>
            <?php for($i = 0; $i < 5; $i++){?>
                <li>
                    <?=$sistema_caracteristicas[$i]["Descricao"]?>    
                </li>
            <?php } ?>
            </ul>
            
            <?=anchor("sistema/index","leia mais",array("class"=>"btn btn-default"))?>
            
        </div>
        
    </div>

</section>    