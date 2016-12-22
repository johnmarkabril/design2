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
		$stackPreviousYear = array();
		$stackPreviousUserActivity = array();
		$stackUserActivity = array();
		$stackTopItems = array();
		$stackCountItems = array();
		$stackProdItems = array();
		$polarArray = array();

		for ( $ctr = 0; $ctr < sizeof($month); $ctr++ ) {
			$ctrPrice = 0;
			$ctrPreviousPriceYear = 0;
			$ctrRow = 0;
			$ctrRowPrevious = 0;
			$ctrCount = 0;
			$ctrProdItem = "";

			$monthArr = $this->Purchaseproduct_model->get_gross_monthly($month[$ctr],$year);
			foreach ( $monthArr as $ma ) {
				$ctrPrice += $ma->PRICE;
			}
			array_push($stack, $ctrPrice);

			$previousYear = $this->Purchaseproduct_model->get_gross_monthly($month[$ctr],($year-1));
			foreach ( $previousYear as $py ) {
				$ctrPreviousPriceYear += $py->PRICE;
			}
			array_push($stackPreviousYear, $ctrPreviousPriceYear);

			$purchMod = $this->Purchaseproduct_model->activity_month($month[$ctr],$year);
			$ctrRow = $purchMod;
			$commMod = $this->Postcontent_model->activity_month($month[$ctr],$year);
			$ctrRow += $commMod;
			$postMod = $this->Postcontent_model->posted_activity_month($month[$ctr],$year);
			$ctrRow += $postMod;
			array_push($stackUserActivity, $ctrRow);

			$purchModPre = $this->Purchaseproduct_model->activity_month($month[$ctr],$year-1);
			$ctrRowPrevious = $purchModPre;
			$commModPre = $this->Postcontent_model->activity_month($month[$ctr],$year-1);
			$ctrRowPrevious += $commModPre;
			$postModPre = $this->Postcontent_model->posted_activity_month($month[$ctr],$year-1);
			$ctrRowPrevious += $postModPre;
			array_push($stackPreviousUserActivity, $ctrRowPrevious);

			$topItemsPerMonth = $this->Purchaseproduct_model->get_top_item($month[$ctr],$year);
			foreach ( $topItemsPerMonth as $ma ) {
				$ctrCount 		= 	$ma->CNT;
				$ctrProdItem 	= 	$ma->PRODUCT_NAME;
				array_push($stackCountItems, $ctrCount);
				array_push($stackProdItems, $ctrProdItem);
			}
			array_push($stackTopItems, $ctrCount);

		}

		for ($x = 0; $x < sizeof($stackCountItems); $x++ ) {

			$xasdf = array(
				"value" 	=>	$stackCountItems[$x],
				"color"		=>	"#a3e1d4",
				"highlight"	=>	"#1ab394",
				"label"		=>	$stackProdItems[$x]
			);
			array_push($polarArray, $xasdf);
		}

		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'year'						=>	$year,	
			'stack'						=>  $stack,
			'stackPreviousYear'			=>	$stackPreviousYear,
			'stackPreviousUserActivity'	=>	$stackPreviousUserActivity,
			'polarArray'				=>	$polarArray,
			'stackUserActivity'			=>	$stackUserActivity,
			'get_info_name'				=>	$this->Users_model->get_user_details($no_logsess),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> 	$this->Notification_model->get_all_notification_rows()
		);

		$data['content'] = $this->load->view('admin/reports/reports.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}
}