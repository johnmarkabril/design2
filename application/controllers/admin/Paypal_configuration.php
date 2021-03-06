<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_configuration extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Paypal_model');
        $this->load->model('Notification_model');
        $this->curpage = "Paypal Configuration";
    }

	public function index()
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$details = array (
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'		=> 	explode("|", $permis),
			'get_info_name'				=>	$this->Users_model->get_user_details($no_logsess),
			'get_notification'	=>	$this->Notification_model->get_notification(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows(),
			'get_paypal_account'	=>	$this->Paypal_model->get_paypal_account()
		);

		$data['content'] = $this->load->view('admin/settings/paypal_configuration.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	public function new_account()
	{
		$params = array (
			'NO'			=> 	'',
			'NAME'			=>	$this->session->userdata('log_sess')->NAME,
			'ACCOUNT_TYPE'	=>	$this->session->userdata('log_sess')->ACCOUNT_TYPE,
			'PAYPAL_EMAIL'	=>	$this->input->post('paypal_email'),
			'STATUS'		=>	'disabled'
		);
		$this->Paypal_model->insert_new_account($params);
	}

	public function update_account($no)
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;
		$details = array (
			'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_paypal_account'	=>	$this->Paypal_model->get_paypal_account(),
			'get_info_name'				=>	$this->Users_model->get_user_details($no_logsess),
			'get_spec_paypal'		=>	$this->Paypal_model->get_spec_paypal($no)
		);

		$data['content'] = $this->load->view('admin/settings/paypal_configuration.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}

	public function updated_account()
	{
		$paramsDisableAll = array (
			'NO'			=> 	'',
			'STATUS'		=>	'disabled'
		);
		$params = array (
			'NO'			=> 	'',
			'PAYPAL_EMAIL'	=>	$this->input->post('paypal_email'),
			'STATUS'		=>	$this->input->post('paypal_status')
		);

		if ( $this->input->post('paypal_status') == "disabled" ){
			$this->Paypal_model->update_paypal_account($params,$this->input->post('paypal_email'));
		}else{
			$this->Paypal_model->disable_all_enabled($paramsDisableAll);
			$this->Paypal_model->update_paypal_account($params,$this->input->post('paypal_email'));
		}
	}
}