<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_My_Site extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Aboutmysite_model');
    }

	public function index()
	{
		$details = array (
			'curpage'			=> 	'About My Site',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_list'			=>	$this->Aboutmysite_model->get_list(),
			'title'				=> 	'About My Site'
		);
		$data['content'] = $this->load->view('admin/settings/about_my_site_left.php', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}

}