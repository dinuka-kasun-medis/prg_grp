<?php
    class Pricelist extends CI_Model{
        
        function fetch_data(){
            $query = $this->db->get("pricelist");
            return $query;
        }
    }
?>