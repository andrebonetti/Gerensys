<?php
	class Conteudo_model extends CI_Model {
        
        function get(){
			return $this->db->get("conteudo")->result_array();
		}
        
        function get_container($IdContainer){
            /*WHERE*/$this->db->where("IdContainer",$IdContainer);  
            /*ORDER*/$this->db->order_by("Ordem", "ASC"); 
			return $this->db->get("conteudo")->result_array();
		}
		
		function get_where($id){
			/*WHERE*/$this->db->where("Id",$id);
			return $this->db->get("conteudo")->row_array();
		}
        
        function get_modulos($titulo){
            /*WHERE*/$this->db->where("IdContainer",10);  
            /*WHERE*/$this->db->where("Titulo",$titulo);  
            /*ORDER*/$this->db->order_by("Ordem", "ASC"); 
			return $this->db->get("conteudo")->result_array();
		}
        
        function get_modulos_titulos(){
            /*DISTINCT*/$this->db->distinct();
            /*SELECT*/$this->db->select("Titulo");
            /*WHERE*/$this->db->where("IdContainer",10);  
            /*ORDER*/$this->db->order_by("Titulo", "ASC"); 
			return $this->db->get("conteudo")->result_array();
		}
        
    }