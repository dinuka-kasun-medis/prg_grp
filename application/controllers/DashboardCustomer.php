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
        if(isset($_FILES['file'])){
            $errors= array();
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

            $expensions= array("pdf","doc");

            if(in_array($file_ext,$expensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"files/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }
    }

	public function process_add()
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
