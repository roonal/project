<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Buy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		

		
		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		
	}

	public function main_page(){

		

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('buy.php');
		$this->load->view('buy_main_page.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function secondary_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('buy_secondary_page.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function dynamic_main_page(){

		$this->load->model("sell_data_fetch_model");
		
		$result["data"]=$this->sell_data_fetch_model->display_records();
		//$this->load->view("sell_record_display",$result);

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('buy.php');
		$this->load->view('dynamic_buy_main_page.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function product_description(){

		$this->load->model("sell_data_fetch_model");
		
		$result["data"]=$this->sell_data_fetch_model->display_specific_records();
		$this->load->view("sell_record_display",$result);

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('product_desc.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}
}