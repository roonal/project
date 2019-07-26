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

	
}