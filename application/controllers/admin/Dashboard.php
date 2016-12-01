<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Purchaseproduct_model');
        $this->load->model('Notification_model');
        $this->load->model('Postcontent_model');
        $this->load->model('Calendarevents_model');
        $this->curpage = "Dashboard";
    }

	public function index()
	{
    	date_default_timezone_set("Asia/Manila");
		$date_month = date("F");
		$date_year = date("Y");
		$comp_income = $this->Purchaseproduct_model->get_content();
		$ctr = 0;

		$cnt_am_pm = $this->Postcontent_model->activity_month($date_month, $date_year);
		$cnt_am_pur = $this->Purchaseproduct_model->activity_month($date_month, $date_year);
		
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}

		foreach ($comp_income as $ci) {
			$ctr += $ci->PRICE;
		}
		
		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			// 'calevents'					=>  json_encode($this->Calendarevents_model->get_all_events()),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> 	$this->Notification_model->get_all_notification_rows(),
			'get_content'				=>	$this->Purchaseproduct_model->get_content(),
			'get_num_content'			=>	$this->Purchaseproduct_model->get_num_content(),
			'user_activity'				=>	$this->Purchaseproduct_model->get_num_content() + $this->Postcontent_model->get_all_num_comment(),
			'gross_month'				=>	$this->Purchaseproduct_model->gross_month($date_month),
			'gross_year'				=>	$this->Purchaseproduct_model->gross_month($date_year),
			'activity_month'			=>	$cnt_am_pm + $cnt_am_pur,
			'get_income'				=>	$ctr,
			'gross_month_ctr'			=>	0,
			'gross_year_ctr'			=>	0,
			'activity_month_ctr'		=>	0
		);

		$data['content']	= 	$this->load->view('admin/dashboard/dashboard_mid.php', $details, TRUE);
		$data['content']	= 	$this->load->view('admin/dashboard/dashboard_top.php', $details, TRUE);
		$data['content']	= 	$this->load->view('common/navside_admin.php', $details, TRUE);
		
		$data['content'] = $this->load->view('admin/dashboard/dashboard_detail.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = "Dashboard";
		$this->load->view('admin/template_admin.php', $data);
	}

	public function eventsCalendar()
	{
		$json_data =  json_encode($this->Calendarevents_model->get_all_events());
		// var_dump($json_data);
		echo $json_data;
	}

	public function insertEvents()
	{
		$params = array(
			'id'			=> '',
			'title'			=> $this->input->post('eventCal_title'),
			'description'	=> $this->input->post('eventCal_desc'),
			'color'			=> $this->input->post('eventCal_color'),
			'start'			=> $this->input->post('eventCal_start'),
			'end'			=> $this->input->post('eventCal_end'),
			'allday'		=> 'false'
		);
		$this->Calendarevents_model->insert_event($params);
	}
}