<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');    
    }

	public function index()
	{
		$details = array 
		(
			'title' => "ASDF"
		);
		$this->load->view("template.php", $details);
	}
}