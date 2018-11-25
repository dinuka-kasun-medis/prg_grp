<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDetails extends CI_Controller{
    public function index(){

        $this->load->model('main_model');//change model name
        $data["fetch_data"]=$this->main_model->fetch_data();
        $this->load->view("common/header");
        $this->load->view('pages/userDetails',$data);
        $this->load->view("common/footer");
    }
}