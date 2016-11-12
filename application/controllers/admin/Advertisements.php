<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisements extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Advertisements',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'title'		=> 	'Advertisements'
		);

		$this->load->view('admin/template_admin.php', $details);
	}

}