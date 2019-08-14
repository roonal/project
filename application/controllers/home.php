<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");



		
		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->helper('form');
		
	}

	public function index(){

		$this->load->model("sell_data_fetch_model");
		$this->load->model('pagination_model');
		
		
		$result["data"]=$this->sell_data_fetch_model->display_records();
		//$this->load->view("sell_record_display",$result);
		
		$this->load->view('shared/new_header.php'); //loading header view
		// $this->load->view('home_page.php');
		 $this->load->view('dynamic_home_page.php',$result);
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function search_response(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('search_field','search','required');

		if(! $this->form_validation->run()){
			$this->index();
		}
		else{
			$input_text = $this->input->post('search_field');

			$this->load->model('search_model');

			$outcomes['data'] = $this->search_model->search_result($input_text);

			$this->load->view('shared/new_header.php'); //loading header view
			$this->load->view("search_result",$outcomes);
			$this->load->view('shared/footer.php'); //loading header view
		}
	}


	public function about_us_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('about_us.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	


	public function contact_us_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('contact_us.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}


	public function buy_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('buy.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function sell_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('sell.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	

	public function register_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('register.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}
	public function login_page(){
		// $data['layout'] = 'login';
		// $this->load->view('themes/layout', $data);

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('login.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function terms_condition(){
		// $data['layout'] = 'login';
		// $this->load->view('themes/layout', $data);

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('terms&condition.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

}