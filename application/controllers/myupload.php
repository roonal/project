<?php
/**
 * 
 */
class myupload extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
			}


	public function my_upload_form(){

		$this->load->view("my_upload_form");



	}


	public function upload_my_files()
	{
		$config["upload_path"] = "./uploads/";
		$config["allowed_types"] = "jpg|png";

		$this->load->library("upload",$config);

		if ($this->upload->do_upload("file_upload"))
		 {
		 	$uploaded_data = $this->upload->data();
		 	echo "<h3>File ".$uploaded_data["file_name"]." has been uploaded successfully</h3>";
			
		}
		else{

			print_r($this->upload->display_errors());

		}

	}


}
?>