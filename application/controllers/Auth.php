<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper("form");
		$this->load->model('loginmodel');
	}
	
	public function index()
	
	{
		
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('register.php');
		$this->load->view('shared/footer.php'); //loading footer view
		
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
				$data = $this->security->xss_clean($data); // XSS Clean Data
				$result = $this->loginmodel->insert_into_users($data);
				if ($result)
				{
					$this->session->set_flashdata('success','<p class="alert alert-success">you are successfully registerd! Please login below</p>');
					redirect('Login_auth', 'refresh');
				}
			}
		}
	}
	public function home()
	{
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('profile.php');
		$this->load->view('shared/footer.php');
	}

	public function changePsw()
	{
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('newPsw.php');
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
		if(isset($_POST['search']))
		{
			$this->form_validation->set_rules('user_email','email','trim|required|min_length[5]|valid_email');
			if ($this->form_validation->run() == FALSE)
			{

				$this->session->set_flashdata('error_email','<p class="alert alert-danger"> the email and p.</p>');
				redirect(base_url('Auth/resetPsw'));
				
					
			}
			$email = $this->input->post('user_email');
			$response = $this->loginmodel->check_user_mail($email); // check if email exist
			if($response)
			{
				redirect(base_url('Auth/changePsw'));

			}
		}
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('forgotPsw.php');
		$this->load->view('shared/footer.php');	
	}
}