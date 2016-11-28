<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Category extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Categories_model');
        $this->load->model('Notification_model');
        $this->curpage = 'Product Category';
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_content'		=>	$this->Categories_model->get_all_content()
		);

		$data['content'] = $this->load->view('admin/product/product_category.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	public function new_category()
	{
		$params = array (
			'NO'		=> '',
			'CATNAME'	=>	$this->input->post('title'),
			'STATUS'	=>	$this->input->post('status')
		);

		$this->Categories_model->insert_new_categ($params);
	}
}