<?php 
	class OrderDetails extends CI_Controller {
		public function viewOrder(){
			$this->load->database();
			$this->load->model('orderdetails'); 
			$data['h']=$this->order->select();
			$this->load->view("common/header");
			$this->load->view('pages/orderHistory', $data);
			$this->load->view("common/footer");
		}

	}
 ?>