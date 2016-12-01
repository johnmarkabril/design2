<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
		$this->session->set_flashdata('attempt_open', 'This is my message');
		redirect("/");
	}

	public function verify_email()
	{
		$email = $this->input->post('txt_forgot_email');

		$checkEmail = $this->Users_model->check_email($email);

		if ( $checkEmail != 0 ) {
			$params = array (
				'VERIFICATIONCODE'	=>	$this->input->post('codeRand')
			);
			$this->Users_model->updateVerificationforgot($params, $email);
		}
		echo $checkEmail;
	}

	public function verify_code()
	{
		$email = $this->input->post('txt_forgot_email');
		$code = $this->input->post('txt_forgot_verify');

		$checkCode = $this->Users_model->checkCode($code, $email);

		if ( $checkCode != 0 ) {
			$params = array (
				'VERIFICATIONCODE'	=>	""
			);
			$this->Users_model->updateVerificationforgot($params, $email);
		}
		echo $checkCode;
	}

	public function change_password()
	{
		$email 		= $this->input->post('txt_forgot_email');
		$password 	= $this->input->post('txt_forgot_password');

		$params = array (
			'PASSWORD'	=>	md5($password)
		);

		$this->Users_model->updateVerificationforgot($params, $email);
	}
}