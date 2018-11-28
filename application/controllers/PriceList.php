<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceList extends CI_Controller{
    public function index(){

        $this->load->model('Common_model');
        $data["fetch_data"]=$this->Common_model->fetch_data();
        $this->load->view("common/header");
        $this->load->view('forms/PriceList',$data);
        $this->load->view("common/footer");
    }
}