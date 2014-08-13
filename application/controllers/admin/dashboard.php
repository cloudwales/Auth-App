<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Auth_model loaded in config/autoload.php
		// $this->output->enable_profiler(TRUE);
	}

	public function index()
	{	
		$this->auth_model->is_logged_in();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard/index');
		$this->load->view('admin/inc/footer');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */