<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller 
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
		if ($this->session->userdata('log_sess')){
			$details = array (
				'curpage'			=>	'success',
				'title'				=>	'Purchased Success'
			);

			$data['content'] = $this->load->view('user/success/success.php', $details, TRUE);
			$this->load->view('template.php', $details);
		}else{
			$this->session->set_flashdata('attempt_open', 'This is my message');
			redirect('/');
		}
	}
}