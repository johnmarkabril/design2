<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Messages_model');
    }

	public function index()
	{
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
    	$user_data_logsess = $this->session->userdata['log_sess'];

		$details = array (
			'curpage'			=> 	'Message Detail',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'user_data_logsess' => 	$user_data_logsess,
			'get_all_content'	=>	$this->Messages_model->get_all_content($user_data_logsess->EMAIL),
			'get_num_rows_mess' =>	$this->Messages_model->get_all_numrows($user_data_logsess->EMAIL),
			'dateCom'			=>	$date,	
			'title'				=> 	'Message Detail'
		);

		// $data['content'] = $this->load->view('admin/message/inbox_content.php', $details, TRUE);
		$this->load->view('admin/template_admin.php', $details);
	}
}