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
        $this->load->model('Aboutmysite_model'); 
    }

	public function name($cat)
	{
		$get_det = "";
		if ( !empty($this->session->userdata['log_sess']) ) {
			$get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
		} else {
			$get_det = $this->Users_model->get_user_details(null);
		}
		
		$details = array (
			'get_det'					=>  $get_det,
			'get_content_cat'			=>	$this->Categories_model->get_categ($cat),
			'get_content_active'		=>  $this->Aboutmysite_model->get_content_active(),
			'popular_content'			=>	$this->Recipes_model->get_content_popular(),
			'categories_content'		=>  $this->Categories_model->get_content(),
			'curpage'			=>	'categories',
			'title'				=>	'Categories'
		);
		$data['content']	=	$this->load->view('user/categories/categories_content.php',$details,TRUE);
		$data['curpage']	=	"categories";
		$data['title']		=	"Categories";
		$this->load->view('template.php', $data);
	}
}