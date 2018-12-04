<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('common/headerindex');
		$this->load->view("pages/index");
		// $this->load->view('common/footer.php');
		// $this->load->database();  
		// //load the model  
		// $this->load->model('user');  
		// //load the method of model  
		// $data['h']=$this->user->select();  
		// //return the data in view  
		// $this->load->view('pages/userDetails', $data);   

	}	
}
