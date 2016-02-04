<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class artigos extends CI_Controller{
        
        /*--- DESCRICAO DO ARTIGO ---*/
		public function Descricao($id){	
          
        /*----------------CONTEUDO DO BANCO DE DADOS-------------------------*/               
        $produtos_integrados    =   $this->Conteudo_model->get_tipo(2);  
        $conteudo_slide         =   $this->Conteudo_model->get_tipo(1); 
        $objetivos              =   $this->Conteudo_model->get_tipo(5);    
        $implantacao            =   $this->Conteudo_model->get_where(10);  
        $manutencao             =   $this->Conteudo_model->get_where(11);
        $artigos                =   $this->Conteudo_model->get_where($id);    
                     
		/*--------------------------CONTEUDO PARA TELA-----------------------*/
		$content = array("atual_page"           => "artigos"
                        ,"artigo_atual"         => $id 
                        ,"conteudo_slide"       => $conteudo_slide
                        ,"implantacao"          => $implantacao
                        ,"manutencao"           => $manutencao 
                        ,"artigo"               => $artigos
                        ,"objetivos"            => $objetivos  
                        ,"produtos_integrados"  => $produtos_integrados);
		
		/*VIEW*/$this->load->template("artigos.php",$content);
            
	   }
    }