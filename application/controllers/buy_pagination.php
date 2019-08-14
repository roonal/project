<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Buy_pagination extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$this->load->helper('url'); // loading url helper for the base url while using bootstrap
		$this->load->library('pagination');
		$this->load->model('pagination_model');
		$this->load->model("sell_data_fetch_model");
		
	}

	public function index(){

	// we can also do the following things as  like as  the comment section
		// $config = array();
  //      $config["base_url"] = base_url('buy_pagination/index');
  //      $config["total_rows"] = $this->pagination_model->record_count();
  //      $config["per_page"] = 8;  //  how many value to show per page 
  //      $config["uri_segment"] = 3;

       $config = [

       			'base_url' => base_url('buy_pagination/index'),
       			'per_page' => 8,
       			'total_rows' =>$this->pagination_model->record_count(),

       			'full_tag_open' => "<ul class='pagination '>",
       			'full_tag_close' => "</ul>",

       			'first_tag_open' => "<li>",
       			'last_tag_open' => "<li>",

       			'next_tag_open' => "<li>",
       			'prev_tag_open' => "<li>",

       			'next_link' => 'Next',
       			'prev_link' => 'Prev',

       			'num_tag_open' => "<li>",
       			'num_tag_close' => "</li>",

       			'first_tag_close' => "</li>",
       			'last_tag_close' => "</li>",
       			
       			'next_tag_close' => "</li>",
       			'prev_tag_close' => "</li>",
       			
       			'cur_tag_open' => "<li class='active'><span><a>",
       			'cur_tag_close' => "</span></a></li>",
       ];

       

       $this->pagination->initialize($config);

       $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; //this is for if the third segment doesn't contain any value then it will initialize with the zero value

       $data["authors"] = $this->pagination_model->fetch_table($config["per_page"], $page); // the two parameters is for limit and start, limit is provided by per page number whereas start is provided by the uri segement  mentioned above

       $data["links"] = $this->pagination->create_links();
       

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('buy.php');
		$this->load->view('pagination.php',$data);
		$this->load->view('shared/footer.php'); //loading footer view 

	}
}
