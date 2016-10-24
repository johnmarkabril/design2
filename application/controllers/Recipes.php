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

	public function sell($no)
	{
		$details = array (
			'curpage'			=> 'recipedetail',
			'title'				=> 'Recipe Detail',
			'recipe_detail'		=> $this->Recipes_model->get_specific_prod_sell($no),
			'paypal_url'		=> 'https://www.sandbox.paypal.com/cgi-bin/webscr',
			'paypal_id'			=> 'johnmarkabril@gmail.com'
		);

		$data['content'] = $this->load->view('user/recipes/recipes_content.php', $details, TRUE);
		$this->load->view('template.php', $data);
	}
}