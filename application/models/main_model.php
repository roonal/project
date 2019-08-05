<?php


/**
 * 
 */
class Main_model extends CI_Model
{
	
	function test_main()
	{
		echo "This is a model function test";
	}



	function insert_data($data_array)
	{
		return $this->db->insert("new_sell", $data_array);
	}
}