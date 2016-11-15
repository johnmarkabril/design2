<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_configuration extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->curpage = "Paypal Configuration";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION)
		);


		$data['content'] = $this->load->view('admin/settings/paypal_configuration.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}