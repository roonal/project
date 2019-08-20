<?php

class Sell_data_fetch_model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}

	public function display_records(){

		$query=$this->db->query("select * from new_sell");
		return $query->result();
	}

	public function display_specific_records(){

		$productid = $this->uri->segment(3);
		

		$query = $this->db->select('*')
	    ->from('new_sell')
	    ->where('product_id',$productid)
	    ->get();
		return $query->result();
		}
}