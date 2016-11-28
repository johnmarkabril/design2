<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_My_Site extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Aboutmysite_model');
        $this->load->model('Notification_model');
        $this->curpage = "About My Site";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_list'			=>	$this->Aboutmysite_model->get_list()
		);
		$data['content'] = $this->load->view('admin/settings/aboutmysite.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}