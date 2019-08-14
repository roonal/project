<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->library("form_validation");
		// $this->load->helper('url');
		$this->load->model('loginmodel');
	}
	public function index()
	{
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('login');
		$this->load->view('shared/footer.php');
	}

	//reset password
	public function resetPsw()
	{

		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('forgotPsw.php');
		$this->load->view('shared/footer.php'); //loading footer view 
	}

	
	public function loginDo()
	{
		$this->form_validation->set_rules('user_email','email','trim|required|min_length[5]|valid_email');
		$this->form_validation->set_rules('user_password','password','trim|required|min_length[3]');
		
		if(isset($_POST['login']))
		{
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				$data = array(
					'email'=> $this->input->post('user_email'),
					'password' => $this->input->post('user_password')
				);

				$data = $this->security->xss_clean($data); // XSS Clean

				$result = $this->loginmodel->login($data);
		 
				if($result)
				{
						$login_data = array(
						'user_id' => $result['User_ID'],
						'email' => $result['email'], 
						'password' => $result['password'],
						'username' => $result['username'],
						// 'pro_pic' => $result['profile_pic_url'],
						// 'is_user_login' => TRUE
					);

					// $this->session->set_userdata($login_data);
					$this->session->set_userdata('user', $login_data);
					$this->session->set_flashdata('success','<p class="alert alert-success">login succesfull</p>');
					redirect('Auth/home');
				}
				else
				{
					// header('location:'.base_url().$this->index());
				$this->session->set_flashdata('error','<p class="alert alert-danger"> the email and password did not matched tyfghvb.</p>');
					$this->index();
					
				} 
				
			}
		}
	}
}