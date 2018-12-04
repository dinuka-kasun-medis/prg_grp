<?php
    class Main_model extends CI_Model{
        function fetch_data(){
            $query = $this->db->get("students");
            return $query;
        }
    }
?>