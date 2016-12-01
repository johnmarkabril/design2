<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Postcontent_model');
        $this->load->model('Purchaseproduct_model');
        $this->curpage = "Reports";
    }

	public function index()
	{
    	date_default_timezone_set("Asia/Manila");
    	$year = date("Y");
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$month = array ("January", "February", "March", "April", "May", "June", "July","August","September","October","November","December");

		$stack = array();
		$stackUserActivity = array();

		for ( $ctr = 0; $ctr <= sizeof($month)-1; $ctr++ ) {
			$ctrPrice = 0;

			$monthArr = $this->Purchaseproduct_model->get_gross_monthly($month[$ctr],$year);
			foreach ( $monthArr as $ma ) {
				$ctrPrice += $ma->PRICE;
			}
			array_push($stack, $ctrPrice);
		}

		for ( $ctr = 0; $ctr <= sizeof($month)-1; $ctr++ ) {
			$ctrRow = 0;
			$purchMod = $this->Purchaseproduct_model->activity_month($month[$ctr],$year);
			$ctrRow = $purchMod;
			$commMod = $this->Postcontent_model->activity_month($month[$ctr],$year);
			$ctrRow += $commMod;
			$postMod = $this->Postcontent_model->posted_activity_month($month[$ctr],$year);
			$ctrRow += $postMod;
			array_push($stackUserActivity, $ctrRow);
		}

		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'year'						=>	$year,	
			'stack'						=>  $stack,
			'stackUserActivity'			=>	$stackUserActivity,
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> 	$this->Notification_model->get_all_notification_rows()
		);

		$data['content'] = $this->load->view('admin/reports/reports.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	// public function testing()
	// {
 //    	date_default_timezone_set("Asia/Manila");
 //    	$year = date("Y");
	// 	print_r($this->Purchaseproduct_model->get_top_item('December',$year));
	// }
}