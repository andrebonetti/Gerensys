<?php
	class Tipo_model extends CI_Model {
        
        function lista(){
			return $this->db->get("tipo")->result_array();
		}
        
        function lista_SubTipo($IdTipo = null){
            
            if($IdTipo != null)
            {
                /*WHERE*/$this->db->where("IdTipo",$IdTipo); 
            }
			return $this->db->get("sub_tipo")->result_array();
		}
        
        function lista_SubTipo2($IdSubTipo = null){
            
            if($IdSubTipo != null)
            {
                /*WHERE*/$this->db->where("IdSub_Tipo",$IdSubTipo); 
            }
			return $this->db->get("sub_tipo2")->result_array();
		}
        		
		function busca($id){
			/*WHERE*/$this->db->where("Id",$id);
			return $this->db->get("tipo")->row_array();
		}
        
    }