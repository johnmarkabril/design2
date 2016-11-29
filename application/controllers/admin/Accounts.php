<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->curpage = "Accounts";
    }

	public function index()
	{
    	date_default_timezone_set("Asia/Manila");
		$date = date("F");
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}

		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'		=> 	explode("|", $permis),
			'get_num_rows_all_user'		=>	$this->Users_model->get_num_rows_all_user(),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_num_rows_curmonth'		=>	$this->Users_model->get_num_rows_curmonth($date),
			'get_all_user'				=>  $this->Users_model->get_all_user()

		);

		$data['content'] = $this->load->view('admin/usermanagement/accounts.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}