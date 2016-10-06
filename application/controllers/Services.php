<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Services_model');    
    }

	public function index()
	{
		$details = array (
			'services_content_db'	=>	$this->Services_model->get_services(),
			'curpage'				=>	'services',
			'servicesformat'		=>	'no',
			'title'					=>	'Services'
		);

		$data['content'] = $this->load->view('user/services/template_services.php',$details,TRUE);
		$this->load->view('template.php', $details);
	}

	public function format($no)
	{
		$details = array (
			'services_content_db'	=>	$this->Services_model->get_specific_services($no),
			'curpage'				=>	'services',
			'servicesformat'		=>	'yes'
		);

		$data['content'] = $this->load->view('user/services/template_services.php',$details,TRUE);
		$this->load->view('template.php', $details);
	}
}