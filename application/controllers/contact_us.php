<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact_us extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");

		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->helper('form');
		
	}


public function index(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('contact_us.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	public function form_validation()
	{
		
		$this->form_validation->set_rules("name","name", 'required');
		$this->form_validation->set_rules("number","num", 'required');
		$this->form_validation->set_rules("email","email", 'required');
		$this->form_validation->set_rules("message","description", 'required');
		


		if($this->form_validation->run()==FALSE)
		{
			$this->index();
			
		}

		else
		{
			
			$this->load->model("contact_us_model");
			
			$data=$this->input->post();
		
			$data_array=array(

				 "name" =>$data["name"],
				 "number" =>$data["number"],
				 "email" =>$data["email"],
				"message"=>$data["message"]
				

			);

			$this->contact_us_model->insert_into_table($data_array);
			$this->session->set_flashdata('success','<p class="alert alert-success">Successfully submitted your message</p>');
			redirect('contact_us/index');
		}
	}

}