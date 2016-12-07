<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
    }

	public function index()
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$details = array (
			'curpage'	=> 	'Contacts',
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'		=> 	explode("|", $permis),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'title'		=> 	'Contacts'
		);

		$data['content'] = $this->load->view('admin/contacts/contacts', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}
}