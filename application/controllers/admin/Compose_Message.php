<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compose_message extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Messages_model');
        $this->load->model('Notification_model');
        $this->curpage = "Compose Message";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'title'		=> 	'Compose Message'
		);

		$data['content'] = $this->load->view('admin/message/compose_message.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php',$data);
	}

	public function sent_message()
	{
    	date_default_timezone_set("Asia/Manila");
		$date = date("F d, Y");
		$dateTime = date("g:i A");
		$hash = $this->input->post('MessageComp') . $this->input->post('EmailTo') . $this->session->userdata('log_sess')->EMAIL . $this->session->userdata('log_sess')->NAME;
		$params = array(
			'NO'			=>		'',
			'SUBJECT'		=>		$this->input->post('SubjectComp'),
			'NAMEFROM'		=>		$this->session->userdata('log_sess')->NAME,
			'EMAILFROM'		=>		$this->session->userdata('log_sess')->EMAIL,
			'EMAILTO'		=>		$this->input->post('EmailTo'),
			'DATE'			=>		$date,
			'TIME'			=>		$dateTime,
			'BODYCONTENT'	=>		$this->input->post('MessageComp'),
			'DELETION'		=>		'0',
			'UNREAD'		=>		'0',
			'HASHNOEMAIL'	=>		md5($hash)
		);
		
		$this->Messages_model->insert_message($params);
		// print_r($params);
	}

}