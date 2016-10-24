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
		$comp_income = $this->Purchaseproduct_model->get_content();
		$ctr = 0;

		foreach ($comp_income as $ci) {
			$ctr += $ci->PRICE;
		}
		
		$details = array (
			'curpage'			=> 	'Dashboard',
			'title'				=> 	'Dashboard',
			'get_content'		=>	$this->Purchaseproduct_model->get_content(),
			'get_num_content'	=>	$this->Purchaseproduct_model->get_num_content(),
			'user_activity'		=>	$this->Purchaseproduct_model->get_num_content() + $this->Postcontent_model->get_all_num_comment(),
			'get_income'		=>	$ctr
		);

		$data['content']	= $this->load->view('admin/dashboard/dashboard_mid.php', $details, TRUE);
		$data['content']	= $this->load->view('admin/dashboard/dashboard_top.php', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}

}