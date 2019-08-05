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
<<<<<<< HEAD
		$this->load->view('login');
		$this->load->view('shared/footer.php');
		
=======
		$this->load->view('login.php');
		$this->load->view('shared/footer.php');
>>>>>>> 5d541120da90806605ea2ab8805790357aa8f28e
	}

	//reset password
	public function resetPsw()
	{
<<<<<<< HEAD
		$this->load->view('shared/new_header.php'); 
		$this->load->view('forgotPsw');
		$this->load->view('shared/footer.php');
=======
		$this->load->view('shared/new_header.php'); //loading header view
		$this->load->view('forgotPsw.php');
		$this->load->view('shared/footer.php'); //loading footer view 
	
>>>>>>> 5d541120da90806605ea2ab8805790357aa8f28e
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