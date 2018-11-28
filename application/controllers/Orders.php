<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Orders extends CI_Controller{
     public function index(){
        $this->load->database();
        $this->load->model('order'); 
        $data['h']=$this->order->select();
        // $data2['h']=$this->user->select();
        $this->load->view("common/header");
        $this->load->view('pages/orders', $data);
        $this->load->view("common/footer");
    }
 }
 ?>