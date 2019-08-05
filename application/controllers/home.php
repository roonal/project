<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();



		
		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		
	}

	public function index(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('home_page.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}


	public function about_us_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('about_us.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function help_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('help.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}


	public function contact_us_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('contact_us.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function whishlist_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('wishlist.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function cart_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('cart.php');
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

	public function product_description(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('product_desc.php');
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

}