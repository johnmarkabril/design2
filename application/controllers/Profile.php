<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
    }

	public function account($uname)
	{
		if ($this->session->userdata('log_sess') != null){
			$details = array (
				'specific_account'	=>	$this->Users_model->get_specific_data($uname),
				'curpage'			=>	'profile',
				'title'				=>	'Profile'
			);

			$this->load->view('template.php', $details);
		}else{
			$this->session->set_flashdata('attempt_open', 'This is my message');
			redirect('/');
		}
	}
}