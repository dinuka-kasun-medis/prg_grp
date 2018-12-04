<?php 
	class Pricelist_model extends CI_Model{
		function fetch_data(){
       
      		$q=$this->db->get('pricelist');
      		return $q;
    	}
		
	}
 ?>