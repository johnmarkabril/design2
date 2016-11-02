<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Postcontent_model');    
    }

	public function index()
	{
		$details = array (
			// 'posted_content'	=>	$this->Postcontent_model->get_content(),
			'curpage'			=>	'contacts',
			'title'				=>	'Contacts'
		);

		$this->load->view('template.php', $details);
	}
}