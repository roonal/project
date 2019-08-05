<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper("form");
	}
	
	public function index()
	
	{
<<<<<<< HEAD
		$this->load->view('shared/new_header.php');
		$this->load->view('register');
		$this->load->view('shared/footer.php');
=======
		
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('register.php');
		$this->load->view('shared/footer.php'); //loading footer view 

>>>>>>> 5d541120da90806605ea2ab8805790357aa8f28e
		
	}
	public function registration()
	{
		if(isset($_POST['register']))
		{
			$this->form_validation->set_rules('user_name','firstname','trim|required|min_length[3]|is_unique[member_details.username]');
			$this->form_validation->set_rules('user_email','email','trim|required|min_length[5]|valid_email|is_unique[member_details.email]');
			$this->form_validation->set_rules('user_password','password','trim|required|min_length[3]');
			$this->form_validation->set_rules('confirm_password','confirm password','trim|required|min_length[3]|matches[user_password]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				$data = array(
					'username' => $this->input->post('user_name'),
					'email' => $this->input->post('user_email'),
					// 'password' => $this->input->post('user_password'),
					'password' => password_hash($this->input->post('user_password'), PASSWORD_BCRYPT)
				);
				//inserting data into database table
				$this->db->insert('member_details',$data);
				$this->session->set_flashdata('success','<p class="alert alert-success">you are successfully registerd! Please login below</p>');
					redirect('Login_auth', 'refresh');
				
			}
		}
	}
	public function home()
	{
<<<<<<< HEAD
		$this->load->view('shared/new_header.php'); 
		$this->load->view('profile');
=======
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('profile.php');
>>>>>>> 5d541120da90806605ea2ab8805790357aa8f28e
		$this->load->view('shared/footer.php');
	}
	// logout
	public function logout()
	{
		
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}
	//reset password
	public function resetPsw()
	{
<<<<<<< HEAD
		$this->load->view('shared/new_header.php'); 
		$this->load->view('forgotPsw');
=======
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('forgotPsw.php');
>>>>>>> 5d541120da90806605ea2ab8805790357aa8f28e
		$this->load->view('shared/footer.php');
	
	}
	public function searchPsw()
	{
		if(isset($_POST['submit']))
		{
			$this->form_validation->set_rules('user_email','email','trim|required|min_length[5]|valid_email|is_unique[member_details.email]');
			if ($this->form_validation->run() == FALSE)
			{

				$this->session->set_flashdata('error','<p class="alert alert-danger"> Email not found.</p>');
				redirect(base_url('Auth/resetPsw'));

					
			}
		}
		
		else
		{

		}
	}
}