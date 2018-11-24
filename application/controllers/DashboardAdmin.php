<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller{

    public function index(){
        $this->load->view("common/header");
        $this->load->view('pages/DashboardAdmin');
        $this->load->view("common/footer");
    }

}

?>