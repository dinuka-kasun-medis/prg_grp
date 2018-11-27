<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

    public function index(){
        
        $this->load->library('email');
        $this->email->from('ann.onimoslk@gmail.com', 'Site name');
        $this->email->to('dinuka.kasunds@gmail.com');
        $this->email->cc('dinithchanuka22@gmail.com,asangisathsarani@gmail.com,sanduni93193@gmail.com');
        $this->email->subject('UCSC print Shop | No_reply');
        $this->email->message('Your order started to process it will take arround 30 mins \n Thank you.');
        $this->email->send();

        echo $this->email->print_debugger();
        
    }

}

?>