<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDetails extends CI_Controller{


    public function index(){
        $this->load->database();  
		//load the model  
		$this->load->model('user');  
		//load the method of model  
		$data['h']=$this->user->select();  
        //return the data in view  
        $this->load->view("common/header");
		$this->load->view('pages/userDetails', $data); 
        // $this->load->view('pages/userDetails');
        $this->load->view("common/footer");
    }


}

?>

