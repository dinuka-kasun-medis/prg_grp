<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	class OrderDetails extends CI_Controller {
		public function index(){
			$this->load->model("model_Order");

			$data['query']=$this->model_Order->getOrder();
			//print_r($data['query']);
			$this->load->view('common/header.php');
			$this->load->view('pages/orders' ,$data);
			$this->load->view('common/footer.php');
		}

		public function delete_data(){
			// $print_id = $this->uri->segment(3);

			$this->load->model("model_Order");
			$oid = $this->input->get('oid');
			$this->model_Order->delete_data($oid);
			redirect(base_url()."OrderDetails/deleted");
		}

		public function deleted(){
			$this->index();
		}

	}
