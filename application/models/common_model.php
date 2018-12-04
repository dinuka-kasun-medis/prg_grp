<?php
    if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Common_model extends CI_Model{
        
        function fetch_data(){
            $query = $this->db->get("pricelist");
            return $query;
        }
    }
?>
