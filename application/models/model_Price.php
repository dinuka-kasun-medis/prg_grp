<?php 
	class Model_Price extends CI_Model{
		function getPrice(){
			$this->db->select("print_id , stu_id ,faculty ,ammount ,no_of_page ,color ,e_date ,e_time ,state" );
			$this->db->from('users');
			$query =$this->db->get();
			return 
			$q=$this->db->get('orders');
			return $q;
		}

		
	}
 ?>