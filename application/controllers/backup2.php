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




	public function sameer()
	{
		$config["upload_path"] = "./uploads/";
		$config["allowed_types"] = "jpg|png";

		$this->load->library("upload",$config);

		if ($this->upload->do_upload("image"))
		 {
		 	$uploaded_data = $this->upload->data();
		 	echo "<h3>File ".$uploaded_data["file_name"]." has been uploaded successfully</h3>";
			
		}
		else{

			print_r($this->upload->display_errors());

		}

	}



	public function form_validation()
	{
		$this->load->library('form_validation');
		// $this->form_validation->set_rules("ad_name","ad_name", 'required|alpha');
		// $this->form_validation->set_rules("description","description", 'required');
		// $this->form_validation->set_rules("price","price", 'required');
		// $this->form_validation->set_rules("negotiability","negotiability", 'required');

		$this->form_validation->set_rules("first_name","First Name", 'required');
		$this->form_validation->set_rules("last_name","Last Name", 'required');
		// $this->form_validation->set_rules("email","email", 'required');
		$this->form_validation->set_rules("image","image", 'required');
		// $this->form_validation->set_rules("phone","phone", 'required');



		if($this->form_validation->run()==FALSE)
		{
			$this->index();
			
		}

		else
		{
			
			$this->load->model("main_model");
			
			$data=$this->input->post();
			
			

			$data_array=array(

				// "ad_name" =>$data["ad_name"],
				// "description" =>$data["description"],
				// "price" =>$data["price"],
				// "negotiability"=>$data["negotiability"],
				
				
				"first_name" =>$data["first_name"],
				"last_name" =>$data["last_name"],
				// "email" =>$data["email"],
				"image" =>$data["image"],
				// "phone" =>$data["phone"]

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