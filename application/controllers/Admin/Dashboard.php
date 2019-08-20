<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->library("session");
	}

	public function adminPanel()
	{
		$this->load->view('Admin/tempelate.php');

	}
}