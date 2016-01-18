<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class clientes extends CI_Controller{
        
        /*--- DESCRICAO DO ARTIGO ---*/
		public function index($id = null){	
          
        /*----------------CONEXAO BANCO GERENSYS-------------------------*/    
        $host       = "gerensys.dyndns.org";
	    $database   = "gerensys";
		$user       = "root";
		$password   = "070396";
		
		$conexao = mysqli_connect($host,$user,$password,$database);
		
		/*----------------SELECT CLIENTES-------------------------*/  
		if($conexao)
		{
			$lista_atividade	= array();
			$lista_clientes		= array();
            $todos_clientes		= array();
			
			//LISTA TIPOS DE ATIVIDADES
			$select_atividades 	= "SELECT DISTINCT `ativid_web` FROM gerensys.clientes WHERE tipo_cli = 'Preferencial' AND ativid_web != '' ORDER BY ativid_web ";
			$atividades 		= mysqli_query($conexao, $select_atividades);
            	
			$cont = 0;		
			while($fetch = mysqli_fetch_row($atividades)){
					
				$atividade["Codigo"] 	    = $cont;
				$atividade["Nome"] 		    = converte_ascii($fetch[0],0);
                $atividade["NomeSQL"] 		= $fetch[0];
            				
				array_push($lista_atividade,$atividade);
				
				$cont++;
			}
			
			foreach ($lista_atividade as $atividade) {
				
				//CRIAR ARRAY DA ATIVIDADE
				$lista_clientes[$atividade["Nome"]]  = array();
				
				//SELECT CLIENTES DA ATIVIDADE
				$select_clientes 	= "SELECT `Codigo`, `n_fantasia`,`raz_social`,`data_cad`,`tipo_cli`, `ativid_web` FROM `clientes` WHERE tipo_cli = 'Preferencial' AND ativid_web='".$atividade["NomeSQL"]."' ORDER BY n_fantasia ";
				$clientes 			= mysqli_query($conexao, $select_clientes);
			
				while($fetch = mysqli_fetch_row($clientes)){
                    
					$lista_clientes[$atividade["Nome"]][$fetch[1]] = array();
					
					$lista_clientes[$atividade["Nome"]][$fetch[1]]["Codigo"] 		         = $fetch[0];
					$lista_clientes[$atividade["Nome"]][$fetch[1]]["NomeFantasia"] 	         = $fetch[1];
                    $lista_clientes[$atividade["Nome"]][$fetch[1]]["RazaoSocial"] 	         = $fetch[2];
                    $lista_clientes[$atividade["Nome"]][$fetch[1]]["DataCadastro"] 	         = dataMysqlParaPtBr($fetch[3]);
					$lista_clientes[$atividade["Nome"]][$fetch[1]]["TipoCliente"] 	         = $fetch[4];
					$lista_clientes[$atividade["Nome"]][$fetch[1]]["IdAtividadeWeb"] 	     = $atividade["Codigo"];
                    $lista_clientes[$atividade["Nome"]][$fetch[1]]["DescricaoAtividadeWeb"]  = converte_ascii($fetch[5],0);
                    
				}
								
			}                     
            
		}
		else {
			$msg = "Erro banco de dados.";
		}
                  
		/*--------------------------CONTEUDO PARA TELA-----------------------*/
		$content = array("atual_page" 		=> "clientes",
						"msg"				=> $msg = null,
						"lista_atividades"	=> $lista_atividade,
						"lista_clientes"	=> $lista_clientes);
		
		/*VIEW*/$this->load->template("clientes.php",$content);
            
	   }
    }