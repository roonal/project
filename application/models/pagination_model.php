<?php

class pagination_model extends CI_Model{

	public function __construct(){
		parent::__construct();

		
	}

	public function record_count(){
		return $this->db->count_all("new_sell");
	}

	public function fetch_table($limit, $start){

		 $this->db->limit($limit, $start);

		$query = $this->db->get("new_sell");
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $datas[] = $row;
           }
           return $datas;
       }
       return false;
   }
}