<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceList extends CI_Controller {
	public function index()
    {
        $this->load->model('pricelist');//change model name
        $data["fetch_data"]=$this->pricelist->fetch_data();
        $this->load->view('forms/PriceList',$data)
    }
}
