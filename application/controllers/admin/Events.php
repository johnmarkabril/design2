<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));

        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Events_model');
        $this->curpage = "Events";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),

			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_all_events'	=>	$this->Events_model->get_all_events()
		);

		$data['content'] = $this->load->view('admin/settings/events.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	public function add_events()
	{
    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y");
		$params = array (
			'NO'			=>		"",
			'TITLE'			=>		$this->input->post('txt_events_title'),
			'DESCRIPTION'	=>		$this->input->post('txt_events_desc'),
			'DATE'			=>		$date,
			'NAME'			=>		$this->session->userdata('log_sess')->NAME,
			'DELETION'		=>		'0'
		);

		$this->Events_model->insert_events($params);
	}

	public function delete_events($no)
	{
		$spec_event = $this->Events_model->specific_events($no);

		foreach ( $spec_event as $se ) :
			$params = array (
				'NO'			=> $se->NO,
				'TITLE'			=> $se->TITLE,
				'DESCRIPTION'	=> $se->DESCRIPTION,
				'DATE'			=> $se->DATE,
				'NAME'			=> $se->NAME,
				'DELETION'		=>		'1'
			);
		endforeach;
		// print_r($params);
		$this->Events_model->delete_events($params,$no);
		redirect('admin/events');
	}
}