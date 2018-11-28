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
             
             $query = $this->db->query('SELECT orders.sid, orders.oid, orders.nprintouts, orders.npcopies, 
             orders.clrprint, orders.laminate, orders.binding, orders.note, students.sid, students.fname, 
             students.lname, students.email, students.faculty, students.password 
             FROM orders 
             INNER JOIN students ON orders.sid=students.sid '); 
            //  $query = $this->db->get('order');  
             return $query;  
          }  
       }  
    ?>