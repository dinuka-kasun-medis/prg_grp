<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderHistory extends CI_Controller{

    public function index(){
        $this->load->view("common/header");
        $this->load->view('pages/orderHistory');
        $this->load->view("common/footer");
    }

}

?>