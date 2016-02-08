<!DOCTYPE html>
<html lang="pt-br">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
             
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url("img/logo_shortcut.png")?>" title="" >
        <title> Gerensys- Automação Comercial </title>
                      
        <link rel="stylesheet" type="text/css" href="<?=base_url("css/bootstrap.css")?>">  
        <link rel="stylesheet" type="text/css" href="<?=base_url("css/style.css")?>">  
        <link rel="stylesheet/less" href="<?=base_url("less/style.less")?>">    
        
        <script src="<?=base_url("js/jquery-2.1.3.min.js")?>"></script>
        <script src="<?=base_url("js/bootstrap.js")?>"></script>
        <script src="<?=base_url("js/less.js")?>"></script>
        
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic,700' rel='stylesheet' type='text/css'>
        
        <!-- WEB MASTER TOOLS -->
        <meta name="google-site-verification" content="Zp5rA0JhPUWaNP9YwldLEOZ1WJX_-q-k1-9qgzfJHAI" />
        
        <!-- ANALYTICS -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-71716639-1', 'auto');
          ga('send', 'pageview');
        </script>
        
	</head>

	<body>
        
        <header>
            
            <div class="myContainer">
                
                <img src="<?=base_url("img/logo.png")?>" alt="Automacao Comercial Sistema Automac Gerensys">

                <nav>
                    <ul>
                        <li class="<?=active_class("home", $atual_page)?>">
                            <?=anchor("",
                                "Home"
                            )?>
                        </li>
                        <li class="<?=active_class("empresa", $atual_page)?>">
                            <?=anchor("empresa",
                                "Empresa"
                            )?>
                        </li>
                        <li class="<?=active_class("sistema", $atual_page)?>">
                            <?=anchor("sistema",
                                "Sistema"
                            )?>
                        </li>
                        <li class="<?=active_class("clientes", $atual_page)?>">
                            <?=anchor("clientes",
                                "Nossos Clientes"
                            )?>
                        </li>
                        <li>
                            <a href="" data-toggle="modal" data-target="#mdlContato">Contato</a>
                        </li>
                    </ul>
                </nav>
                
            </div>    

        </header>