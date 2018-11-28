<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobcard extends CI_Controller {


	public function job_add()
    {
        $this->load->library('form_validation');
        $this->load->database();

        $this->form_validation->set_rules(
            'job_num',
            'Job Number',
            'required'
        );

        $this->form_validation->set_rules(
            'printouts',
            'Number of Print Outs',
            'required'
        );

        $this->form_validation->set_rules(
            'photocopies',
            'Number of Photocopies',
            'required'
        );


        if($this->form_validation->run() == false){
            throw new Exception();
        }

        $job_num = $_POST['job_num'];
        $title = $_POST['title'];
        $printouts = $_POST['printouts'];
        $photocopies = $_POST['photocopies'];
        $color = $_POST['color'];
        $laminating = $_POST['laminating'];
        $binding = $_POST['binding'];
        $notes = $_POST['notes'];

        $this->load->database();
        $this->db->set("job_num",$job_num);
        $this->db->set("title",$title);
        $this->db->set("printouts",$printouts);
        $this->db->set("photocopies",$photocopies);
        $this->db->set("color",$color);
        $this->db->set("laminating", $laminating);
        $this->db->set("binding", $binding);
        $this->db->set("notes", $notes);
        if(!$this->db->insert("jobcard")) throw new Exception();
    }
}
