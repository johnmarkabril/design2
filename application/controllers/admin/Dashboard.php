<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Dashboard',
			'title'		=> 	'Dashboard'
		);

		$this->load->view('admin/template_admin.php', $details);
	}

}