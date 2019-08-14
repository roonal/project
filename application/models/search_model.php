<?php

class Search_model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}

	public function search_result($input_text){

		$data = $this->db->from('new_sell')
				->like('product_name',$input_text)
				->get();

		return $data->result();
	}
}