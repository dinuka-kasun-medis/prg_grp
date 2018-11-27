<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintPriority extends CI_Controller{

    public function index(){
        $this->load->view("common/header");
        $this->load->view('pages/printPriority');
        $this->load->view("common/footer");
    }

    public function timeCal($time, $nPages){
        // $this->load->view("common/header");
    }

}

?>