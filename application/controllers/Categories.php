<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');      
        $this->load->model('Recipes_model');        
        $this->load->model('Categories_model'); 
    }

	public function name($cat)
	{
		$details = array (
			// 'posted_content'	=>	$this->Postcontent_model->get_content(),get_content_cat
			'get_content_cat'			=>	$this->Postcontent_model->get_content_cat(),
			'popular_content'			=>	$this->Recipes_model->get_content_popular(),
			'categories_content'		=>  $this->Categories_model->get_content(),
			'curpage'			=>	'categories',
			'title'				=>	'Categories'
		);
		$data['content']	=	$this->load->view('user/categories/categories_content.php',$details,TRUE);
		$this->load->view('template.php', $data);
	}
}