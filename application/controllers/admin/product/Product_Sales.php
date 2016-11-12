<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Sales extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Product Sales',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'title'		=> 	'Product Sales'
		);

		$this->load->view('admin/template_admin.php', $details);
	}

}