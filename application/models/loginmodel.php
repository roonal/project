<?php
class loginmodel extends CI_model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	// public function login($email, $password)
	// {
	// 		$query = $this->db->get_where('member_details', array('email'=>$email, 'password'=>$password));
	// 		return $query->row_array();
	// }
	public function login($data)
	{
		$query = $this->db->get_where('member_details', array('email' => $data['email']));
		if ($query->num_rows() == 0){
			return false;
		}
		else{
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
		    $validPassword = password_verify($data['password'], $result['password']);
		    if($validPassword){
		        return $result = $query->row_array();
		    }

		}
	}



      
} 
?>