<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sell extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->library("session");

		$this->load->library('form_validation');
	}

	public function sell_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('sell.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}


	public function form_validation()
	{
		
		$this->form_validation->set_rules("product_name","name", 'required');
		$this->form_validation->set_rules("product_desc","name", 'required');
		$this->form_validation->set_rules("product_price","number", 'required');
		$this->form_validation->set_rules("product_negotiable","product_negotiable", 'required');
		$this->form_validation->set_rules("product_delivery","product_delivery", 'required');
		//$this->form_validation->set_rules("product_delivery_charge","number", 'required');
		$this->form_validation->set_rules("product_condition","product_condition", 'required');



		$this->form_validation->set_rules("product_seller_name","name", 'required');
		$this->form_validation->set_rules("product_seller_email","email", 'required');
		//$this->form_validation->set_rules("product_image","product_image", 'required');
		$this->form_validation->set_rules("product_seller_contact","number", 'required');



		if($this->form_validation->run()==FALSE)
		{
			$this->sell_page();
			
		}

		else
		{
			
			$this->load->model("sell_model");
			
			$data=$this->input->post();
			
			

			$data_array=array(

				 "product_name" =>$data["product_name"],
				 "product_desc" =>$data["product_desc"],
				 "product_price" =>$data["product_price"],
				"product_negotiable"=>$data["product_negotiable"],
				"product_delivery"=>$data["product_delivery"],
				"product_delivery_charge"=>$data["product_delivery_charge"],
				"product_condition"=>$data["product_condition"],

				
				
				"product_seller_name" =>$data["product_seller_name"],
				
				"product_seller_email" =>$data["product_seller_email"],
				"product_image" =>$data["product_image"],
				"product_seller_contact" =>$data["product_seller_contact"]

			);

			$this->sell_model->insert_into_table($data_array);
			$this->session->set_flashdata('success','<p class="alert alert-success">Successfully added your item to sell</p>');
			redirect('sell/sell_page');
		}
	}

}