<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Model extends CI_Model
{
		//--------------------------------------------------------------------
		public function get_user_detail(){
			$id = $this->session->userdata('UserID');
			$query = $this->db->get_where('member_details', array('id' => $id));
			return $result = $query->row_array();
		}
		//--------------------------------------------------------------------
		public function update_user($data){
			$id = $this->session->userdata('UserID');
			$this->db->where('id', $id);
			$this->db->update('member_details', $data);
			return true;
		}
		//--------------------------------------------------------------------
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('member_details', $data);
			return true;
		}
}

	//-------------------------------------------------------
	// Get User detail
// 	public function get_user_by_id($id)
// 	{
// 		$query = $this->db->get_where('buysell', array('UserID' => $id));
// 		return $result = $query->row_array();
// 	}

// 	public function update_user($data,$id)
// 	{
// 		$this->db->where('UserID',$id);
// 		$this->db->update('member_details',$data);
// 		return true;
// 	}

// 	//-------------------------------------------------------
// 	// Checking Old password
// 	public function check_old_password($data,$id)
// 	{

// 		return 'working';
// 		$query = $this->db->get_where('xx_users' , array('id' => $id));
// 		$result = $query->row_array();

// 		echo $this->db->last_query();
// 		if ($result['password'] == $data['old_password']) {

// 			$this->db->where('id',$id);
// 			$this->db->update('xx_users',$data['password']);
// 			//return true;

// 		}else{
// 			//return false;
// 		}

// 	}


// 	//-------------------------------------------------------
// 	// Update New password
// 	public function update_password($data,$user_id)
// 	{
// 		$query = $this->db->get_where('member_details' , array('UserID' => $user_id));
// 		$result = $query->row_array();

// 		if ($result['password'] == $data['old_password']) {
// 			$this->db->where('UserID',$user_id);
// 			$this->db->update('member_details',array('password' => $data['password']));
// 			return true;
// 		}else{
// 			return false;
// 		}
		
// 	}


// }// endClass
?>