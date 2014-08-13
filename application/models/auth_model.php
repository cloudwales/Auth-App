<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	// Set the session
	public function validate($email, $password)
	{
		$sha_password = sha1($password);
	    $this->db->where('email', $email);
	    $this->db->where('password', $sha_password);
	    $this->db->where('active', 1);
		$this->db->where('admin', 1);
		$query = $this->db->get('users');

		if($query->num_rows == 1){
			return true;
		}else{
			return false;
		}
	}

	// Check if user is logged in or not
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			redirect('admin/login');
		}
	}

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */