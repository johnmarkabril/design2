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
    }

	public function index()
	{
		$details = array (
			'curpage'			=>	'Notification',
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'title'				=>	'Notification'
		);

		$data['content'] = $this->load->view('admin/notification/notification_content.php', $details, TRUE);
		$this->load->view('admin/template_admin.php', $details);
	}
}