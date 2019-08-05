<?php
defined('BASEPATH') OR exit('NO direct script allowed');

/**
 * 
 */
class Main extends CI_Controller
{
	
	public function index()
	{	
		$this->load->view("main_view");
}



	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
			}




	



	public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("product_name","product_name", 'trim|required');
		$this->form_validation->set_rules("product_desc","product_desc", 'required');
		$this->form_validation->set_rules("product_price","product_price", 'required');
		$this->form_validation->set_rules("product_negotiable","product_negotiable", 'required');
		$this->form_validation->set_rules("product_delivery","product_delivery", 'required');
		$this->form_validation->set_rules("product_delivery_charge","product_delivery_charge", 'required');
		$this->form_validation->set_rules("product_condition","product_condition", 'required');



		$this->form_validation->set_rules("product_seller_name","product_seller_name", 'required');
		
		$this->form_validation->set_rules("product_seller_email","product_seller_email", 'required');
		$this->form_validation->set_rules("product_image","product_image", 'required');
		$this->form_validation->set_rules("product_seller_contact","product_seller_contact", 'required');



		if($this->form_validation->run()==FALSE)
		{
			$this->index();
			
		}

		else
		{

		// 	$config["upload_path"] = "./uploads/";
		// $config["allowed_types"] = "jpg|png";

		// $this->load->library("upload",$config);

		// if ($this->upload->do_upload("image"))
		//  {
		//  	$uploaded_data = $this->upload->data();
		//  	echo "<h3>File ".$uploaded_data["file_name"]." has been uploaded successfully</h3>";
			
		// }
		// else{

		// 	print_r($this->upload->display_errors());

		// }




			if (!empty($_FILES['product_image']['name'])) {

				$config["upload_path"] = "./uploads/";
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['product_image']['name'];


				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('product_image')){
					$uploadData = $this->upload->data();
					$picture = $data['file_name'];
				}	
				else{
					$picture = '';
					echo "error";
				}



			}
			else{
				$picture = '';
				echo "error";
			}

			$this->load->model("main_model");
			
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
				"product_seller_contact" =>$data["product_seller_contact"],				
				"product_seller_email" =>$data["product_seller_email"],
				"product_image" =>$picture["product_image"]
				

			);
			$this->main_model->insert_data($data_array);
			redirect('main/dashboard');
		}
	}



	

	

	public function dashboard()
	{
		echo"<h1>Data has successfully submitted in Database</h1>";


		

	}

	
	
	

}
?>