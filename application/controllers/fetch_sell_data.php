<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fetch_sell_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model("sell_data_fetch_model");
	}

	public function index(){

		$result["data"]=$this->sell_data_fetch_model->display_records();
		$this->load->view("sell_record_display",$result);
	}
}
