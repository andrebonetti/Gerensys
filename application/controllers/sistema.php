<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class sistema extends CI_Controller{
        
		public function index(){
            
        $this->output->enable_profiler(false);
            
        $implantacao                =   $this->Conteudo_model->get_where(10);  
        $manutencao                 =   $this->Conteudo_model->get_where(11);      
        $sistema                    =   $this->Conteudo_model->get_where(22);   
        $sistema_caracteristicas    =   $this->Conteudo_model->get_container(8);
        $objetivos                  =   $this->Conteudo_model->get_container(5); 
          
        $sistema_modulos            =   array();       
        $sistema_modulos_titulos    =   $this->Conteudo_model->get_modulos_titulos(); 
            
            foreach($sistema_modulos_titulos as $titulo){
                $sistema_modulo =  $this->Conteudo_model->get_modulos($titulo["Titulo"]);
                
                $sistema_modulos[$titulo["Titulo"]] = array();
                foreach($sistema_modulo as $modulo){ 
                    array_push($sistema_modulos[$titulo["Titulo"]],$modulo);
                }
            }
            
		/*--------------------------CONTENT----------------------------------*/
		$content = array("atual_page"               => "sistema"
                        ,"sistema"                  => $sistema
                        ,"sistema_caracteristicas"  => $sistema_caracteristicas
                        ,"implantacao"              => $implantacao
                        ,"manutencao"               => $manutencao
                        ,"sistema_modulos_titulos"  => $sistema_modulos_titulos
                        ,"sistema_modulos"          => $sistema_modulos
                        ,"objetivos"                => $objetivos );
		
		/*VIEW*/$this->load->template("sistema.php",$content);
            
	   }
    }