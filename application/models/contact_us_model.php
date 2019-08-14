<?php

class contact_us_model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}

	public function insert_into_table($data_array){

		return $this->db->insert("contact_msg",$data_array);
	}
} 