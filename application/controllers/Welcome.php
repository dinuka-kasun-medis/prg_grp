<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function send($value=''){
		$this->load->library('email');
	}

	$config = array(
		'mailtype'=>"html"
	);
	
	$this->email->initialize($config);

	$this-> email ->from('dinuka.kasunds@gmail.com','Dinuka Kasun');

	$this->email->to('dinuka.kasunds@gmail.com');

	$this->email->cc('dinuka.kasunds@gmail.com');

	$this->email->subject('dinuka.kasunds@gmail.com');

	$this->email->message(
		str_replace("{contents}",
		$this->email_text(),
		$this->email_template()
	));

	$this->email->attach(FCPATH. 'document/test.pdf');

	if($this->email->send()){
		echo "Email send";
	}else{
		echo $this->email->print_debugger();
	}

	public function email_text(){
		return 'test email';
	}

	public function email_template(){
		$template.='{contents}';
	}

}
