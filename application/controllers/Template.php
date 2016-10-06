<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
        $this->load->model('Recipes_model');   
    }

	public function index()
	{
		$details = array (
			'posted_content'	=>	$this->Postcontent_model->get_content(),
			'recipes_content'	=>	$this->Recipes_model->get_content(),
			'curpage'			=>	'home',
			'title'				=>	'Home'
		);

		$data['content'] = $this->load->view('carouselimagescontent.php', $details, TRUE);
		$this->load->view('template.php', $data);
	}
}