<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintPriority extends CI_Controller{

    public function index(){
        // $this->load->database();
        // $this->load->model('printPriority'); 
        // $data['h']=$this->printPriority->select();
        // $this->load->view("common/header");
        // $this->load->view('pages/printPriority',$data);
        // $this->load->view("common/footer");


        $this->load->database();
        $this->load->model('order'); 
        $data['h']=$this->order->select();
        // $data2['h']=$this->user->select();
        $this->load->view("common/header");
        $this->load->view('pages/printPriority', $data);
        $this->load->view("common/footer");

    }

    // public function timeCal($time, $nPages){
    //     // $this->load->view("common/header");
    // }

}

?>