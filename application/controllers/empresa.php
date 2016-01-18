<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class empresa extends CI_Controller{
        
		public function index(){	
                       
		/*--------------------------CONTENT----------------------------------*/
		$content = array("atual_page"  => "empresa");
		
		/*VIEW*/$this->load->template("empresa.php",$content);
            
	   }
    }