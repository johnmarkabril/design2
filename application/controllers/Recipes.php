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
        $this->load->model('Paypal_model');  
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
		
        $get_det = "";
        if ( !empty($this->session->userdata['log_sess']) ) {
            $get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
        } else {
            $get_det = $this->Users_model->get_user_details(null);
        }
        
        $details = array (
            'get_det'           =>  $get_det,
			'recipes_content'	=>	$this->Recipes_model->get_content($categ),
			'selectname'		=> 	$selectname
		);
		$data['content'] = $this->load->view('user/recipes/template_recipes.php', $details, TRUE);
		$data['curpage'] = "recipes";
		$data['title'] = "Recipes";
		$this->load->view('template.php', $data);
	}

	public function sell($no)
	{
		if ($this->session->userdata('account_type') == 'User')
		{
			$paypal_enable = $this->Paypal_model->get_paypal_enable();
			foreach ($paypal_enable as $pe) {
				$paypal_email = $pe->PAYPAL_EMAIL;
			}
		
	        $get_det = "";
	        if ( !empty($this->session->userdata['log_sess']) ) {
	            $get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
	        } else {
	            $get_det = $this->Users_model->get_user_details(null);
	        }
	        
	        $details = array (
	            'get_det'           =>  $get_det,
				'curpage'			=> 	'recipedetail',
				'title'				=> 	'Recipe Detail',
				'recipe_detail'		=> 	$this->Recipes_model->get_specific_prod_sell($no),
				'paypal_url'		=> 	'https://www.paypal.com/cgi-bin/webscr',
				'paypal_id'			=> 	$paypal_email
			);

			$data['content'] = $this->load->view('user/recipes/recipes_content.php', $details, TRUE);
			$data['curpage'] = "recipedetail";
			$data['title'] = "Recipe Detail";
			$this->load->view('template.php', $data);
		}else{
			redirect('/');
		}
	}
}