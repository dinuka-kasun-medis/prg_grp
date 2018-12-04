<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrintPDF extends CI_Controller{

    public function index(){
        // $this->load->view('pages/printPDF');
        $this->load->helper('download');
        if($this->uri->segment(3))
        {
            $data   = file_get_contents('./file_path/'.$this->uri->segment(3));
        }
        $name   = $this->uri->segment(3);
        force_download($name, $data);
    }

}

?>