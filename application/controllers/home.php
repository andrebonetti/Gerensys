<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class home extends CI_Controller{
        
		public function index(){	
              
        $conteudo_slide             =   $this->Conteudo_model->lista_Tipo(1);      
        $produtos_integrados        =   $this->Conteudo_model->lista_Tipo(2);
        $objetivos                  =   $this->Conteudo_model->lista_Tipo(5);     
        $sistema_caracteristicas    =   $this->Conteudo_model->lista_Tipo(8);    
        $implantacao                =   $this->Conteudo_model->busca(10);  
        $manutencao                 =   $this->Conteudo_model->busca(11);            
        $sistema                    =   $this->Conteudo_model->busca(22);
                    
		/*--------------------------CONTENT----------------------------------*/
		$content = array(
                         "atual_page"               => "home"
                        ,"conteudo_slide"           => $conteudo_slide 
                        ,"produtos_integrados"      => $produtos_integrados
                        ,"implantacao"              => $implantacao
                        ,"manutencao"               => $manutencao
                        ,"objetivos"                => $objetivos 
                        ,"sistema"                  => $sistema
                        ,"sistema_caracteristicas"  => $sistema_caracteristicas
                        );
		
		/*VIEW*/$this->load->template("home.php",$content);
            
	   }
    }