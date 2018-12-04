<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

    public function index(){
        
        $this->load->library('email');
        $this->email->from('ann.onimoslk@gmail.com', 'UCSC | PrintShop');
        $back ='@gmail.com';
        $data_id = $this->uri->segment(3);
        $sentTo = $data_id.$back;
        $this->email->to($sentTo);
        // $this->email->cc('dinithchanuka22@gmail.com,asangisathsarani@gmail.com,sanduni93193@gmail.com');
        // $data_id = $this->uri->segment(3);
        $this->email->subject('UCSC print Shop | No_reply');
        $this->email->message('Your order started');
        $this->email->send();

        echo $this->email->print_debugger();
        
    }

}

?>