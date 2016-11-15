<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->curpage = "Reports";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION)
		);

		$data['content'] = $this->load->view('admin/reports/reports.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}