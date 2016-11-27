<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));

        $this->load->model('Users_model');
        $this->load->model('Events_model');
        $this->curpage = "Events";
    }

	public function index()
	{
		$details = array (
			'permission_cntnt'	=> 	explode("|", $this->session->userdata('log_sess')->PERMISSION),
			'get_all_events'	=>	$this->Events_model->get_all_events()
		);

		$data['content'] = $this->load->view('admin/settings/events.php', $details, TRUE);
		$data['curpage'] = $this->curpage;
		$data['title'] = $this->curpage;
		$this->load->view('admin/template_admin.php', $data);
	}
}