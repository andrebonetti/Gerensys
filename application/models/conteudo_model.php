<?php
	class Conteudo_model extends CI_Model {
        
        function lista(){
			return $this->db->get("conteudo")->result_array();
		}
        
        function lista_Tipo($IdTipo,$IdSub_Tipo = null,$IdSub_Tipo2 = null){
            /*WHERE*/$this->db->where("IdTipo",$IdTipo); 
            
            if($IdSub_Tipo != null){
                /*WHERE*/$this->db->where("IdSub_Tipo",$IdSub_Tipo); 
            }
            if($IdSub_Tipo2 != null){
                /*WHERE*/$this->db->where("IdSub_Tipo2",$IdSub_Tipo2); 
            }
            
            /*ORDER*/$this->db->order_by("Ordem", "ASC"); 
			return $this->db->get("conteudo")->result_array();
		}
		
		function busca($id){
			/*WHERE*/$this->db->where("Id",$id);
			return $this->db->get("conteudo")->row_array();
		}
        
    }