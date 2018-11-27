<?php  
       class order extends CI_Model  
       {  
          function __construct()  
          {  
             // Call the Model constructor  
             parent::__construct();  
          }  
          //we will use the select function  
          public function select()  
          {  
             //data is retrive from this query 
             
             $query = $this->db->query('select * from students s, orders o where s.sid=o.sid');  
            //  $query = $this->db->get('order');  
             return $query;  
          }  
       }  
    ?>  