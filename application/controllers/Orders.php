<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller{

    public function index(){
        $this->load->view("common/header");
        $this->load->view('pages/orders');
        $this->load->view("common/footer");
    }

}

?>