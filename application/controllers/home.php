<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url'); // loading url helper for extracting base url while using bootstrap
	}
	
	public function index()
	{
		$this->load->view('include/header.php');
		$this->load->view('home_view.php');
		$this->load->view('include/footer.php');
		

	}

	
}