<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PriceListAdmin extends CI_Controller {
	public function index()
    {
        	$this->load->model("model_Price");

			$data['query']=$this->model_Price->getPrice();
			//print_r($data['query']);
			$this->load->view('common/header.php');
			$this->load->view('pages/priceList' ,$data);
			$this->load->view('common/footer.php');
    }

    public function update_data(){
    	$pid = $this->uri->segment(3);
    	$this->load->model("model_Price");
    	$data["query"] = $this->model_Price->update_price($pid);
    	//$data["fetch_data"] = $this->model_Price->fetch_data();
    	$this->load->view("forms/editPriceView" ,$data);

    }

}
