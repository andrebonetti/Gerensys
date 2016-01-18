<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class home extends CI_Controller{
        
		public function index(){	
              
        $conteudo_slide             =   $this->Conteudo_model->get_container(1);      
        $produtos_integrados        =   $this->Conteudo_model->get_container(2);    
        $implantacao                =   $this->Conteudo_model->get_where(10);  
        $manutencao                 =   $this->Conteudo_model->get_where(11);    
        $objetivos                  =   $this->Conteudo_model->get_container(5);  
        $sistema                    =   $this->Conteudo_model->get_where(22);
        $sistema_caracteristicas    =   $this->Conteudo_model->get_container(8); 
            
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