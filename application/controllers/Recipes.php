<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipes extends CI_Controller 
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
			'recipes_content'	=>	$this->Recipes_model->get_content(),
			'curpage'			=>	'recipes'
		);
		$data['content'] = $this->load->view('user/recipes/template_recipes.php', $details, TRUE);
		$this->load->view('template.php', $data);
	}


}