<?php 
  class Model_Order extends CI_Model{
    function getOrder(){
      //$this->db->select("print_id , stu_id ,faculty ,ammount ,no_of_page ,color ,e_date ,e_time ,state" );
      //$this->db->from('users');
      //$query =$this->db->get();
      //return 
      $q=$this->db->get('orders');
      return $q;
    }

    function delete_data($oid){

      $this->load->database();
      
      $this->db->where("oid" , $oid);
      $this->db->delete("orders");
      
    }
  }
 ?>