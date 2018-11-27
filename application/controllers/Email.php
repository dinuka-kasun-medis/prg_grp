<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

    public function index(){
        
        $this->load->library('email');
        $this->email->from('ann.onimoslk@gmail.com', 'Site name');
        $this->email->to('dinuka.kasunds@gmail.com');
        $this->email->cc('dinithchanuka22@gmail.com,asangisathsarani@gmail.com,sanduni93193@gmail.com');
        $data_id = $this->uri->segment(3);
        $this->email->subject('UCSC print Shop | No_reply');
        $this->email->message($data_id);
        $this->email->send();

        echo $this->email->print_debugger();
        
    }

}

?>