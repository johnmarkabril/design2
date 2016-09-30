<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login_email','Email','required');
		$this->form_validation->set_rules('login_password','Password','required');

		if($this->form_validation->run() == FALSE){
			redirect('/');
		}else{
			$c_email = set_value('login_email');
			$c_password = set_value('login_password');
			$valid = $this->Users_model->check_email_pass($c_email, $c_password);
			// print_r($valid);
			if($valid != false){
				$data = $this->session->set_userdata('log_sess',$valid);
				$this->session->set_flashdata('success_message', 'This is my message');
				redirect('/');
			}else{
				$this->session->set_flashdata('error_message', 'This is my message');
				redirect('/');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
}