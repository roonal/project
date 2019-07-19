<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper("form");//manual loading of the form helper

		$this->load->library("form_validation");
		//loading of form validation library

		$this->load->helper('url'); // loading url helper for extracting base url while using bootstrap and also for redirect function

		

		$this->load->library("session");
		//loading of session for flash messages after form submission

		$this->load->model('form_model');
		// loading the form model 
	}
	
	public function index()
	{
		$this->load->view('include/header.php');
		$this->load->view('home_view.php');
		$this->load->view('include/footer.php');
		

	}
	public function form_submission(){

		$this->form_validation->set_rules("txt_name","name", "required|min_length[6]|max_length[10]|is_unique[contact_form.name]");

		$this->form_validation->set_rules("txt_email","email", "required|is_unique[contact_form.email]");

		$this->form_validation->set_rules("txt_phone","phone", "required|is_unique[contact_form.phone]");

		$this->form_validation->set_rules("txt_message","message", "max_length[100]");

			if($this->form_validation->run()==FALSE){
				
				$this->session->set_flashdata("error","failed to create user");
				$this->index();

			}
			else{
			
			$data=$this->input->post();
			$data_array=array(
				"name" => $data["txt_name"],
				"email" => $data["txt_email"],
				"phone" => $data["txt_phone"],
				"message" => $data["txt_message"]
			);

			if ($this->form_model->insert_into_table($data_array)){

				$this->session->set_flashdata("success","Your form has been submitted successfully");
			 
			 	redirect('home/dashboard');
		} 
		else{
			$this->session->set_flashdata("error","failed to create user");
			$this->index();

		}

		}
	}

	public function dashboard(){
		$this->load->view('include/header.php');
		$this->load->view('include/footer.php');

		echo "<h1> Your fomr has been submitted sucessfully </h1>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<h1> Your fomr has been submitted sucessfully </h1>";
	}

	
}