<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_Administrator extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Co-Administrator',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'title'		=> 	'Co-Administrator'
		);

		$this->load->view('admin/template_admin.php', $details);
	}

}