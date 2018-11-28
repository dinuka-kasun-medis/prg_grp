<?php 
	class Model_Price extends CI_Model{
		function getPrice(){
       
      		$q=$this->db->get('pricelist');
      		return $q;
    	}
		
	}
 ?>