<?php

class Test extends CI_Controller{

	
	public function sameer(){
		
		$this->load->view('login_view');
	}

	public function index1(){
		$this->load->view("sameer_view");
		$this->load->view("sameer_view1");


	}



	
}