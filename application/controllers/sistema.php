<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class sistema extends CI_Controller{
        
		public function index(){
            
        $this->output->enable_profiler(false);
            
        $implantacao                =   $this->Conteudo_model->busca(10);  
        $manutencao                 =   $this->Conteudo_model->busca(11);      
        $sistema                    =   $this->Conteudo_model->busca(22);   
        $sistema_caracteristicas    =   $this->Conteudo_model->lista_Tipo(8);
        $sistema_homologacao        =   $this->Conteudo_model->lista_Tipo(9);
        $objetivos                  =   $this->Conteudo_model->lista_Tipo(5);
        $lista_tipos_modulos        =   $this->Tipo_model->lista_SubTipo(10);
        $lista_subtipos_modulos     =   $this->Tipo_model->lista_SubTipo2(1);    
               
        $modulos = array();  
            
            foreach($lista_tipos_modulos as $tipo){
            
                $modulos[$tipo["Descricao"]] = array();

                foreach($lista_subtipos_modulos as $subTipo){
                    
                    $modulos[$tipo["Descricao"]][$subTipo["Descricao"]] = array();
                    
                    $conteudo_modulo = array();
                    $conteudo_modulo = $this->Conteudo_model->lista_Tipo(10,$tipo["Id"],$subTipo["Id"]);
                
                    foreach($conteudo_modulo as $modulo){
                        array_push($modulos[$tipo["Descricao"]][$subTipo["Descricao"]],$modulo);
                    }
                    
                }
            }
            
		/*--------------------------CONTENT----------------------------------*/
		$content = array("atual_page"               => "sistema"
                        ,"sistema"                  => $sistema
                        ,"sistema_caracteristicas"  => $sistema_caracteristicas
                        ,"sistema_homologacao"      => $sistema_homologacao
                        ,"implantacao"              => $implantacao
                        ,"manutencao"               => $manutencao
                        ,"modulos"                  => $modulos
                        ,"objetivos"                => $objetivos );
		
		/*VIEW*/$this->load->template("sistema.php",$content);
            
	   }
    }