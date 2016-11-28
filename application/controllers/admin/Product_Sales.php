<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Sales extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Recipes_model');
        $this->curpage = "Product Sales";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_prod_sells'	=>	$this->Recipes_model->get_prod_sells()
		);

		$data['content'] = $this->load->view('admin/product/product_sales.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

}