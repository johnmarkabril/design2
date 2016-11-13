<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');  
        $this->load->model('Subscribe_model');   
        $this->load->model('Location_model');   
        $this->load->model('Purchaseproduct_model');   

    }
	public function account($uname)
	{
		if ($this->session->userdata('log_sess') != null){
			$details = array (
				'specific_account'	=>	$this->Users_model->get_specific_data($uname),
				'num_subscriber'	=>	$this->Subscribe_model->get_subscriber($uname),
				'get_location'		=>	$this->Location_model->get_location_place($uname),
				'num_posted'		=>	$this->Postcontent_model->posted_num_spec($uname),
				'num_purchased'		=>	$this->Purchaseproduct_model->purchased_num_spec($uname),
				'purchased'			=>	$this->Purchaseproduct_model->purchased_spec($uname),
				'postedcont'		=>	$this->Postcontent_model->posted_spec($uname),
				'curpage'			=>	'profile',
				'title'				=>	'Profile',
				'subscriber_ctr'	=>	'0'
			);

			$this->load->view('template.php', $details);
		}else{
			$this->session->set_flashdata('attempt_open', 'This is my message');
			redirect('/');
		}
	}

	public function uploadImage(){
        $uploadfile =  $_SERVER['DOCUMENT_ROOT']."/design2/public/img/".$_FILES["image"]["name"];
        // $tar
        move_uploaded_file($_FILES["image"]["name"], $uploadfile);
        // echo $uploadfile;
        // echo $tar;
    }

    public function addRecipe(){

    	date_default_timezone_set("Asia/Manila");
    	$date = date("F d, Y g:i A");

    	$params = array (
    		'NO'			=>	'',
    		'NAME'			=>	$this->session->userdata('log_sess')->NAME,
    		'USERNAME'		=>	$this->session->userdata('log_sess')->USERNAME,
    		'ACCOUNT_TYPE'	=>	$this->session->userdata('log_sess')->ACCOUNT_TYPE,
    		'TITLE'			=>	$this->input->post('title'),
    		'IMAGEURL'		=>	substr($this->input->post('imageName'), 12),
    		'DESCRIPTION'	=>	$this->input->post('descript'),
    		'DATE'			=>	$date,
    		'TEMPLATENAME'	=>	'design2',
    		'RECIPES'		=>	$this->input->post('recipe'),
    		'COMMAND'		=>	'FREE',
    		'PRICE'			=>	'',
    		'CATEGORIES'	=>	'CUPCAKES'
    	);
    	// print_r($params);
    	$this->Postcontent_model->insert_new_recipe_free($params);
    }

    // public function index(){
    // }
}