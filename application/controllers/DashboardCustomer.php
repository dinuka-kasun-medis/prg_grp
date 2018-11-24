<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCustomer extends CI_Controller {

	public function index()
	{
		$this->load->view("common/header");
        $this->load->view("pages/DashboardCustomer");

	}

    public function jobcard()
    {

    }

	public function jobcard_process()
    {
        $this->load->library('form_validation');
        $this->load->database();

        $this->form_validation->set_rules(
            'faculty',
            'Faculty',
            'required'
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required'
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required'
        );

        $this->form_validation->set_rules(
            'cpassword',
            'Confirm Password',
            'required|matches[password]'
        );


        if($this->form_validation->run() == false){
            throw new Exception();
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $faculty = $_POST['faculty'];

        $this->load->database();
        $this->db->set("fname",$fname);
        $this->db->set("lname",$lname);
        $this->db->set("email",$email);
        $this->db->set("password",$password);
        $this->db->set("faculty", $faculty);
        if(!$this->db->insert("students")) throw new Exception();
    }
}
