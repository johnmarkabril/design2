<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Grid extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Recipes_model');
        $this->load->model('Notification_model');
        $this->curpage = 'Product Grid';
    }

	public function index()
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$details = array (
			'curpage'	=> 	'Product Grid',
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'		=> 	explode("|", $permis),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_prod_sell'		=>	$this->Recipes_model->get_prod_sell(),
			'title'		=> 	'Product Grid'
		);

		$data['content'] = $this->load->view('admin/product/product_grid.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}