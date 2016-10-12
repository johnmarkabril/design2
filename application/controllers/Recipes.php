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
		$this->option(null);
	}

	public function option($categ = null)
	{
		$selectname = "Option --";

		if ($categ == "ascending"){
			$selectname = "Lowest to Highest Price";
		}else if ($categ == "descending"){
			$selectname = "Highest to Lowest Price";
		}else if ($categ == "alphabetical"){
			$selectname = "Alphabetically";
		}
		
		$details = array (
			'recipes_content'	=>	$this->Recipes_model->get_content($categ),
			'curpage'			=>	'recipes',
			'title'				=>	'Recipes',
			'selectname'		=> 	$selectname
		);
		$data['content'] = $this->load->view('user/recipes/template_recipes.php', $details, TRUE);
		$this->load->view('template.php', $data);
	}
}