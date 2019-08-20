<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sell1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->library("session");

		$this->load->model("sell_model");
	}

	public function sell_page(){

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('sell.php');
		$this->load->view('shared/footer.php'); //loading footer view 

	}

	



	public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("product_name","product_name", 'required');
		$this->form_validation->set_rules("product_desc","product_desc", 'required');
		$this->form_validation->set_rules("product_price","product_price", 'required');
		$this->form_validation->set_rules("product_negotiable","product_negotiable", 'required');
		//$this->form_validation->set_rules("product_delivery","product_delivery", 'required');
		$this->form_validation->set_rules("product_delivery_charge","product_delivery_charge", 'required');
		$this->form_validation->set_rules("product_condition","product_condition", 'required');



		$this->form_validation->set_rules("product_seller_name","product_seller_name", 'required');
		
		$this->form_validation->set_rules("product_seller_email","product_seller_email", 'required');
		//$this->form_validation->set_rules("picture","image", 'required');
		$this->form_validation->set_rules("product_seller_contact","product_seller_contact", 'required');



		if($this->form_validation->run()==FALSE)
		{
			$this->sell_page();
			
		}

		else
		{

			if(!empty($_FILES['picture']['name'])){
				        $config['upload_path'] = 'uploads/';
				        $config['allowed_types'] = 'jpg|jpeg|png|gif';
				        $config['file_name'] = $_FILES['picture']['name'];

				        //Load upload library and initialize configuration
				        $this->load->library('upload',$config);
				        $this->upload->initialize($config);

				        if($this->upload->do_upload('picture')){
				            $uploadData = $this->upload->data();
				            $picture = $uploadData['file_name'];
				        }else{
				            $picture = '';
				            echo "error";
				        }
				    }
				    else{
				        $picture = '';
				        echo "errorr";
				    }
			
			
			
			

			$data_array=array(

				 "product_name" => $this->input->post("product_name"),
				 "product_desc" =>$this->input->post("product_desc"),
				 "product_price" =>$this->input->post("product_price"),
				"product_negotiable"=>$this->input->post("product_negotiable"),
				"product_delivery"=>$this->input->post("product_delivery"),
				"product_delivery_charge"=>$this->input->post("product_delivery_charge"),
				"product_condition"=>$this->input->post("product_condition"),

				
				
				"product_seller_name" =>$this->input->post("product_seller_name"),
				
				"product_seller_email" =>$this->input->post("product_seller_email"),
				"product_image" =>$picture,
				"product_seller_contact" =>$this->input->post("product_seller_contact"),
				"product_image" => $picture

			);

			$insertUserData = $this->sell_model->insert_into_table($data_array);

				    //Storing insertion status message.
				    if($insertUserData){
				        $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
				        redirect('sell1/sell_page');
				    }else{
				        $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
				        echo "errorrr";
				    }
			

			
		}
	}

}