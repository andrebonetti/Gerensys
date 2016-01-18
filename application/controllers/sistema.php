<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class sistema extends CI_Controller{
        
		public function index(){
            
        $implantacao                =   $this->Conteudo_model->get_where(10);  
        $manutencao                 =   $this->Conteudo_model->get_where(11);      
        $sistema                    =   $this->Conteudo_model->get_where(22);   
        $sistema_caracteristicas    =   $this->Conteudo_model->get_container(8);
        $objetivos                  =   $this->Conteudo_model->get_container(5);    
                       
		/*--------------------------CONTENT----------------------------------*/
		$content = array("atual_page"                 => "sistema"
                        ,"sistema"                  => $sistema
                        ,"sistema_caracteristicas"  => $sistema_caracteristicas
                        ,"implantacao"              => $implantacao
                        ,"manutencao"               => $manutencao
                        ,"objetivos"                => $objetivos );
		
		/*VIEW*/$this->load->template("sistema.php",$content);
            
	   }
    }