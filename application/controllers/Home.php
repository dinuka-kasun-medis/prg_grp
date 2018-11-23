<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('common/headerindex');

		$this->load->view('common/script.php');
		$this->load->view("pages/index");
		$this->load->view('common/footer.php');

	}

	
}
