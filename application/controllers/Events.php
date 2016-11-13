<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
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

	public function index()
	{
		$details = array (
			// 'posted_content'	=>	$this->Postcontent_model->get_content(),
			'popular_content'			=>	$this->Recipes_model->get_content_popular(),   
			'get_content_active'		=>  $this->Aboutmysite_model->get_content_active(),
			'categories_content'		=>  $this->Categories_model->get_content(),
			'curpage'			=>	'events',
			'title'				=>	'Events'
		);

		$this->load->view('template.php', $details);
	}
}