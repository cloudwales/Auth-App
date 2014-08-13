<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->load->view('admin/login/login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */