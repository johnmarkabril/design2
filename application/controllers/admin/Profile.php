<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Notification_model');
        $this->load->model('Aboutus_model');
        $this->load->model('Adminposted_model');
    }

	public function index()
	{
		redirect('admin');
	}

	public function username($uname)
	{
		$no_logsess = $this->session->userdata('log_sess')->USER_ID;

		$perm = $this->Users_model->get_permiss($no_logsess);
		$permis = "";
		foreach ($perm as $per) {
			$permis = $per->PERMISSION;
		}
		$details = array (
			'curpage'					=> 	'Profile',
			// 'permission_cntnt'		=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'permission_cntnt'			=> 	explode("|", $permis),
			'get_specific_data'			=>	$this->Users_model->get_specific_data($uname),
			'get_spec_about_user'		=>	$this->Aboutus_model->get_spec_about_user($uname),
			'get_notification'			=>	$this->Notification_model->get_notification(),
			'get_all_admin_posted'		=>	$this->Adminposted_model->get_all_admin_posted(),
			'get_all_notification_rows'	=>  $this->Notification_model->get_all_notification_rows(),
			'title'						=> 	'Profile'
		);

		$data['content'] = $this->load->view('admin/profile/profile', $details, TRUE);
		$this->load->view('admin/template_admin.php', $data);
	}

}