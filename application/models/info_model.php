<?php
class Info_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function display_records()
	{
		
	$query=$this->db->query("select * from member_details");
	// var_dump($query);
	// die();
	foreach ($query->result_array() as $row)
{
        echo $row['UserID'];
        echo $row['username'];
        echo $row['email'];
}
die();
	}
	
} 
?>