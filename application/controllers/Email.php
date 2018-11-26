<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

    public function index(){
        
        $this->load->library('email');
        // $config['protocol']='smtp';
        // $config['smtp_host']='smtp.gmail.com';
        // $config['smtp_port']='465';
        // $config['smtp_timeout']='30';
        // $config['smtp_user']='ann.onimoslk@gmail.com';
        // $config['smtp_pass']='annonymosuk777';
        // $config['charset']='utf-8';
        // $config['newline']="\r\n";
        // $config['wordwrap'] = TRUE;
        // $config['mailtype'] = 'html';
        // $this->email->initialize($config);
        $this->email->from('ann.onimoslk@gmail.com', 'Site name');
        $this->email->to('dinuka.kasunds@gmail.com');
        $this->email->subject('Notification Mail');
        $this->email->message('Your message');
        $this->email->send();

        echo $this->email->print_debugger();
        
    }

}

?>