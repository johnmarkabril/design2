<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');      
        $this->load->model('Recipes_model');  
        $this->load->model('Categories_model');  
        $this->load->model('Notification_model'); 
        $this->curpage = "Notification";
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
			'permission_cntnt'			=> explode("|", $permis),
			'get_notification'			=> $this->Notification_model->get_notification(),
			'get_info_name'				=>	$this->Users_model->get_user_details($no_logsess),
			'get_notification_all'		=> $this->Notification_model->get_notification_all(),
			'get_all_notification_rows'	=> $this->Notification_model->get_all_notification_rows()
		);

		$data['content'] = $this->load->view('admin/notification/notification_content.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}
}