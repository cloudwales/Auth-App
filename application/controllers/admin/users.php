<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/users/index');
		$this->load->view('admin/inc/footer');
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */