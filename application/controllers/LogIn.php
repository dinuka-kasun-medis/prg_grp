<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {

	public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata("logged")) {
            echo "You are already logged in.";
            return;
        }
        {
            $this->load->view("common/header");
            $this->load->view("forms/SignIn");

        }
    }

    public function login_student(){
        $this->load->library('session');
        if($this->session->userdata("logged")){
            echo "You are already logged in.";
            return;
        }
        try{
            if(!isset($_POST['email']) || !isset($_POST['password'])) throw new Exception();

            $email = $_POST['email'];
            $password = $_POST['password'];

            $this->load->database();
            $this->db->select("password");
            $this->db->from("students");
            $this->db->where("email", $email);
            $query = $this->db->get();

            foreach($query->result() as $row){
                if($row->password == $password){
                    $this->load->library('session');
                    $this->session->set_userdata('logged', true);
                    $this->session->set_userdata('type', $row->type);
                    $this->session->set_userdata('user_id', $row->user_id);
                    $this->session->set_userdata('fname', $row->fname);
                    redirect(base_url("dashboard"), 'location');
                }
                break;
            }
            redirect(base_url("log-in")."?login=false", 'location');
        }
        catch(Exception $ex) {
            redirect(base_url("log-in")."?login=false", 'location');
        }

    }
}
