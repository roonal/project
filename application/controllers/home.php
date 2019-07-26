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

	public function index1(){

		$this->load->view('shared/header.php'); //loading header view
		$this->load->view('shared/footer.php'); //loading footer view
		$this->load->view('dashboard/carousel.php');
		

	}

	public function index2(){
		$this->load->view('shared/test.php'); //loading header view
		$this->load->view('home_page.php');
		$this->load->view('shared/footer.php'); //
	}
}