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
        $this->load->model('Events_model');  
    }

	public function index()
	{
		$get_det = "";
		if ( !empty($this->session->userdata['log_sess']) ) {
			$get_det = $this->Users_model->get_user_details($this->session->userdata['log_sess']->USER_ID);
		} else {
			$get_det = $this->Users_model->get_user_details(null);
		}

		$details = array (
			'get_det'					=>  $get_det,
			'popular_content'			=>	$this->Recipes_model->get_content_popular(),   
			'get_content_active'		=>  $this->Aboutmysite_model->get_content_active(),
			'categories_content'		=>  $this->Categories_model->get_content(),
			'get_all_events'			=>  $this->Events_model->get_all_events()

		);

		$data['content']	=	$this->load->view('user/events/template_events.php', $details, TRUE);
		$data['curpage']	=	"events";
		$data['title']		=	"Events";
		$this->load->view('template.php', $data);
	}

}