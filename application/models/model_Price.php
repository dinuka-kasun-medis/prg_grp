<?php 
	class Model_Price extends CI_Model{
		function getPrice(){
       
      		$q=$this->db->get('pricelist');
      		return $q;
    	}

    	function update_price($pid){
    		$this->db->where("pid" ,$pid);
    		$query = $this->db->get("pricelist");
    		return $query;
    	}
		
	}
 ?>