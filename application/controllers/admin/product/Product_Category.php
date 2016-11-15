<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Category extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Categories_model');
    }

	public function index()
	{
		$details = array (
			'curpage'	=> 	'Product Category',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_content'		=>	$this->Categories_model->get_all_content(),
			'title'		=> 	'Product Category'
		);

		$data['content'] = $this->load->view('admin/product/product_category.php', $details, TRUE);
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