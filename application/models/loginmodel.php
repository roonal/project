<?php
class loginmodel extends CI_model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// registraion
	public function insert_into_users($data)
	{
		$this->db->insert('member_details',$data);
		return true;
	}

	// login function
	public function login($data)
	{
		$query = $this->db->get_where('member_details', array('email' => $data['email']));
		if ($query->num_rows() == 0){
			return false;
		}
		else
		{
			// var_dump("abcde");
			// die();
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
			// var_dump($data['password']);
			// var_dump($result['password']);
		    $validPassword = password_verify($data['password'], $result['password']);
		    // var_dump($validPassword);
		    // die();
		    if($validPassword)
		    {
		        return $result = $query->row_array();
		    }

		}
	}

	public function getUserinfo(){
			$id = $this->session->userdata('user_id');
			$query = $this->db->get_where('member_details', array('User_ID' => $id));
			return $result = $query->row_array();;;;;
			var_dump($result);
			die();
		}
			



	//============ Check User Email ============
    function check_user_mail($email)
    {
    	$result = $this->db->get_where('member_details', array('email' => $email));

    	if($result->num_rows() > 0){
    		$result = $result->row_array();
    		return $result;
    	}
    	else {
    		return false;
    	}
    }




      
} 
?>