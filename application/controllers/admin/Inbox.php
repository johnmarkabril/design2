<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));

        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Messages_model');
        $this->curpage = "Inbox";
    }

	public function index()
	{
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
    	$user_data_logsess = $this->session->userdata['log_sess'];

		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'user_data_logsess' => 	$user_data_logsess,
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_all_content'	=>	$this->Messages_model->get_all_content($user_data_logsess->EMAIL),
			'get_num_rows_mess' =>	$this->Messages_model->get_all_numrows($user_data_logsess->EMAIL),
			'dateCom'			=>	$date
		);

		$data['content'] = $this->load->view('admin/message/inbox_content.php', $details, TRUE);
		$data['curpage'] = "Inbox";
		$data['title'] = "Inbox";
		$this->load->view('admin/template_admin.php', $data);
	}

	public function content($hash)
	{
		date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
    	$user_data_logsess = $this->session->userdata['log_sess'];

		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'user_data_logsess' => 	$user_data_logsess,
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_all_content'	=>	$this->Messages_model->get_all_content($user_data_logsess->EMAIL),
			'get_num_rows_mess' =>	$this->Messages_model->get_all_numrows($user_data_logsess->EMAIL),
			'get_spec_mess'		=>	$this->Messages_model->get_specific_mess($hash,$user_data_logsess->EMAIL),
			'dateCom'			=>	$date,	
		);

		$data['content'] = $this->load->view('admin/message/message_detail.php', $details, TRUE);
		$data['curpage'] = "Message Detail";
		$data['title'] = "Message Detail";
		$this->load->view('admin/template_admin.php', $data);
	}
}