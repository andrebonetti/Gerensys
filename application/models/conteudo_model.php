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
        
    }