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
		$this->load->view('login');
	}

	//reset password
	public function resetPsw()
	{
		$this->load->view('forgotPsw');
	
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
				// $this->load->library('session');

				// $email=$this->input->post('user_email');
				// // $password=password_hash($this->input->post('user_password'), PASSWORD_BCRYPT);
				// $password=$this->input->post('user_password');
				// $data = $this->loginmodel->login($email, $password);

				$data = array(
					'email' => $this->input->post('user_email'),
					'password' => $this->input->post('user_password')
				);

				$data = $this->security->xss_clean($data); // XSS Clean

				$result = $this->loginmodel->login($data);
		 
				if($data)
				{
					$this->session->set_userdata('user', $data);
					$this->session->set_flashdata('success','<p class="alert alert-success">login succesfull</p>');
					redirect('Auth/home');
				}
				else
				{
					// header('location:'.base_url().$this->index());
				$this->session->set_flashdata('error','<p class="alert alert-danger"> the email and password did not matched.</p>');
					$this->index();
					
				} 
				
			}
		}
	}
}