<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Purchaseproduct_model');
        $this->load->model('Postcontent_model');
    }

	public function index()
	{
		$date_month = date("F");
		$date_year = date("Y");
		$comp_income = $this->Purchaseproduct_model->get_content();
		$ctr = 0;
		$cnt_am_pm = $this->Postcontent_model->activity_month($date_month);
		$cnt_am_pur = $this->Purchaseproduct_model->activity_month($date_month);

		foreach ($comp_income as $ci) {
			$ctr += $ci->PRICE;
		}
		
		$details = array (
			'curpage'				=> 	'Dashboard',
			'title'					=> 	'Dashboard',
			'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_content'			=>	$this->Purchaseproduct_model->get_content(),
			'get_num_content'		=>	$this->Purchaseproduct_model->get_num_content(),
			'user_activity'			=>	$this->Purchaseproduct_model->get_num_content() + $this->Postcontent_model->get_all_num_comment(),
			'gross_month'			=>	$this->Purchaseproduct_model->gross_month($date_month),
			'gross_year'			=>	$this->Purchaseproduct_model->gross_month($date_year),
			'activity_month'		=>	$cnt_am_pm + $cnt_am_pur,
			'get_income'			=>	$ctr,
			'gross_month_ctr'		=>	0,
			'gross_year_ctr'		=>	0,
			'activity_month_ctr'	=>	0
		);

		$data['content']	= 	$this->load->view('admin/dashboard/dashboard_mid.php', $details, TRUE);
		$data['content']	= 	$this->load->view('admin/dashboard/dashboard_top.php', $details, TRUE);
		$data['content']	= 	$this->load->view('common/navside_admin.php', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}
}