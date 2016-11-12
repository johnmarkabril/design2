<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_configuration extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Paypal Configuration',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'title'		=> 	'Paypal Configuration'
		);

		$this->load->view('admin/template_admin.php', $details);
	}

}