<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function authenticate()
	{	
		$email = $this->input->post('email');
      	$password = $this->input->post('password');
		$query = $this->auth_model->validate($email, $password); 

		if ($query == FALSE)
		{			
			$this->session->set_flashdata('message', '<br/><p class="alert alert-danger">Login Failed !!!</p>');
			redirect('admin/login', 'refresh');
		}
		elseif($query == TRUE)
		{	
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}	
	}

	public function logout()
	{
		$this->session->sess_destroy();
	    redirect(base_url(''), 'refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */